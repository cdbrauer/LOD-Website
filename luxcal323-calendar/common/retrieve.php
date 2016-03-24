<?php
/*
= retrieves events from db function =
Queries database for a specified period and dumps events in an arrays
Input params:
- start date
- end date (in 2010-04-28 format)
- string with letters u and/or c (optional); if present, u includes user filter and c includes cat filter
- filter (optional) additional filter in SQL format

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

//initialize
$evtList = array();

function sortEvt($a, $b) { return strcmp(str_pad($a['sti'],5).$a['seq'], str_pad($b['sti'],5).$b['seq']); }

//main function
function retrieve($start,$end,$iFilter='',$xFilter='') {
	global $privs, $evtList;

	$evtList = array(); //clear event list

	//set filter
	$filter = '';
	if (strpos($iFilter,'u') !== false and count($_SESSION['cU']) > 0 and $_SESSION['cU'][0] != 0) {
		$filter .= " AND e.user_id IN (".implode(",",$_SESSION['cU']).")";
	}
	if (strpos($iFilter,'c') !== false and count($_SESSION['cC']) > 0 and $_SESSION['cC'][0] != 0) {
		$filter .= " AND c.sequence IN (".implode(",",$_SESSION['cC']).")";
	}
	if (!isset($_SESSION['uid']) or $_SESSION['uid'] == 1) { $filter .= " AND c.public = 1"; } //only show public events
	if ($xFilter) { $filter .= ' AND '.$xFilter; } //add external filter
	
	//set user id
	$userId = isset($_SESSION['uid']) ? $_SESSION['uid'] : 1; //if not set, public

	/* retrieve events between $start and $end */
	$q0 =
	"SELECT
		e.s_date AS sda,
		e.e_date AS eda,
		DATE_FORMAT(e.s_time,'%H:%i') AS sti,
		DATE_FORMAT(e.e_time,'%H:%i') AS eti,
		e.r_type AS r_t,
		e.r_interval AS r_i,
		e.r_period AS r_p,
		e.r_month AS r_m,
		e.r_until AS r_u,
		e.notify AS rem,
		e.not_mail AS rml,
		e.a_datetime AS adt,
		e.m_datetime AS mdt,
		e.event_id AS eid,
		e.event_type AS typ,
		e.title AS tit,
		e.category_id AS cid,
		e.venue AS ven,
		e.description AS des,
		e.xfield1 AS xf1,
		e.xfield2 AS xf2,
		e.user_id AS uid,
		e.editor AS edr,
		e.approved AS apd,
		e.private AS pri,
		e.checked AS chd,
		e.x_dates AS xda,
		c.name AS cnm,
		c.approve AS app,
		c.sequence AS seq,
		c.rpeat AS rpt,
		c.color AS cco,
		c.background AS cbg,
		c.chbox AS cbx,
		c.chlabel AS clb,
		c.chmark AS cmk,
		u.user_name AS una,
		u.color AS uco
	FROM [db]events AS e
	INNER JOIN [db]categories AS c ON c.category_id = e.category_id
	INNER JOIN [db]users AS u ON u.user_id = e.user_id
	WHERE e.status >= 0".$filter;

	//process non-recurring events
	
	$q1 = $q0."
		AND c.rpeat = 0
		AND e.r_type = 0
		AND ((e.s_date <= '$end') AND (IF(e.e_date != '9999-00-00', e.e_date, e.s_date) >= '$start') )
	ORDER BY
		e.s_date";
	$rSet = dbQuery($q1);
//echo "NR: ".mysql_num_rows($rSet)." "; //TEST
	while ($row = mysql_fetch_assoc($rSet)) {
		if ((!$row['app'] or $row['apd'] or $privs > 3) and !$row['pri'] or ($row['uid'] == $userId) or $privs == 9) { //private / not approved: for current user + admin
			$eEnd = ($row['eda'][0] != '9') ? $row['eda'] : $row['sda'];
			processEvent(max($start,$row['sda']), min($end,$eEnd), $row['sda'], $eEnd, $row);
		}
	}

	//process recurring events

	$q1 = $q0."
		AND (c.rpeat > 0 OR e.r_type > 0)
		AND e.s_date <= '$end'
		AND e.r_until >= '$start'
	ORDER BY
		e.s_date";
	$rSet = dbQuery($q1);
	while ($row = mysql_fetch_assoc($rSet)) {
		if ((!$row['app'] or $row['apd'] or $privs > 3) and !$row['pri'] or ($row['uid'] == $userId) or $privs == 9) { //private / not approved: for current user + admin
			$dDif = ($row['eda'][0] != '9') ? intval((strtotime($row['eda']) - strtotime($row['sda'])) / 86400) : 0; //delta start date - end date
			$eStart = $row['sda'];
			if ($row['rpt'] > 0) { //cat repeat overrides
				$row['r_t'] = $row['r_i'] = 1;
				$row['r_p'] = $row['rpt'];
				$row['r_u'] = '9999-00-00';
			} elseif ($row['r_t'] == 2) {
				$nxtD = nextRdate($eStart,$row['r_t'],$row['r_i'],$row['r_p'],$row['r_m'],0); //goto 1st occurence of xth <dayname> in month y
				$eStart = ($nxtD < $eStart) ? nextRdate($eStart,$row['r_t'],$row['r_i'],$row['r_p'],$row['r_m'],1) : $nxtD;
			}
			$eEnd = date("Y-m-d", mktime(12,0,0,substr($eStart,5,2),substr($eStart,8,2)+$dDif,substr($eStart,0,4)));
			while ($eStart <= min($end, $row['r_u']) and $row['r_u'] >= $start) {
				if ($eEnd >= $start) { //hit
					processEvent(max($start,$eStart), min($end,$eEnd), $eStart, $eEnd, $row);
				}
				$eStart = nextRdate($eStart,$row['r_t'],$row['r_i'],$row['r_p'],$row['r_m'],1);
				$eEnd = date("Y-m-d", mktime(12,0,0, substr($eStart,5,2),substr($eStart,8,2)+$dDif,substr($eStart,0,4)));
			}
		}
	}
	//sort the event list per date
	ksort($evtList);
	foreach ($evtList as &$events) {
		usort($events, 'sortEvt');
	}
}

//
//Process (multi-day) events and save event data
//
function processEvent($from, $till, $eStart, $eEnd, &$row) {
	global $set, $evtList, $privs;
	$sTs = mktime(12,0,0,substr($from,5,2),substr($from,8,2),substr($from,0,4));
	$eTs = mktime(14,0,0,substr($till,5,2),substr($till,8,2),substr($till,0,4));
	for($i=$sTs;$i<=$eTs;$i+=86400) { //increment 1 day
		$evt = array();
		$curD = date('Y-m-d', $i);
		if (strpos($row['xda'], $curD) === false) { //no exceptions
			$curdm = substr($curD,5);
			if ($row['eda'][0] != '9' and $row['sda'] < $row['eda']) { //multi-day event; mde -> 1:first, 2:in between ,3:last day
				$evt['mde'] = ($curdm == substr($eStart,5)) ? 1 : (($curdm == substr($eEnd,5)) ? 3 : 2);
			} else { //single day event
				$evt['mde'] = 0;
			}
			$evt['sda'] = $row['sda'];
			$evt['eda'] = $row['eda'];
			if (($row['sti'] == '00:00') and ($row['eti'] == '23:59')) {
				$evt['ald'] = true;
				$evt['sti'] = $evt['eti'] = ''; //all day: start/end time = ''
			} else {
				$evt['ald'] = false;
				$evt['sti'] = $row['sti'];
				$evt['eti'] = $row['eti'][0] != '9' ? $row['eti'] : ''; //no end time = ''
			}
			$evt['r_t'] = $row['r_t'];
			$evt['r_i'] = $row['r_i'];
			$evt['r_p'] = $row['r_p'];
			$evt['r_m'] = $row['r_m'];
			$evt['r_u'] = $row['r_u'];
			$evt['rem'] = $row['rem'];
			$evt['rml'] = $row['rml'];
			$evt['adt'] = ($row['adt'][0] != '9') ? $row['adt'] : '';
			$evt['mdt'] = ($row['mdt'][0] != '9') ? $row['mdt'] : '';
			$evt['eid'] = $row['eid'];
			$evt['typ'] = $row['typ'];
			$evt['tit'] = stripslashes($row['tit']);
			$evt['cid'] = $row['cid'];
			$evt['ven'] = stripslashes($row['ven']);
			$evt['des'] = stripslashes($row['des']);
			$evt['xf1'] = stripslashes($row['xf1']);
			$evt['xf2'] = stripslashes($row['xf2']);
			$evt['uid'] = $row['uid'];
			$evt['edr'] = stripslashes($row['edr']);
			$evt['apd'] = $row['apd'];
			$evt['pri'] = $row['pri'];
			$evt['chd'] = $row['chd'];
			$evt['cnm'] = stripslashes($row['cnm']);
			$evt['app'] = $row['app'];
			$evt['seq'] = str_pad($row['seq'],2,"0",STR_PAD_LEFT);
			$evt['uco'] = $row['uco'];
			$evt['cco'] = $row['cco'];
			$evt['cbg'] = $row['cbg'];
			$evt['cbx'] = $row['cbx'];
			$evt['clb'] = stripslashes($row['clb']);
			$evt['cmk'] = $row['cmk'];
			$evt['una'] = stripslashes($row['una']);
			$evt['mayE'] = ($privs > 2 or ($privs == 2 and $row['uid'] == $_SESSION['uid'])); //edit rights
			$evtList[$curD][] = $evt;
		}
	}
}

//
//Compute next event start date
//
function nextRdate($curD, $rT, $rI, $rP, $rM, $i) { //$i=0: 1st occurrence; $i=1: next occurrence
	if($rT == 1) { //repeat xth day, week, month, year
		$curT = mktime(12,0,0,substr($curD,5,2),substr($curD,8,2),substr($curD,0,4));
		$curDoM = date('j',$curT);
		switch ($rP) { //period
		case 1: //day
			$nxtD = date('Y-m-d',strtotime("+$rI days",$curT)); break;
		case 2: //week
			$nxtD = date('Y-m-d',strtotime("+$rI weeks",$curT)); break;
		case 3: //month
			$i = 1;
			while(date('j',strtotime('+'.$i*$rI.' months',$curT)) != $curDoM) { $i++; } //deal with 31st
			$nxtD = date('Y-m-d',strtotime('+'.$i*$rI.' months',$curT));
			break;
		case 4: //year
			$i = 1;
			while(date('j',strtotime('+'.$i*$rI.' years',$curT)) != $curDoM) { $i++; } //deal with 29/02
			$nxtD = date('Y-m-d',strtotime('+'.$i*$rI.' years',$curT));
			break;
		}
	} else { //repeat on the xth ($rI) <dayname> ($rP) of month y ($rM)
		if ($rM) {
			$curM = $rM; //one specific month
			$curY = substr($curD,0,4)+$i+((substr($curD,5,2) <= $rM) ? 0 : 1);
		} else { //each month
			$curM = substr($curD,5,2)+$i;
			$curY = substr($curD,0,4);
		}
		$day1Ts = mktime(12,0,0,$curM,1,$curY);
		$dowDif = $rP - date('N',$day1Ts); //day of week difference
		$offset = $dowDif + 7 * $rI;
		if ($dowDif >= 0) { $offset -= 7; }
		if ($offset >= date('t',$day1Ts)) { $offset -= 7; }
		$nxtD = date('Y-m-d', $day1Ts + (86400 * $offset));
	}
	return $nxtD;
}
?>