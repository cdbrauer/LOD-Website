<?php
/*
= LuxCal event calendar user interface language file =

Finnish translation: Heikki Laitala. Please send comments to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","fi");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Tammikuu","Helmikuu","Maaliskuu","Huhtikuu","Toukokuu","Kesäkuu","Heinäkuu","Elokuu","Syyskuu","Lokakuu","Marraskuu","Joulukuu");
$months_m = array("Tam","Hel","Maa","Huh","Tou","Kes","Hei","Elo","Syy","Lok","Mar","Jou");
$wkDays = array("Sunnuntai","Maanantai","Tiistai","Keskiviikko","Torstai","Perjantai","Lauantai","Sunnuntai");
$wkDays_l = array("Su","Ma","Ti","Ke","To","Pe","La","Su");
$wkDays_m = array("Su","Ma","Ti","Ke","To","Pe","La","Su");
$wkDays_s = array("Su","Ma","Ti","Ke","To","Pe","La","Su");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Lähetä",
"none" => "Ei mitään.",
"back" => "Takaisin",
"by" => "by",
"of" => "-",
"done" => "Done",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Tulevat",
"title_event" => "Varaus",
"title_add_event" => "Lisää varaus",
"title_check_event" => "Check Event",
"title_search" => "Tekstihaku",
"title_user_guide" => "Ohje",
"title_settings" => "Kalenteriasetukset",
"title_edit_cats" => "Muuta kategorioita",
"title_edit_users" => "Muuta käyttäjätietoja",
"title_manage_db" => "Hallinnoi tietokantaa",
"title_changes" => "Lisätyt / muutetut / poistetut varaukset",
"title_csv_import" => "CSV tuonti",
"title_ics_import" => "iCal tuonti",
"title_ics_export" => "iCal vienti",
"idx_public_name" => "Julkinen",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Optiot",
"hdr_options_submit" => "Tee valintasi ja paina 'Done'",
"hdr_options_panel" => "Valintapaneeli",
"hdr_select_date" => "Valitse päivä",
"hdr_view" => "Näkymä",
"hdr_select_view" => "Valitse näkymä",
"hdr_filter" => "Suodatin",
"hdr_select_filter" => "Valitse suodatin",
"hdr_lang" => "Kieli",
"hdr_select_lang" => "Valitse kieli",
"hdr_all_cats" => "Kaikki kategoriat",
"hdr_all_users" => "Kaikki käyttäjät",
"hdr_year" => "Vuosi",
"hdr_month_full" => "Kuukausi (7p)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "Viikko (7p)",
"hdr_week_work" => "Work week",
"hdr_day" => "Päivä",
"hdr_upcoming" => "Tulevat",
"hdr_changes" => "Muutokset",
"hdr_select_admin_functions" => "Valitse pääkäyttäjän toiminnot",
"hdr_admin" => "Hallinta",
"hdr_settings" => "Asetukset",
"hdr_categories" => "Kategoriat",
"hdr_users" => "Käyttäjät",
"hdr_database" => "Tietokanta",
"hdr_import_csv" => "CSV tuonti",
"hdr_import_ics" => "iCal tuonti",
"hdr_export_ics" => "iCal vienti",
"hdr_calendar" => "Kalenteriin",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Tulosta",
"hdr_print_page" => "Tulosta tämä sivu",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Tulevat",
"hdr_button_search" => "Search",
"hdr_search" => "Haku",
"hdr_button_add" => "Add",
"hdr_add_event" => "Lisää varaus",
"hdr_button_help" => "Help",
"hdr_help" => "User Guide",
"hdr_log_in" => "Kirjaudu",
"hdr_button_log_in" => "Näytä",
"hdr_button_log_out" => "Piilota",
"hdr_today" => "tänään", //dtpicker.js
"hdr_clear" => "tyhjä", //dtpicker.js

//event.php
"evt_no_title" => "Otsikko puuttuu",
"evt_no_start_date" => "Aloituspäivä puuttuu",
"evt_bad_date" => "Virheellinen päiväys",
"evt_bad_rdate" => "Virheellinen toiston päättymispäivä",
"evt_no_start_time" => "Aloitusaika puuttuu",
"evt_bad_time" => "Virheellinen aika",
"evt_end_before_start_time" => "Päättymisaika ennen alkamisaikaa",
"evt_end_before_start_date" => "Päättymispäivä ennen alkupäivää",
"evt_until_before_start_date" => "Toiston päättymispäivä ennen alkupäivää",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Otsikko",
"evt_venue" => "Paikka",
"evt_category" => "Kategoria",
"evt_description" => "Kuvaus",
"evt_date_time" => "Päivä / aika",
"evt_mailer" => "lähettäjä",
"evt_private" => "Yksityisvaraus",
"evt_start_date" => "Alkupäivä",
"evt_end_date" => "Päättymispäivä",
"evt_select_date" => "Valitse päivä",
"evt_select_time" => "Valitse aika",
"evt_all_day" => "Koko pv",
"evt_change" => "Muuta",
"evt_set_repeat" => "Aseta toisto",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Määritettyä toistoa ei tueta",
"evt_no_repeat" => "Ei toistoa",
"evt_repeat" => "Toisto",
"evt_repeat_on" => "Toisto joka",
"evt_until" => "asti",
"evt_blank_no_end" => "tyhjä: ei päättymispäivää",
"evt_each_month" => "joka kuukausi",
"evt_interval1_1" => "joka",
"evt_interval1_2" => "joka toinen",
"evt_interval1_3" => "joka kolmas",
"evt_interval1_4" => "joka neljäs",
"evt_interval1_5" => "joka viides",
"evt_interval1_6" => "joka kuudes",
"evt_interval2_1" => "ensimmäinen",
"evt_interval2_2" => "toinen",
"evt_interval2_3" => "kolmas",
"evt_interval2_4" => "neljäs",
"evt_interval2_5" => "viimeinen",
"evt_period1_1" => "päivä",
"evt_period1_2" => "viikko",
"evt_period1_3" => "kuukausi",
"evt_period1_4" => "vuosi",
"evt_notify" => "Lähetä viesti",
"evt_now_and_or" => "nyt ja/tai",
"evt_event_added" => "Uusi varaus",
"evt_event_edited" => "Muutettu varaus",
"evt_event_deleted" => "Poistettu varaus",
"evt_days_before_event" => "päivä(ä) ennen varausta:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 merkkiä. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Sähköpostilista liian pitkä.",
"evt_eml_list_missing" => "Muistutuksen sähköpostiosoite puuttuu",
"evt_not_in_past" => "Muistutuspäivä ohitettu",
"evt_not_days_invalid" => "Muistutuspäivä virheellinen",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "varaus lisätty",
"evt_confirm_saved" => "varaus päivitetty",
"evt_confirm_deleted" => "varaus poistettu",
"evt_add_close" => "Lisää ja sulje",
"evt_add" => "Lisää",
"evt_edit" => "Muuta",
"evt_save_close" => "Tallenna ja sulje",
"evt_save" => "Tallenna",
"evt_clone" => "Tallenna uutena",
"evt_delete" => "Poista",
"evt_close" => "Sulje",
"evt_open_calendar" => "Avaa kalenteri",
"evt_added" => "Lisätty",
"evt_edited" => "Muutettu",
"evt_is_repeating" => "on toistuva varaus.",
"evt_is_multiday" => "on monipäiväinen varaus.",
"evt_edit_series_or_occurrence" => "Haluatko muuttaa sarjaa vai pelkästään tätä varausta",
"evt_edit_series" => "Muuta sarjaa",
"evt_edit_occurrence" => "Muuta varausta",

//views
"vws_add_event" => "Lisää varaus",
"vws_view_month" => "Näytä kuukausi",
"vws_view_week" => "Näytä viikko",
"vws_view_day" => "Näytä päivä",
"vws_click_for_full" => "valitse kuukausi koko kalenterinäkymään",
"vws_view_full" => "Näytä koko kalenteri",
"vws_prev_month" => "Edellinen kuukausi",
"vws_next_month" => "Seuraava kuukausi",
"vws_today" => "Tänään",
"vws_back_to_today" => "Takaisin tähän kuukauteen",
"vws_week" => "Viikko",
"vws_wk" => "vk",
"vws_time" => "Aika",
"vws_events" => "Varaukset",
"vws_all_day" => "Koko pv",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Paikka",
"vws_events_for_next" => "Tulevat varaukset seuraaville",
"vws_days" => "päivälle",
"vws_added" => "Lisätty",
"vws_edited" => "Muutettu",
"vws_notify" => "Muistutus",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Alkaen",
"chg_select_date" => "Valitse alkupäivä",
"chg_notify" => "Muistutus",
"chg_days" => "Päivä(ä)",
"chg_added" => "Lisätty",
"chg_edited" => "Muuttaja",
"chg_deleted" => "Poistettu",
"chg_changed_on" => "Muutettu",
"chg_changes" => "Muutokset",
"chg_no_changes" => "Ei muutoksia.",

//search.php
"sch_define_search" => "Määritä haku",
"sch_search_text" => "Etsi tekstiä",
"sch_event_fields" => "Varaustiedot",
"sch_all_fields" => "Kaikki tiedot",
"sch_title" => "Otsikko",
"sch_description" => "Kuvaus",
"sch_venue" => "Paikka",
"sch_event_cat" => "Kategoria",
"sch_all_cats" => "Kaikki kategoriat",
"sch_occurring_between" => "Aikaväli",
"sch_select_start_date" => "Valitse alkupäivä",
"sch_select_end_date" => "Valitse päättymispäivä",
"sch_search" => "Etsi",
"sch_invalid_search_text" => "Etsittävä teksti tyhjä tai liian lyhyt",
"sch_bad_start_date" => "Virheellinen alkupäivä",
"sch_bad_end_date" => "Virheellinen päättymispäivä",
"sch_no_results" => "Ei tuloksia",
"sch_new_search" => "Uusi haku",
"sch_calendar" => "Siirry kalenteriin",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Tekstin hakuohjeet</h4>
<p>Kalenterin tietokannasta voidaan hakea varauksia, joissa teksti esiinytyy.</p>
<br><p><b>Etsittävä teksti</b>: Jokaisesta varauksesta etsitään tekstijonoa. Haku ei erottele isoja tai pieniä kirjaimia.</p>
<p>Kahta jokerimerkkiä voi käyttää:</p>
<ul>
<li>Alleviivattu merkki (_) hakutekstissä voi olla mikä vain yksittäinen merkki.<br>Esim.: '_e_r' voi tarkoittaa 'beer', 'dear', 'heir'.</li>
<li>et-merkki (&amp;) hakutekstissä voi olla mikä vain merkkijono.<br>Esim.: 'de&amp;r' voi tarkoittaa 'December', 'dear', 'developer'.</li>
</ul>
<p>Joka tapauksessa hakutekstissä pitää olla vähintään kaksi muuta merkkiä.</p>
<br><p><b>Varauskentät</b>: Vain valituista kentistä etsitään.</p>
<br><p><b>Varauskategoriat</b>: Vain valituista kategorioista etsitään.</p>
<br><p><b>Aikaväli</b>: Sekä alku- että loppupäivä ovat valinnaisia. Tyhjä alkupäivä tarkoittaa yhtä vuotta nykypäivästä menneisyyteen ja tyhjä loppupäivä nykypäivästä tulevaisuuteen.</p>
<br><p>Hakutulokset näytetään kronologisessa järjestyksessä.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Upcoming Events",
"ssb_all_day" => "All day",
"ssb_none" => "No events."
);
?>
