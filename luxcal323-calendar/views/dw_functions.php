<?php
/*
 = General functions used by Week and Day view scripts =


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

//sanity check
if (!defined('LCC')) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); } //launch via script only

function showGrid($date) {
	global $privs, $evtList, $set, $xx;
	$thsM = ($set['dwStartHour'] * 60); //threshold start of day in mins
	$theM = ($set['dwEndHour'] * 60); //threshold end of day in mins
	$offset = $set['dwStartHour'] ? 2 * $set['dwTimeSlot'] : $set['dwTimeSlot']; //"earlier" row
	if (!array_key_exists($date, $evtList)) { return; }
	//hereafter: M = in nbr of mins
	foreach ($evtList[$date] as $eIx => $evt) {
		if ($evt['mde']) { //multi-day-event
			if ($evt['mde'] != 1) { $evt['sti'] = '00:00'; }
			if ($evt['mde'] != 3) { $evt['eti'] = '23:59'; }
		}
		if (($evt['sti'] == '' and $evt['eti'] == '') or $evt['ald']) { //all day (takes up 1 slot at the top)
			$st[] = 0; //start time
			$et[] = $set['dwTimeSlot']; //end time
		} else {
			$stM = substr($evt['sti'],0,2) * 60 + intval(substr($evt['sti'],3,2)); //start time
			if ($stM < $thsM) {
				$st[] = $set['dwTimeSlot']; //start time < threshold start of day in mins
			} elseif ($stM < $theM) {
				$st[] = $stM - $thsM + $offset; //start time < threshold end of day in mins
			} else {
				$st[] = $theM - $thsM + $offset; //start time >= threshold end of day in mins
			}
			if ($evt['eti'] == "" or $evt['eti'] == $evt['sti']) {
				$et[] = end($st) + $set['dwTimeSlot'];
			} else {
				$etM = substr($evt['eti'],0,2) * 60 + intval(substr($evt['eti'],3,2)); //end time
				if ($etM <= $thsM) {
					$et[] = $offset; //end time <= threshold start of day in mins
				} elseif ($etM <= $theM) {
					$et[] = $etM - $thsM + $offset; //end time < threshold end of day in mins
				} else {
					$et[] = $theM - $thsM + $offset + $set['dwTimeSlot']; //end time > threshold end of day in mins
				}
			}
		}
	}
	//for day $date we now have :
	//$st: array with start time in mins for each event
	//$et: array with end time in mins for each event
	//the indexes in these arrays correspond to the indexes in $evtList
	$sEmpty[0][0] = 0;
	$eEmpty[0][0] = 1440; //24 x 60 mins
	$indent = 0;
	foreach ($st as $i => $stM) { //i: index in $evtList, stM: start time in mins
		$found = false;
		foreach ($sEmpty as $k => $v) {
			foreach ($v as $kk => $sEtM) {
				if ($stM >= $sEtM and $et[$i] <= $eEmpty[$k][$kk]) {
					$sEmpty[$k][] = $et[$i]; //end time in mins
					$eEmpty[$k][] = $eEmpty[$k][$kk];
					$eEmpty[$k][$kk] = $stM; //start in mins
					$sFill[$k][] = $stM;
					$evIx[$k][] = $i;
					$found = true;
					break 2;
				}
			}
		}
		if (!$found) {
			$indent++;
			$sEmpty[$indent][0] = 0;
			$eEmpty[$indent][0] = $stM;
			$sEmpty[$indent][1] = $et[$i];
			$eEmpty[$indent][1] = 1440; //24 x 60
			$sFill[$indent][0] = $stM;
			$evIx[$indent][0] = $i;
		}
	}
	$cWidth = round(80 / ($indent+1),1); //width of smallest column
	$showDetails = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1));
	foreach ($sFill as $k => $v) { //1 min = 1px
		$eLeft = ($cWidth + 0.2) * $k; //event left side in %
		$eWidth = $cWidth - 0.5; //event width in %
		foreach ($v as $kk => $stM) { //event start time in mins
			$etM = $sEmpty[$k][$kk + 1]; //event end time in mins
			$eHeight = $etM - $stM; //event height in mins
			$stM = round($stM * $set['dwTsHeight'] / $set['dwTimeSlot']) - 1; //scale start time in px
			$eHeight = round($eHeight * $set['dwTsHeight'] / $set['dwTimeSlot']) - 1; //scale height in px
			$i = $evIx[$k][$kk];
			$evt = &$evtList[$date][$i];
			$mayCheck = ($privs > 3 or ($privs > 1 and $evt['uid'] == $_SESSION['uid'])) ? true : false;
			$sti = ($evt['sti']) ? ITtoDT($evt['sti']) : '';
			$stiPrefix = (substr($evt['sti'],0,2) < $set['dwStartHour'] or substr($evt['sti'],0,2) >= $set['dwEndHour']) ? $sti.' ' : '';
			switch ($evt['mde']) { //multi-day event?
				case 0: $time = ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : ''); break; //no
				case 1: $time = (($evt['sti'] != '00:00' and $evt['sti'] != '') ? ITtoDT($evt['sti']) : '&bull;').'&middot;&middot;&middot;'; break; //first
				case 2: $time = '&middot;&middot;&middot;'; break; //in between
				case 3: $time = '&middot;&middot;&middot;'.(($evt['eti'] < '23:59' and $evt['eti'] != '') ? ITtoDT($evt['eti']) : '&bull;'); //last
			}
			$chBox = '';
			if ($evt['cbx']) {
				$chBox .= strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;';
				$attrib = $mayCheck ? "class='chkBox floatL point' onclick=\"checkE({$evt['eid']},'{$date}');\" title=\"{$xx['vws_check_mark']}\"" : "class='chkBox floatL arrow'";
				$chBox = "<span {$attrib}>{$chBox}</span>";
			}
			if ($set['popBoxWkDay'] and $set['popBoxFields']) {
				$popText = "<b>{$time} {$evt['tit']}</b><br>";
				if ($showDetails or $evt['mayE']) {
					$popText .= makeE($evt,$set['popBoxFields'],'br','<br>');
				}
				$popText = htmlspecialchars(addslashes($popText));
				$popClass = ($evt['pri'] ? 'private' : 'normal').(($evt['mde'] or $evt['r_t']) ? ' repeat' : '');
				$popAttr = " onmouseover=\"pop(this,'{$popText}','{$popClass}')\"";
			} else {
				$popAttr = '';
			}
			if ($set['eventColor']) { //use event color
				$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').' background-color:'.($evt['cbg'] ? $evt['cbg'] : '#FFFFFF').';';
			} else { //use user color
				$eStyle = ' background-color:'.($evt['uco'] ? $evt['uco'] : '#FFFFFF').';';
			}
			if ($evt['app'] and !$evt['apd']) { $eStyle .= 'border-left:2px solid #ff0000;'; }
			$class = $eHeight < 21 ? 'dwEventNw' : 'dwEvent';
			echo "<div class='evtBox' style='top:{$stM}px; left:{$eLeft}%; height:{$eHeight}px; width:{$eWidth}%;{$eStyle}'>\n";
			echo "<div class='{$class}'>{$chBox}".(($showDetails or $evt['mayE']) ? "<span class='point' onclick=\"editE({$evt['eid']},'{$date}');\"" : "<span class='arrow'")."{$popAttr}>{$stiPrefix}{$evt['tit']}</span></div></div>\n";
		}
	}
}

function showHours() {
	global $set, $xx;
	//build day
	$tsHeight = $set['dwTsHeight'] -1;
	echo "<div class='timeFrame'>\n";
	echo "<div class='times' style='height:{$tsHeight}px;'>{$xx['vws_all_day']}</div>\n";
	$i = $set['dwStartHour'];
	$j = 0;
	if ($set['dwStartHour']) {
		echo "<div class='times' style='height:{$tsHeight}px;'>{$xx['vws_earlier']}</div>\n";
	}
	while ($i < $set['dwEndHour']) {
		echo "<div class='times' style='height:{$tsHeight}px;'>".ITtoDT(str_pad($i,2,"0",STR_PAD_LEFT).":".str_pad($j,2,"0",STR_PAD_LEFT))."</div>\n";
		$j = ($j + $set['dwTimeSlot'])%60;
		if ($j == 0) { $i++; }
	}
	if ($set['dwEndHour'] < 24) {
		echo "<div class='times' style='height:{$tsHeight}px;'>{$xx['vws_later']}</div>\n";
	}
	echo "</div>\n";
}

function showDay($sDate,$caption="") {
	global $set;

	//build day
	$tsHeight = $set['dwTsHeight'] -1;
	echo "<div class='timeFrame'>\n";
	echo "<var style='height:{$tsHeight}px;' id='a00:00:{$sDate}'></var>\n";
	$i = $set['dwStartHour'];
	$j = 0;
	if ($set['dwStartHour']) {
		echo "<var style='height:{$tsHeight}px;' id='t00:30:{$sDate}'></var>\n";
	}
	while ($i < $set['dwEndHour']) {
		echo "<var style='height:{$tsHeight}px;' id='t".str_pad($i,2,"0",STR_PAD_LEFT).":".str_pad($j,2,"0",STR_PAD_LEFT).":{$sDate}'></var>\n";
		$j = ($j + $set['dwTimeSlot'])%60;
		if ($j == 0) { $i++; }
	}
	if ($set['dwEndHour'] < 24) {
		echo "<var style='height:{$tsHeight}px;' id='t".str_pad($i,2,"0",STR_PAD_LEFT).":".str_pad($j,2,"0",STR_PAD_LEFT).":{$sDate}'></var>\n";
	}
	echo "<div class=dates>\n";
	showGrid($sDate);
	echo "</div>";
	echo "</div>\n";
}


if ($privs > 1) {
?>
<script>
//drag time functions
window.onload = dragTime;
var start, end, color, draggedEls=new Array();

function dragTime() {
	var x = new Array();
	x = $T("var");
	color = x[0].style.backgroundColor;
	for (var i = (x.length - 1);i >= 0;i--) {
		x[i].onmousedown = starttime;
		x[i].onmouseover = dragtime;
		x[i].onmouseup = endtime;
	}
}

function starttime() {
	start = end = this.id;
	this.style.backgroundColor = "#cccccc";
	draggedEls.push(this); //remember colored elements
}

function dragtime() {
	if (start) {
		if (this.id < end) {
			$I(end).style.backgroundColor=color;
		} else {
			this.style.backgroundColor = "#cccccc";
			draggedEls.push(this); //remember colored elements
		}
		end = this.id;
	}
}

function endtime() {
	var hrs,mins,win,sdate,stime,etime;
	var x = new Array;
	if (end >= start) {
		sdate = start.substr(7);
		stime = start.substr(1,2) + ":" + start.substr(4,2);
		hrs = parseInt(end.substr(1,2),10);
		mins = (parseInt(end.substr(4,2),10) + dwTimeSlot)%60;
		if (mins == 0) { hrs++; }
		if (hrs == 24) { hrs--; mins = 59; }
		etime = String("0" + hrs).slice(-2) + ":" + String("0" + mins).slice(-2);
		if (start.substr(0,1) == 'a') { etime ="23:59"; } //all day
		win = newE(sdate,stime,etime);
		for (var i = (draggedEls.length - 1);i >= 0;i--) {
			draggedEls[i].style.backgroundColor = color;
		}
	}
	start = end = null;
}
</script>
<?php
}
?>
