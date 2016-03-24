<?php
/*
= upcoming events view =

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

function showGrid(&$events,$date) {
	global $privs, $hoverBox, $evtDone, $set, $xx, $upcoTxt;
	$lastDate = '';
	$showDetails = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1));
	foreach ($events as $evt) {
		if (!$evt['mde'] or !in_array($evt['eid'],$evtDone)) { //!mde or mde not processed
			$evtDate = $evt['mde'] ? makeD($evt['sda'],5)." - ".makeD($evt['eda'],5) : makeD($date,5);
			$evtTime = $evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
			if ($set['eventColor']) {
				$eStyle = ($evt['cco'] ? 'color:'.$evt['cco'].';' : '').($evt['cbg'] ? 'background-color:'.$evt['cbg'].';' : '');
			} else {
				$eStyle = $evt['uco'] ? 'background-color:'.$evt['uco'].';' : '';
			}
			$eStyle = $eStyle ? ' style="'.$eStyle.'"' : '';
			$chBox = '';
			if ($evt['cbx']) { $chBox .= !$evt['mde'] ? (strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;') : '?'; }
			if ($chBox) {
				$mayCheck = ($privs > 3 or ($privs > 1 and $evt['uid'] == $_SESSION['uid'])) ? true : false;
				$attrib = ($mayCheck and !$evt['mde']) ? "class='chkBox point' onclick=\"checkE(".$evt['eid'].",'".$date."');\" title=\"{$xx['vws_check_mark']}\"" : 'class="chkBox"';
				$chBox = '<span '.$attrib.">".trim($chBox).'</span>';
			}
		if ($hoverBox) {
			$popText = "<b>{$evtTime}:".((!$evt['mde'] and $evt['eti']) ? ' - '.ITtoDT($evt['eti']) : '')." {$evt['tit']}</b><br>";
			if ($showDetails or $evt['mayE']) {
				$popText .= makeE($evt,$set['popBoxFields'],'br','<br>');
			}
			$popText = htmlspecialchars(addslashes($popText));
			$popClass = ($evt['pri'] ? 'private' : 'normal').(($evt['mde'] or $evt['r_t']) ? ' repeat' : '');
			$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}')\"";
		} else {
			$popAttr = '';
		}
			$eBoxStyle = ($evt['app'] and !$evt['apd']) ? " style='border-left:2px solid #ff0000;'" : '';
			echo $lastDate != $evtDate ? "<br>\n<h6>{$evtDate}</h6>\n" : "<br>\n";
			echo "<table>\n<tr>
				<td class='widthCol1'>{$evtTime}</td>
				<td class='eBox'{$eBoxStyle}>";
			if ($showDetails or $evt['mayE']) {
				echo "<h6>{$chBox}<span class='point'{$eStyle} onclick=\"editE({$evt['eid']},'{$date}');\"{$popAttr}>{$evt['tit']}</span></h6>\n";
				echo makeE($evt,$set['evtTemplUpc'],'br','<br>')."\n";
			} else {
				echo "<h6>{$chBox}<span{$eStyle}{$popAttr}>{$evt['tit']}</span></h6>\n";
			}
			echo "</td></tr></table>\n";
			$evtDone[] = $evt['eid'];
			//add text version to $upcoTxt
			if ($lastDate != $evtDate) { $upcoTxt .= "\n{$evtDate}\n".str_repeat('-',strlen($evtDate)); } //new or same date
			$upcoTxt .= "\n{$evtTime}\n".html_entity_decode($evt['tit'],ENT_QUOTES)."\n";
			if ($showDetails or $evt['mayE']) {
				$upcoTxt .= html_entity_decode(makeE($evt,$set['evtTemplUpc'],'br',"\n"),ENT_QUOTES)."\n";
			}
			$lastDate = $evtDate;
		}
	}
}

//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //launch via script only

//initialize
$hoverBox = false;
if ($set['popBoxUpc'] and $popFieldsArr = str_split($set['popBoxFields'])) {
	foreach ($popFieldsArr as $fieldNr) {
		if (strpos($set['evtTemplUpc'],$fieldNr) === false) { $hoverBox = true; break; } // display hover box
	}
}
$cD = $_SESSION['cD'];
$eTime = mktime(12,0,0,substr($cD,5,2),substr($cD,8,2),substr($cD,0,4)) + (($set['lookaheadDays']-1) * 86400); //Unix time of end date
$eDate = date("Y-m-d", $eTime);
$fName = 'upco.txt';
$rName = str_replace('.','-'.date("Ymd-Hi").'.',$fName);

retrieve($cD,$eDate,'uc');

//display header
$tSpan = makeD($cD,2)." - ".makeD($eDate,2);
echo "<div class=\"subHead\">\n<b>{$tSpan}</b>\n";
echo "<button class='noPrint floatR' type='button' title='{$xx['vws_download_title']}' onclick=\"location.href='dloader.php?ftd={$fName}&amp;rName={$rName}'\">{$xx['vws_download']}</button>\n";
echo "</div>\n";
$upcoTxt = "\n".$xx['title_upcoming']."  ".$tSpan."\n".str_repeat('=',strlen($xx['title_upcoming']."  ".$tSpan))."\n\n"; //header upco text file

//display upcoming events
echo '<div class="eventBg'.($_SESSION['mobile'] ? '"' : ' scrollBoxUp"').">\n";
if ($evtList) {
	$evtDone = array();
	foreach($evtList as $date => &$events) {
		showGrid($events,$date);
	}
} else {
	echo $xx['none']."\n";
}
echo "</div>\n";
file_put_contents("./files/{$fName}",$upcoTxt,LOCK_EX); //save upco text file
?>
