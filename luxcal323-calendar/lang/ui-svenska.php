<?php
/*
= LuxCal event calendar lamguage file =

Översatt till svenska av Thomas "Morgoo" Karlsson. Skicka gärna kommentarer, förslag på förbättringar m.m till thomas.virserum@telia.com.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","sv");

/* -- Titles on the Header of the Calendar -- */

$months = array("Januari","Februari","Mars","April","Maj","Juni","Juli","Augusti","September","Oktober","November","December");
$months_m = array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","Aug","Sep","Okt","Nov","Dec");
$wkDays = array("Söndag","Måndag","Tisdag","Onsdag","Torsdag","Fredag","Lördag","Söndag");
$wkDays_l = array("Sön","Mån","Tis","Ons","Tor","Fre","Lör","Sön");
$wkDays_m = array("Sö","Må","Ti","On","To","Fr","Lö","Sö");
$wkDays_s = array("S","M","T","O","T","F","L","S");


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
"title_upcoming" => "Kommande händelser",
"title_event" => "Händelser",
"title_add_event" => "Lägg till Händelser",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "Kalender användarhandbok",
"title_settings" => "Kalenderinställningar",
"title_edit_cats" => "Redigera kategorier",
"title_edit_users" => "Redigera användare",
"title_manage_db" => "Klara av databasen",
"title_changes" => "Lägg till / ändra / radera händelser",
"title_csv_import" => "CSV fil-import",
"title_ics_import" => "iCal fil-import",
"title_ics_export" => "iCal fil-export",
"idx_public_name" => "Offentlig visning",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options panel",
"hdr_select_date" => "Gå; till datum ",
"hdr_view" => "Visningstyp",
"hdr_select_view" => "Välj typer",
"hdr_filter" => "Filter",
"hdr_select_filter" => "Välj filter",
"hdr_lang" => "Språk",
"hdr_select_lang" => "Välj språk",
"hdr_all_cats" => "Alla kategorier",
"hdr_all_users" => "Alla användare",
"hdr_year" => "År",
"hdr_month_full" => "Månad (7d)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "Vecka (7d)",
"hdr_week_work" => "Work week",
"hdr_day" => "Dag",
"hdr_upcoming" => "Kommande",
"hdr_changes" => "Ändringar",
"hdr_select_admin_functions" => "Välj admin funktion",
"hdr_admin" => "Administration",
"hdr_settings" => "Inställningar",
"hdr_categories" => "Kategorier",
"hdr_users" => "Användare",
"hdr_database" => "Databasen",
"hdr_import_csv" => "CSV import",
"hdr_import_ics" => "iCal import",
"hdr_export_ics" => "iCal export",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Skriv ut",
"hdr_print_page" => "Skriv ut den här sidan",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Kommande händelser",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "Lägg till händelse",
"hdr_button_help" => "<strong>Hjälp</strong>",
"hdr_help" => "User Guide",
"hdr_log_in" => "Logga In",
"hdr_button_log_in" => "<strong>Logga in</strong>",
"hdr_button_log_out" => "<strong>Logga ut</strong>",
"hdr_today" => "i dag", //dtpicker.js
"hdr_clear" => "radera", //dtpicker.js

//event.php
"evt_no_title" => "Ditt namn saknas",
"evt_no_start_date" => "Inget startdatum",
"evt_bad_date" => "Fel datum",
"evt_bad_rdate" => "Felaktigt upprepa slutdatum",
"evt_no_start_time" => "Ingen starttid",
"evt_bad_time" => "Fel tid",
"evt_end_before_start_time" => "Sluttid före starttid",
"evt_end_before_start_date" => "Slutdatum före startdatum",
"evt_until_before_start_date" => "Upprepa slut före startdatum",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "<strong>Ditt namn</strong>",
"evt_venue" => "Plats",
"evt_category" => "Kategori",
"evt_description" => "Beskrivning",
"evt_date_time" => "Datum / tid",
"evt_mailer" => "skickat av ",
"evt_private" => "Privat händelse",
"evt_start_date" => "<strong>Start</strong>",
"evt_end_date" => "<strong>Slut</strong>",
"evt_select_date" => "Välj datum",
"evt_select_time" => "Välj tid",
"evt_all_day" => "Hela dagen",
"evt_change" => "Ändra",
"evt_set_repeat" => "Ställ in upprepning",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Angiven upprepning stöds inte",
"evt_no_repeat" => "Ingen upprepning",
"evt_repeat" => "Upprepa",
"evt_repeat_on" => "Upprepa varje",
"evt_until" => "tills",
"evt_blank_no_end" => "blank: tills vidare",
"evt_each_month" => "each month",
"evt_interval1_1" => "varje",
"evt_interval1_2" => "var annan",
"evt_interval1_3" => "var tredje",
"evt_interval1_4" => "var fjärde",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "första",
"evt_interval2_2" => "andra",
"evt_interval2_3" => "tredje",
"evt_interval2_4" => "fjärde",
"evt_interval2_5" => "sista",
"evt_period1_1" => "dag",
"evt_period1_2" => "vecka",
"evt_period1_3" => "månad",
"evt_period1_4" => "år",
"evt_notify" => "<strong>Påminnelse per e-post</strong>",
"evt_now_and_or" => "nu och/eller",
"evt_event_added" => "Händelse tillagt",
"evt_event_edited" => "Händelse ändrad",
"evt_event_deleted" => "Händelse raderad",
"evt_days_before_event" => "dag(ar) före händelsen. Skickas till nedanstående adress:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 characters. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "E-postadresslistan är för lång.",
"evt_eml_list_missing" => "Det saknas en e-postadress för bekräftelse",
"evt_not_in_past" => "Notification date in past",
"evt_not_days_invalid" => "Notification days invalid",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "händelse la",
"evt_confirm_saved" => "händelse sparas",
"evt_confirm_deleted" => "händelse raderas",
"evt_add_close" => "Add and close",
"evt_add" => "Lägg",
"evt_edit" => "Redigera",
"evt_save_close" => "Spara och stäng",
"evt_save" => "Spara",
"evt_clone" => "Spara som ny",
"evt_delete" => "Radera",
"evt_close" => "Stäng",
"evt_open_calendar" => "Öppna kalender",
"evt_added" => "Tillagt",
"evt_edited" => "Redigerad",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Lägg till händelse",
"vws_view_month" => "Visa månad",
"vws_view_week" => "Visa vecka",
"vws_view_day" => "Visa dag",
"vws_click_for_full" => "för hela kalender klickar månad",
"vws_view_full" => "Visa hela kalendern",
"vws_prev_month" => "Föregående månad",
"vws_next_month" => "Nästa månad",
"vws_today" => "Idag",
"vws_back_to_today" => "Tillbaka till den månad idag",
"vws_week" => "vecka",
"vws_wk" => "v.",
"vws_time" => "tid",
"vws_events" => "Händelser",
"vws_all_day" => "Hela dagen",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Plats",
"vws_events_for_next" => "Kommande händelser för nästa",
"vws_days" => "dag(ar)",
"vws_added" => "Tillagt",
"vws_edited" => "Redigerad",
"vws_notify" => "Påminnelse",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Från datum",
"chg_select_date" => "Händelse startdatum",
"chg_notify" => "Påminnelse",
"chg_days" => "Dag(ar)",
"chg_added" => "Tillagt",
"chg_edited" => "Redigerad",
"chg_deleted" => "Raderad",
"chg_changed_on" => "Ändrad",
"chg_changes" => "Ändringar",
"chg_no_changes" => "Inga ändringar.",

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
