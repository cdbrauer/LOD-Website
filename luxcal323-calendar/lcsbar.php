<?php
/*
= LuxCal stand-alone sidebar - upcoming events =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.

used settings:
 database credentials
 timeZone
 language
 sideBarDays
 popFieldsSbar
 eventColor
 showLinkInSB
*/

//display todo list function
if (!function_exists('displayTD')) {
function displayTD(&$evtList) {
	global $evtList, $set, $xx, $sbCalUrl, $rxULink;

	foreach($evtList as $date => &$events) {
		echo "<div class='ssb_gen ssb_date'>".makeD($date,5)."</div>\n";
		foreach ($events as $evt) {
			$evtTime = ($evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti'])).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
			if ($set['popFieldsSbar']) {
				$popText = "<div class='ssb_gen ssb_popUp'><b>{$evtTime} {$evt['tit']}</b>";
				$popText = makeE($evt,$set['popFieldsSbar'],'br',"<br>");
				$popText = htmlspecialchars(addslashes($popText.'</div>'));
				$popClass = ($evt['mde'] or $evt['r_t']) ? 'ssb_repeat' : 'ssb_normal';
				$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}',50)\"";
			} else {
				$popAttr = '';
			}
			if ($set['eventColor']) {
				$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
			} else {
				$eStyle = ($evt['uco'] ? "background-color:{$evt['uco']};" : '');
			}
			$eStyle = $eStyle ? " style='{$eStyle}'" : '';
			if (empty($sbCalUrl)) {
				$eTitle = $evt['tit'];
			} else {
				$jumpD = (strpos($sbCalUrl,'?') ? '&amp;' : '?')."cD={$evt['sda']}";
				$eTitle = "<a href='{$sbCalUrl}{$jumpD}' target='fullcal'>{$evt['tit']}</a>";
			}
			$chBox = '';
			if ($evt['cbx']) { $chBox .= strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;'; }
			if ($chBox) {
				$calDir = trim(substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])),'\\/').'/';
				$attrib = $set['details4All'] == 1 ? "class='ssb_gen ssb_chkBox ssb_floatL ssb_point' onclick=\"checkE({$evt['eid']},'{$date}','{$calDir}');\" title=\"{$xx['vws_check_mark']}\"" : "class='ssb_gen ssb_chkBox ssb_floatL ssb_arrow'";
				$chBox = "<div {$attrib}>".trim($chBox)."</div>";
			}
			echo "<div class='ssb_gen ssb_event'>
				<div class='ssb_gen ssb_evtTime'>{$evtTime}</div>\n{$chBox}\n<div class='ssb_gen ssb_evtTitle'{$eStyle}{$popAttr}>{$eTitle}</div>
				</div>\n";
		}
	}
}
}

//display upcoming events function
if (!function_exists('displayUE')) {
function displayUE(&$evtList) {
	global $evtList, $set, $xx, $sbMaxNbr, $sbCalUrl, $rxULink;
	
	$evtDone = array();
	$lastDate = '';
	foreach($evtList as $date => &$events) {
		foreach ($events as $evt) {
			if (!$evt['mde'] or !in_array($evt['eid'],$evtDone)) { //!mde or mde not processed
				$evtDone[] = $evt['eid'];
				$evtDate = $evt['mde'] ? makeD($evt['sda'],5)." - ".makeD($evt['eda'],5) : makeD($date,5);
				$evtTime = $evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
				if ($set['popFieldsSbar']) {
					$popText = "<div class='ssb_gen ssb_popUp'><b>{$evtTime} {$evt['tit']}</b>";
					$popText = makeE($evt,$set['popFieldsSbar'],'br',"<br>");
					$popText = htmlspecialchars(addslashes($popText.'</div>'));
					$popClass = ($evt['mde'] or $evt['r_t']) ? 'ssb_repeat' : 'ssb_normal';
					$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}',50)\"";
				} else {
					$popAttr = '';
				}
				if ($set['eventColor']) {
					$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
				} else {
					$eStyle = ($evt['uco'] ? "background-color:{$evt['uco']};" : '');
				}
				$eStyle = $eStyle ? " style='{$eStyle}'" : '';
				if (empty($sbCalUrl)) {
					$eTitle = $evt['tit'];
				} else {
					$jumpD = (strpos($sbCalUrl,'?') ? '&amp;' : '?')."cD={$evt['sda']}";
					$eTitle = "<a href='{$sbCalUrl}{$jumpD}' target='luxcal'>{$evt['tit']}</a>";
				}
				if ($lastDate != $evtDate) {
					echo "<div class='ssb_gen ssb_date'>{$evtDate}</div>\n";
					$lastDate = $evtDate;
				}
				echo "<div class='ssb_gen ssb_event ssb_arrow'{$popAttr}>
					<div class='ssb_gen ssb_evtTime'>{$evtTime}</div>\n<div class='ssb_gen ssb_evtTitle'{$eStyle}>{$eTitle}</div>
					</div>\n";
				if ($set['showLinkInSB'] and preg_match_all($rxULink,$evt['des'], $urls, PREG_SET_ORDER)) { //display URL links
					echo "<div class='ssb_gen ssb_evtUrl'{$eStyle}>";
					foreach ($urls as $url) { echo "{$url[0]}<br>"; }
					echo "</div>\n";
				}
				if (--$sbMaxNbr < 1) { break 2; }
			}
		}
	}
}
}

//save and set cwd
$cwd = getcwd();
chdir(dirname(__FILE__));

require_once './common/toolbox.php'; //get toolbox

$calID = dbConnect(); //connect to database

if (!empty($sbCal)) { $calID = $sbCal; } //select calendar

if (!isset($set)) { $set = getSettings(); } //get settings from db

date_default_timezone_set($set['timeZone']); //set time zone

require_once './lang/ui-'.strtolower($set['language']).'.php'; //set language

require_once './common/retrieve.php';//get retrieve function

//process external params
if (empty($sbContent)) { $sbContent = 'upco'; }
$sbFilter = $sbContent == 'todo' ? ' AND c.chbox = 1' : '';
if (empty($sbClass)) { $sbClass = 'sideBar'; }
if (empty($sbHeader)) { $sbHeader = $xx['ssb_upco_events']; }
if (empty($sbMaxNbr)) { $sbMaxNbr = 1000; }
if (!empty($sbCatsIn)) {
	$sbFilter .= " AND c.sequence IN ({$sbCatsIn})";
} elseif (!empty($sbCatsEx)) {
	$sbFilter .= " AND c.sequence NOT IN ({$sbCatsEx})";
}
if (!empty($sbUsersIn)) {
	$sbFilter .= " AND e.user_id IN ({$sbUsersIn})";
} elseif (!empty($sbUsersEx)) {
	$sbFilter .= " AND e.user_id NOT IN ({$sbUsersEx})";
}
if ($sbFilter) { $sbFilter = substr($sbFilter,5); }

$sbsTime = time();
if (!empty($sbWeekDay) and $sbWeekDay > 0 and $sbWeekDay <= 7) { //show event on the specified weekday
	$sbTodayWD = date('N', $sbsTime); //weekday
	$sbsTime = $sbsTime + ((($sbWeekDay-$sbTodayWD+7)%7) * 86400);
	$sbUpDays = 1;
} else {
	$sbUpDays = empty($sbUpDays) ? $set['sideBarDays'] : intval($sbUpDays);
}
$sbsDate = $sbContent == 'todo' ? date("Y-m-d",$sbsTime - (30 * 86400)) : date("Y-m-d",$sbsTime); // if ToDo start 30 days back
$sbeDate = date("Y-m-d",$sbsTime + (($sbUpDays-1) * 86400));

//display sidebar
echo "
<div class='ssb_gen {$sbClass}'>
<div class='ssb_gen ssb_header'>{$sbHeader}</div>
<div class='ssb_gen ssb_scrollList'>
";

retrieve($sbsDate,$sbeDate,'',$sbFilter);

if ($evtList) { //display upcoming events
	if ($sbContent == 'todo') {
		displayTD($evtList);
	} else {
		displayUE($evtList);
	}
} else {
	echo $xx['ssb_none']."\n";
}
echo "<br>\n</div>\n</div>\n";

foreach (array_keys($GLOBALS) as $k) { if (substr($k,0,2) == 'sb') unset($$k); } //unset ext params
unset($k);
chdir($cwd); //restore cwd
?>