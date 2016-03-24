<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "None.",
"all" => "All",
"back" => "Geri",
"close" => "Close",
"always" => "always",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "YIL",
"month" => "AY",
"week_day" => "HAFTA/GÜN",
"upcoming" => "Gelecek",

//settings.php - fieldset headers
"set_general_settings" => "Genel Ayarlar",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Events",
"set_user_settings" => "Kullanıcı Hesapları",
"set_email_settings" => "Email Settings",
"set_perfun_settings" => "Periodic Functions<br>(only relevant if cron job defined)",
"set_minical_settings" => "Mini Calendar (only relevant if used)",
"set_sidebar_settings" => "Stand-Alone Sidebar<br>(only relevant if in use)",
"set_view_settings" => "Görünüm",
"set_dt_settings" => "Tarih/Zaman",
"set_save_settings" => "Ayarları Kaydet",
"set_missing_invalid" => "missing or invalid settings (background highlighted)",
"set_settings_saved" => "Ayarlar kaydedildi",
"set_save_error" => "Database error - Saving calendar settings failed",
"hover_for_details" => "Ayrıntılı bilgil açıklamaları",
"default" => "default",
"enabled" => "Açık",
"disabled" => "Kapalı",
"no" => "hayır",
"yes" => "evet",
"or" => "veya",
"minutes" => "minutes",
"pixels" => "pixels",
"no_way" => "You are not authorized to perform this action",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Ajanda Başlığı",
"calendarTitle_text" => "Ajandanın üst tarafında ki kısımda eposta hatırlatmalarını göster.",
"calendarUrl_label" => "Ajanda URL",
"calendarUrl_text" => "Ajandanın websitesi.",
"calendarEmail_label" => "Ajanda Maili",
"calendarEmail_text" => "The sender\'s email address used in notification emails.<br>Format: \'email\' or \'name&#8249;email&#8250;\'. \'name\' could be the calendar name.",
"backLinkUrl_label" => "Link to parent page",
"backLinkUrl_text" => "URL of parent page. If specified, a Back button will be displayed on the left side of the Navigation Bar which links to this URL.<br>For instance to link back to the parent page from which the calendar was started.",
"timeZone_label" => "Zaman Dilimi",
"timeZone_text" => "The calendar\'s time zone, used to calculate the current time.",
"see" => "Bak",
"notifSender_label" => "Sender of notification emails",
"notifSender_text" => "When the calendar sends reminder emails, the sender field of the email can contain either the calendar email address, or the email address of the user who created the event.<br>In case of the user email address, the receiver can reply to the email.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "If enabled: For users with at least \'view\' rights an RSS feed link will be visible in the footer of the calendar and an RSS feed link will be added to the HTML head of the calendar pages.",
"calendar" => "calendar",
"user" => "user",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Navigation bar buttons with text",
"navButText_text" => "If enabled: On the navgation bar the buttons will be displayed with text. If disabled, the buttons are diplayed with icons.",
"navBar_label" => "Navigation Bar",
"navBar_text" => "If enabled: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navTodoList_label" => "Todo button",
"navUpcoList_label" => "Upcoming button",
"optionsPanel_label" => "Options Panel",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>The user filter can be used to display only events created by one specific user.<br>The category filter can be used to display only events belonging to a specific event category.<br>The language selection menu can be used to select the user interface language. (enabling only useful if several languages are installed)",
"userMenu_label" => "User filter",
"catMenu_label" => "Category filter",
"langMenu_label" => "Language selection",
"defaultView_label" => "Başlangıçtaki Görünüm Şekli",
"defaultView_text" => "Possible default views on calendar start-up are:<br>- YIL<br>- AY<br>- HAFTA<br>- GÜN<br>- Gelecek Randevular<br>- Değişiklikler<br>Önerilen: Ay veya Gelecek Randevu görünümü",
"language_label" => "Öntanımlı Kullanıcı Dilleri",
"language_text" => "The files ui-{language}.php, ai-{language}.php, ug-{language}.php and ug-layout.png must be present in the lang/ directory. {language} = selected user interface language. File names must be lower case!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Posting of private events",
"privEvents_text" => "Private events are only visible to the user who entered the event.<br>Enabled: users can enter private events.<br>Default: when adding new events, the \'private\' checkbox in the Event window will be checked by default.<br>Always: when adding new events they will always be private, the \'private\' checkbox in the Event window will not be shown.",
"details4All_label" => "Show event details to users",
"details4All_text" => "Disabled: event details will only be visible to the owner of the event and to users with \'post all\' rights.<br>All: event details will be visible to the owner of the event and to all other users.<br>Logged in: event details will be visible to the owner of the event and to logged in users.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Event colors based on",
"eventColor_text" => "Events in the various calendar views can be displayed in the color assigned to the user who created the event or the color of the event category.",
"xField1_label" => "Extra field 1 label",
"xField2_label" => "Extra field 2 label",
"xFieldx_text" => "Name of an optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>The specified name can be max. 15 characters long. E.g. \'Email address\', \'Website\', \'Phone number\'.",
"logged_in" => 'logged in',
"manager_only" => 'manager',
"owner_color" => "owner color",
"cat_color" => "category color",

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Herkes üye olabilir.",
"selfReg_text" => "Ajandaya herkes üye olabilir, düzenleme yapabilir.",
"selfRegPrivs_label" => "Genel Kullanıcı Kaydı Hakları",
"selfRegPrivs_text" => "Calendar access rights for self registered users.<br>- view: view only<br>- post-self: post events and edit own events<br>- post-all: post events and edit own and other\'s events",
"selfRegNot_label" => "Self registration notification",
"selfRegNot_text" => "Send a notification email to the calendar email address when a self-registration takes place.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "'Remember me' cookie expiry days",
"cookieExp_text" => "Number of days before the cookie set by the \'Remember me\' option (during Log In) will expire.",
"view" => "Görünüm",
"post_own" => 'Kendi Mesajları',
"post_all" => 'Tüm Mesajlar',
"manager" => 'Post/manager',

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
"yearStart_label" => "Start month in Year view",
"yearStart_text" => "If a start month has been specified (1 - 12), in Year view the calendar will always start with this month and the year of this first month will only change as of the first day of the same month in the next year.<br>The value 0 has a special meaning: the start month is based on the current date and will fall in the first row of months.",
"colsToShow_label" => "Yıl görünümünde ki kolon sayısı",
"colsToShow_text" => "Yıl görünümünde kaç tane kolon olacak.<br>Önerilen: 3 ve 4.",
"rowsToShow_label" => "Yıl Görünümündeki Satır Sayısı",
"rowsToShow_text" => "Yıl Görünümünde kaç satır olacak<br>Önerilen: 4, 4 yapılırsa 16 ayı görüntülenebilir.",
"weeksToShow_label" => "Aylık görünümde kaç hafta gösterilsin",
"weeksToShow_text" => "Aylık görünümde kaç haftanın görüneceğini belirtin.<br>Önerilen: 10, Böylelikle 2,5 aylık bir görünümü elde edebilirsiniz. <br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Work week days",
"workWeekDays_text" => "Days to be shown in each week in Work Month view and Work Week view.<br>Enter the number of each day that should be visible. Valid day numbers:<br>1 = Monday<br>2 = Tuesday<br>....<br>7 = Sunday<br>e.g. 12345 : Monday - Friday",
"lookaheadDays_label" => "Gelecek kaç Günlük Gösterilsin",
"lookaheadDays_text" => "Gelecek randevularının kaç günlük gösterileceğini giriniz.",
"dwStartHour_label" => "Mesai Başlangıçı",
"dwStartHour_text" => "Burayı yazağınız saatten gece yarısına kadar saat dilimlerini gösterir.<br>Örnek 7 yazılırsa sabah 7 ile gece 12 arası saatleri aktif olur.<br>The time picker, used to enter a time, will also start at this hour.",
"dwEndHour_label" => "End hour in Day/Week view",
"dwEndHour_text" => "Hour at which a normal day of events ends.<br>E.g., setting this value to 18 will avoid wasting space in Week/Day view for the quiet time between 18:00 and midnight.<br>The time picker, used to enter a time, will also end at this hour.",
"dwTimeSlot_label" => "Time slot in Day/Week view",
"dwTimeSlot_text" => "Day/Week view time slot in number of minutes.<br>This value, together with the Start hour and End hour (see above) will determine the number of rows in Day/Week view.",
"dwTsHeight_label" => "Time slot height",
"dwTsHeight_text" => "Day/Week view time slot display height in number of pixels.",
"showLinkInMV_label" => "Aylık görünümde linkleri göster",
"showLinkInMV_text" => "If switched on, URLs in the event description will be displayed as hyperlink in month view",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Tarih Formatı (dd mm yyyy)",
"dateFormat_text" => "Text string defining the format of event dates in the calendar views and input fields.<br>Possible characters: y = year, m = month and d = day.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "e.g. y.m.d: 2013.10.31",
"MdFormat_label" => "Date format (dd month)",
"MdFormat_text" => "Text string defining the format of dates consisting of month and day.<br>Possible characters: M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M: 12 April<br>M, d: July, 14",
"MdFormat_expl" => "e.g. M, d: July, 14",
"MdyFormat_label" => "Date format (dd month yyyy)",
"MdyFormat_text" => "Text string defining the format of dates consisting of day, month and year.<br>Possible characters: d = day in digits, M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>d M y: 12 April 2013<br>M d, y: July 8, 2013",
"MdyFormat_expl" => "e.g. M d, y: July 8, 2013",
"MyFormat_label" => "Date format (month yyyy)",
"MyFormat_text" => "Text string defining the format of dates consisting of month and year.<br>Possible characters: M = month in text, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>M y: April 2013<br>y - M: 2013 - July",
"MyFormat_expl" => "e.g. M y: April 2013",
"DMdFormat_label" => "Date format (weekday dd month)",
"DMdFormat_text" => "Text string defining the format of dates consisting of weekday, day and month.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M: Friday 12 April<br>WD, M d: Monday, July 14",
"DMdFormat_expl" => "e.g. WD - M d: Sunday - April 6",
"DMdyFormat_label" => "Date format (weekday dd month yyyy)",
"DMdyFormat_text" => "Text string defining the format of dates consisting of weekday, day, month and year.<br>Possible characters: WD = weekday in text, M = month in text, d = day in digits, y = year in digits.<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>WD d M y: Friday 13 April 2013<br>WD - M d, y: Monday - July 16, 2013",
"DMdyFormat_expl" => "e.g. WD, M d, y: Monday, July 16, 2013",
"timeFormat_label" => "Time format (hh mm)",
"timeFormat_text" => "Text string defining the format of event times in the calendar views and input fields.<br>Possible characters: h = hours, H = hours with leading zeros, m = minutes, a = am/pm (optional), A = AM/PM (optional).<br>Non-alphanumeric character can be used as separator and will be copied literally.<br>Examples:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "e.g. h:m: 22:35 and h:mA: 10:35PM",
"weekStart_label" => "Haftanın İlk Günü",
"weekStart_text" => "Bazı ülkelerde hafta Pazar günü başlar.",
"weekNumber_label" => "Haftanın numaralarını göster",
"weekNumber_text" => "The display of week numbers in Year, Month and Week view can be enabled/disabled",
"time_format_us" => "12-saat AM/PM",
"time_format_eu" => "24-saat",
"sunday" => "Pazar",
"monday" => "Pazartesi",
"time_zones" => "ZAMAN DİLİMİ",
"dd_mm_yyyy" => "dd-mm-yyyy",
"mm_dd_yyyy" => "mm-dd-yyyy",
"yyyy_mm_dd" => "yyyy-mm-dd",

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
"cronSummary_label" => "Admin cron job summary",
"cronSummary_text" => "Send a cron job summary to the calendar administrator.<br>Enabling is only useful if a cron job has been activated for the calendar.",
"chgEmailList_label" => "Değişiklikler için kullanılacak Eposta",
"chgEmailList_text" => "Herhangi bir değişiklikte size haber verilmesi için gerekli eposta.<br>Eposta adreslerini virgün ile ayırabilirsiniz.",
"chgNofDays_label" => "Kaç gün önce haber verilsin.",
"chgNofDays_text" => "Number of days to look back for the summary of calendar changes.<br>If the number of days is set to 0 no summary of changes will be sent.",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 yesr will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Mks. Giriş yapılmayan gün sayısı",
"maxNoLogin_text" => "Eğer kullanıcı burada belirtilen kadar gün sisteme giriş yapmadığı takdirde yazılan gün geçtiğinde kullanıcı silinecektir.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Possible views for the mini calendar are:<br>- Full Month<br>- Work Month *)<br>- Full Week<br>- Work Week *)<br>*) For work week days see on this page: Views - Work week days",
"miniCalPost_label" => "Ajanda üzerinden olay ekleme",
"miniCalPost_text" => "Sadece ilgili mini takvim kullanılır.<br>Eğer kullanıcı etkin ise:<br>- Kullanıcı olay ekliyeceği günü oluşturan karenin üst tarafına tıklayakarak ekleme ve çıkarma yapabilir.<br>Note: The access rights of the Public User will be applicable.",
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
"log_log_in" => "Sisteme Giriş",
"log_remember_me" => "Remember me",
"log_register" => "Kayıt Ol",
"log_change_my_data" => "Bilgilerimi Değiştir",
"log_change" => "Değiştir",
"log_un_or_em" => "Kullanıcı Adı/Eposta",
"log_un" => "Kullanıcı Adı",
"log_em" => "Email",
"log_pw" => "Parola",
"log_new_un" => "Yeni K. Adı",
"log_new_em" => "Yeni Email",
"log_new_pw" => "Yeni Parola ",
"log_pw_msg" => "Here are your log in details for calendar",
"log_pw_subject" => "Sizin %% Parola", //%% will be replaced by calendar name
"log_npw_subject" => "Sizin Yeni %% Parola", //%% will be replaced by calendar name
"log_npw_sent" => "Parolanız gönderildi",
"log_registered" => "Registration successful - Your password has been sent by email",
"log_not_registered" => "Registration not successful",
"log_un_exists" => "Kullanıcı zaten var",
"log_em_exists" => "eposta adresi zaten var.",
"log_un_invalid" => "Invalid username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_em_invalid" => "Invalid email address",
"log_un_em_invalid" => "The username/email is not valid",
"log_un_em_pw_invalid" => "The username/email or password is not valid",
"log_no_un_em" => "Please enter your username/email",
"log_no_un" => "Please enter your username",
"log_no_em" => "Please enter your email address",
"log_no_pw" => "Please enter your password",
"log_no_rights" => "Login rejected: you have no view rights - Contact the administrator",
"log_send_new_pw" => "Parolamı Gönder",
"log_if_changing" => "Yalnızca Değiştirilirse",
"log_no_new_data" => "Hiçbir bilgi değiştirilmedi",
"log_invalid_new_un" => "Invalid new username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_new_un_exists" => "New username already exists",
"log_invalid_new_em" => "New email address invalid",
"log_new_em_exists" => "New email address already exists",
"log_ui_language" => "Kullanıcı Dili",
"log_new_reg" => "New user registration",
"log_date_time" => "Date / time",

//categories.php
"cat_list" => "Kategoriler",
"cat_edit" => "Düzenle",
"cat_delete" => "SİL",
"cat_add_new" => "Yeni Kategori Ekle",
"cat_add" => "Ekle",
"cat_edit_cat" => "Kategoriyi Düzenle",
"cat_name" => "Kategori Adı",
"cat_sequence" => "Sıralama",
"cat_in_menu" => "Menüdeki",
"cat_text_color" => "Yazı Rengi",
"cat_background" => "Arkaplan Rengi",
"cat_select_color" => "Renk Seçin",
"cat_save" => "Save",
"cat_added" => "Kategori Ekle",
"cat_updated" => "Kategori Güncellendi",
"cat_deleted" => "Kategori Silindi",
"cat_invalid_color" => "Hatalı Renk Kodu (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Kategori Eklenemedi",
"cat_not_updated" => "Kategori güncellenemedi",
"cat_not_deleted" => "Kategori silinemedi",
"cat_nr" => "#",
"cat_repeat" => "Tekrar",
"cat_every_day" => "Hergün",
"cat_every_week" => "Her Hafta",
"cat_every_month" => "Her Ay",
"cat_every_year" => "Her Yıl",
"cat_approve" => "Events need approval",
"cat_public" => "Public",
"cat_check_mark" => "Check mark",
"cat_label" => "label",
"cat_mark" => "mark",
"cat_name_missing" => "Category name is missing",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Kullanıcılar",
"usr_id" => "User ID",
"usr_name" => "Kullanıcı Adı",
"usr_email" => "Email",
"usr_password" => "Parola",
"usr_rights" => "Haklar",
"usr_edit_user" => "Profili Düzenle",
"usr_add" => "Kullanıcı Ekle",
"usr_edit" => "Düzenle",
"usr_delete" => "Sil",
"usr_view" => "Görünüm",
"usr_post_own" => "Kendi Mesajları",
"usr_post_all" => "Tüm Mesajlar",
"usr_manager" => "Post/manager",
"usr_admin" => "Yönetici",
"usr_login_0" => "İlk Giriş",
"usr_login_1" => "Son Giriş",
"usr_login_cnt" => "Üye Girişler",
"usr_add_profile" => "Profil Ekle",
"usr_upd_profile" => "Profili Güncelle",
"usr_not_found" => "Kullanıcı Bulunamadı",
"usr_if_changing_pw" => "Eğer Parola da değiştirilecekse",
"usr_admin_rights" => "Yönetici Fonksiyonları",
"usr_no_rights" => "Giriş Yasak",
"usr_view_calendar" => "Ajanda Görünümü",
"usr_post_events_own" => "Sadece Kendi için Olay Ekle Düzenle",
"usr_post_events_all" => "Olay Ekle/Düzenle",
"usr_manager_rights" => "Post/Edit + manager rights",
"usr_pw_not_updated" => "Parola Güncellenmedi",
"usr_added" => "Kullanıcı Ekle",
"usr_updated" => "User profile updated",
"usr_deleted" => "Kullanıcı Silindi",
"usr_not_added" => "Kullanıcı Eklenemedi",
"usr_not_updated" => "Güncelleme Yapılamadı",
"usr_not_deleted" => "Silinemedi",
"usr_cred_required" => "Kullanıcı Adı, eposta ve parola gerekli alanlardır.",
"usr_uname_exists" => "Bu kullanıcı adı kullanımda",
"usr_email_exists" => "Email address already exists",
"usr_un_invalid" => "Invalid username (min length 2: A-Z, a-z, 0-9, and _-.) ",
"usr_em_invalid" => "Invalid email address",
"usr_cant_delete_yourself" => "Kendisinizi Silemezsiniz.",
"usr_background" => "Background color",
"usr_select_color" => "Select Color",
"usr_invalid_color" => "Color format invalid (#XXXXXX where X = HEX-value)",

//database.php
"mdb_dbm_functions" => "Veritabanı Ayarları",
"mdb_noshow_tables" => "Tablolar getirilemiyor.",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Compact database",
"mdb_compact_table" => "Tablolaları Kompakt Yap",
"mdb_compact_error" => "Hata",
"mdb_compact_done" => "Yapıldı",
"mdb_purge_done" => "Silinmiş olaylar kesin olarak kaldırıldı",
"mdb_repair" => "Veritabanını kontrol et ve tamir et",
"mdb_check_table" => "Check table",
"mdb_ok" => "OK",
"mdb_nok" => "Not OK",
"mdb_nok_repair" => "Not OK, repair started",
"mdb_backup" => "Veritabanını Yedekle",
"mdb_backup_table" => "Tabloları Yedekle",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Yapıldı",
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
"mdb_file_saved" => "Dosya Kaydedildi.",
"mdb_file_name" => "Dosya Adı:",
"mdb_start" => "Başla",
"mdb_no_function_checked" => "No function(s) selected",
"mdb_write_error" => "Writing backup file failed<br>Check permissions of 'files/' directory",

//import/export.php
"iex_file" => "Dosyayı Seç",
"iex_file_name" => "iCal file name",
"iex_file_description" => "iCal dosya açıkalaması",
"iex_filters" => "Event Filters",
"iex_upload_ics" => "iCal Dosyası Yükle",
"iex_create_ics" => "iCal Dosya Oluştur",
"iex_upload_csv" => "CSV Yükle ",
"iex_upload_file" => "Yükle ",
"iex_create_file" => "Dosya Oluştur",
"iex_download_file" => "Dosyayı Kaydet",
"iex_fields_sep_by" => "Verilerin ayırma işareti",
"iex_birthday_cat_id" => "Doğumgünü kategori ID",
"iex_default_cat_id" => "Öntanımlı Kategori ID",
"iex_if_no_cat" => "Eğer kategori yoksa",
"iex_import_events_from_date" => "Bu tarih itibari olan olaylar",
"iex_see_insert" => "sağdaki talimatlara bakabilirsiniz.",
"iex_no_file_name" => "Dosya Adı Hatası",
"iex_inval_field_sep" => "invalid or no field separator",
"iex_no_begin_tag" => "invalid iCal file (BEGIN-tag missing)",
"iex_date_format" => "Tarih Formatı",
"iex_time_format" => "Zaman Formatı",
"iex_number_of_errors" => "Number of errors in list",
"iex_bgnd_highlighted" => "background highlighted",
"iex_verify_event_list" => "Verify Event List, correct errors and click",
"iex_add_events" => "Add Events to Database",
"iex_select_ignore_birthday" => "Select Ignore and Birthday check boxes as required",
"iex_select_ignore" => "Select Ignore check box to ignore event",
"iex_title" => "Başlık",
"iex_venue" => "Yer",
"iex_owner" => "Owner",
"iex_category" => "Kategori",
"iex_date" => "Tarih",
"iex_end_date" => "Bitiş",
"iex_start_time" => "Başalama Saat",
"iex_end_time" => "Bitiş Saat",
"iex_description" => "Açıklama",
"iex_repeat" => "Repeat",
"iex_birthday" => "Doğrumgünü",
"iex_ignore" => "SİL",
"iex_events_added" => "Olay Eklendi",
"iex_events_dropped" => "Olaylar bırakıldı(zaten vardı)",
"iex_db_error" => "Veritabanı hatası",
"iex_ics_file_error_on_line" => "iCal file error on line",
"iex_between_dates" => "Tarihler Arasında olan",
"iex_changed_between" => "Tarihler arası eklenen/Değişen",
"iex_select_date" => "Tarih Seç",
"iex_select_start_date" => "Select start date",
"iex_select_end_date" => "Select end date",
"iex_all_cats" => "Tüm Kategoriler",
"iex_all_users" => "all users",
"iex_no_events_found" => "Olay/Etkinlik Bulunamadı",
"iex_file_created" => "Dosya Oluşturuldu",
"iex_write error" => "Writing export file failed<br>Check permissions of 'files/' directory",

//lcalcron.php
"cro_sum_header" => "CRON JOB SUMMARY",
"cro_sum_trailer" => "END OF SUMMARY",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL REMINDERS",
"cro_not_sent_to" => "Reminders sent to",
"cro_no_not_dates_due" => "No notification dates due",
"cro_all_day" => "Bütün Gün",
"cro_mailer" => "mailer",
"cro_subject" => "Konu",
"cro_event_due_in" => "Aşağıdaki Olay Nedeni",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "nedeni ile",
"cro_due_today" => "Due today",
"cro_days" => "gün(ler)",
"cro_date_time" => "Tarih / zaman",
"cro_title" => "Başlık",
"cro_venue" => "Yer",
"cro_description" => "Açıklama",
"cro_category" => "Kategori",
"cro_status" => "Status",
"cro_open_calendar" => "Açık Ajanda",
"cro_chg_sum_title" => "CALENDAR CHANGES",
"cro_nr_changes_last" => "Number of changes last",
"cro_report_sent_to" => "Report sent to",
"cro_no_report_sent" => "No report emailed",
"cro_usc_sum_title" => "USER ACCOUNTS EXPIRED",
"cro_nr_accounts_deleted" => "Number of accounts deleted",
"cro_no_accounts_deleted" => "No accounts deleted",
"cro_ice_sum_title" => "EXPORTED EVENTS",
"cro_nr_events_exported" => "Number of events exported in iCalendar format to file",

//explanations
"xpl_manage_db" =>
"<h4>Manage Database Instructions</h4>
<p>On this page the following functions can be selected:</p>
<h5>Check and repair database</h5>
<p>This function will scan the calendar tables and check for errors. If an error
is found, the error will be repaired, if possible.</p>
<p>If the calendar views don't show any problems, running this function once a 
year should be sufficient.</p>
<h5>Compact database</h5>
<p>When a user deletes an event, the event will be marked as 'deleted', but will 
not be removed from the database. The Compact Database function will permanently 
remove events deleted more than 30 days ago from the database and free the space 
occupied by these events.</p>
<h5>Backup database</h5>
<p>This function will create a backup of the full calendar database (tables 
structure and contents) in .sql format. The backup will be saved in the 
<strong>files/</strong> directory with file name: 
<kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (where 'yyyymmdd' = year, month, and 
day, and hhmmss = hour, minutes and seconds.</p>
<p>The backup file can be used to recreate the calendar database (structure and 
data), via the restore function described below or by using for instance the 
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
"<h4>CSV Import Instructions</h4>
<p>This form is used to import a <strong>Comma Separated Values (CSV)</strong> text 
file with event data into the LuxCal Calendar.</p>
<p>The order of columns in the CSV file must be: title, venue, category id (see 
below), date, end date, start time, end time and description. The first row of the 
CSV file, used for column headers, is ignored.</p>
<h5>Sample CSV files</h5>
<p>Sample CSV files (file extension .cvs) can be found in the 'files/' directory 
of your LuxCal download.</p>
<h5>Date and time format</h5>
<p>The selected event date format and event time format on the left must match the 
format of the dates and times in the uploaded CSV file.</p>
<h5>Table of Categories</h5>
<p>The calendar uses ID numbers to specify categories. The category IDs in the CSV 
file should correspond to the categories used in your calendar or be blank.</p>
<p>If in the next step you want to earmark events as 'birthday', the <strong>Birthday 
category ID</strong> must be set to the corresponding ID in the category list below.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>For your calendar, the following categories have currently been defined:</p>",

"xpl_import_ical" =>
"<h4>iCalendar Import Instructions</h4>
<p>This form is used to import an <strong>iCalendar</strong> file with events into 
the LuxCal Calendar.</p>
<p>The file contents must meet the [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545 standard</a></u>] of the Internet Engineering Task Force.</p>
<p>Only events will be imported; other iCal components, like: To-Do, Journal, Free / 
Busy, Time zone and Alarm, will be ignored.</p>
<h5>Sample iCal files</h5>
<p>Sample iCalendar files (file extension .ics) can be found in the 'files/' 
directory of your LuxCal download.</p>
<h5>Table of Categories</h5>
<p>The calendar uses ID numbers to specify categories. The category IDs in the 
iCalendar file should correspond to the categories used in your calendar or be 
blank.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>For your calendar, the following categories have currently been defined:</p>",

"xpl_export_ical" =>
"<h4>iCalendar Export Instructions</h4>
<p>This form is used to extract and export <strong>iCalendar</strong> events from 
the LuxCal Calendar.</p>
<p>The <b>iCal file name</b> (without extension) is optional. Created files will 
be stored in the \"files/\" directory on the server with the specified file name, 
or otherwise with the name of the calendar. The file extension will be <b>.ics</b>.
Existing files in the \"files/\" directory on the server with the same name will 
be overwritten by the new file.
<p>The <b>iCal file description</b> (e.g. 'Meetings 2013') is optional. If 
entered, it will be added to the header of the exported iCal file.</p>
<p><b>Event filters</b>: The events to be extracted can be filtered by:</p>
<ul>
<li>event owner</li>
<li>event category</li>
<li>event start date</li>
<li>event added/last modified date</li>
</ul>
<p>Each filter is optional. A blank date means: no limit</p>
<br>
<p>The content of the file with extracted events will meet the 
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545 standard</a></u>] 
of the Internet Engineering Task Force.</p>
<p>When <b>downloading</b> the exported iCal file, the date and time will be 
added to the name of the downloaded file.</p>
<h5>Sample iCal files</h5>
<p>Sample iCalendar files (file extension .ics) can be found in the 'files/' 
directory of your LuxCal download.</p>"
);
?>
