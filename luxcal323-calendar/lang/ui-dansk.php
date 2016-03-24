<?php
/*
= LuxCal event calendar language file =

Oversat til dansk af Lars J. Helbo. Kommentarer, forbedringsforslag osv. til lars(at)salldata.dk
Additional Danish translations by FinnH - as is.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.

==================================
Danish special characters
&aelig;
&oslash;
&aring;

&AElig;
&Oslash;
&Aring;
==================================

*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","da");

/* -- Titles on the Header of the Calendar -- */

$months = array("Januar","Februar","Marts","April","Maj","Juni","Juli","August","September","Oktober","November","December");
$months_m = array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","Aug","Sep","Okt","Nov","Dec");
$wkDays = array("S&oslash;ndag","Mandag","Tirsdag","Onsdag","Torsdag","Fredag","L&oslash;rdag","S&oslash;ndag");
$wkDays_l = array("S&oslash;n","Man","Tir","Ons","Tor","Fre","L&oslash;r","S&oslash;n");
$wkDays_m = array("S&oslash;","Ma","Ti","On","To","Fr","L&oslash;","S&oslash;");
$wkDays_s = array("S","M","T","O","T","F","L","S");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Udf&oslash;r",
"none" => "Ingen.",
"back" => "Tilbage",
"by" => "af",
"of" => "i",
"done" => "Udf&oslash;r",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "Du har ikke autorisation til denne funktion",

//index.php
"title_log_in" => "Log ind",
"title_upcoming" => "Kommende begivenheder",
"title_event" => "Begivenhed",
"title_add_event" => "Tilf&oslash;j Begivenhed",
"title_check_event" => "Tjek begivenhed",
"title_search" => "Tekst S&oslash;gning",
"title_user_guide" => "LuxCal brugervejledning",
"title_settings" => "Kalenderindstillinger",
"title_edit_cats" => "Editer kategorier",
"title_edit_users" => "Editer brugere",
"title_manage_db" => "Vedligehold databasen",
"title_changes" => "Tilf&oslash;je / &aelig;ndre / slette begivenheder",
"title_csv_import" => "CSV fil-import",
"title_ics_import" => "iCal fil-import",
"title_ics_export" => "iCal fil-eksport",
"idx_public_name" => "Offentlig visning",

//header.php
"hdr_button_back" => "Tilbage til forrige side",
"hdr_button_options" => "Valgmuligheder",
"hdr_options_submit" => "Foretag valg og klik 'Udf&oslash;r'",
"hdr_options_panel" => "Valgmuligheder",
"hdr_select_date" => "G&aring; til dato ",
"hdr_view" => "Visning",
"hdr_select_view" => "V&aelig;lg Visning",
"hdr_filter" => "Filter",
"hdr_select_filter" => "V&aelig;lg filter",
"hdr_lang" => "Sprog",
"hdr_select_lang" => "V&aelig;lg sprog",
"hdr_all_cats" => "Alle kategorier",
"hdr_all_users" => "Alle brugere",
"hdr_year" => "&Aring;r",
"hdr_month_full" => "M&aring;ned (7d)",
"hdr_month_work" => "Arbejdsm&aring;ned",
"hdr_week_full" => "Uge (7d)",
"hdr_week_work" => "Arbejdsuge",
"hdr_day" => "Dag",
"hdr_upcoming" => "Kommende",
"hdr_changes" => "&AElig;ndringer",
"hdr_select_admin_functions" => "V&aelig;lg admin funktion",
"hdr_admin" => "Administration",
"hdr_settings" => "Indstillinger",
"hdr_categories" => "Kategorier",
"hdr_users" => "Brugere",
"hdr_database" => "Database",
"hdr_import_csv" => "CSV import",
"hdr_import_ics" => "iCal import",
"hdr_export_ics" => "iCal export",
"hdr_calendar" => "Kalender",
"hdr_back_to_cal" => "Tilbage til kalender visning",
"hdr_button_print" => "Udskriv",
"hdr_print_page" => "Udskriv denne side",
"hdr_button_todo" => "Opgaver",
"hdr_todo_list" => "Opgaveliste",
"hdr_button_upco" => "Kommende",
"hdr_upco_list" => "Kommende begivenheder",
"hdr_button_search" => "S&oslash;g",
"hdr_search" => "Tekst s&oslash;gning",
"hdr_button_add" => "Tilf&oslash;j",
"hdr_add_event" => "Tilf&oslash;j begivenhed",
"hdr_button_help" => "Hj&aelig;lp",
"hdr_help" => "Brugervejledning",
"hdr_log_in" => "Log Ind",
"hdr_button_log_in" => "Log ind",
"hdr_button_log_out" => "Log ud",
"hdr_today" => "i dag", //dtpicker.js
"hdr_clear" => "slette", //dtpicker.js

//event.php
"evt_no_title" => "Ingen titel",
"evt_no_start_date" => "Ingen startdato",
"evt_bad_date" => "Forkert dato",
"evt_bad_rdate" => "Forkert gentagelse slutdato",
"evt_no_start_time" => "Ingen starttid",
"evt_bad_time" => "Forkert tid",
"evt_end_before_start_time" => "Sluttid f&oslash;r starttid",
"evt_end_before_start_date" => "Slutdato f&oslash;r startdato",
"evt_until_before_start_date" => "Gentagelse slutdato f&oslash;r startdato",
"evt_approved" => "Begivenhed godkendt",
"evt_apd_locked" => "Begivenhed godkendt og l&aring;st",
"evt_title" => "Titel",
"evt_venue" => "Sted",
"evt_category" => "Kategori",
"evt_description" => "Beskrivelse",
"evt_date_time" => "Dato / tid",
"evt_mailer" => "mailer",
"evt_private" => "Privat begivenhed",
"evt_start_date" => "Start",
"evt_end_date" => "Slut",
"evt_select_date" => "V&aelig;lg dato",
"evt_select_time" => "V&aelig;lg tid",
"evt_all_day" => "Hele dagen",
"evt_change" => "&AElig;ndre",
"evt_set_repeat" => "S&aelig;t gentagelse",
"evt_set" => "OK",
"evt_help" => "hj&aelig;lp",
"evt_repeat_not_supported" => "Angivet gentagelse ikke underst&oslash;ttet",
"evt_no_repeat" => "Ingen gentagelse",
"evt_repeat" => "Gentag",
"evt_repeat_on" => "Gentag hver",
"evt_until" => "indtil",
"evt_blank_no_end" => "blank: ingen ende",
"evt_each_month" => "hver m&aring;ned",
"evt_interval1_1" => "hver",
"evt_interval1_2" => "hver anden",
"evt_interval1_3" => "hver tredje",
"evt_interval1_4" => "hver fjerde",
"evt_interval1_5" => "hver femte",
"evt_interval1_6" => "hver sjette",
"evt_interval2_1" => "f&oslash;rste",
"evt_interval2_2" => "anden",
"evt_interval2_3" => "tredje",
"evt_interval2_4" => "fjerde",
"evt_interval2_5" => "sidste",
"evt_period1_1" => "dag",
"evt_period1_2" => "uge",
"evt_period1_3" => "m&aring;ned",
"evt_period1_4" => "&aring;r",
"evt_notify" => "Alarmer",
"evt_now_and_or" => "nu og/eller",
"evt_event_added" => "Begivenhed blev oprettet",
"evt_event_edited" => "Begivenhed blev opdateret",
"evt_event_deleted" => "Begivenhed blev slettet",
"evt_days_before_event" => "dag(e) f&oslash;r begivenheden",
"evt_mail_help" => "Email p&aring;mindelser kan sendes straks eller det angivne antal dage f&oslash;r begivenhedens start. I feltet nedenfor kan modtager mail adresser og/eller navne p&aring; filer med modtager mail adresser angives. Adresser/filnavne adskilles med semikolon. Feltet kan indeholde max. 255 tegn. Filer med email adresser med en email adresse per linje skal findes i folderen \'emlists\'.<br>Hvis ingen extension angives, antages en fil med email adresser at have extension .txt.",
"evt_eml_list_too_long" => "Email-adresselisten er for lang.",
"evt_eml_list_missing" => "Der mangler en alarm-email",
"evt_not_in_past" => "P&aring;mindelsesdato f&oslash;r dags dato",
"evt_not_days_invalid" => "P&aring;mindelsesdage ugyldig",
"evt_status" => "Status",
"evt_descr_help" => "F&oslash;lgende koder kan bruges i beskrivelsesfeltet ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; og &lt;s&gt; for fed, kursiv, understreget og gennemstreget tekst.<br>- sm&aring; billeder (thumbnails) i f&oslash;lgende format: folder/billede_navn.ext eller billede_navn.ext. Hvis ingen folder angives, bruges standard folder  \'thumbnails\'. Folderen skal v&aelig;re en subfolder under \'calendar\' og extension skal v&aelig;re .gif, .jpg eller .png. Thumbnail (billed) filer skal uploades via FTP.<br>- URL links i f&oslash;lgende format: url eller url [navn], hvor \'navn\' vises som titel for linket. Fx www.google.com [S&oslash;gning].<br>URL links kan ogs&aring; bruges i ekstrafelter, hvis disse benyttes",
"evt_confirm_added" => "begivenhed tilf&oslash;jet",
"evt_confirm_saved" => "begivenhed gemt",
"evt_confirm_deleted" => "begivenhed slettet",
"evt_add_close" => "Tilf&oslash;j og luk",
"evt_add" => "Tilf&oslash;j",
"evt_edit" => "Editer",
"evt_save_close" => "Gem og luk",
"evt_save" => "Gem",
"evt_clone" => "Gem som Ny",
"evt_delete" => "Slet",
"evt_close" => "Luk",
"evt_open_calendar" => "&Aring;bn kalender",
"evt_owner" => "Ejer",
"evt_added" => "Tilf&oslash;jet",
"evt_edited" => "&AElig;ndret",
"evt_is_repeating" => "er en gentaget begivenhed.",
"evt_is_multiday" => "er en flerdages begivenhed.",
"evt_edit_series_or_occurrence" => "Vil du editere serien eller denne forekomst",
"evt_edit_series" => "Editer serien",
"evt_edit_occurrence" => "Editer denne forekomst",

//views
"vws_add_event" => "Tilf&oslash;j begivenhed",
"vws_view_month" => "Vis m&aring;ned",
"vws_view_week" => "Vis uge",
"vws_view_day" => "Vis dag",
"vws_click_for_full" => "for fuld kalender, klik m&aring;ned",
"vws_view_full" => "Vis fuld kalender",
"vws_prev_month" => "Forrige m&aring;ned",
"vws_next_month" => "N&aelig;ste m&aring;ned",
"vws_today" => "Dag",
"vws_back_to_today" => "Tilbage til m&aring;neden for dags dato",
"vws_week" => "Uge",
"vws_wk" => "Uge",
"vws_time" => "Tid",
"vws_events" => "Begivenheder",
"vws_all_day" => "Hele dagen",
"vws_earlier" => "Tidligere",
"vws_later" => "Senere",
"vws_venue" => "Sted",
"vws_events_for_next" => "Kommende begivenheder for de n&aelig;ste",
"vws_days" => "dag(e)",
"vws_added" => "Tilf&oslash;jet",
"vws_edited" => "&AElig;ndret",
"vws_notify" => "Alarmer",
"vws_check_mark" => "Tjekm&aelig;rke",
"vws_none_due_in" => "Ingen begivenheder den f&oslash;lgende",
"vws_download" => "Download",
"vws_download_title" => "Download en tekstfil med disse begivenheder",

//changes.php
"chg_from_date" => "Fra dato",
"chg_select_date" => "V&aelig;lg startdato",
"chg_notify" => "Alarmer",
"chg_days" => "Dag(e)",
"chg_added" => "Tilf&oslash;jet",
"chg_edited" => "&AElig;ndret",
"chg_deleted" => "Slettet",
"chg_changed_on" => "&AElig;ndret",
"chg_changes" => "&AElig;ndringer",
"chg_no_changes" => "Ingen &aelig;ndringer.",

//search.php
"sch_define_search" => "Definer s&oslash;gning",
"sch_search_text" => "S&oslash;getekst",
"sch_event_fields" => "Begivenhedsfelter",
"sch_all_fields" => "Alle felter",
"sch_title" => "Titel",
"sch_description" => "Beskrivelse",
"sch_venue" => "Sted",
"sch_event_cat" => "Begivenhedskategori",
"sch_all_cats" => "Alle kategorier",
"sch_occurring_between" => "Foreg&aring;r mellem",
"sch_select_start_date" => "V&aelig;lg startdato",
"sch_select_end_date" => "V&aelig;lg slutdato",
"sch_search" => "S&oslash;g",
"sch_invalid_search_text" => "S&oslash;getekst mangler eller for kort",
"sch_bad_start_date" => "Ugyldig startdato",
"sch_bad_end_date" => "Ugyldig slutdato",
"sch_no_results" => "Ingen resultater",
"sch_new_search" => "Ny S&oslash;gning",
"sch_calendar" => "G&aring; til kalender",
"sch_extra_field1" => "Ekstra felt 1",
"sch_extra_field2" => "Ekstra felt 2",
"sch_instructions" =>
"<h4>Tekst S&oslash;gning vejledning</h4>
<p>Der kan s&oslash;ges i kalenderdatabasen efter begivenheder som matcher specifik tekst.</p>
<br><p><b>S&oslash;getekst</b>: Der s&oslash;ges i de valgte felter (se nedenfor) i hver begivenhed. S&oslash;gning tager ikke hensyn til store eller sm&aring; bogstaver (er ikke case sensitiv).</p>
<p>To jokertegn (wildcard) kan bruges:</p>
<ul>
<li>Underscore (_) i s&oslash;geteksten vil matche ethvert enkelt tegn.<br>Fx: '_e_r' matcher 'sejr', 'Vejr', 'lejr'.</li>
<li>Ampersand (&amp;) i s&oslash;geteksten vil matche ethvert antal tegn.<br>Fx: 'de&amp;r' matcher 'December', 'deler', 'deltager'.</li>
</ul>
<p>Bem&aelig;rk at s&oslash;geteksten skal indeholde mindst to andre tegn.</p>
<br><p><b>Begivenhedsfelter</b>: Der s&oslash;ges kun i de valgte felter.</p>
<br><p><b>Begivenhedskategori</b>: Der s&oslash;ges kun begivenheder i den valgte kategori.</p>
<br><p><b>Foreg&aring;r mellem</b>: Start og slutdato er begge valgfri. En blank startdato betyder: Et &aring;r tilbage i tid fra nu, og en blank slutdato betyder: Et &aring;r frem fra nu.</p>
<br><p>S&oslash;geresultaterne vil blive vist i kronologisk orden.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Kommende begivenheder",
"ssb_all_day" => "Hele dagen",
"ssb_none" => "Ingen begivenheder."
);
?>
