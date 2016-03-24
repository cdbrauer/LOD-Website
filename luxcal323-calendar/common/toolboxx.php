<?php
/*
======== WORK BENCH TOOLS =========

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/
//settings definitions
$defSet = array( //setting => default value, description
	'calendarTitle' => array('LuxCal Calendar','Calendar title displayed in the top bar'),
	'calendarUrl' => array('http://'.$_SERVER['SERVER_NAME'].rtrim(dirname($_SERVER["PHP_SELF"]),'/').'/index.php','Calendar link (URL)'),
	'calendarEmail' => array('calendar@email.com','Sender in and receiver of email notifications'),
	'backLinkUrl' => array('','Nav bar Back button URL (blank: no button, url: Back button)'),
	'timeZone' => array('Europe/Amsterdam','Calendar time zone'),
	'notifSender' => array(0,'Sender of notification emails (0:calendar, 1:user)'),
	'rssFeed' => array(1,'Display RSS feed links in footer and HTML head (0:no, 1:yes)'),
	'navButText' => array(0,'Navigation buttons with text or icons (0:icons, 1:text)'),
	'navTodoList' => array(1,'Display Todo List button on navbar (0:no, 1:yes)'),
	'navUpcoList' => array(1,'Display Upco List button on navbar (0:no, 1:yes)'),
	'userMenu' => array(1,'Display user filter menu in options panel (0:no, 1:yes)'),
	'catMenu' => array(1,'Display category filter menu in options panel(0:no, 1:yes)'),
	'langMenu' => array(0,'Display ui-language selection menu in options panel (0:no, 1:yes)'),
	'defaultView' => array(2,'Calendar view at start-up (1:year, 2:month, 3:work month, 4:week, 5:work week 6:day, 7:upcoming, 8:changes)'),
	'language' => array('English','Default user interface language'),
	'privEvents' => array(1,'Private events (0:disabled 1:enabled, 2:default, 3:always)'),
	'details4All' => array(1,'Show event details to x users (0:none, 1:all, 2:logged-in users)'),
	'evtDelButton' => array(1,'Display Delete button in Event window (0:no, 1:yes, 2:manager)'),
	'eventColor' => array(1,'Event colors (0:user color, 1:cat color)'),
	'xField1' => array('','Label optional extra event field 1'),
	'xField2' => array('','Label optional extra event field 2'),
	'selfReg' => array(0,'Self-registration (0:no, 1:yes)'),
	'selfRegPrivs' => array(1,'Self-reg rights (1:view, 2:post self, 3:post all)'),
	'selfRegNot' => array(0,'User self-reg notification to admin (0:no, 1:yes)'),
	'restLastSel' => array(1,'Restore last session when user revisits calendar'),
	'cookieExp' => array(30,'Number of days before a Remember Me cookie expires'),
	'evtTemplGen' => array('1234567','Event fields and order of fields in general views'),
	'evtTemplUpc' => array('12345','Event fields and order of fields in upcoming events view'),
	'popBoxFields' => array('12345','Event fields and order of fields in yesr view hover box'),
	'popBoxYear' => array(1,'Display hover box in year view (0:no, 1:yes)'),
	'popBoxMonth' => array(1,'Display hover box in month view (0:no, 1:yes)'),
	'popBoxWkDay' => array(1,'Display hover box in week/day view (0:no, 1:yes)'),
	'popBoxUpc' => array(1,'Display hover box in upcoming view (0:no, 1:yes)'),
	'yearStart' => array(0,'Start month in year view (1-12 or 0, 0:current month)'),
	'colsToShow' => array(3,'Number of months to show per row in year view'),
	'rowsToShow' => array(4,'Number of rows to show in year view'),
	'weeksToShow' => array(10,'Number of weeks to show in month view'),
	'workWeekDays' => array('12345','Days to show in work weeks (1:mo - 7:su)'),
	'lookaheadDays' => array(14,'Days to look ahead in upcoming view, todo list and RSS feeds'),
	'dwStartHour' => array(6,'Day/week view start hour'),
	'dwEndHour' => array(18,'Day/week view end hour'),
	'dwTimeSlot' => array(30,'Day/week time slot in minutes'),
	'dwTsHeight' => array(20,'Day/week time slot height in pixels'),
	'showLinkInMV' => array(1,'Show URL-links in month view (0:no, 1:yes)'),
	'monthInDCell' => array(0,'Show in month view month for each day (0:no, 1:yes)'),
	'dateFormat' => array('d.m.y','Date format: yyyy-mm-dd (y:yyyy, m:mm, d:dd)'),
	'MdFormat' => array('d M','Date format: dd month (d:dd, M:month)'),
	'MdyFormat' => array('d M y','Date format: dd month yyyy (d:dd, M:month, y:yyyy)'),
	'MyFormat' => array('M y','Date format: month yyyy (M:month, y:yyyy)'),
	'DMdFormat' => array('WD d M','Date format: weekday dd month (WD:weekday d:dd, M:month)'),
	'DMdyFormat' => array('WD d M y','Date format: weekday dd month yyyy (WD:weekday d:dd, M:month, y:yyyy)'),
	'timeFormat' => array('h:m','Time format (H:hh, h:h, m:mm, a:am|pm, A:AM|PM)'),
	'weekStart' => array(1,'Week starts on Sunday(0) or Monday(1)'),
	'weekNumber' => array(1,'Week numbers on(1) or off(0)'),
	'mailServer' => array(1,'Mail server (0:mail disabled, 1:PHP mail, 2:SMTP mail)'),
	'smtpServer' => array('','SMTP mail server name'),
	'smtpPort' => array(465,'SMTP port number'),
	'smtpSsl' => array(1,'Use SSL (Secure Sockets Layer) (0:no, 1:yes)'),
	'smtpAuth' => array(1,'Use SMTP authentication (0:no, 1:yes)'),
	'smtpUser' => array('','SMTP username'),
	'smtpPass' => array('','SMTP password'),
	'adminCronSum' => array(1,'Send cron job summary to admin (0:no, 1:yes)'),
	'chgEmailList' => array('','Recipient email addresses for calendar changes'),
	'chgNofDays' => array(1,'Number of days to look back for calendar changes'),
	'icsExport' => array(0,'Daily export of events in iCal format (0:no 1:yes)'),
	'eventExp' => array(0,'Number of days after due when an event expires / can be deleted (0:never)'),
	'maxNoLogin' => array(0,'Number of days not logged in, before deleting user account (0:never delete)'),
	'miniCalView' => array(1,'Mini calendar view (1:full month, 2:work month)'),
	'miniCalPost' => array(0,'Mini calendar event posting (0:no, 1:yes)'),
	'popFieldsMcal' => array('12345','Event fields in minical hover box (none: no box)'),
	'mCalUrlFull' => array('','Mini calendar link to full calendar'),
	'popFieldsSbar' => array('12345','Event fields in sidebar hover box (none: no box)'),
	'showLinkInSB' => array(1,'Show URL-links in sidebar (0:no, 1:yes)'),
	'sideBarDays' => array(14,'Days to look ahead in sidebar')
);

function createDbTable($tableName, $calID='x') { //create database table
	$rSet = mysql_query("SHOW TABLES LIKE '{$calID}_{$tableName}'");
	if (mysql_num_rows($rSet) != 0) { return '2'; } //table already present
	switch ($tableName) {
	case 'events': //create table 'events'
		$result = mysql_query("CREATE TABLE {$calID}_events (
			event_id INT(8) unsigned NOT NULL AUTO_INCREMENT,
			event_type TINYINT(1) unsigned NOT NULL DEFAULT '0',
			title VARCHAR(64) DEFAULT NULL,
			description TEXT DEFAULT NULL,
			xfield1 TEXT DEFAULT NULL,
			xfield2 TEXT DEFAULT NULL,
			category_id INT(4) unsigned NOT NULL DEFAULT '1',
			venue VARCHAR(64) DEFAULT NULL,
			user_id INT(6) unsigned DEFAULT NULL,
			editor VARCHAR(32) NOT NULL DEFAULT '',
			approved TINYINT(1) unsigned NOT NULL DEFAULT '0',
			private TINYINT(1) unsigned NOT NULL DEFAULT '0',
			checked TEXT DEFAULT NULL,
			s_date DATE DEFAULT NULL,
			e_date DATE NOT NULL DEFAULT '9999-00-00',
			x_dates TEXT DEFAULT NULL,
			s_time TIME DEFAULT NULL,
			e_time TIME NOT NULL DEFAULT '99:00:00',
			r_type TINYINT(1) unsigned NOT NULL DEFAULT '0',
			r_interval TINYINT(1) unsigned NOT NULL DEFAULT '0',
			r_period TINYINT(1) unsigned NOT NULL DEFAULT '0',
			r_month TINYINT(1) unsigned NOT NULL DEFAULT '0',
			r_until DATE NOT NULL DEFAULT '9999-00-00',
			notify TINYINT(1) NOT NULL DEFAULT '-1',
			not_mail VARCHAR(255) DEFAULT NULL,
			a_datetime DATETIME NOT NULL DEFAULT '9999-00-00 00:00:00',
			m_datetime DATETIME NOT NULL DEFAULT '9999-00-00 00:00:00',
			status TINYINT(1) NOT NULL DEFAULT '0',
			PRIMARY KEY (event_id)
		)");
		break;
	case 'categories': //create table 'categories'
		$result = mysql_query("CREATE TABLE {$calID}_categories (
			category_id INT(4) unsigned NOT NULL AUTO_INCREMENT,
			name VARCHAR(40) NOT NULL DEFAULT '',
			sequence INT(2) unsigned NOT NULL DEFAULT '1',
			rpeat TINYINT(1) unsigned NOT NULL DEFAULT '0',
			approve TINYINT(1) unsigned NOT NULL DEFAULT '0',
			public TINYINT(1) unsigned NOT NULL DEFAULT '1',
			color VARCHAR(10) DEFAULT NULL,
			background VARCHAR(10) DEFAULT NULL,
			chbox TINYINT(1) unsigned NOT NULL DEFAULT '0',
			chlabel VARCHAR(40) NOT NULL DEFAULT 'approved',
			chmark VARCHAR(10) NOT NULL DEFAULT '&#10003;',
			status TINYINT(1) NOT NULL DEFAULT '0',
			PRIMARY KEY (category_id)
		)");
		break;
	case 'users': //create table 'users'
		$result = mysql_query("CREATE TABLE {$calID}_users (
			user_id INT(6) unsigned NOT NULL AUTO_INCREMENT,
			user_name VARCHAR(32) NOT NULL DEFAULT '',
			password VARCHAR(32) NOT NULL DEFAULT '',
			temp_password VARCHAR(32) DEFAULT NULL,
			email VARCHAR(64) NOT NULL DEFAULT '',
			privs TINYINT(1) unsigned NOT NULL DEFAULT '0',
			login_0 DATE NOT NULL DEFAULT '9999-00-00',
			login_1 DATE NOT NULL DEFAULT '9999-00-00',
			login_cnt INT(8) NOT NULL DEFAULT '0',
			language VARCHAR(32) DEFAULT NULL,
			color VARCHAR(10) DEFAULT NULL,
			status TINYINT(1) NOT NULL DEFAULT '0',
			PRIMARY KEY (user_id)
		)");
		break;
	case 'settings': //create table 'settings'
		$result = mysql_query("CREATE TABLE {$calID}_settings (
			name VARCHAR(15) NOT NULL DEFAULT '',
			value TEXT DEFAULT NULL,
			description TEXT DEFAULT NULL,
			PRIMARY KEY (name)
			)");
		break;
	case 'sessdata': //create table 'sessdata'
		$result = mysql_query("CREATE TABLE {$calID}_sessdata (
			cal_id varchar(22) NOT NULL DEFAULT '',
			sess_id varchar(32) DEFAULT NULL,
			value TEXT DEFAULT NULL,
			tStamp INT(10) NOT NULL DEFAULT '0',
			PRIMARY KEY (cal_id)
		)");
	}
	$rValue = $result ? '1' : '0';
	return $rValue;
}

function initCats($calID) { //init categories table
	$rSet = mysql_query("SHOW TABLES LIKE '{$calID}_categories'");
	if (mysql_num_rows($rSet) == 0) { return '2'; } //table not existing
	$result = mysql_query("REPLACE {$calID}_categories (category_id, name, sequence) VALUES (1,'no cat',1)");
	return ($result ? '1' : '0');
}

function initUsers($calID,$adName,$adMail,$adPwMd5) { //init users table
	$rSet = mysql_query("SHOW TABLES LIKE '{$calID}_users'");
	if (mysql_num_rows($rSet) == 0) { return '2'; } //table not existing
	$result1 = mysql_query("REPLACE {$calID}_users (user_id, user_name, email, privs) VALUES (1,'Public Access',' ',1)");
	$result2 = mysql_query("REPLACE {$calID}_users (user_id, user_name, email, password, privs) VALUES (2,'{$adName}','{$adMail}','{$adPwMd5}',9)");
	return (($result1 and $result2) ? '1' : '0');
}

function checkSettings(&$dbSet) { //check & complete calendar settings
	global $defSet;
	foreach($defSet as $key => $value) { //if $dbSet['x'] not set or empty, set to default value
		if ((is_int($value[0]) and !isset($dbSet[$key])) or (is_string($value[0]) and empty($dbSet[$key]))) {
			$dbSet[$key] = $value[0];
		}
	}
}

function saveSettings($calID,&$dbSet,$saveAll) { //save settings to calendar
	global $defSet;
	if ($saveAll) {
		$result = dbQuery("DELETE FROM {$calID}_settings"); // empty table
	} else {
		$result = dbQuery("DELETE FROM {$calID}_settings WHERE name NOT LIKE 'calendar%'"); //empty table, except calendar values
	}
	if ($result) {
		$values = "('lcVersion','".LCV."','LuxCal Version Number'),";
		foreach($dbSet as $key => $value) {
			if (($saveAll or substr($value,0,8) != 'calendar') and $key != 'lcVersion') {
				$values .= "('{$key}','".(is_string($value) ? mysql_real_escape_string($value) : $value)."','{$defSet[$key][1]}'),";
			}
		}
		$values = rtrim($values,',');
		$result = dbQuery("INSERT INTO {$calID}_settings VALUES {$values}"); //save
	}
	return $result;
}
?>