<?php
/*
= calendar day view =


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
require './views/dw_functions.php';

$cD = $_SESSION['cD'];
$tcDate = mktime(12,0,0,substr($cD,5,2),substr($cD,8,2),substr($cD,0,4)); //Unix time of cD
$nextDay = date("Y-m-d", $tcDate + 86400);
$prevDay = date("Y-m-d", $tcDate - 86400);

retrieve($cD,$nextDay,'uc'); //grab events

/* display header*/
$header = "<span".($_SESSION['mobile'] ? '' : " class='viewHdr'").'>'.makeD($cD,5).'</span>';
echo "<h4 class='floatC'><a class='noPrint' href='index.php?lc&amp;cD={$prevDay}'><img src='images/arrowl.png' alt='back'></a>{$header}<a class='noPrint' href='index.php?lc&amp;cD={$nextDay}'><img src='images/arrowr.png' alt='forward'></a></h4>\n";

/* display day headers */
echo "<div".($_SESSION['mobile'] ? '' : " class='scrollBoxHead'").">
	<table class='grid'>
	<tr><th class='tCol'>{$xx['vws_time']}</th><th class='dCol'>{$xx['vws_events']}</th></tr>
	</table>
</div>\n";

/* display day */
echo "<div".($_SESSION['mobile'] ? '' : " class='scrollBoxDa'").">
	<table class='grid'>
	<tr>\n<td class='tCol tColBg'>\n";
showHours();
echo "</td><td class='dColBg'>\n";
showDay($cD,$xx['vws_events']);
echo "</td>\n</tr>\n</table>
</div>\n";
?>
