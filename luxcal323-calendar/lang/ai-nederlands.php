<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
Wijzigingen en vertalingen zijn aangebracht door J.C.Barnhoorn - Hellevoetsluis

This file is part of the LuxCal Web Calendar.
*/
//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Geen",
"all" => "Alle",
"back" => "Terug",
"close" => "Sluiten",
"always" => "altijd",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Jaar",
"month" => "Maand",
"week_day" => "Week/Dag",
"upcoming" => "Binnenkort",

//settings.php - fieldset headers + general
"set_general_settings" => "Kalender algemeen",
"set_navbar_settings" => "Navigatiebalk",
"set_event_settings" => "Activiteiten",
"set_user_settings" => "Gebruikers",
"set_email_settings" => "E-mail Instellingen",
"set_perfun_settings" => "Periodieke Functies<br>(alleen relevant indien cron job loopt)",
"set_minical_settings" => "Mini Kalender (alleen relevant indien in gebruik)",
"set_sidebar_settings" => "Binnenkort Zijbalk<br>(alleen relevant indien in gebruik)",
"set_view_settings" => "Weergave",
"set_dt_settings" => "Datum/Tijd",
"set_save_settings" => "Instellingen opslaan",
"set_missing_invalid" => "ontbrekende of ongeldige instellingen (achtergrond gekleurd)",
"set_settings_saved" => "Kalender instellingen opgeslagen",
"set_save_error" => "Database fout. Opslaan kalender instellingen mislukt",
"hover_for_details" => "Ga met de muis over de beschrijving voor details",
"default" => "standaard",
"enabled" => "aan",
"disabled" => "uit",
"no" => "nee",
"yes" => "ja",
"or" => "of",
"minutes" => "minuten",
"pixels" => "pixels",
"no_way" => "U hebt geen rechten om deze actie uit te voeren.",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Kalender versie",
"calendarVersion_text" => "Versie van de geïnstalleerde kalender software.",
"calendarTitle_label" => "Kalendertitel",
"calendarTitle_text" => "Weergegeven in de titelbalk van de kalender en gebruikt in mail herinneringen",
"calendarUrl_label" => "Kalender-URL",
"calendarUrl_text" => "Webadres van de kalender.",
"calendarEmail_label" => "Kalender e-mailadres",
"calendarEmail_text" => "Het e-mailadres van de afzender / de ontvanger gebruikt in mailherinneringen<br>Opmaak: \'mail\' of \'naam&#8249;mail&#8250;\'. \'naam\' kan bijv. de kalendertitel zijn",
"backLinkUrl_label" => "Link naar bovenliggende pagina",
"backLinkUrl_text" => "URL van de bovenliggende pagina. Indien gespecificeerd, zal er een Terug-knop worden weergegeven aan de linkerzijde van de Navigatie Balk met een link naar de opgegeven URL.<br>Bijvoorbeeld om terug te linken naar de pagina waar vandaan de kalender werd gestart.",
"timeZone_label" => "Tijdzone",
"timeZone_text" => "De door de kalender gebruikte tijdzone voor het berekenen van de huidige tijd",
"see" => "zie",
"notifSender_label" => "Afzender van herinneringsmails",
"notifSender_text" => "Wanneer de kalender herinneringsmails verstuurt, kan het veld afzender of het kalender e-mailadres of het e-mailadres van de gebruiker die de activiteit heeft ingevoerd bevatten.<br>In geval van het e-mailadres van de gebruiker kan de ontvanger antwoorden op de e-mail.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "Indien geactiveerd: Voor gebruikers met minstens rechten \'bekijken\' zal een RSS feed link woorden weergegeven in de voet van de kalender; ook zal een RSS feed link worden toegevoegd aan de HTML head van de kalender paginas.",
"calendar" => "kalender",
"user" => "gebruiker",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Navigatiebalk knoppen met tekst",
"navButText_text" => "Aan: De knoppen op de navgatie balk zijn voorzien van tekst. Uit: De knoppen worden weergegeven met een symbool.",
"navBar_label" => "Navigatiebalk",
"navBar_text" => "Aan: Een Tedoen knop / Binnenkort knop zal worden weergegeven op de navigatiebalk, welke wanneer geselecteerd de Tedoen lijst / Binnenkort lijst zal openen.",
"navTodoList_label" => "Tedoen knop",
"navUpcoList_label" => "Binnenkort knop",
"optionsPanel_label" => "Instellingen",
"optionsPanel_text" => "Het weergeven van menus in the Instellingen.<br>Het gebruikers filter kan worden gebruikt om activiteiten weer te geven welke zijn ingevoerd door een bepaalde gebruiker.<br>Het categorie filter kan worden gebruikt om activiteiten weer te geven welke tot een bepaalde activiteitencategorie behoren.<br>Met het taalkeuze menu kan de taal van de gebruikersinterface worden gekozen. (inschakelen alleen zinvol als meerdere talen zijn geïnstalleerd)",
"userMenu_label" => "gebruikers filter",
"catMenu_label" => "Categorie filter",
"langMenu_label" => "taalkeuze",
"defaultView_label" => "Standaardweergave bij opstarten",
"defaultView_text" => "Mogelijke standaardweergaven bij opstarten van de kalender zijn:<br>- Jaar<br>- Maand<br>- Werkmaand *)<br>- Week<br>- Werkweek *)<br>- Dag<br>- Binnenkort<br>- Wijzigingen<br>Aanbevolen: Maand of Binnenkort<br>*) Voor werkdagen zie op deze pagina: Weergave - Werkweek dagen",
"language_label" => "Standaard taal voor user interface",
"language_text" => "De bestanden ui-{taal}.php, ai-{taal}.php, ug-{taal}.php en ug-layout.png moeten in de lang/ map aanwezig zijn. {taal} = taal gekozen voor de gebruikersinterface. Bestandsnamen in kleine letter!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Plaatsen van privé activiteiten",
"privEvents_text" => "Privé activiteiten zijn alleen zichtbaar voor de gebruiker die de activiteit invoerde.<br>Aan: gebruiker kan privé activiteiten invoeren.<br>Standaard: wanneer een nieuwe activiteit wordt toegevoegd, zal het \'privé\' vinkje in het Activiteit venster standaard aan staan..<br>Altijd: wanneer nieuwe activiteiten worden toegevoegd zullen deze altijd privézijn, de \'privé\' checkbox in het Activiteit venster zal niet zichtbaar zijn.",
"details4All_label" => "Toon details aan alle gebruikers",
"details4All_text" => "Aan: activiteitdetails zullen zichtbaar zijn voor de eigenaar van de activiteit en alle andere gebruikers.<br>Uit: activiteiten details zullen alleen zichtbaar zijn voor de eigenaar van de activiteit en de gebruikers met rechten \'wijzigen alle activiteiten\'.<br>Ingelogd: activiteiten details zullen alleen zichtbaar zijn voor de eigenaar van de activiteit en voor ingelogde gebruikers.",
"evtDelButton_label" => "Toon knop Verwijderen in het Activiteit venster",
"evtDelButton_text" => "Aan: de knop \'Verwijderen\' in het Activiteit venster is zichtbaar voor alle gebruikers.<br>Manager: de knop \'Verwijderen\' in het Activiteit venster is alleen zichtbaar voor gebruikers met \'manager\' rechten.<br>Uit: de knop \'Verwijderen\' in het Activiteit venster is niet zichtbaar. Gebruikers met edit rechten kunnen dus geen activiteiten verwijderen.",
"eventColor_label" => "Activiteitkleuren gebaseerd op",
"eventColor_text" => "Activiteiten in de verschillende kalenderweergaven kunnen worden weergegeven in de kleur welke is toegewezen aan de eigenaar van de activiteit of de kleur van de categorie welke aan de activiteit is toegekend.",
"xField1_label" => "Naam extra veld 1",
"xField2_label" => "Naam extra veld 2",
"xFieldx_text" => "Naam van een optioneel tekst veld. Indien dit veld voor komt in het hierna volgende model, zal het als een tekst veld worden toegevoegd aan het Activiteiten venster en aan de activiteiten in alle kalender pagina\'s. <br>De opgegeven naam kan max. 15 tekens lang zijn. E.g. \'E-mailadres\', \'Website\', \'Telefoonnummer\'.",
"logged_in" => 'aangemeld',
"manager_only" => 'manager',
"owner_color" => "eigenaar kleur",
"cat_color" => "categorie kleur",

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Zelfregistratie",
"selfReg_text" => "Gebruikers toestaan zich te registreren en toegang tot de kalender te krijgen",
"selfRegPrivs_label" => "Zelfregistratierechten",
"selfRegPrivs_text" => "Toegangsrechten tot de kalender voor gebruikers die zich hebben geregistreerd<br>- bekijken: alleen zien<br>- eigen invoer: activiteiten toevoegen en eigen activiteiten wijzigen<br>- alle invoeren: activiteiten toevoegen en eigen activiteiten en die van anderen wijzigen",
"selfRegNot_label" => "Melding zelfregistratie",
"selfRegNot_text" => "Stuur een e-mail naar het kalender e-mailadres wanneer een zelfregistatie plaatsvindt.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "Aantal dagen voor 'onthoud mij' cookie afloopt",
"cookieExp_text" => "Aantal dagen voor het cookie gezet door de \'Onthoud mij\' optie (tijdens Inloggen) afloopt.",
"view" => "bekijken",
"post_own" => 'eigen invoer',
"post_all" => 'alle invoeren',
"manager" => 'invoeren/manager',

//settings.php - view settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"evtTemplGen_label" => "Activiteit model - Algemeen",
"evtTemplGen_text" => "De activiteitvelden en de volgorde waarin deze worden weergegeven op de verschillende kalender pagina\'s kunnen worden opgegeven d.m.v. een reeks van cijfers.<br>Indien een cijfer is gespecificeerd, dan zal het corresponderende veld worden weergegeven.",
"evtTemplUpc_label" => "Activiteit model - Binnenkort",
"evtTemplUpc_text" => "De activiteitvelden en de volgorde waarin deze worden weergegeven op de \'Binnenkort\' kalender pagina kunnen worden opgegeven d.m.v. een reeks van cijfers.<br>Indien een cijfer is gespecificeerd, dan zal het corresponderende veld worden weergegeven.",
"popBoxFields_label" => "Hover box activiteit velden",
"popBoxFields_text" => "De activiteitvelden en de volgorde waarin deze worden weergegeven in de verschillende kalenderweergaven in de hover box met activiteitdetails kunnen worden opgegeven d.m.v. een reeks van cijfers.<br>Indien een cijfer is gespecificeerd, dan zal het corresponderende veld worden weergegeven.<br>Als dit veld leeg is, zal geen hover box worden weergegeven.",
"templFields_text" => "Betekenis van de cijfers:<br>1: Locatie<br>2: Ativiteit categorie<br>3: Omschrijving<br>4: Extra veld 1 (zie hierna)<br>5: Extra veld 2 (zie hierna)<br>6: Stuur mail gegevens (alleen als een e-mail herinnering is gevraagd)<br>7: Datum/tijd ingevoerd/gewijzigd en de betreffende persoon.<br>De volgorde van de cijfers bepaald de volgorde waarin de betreffende velden worden weergegeven.",
"popBoxShow_label" => "Hover box met aktiviteitdetails",
"popBoxShow_text" => "In de aangevinkte weergaven, zal een veld met aktiviteitdetails worden weergegeven wanneer men met de muis over een aktiviteit gaat. De details zullen niet worden weergegeven als geen hover box activiteit velden (zie hier boven) gespecificeerd zijn.",
"yearStart_label" => "Beginmaand in Jaar-weergave",
"yearStart_text" => "Indien een beginmaand is opgegeven (1 - 12), zal de kalender in Jaar-weergave altijd met deze maand beginnen en het jaar van deze eerste maand zal pas veranderen vanaf de eerste dag van dezelfde maand in het volgende jaar.<br>De waarde 0 heeft een een speciale betekenis: de beginmaand is gebaseerd op de huidige datum en zal in de eerste rij maanden vallen.",
"colsToShow_label" => "Aantal kolommen in Jaar-weergave",
"colsToShow_text" => "Aantal maanden weer te geven in elke rij in Jaar-weergave<br>Aanbevolen: 3 of 4",
"rowsToShow_label" => "Aantal rijen in Jaar-weergave",
"rowsToShow_text" => "Aantal rijen van telkens vier maanden weer te geven in Jaar-weergave<br>Aanbevolen: 4, zodat door 16 maanden kan worden gescrolld",
"weeksToShow_label" => "Aantal weken in Maand-weergave",
"weeksToShow_text" => "Aantal weken weer te geven in Maand-weergave<br>Aanbevolen: 10, zodat door 2.5 maand kan worden gescrolld<br>De waarden 0 en 1 hebben een speciale betekenis:<br>0: geef precies een maand weer - geen activiteiten in de voorafgaande en volgede dagen.<br>1: geef precies een maand weer - ook activiteiten in de voorafgaande en volgede dagen.",
"workWeekDays_label" => "Werkweek dagen",
"workWeekDays_text" => "Dagen zichtbaar in de weken in Werkmaand weergave en Werkweek weergave.<br>Voer het nummer in van elke dag die zichtbaar moet zijn. Mogelijke dagnummers:<br>1 = maandag<br>2 = dinsdag<br>....<br>7 = zondag<br>voorbeeld 12345 : maandag - vrijdag",
"lookaheadDays_label" => "Aantal dagen vooruitkijken",
"lookaheadDays_text" => "Aantal dagen dat moet worden vooruitgekeken in het overzicht Binnenkort, in de Taken Lijst en in de RSS feeds",
"dwStartHour_label" => "Beginuur in Dag/Week-weergave",
"dwStartHour_text" => "Uur waarop een normale dag begint<br>Wanneer deze waarde op bijv. 6 wordt gesteld, wordt in de Dag/Week-weergave niet nodeloos ruimte gebruikt voor de tijd tussen middernacht en 6:00 uur waarop normaal niet veel wordt uitgevoerd.<br>De tijd pikker, die wordt gebruikt bij het invoeren van een tijd, zal ook op dit uur beginnen.",
"dwEndHour_label" => "Einduur in Dag/Week weergave",
"dwEndHour_text" => "Uur waarop een normale dag eindigt.<br>Wanneer deze waarde op bijv. 18 wordt gesteld, wordt in de Dag/Week-weergave niet nodeloos ruimte gebruikt voor de tijd tussen 18:00 uur en middernacht.<br>De tijd pikker, die wordt gebruikt bij het invoeren van een tijd, zal ook op dit uur eindigen.",
"dwTimeSlot_label" => "Tijd slot in Dag/Week weergave",
"dwTimeSlot_text" => "Dag/Week weergave tijd slot in aantal minuten.<br>Deze waarde, samen met het uur waarop de normale dag begint en eindigd (zie hier boven) bepalen het aantal rijen in Dag/Week weergave.",
"dwTsHeight_label" => "Tijd slot hoogte",
"dwTsHeight_text" => "Day/Week weergave tijd slot weergave hoogte in aantal pixels.",
"showLinkInMV_label" => "Geef links in maand overzicht weer",
"showLinkInMV_text" => "Indien aan, URLs in de activiteiten omschrijving zullen in Maand-weergave als hyperlink worden weergegeven",
"monthInDCell_label" => "Maand naam voor elke dag",
"monthInDCell_text" => "Toon in maand weergave de 3-letterige maandnaam voor elke dag",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Datumopmaak (dd mm jjjj)",
"dateFormat_text" => "Tekenreeks met de opmaak van datums in de kalender weergaven en input velden.<br>Toegestaane tekens: y = jaar, m = maand en d = dag.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "e.g. y.m.d: 2013.10.31",
"MdFormat_label" => "Datumopmaak (dd maand)",
"MdFormat_text" => "Tekenreeks met de opmaak van datums bestaande uit dag en maand.<br>Toegestaane tekens: M = maand in tekst, d = dag in cijfers.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>d M: 12 april<br>M, d: juli, 14",
"MdFormat_expl" => "e.g. M, d: juli, 14",
"MdyFormat_label" => "Datumopmaak (dd maand jjjj)",
"MdyFormat_text" => "Tekenreeks met de opmaak van datums bestaande uit dag, maand en jaar.<br>Toegestaane tekens: d = dag in cijfers, M = maand in tekst, y = jaar in cijfers.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>d M y: 12 april 2013<br>M d, y: juli 8, 2013",
"MdyFormat_expl" => "e.g. M d, y: juli 8, 2013",
"MyFormat_label" => "Datumopmaak (maand jjjj)",
"MyFormat_text" => "Tekenreeks met de opmaak van datums bestaande uit maand en jaar.<br>Toegestaane tekens: M = maand in tekst, y = jaar in cijfers.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>M y: april 2013<br>y - M: 2013 - juli",
"MyFormat_expl" => "e.g. M y: april 2013",
"DMdFormat_label" => "Datumopmaak (dag dd maand)",
"DMdFormat_text" => "Tekenreeks met de opmaak van datums bestaande uit weekdag, dag en maand.<br>Toegestaane tekens: WD = weekdag in tekst, M = maand in tekst, d = dag in cijfers.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>WD d M: vrijdag 12 april<br>WD, M d: Maandag, juli 14",
"DMdFormat_expl" => "e.g. WD - M d: zondag - april 6",
"DMdyFormat_label" => "Datumopmaak (dag dd maand jjjj)",
"DMdyFormat_text" => "Tekenreeks met de opmaak van datums bestaande uit weekdag, dag, maand en jaar.<br>Toegestaane tekens: WD = weekdag in tekst, M = maand in tekst, d = dag in cijfers, y = jaar in cijfers.<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>WD d M y: vrijdag 13 april 2013<br>WD - M d, y: Maandag - juli 16, 2013",
"DMdyFormat_expl" => "e.g. WD, M d, y: maandag, juli 16, 2013",
"timeFormat_label" => "Tijdopmaak (uu mm)",
"timeFormat_text" => "Tekenreeks met de opmaak van tijden in de kalender weergaven en input velden.<br>Toegestaane tekens: h = uren, H = uren met opvulnul, m = minuten, a = am/pm (optioneel), A = AM/PM (optioneel).<br>Niet-alphanumerieke tekens kunnen als scheidingsteken worden gebruikt en worden letterlijk overgenomen.<br>Voorbeelden:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "bijv. h:m: 22:35 en h:mA: 10:35PM",
"weekStart_label" => "Eerste dag van de week",
"weekStart_text" => "Eerste dag van de week",
"weekNumber_label" => "Geef weeknummers weer",
"weekNumber_text" => "De weergave van weeknummers in Jaar, Maand en Week view kan aan- of uitgezet worden",
"time_format_us" => "12 uur AM/PM",
"time_format_eu" => "24 uur",
"sunday" => "zondag",
"monday" => "maandag",
"time_zones" => "TIJD ZONES",
"dd_mm_yyyy" => "dd-mm-jjjj",
"mm_dd_yyyy" => "mm-dd-jjjj",
"yyyy_mm_dd" => "jjjj-mm-dd",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Mail server",
"mailServer_text" => "PHP mail is bruikbaar voor niet beveiligde e-mail's in kleine aantallen. Voor grotere aantallen te versturen e-mail of wanneer wachtwoord beveiliging vereist is, moet SMTP mail worden gebruikt.<br>Om SMTP mail te gebruiken is een SMTP mail server nodig. De configuration parameters voor de SMTP server moetten hierna worden gespecificeerd. Indien mail is uitgeschakeld, zal de Stuur mail sectie in het Activiteit window worden onderdrukt.",
"smtpServer_label" => "SMTP server naam",
"smtpServer_text" => "Als SMTP mail is geselecteerd, moet hier de SMTP server naam worder gespecificeerd. Bijvoorbeeld gmail SMTP server: smtp.gmail.com.",
"smtpPort_label" => "SMTP poort nummer",
"smtpPort_text" => "Als SMTP mail is geselecteerd, moet hier het SMTP portnummer worden gespecificeerd. Bijvoorbeeld 25, 465 or 587. Gmail bijvoorbeeld, gebruikt poortnummer 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "Als SMTP mail is geselecteerd, kies dan hier of de secure sockets layer (SSL) moet worden gebruikt. Voor gmail: aan",
"smtpAuth_label" => "SMTP authenticatie",
"smtpAuth_text" => "Als SMTP authenticatie is geselecteerd, worden de gebruikersnaam en het wachtwoord hieronder darvoor gebruikt.",
"smtpUser_label" => "SMTP gebruikersnaam",
"smtpUser_text" => "Als SMTP mail is geselecteerd, geef dan hier de SMTP gebruikersnaam. Voor gmail is dit het deel van het e-mail adres voor de @.",
"smtpPass_label" => "SMTP wachtwoord",
"smtpPass_text" => "Als SMTP mail is geselecteerd, geef dan hier het SMTP wachtwoord.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Admin cronjob samenvatting",
"cronSummary_text" => "E-mail een cronjob samenvatting naar de kalenderbeheerder.<br>Inschakelen is alleen zinvol als een cronjob is geactiveerd voor de kalender.",
"chgEmailList_label" => "E-mailadressen voor wijzigingen",
"chgEmailList_text" => "E-mailadressen die periodiek een e-mail krijgen met wijzigingen in de kalender<br>E-mailadressen gescheiden door puntkomma\'s.",
"chgNofDays_label" => "Aantal dagen teruggaan voor wijzigingen",
"chgNofDays_text" => "Aantal dagen dat wordt teruggegaan voor het overzicht met kalenderwijzigingen<br>Als het aantal dagen 0 is, wordt er geen overzicht met kalenderwijzigingen verstuurd.",
"icsExport_label" => "Dagelijkse export iCal activiteiten",
"icsExport_text" => "Indien ingeschakeld, worden alle activiteiten in het datumbereik van -1 week tot +1 jaar geëxporteerd in iCalendar formaat in een .ics file in de \'files\' folder.<br>De bestandsnaam wordt de kalendernaam met spatie's vervangen door underscores. Oude bestanden worden overschreven door nieuwere.",
"eventExp_label" => "Aantal dagen voor activiteiten worden verwijderd",
"eventExp_text" => "Aantal dagen na de activiteit datum waarna deze automatisch wordt verwijderd.<br>Indien 0 of als er geen cron job is gedefinieerd, worden geen activiteiten verwijderd.",
"maxNoLogin_label" => "Max. aantal dagen niet ingelogd",
"maxNoLogin_text" => "Als een gebruiker gedurende dit aantal dagen niet is ingelogd, dan wordt zijn/haar account automatisch verwijderd.<br>Als het aantal dagen 0 is, zullen gebruikersaccounts nooit worden verwijderd",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Minikalender weergave",
"miniCalView_text" => "Mogelijke weergaven voor de minikalender zijn:<br>- Maand<br>- Werkmaand *)<br>- Week<br>- Werkweek *)<br>*) Voor werkdagen zie op deze pagina: Weergave - Werkweek dagen",
"miniCalPost_label" => "Minikalender interactief",
"miniCalPost_text" => "Alleen van toepassing bij gebruik van de minikalender!<br>Indien ingeschakeld kunnen gebruikers:<br>- nieuwe activiteiten aan de kalender toevoegen door boven in een dag cel te klikken<br>- activiteiten wijzigen/verwijderen door op een activiteit (vierkantje) te klikken<br>NB: De access rights van de Public User zijn van toepassing applicable.",
"popFieldsMcal_label" => "Activiteit velden - mini calendar hover box",
"popFieldsMcal_text" => "De weer te geven activiteitvelden in de hover box met activiteitdetails in de minikalender kunnen worden opgegeven d.m.v. een reeks van cijfers.<br>Als dit veld leeg is, zal geen hover box worden weergegeven.",
"mCalUrlFull_label" => "Minikalender URL naar volledige kalender",
"mCalUrlFull_text" => "Als op de maand bovenaan de minikalender wordt geklikt om naar de volledige kalender te gaan, gaat de gebruiker gaat dan naar deze website.<br>Indien niet ingevuld opent de volledige in een nieuw venster.<br>Deze URL is handig als de kalender is opgenomen in een andere webpagina.",
"popFieldsSbar_label" => "Activiteit velden - sidebar hover box",
"popFieldsSbar_text" => "De weer te geven activiteitvelden in de hover box met activiteitdetails in de stand-alone sidebar kunnen worden opgegeven d.m.v. een reeks van cijfers.<br>Als dit veld leeg is, zal geen hover box worden weergegeven.",
"showLinkInSB_label" => "Toon links in zijbalk",
"showLinkInSB_text" => "Toon URLs in de omschrijving van een activiteits als een hyperlink in de Binnenkort zijbalk",
"sideBarDays_label" => "Dagen te tonen in zijbalk",
"sideBarDays_text" => "Aantal dagen vooruit te kijken in de Binnenkort zijbalk.",

//login.php
"log_log_in" => "Aanmelden",
"log_remember_me" => "Onthoud mij",
"log_register" => "Registreren",
"log_change_my_data" => "Mijn gegevens wijzigen",
"log_change" => "Wijzig",
"log_un_or_em" => "Gebruikersnaam of e-mailadres",
"log_un" => "Gebruikersnaam",
"log_em" => "E-mailadres",
"log_pw" => "Wachtwoord",
"log_new_un" => "Nieuwe gebruikersnaam",
"log_new_em" => "Nieuw e-mailadres",
"log_new_pw" => "Nieuw wachtwoord",
"log_pw_msg" => "Hier zijn de aanmelddetails voor kalender",
"log_pw_subject" => "Uw %% wachtwoord", //%% will be replaced by calendar name
"log_npw_subject" => "Uw nieuwe %% wachtwoord", //%% will be replaced by calendar name
"log_npw_sent" => "Uw nieuwe wachtwoord is verstuurd",
"log_registered" => "Registratie gelukt - Uw wachtwoord is per mail verstuurd",
"log_not_registered" => "Registratie mislukt",
"log_un_exists" => "Gebruikersnaam bestaat al",
"log_em_exists" => "E-mailadres bestaat al",
"log_un_invalid" => "Gebruikersnaam ongeldig (min lengte 2: A-Z, a-z, 0-9, en _-.) ",
"log_em_invalid" => "E-mailadres ongeldig",
"log_un_em_invalid" => "Gebruikersnaam of wachtwoord onjuist",
"log_un_em_pw_invalid" => "Uw gebruikersnaam/e-mailadres of wachtwoord is onjuist",
"log_no_un_em" => "U hebt uw gebruikersnaam of e-mailadres niet ingevoerd",
"log_no_un" => "Voer uw gebruikersnaam in",
"log_no_em" => "Voer uw e-mailadres in",
"log_no_pw" => "U hebt uw wachtwoord niet ingevoerd",
"log_no_rights" => "Aanmelden afgewezen: u hebt geen toegangsrechten - Vraag de beheerder",
"log_send_new_pw" => "Stuur mij een nieuw wachtwoord",
"log_if_changing" => "Alleen indien gewijzigd",
"log_no_new_data" => "Geen gegevens te wijzigen",
"log_invalid_new_un" => "Nieuwe gebruikersnaam ongeldig (min lengte 2: A-Z, a-z, 0-9, en _-.) ",
"log_new_un_exists" => "Uw nieuwe gebruikersnaam bestaat al",
"log_invalid_new_em" => "Uw nieuwe e-mailadres is onjuist",
"log_new_em_exists" => "Uw nieuwe e-mailadres bestaat al",
"log_ui_language" => "Taal gebruikersinterface",
"log_new_reg" => "Nieuwe gebruikersregistratie",
"log_date_time" => "Datum / tijd",

//categories.php
"cat_list" => "Categorieën",
"cat_edit" => "Wijzigen",
"cat_delete" => "Verwijderen",
"cat_add_new" => "Nieuwe categorie toevoegen",
"cat_add" => "Toevoegen",
"cat_edit_cat" => "Categorie wijzigen",
"cat_name" => "Naam categorie",
"cat_sequence" => "Volgorde",
"cat_in_menu" => "in menu",
"cat_text_color" => "Tekstkleur",
"cat_background" => "Achtergrond",
"cat_select_color" => "Kies kleur",
"cat_save" => "Opslaan",
"cat_added" => "Categorie toegevoegd",
"cat_updated" => "Categorie gewijzigd",
"cat_deleted" => "Categorie verwijderd",
"cat_invalid_color" => "Kleuropmaak ongeldig (#XXXXXX waar X = HEX-waarde)",
"cat_not_added" => "Categorie niet toegevoegd",
"cat_not_updated" => "Categorie niet gewijzigd",
"cat_not_deleted" => "Categorie niet verwijderd",
"cat_nr" => "#",
"cat_repeat" => "Herhalen",
"cat_every_day" => "elke dag",
"cat_every_week" => "elke week",
"cat_every_month" => "elke maand",
"cat_every_year" => "elk jaar",
"cat_approve" => "Activiteit vereist goedkeuring",
"cat_public" => "Openbaar",
"cat_check_mark" => "Vinkje",
"cat_label" => "betekenis",
"cat_mark" => "symbool",
"cat_name_missing" => "Categorienaam ontbreekt",
"cat_mark_label_missing" => "Vinkteken/label ontbreekt",

//users.php
"usr_list_of_users" => "Lijst van gebruikers",
"usr_id" => "User ID",
"usr_name" => "Gebruikersnaam",
"usr_email" => "E-mailadres",
"usr_password" => "Wachtwoord",
"usr_rights" => "Rechten",
"usr_edit_user" => "Gebruikersprofiel wijzigen",
"usr_add" => "Gebruiker toevoegen",
"usr_edit" => "Wijzigen",
"usr_delete" => "Verwijderen",
"usr_view" => "Bekijken",
"usr_post_own" => 'eigen invoer',
"usr_post_all" => 'alle invoeren',
"usr_manager" => 'invoeren/manager',
"usr_admin" => "Beheerder",
"usr_login_0" => "Eerste aanmelding",
"usr_login_1" => "Laatste aanmelding",
"usr_login_cnt" => "Aanmeldingen",
"usr_add_profile" => "Profiel toevoegen",
"usr_upd_profile" => "Profiel wijzigen",
"usr_not_found" => "Gebruiker niet gevonden",
"usr_if_changing_pw" => "Alleen als het wachtwoord verandert",
"usr_admin_rights" => "Beheerder-functies",
"usr_no_rights" => "Geen rechten",
"usr_view_calendar" => "Kalender bekijken",
"usr_post_events_own" => "Invoeren/wijzigen eigen activiteiten",
"usr_post_events_all" => "Invoeren/wijzigen alle activiteiten",
"usr_manager_rights" => "Invoeren/wijzigen + manager rechten",
"usr_pw_not_updated" => "Wachtwoord niet gewijzigd",
"usr_added" => "Gebruiker toegevoegd",
"usr_updated" => "Gebruikersprofiel gewijzigd",
"usr_deleted" => "Gebruiker verwijderd",
"usr_not_added" => "Gebruiker niet toegevoegd",
"usr_not_updated" => "Gebruiker niet gewijzigd",
"usr_not_deleted" => "Gebruiker niet verwijderd",
"usr_cred_required" => "Gebruikersnaam, e-mailadres en wachtwoord zijn verplicht",
"usr_uname_exists" => "Gebruikersnaam bestaat al",
"usr_email_exists" => "E-mailadres bestaat al",
"usr_un_invalid" => "Gebruikersnaam ongeldig (min lengte 2: A-Z, a-z, 0-9, en _-.) ",
"usr_em_invalid" => "E-mailadres ongeldig",
"usr_cant_delete_yourself" => "Je kunt jezelf niet verwijderen",
"usr_background" => "Achtergrondkleur",
"usr_select_color" => "Kies kleur",
"usr_invalid_color" => "Ongeldige kleuropmaak (#XXXXXX waar X = HEX-waarde)",

//database.php
"mdb_dbm_functions" => "Database Functies",
"mdb_noshow_tables" => "Geen toegang tot tabel(len)",
"mdb_noshow_restore" => "Kan backup bestand niet vinden",
"mdb_compact" => "Comprimeer database",
"mdb_compact_table" => "Comprimeer tabel",
"mdb_compact_error" => "Fout",
"mdb_compact_done" => "OK, klaar",
"mdb_purge_done" => "Verwijderde activiteiten definitief weggegooid",
"mdb_repair" => "Controleer en repareer database",
"mdb_check_table" => "Controleer tabel",
"mdb_ok" => "OK",
"mdb_nok" => "Niet OK",
"mdb_nok_repair" => "Niet OK, repareren",
"mdb_backup" => "Back-up database",
"mdb_backup_table" => "Back-up tabel",
"mdb_backup_file" => "Backup bestand",
"mdb_backup_done" => "OK, klaar",
"mdb_records" => "records",
"mdb_restore" => "Database terugzetten",
"mdb_restore_table" => "Tabel terugzetten",
"mdb_inserted" => "records toegevoegd",
"mdb_db_restored" => "Database teruggezet.",
"mdb_run_upgrade" => "Waarschuwing:<br>Backup bestand komt niet overeen met kalender versie<br>Start upgradexxx.php script.",
"mdb_events" => "Activiteiten",
"mdb_delete" => "verwijderen",
"mdb_undelete" => "herstellen",
"mdb_between_dates" => "voorkomend tussen",
"mdb_deleted" => "Activiteiten verwijderd",
"mdb_undeleted" => "Activiteiten hersteld",
"mdb_file_saved" => "Back-up bestand opgeslagen in map 'files' op de server.",
"mdb_file_name" => "Bestandsnaam:",
"mdb_start" => "Start",
"mdb_no_function_checked" => "Geen functie(s) geselecteerd",
"mdb_write_error" => "Opslaan back-up bestand mislukt<br>Controleer permissies van 'files/' map",

//import/export.php
"iex_file" => "Gekozen bestand",
"iex_file_name" => "iCal bestandsnaam",
"iex_file_description" => "Beschrijving iCal bestand",
"iex_filters" => "Activiteitfilters",
"iex_upload_ics" => "Upload iCal bestand",
"iex_create_ics" => "Genereer iCal bestand",
"iex_upload_csv" => "Upload CSV bestand",
"iex_upload_file" => "Upload bestand",
"iex_create_file" => "Maak bestand",
"iex_download_file" => "Download bestand",
"iex_fields_sep_by" => "Velden gescheiden door",
"iex_birthday_cat_id" => "ID verjaardag categorie",
"iex_default_cat_id" => "ID standaard categorie",
"iex_if_no_cat" => "indien geen categorie gevonden",
"iex_import_events_from_date" => "Importeer activiteiten die plaatsvinden vanaf",
"iex_see_insert" => "zie aanwijzingen aan de rechterzijde",
"iex_no_file_name" => "Bestandsnaam ontbreekt",
"iex_inval_field_sep" => "ongeldig of geen veldscheidingsteken",
"iex_no_begin_tag" => "ongeldig iCal bestand",
"iex_date_format" => "Activiteit datum opmaak",
"iex_time_format" => "Activiteit tijd opmaak",
"iex_number_of_errors" => "Aantal fouten in de lijst",
"iex_bgnd_highlighted" => "achtergrond gemarkeerd",
"iex_verify_event_list" => "Lijst van activiteiten verifiëren, fouten verbeteren en klik op",
"iex_add_events" => "Activiteiten aan database toevoegen",
"iex_select_ignore_birthday" => "Vink eventueel Verjaardag en/of Wissen aan",
"iex_select_ignore" => "Vink Wissen aan om activiteit over te slaan",
"iex_title" => "Titel",
"iex_venue" => "Plaats",
"iex_owner" => "Eigenaar",
"iex_category" => "Categorie",
"iex_date" => "Datum",
"iex_end_date" => "Einddatum",
"iex_start_time" => "Begintijd",
"iex_end_time" => "Eindtijd",
"iex_description" => "Omschrijving",
"iex_repeat" => "Herhaal",
"iex_birthday" => "Verjaardag",
"iex_ignore" => "Wissen",
"iex_events_added" => "activiteiten toegevoegd",
"iex_events_dropped" => "activiteiten overgeslagen (al aanwezig)",
"iex_db_error" => "Database fout",
"iex_ics_file_error_on_line" => "iCal bestandsfout op regel",
"iex_between_dates" => "Plaatsvindend tussen",
"iex_changed_between" => "Toegevoegd/gewijzigd tussen",
"iex_select_date" => "Kies datum",
"iex_select_start_date" => "Kies begindatum",
"iex_select_end_date" => "Kies einddatum",
"iex_all_cats" => "alle categorieën",
"iex_all_users" => "alle gebruikers",
"iex_no_events_found" => "Geen activiteiten gevonden",
"iex_file_created" => "Bestand aangemaakt",
"iex_write error" => "Opslaan export bestand mislukt<br>Controleer permissies van 'files/' map",

//lcalcron.php
"cro_sum_header" => "CRONJOB SAMENVATTING",
"cro_sum_trailer" => "EINDE SAMENVATTING",
"cro_evc_sum_title" => "ACTIVITEITEN VERLOPEN",
"cro_nr_evts_deleted" => "Aantal activiteiten verwijderd",
"cro_not_sum_title" => "E-MAIL HERINNERINGEN",
"cro_not_sent_to" => "Herinnering gestuurd naar",
"cro_no_not_dates_due" => "Geen herinneringsdatums actief",
"cro_all_day" => "Hele dag",
"cro_mailer" => "mailer",
"cro_subject" => "Onderwerp",
"cro_event_due_in" => "Deze activiteit staat op het programma over",
"cro_event_due_today" => "De volgende activiteit vindt vandaag plaats",
"cro_due_in" => "Op het programma over",
"cro_due_today" => "Vandaag",
"cro_days" => "dag(en)",
"cro_date_time" => "Datum / tijd",
"cro_title" => "Titel",
"cro_venue" => "Locatie",
"cro_description" => "Omschrijving",
"cro_category" => "Categorie",
"cro_status" => "Status",
"cro_open_calendar" => "Kalender openen",
"cro_chg_sum_title" => "KALENDER WIJZIGINGEN",
"cro_nr_changes_last" => "Aantal wijzigingen laatste",
"cro_report_sent_to" => "Rapport gestuurd naar",
"cro_no_report_sent" => "Geen rapport gemaild",
"cro_usc_sum_title" => "GEBRUIKERSACCOUNTS VERLOPEN",
"cro_nr_accounts_deleted" => "Aantal accounts verwijderd",
"cro_no_accounts_deleted" => "Geen accounts verwijderd",
"cro_ice_sum_title" => "GEEXPORTEERDE ACTIVITEITEN",
"cro_nr_events_exported" => "Aantal gebeurtenissen dat is geëxporteerd in iCalendar opmaak naar bestand",

//explanations
"xpl_manage_db" =>
"<h4>Manage Database Instructies</h4>
<p>Op deze pagina kunnen de volgende functies worden geselecteerd:</p>
<h5>Controleer en repareer database</h5>
<p>Deze functie doorloopt de kalendertabellen en controleert deze op fouten. 
Een gevonden fout wordt indien mogelijk gerepareerd.</p>
<p>Indien de kalender weergaven geen problemen vertonen, is het voldoende deze 
functie eens per jaar uit te voeren.</p>
<h5>Comprimeer database</h5>
<p>Als een gebruiker een activiteit verwijdert, wordt deze als 'verwijderd' 
gemarkeerd, maar blijft in de database. De Comprimeer Database functie zal de 
activiteiten die meer dan 30 dagen geleden als 'verwijderd' zijn gemarkeerd 
definitief uit de database verwijderen, waardoor deze ruimte weer vrij komt.</p>
<h5>Back-up database</h5>
<p>Deze functie maakt een back-up van de volledige kalender database (tabellen, 
structuur en inhoud) in .sql formaat. De back-up zal worden opgeslagen in de 
<strong>files/</strong> map met de naam: 
<kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (waar 'yyyymmdd' = jaar, maand en dag, 
en hhmmss = uur, minuten en seconden.</p>
<p>Dit back-up bestand kan worden gebruikt om de database tabelstructuur en 
inhoud opnieuw te genereren, via de herstel functie (zie hierna) of bijv. door 
het bestand te importeren in de <strong>phpMyAdmin</strong> applicatie, welke 
op de server van de meeste web host beschikbaar is.</p>
<h5>Herstel database</h5>
<p>Deze functie gebruikt het laatste backup bestand in de 'files' map welke is 
gemaakt door de hier boven beschreven backup functie. Let op dat wanneer 
meerdere kalenders dezelfde database gebruiken, het laatst gecreëerde backup 
bestand zal worden gebruikt om de database te herstellen.</p>
<p>Wanneer de database wordt hersteld, GAAN ALL AANWEZIGE GEGEVENS VERLOREN!</p>
<p>Na het terugzetten van een backup bestand van een vorige LuxCal versie, moet  
het laatste upgradexxx.php script worden uitgevoerd om er zeker van te zijn dat 
de database tabellen up to date zijn!</p>
<h5>Activiteiten</h5>
<p>Deze function verwijdert/herstelt activiteiten welke plaatsvinden binnen de 
opgegeven datums. Indien een datumveld leeg wordt gelaten, is er geen 
datumlimiet; dus als beide datumvelden leeg worden gelaten, WORDEN ALLE 
ACTIVITEITEN VERWIJDERD!</p><br>
<p>BELANGRIJK: Wanneer de database wordt gecomprimeerd (zie hiervoor), kunnen de 
activiteiten die permanent worden verwijderd niet meer worden hersteld!</p>",

"xpl_import_csv" =>
"<h4>CSV Importeer Instructies</h4>
<p>Dit formulier wordt gebruikt om <strong>Comma Separated Values (CSV)</strong> 
bestanden met activiteiten in de LuxCal kalender te importeren.</p>
<p>De volgorde van de kolommen in het CSV bestand moet zijn: titel, plaats, 
categorie id (zie hieronder), datum, einddatum, begintijd, eindtijd en 
omschrijving. De eerste rij van het CSV bestand, welke kan worden gebruikt voor 
de omschrijving van de kolommen, wordt genegeerd.</p>
<h5>Voorbeeld CSV bestanden</h5>
<p>Voorbeeld CSV bestanden kunt u vinden in de 'files/' map van de LuxCal 
download.</p>
<h5>Datum- en tijdopmaak</h5>
<p>Het geselecteerde datum- en tijdopmaak aan de linker zijde moet 
overeenstemmen met het datum- en tijdopmaak in het ge-uploade CSV bestand.</p>
<h5>Categorieënlijst</h5>
<p>De kalender kent ID nummers toe aan categorieën. De categorie ID's in het CSV 
bestand moeten overeenkomen met de categorieën welke in de kalender worden 
gebruikt of moeten 'leeg' zijn.</p>
<p>Als je in de volgende stap activiteiten wilt markeren als 'verjaardag', dan 
moet de <strong>ID verjaardag categorie</strong> worden gelijk gemaakt met de 
corresponderende ID in categorieënlijst hieronder.</p>
<p class='hilight'>Pas op: Importeer niet meer dan 100 activiteiten per keer!</p>
<p>Voor de kalender zijn op dit moment de volgende categorieën gedefinieerd:</p>",

"xpl_import_ical" =>
"<h4>iCalendar Importeer Instructies</h4>
<p>Dit formulier wordt gebruikt om <strong>iCalendar</strong> activiteiten in 
de kalender te importeren.</p>
<p>De inhoud van het bestand moet voldoen aan de [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545 standaard</a></u>] van de Internet Engineering Task Force.</p>
<p>Alleen activiteiten zullen worden geïmporteerd; andere iCal onderdelen, zoals: 
To-Do, Journal, Free / Busy, Time zone en Alarm, worden genegeerd.</p>
<h5>Voorbeeld iCal bestanden</h5>
<p>Voorbeeld iCalendar bestanden (bestandstype .ics) kunnen in de 'files/' map 
van de LuxCal download worden gevonden.</p>
<h5>Categorieënlijst</h5>
<p>De kalender kent ID nummers toe aan categorieën. De categorie ID's in het 
iCal bestand moeten overeenkomen met de categorieën welke in de kalender worden 
gebruikt of moeten 'leeg' zijn.</p>
<p class='hilight'>Pas op: Importeer niet meer dan 100 activiteiten per keer!</p>
<p>Voor de kalender zijn op dit moment de volgende categorieën gedefinieerd:</p>",

"xpl_export_ical" =>
"<h4>iCalendar Exporteer Instructies</h4>
<p>Dit formulier wordt gebruikt om <strong>iCalendar</strong> activiteiten uit 
de kalender te exporteren.</p>
<p>De <b>iCal bestandsnaam</b> (zonder type) is optioneel. Geëxporteerde 
bestanden zullen worden opgeslagen in de \"files/\" map op de server met de 
opgegeven bestandsnaam, of anders met de naam van de kalender. Het bestandstype 
is <b>.ics</b>.
Bestaande bestanden in de \"files/\" map op de server met dezelfde naam zullen 
worden overschreven met het nieuwe bestand.</p>
<p>De <b>Beschrijving iCal bestand</b> (e.g. 'Vergaderingen 2013') is optioneel. 
Indien ingevuld zal het worden toegevoegd aan de 'header' in het geëxporteerde 
iCal bestand.</p>
<p><b>Activiteitenfilters</b>: De te exporteren activiteiten kunnen worden 
gefilterd op:</p>
<ul>
<li>eigenaar van activiteit</li>
<li>categorie van activiteit</li>
<li>begindatum van categorie</li>
<li>datum activiteit toegevoegd/laatst gewijzigd</li>
</ul>
<p>Elk filter is optioneel. Een leeg datumveld betekent: geen begrenzing</p>
<br>
<p>De inhoud van het bestand met geëxporteerde activiteiten voldoet aan de 
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545 standaard</a></u>] 
van de Internet Engineering Task Force.</p>
<p>Wanneer het geëxporteerde iCal bestand wordt <b>ge-download</b>, zullen de 
datum en tijd worden toegevoegd aan de naam van het ge-downloade bestand.</p>
<h5>Voorbeeld iCal bestanden</h5>
<p><p>Voorbeeld iCal bestanden (bestandstype .ics) kunt u vinden in de 'files/' 
map van de LuxCal download.</p>"
);
?>
