<?php
/*
= Header for the LuxCal calendar pages = (navbar without event-related buttons)

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
?>
<!DOCTYPE html>
<html lang="<?php echo ISOCODE; ?>">
<head>
<meta charset="utf-8">
<title><?php echo $set['calendarTitle'].' - Admin'; ?></title>
<meta name="description" content="LuxCal web calendar - a LuxSoft product">
<meta name="keywords" content="LuxSoft, LuxCal, LuxCal web calendar">
<meta name="author" content="Roel Buining">
<meta name="robots" content="nofollow">
<link rel="icon" href="lcal.ico">
<?php
echo '<link rel="canonical" href="'.$set['calendarUrl'].'">'."\n";
?>
<link rel="stylesheet" href="css/css.php" type="text/css">
<script>
<?php //used by dtpicker.js
echo "var mode = \"{$mode}\";
var tFormat = \"{$set['timeFormat']}\";
var dFormat = \"{$set['dateFormat']}\";
var wStart = {$set['weekStart']};
var dwStartH = {$set['dwStartHour']};
var dwEndH = {$set['dwEndHour']};
var dpToday = \"{$xx['hdr_today']}\";
var dpClear = \"{$xx['hdr_clear']}\";
var dpMonths = new Array('",implode("','",$months),"');
var dpWkdays = new Array('",implode("','",$wkDays_m),"');
var dwTimeSlot = {$set['dwTimeSlot']};\n"; //used by dw_functions.php
?>
</script>
<script src="common/dtpicker.js"></script>
<script src="common/cpicker.js"></script>
<script src="common/toolbox.js"></script>
</head>

<body>
<?php
echo "<header>
	<span class='floatL'>{$set['calendarTitle']}</span><span class='floatR'>{$uname}</span><span class='noPrint'>".makeD(date("Y-m-d"),5)."</span>
</header>\n";
echo "<div class=\"navBar noPrint\">
	<div class=\"floatR\">
	<button type='button' title=\"{$xx['hdr_back_to_cal']}\" onclick=\"window.location.href='index.php?lc&amp;cP=0'\">{$xx['hdr_calendar']}</button>
	<button type='button' title=\"{$xx['hdr_print_page']}\" onclick='printNice();'>{$xx['hdr_button_print']}</button>\n";
if ($privs >= 4) { //manager or admin rights
	echo "<select title=\"{$xx['hdr_select_admin_functions']}\" name='views' onchange='jumpMenu(this)'>
	<option value='#'>{$xx['hdr_admin']}&nbsp;</option>\n";
	if ($privs == 4) { //manager
		echo "<option value='index.php?lc&amp;cP=91'".($cP == "91" ? " selected='selected'>" : '>').$xx['hdr_categories']."</option>
		<option value='index.php?lc&amp;cP=92'".($cP == "92" ? " selected='selected'>" : '>').$xx['hdr_users']."</option>\n";
	} else { //admin
		echo "<option value='index.php?lc&amp;cP=90'".($cP == "90" ? " selected='selected'>" : '>').$xx['hdr_settings']."</option>
		<option value='index.php?lc&amp;cP=91'".($cP == "91" ? " selected='selected'>" : '>').$xx['hdr_categories']."</option>
		<option value='index.php?lc&amp;cP=92'".($cP == "92" ? " selected='selected'>" : '>').$xx['hdr_users']."</option>
		<option value='index.php?lc&amp;cP=93'".($cP == "93" ? " selected='selected'>" : '>').$xx['hdr_database']."</option>
		<option value='index.php?lc&amp;cP=94'".($cP == "94" ? " selected='selected'>" : '>').$xx['hdr_import_ics']."</option>
		<option value='index.php?lc&amp;cP=95'".($cP == "95" ? " selected='selected'>" : '>').$xx['hdr_export_ics']."</option>
		<option value='index.php?lc&amp;cP=96'".($cP == "96" ? " selected='selected'>" : '>').$xx['hdr_import_csv']."</option>\n";
	}
	echo "</select> \n";
}
echo "<button type='button' title=\"{$xx['hdr_help']}\" onclick=\"help();\">".($set['navButText'] ? $xx['hdr_button_help'] : '&nbsp;?&nbsp;')."</button>\n";
if ($_SESSION['uid'] == 1) { //public user
	echo "<button type='button' onclick=\"login()\">{$xx['hdr_button_log_in']}</button>\n";
} else { //known user
	echo "<button type='button' onclick=\"logout()\">{$xx['hdr_button_log_out']}</button>\n";
}
echo "</div>\n";
echo "<button type='button' title=\"{$xx['hdr_options_panel']}\" onclick=\"toggleLabel(this,'{$xx['hdr_button_options']}','{$xx['done']}'); show('optPanel','optMenu')\">{$xx['hdr_button_options']}</button>\n";

//make options panel
echo "<div id='optPanel'>
	<h4 class='floatC'>{$xx['hdr_options_submit']}</h4>
	<form name='optMenu' action='index.php?lc' method='post'>
	<table class=\"options\">
	<tr>
	<th title=\"{$xx['hdr_select_view']}\">{$xx['hdr_view']}</th>\n";
if ($set['userMenu']) { echo "<th title=\"{$xx['hdr_select_filter']}\">{$xx['hdr_filter']}</th>\n"; }
if ($set['catMenu']) { echo "<th title=\"{$xx['hdr_select_filter']}\">{$xx['hdr_filter']}</th>\n"; }
if ($set['langMenu']) { echo "<th title=\"{$xx['hdr_select_lang']}\">{$xx['hdr_lang']}</th>\n"; }
echo "</tr>\n";
echo "<tr>
	<td><div class='optList'>
	<input type='checkbox' id='cP1' name='cP' value='1' onclick=\"check1('cP',this);\"".($cP == "1" ? " checked='checked'" : '')."><label for='cP1'>{$xx['hdr_year']}</label><br>
	<input type='checkbox' id='cP2' name='cP' value='2' onclick=\"check1('cP',this);\"".($cP == "2" ? " checked='checked'" : '')."><label for='cP2'>{$xx['hdr_month_full']}</label><br>
	<input type='checkbox' id='cP3' name='cP' value='3' onclick=\"check1('cP',this);\"".($cP == "3" ? " checked='checked'" : '')."><label for='cP3'>{$xx['hdr_month_work']}</label><br>
	<input type='checkbox' id='cP4' name='cP' value='4' onclick=\"check1('cP',this);\"".($cP == "4" ? " checked='checked'" : '')."><label for='cP4'>{$xx['hdr_week_full']}</label><br>
	<input type='checkbox' id='cP5' name='cP' value='5' onclick=\"check1('cP',this);\"".($cP == "5" ? " checked='checked'" : '')."><label for='cP5'>{$xx['hdr_week_work']}</label><br>
	<input type='checkbox' id='cP6' name='cP' value='6' onclick=\"check1('cP',this);\"".($cP == "6" ? " checked='checked'" : '')."><label for='cP6'>{$xx['hdr_day']}</label><br>
	<input type='checkbox' id='cP7' name='cP' value='7' onclick=\"check1('cP',this);\"".($cP == "7" ? " checked='checked'" : '')."><label for='cP7'>{$xx['hdr_upcoming']}</label><br>
	<input type='checkbox' id='cP8' name='cP' value='8' onclick=\"check1('cP',this);\"".($cP == "8" ? " checked='checked'" : '')."><label for='cP8'>{$xx['hdr_changes']}</label>
	</div></td>\n";
if ($set['userMenu']) {
	echo "<td><div class=\"optList\">\n";
	$rSet = dbQuery("SELECT user_id, user_name, color FROM [db]users WHERE status >= 0 ORDER BY user_name");
	if ($rSet !== false) {
		echo "<input type='checkbox' id='cU0' name='cU[]' value='0' onclick=\"checkZ('cU',this);\"".(in_array(0, $_SESSION['cU']) ? " checked='checked'" : '')."><label for='cU0'>{$xx['hdr_all_users']}</label><br>\n";
		while ($row=mysql_fetch_assoc($rSet)) {
			$xU = $row['user_id'];
			$chBoxed = in_array($xU, $_SESSION['cU']) ? " checked=\"checked\"" : "";
			$userColor = ($row['color']) ? " style='background-color:{$row['color']};'" : '';
			echo "<input type='checkbox' id='cU{$xU}' name='cU[]' value='{$xU}' onclick=\"checkN('cU',this);\"{$chBoxed}><label for='cU{$xU}'{$userColor}>".stripslashes($row['user_name'])."</label><br>\n";
		}
	}
	echo "</div></td>\n";
}
if ($set['catMenu']) {
	echo "<td><div class=\"optList\">\n";
	$where = ' WHERE status >= 0'.($_SESSION['uid'] == 1 ? " AND public > 0" : "");
	$rSet = dbQuery("SELECT sequence, name, color, background FROM [db]categories".$where." ORDER BY sequence");
	if ($rSet !== false) {
		echo "<input type='checkbox' id='cC0' name='cC[]' value='0' onclick=\"checkZ('cC',this);\"".(in_array(0, $_SESSION['cC']) ? " checked='checked'" : '')."><label for='cC0'>{$xx['hdr_all_cats']}</label><br>\n";
		while ($row=mysql_fetch_assoc($rSet)) {
			$xC = $row['sequence'];
			$chBoxed = in_array($xC, $_SESSION['cC']) ? " checked='checked'" : '';
			$catColor = ($row['color'] ? "color:{$row['color']};" : '').($row['background'] ? "background-color:{$row['background']};" : '');
			echo "<input type='checkbox' id='cC{$xC}' name='cC[]' value='{$xC}' onclick=\"checkN('cC',this);\"{$chBoxed}><label for='cC{$xC}'".($catColor ? " style=\"".$catColor."\"" : "").'>'.stripslashes($row['name'])."</label><br>\n";
		}
	}
	echo "</div></td>\n";
}
if ($set['langMenu']) {
	echo "<td><div class=\"optList\">\n";
	$files = scandir("lang/");
	foreach ($files as $file) {
		if (substr($file, 0, 3) == "ui-") {
			$lang = strtolower(substr($file,3,-4));
			$chBoxed = (strtolower($_SESSION['cL']) == $lang) ? " checked='checked'" : '';
			echo "<input type='checkbox' id='{$lang}' name='cL' value='{$lang}' onclick=\"check1('cL',this);\"{$chBoxed}><label for='{$lang}'>".ucfirst($lang)."</label><br>\n";
		}
	}
	echo "</div></td>\n";
}
echo "</tr>
</table>
</form>
</div>
</div>
<div class='content'>\n";

if ($pageTitle) echo "<br><h3 class='pageTitle'>{$pageTitle}</h3>\n";
?>
