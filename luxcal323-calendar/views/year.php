<?php
/*
= year view of events =

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
	global $evtList,$privs,$set,$xx;
	if (!array_key_exists($date,$evtList)) { return; }
	$showDetails = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1));
	foreach ($evtList[$date] as $evt) {
		switch ($evt['mde']) { //multi-day event?
			case 0: $time = ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : ''); break; //no
			case 1: $time = (($evt['sti'] != '00:00' and $evt['sti'] != '') ? ITtoDT($evt['sti']) : '&bull;').'&middot;&middot;&middot;'; break; //first
			case 2: $time = '&middot;&middot;&middot;'; break; //in between
			case 3: $time = '&middot;&middot;&middot;'.(($evt['eti'] < '23:59' and $evt['eti'] != '') ? ITtoDT($evt['eti']) : '&bull;'); //last
		}
		$chBox = '';
		if ($evt['cbx']) {
			$chBox .= strpos($evt['chd'],$date) ? $evt['cmk'] : '&#x2610;';
			$chBox = "<span class='chkBox'>{$chBox}</span>";
		}
		if ($set['popBoxYear'] and $set['popBoxFields']) {
			$popText = "<b>{$chBox} {$time} {$evt['tit']}</b><br>";
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
			$eStyle = $evt['cbg'] ? "background-color:{$evt['cbg']};" : '';
		} else {
			$eStyle = $evt['uco'] ? "background-color:{$evt['uco']};" : '';
		}
		if ($evt['app'] and !$evt['apd']) { $eStyle .= 'border:1px solid #ff0000;'; }
		$eStyle = $eStyle ? " style='{$eStyle}'" : '';
		echo '<div '.(($showDetails or $evt['mayE']) ? "class='square point'{$eStyle} onclick=\"editE({$evt['eid']},'{$date}');\"" : "class='square arrow'{$eStyle}")."{$popAttr}></div>\n";
	}
}

//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //launch via script only

//initialize
$cD = $_SESSION['cD'];
if ($set['yearStart']) { //start with month $set['yearStart']
	$m = $set['yearStart'];
	$y = (intval(substr($cD,5,2)) >= $m) ? intval(substr($cD,0,4)) : intval(substr($cD,0,4)) - 1;
	$prevDate = date("Y-m-d",mktime(12,0,0,$m,1,$y-1));
	$nextDate = date("Y-m-d",mktime(12,0,0,$m,1,$y+1));

	/* set the start date and end date of the period to show */
	$fromM = $m; //start month
	$tillM = $fromM + 12; //month following end month
} else { //use current date to determine start month
	$m = substr($cD,5,2);
	$y = substr($cD,0,4);
	$jumpRows = $set['rowsToShow'] - intval($set['rowsToShow']*0.5);
	$prevDate = date("Y-m-d",mktime(12,0,0,$m-$set['colsToShow']*$jumpRows,1,$y));
	$nextDate = date("Y-m-d",mktime(12,0,0,$m+$set['colsToShow']*$jumpRows,1,$y));

	/* set the start date and end date of the period to show */
	$fromM = $m - ($m-1)%$set['colsToShow']; //start month
	$tillM = $fromM + $set['colsToShow'] * $set['rowsToShow']; //month following end month
}
$sDate = date("Y-m-d",mktime(12,0,0,$fromM,1,$y)); //start date
$eDate = date("Y-m-d",mktime(12,0,0,$tillM,0,$y)); //end date

retrieve($sDate,$eDate,'uc'); //retrieve events

/* display header */
$header = '<span'.($_SESSION['mobile'] ? '' : ' class="viewHdr"').'>'.makeD($sDate,3)." - ".makeD($eDate,3).'</span>';
echo "<h4 class='floatC noPrint'><a class='noPrint' href='index.php?lc&amp;cD={$prevDate}'><img src='images/arrowl.png' alt='back'></a>{$header}<a class='noPrint' href='index.php?lc&amp;cD={$nextDate}'><img src='images/arrowr.png' alt='forward'></a></h4>\n";

/* display calendar */
echo '<div'.($_SESSION['mobile'] ? '' : " class='scrollBoxYe'").">\n";
echo "<table class='mgrid'>\n";
$cm = $fromM; //current month
for($p=0;$p<$set['rowsToShow'];$p++){ //number of rows to show
	echo '<tr>';
	for($q=0;$q<$set['colsToShow'];$q++){ //# of months per row
		echo '<td class="holder">';

		/* collect month info */
		$timeDay1 = mktime(12,0,0,$cm,1,$y); //Unix time of month
		$day1 = date("Y-m-d",$timeDay1);
		$thisM = substr($day1,5,2);
		$thisY = substr($day1,0,4);
		$sOffset = ($set['weekStart']) ? date("N",$timeDay1) - 1 : date("w",$timeDay1); //offset first day
		$eOffset = date("t",$timeDay1) + $sOffset; //offset last day
		$daysToShow = ($eOffset == 28) ? 28 : (($eOffset > 35) ? 42 : 35); //4,5 or 6 weeks

		/* display month header */
		echo "<h5 class='floatC point' onclick=\"goMonth('{$day1}');\" title=\"{$xx['vws_view_month']}\">".makeD($day1,3)."</h5>\n";
		echo "<table class='grid'>\n";
		if ($set['weekNumber']) { echo "<col class='wkCol'>"; } //add week # column
		echo "<col span='7' class='dCol7'>\n";
		echo "<tr>\n";
		if ($set['weekNumber']) { echo '<th>'.$xx['vws_wk'].'</th>'; } //week # hdr
		for ($x = $set['weekStart']; $x < ($set['weekStart']+7); $x++) echo "<th>{$wkDays_s[$x]}</th>"; //week days
		echo "</tr>\n";

		/* display month */
		for ($i = 0; $i < $daysToShow; $i++) {
			$cTime = mktime(12,0,0,$thisM,$i-$sOffset +1,$thisY);
			$cDate = date("Y-m-d",$cTime);
			if ($i%7 == 0) { //new week
				echo "<tr class='yearWeek'>";
				if ($set['weekNumber']) { //display week nr
					echo !$_SESSION['hdr'] ? "<td class='wnr'>" : "<td class='wnr hyper' onclick=\"goWeek('{$cDate}');\" title=\"{$xx['vws_view_week']}\">";
					echo date("W", $cTime + 86400)."</td>\n";
				}
			}
			if ($i >= $sOffset and $i < $eOffset) { //day in month
				$dow = date("N",$cTime) > 5 ? 'we0' : 'wd0';
				if ($cDate == date("Y-m-d")) {
					$dow .= ' today';
				} elseif (isset($_SESSION['nD']) and $cDate == $_SESSION['nD']) {
					$dow .= ' slday';
				}
				$day = ltrim(substr($cDate,8,2),"0");
				if (!$_SESSION['hdr']) {
					$day = "<span class='dom floatR'>{$day}</span>";
				} else {
					$day = "<span class='dom floatR hyper' onclick=\"goDay('{$cDate}');\" title=\"{$xx['vws_view_day']}\">{$day}</span>";
				}
				$dHead = ($privs > 1) ? " class='hyper' onclick=\"newE('{$cDate}');\" title=\"{$xx['vws_add_event']}\"" : '';
				echo "<td class='{$dow}'>{$day}<div{$dHead}>&nbsp;</div>\n";
				showGrid($cDate);
			} else {
				echo "<td class='blank'>";
			}
			echo "</td>\n";
			if ($i%7 == 6) { echo "</tr>\n"; } //if last day of week,wrap to left
		}
		echo "</table>\n</td>\n";
		$cm++;
	}
	echo "</tr>\n";
}
echo "</table>\n</div>\n";
?>
