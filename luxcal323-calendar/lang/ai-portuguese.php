<?php
/*
= LuxCal event calendar admin interface language file =

Traduzido para Português-Portugal (Rodrigo Pedro) - Contacto: rodrigocaetanopedro@gmail.com

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Nenhum",
"all" => "All",
"back" => "Voltar",
"close" => "Close",
"always" => "always",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Year",
"month" => "Month",
"week_day" => "Week/Day",
"upcoming" => "Upcoming",

//settings.php - fieldset headers + general
"set_general_settings" => "Calendário",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Events",
"set_user_settings" => "User Accounts",
"set_email_settings" => "Email Settings",
"set_perfun_settings" => "Periodic Functions<br>(only relevant if cron job defined)",
"set_minical_settings" => "Mini Calendar (only relevant if used)",
"set_sidebar_settings" => "Stand-Alone Sidebar<br>(only relevant if in use)",
"set_view_settings" => "Vers",
"set_dt_settings" => "Datas/Horas",
"set_save_settings" => "Guardar Definições",
"set_missing_invalid" => "missing or invalid settings (background highlighted)",
"set_settings_saved" => "Definições do calendário guardadas",
"set_save_error" => "Database error - Saving calendar settings failed",
"hover_for_details" => "Passe com o rato sobre as descrições para mais detalhes",
"default" => "default",
"enabled" => "Activado",
"disabled" => "Desactivado",
"no" => "não",
"yes" => "sim",
"or" => "ou",
"minutes" => "minutos",
"pixels" => "pixels",
"no_way" => "Não está autorizado a realizar esta operação",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Título do calendário",
"calendarTitle_text" => "Exibido na barra superior do calendário e usado nas notificações por e-mail.",
"calendarUrl_label" => "Hiperligação do calendário",
"calendarUrl_text" => "Endereço web do calendário.",
"calendarEmail_label" => "E-mail do calendário",
"calendarEmail_text" => "O endereço de e-mail do calendário usado nas notificaçõs por e-mail.<br>Formato: \'e-mail\' ou \'nome&#8249;e-mail&#8250;\'. \'nome\' pode ser o nome da agenda.",
"backLinkUrl_label" => "Link to parent page",
"backLinkUrl_text" => "URL of parent page. If specified, a Back button will be displayed on the left side of the Navigation Bar which links to this URL.<br>For instance to link back to the parent page from which the calendar was started.",
"timeZone_label" => "Fuso Horário",
"timeZone_text" => "Fuso horário, usado para calcular a hora corrente.",
"see" => "Ver",
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
"defaultView_label" => "Vista por defeito",
"defaultView_text" => "As vistas possíveis no início do calendário são:<br>- Ano<br>- Mês<br>- Semana<br>- Dia<br>- Próximos<br>- Alterações<br>Escolha recomendada: Mês ou Próximos.",
"language_label" => "Idioma por defeito",
"language_text" => "Os ficheiros ui-{idioma}.php, ai-{idioma}.php, ug-{idioma}.php e ug-layout.png devem estar presentes na pasta lang/. {idioma} = selecionar o idioma da interface. Os nomes dos ficheiros tem de ser em minúsculas!",

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
"selfReg_label" => "Registo",
"selfReg_text" => "Permitir os utilizadores registarem-se e ter acesso ao calendário.",
"selfRegPrivs_label" => "Direito de acesso para os utilizadores registados",
"selfRegPrivs_text" => "Direito de acesso para os utilizadores registados.<br>- Visualizar: Apenas visualiza os eventos e o calendário <br>- Próprio: colocar eventos, modificar e eliminar os próprios eventos<br>- Todos: colocar eventos, modificar e eliminar os próprios eventos e dos outros utilizadores",
"selfRegNot_label" => "Self registration notification",
"selfRegNot_text" => "Send a notification email to the calendar email address when a self-registration takes place.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "'Remember me' cookie expiry days",
"cookieExp_text" => "Number of days before the cookie set by the \'Remember me\' option (during Log In) will expire.",
"view" => "Visualizar",
"post_own" => 'Próprio',
"post_all" => 'Todos',
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
"colsToShow_label" => "Colunas visíveis na vista Anual",
"colsToShow_text" => "Número de meses a exibir em cada linha na vista Ano.<br>Recomendado: 3 ou 4.",
"rowsToShow_label" => "Linhas visíveis na vista Anual",
"rowsToShow_text" => "Número de linhas por cada quatro meses a exibir na vista Anual.<br>Recomendado: 4, o que dá 16 meses para percorrer.",
"weeksToShow_label" => "Semanas visíveis na vista Mensal",
"weeksToShow_text" => "Número de semanas a exibir na vista Mensal.<br>Recomendado: 10, o que dá 2.5 meses para percorrer.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Work week days",
"workWeekDays_text" => "Days to be shown in each week in Work Month view and Work Week view.<br>Enter the number of each day that should be visible. Valid day numbers:<br>1 = Monday<br>2 = Tuesday<br>....<br>7 = Sunday<br>e.g. 12345 : Monday - Friday",
"lookaheadDays_label" => "Dias a exibir",
"lookaheadDays_text" => "Número de dias para exibir após um evento na vista Próximos Eventos, in the Todo List and in the RSS feeds.",
"dwStartHour_label" => "Data de início nas vistas Diária/Semanal",
"dwStartHour_text" => "Hora a que os eventos inicião.<br>Definir este valor como 6 (por exemplo), vai evitar o desperdício de espaço na vista Semanal/Diária. As horas entre as 00:00 e as 06:00, não serão exibidas.<br>The time picker, used to enter a time, will also start at this hour.",
"dwEndHour_label" => "End hour in Day/Week view",
"dwEndHour_text" => "Hour at which a normal day of events ends.<br>E.g., setting this value to 18 will avoid wasting space in Week/Day view for the quiet time between 18:00 and midnight.<br>The time picker, used to enter a time, will also end at this hour.",
"dwTimeSlot_label" => "Time slot in Day/Week view",
"dwTimeSlot_text" => "Day/Week view time slot in number of minutes.<br>This value, together with the Start hour and End hour (see above) will determine the number of rows in Day/Week view.",
"dwTsHeight_label" => "Time slot height",
"dwTsHeight_text" => "Day/Week view time slot display height in number of pixels.",
"showLinkInMV_label" => "Mostrar hiperligações na vista 'Mensal'",
"showLinkInMV_text" => "Se ligada, na descrição dos eventos irá ser exibido as hiperligações na vista \'Mensal\'",
"monthInDCell_label" => "Month in each day cell",
"monthInDCell_text" => "Display in month view the 3-letter month name for each day",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Formato da data (dd mm yyyy)",
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
"weekStart_label" => "Primeiro dia da semana",
"weekStart_text" => "Primeiro dia da semana.",
"weekNumber_label" => "Mostrar o número das semanas",
"weekNumber_text" => "O número de semanas, nas vistas \'Anual\', \'Mensal\', \'Semanal\', podem ser exibidas ou não",
"time_format_us" => "12-horas AM/PM",
"time_format_eu" => "24-horas",
"sunday" => "Domingo",
"monday" => "Segunda-Feira",
"time_zones" => "Fuso Horário",
"dd_mm_yyyy" => "dd-mm-aaaa",
"mm_dd_yyyy" => "mm-dd-aaaa",
"yyyy_mm_dd" => "aaaa-mm-dd",

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
"chgEmailList_label" => "E-mail destinatário para a lista de modificações",
"chgEmailList_text" => "Periodiamente o endereço do e-mail introduzido recebe um e-mail com as modificações do calendário.<br>Os endereços de e-mail são separados por ponto e vírgula.<br>Usado pelo script sendchg.php",
"chgNofDays_label" => "Dias anteriores à modificação",
"chgNofDays_text" => "Número de dias anteriores à modificação do calendário.<br>Usado pelo script sendchg.php",
"icsExport_label" => "Daily export of iCal events",
"icsExport_text" => "If enabled: All events in the date range -1 week until +1 yesr will be exported in iCalendar format in a .ics file in the \'files\' folder.<br>The file name will be the calendar name with blanks replaced by underscores. Old files will be overwritten by new files.",
"eventExp_label" => "Event expiry days",
"eventExp_text" => "Number of days after the event due date when the event expires and will be automatically deleted.<br>If 0 or if no cron job is running, no events will be automatically deleted.",
"maxNoLogin_label" => "Nº máximo dos dias sem iniciar a sessão",
"maxNoLogin_text" => "Se o utilizador não iniciar a sessão durante oum número de dias, a sua conta irá ser automáticamente eliminada.<br>Se este valor for 0, a conta dos utilizadores não são eliminadas.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini calendar view",
"miniCalView_text" => "Possible views for the mini calendar are:<br>- Full Month<br>- Work Month *)<br>- Full Week<br>- Work Week *)<br>*) For work week days see on this page: Views - Work week days",
"miniCalPost_label" => "Colocar eventos no mini calendário",
"miniCalPost_text" => "Revelante se o mini calendário é usado!<br>Se activado, o utilizador pode:<br>- colocar novos eventos no mini calendário, clicando no dia do calendário disponível na barra superior<br>- editar/eliminar eventos clicando no evento<br>Note: The access rights of the Public User will be applicable.",
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
"log_log_in" => "Iniciar Sessão",
"log_remember_me" => "Remember me",
"log_register" => "Registar",
"log_change_my_data" => "Alterar os meus dados",
"log_change" => "Alterar",
"log_un_or_em" => "Utilizador ou E-mail",
"log_un" => "Utilizador",
"log_em" => "E-mail",
"log_pw" => "Senha",
"log_new_un" => "Novo Utilizador",
"log_new_em" => "Novo E-mail",
"log_new_pw" => "Nova Senha",
"log_pw_msg" => "Aqui está your log in details para iniciar a sessão",
"log_pw_subject" => "Sua %% senha", //%% will be replaced by calendar name
"log_npw_subject" => "Sua nova %% senha", //%% will be replaced by calendar name
"log_npw_sent" => "Sua nova senha foi enviada",
"log_registered" => "Registo concluído com sucesso - A sua senha foi envia por e-mail",
"log_not_registered" => "Registo falhou",
"log_un_exists" => "Nome de utilizador já existe",
"log_em_exists" => "Endereço de e-mail já existe",
"log_un_invalid" => "Nome de utilizador inválido (Tamanho mín.: 2 Carateres aceites: A-Z, a-z, 0-9, e \"_\" \"-\" .) ",
"log_em_invalid" => "Endereço de e-mail inválido",
"log_un_em_invalid" => "O nome de utilizador/e-mail é inválido",
"log_un_em_pw_invalid" => "O nome de utilizador/e-mail ou a senha são inválidos",
"log_no_un_em" => "Introduza o nome de utilizador/e-mail",
"log_no_un" => "Introduza o nome de utilizador",
"log_no_em" => "Introduza o e-mail",
"log_no_pw" => "Introduza a senha",
"log_no_rights" => "Login rejected: you have no view rights - Contact the administrator",//
"log_send_new_pw" => "Enviar nova senha",
"log_if_changing" => "Apenas se alterar",
"log_no_new_data" => "Não existem dados para mudar",
"log_invalid_new_un" => "Novo nome de utilizador inválido (Tamanho mín.: 2 Carateres aceites: A-Z, a-z, 0-9, e \"_\" \"-\" .) ",
"log_new_un_exists" => "Novo nome de utilizador já existe",
"log_invalid_new_em" => "Novo endereço de e-mail é inválido",
"log_new_em_exists" => "Novo endereço de e-mail já existe",
"log_ui_language" => "Idima do utilizador",
"log_new_reg" => "New user registration",
"log_date_time" => "Date / time",

//categories.php
"cat_list" => "Lista de Categorias",
"cat_edit" => "Editar",
"cat_delete" => "Eliminar",
"cat_add_new" => "Adiconar Nova Categoria",
"cat_add" => "Adicionar Categoria",
"cat_edit_cat" => "Editar Categoria",
"cat_name" => "Nome da Categoria",
"cat_sequence" => "Sequência",
"cat_in_menu" => "no menu",
"cat_text_color" => "Cor do Texto",
"cat_background" => "Fundo",
"cat_select_color" => "Selecionar Cor",
"cat_save" => "Actualizar Categoria",
"cat_added" => "Categoria Adicionada",
"cat_updated" => "Categoria Actualizada",
"cat_deleted" => "Categoria Eliminada",
"cat_invalid_color" => "Formato de cor inválido (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Categoria não Adicionada",
"cat_not_updated" => "Categoria não Actualizada",
"cat_not_deleted" => "Categoria não Eliminada",
"cat_nr" => "#",
"cat_repeat" => "Repetir",
"cat_every_day" => "todos os dias",
"cat_every_week" => "todas as semanas",
"cat_every_month" => "todos os meses",
"cat_every_year" => "todos os anos",
"cat_approve" => "Events need approval",
"cat_public" => "Público",
"cat_check_mark" => "Check mark",
"cat_label" => "label",
"cat_mark" => "mark",
"cat_name_missing" => "Category name is missing",
"cat_mark_label_missing" => "Check mark/label is missing",

//users.php
"usr_list_of_users" => "Lista de Utilizadores",
"usr_id" => "User ID",
"usr_name" => "Nome",
"usr_email" => "E-mail",
"usr_password" => "Senha",
"usr_rights" => "Privilégios",
"usr_edit_user" => "Editar perfil do utilizador",
"usr_add" => "Adicionar utilizador",
"usr_edit" => "Editar",
"usr_delete" => "Eliminar",
"usr_view" => "Vista",
"usr_post_own" => "post own",
"usr_post_all" => "post all",
"usr_manager" => "post/manager",
"usr_admin" => "Administrador",
"usr_login_0" => "Primeira Entrada",
"usr_login_1" => "Última Entrada",
"usr_login_cnt" => "Nº Entradas",
"usr_add_profile" => "Adicionar Utilizador",
"usr_upd_profile" => "Perfil Atualizado",
"usr_not_found" => "Utilizador não encontrado",
"usr_if_changing_pw" => "Apenas se mudar a senha",
"usr_admin_rights" => "Funções de administrador",
"usr_no_rights" => "Nenhum Privilégio de acesso",
"usr_view_calendar" => "Visualizar",
"usr_post_events_own" => "Post/editar próprio",
"usr_post_events_all" => "Post/editar todos",
"usr_manager_rights" => "Post/editar + manager rights",
"usr_pw_not_updated" => "Senha não atualizada",
"usr_added" => "Utilizador adicionado",
"usr_updated" => "Perfil do utilizador atualizado",
"usr_deleted" => "Utilizador eliminado",
"usr_not_added" => "Utilizador não adicionado",
"usr_not_updated" => "Utilizador não atualizado",
"usr_not_deleted" => "Utilizador não eliminado",
"usr_cred_required" => "Utilizador, E-mail e Senha são necessários",
"usr_uname_exists" => "Utilizador já existe",
"usr_email_exists" => "Endereço de e-mail já existe",
"usr_un_invalid" => "Nome de utilizador inválido (Tamanho mín.: 2 Carateres aceites: A-Z, a-z, 0-9, e \"_\" \"-\" .) ",
"usr_em_invalid" => "Endereço de e-mail inválido",
"usr_cant_delete_yourself" => "Não pode eliminar-se a si próprio",
"usr_background" => "Background color",
"usr_select_color" => "Select Color",
"usr_invalid_color" => "Color format invalid (#XXXXXX where X = HEX-value)",

//database.php
"mdb_dbm_functions" => "Funções da base de dados",
"mdb_noshow_tables" => "Não é possível obter as tabelas",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Compactar base de dados",
"mdb_compact_table" => "Compactar tabela",
"mdb_compact_error" => "Erro",
"mdb_compact_done" => "Concluído",
"mdb_purge_done" => "Eliminar eventos definitivamente",
"mdb_repair" => "Verificar e reparar base de dados",
"mdb_check_table" => "Verificar tabela",
"mdb_ok" => "OK",
"mdb_nok" => "Not OK",
"mdb_nok_repair" => "Not OK, reparar",
"mdb_backup" => "Cópia de Segurança da base de dados",
"mdb_backup_table" => "Cópia de Segurança da tabela",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Concluído",
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
"mdb_file_saved" => "Cópia de Segurança guardada.",
"mdb_file_name" => "Nome do Ficheiro:",
"mdb_start" => "Iniciar",
"mdb_no_function_checked" => "Selecione uma ou mais funções",
"mdb_write_error" => "Writing backup file failed<br>Check permissions of 'files/' directory",

//import/export.php
"iex_file" => "Selecionar ficheiro",
"iex_file_name" => "iCal file name",
"iex_file_description" => "Descrição do ficheiro iCal",
"iex_filters" => "Event Filters",
"iex_upload_ics" => "Enviar ficheiro iCal",
"iex_create_ics" => "Criar ficheiro iCal",
"iex_upload_csv" => "Enviar ficheiro CSV",
"iex_upload_file" => "Enviar ficheiro",
"iex_create_file" => "Criar ficheiro",
"iex_download_file" => "Descarregar ficheiro",
"iex_fields_sep_by" => "Campos separados por",
"iex_birthday_cat_id" => "ID da categoria por defeito",
"iex_default_cat_id" => "ID da categoria por defeito",
"iex_if_no_cat" => "se a categoria não for encontrada",
"iex_import_events_from_date" => "Importar os eventos que ocorram de",
"iex_see_insert" => "ver as instruções à direita",
"iex_no_file_name" => "Falta o nome do ficheiro",
"iex_inval_field_sep" => "separador inválido ou não encontrado",
"iex_no_begin_tag" => "ficheiro iCal inválido (falta a tag BEGIN)",
"iex_date_format" => "Formato da data (Evento)",
"iex_time_format" => "Formato do tempo (Evento)",
"iex_number_of_errors" => "Número de erros na lista",
"iex_bgnd_highlighted" => "fundo destacado",
"iex_verify_event_list" => "Verifique a lista de Eventos, corrija os erros e clique",
"iex_add_events" => "Adicionar Eventos à Base de Dados",
"iex_select_ignore_birthday" => "Selecione as caixas aniversário e Eliminar se são necessárias",
"iex_select_ignore" => "Selecione a caixa Eliminar para ignorar o evento",
"iex_title" => "Título",
"iex_venue" => "Local",
"iex_owner" => "Owner",
"iex_category" => "Categoria",
"iex_date" => "Data",
"iex_end_date" => "Data final",
"iex_start_time" => "Hora inicial",
"iex_end_time" => "Hora final",
"iex_description" => "Descrição",
"iex_repeat" => "Repeat",
"iex_birthday" => "Aniversário",
"iex_ignore" => "Eliminar",
"iex_events_added" => "eventos adicionados",
"iex_events_dropped" => "eventos eliminados (já existem)",
"iex_db_error" => "Erro da base de dados",
"iex_ics_file_error_on_line" => "erro do ficheiro iCal na linha",
"iex_between_dates" => "Occorre entre",
"iex_changed_between" => "Adicionado/Modificado entre",
"iex_select_date" => "Selecionar data",
"iex_select_start_date" => "Select start date",
"iex_select_end_date" => "Select end date",
"iex_all_cats" => "todas as categorias",
"iex_all_users" => "todas as users",
"iex_no_events_found" => "Eventos não encontrados",
"iex_file_created" => "Ficheiro criado",
"iex_write error" => "Writing export file failed<br>Check permissions of 'files/' directory",

//lcalcron.php
"cro_sum_header" => "CRON JOB SUMMARY",
"cro_sum_trailer" => "END OF SUMMARY",
"cro_evc_sum_title" => "EVENTS EXPIRED",
"cro_nr_evts_deleted" => "Number of events deleted",
"cro_not_sum_title" => "EMAIL REMINDERS",
"cro_not_sent_to" => "Reminders sent to",
"cro_no_not_dates_due" => "No notification dates due",
"cro_all_day" => "Todo o dia",
"cro_mailer" => "remetente",
"cro_subject" => "Tema",
"cro_event_due_in" => "O seguinte evento deve-se",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "Devido a",
"cro_due_today" => "Due today",
"cro_days" => "dia(s)",
"cro_date_time" => "Data / hora",
"cro_title" => "Título",
"cro_venue" => "Local",
"cro_description" => "Descrição",
"cro_category" => "Categoria",
"cro_status" => "Status",
"cro_open_calendar" => "Abre o calendário",
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
"<h4>Instruções para Gerir Base de Dados</h4>
<p>Nesta página, as seguintes funções podem ser selecionadas:</p>
<h5>Selecionar e reparar base de dados</h5>
<p>Esta função irá verificar no base de dados do calendário e verificar problemas. Problemas serão reparados.</p>
<p>Se o calendário não apresenta nenhum problema, execute esta função uma vez por ano</p>
<h5>Compactar Base de Dados</h5>
<p>Quando um utilizador elimina um evento, o evento será marcado como 'removido', mas
não é eliminado da base de dados. A função 'Compactar Base de Dados' irá remover permanentemente
os eventos com mais de 30 dias da base de dados e desocupar o espaço utilizado por esses eventos.</p>
<h5>Cópia de Segurança da Base de Dados</h5>
<p>Esta função irá criar uma cópia de segurança de toda a base de dados do calendário 
no formato .sql. A cópia de segurança irá ser guardada na pasta dos
<strong>ficheiros/</strong> com o nome: <kbd>cal-backup-aaaaammdd-hhmmss.sql</kbd> (onde 'aaaammdd' = ano, mês, e 
dia, e hhmmss = horas, minutos and segundos).</p>
<p>Este ficheiro de segurança pode ser usado para re-criar a estrutura das tabelas e
o seu conteúdo, via the restore function described below or by using for instance the 
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
"<h4>Instruções para importar CSV</h4>
<p>Este formulário é usado para importar ficheiros de texto <strong>Comma Separated Values (CSV)</strong> com os eventos inseridos no LuxCal Calendar.</p>
<p>A ordem das colunas no ficheiro CSV é o seguinte: título, local, ID categoria (ver em baixo), data inicial, data final, hora inicial, hora final e a descrição. A primeira linha do ficheiro CSV, é usada para o cabeçalho.</p>
<h5>Exmplo do ficheiro CSV</h5>
<p>Exemplo do ficheiro CSV (extensão .cvs) pode ser encontrado na pasta 'files/' 
do calendário LuxCal.</p>
<h5>Formato da Hora e Data</h5>
<p>O formato da data e da hora do evento selecionado à esquerda deve coincidir com o
formato das datas e horas no arquivo CSV carregado.</p>
<h5>Tabela das Categorias</h5>
<p>A agenda utiliza números de identificação para especificar as categorias. As identificações das categoria no
ficheiro CSV devem corresponder às categorias utilizadas no calendário.</p>
<p>Se o próximo passo que pretende é destinar eventos 'aniversário', a <strong>Categoria Aniversário</strong> deve corresponder com o número de indentificação da lista a baixo.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>As categorias definidas no calendário, são:</p>",

"xpl_import_ical" =>
"<h4>Instruções para importar iCalendar</h4>
<p>Este formulário é usado para importar um ficheiro <strong>iCalendar</strong> com os eventos inseridos no 
LuxCal Calendar.</p>
<p>O conteúdo do ficheiro vão ao encontro das [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>normas RFC5545</a></u>] da Internet Engineering Task Force.</p>
<p>Os eventos que são importados: outro componentes iCal, como: Para-Fazer, Diário, Livre/Ocupado,
Fuso horário e alarme, serão ignirados.</p>
<h5>Exemplo do ficheiro iCal</h5>
<p>Exemplo de um ficheiro iCalendar (extensão .ics) pode ser encontrado na pasta 'files/' 
do calendário LuxCal.</p>
<h5>Tabela das Categorias</h5>
<p>A agenda utiliza números de identificação para especificar as categorias. As identificações das categoria no
ficheiro iCalendar devem corresponder às categorias utilizadas no calendário.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>As categorias definidas no calendário, são:</p>",

"xpl_export_ical" =>
"<h4>Instruções para exportar iCalendar</h4>
<p>Este formulário é usado para extrair e exportar eventos <strong>iCalendar</strong> do 
LuxCal Calendar.</p>
<p>The <b>iCal file name</b> (without extension) is optional. Created files will 
be stored in the \"files/\" directory on the server with the specified file name, 
or otherwise with the name of the calendar. The file extension will be <b>.ics</b>.
Existing files in the \"files/\" directory on the server with the same name will 
be overwritten by the new file.</p>
<p>A <b>descrição do ficheiro iCal</b> (Ex. 'Reuniões Julho 2010') é opcional. Se for aceite, 
ele será adicionado ao cabeçalho do ficheiro iCal exportado.</p>
<p><b>Filtro</b>:Os eventos a serem extraídos podem ser filtrados por:</p>
<ul>
<li>event owner</li>
<li>Categoria de evento</li>
<li>Data iníco do evento</li>
<li>Adicionar evento/última modificação do evento</li>
</ul>
<p>Cada filtro é opcional. Uma data em branco significa: sem limite</p>
<br>
<p>O conteúdo do ficheiro vão ao encontro das [<u><a href='http://tools.ietf.org/html/rfc5545'
target='_blank'>normas RFC5545</a></u>] da Internet Engineering Task Force.</p>
<p>When <b>downloading</b> the exported iCal file, the date and time will be 
added to the name of the downloaded file.</p>
<h5>Exemplo do ficheiro iCal</h5>
<p>Exemplo de um ficheiro iCalendar (extensão .ics) pode ser encontrado na pasta 'files/' 
do calendário LuxCal.</p>",
);
?>
