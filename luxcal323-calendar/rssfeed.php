<?php
/*
= LuxCal RSS feeder =

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
header("Content-Type: application/rss+xml; charset=utf-8");

//load toolbox
require './common/toolbox.php';

//load config data
require './lcconfig.php';

//get calendar
$calID = !empty($_GET['cal']) ? $_GET['cal'] : $dbDef;

//connect to database
$dbH = dbConnect($calID);

//get settings from database
$set = getSettings();

//set time zone
date_default_timezone_set($set['timeZone']);

//get common functions
require './common/retrieve.php';

//set language
require './lang/ui-'.strtolower($set['language']).'.php';

//set filter
$filter = '';
if (isset($_GET['cU'])) {
	$filter .= " AND e.ID IN (".implode(",",$_GET['cU']).")";
}
if (isset($_GET['cC'])) {
	$filter .= " AND c.sequence IN (".implode(",",$_GET['cC']).")";
}
$filter = substr($filter,5);

//feed header
echo '<?xml version="1.0" encoding="utf-8" ?>
<rss version="2.0">
<channel>
<title>'.$set['calendarTitle']." - RSS feed</title>
<link>{$set['calendarUrl']}</link>
<description>{$xx['vws_events_for_next']} {$set['lookaheadDays']} {$xx['vws_days']}</description>
<language>en-us</language>
<category>Calendar events</category>
<pubDate>".date("r")."</pubDate>
<generator>LuxCal Web calendar</generator>\n";

$fromDate = date("Y-m-d", time() - 14*86400); //14 days back

$sDate = date("Y-m-d");
$eTime = time() + (($set['lookaheadDays']-1) * 86400); //Unix time of end date
$eDate = date("Y-m-d", $eTime);
$parSep = strpos($set['calendarUrl'],'?cal=') ? '&amp;' : '?'; //? or &amp;

$evtList = array();
retrieve($sDate,$eDate,'',$filter);

//process events and send feeds
$evtDone = array();
if ($evtList) {
	foreach($evtList as $date => &$events) {
		foreach ($events as &$evt) {
			if (!$evt['mde'] or !in_array($evt['eid'],$evtDone)) { //!mde or mde not processed
				$evtDone[] = $evt['eid'];
				$checkBx = (strpos($evt['chd'],$date) ? $evt['cmk'] : '');
				$evtDate = $evt['mde'] ? makeD($evt['sda'],5).' - '.makeD($evt['eda'],5) : makeD($date,5);
				$evtTime = $evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
				$feed = "<item>\n";
				$feed .= "<title>{$evtDate}: {$checkBx}{$evt['tit']}</title>\n";
				$feed .= "<link>{$set['calendarUrl']}{$parSep}cD={$date}</link>\n";
				$feed .= "<description>\n<![CDATA[\n";
				$feed .= "{$evtTime}\n";
				if ($set['details4All'] == 1) {
					$feed .= '<br>'.makeE($evt,$set['evtTemplGen'],'br',"<br>\n",'12345');
				}
				$feed .= "]]>\n</description>\n";
				$feed .= "<guid isPermaLink='false'>{$set['calendarUrl']}{$parSep}evt={$evt['eid']}&amp;{$date}</guid>\n";
				$feed .= "</item>\n";
				echo $feed;
			}
		}
	}
} else { //no events due
	echo "<item>
		<description>\n{$xx['vws_none_due_in']} {$set['lookaheadDays']} {$xx['vws_days']}\n</description>
		<guid isPermaLink='false'>{$set['calendarUrl']}</guid>
		</item>\n";
}
//feed trailer
echo "</channel>\n</rss>";
?>