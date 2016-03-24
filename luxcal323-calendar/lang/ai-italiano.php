<?php
/*
= LuxCal event calendar admin interface language file =

Tradotto in Italiano da Angelo.G. - per commenti contattare elghisa@gmail.com

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Nessuno",
"all" => "Tutti",
"back" => "Indietro",
"close" => "Chiudi",
"always" => "sempre",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Year",
"month" => "Month",
"week_day" => "Week/Day",
"upcoming" => "Upcoming",

//settings.php - fieldset headers + general
"set_general_settings" => "Calendario",
"set_navbar_settings" => "Barra di Navigazione",
"set_event_settings" => "Eventi",
"set_user_settings" => "Utenti",
"set_email_settings" => "Impostazioni Email",
"set_perfun_settings" => "Funzioni Periodiche<br>(rilevanti solo se viene definito un cron job)",
"set_minical_settings" => "Mini Calendario (rilevanti solo se usato)",
"set_sidebar_settings" => "Barra laterale<br>(rilevante se in uso)",
"set_view_settings" => "Visualizzazione",
"set_dt_settings" => "Data/Ora",
"set_save_settings" => "Salva Impostazioni",
"set_missing_invalid" => "impostazioni mancanti o non valide (sfondo evidenziato)",
"set_settings_saved" => "Impostazioni Calendario salvate",
"set_save_error" => "Errore database - Salvataggio impostazioni calendario fallito",
"hover_for_details" => "Passare con il mouse sopra le descrizioni per spiegazioni dettagliate",
"default" => "default",
"enabled" => "abilitato",
"disabled" => "disabilitato",
"no" => "no",
"yes" => "sì",
"or" => "o",
"minutes" => "minuti",
"pixels" => "pixel",
"no_way" => "Non siete autorizzato ad eseguire quest'azione.",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Titolo del Calendario",
"calendarTitle_text" => "Mostrato nella barra superiore del calendario e usato nelle notifiche via email.",
"calendarUrl_label" => "URL del Calendario",
"calendarUrl_text" => "L\'indirizzo del sito web del Calendario.",
"calendarEmail_label" => "Email del Calendario",
"calendarEmail_text" => "L\'indirizzo email del mittente usato nelle notifiche via email.<br>Formato: \'email\' o \'nome&#8249;email&#8250;\'. \'nome\' può essere il nome del calendario.",
"backLinkUrl_label" => "Link alla pagina superiore",
"backLinkUrl_text" => "URL della pagina padre. Se specificato, verrà visualizzato un pulsante Indietro a sinistra della Barra di Navigazione con il collegamento a questo URL.<br>Per esempio per tornare indietro alla pagina da cui è stato lanciato il calendario.",
"timeZone_label" => "Fuso orario",
"timeZone_text" => "Il fuso orario del calendario, usato per calcolare l\'ora corrente.",
"see" => "vedi",
"notifSender_label" => "Mittente delle email di notifica",
"notifSender_text" => "Quando il calendario invia una email, il campo mittente della email può contenere l\'indirizzo email del calendario o l\'indirizzo email dell\'utente che ha creato l\'evento.<br>Se è l\'indirizzo email dell\'utente, il destinatario può rispondere alla email.",
"rssFeed_label" => "Link ai feed RSS",
"rssFeed_text" => "Se abilitato: Per gli utenti che hanno almeno il diritto di \'vedere\', sarà visibile un link al feed RSS nel piè di pagina del calendario e sarà aggiunto un link al feed RSS all'intestazione HTML delle pagine del calendario.",
"calendar" => "calendario",
"user" => "utente",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Pulsanti di Navigazione con testo",
"navButText_text" => "Se abilitato: I pulsanti sulla Barra di Navigazione saranno mostrati con del testo. Se disabilitato i pulsanti saranno mostrati con delle icone.",
"navBar_label" => "Barra di Navigazione",
"navBar_text" => "Se abilitato: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navTodoList_label" => "Pulsante DaFare",
"navUpcoList_label" => "Pulsante Prossimi",
"optionsPanel_label" => "Pannello Opzioni",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>The user filter can be used to display only events created by one specific user.<br>The category filter can be used to display only events belonging to a specific event category.<br>The language selection menu can be used to select the user interface language. (enabling only useful if several languages are installed)",
"userMenu_label" => "Filtro utenti",
"catMenu_label" => "Filtro categorie",
"langMenu_label" => "Selezione lingua",
"defaultView_label" => "Vista predefinita all\'avvio",
"defaultView_text" => "Le viste possibili all\'avvio del calendario sono:<br>- Anno<br>- Mese<br>- Settimana<br>- Giorno<br>- Eventi Prossimi<br>- Modifiche<br>Scelta consigliata: Mese o Eventi Prossimi.",
"language_label" => "Lingua predefinita dell\'interfaccia utente",
"language_text" => "I file ui-{lingua}.php, ai-{lingua}.php, ug-{lingua}.php e ug-layout.png devono essere presenti nella directory lang/. {lingua} = lingua dell\'interfaccia utente selezionata. I nomi dei file devono essere tutti minuscoli !",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Inserimento di eventi privati",
"privEvents_text" => "Gli eventi privati sono visibili solo all\'utente che ha inserito l\'evento.<br>Abilitato: gli utenti possono inserire eventi privati.<br>Default: quando si aggiunge un evento la casella \'privato\' nella finestra Eventi sarà selezionata per default.<br>Sempre: quando si aggiunge un evento questo sarà sempre privato, la casella \'privato\' nella finestra Eventi non sarà visibile.",
"details4All_label" => "Mostra i dettagli dell\'evento a tutti gli utenti",
"details4All_text" => "Se abilitato: i dettagli dell\'evento saranno visibili al proprietario dell\'evento e a tutti gli altri utenti.<br>Se disabilitato: i dettagli dell\'evento saranno visibili solo al proprietario dell\'evento e agli utenti con diritti \'crea tutti gli eventi\'. Gli utenti con minori diritti non vedranno i dettagli dell\'evento.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Colore dell'evento basato sul",
"eventColor_text" => "Gli eventi nelle varie viste possono essere mostrati con il colore assegnato all\'utente che ha creato l\'evento o con il colore della categoria dell\'evento.",
"xField1_label" => "Extra field 1 label",
"xField2_label" => "Extra field 2 label",
"xFieldx_text" => "Name of an optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>The specified name can be max. 15 characters long. E.g. \'Email address\', \'Website\', \'Phone number\'.",
"logged_in" => 'logged in',
"manager_only" => 'manager',
"owner_color" => "colore del proprietario",
"cat_color" => "colore della categoria",

//settings.php - user account settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Auto registrazione",
"selfReg_text" => "Consente agli utenti di registrarsi e di avere accesso al calendario.",
"selfRegPrivs_label" => "Diritti per chi si registra da solo",
"selfRegPrivs_text" => "Diritti di accesso per gli utenti che si autoregistrano.<br>- vedere: solo visualizzazione<br>- creare i propri eventi: creare e modificare solo i propri eventi<br>- creare tutti gli eventi: creare e modificare gli eventi propri e quelli degli altri",
"selfRegNot_label" => "Notifica dell\'Auto registrazione",
"selfRegNot_text" => "Invia una email di notifica all\'indirizzo email del calendario quando è avvenuta un\'auto registrazione.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "Giorni di validità del cookie \'Ricordamelo\'",
"cookieExp_text" => "Numero di giorni prima che il cookie impostato dall\'opzione \'Ricordamelo\' (durante il Log In) scada.",
"view" => "Vedere",
"post_own" => "Creare i propri eventi",
"post_all" => "Creare tutti gli eventi",
"manager" => 'crea/gestisci',

//settings.php - view settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"evtTemplGen_label" => "Event template - General views",
"evtTemplGen_text" => "The event fields to be displayed in the various calendar views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"evtTemplUpc_label" => "Event template - Upcoming view",
"evtTemplUpc_text" => "The event fields to be displayed in the Upcoming Events views can be specified by means of a sequence of numbers.<br>If a number is specified in the sequence, the corresponding field will be displayed.",
"popBoxFields_label" => "Hover box event fields",
"popBoxFields_text" => "The event fields to be displayed in the hover box with event details in the various calendar views can be specified by means of a sequence of numbers. <br>If a number is specified in the sequence, the corresponding field will be displayed.<br>If no fields are specified at all, no hover box will be displayed.",
"templFields_text" => "Meaning of the numbers:<br>1: Venue field<br>2: Event category field<br>3: Description field<br>4: Extra field 1 (see below)<br>5: extra field 2 (see below)<br>6: Email notification data (only if a notification has been requested)<br>7: Date/time added/edited and the associated user(s).<br>The order of the numbers determine the order of the displayed fields.",
"popBoxShow_label" => "Hover box with event details",
"popBoxShow_text" => "If enabled, a box with event details will be displayed when hovering an event in the selected views. The event details will not be displayed if no hover box event fields (see above) have been specified.",
"yearStart_label" => "Mese d\'inizio nella vista Anno",
"yearStart_text" => "Se si specifica un mese d\'inizio (1 - 12), nella vista Anno il calendario comincierà sempre con questo mese e l\'anno di questo primo mese cambierà solo con il primo giorno dello stesso mese dell\'anno succesivo.<br>Il valore 0 ha un significato particolare: il mese d\'inizio si basa sulla data corrente e cadrà nella prima riga di mesi.",
"colsToShow_label" => "Colonne da mostrare nella vista Anno",
"colsToShow_text" => "Numero di mesi da mostrare in ciascuna riga nella vista Anno.<br>Scelta consigliata: 3 o 4.",
"rowsToShow_label" => "Righe da mostrare nella vista Anno",
"rowsToShow_text" => "Numero di righe da quattro mesi ciascuna da mostrare nella vista Anno.<br>Scelta consigliata: 4, che consente di vedere assieme 16 mesi.",
"weeksToShow_label" => "Settimane da mostrare nella vista Mese",
"weeksToShow_text" => "Numero di settimane da mostrare nella vista Mese.<br>Scelta consigliata: 10, che consente di avere sotto mano 2,5 mesi.<br>Il valore 0 e 1 hanno un significato speciale:<br>0: mostra esattamente 1 mese - i giorni precedenti e successivi sono vuoti.<br>1: mostra esattamente 1 mese - mostra glip eventi nei giorni precedenti e successivi.",
"workWeekDays_label" => "Giorni lavorativi settimanali",
"workWeekDays_text" => "Giorni da mostrare in ciascuna settimana nelle viste Mese lavorativo e Settimana lavorativa.<br>Inserire il numero di giorni che devono essere visibili. Numeri validi:<br>1 = Lunedì<br>2 = Martedì<br>....<br>7 = Domenica<br>per es. 12345 : Lunedì - Venerdì",
"lookaheadDays_label" => "Giorni da guardare al futuro",
"lookaheadDays_text" => "Numero di giorni futuri da considerare per gli eventi prossimi, nell\'Elenco Cose da Fare e nei feed RSS.",
"dwStartHour_label" => "Ora d\'inizio per le viste Giorno/Settimana",
"dwStartHour_text" => "L\'ora d\'inizio in cui considerare l\'inizio degli eventi giornalieri.<br>L\'impostazione di questo valore, per es. a 6, consente di non sprecare spazio nelle viste Giorno/Settimana per il tempo del riposo tra mezzanotte e le 6 del mattino.<br>Il selettore dell\'ora, usato per inserire un tempo, comincerà anch\'esso a quell\'ora.",
"dwEndHour_label" => "Ora di fine nelle viste Giorno/Settimana",
"dwEndHour_text" => "L\'ora in cui finisce un giorno normale di eventi.<br>Per es. impostare questo valore alle 18 per non sprecare spazio nelle viste Settimana/Giorno per il tempo del riposo compreso tra le 18 e mezzanotte.<br>Il selettore dell\'ora, usato per inserire un tempo, finirà anch\'esso a quell\'ora.",
"dwTimeSlot_label" => "Intervallo di tempo nelle viste Giorno/Settimana",
"dwTimeSlot_text" => "Visualizzazione degli intervalli di tempo in minuti nelle viste Giorno/Settimana.<br>Questo valore, assieme all\'Ora d\'inizio (vedi prima) determina il numero di righe nelle viste Giorno/Settimana.",
"dwTsHeight_label" => "Altezza intervallo di tempo",
"dwTsHeight_text" => "Altezza in pixel della visualizzazione degli intervalli di tempo nelle viste Giorno/Settimana.",
"showLinkInMV_label" => "Mostra collegamenti nella vista Mese",
"showLinkInMV_text" => "Se attivato, gli URL nella descrizione dell\'evento saranno mostrati come collegamenti ipertestuali nella vista Mese",
"monthInDCell_label" => "Mese in tutte le celle dei giorni",
"monthInDCell_text" => "Nella vista Mese mostra il nome del mese in 3 lettere in ogni giorno",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Formato data (dd mm yyyy)",
"dateFormat_text" => "Stringa di testo che definisce il formato della data degli eventi nelle viste del calendario e nei campi d\'inserimento.<br>Caratteri possibili: y = anno, m = mese e d = giorno.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "per es. y.m.d: 2013.10.31",
"MdFormat_label" => "Formato Data (dd mese)",
"MdFormat_text" => "Stringa di testo che definisce il formato della data costituita da giorno e mese.<br>Caratteri possibili: M = mese completo, d = giorno in cifre.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>d M: 12 Aprile<br>M, d: Luglio, 14",
"MdFormat_expl" => "per es. M, d: Luglio, 14",
"MdyFormat_label" => "Formato Data (dd mese yyyy)",
"MdyFormat_text" => "Stringa di testo che definisce il formato della data costituita da giorno, mese e anno.<br>Caratteri possibili: d = giorno in cifre, M = mese completo, y = anno in cifre.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>d M y: 12 Aprile 2013<br>M d, y: Luglio 8, 2013",
"MdyFormat_expl" => "per es. M d, y: Luglio 8, 2013",
"MyFormat_label" => "Formato Data (mese yyyy)",
"MyFormat_text" => "Stringa di testo che definisce il formato della data costituita da mese e anno.<br>Caratteri possibili: M = mese completo, y = anno in cifre.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>M y: Aprile 2013<br>y - M: 2013 - Luglio",
"MyFormat_expl" => "per es. M y: Aprile 2013",
"DMdFormat_label" => "Formato Data (giorno dd mese)",
"DMdFormat_text" => "Stringa di testo che definisce il formato della data costituita da giorno della settimana, giorno e mese.<br>Caratteri possibili: WD = giorno della settimana, M = mese completo, d = giorno in cifre.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>WD d M: Venerdì 12 Aprile<br>WD, M d: Lunedì, Luglio 14",
"DMdFormat_expl" => "per es. WD - M d: Domenica - Aprile 6",
"DMdyFormat_label" => "Formato Data (giorno dd mese yyyy)",
"DMdyFormat_text" => "Stringa di testo che definisce il formato della data costituita da giorno della settimana, giorno, mese e anno.<br>Caratteri possibili: WD = giorno della settimana, M = mese completo, d = giorno in cifre, y = anno in cifre.<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>WD d M y: Venerdì 13 Aprile 2013<br>WD - M d, y: Lunedì - Luglio 16, 2013",
"DMdyFormat_expl" => "per es. WD, M d, y: Lunedì, Luglio 16, 2013",
"timeFormat_label" => "Formato ora (hh mm)",
"timeFormat_text" => "Stringa di testo che definisce il formato dell\'ora degli eventi nelle viste del calendario e nei campi d\'inserimento.<br>Caratteri possibili: h = ore, H = ore a due cifre, m = minuti, a = am/pm (opzionale), A = AM/PM (opzionale).<br>Si possono usare caratteri non alfanumerici come separatori e saranno utilizzati così come digitati.<br>Esempi:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "per es. h:m: 22:35 e h:mA: 10:35PM",
"weekStart_label" => "Primo giorno della settimana",
"weekStart_text" => "Primo giorno della settimana.",
"weekNumber_label" => "Mostra il numero delle settimane",
"weekNumber_text" => "La visualizzazione dei numeri delle settimane nelle viste Anno, Mese e Settimana può essere attivata o no",
"time_format_us" => "12-ore AM/PM",
"time_format_eu" => "24-ore",
"sunday" => "Domenica",
"monday" => "Lunedì",
"time_zones" => "FUSI ORARI",
"dd_mm_yyyy" => "gg-mm-aaaa",
"mm_dd_yyyy" => "mm-gg-aaaa",
"yyyy_mm_dd" => "aaaa-mm-gg",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Server di Posta",
"mailServer_text" => "PHP mail va bene per messaggi non autenticati in piccolo numero. Per un gran numero di messaggi o quando è necessaria l\'autenticazione, si dovrebbe usare SMTP mail.<br>Per usare SMTP mail si deve avere un server di posta SMTP. I parametri di configurazione usati per il server SMTP devono essere specificati nel seguito. Se la posta è disbilitata la sezioni Invia mail nella finestra Eventi sarà eliminata.",
"smtpServer_label" => "Nome del server SMTP",
"smtpServer_text" => "Se si seleziona SMTP mail il nome del server SMTP deve essere specificato qui. Per esempio per il server SMTP di gmail: smtp.gmail.com.",
"smtpPort_label" => "Numero porta SMTP",
"smtpPort_text" => "Se si seleziona SMTP mail il numero della porta SMTP deve essere specificato qui. Per esempio 25, 465 o 587. Gmail per esempio usa la porta numero 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "Se si seleziona SMTP mail , selezionare qui se il secure sockets layer (SSL) deve essere abilitato. Per gmail: abilitato",
"smtpAuth_label" => "Autenticazione SMTP",
"smtpAuth_text" => "Se si seleziona l\'autenticazione SMTP, il nome utente e password qui specificate saranno usate per autenticare le mail tramite SMTP.",
"smtpUser_label" => "Nome utente SMTP",
"smtpUser_text" => "Se si seleziona SMTP mail, specificare qui il nome utente SMTP. Per gmail questo è la parte che precede @ del propio indirizzo email.",
"smtpPass_label" => "Password SMTP",
"smtpPass_text" => "Se si seleziona SMTP mail, specificare qui la password SMTP.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Riassunto delle operazioni pianificate all\'amministratore",
"cronSummary_text" => "Invia un riassunto delle operazioni pianificate all\'amministratore del calendario.<br>Abilitarlo è utile solo se sul vostro server:<br>- è stata attivata un\'operazione pianificata.",
"chgEmailList_label" => "Email di destinazione per le modifiche",
"chgEmailList_text" => "Indirizzi email di destinatione che periodicamente ricevono una email con le modifiche al calendario.<br>Gli indirizzi email devono essere separati da punti e virgola.",
"chgNofDays_label" => "Giorni indietro da controllare per le modifiche",
"chgNofDays_text" => "Numero di giorni passati da controllare per le modifiche al calendario.<br>Se il numero di giorni è impostato a 0 non sarà inviato alcun sommario delle modifiche.",
"icsExport_label" => "Esportazione giornaliera degli eventi iCal",
"icsExport_text" => "Se abilitato: Tutti gli eventi nell\'intervallo di tempo compreso tra -1 settimana e +1 un anno saranno esportati nel formato iCalendar in un file .ics nella cartella \'files\'.<br>Il nome del file sarà il nome del calendario con spazi bianchi sostituiti da lineette basse. I vecchi file saranno sovrascritti dai file nuovi.",
"eventExp_label" => "Giorni di scadenza dell\'evento",
"eventExp_text" => "Numero di giorni seguenti alla data dell\'evento quando esso scade e viene eliminato automaticamente.<br>Se è 0 o se non c'è alcun cron job in esecuzione, nessun evento sarà eliminato automaticamente.",
"maxNoLogin_label" => "Num. max. di giorni senza aver fatto il log in",
"maxNoLogin_text" => "Se un utente non ha effettuato il log in per un tenmpo pari a questo numero di giorni, il suo account sarà cancellato automaticamente.<br>Se il valore è impostato a 0, gli account utente non saranno mai cancellati.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Viste del Mini calendario",
"miniCalView_text" => "Le possibili viste del mini calendario sono:<br>- Mese completo<br>- Mese lavorativo *)<br>- Settimana completa<br>- Settimana lavorativa *)<br>*) Per i giorni lavorativi vedere questa pagina: Viste - Giorni lavorativi settimanali",
"miniCalPost_label" => "Creazione di eventi nel mini calendario",
"miniCalPost_text" => "Importante solo se si usa il mini calendario!<br>Se abilitato gli utenti possono:<br>- creare nuovi eventi nel mini calendario cliccando la barra superiore di una casella di un giorno<br>- modificare/cancellare eventi cliccando il quadratino che rappresenta l\'evento<br>Nota: Sono applicabili i diritti di accesso dell\'Utente Pubblico.",
"popFieldsMcal_label" => "Event fields - mini calendar hover box",
"popFieldsMcal_text" => "The event fields to be displayed in an overlay when the user hovers an event in the mini calendar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed..<br>If no fields are specified at all, no hover box will be displayed",
"mCalUrlFull_label" => "URL al calendario completo dal mini cal",
"mCalUrlFull_text" => "Quando si clicca sul mese in alto nel mini calendario, per passare al calendario completo, l\'utente sarà reindirizzato a questo URL.<br>Se non specificato, il calendario completo si aprirà in una nuova finestra.<br>Questo URL è particolarmente utile quando il calendario completo è contenuto in un\'altra pagina utente esistente.",
"popFieldsSbar_label" => "Event fields - sidebar hover box",
"popFieldsSbar_text" => "The event fields to be displayed in an overlay when the user hovers an event in the stand-alone sidebar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"showLinkInSB_label" => "Mostra i link nella barra laterale",
"showLinkInSB_text" => "Visualizza gli URL in una descrizione di un evento come collegamento ipertestuale nella barra laterale degli eventi prossimi",
"sideBarDays_label" => "Giorni avanti da guardare nela barra laterale",
"sideBarDays_text" => "Numero di giorni futuri da considerare per gli eventi nella barra laterale.",

//login.php
"log_log_in" => "Log In",
"log_remember_me" => "Ricordami",
"log_register" => "Registrazione",
"log_change_my_data" => "Modifica i dati",
"log_change" => "Modifica",
"log_un_or_em" => "Nome Utente o Indirizzo e-mail",
"log_un" => "Nome utente",
"log_em" => "Email",
"log_pw" => "Password",
"log_new_un" => "Nuovo Nome Utente",
"log_new_em" => "Nuovo indirizzo email",
"log_new_pw" => "Nuova password",
"log_pw_msg" => "Questa e' les log in details for calendar",
"log_pw_subject" => "La %% password", //%% will be replaced by calendar name
"log_npw_subject" => "La nuova %% password", //%% will be replaced by calendar name
"log_npw_sent" => "La nuova password è stata inviata.",
"log_registered" => "Registrazione avvenuta - La password è stata inviata per email",
"log_not_registered" => "Registrazione fallita",
"log_un_exists" => "Il nome utente esiste già",
"log_em_exists" => "L'indirizzo email esiste già",
"log_un_invalid" => "Nome utente non valido (lunghezza min 2: A-Z, a-z, 0-9, e _-.) ",
"log_em_invalid" => "Indirizzo email non valido",
"log_un_em_invalid" => "Il nome utente/email non è valido",
"log_un_em_pw_invalid" => "Il nome utente/email o password non è corretto",
"log_no_un_em" => "Non è stato inserito il nome utente/email",
"log_no_un" => "Inserire il nome utente",
"log_no_em" => "Inserire l'indirizzo email",
"log_no_pw" => "Non è stata inserita la password",
"log_no_rights" => "Login rifiutato: non si hanno diritti di visualizzazione - Contattare l'amministratore",
"log_send_new_pw" => "Invia una nuova password",
"log_if_changing" => "Solo se cambia",
"log_no_new_data" => "Nessun dato da modificare",
"log_invalid_new_un" => "Nuovo nome utente non valido (lunghezza min 2: A-Z, a-z, 0-9, e _-.) ",
"log_new_un_exists" => "Il nuovo nome utente esiste già",
"log_invalid_new_em" => "Il nuovo indirizzo email non è valido",
"log_new_em_exists" => "Il nuovo indirizzo email esiste già",
"log_ui_language" => "Lingua dell'interfaccia utente",
"log_new_reg" => "Registrazione nuovo utente",
"log_date_time" => "Data / ora",

//categories.php
"cat_list" => "Elenco delle Categorie",
"cat_edit" => "Modifica",
"cat_delete" => "Elimina",
"cat_add_new" => "Aggiungi una nuova categoria",
"cat_add" => "Aggiungi",
"cat_edit_cat" => "Modifica categoria",
"cat_name" => "Nome categoria",
"cat_sequence" => "Sequenza",
"cat_in_menu" => "nel menu",
"cat_text_color" => "Colore del testo",
"cat_background" => "Colore di fondo",
"cat_select_color" => "Selezione colore",
"cat_save" => "Aggiorna",
"cat_added" => "Categoria aggiunta",
"cat_updated" => "Categoria aggiornata",
"cat_deleted" => "Categoria eliminata",
"cat_invalid_color" => "Formato colore non valido (#XXXXXX where X = HEX-value)",
"cat_not_added" => "Categoria non aggiunta",
"cat_not_updated" => "Categoria non aggiornata",
"cat_not_deleted" => "Categoria non eliminata",
"cat_nr" => "n.",
"cat_repeat" => "Ripeti",
"cat_every_day" => "ogni giorno",
"cat_every_week" => "ogni settimana",
"cat_every_month" => "ogni mese",
"cat_every_year" => "ogni anno",
"cat_approve" => "Eventi necessitano approvazione",
"cat_public" => "Pubblico",
"cat_check_mark" => "Segno di spunta",
"cat_label" => "etichetta",
"cat_mark" => "segna",
"cat_name_missing" => "Manca il nome della categoria",
"cat_mark_label_missing" => "Manca il segno di spunta/etichetta",

//users.php
"usr_list_of_users" => "Elenco Utenti",
"usr_id" => "ID Utente",
"usr_name" => "Nome Utente",
"usr_email" => "Indirizzo email",
"usr_password" => "Password",
"usr_rights" => "Diritti",
"usr_edit_user" => "Modifica profilo utente",
"usr_add" => "Aggiungi un nuovo utente",
"usr_edit" => "Modifica",
"usr_delete" => "Elimina",
"usr_view" => "Vedi",
"usr_post_own" => "Crea i propri eventi",
"usr_post_all" => "Crea tutti gli eventi",
"usr_manager" => "Manager",
"usr_admin" => "Amministratore",
"usr_login_0" => "Primo login",
"usr_login_1" => "Ultimo login",
"usr_login_cnt" => "N. di Login",
"usr_add_profile" => "Aggiungi profilo",
"usr_upd_profile" => "Aggiorna profilo",
"usr_not_found" => "Utente non trovato",
"usr_if_changing_pw" => "Solo se si cambia la password",
"usr_admin_rights" => "Funzioni d'amministrazione",
"usr_no_rights" => "Nessun diritto di accesso",
"usr_view_calendar" => "Vedi il calendario",
"usr_post_events_own" => "Crea/Modifica i propri eventi",
"usr_post_events_all" => "Crea/Modifica tutti gli eventi",
"usr_manager_rights" => "Crea/Modifica + diritti di gestione",
"usr_pw_not_updated" => "Password non aggiornata",
"usr_added" => "Utente aggiunto",
"usr_updated" => "Profilo utente aggiornato",
"usr_deleted" => "Utente eliminato",
"usr_not_added" => "Utente non aggiunto",
"usr_not_updated" => "Utente non modificato",
"usr_not_deleted" => "Utente non eliminato",
"usr_cred_required" => "Sono richiesti il nome utente, indirizzo email e password",
"usr_uname_exists" => "Nome utente esistente",
"usr_email_exists" => "Indirizzo email esistente",
"usr_un_invalid" => "Nome utente non valido (lunghezza min. 2: A-Z, a-z, 0-9, e _-.) ",
"usr_em_invalid" => "Indirizzo email non valido",
"usr_cant_delete_yourself" => "Impossibile eliminare sè stessi",
"usr_background" => "Colore di fondo",
"usr_select_color" => "Selezionare Colore",
"usr_invalid_color" => "Formato colore non valido (#XXXXXX dove X = HEX-value)",

//database.php
"mdb_dbm_functions" => "Funzioni del Database",
"mdb_noshow_tables" => "Impossibile aprire le tabelle",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Compatta il database",
"mdb_compact_table" => "Compatta le tabelle",
"mdb_compact_error" => "Errore",
"mdb_compact_done" => "Fatto",
"mdb_purge_done" => "Eventi cancellati eliminati definitivamente",
"mdb_repair" => "Verifica e ripara il database",
"mdb_check_table" => "Controlla tabella",
"mdb_ok" => "OK",
"mdb_nok" => "Non OK",
"mdb_nok_repair" => "Non OK, inizio riparazione",
"mdb_backup" => "Backup del database",
"mdb_backup_table" => "Backup della tabella",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Fatto",
"mdb_records" => "records",
"mdb_restore" => "Restore database",
"mdb_restore_table" => "Restore table",
"mdb_inserted" => "records inserted",
"mdb_db_restored" => "Database restored.",
"mdb_run_upgrade" => "Warning:<br>Backup file didn't match calendar version.<br>Run upgradexxx.php script.",
"mdb_events" => "Eventi",
"mdb_delete" => "cancella",
"mdb_undelete" => "riattiva",
"mdb_between_dates" => "che si verificano tra",
"mdb_deleted" => "Eventi cancellati",
"mdb_undeleted" => "Eventi riattivati",
"mdb_file_saved" => "File di backup salvato.",
"mdb_file_name" => "Nome file:",
"mdb_start" => "Avvio",
"mdb_no_function_checked" => "Nessuna funzione selezionata",
"mdb_write_error" => "Scrittura del file di backup fallita<br>Controllare i permessi della cartella 'files/'",

//import/export.php
"iex_file" => "File selezionato",
"iex_file_name" => "Nome file iCal",
"iex_file_description" => "Descrizione file iCal",
"iex_filters" => "Filtro Eventi",
"iex_upload_ics" => "Upload del file iCal",
"iex_create_ics" => "Crea file iCal",
"iex_upload_csv" => "Upload file CSV",
"iex_upload_file" => "Upload File",
"iex_create_file" => "Crea File",
"iex_download_file" => "Download File",
"iex_fields_sep_by" => "Campi separati da",
"iex_birthday_cat_id" => "ID della categoria Compleanni",
"iex_default_cat_id" => "ID categoria predefinita",
"iex_if_no_cat" => "se non si trova alcuna categoria",
"iex_import_events_from_date" => "Importare gli eventi in agenda a partire dal",
"iex_see_insert" => "vedi istruzioni a destra",
"iex_no_file_name" => "Manca il nome del file",
"iex_inval_field_sep" => "separatore campi mancante o non valido",
"iex_no_begin_tag" => "file iCal non valido (manca BEGIN-tag)",
"iex_date_format" => "Formato data evento",
"iex_time_format" => "Formato ora evento",
"iex_number_of_errors" => "Numero di errori nell'elenco",
"iex_bgnd_highlighted" => "sfondo evidenziato",
"iex_verify_event_list" => "Verificare l'elenco eventi, correggere gli errori e cliccare",
"iex_add_events" => "Aggiungi Eventi al Database",
"iex_select_ignore_birthday" => "Selezionare Compleanno e le caselle Elimina come si desidera",
"iex_select_ignore" => "Selezionare le caselle Elimina per ignorare l'evento",
"iex_title" => "Titolo",
"iex_venue" => "Sede",
"iex_owner" => "Proprietario",
"iex_category" => "Categoria",
"iex_date" => "Data",
"iex_end_date" => "Data fine",
"iex_start_time" => "Ora inizio",
"iex_end_time" => "Ora fine",
"iex_description" => "Descrizione",
"iex_repeat" => "Ripetizione",
"iex_birthday" => "Compleanno",
"iex_ignore" => "Elimina",
"iex_events_added" => "eventi aggiunti",
"iex_events_dropped" => "eventi ignorati (già presenti)",
"iex_db_error" => "Errore database",
"iex_ics_file_error_on_line" => "Errore file iCal alla riga",
"iex_between_dates" => "In agenda tra le date",
"iex_changed_between" => "Aggiunti/modificati tra",
"iex_select_date" => "Selezione data",
"iex_select_start_date" => "Selezionare data inizio",
"iex_select_end_date" => "Selezionare data fine",
"iex_all_cats" => "tutte le categorie",
"iex_all_users" => "tutti gli utenti",
"iex_no_events_found" => "Nessun evento trovato",
"iex_file_created" => "File creato",
"iex_write error" => "Scrittura del file di export fallita<br>Controllare i permessi della cartella 'files/'",

//lcalcron.php
"cro_sum_header" => "RIASSUNTO OPERAZIONI PIANIFICATE",
"cro_sum_trailer" => "FINE RIASSUNTO",
"cro_evc_sum_title" => "EVENTI SCADUTI",
"cro_nr_evts_deleted" => "Numero di eventi eliminati",
"cro_not_sum_title" => "PROMEMORIA VIA EMAIL",
"cro_not_sent_to" => "Promemoria inviati a",
"cro_no_not_dates_due" => "Nessuna data di notifica scaduta",
"cro_all_day" => "Tutto il giorno",
"cro_mailer" => "mittente",
"cro_subject" => "Oggetto",
"cro_event_due_in" => "L'evento seguente e' previsto tra ",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "e' previsto tra ",
"cro_due_today" => "Due today",
"cro_days" => "giorno(i)",
"cro_date_time" => "Data / ora",
"cro_title" => "Titolo",
"cro_venue" => "Sede",
"cro_description" => "Descrizione",
"cro_category" => "Categoria",
"cro_status" => "Status",
"cro_open_calendar" => "Apri il calendario",
"cro_chg_sum_title" => "MODIFICHE AL CALENDARIO",
"cro_nr_changes_last" => "Numero di modifiche dall'ultimo",
"cro_report_sent_to" => "Rapporto inviato a",
"cro_no_report_sent" => "Nessun rapporto inviato via email",
"cro_usc_sum_title" => "CONTROLLO ACCOUNT UTENTI",
"cro_nr_accounts_deleted" => "Numero di account eliminati",
"cro_no_accounts_deleted" => "Nessun account eliminato",
"cro_ice_sum_title" => "EVENTI ESPORTATI",
"cro_nr_events_exported" => "Numero di eventi esportati in un file in formato iCalendar",

//explanations
"xpl_manage_db" =>
"<h4>Istruzioni per la Gestione del Database</h4>
<p>In questa pagina è possibile selezionare le seguenti funzioni:</p>
<h5>Compatta il database</h5>
<p>Quando un utente cancella un evento, l'evento è segnato come 'cancellato', ma 
non è rimosso dal database. La funzione Compatta il database elimina fisicamente 
questi eventi cancellati e libera lo spazio occupato dall'evento.</p>
<h5>Verifica e ripara il database</h5>
<p>Questa funzione esegue una scansione del database del calendario e controlla eventuali incoerenze.</p>
<p>Le incoerenze saranno poi riparate, se possibile.</p>
<p>Se non ci sono particolari problemi nelle viste del calendario, è sufficiente lanciare queste 
funzioni una volta all'anno.</p>
<h5>Backup del database</h5>
<p>Questa funzione crea un backup completo del database del calendario (tabelle 
struttura e contenuti) in formato .sql. Il backup sarà salvato nella cartella 
<strong>/files</strong> con il nome:</p> 
<p><kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (dove 'yyyymmdd' = anno, mese e 
giorno, e hhmmss = ora, minuti e secondi.</p>
<p>Questo file di backup si può usare per ri-creare le tabelle, la struttuta e i dati del 
database, via the restore function described below or by using for instance the 
<strong>phpMyAdmin</strong> tool, which is provided by most web hosts.</p>
<h5>Restore database</h5>
<p>The restore function will use the latest backup file in the 'files' folder 
created by the back up function described above. Note that when using multiple 
calendars sharing the same database, the latest created backup file will be used 
irrespective of the source calendar.</p>
<p>When restoring the database, ALL CURRENTLY PRESENT DATA WILL BE LOST!</p>
<p>After restoring a backup file of a previous LuxCal version, you must run the 
latest upgradexxx.php script to ensure the database tables are up to date!</p>
<h5>Eventi</h5>
<p>Questa funzione cancellerà o riattiverà gli eventi che si verificano tra le 
date specificate. Se si lascia una data in bianco, non ci sono limiti di data;
se entrambe le date sono lasciate in bianco, SARANNO CANCELLATI TUTTI GLI EVENTI!</p><br>
<p>IMPORTANTE: Quando si esegue la compattazione del database (vedi prima), gli eventi
permanentemente eliminati dal database non possono più essere riattivati!</p>",

"xpl_import_csv" =>
"<h4>Istruzioni per l'Import dei file CSV</h4>
<p>Si usa questo modulo per importare nel Calendario Luxcal un file di testo 
<strong>Comma Separated Values (CSV)</strong> con i dati di eventi.</p>
<p>L'ordine delle colonne nel file CSV deve essere: titolo, sede, id categoria (vedi 
poi), data inizio, data fine, ora inizio, ora fine e descrizione. La prima riga del file CSV, 
usata per la descrizione delle colonne, &egrave; ignorata.</p>
<h5>File CSV di esempio</h5>
<p>File CSV d'esempio si possono trovare nella subdirectory '/files' della propria 
installazione di LuxCal.</p>
<h5>Formato data e ora</h5>
<p>Il formato data e ora dell'evento a sinistra deve corrispondere al 
formato della data e ora del file CSV di cui si sta facendo l'upload.</p>
<h5>Tabella delle Categorie</h5>
<p>Il calendario usa dei numeri ID per specificare le categorie. Gli ID delle categorie nel file CSV 
devono corrispondere alle categorie usate nel proprio calendario o essere vuoti.</p>
<p>Se in seguito si vogliono rimarcare degli eventi come 'compleanno', l'<strong>ID della categoria 
Compleanno</strong> deve essere impostato al corrispondente ID nell'elenco delle categorie seguente.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>Nel calendario attuale, sono state definite le seguenti categorie:</p>",

"xpl_import_ical" =>
"<h4>Istruzioni per l'Import di file iCalendar</h4>
<p>Si usa questo modulo per importare nel Calendario Luxcal un file <strong>iCalendar</strong> 
con i dati degli eventi.</p>
<p>I contentuti del file devono soddisfare gli standard [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545 </a></u>] dell'Internet Engineering Task Force.</p>
<p>Saranno importati solo gli eventi; altri componenti iCal, come: To-Do, Journal, Free / 
Busy, Time zone e Alarm, saranni ignorati.</p>
<h5>Esempi di file iCal</h5>
<p>Esempi di file iCalendar (estensione .ics) si possono trovare nella subdirectory '/files' 
della propria installazione di LuxCal.</p>
<h5>Tabella delle Categorie</h5>
<p>Il calendario usa dei numeri ID per specificare le categorie. Gli ID delle categorie nel file 
iCalendar devono corrispondere alle categorie usate nel proprio calendario 
o essere vuoti.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>Nel calendario attuale, sono state definite le seguenti categorie:</p>",

"xpl_export_ical" =>
"<h4>Istruzioni per l'esportazione di file iCalendar</h4>
<p>Si usa questo modulo per estrarre ed esportare un file di eventi <strong>iCalendar</strong> dal 
Calendario LuxCal.</p>
<p>Il <b>nome del file iCal</b> (senza estensione) &egrave; opzionale. I file creati sono 
memorizzati nella cartella \"files/\" del server con il nome specificato, 
oppure con il nome of the calendar. L'estensione del file sar&agrave; <b>.ics</b>.
File esistenti nella cartella \"files/\" del server con lo stesso nome 
saranno sovrascritti dal nuovo file.</p>
<p>La <b>descrizione del file iCal</b> (per es. 'Meetings 2013') &egrave; opzionale. Se viene inserita, 
essa viene aggiunta all'intestazione del file iCal esportato.</p>
<p><b>Filtri</b>: Gli eventi da estrarre possono essere filtrati per:</p>
<ul>
<li>propietario evento</li>
<li>categoria evento</li>
<li>data inizio evento</li>
<li>data aggiunta/ultima modifica evento</li>
</ul>
<p>I filtri sono opzionali. Un campo data vuoto significa: nessun limite</p>
<br>
<p>Il contenuto del file con gli eventi estratti sar&agrave; conforme allo standard
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545</a></u>] 
dell'Internet Engineering Task Force.</p>
<p>Facendo il <b>download</b> del file iCal esportato, saranno aggiunti data e ora
al nome del file scaricato.</p>
<h5>Esempi di file iCal</h5>
<p>Esempi di file iCalendar (estensinoe .ics) si possono trovare nella cartella '/files' 
della propria installazione di LuxCal.</p>"
);
?>
