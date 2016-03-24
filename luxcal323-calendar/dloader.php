<?php
/*= file downloader script =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.

this script tells the http server and client browser that the requested file is coming 
back as an application attachment to be saved as a file rather than to be rendered.
*/

//sanity check
if (!isset($_GET['ftd']) or !preg_match('%^[^+,()|&@<>\s\\/]{1,60}\.(ics|txt)$%', $_GET['ftd'])) { exit('not permitted - no or wrong file name'); } // no way!

$fName = $_GET['ftd']; //file to download
$rName = $_GET['rName']; //rename
$dName = './files/';
if (file_exists($dName.$fName)) { //file valid
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=$rName");
	readfile($dName.$fName); //send download
} else {
	echo "File not present";
}
?>
