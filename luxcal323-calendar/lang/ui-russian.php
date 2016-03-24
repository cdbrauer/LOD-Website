<?php
/*
= LuxCal event calendar user interface language file =

Russian translation: iluhis.com

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","ru");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь");
$months_m = array("Янв","Февр","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек");
$wkDays = array("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье");
$wkDays_l = array("Вос","Пон","Вто","Сре","Чет","Пят","Суб","Вос");
$wkDays_m = array("Вс","Пн","Вт","Ср","Чт","Пт","Сб","Вс");
$wkDays_s = array("В","П","В","С","Ч","П","С","В");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Отправить",
"none" => "Нет.",
"back" => "Назад",
"by" => "by",
"of" => "",
"done" => "Done",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Приближающиеся события",
"title_event" => "Событие",
"title_add_event" => "Добавить Событие",
"title_check_event" => "Check Event",
"title_search" => "Текстовый поиск",
"title_user_guide" => "Руководство по календарю",
"title_settings" => "Настройка календаря",
"title_edit_cats" => "Редактировать категории",
"title_edit_users" => "Редактировать пользователей",
"title_manage_db" => "Управляйте базу данных",
"title_changes" => "Добавить / Изменить / Удалить события",
"title_csv_import" => "Импорт в CSV файл",
"title_ics_import" => "Импорт в iCal файл",
"title_ics_export" => "Экспорт iCal файла",
"idx_public_name" => "Режим просмотра",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Опции просмотра",
"hdr_options_submit" => "Сделайте выбор и нажмите на 'Done'",
"hdr_options_panel" => "Показать панель опций",
"hdr_select_date" => "Перейти к дате",
"hdr_view" => "Режим",
"hdr_select_view" => "Выберите режим",
"hdr_filter" => "Фильтр ",
"hdr_select_filter" => "Выберите фильтр",
"hdr_lang" => "язык",
"hdr_select_lang" => "Выберите язык",
"hdr_all_cats" => "Все категории",
"hdr_all_users" => "Все пользователи",
"hdr_year" => "Год",
"hdr_month_full" => "Месяц (7д)",
"hdr_month_work" => "Рабочий месяц",
"hdr_week_full" => "Неделя (7д)",
"hdr_week_work" => "Рабочая неделя",
"hdr_day" => "День",
"hdr_upcoming" => "Ближайшее",
"hdr_changes" => "Изменения",
"hdr_select_admin_functions" => "Выберите функцию управления",
"hdr_admin" => "Управление",
"hdr_settings" => "Настройки",
"hdr_categories" => "Категории",
"hdr_users" => "Пользователи",
"hdr_database" => "База данных",
"hdr_import_csv" => "CSV импорт",
"hdr_import_ics" => "iCal импорт",
"hdr_export_ics" => "iCal экспорт",
"hdr_calendar" => "Календарь",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Печать",
"hdr_print_page" => "Напечатайте эту страницу",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Приближающиеся события",
"hdr_button_search" => "Search",
"hdr_search" => "Поиск",
"hdr_button_add" => "Add",
"hdr_add_event" => "Добавить событие",
"hdr_button_help" => "Справка",
"hdr_help" => "User Guide",
"hdr_log_in" => "Вход",
"hdr_button_log_in" => "Войти",
"hdr_button_log_out" => "Выйти",
"hdr_today" => "сегодня", //dtpicker.js
"hdr_clear" => "стереть", //dtpicker.js

//event.php
"evt_no_title" => "Без имени",
"evt_no_start_date" => "Нет даты начала",
"evt_bad_date" => "Неправильная дата",
"evt_bad_rdate" => "Неверный повтор конечной даты",
"evt_no_start_time" => "Нет времени начала",
"evt_bad_time" => "Неправильное время",
"evt_end_before_start_time" => "Время окончания предшествует времени начала",
"evt_end_before_start_date" => "Дата окончания предшествует дате начала",
"evt_until_before_start_date" => "Повторите дату окончания перед датой начала",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Заголовок",
"evt_venue" => "Место проведения",
"evt_category" => "Категория",
"evt_description" => "Описание",
"evt_date_time" => "Дата / время",
"evt_mailer" => "почтовый клиент",
"evt_private" => "Частное событие",
"evt_start_date" => "Начало",
"evt_end_date" => "Конец",
"evt_select_date" => "Выберите дату",
"evt_select_time" => "Выберите time",
"evt_all_day" => "Весь день",
"evt_change" => "Изменить",
"evt_set_repeat" => "Задать повтор",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Заданное повторение не поддерживается",
"evt_no_repeat" => "Без повтора",
"evt_repeat" => "Повтор",
"evt_repeat_on" => "Повторять каждый",
"evt_until" => "до",
"evt_blank_no_end" => "если бесконечно, то оставьте пустым",
"evt_each_month" => "каждый месяц",
"evt_interval1_1" => "каждый",
"evt_interval1_2" => "любой другой",
"evt_interval1_3" => "каждый третий",
"evt_interval1_4" => "каждый четвертый",
"evt_interval1_5" => "каждый пятый",
"evt_interval1_6" => "каждый шестой",
"evt_interval2_1" => "первый",
"evt_interval2_2" => "второй",
"evt_interval2_3" => "третий",
"evt_interval2_4" => "четвертый",
"evt_interval2_5" => "последний",
"evt_period1_1" => "день",
"evt_period1_2" => "неделя",
"evt_period1_3" => "месяц",
"evt_period1_4" => "год",
"evt_notify" => "Отправить почту",
"evt_now_and_or" => "сейчас и/или",
"evt_event_added" => "Указанное ниже событие добавлено",
"evt_event_edited" => "Указанное ниже событие изменено",
"evt_event_deleted" => "Указанное ниже событие удалено",
"evt_days_before_event" => "день(дней) до начала события:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain макс. 255 символов. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Список email-адресов слишком длинный.",
"evt_eml_list_missing" => "Отсутствует уведомление на email-адрес(а)",
"evt_not_in_past" => "Дата оповещения уже прошла",
"evt_not_days_invalid" => "Неверное количество дней оповещения",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "Событие добавлено",
"evt_confirm_saved" => "Событие сохранено",
"evt_confirm_deleted" => "Событие удалено",
"evt_add_close" => "Добавить и закрыть",
"evt_add" => "Добавить",
"evt_edit" => "Редактировать",
"evt_save_close" => "Сохранить и закрыть",
"evt_save" => "Сохранить",
"evt_clone" => "Сохранить как новую",
"evt_delete" => "Удалить",
"evt_close" => "Закрыть",
"evt_open_calendar" => "Открыть календарь ",
"evt_added" => "Добавлено",
"evt_edited" => "Редактирует",
"evt_is_repeating" => "повторяющееся событие.",
"evt_is_multiday" => "многодневное событие.",
"evt_edit_series_or_occurrence" => "Хотите редактировать всю серию или одно событие",
"evt_edit_series" => "Редактировать серию",
"evt_edit_occurrence" => "Редактировать одно",

//views
"vws_add_event" => "Добавить событие",
"vws_view_month" => "Обзор месяца",
"vws_view_week" => "Обзор недели",
"vws_view_day" => "Обзор дня",
"vws_click_for_full" => "Щелкните на месяц для большого календаря",
"vws_view_full" => "Смотреть большой календарь",
"vws_prev_month" => "Предыдущий месяц",
"vws_next_month" => "Следующий месяц",
"vws_today" => "Cегодня",
"vws_back_to_today" => "Перейти к месяцу сегодня",
"vws_week" => "нед.",
"vws_wk" => "нд",
"vws_time" => "Время",
"vws_events" => "События",
"vws_all_day" => "Весь день",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Место проведения",
"vws_events_for_next" => "Предстоящие к следующему события",
"vws_days" => "день(дней)",
"vws_added" => "Добавлено",
"vws_edited" => "Отредактировано",
"vws_notify" => "Уведомление",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "С даты",
"chg_select_date" => "Выберите дату начала",
"chg_notify" => "Уведомление",
"chg_days" => "День(дней)",
"chg_added" => "Добавлено",
"chg_edited" => "Отредактировано",
"chg_deleted" => "Удалено",
"chg_changed_on" => "Изменено",
"chg_changes" => "Изменения",
"chg_no_changes" => "Нет изменений",

//search.php
"sch_define_search" => "Настройки поиска",
"sch_search_text" => "Искать текст",
"sch_event_fields" => "Поля событий",
"sch_all_fields" => "Все поля",
"sch_title" => "Заголовок",
"sch_description" => "Описание",
"sch_venue" => "Место проведения",
"sch_event_cat" => "Категория",
"sch_all_cats" => "Все категории",
"sch_occurring_between" => "Искать между числами",
"sch_select_start_date" => "Выбрать начальную дату",
"sch_select_end_date" => "Выбрать конечную дату",
"sch_search" => "Поиск",
"sch_invalid_search_text" => "Текст поиска слишком короткий",
"sch_bad_start_date" => "Неверная начальная дата",
"sch_bad_end_date" => "Неверная конечная дата",
"sch_no_results" => "Ничего не найдено",
"sch_new_search" => "Новый поиск",
"sch_calendar" => "Перейти в календарь",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Инструкции при поиске текста</h4>
<p>В базе данных календаря может быть произведен поиск заданного текста.</p>
<br><p><b>Искать текст</b>: Будет произведен поиск по выделенным полям (см. ниже).
Поиск не чувствителен к регистру.</p>
<p>Могут быть испоьзованы два символа-шаблона (маски):</p>
<ul>
<li>Символ подчеркивания (_) в поиске текста будет заменять любой один символ.
<br>Т.е.: '_и_о' означает 'пиво','шило','кило'.</li>
<li>Знак амперсанда (&amp;) в поиске будет заменять любое количество символов.
<br>Т.е.: 'бу&amp;а' означает 'бутылка', 'бура', 'буженина'.</li>
</ul>
<p>Однако, искомое слово должно содержать как минимум два других символа.</p>
<br><p><b>Поля событий</b>: Будет произведен поиск только по указанным полям.</p>
<br><p><b>Категории событий</b>: Будет произведен поиск только в указанных категориях.</p>
<br><p><b>Искать между числами</b>: Даты начала и окончания являются необязательными. 
Пустая начальная дата означает один год назад от сегодняшнего числа, а 
пустая конечная дата означает один год вперед от сегодняшнего числа.</p>
<br><p>Результаты поиска будут выведены в хронологическом порядке.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Upcoming Events",
"ssb_all_day" => "All day",
"ssb_none" => "No events."
);
?>
