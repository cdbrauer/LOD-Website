<?php
/*
= Send email notification of calendar changes (added / edited / deleted events) =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

-------------------------------------------------------------------
 This script depends on and is executed via the file lcalcron.php.
 See lcalcron.php header for details.
-------------------------------------------------------------------

This file is part of the LuxCal Web Calendar.

--------- THIS SCRIPT USES THE FOLLOWING CALENDAR SETTINGS ----------
chgEmailList: list with email destinations separated by semicolons
chgNofDays: number of days to look back for calendar changes
calendarTitle: The calendar title is used in the notification email
calendarUrl: The calendar URL is used in the notification email
eventColor: Specifies event colors (0:user color, 1:cat color)
---------------------------------------------------------------------
*/

//
//compose list with changed events
//
function makeGrid(&$events) {
	global $set, $xx, $wkDays, $months;

	$changeList = '';
	foreach ($events as $evt) {
		switch ($evt['r_t']) { //make repeat text
			case 0: $repeat = ''; break;
			case 1: $repeat = $xx['evt_repeat'].' '.$xx['evt_interval1_'.$evt['r_i']].' '.$xx['evt_period1_'.$evt['r_p']]; break;
			case 2: $repeat = $xx['evt_repeat_on'].' '.$xx['evt_interval2_'.$evt['r_i']].' '.$wkDays[$evt['r_p']].' '.$xx['of'].' '.($evt['r_m'] ? $months[$evt['r_m']-1] : $xx['evt_each_month']);
		}
		if ($evt['r_t'] > 0 and $evt['r_u']) {
			$repeat .= " {$xx['evt_until']} ".IDtoDD($evt['r_u']);
		}
		if ($set['eventColor']) {
			$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
		} else {
			$eStyle = $evt['uco'] ? "background-color:{$evt['uco']};" : '';
		}
		$eStyle = $eStyle ? " style=\"{$eStyle}\"" : '';
		$eBoxStyle = ' style="padding-left:5px;'.(($evt['app'] and !$evt['apd']) ? ' border-left:2px solid #ff0000;' : '').'"';
		$changeList .= "<table><tr><td width='100px'>";
		$changeList .= ($evt['sts'] < 0) ? $xx['chg_deleted'] : ($evt['mdt'] > $evt['adt'] ? $xx['chg_edited'] : $xx['chg_added']);
		$changeList .= "&nbsp;&nbsp;&nbsp;&nbsp;</td>\n";
		$changeList .= "<td{$eBoxStyle}>";
		$changeList .= "<span{$eStyle}><b>{$evt['tit']}</b></span><br>\n";
		$changeList .= IDtoDD($evt['sda']);
		if ($evt['sti']) { $changeList .= " {$xx['at_time']} ".ITtoDT($evt['sti']); }
		if ($evt['eda'] or $evt['eti']) { $changeList .= ' -'; }
		if ($evt['eda']) { $changeList .= ' '.IDtoDD($evt['eda']).($evt['eti'] ? " {$xx['at_time']}" : ''); }
		if ($evt['eti']) { $changeList .= ' '.ITtoDT($evt['eti']); }
		if ($evt['ald']) { $changeList .= " {$xx['vws_all_day']}"; }
		$changeList .= " {$repeat}<br>";
		$changeList .= makeE($evt,$set['evtTemplGen'],'br',"<br>\n");
		$changeList .= "</td></tr></table><br>\n";
	}
	return $changeList;
}

//
//main program
//

//prepare grabChanges
$privs = 9; //include private events

function cronSendChg() {
	global $evtList, $emlStyle, $set, $xx, $changes;
	
	//initialize
	$sentTo = '';
	$evtList = array();
	$fromD = date("Y-m-d", mktime(12,0,0) - $set['chgNofDays'] * 86400); //start date
	$emlText =
"<html>
<head>\n<title>{$set['calendarTitle']} mailer</title>
<style type='text/css'>
body, p, table {{$emlStyle}}
h5 {font-size:13px;}
td {vertical-align:top;}
</style>
</head>
<body>
";

	//grab and process changed events
	grabChanges($fromD,1);

	foreach($evtList as $chDate => &$events) {
		$emlText .= "<h5>{$xx['chg_changed_on']} ".makeD($chDate,5)."</h5>\n";
		$emlText .= makeGrid($events);
		$changes += count($events);
	}
	if ($changes) {
		$period = ($fromD != date('Y-m-d')) ? makeD($fromD,2)." - ".makeD(date('Y-m-d'),2) : makeD(date('Y-m-d'),2);
		$emlText .=
"<p><a href='{$set['calendarUrl']}'>{$xx['evt_open_calendar']}</a></p>
</body>
</html>
";
		if ($set['chgEmailList']) { //email address(es) to notify
			$subject = translit("{$set['calendarTitle']} - {$xx['chg_changes']}: {$period}");
			$sent = sendMail($subject, $emlText, $set['chgEmailList']);
			$sentTo = $sent ? $sent : "Sending mail failed. See logs/luxcal.log for details";
		}
	}
	return $sentTo;
}
?>
