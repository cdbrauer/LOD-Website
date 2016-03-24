<?php
/*
= LuxCal categories management page =

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
if (!defined('LCC') or
		(isset($_REQUEST['cid']) and !preg_match('%^\d{1,4}$%', $_REQUEST['cid'])) or
		(isset($_GET['editCat']) and !preg_match('%^(add|edit)$%', $_GET['editCat'])) or
		(isset($_GET['delExe']) and !preg_match('%^\w$%', $_GET['delExe']))
	) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); }

//initialize
$adminLang = (file_exists('./lang/ai-'.strtolower($_SESSION['cL']).'.php')) ? $_SESSION['cL'] : "English";
require './lang/ai-'.strtolower($adminLang).'.php';

$cid = isset($_REQUEST['cid']) ? $_REQUEST['cid'] : 0;
$editCat = isset($_REQUEST['editCat']) ? $_REQUEST['editCat'] : "";
$cname = isset($_POST['cname']) ? trim($_POST['cname']) : "";
$sqnce = isset($_POST['sqnce']) ? $_POST['sqnce'] : 1;
$repeat = isset($_POST['repeat']) ? $_POST['repeat'] : 0;
$public = isset($_POST['public']) ? 1 : 0;
$approve = isset($_POST['approve']) ? 1 : 0;
$chBox = isset($_POST['chBox']) ? 1 : 0;
$cLabel = isset($_POST['cLabel']) ? trim($_POST['cLabel']) : "";
$cMark = isset($_POST['cMark']) ? trim($_POST['cMark']) : "&#x2713;";
$color = isset($_POST['color']) ? $_POST['color'] : "";
$bgrnd = isset($_POST['bgrnd']) ? $_POST['bgrnd'] : "";

//get number of cats
$result = dbQuery("SELECT COUNT(*) FROM [db]categories WHERE status >= 0");
$cnt = mysql_fetch_row($result);
$nrCats = $cnt[0];

function showCategories($edit) {
	global $ax;
	
	echo "<div class='fieldBox'>
		<div class='legend'>&nbsp;{$ax['cat_list']}&nbsp;</div>\n";
	$rSet = dbQuery("SELECT * FROM [db]categories WHERE status >= 0 ORDER BY sequence");
	if ($rSet !== false) {
		echo "<table class='list'>
			<tr><th>&nbsp;{$ax['cat_nr']}&nbsp;</th><th>{$ax['cat_name']}</th><th>&nbsp;{$ax['cat_repeat']}&nbsp;</th><th>&nbsp;{$ax['cat_approve']}&nbsp;</th><th>&nbsp;{$ax['cat_public']}&nbsp;</th><th>&nbsp;{$ax['cat_check_mark']}&nbsp;</th>".(!$edit ? '<th></th><th></th>': '')."</tr>\n";
		if (mysql_num_rows($rSet) > 0) {
			while ($row=mysql_fetch_assoc($rSet)) {
				switch ($row['rpeat']) {
					case 0: $repeat = ''; break;
					case 1: $repeat = $ax['cat_every_day']; break;
					case 2: $repeat = $ax['cat_every_week']; break;
					case 3: $repeat = $ax['cat_every_month']; break;
					case 4: $repeat = $ax['cat_every_year'];
				}
				$style = ($row['color'] ? "color:{$row['color']};" : '').($row['background'] ? "background-color:{$row['background']};" : '');
				$style = $style ? " style='{$style}'" : '';
				echo "<tr><td>{$row['sequence']}</td><td{$style}>".stripslashes($row['name'])."</td><td>{$repeat}</td>
					<td>".($row['approve'] < 1 ? $ax['no'] : $ax['yes'])."</td>
					<td>".($row['public'] < 1 ? $ax['no'] : $ax['yes'])."</td>
					<td>".($row['chbox'] ? $row['chmark'].': "'.$row['chlabel'].'"' : $ax['no']).'</td>';
				if (!$edit) {
					echo "<td>[<a href='index.php?lc&amp;editCat=edit&amp;cid={$row['category_id']}'>{$ax['cat_edit']}</a>]</td>
						<td>".(($row['category_id'] != 1) ? "[<a href='index.php?lc&amp;delExe=y&amp;cid={$row['category_id']}'>{$ax['cat_delete']}</a>]" : "")."</td>\n";
				}
				echo "</tr>\n";
			}
		}
		echo "</table>\n";
	}
	echo "</div>\n";
	if (!$edit) { echo "<button class='noPrint' type='button' onclick=\"window.location.href='index.php?lc&amp;editCat=add'\">{$ax['cat_add_new']}</button>\n"; }
	echo "<br><br>\n";
}

function editCategory($editCat,$cid) {
	global $ax, $cname, $approve, $public, $chBox, $cLabel, $cMark, $sqnce, $nrCats, $repeat, $color, $bgrnd;
	
	echo "<form action='index.php?lc' method='post' name='cate'>
		<input type='hidden' name='cid' id='cid' value='{$cid}'>
		<input type='hidden' name='editCat' id='editCat' value='{$editCat}'>\n";
	echo "<div class='fieldBox'>\n";
	if ($editCat != "add") {
		$rSet = dbQuery("SELECT * FROM [db]categories WHERE category_id = $cid LIMIT 1");
		if ($rSet !== false) {
			$row = mysql_fetch_assoc($rSet);
			$cname = stripslashes($row['name']);
			$sqnce = $row['sequence'];
			$repeat = $row['rpeat'];
			$approve = $row['approve'];
			$public = $row['public'];
			$color = $row['color'];
			$bgrnd = $row['background'];
			$chBox = $row['chbox'];
			$cLabel = stripslashes($row['chlabel']);
			$cMark = $row['chmark'];
		}
		echo "<div class='legend'>&nbsp;{$ax['cat_edit_cat']}&nbsp;</div>\n";
	} else {
		echo "<div class='legend'>&nbsp;{$ax['cat_add_new']}&nbsp;</div>\n";
		$public = 1; //is default
		$sqnce = $nrCats + 1;
	}
	$style = ($color ? "color:{$color};" : "").($bgrnd ? "background-color:{$bgrnd};" : "");
	$style = $style ? " style='{$style}'" : '';
	echo "<table class='list'>
		<tr><td>{$ax['cat_name']}:</td><td><input type='text' id='cname' name='cname' value=\"{$cname}\" size='20' maxlength='40'{$style}></td></tr>
		<tr><td>{$ax['cat_repeat']}:</td>
		<td><select name='repeat'>
		<option value='0'".($repeat == '0' ? " selected='selected'" : '').">-</option>
		<option value='1'".($repeat == '1' ? " selected='selected'" : '').">{$ax['cat_every_day']}</option>
		<option value='2'".($repeat == '2' ? " selected='selected'" : '').">{$ax['cat_every_week']}</option>
		<option value='3'".($repeat == '3' ? " selected='selected'" : '').">{$ax['cat_every_month']}</option>
		<option value='4'".($repeat == '4' ? " selected='selected'" : '').">{$ax['cat_every_year']}</option>
		</select></td></tr>
		<tr><td><label for='approve'>{$ax['cat_approve']}</label>:</td><td><input type='checkbox' name='approve' id='approve' value='1'".($approve ? " checked='checked'> " : ' > ')."</td></tr>
		<tr><td><label for='public'>{$ax['cat_public']}</label>:</td><td><input type='checkbox' name='public' id='public' value='1'".($public ? " checked='checked'> " : ' > ')."</td></tr>
		<tr><td><label for='chBox'>{$ax['cat_check_mark']}</label>:</td><td><input type='checkbox' name='chBox' id='chBox' value='1'".($chBox ? " checked='checked'" : '').">
		&nbsp;&nbsp;{$ax['cat_label']}: <input type='text' id='cLabel' name='cLabel' value='{$cLabel}' size='8' maxlength='20'>
		&nbsp;&nbsp;{$ax['cat_mark']}: <input type='text' id='cMark' name='cMark' value='{$cMark}' size='5' maxlength='10'></td></tr>
		<tr><td>{$ax['cat_text_color']}:</td><td><input type='text' id='color' name='color' value='{$color}' size='8' maxlength='10'><button class='noPrint' title=\"{$ax['cat_select_color']}\" onclick=\"cPicker('color','cname','t');return false;\">&larr;</button></td></tr>
		<tr><td>{$ax['cat_background']}:</td><td><input type='text' id='bgrnd' name='bgrnd' value='{$bgrnd}' size='8' maxlength='10'><button class='noPrint' title=\"{$ax['cat_select_color']}\" onclick=\"cPicker('bgrnd','cname','b');return false;\">&larr;</button></td></tr>
		<tr><td>{$ax['cat_sequence']}:</td><td><input type='text' name='sqnce' value='{$sqnce}' size='1' maxlength='2'> ({$ax['cat_in_menu']})</td></tr>
		</table>
		</div>\n";
	if ($editCat == "add") {
		echo "<input type='submit' name='addExe' value=\"{$ax['cat_add']}\">";
	} else {
		echo "<input type='submit' name='updExe' value=\"{$ax['cat_save']}\">";
	}
	echo "&nbsp;&nbsp;&nbsp;<input type='submit' name='back' value=\"{$ax['back']}\">
		</form><br><br><br>\n";
}

function addCat() { //add category
	global $cid, $editCat, $ax, $color, $bgrnd, $cname, $chBox, $cLabel, $cMark, $sqnce, $nrCats, $repeat, $approve, $public;
	
	do {
		if (($color and !preg_match("/^#[0-9A-Fa-f]{6}$/", $color)) or ($bgrnd and !preg_match("/^#[0-9A-Fa-f]{6}$/", $bgrnd))) { $msg = $ax['cat_invalid_color']; break; }
		if (!$cname) { $msg = $ax['cat_name_missing']; break; }
		if ($chBox and (!$cLabel or !$cMark)) { $msg = $ax['cat_mark_label_missing']; break; }
		if (!ctype_digit($sqnce) or $sqnce == 0) {
			$sqnce = 1;
		} elseif ($sqnce > $nrCats) {
			$sqnce = $nrCats + 1;
		}
		//renumber sequence
		$rSet = dbQuery("SELECT category_id AS cid FROM [db]categories WHERE status >= 0 AND sequence >= $sqnce ORDER BY sequence");
		if ($rSet !== false) {
			$count = $sqnce;
			while ($row = mysql_fetch_assoc($rSet)) {
				dbQuery("UPDATE [db]categories SET sequence = ".++$count." WHERE category_id = ".$row['cid']);
			}
		}
		//add new category
		$nameEsc = mysql_real_escape_string($cname);
		$cLabelEsc = mysql_real_escape_string($cLabel);
		$result = dbQuery("INSERT INTO [db]categories VALUES (NULL,'$nameEsc',$sqnce,$repeat,$approve,$public,'$color','$bgrnd',$chBox,'$cLabelEsc','$cMark',DEFAULT)");
		if (!$result) { $msg = "Database Error: ".$ax['cat_not_added']; break; }
		$msg = $ax['cat_added'];
		$editCat = '';
	} while (false);
	return $msg;
}

function updateCat() { //update category
	global $cid, $editCat, $ax, $color, $bgrnd, $cname, $chBox, $cLabel, $cMark, $sqnce, $nrCats, $repeat, $approve, $public;
	
	do {
		if (!$cname) { $msg = $ax['cat_name_missing']; break; }
		if ($chBox and (!$cLabel or !$cMark)) { $msg = $ax['cat_mark_label_missing']; break; }
		if (($color and !preg_match("/^(#[0-9A-Fa-f]{6})?$/", $color)) or ($bgrnd and !preg_match("/^(#[0-9A-Fa-f]{6})?$/", $bgrnd))) { $msg = $ax['cat_invalid_color']; break; }
		if (!ctype_digit($sqnce) or $sqnce == 0) {
			$sqnce = 1;
		} elseif ($sqnce > $nrCats) {
			$sqnce = $nrCats;
		}
		//update
		$nameEsc = mysql_real_escape_string($cname);
		$cLabelEsc = mysql_real_escape_string($cLabel);
		$result = dbQuery("UPDATE [db]categories SET name='$nameEsc',sequence=$sqnce,rpeat=$repeat,approve=$approve,public=$public,color='$color',background='$bgrnd',chbox=$chBox,chlabel='$cLabelEsc',chmark='$cMark' WHERE category_id = $cid");
		if (!$result) { $msg = "Database Error: {$ax['cat_not_updated']}"; break; }
		$msg = $ax['cat_updated'];
		$editCat = '';
		//renumber sequence
		$rSet = dbQuery("SELECT category_id AS cid FROM [db]categories WHERE status >= 0 ORDER BY sequence");
		if ($rSet !== false) {
			$count = 1;
			while ($row = mysql_fetch_assoc($rSet)) {
				if ($row['cid'] != $cid) {
					if ($count == $sqnce) { $count++; }
					dbQuery("UPDATE [db]categories SET sequence=".$count++." WHERE category_id = ".$row['cid']);
				}
			}
		}
	} while (false);
	return $msg;
}

function deleteCat() { //delete category
	global $cid, $ax;
	
	$result = dbQuery("UPDATE [db]categories SET sequence=0,status=-1 WHERE category_id = $cid");
	if (!$result) {
		$msg = "Database Error: {$ax['cat_not_deleted']}";
	} else {
		$msg = $ax['cat_deleted'];
		//renumber sequence
		$rSet = dbQuery("SELECT category_id AS cid FROM [db]categories WHERE status >= 0 ORDER BY sequence");
		if ($rSet !== false) {
			$count = 1;
			while ($row = mysql_fetch_assoc($rSet)) {
				dbQuery("UPDATE [db]categories SET sequence=".$count++." WHERE category_id = ".$row['cid']);
			}
		}
	}
	return $msg;
}

//Control logic
if ($privs >= 4) { //manager or admin
	$msg = '';
	if (isset($_POST['addExe'])) {
		$msg = addCat();
	} elseif (isset($_POST['updExe'])) {
		$msg = updateCat();
	} elseif (isset($_GET['delExe'])) {
		$msg = deleteCat();
	}
	echo "<p class='error'>{$msg}</p>
		<div class='scrollBoxAd'>
		<div class='centerBox'>\n";
	if (!$editCat or isset($_POST['back'])) {
		showCategories(false); //no edit
	} else {
		editCategory($editCat,$cid); //action = "add" or "edit"
		showCategories(true); //edit
	}
	echo "</div>\n</div>\n";
} else {
	echo "<p class='error'>{$ax['no_way']}</p>\n";
}
?>