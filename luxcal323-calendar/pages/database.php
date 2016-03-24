<?php
/*
= LuxCal database management page =

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

function mdbForm() {
	global $ax, $compact, $repair, $backup, $restore, $events, $delevt, $fromD, $tillD;
	
	echo "<form action='index.php?lc' method='post'>
		<table class='fieldBox'>
		<tr><td class='legend'>&nbsp;{$ax['mdb_dbm_functions']}&nbsp;</td></tr>
		<tr><td><br><input type='checkbox' name='repair' id='rep' value='yes'".(($repair > 0) ? " checked='checked'> " : '> ')."<label for='rep'>{$ax['mdb_repair']}</label></td></tr>
		<tr><td><br><input type='checkbox' name='compact' id='com' value='yes'".(($compact > 0) ? " checked='checked'> " : '> ')."<label for='com'>{$ax['mdb_compact']}</label></td></tr>
		<tr><td><br><input type='checkbox' name='backup' id='bac' value='yes'".(($backup > 0) ? " checked='checked'> " : '> ')."<label for='bac'>{$ax['mdb_backup']}</label></td></tr>
		<tr><td><br><input type='checkbox' name='restore' id='res' value='yes'".(($restore > 0) ? " checked='checked'> " : '> ')."<label for='res'>{$ax['mdb_restore']}</label></td></tr>
		<tr><td><br><input type='checkbox' name='events' id='eve' value='yes'".(($events > 0) ? " checked='checked'> " : '> ')."<label for='eve'>{$ax['mdb_events']}</label>: &nbsp;&nbsp;&nbsp;
		<input type='radio' name='delevt' id='del' value='1'".($delevt ? " checked='checked'" : '')."><label for='del'>{$ax['mdb_delete']}</label>&nbsp;&nbsp;&nbsp;
		<input type='radio' name='delevt' id='und' value='0'".(!$delevt ? " checked='checked'" : '')."><label for='und'>{$ax['mdb_undelete']}</label>\n</td></tr>
		<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$ax['mdb_between_dates']}: <input type='text' name='fromD' id='fromD' value='".IDtoDD($fromD)."' size='8'>
		<button title=\"{$ax['iex_select_start_date']}\" onclick=\"dPicker(1,'nill','fromD');return false;\">&larr;</button> &#8211;
		<input type='text' name='tillD' id='tillD' value='".IDtoDD($tillD)."' size='8'>
		<button title=\"{$ax['iex_select_end_date']}\" onclick=\"dPicker(1,'nill','tillD');return false;\">&larr;</button>
		</td></tr>
		</table>
		<input type='submit' name='mdb_exe' value=\"{$ax['mdb_start']}\">
	</form>\n";
}

function processFunctions() {
	global $ax, $repair, $compact, $backup, $restore, $events, $delevt, $fromD, $tillD;
	
	echo "<table><tr><td>\n";
	if ($repair) { checkDb(); }
	if ($compact) { compactTables(); }
	if ($backup) { backupTables(); }
	if ($restore) { restoreTables(); }
	if ($events) { processEvents(); }
	echo "</td></tr></table>\n";
	echo "<form action='index.php?lc' method='post'>
		<input type='hidden' name='repair' id='repair' value='{$repair}'>
		<input type='hidden' name='compact' id='compact' value='{$compact}'>
		<input type='hidden' name='backup' id='backup' value='{$backup}'>
		<input type='hidden' name='restore' id='restore' value='{$restore}'>
		<input type='hidden' name='events' id='events' value='{$events}'>
		<input type='hidden' name='delevt' id='delevt' value='{$delevt}'>
		<input type='hidden' name='fromD' id='fromD' value='".IDtoDD($fromD)."'>
		<input type='hidden' name='tillD' id='tillD' value='".IDtoDD($tillD)."'>
		<input class='noPrint' type='submit' name='back' value=\"{$ax['back']}\">
	</form>\n";
}


/* Check and repair db */
function checkDb() {
	global $ax, $calID;
	
	echo "<table class='fieldBoxFix'>\n";
	echo "<tr><td class='legend'>&nbsp;{$ax['mdb_repair']}&nbsp;</td></tr>\n";
//	$rSet = dbQuery('SHOW TABLES');
	$rSet = dbQuery("SHOW TABLES LIKE '{$calID}_%'");
	if (!$rSet) {
		echo "<tr><td>{$ax['mdb_noshow_tables']}</td></tr>\n";
	} else {
		while ($table = mysql_fetch_row($rSet)) {
			echo "<tr><td>{$ax['mdb_check_table']} '{$table[0]}' - ";
			$result = dbQuery('CHECK TABLE '.$table[0]);
			$tableOk = false;
			while ($row=mysql_fetch_assoc($result)) {
				if ($row['Msg_type'] == 'status' and (strtolower($row['Msg_text']) == 'ok' or strtolower($row['Msg_text']) == 'table is already up to date')) {
					$tableOk = true;
				}
			}
			if ($tableOk) {
				echo $ax['mdb_ok'];
			} else {
				echo "{$ax['mdb_nok_repair']} - ";
				$tableOk = false;
				$result = dbQuery('REPAIR TABLE '.$table[0]);
				while ($row=mysql_fetch_assoc($result)) {
					if ($row['Msg_type'] == 'status' and strtolower($row['Msg_text']) == 'ok') {
						$tableOk = true;
					}
				}
				echo ($tableOk) ? $ax['mdb_ok'] : $ax['mdb_nok'];
			}
			echo "</td></tr>\n";
		}
	}
	echo "</table>\n";
}

/* Compact db tables */
function compactTables() {
	global $ax, $calID;
	
	echo "<table class='fieldBoxFix'>
		<tr><td class='legend'>&nbsp;{$ax['mdb_compact']}&nbsp;</td></tr>\n";
	$deleteDT = date('Y-m-d H:i:s', time() - 86400*30); //remove if deleted more than 30 days ago
	//remove deleted events from db
	$result = dbQuery("DELETE FROM [db]events WHERE status = -1 and m_datetime <= '{$deleteDT}'");
	echo "<tr><td>{$ax['mdb_purge_done']}</td></tr>\n";
	$rSet = dbQuery("SHOW TABLES LIKE '{$calID}_%'");
	if (!$rSet) {
		echo "<tr><td>{$ax['mdb_noshow_tables']}</td></tr>\n";
	} else {
		while ($table = mysql_fetch_row($rSet)) {
			echo "<tr><td>{$ax['mdb_compact_table']} '{$table[0]}' - ";
			$result = dbQuery('OPTIMIZE TABLE '.$table[0]);
			echo (!$result ? $ax['mdb_compact_error'] : $ax['mdb_compact_done'])."</td></tr>\n";
		}
	}
	echo "</table>\n";
}

/* Backup db tables*/
function backupTables() {
	global $ax, $calID;
	
	echo "<table class='fieldBoxFix'>
		<tr><td class='legend'>&nbsp;{$ax['mdb_backup']}&nbsp;</td></tr>\n";
	//get table names
	$tableSet = dbQuery("SHOW TABLES LIKE '{$calID}_%'");
	if (!$tableSet) {
		echo "<tr><td>{$ax['mdb_noshow_tables']}</td></tr>\n";
	} else {
		//backup tables
		$sqlFile = '';
		while ($table = mysql_fetch_row($tableSet)) {
			echo "<tr><td>{$ax['mdb_backup_table']} '{$table[0]}' - ";
			$rSet = dbQuery("SELECT * FROM {$table[0]}");
			$sqlFile .= 'DROP TABLE IF EXISTS '.$table[0].';';
			$createTableCode = mysql_fetch_row(dbQuery("SHOW CREATE TABLE {$table[0]}"));
			$sqlFile .= "\n\n{$createTableCode[1]};\n\n";
			$counter = 0;
			while($row = mysql_fetch_row($rSet)) {
				$sqlFile .= "INSERT INTO {$table[0]} VALUES(";
				foreach($row as $value) {
					$sqlFile .= isset($value) ? '"'.addslashes(preg_replace("%\n%","\\n",$value)).'",' : '"",';
				}
				$sqlFile = substr($sqlFile,0,-1).");\n";
				$counter++;
			}
			$sqlFile .="\n";
			echo "{$ax['mdb_backup_done']} ({$counter} {$ax['mdb_records']})</td></tr>\n";
		}
		echo "<tr><td>&nbsp;</td></tr>\n";
		//save .sql backup file
		$fName = './files/cal-backup-'.date('Ymd-His').'.sql';
		echo "<tr><td>{$ax['mdb_file_name']} <strong>{$fName}</strong></td></tr>\n";
		if (file_put_contents($fName, $sqlFile) !== false) {
			echo "<tr><td>{$ax['mdb_file_saved']}</td></tr>\n";
		} else {
			echo "<tr><td>&nbsp;</td></tr>
				<tr><td><strong>{$ax['mdb_write_error']}</strong></td></tr>\n";
		}
	}
	echo "</table>\n";
}

/* Restore db tables*/
function restoreTables() {
	global $ax, $calID;
	
	echo "<table class='fieldBoxFix'>
		<tr><td class='legend'>&nbsp;{$ax['mdb_restore']}&nbsp;</td></tr>\n";
	//get backup file name
	$files = scandir('./files');
	$buFile = '';
	if ($files !== false) {
		foreach ($files as $key => $fName) {
			if (preg_match("%^cal-backup-\d+-\d+\.sql$%i",$fName) and $fName > $buFile) { //newer backup file
				$buFile = $fName;
			}
		}
	}
	if (!$buFile) {
		echo "<tr><td>{$ax['mdb_noshow_restore']}</td></tr>\n";
	} else {
		//Read SQL queries from $buFile
		$sqlQueries = file('./files/'.$buFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$nrC = $nrE = $nrS = $nrU = 0; //init counters
		$query = $lcVersion = '';
		//restore
		foreach ($sqlQueries as $line) {
			$query .= trim($line)."\n";
			if (substr($line, -1) == ';') { //process query
				$query = preg_replace('~[a-z\d]{0,20}_(categories|events|settings|users)~i',$calID.'_$1',$query);
				$result = dbQuery($query);
				if ($result) { //success
					$matches = array(); //init
					if (preg_match('~^INSERT\s+INTO\s+[a-z\d]{0,20}_(categories|events|settings|users)[`\s]+~i',$query,$matches)) {
						switch ($matches[1]) {
							case 'categories': $nrC++; break;
							case 'events': $nrE++; break;
							case 'users': $nrU++; break;
							case 'settings':
								$nrS++;
								if (preg_match('~"lcVersion","([0-9a-z-.]{5,})"~',$query,$matches)) {
									$lcVersion = $matches[1]; //LuxCal version of backup file
								}
						}
					}
				}
				$query = '';
			}
		}
		echo "<tr><td>{$ax['mdb_backup_file']}: '<strong>{$buFile}</strong></td></tr>\n";
		echo "<tr><td>&nbsp;</td></tr>\n";
		echo "<tr><td>{$ax['mdb_restore_table']} '{$calID}_categories' - {$nrC} {$ax['mdb_inserted']}</td></tr>\n";
		echo "<tr><td>{$ax['mdb_restore_table']} '{$calID}_events' - {$nrE} {$ax['mdb_inserted']}</td></tr>\n";
		echo "<tr><td>{$ax['mdb_restore_table']} '{$calID}_settings' - {$nrS} {$ax['mdb_inserted']}</td></tr>\n";
		echo "<tr><td>{$ax['mdb_restore_table']} '{$calID}_users' - {$nrU} {$ax['mdb_inserted']}</td></tr>\n";
		if ($nrC > 0 and $nrS > 0 and $nrU > 0) {
			echo "<tr><td>&nbsp;</td></tr>
				<tr><td><strong>{$ax['mdb_db_restored']}</strong></td></tr>\n";
		}
		if ($lcVersion != LCV) {
			echo "<tr><td>&nbsp;</td></tr>
				<tr><td><strong>{$ax['mdb_run_upgrade']}</strong></td></tr>\n";
		}
	}
	echo "</table>\n";
}

/* Delete events*/
function processEvents() {
	global $ax, $delevt, $fromD, $tillD;
	
	$where = $delevt ? "WHERE status >= 0 " : "WHERE status = -1 ";
	if ($fromD) { $where .= " AND s_date >= '$fromD'"; }
	if ($tillD) { $where .= " AND (IF(r_type > 0, r_until, IF(e_date != '9999-00-00', e_date, s_date)) <= '$tillD')"; }
	if ($delevt) {
		$result = dbQuery("UPDATE [db]events SET status = -1, m_datetime = '".date("Y-m-d H:i:s")."' $where"); //delete
	} else {
		$result = dbQuery("UPDATE [db]events SET status = 0, m_datetime = '".date("Y-m-d H:i:s")."' $where"); //undelete
	}
	$nrAffected = mysql_affected_rows();
	echo "<table class='fieldBoxFix'>
		<tr><td class='legend'>&nbsp;{$ax['mdb_events']}&nbsp;</td></tr>
		<tr><td>".($delevt ? $ax['mdb_deleted'] : $ax['mdb_undeleted']).": {$nrAffected}
		</table>\n";
}

//init
$msg = '';
$repair = empty($_POST["repair"]) ? 0 : 1;
$compact = empty($_POST["compact"]) ? 0 : 1;
$backup = empty($_POST["backup"]) ? 0 : 1;
$restore = empty($_POST["restore"]) ? 0 : 1;
$events = empty($_POST["events"]) ? 0 : 1;
$delevt = empty($_POST["delevt"]) ? 0 : 1;
$fromD = (isset($_POST['fromD'])) ? DDtoID($_POST['fromD']) : ''; //from event date
$tillD = (isset($_POST['tillD'])) ? DDtoID($_POST['tillD']) : ''; //untill event date
if ($fromD and $tillD and $fromD > $tillD) {
	$temp = $fromD;
	$fromD = $tillD;
	$tillD = $temp;
}
$mdb_exe = isset($_POST["mdb_exe"]) ? 1 : 0;

//control logic
if ($privs == 9) {
	if ($mdb_exe and (!$repair and !$compact and !$backup and !$restore and !$events)) { $msg = $ax['mdb_no_function_checked'];	}
	echo "<br><p class='error'>{$msg}</p>
		<div class='scrollBoxAd'>\n";
	if (!$mdb_exe or (!$repair and !$compact and !$backup and !$restore and !$events)) {
		echo "<aside class='aside'>{$ax['xpl_manage_db']}</aside>
			<div class='centerBox'>\n";
		mdbForm(); //manage db form
		echo "</div>\n";
	} else {
		echo "<div class='centerBox'>\n";
		processFunctions();
		echo "</div>\n";
	}
	echo "</div>\n";
} else {
	echo "<p class='error'>{$ax['no_way']}</p>\n";
}
?>