<?php
/*
= LuxCal event calendar admin interface language file =

Russian translation: iluhis.com. Please send comments to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Нет.",
"all" => "All",
"back" => "Назад",
"close" => "Закрыть",
"always" => "always",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Год",
"month" => "Месяц",
"week_day" => "Неделя/День",
"upcoming" => "Ближайшие",

//settings.php - настройки заголовка поля + Основные
"set_general_settings" => "Основные настройки",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Events",
"set_user_settings" => "Учетные записи",
"set_email_settings" => "Email Settings",
"set_perfun_settings" => "Periodic Functions<br>(only relevant if cron job defined)",
"set_minical_settings" => "Mini Calendar (only relevant if used)",
"set_sidebar_settings" => "Stand-Alone Sidebar<br>(only relevant if in use)",
"set_view_settings" => "Отображение",
"set_dt_settings" => "Дата/время",
"set_save_settings" => "Сохранить настройки",
"set_missing_invalid" => "Недостаточны или некорректные настройки (background highlighted)",
"set_settings_saved" => "Настройки календаря сохранены",
"set_save_error" => "Ошибка БД - Не удалось сохранить настройки",
"hover_for_details" => "Наведите на описания для более подробной информации",
"default" => "default",
"enabled" => "вкл.",
"disabled" => "выкл.",
"no" => "нет",
"yes" => "да",
"or" => "или",
"minutes" => "минуты",
"pixels" => "пикселей",
"no_way" => "Вы не авторизованы для совершения этих действий",

//settings.php - основные настройки. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. (e.g. \')
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Заголовок календаря",
"calendarTitle_text" => "Отображается в верхней строке календаря и используется в email отчетах.",
"calendarUrl_label" => "URL календаря.",
"calendarUrl_text" => "WEB-адрес календаря. Используется при ссылке из миникалендаря и в ссылке на календарь из email отчетов",
"calendarEmail_label" => "Email адрес календаря",
"calendarEmail_text" => "Email адрес отправителя при отправке отчетов.<br>Формат: \'email\' или \'имя&#8249;email&#8250;\'. \'имя\' в качестве имени календаря.",
"backLinkUrl_label" => "Link to parent page",
"backLinkUrl_text" => "URL of parent page. If specified, a Back button will be displayed on the left side of the Navigation Bar which links to this URL.<br>For instance to link back to the parent page from which the calendar was started.",
"timeZone_label" => "Часовой пояс",
"timeZone_text" => "Часовой пояс календаря. Используется для подсчета текущего времени.",
"see" => "посмотреть",
"notifSender_label" => "Sender of notification emails",
"notifSender_text" => "When the calendar sends reminder emails, the sender field of the email can contain either the calendar email address, or the email address of the user who created the event.<br>In case of the user email address, the receiver can reply to the email.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "If enabled: For users with at least \'view\' rights an RSS feed link will be visible in the footer of the calendar and an RSS feed link will be added to the HTML head of the calendar pages.",
"calendar" => "calendar",
"user" => "user",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"navButText_label" => "Navigation bar buttons with text",
"navButText_text" => "If enabled: On the navgation bar the buttons will be displayed with text. If disabled, the buttons are diplayed with icons.",
"navBar_label" => "Navigation Bar",
"navBar_text" => "If enabled: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navTodoList_label" => "Todo button",
"navUpcoList_label" => "Upcoming button",
"optionsPanel_label" => "Панель опций",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>The user filter can be used to display only events created by one specific user.<br>The category filter can be used to display only events belonging to a specific event category.<br>The language selection menu can be used to select the user interface language. (enabling only useful if several languages are installed)",
"userMenu_label" => "Фильтр по пользователям",
"catMenu_label" => "Фильтр по категориям",
"langMenu_label" => "Меню выбора языка",
"defaultView_label" => "Вид при открытии по умолчанию",
"defaultView_text" => "Возможные отображения по умолчанию:<br>- Год<br>- Месяц<br>- Неделя<br>- День<br>- Ближайшие<br>- Измененные<br>Рекомендуется: Месяц или Ближайшие.",
"language_label" => "Язык по умолчанию",
"language_text" => "В папке lang/ должны присутствовать файлы ui-{язык}.php, ai-{язык}.php, ug-{язык}.php и ug-layout.png. {язык} = выбранный пользователем язык. Название файла должно быть в нижнем регистре!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Posting of private events",
"privEvents_text" => "Private events are only visible to the user who entered the event.<br>Enabled: users can enter private events.<br>Default: when adding new events, the \'private\' checkbox in the Event window will be checked by default.<br>Always: when adding new events they will always be private, the \'private\' checkbox in the Event window will not be shown.",
"details4All_label" => "Показывать подробную информацию о событии пользователям",
"details4All_text" => "Disabled: event details will only be visible to the owner of the event and to users with \'post all\' rights.<br>All: event details will be visible to the owner of the event and to all other users.<br>Logged in: event details will be visible to the owner of the event and to logged in users.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Окрашивать события по",
"eventColor_text" => "В различных режимах просмотра календаря, события могут отображаться различными цветами - или по цвету создавшего событие пользователя, или по цвету категории, к которой событие принадлежит.",
"xField1_label" => "Extra field 1 label",
"xField2_label" => "Extra field 2 label",
"xFieldx_text" => "Name of an optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>The specified name can be max. 15 characters long. E.g. \'Email address\', \'Website\', \'Phone number\'.",
"logged_in" => 'logged in',
"manager_only" => 'manager',
"owner_color" => "цвету владельца",
"cat_color" => "цвету категории",

//settings.php - user account settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"selfReg_label" => "Самостоятельная регистрация",
"selfReg_text" => "Разрешить пользователям самостоятельно регистрироваться и получать доступ к календарю самостоятельно.",
"selfRegPrivs_label" => "Права при самостоятельной регистрации",
"selfRegPrivs_text" => "Права для пользователей, зарегистрированных самостоятельно:<br>- просмотр: только просмотр <br>- размещение своих: размещение своих событий и редактировать свои события<br>- размещать все: размещать свои и редактировать чужие события",
"selfRegNot_label" => "Уведомление про новые регистрации",
"selfRegNot_text" => "Send a notification email to the calendar email address when a self-registration takes place.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "'Remember me' cookie expiry days",
"cookieExp_text" => "Number of days before the cookie set by the \'Remember me\' option (during Log In) will expire.",
"view" => "просмотр",
"post_own" => 'размещать свои',
"post_all" => 'размещать все',
"manager" => 'менеджер',

//settings.php - view settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"evtTemplGen_label" => "Event template - General views",
"evtTemplGen_text" => "The event fields to be displayed in the various calendar views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"evtTemplUpc_label" => "Event template - Upcoming view",
"evtTemplUpc_text" => "The event fields to be displayed in the Upcoming Events views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"popBoxFields_label" => "Hover box event fields",
"popBoxFields_text" => "The event fields to be displayed in the hover box with event details in the various calendar views can be specified by means of a sequence of numbers. <br>If a number is specified in the sequence, the corresponding field will be displayed.<br>If no fields are specified at all, no hover box will be displayed.",
"templFields_text" => "Meaning of the numbers:<br>1: Venue field<br>2: Event category field<br>3: Description field<br>4: Extra field 1 (see below)<br>5: extra field 2 (see below)<br>6: Email notification data (only if a notification has been requested)<br>7: Date/time added/edited and the associated user(s).<br>The order of the numbers determine the order of the displayed fields.",
"popBoxShow_label" => "Hover box with event details",
"popBoxShow_text" => "If enabled, a box with event details will be displayed when hovering an event in the selected views. The event details will not be displayed if no hover box event fields (see above) have been specified.",
"yearStart_label" => "Начальный месяц при просмотре года",
"yearStart_text" => "Если указан начальный месяц (1 - 12), то в режиме просмотра года, календарь будет всегда начинаться именно с этого месяца. Номер года будет указываться тот, где начинается указанный месяц, будто с него начинается год (полезно, например, в школах, где началом учебного года является сентябрь).<br>Значение 0 имеет особое значение: начальный месяц основывается на текущей дате и текущая дата будет в первом ряду месяцев.",
"colsToShow_label" => "Колонок при просмотре года",
"colsToShow_text" => "Количество месяцев для отображения в каждом ряду при просмотре целого года.<br>Рекомендуется: 3 или 4.",
"rowsToShow_label" => "Рядов при просмотре года",
"rowsToShow_text" => "Количество рядов с 4-мя полными месяцами в режиме просмотра года.<br>Рекомендуется: 4, что дает вам 16 месяцев для просмотра.",
"weeksToShow_label" => "Недель при просмотре месяца",
"weeksToShow_text" => "Количество недель в режиме просмотра месяцев.<br>Рекомендуется: 10, что дает вам 2.5месяца для просмотра.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Рабочие дни в неделе",
"workWeekDays_text" => "Дни, которые будут отображаться в каждой неделе в режиме Рабочий Месяц и Рабочая Неделя.<br>Введите номера дней, которые должны быть видимы. Номера следующие:<br>1 = Понедельник<br>2 = Вторник<br>....<br>7 = Воскресенье<br>т.о. 12345 : Понедельник - Пятница",
"lookaheadDays_label" => "Просматривать вперед Х дней",
"lookaheadDays_text" => "Количество дней, при просмотре ближайших событий, Todo List и RSS каналов.",
"dwStartHour_label" => "Начальный час при просмотре дня/недели",
"dwStartHour_text" => "Время, в которое обычно начинаются события.<br>Настроив, например, на 6 утра, вы исключите лишнее использование площади экрана на тихое время с полуночи до 6 утра в режиме просмотра недели/дня.<br>The time picker, used to enter a time, will also start at this hour.",
"dwEndHour_label" => "End hour in Day/Week view",
"dwEndHour_text" => "Hour at which a normal day of events ends.<br>E.g., setting this value to 18 will avoid wasting space in Week/Day view for the quiet time between 18:00 and midnight.<br>The time picker, used to enter a time, will also end at this hour.",
"dwTimeSlot_label" => "Временной промежуток при просмотре дня/недели",
"dwTimeSlot_text" => "Временной слот в минутах при просмотре в режиме дня/недели<br>Это значение, совместно с начальным часом (см. выше), определяет количество рядов при просмотре в режиме дня/недели.",
"dwTsHeight_label" => "Высота слота времени",
"dwTsHeight_text" => "Высота временного слота в пикселях при просмотре в режиме дня/недели.",
"showLinkInMV_label" => "Показывать ссылки при просмотре месяца",
"showLinkInMV_text" => "Если активировано, то URL внутри описания к событию будут показываться как ссылки в режиме просмотра месяца.",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Перед каждыми одинарными кавычками в переводе элементов ......_text должна идти обратная косая (т.е. \')
"dateFormat_label" => "Формат даты события (дд мм гггг)",
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
"weekStart_label" => "Первый день недели",
"weekStart_text" => "Первый день недели.",
"weekNumber_label" => "Показывать номера недель",
"weekNumber_text" => "Отображение номеров недель в режиме просмотра года, месяца и недели может быть включено или выключено.",
"time_format_us" => "12 часов AM/PM",
"time_format_eu" => "24 часа",
"sunday" => "Воскресенье",
"monday" => "Понедельник",
"time_zones" => "Зоны времени",
"dd_mm_yyyy" => "дд-мм-гггг",
"mm_dd_yyyy" => "мм-дд-гггг",
"yyyy_mm_dd" => "гггг-мм-дд",

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
"cronSummary_label" => "Отправлять администратору результат работы cron",
"cronSummary_text" => "Отправлять отчет работы cron администратору календаря.<br>Включение функции полезно при следующем:<br>- cron активирован.",
"chgEmailList_label" => "Email адрес для отправки изменений",
"chgEmailList_text" => "Email адрес, на который будет периодически сбрасываться отчет с изменениями в календаре.<br>Адреса разделяются точкой с запятой (;).",
"chgNofDays_label" => "Просматривать изменения до X дней назад",
"chgNofDays_text" => "Количество дней назад, для проверки изменений в календаре.<br>Если количество дней равно 0, то отчеты отправляться не будут.",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 yesr will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Максимальное кол-во дней без входа",
"maxNoLogin_text" => "Если пользователь не произвел вход в свою учетную запись в течение определенного количества дней, то его/её учетная запись будет автоматчески удалена.<br>Если указано значение 0, то учетные записи удаляться не будут.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Possible views for the mini calendar are:<br>- Full Month<br>- Work Month *)<br>- Full Week<br>- Work Week *)<br>*) For work week days see on this page: Views - Work week days",
"miniCalPost_label" => "Разрешать создавать события из мини-календаря",
"miniCalPost_text" => "Относится толко к работе мини календаря!<br>Если активно, то пользователи могут:<br>- размещать новые события в мини календаре простым щелчком по верхней части ячейки дня. <br>- редактирование/удаление событий щелчком по квадрату события<br>Note: The access rights of the Public User will be applicable.",
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
"log_log_in" => "Войти",
"log_remember_me" => "Запомнить меня",
"log_register" => "Зарегистрироваться",
"log_change_my_data" => "Изменить мои данные",
"log_change" => "Изменить",
"log_un_or_em" => "Имя пользователя или Email",
"log_un" => "Имя пользователя",
"log_em" => "Email",
"log_pw" => "Пароль",
"log_new_un" => "Новое имя пользователя",
"log_new_em" => "Новый Email",
"log_new_pw" => "Новый пароль",
"log_pw_msg" => "Here are your log in details for calendar",
"log_pw_subject" => "Ваш %% пароль", //%% will be replaced by calendar name
"log_npw_subject" => "Ваш новый %% пароль", //%% will be replaced by calendar name
"log_npw_sent" => "Ваш новый пароль отправлен",
"log_registered" => "Регистрация успешна - ваш пароль отправлен по email",
"log_not_registered" => "Регистрация не удалась",
"log_un_exists" => "Такой пользователь уже существует",
"log_em_exists" => "Такой Email адрес уже существует",
"log_un_invalid" => "Неверное имя (мин. длина 2: A-Z, a-z, 0-9, and _-.) ",
"log_em_invalid" => "Неверный адрес почты",
"log_un_em_invalid" => "Неверное имя/email",
"log_un_em_pw_invalid" => "Неверные имя/email или пароль",
"log_no_un_em" => "Пожалуйста, введите ваши имя пользователя/email",
"log_no_un" => "Пожалуйста, введите имя пользователя",
"log_no_em" => "Пожалуйста, введите ваш email",
"log_no_pw" => "Пожалуйста, введите your пароль",
"log_no_rights" => "Отказано: у вас нет прав просмотра, свяжитесь с администратором",
"log_send_new_pw" => "Отправить новый пароль",
"log_if_changing" => "Только при изменении",
"log_no_new_data" => "Нет данных для изменений",
"log_invalid_new_un" => "Неверное имя пользователя (min length 2: A-Z, a-z, 0-9, and _-.) ",
"log_new_un_exists" => "Новое имя пользователя уже существует",
"log_invalid_new_em" => "Неправильный новый адрес email ",
"log_new_em_exists" => "Новый адрес email уже существует",
"log_ui_language" => "Язык интерфейса",
"log_new_reg" => "New user registration",
"log_date_time" => "Date / time",

//categories.php
"cat_list" => "Список категорий",
"cat_edit" => "Редактировать",
"cat_delete" => "Удалить",
"cat_add_new" => "Добавить новую категорию",
"cat_add" => "Добавить категорию",
"cat_edit_cat" => "Редактировать категорию",
"cat_name" => "Имя категории",
"cat_sequence" => "Последовательность",
"cat_in_menu" => "в меню",
"cat_text_color" => "Цвет текста",
"cat_background" => "Фон",
"cat_select_color" => "Выбрать цвет",
"cat_save" => "Обновить категорию",
"cat_added" => "Категория добавлена",
"cat_updated" => "Категория обновлена",
"cat_deleted" => "Категория удалена",
"cat_invalid_color" => "Неправильный формат цвета (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Категория не добавлена",
"cat_not_updated" => "Категория не обновлена",
"cat_not_deleted" => "Категория не удалена",
"cat_nr" => "#",
"cat_repeat" => "Повтор",
"cat_every_day" => "каждый day",
"cat_every_week" => "every неделю",
"cat_every_month" => "каждый месяц",
"cat_every_year" => "каждый год",
"cat_approve" => "Events need approval",
"cat_public" => "Публичная",
"cat_name_missing" => "Category name is missing",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Список пользователей",
"usr_id" => "User ID",
"usr_name" => "Имя",
"usr_email" => "Email",
"usr_password" => "Пароль",
"usr_rights" => "Права",
"usr_edit_user" => "Редактировать профиль пользователя",
"usr_add" => "Добавить пользователя",
"usr_edit" => "Редактировать",
"usr_delete" => "Удалить",
"usr_view" => "Просмотр",
"usr_post_own" => 'размещать свои',
"usr_post_all" => 'размещать все',
"usr_manager" => "Менеджер",
"usr_admin" => "Администратор",
"usr_login_0" => "Первый вход",
"usr_login_1" => "Последний вход",
"usr_login_cnt" => "Входов",
"usr_add_profile" => "Добавить профиль",
"usr_upd_profile" => "Обновить профиль",
"usr_not_found" => "Пользователь не найден",
"usr_if_changing_pw" => "Только при изменении пароля",
"usr_admin_rights" => "Функции администратора",
"usr_no_rights" => "Нет прав доступа",
"usr_view_calendar" => "Просмотр календаря",
"usr_post_events_own" => "Размещение/редактирование своих событий",
"usr_post_events_all" => "Размещение/редактирование всех событий",
"usr_manager_rights" => "Размещение/редактирование + mенеджер functions",
"usr_pw_not_updated" => "Пароль не обновлен",
"usr_added" => "Пользователь добавлен",
"usr_updated" => "Профиль пользователя обновлен",
"usr_deleted" => "Пользователь удален",
"usr_not_added" => "Пользователь не добавлен",
"usr_not_updated" => "Пользователь не обновлен",
"usr_not_deleted" => "Пользователь не удален",
"usr_cred_required" => "Необходимы имя пользователя, email и пароль",
"usr_uname_exists" => "Имя пользователя уже существует",
"usr_email_exists" => "Адрес email уже существует",
"usr_un_invalid" => "Неправильное имя пользователя (min length 2: A-Z, a-z, 0-9, and _-.) ",
"usr_em_invalid" => "Неправильный адрес email",
"usr_cant_delete_yourself" => "Вы не можете удалить сами себя",
"usr_background" => "Цвет фона",
"usr_select_color" => "Выбрать цвет",
"usr_invalid_color" => "Неправильный формат цвета (#XXXXXX where X = HEX-value)",

//database.php
"mdb_dbm_functions" => "Функции базы данных",
"mdb_noshow_tables" => "Не могу получить таблицу(-цы)",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Сжать базу данных",
"mdb_compact_table" => "Сжать таблицы",
"mdb_compact_error" => "Ошибка",
"mdb_compact_done" => "Выполнено",
"mdb_purge_done" => "Удаленные события events окончательно удалены",
"mdb_repair" => "Проверить и исправить базу данных",
"mdb_check_table" => "Проверить таблицу",
"mdb_ok" => "OK",
"mdb_nok" => "Не OK",
"mdb_nok_repair" => "Что-то не так, запущено восстановление",
"mdb_backup" => "Резервирование базы данных",
"mdb_backup_table" => "Резервирование таблицы",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Выполнено",
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
"mdb_file_saved" => "Резервный файл сохранен на сервере.",
"mdb_file_name" => "Имя файла:",
"mdb_start" => "Старт",
"mdb_no_function_checked" => "Функция(-ции) не выделены",
"mdb_write_error" => "Ошибка записи резервного файла.<br>Проверьте разрешения у папки /'files/' ",

//import/export.php
"iex_file" => "Выделенный файл",
"iex_file_name" => "Имя файла iCal",
"iex_file_description" => "Описание файла iCal",
"iex_filters" => "Фильтры событий",
"iex_upload_ics" => "Загрузить файл iCal",
"iex_create_ics" => "Создать файл iCal",
"iex_upload_csv" => "Загрузить файл CSV",
"iex_upload_file" => "Загрузить файл",
"iex_create_file" => "Создать файл",
"iex_download_file" => "Скачать файл",
"iex_fields_sep_by" => "Поля разделены символом",
"iex_birthday_cat_id" => "Birthday category ID",
"iex_default_cat_id" => " ID категории по умолчанию",
"iex_if_no_cat" => "если категории не найдены",
"iex_import_events_from_date" => "Импорт событий, начинающихся с:",
"iex_see_insert" => "см. инструкцию справа",
"iex_no_file_name" => "Отсутствует имя файла",
"iex_inval_field_sep" => "разделитель полей неправильный или отсутствует",
"iex_no_begin_tag" => "неправильный файл iCal (нет начального тега)",
"iex_date_format" => "Формат даты событий",
"iex_time_format" => "Формат времени событий",
"iex_number_of_errors" => "Ошибок в списке",
"iex_bgnd_highlighted" => "фон подсвечен",
"iex_verify_event_list" => "Проверьте список событий, исправьте ошибке и клацайте",
"iex_add_events" => "Добавить события в базу данных",
"iex_select_ignore_birthday" => "Select Ignore and Birthday check boxes as required",
"iex_select_ignore" => "Select Ignore check box to ignore event",
"iex_title" => "Заголовок",
"iex_venue" => "Место",
"iex_owner" => "Владелец",
"iex_category" => "Категория",
"iex_date" => "Дата",
"iex_end_date" => "Конечная дата",
"iex_start_time" => "Время начала",
"iex_end_time" => "Время окончания",
"iex_description" => "Описание",
"iex_repeat" => "Repeat",
"iex_birthday" => "День Рождения",
"iex_ignore" => "Удалить",
"iex_events_added" => "событий добавлено",
"iex_events_dropped" => "событий пропущено (уже существуют)",
"iex_db_error" => "Ошибка базы данных",
"iex_ics_file_error_on_line" => "Ошибка файла iCal в строке ",
"iex_between_dates" => "Происходит в промежутке",
"iex_changed_between" => "Добавлен/изменен в промежутке",
"iex_select_date" => "Выбрать дату",
"iex_select_start_date" => "Выбрать дату начала",
"iex_select_end_date" => "Выбрать дату окончания",
"iex_all_cats" => "все категории",
"iex_all_users" => "все пользователи",
"iex_no_events_found" => "Ниодного события не добавлено",
"iex_file_created" => "Файл создан",
"iex_write error" => "Ошибка записи файла экспорта<br>Проверьте права папки 'files/' ",

//lcalcron.php
"cro_sum_header" => "CRON JOB SUMMARY",
"cro_sum_trailer" => "END OF SUMMARY",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL REMINDERS",
"cro_not_sent_to" => "Reminders sent to",
"cro_no_not_dates_due" => "No notification dates due",
"cro_all_day" => "All day",
"cro_mailer" => "mailer",
"cro_subject" => "Subject",
"cro_event_due_in" => "The following event is due in",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "Due in",
"cro_due_today" => "Due today",
"cro_days" => "day(s)",
"cro_date_time" => "Date / time",
"cro_title" => "Title",
"cro_venue" => "Venue",
"cro_description" => "Description",
"cro_category" => "Category",
"cro_status" => "Status",
"cro_open_calendar" => "Open calendar",

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
"<h4>Инструкции по управлению БД</h4>
<p>На этой странице могут быть выбраны следующие функции:</p>
<h5>Проверить и исправить БД</h5>
<p>Эта функция будет сканироваь таблицы календаря и проверять их на наличие ошибок
Если ошибка будет найдена, то она будет исправлена, если это будет возможно.</p>
<p>Если при просмотре календаря не возникает никаких проблем, то достаточно запускать эту функцию один раз в год
</p>
<h5>Сжать БД</h5>
<p>Когда пользователь удаляет событие, событие помечается как 'удаленное', но не будет убрано из БД.
Функция полностью удаляет события, удаленные более 30 дней назад и освобождает место на диске, 
занимаемое этими событиями.</p>
<h5>Резервирование БД</h5>
<p>Эта функция создаст резервный файл полной БД календаря (структура таблиц и их содержание )
 в формате '.sql' . Резервный файл будет сохранен в папке
<strong>files/</strong> с именем файла file name: 
<kbd>cal-backup-ггггммдд-ччммсс.sql</kbd> (где 'ггггммдд' = год, месяц, и 
день, а ччммсс = час, минуты и секунды.</p>
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
"<h4>Инструкции по импорту CSV</h4>
<p>Эта форма используется для импорта в LuxCal текстовых файлов <strong>Comma Separated Values (CSV)</strong> 
с данными.</p>
<p>Последовательность колонок в файле CSV должна быть следующей: заголовок, место, id категории (см. ниже), 
дата, конечная дата, время начала, время окончания и описание. Первый ряд файла 
CSV, используемый для заголовков коонок, игнорируется.</p>
<h5>Файлы примеров CSV</h5>
<p>Файлы примеров CSV (расширение файла .cvs) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>
<h5>Формат даты и времени</h5>
<p>Выбранные форматы даты и времени событий должны соответствовать форматам в закачиваемом файле CSV.</p>
<h5>Таблицы категорий</h5>
<p>Календарь использует ID-номера для определения категорий. ID категорий в файле CSV 
должны соответствовать категорям в календаре или должны быть пустыми.</p>
<p>Если при следующем шаге вы хотите обозначить события как 'день рождения', то <strong>Birthday 
category ID</strong> должно соответствовать ID категории из списка ниже.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>В вашем календаре сейчас назначены следующие категории:</p>",

"xpl_import_ical" =>
"<h4>Инструкции по импорту iCalendar</h4>
<p>Эта форма используется для импорта в LuxCal текстовых файлов <strong>iCalendar</strong> 
с данными. </p>
<p>Содержимое файла должно соответствовать [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>стандарту RFC5545</a></u>] Инженерного совета Интернет (Internet Engineering Task Force).</p>
<p>Будут испортированы только события; другие компоненты iCal, такие как: To-Do (задачи), Jounal (журнал), Free / 
Busy (свободен / занят), Time zone (временная зона) и Alarm (будильник), будут игнорированы.</p>
<h5>Файлы примеров iCal</h5>
<p>Файлы примеров iCalendar (расширение файла .ics) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>
<h5>Таблица категорий</h5>
<p>Календарь использует ID-номера для определения категорий. ID категорий в файле CSV 
должны соответствовать категорям в календаре или должны быть пустыми.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>В вашем календаре сейчас назначены следующие категории:</p>",

"xpl_export_ical" =>
"<h4>Инструкции по экспорту iCalendar</h4>
<p>Эта форма используется для извлечения и экспортирования событий из LuxCal в формат <strong>iCalendar</strong>.</p>
<p><b>Имя файла iCal</b> (без расширения) не является обязательным. Созданный файл будет сохранен в в папке 'files/' 
на сервере с указанным именем, или с именем of the calendar. Расширение файла будет <b>.ics</b>.
Существующие файлы в папке \"files/\" на сервере будет перезаписаны новым файлом.</p>
<p><b>Описание файла iCal</b> (т.е. 'Встречи 2013') не является обязательным. Если это поле не пустое, 
то введенный текст будет добавлен в заголовок экспортируемого файла iCal.</p>
<p><b>Фильтры событий</b>. События могут быть отфильтованы по:</p>
<ul>
<li>владельцу события</li>
<li>категории события</li>
<li>начальной дате события</li>
<li>дате создания/изменения события</li>
</ul>
<p>Каждый из фильтров не является обязательным. Пустое поле означает: без ограничений</p>
<br>
<p>Содержимое файла с извлеченными событиями будет соответствовать [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>стандарту RFC5545</a></u>] Инженерного совета Интернет (Internet Engineering Task Force).</p>
<p>Когда экспортируемый файл iCal будет <b>скачиваться</b>, к имени скачиваемого файла будут добавлены дата и время.</p>
<h5>Файлы примеров iCal</h5>
<p>Файлы примеров iCalendar (расширение файла .ics) могут быть найдены в папке 'files/' 
 где находится LuxCal.</p>"
);
?>
