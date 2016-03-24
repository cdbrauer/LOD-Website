<?php
/*
= function to retrieves event records from db =
Queries database starting from a specified date and dumps changed events in an arrays
Input params:
- start date (in 2010-04-28 format)
- allEvents; 0: apply normal filters, 1: no filters

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

function sortEvts($a, $b) { return strcmp(strval($a['sts']+1).$a['sda'].str_pad($a['sti'],5).$a['seq'], strval($b['sts']+1).$b['sda'].str_pad($b['sti'],5).$b['seq']); }

function grabChanges($sDate,$allEvents) { //query db for changes since $sDate
	global $set, $evtList, $privs;
	
	//set filter
	$filter = '';
	if (!$allEvents) {
		if (count($_SESSION['cU']) > 0 and $_SESSION['cU'][0] != 0) {
			$filter .= " AND e.user_id IN (".implode(",",$_SESSION['cU']).")";
		}
		if (count($_SESSION['cC']) > 0 and $_SESSION['cC'][0] != 0) {
			$filter .= " AND c.sequence IN (".implode(",",$_SESSION['cC']).")";
		}
		if ($_SESSION['uid'] == 1) { $filter .= " AND c.public = 1"; }
	}
	
	//retrieve events
	$q =
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
		e.a_datetime AS adt,
		e.m_datetime AS mdt,
		e.event_id AS eid,
		e.status AS sts,
		e.title AS tit,
		e.venue AS ven,
		e.description AS des,
		e.xfield1 AS xf1,
		e.xfield2 AS xf2,
		e.user_id AS uid,
		e.editor AS edr,
		e.approved AS apd,
		e.private AS pri,
		c.name AS cnm,
		c.approve AS app,
		c.sequence AS seq,
		c.color AS cco,
		c.background AS cbg,
		u.user_name AS una,
		u.color AS uco
	FROM [db]events AS e
	INNER JOIN [db]categories AS c ON c.category_id = e.category_id
	INNER JOIN [db]users AS u ON u.user_id = e.user_id
	WHERE ((SUBSTR(e.a_datetime,1,10) != '9999-00-00' AND SUBSTR(e.a_datetime,1,10) >= '$sDate') or (SUBSTR(e.m_datetime,1,10) != '9999-00-00' AND SUBSTR(e.m_datetime,1,10) >= '$sDate'))".$filter;
	$rSet = dbQuery($q);

	//process events
	while ($row = mysql_fetch_assoc($rSet)) {
		$evt = array();
		if (($allEvents or ((!$row['app'] or $row['apd'] or $privs > 3) and !$row['pri'])) or ($row['uid'] == $_SESSION['uid']) or $privs == 9) { //private / not approved: only for current user + admin
			$evt['sda'] = $row['sda'];
			$evt['eda'] = ($row['eda'][0] != '9') ? $row['eda'] : '';
			if (($row['sti'] == '00:00') and ($row['eti'] == '23:59')) {
				$evt['ald'] = true;
				$evt['sti'] = $evt['eti'] = ''; //all day: start/end time = ""
			} else {
				$evt['ald'] = false;
				$evt['sti'] = $row['sti'];
				$evt['eti'] = ($row['eti'][0] != '9') ? $row['eti'] : ""; //no end time = ""
			}
			$evt['r_t'] = $row['r_t'];
			$evt['r_i'] = $row['r_i'];
			$evt['r_p'] = $row['r_p'];
			$evt['r_m'] = $row['r_m'];
			$evt['r_u'] = ($row['r_u'][0] != '9') ? $row['r_u'] : "";
			$evt['rem'] = $row['rem'];
			$evt['adt'] = $row['adt'];
			$evt['mdt'] = ($row['mdt'][0] != '9') ? $row['mdt'] : "";
			$evt['eid'] = $row['eid'];
			$evt['sts'] = $row['sts'];
			$evt['tit'] = stripslashes($row['tit']);
			$evt['ven'] = stripslashes($row['ven']);
			$evt['des'] = stripslashes($row['des']);
			$evt['xf1'] = stripslashes($row['xf1']);
			$evt['xf2'] = stripslashes($row['xf2']);
			$evt['uid'] = $row['uid'];
			$evt['edr'] = stripslashes($row['edr']);
			$evt['apd'] = $row['apd'];
			$evt['cnm'] = stripslashes($row['cnm']);
			$evt['app'] = $row['app'];
			$evt['seq'] = str_pad($row['seq'],2,"0",STR_PAD_LEFT);
			$evt['uco'] = $row['uco'];
			$evt['cco'] = $row['cco'];
			$evt['cbg'] = $row['cbg'];
			$evt['una'] = stripslashes($row['una']);
			$evt['mayE'] = ($privs > 2 or ($privs == 2 and $row['uid'] == $_SESSION['uid'])); //edit rights
			$modDate = substr(max($evt['adt'],$evt['mdt']),0,10);
			$evtList[$modDate][] = $evt;
		}
	}
	ksort($evtList);
	foreach ($evtList as &$events) { //sort event list per change date
		usort($events, 'sortEvts');
	}
}
?>