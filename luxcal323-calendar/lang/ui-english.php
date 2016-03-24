<?php
/*
= LuxCal event calendar user interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","en");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
$months_m = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$wkDays = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
$wkDays_l = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun");
$wkDays_m = array("Su","Mo","Tu","We","Th","Fr","Sa","Su");
$wkDays_s = array("S","M","T","W","T","F","S","S");


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
"title_upcoming" => "Upcoming Events",
"title_event" => "Event",
"title_add_event" => "Add Event",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "LuxCal User Guide",
"title_settings" => "Manage Calendar Settings",
"title_edit_cats" => "Edit Categories",
"title_edit_users" => "Edit Users",
"title_manage_db" => "Manage Database",
"title_changes" => "Added / Edited / Deleted Events",
"title_csv_import" => "CSV File Import",
"title_ics_import" => "iCal File Import",
"title_ics_export" => "iCal File Export",
"idx_public_name" => "Public View",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options Panel",
"hdr_select_date" => "Go to Date",
"hdr_view" => "View",
"hdr_select_view" => "Select View",
"hdr_filter" => "Filter",
"hdr_select_filter" => "Select Filter",
"hdr_lang" => "Language",
"hdr_select_lang" => "Select Language",
"hdr_all_cats" => "All Categories",
"hdr_all_users" => "All Users",
"hdr_year" => "Year",
"hdr_month_full" => "Full Month",
"hdr_month_work" => "Work Month",
"hdr_week_full" => "Full Week",
"hdr_week_work" => "Work Week",
"hdr_day" => "Day",
"hdr_upcoming" => "Upcoming",
"hdr_changes" => "Changes",
"hdr_select_admin_functions" => "Select Admin Function",
"hdr_admin" => "Administration",
"hdr_settings" => "Settings",
"hdr_categories" => "Categories",
"hdr_users" => "Users",
"hdr_database" => "Database",
"hdr_import_csv" => "CSV Import",
"hdr_import_ics" => "iCal Import",
"hdr_export_ics" => "iCal Export",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Print",
"hdr_print_page" => "Print this Page",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Upcoming Events",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "Add Event",
"hdr_button_help" => "Help",
"hdr_help" => "User Guide",
"hdr_log_in" => "Log In",
"hdr_button_log_in" => "Log In",
"hdr_button_log_out" => "Log Out",
"hdr_today" => "today", //dtpicker.js
"hdr_clear" => "clear", //dtpicker.js

//event.php
"evt_no_title" => "No title",
"evt_no_start_date" => "No start date",
"evt_bad_date" => "Bad date",
"evt_bad_rdate" => "Bad repeat end date",
"evt_no_start_time" => "No start time",
"evt_bad_time" => "Bad time",
"evt_end_before_start_time" => "End time before start time",
"evt_end_before_start_date" => "End date before start date",
"evt_until_before_start_date" => "Repeat end before start date",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Title",
"evt_venue" => "Venue",
"evt_category" => "Category",
"evt_description" => "Description",
"evt_date_time" => "Date / time",
"evt_mailer" => "mailer",
"evt_private" => "Private Event",
"evt_start_date" => "Start",
"evt_end_date" => "End",
"evt_select_date" => "Select date",
"evt_select_time" => "Select time",
"evt_all_day" => "All Day",
"evt_change" => "Change",
"evt_set_repeat" => "Set Repetition",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Specified repetition not supported",
"evt_no_repeat" => "No repeat",
"evt_repeat" => "Repeat",
"evt_repeat_on" => "Repeat every",
"evt_until" => "until",
"evt_blank_no_end" => "blank: no end",
"evt_each_month" => "each month",
"evt_interval1_1" => "every",
"evt_interval1_2" => "every other",
"evt_interval1_3" => "every third",
"evt_interval1_4" => "every fourth",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "first",
"evt_interval2_2" => "second",
"evt_interval2_3" => "third",
"evt_interval2_4" => "fourth",
"evt_interval2_5" => "last",
"evt_period1_1" => "day",
"evt_period1_2" => "week",
"evt_period1_3" => "month",
"evt_period1_4" => "year",
"evt_notify" => "Send mail",
"evt_now_and_or" => "now and/or",
"evt_event_added" => "New event",
"evt_event_edited" => "Changed event",
"evt_event_deleted" => "Deleted event",
"evt_days_before_event" => "day(s) before event to:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 characters. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Email address list too many chars.",
"evt_eml_list_missing" => "Notification email address(es) missing",
"evt_not_in_past" => "Notification date in past",
"evt_not_days_invalid" => "Notification days invalid",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "event added",
"evt_confirm_saved" => "event saved",
"evt_confirm_deleted" => "event deleted",
"evt_add_close" => "Add and close",
"evt_add" => "Add",
"evt_edit" => "Edit",
"evt_save_close" => "Save and close",
"evt_save" => "Save",
"evt_clone" => "Save as New",
"evt_delete" => "Delete",
"evt_close" => "Close",
"evt_open_calendar" => "Open calendar",
"evt_added" => "Added",
"evt_edited" => "Edited",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Add Event",
"vws_view_month" => "View Month",
"vws_view_week" => "View Week",
"vws_view_day" => "View Day",
"vws_click_for_full" => "for full calendar click month",
"vws_view_full" => "View full calendar",
"vws_prev_month" => "Previous month",
"vws_next_month" => "Next month",
"vws_today" => "Today",
"vws_back_to_today" => "Back to the month of today",
"vws_week" => "Week",
"vws_wk" => "wk",
"vws_time" => "Time",
"vws_events" => "Events",
"vws_all_day" => "All Day",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Venue",
"vws_events_for_next" => "Upcoming events for the next",
"vws_days" => "day(s)",
"vws_added" => "Added",
"vws_edited" => "Edited",
"vws_notify" => "Notify",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "From date",
"chg_select_date" => "Select start date",
"chg_notify" => "Notify",
"chg_days" => "Day(s)",
"chg_added" => "Added",
"chg_edited" => "Edited",
"chg_deleted" => "Deleted",
"chg_changed_on" => "Changed on",
"chg_changes" => "Changes",
"chg_no_changes" => "No changes.",

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
be searched. The search is not case sensitive.</p>
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
