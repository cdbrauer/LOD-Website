<?php
/*
= Header for the LuxCal calendar popup window = (user guide)

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
<script src="common/toolbox.js"></script>
</head>

<body>
<div class="titleBar">
<h4 class='floatL'><?php echo $pageTitle ?></h4>
<img class='floatR point' onclick='javascript:self.close();' src='images/close.png' alt='close'>
<?php
echo ($_SESSION['uid'] > 1) ? "<h5 class='floatC'><span class='footLB'>Lux</span><span class='footLR'>Cal</span> v".LCV."</h5>\n" : "&nbsp;\n";
?>
</div>
<div class="contentH scroll">
