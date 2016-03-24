<?php
/*
= LuxCal event calendar user interface language file = ROMANIAN / ROMÂNĂ

Traducerea în limba română realizată de Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).
This file has been translated in română by Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","ro");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Ianuarie","Februarie","Martie","Aprilie","Mai","Iunie","Iulie","August","Septembrie","Octombrie","Noiembrie","Decembrie");
$months_m = array("Ian","Feb","Mar","Apr","Mai","Iun","Iul","Aug","Sep","Oct","Nov","Dec");
$wkDays = array("Duminică","Luni","Marți","Miercuri","Joi","Vineri","Sîmbătă","Duminică");
$wkDays_l = array("Dum","Lun","Mar","Mie","Joi","Vin","Sîm","Dum");
$wkDays_m = array("D","L","Ma","Mi","J","V","S","D");
$wkDays_s = array("D","L","Ma","M","J","V","S","D");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Trimite",
"none" => "Niciunul.",
"back" => "Înapoi",
"by" => "de",
"of" => "de",
"done" => "Gata",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "Nu sînteți autorizat să efectuați această operațiune",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Urmează",
"title_event" => "Eveniment",
"title_add_event" => "Adaugă eveniment",
"title_check_event" => "Confirmare eveniment",
"title_search" => "Căutare text",
"title_user_guide" => "Ghid de utilizare",
"title_settings" => "Setări generale calendar",
"title_edit_cats" => "Editare categorii",
"title_edit_users" => "Editare utilizatori",
"title_manage_db" => "Setări Bază de Date",
"title_changes" => "Adăugare/Editare/Ștergere Evenimente",
"title_csv_import" => "Import fișier CSV",
"title_ics_import" => "Import fișier iCal",
"title_ics_export" => "Export fișier iCal",
"idx_public_name" => "Acces public (doar vizualizare)",

//header.php
"hdr_button_back" => "Revenire la pagina părinte",
"hdr_button_options" => "Opțiuni",
"hdr_options_submit" => "După selecție apăsați butonul 'Gata'",
"hdr_options_panel" => "Meniu opțiuni",
"hdr_select_date" => "Selecție dată",
"hdr_view" => "Mod vizualizare",
"hdr_select_view" => "Selecție mod vizualizare",
"hdr_filter" => "Filtru",
"hdr_select_filter" => "Selecție filtru",
"hdr_lang" => "Limbă",
"hdr_select_lang" => "Selecție limbă",
"hdr_all_cats" => "Toate categoriile",
"hdr_all_users" => "Toți utilizatorii",
"hdr_year" => "Anual",
"hdr_month_full" => "Lunar (7z)",
"hdr_month_work" => "Luna curentă",
"hdr_week_full" => "Săptămînal (7z)",
"hdr_week_work" => "Săptămîna curentă",
"hdr_day" => "Zilnic",
"hdr_upcoming" => "Care urmează",
"hdr_changes" => "Modificări",
"hdr_select_admin_functions" => "Selecție opțiuni administrare",
"hdr_admin" => "Administrare",
"hdr_settings" => "Setări",
"hdr_categories" => "Categorii",
"hdr_users" => "Utilizatori",
"hdr_database" => "Bază de Date",
"hdr_import_csv" => "Import CSV",
"hdr_import_ics" => "Import iCal",
"hdr_export_ics" => "Export iCal",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Listare",
"hdr_print_page" => "Listați această pagină",
"hdr_button_todo" => "De văzut",
"hdr_todo_list" => "De văzut",
"hdr_button_upco" => "Ce urmează",
"hdr_upco_list" => "Urmează",
"hdr_button_search" => "Căutare",
"hdr_search" => "Căutare",
"hdr_button_add" => "Adăugare",
"hdr_add_event" => "Adăugare eveniment",
"hdr_button_help" => "Asistență",
"hdr_help" => "Ghid utilizator",
"hdr_log_in" => "Autentificare",
"hdr_button_log_in" => "Autentificare",
"hdr_button_log_out" => "Deautentificare",
"hdr_today" => "astăzi", //dtpicker.js
"hdr_clear" => "șterge", //dtpicker.js

//event.php
"evt_no_title" => "Fără titlu",
"evt_no_start_date" => "Fără dată de început",
"evt_bad_date" => "Dată greșită",
"evt_bad_rdate" => "Dată finală greșită",
"evt_no_start_time" => "Fără timp inițial",
"evt_bad_time" => "Timp greșit",
"evt_end_before_start_time" => "Ora de final este definită înaintea orei de început",
"evt_end_before_start_date" => "Data finală este definită înaintea datei de început",
"evt_until_before_start_date" => "Data finală pentru repetare este definită înaintea datei de început",
"evt_approved" => "Eveniment aprobat",
"evt_apd_locked" => "Eveniment aprobat și blocat",
"evt_title" => "Titlu",
"evt_venue" => "Locație",
"evt_category" => "Categorie",
"evt_description" => "Descriere",
"evt_date_time" => "Dată/Oră",
"evt_mailer" => "-",
"evt_private" => "Eveniment privat",
"evt_start_date" => "Începe la",
"evt_end_date" => "Se termină la",
"evt_select_date" => "Selecție dată",
"evt_select_time" => "Selecție oră",
"evt_all_day" => "Zilnic",
"evt_change" => "Modificare",
"evt_set_repeat" => "Setare repetiție",
"evt_set" => "OK",
"evt_help" => "detalii",
"evt_repeat_not_supported" => "repetiția specificată este incorectă",
"evt_no_repeat" => "Fără repetare",
"evt_repeat" => "Repetă",
"evt_repeat_on" => "Repetă",
"evt_until" => "pînă cînd",
"evt_blank_no_end" => "cîmp gol = fără sfîrșit",
"evt_each_month" => "fiecare lună",
"evt_interval1_1" => "în fiecare",
"evt_interval1_2" => "în oricare altă",
"evt_interval1_3" => "la fiecare a treia",
"evt_interval1_4" => "la fiecare a patra",
"evt_interval1_5" => "la fiecare a cincea",
"evt_interval1_6" => "la fiecare a șasea",
"evt_interval2_1" => "în prima",
"evt_interval2_2" => "în a doua",
"evt_interval2_3" => "în a treia",
"evt_interval2_4" => "în a patra",
"evt_interval2_5" => "ultima",
"evt_period1_1" => "zi",
"evt_period1_2" => "săptămînă",
"evt_period1_3" => "lună",
"evt_period1_4" => "an",
"evt_notify" => "Trimite email",
"evt_now_and_or" => "acum și/sau cu",
"evt_event_added" => "Eveniment adăugat",
"evt_event_edited" => "Eveniment modificat",
"evt_event_deleted" => "Eveniment șters",
"evt_days_before_event" => "zi(le) înainte de eveniment:",
"evt_mail_help" => "Emailurile de atenționare pot fi trimise imediat sau cu cîteva zile înaintea evenimentului. În cîmpul de mai jos se pot specifica adrese de email și/sau nume de fișiere cu adrese de email unde vor fi trimise emailurile de reamintire. Adresele de email/numele de fișiere trebuiesc separate prin caracterul \';\', cîmpul putînd conține maxim 255 de caractere. Fișierul cu adresele de email (conține cîte o adresă pe rînd) trebuie să fie localizat în folderul \'emlists\' în server. <br>Cînd este omisă, extensia implicită a fișierului cu adrese de email se consideră că este .txt.",
"evt_eml_list_too_long" => "Lista de adrese este prea mare.",
"evt_eml_list_missing" => "Lipsește adresa de email",
"evt_not_in_past" => "Data de notificare este incorectă (este expirată deja)",
"evt_not_days_invalid" => "Zile de notificare invalide",
"evt_status" => "Stare",
"evt_descr_help" => "Următoarele elemente pot fi incluse în cîmpul de descriere ...<br>- taguri HTML &lt;b&gt;, &lt;i&gt;, &lt;u&gt; și &lt;s&gt; pentru text bold, italic, subliniat și supraliniat.<br>- Linkurile URL în următorul format: url sau url [nume], unde \'nume\' reprezintă titlul linkului. Ex. www.google.com [caută].<br>- imagini reprezentative (thumbnails) în următorul format: folder/nume_imagine.ext sau nume_imagine.ext. Cînd este omis, folderul implicit este \'thumbnails\'. Folderul, specificat sau nu, reprezintă un subfolder al calendarului din server, extensiile acceptate fiind .gif, .jpg sau .png. Imaginile trebuiesc încărcate prin FTP.",
"evt_confirm_added" => "eveniment adăugat",
"evt_confirm_saved" => "eveniment salvat",
"evt_confirm_deleted" => "eveniment șters",
"evt_add_close" => "Adaugă și închide",
"evt_add" => "Adăugă",
"evt_edit" => "Modifică",
"evt_save_close" => "Salvează și închide",
"evt_save" => "Salvează",
"evt_clone" => "Salvează ca nou",
"evt_delete" => "Șterge",
"evt_close" => "Închide",
"evt_open_calendar" => "Deschide calendarul",
"evt_added" => "Adăugat",
"evt_edited" => "Modificat",
"evt_is_repeating" => "este un eveniment repetitiv.",
"evt_is_multiday" => "este un eveniment pe mai multe zile.",
"evt_edit_series_or_occurrence" => "Doriți să modificați seria repetițiilor sau doar acest eveniment",
"evt_edit_series" => "Modifică serie de evenimente",
"evt_edit_occurrence" => "Modifică doar acest eveniment",

//views
"vws_add_event" => "Adăugare eveniment",
"vws_view_month" => "Vizualizare lună",
"vws_view_week" => "Vizualizare săptămînă",
"vws_view_day" => "Vizualizare zi",
"vws_click_for_full" => "pentru calendar complet selectați luna",
"vws_view_full" => "Vizualizare completă calendar",
"vws_prev_month" => "Luna anterioară",
"vws_next_month" => "Luna următoare",
"vws_today" => "Astăzi",
"vws_back_to_today" => "Salt la luna curentă",
"vws_week" => "săptămîna",
"vws_wk" => "săpt.",
"vws_time" => "Timp",
"vws_events" => "Evenimente",
"vws_all_day" => "Zilnic",
"vws_earlier" => "Înainte de",
"vws_later" => "Mai tîrziu",
"vws_venue" => "Locație",
"vws_events_for_next" => "Evenimentele pentru următoarele",
"vws_days" => "zi(le)",
"vws_added" => "Adăugat",
"vws_edited" => "Modificat",
"vws_notify" => "Notificare",
"vws_check_mark" => "Confirmare",
"vws_none_due_in" => "Niciun eveniment nu este programat",
"vws_download" => "Descărcare",
"vws_download_title" => "Se descarcă un fișier text care conține aceste evenimente",

//changes.php
"chg_from_date" => "De la",
"chg_select_date" => "Selectare data inițială",
"chg_notify" => "Notificare",
"chg_days" => "Zi(le)",
"chg_added" => "Adăugat",
"chg_edited" => "Modificat",
"chg_deleted" => "Șters",
"chg_changed_on" => "Modificat la",
"chg_changes" => "Modificări",
"chg_no_changes" => "Nicio Modificare.",

//search.php
"sch_define_search" => "Parametri căutare",
"sch_search_text" => "Text căutare",
"sch_event_fields" => "Căutare în",
"sch_all_fields" => "Toate cîmpurile",
"sch_title" => "Titlu",
"sch_description" => "Descriere",
"sch_venue" => "Locație",
"sch_event_cat" => "Categorie eveniment",
"sch_all_cats" => "Toate Categoriile",
"sch_occurring_between" => "Între datele",
"sch_select_start_date" => "Selecție dată început",
"sch_select_end_date" => "Selecție dată sfîrșit",
"sch_search" => "Căutare",
"sch_invalid_search_text" => "Text de căutat lipsă sau prea scurt",
"sch_bad_start_date" => "Dată de început greșită",
"sch_bad_end_date" => "Dată de sfîrșit greșită",
"sch_no_results" => "Nu a fost găsit nimic",
"sch_new_search" => "Căutare nouă",
"sch_calendar" => "Afișare calendar",
"sch_extra_field1" => "Cîmp suplimentar 1",
"sch_extra_field2" => "Cîmp suplimentar 2",
"sch_instructions" =>
"<h4>Instrucțiuni căutare</h4>
<p>Pagina permite căutarea unui text oarecare în baza de date cu afișarea evenimentelor care conțin acel text.</p>
<br><p><b>Text căutare</b>: Cîmpul permite introducerea textului (șirului de caractere) de căutat. Căutarea nu ține cont de tipul caracterelor (majuscule sau minuscule).</p>
<p>Pentru simplificare, în definirea textului de căutat pot fi folosite și două caractere speciale:</p>
<ul>
<li>Caracterul 'Underscore' (_) folosit în definirea textului de căutat înlocuiește orice caracter singular. Spre exemplu: textul '_er_' va determina căutarea atît a cuvîntului 'bere' cît și a cuvîntului 'zero'.</li>
<li>Caracterul 'Ampersand' (&amp;) înlocuiește la căutare un grup de caractere. Spre exemplu textul 'de&' va determina găsirea cuvintelor 'Decembrie', 'deal', 'dezvoltare' etc..</li>
</ul>
<p>Ca restricție, textul de căutare trebuie să aibă cel puțin două caractere înafară de caracterele speciale menționate mai sus.</p>
<br><p><b>Căutare în</b>: Textul introdus va fi căutat în toate cîmpurile marcate.</p>
<br><p><b>Categorie evenimente</b>: Textul introdus va fi căutat doar în categoria de evenimente selectată.</p>
<br><p><b>Între datele</b>: Data de început și de sfîrșit este opțională. Cîmp gol pentru data de început va determina căutarea textului în toate evenimentele începînd cu un an în urmă, față de data actuală, în timp ce un cîmp gol pentru data de sfîrșit va determina căutarea textului în toate evenimentele începînd cu data actuală, un an, în viitor.</p>
<br><p>Rezultatul căutării este afișat în ordine cronologică.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Urmează",
"ssb_all_day" => "Toate zilele",
"ssb_none" => "Niciun eveniment."
);
?>
