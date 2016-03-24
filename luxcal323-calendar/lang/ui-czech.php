<?php
/*
= LuxCal event calendar user interface language file =

This file has been produced by LuxSoft. Please send your comments to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","cs");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("leden","únor","březen","duben","květen","červen","červenec","srpen","září","říjen","listopad","prosinec");
$months_m = array("led","úno","bře","dub","kvě","čvn","čnc","srp","zář","říj","lis","pro");
$wkDays = array("neděle","pondělí","úterý","středa","čtvrtek","pátek","sobota","neděle");
$wkDays_l = array("ned","pon","úte","stř","čtv","pát","sob","ned");
$wkDays_m = array("ne","po","út","st","čt","pá","so","ne");
$wkDays_s = array("N","P","Ú","S","Č","P","S","N");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Odeslat",
"none" => "Nic",
"back" => "Zpět",
"by" => "autor",
"of" => "v",
"done" => "Hotovo",
"at_time" => '-', //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "Nejste oprávnění provádět tuto akci",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Blízké události",
"title_event" => "Událost",
"title_add_event" => "Přidat událost",
"title_check_event" => "Příznaky události",
"title_search" => "Textové vyhledávání",
"title_user_guide" => "Příručka LuxCal",
"title_settings" => "Upravit nastavení kalendáře",
"title_edit_cats" => "Upravit kategorie",
"title_edit_users" => "Upravit uživatele",
"title_manage_db" => "Správa databáze",
"title_changes" => "Přidané / Změněné / Smazané události",
"title_csv_import" => "CSV File Import",
"title_ics_import" => "iCal File Import",
"title_ics_export" => "iCal File Export",
"idx_public_name" => "Veřejný pohled",

//header.php
"hdr_button_back" => "Výchozí stránka",
"hdr_button_options" => "Volby",
"hdr_options_submit" => "Vyberte si možnosti a stiskněte Hotovo",
"hdr_options_panel" => "Zobrazit panel voleb",
"hdr_select_date" => "Skok na datum",
"hdr_view" => "Pohled",
"hdr_select_view" => "Vyberte pohled",
"hdr_filter" => "Filtr",
"hdr_select_filter" => "Vyberte filtr",
"hdr_lang" => "Jazyk",
"hdr_select_lang" => "Vyberte jazyk",
"hdr_all_cats" => "Všechny kategorie",
"hdr_all_users" => "Všichni uživatelé",
"hdr_year" => "Rok",
"hdr_month_full" => "Celý měsíc",
"hdr_month_work" => "Pracovní měsíc",
"hdr_week_full" => "Celý týden",
"hdr_week_work" => "Pracovní týden",
"hdr_day" => "Den",
"hdr_upcoming" => "Blízké události",
"hdr_changes" => "Změny",
"hdr_select_admin_functions" => "Zvolte funkci pro nastavení",
"hdr_admin" => "Administrace",
"hdr_settings" => "Nastavení",
"hdr_categories" => "Kategorie",
"hdr_users" => "Uživatelé",
"hdr_database" => "Databáze",
"hdr_import_csv" => "CSV Import",
"hdr_import_ics" => "iCal Import",
"hdr_export_ics" => "iCal Export",
"hdr_calendar" => "Kalendář",
"hdr_back_to_cal" => "Zpět na kalendář",
"hdr_button_print" => "Tisk",
"hdr_print_page" => "Tisk této stránky",
"hdr_button_todo" => "Úkoly",
"hdr_todo_list" => "Úkoly",
"hdr_button_upco" => "Blízké události",
"hdr_upco_list" => "Přehled chystaných událostí",
"hdr_button_search" => "Hledat",
"hdr_search" => "Hledat v kalendáři",
"hdr_button_add" => "Přidat",
"hdr_add_event" => "Přidat událost",
"hdr_button_help" => "Nápověda",
"hdr_help" => "Uživatelská příručka",
"hdr_log_in" => "Přihlásit",
"hdr_button_log_in" => "Přihlásit",
"hdr_button_log_out" => "Odhlásit",
"hdr_today" => "Dnes", //dtpicker.js
"hdr_clear" => "Smazat", //dtpicker.js

//event.php
"evt_no_title" => "Bez názvu",
"evt_no_start_date" => "Nemá počáteční datum",
"evt_bad_date" => "Chybné datum",
"evt_bad_rdate" => "Chybné datum konce opakování",
"evt_no_start_time" => "Bez počátečního data",
"evt_bad_time" => "Chybný čas",
"evt_end_before_start_time" => "Koncový čas je před začátkem",
"evt_end_before_start_date" => "Koncové datum je před začátkem",
"evt_until_before_start_date" => "Konec opakování je před začátkem",
"evt_approved" => "Událost schválena",
"evt_apd_locked" => "Událost schválena a uzamčena",
"evt_title" => "Název",
"evt_venue" => "Místo",
"evt_category" => "Kategorie",
"evt_description" => "Popis",
"evt_date_time" => "Datum / čas",
"evt_mailer" => "mailer",
"evt_private" => "neveřejná událost",
"evt_start_date" => "Začátek",
"evt_end_date" => "Konec",
"evt_select_date" => "Zvolte datum",
"evt_select_time" => "Zvolte čas",
"evt_all_day" => "Celý den",
"evt_change" => "Změnit",
"evt_set_repeat" => "Opakování",
"evt_set" => "OK",
"evt_help" => "nápověda",
"evt_repeat_not_supported" => "Zadané opakování není podporováno",
"evt_no_repeat" => "Bez opakování",
"evt_repeat" => "Opakovat",
"evt_repeat_on" => "Opakovat každý",
"evt_until" => "až do",
"evt_blank_no_end" => "prázdné: nekončí",
"evt_each_month" => "měsíce",
"evt_interval1_1" => "každý",
"evt_interval1_2" => "každý druhý",
"evt_interval1_3" => "každý třetí",
"evt_interval1_4" => "každý čtvrtý",
"evt_interval1_5" => "každý pátý",
"evt_interval1_6" => "každý šestý",
"evt_interval2_1" => "první",
"evt_interval2_2" => "druhý",
"evt_interval2_3" => "třetí",
"evt_interval2_4" => "čtvrtý",
"evt_interval2_5" => "poslední",
"evt_period1_1" => "den",
"evt_period1_2" => "týden",
"evt_period1_3" => "měsíc",
"evt_period1_4" => "rok",
"evt_notify" => "Poslat mail",
"evt_now_and_or" => "teď a nebo",
"evt_event_added" => "Nová událost",
"evt_event_edited" => "Změněná událost",
"evt_event_deleted" => "Smazaná událost",
"evt_days_before_event" => "dní před začátkem na:",
"evt_mail_help" => "Emailové připomínky můžete odeslat hned, nebo zadaný počet dní před začátkem události. Do pole níže zadejte adresu příjemce nebo název souboru se seznamem e-mailů. Jednotlivé adresy, nebo soubory oddělte středníkem. Pole může obsahovat max. 255 znaků. Soubory s e-mailovými adresami (jedna adresa na řádek) musí být uloženy ve složce \'emlists\'.<br>Není-li uvedena, výchozí přípona souboru s adresami je .txt",
"evt_eml_list_too_long" => "Seznam emailů je příliš dlouhý.",
"evt_eml_list_missing" => "Chybí adresy pro zaslání upozornění",
"evt_not_in_past" => "Datum připomenutí již uplynulo",
"evt_not_days_invalid" => "Dny připomenutí jsou chybné",
"evt_status" => "Stav",
"evt_descr_help" => "V poli Popis můžete použít následující prvky ...<br>- HTML značky &lt;b&gt;, &lt;i&gt;, &lt;u&gt; a &lt;s&gt; for tučné, kurzívu, podtržené a přeškrtnuté písmo.<br>- URL odkazy v následujícím formátu: url nebo url [jméno], kde \'jméno\' bude název odkazu. Např. www.google.com [hledat].<br>- náhledy obrázků (thumbnails) v tomto formátu: složka/jméno_obrázku.ext nebo jméno_obrázku.ext. Není-li uvedena, výchozí složka je \'thumbnails\'. Složka musí být podložkou v calendar a přípona musí být .gif, .jpg nebo .png. Soubor s náhledem obrázku (obrázek) lze na server nahrát pomocí FTP.",
"evt_confirm_added" => "událost přidána",
"evt_confirm_saved" => "událost uložena",
"evt_confirm_deleted" => "událost smazána",
"evt_add_close" => "Přidat a zavřít",
"evt_add" => "Přidat",
"evt_edit" => "Upravit",
"evt_save_close" => "Uložit a zavřít",
"evt_save" => "Uložit",
"evt_clone" => "Uložit jako nové",
"evt_delete" => "Smazat",
"evt_close" => "Zavřít",
"evt_open_calendar" => "Otevřít kalendář",
"evt_added" => "Vloženo",
"evt_edited" => "upravil",
"evt_is_repeating" => "je opakovaná událost.",
"evt_is_multiday" => "je vicedenní událost.",
"evt_edit_series_or_occurrence" => "Chcete smazat sérii tohoto opakování",
"evt_edit_series" => "Upravit sérii",
"evt_edit_occurrence" => "Upravit tento výskyt",

//views
"vws_add_event" => "Přidat událost",
"vws_view_month" => "Měsíční pohled",
"vws_view_week" => "Týdenní pohled",
"vws_view_day" => "Denní pohled",
"vws_click_for_full" => "Kalendář akcí - Klikněte na název měsíce",
"vws_view_full" => "Ukázat celý kalendář",
"vws_prev_month" => "Předchozí měsíc",
"vws_next_month" => "Další měsíc",
"vws_today" => "Dnes",
"vws_back_to_today" => "Zpět na současný měsíc",
"vws_week" => "týden",
"vws_wk" => "T",
"vws_time" => "čas",
"vws_events" => "Události",
"vws_all_day" => "Celý den",
"vws_earlier" => "Dříve",
"vws_later" => "Později",
"vws_venue" => "Místo",
"vws_events_for_next" => "Nadcházející události pro příštích",
"vws_days" => "dnů",
"vws_added" => "Vloženo",
"vws_edited" => "Upraveno",
"vws_notify" => "Oznámit",
"vws_check_mark" => "Zatržítko",
"vws_none_due_in" => "Žádné události pro příštích",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Od data",
"chg_select_date" => "Zvolte počáteční datum",
"chg_notify" => "Připomenout",
"chg_days" => "dnů",
"chg_added" => "Vloženo",
"chg_edited" => "Upraveno",
"chg_deleted" => "Smazáno",
"chg_changed_on" => "Změněno",
"chg_changes" => "Změny",
"chg_no_changes" => "Beze změn.",

//search.php
"sch_define_search" => "Podrobnosti hledání",
"sch_search_text" => "Hledat text",
"sch_event_fields" => "Pole události",
"sch_all_fields" => "Všechna pole",
"sch_title" => "Název",
"sch_description" => "Popis",
"sch_venue" => "Místo",
"sch_event_cat" => "Kategorie události",
"sch_all_cats" => "Všechny kategorie",
"sch_occurring_between" => "Koná se mezi",
"sch_select_start_date" => "Počáteční datum",
"sch_select_end_date" => "Koncové datum",
"sch_search" => "Hledat",
"sch_invalid_search_text" => "Text pro hledání chybí, nebo je moc krátký",
"sch_bad_start_date" => "Chybné počáteční datum",
"sch_bad_end_date" => "Chybné koncové datum",
"sch_no_results" => "Nic nebylo nelzeno",
"sch_new_search" => "Nové hledání",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Pokyny pro textové vyhledávání</h4>
<p>V databázi kalendáře můžete vyhledat události odpovídající danému textu.</p>
<br><p><b>Hledat text</b>: budou prohledána vybraná pole (viz dále) všech událostí.
Při vyhledávání nejsou rozlišována malá a velká pismena.</p>
<p>Můžete použít zástupné znaky:</p>
<ul>
<li>Podtržítko (_) v hledaném textu nahradí jeden znak.
<br>Např.: '_o_a' odpovídá slovům 'voda', 'rosa', 'kosa'.</li>
<li>Znak ampersand (&amp;) zastupuje v textu libovolný počet znaků.
<br>Např: 'po&amp;a' vyhledá 'pohádka', 'Pošta', 'polední přestávka'.</li>
</ul>
<p>Hledaný text musí obsahovat alespoň dvě jiná písmena.</p>
<br><p><b>Pole události</b>: Vyhledávání textu bude probíhat pouze ve vybraných polích.</p>
<br><p><b>Kategorie události</b>: Bude se vyhledávat jen v událostech vybraného typu.</p>
<br><p><b>Koná se mezi</b>: Počáteční i koncové datum je nepovinné.
Nevyplněné počáteční datum znamená jeden rok nazpět, od dnešního data, a prázdné 
koncové datum jeden rok do budoucnosti.</p>
<br><p>Vyhledané události budou zobrazeny v chronologickém pořadí.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Nadcházející události",
"ssb_all_day" => "Celý den",
"ssb_none" => "Žádné události."
);
?>
