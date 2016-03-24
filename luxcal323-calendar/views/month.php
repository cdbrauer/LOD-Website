<?php
/*
= month view of events =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.

The LuxCal Web Calendar is free software: you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software Foundation, 
either version 3 of the License, or (at your option) any later version.

The LuxCal Web Calendar is distributed in the hope that it will be useful, but WITHOUT 
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with the LuxCal 
Web Calendar. If not, see: http://www.gnu.org/licenses/.
*/

function showGrid($date) {
	global $evtList, $privs, $set, $xx, $rxULink;
	if (!array_key_exists($date, $evtList)) { return; }
	$showDetails = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1));
	foreach ($evtList[$date] as $evt) {
		$mayCheck = ($privs > 3 or ($privs > 1 and $evt['uid'] == $_SESSION['uid'])) ? true : false;
		switch ($evt['mde']) { //multi-day event?
			case 0: $time = ITtoDT($evt['sti']); break; //no
			case 1: $time = (($evt['sti'] != '00:00' and $evt['sti'] != '') ? ITtoDT($evt['sti']) : '&bull;').'&middot;&middot;&middot;'; break; //first
			case 2: $time = '&middot;&middot;&middot;'; break; //in between
			case 3: $time = '&middot;&middot;&middot;'.(($evt['eti'] < '23:59' and $evt['eti'] != '') ? ITtoDT($evt['eti']) : '&bull;'); //last
		}
		$chBox = '';
		if ($evt['cbx']) {
			$chBox .= strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;';
			$cBoxAtt = $mayCheck ? "class='chkBox floatL point' onclick=\"checkE({$evt['eid']},'{$date}');\" title=\"{$xx['vws_check_mark']}\"" : 'class="chkBox floatL arrow"';
			$chBox = "<span {$cBoxAtt}>{$chBox}</span>";
		}
		if ($set['popBoxMonth'] and $set['popBoxFields']) {
			$popText = "<b>{$time}".((!$evt['mde'] and $evt['eti']) ? ' - '.ITtoDT($evt['eti']) : '')." {$evt['tit']}</b><br>";
			if ($showDetails or $evt['mayE']) {
				$popText .= makeE($evt,$set['popBoxFields'],'br','<br>');
			}
			$popText = htmlspecialchars(addslashes($popText));
			$popClass = ($evt['pri'] ? 'private' : 'normal').(($evt['mde'] or $evt['r_t']) ? ' repeat' : '');
			$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}')\"";
		} else {
			$popAttr = '';
		}
		if ($set['eventColor']) {
			$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
		} else {
			$eStyle = $evt['uco'] ? "background-color:{$evt['uco']};" : '';
		}
		if ($evt['app'] and !$evt['apd']) { $eStyle .= 'border-left:2px solid #ff0000;'; }
		$eStyle = $eStyle ? ' style="'.$eStyle.'"' : '';
		echo "<div class='event'{$eStyle}>\n";
		echo "<div>{$chBox}<span ".(($showDetails or $evt['mayE']) ? "class='evtTitle point' onclick=\"editE(".$evt['eid'].",'".$date."');\"" : "class='evtTitle arrow'").$popAttr.">{$time} {$evt['tit']}</span></div>\n";
		if ($set['showLinkInMV'] and preg_match_all($rxULink, $evt['des'].$evt['xf1'].$evt['xf2'], $urls, PREG_SET_ORDER)) { //display URL links
			echo "<div>";
			foreach ($urls as $url) { echo $url[0]."<br>"; }
			echo "</div>\n";
		}
		echo "</div>\n";
	}
}

//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //launch via script only

//initialize
$cD = $_SESSION['cD'];
$cYear = intval(substr($cD,0,4));
$cMonth = intval(substr($cD,5,2));
$cDay = intval(substr($cD,8,2));
if ($set['weeksToShow'] < 2) { //single month
	$tfDay = mktime(12,0,0,$cMonth,1, $cYear); //Unix time of 1st day of the month
	$prevDate = date("Y-m-d", mktime(12,0,0,$cMonth-1,1, $cYear)); //1st of prev. month
	$nextDate = date("Y-m-d", mktime(12,0,0,$cMonth+1,1, $cYear)); //1st of next month

	/* determine total number of days to show, start date, end date */
	$sOffset = ($set['weekStart']) ? date("N", $tfDay) - 1 : date("w", $tfDay); //offset first day
	$eOffset = date("t", $tfDay) + $sOffset; //offset last day
	$totDays = ($eOffset == 28) ? 28 : (($eOffset > 35) ? 42 : 35); //4, 5 or 6 weeks

	$st = $tfDay - $sOffset * 86400; //start time
	$et = $st + ($totDays - 1) * 86400; //end time
	$sDate = date("Y-m-d", $st);
	$eDate = date("Y-m-d", $et);
	$header = '<span class="viewHdr">'.makeD($cD,3).'</span>';
} else {
	$tcDate = mktime(12,0,0,$cMonth,$cDay,$cYear); //Unix time of cD
	$jumpWeeks = $set['weeksToShow'] - intval($set['weeksToShow']*0.5) + 1;
	$prevDate = date("Y-m-d", $tcDate - $jumpWeeks * 604800);
	$nextDate = date("Y-m-d", $tcDate + $jumpWeeks * 604800);

	/* determine total number of days to show, start date, end date */
	$totDays = $set['weeksToShow'] * 7; //number of weeks to show
	$sOffset = ($set['weekStart']) ? date("N", $tcDate) - 1 : date("w", $tcDate); //offset first day
	$st = $tcDate - ($sOffset + 7) * 86400; //start time
	$et = $st + ($totDays - 1) * 86400; //end time
	$sDate = date("Y-m-d", $st);
	$eDate = date("Y-m-d", $et);
	$header = '<span'.($_SESSION['mobile'] ? '' : ' class="viewHdr"').'>'.makeD($sDate,3).' - '.makeD($eDate,3).'</span>';
}

retrieve($sDate,$eDate,'uc');

/* display header*/
echo '<h4 class="floatC"><a class="noPrint" href="index.php?lc&amp;cD=',$prevDate,'"><img src="images/arrowl.png" alt="back"></a>',$header,'<a class="noPrint" href="index.php?lc&amp;cD=',$nextDate,'"><img src="images/arrowr.png" alt="forward"></a></h4>'."\n";
/* display days*/
$days = ($mode == 'fm') ? '1234567' : $set['workWeekDays']; //days to show
$cWidth = round(98 / strlen($days),1).'%';

/* display day headers */
echo '<div'.($_SESSION['mobile'] ? '' : ' class="scrollBoxHead"').">\n";
echo "<table class='grid'>\n";
if ($set['weekNumber']) { echo '<col class="wkCol">'; } //add week # column
echo '<col span="'.strlen($days).'" class="dCol" style="width:'.$cWidth.'">'."\n";
echo "<tr>";
if ($set['weekNumber']) { echo "<th>{$xx['vws_wk']}</th>"; } //week # hdr
for ($i = 0; $i < 7; $i++) {
	$cTime = $st + $i * 86400; //current time
	if (strpos($days,date("N",$cTime)) !== false) { echo "<th>{$wkDays[$set['weekStart'] + $i]}</th>"; } //week days
}
echo "</tr>\n</table>\n</div>\n";

/* display calendar */
echo '<div'.($_SESSION['mobile'] ? '' : ' class="scrollBoxMo"').">\n";
echo "<table class='grid'>\n";
if ($set['weekNumber']) { echo '<col class="wkCol">'; } //add week # column
echo "<col span='".strlen($days)."' class='dCol' style=\"width:{$cWidth}\">\n";

/* build grid */
for ($i = 0; $i < $totDays; $i++) {
	$cTime = $st + $i * 86400; //current time
	$cDate = date("Y-m-d", $cTime); //current date
	$curM = ltrim(substr($cDate, 5, 2),"0");
	$curD = ltrim(substr($cDate, 8, 2),"0");
	if ($i%7 == 0) { //new week
		echo '<tr class="monthWeek">';
		if ($set['weekNumber']) { //display week nr
			echo !$_SESSION['hdr'] ? "<td class='wnr'>" : "<td class='wnr hyper' onclick=\"goWeek('{$cDate}');\" title=\"{$xx['vws_view_week']}\">";
			echo date("W", $cTime + 86400)."</td>\n";
		}
	}
	$dayNr = date("N", $cTime);
	if (strpos($days,$dayNr) !== false) {
		if ($set['weeksToShow'] < 2) { //single month
			$dow = ($i < $sOffset or $i >= $eOffset) ? 'out' : ($dayNr > 5 ? 'we0' : 'wd0');
		} else {
			$dow = ($dayNr > 5 ? 'we' : 'wd').strval($curM%2); //alternate color per month
		}
		$day = $curD.$curM == "11" ? makeD($cDate,2) : (($i == 0 or $curD == "1") ? makeD($cDate,1) : ($set['monthInDCell'] ? makeD($cDate,1,'x3') : $curD));
		$class = ($curD == "1" or $curD.$curM == "11") ? 'firstDom' : 'dom';
		if (!$_SESSION['hdr']) {
			$day = "<span class='{$class} floatR'>{$day}</span>";
		} else{
			$day = "<span class='{$class} floatR hyper' onclick=\"goDay('{$cDate}');\" title=\"{$xx['vws_view_day']}\">{$day}</span>";
		}
		if ($cDate == date("Y-m-d")) {
			$dow .= ' today';
		} elseif (isset($_SESSION['nD']) and $cDate == $_SESSION['nD']) {
			$dow .= ' slday';
		}
		$dHead = ($privs > 1) ? " class='hyper' onclick=\"newE('{$cDate}');\" title=\"{$xx['vws_add_event']}\"" : '';
		if ($set['weeksToShow'] > 0 or ($i >= $sOffset and $i < $eOffset)) { //no single month or day inside
			echo "<td class='{$dow}'>{$day}<div{$dHead}>&nbsp;</div>\n";
			showGrid($cDate);
		} else { // one month and day outside
			echo "<td class='blank'>\n";
		}
		echo "</td>\n";
	}
	if ($i%7 == 6) { echo "</tr>\n"; } //if last day of week, wrap to left
}
echo "</table>\n</div>\n";
?>
