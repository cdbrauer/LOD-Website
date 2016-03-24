<?php
/*
= LuxCal event calendar lamguage file =

Tradotto in Italiano da Angelo.G. - per commenti contattare elghisa@gmail.com

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre");
$months_m = array("Gen","Feb","Mar","Apr","Mag","Giu","Lug","Ago","Set","Ott","Nov","Dic");
$wkDays = array("Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato","Domenica");
$wkDays_l = array("Dom","Lun","Mar","Mer","Gio","Ven","Sab","Dom");
$wkDays_m = array("Do","Lu","Ma","Me","Gi","Ve","Sa","Do");
$wkDays_s = array("D","L","M","M","G","V","S","D");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Invia",
"none" => "Nessuno",
"back" => "Indietro",
"by" => "da",
"of" => "di",
"done" => "Fatto",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "Non siete autorizzato ad eseguire questa azione",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Eventi prossimi",
"title_event" => "Evento",
"title_add_event" => "Aggiungi Evento",
"title_check_event" => "Controlla Evento",
"title_search" => "Ricerca Testo",
"title_user_guide" => "Guida dell'utente",
"title_settings" => "Impostazioni del calendario",
"title_edit_cats" => "Modifica Categorie",
"title_edit_users" => "Modifica Utenti",
"title_manage_db" => "Gestione del database",
"title_changes" => "Eventi Aggiunti / Modificati / Cancellati",
"title_csv_import" => "Importazione di file CSV",
"title_ics_import" => "Importazione di file iCal",
"title_ics_export" => "Esportazione di file iCal",
"idx_public_name" => "Vista Pubblica",

//header.php
"hdr_button_back" => "Torna alla pagina superiore",
"hdr_button_options" => "Opzioni",
"hdr_options_submit" => "Fare le proprie scelte e premere 'Fatto'",
"hdr_options_panel" => "Pannello Opzioni",
"hdr_select_date" => "Seleziona data",
"hdr_view" => "Vista",
"hdr_select_view" => "Seleziona vista",
"hdr_filter" => "Filtro",
"hdr_select_filter" => "Seleziona filtro",
"hdr_lang" => "Lingua",
"hdr_select_lang" => "Seleziona lingua",
"hdr_all_cats" => "Tutte le categorie",
"hdr_all_users" => "Tutti gli utenti",
"hdr_year" => "Anno",
"hdr_month_full" => "Mese (7g)",
"hdr_month_work" => "Mese Lavorativo",
"hdr_week_full" => "Settimana (7g)",
"hdr_week_work" => "Settimana Lavorativa",
"hdr_day" => "Giorno",
"hdr_upcoming" => "Eventi prossimi",
"hdr_changes" => "Modifiche",
"hdr_select_admin_functions" => "Seleziona funz. amministrazione",
"hdr_admin" => "Amministrazione",
"hdr_settings" => "Impostazioni",
"hdr_categories" => "Categorie",
"hdr_users" => "Utenti",
"hdr_database" => "Database",
"hdr_import_csv" => "Importazione CSV",
"hdr_import_ics" => "Importazione iCal",
"hdr_export_ics" => "Esportazione iCal",
"hdr_calendar" => "Vai al calendario",
"hdr_button_print" => "Stampa",
"hdr_print_page" => "Stampa questa pagina",
"hdr_button_todo" => "CoseDaFare",
"hdr_todo_list" => "Elenco CoseDaFare",
"hdr_button_upco" => "Prossimi",
"hdr_upco_list" => "Eventi prossimi",
"hdr_button_search" => "Cerca",
"hdr_search" => "Cerca",
"hdr_button_add" => "Aggiungi",
"hdr_add_event" => "Aggiungi Evento",
"hdr_button_help" => "Aiuto",
"hdr_help" => "Guida Utente",
"hdr_log_in" => "Log in",
"hdr_button_log_in" => "Log In",
"hdr_button_log_out" => "Log Out",
"hdr_today" => "oggi", //dtpicker.js
"hdr_clear" => "cancella", //dtpicker.js

//event.php
"evt_no_title" => "Nessun titolo",
"evt_no_start_date" => "Nessuna data d'inizio",
"evt_bad_date" => "Data in formato errato",
"evt_bad_rdate" => "Data di fine ripetizione errata",
"evt_no_start_time" => "Nessun orario d'inizio",
"evt_bad_time" => "Orario scorretto",
"evt_end_before_start_time" => "L'orario finale è precedente all'orario d'inizio",
"evt_end_before_start_date" => "La data finale è precedente alla data d'inizio",
"evt_until_before_start_date" => "Fine della ripetizione è precedente alla data d'inizio",
"evt_approved" => "Evento approvato",
"evt_apd_locked" => "Evento approvato e bloccato",
"evt_title" => "Titolo",
"evt_venue" => "Sede",
"evt_category" => "Categoria",
"evt_description" => "Descrizione",
"evt_date_time" => "Data / ora",
"evt_mailer" => "mittente",
"evt_private" => "Privato",
"evt_start_date" => "Inizio",
"evt_end_date" => "Fine",
"evt_select_date" => "Scegliere la data",
"evt_select_time" => "Scegliere l'orario",
"evt_all_day" => "Giornata intera",
"evt_change" => "Cambia",
"evt_set_repeat" => "Imposta ripetizione",
"evt_set" => "OK",
"evt_help" => "aiuto",
"evt_repeat_not_supported" => "Ripetizione specificata non supportata",
"evt_no_repeat" => "Nessuna ripetizione",
"evt_repeat" => "Ripetizione",
"evt_repeat_on" => "Ripeti ogni",
"evt_until" => "sino a",
"evt_blank_no_end" => "vuoto: nessuna fine",
"evt_each_month" => "ogni mese",
"evt_interval1_1" => "ogni",
"evt_interval1_2" => "ogni due",
"evt_interval1_3" => "ogni tre",
"evt_interval1_4" => "ogni quattro",
"evt_interval1_5" => "ogni cinque",
"evt_interval1_6" => "ogni sei",
"evt_interval2_1" => "primo",
"evt_interval2_2" => "secondo",
"evt_interval2_3" => "terzo",
"evt_interval2_4" => "quarto",
"evt_interval2_5" => "ultimo",
"evt_period1_1" => "giorno",
"evt_period1_2" => "settimana",
"evt_period1_3" => "mese",
"evt_period1_4" => "anno",
"evt_notify" => "Invia email",
"evt_now_and_or" => "ora e/o",
"evt_event_added" => "L'evento seguente è stato aggiunto",
"evt_event_edited" => "L'evento seguente è stato modificato",
"evt_event_deleted" => "L'evento seguente è stato modificato eliminato",
"evt_days_before_event" => " giorni prima dell'evento a:",
"evt_mail_help" => "Le email di promemoria possono essere inviate direttamente (ora) oppure il numero specificato di giorni prima dell'inzio dell'evento. Nel campo sotto si possono specificare l'indirizzo email del destinatario e/o nomi di file con gli indirizzi email dei destinatari. Ogni indirizzo/nome fle deve essere separato da punto e virgola. Il campo può contenere al max. 255 caratteri. I file con gli indirizzi email, con un indirizzo per riga, devono essere nella cartella \'emlists\'.<br>Se non si mette niente, l'estensione di defualt per il nome del file che contiene gli indirizzi email è .txt.",
"evt_eml_list_too_long" => "L'elenco degli indirizzi email contiene troppi caratteri.",
"evt_eml_list_missing" => "Manca l'indirizzo o gli indirizzi email a cui notifiare l'evento",
"evt_not_in_past" => "La data di notifica è nel passato",
"evt_not_days_invalid" => "Giorni di notifica non validi",
"evt_status" => "Status",
"evt_descr_help" => "Si possono inserire i seguenti oggetti nel campo descrizione ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; e &lt;s&gt; per il testo grassetto, corsivo, sottolineato e barrato.<br>- URL link nel seguente formato: url o url [nome], dove \'nome\' è il titolo del link. Per es. www.google.com [ricerca].<br>- piccole immagini (anteprime) nel seguente formato: cartella/nome_immagine.ext o nome_immagine.ext. Se non si mette niente, la cartella di default è \'thumbnails\'. La cartella deve essere una subcartella del calendario e l'estensione deve essere .gif, .jpg o .png. Le immagini di anteprima dovrebbero essere caricate tramite FTP.",
"evt_confirm_added" => "evento aggiunto",
"evt_confirm_saved" => "evento salvato",
"evt_confirm_deleted" => "evento eliminato",
"evt_add_close" => "Aggiungi e chiudi",
"evt_add" => "Aggiungi",
"evt_edit" => "Modifica",
"evt_save_close" => "Salva e chiudi",
"evt_save" => "Salva",
"evt_clone" => "Salva come nuovo",
"evt_delete" => "Elimina",
"evt_close" => "Chiudi",
"evt_open_calendar" => "Apri il calendario",
"evt_added" => "Aggiunto",
"evt_edited" => "Modificato",
"evt_is_repeating" => "è un evento ripetuto.",
"evt_is_multiday" => "è un evento su più giorni.",
"evt_edit_series_or_occurrence" => "Si vuole modificare la serie o solo questa occorrenza",
"evt_edit_series" => "Modifica la serie",
"evt_edit_occurrence" => "Modifica l'occorrenza",

//views
"vws_add_event" => "Aggiungi evento",
"vws_view_month" => "Vedi Mese",
"vws_view_week" => "Vedi Settimana",
"vws_view_day" => "Vedi Giorno",
"vws_click_for_full" => "per il calendario completo cliccare mese",
"vws_view_full" => "Vedi il calendario completo",
"vws_prev_month" => "Mese precedente",
"vws_next_month" => "Mese successivo",
"vws_today" => "Oggi",
"vws_back_to_today" => "Torna al mese di oggi",
"vws_week" => "Sett.",
"vws_wk" => "sett.",
"vws_time" => "ora",
"vws_events" => "Eventi",
"vws_all_day" => "Tutto il giorno",
"vws_earlier" => "Prima",
"vws_later" => "Dopo",
"vws_venue" => "Sede",
"vws_events_for_next" => "Eventi prossimi per i successivi",
"vws_days" => "giorno(i)",
"vws_added" => "Aggiunto",
"vws_edited" => "Modificato",
"vws_notify" => "Invia notifica",
"vws_check_mark" => "Casella Controllo",
"vws_none_due_in" => "Nessun evento in scadenza tra",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Dalla data",
"chg_select_date" => "Seleziona data inizio",
"chg_notify" => "Notifica",
"chg_days" => "Giorno(i)",
"chg_added" => "Aggiunto",
"chg_edited" => "Modificato",
"chg_deleted" => "Eliminato",
"chg_changed_on" => "Cambiato il",
"chg_changes" => "Cambiamenti",
"chg_no_changes" => "Nessun cambiamento.",

//search.php
"sch_define_search" => "Definire la ricerca",
"sch_search_text" => "Cerca il testo",
"sch_event_fields" => "Campi evento",
"sch_all_fields" => "Tutti i campi",
"sch_title" => "Titolo",
"sch_description" => "Descrizione",
"sch_venue" => "Sede",
"sch_event_cat" => "Categoria evento",
"sch_all_cats" => "Tutte le Categorie",
"sch_occurring_between" => "Che cade tra",
"sch_select_start_date" => "Selezionare data inizio",
"sch_select_end_date" => "Selezionare data fine",
"sch_search" => "Cerca",
"sch_invalid_search_text" => "Testo di ricerca mancante o troppo corto",
"sch_bad_start_date" => "Data inizio errata",
"sch_bad_end_date" => "Data fine errata",
"sch_no_results" => "Nessun risultato trovato",
"sch_new_search" => "Nuova Ricerca",
"sch_calendar" => "Vai al calendario",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Istruzioni per la Ricerca Testo</h4>
<p>Si possono cercare nel database degli eventi che corrispondono ad un certo 
criterio di ricerca testuale.</p>
<br><p><b>Cerca il testo</b>: Si cercher&agrave; nei campi specificati (vedi 
sotto) di ciascun evento. La ricerca &egrave; sensibile al Maiuscolo/minuscolo.</p>
<p>Si possono usare due caratteri jolly:</p>
<ul>
<li>Carattere lineetta bassa (_) nel testo di ricerca ci pu&ograve; essere un 
singolo carattere qualsiasi.<br>Es.: '_er_' trover&agrave; 'cera', 'sere', 
'Per&ugrave;'.</li>
<li>Carattere 'e commerciale' (&amp;) nel testo di ricerca ci possono essere un 
numero qualunque di caratteri.<br>Es.: 'di&amp;e' trover&agrave; 'dicembre', 
'dire', 'divenute'.</li>
</ul>
<p>Comunque il testo di ricerca deve contenere almeno altri due caratteri.</p>
<br><p><b>Campi evento</b>: Si cercher&agrave; solo nei campi specificati.</p>
<br><p><b>Categoria evento</b>: Si cercher&agrave; solo negli eventi appartenenti alla categoria specificata 
only.</p>
<br><p><b>Che cade tra</b>: Le date d'inizio e fine sono opzionali. La data 
d'inizio vuota significa: un anno indietro nel passato da oggi e la data di fine vuota 
significa: un anno avanti nel futuro da oggi.</p>
<br><p>I risultati della ricerca saranno mostrati in ordine cronologico.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Eventi prossimi",
"ssb_all_day" => "Tutto il giorno",
"ssb_none" => "Nessun evento."
);
?>
