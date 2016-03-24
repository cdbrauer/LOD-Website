<?php
/*
= LuxCal event calendar admin interface language file = ROMANIAN / ROMÂNĂ

Traducerea în limba română realizată de Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).
This file has been translated in română by Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.
© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Niciunul",
"all" => "Toate",
"back" => "Înapoi",
"close" => "Închide",
"always" => "întotdeauna",
"at_time" => "/", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Anual",
"month" => "Lunar",
"week_day" => "Săptămînal",
"upcoming" => "Urmează",

//settings.php - fieldset headers + general
"set_general_settings" => "Setări calendar",
"set_navbar_settings" => "Meniu calendar",
"set_event_settings" => "Evenimente",
"set_user_settings" => "Setări cont utilizator",
"set_email_settings" => "Setări Email",
"set_perfun_settings" => "Funcții periodice<br>(relevant doar dacă se folosește cron)",
"set_minical_settings" => "Mini-Calendar (relevant doar dacă este folosit)",
"set_sidebar_settings" => "Zonă laterală evenimente<br>(relevant doar dacă este folosită)",
"set_view_settings" => "Setări vizualizare",
"set_dt_settings" => "Setări Dată/Oră",
"set_save_settings" => "Salvare setări",
"set_missing_invalid" => "setări lipsă sau incorecte (marcate)",
"set_settings_saved" => "Setările au fost salvate",
"set_save_error" => "Eroare Bază de Date - Setările nu au putut fi salvate",
"hover_for_details" => "Detalii setări calendar",
"default" => "implicit",
"enabled" => "activ",
"disabled" => "inactiv",
"no" => "nu",
"yes" => "da",
"or" => "sau",
"minutes" => "minute",
"pixels" => "pixeli",
"no_way" => "Nu sînteți autorizat să efectuați această operațiune",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Versiune calendar",
"calendarVersion_text" => "Versiunea software a calendarului.",
"calendarTitle_label" => "Titlu calendar",
"calendarTitle_text" => "Titlul calendarului, utilizat și în emailul de notificare.",
"calendarUrl_label" => "URL calendar",
"calendarUrl_text" => "Adresa web completă a calendarului.",
"calendarEmail_label" => "Adresa de email a calendarului",
"calendarEmail_text" => "Adresa de email folosită în emailurile de notificare.<br>Format: \'email\' sau \'nume&#8249;email&#8250;\', unde \'nume\' poate fi numele calendarului.",
"backLinkUrl_label" => "Link către pagina părinte",
"backLinkUrl_text" => "URL-ul paginii părinte. Dacă introduceți aici o adresă URL, suplimentar, în partea stîngă a barei meniu a calendarului, va fi afișat un buton <b>Înapoi</b> care permite întoarcerea la pagina părinte (pagina de unde a fost lansat calendarul).",
"timeZone_label" => "Fus orar",
"timeZone_text" => "Fusul orar folosit pentru afișarea orei curente exacte.",
"see" => "vezi",
"notifSender_label" => "Expeditorul emailurilor de notificare",
"notifSender_text" => "Cînd calendarul trimite emailuri de notificare, cîmpul corespunzător expeditorului poate conține fie adresa de email a calendarului fie adresa celui care a creat evenimentul. Astfel, în cazul în care se utilizează adresa utilizatorului, destinatarul poate răspunde direct la email.",
"rssFeed_label" => "Flux RSS",
"rssFeed_text" => "<b>Activ</b>: Pentru utilizatorii care au cel puțin drepturi de \'vizualizare\' un link pentru fluxul RSS va fi vizibil la baza calendarului și un link corespunzător va fi adăugat și la începutul codului HTML al paginilor calendarului.",
"calendar" => "calendar",
"user" => "utilizator",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Butoane de navigare cu text",
"navButText_text" => "<b>Selectat</b>: Butoanele vor fi afișate în bara de meniu a calendarului ca butoane text.<br><b>Neselectat</b>: Butoanele vor fi afișate ca simboluri (iconuri).",
"navBar_label" => "Butoane în bara de navigare",
"navBar_text" => "<b>Selectat</b>: Butoanele corespunzătoare <b>\"De vazut/Urmează\"</b> vor fi afișate în bara de meniu a calendarului, permițînd afișarea listelor corespunzătoare.",
"navTodoList_label" => "Butonul 'De văzut'",
"navUpcoList_label" => "Butonul 'Urmează'",
"optionsPanel_label" => "Moduri meniu Opțiuni",
"optionsPanel_text" => "Activează/dezactivează modurile de afișare din meniul Opțiuni.<br>Filtrul pentru utilizatori poate fi folosit pentru afișarea selectivă a evenimentelor corespunzătoare anumitor utilizatori.<br>Filtrul pentru categorie poate fi folosit similar pentru afișarea selectivă doar a anumitor categorii de evenimente.<br>Meniul de selecție a limbii permite definirea limbii de afișare a calendarului (doar dacă calendarul are mai multe fișiere de limbă instalate)",
"userMenu_label" => "Filtrare utilizatori",
"catMenu_label" => "Filtrare categorie",
"langMenu_label" => "Selecție limbă",
"defaultView_label" => "Mod vizualizare inițial",
"defaultView_text" => "Selectează modul de vizualizare implicit al calendarului:<br>- Anual<br>- Lunar<br>- Săptămînal<br>- Zilnic<br>- Urmează<br>- Modificări<br>Se recomandă utilizarea modului \'Lunar\' sau \'Urmează\'.",
"language_label" => "Limba implicită",
"language_text" => "Fișierele specifice de limbă ui-{limbă}.php, ai-{limbă}.php, ug-{limbă}.php precum și fișierul ug-layout.png trebuie să fie prezente în directorul \'lang/\', unde textul {limba} reprezintă limba folosită pentru interfață, acesta trebuind să fie obligatoriu scris cu litere mici (minuscule)!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Postare evenimente private",
"privEvents_text" => "<b>Activ</b>: utilizatorul poate posta evenimente private.<br>Evenimentele private sînt vizibile doar pentru cel care le-a introdus.<br><b>Implicit</b>: cînd sînt adaugăte evenimente noi, opțiunea \'privat\' din fereastra Eveniment va fi selectată automat, în mod implicit.<br><b>Întotdeauna</b>: cînd sînt adăugate evenimente noi acestea vor fi întotdeauna evenimente private, opțiunea \'privat\' din fereastra Eveniment nemaifiind afișată.",
"details4All_label" => "Afișare detalii evenimente pentru utilizatorii",
"details4All_text" => "<b>Inactiv</b>: detaliile evenimentului vor fi vizibile doar pentru proprietar și pentru utilizatorii care au dreptul \'toate evenimentele\' activat.<br><b>Activ</b>: detalile evenimentului sînt vizibile pentru toți utilizatorii.<br>Autentificat: detalile evenimentului vor fi vizibile autorului și tuturor utilizatorilor autentificați.",
"evtDelButton_label" => "Afișare buton ștergere în fereastra Eveniment",
"evtDelButton_text" => "Selectat: butonul Ștergere din fereastra evenimentului nu va fi afișat astfel încît chiar și utilizatorii cu drept de editare nu vor putea să șteargă evenimente.<br>Neselectat: butonul Ștergere va fi afișat pentru toți utilizatorii.<br>Manager: butonul Ștergere va fi afișat doar pentru utilizatorii cu drepturi de \'administrare\'.",
"eventColor_label" => "Paleta de culori folosită pentru afișarea evenimentelor",
"eventColor_text" => "Evenimentele din calendar pot fi afișate folosind fie paletele definite de utilizator fie paletele setate pentru categoria de eveniment.",
"xField1_label" => "Etichetă cîmp suplimentar 1",
"xField2_label" => "Etichetă cîmp suplimentar  2",
"xFieldx_text" => "Numele cîmpului text opțional. Dacă acest cîmp este inclus în sablonul evenimentului, textul corespunzător va fi adăugat ferestrei Eveniment și tuturor modurilor de afișare corespunzătoare.<br>Numele cîmpului opțional poate avea max. 15 caractere. Ex.: \'Adresă de email\', \'Site web\', \'Număr de telefon\'.",
"logged_in" => 'autentificat',
"manager_only" => 'manager',
"owner_color" => "paletă utilizator",
"cat_color" => "paletă categorie",

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Auto-înregistrare",
"selfReg_text" => "Permite utilizatorilor făcă cont definit de a se auto-înregistra pentru a putea vizualiza calendarul.",
"selfRegPrivs_label" => "Drepturi de auto-înregistrare pentru",
"selfRegPrivs_text" => "Drepturile de acces pentru utilizatorii auto-înregistrați:<br>- vizualizare: doar vizualizare<br>- postări-proprii: vizualizare și editări postări proprii.<br>- toate postările: postare și editare pentru toate evenimentele",
"selfRegNot_label" => "Notificare auto-înregistrare",
"selfRegNot_text" => "Trimite un email la adresa calendarului pentru a notifica apariția unei auto-înregistrări în calendar.",
"restLastSel_label" => "Restaurarea sesiunii ultimului utilizator",
"restLastSel_text" => "Sesiunea corespunzătoare ultimului utilizator (setare în Panoul de Opțiuni) va fi salvată fiind încărcată automat la revenirea acestuia.",
"cookieExp_label" => " Zile expirare cookie 'Memorare utilizator'",
"cookieExp_text" => "Numărul de zile după care cookie-ul definit prin opțiunea \'Memorare utilizator\' (din fereastra de autentificare) va expira.",
"view" => "vizualizare",
"post_own" => 'postare activităţi proprii',
"post_all" => 'postare/editare toate activităţile',
"manager" => 'postare/manager',

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
"yearStart_label" => "Luna de start pentru modul de afișare 'Anual'",
"yearStart_text" => "Dacă se specifică o lună de start (1-12) pentru afișarea în modul \'Anual\', calendarul va fi afișat mereu pornind de la această lună, anul următor fiind afișat începînd cu prima zi a lunii specificate (nu din prima zi a lunii ianuarie).<br>Valoarea \'0\' specifică faptul că afișarea lunilor se va baza pe data curentă.",
"colsToShow_label" => "Numărul de coloane în modul de vizualizare 'Anual'",
"colsToShow_text" => "Numărul de luni de afișat pe fiecare rînd în modul \'Anual\'.<br>Recomandabil 3 sau 4.",
"rowsToShow_label" => "Numărul de luni de afișat în modul 'Anual'",
"rowsToShow_text" => "Numărul de coloane (pentru patru luni) de afișat în modul de vizualizare \'Anual\'.<br>Recomandat 4 (pentru a avea 16 luni de vizualizat în pagină).",
"weeksToShow_label" => "Numărul de săptămîni de afișat în modul 'Lunar'",
"weeksToShow_text" => "Numărul de săptămîni de afișat în modul \'Lunar\'.<br>Recomandabil 10 pentru a avea 2.5 luni de vizualizat în pagină.<br>Valorile 0 și 1 au aici un rol special:<br>0: se afișează exact 1 lună - lăsînd neafișate zilele de început și de final din pagină.<br>1: se afișează exact 1 lună - fiind afișate suplimentar și zilele de început și de final din pagină.",
"workWeekDays_label" => "Zilele săptămînii curente",
"workWeekDays_text" => "Zilele de afișat în fiecare săptămînă în modurile de vizualizare Luna curentă și Săptămîna curentă.<br>Introduceți numărul corespunzător fiecărei zile pe care doriți să o afișați. Numerele pentru zile sînt:<br>1 = Luni<br>2 = Marți<br>....<br>7 = Duminică<br>ex. 12345 : Luni - Vineri",
"lookaheadDays_label" => "Numărul de zile de afișat în modul 'Care urmează'",
"lookaheadDays_text" => "Numărul de zile de afișat pentru modul evenimente \'Care urmează\', \'De văzut\' și în fluxul RSS.",
"dwStartHour_label" => "Ora de început pentru modul 'Zilnic/Săptămînal'",
"dwStartHour_text" => "Ora de început pentru o zi normală.<br>Spre exemplu, introducerea valorii \'6\' permite evitarea risipei de spațiu la afișare pentru perioada inactivă miezul nopții - ora \'6.00\'.<br>Modulul de selecție timp din fereastra de editare <b>Eveniment</b> va avea deasemenea definit ca timp minim această valoare.",
"dwEndHour_label" => "Ora de final pentru modul de vizualizare 'Zilnic/Săptămînal'",
"dwEndHour_text" => "Ora de final pentru evenimente, la modul general, pentru o zi obișnuită.<br>Spre exemplu, setînd această valoare la valoarea \'18\' se evită risipa de spațiu la afișare în modul \'Zilnic/Săptămînal\' pentru intervalul orar \'18:00-24.00\'.<br>Modulul de selecție timp din fereastra de editare <b>Eveniment</b> va avea deasemenea definit ca timp maxim această valoare.",
"dwTimeSlot_label" => "Dimensiune rînd în modul 'Zilnic/Săptămînal'",
"dwTimeSlot_text" => "Dimensiune rînd exprimată în minute.<br>Această valoare, împreună cu \'Ora de început\' (vezi mai sus), va determina numărul de linii (rînduri) maxim în modul \'Zilnic/Săptămînal\'.",
"dwTsHeight_label" => "Înălțime rînd",
"dwTsHeight_text" => "Înălțime rînd în modul \'Zilnic/Săptămînal\' (pixeli).",
"showLinkInMV_label" => "Afișare linkuri în modul 'Lunar'",
"showLinkInMV_text" => "Daca opțiunea este activă, URL-urile din descrierea evenimentului vor fi convertite și afișate ca hyperlinkuri în modul de vizualizare \'Lunar\'",
"monthInDCell_label" => "Afișare lună în fiecare celulă corespunzătoare zilei",
"monthInDCell_text" => "Afișează în modul lunar numele lunii (primele 3 litere) în celula fiecărei zile",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Formatul datei (zz ll aaaa)",
"dateFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar.<br>Caracterele acceptate: a = pentru an, l = pentru lună și d = pentru zi.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemplu:<br>a-l-z: 2013-10-31<br>l.z.a: 10.31.2013<br>z/l/a: 31/10/2013",
"dateFormat_expl" => "ex. a.l.z: 2013.10.31",
"MdFormat_label" => "Format dată (zz luna)",
"MdFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar, pentru lună și zi.<br>Caractere posibile: L = luna ca text, z = ziua în cifre.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemplu:<br>z L: 12 Aprilie<br>L, z: Iulie, 14",
"MdFormat_expl" => "ex. L, z: Iulie, 14",
"MdyFormat_label" => "Format dată (zz lună aaaa)",
"MdyFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar, pentru zi, lună și an.<br>Caractere posibile: d = ziua în cifre, M = luna ca text, y = anul în cifre.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemplu:<br>d M y: 12 Aprilie 2013<br>M d, y: Iulie 8, 2013",
"MdyFormat_expl" => "ex. L z, y: Iulie 8, 2013",
"MyFormat_label" => "Format dată (lună aaaa)",
"MyFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar, pentru lună și an.<br>Caractere posibile: L = luna ca text, y = anul în cifre.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemplu:<br>L a: Aprilie 2013<br>a - L: 2013 - Iulie",
"MyFormat_expl" => "ex. L a: Aprilie 2013",
"DMdFormat_label" => "Format dată (ziua săptămînii zz lună)",
"DMdFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar, pentru ziua săptămînii, zi și lună.<br>Caractere posibile: ZS = ziua din săptămînă ca text, L = luna ca text, d = ziua în cifre.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemple:<br>ZS z L: Vineri 12 Aprilie<br>ZS, L z: Luni, Iulie 14",
"DMdFormat_expl" => "ex. ZS - L z: Duminică - Aprilie 6",
"DMdyFormat_label" => "Format dată (ziua săptămînii zz lună aaaa)",
"DMdyFormat_text" => "Șir de caractere care definește modul de afișare pentru dată în calendar, pentru ziua săptămînii, zi, lună și an.<br>Caractere posibile: ZS = ziua din săptămînă ca text, L = luna ca text, z = ziua în cifre, a = anul în cifre.<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemple:<br>ZS z L a: Vineri 13 Aprilie 2013<br>ZS - L z, a: Luni - Iulie 16, 2013",
"DMdyFormat_expl" => "ex. ZS, L z, a: Luni, Iulie 16, 2013",
"timeFormat_label" => "Format timp (hh mm)",
"timeFormat_text" => "Șir de caractere care definește modul de afișare pentru oră în calendar.<br>Caractere posibile: h = oră, H = ore cu cifra zero la început, m = minute, a = am/pm (opțional), A = AM/PM (opțional).<br>Caracterele non-alfanumerice pot fi utilizate ca separator și vor fi copiate ca atare.<br>Exemplu:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "ex. h:m: 22:35 și h:mA: 10:35PM",
"weekStart_label" => "Prima zi a săptămînii",
"weekStart_text" => "Săptămîna poate începe de Duminică sau de Luni.",
"weekNumber_label" => "Afișare număr săptămînă",
"weekNumber_text" => "Afișarea numărului săptămînii în modurile \'Anual\', \'Lunar\' sau \'Săptămînal\' poate fi activată/dezactivată",
"time_format_us" => "12-ore AM/PM",
"time_format_eu" => "24-ore",
"sunday" => "Duminică",
"monday" => "Luni",
"time_zones" => "FUS ORAR",
"dd_mm_yyyy" => "zz-ll-aaaa",
"mm_dd_yyyy" => "ll-zz-aaaa",
"yyyy_mm_dd" => "aaaa-ll-zz",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Utilizare <b>PHP mail</b> sau <b>SMTP mail</b>",
"mailServer_text" => "Modulul <b>PHP mail</b> este indicat să fie folosit pentru trimiterea unui număr relativ mic de emailuri, fără autentificare. Pentru un număr crescut de emailuri, cînd se impune și existența autentificării, este recomandat folosirea modulului <b>SMTP mail</b>.<br>Utilizarea <b>SMTP mail</b> presupune existența unui server de email dedicat, parametrii de configurare pentru utilizarea serverului SMTP trebuind specificați mai jos. Dacă utilizarea emailului este dezactivată, secțiunea <b>Trimite email</b> din fereastra de editare <b>Eveniment</b> va fi deasemenea dezactivată.",
"smtpServer_label" => "Nume server SMTP",
"smtpServer_text" => "Dacă selectați modul <b>SMTP mail</b> va trebui să introduceți aici numele serverului SMTP. Spre exemplu: smtp.gmail.com.",
"smtpPort_label" => "Port SMTP",
"smtpPort_text" => "Dacă selectați modul <b>SMTP mail</b> va trebui să introduceți aici portul utilizat de serverul SMTP. Spre exemplu: 25, 465 sau 587. Gmail utilizează spre exemplu portul 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "Dacă selectați modul <b>SMTP mail</b>, puteți selecta aici utilizarea modului SSL (secure sockets layer). Spre exemplu pentru gmail opțiunea SSL trebuie activată.",
"smtpAuth_label" => "Autentificare SMTP",
"smtpAuth_text" => "Dacă opțiunea este selectată, numele și parola specificate mai jos vor fi utilizate ca date de autentificare pentru serverul de mail SMTP.",
"smtpUser_label" => "Nume utilizator SMTP",
"smtpUser_text" => "Dacă selectați modul <b>SMTP mail</b> va trebui să introduceți aici numele utilizatorului. Pentru gmail numele utilizatorului reprezintă practic partea din adresă dinaintea caracterul @.",
"smtpPass_label" => "Parola SMTP",
"smtpPass_text" => "Dacă selectați modul <b>SMTP mail</b> va trebui să introduceți aici parola corespunzătoare utilizatorului specificat.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Sumar Cron",
"cronSummary_text" => "Mod de trimitere a sumarului serviciului cron pe email la administratorul calendarului.<br>Opțiunea este utilă doar dacă pe server a fost activată cel puțin o acțiune în cron.",
"chgEmailList_label" => "Adresele de email notificate la apariția unor modificări",
"chgEmailList_text" => "Adresele de email la care sînt trimise notificări la apariția unor modificări în calendar. Adresele trebuiesc separate prin caracterul \';\'.",
"chgNofDays_label" => "Numărul de zile de urmărit pentru modificări",
"chgNofDays_text" => "Numărul de zile anterioare evenimentului utilizate pentru sumarul modificărilor.<br>Dacă numărul introdus este \'0\' nu va fi trimis niciun sumar.",
"icsExport_label" => "Export zilnic pentru evenimente iCal",
"icsExport_text" => "<b>Activ</b>: Toate evenimentele aflate în intervalul -1 săptămînă pînă peste 1 an vor fi exportate într-un fișier .ics în folderul \'files\' în formatul iCalendar.<br>Numele fișierului va fi generat pe baza numelui calendarului avînd eventualele spații înlocuite cu caracterul \'_\' (underscores), cu suprascrierea automată a fișierului mai vechi.",
"eventExp_label" => "Nr. zile expirare eveniment",
"eventExp_text" => "Numărul de zile după care un eveniment este șters în mod automat.<br>Pentru valoarea 0 sau dacă nu este definit niciun eveniment în lista cron, niciun eveniment nu va fi șters în mod automat.",
"maxNoLogin_label" => "Numărul maxim de zile acceptat fără logare",
"maxNoLogin_text" => "Dacă un utilizator nu se autentifică (nu accesează calendarul) în timpul numărului specificat de zile, contul corespunzator va fi automat șters.<br>Dacă valoare introdusă este \'0\' conturile utilizatorilor nu vor fi șterse niciodată.",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Minicalendar",
"miniCalView_text" => "Modurile de afișare posibile pentru minicalendar sînt:<br>- Toate lunile<br>- Luna curentă *<br>- Toate săptămînile<br>- Săptămîna curentă *<br>* Pentru zilele săptămînii curente vezi pagina: Vizualizare - Zilele săptămînii curente",
"miniCalPost_label" => "Postare evenimente tip minicalendar",
"miniCalPost_text" => "Relevant doar dacă se utilizează minicalendarul!<br>Dacă opțiunea este activată utilizatorii pot:<br>- posta evenimente noi în minicalendar facînd clic pe numărul zilei din celulă<br>- editare/ștergere/modificare evenimente prin clic direct pe eveniment<br>Notă: În acest caz drepturile de acces vor fi cele ale utilizatorului Public.",
"popFieldsMcal_label" => "Cîmuri eveniment - fereastră hover mini-calendar",
"popFieldsMcal_text" => "Cîmpurile evenimentului care vor fi afișate într-o fereastra tip hover pot fi specificate aici printr-o secvență de numere.<br>Dacă nu se specifică niciun cîmp fereastra hover nu va mai fi afișată.",
"mCalUrlFull_label" => "URL în minicalendar pentru calendarul complet",
"mCalUrlFull_text" => "Cînd utilizatorul face clic pe bara de sus a minicalendarului acesta va fi redirecționat la calendarul complet pe baza acestui URL. <br>Dacă nu este specificat niciun URL calendarul complet va fi afișat într-o pagină nouă. Acest link (URL) este util atunci cînd calendarul complet este integrat intr-o pagină de utilizator existentă deja.",
"popFieldsSbar_label" => "Cîmpuri eveniment - fereastra laterală hover",
"popFieldsSbar_text" => "Cîmpurile evenimentului care vor fi afișate într-o fereastră laterală tip hover pot fi specificate aici printr-o secvență de numere.<br>Dacă nu se specifică niciun cîmp fereastra hover nu va mai fi afișată.",
"showLinkInSB_label" => "Afișare linkuri în zona de afișare laterală",
"showLinkInSB_text" => "Afișare URL-uri din descrierea evenimentului ca hyperlink în zona laterală a evenimentelor care urmează",
"sideBarDays_label" => "Zile de urmărit în zona de afișare laterală",
"sideBarDays_text" => "Numărul de zile de urmărit pentru evenimentele afișate în zona de afișare laterală.",

//login.php
"log_log_in" => "Autentificare",
"log_remember_me" => "Memorare utilizator",
"log_register" => "Înregistrare",
"log_change_my_data" => "Modificare date acces",
"log_change" => "Modifică",
"log_un_or_em" => "Nume utilizator sau email",
"log_un" => "Nume utilizator",
"log_em" => "Email",
"log_pw" => "Parola",
"log_new_un" => "Nume utilizator nou",
"log_new_em" => "Adresă nouă de email",
"log_new_pw" => "Parola nouă",
"log_pw_msg" => "Aveți aici log in details pentru autentificare",
"log_pw_subject" => "parola dvs. ptr. %%", //%% will be replaced by calendar name
"log_npw_subject" => "Noua dumneavoastră parolă ptr. %%", //%% will be replaced by calendar name
"log_npw_sent" => "Noua dumneavoastră parolă a fost trimisă",
"log_registered" => "Înregistrare corectă - Parola v-a fost deja trimisă prin email",
"log_not_registered" => "Înregistrarea a eșuat",
"log_un_exists" => "Acest nume de utilizator există deja",
"log_em_exists" => "Această adresă de email există deja",
"log_un_invalid" => "Nume utilizator invalid (nr. minim de caractere - 2. Folosiți doar caracterele: A-Z, a-z, 0-9, and _-.) ",
"log_em_invalid" => "Adresă de email incorectă",
"log_un_em_invalid" => "Numele de utilizator / email incorecte",
"log_un_em_pw_invalid" => "Numele de utilizator / email sau parolă incorecte",
"log_no_un_em" => "Introduceți numele sau adresa de email",
"log_no_un" => "Introduceți numele",
"log_no_em" => "Introduceți adresa de email",
"log_no_pw" => "Introduceți parola",
"log_no_rights" => "Autentificare eșuată: nu aveți drepturi de vizualizare - Contactați administratorul",
"log_send_new_pw" => "trimite parolă nouă",
"log_if_changing" => "Doar dacă se modifică",
"log_no_new_data" => "Nicio modificare",
"log_invalid_new_un" => "Nume utilizator invalid (nr. minim de caractere - 2. Folosiți doar caracterele: A-Z, a-z, 0-9, and _-.) ",
"log_new_un_exists" => "Numele de utilizator introdus există deja",
"log_invalid_new_em" => "Adresa de email este incorectă",
"log_new_em_exists" => "Adresa introdusă există deja",
"log_ui_language" => "Limba pentru Interfața Utilizator",
"log_new_reg" => "Înregistrare utilizator nou",
"log_date_time" => "Data / ora",

//categories.php
"cat_list" => "Lista categoriilor",
"cat_edit" => "Editare",
"cat_delete" => "Ștergere",
"cat_add_new" => "Adăugare categorie nouă",
"cat_add" => "Adăugare categorie",
"cat_edit_cat" => "Editare categorie",
"cat_name" => "Denumire categorie",
"cat_sequence" => "Poziția",
"cat_in_menu" => "în meniu",
"cat_text_color" => "Culoare text",
"cat_background" => "Fundal",
"cat_select_color" => "Selecție culoare",
"cat_save" => "Actualizare categorie",
"cat_added" => "Categorie adăugată",
"cat_updated" => "Categorie actualizată",
"cat_deleted" => "Categorie ștearsă",
"cat_invalid_color" => "Format culoare (#XXXXXX - unde X = valoare HEX)",
"cat_not_added" => "Categorie nu a fost adăugată",
"cat_not_updated" => "Categoria nu a fost actualizată",
"cat_not_deleted" => "Categoria nu a fost ștearsă",
"cat_nr" => "#",
"cat_repeat" => "Cu repetare",
"cat_every_day" => "în fiecare zi",
"cat_every_week" => "în fiecare săptămînă",
"cat_every_month" => "în fiecare lună",
"cat_every_year" => "în fiecare an",
"cat_approve" => "Evenimentul necesită aprobare",
"cat_public" => "Eveniment public",
"cat_check_mark" => "Marcaj confirmare",
"cat_label" => "etichetă",
"cat_mark" => "marcaj",
"cat_name_missing" => "Numele categoriei lipsește",
"cat_mark_label_missing" => "Bifa/eticheta lipsește",

//users.php
"usr_list_of_users" => "Lista utilizatorilor",
"usr_id" => "ID utilizator",
"usr_name" => "Nume utilizator",
"usr_email" => "Email",
"usr_password" => "Parola",
"usr_rights" => "Drepturi de acces",
"usr_edit_user" => "Editare profil utilizator",
"usr_add" => "Adăugare utilizator",
"usr_edit" => "Editare",
"usr_delete" => "Ștergere",
"usr_view" => "Vizualizare",
"usr_post_own" => "Postare/editare evenimente proprii",
"usr_post_all" => "Postare/editare toate evenimentele",
"usr_manager" => "Postare/editare și aprobare",
"usr_admin" => "Administrator",
"usr_login_0" => "Prima conectare",
"usr_login_1" => "Ultima conectare",
"usr_login_cnt" => "Conectări",
"usr_add_profile" => "Adăugare utilizator",
"usr_upd_profile" => "Actualizare profil",
"usr_not_found" => "Utilizatorul nu există",
"usr_if_changing_pw" => "Doar dacă se schimbă parola",
"usr_admin_rights" => "Funcții administrare",
"usr_no_rights" => "Fără drepturi de acces",
"usr_view_calendar" => "Vizualizare calendar",
"usr_post_events_own" => "Postare/editare evenimente proprii",
"usr_post_events_all" => "Postare/editare toate evenimentele",
"usr_manager_rights" => "Postare/editare + aprobare evenimente",
"usr_pw_not_updated" => "Parola nu a fost actualizată",
"usr_added" => "Utilizator adăugat",
"usr_updated" => "Profile utilizatori",
"usr_deleted" => "Utilizator șters",
"usr_not_added" => "Utilizatorul nu a fost adăugat",
"usr_not_updated" => "profilul utilizatorului nu a fost actualizat",
"usr_not_deleted" => "Utilizatorul nu a fost șters",
"usr_cred_required" => "Numele utilizatorului, emailul și parola sînt necesare",
"usr_uname_exists" => "Acest nume de utilizator există deja",
"usr_email_exists" => "Această adresă de email există deja",
"usr_un_invalid" => "Nume utilizator invalid (minim \'2\' caractere. Folosiți doar caracterele: A-Z, a-z, 0-9, and _-.) ",
"usr_em_invalid" => "Adresă de email invalidă",
"usr_cant_delete_yourself" => "Nu vă puteți șterge propriul cont",
"usr_background" => "Culoare fundal",
"usr_select_color" => "Selectare culoare",
"usr_invalid_color" => "Format de culoare invalid (#XXXXXX - X = valoare HEXA)",

//database.php
"mdb_dbm_functions" => "Funcții pentru Baza de Date",
"mdb_noshow_tables" => "Tabele (din bază) nu pot fi accesate",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Compactare bază de date",
"mdb_compact_table" => "Compactare tabele",
"mdb_compact_error" => "Eroare",
"mdb_compact_done" => "Gata",
"mdb_purge_done" => "Evenimentele marcate pentru ștergere au fost eliminate definitiv",
"mdb_repair" => "Verificare și reparare",
"mdb_check_table" => "Verificare bază",
"mdb_ok" => "OK",
"mdb_nok" => "Eroare",
"mdb_nok_repair" => "Eroare, se încearcă repararea",
"mdb_backup" => "Back-up Bază de Date",
"mdb_backup_table" => "Back-up tabel",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Gata",
"mdb_records" => "records",
"mdb_restore" => "Restore database",
"mdb_restore_table" => "Restore table",
"mdb_inserted" => "records inserted",
"mdb_db_restored" => "Database restored.",
"mdb_run_upgrade" => "Warning:<br>Backup file didn't match calendar version.<br>Run upgradexxx.php script.",
"mdb_events" => "Evenimente",
"mdb_delete" => "ștegere",
"mdb_undelete" => "recuperare",
"mdb_between_dates" => "care apăr între",
"mdb_deleted" => "Evenimente șterse",
"mdb_undeleted" => "Evenimente recuperate",
"mdb_file_saved" => "Fișier de back-up salvat.",
"mdb_nume_fișier" => "Nume fișier:",
"mdb_start" => "Execută",
"mdb_no_function_checked" => "Nicio funcție selectată",
"mdb_write_error" => "Eroare salvare fișier de back-up. <br>Verificați drepturile de scriere pentru fișiere în folderul de back-up",

//import/export.php
"iex_file" => "Selecție Fișier",
"iex_file_name" => "Nume fișier iCal",
"iex_file_description" => "Descriere fișier iCal",
"iex_filters" => "Filtru evenimente",
"iex_upload_ics" => "Import fișier iCal",
"iex_create_ics" => "Creare fișier iCal",
"iex_upload_csv" => "Incărcare fișier CSV",
"iex_upload_file" => "Import fișier",
"iex_create_file" => "Creare fișier",
"iex_download_file" => "Descărcare fișier",
"iex_fields_sep_by" => "Cîmpuri separate prin",
"iex_birthday_cat_id" => "ID categorie",
"iex_default_cat_id" => "ID categorie implicită",
"iex_if_no_cat" => "dacă nu este gasită nicio categorie",
"iex_import_events_from_date" => "Import evenimente definite pînă la",
"iex_see_insert" => "vezi instrucțiunile în partea dreaptă",
"iex_no_file_name" => "Numele fișierului lipsește",
"iex_inval_field_sep" => "separator invalid sau lipsă",
"iex_no_begin_tag" => "fișier iCal invalid (lipsește tag-ul BEGIN)",
"iex_date_format" => "Format dată eveniment",
"iex_time_format" => "Format timp eveniment",
"iex_number_of_errors" => "Numărul erorilor din listă",
"iex_bgnd_highlighted" => "evidențiere fundal",
"iex_verify_event_list" => "Verificați Lista evenimentelor și faceți corecțiile necesare, apoi faceți clic",
"iex_add_events" => "Adaugare evenimente la Baza de Date",
"iex_select_ignore_birthday" => "Selectați opțiunile Ziua de naștere și Ștergere după nevoie",
"iex_select_ignore" => "Selectați opțiunea Ștergere pentru a ignora evenimentul",
"iex_title" => "Titlu",
"iex_venue" => "Locație",
"iex_owner" => "Proprietar",
"iex_category" => "Categorie",
"iex_date" => "Data",
"iex_end_date" => "Data de sfîrșit",
"iex_start_time" => "Ora de începere",
"iex_end_time" => "Ora de terminare",
"iex_description" => "Descriere",
"iex_repeat" => "Repetă",
"iex_birthday" => "data de naștere",
"iex_ignore" => "Ștergere",
"iex_events_added" => "evenimente adăugate",
"iex_events_dropped" => "eveniment ignorat (există deja)",
"iex_db_error" => "Eroare în Baza de Date",
"iex_ics_file_error_on_line" => "eroare în fișierul iCal la linia",
"iex_between_dates" => "Apare în intervalul",
"iex_changed_between" => "Adăugat/modificat între",
"iex_select_date" => "Selecție dată",
"iex_select_start_date" => "Selecție dată de început",
"iex_select_end_date" => "Selecție dată de sfîrșit",
"iex_all_cats" => "toate categoriile",
"iex_all_users" => "toți utilizatorilor",
"iex_no_events_found" => "Niciun eveniment găsit",
"iex_file_created" => "Fișier creat",
"iex_write error" => "Eroare salvare fișier export. <br>Verificați drepturile de scriere pentru fișiere în folderul selectat",

//lcalcron.php
"cro_sum_header" => "SUMAR CRON JOB",
"cro_sum_trailer" => "SFÎRȘIT SUMAR",
"cro_evc_sum_title" => "EVENIMENTE EXPIRATE",
"cro_nr_evts_deleted" => "Numărul evenimentelor șterse",
"cro_not_sum_title" => "EMAIL DE NOTIFICARE",
"cro_not_sent_to" => "Notificare trimisă la",
"cro_no_not_dates_due" => "Nicio notificare",
"cro_all_day" => "Toate zilele",
"cro_mailer" => "-",
"cro_subject" => "Subiect",
"cro_event_due_in" => "Eveniment scadent la",
"cro_event_due_today" => "Pentru astăzi",
"cro_due_in" => "Scadent în",
"cro_due_today" => "Astăzi",
"cro_days" => "zi(zile)",
"cro_date_time" => "Dată / oră",
"cro_title" => "Titlu",
"cro_venue" => "Locație",
"cro_description" => "Descriere",
"cro_category" => "Categorie",
"cro_status" => "Aprobat",
"cro_open_calendar" => "Vezi în calendar!",
"cro_chg_sum_title" => "MODIFICĂRI ÎN CALENDAR",
"cro_nr_changes_last" => "Numărul ultimelor modificări",
"cro_report_sent_to" => "Raport trimis la",
"cro_no_report_sent" => "Nu a fost trimis niciun raport",
"cro_usc_sum_title" => "VERIFICARE CONT UTILIZATOR",
"cro_nr_accounts_deleted" => "Numărul de conturi șterse",
"cro_no_accounts_deleted" => "Niciun cont șters",
"cro_ice_sum_title" => "EVENIMENTE EXPORTATE",
"cro_nr_events_exported" => "Numărul de evenimente exportate în formatul iCalendar",

//explanations
"xpl_manage_db" =>
"<h4>Instrucțiuni de Lucru cu Baza de Date</h4>
<p>În aceast formular pot fi selectate și folosite următoarele funcții:</p>
<h5>Verificare și Reparare</h5>
<p>Această funcție permite scanarea bazei de date corespunzătoare calendarului pentru depistarea eventualelor erori și corectarea acestora.</p>
<p>Dacă nu întîlniți erori în funcționarea calendarului, utilizarea acestei funcții o singură dată pe an este suficientă.</p>
<h5>Compactare Bază de Date</h5>
<p>Cînd un utilizator șterge un eveniment, evenimentul este marcat ca 'șters', fără a fi eliminat efectiv din bază.
Utilizarea funcției 'Compactare Bază de Date' permite ștergerea permanentă a evenimentelor marcate, cu eliberarea spațiul ocupat de acestea.</p>
<h5>Back-up Bază de Date</h5>
<p>Această funcție crează un back-up al întregii baze de date (structură tabele și conținut) în format .sql.
Fișierul de back-up este salvat în directorul <strong>files/</strong> în server, numele fișierului fiind de forma: 
<kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (unde 'yyyymmdd' reprezintă 'anul, luna, ziua', iar hhmmss = 'ore, minute, secunde'.</p>
<p>Acest fișier de back-up permite refacerea bazei de date în cazul unui accident 
(pierderea bazei de date), via the restore function described below or by using 
for instance the <strong>phpMyAdmin</strong> tool, which is provided by most web hosts.</p>
<h5>Restaurare bază de date</h5>
<p>The restore function will use the latest backup file in the 'files' folder 
created by the back up function described above. Note that when using multiple 
calendars sharing the same database, the latest created backup file will be used 
irrespective of the source calendar.</p>
<p>When restoring the database, ALL CURRENTLY PRESENT DATA WILL BE LOST!</p>
<p>After restoring a backup file of a previous LuxCal version, you must run the 
latest upgradexxx.php script to ensure the database tables are up to date!</p>

<h5>Evenimente</h5>
<p>Această funcție va șterge sau va recupera evenimentele care apar în intervalul specificat. Dacă nu se specifică nicio dată înseamnă că nu există nicio limită de timp, astfel încît, dacă ambele cîmpuri, cel de început și cel de sfîrșit, sînt necompletate, TOATE EVENIMENTELE VOR FI ȘTERSE!</p>
<p><b>IMPORTANT</b>: Cînd baza este compactată (vezi mai sus), toate evenimentele marcate pentru ștergere vor fi eliminate definitiv, fără nicio posibilitate de recuperare (doar eventual prin restaurarea unui backup anterior)!</p>",

"xpl_import_csv" =>
"<h4>Instrucțiuni pentru Import CSV</h4>
<p>Acest formular permite importul de text formatat <strong>CVS (Comma Separated Values)</strong> pentru introducerea de evenimente în Calendar.</p>
<p>Ordinea coloanelor în fișierul CSV trebuie să fie: titlu, locație, ID categorie (vezi mai jos), data, data finală, ora de început și de sfîrșit precum și descrierea evenimentului. Prima linie din fișierul CSV, (capul de tabel), este ignorată.</p>
<h5>Model Fișier CSV</h5>
<p>Un model de fișier CVS (fișier cu extensia .cvs) poate fi găsit în folderul '<strong>files/</strong>' al distribuției LuxCal.</p>
<h5>Formatul pentru dată și oră</h5>
<p>Formatul selectat pentru dată și oră trebuie să corespundă formatului folosit în fișierul CVS importat.</p>
<h5>Tabelul Categoriilor</h5>
<p>Calendarul utilizează numere (ID-uri) pentru specificarea categoriilor. ID-urile categoriilor din fișierul CVS trebuie să corespundă cu cele definite în calendar sau pot fi nule.</p>
<p>Spre exemplu, dacă doriți ca toate evenimentele să fie marcate ca 'important', ID-ul <strong>IMPORTANT</strong> trebuie să fie definit conform ID-ului din listă.</p>
<p class='hilight'>Atenție: Nu importați mai mult de 100 de evenimente odată!</p>
<p>Pentru calendarul dumneavoastră, pînă acum, au fost definite următoarele categorii:</p>",

"xpl_import_ical" =>
"<h4>Instrucțiuni pentru Import iCalendar </h4>
<p>Acest formular permite importul fișierelor de tipul <strong>iCalendar</strong> pentru introducerea de evenimente in Calendarul LuxCal.</p>
<p>Fișierul trebuie să respecte specificațiile prevăzute în standardul [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545</a></u>] al Internet Engineering Task Force.</p>
<p>Vor fi importate doar evenimentele importante; toate celelalte componente iCal components, ca: 'De Făcut', 'Jurnal', 'Liber / 
Ocupat', 'Fus Orar' și 'Alarme' vor fi ignorate.</p>
<h5>Model de fișier iCal</h5>
<p>Un exemplu de fișier iCalendar (fișier cu extensia .ics) poate fi găsit în folderul '<strong>files/</strong>' al distribuției LuxCal.</p>
<h5>Tabelul Categoriilor</h5>
<p>Calendarul utilizează numere (ID-uri) pentru specificarea categoriilor. ID-urile categoriilor din fișierul iCalendar trebuie să corespundă cu cele definite în calendar sau pot fi nule.</p>
<p class='hilight'>Atenție: Nu importați mai mult de 100 de evenimente odată!</p>
<p>Pentru calendarul dumneavoastră, pînă acum, au fost definite următoarele categorii:</p>",

"xpl_export_ical" =>
"<h4>Exportul fișierelor iCalendar</h4>
<p>Acest formular permite exportul evenimentelor din calendar în formatul <strong>iCalendar</strong>.</p>
<p>Numele fișierului <b>iCal nume fișier</b> (fără extensie) este opțional. Fișierul creat va fi 
salvat în directorul \"files/\" în server cu numele specificat, sau, dacă nu, cu numele 
implicit al calendarului. Extensia fișierului va fi <b>.ics</b>.
Dacă în folderul \"files/\" există deja un fișier cu ecest nume, acesta va fi suprascris.</p>
<p>Opțional se poate adăuga și o descriere sumară a fișierului (ex. 'Activități 2013') care va apare în head-erul fișierului iCal exportat.</p>
<p><b>Filtru</b>: Evenimentele exportate pot fi filtrate după:</p>
<ul>
<li>proprietar eveniment</li>
<li>categorie</li>
<li>data de început</li>
<li>data adăugării/modificării</li>
</ul>
<p>Fiecare filtru este opțional, lipsa filtrului însemnînd că vor fi exportate toate evenimentele</p>
<br>
<p>Fișierul exportat respectă specificațiile prevăzute în standardul [<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545</a></u>] al Internet Engineering Task Force</p>
<p>Cînd se descarcă fișierul iCal exportat, la numele acestuia va fi adăugat în mod automat data și ora..</p>
<h5>Exemplu de fișier iCal</h5>
<p>Un exemplu de fișier iCalendar (fișier cu extensia .ics) poate fi găsit în folderul '<strong>files/</strong>' al distribuției LuxCal.</p>"
);
?>
