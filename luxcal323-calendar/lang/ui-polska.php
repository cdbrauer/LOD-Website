<?php
/*
= LuxCal event calendar lamguage file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","pl");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Styczeń","Luty","Marzec","Kwiecień","Maj","Czerwiec","Lipiec","Sierpień","Wrzesień","Październik","Listopad","Grudzień");
$months_m = array("Sty","Lut","Mar","Kwi","Maj","Cze","Lip","Sie","Wrz","Paź","Lis","Gru");
$wkDays = array("Niedziela","Poniedziałek","Wtorek","Środa","Czwartek","Piątek","Sobota","Niedziela");
$wkDays_l = array("Nie","Pon","Wto","Śro","Czw","Pią","Sob","Nie");
$wkDays_m = array("Nie","Pon","Wto","Śro","Czw","Pią","Sob","Nie");
$wkDays_s = array("N","P","W","Ś","C","P","S","N");


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
"title_upcoming" => "Nadchodzące Wydarzenia",
"title_event" => "Wydarzenie",
"title_add_event" => "Dodaj Wydarzenie",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "Poradnik Użytkownika LuxCal",
"title_settings" => "Ustawień Kalendarza",
"title_edit_cats" => "Edycja Kategorie",
"title_edit_users" => "Edycja Użytkowników ",
"title_manage_db" => "Zarządzanie bazy danych",
"title_changes" => "Dodane / Edytowane / Usuniete Wydarzenia", 
"title_csv_import" => "Import Plików CSV",
"title_ics_import" => "Import Plików iCal",
"title_ics_export" => "Export Plików iCal",
"idx_public_name" => "Public View",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options panel",
"hdr_select_date" => "Idź do Datę",
"hdr_view" => "Widok",
"hdr_select_view" => "Wybierz widok",
"hdr_filter" => "Filtr",
"hdr_select_filter" => "Wybierz filtr",
"hdr_lang" => "Język",
"hdr_select_lang" => "Wybierz język",
"hdr_all_cats" => "wszystkich kategorii",
"hdr_all_users" => "wszyscy użytkownicy",
"hdr_year" => "Rok",
"hdr_month_full" => "Miesiąc (7d)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "Tydzień (7d)",
"hdr_week_work" => "Work week",
"hdr_day" => "Dzień",
"hdr_upcoming" => "Nadchodzące",
"hdr_changes" => "Zmiany", 
"hdr_select_admin_functions" => "Wybierz funkcie admin",
"hdr_admin" => "Zarządzanie",
"hdr_settings" => "Ustawienia",
"hdr_categories" => "Kategorie",
"hdr_users" => "Użytkownicy",
"hdr_database" => "Bazy danych",
"hdr_import_csv" => "Import CSV",
"hdr_import_ics" => "Import iCal",
"hdr_export_ics" => "Export iCal",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Pokaż",
"hdr_print_page" => "Pokaż tę stronę",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Nadchodzące Wydarzenia",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "Dodaj Wydarzenie",
"hdr_button_help" => "Pomoc",
"hdr_help" => "User Guide",
"hdr_log_in" => "Logowanie",
"hdr_button_log_in" => "Zaloguj",
"hdr_button_log_out" => "Wyloguj",
"hdr_today" => "dzisiaj", //dtpicker.js
"hdr_clear" => "kasuje", //dtpicker.js

//event.php
"evt_no_title" => "Brak tytułu",
"evt_no_start_date" => "Brak daty rozpoczęcia",
"evt_bad_date" => "Zła data",
"evt_bad_rdate" => "Zła repeat end data",//
"evt_no_start_time" => "Brak czasu rozpoczęcia",
"evt_bad_time" => "Zła godzina",
"evt_end_before_start_time" => "Czas zakończenia przed czasem rozpoczęcia",
"evt_end_before_start_date" => "Data zakończenia przed datą rozpoczęcia",
"evt_until_before_start_date" => "Repeat end przed datą rozpoczęcia",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Tytuł",
"evt_venue" => "Miejsce",
"evt_category" => "Kategoria",
"evt_description" => "Opis",
"evt_date_time" => "Data / godzina",
"evt_mailer" => "mailer",
"evt_private" => "Wydarzenie prywatne",
"evt_start_date" => "Początek",
"evt_end_date" => "Koniec",
"evt_select_date" => "Wybierz datę",
"evt_select_time" => "Wybierz czas",
"evt_all_day" => "Całodniowe",
"evt_change" => "Zmień",
"evt_set_repeat" => "Ustaw powtórzenie",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Specified repetition not supported",//
"evt_no_repeat" => "Bez powtórzeń",
"evt_repeat" => "Powtórz",
"evt_repeat_on" => "Powtarzaj każde",
"evt_until" => "Aż do",
"evt_blank_no_end" => "Puste: bez końca",
"evt_each_month" => "each month",
"evt_interval1_1" => "Każdy",
"evt_interval1_2" => "Każdy inny",
"evt_interval1_3" => "Każdy trzeci",
"evt_interval1_4" => "Każdy czwarty",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "Pierwszy", 
"evt_interval2_2" => "Drugi", 
"evt_interval2_3" => "Trzeci", 
"evt_interval2_4" => "Czwarty", 
"evt_interval2_5" => "Ostatni", 
"evt_period1_1" => "Dzień", 
"evt_period1_2" => "Tydzień", 
"evt_period1_3" => "Miesiąc", 
"evt_period1_4" => "Rok", 
"evt_notify" => "Wyślij maila",
"evt_now_and_or" => "now and/or",
"evt_event_added" => "The following event has been added",
"evt_event_edited" => "The following event has been modified",
"evt_event_deleted" => "The following event has been deleted",
"evt_days_before_event" => "dni przed wydarzeniem do:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 znaków. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Lista adresów zawiera zbyt dużo znaków",
"evt_eml_list_missing" => "Brak powiadamiającego adresu/adresów mailowych",
"evt_not_in_past" => "Notification date in past",
"evt_not_days_invalid" => "Notification days invalid",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "wydarzenie dodał",
"evt_confirm_saved" => "wydarzenie zapisane",
"evt_confirm_deleted" => "wydarzenie usunieta",
"evt_add_close" => "Add and close",
"evt_add" => "Dodaj",
"evt_edit" => "Edycja",
"evt_save_close" => "Zapisz i zamknij",
"evt_save" => "Zapisz",
"evt_clone" => "Zapisz jako nowy ",
"evt_delete" => "Usuń",
"evt_close" => "Zamknij",
"evt_open_calendar" => "Otwórz kalendarz",
"evt_added" => "Dodany",
"evt_edited" => "Uaktualniony",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Dodaj Wydarzenie",
"vws_view_month" => "Podgląd Miesięczny",
"vws_view_week" => "Podgląd Tygodniowy",
"vws_view_day" => "Podgląd Dzienny",
"vws_click_for_full" => "for full calendar click month",
"vws_view_full" => "View full calendar",
"vws_prev_month" => "Previous month",
"vws_next_month" => "Next month",
"vws_today" => "Dziś",
"vws_back_to_today" => "Powrót na miesiąc dzisiaj",
"vws_week" => "Tydzień",
"vws_wk" => "ty",
"vws_time" => "godzina",
"vws_events" => "Wydarzenia",
"vws_all_day" => "Cały Dzień",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Miejsce",
"vws_events_for_next" => "Nadchodzące Wydarzenia na następne",
"vws_days" => "dzień/dni",
"vws_added" => "Dodany",
"vws_edited" => "Uaktualniony",
"vws_notify" => "Powiadom",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Data początkowa",
"chg_select_date" => "Wybierz datę początkową", 
"chg_notify" => "Powiadom",
"chg_days" => "Dzień/Dni",
"chg_added" => "Dodany",
"chg_edited" => "Uaktualniony",
"chg_deleted" => "Usunięty",
"chg_changed_on" => "Changed on",
"chg_changes" => "Changes",
"chg_no_changes" => "Brak changes.",

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
<br><p><b>Search text</b>: The selected fields (see below) of each event will 
be searched. The search is case insensitive.</p>
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
