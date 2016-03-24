<?php
/*
= iCal event file import script =

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
$adminLang = (file_exists('./lang/ai-'.strtolower($_SESSION['cL']).'.php')) ? $_SESSION['cL'] : "English";
require './lang/ai-'.strtolower($adminLang).'.php';

$defcatID = (isset($_POST['defcatID'])) ? $_POST['defcatID'] : 1;
$fromD = (isset($_POST['fromD'])) ? $_POST['fromD'] : IDtoDD(date("Y-m-d"));

$curLine = 0; //current iCal file line #
$calProps = array("PRODID","VERSION","X-WR-CALNAME","X-LC-CONTENT"); //iCal properties and components of interest


/* sub-functions */

function parseEvent(&$icsLines) { //parse iCal file
global $curLine;

	//initialize event
	$event = array(
		"dtS" => "", //date/time stamp
		"uid" => "", //unique id
		"tit" => "", //title
		"des" => "", //description
		"cat" => "", //category
		"ven" => "", //venue
		"pri" => 0, //private
		"sda" => "", //start date
		"eda" => "", //end date
		"sti" => "", //start time
		"eti" => "", //end time
		"r_t" => 0, //repeat type
		"r_i" => 0, //repeat interval
		"r_p" => 0, //repeat period
		"r_m" => 0, //repeat month
		"r_u" => "" //repeat until
	);
	$hits = array();
	$rrule = $valarm = false; //init
	
	//Iterate icsLines for one event
	while (list($k, $v) = explode(':', str_replace('\;','~',$icsLines[$curLine++]), 2)) { //1st colon only
		$key = explode(';',$k);
		$value = explode(';',$v);
		foreach ($key as &$val) { $val = trim($val); }
		foreach ($value as &$val) { $val = trim($val); }
		unset($val); //break reference
		if ($key[0] == "END" and $value[0] == "VEVENT") { break; } //event end
		if ($key[0] == "BEGIN" and $value[0] == "VALARM") { $valarm = true; break; } //alarm begin
		if ($key[0] == "END" and $value[0] == "VALARM") { $valarm = false; break; } //alarm end
		if ($valarm) { break; } //skipping through alarm component
 		switch (strtoupper($key[0])) {
		case "DTSTAMP":
			$event['dtS'] = $value[0];
			break;
		case "UID":
			$event['uid'] = $value[0];
			break;
		case "CLASS":
			if ($value[0] != "PUBLIC") {
				$event['pri'] = 1;
			}
			break;
		case "SUMMARY":
			$event['tit'] = $value[0];
			break;
		case "DESCRIPTION":
			$event['des'] .= trim(stripslashes(str_ireplace(array('\n','~'),array("\n",';'),$value[0]))); //double quotes important!
			break;
		case "URL":
			$event['des'] .= "\n<a class='urlembed' href='{$value[0]}' target='_blank'>url</a>\n";
			break;
		case "LOCATION":
			$event['ven'] = $value[0];
			break;
		case "CATEGORIES":
			$event['cat'] = $value[0];
			break;
		case "RRULE":
			$rrule = true;
			$r_i1 = $r_i2 = $r_p1 = $r_p2 = $r_count = $r_m = 0; $r_until = ''; //init
			foreach ($value as &$val) { //process each individual value
				if (preg_match("%^FREQ=(DAILY|WEEKLY|MONTHLY|YEARLY)$%i", $val, $hits)) {
					$r_i1 = 1;
					switch (strtoupper($hits[1])) {
						case 'DAILY': $r_p1 = 1; break;
						case 'WEEKLY': $r_p1 = 2; break;
						case 'MONTHLY': $r_p1 = 3; break;
						case 'YEARLY': $r_p1 = 4;
					}
				} elseif (preg_match("%^INTERVAL=([1-6])$%i" , $val, $hits)) {
					$r_i1 = $hits[1];
				} elseif (preg_match("%^BYMONTH=(\d|1[0-2])$%i" , $val, $hits)) { //only works if only 1 month
					$r_m = $hits[1];
				} elseif (preg_match("%^BYDAY=([1-4]?|(?:-1)?)(MO|TU|WE|TH|FR|SA|SU)$%i", $val, $hits)) {
					$r_i2 = ($hits[1]) ? (($hits[1] != '-1') ? $hits[1] : '5') : '1'; //-1 => 5 (last x-day)
					switch (strtoupper($hits[2])) {
						case 'MO': $r_p2 = 1; break;
						case 'TU': $r_p2 = 2; break;
						case 'WE': $r_p2 = 3; break;
						case 'TH': $r_p2 = 4; break;
						case 'FR': $r_p2 = 5; break;
						case 'SA': $r_p2 = 6; break;
						case 'SU': $r_p2 = 7;
					}
				} elseif (preg_match("%^COUNT=([1-9][0-9]?)$%i", $val, $hits)) {
					$r_count = $hits[1];
				} elseif (preg_match("%^UNTIL=(\d{8})(T.*)*$%i" , $val, $hits)) {
					$r_until = substr($hits[1],0,4)."-".substr($hits[1],4,2)."-".substr($hits[1],6,2);
				}
			}
			break;
		case "DTSTART":
			if (preg_match("%^(\d{8})(T(\d{4}))?%i",$value[0],$hits)) {
				$event['sda'] = substr($hits[1],0,4)."-".substr($hits[1],4,2)."-".substr($hits[1],6,2);
				if (isset($hits[3])) {
					$event['sti'] = substr($hits[3],0,2).":".substr($hits[3],2,2);
				}
			}
			break;
		case "DTEND":
			if (preg_match("%^(\d{8})(T(\d{4}))?%i",$value[0],$hits)) {
				$event['eda'] = substr($hits[1],0,4)."-".substr($hits[1],4,2)."-".substr($hits[1],6,2);
				if (isset($hits[3])) {
					$event['eti'] = substr($hits[3],0,2).":".substr($hits[3],2,2);
				}
			}
			break;
		case "DURATION":
			if (!isset($event['eda']) and !isset($event['eti'])) {
				if (preg_match("%^\+?P(?:(\d{1,2})W)?(?:(\d{1,2})D)?T(?:(\d{1,2})H)?(?:(\d{1,2})M)?%i", $value[0], $hits)) {
					$durSeconds = 604800*$hits[1] + 86400*$hits[2] + 3600*$hits[3] + 60*$hits[1];
					$eUnixTS = mktime (substr($event['sti'],0,2), substr($event['sti'],3,2), 0, substr($event['sda'],5,2), substr($event['sda'],8,2), substr($event['sda'],0,4)) + $durSeconds;
					$event['eda'] = date('Y-m-d',$eUnixTS);
					$event['eti'] = date('H:i',$eUnixTS);
				}
			}
			break;
		}
	}
	/* validate event */
	if (!$event['tit'] or !$event['sda']) { return false; } //error
	$event['des'] = trim($event['des']); //strip off newlines
	/* post processing */
	//end date
	if ($event['eda'] > $event['sda'] and !$event['eti']) {
		$event['eda'] = date('Y-m-d', mktime (0,0,0,substr($event['eda'],5,2),substr($event['eda'],8,2)-1,substr($event['eda'],0,4))); //-1 day
	}
	//recurring events
	if ($rrule) {
		if (($r_p1 == 3 and $r_p2 > 0) or ($r_p1 == 4 and $r_p2 > 0 and $r_m > 0)) { //every xth (r_i) (0-5) <dayname> (r_p) of the month y (r_m)
			$event['r_t'] = 2;
			$event['r_i'] = $r_i2;
			$event['r_p'] = $r_p2;
			$event['r_m'] = $r_m;
			if ($r_until) {
				$event['r_u'] = $r_until;
			} elseif ($r_count) {
				$r_count--;
				$event['r_u'] = date('Y-m-d', mktime (0,0,0,substr($event['sda'],5,2) + $r_count,substr($event['sda'],8,2),substr($event['sda'],0,4)));
			}
		} elseif ($r_i2 == 0 and $r_p1 > 0) {
			$event['r_t'] = 1; //every xth (0-6) day|week|month|year
			$event['r_i'] = $r_i1;
			$event['r_p'] = $r_p1;
			if ($r_until) {
				$event['r_u'] = $r_until;
			} elseif ($r_count) {
				$r_count--;
				$r_offd = $r_offm = $r_offy = 0;
				switch ($r_p1) {
					case 1: $r_offd = $r_i1 * $r_count; break; //daily
					case 2: $r_offd = $r_i1 * 7 * $r_count; break; //weekly
					case 3: $r_offm = $r_i1 * $r_count; break; //monthly
					case 4: $r_offy = $r_i1 * $r_count; //yearly
				}
				$event['r_u'] = date('Y-m-d',mktime(12,0,0,substr($event['sda'],5,2) + $r_offm,substr($event['sda'],8,2) + $r_offd,substr($event['sda'],0,4) + $r_offy));
			}
		} else {
			$event['r_t'] = -1; //RRULE incompatible
		}
	}
	return $event;
}

function processEvtFields(&$sDate,&$eDate,&$sTime,&$eTime,&$title) { //validate event fields
	$errors = 0;
	$nofDates = count($sDate);
	for ($i = 0; $i < $nofDates; $i++) {
		$error = 0;
		if (($IsDate = DDtoID($sDate[$i])) === false) { $error++; } //convert Display Date to ISO Date
		if (($IeDate = DDtoID($eDate[$i])) === false) { $error++; }
		if (($IsTime = DTtoIT($sTime[$i])) === false) { $error++; }
		if (($IeTime = DTtoIT($eTime[$i])) === false) { $error++; }
		if (!$error) {
			if ($IsDate == $IeDate) { $IeDate = ''; }
			if ($IeDate and (!$IsDate or $IeDate < $IsDate)) { list($IsDate,$IeDate) = array($IeDate,$IsDate); } //swap start and end date
			if ($IeDate and $IsTime == "00:00" and $IeTime == "00:00") {
				$IeDate = date("Y-m-d",mktime(12,0,0,substr($IeDate,5,2),substr($IeDate,8,2),substr($IeDate,0,4)) - 86400); //-1 day
				if ($IsDate == $IeDate) { $IeDate = ''; }
				$IeTime = '23:59';
			}
			if (!$IeDate and $IsTime == $IeTime) { $IeTime = ""; }
			if ($IeTime and !$IeDate and ($IeTime < $IsTime or !$IsTime)) { list($IsTime,$IeTime) = array($IeTime,$IsTime); } //swap start and end time
			if (!$IsTime and !$IeTime) { $IsTime = '00:00'; $IeTime = '23:59'; } //no times: all day
			$sDate[$i] = IDtoDD($IsDate); //convert ISO Date to Display Date
			$eDate[$i] = IDtoDD($IeDate);
			$sTime[$i] = ITtoDT($IsTime); //convert ISO Time to Display Time
			$eTime[$i] = ITtoDT($IeTime);
		}
		$errors += $error;
		if (!$title[$i]) { $errors++; } //title empty
	}
return $errors;
}

function eventInDb($title,$sDate,$eDate,$sTime,$eTime) {	//test if event present in db

	$q =
	"SELECT
		title
	FROM [db]events e
	WHERE
		status >= 0
		AND title = '$title'
		AND s_date = '$sDate'
		AND e_date = '$eDate'
		AND s_time = '$sTime'
		AND e_time = '$eTime'
		";
	$rset = dbQuery($q);
	return (mysql_num_rows($rset) > 0 ? true : false);
}

function repeatText($type,$interval,$period,$rmonth,$until) { //make repeat text
	global $xx, $months, $wkDays;

	switch ($type) {
		case -1: $repeat = '<b>'.$xx['evt_repeat_not_supported'].'</b>'; break;
		case 0: $repeat = ""; break;
		case 1: $repeat = $xx['evt_repeat'].' '.$xx['evt_interval1_'.$interval].' '.$xx['evt_period1_'.$period]; break;
		case 2: $repeat = $xx['evt_repeat_on'].' '.$xx['evt_interval2_'.$interval].' '.$wkDays[$period].' '.$xx['of'].' '.($rmonth ? $months[$rmonth-1] : $xx['evt_each_month']);
	}
	if ($type > 0 and $until) {
		$repeat .= ' '.$xx['evt_until'].' '.IDtoDD($until);
	}
	return $repeat;
}

/* main functions */

function instructions() {
	global $ax;
	
	echo "<aside class='aside'>{$ax['xpl_import_ical']}
		<table class='grid'>
		<tr><th style='width:auto;'>ID</th><th style='width:auto;'>{$ax['iex_category']}</th></tr>\n";
	$rset = dbQuery("SELECT category_id AS cid, name AS cnm FROM [db]categories WHERE status >= 0 ORDER BY category_id");
	if (!$rset) {
		echo $ax['iex_db_error'];
	} else {
		while ($row = mysql_fetch_assoc($rset)) {
			echo "<tr><td class='floatC'>{$row['cid']}</td><td>&nbsp;{$row['cnm']}</td></tr>\n";
		}
	}
	echo "</table>\n</aside>\n";
}

function uploadFile() {
global $ax, $defcatID, $fromD;

echo "<div class='centerBox'>
	<form action='index.php?lc' method='post' enctype='multipart/form-data'>
	<input type='hidden' name='MAX_FILE_SIZE' value='1000000'>
	<table class='fieldBox'>
	<tr><td class='legend' colspan='2'>&nbsp;{$ax['iex_upload_ics']}&nbsp;</td></tr>
	<tr><td class='label'>{$ax['iex_file']}:</td><td><input type='file' name='fName'></td></tr>
	<tr><td class='label'>{$ax['iex_default_cat_id']}:</td><td><input type='text' name='defcatID' value='{$defcatID}' size='1'> ({$ax['iex_if_no_cat']})</td></tr>
	<tr><td class='label'>{$ax['iex_import_events_from_date']}:</td><td><input type='text' name='fromD' id='fromD' value='{$fromD}' size='8'>
	<button title=\"{$ax['iex_select_date']}\" onclick=\"dPicker(0,'nill','fromD');return false;\">&larr;</button></td></tr>
	</table>
	<input type='submit' name='uploadFile' value=\"{$ax['iex_upload_file']}\">
	</form>
	</div>
	<div style='clear:right'></div>\n";
}

function processUpload() {
	global $ax, $curLine, $calProps, $fromD, $defcatID;
	
	$fName = $_FILES['fName']['tmp_name'];
	if (!$fName) { return $ax['iex_no_file_name']; } //ical file missing
	$fContent = file_get_contents($fName); //read file
	unlink($fName);
	$begin = strpos($fContent,'BEGIN:VCALENDAR');
	if ($begin === false) { return $ax['iex_no_begin_tag']; }	//sanity check
	$fContent = preg_replace("#\r?\n[\s\t]#m","",trim(substr($fContent,$begin+15))); //skip BEGIN and unfold lines
	$icsLines = preg_split("#\r?\n#", $fContent); //split into lines
	unset($fContent);

	//Get calendar categories
	$rset = dbQuery("SELECT category_id AS cid, name AS cnm FROM [db]categories WHERE status >= 0 ORDER BY category_id");
	if ($rset) {
		$cats = array();
 		while ($row = mysql_fetch_assoc($rset)) {
			$cats[$row['cnm']] = $row['cid'];
		}
	}
	//Iterate icsLines
	$curLine = 1;
	while (isset($icsLines[$curLine])) {
		list($key, $value) = explode(':', $icsLines[$curLine++], 2);
		$key = strtoupper(trim($key));
		$value = trim($value);
		if ($key == "BEGIN" and strtoupper($value) == "VEVENT") { //event start
			$event = parseEvent($icsLines);
			if ($event === false) { return $ax['iex_ics_file_error_on_line'].": ".$curLine; } //ics file error
			//save event data
			if (($event['r_t'] == 0 and (!$event['eda'] or $event['eda'] >= DDtoID($fromD))) or ($event['r_t'] != 0 and (!$event['r_u'] or $event['r_u'] >= DDtoID($fromD)))) {
				$curCat = '';
				foreach ($cats as $catName => $catID) {
					if (strpos(strtolower($event['cat']), trim(strtolower($catName))) !== false) { $curCat = $catID; break; }
				}
				$_POST['title'][] = $event['tit'];
				$_POST['venue'][] = $event['ven'];
				$_POST['descr'][] = $event['des'];
				$_POST['catID'][] = ($curCat) ? $curCat : $defcatID;
				$_POST['sDate'][] = IDtoDD($event['sda']);
				$_POST['eDate'][] = IDtoDD($event['eda']);
				$_POST['sTime'][] = ITtoDT($event['sti']);
				$_POST['eTime'][] = ITtoDT($event['eti']);
				$_POST['r_t'][] = $event['r_t'];
				$_POST['r_i'][] = $event['r_i'];
				$_POST['r_p'][] = $event['r_p'];
				$_POST['r_m'][] = $event['r_m'];
				$_POST['r_u'][] = IDtoDD($event['r_u']);
				$_POST['delete'][] = 0;
			}
		} else { //meta data
			if (in_array($key, $calProps)) {
				$_POST[$key] = $value; //save meta data
			}
		}
	}
	return ''; //no error
}

function displayEvents($errors) {
	global $ax, $defcatID;
	
	$listHead = "";
	echo "<div class='centerBox'>
		<p class='error'>{$ax['iex_number_of_errors']}: {$errors} ({$ax['iex_bgnd_highlighted']})</p><br>
		<h4>{$ax['iex_verify_event_list']} \"{$ax['iex_add_events']}\"</h4><br>
		{$ax['iex_select_ignore']}<br><br>\n";
	echo "<button type='button' onclick=\"checkA('delete');\">Check all delete boxes</button>\n";
//display event list
	echo "<form action='index.php?lc' method='post'>
		<input type='hidden' name='defcatID' value='{$defcatID}'>\n";
	if (!empty($_POST['X-WR-CALNAME'])) {
		$listHead .= $_POST['X-WR-CALNAME'];
		echo "<input type='hidden' name='X-WR-CALNAME' value='{$_POST['X-WR-CALNAME']}'>\n";
	}
	if (!empty($_POST['X-LC-CONTENT'])) {
		$listHead .= "&nbsp;&nbsp;&nbsp;({$_POST['X-LC-CONTENT']})";
		echo "<input type='hidden' name='X-LC-CONTENT' value='{$_POST['X-LC-CONTENT']}'>\n";
	}
	$nofEvents = count($_POST['title']);
	echo "<table>\n";
	if ($listHead) { echo "<tr><td colspan='10' class='floatC'><h4>{$listHead}</h4></td></tr>\n"; }
	echo "<tr><th>{$ax['iex_ignore']}</th><th>{$ax['iex_title']}</th><th>{$ax['iex_venue']}</th><th>{$ax['iex_category']}</th><th>{$ax['iex_date']}</th><th>{$ax['iex_end_date']}</th><th>{$ax['iex_start_time']}</th><th>{$ax['iex_end_time']}</th><th>{$ax['iex_description']}</th><th>{$ax['iex_repeat']}</th></tr>\n";
	for ($i = 0; $i < $nofEvents; $i++) {
		$tic = (!$_POST['title'][$i]) ? " class='inputError'" : '';
		$sdc = (DDtoID($_POST['sDate'][$i]) === false) ? ' class="inputError"' : '';
		$edc = (($_POST['eDate'][$i]) and (DDtoID($_POST['eDate'][$i]) === false)) ? ' class="inputError"' : '';
		$stc = (DTtoIT($_POST['sTime'][$i]) === false) ? ' class="inputError"' : '';
		$etc = (($_POST['eTime'][$i]) and (DTtoIT($_POST['eTime'][$i]) === false)) ? ' class="inputError"' : '';
		echo "<tr>
			<td class='floatC'><input type='checkbox' name='delete[]' value='1'".(empty($_POST['delete'][$i]) ? "" : " checked='checked'").">
			<input type='hidden' name='r_t[]' value='{$_POST['r_t'][$i]}'>
			<input type='hidden' name='r_i[]' value='{$_POST['r_i'][$i]}'>
			<input type='hidden' name='r_p[]' value='{$_POST['r_p'][$i]}'>
			<input type='hidden' name='r_m[]' value='{$_POST['r_m'][$i]}'>
			<input type='hidden' name='r_u[]' value='{$_POST['r_u'][$i]}'>
			</td>
			<td><input type='text'{$tic} size='20' name='title[]' value=\"".stripslashes(substr($_POST['title'][$i],0,64))."\"></td>
			<td><input type='text' size='20' name='venue[]' value=\"".stripslashes(substr($_POST['venue'][$i],0,64))."\"></td>
			<td><input class='floatC' type='text' size='2' name='catID[]' value='{$_POST['catID'][$i]}'></td>
			<td><input class='floatC' type='text'{$sdc} size='9' name='sDate[]' value='{$_POST['sDate'][$i]}'></td>
			<td><input class='floatC' type='text'{$edc} size='9' name='eDate[]' value='{$_POST['eDate'][$i]}'></td>
			<td><input class='floatC' type='text'{$stc} size='5' name='sTime[]' value='{$_POST['sTime'][$i]}'></td>
			<td><input class='floatC' type='text'{$etc} size='5' name='eTime[]' value='{$_POST['eTime'][$i]}'></td>
			<td><textarea cols='30' rows='1' name='descr[]'>{$_POST['descr'][$i]}</textarea></td>
			<td>".repeatText($_POST['r_t'][$i],$_POST['r_i'][$i],$_POST['r_p'][$i],$_POST['r_m'][$i],DDtoID($_POST['r_u'][$i]))."</td>\n";
//		echo '<td>r_t= '.$_POST['r_t'][$i].' r_i= '.$_POST['r_i'][$i].' r_p= '.$_POST['r_p'][$i].'<br> r_m= '.$_POST['r_m'][$i].' r_u= '.$_POST['r_u'][$i]."</td>\n"; //for testing
		echo "</tr>\n";
	}
	echo "</table>
		<br><input class='noPrint' type='submit' name='addEvents' value=\"{$ax['iex_add_events']}\">
		<button class='noPrint' type='button' onclick=\"window.location.href='index.php?lc&amp;cP=94'\">{$ax['back']}</button>
		</form>
		</div>\n";
}

function addEvents() {
	global $ax, $defcatID;

	$msg = "";
	$nofEvents = count($_POST['title']);
	$added = $dropped = 0;
	for ($i = 0; $i < $nofEvents; $i++) {
		if (empty($_POST['delete'][$i]) and $_POST['r_t'][$i] >= 0) { //if delete not ticked and repeat-type is valid
			$title = mysql_real_escape_string(htmlspecialchars_decode(trim($_POST['title'][$i])));
			$venue = mysql_real_escape_string(htmlspecialchars_decode(trim($_POST['venue'][$i])));
			$descr = str_ireplace(array("\r\n", "\n", "\r"),"<br>",strip_tags(trim($_POST['descr'][$i]),'<a>')); //allow URLs and replace newline by <br>
			$descr = mysql_real_escape_string($descr);
			$sDate = DDtoID($_POST['sDate'][$i]);
			$eDate = ($_POST['eDate'][$i]) ? DDtoID($_POST['eDate'][$i]) : "9999-00-00";
			$sTime = DTtoIT($_POST['sTime'][$i]);
			$eTime = ($_POST['eTime'][$i]) ? DTtoIT($_POST['eTime'][$i]) : "99:00:00";
			$r_t = $_POST['r_t'][$i];
			$r_i = $_POST['r_i'][$i];
			$r_p = $_POST['r_p'][$i];
			$r_m = $_POST['r_m'][$i];
			$r_u = ($_POST['r_u'][$i]) ? DDtoID($_POST['r_u'][$i]) : "9999-00-00";
			$catID = ($_POST['catID'][$i]) ? $_POST['catID'][$i] : 1; //no cat
			if (!eventInDb($title,$sDate,$eDate,$sTime,$eTime)) { //add event to db
				$q = "INSERT INTO [db]events VALUES (NULL,DEFAULT,'$title','$descr',DEFAULT,DEFAULT,$catID,'$venue',{$_SESSION['uid']},DEFAULT,DEFAULT,DEFAULT,DEFAULT,'$sDate','$eDate',DEFAULT,'$sTime','$eTime',$r_t,$r_i,$r_p,$r_m,'$r_u',DEFAULT,DEFAULT,'".date("Y-m-d H:i")."','".date("Y-m-d H:i")."',DEFAULT)";
				$result = dbQuery($q);
				if (!$result) { $msg = $ax['iex_db_error']; }
				$added++;
			} else {
				$dropped++;
			}
		}
	}
	if (!$msg) $msg = $added." ".$ax['iex_events_added'].($dropped > 0 ? " / {$dropped} {$ax['iex_events_dropped']}" : "");
	return $msg;
}


//control logic

$msg = ""; $errors = 0; //init
if ($privs == 9) { //admin
	if (isset($_POST['uploadFile'])) {
		$msg = processUpload();
	}
	if ((isset($_POST['uploadFile']) and !$msg) or isset($_POST['addEvents'])) {
		$errors = processEvtFields($_POST['sDate'],$_POST['eDate'],$_POST['sTime'],$_POST['eTime'],$_POST['title']);
	}
	if (isset($_POST['addEvents']) and !$errors) {
		$msg = addEvents(); //add events to calendar
	}
	echo "<p class='error'>{$msg}</p>
		<div class='scrollBoxAd'>\n";
	if (!isset($_POST['uploadFile']) and !isset($_POST['addEvents']) or (isset($_POST['uploadFile']) and $msg)) {
		instructions();
	}
	echo "<div class='centerBox'>\n";
	if (!isset($_POST['uploadFile']) and !isset($_POST['addEvents']) or (isset($_POST['uploadFile']) and $msg)) {
		uploadFile();
	} elseif (!isset($_POST['addEvents']) or $errors) {
		displayEvents($errors); //file uploaded or errors, display events
	} else {
		echo '<button type="button" onclick="window.location.href=\'index.php?lc&amp;cP=94\'">'.$ax['back']."</button>\n";
	}
	echo "</div>\n</div>\n";
} else {
	echo "<p class='error'>{$ax['no_way']}</p>\n";
}
?>
