<?php
/*
= check calendar inactive user accounts which can be deleted =

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

-------------------------------------------------------------------
 This script depends on and is executed via the file lcalcron.php.
 See lcalcron.php header for details.
-------------------------------------------------------------------

This file is part of the LuxCal Web Calendar.

---------- THIS SCRIPT USES THE FOLLOWING CALENDAR SETTINGS ----------
maxNoLogin: Maximum number of 'no login' days before deleting account
----------------------------------------------------------------------
*/

function cronUserChk() {
	global $set;
	
	//calculate minimum last login date required to keep account
	$minLoginDate = date("Y-m-d", time() - $set['maxNoLogin'] * 86400);

	//remove user accounts for users not logged in since $minLoginDate
	//but never delete the public access user and admin user!
	$result = dbQuery("DELETE FROM [db]users WHERE user_id > 2 AND login_1 < '$minLoginDate'");
	$nrRemoved = mysql_affected_rows();
	return $nrRemoved;
}
?>
