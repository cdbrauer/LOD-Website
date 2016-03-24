<?php
/*
= LuxCal mini calendar - one month =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
config params /settings:
 database credentials
 calendarTitle
 timeZone
 language
 weekStart (0: Sunday, 1: Monday)
 miniCalPost (event posting 0: disabled, 1: enabled)

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
	global $set, $evtList, $privs, $xx;
	if (!array_key_exists($date, $evtList)) { return; }
	foreach ($evtList[$date] as &$evt) {
		switch ($evt['mde']) { //multi-day event?
			case 0: $time = ITtoDT($evt['sti']); break; //no
			case 1: $time = (($evt['sti'] != '00:00' and $evt['sti'] != '') ? ITtoDT($evt['sti']) : '&bull;').'&middot;&middot;&middot;'; break; //first
			case 2: $time = '&middot;&middot;&middot;'; break; //in between
			case 3: $time = '&middot;&middot;&middot;'.(($evt['eti'] < '23:59' and $evt['eti'] != '') ? ITtoDT($evt['eti']) : '&bull;'); //last
		}
		$chBox = '';
		if ($evt['cbx']) { $chBox .= strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;'; }
		if ($chBox) { $chBox = '<span class="chkBox">'.trim($chBox).'</span>'; }
		if ($set['popFieldsMcal']) {
			$popText = "<div class=\"fontS\"><b>".$chBox.$time.((!$evt['mde'] and $evt['eti']) ? ' - '.ITtoDT($evt['eti']).' ' : ' ').$evt['tit'].'</b>';
			$popText .= '<br>'.makeE($evt,$set['popFieldsMcal'],'br',"<br>");
			$popText = htmlspecialchars(addslashes($popText.'</div>'));
			$popClass = ($evt['mde'] or $evt['r_t']) ? 'normal repeat' : 'normal';
			$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}',30)\"";
			$cursor = ' point';
		} else {
			$popAttr = '';
			$cursor = ' arrow';
		}
		$bgColor = $evt['cbg'] ? " style=\"background-color:{$evt['cbg']};\"" : '';
		$mayEdit = $set['miniCalPost'] ? " onclick=\"x=editE({$evt['eid']},'{$date}');\"" : '';
		echo "<div class='miniSquare{$cursor}'{$bgColor}{$mayEdit}{$popAttr}></div>\n";
	}
}

//sanity check
if (isset($_GET['oM']) and !preg_match('%^(-\d{1,2}|\d{0,2})$%', $_GET['oM'])) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //invalid argument

error_reporting(E_ALL ^ E_NOTICE); //errors, no notices
//error_reporting(E_ALL); //errors and notices - test line

//initialize
require './common/toolbox.php';

//connect to database
$calID = dbConnect();

//check if calendar exists
if (!empty($_GET['cal'])) {
	$rSet = dbQuery("SHOW TABLES LIKE '".$_GET['cal']."_settings'");
	if (mysql_num_rows($rSet) > 0) {
		$calID = $_GET['cal'];
	} else {
		exit('Calendar "'.$_GET['cal'].'" does not exist.');
	}
}

//get settings from database
$set = getSettings();

//set time zone
date_default_timezone_set($set['timeZone']);

//proxies: don't cache
header("Cache-control: private");

//set language
require './lang/ui-'.strtolower($set['language']).'.php';

//set session params and privs
$_SESSION['uid'] = 1; //public access
$_SESSION['cC'] = array(0); //all categories
$rSet = dbQuery("SELECT privs FROM [db]users WHERE user_id = 1");
$row = mysql_fetch_assoc($rSet);
$privs = $row["privs"];

//get common functions
require './common/retrieve.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $set['calendarTitle']; ?></title>
<meta name="description" content="LuxCal mini web calendar - a LuxSoft product">
<meta name="author" content="Roel Buining">
<meta name="robots" content="nofollow">
<link rel="canonical" href="<?php echo $set['calendarUrl']; ?>">
<link rel="stylesheet" href="css/css_mini.php" type="text/css">
<script src="common/toolbox.js"></script>
<script>window.onload = function() {parent.setHeight(document.body.scrollHeight);}</script>
</head>

<body>
<?php
$offM = isset($_GET['oM']) ? $_GET['oM'] : 0; //offset Month
$timeD1 = mktime(12,0,0,date('n')+$offM,1,date('Y')); //time 1st day
$dateD1 = date("Y-m-d", $timeD1); //date 1st day
$curM = date("n",$timeD1);
$curY = date("Y",$timeD1);
$sOffset = ($set['weekStart']) ? date("N", $timeD1) - 1 : date("w", $timeD1); //offset first day
$eOffset = date("t", $timeD1) + $sOffset; //offset last day
$daysToShow = ($eOffset == 28) ? 28 : (($eOffset > 35) ? 42 : 35); //4, 5 or 6 weeks
$sDate = date("Y-m-d", $timeD1 - ($sOffset * 86400)); //start date in 1st week
$eDate = date("Y-m-d", $timeD1 + ($daysToShow - $sOffset - 1) * 86400); //end date in last week

retrieve($sDate,$eDate); //retrieve events

/* display header */
$fullCalUrl = $set['mCalUrlFull'] ? $set['mCalUrlFull'] : 'index.php?lc&amp;cP=2&amp;cD='.$dateD1;
echo "<div class='floatC fontS'>{$xx['vws_click_for_full']}</div>\n";
echo "<h6 class='floatC'><a href='".htmlentities($_SERVER['PHP_SELF']).'?oM=',$offM-1,"' title=\"{$xx['vws_prev_month']}\">&lt;&lt;</a>&nbsp;&nbsp;&nbsp;<a href=\"{$fullCalUrl}\" title=\"{$xx['vws_view_full']}\" target='_blank'>",makeD($dateD1,3),"</a>&nbsp;&nbsp;&nbsp;<a href='".htmlentities($_SERVER['PHP_SELF']).'?oM=',$offM+1,"' title=\"{$xx['vws_next_month']}\">&gt;&gt;</a></h6>\n";

/* display month */
$days = ($set['miniCalView'] == 1) ? '1234567' : $set['workWeekDays']; //set days to show
$cWidth = round(98 / strlen($days),1).'%';
echo "<table class='grid'>
	<col span='".strlen($days)."' class='dCol' style='width:{$cWidth}'>
	<tr>\n";
for ($i = 0; $i < 7; $i++) {
	$cTime = mktime(12,0,0,$curM,$i-$sOffset+1,$curY ); //current time
	if (strpos($days,date("N",$cTime)) !== false) { echo "<th>{$wkDays_s[$set['weekStart'] + $i]}</th>"; } //week days
}
echo "</tr>\n";
for($i = 0; $i < $daysToShow; $i++) {
	$cTime = mktime(12,0,0,$curM,$i-$sOffset+1,$curY ); //current time
	$cDate = date("Y-m-d", $cTime);
	if ($i%7 == 0) { //new week
		echo "<tr class=\"miniWeek\">\n";
	}
	$dayNr = date("N", $cTime);
	if (strpos($days,$dayNr) !== false) {
		$dow = ($i < $sOffset or $i >= $eOffset) ? 'out' : (($dayNr > 5) ? 'we0' : 'wd0');
		if ($cDate == date("Y-m-d")) { $dow .= ' today'; }
		$day = ltrim(substr($cDate, 8, 2),"0");
		$dHead = ($set['miniCalPost'] and $privs > 1) ? "class='dom hyper' onclick=\"newE('{$cDate}');\" title=\"{$xx['vws_add_event']}\"" : "class='dom'";
		echo "<td class='{$dow}'>\n<div {$dHead}>{$day}</div>\n";
		showGrid($cDate);
		echo "</td>\n";
	}
	if ($i%7 == 6) { echo "</tr>\n"; } //if last day of week, wrap to left
}
echo "<tr>\n<th colspan='7' class='endBar'>
	<span class='floatL'><a class='endBarTxt' href='rssfeed.php' title='RSS feeds' target='_blank' >RSS</a></span>
	<span class='floatR endBarTxt'><a href='http://www.luxsoft.eu' target='_blank'><span class='footLB'>Lux</span><span class='footLR'>Soft</span></a><span title='V".LCC."'></span></span>\n";
if ($offM != 0) { echo "<a class='floatC endBarTxt' href='".htmlentities($_SERVER['PHP_SELF'])."?oM=0' title=\"{$xx['vws_back_to_today']}\">{$xx['vws_today']}</a>\n"; }
?>
</th>
</tr>
</table>
</body>
</html>
