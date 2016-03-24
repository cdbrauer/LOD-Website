<?php
/*
= LuxCal event calendar index =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.

The LuxCal Web Calendar is free software: you can redistribute it and/or modify it under 
the terms of the GNU General Public License as published by the Free Software Foundation, 
either version 3 of the License, or (at your option) any later version.

The LuxCal Web Calendar is distributed in the hope that it will be useful, but WITHOUT 
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A 
PARTICULAR PURPOSE. See the GNU General Public License for more details.
*/

//Current LuxCal version
define("LCV","3.2.3");

//get php toolbox
require './common/toolbox.php';

//validate GET / POST variables
validVars();

//set error reporting
error_reporting(E_ALL ^ E_NOTICE); //errors, no notices
ini_set('display_errors',0);
ini_set('log_errors',1);

//proxies: don't cache
header("Cache-control: private");

//emulate register_globals off (deprecated as off PHP 5.3)
unregisterGlobals();

//start session
session_name('PHPSESSID');
session_start();
$sessID = session_id();

//strip slashes in case magic_quotes on (PHP < 5.4)
$_COOKIE = array_map('stripslashes', $_COOKIE);

if (!isset($_GET['lc'])) { //external hit
	//connect to db
	if (!file_exists('./lcconfig.php') and !file_exists('./lcaldbc.dat')) {//no db credentials: install
		header("Location: install".substr(str_replace('.','',LCV),0,3).".php"); exit();
	}
	$dbPfix = dbConnect();
	if ($dbPfix === false or LCC != substr(LCV,0,5)) { //no connection or LCC (dbConnect) not current: upgrade
		header("Location: upgrade".substr(str_replace('.','',LCV),0,3).".php"); exit();
	}
	//set PHP session cookie to 30 days
	setcookie('PHPSESSID', $sessID, time()+2592000);

	//validate/set/bake calendar ID
	$calID = $_SESSION['cal'] = !empty($_GET['cal']) ? $_GET['cal'] : (isset($_COOKIE['LCALcid']) ? @unserialize($_COOKIE['LCALcid']) : $dbPfix);
	if (!$calID) { $calID = $_SESSION['cal'] = $dbPfix; } //if GET or cookie empty
	$rSet = dbQuery("SHOW TABLES LIKE '".$calID."_settings'"); //check if calendar exists
	if (mysql_num_rows($rSet) == 0) { exit("Calendar '{$calID}' does not exist."); }
	setcookie('LCALcid', serialize($calID), time()+2592000); //set calID cookie to 30 days
	
	//get uid if user name/email passed by parent (SSO)
	if (isset($_SESSION['lcUser'])) {
		$rSet = dbQuery("SELECT user_id FROM [db]users WHERE (user_name = '{$_SESSION['lcUser']}' OR email = '{$_SESSION['lcUser']}')");
		unset($_SESSION['lcUser']);
		if ($row = mysql_fetch_row($rSet)) { //user id found
			$_SESSION['uid'] = $row[0];
		} else {
			unset($_SESSION['uid']);
		}
	}
	//if no SSO get user ID
	if (empty($_SESSION['uid'])) {
		$_SESSION['uid'] = isset($_COOKIE['LCALuid']) ? @unserialize($_COOKIE['LCALuid']) : 1;
	}
	//get settings from database
	$set = getSettings();
	$_SESSION['cP'] = $set['defaultView'];
} else { //internal hit
	//connect to db
	$dbPfix = dbConnect();
	//test session
	if (isset($_SESSION['cal'])) { //active
		$calID = $_SESSION['cal'];
	} else { //expired, get cal & user ID
		$calID = $_SESSION['cal'] = isset($_COOKIE['LCALcid']) ? @unserialize($_COOKIE['LCALcid']) : $dbPfix;
		$_SESSION['uid'] = isset($_COOKIE['LCALuid']) ? @unserialize($_COOKIE['LCALuid']) : 1;
	}
	//get settings from database
	$set = getSettings();
}

//set time zone
date_default_timezone_set($set['timeZone']);

//load session data from db
if ($set['restLastSel']) { loadSession($sessID,$calID); }
//echo "sessID: ".$sessID." / calID: ".$calID." / restLastSel: ".$set['restLastSel']." / cP: ".$_SESSION['cP']; //test

//after login bake is set (1:bake, -1:eat cookie)
if (isset($_REQUEST['bake'])) {
	setcookie('LCALuid', serialize($_SESSION['uid']), time()+86400*$set['cookieExp']*$_REQUEST['bake']); //set or refresh
	saveSession($sessID,$calID,$_REQUEST['bake']);
}

//check for mobile browsers
if (!isset($_SESSION['mobile'])) {
	$_SESSION['mobile'] = isMobile();
}

//set header display
if (isset($_GET['hdr'])) { $_SESSION['hdr'] = $_GET['hdr']; }
elseif (!isset($_SESSION['hdr'])) { $_SESSION['hdr'] = 1; }

//set language
if (isset($_POST["cL"])) { $_SESSION['cL'] = $_POST['cL']; }
elseif (empty($_SESSION['cL'])) { $_SESSION['cL'] = $set['language']; }
if (!file_exists('./lang/ui-'.strtolower($_SESSION['cL']).'.php')) { $_SESSION['cL'] = 'English'; }
require './lang/ui-'.strtolower($_SESSION['cL']).'.php';

//get user data & set privs
if (isset($_GET["logout"])) { $_SESSION['uid'] = 1; } //public user
$rSet = dbQuery("SELECT user_name, email, privs FROM [db]users WHERE user_id = {$_SESSION['uid']}");
if (mysql_num_rows($rSet) == 0) { //user id not found
	$_SESSION['uid'] = 1; //revert to public user
	$rSet = dbQuery("SELECT user_name, email, privs FROM [db]users WHERE user_id = {$_SESSION['uid']}");
}
list($uname, $umail, $privs) = mysql_fetch_row($rSet);
if ($_SESSION['uid'] == 1) { $uname = $xx['idx_public_name']; }

//set current page
if (isset($_REQUEST['cP'])) { $_SESSION['cP'] = intval($_REQUEST['cP']); }
if (empty($_SESSION['cP'])) { $_SESSION['cP'] = $set['defaultView']; }
$cP = (isset($_GET['xP'])) ? $_GET['xP'] : $_SESSION['cP']; //$xP: don't store in session
if (!$privs){ $cP = 20; } //no access: force login

//set user filter
if (isset($_REQUEST['cU'])) { $_SESSION['cU'] = $_REQUEST['cU']; }
elseif (!isset($_SESSION['cU'])) { $_SESSION['cU'] = array(0); }

//set category filter
if (isset($_REQUEST['cC'])) { $_SESSION['cC'] = $_REQUEST['cC']; }
elseif (!isset($_SESSION['cC'])) { $_SESSION['cC'] = array(0); }

//set current date
if (isset($_REQUEST['nD'])) { $_SESSION['cD'] = $_SESSION['nD'] = DDtoID($_REQUEST['nD']); }
elseif (isset($_GET['cD'])) { $_SESSION['cD'] = $_GET['cD']; }
elseif (empty($_SESSION['cD'])) { $_SESSION['cD'] = date("Y-m-d"); }

//set rss get-method filter
$cF = "&amp;cal={$calID}";
foreach ($_SESSION['cU'] as $usr) { if ($usr) { $cF .= '&amp;cU%5B%5D='.$usr; } }
foreach ($_SESSION['cC'] as $cat) { if ($cat) { $cF .= '&amp;cC%5B%5D='.$cat; } }
if ($cF) { $cF = '?'.substr($cF,5); }

if ((isset($_REQUEST['cP']) or isset($_REQUEST['cU']) or isset($_REQUEST['cC']) or isset($_POST['cL'])) and $_SESSION['uid'] > 1) {
	saveSession($sessID,$calID); //save session data to db
}

//page definitions
//page, header, no hdr, mob hdr, footer, mob ftr, title, retrieve required, spec. attributes
$pages = array (
	 '1' => array ('views/year.php','1','0','m','1','0','','y',''),
	 '2' => array ('views/month.php','1','0','m','1','0','','y','fm'),
	 '3' => array ('views/month.php','1','0','m','1','0','','y','wm'),
	 '4' => array ('views/week.php','1','0','m','1','0','','y','fw'),
	 '5' => array ('views/week.php','1','0','m','1','0','','y','ww'),
	 '6' => array ('views/day.php','1','0','m','1','0','','y',''),
	 '7' => array ('views/upcoming.php','1','0','m','1','0',$xx['title_upcoming'],'y',''),
	 '8' => array ('views/changes.php','1','0','m','1','0',$xx['title_changes'],'y',''),

	'10' => array ('pages/event.php','e','e','e','0','0',$xx['title_event'],'',''),
	'11' => array ('pages/eventcheck.php','e','e','e','0','0',$xx['title_check_event'],'',''),

	'20' => array ('pages/login.php','l','l','l','1','0',$xx['title_log_in'],'',''),
	'21' => array ('pages/search.php','a','a','a','1','0',$xx['title_search'],'y',''),
	'22' => array ('lang/ug-'.strtolower($_SESSION['cL']).'.php','h','h','h','0','0',$xx['title_user_guide'],'',''),

	'90' => array ('pages/settings.php','a','a','a','1','0',$xx['title_settings'],'',''),
	'91' => array ('pages/categories.php','a','a','a','1','0',$xx['title_edit_cats'],'',''),
	'92' => array ('pages/users.php','a','a','a','1','0',$xx['title_edit_users'],'',''),
	'93' => array ('pages/database.php','a','a','a','1','0',$xx['title_manage_db'],'',''),
	'94' => array ('pages/importICS.php','a','a','a','1','0',$xx['title_ics_import'],'',''),
	'95' => array ('pages/exportICS.php','a','a','a','1','0',$xx['title_ics_export'],'y',''),
	'96' => array ('pages/importCSV.php','a','a','a','1','0',$xx['title_csv_import'],'','')
);

if (!array_key_exists($_SESSION['cP'],$pages)) { $_SESSION['cP'] = $set['defaultView']; } //validate cP

$mode = isset($_REQUEST['mode']) ? $_REQUEST['mode'] : $pages[$cP][8]; //get mode

$pageTitle = $pages[$cP][6];
//echo "LuxCal version: ".LCV."<br>"; print_r($set); die;//TEST LINE

if ($pages[$cP][7]) { //retrieve required
	require './common/retrieve.php';
}
/* build calendar page */
//header
if ($_SESSION['hdr'] == 0) {
	$suffix = $pages[$cP][2]; //no header
} elseif ($_SESSION['mobile']) {
	$suffix = $pages[$cP][3]; //mobile hdr
} else {
	$suffix = $pages[$cP][1]; //normal hdr
}
require './canvas/header'.$suffix.'.php';
//page body
require './'.$pages[$cP][0];
//footer
$suffix = $_SESSION['mobile'] ? $pages[$cP][5] : $pages[$cP][4]; //set footer type
require './canvas/footer'.$suffix.'.php';
?>
