<?php
/*
= Header for the LuxCal calendar pages = (no Top bar, no Nav bar)

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
<link rel="icon" href="lcal.ico">
<link rel="stylesheet" href="css/css.php" type="text/css">
<style type="text/css">
/* ---- all views ----- */
.content {margin-top:-48px;}
</style>
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
<script src="common/toolbox.js"></script>
</head>

<body>
<div class="content">
<?php
if ($pageTitle) echo "<br><h3 class='pageTitle'>{$pageTitle}</h3>\n";
?>
