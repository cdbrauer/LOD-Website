<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.
2011-05-31 - übersetzt von Alfred Bruckner - letztes Update 27.3.2013

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Keine",
"all" => "Alle",
"back" => "Zurück",
"close" => "Close",
"always" => "always",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Jahre",
"month" => "Monat",
"week_day" => "Woche/Tag",
"upcoming" => "Upcoming",

//settings.php - fieldset headers + general
"set_general_settings" => "Allgemein",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Events",
"set_user_settings" => "Benutzer",
"set_email_settings" => "Email Settings",
"set_perfun_settings" => "Periodic Functions<br>(only relevant if cron job defined)",
"set_minical_settings" => "Mini Calendar (only relevant if used)",
"set_sidebar_settings" => "Stand-Alone Sidebar<br>(only relevant if in use)",
"set_view_settings" => "Anzeige",
"set_dt_settings" => "Datum/Zeit",
"set_save_settings" => "Speichern",
"set_missing_invalid" => "fehlende oder ungültige Einstellungen (Hintergrund hervorgehoben)",
"set_settings_saved" => "Einstellungen gespeichert",
"set_save_error" => "Datenbank Fehler - Abspeichern der Einstellungen fehlgeschlagen",
"hover_for_details" => "Für Hilfe Mauszeiger über die Beschreibung bewegen",
"default" => "default",
"enabled" => "Aktiviert",
"disabled" => "Deaktiviert",
"no" => "Nein",
"yes" => "Ja",
"or" => "Oder",
"minutes" => "Minuten",
"pixels" => "Pixel",
"no_way" => "Sie haben keine Rechte für diese Aktion",

//settings.php - calendar settings
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Titel",
"calendarTitle_text" => "Wird in der Kopfzeile angezeigt und in Email Benachrichtigungen verwendet.",
"calendarUrl_label" => "URL",
"calendarUrl_text" => "Die Web Seite des Kalenders.",
"calendarEmail_label" => "Email Adresse des Kalenders",
"calendarEmail_text" => "Email Absender Adresse für das Senden von Benachrichtigungs-Emails.<br>Format: \'Email\' or \'Name&#8249;Email&#8250;\'. \'Name\' könnte der Kalender Name sein.",
"backLinkUrl_label" => "Link to parent page",
"backLinkUrl_text" => "URL of parent page. If specified, a Back button will be displayed on the left side of the Navigation Bar which links to this URL.<br>For instance to link back to the parent page from which the calendar was started.",
"timeZone_label" => "Zeitzone",
"timeZone_text" => "Die Zeitzone die zur Berechnung der aktuellen Zeit verwendet wird.",
"see" => "siehe",
"notifSender_label" => "Sender of notification emails",
"notifSender_text" => "When the calendar sends reminder emails, the sender field of the email can contain either the calendar email address, or the email address of the user who created the event.<br>In case of the user email address, the receiver can reply to the email.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "If aktiviert: For users with at least \'view\' rights an RSS feed link will be visible in the footer of the calendar and an RSS feed link will be added to the HTML head of the calendar pages.",
"calendar" => "calendar",
"user" => "user",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Navigation bar buttons with text",
"navButText_text" => "If aktiviert: On the navgation bar the buttons will be displayed with text. If deaktiviert, the buttons are diplayed with icons.",
"navBar_label" => "Navigation Bar",
"navBar_text" => "If enabled: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navTodoList_label" => "Todo button",
"navUpcoList_label" => "Upcoming button",
"optionsPanel_label" => "Options Panel",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>The user filter can be used to display only events created by one specific user.<br>The category filter can be used to display only events belonging to a specific event category.<br>The language selection menu can be used to select the user interface language. (enabling only useful if several languages are installed)",
"userMenu_label" => "User filter",
"catMenu_label" => "Category filter",
"langMenu_label" => "Language selection",
"defaultView_label" => "Ansicht beim Start",
"defaultView_text" => "Mögliche Ansichten nach dem Start sind:<br>- Jahr<br>- Ganzes Monat<br>- Arbeitsmonat *)<br>- Ganze Woche<br>- Arbeitswoche *)<br>- Tag<br>- Anstehend<br>- Änderungen<br>Empfehlung: Monat oder Anstehend.<br>*) Für Arbeitstage siehe auf diese Zeite: Anzeige - Arbeitstage",
"language_label" => "Benutzer Sprache",
"language_text" => "Die Dateien ui-{sprache}.php, ai-{sprache}.php, ug-{sprache}.php und ug-layout.png müssen im dem lang/ Verzeichnis vorhanden sein. {sprache} = ausgewählte Sprache. Dateinamen müssen in Kleinbuchstaben sein!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Posting of private events",
"privEvents_text" => "Private events are only visible to the user who entered the event.<br>Enabled: users can enter private events.<br>Default: when adding new events, the \'private\' checkbox in the Event window will be checked by default.<br>Always: when adding new events they will always be private, the \'private\' checkbox in the Event window will not be shown.",
"details4All_label" => "Termin Details Benutzern anzeigen",
"details4All_text" => "deaktiviert: Termin Details sind nur für den Ersteller eines Termins oder für Benutzer mit \'setze alle\' Berechtigung sichtbar.<br>aktiviert: Termin Details sind für alle Benutzer sichtbar.<br>Logged in: Termin Details sind sichtbar für den Ersteller eines Termins und für logged in Benutzer.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Termin Farbe basiert auf",
"eventColor_text" => "In den unterschiedlichen Ansichten werden Termine in der ausgwählten Hintergrundfarbe für den Ersteller oder der Kategorie angezeigt.",
"xField1_label" => "Extra field 1 label",
"xField2_label" => "Extra field 2 label",
"xFieldx_text" => "Name of an optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>The specified name can be max. 15 characters long. E.g. \'Email address\', \'Website\', \'Phone number\'.",
"logged_in" => 'logged in',
"manager_only" => 'manager',
"owner_color" => "Ersteller",
"cat_color" => "Kategorie",

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Eigene Anmeldung",
"selfReg_text" => "Erlaubt Benutzern sich selbst anzumelden um Zugriff auf den Kalender zu haben.",
"selfRegPrivs_label" => "Berechtigung",
"selfRegPrivs_text" => "Berechtigung für selbst angemeldete Benutzer.<br>- anschauen: nur anschauen<br>- eigene: Termine erstellen und eigene bearbeiten<br>- alle: Termine erstellen, eigene und fremde bearbeiten",
"selfRegNot_label" => "Benachrichtigung bei Anmeldung",
"selfRegNot_text" => "Sende eine Email an die Kalender Adresse wenn eine Eigene Anmeldung stattgefunden hat.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "'Remember me' cookie expiry days",
"cookieExp_text" => "Number of days before the cookie set by the \'Remember me\' option (during Log In) will expire.",
"view" => "Anschauen",
"post_own" => "Eigene",
"post_all" => "Alle",
"manager" => 'post/manager',

//settings.php - view settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"evtTemplGen_label" => "Event template - General views",
"evtTemplGen_text" => "The event fields to be displayed in the various calendar views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"evtTemplUpc_label" => "Event template - Upcoming view",
"evtTemplUpc_text" => "The event fields to be displayed in the Upcoming Events views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"popBoxFields_label" => "Hover box event fields",
"popBoxFields_text" => "The event fields to be displayed in the hover box with event details in the various calendar views can be specified by means of a sequence of numbers. <br>If a number is specified in the sequence, the corresponding field will be displayed.<br>If no fields are specified at all, no hover box will be displayed.",
"templFields_text" => "Meaning of the numbers:<br>1: Venue field<br>2: Event category field<br>3: Description field<br>4: Extra field 1 (see below)<br>5: extra field 2 (see below)<br>6: Email notification data (only if a notification has been requested)<br>7: Date/time added/edited and the associated user(s).<br>The order of the numbers determine the order of the displayed fields.",
"popBoxShow_label" => "Hover box with event details",
"popBoxShow_text" => "If enabled, a box with event details will be displayed when hovering an event in the selected views. The event details will not be displayed if no hover box event fields (see above) have been specified.",
"yearStart_label" => "Start Monat in der Jahresansicht",
"yearStart_text" => "Wenn ein start Monat konfiguriert wurde (1 - 12), beginnt die Anzeige in der Jahresansicht mit diesem Monat auch beim Wechsel zu vorigen oder darauffolgenden Jahren.<br>Der Wert 0 hat eine spezielle Bedeutung: das start Monat wird vom aktuellen Datum abgeleitet und wird in der ersten Reihe der Monate angezeigt.",
"colsToShow_label" => "Spalten für Jahresansicht",
"colsToShow_text" => "Anzahl der angezeigten Monate in einer Reihe der Jahresansicht.<br>Empfehlung: 3 oder 4.",
"rowsToShow_label" => "Reihen für Jahresansicht",
"rowsToShow_text" => "Anzahl der angezeigten Reihen der Jahresansicht.<br>Empfehlung: 4, wodurch 12 oder 16 Monate angezeigt werden.",
"weeksToShow_label" => "Anzahl der angezeigten Wochen in der Monatsansicht",
"weeksToShow_text" => "Anzahl der in der Monatsansicht angezeigten Wochen.<br>Empfehlung: 10, wodurch 2.5 Monate angezeigt werden.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Arbeitstage",
"workWeekDays_text" => "Tage die in der Ansicht Arbeitswoche und Arbeitsmonat angezeigt werden.<br>Jeden anzuzeigenden Tag mit seiner Nummer angeben. Gültige Nummern sind:<br>1 = Montag<br>2 = Dienstag<br>....<br>7 = Sonntag<br>z.b. 12345 : Montag - Freitag",
"lookaheadDays_label" => "Vorschau auf anstehende Termine",
"lookaheadDays_text" => "Anzahl der Tage die zur Ermittlung der Termine im Anstehende Termine, der Todo Liste und RSS feeds verwendet wird.",
"dwStartHour_label" => "Erste Stunde in Tag/Wochen-Ansicht.",
"dwStartHour_text" => "Uhrzeit zu der ein normaler Termin beginnt.<br>Eine Einstellung auf z.B. 6 vermeidet in der Woche/Tag-Ansicht die Anzeige der ungenützten Zeit zwischen Mitternacht und 6:00.<br>The time picker, used to enter a time, will also start at this hour.",
"dwEndHour_label" => "End hour in Day/Week view",
"dwEndHour_text" => "Hour at which a normal day of events ends.<br>E.g., setting this value to 18 will avoid wasting space in Week/Day view for the quiet time between 18:00 and midnight.<br>The time picker, used to enter a time, will also end at this hour.",
"dwTimeSlot_label" => "Zeitraster in der Tag/Wochen-Ansicht",
"dwTimeSlot_text" => "Zeitraster der Tag/Wochen-Ansicht in Minuten.<br>Dieser Wert bestimmt zusammen mit der &quotErste Stunde&quot und der &quotLetste Stunde&quot Einstellung die Anzahl der Zeilen in der Tag/Wochen-Ansicht",
"dwTsHeight_label" => "Zeitraster Höhe",
"dwTsHeight_text" => "Höhe einer Zeile des Zeitrasters der Tag/Wochen-Ansicht in Pixel.",
"showLinkInMV_label" => "Links in der Monatsansicht",
"showLinkInMV_text" => "In der Monatsansicht können eingetragene URLs in der Terminbeschreibung als Hyperlink angezeigt werden.",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Datum Format (tt mm jjjj)",
"dateFormat_text" => "Text string defining the format of event dates in the calendar views and input fields.<br>Possible characters: y = year, m = month and d = day.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "e.g. y.m.d: 2013.10.31",
"MdFormat_label" => "Datum Format (dd month)",
"MdFormat_text" => "Text string defining the format of dates consisting of month and day.<br>Possible characters: M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M: 12 April<br>M, d: July, 14",
"MdFormat_expl" => "e.g. M, d: July, 14",
"MdyFormat_label" => "Datum Format (dd month yyyy)",
"MdyFormat_text" => "Text string defining the format of dates consisting of day, month and year.<br>Possible characters: d = day in digits, M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M y: 12 April 2013<br>M d, y: July 8, 2013",
"MdyFormat_expl" => "e.g. M d, y: July 8, 2013",
"MyFormat_label" => "Datum Format (month yyyy)",
"MyFormat_text" => "Text string defining the format of dates consisting of month and year.<br>Possible characters: M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>M y: April 2013<br>y - M: 2013 - July",
"MyFormat_expl" => "e.g. M y: April 2013",
"DMdFormat_label" => "Datum Format (weekday dd month)",
"DMdFormat_text" => "Text string defining the format of dates consisting of weekday, day and month.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M: Friday 12 April<br>WD, M d: Monday, July 14",
"DMdFormat_expl" => "e.g. WD - M d: Sunday - April 6",
"DMdyFormat_label" => "Datum Format (weekday dd month yyyy)",
"DMdyFormat_text" => "Text string defining the format of dates consisting of weekday, day, month and year.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M y: Friday 13 April 2013<br>WD - M d, y: Monday - July 16, 2013",
"DMdyFormat_expl" => "e.g. WD, M d, y: Monday, July 16, 2013",
"timeFormat_label" => "Time format (hh mm)",
"timeFormat_text" => "Text string defining the format of event times in the calendar views and input fields.<br>Possible characters: h = hours, H = hours with leading zeros, m = minutes, a = am/pm (optional), A = AM/PM (optional).<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "e.g. h:m: 22:35 and h:mA: 10:35PM",
"weekStart_label" => "Erster Tag der Woche",
"weekStart_text" => "Erster Tag der Woche.",
"weekNumber_label" => "Wochennummern",
"weekNumber_text" => "Anzeige der Wochennummern in Jahr, Monat und Tag-Ansicht.",
"time_format_us" => "12-Stunden AM/PM",
"time_format_eu" => "24-Stunden",
"sunday" => "Sonntag",
"monday" => "Montag",
"time_zones" => "TIME ZONES",
"dd_mm_yyyy" => "tt-mm-jjjj",
"mm_dd_yyyy" => "mm-tt-jjjj",
"yyyy_mm_dd" => "jjjj-mm-tt",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Mail server",
"mailServer_text" => "PHP mail is suitable for unauthenticated mail in small numbers. For greater numbers of mail or when authentication is required, SMTP mail should be used.<br>Using SMTP mail requires an SMTP mail server. The configuration parameters to be used for the SMTP server must be specified hereafter. If mail is disabled, the Send mail section in the Event window will be suppressed.",
"smtpServer_label" => "SMTP server name",
"smtpServer_text" => "If SMTP mail is selected, the SMTP server name should be specified here. For example gmail SMTP server: smtp.gmail.com.",
"smtpPort_label" => "SMTP port number",
"smtpPort_text" => "If SMTP mail is selected, the SMTP port number should be specified here. For example 25, 465 or 587. Gmail for example uses port number 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "If SMTP mail is selected, select here if the secure sockets layer (SSL) should be enabled. For gmail: enabled",
"smtpAuth_label" => "SMTP authentication",
"smtpAuth_text" => "If SMTP authentication is selected, the username and password specified hereafter will be used to authenticate the SMTP mail.",
"smtpUser_label" => "SMTP username",
"smtpUser_text" => "If SMTP mail is selected, specify here the SMTP user name. For gmail this is the part of your email address before the @.",
"smtpPass_label" => "SMTP password",
"smtpPass_text" => "If SMTP mail is selected, specify here the SMTP password.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Admin cron job Zusammenfassung",
"cronSummary_text" => "Sende eine cron job Zusammenfassung zum Kalender Administrator.<br>Aktivieren ist nur sinnvoll wenn ein cron job aktiviert wurde für der Kalender",
"chgEmailList_label" => "Email Adresse für Benachrichtigung über Änderungen",
"chgEmailList_text" => "An diese Adresse(n) wird periodisch eine Benachrichtigung über Änderungen geschickt. Email Adressen mit Semikolon trennen.",
"chgNofDays_label" => "Anzahl der Tage die zurück geschaut wird",
"chgNofDays_text" => "Anzahl der Tage die für Änderungen zurück geschaut wird.<br>Bei 0 wird keine Email versandt.",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 yesr will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Max. Anzahl an Tagen ohne sich einzuloggen",
"maxNoLogin_text" => "Wenn sich ein Benutzer länger als diese Zeit nicht einloggt, wird der Benutzer automatisch wieder gelöscht.<br>Wenn der Wert au 0 gesetzt wird, werden keine Benutzer automatisch gelöscht.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Mögliche Ansichten der Minikalender sind:<br>- Ganzes Monat<br>- Arbeitsmonat *)<br>- Ganze Woche<br>- Arbeitswoche *)<br>*) Für Arbeitstage siehe auf diese Zeite: Anzeige - Arbeitstage",
"miniCalPost_label" => "Mini Kalender Termin erstellen",
"miniCalPost_text" => "Ist nur von Bedeutung wenn der Mini Kalender verwendet wird!<br>Autorisierte Benutzer können:<br>- neue Termine durch Anklicken der Kopfzeile einer Kalenderzelle einen neuen Termin erstellen<br>- bearbeiten/löschen eines Termins durch klicken auf das Quadrat<br>Note: The access rights of the Public User will be applicable.",
"popFieldsMcal_label" => "Event fields - mini calendar hover box",
"popFieldsMcal_text" => "The event fields to be displayed in an overlay when the user hovers an event in the mini calendar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed..<br>If no fields are specified at all, no hover box will be displayed",
"mCalUrlFull_label" => "Mini cal URL to full calendar",
"mCalUrlFull_text" => "When clicking the month at the top of the mini calendar, to go to the full calendar, the user will be directed to this URL.<br>If not specified, the full calendar will open in a new window.<br>This URL is in particular useful when the full calendar is embedded in an existing user page.",
"popFieldsSbar_label" => "Event fields - sidebar hover box",
"popFieldsSbar_text" => "The event fields to be displayed in an overlay when the user hovers an event in the stand-alone sidebar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"showLinkInSB_label" => "Show links in sidebar",
"showLinkInSB_text" => "Display URLs from the event description as a hyperlink in the upcoming events sidebar",
"sideBarDays_label" => "Days to look ahead in sidebar",
"sideBarDays_text" => "Number of days to look ahead for events in the sidebar.",

//login.php
"log_log_in" => "Einloggen",
"log_remember_me" => "Automatisch Einloggen",
"log_register" => "Registrieren",
"log_change_my_data" => "Meine Daten ändern",
"log_change" => "Ändern",
"log_un_or_em" => "Benutzername oder Email",
"log_un" => "Benutzername",
"log_em" => "Email",
"log_pw" => "Passwort",
"log_new_un" => "Neuer Benutzername",
"log_new_em" => "Neue Email",
"log_new_pw" => "Neues Passwort",
"log_pw_msg" => "Hier sind Ihr Einlogdetails für Kalender",
"log_pw_subject" => "Ihr %% Passwort", //%% will be replaced by calendar name
"log_npw_subject" => "Ihr neues %% Passwort", //%% will be replaced by calendar name
"log_npw_sent" => "Ihr neues Passwort wurde gesendet",
"log_registered" => "Registrierung erfolgreich - Ihr Passwort wurde per Email gesendet",
"log_not_registered" => "Registrierung war nicht erfolgreich",
"log_un_exists" => "Benutzername existiert schon",
"log_em_exists" => "Email Adresse existiert schon",
"log_un_invalid" => "Ungültiger Benutzername (min. Länge 2: A-Z, a-z, 0-9, und _-.)",
"log_em_invalid" => "Ungültige Email Adresse",
"log_un_em_invalid" => "Dieser Benutzername/Email ist ungültig",
"log_un_em_pw_invalid" => "Ihr Benutzername/Email oder Passwort ist falsch",
"log_no_un_em" => "Bitte Benutzernamen oder Email eingeben",
"log_no_un" => "Bitte Benutzername eingeben",
"log_no_em" => "Bitte Email eingeben",
"log_no_pw" => "Bitte Passwort eingeben",
"log_no_rights" => "Einloggen nicht möglich: keine Berechtigung – Administrator kontaktieren",
"log_send_new_pw" => "Sende neues Passwort",
"log_if_changing" => "Nur wenn Sie es ändern möchten",
"log_no_new_data" => "Keine Datei zu ändern",
"log_invalid_new_un" => "Ungültiger neuer Benutzername (min. Länge 2: A-Z, a-z, 0-9, und _-.)",
"log_new_un_exists" => "Neuer Benutzername existiert schon",
"log_invalid_new_em" => "Neue Email Adresse ist ungültig",
"log_new_em_exists" => "Neue Email Adresse existiert schon",
"log_ui_language" => "Sprache der Benutzeroberfläche",
"log_new_reg" => "New user registration",
"log_date_time" => "Date / time",

//categories.php
"cat_list" => "Kategorieliste",
"cat_edit" => "Bearbeiten",
"cat_delete" => "Löschen",
"cat_add_new" => "Neue Kategorie anlegen",
"cat_add" => "Hinzufügen",
"cat_edit_cat" => "Kategorie bearbeiten",
"cat_name" => "Kategoriebezeichnung",
"cat_sequence" => "Reihenfolge",
"cat_in_menu" => "In der Liste",
"cat_text_color" => "Text Farbe",
"cat_background" => "Hintergrund Farbe",
"cat_select_color" => "Wähle Farbe",
"cat_save" => "Aktualisieren",
"cat_added" => "Kategorie hinzugefügt",
"cat_updated" => "Kategorie aktualisiert",
"cat_deleted" => "Kategorie gelöscht",
"cat_invalid_color" => "Ungültiges Farbformat (#XXXXXX wo X = HEX-Wert)",
"cat_not_added" => "Kategorie nicht hinzugefügt",
"cat_not_updated" => "Kategorie nicht aktualisiert",
"cat_not_deleted" => "Kategorie nicht gelöscht",
"cat_nr" => "#",
"cat_repeat" => "Wiederholung",
"cat_every_day" => "Täglich",
"cat_every_week" => "Wöchentlich",
"cat_every_month" => "Monatlich",
"cat_every_year" => "Jährlich",
"cat_approve" => "Events need approval",
"cat_public" => "Öffentlich",
"cat_check_mark" => "Häkchen",
"cat_label" => "label",
"cat_mark" => "mark",
"cat_name_missing" => "Category name is missing",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Benutzerliste",
"usr_id" => "User ID",
"usr_name" => "Benutzername",
"usr_email" => "Email",
"usr_password" => "Passwort",
"usr_rights" => "Rechte",
"usr_edit_user" => "Benutzer Profil bearbeiten",
"usr_add" => "Benutzer hinzufügen",
"usr_edit" => "Bearbeiten",
"usr_delete" => "Löschen",
"usr_view" => "Anzeigen",
"usr_post_own" => "Setze Eigene",
"usr_post_all" => "Setze Alle",
"usr_manager" => "Setze Manager",
"usr_admin" => "Admin",
"usr_login_0" => "Erstes Einloggen",
"usr_login_1" => "Letztes",
"usr_login_cnt" => "Anzahl",
"usr_add_profile" => "Profil anlegen",
"usr_upd_profile" => "Profil aktualisieren",
"usr_not_found" => "Benutzer nicht gefunden",
"usr_if_changing_pw" => "Nur für Passwortänderung",
"usr_admin_rights" => "Administrator Funktionen",
"usr_no_rights" => "Keine Rechte",
"usr_view_calendar" => "Kalender anzeigen",
"usr_post_events_own" => "Erstelle/bearbeite eigene Termine",
"usr_post_events_all" => "Erstelle/bearbeite alle Termine",
"usr_manager_rights" => "Erstelle/bearbeite + manager rights",
"usr_pw_not_updated" => "Passwort nicht erneuert",
"usr_added" => "Benutzer angelegt",
"usr_updated" => "Benutzerprofil aktualisiert",
"usr_deleted" => "Benutzer gelöscht",
"usr_not_added" => "Benutzer nicht hinzugefügt",
"usr_not_updated" => "Benutzer nicht aktualisiert",
"usr_not_deleted" => "Benutzer nicht gelöscht",
"usr_cred_required" => "Benutzername, Email und Passwort werden benötigt",
"usr_uname_exists" => "Benutzername existiert schon",
"usr_email_exists" => "Email Adresse existiert schon",
"usr_un_invalid" => "Ungültiger Benutzername (min. Länge 2: A-Z, a-z, 0-9, und _-.)",
"usr_em_invalid" => "Email Adresse ist ungültig",
"usr_cant_delete_yourself" => "Sie können sich nicht selbst löschen",
"usr_background" => "Hintergrund Farbe",
"usr_select_color" => "Farbe wählen",
"usr_invalid_color" => "Ungültiges Farbformat (#XXXXXX wo X = HEX-wert)",

//database.php
"mdb_dbm_functions" => "Aufgaben",
"mdb_noshow_tables" => "Tabellen können nicht gelesen werden",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Komprimieren",
"mdb_compact_table" => "Tabelle Komprimieren",
"mdb_compact_error" => "Fehler",
"mdb_compact_done" => "abgeschlossen",
"mdb_purge_done" => "Gelöschte Termine endgültig gelöscht",
"mdb_repair" => "Prüfen und reparieren",
"mdb_check_table" => "Prüfe Tabelle",
"mdb_ok" => "OK",
"mdb_nok" => "Nicht OK",
"mdb_nok_repair" => "Nicht OK, reparieren",
"mdb_backup" => "Backup",
"mdb_backup_table" => "Backup der Tabelle",
"mdb_backup_file" => "Backup Datei",
"mdb_backup_done" => "abgeschlossen",
"mdb_records" => "records",
"mdb_restore" => "Restore database",
"mdb_restore_table" => "Restore table",
"mdb_inserted" => "records inserted",
"mdb_db_restored" => "Database restored.",
"mdb_run_upgrade" => "Warning:<br>Backup file didn't match calendar version.<br>Run upgradexxx.php script.",
"mdb_events" => "Events",
"mdb_delete" => "delete",
"mdb_undelete" => "undelete",
"mdb_between_dates" => "occurring between",
"mdb_deleted" => "Events deleted",
"mdb_undeleted" => "Events undeleted",
"mdb_file_saved" => "Backup Datei gespeichert.",
"mdb_file_name" => "Datei Name:",
"mdb_start" => "Start",
"mdb_no_function_checked" => "Keine Operation(en) ausgewählt",
"mdb_write_error" => "Writing backup file failed<br>Check permissions of 'files/' directory",

//import/export.php
"iex_file" => "Ausgewählte Datei",
"iex_file_name" => "iCal Dateiname",
"iex_file_description" => "iCal Datei Beschreibung",
"iex_filters" => "Termin Filter",
"iex_upload_ics" => "iCal Datei hochladen",
"iex_create_ics" => "iCal Datei generieren",
"iex_upload_csv" => "CSV Datei hochladen",
"iex_upload_file" => "Datei hochladen",
"iex_create_file" => "Datei generieren",
"iex_download_file" => "Datei herunterladen",
"iex_fields_sep_by" => "Felder getrennt durch",
"iex_birthday_cat_id" => "Geburtstags Kategorie ID",
"iex_default_cat_id" => "Kategorie ID",
"iex_if_no_cat" => "wenn keine Kategorie gefunden wird",
"iex_import_events_from_date" => "Termine importieren ab:",
"iex_see_insert" => "Siehe Beschreibung rechts",
"iex_no_file_name" => "Dateiname fehlt",
"iex_inval_field_sep" => "Ungültiges oder kein Feld Trennzeichen",
"iex_no_begin_tag" => "Ungültige iCal Datei (BEGIN-tag fehlt)",
"iex_date_format" => "Datum Format",
"iex_time_format" => "Zeit Format",
"iex_number_of_errors" => "Anzahl der Fehler in der Liste",
"iex_bgnd_highlighted" => "Hintergrund hervorgehoben",
"iex_verify_event_list" => "Überprüfe Termin Liste, korrigiere Fehler und wähle",
"iex_add_events" => "Termine zur Datenbank hinzufügen",
"iex_select_ignore_birthday" => "Wähle Geburtstag aus und lösche Checkbox wie gewünscht",
"iex_select_ignore" => "Wähle Löschen Checkbox um den Termin zu ignorieren",
"iex_title" => "Titel",
"iex_venue" => "Ort",
"iex_owner" => "Ersteller",
"iex_category" => "Kategorie",
"iex_date" => "Datum",
"iex_end_date" => "Ende",
"iex_start_time" => "Anfang",
"iex_end_time" => "Endzeit",
"iex_description" => "Beschreibung",
"iex_repeat" => "Repeat",
"iex_birthday" => "Geburtstag",
"iex_ignore" => "Löschen",
"iex_events_added" => "Termine hinzugefügt",
"iex_events_dropped" => "Termine übersprungen (bereits vorhanden)",
"iex_db_error" => "Datenbank Fehler",
"iex_ics_file_error_on_line" => "iCal Datei Fehler in Zeile",
"iex_between_dates" => "von - bis",
"iex_changed_between" => "Erstellt/Geändert von - bis",
"iex_select_date" => "Datum auswählen",
"iex_select_start_date" => "Start Datum auswählen",
"iex_select_end_date" => "Ende Datum auswählen",
"iex_all_cats" => "Alle Kategorien",
"iex_all_users" => "Alle Benutzer",
"iex_no_events_found" => "Keine Termine gefunden",
"iex_file_created" => "Datei generiert",
"iex_write error" => "Schreiben der Export Datei fehlgeschlagen<br>Zugriffsrechte des 'files/' Verzeichnisses überprüfen",

//lcalcron.php
"cro_sum_header" => "CRON JOB ZUSAMMENFASSUNG",
"cro_sum_trailer" => "ENDE DER ZUSAMMENFASSUNG",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL ERINNERUNGEN",
"cro_not_sent_to" => "Erinnerungen gesendet an",
"cro_no_not_dates_due" => "Keine Erinnerungen gesendet",
"cro_all_day" => "Ganztags",
"cro_mailer" => "Mailer",
"cro_subject" => "Betreff",
"cro_event_due_in" => "Termin fällig in",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "Fällig in",
"cro_due_today" => "Due today",
"cro_days" => "Tag(en)",
"cro_date_time" => "Datum / Zeit",
"cro_title" => "Titel",
"cro_venue" => "Ort",
"cro_description" => "Beschreibung",
"cro_category" => "Kategorie",
"cro_status" => "Status",
"cro_open_calendar" => "Kalender öffnen",
"cro_chg_sum_title" => "KALENDER ÄNDERUNGEN",
"cro_nr_changes_last" => "Anzahl der Änderungen in den",
"cro_report_sent_to" => "Report gesendet an",
"cro_no_report_sent" => "Kein Report gesendet",
"cro_usc_sum_title" => "BENUTZER PRÜFUNG",
"cro_nr_accounts_deleted" => "Anzahl der gelöschten Konten",
"cro_no_accounts_deleted" => "Keine Konten gelöscht",
"cro_ice_sum_title" => "EXPORTED EVENTS",
"cro_nr_events_exported" => "Number of events exported in iCalendar format to file",

//explanations
"xpl_manage_db" =>
"<h4>Datenbank Wartung</h4>
<p>Auf dieser Seite können folgende Aufgaben ausgewählt werden:</p>
<h5>Prüfen und reparieren</h5>
<p>Die Datenbank Tabellen werden auf Fehler geprüft. Fehler werden wenn möglich repariert.</p>
<p>Wenn keine Ungereimtheiten bei der Anzeige auftreten, sollte eine jährliche Prüfung
ausreichen.</p>
<h5>Komprimieren</h5>
<p>Wenn ein Termin gelöscht wird, wird dieser nur als 'gelöscht' markiert, wird aber
nicht aus der Datenbank gelöscht. Diese Funktion löscht Termine endgültig aus der Datenbank
die vor länger als 30 Tagen gelöscht wurden und gibt den belegten Speicher wieder frei.</p>
<h5>Backup</h5>
<p>Diese Funktion generiert ein Backup der kompletten Datenbank (Struktur und Inhalt) im .sql Format.</p>
Das Backup wird in dem Verzeichnis <strong>files/</strong> mit dem Namen:
<kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (wobei 'yyyymmdd' = Jahr, Monat, und
Tag, und hhmmss = Stunde, Minuten und Sekunden gespeichert.</p>
<p>Die Backup Datei kann zur Wiederherstellung der Datenbank (Struktur und Inhalt) verwendet werden,
via the restore function described below or by using for instance the 
<strong>phpMyAdmin</strong> tool, which is provided by most web hosts.</p>
<h5>Restore database</h5>
<p>The restore function will use the latest backup file in the 'files' folder 
created by the back up function described above. Note that when using multiple 
calendars sharing the same database, the latest created backup file will be used 
irrespective of the source calendar.</p>
<p>When restoring the database, ALL CURRENTLY PRESENT DATA WILL BE LOST!</p>
<p>After restoring a backup file of a previous LuxCal version, you must run the 
latest upgradexxx.php script to ensure the database tables are up to date!</p>
<h5>Events</h5>
<p>This function will delete or undelete events which are occurring between the 
specified dates. If a date is left blank, there is no date limit; so if both 
dates are left blank, ALL EVENTS WILL BE DELETED!</p><br>
<p>IMPORTANT: When the database is compacted (see above), the events which are 
permanently removed from the database cannot be undeleted anymore!</p>",

"xpl_import_csv" =>
"<h4>CSV Import Anleitung</h4>
<p>Diese Seite dient zum Hochladen und Einlesen von Terminen in den Kalender mit Hilfe einer
<strong>'Comma Separated Values (CSV)'</strong> Text Datei.</p>
<p>Die Reihenfolge der Spalten in der CSV Datei muss wie folgt sein: Titel, Ort, Kategorie ID (siehe unterhalb),
Anfang, Ende Datum, Anfang, Ende Zeit und Beschreibung. Die erste Zeile der CSV Datei dient als Beschreibung für
die Spalten und wird ignoriert.</p>
<h5>Beispiel CSV Datei</h5>
<p>Beispiel CSV Dateien befinden sich in dem Verzeichnis 'files/' der LuxCal Installation.</p>
<h5>Datum und Zeit Format</h5>
<p>Das links ausgewählte Format für das Datum und die Zeit muss den Einträgen in der zu verarbeiteten
CSV Datei entsprechen.</p>
<h5>Kategorien Tabelle</h5>
<p>Der Kalender verwendet ID Nummern um diese zu definieren. Die Kategorie IDs in der CSV
Datei sollten mit denen des Kalenders übereinstimmen oder leer sein.</p>
<p>Wenn im nächsten Schritt ein Termin als 'Geburtstag' gekennzeichnet werden soll, muss die <strong>Geburtstag
Kategorie ID</strong> entsprechend der nachfolgenden Liste gesetzt werden.</p>
<p class='hilight'>Warnung: Do not import more than 100 events at a time!</p>
<p>Für diesen Kalender sind folgende Kategorien definiert:</p>",

"xpl_import_ical" =>
"<h4>iCalendar Import Anleitung</h4>
<p>Diese Seite dient zum Hochladen und Einlesen von einer <strong>iCalendar</strong> Datei mit Terminen
in den LuxCal Kalender.</p>
<p>Der Datei Inhalt muss dem [<u><a href='http://tools.ietf.org/html/rfc5545'
target='_blank'>RFC5545 Standard</a></u>] der 'Internet Engineering Task Force' entsprechen.</p>
<p>Nur Termine werden importiert; andere iCal Elemente wie: To-Do, Journal, Frei /
Belegt, Zeitzone und Alarm werden ignoriert.</p>
<p>Beispiel iCalendar Dateien sind im dem Verzeichnis 'files/' der LuxCal Installation zu finden.</p>
<h5>Kategorien Tabelle</h5>
<p>Der Kalender verwendet ID Nummern um diese zu definieren. Die Kategorie IDs in der CSV
Datei sollten mit denen des Kalenders übereinstimmen oder leer sein.</p>
<p class='hilight'>Warnung: Do not import more than 100 events at a time!</p>
<p>Für diesen Kalender sind folgende Kategorien definiert:</p>",

"xpl_export_ical" =>
"<h4>iCalendar Export Anleitung</h4>
<p>Diese Seite dient zum Erzeugen und Herunterladen von einer <strong>iCalendar</strong> Datei mit Terminen
aus dem LuxCal Kalender.</p>
<p>Der <b>iCal Dateiname</b> (ohne Erweiterung) ist optional. Generierte Dateien werden am Server mit dem 
angegebenen Dateinamen, oder mit dem Namen der Kalender im Verzeichnis \"files/\" gespeichert.
Die Dateierweiterung ist <b>.ics</b>.
Am Server im Verzeichnis \"files/\" gespeicherte Dateien mit dem selben Namen werden durch die neue Datei überschrieben.</p>
<p>Die <b>iCal Datei Beschreibung</b> (z.B. 'Besprechungen 2013') ist optional. Wenn sie angegeben ist,
wird sie in die exportierte iCal Datei eingetragen.</p>
<p><b>Termin Filter</b><br>
Die zu exportierenden Termine können gefiltert werden nach:</p>
<ul>
<li>dem Ersteller</li>
<li>der Kategorie</li>
<li>dem Anfang Datum</li>
<li>hinzugefügt/zuletzt geändert Datum</li>
</ul>
<p>Jeder Filter ist optional.<br>
Ein leeres Datum bedeutet: keine Filterung</p>
<br>
<p>Der Inhalt der Datei entspricht dem [<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545 Standard</a></u>]
der 'Internet Engineering Task Force'.</p>
<p>Beim <b>Herunterladen</b> der exportierten iCal Datei wird das Datum und die Uhrzeit zum Namen hinzugefügt.</p>
<p>Beispiel iCalendar Dateien sind im Verzeichnis 'files/' der LuxCal Installation zu finden.</p>"
);
?>
