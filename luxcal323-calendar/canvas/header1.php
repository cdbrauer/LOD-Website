<?php
/*
= Header for the LuxCal calendar pages = (full)

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
<title><?php echo $set['calendarTitle']; ?></title>
<meta name="description" content="LuxCal web calendar - a LuxSoft product">
<meta name="keywords" content="LuxSoft, LuxCal, LuxCal web calendar">
<meta name="author" content="Roel Buining">
<meta name="robots" content="nofollow">
<link rel="icon" href="lcal.ico">
<?php
echo "<link rel=\"canonical\" href=\"{$set['calendarUrl']}\">\n";
if ($privs > 0 and $set['rssFeed']) {
	echo '<link rel="alternate" type="application/rss+xml" title="LuxCal RSS Feed" href="http://'.$_SERVER['SERVER_NAME'].rtrim(dirname($_SERVER["PHP_SELF"]),'/').'/rssfeed.php'.$cF.'">'."\n";
}
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
<script src="common/toolbox.js"></script>
</head>

<body>
<?php
echo "<header>
	<span class='floatL'>{$set['calendarTitle']}</span><span class='floatR'>{$uname}</span><span class='noPrint'>".makeD(date("Y-m-d"),5)."</span>
</header>\n";
echo "<div class='navBar noPrint'>\n";
if ($privs > 0) { //view rights
	echo "<div class='floatR'>\n";
	if (!$_SESSION['mobile']) {
		echo "<button type='button' title=\"{$xx['hdr_print_page']}\" onclick='printNice();'>{$xx['hdr_button_print']}</button>\n";
	}
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
	if ($set['navTodoList']) {
		echo "<button type='button' title=\"{$xx['hdr_todo_list']}\" onclick=\"show('taskBar')\">".($set['navButText'] ? $xx['hdr_button_todo'] : '&nbsp;&#8801;&nbsp;')."</button>\n";
	}
	if ($set['navUpcoList']) {
		echo "<button type='button' title=\"{$xx['hdr_upco_list']}\" onclick=\"show('upcoBar')\">".($set['navButText'] ? $xx['hdr_button_upco'] : '&nbsp;&#8804;&nbsp;')."</button>\n";
	}
	echo "<button type='button' title=\"{$xx['hdr_search']}\" onclick=\"window.location.href='index.php?lc&amp;cP=21'\">".($set['navButText'] ? $xx['hdr_button_search'] : '&nbsp;&#916;&nbsp;')."</button>\n";
	if ($privs > 1) { //post rights
		echo "<button type='button' title=\"{$xx['hdr_add_event']}\" onclick=\"newE();\">".($set['navButText'] ? $xx['hdr_button_add'] : '&nbsp;+&nbsp;')."</button>\n";
	}
	echo "<button type='button' title=\"{$xx['hdr_help']}\" onclick=\"help();\">".($set['navButText'] ? $xx['hdr_button_help'] : '&nbsp;?&nbsp;')."</button>\n";
	if ($_SESSION['uid'] == 1) { //public user
		echo "<button type='button' onclick=\"login()\">{$xx['hdr_button_log_in']}</button>\n";
	} else { //known user
		echo "<button type='button' onclick=\"logout()\">{$xx['hdr_button_log_out']}</button>\n";
	}
	echo "</div>\n";
	if ($set['backLinkUrl']) {
		echo "<button type='button' title=\"{$xx['hdr_button_back']}\" onclick=\"window.location.href='{$set['backLinkUrl']}';\">{$xx['back']}</button>\n";
	}
	echo "<button type='button' title=\"{$xx['hdr_options_panel']}\" onclick=\"toggleLabel(this,'{$xx['hdr_button_options']}','{$xx['done']}'); show('optPanel','optMenu')\">{$xx['hdr_button_options']}</button>\n";
	echo "<form class='inline' method='post' id='gotoD' name='gotoD' action='index.php?lc'>
		<input style='width:62px;' type='text' name='nD' id='nD' value='".IDtoDD($_SESSION['cD'])."'>
		<button type='button' title=\"{$xx['hdr_select_date']}\" onclick=\"dPicker(0,'gotoD','nD');return false;\">&larr;</button>
	</form>\n";

	//make options panel
	echo "<div id='optPanel'>
		<h4 class='floatC'>{$xx['hdr_options_submit']}</h4>
		<form name='optMenu' action='index.php?lc' method='post'>
		<table class='options'>
		<tr>
		<th title=\"{$xx['hdr_select_view']}\">{$xx['hdr_view']}</th>\n";
	if ($set['userMenu'] and $_SESSION['uid'] > 1) { echo "<th title=\"{$xx['hdr_select_filter']}\">{$xx['hdr_filter']}</th>\n"; }
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
	if ($set['userMenu'] and $_SESSION['uid'] > 1) {
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
	</div>\n";
} else { //display dummy navbar
	echo "&nbsp;<div class='floatR'>
	<button type='button' onclick=\"login()\">{$xx['hdr_button_log_in']}</button>
	</div>\n";
}
echo "</div>
<div class='content'>\n";

if ($privs > 0) { //view rights
	if ($set['navUpcoList']) {
		//make side bar with upcoming events
		echo "<div id='upcoBar'>
			<img class='floatR point' onclick=\"show('upcoBar')\" src=\"images/close.png\" alt=\"close\">
			<div class='barHead move' onmousedown=\"dragMe('upcoBar',event)\">{$xx['hdr_upco_list']}</div>
			<div class='barBody'>\n";
		$curD = $_SESSION['cD'];
		$eTime = mktime(12,0,0,substr($curD,5,2),substr($curD,8,2),substr($curD,0,4)) + (($set['lookaheadDays']-1) * 86400); //Unix time of end date
		$eDate = date("Y-m-d", $eTime);

		retrieve($curD,$eDate,'uc');

		//display upcoming events
		if ($evtList) {
			$evtDone = array();
			$lastDate = '';
			foreach($evtList as $date => &$events) {
				foreach ($events as $evt) {
					if (!$evt['mde'] or !in_array($evt['eid'],$evtDone)) { //!mde or mde not processed
						$evtDone[] = $evt['eid'];
						$evtDate = $evt['mde'] ? makeD($evt['sda'],5)." - ".makeD($evt['eda'],5) : makeD($date,5);
						$evtTime = $evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
						$details = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1) or $evt['mayE']);
						$onClick = $details ? " class='point' onclick=\"editE({$evt['eid']},'{$date}');\"" : " class='arrow'";
						if ($set['eventColor']) {
							$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
						} else {
							$eStyle = ($evt['uco'] ? "background-color:{$evt['uco']};" : '');
						}
						$eStyle = $eStyle ? " style='{$eStyle}'" : '';
						echo $lastDate != $evtDate ? "<h6>{$evtDate}</h6>\n" : '';
						echo "<p>{$evtTime}</p><p{$onClick}{$eStyle}>&nbsp;&nbsp;{$evt['tit']}</p><br>\n";
						$lastDate = $evtDate;
					}
				}
			}
		} else {
			echo $xx['none']."\n";
		}
		echo "</div>\n</div>\n";
	}

	if ($set['navTodoList']) {
		//make side bar with todo list
		echo "<div id='taskBar'>
			<img class='floatR point' onclick=\"show('taskBar')\" src='images/close.png' alt='close'>
			<div class='barHead move' onmousedown=\"dragMe('taskBar',event)\">{$xx['hdr_todo_list']}</div>\n
			<div class='barBody'>\n";
		$curD = $_SESSION['cD'];
		$curT = mktime(12,0,0,substr($curD,5,2),substr($curD,8,2),substr($curD,0,4)); //current Unix time
		$startD = date("Y-m-d", $curT - (30 * 86400)); //current date - 1 month
		$endD = date("Y-m-d", $curT + (($set['lookaheadDays']-1) * 86400)); //current date + look ahead nr of days

		$filter = '(c.chbox = 1)'; //events in cat with a check mark
		retrieve($startD,$endD,'u',$filter);

		//display todo list
		if ($evtList) {
			foreach($evtList as $date => &$events) {
				echo "<h6>".makeD($date,5)."</h6>\n";
				foreach ($events as $evt) {
					$evtTime = $evt['ald'] ? $xx['vws_all_day'] : ITtoDT($evt['sti']).($evt['eti'] ? ' - '.ITtoDT($evt['eti']) : '');
					$onClick = ($set['details4All'] == 1 or ($set['details4All'] == 2 and $_SESSION['uid'] > 1) or $evt['mayE']) ? " class='point' onclick=\"editE({$evt['eid']},'{$date}');\"" : " class='arrow'";
					if ($set['eventColor']) {
						$eStyle = ($evt['cco'] ? "color:{$evt['cco']};" : '').($evt['cbg'] ? "background-color:{$evt['cbg']};" : '');
					} else {
						$eStyle = ($evt['uco'] ? "background-color:{$evt['uco']};" : '');
					}
					$eStyle = $eStyle ? " style='{$eStyle}'" : '';
					$chBox = '';
					if ($evt['cbx']) { $chBox .= strpos($evt['chd'], $date) ? $evt['cmk'] : '&#x2610;'; }
					if ($chBox) {
						$mayCheck = ($privs > 3 or ($privs > 1 and $evt['uid'] == $_SESSION['uid'])) ? true : false;
						$attrib = $mayCheck ? "class='chkBox floatL point' onclick=\"checkE({$evt['eid']},'{$date}');\" title=\"{$xx['vws_check_mark']}\"" : "class='chkBox floatL arrow'";
						$chBox = "<div {$attrib}>".trim($chBox)."</div>";
					}
					echo "<p>{$evtTime}</p>\n{$chBox}<p{$onClick}{$eStyle}>&nbsp;&nbsp;{$evt['tit']}</p><br>\n";
				}
			}
		} else {
			echo $xx['none']."\n";
		}
		echo "</div>\n</div>\n";
	}
}

if ($pageTitle) echo "<br><h3 class='pageTitle'>{$pageTitle}</h3>\n";
?>
