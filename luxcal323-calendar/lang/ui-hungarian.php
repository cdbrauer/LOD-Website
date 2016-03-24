<?php
/*
= LuxCal event calendar lamguage file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","hu");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("január","február","március","április","május","június","július","augusztus","szeptember","október","november","december");
$months_m = array("jan","feb","már","ápr","máj","jún","júl","aug","sze","okt","nov","dec");
$wkDays = array("vasárnap","hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap");
$wkDays_l = array("vas","hét","ked","sze","csü","pén","szo","vas");
$wkDays_m = array("Vas","Hé","Ke","Sze","Csü","Pé","Szo","Vas");
$wkDays_s = array("V","H","K","SZ","CS","P","SZ","V");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Submit",
"none" => "None.",
"back" => "Back",
"by" => "by",
"of" => "of",
"done" => "Done",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Következő események",
"title_event" => "Esemény",
"title_add_event" => "Új Esemény",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "LuxCal Felhasználói Útmutató",
"title_settings" => "Naptár beállítás",
"title_edit_cats" => "Kategóriák szerkesztése",
"title_edit_users" => "Felhasználók szerkesztése",
"title_manage_db" => "Kezeli database",
"title_changes" => "Hozzáadott / Szerkesztett / Törölt események",
"title_csv_import" => "CSV fájl importálása",
"title_ics_import" => "iCal fájl importálása",
"title_ics_export" => "iCal fájl exportálása",
"idx_public_name" => "Public View",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options panel",
"hdr_select_date" => "Dátum kiválasztása",
"hdr_view" => "Nézet",
"hdr_select_view" => "Válasszon nézet",
"hdr_filter" => "Szűrő",
"hdr_select_filter" => "Válasszon szűrő",
"hdr_lang" => "Nyelvet",
"hdr_select_lang" => "Válasszon nyelvet",
"hdr_all_cats" => "Minden kategória",
"hdr_all_users" => "Minden felhasználó",
"hdr_year" => "Év",
"hdr_month_full" => "Hónap (7n)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "Hét (7n)",
"hdr_week_work" => "Work week",
"hdr_day" => "Nap",
"hdr_upcoming" => "Elkövetkező",
"hdr_changes" => "Változtatás",
"hdr_select_admin_functions" => "Admin funkció kiválasztása",
"hdr_admin" => "Adminisztráció",
"hdr_settings" => "Beállítások",
"hdr_categories" => "Kategóriák",
"hdr_users" => "Felhasználók",
"hdr_database" => "Database",
"hdr_import_csv" => "CSV importálása",
"hdr_import_ics" => "iCal importálása",
"hdr_export_ics" => "iCal exportálása",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Nyomtatás",
"hdr_print_page" => "Az oldal kinyomtatása",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Következő események",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "Esemény hozzáadás",
"hdr_button_help" => "Segítség",
"hdr_help" => "User Guide",
"hdr_log_in" => "Bejelentkezés",
"hdr_button_log_in" => "Bejelentkezés",
"hdr_button_log_out" => "Kijelentkezés",
"hdr_today" => "ma", //dtpicker.js
"hdr_clear" => "törli", //dtpicker.js

//event.php
"evt_no_title" => "Nincs cím",
"evt_no_start_date" => "Nincs kezdő dátum",
"evt_bad_date" => "Rossz dátum",
"evt_bad_rdate" => "Rossz ismételt befejező dátum",
"evt_no_start_time" => "Nincs kezdő időpont",
"evt_bad_time" => "Rossz időpont",
"evt_end_before_start_time" => "A záró időpont megelőzi a kezdő időpontot",
"evt_end_before_start_date" => "A záró dátum megelőzi a kezdő dátumot",
"evt_until_before_start_date" => "Repeat end megelőzi a kezdő dátumot",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Cím",
"evt_venue" => "Helyszín",
"evt_category" => "Kategória",
"evt_description" => "Leírás",
"evt_date_time" => "Dátum / idő",
"evt_mailer" => "postázó",
"evt_private" => "Saját esemény",
"evt_start_date" => "Kezdeti",
"evt_end_date" => "Befejező",
"evt_select_date" => "Dátum kiválasztása",
"evt_select_time" => "Select time",
"evt_all_day" => "Egésznapos",
"evt_change" => "Változtatás",
"evt_set_repeat" => "Ismétlődés beállítása",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Specified repetition not supported",
"evt_no_repeat" => "Nincs ismétlődés",
"evt_repeat" => "Ismétlődés",
"evt_repeat_on" => "Ismétel minden",
"evt_until" => "eddig",
"evt_blank_no_end" => "üres: nincs befejezés",
"evt_each_month" => "each month",
"evt_interval1_1" => "minden",
"evt_interval1_2" => "minden másik",
"evt_interval1_3" => "minden harmadik",
"evt_interval1_4" => "minden negyedik",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "első",
"evt_interval2_2" => "második",
"evt_interval2_3" => "harmadik",
"evt_interval2_4" => "negyedik",
"evt_interval2_5" => "utolsó",
"evt_period1_1" => "nap",
"evt_period1_2" => "hét",
"evt_period1_3" => "hónap",
"evt_period1_4" => "év",
"evt_notify" => "Email küldés",
"evt_now_and_or" => "now and/or",
"evt_event_added" => "The following event has been added",
"evt_event_edited" => "The following event has been modified",
"evt_event_deleted" => "The following event has been deleted",
"evt_days_before_event" => "nappal az esemény előtt:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 karakterben. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Email-címek listája túl sok karakterből áll.",
"evt_eml_list_missing" => "Értesítési email címlista hiányzik",
"evt_not_in_past" => "Notification date in past",
"evt_not_days_invalid" => "Notification days invalid",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "event added",
"evt_confirm_saved" => "event saved",
"evt_confirm_deleted" => "event deleted",
"evt_add_close" => "Add and close",
"evt_add" => "Hozzáadása",
"evt_edit" => "Szerkesztése",
"evt_save_close" => "Mentés és bezárás ",
"evt_save" => "Mentés",
"evt_clone" => "Mentés új",
"evt_delete" => "Törlése",
"evt_close" => "Bezár",
"evt_open_calendar" => "Nyílt naptár",
"evt_added" => "Hozzáadva",
"evt_edited" => "Edited",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Esemény hozzáadása",
"vws_view_month" => "Hónap nézet",
"vws_view_week" => "Hét nézet",
"vws_view_day" => "Nap nézet",
"vws_click_for_full" => "for full calendar click month",
"vws_view_full" => "View full calendar",
"vws_prev_month" => "Previous month",
"vws_next_month" => "Next month",
"vws_today" => "Ma",
"vws_back_to_today" => "Vissza a hónapban a ma",
"vws_week" => "Hét",
"vws_wk" => "hét",
"vws_time" => "idő",
"vws_events" => "Események",
"vws_all_day" => "Egésznapos",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Helyszín",
"vws_events_for_next" => "Következő események a következő",
"vws_days" => "nap",
"vws_added" => "Hozzáadva",
"vws_edited" => "Szerkesztve",
"vws_notify" => "Értesítés",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Dátumtól",
"chg_select_date" => "Kezdő dátum kiválasztása",
"chg_notify" => "Értesítő",
"chg_days" => "Nap",
"chg_added" => "Hozzáadva",
"chg_edited" => "Szerkesztve",
"chg_deleted" => "Törölve",
"chg_changed_on" => "Módosítása",
"chg_changes" => "Változások",
"chg_no_changes" => "Nincs változás.",

//search.php
"sch_define_search" => "Define search",
"sch_search_text" => "Search text",
"sch_event_fields" => "Event fields",
"sch_all_fields" => "All fields",
"sch_title" => "Title",
"sch_description" => "Description",
"sch_venue" => "Venue",
"sch_event_cat" => "Event category",
"sch_all_cats" => "All Categories",
"sch_occurring_between" => "Occurring between",
"sch_select_start_date" => "Select start date",
"sch_select_end_date" => "Select end date",
"sch_search" => "Search",
"sch_invalid_search_text" => "Search text missing or too short",
"sch_bad_start_date" => "Bad start date",
"sch_bad_end_date" => "Bad end date",
"sch_no_results" => "No results found",
"sch_new_search" => "New Search",
"sch_calendar" => "Go to calendar",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Text Search Instructions</h4>
<p>The calendar database can be searched for events matching specific text.</p>
<br><p><b>Search text</b>: The selected fields (see below) of each event 
will be searched. The search is case insensitive.</p>
<p>Two wildcard characters can be used:</p>
<ul>
<li>Underscore characters (_) in the search text will match any single 
character.<br>E.g.: '_e_r' matches 'beer', 'dear', 'heir'.</li>
<li>Ampersand characters (&amp;) in the search text will match any number of 
characters.<br>E.g.: 'de&amp;r' matches 'December', 'dear', 'developer'.</li>
</ul>
<p>However, the search text must contain at least two other characters.</p>
<br><p><b>Event fields</b>: The selected fields will be searched only.</p>
<br><p><b>Event category</b>: Events in the selected category will be searched 
only.</p>
<br><p><b>Occurring between</b>: The start and end date are both optional. A 
blank start date means: one year from now in the past and a blank end date 
means: one year from now in the future.</p>
<br><p>The search results will be displayed in chronological order.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Upcoming Events",
"ssb_all_day" => "All day",
"ssb_none" => "No events."
);
?>
