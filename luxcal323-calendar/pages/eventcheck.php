<?php
/*
= LuxCal check event page =

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

//get input params
$eid = $_REQUEST['eid'];
$evD = $_REQUEST['evD'];

//sanity check
if (!defined('LCC') or
		!preg_match('%^\d{1,8}$%', $eid) or
		!preg_match('%^\d{2,4}-\d{2}-\d{2,4}$%', $evD)
	) { exit('not permitted ('.substr(basename(__FILE__),0,-4).')'); }

//init event data
if (!isset($_POST['checkExe'])) { //get event details
	$rSet = dbQuery("
		SELECT e.user_id,e.title,e.checked,c.color,c.background,c.chlabel
		FROM [db]events e
		INNER JOIN [db]categories c ON c.category_id = e.category_id
		INNER JOIN [db]users u ON u.user_id = e.user_id
		WHERE e.event_id = $eid");
	$row = mysql_fetch_assoc($rSet);
	$chd = $row['checked'];
	$clb = stripslashes($row['chlabel']);
	$tit = stripslashes($row['title']);
	$chk = strpos($chd, $evD) ? 1 : 0; //check?
	$col = $row['color'];
	$bco = $row['background'];
} else { //check event
	$chd = isset($_POST['chd']) ? $_POST['chd'] : '';
	$chk = isset($_POST['cbx']) ? ($_POST['cbx'] == 'yes' ? 1 : 0) : 0; //check?
}

//update event

//update database
if (isset($_POST['checkExe'])) {
	$mdt = date("Y-m-d H:i:s");
	//set checked
	if ($chk) {
		if (!strpos($chd, $evD)) { $chd .= ";$evD"; } //check
	} elseif (strpos($chd, $evD)) { //uncheck
		$chd = str_replace(";$evD",'',$chd);
	}
	$q = "UPDATE [db]events
	SET checked='$chd', editor='$uname', m_datetime='$mdt'
	WHERE event_id=$eid";
	$result = dbQuery($q); //update events table
	//refresh calendar and close this window 
	echo "\n<script>done('cr');</script>\n";
}

$catColor = ($col ? "color:{$col};" : '').($bco ? "background-color:{$bco};" : '');
?>
<form id='event' name='event' method='post' action='index.php?lc&amp;xP=11'>
<input type='hidden' name='eid' value='<?php echo $eid; ?>'>
<input type='hidden' name='evD' value='<?php echo $evD; ?>'>
<input type='hidden' name='chd' value='<?php echo $chd; ?>'>
<table class='evtForm'>
<tr><td class='floatC'>
<?php
echo '<span'.($catColor ? " style='{$catColor}'" : '').">{$tit}</span>\n<br><br>\n
<input type='checkbox' name='cbx' id='cbx' value='yes'".($chk ? " checked='checked'" : '')."><label for='cbx'>{$clb}</label>&nbsp;\n
</td></tr>\n
</table>\n
<div class='floatC'>\n
<input type='submit' name='checkExe' value=\"{$xx['evt_save']}\">&nbsp;&nbsp;&nbsp;\n
<button type='button' onclick='javascript:self.close();'>{$xx['evt_close']}</button>\n
</div>\n";
?>
</form>
