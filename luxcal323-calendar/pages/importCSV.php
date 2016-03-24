<?php
/*
= CSV event file import script =

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

$birthdayID = (isset($_POST['birthdayID'])) ? $_POST['birthdayID'] : '';
$dFormat = (isset($_POST['dFormat'])) ? $_POST['dFormat'] : 'y-m-d';
$tFormat = (isset($_POST['tFormat'])) ? $_POST['tFormat'] : 'h:m';


/* sub-functions */

function processEvtFields(&$sDate,&$eDate,&$sTime,&$eTime,&$title,&$catID) {
	global $dFormat, $tFormat;
	
	//Get calendar category ids
	$rSet = dbQuery("SELECT category_id FROM [db]categories WHERE status >= 0");
	$catIDs = array();
	if ($rSet) {
 		while ($row = mysql_fetch_assoc($rSet)) {
			$catIDs[] = $row['category_id'];
		}
	}
	//Processing
	$errors = 0;
	$nofDates = count($sDate);
	for ($i = 0; $i < $nofDates; $i++) {
		$error = 0;
		if (($IsDate = DDtoID($sDate[$i],$dFormat)) === false) { $error++; }
		if ($eDate[$i]) {
			if (($IeDate = DDtoID($eDate[$i],$dFormat)) === false) { $error++; }
		}
		if ($sTime[$i]) {
			if (($IsTime = DTtoIT($sTime[$i],$tFormat)) === false) { $error++; }
		}
		if ($eTime[$i]) {
			if (($IeTime = DTtoIT($eTime[$i],$tFormat)) === false) { $error++; }
		}
		if (!$error) {
			if ($eDate[$i]) {
				if ($IsDate == $IeDate) { $eDate[$i] = ''; }
				elseif ($IeDate < $IsDate) {
					$temp = $eDate[$i];
					$eDate[$i] = $sDate[$i];
					$sDate[$i] = $temp;
				}
				elseif ($IeDate > $IsDate and $IsTime == "00:00" and $IeTime == "00:00") {
					$eDate[$i] = IDtoDD(date("Y-m-d",mktime(12,0,0,substr($IeDate,5,2),substr($IeDate,8,2),substr($IeDate,0,4)) - 86400),$dFormat);
					$eTime[$i] = ITtoDT("23:59",$tFormat);
				}
			}
			if (!$sTime[$i] and !$eTime[$i]) { $sTime[$i] = ITtoDT("00:00",$tFormat); $eTime[$i] = ITtoDT("23:59",$tFormat); } //no times: all day
			if (!$sTime[$i] and $eTime[$i]) { $sTime[$i] = $eTime[$i]; }
			if ($sTime[$i] == $eTime[$i]) { $eTime[$i] = ''; }
			if ($eTime[$i]) {
				if ($IeTime < $IsTime) {
					$temp = $eTime[$i];
					$eTime[$i] = $sTime[$i];
					$sTime[$i] = $temp;
				}
			}
		}
		$errors += $error;
		if (!$title[$i]) { $errors++; } //title empty
		if (!in_array($catID[$i], $catIDs)) { $catID[$i] = 0; } //reset non-existing category IDs
	}
return $errors;
}

function eventInDb($title,$sDate,$eDate,$sTime,$eTime) {
	/* test if event present in db */
	$q =
	"SELECT
		title
	FROM [db]events
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


/* main-functions */

function instructions() {
	global $ax;
	
	echo "<aside class='aside'>\n{$ax['xpl_import_csv']}
		<table class='grid'>
		<tr><th style='width:auto;'>ID</th><th style='width:auto;'>{$ax['iex_category']}</th></tr>\n";
	$rSet = dbQuery("SELECT category_id AS cid, name AS cnm FROM [db]categories WHERE status >= 0 ORDER BY category_id");
	if (!$rSet) { echo $ax['iex_db_error']; return; }
	while ($row = mysql_fetch_assoc($rSet)) {
		echo "<tr><td class='floatC'>{$row['cid']}</td><td>&nbsp;{$row['cnm']}</td></tr>\n";
	}
	echo "</table>\n</aside>\n";
}

function uploadFile() {
	global $ax, $birthdayID, $dFormat, $tFormat;
	
	$separator = (isset($_POST['separator'])) ? $_POST['separator'] : ',';
	echo "<form action='index.php?lc' method='post' enctype='multipart/form-data'>
		<input type='hidden' name='MAX_FILE_SIZE' value='1000000'>
		<table class='fieldBox'>
		<tr><td class='legend' colspan='2'>&nbsp;{$ax['iex_upload_csv']}&nbsp;</td></tr>
		<tr><td class='label'>{$ax['iex_file']}:</td><td><input type='file' name='fileName'></td></tr>
		<tr><td class='label'>{$ax['iex_fields_sep_by']}:</td><td><input type='text' name='separator' value='{$separator}' size='1'></td></tr>
		<tr><td class='label'>{$ax['iex_birthday_cat_id']}:</td><td><input type='text' name='birthdayID' value='{$birthdayID}' size='1'> ({$ax['iex_see_insert']})</td></tr>
		<tr><td class='label'>{$ax['iex_date_format']}:</td><td>
		<input type='radio' name='dFormat' id='dmy' value='d-m-y'".($dFormat == 'd-m-y' ? " checked='checked'" : '')."><label for='dmy'>{$ax['dd_mm_yyyy']}</label>&nbsp;&nbsp;&nbsp;
		<input type='radio' name='dFormat' id='mdy' value='m-d-y'".($dFormat == 'm-d-y' ? " checked='checked'" : '')."><label for='mdy'>{$ax['mm_dd_yyyy']}</label>&nbsp;&nbsp;&nbsp;
		<input type='radio' name='dFormat' id='ymd' value='y-m-d'".($dFormat == 'y-m-d' ? " checked='checked'" : '')."><label for='ymd'>{$ax['yyyy_mm_dd']}</label></td></tr>
		<tr><td class='label'>{$ax['iex_time_format']}:</td><td>
		<input type='radio' name='tFormat' id='hma' value='h:ma'".($tFormat == 'h:ma' ? " checked='checked'" : '')."><label for='hma'>{$ax['time_format_us']}</label>&nbsp;&nbsp;&nbsp;
		<input type='radio' name='tFormat' id='hm' value='h:m'".($tFormat == 'h:m' ? " checked='checked'" : '')."><label for='hm'>{$ax['time_format_eu']}</label></td></tr>
		</table>
		<input type='submit' name='uploadFile' value=\"{$ax['iex_upload_file']}\">
		</form>
		<div style='clear:right'></div>\n";
}

function processUpload() {
	global $ax;
	
	$fileName = $_FILES['fileName']['tmp_name'];
	if (!$fileName) { return $ax['iex_no_file_name']; } //csv file missing
	if (strlen($_POST['separator']) != 1) { return $ax['iex_inval_field_sep']; } //invalid date separator
	$fp = fopen($fileName, "r");
	fgetcsv($fp, 10000, $_POST['separator']); //flush header line
//read events from CSV file
	while ((list($title, $venue, $cat, $sDate, $eDate, $sTime, $eTime, $desc) = fgetcsv($fp, 10000, $_POST['separator'])) !== FALSE) {
		if (!$title) { continue; }
		$_POST['title'][] = $title;
		$_POST['venue'][] = $venue;
		$_POST['catID'][] = $cat;
		$_POST['sDate'][] = $sDate;
		$_POST['eDate'][]= $eDate;
		$_POST['sTime'][] = $sTime;
		$_POST['eTime'][] = $eTime;
		$_POST['descr'][] = $desc;
		$_POST['birthday'][] = 0;
		$_POST['delete'][] = 0;
	}
	fclose($fp);
	unlink($fileName);
	return ''; //no error
}

function displayEvents($errors) {
	global $ax, $birthdayID, $dFormat, $tFormat;
	
	echo "<p class='error'>{$ax['iex_number_of_errors']}: {$errors} ({$ax['iex_bgnd_highlighted']})</p><br>
		<h4>{$ax['iex_verify_event_list']} \"{$ax['iex_add_events']}\"</h4>
		<br>{$ax['iex_select_ignore_birthday']}<br><br>\n";
//display event list
	echo "<form action='index.php?lc' method='post'>
		<input type='hidden' name='birthdayID' value='{$birthdayID}'>
		<input type='hidden' name='dFormat' value='{$dFormat}'>
		<input type='hidden' name='tFormat' value='{$tFormat}'>\n";
	$nofEvents = count($_POST['title']);
	echo "<table>
		<tr><th>{$ax['iex_ignore']}</th><th>{$ax['iex_birthday']}</th><th>{$ax['iex_title']}</th><th>{$ax['iex_venue']}</th><th>{$ax['iex_category']}</th><th>{$ax['iex_date']}</th><th>{$ax['iex_end_date']}</th><th>{$ax['iex_start_time']}</th><th>{$ax['iex_end_time']}</th><th>{$ax['iex_description']}</th></tr>\n";
	for ($i = 0; $i < $nofEvents; $i++) {
		$tic = (!$_POST['title'][$i]) ? " class='inputError'" : '';
		$sdc = (DDtoID($_POST['sDate'][$i],$dFormat) === false) ? ' inputError' : '';
		$edc = (($_POST['eDate'][$i]) and (DDtoID($_POST['eDate'][$i],$dFormat) === false)) ? ' inputError' : '';
		$stc = (DTtoIT($_POST['sTime'][$i],$tFormat) === false) ? ' inputError' : '';
		$etc = (($_POST['eTime'][$i]) and (DTtoIT($_POST['eTime'][$i],$tFormat) === false)) ? ' inputError' : '';
		echo "<tr>
			<td class='floatC'><input type='checkbox' name='delete[{$i}]' value='1'".(empty($_POST['delete'][$i]) ? '' : " checked='checked'")."></td>
			<td class='floatC'><input type='checkbox' name='birthday[{$i}]' value='1'".(empty($_POST['birthday'][$i]) ? '' : " checked='checked'")."></td>
			<td><input type='text'{$tic} size='20' name='title[]' value=\"".stripslashes(substr($_POST['title'][$i],0,64))."\"></td>
			<td><input type='text' size='20' name='venue[]' value=\"".stripslashes(substr($_POST['venue'][$i],0,64))."\"></td>
			<td><input class='floatC' type='text' size='2' name='catID[]' value='{$_POST['catID'][$i]}'></td>
			<td><input class='floatC{$sdc}' type='text' size='10' name='sDate[]' value='{$_POST['sDate'][$i]}'></td>
			<td><input class='floatC{$edc}' type='text' size='10' name='eDate[]' value='{$_POST['eDate'][$i]}'></td>
			<td><input class='floatC{$stc}' type='text' size='5' name='sTime[]' value='{$_POST['sTime'][$i]}'></td>
			<td><input class='floatC{$etc}' type='text' size='5' name='eTime[]' value='{$_POST['eTime'][$i]}'></td>
			<td><textarea cols='30' rows='1' name='descr[]'>".stripslashes($_POST['descr'][$i])."</textarea></td>
			</tr>\n";
	}
	echo "</table>
		<br><input class='noPrint' type='submit' name='addEvents' value=\"{$ax['iex_add_events']}\">
		<button class='noPrint' type='button' onclick=\"window.location.href='index.php?lc&amp;cP=96'\">{$ax['back']}</button>
		</form>\n";
}

function addEvents() {
	global $ax, $birthdayID, $dFormat, $tFormat;

	$msg = '';
	$nofEvents = count($_POST['title']);
	$added = $dropped = 0;
	for ($i = 0; $i < $nofEvents; $i++) {
		if (empty($_POST['delete'][$i])) {
			$title = addslashes(strip_tags($_POST['title'][$i]));
			$venue = addslashes(strip_tags($_POST['venue'][$i]));
			$descr = addslashes(strip_tags($_POST['descr'][$i],'<a>')); //allow URLs
			$sDate = DDtoID($_POST['sDate'][$i],$dFormat);
			$eDate = ($_POST['eDate'][$i]) ? DDtoID($_POST['eDate'][$i],$dFormat) : "9999-00-00";
			$sTime = DTtoIT($_POST['sTime'][$i],$tFormat);
			$eTime = ($_POST['eTime'][$i]) ? DTtoIT($_POST['eTime'][$i],$tFormat) : "99:00:00";
			$catID = ($_POST['catID'][$i]) ? $_POST['catID'][$i] : 1; //no cat
			$rType = $rInterval = $rPeriod = $rMonth = 0;
			if (!empty($_POST['birthday'][$i]) or $catID == $birthdayID) { //birthday
				$rType = 1;
				$rInterval = 1;
				$rPeriod = 4;
				$eDate = "9999-00-00";
				$catID = $birthdayID;
			}
			if (!eventInDb($title,$sDate,$eDate,$sTime,$eTime)) { //update events db
				$q = "INSERT INTO [db]events VALUES (NULL,DEFAULT,'$title','$descr',DEFAULT,DEFAULT,$catID,'$venue',{$_SESSION['uid']},DEFAULT,DEFAULT,DEFAULT,DEFAULT,'$sDate','$eDate',DEFAULT,'$sTime','$eTime',$rType,$rInterval,$rPeriod,$rMonth,DEFAULT,DEFAULT,DEFAULT,'".date("Y-m-d H:i")."', '".date("Y-m-d H:i")."',DEFAULT)";
				$result = dbQuery($q);
				if (!$result) { $msg = $ax['iex_db_error']; }
				$added++;
			} else {
				$dropped++;
			}
		}
	}
	if (!$msg) $msg = "{$added} {$ax['iex_events_added']}".($dropped > 0 ? " / {$dropped} {$ax['iex_events_dropped']}" : '');
	return $msg;
}


//control logic

$msg = ''; $errors = 0; //init
if ($privs == 9) { //admin
	if (isset($_POST['uploadFile'])) {
		$msg = processUpload();
	}
	if ((isset($_POST['uploadFile']) and !$msg) or isset($_POST['addEvents'])) {
		$errors = processEvtFields($_POST['sDate'],$_POST['eDate'],$_POST['sTime'],$_POST['eTime'],$_POST['title'],$_POST['catID']);
	}
	if (isset($_POST['addEvents']) and !$errors) {
		$msg = addEvents(); //add events to calendar
	}
	echo "<p class='error'>{$msg}</p>\n";
	echo "<div class='scrollBoxAd'>\n";
	if (!isset($_POST['uploadFile']) and !isset($_POST['addEvents']) or (isset($_POST['uploadFile']) and $msg)) {
		instructions();
	}
	echo "<div class='centerBox'>\n";
	if (!isset($_POST['uploadFile']) and !isset($_POST['addEvents']) or (isset($_POST['uploadFile']) and $msg)) {
		uploadFile();
	} elseif (!isset($_POST['addEvents']) or $errors) {
		displayEvents($errors); //file uploaded or errors, display events
	} else {
		echo "<button type='button' onclick=\"window.location.href='index.php?lc&amp;cP=96'\">{$ax['back']}</button>\n";
	}
	echo "</div>\n</div>\n";
} else {
	echo "<p class='error'>{$ax['no_way']}</p>\n";
}
?>
