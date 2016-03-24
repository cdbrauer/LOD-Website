<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.
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
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Ingen",
"all" => "Alle",
"back" => "Tilbage",
"close" => "Luk",
"always" => "altid",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "&Aring;r",
"month" => "M&aring;ned",
"week_day" => "Uge/Dag",
"upcoming" => "Kommende",

//settings.php - fieldset headers + general
"set_general_settings" => "Kalenderindstillinger",
"set_navbar_settings" => "Navigationsbj&aelig;lke",
"set_event_settings" => "Begivenheder",
"set_user_settings" => "Brugerindstillinger",
"set_email_settings" => "Email Indstillinger",
"set_perfun_settings" => "Periodiske Funktioner<br>(kun relevant hvis cron job er konfigureret)",
"set_minical_settings" => "Mini Kalender (kun relevant hvis den bruges)",
"set_sidebar_settings" => "Fritst&aring;ende Sidebj&aelig;lke<br>(kun relevant hvis den bruges)",
"set_view_settings" => "Visningsindstillinger",
"set_dt_settings" => "Dato/tid indstillinger",
"set_save_settings" => "Gem indstillinger",
"set_missing_invalid" => "Manglende eller ugyldige indstillinger (baggrund farvemarkeret)",
"set_settings_saved" => "Kalenderindstilingerer gemt",
"set_save_error" => "Databasefejl - Gem kalender indstillinger mislykkedes",
"hover_for_details" => "Hold musemark&oslash;r over beskrivelser for detaljer",
"default" => "standard",
"enabled" => "aktiveret",
"disabled" => "deaktiveret",
"no" => "nej",
"yes" => "ja",
"or" => "eller",
"minutes" => "minutter",
"pixels" => "pixels",
"no_way" => "Du har ikke rettigheder til at udf&oslash;re denne funktion",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Kalender version",
"calendarVersion_text" => "Versionsnummer for installeret kalender software.",
"calendarTitle_label" => "Kalendertitel",
"calendarTitle_text" => "Vises i kalenderens topbj&aelig;lke og bruges ved beskeder.",
"calendarUrl_label" => "Kalender URL",
"calendarUrl_text" => "Kalenderens webside-adresse",
"calendarEmail_label" => "Kalender email-adresse",
"calendarEmail_text" => "Afsenderens email adresse, bruges i besked-emails.<br>Format: \'email\' eller \'navn&#8249;email&#8250;\'. \'navn\' kan v&aelig;re kalenderens navn.",
"backLinkUrl_label" => "Link til overordnet side",
"backLinkUrl_text" => "URL for den overordnede side. Hvis angivet, vil en Tilbage-knap blive vist i venstre side af Navigationsbj&aelig;lken, som linker til denne URL.<br>Fx for at linke tilbage til den overordnede hjemmeside hvorfra kalenderen blev &aring;bnet.",
"timeZone_label" => "Tidszone",
"timeZone_text" => "Kalenderens tidszone, bruges til at beregne tidspunktet.",
"see" => "se",
"notifSender_label" => "Afsender for p&aring;mindelse emails",
"notifSender_text" => "N&aring;r kalenderen sender p&aring;mindelse emails, kan afsender feltet indeholde enten kalenderens email adresse, eller email adresse for den bruger, som oprettede begivenheden.<br>Hvis brugerens email adresse anvendes, kan modtagere besvare emailen.",
"rssFeed_label" => "RSS feed links",
"rssFeed_text" => "Hvis aktiveret: For brugere med mindst \'vise\' rettigheder, vil et RSS feed link blive vist i bunden af kalenderen, og et RSS feed link vil blive tilf&oslash;jet HTML header p&aring; kalendersider.",
"calendar" => "kalender",
"user" => "bruger",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Navigationsbj&aelig;lke knapper med tekst",
"navButText_text" => "Hvis aktiveret: Knapper p&aring; navigationsbj&aelig;lken vises med tekst. Hvis deaktiveret: Knapper p&aring; navigationsbj&aelig;lken vises med ikoner.",
"navBar_label" => "Navigationsbj&aelig;lke",
"navBar_text" => "Hvis aktiveret: Knappen Opgaveliste hhv. Kommende vises p&aring; navigationsbj&aelig;lken, som kan klikkes p&aring; for at &aring;bne Opgaveliste hhv. Kommende begivenheder.",
"navTodoList_label" => "Opgaveliste knap",
"navUpcoList_label" => "Kommende begivenheder knap",
"optionsPanel_label" => "Valg Panel",
"optionsPanel_text" => "Aktiver/deaktiver menuer i Valg panelet.<br>Filteret Brugere kan bruges til kun at vise begivenheder oprettet af den/de angivne brugere.<br>Filteret Kategorier kan bruges til kun at vise begivenheder i den/de angivne kategorier.<br>Menuen Sprog kan bruges til at v&aelig;lge det &oslash;nskede sprog (kun relevant hvis der er installeret flere sprog).",
"userMenu_label" => "Bruger filter",
"catMenu_label" => "Kategori filter",
"langMenu_label" => "Sprogvalg",
"defaultView_label" => "Standardvisning ved start",
"defaultView_text" => "Mulige standardvisninger ved starten af kalenderen er:<br>- &Aring;r<br>- M&aring;ned<br>- Arbejdsm&aring;ned *)<br>- Uge<br>- Arbejdsuge *)<br>- Dag<br>- Kommende<br>- &AElig;ndringer<br>For angivelse af dage i arbejdsuge, se Visningsindstillinger - Dage i arbejdsuge<br>Anbefalet valg: M&aring;ned eller Kommende.",
"language_label" => "Standard brugerinterface-sprog",
"language_text" => "Filerne ui-{sprog}.php, ai-{sprog}.php, ug-{sprog}.php og ug-layout.png skal findes i lang/ folderen. {sprog} = det valgte sprog til brugerinterfacet. Filnavne skal skrives med sm&aring; bogstaver!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Oprettelse af private begivenheder",
"privEvents_text" => "Private begivenheder er kun synlige for den bruger som har oprettet begivenheden.<br>Deaktiveret: brugere kan ikke oprette private begivenheder. \'Privat\' markeringsfeltet vil ikke blive vist i begivenhedsvinduet.<br>Aktiveret: brugere kan oprette private begivenheder ved at s&aelig;tte markeringen \'Privat\'.<br>Standard: n&aring;r nye begivenheder tilf&oslash;jes, s&aelig;ttes markeringen \'Privat\' automatisk, og brugeren kan &aelig;ndre markeringen.<br>Altid: n&aring;r nye begivenheder tilf&oslash;jes vil de altid v&aelig;re private, og \'Privat\' markeringsfeltet vil ikke blive vist i begivenhedsvinduet.",
"details4All_label" => "Visning af begivenhedsdetaljer for brugere",
"details4All_text" => "Deaktiveret: begivenhedsdetaljer vil kun v&aelig;re synlige for ejeren af begivenheden og for brugere med mindst \'Opret + editer alle begivenheder\' rettigheder.<br>Aktiveret: begivenhedsdetaljer vil v&aelig;re synlige for ejeren af begivenheden og for alle andre brugere.<br>Logget ind: begivenhedsdetaljer vil v&aelig;re synlige for ejeren af begivenheden og for brugere som er logget ind.",
"evtDelButton_label" => "Vis sletteknap i begivenhedsvindue",
"evtDelButton_text" => "Deaktiveret: knappen Slet vil ikke v&aelig;re synlig i begivenhedsvinduet. Brugere med editeringsrettigheder vil ikke kunne slette begivenheder.<br>Aktiveret: knappen Slet vil v&aelig;re synlig i begivenhedsvinduet for alle brugere.<br>Manager: knappen Slet vil kun v&aelig;re synlig for brugere med \'manager\' rettigheder.",
"eventColor_label" => "Begivenhedsfarver baseres p&aring;",
"eventColor_text" => "Begivenheder i de forskellige kalendervisninger kan vises i farven som er tildelt brugeren som oprettede begivenheden eller farven for begivenhedskategorien.",
"xField1_label" => "Ekstra felt 1 overskrift",
"xField2_label" => "Ekstra felt 2 overskrift",
"xFieldx_text" => "Navn eller overskrift for et valgfrit tekstfelt. Hvis dette felt anvendes i begivenhedsskabelonen, vil det blive tilf&oslash;jet som et friformat tekstfelt i begivenhedsvindue formularen og i visning af begivenheder i alle kalendervisninger og -sider.<br>Overskriften kan v&aelig;re p&aring; max. 15 tegn. Fx \'Email addresse\', \'Website\', \'Telefonnummer\'.",
"logged_in" => 'logget ind',
"manager_only" => 'manager',
"owner_color" => "ejer farve",
"cat_color" => "kategori farve",

//settings.php - user accounts settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Selvregistrering",
"selfReg_text" => "Tillad brugere at registrere sig selv for at f&aring; adgang til kalenderen.",
"selfRegPrivs_label" => "Selvregistreringsrettigheder",
"selfRegPrivs_text" => "Kalenderadgangsrettigheder for selvregistrerede brugere.<br>- vis: kun visning<br>- opret/editer egne: oprette begivenheder og editere egne begivenheder<br>- opret/editer alle: oprette begivenheder og editere egne og andres begivenheder",
"selfRegNot_label" => "Selvregistrering advisering",
"selfRegNot_text" => "Send en advisering email til kalender email addressen n&aring;r en selvregistrering foretages.",
"restLastSel_label" => "Gen-etabler seneste brugersession",
"restLastSel_text" => "Den seneste brugersession (Valgmuligheders indstillinger) bliver gemt, og n&aring;r brugeren senere vender tilbage til kalenderen, vil v&aelig;rdierne blive anvendt igen.",
"cookieExp_label" => "'Husk mig' cookie udl&oslash;bsdage",
"cookieExp_text" => "Antal dage f&oslash;r den cookie, som s&aelig;ttes med \'Husk mig\' funktionen (ved Log Ind), udl&oslash;ber.",
"view" => "vis",
"post_own" => 'opret/editer egne',
"post_all" => 'opret/editer alle',
"manager" => 'opret/manager',

//settings.php - view settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"evtTemplGen_label" => "Begivenhed skabelon - visninger generelt",
"evtTemplGen_text" => "Hvilke begivenhedsfelter, der vises i de forskellige kalendervisninger, kan angives ved en r&aelig;kke numre.<br>Hvis et nummer er angivet i r&aelig;kkef&oslash;lgen, vil det tilsvarende felt blive vist.",
"evtTemplUpc_label" => "Begivenhed skabelon - visning Kommende begivenheder",
"evtTemplUpc_text" => "Hvilke begivenhedsfelter, der vises i visningen Kommende begivenheder, kan angives ved en r&aelig;kke numre.<br>Hvis et nummer er angivet i r&aelig;kkef&oslash;lgen, vil det tilsvarende felt blive vist.",
"popBoxFields_label" => "Pop-up boks begivenhedsfelter",
"popBoxFields_text" => "Hvilke begivenhedsfelter, der vises i pop-up boksen med begivenhedsdetaljer (boks som vises n&aring;r musen holdes over begivenheden) p&aring; de forskellige kalendersider, kan angives ved en r&aelig;kke numre.<br>Hvis et nummer er angivet i r&aelig;kkef&oslash;lgen, vil det tilsvarende felt blive vist.<br>Hvis ingen felter er angivet, vil der ikke blive vist en pop-up boks.",
"templFields_text" => "Numrenes betydning er:<br>1: Feltet Sted<br>2: Feltet Kategori<br>3: Feltet Beskrivelse<br>4: Ekstra felt 1 (se nedenfor)<br>5: Ekstra felt 2 (se nedenfor)<br>6: Email p&aring;mindelse data (kun hvis p&aring;mindelse er specificeret)<br>7: Dato/tid tilf&oslash;jet/&aelig;ndret og tilh&oslash;rende brugernavn(e).<br> Numrenes r&aelig;kkef&oslash;lge angiver den r&aelig;kkef&oslash;lge, som felterne vil blive vist i.",
"popBoxShow_label" => "Begivenhedsdetaljer pop-up boks ('sv&aelig;veboks')",
"popBoxShow_text" => "For de visninger, hvor det er valgt, vil en pop-up boks (\'sv&aelig;veboks\') med begivenhedsdetaljer blive vist, n&aring;r musen f&oslash;res over en begivenhed. Begivenhedsdetaljer vil ikke blive vist, hvis der ikke er angivet nogen pop-up boks begivenhedsfelter (se ovenfor).",
"yearStart_label" => "Startm&aring;ned i &aring;rs-visning",
"yearStart_text" => "Hvis en startm&aring;ned er angivet (1 - 12), vil &aring;rs-visning af kalenderen altid starte med denne m&aring;ned, og &aring;ret for denne f&oslash;rste m&aring;ned vil f&oslash;rst skifte ved den f&oslash;rste dag i den samme m&aring;ned i det n&aelig;ste &aring;r.<br>V&aelig;rdien 0 har en speciel betydning: startm&aring;neden er baseret p&aring; den aktuelle dato og vil falde i den f&oslash;rste r&aelig;kke af m&aring;neder.",
"colsToShow_label" => "Kolonner der vises i &aring;rs-visning",
"colsToShow_text" => "Antal m&aring;neder der skal vises i hver r&aelig;kke i &aring;rs-visning.<br>Anbefalet valg: 3 eller 4.",
"rowsToShow_label" => "R&aelig;kker der vises i &aring;rs-visning",
"rowsToShow_text" => "Antal r&aelig;kker af m&aring;neder der vises i &aring;rs-visningen.<br>Anbefalet valg: 4, hvilket giver 12 eller 16 m&aring;neder, at scrolle igennem med de anbefalede v&aelig;rdier for Kolonner.",
"weeksToShow_label" => "Uger der vises i m&aring;neds-visning",
"weeksToShow_text" => "Antal uger der vises i m&aring;nedsvisning.<br>Anbefalet valg: 10, hvilket giver 2,5 m&aring;ned at scrolle igennem.<br>V&aelig;rdierne 0 og 1 har en speciel betydning:<br>0: vis pr&aelig;cis 1 m&aring;ned - blank forudg&aring;ende og efterf&oslash;lgende dage.<br>1: vis pr&aelig;cis 1 m&aring;ned - vis begivenheder p&aring; forudg&aring;ende og efterf&oslash;lgende dage.",
"workWeekDays_label" => "Dage i arbejdsuge",
"workWeekDays_text" => "Dage som skal vises i hver uge i Arbejdsm&aring;ned visning og Arbejdsuge visning.<br>Angiv numrene for hver dag der skal vises. Gyldige dagnumre er:<br>1 = Mandag<br>2 = Tirsdag<br>....<br>7 = S&oslash;ndag<br>Fx 12345 : Mandag til Fredag",
"lookaheadDays_label" => "Dage der skal ses fremad",
"lookaheadDays_text" => "Antal dage der skal ses fremad i visningen Kommende begivenheder, Opgavelisten og RSS feeds.",
"dwStartHour_label" => "Starttime i dag-/ugevisning",
"dwStartHour_text" => "Time hvor en normal dags begivenheder starter.<br>Hvis denne v&aelig;rdi f.eks. s&aelig;ttes til 6, undg&aring;r man at spilde plads i dag-/ugevisning til de stille timer mellem midnat og 6.00.<br>Tidsv&aelig;lgeren, som bruges til at v&aelig;lge et tidspunkt, vil ogs&aring; starte ved denne time.",
"dwEndHour_label" => "Sluttime i dag-/ugevisnig",
"dwEndHour_text" => "Time hvor en normal dags begivenheder slutter.<br>Hvis denne v&aelig;rdi f.eks. s&aelig;ttes til 18, undg&aring;r man at spilde plads i dag-/ugevisning til de stille timer mellem 18:00 og midnat.<br>Tidsv&aelig;lgeren, som bruges til at v&aelig;lge et tidspunkt, vil ogs&aring; slutte ved denne time.",
"dwTimeSlot_label" => "Tidsintervaller i dag-/ugevisning",
"dwTimeSlot_text" => "Dag-/ugevisning tidsinterval i antal minutter.<br>Denne v&aelig;rdi vil sammen med Starttime og Sluttime (se ovenfor) afg&oslash;re antallet af r&aelig;kker i dag/-ugevisning.",
"dwTsHeight_label" => "Tidsinterval h&oslash;jde",
"dwTsHeight_text" => "Tidsinterval feltets h&oslash;jde i antal pixels i dag-/ugevisning.",
"showLinkInMV_label" => "Vis links i m&aring;nedsvisning",
"showLinkInMV_text" => "URL\'er i begivenheds beskrivelsesfeltet vil blive vist som hyperlinks i m&aring;nedsvisning.",
"monthInDCell_label" => "M&aring;ned i hvert dagfelt",
"monthInDCell_text" => "3-bogstavs m&aring;nedsnavn vises i hvert dagfelt i m&aring;nedsvisning.",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Begivenhedsdatoformat (dd mm yyyy)",
"dateFormat_text" => "Tekststreng som definerer formatet for begivenhedsdatoer i kalendervisningerne og indtastningsfelter.<br>Mulige tegn: y = &aring;r, m = m&aring;ned og d = dag.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "fx y.m.d: 2013.10.31",
"MdFormat_label" => "Datoformat (dd m&aring;ned)",
"MdFormat_text" => "Tekststreng som definerer formatet for datoer som best&aring;r af m&aring;ned og dag.<br>Mulige tegn: M = m&aring;ned i tekst, d = dato i tal.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>d M: 12 April<br>M, d: Juli, 14",
"MdFormat_expl" => "fx M, d: Juli, 14",
"MdyFormat_label" => "Datoformat (dd m&aring;ned yyyy)",
"MdyFormat_text" => "Tekststreng som definerer formatet for datoer som best&aring;r af dag, m&aring;ned og &aring;r.<br>Mulige tegn: d = dag i tal, M = m&aring;ned i tekst, y = &aring;r i tal.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>d M y: 12 April 2013<br>M d, y: Juli 8, 2013",
"MdyFormat_expl" => "fx M d, y: Juli 8, 2013",
"MyFormat_label" => "Datoformat (m&aring;ned yyyy)",
"MyFormat_text" => "Tekststreng som definerer formatet for datoer som best&aring;r af m&aring;ned og &aring;r.<br>Mulige tegn: M = m&aring;ned i tekst, y = &aring;r i tal.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>M y: April 2013<br>y - M: 2013 - Juli",
"MyFormat_expl" => "fx M y: April 2013",
"DMdFormat_label" => "Datoformat (ugedag dd m&aring;ned)",
"DMdFormat_text" => "Tekststreng som definerer formatet for datoer som best&aring;r af ugedag, dag og m&aring;ned.<br>Mulige tegn: WD = ugedag i tekst, M = m&aring;ned i tekst, d = dag i tal.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>WD d M: Fredag 12 April<br>WD, M d: Mandag, Juli 14",
"DMdFormat_expl" => "fx WD - M d: S&oslash;ndag - April 6",
"DMdyFormat_label" => "Datoformat (ugedag dd m&aring;ned yyyy)",
"DMdyFormat_text" => "Tekststreng som definerer formatet for datoer som best&aring;r af ugedag, dag, m&aring;ned og &aring;r.<br>Mulige tegn: WD = ugedag i tekst, M = m&aring;ned i tekst, d = dag i tal, y = &aring;r i tal.<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>WD d M y: Fredag 13 April 2013<br>WD - M d, y: Mandag - Juli 16, 2013",
"DMdyFormat_expl" => "fx WD, M d, y: Mandag, Juli 16, 2013",
"timeFormat_label" => "Tidsformat (hh mm)",
"timeFormat_text" => "Tekststreng som definerer formatet for begivenhedstider i kalendervisningerne og indtastningsfelter.<br>Mulige tegn: h = timer, H = timer med foranstillede nuller, m = minutter, a = am/pm (valgfrit), A = AM/PM (valgfrit).<br>Ikke-alfanumeriske tegn kan bruges som skilletegn, og vil blive kopieret tegn for tegn.<br>Eksempler:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "fx h:m: 22:35 og h:mA: 10:35PM",
"weekStart_label" => "Ugens f&oslash;rste dag",
"weekStart_text" => "Ugens f&oslash;rste dag.",
"weekNumber_label" => "Vis ugenumre",
"weekNumber_text" => "Ugenumre vises i &aring;rs-, m&aring;neds- og ugevisning.",
"time_format_us" => "12-timer AM/PM",
"time_format_eu" => "24-timer",
"sunday" => "S&oslash;ndag",
"monday" => "Mandag",
"time_zones" => "TIME ZONES",
"dd_mm_yyyy" => "dd-mm-yyyy",
"mm_dd_yyyy" => "mm-dd-yyyy",
"yyyy_mm_dd" => "yyyy-mm-dd",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Mail server",
"mailServer_text" => "PHP mail kan bruges ved ikke-autentificeret mail i mindre omfang. For st&oslash;rre omfang eller hvis autentificering er p&aring;kr&aelig;vet, anbefales det at anvende SMTP.<br>Brug af SMTP mail kr&aelig;ver en SMTP mail server. Konfigurationsoplysningerne skal angives herunder. Hvis mail er deaktiveret, vil Send mail afsnittet i begivenhedsvinduet ikke blive vist.",
"smtpServer_label" => "SMTP server navn",
"smtpServer_text" => "Hvis SMTP mail er valgt, skal SMTP server navnet angives her. Fx gmail SMTP server: smtp.gmail.com.",
"smtpPort_label" => "SMTP port nummer",
"smtpPort_text" => "Hvis SMTP mail er valgt, skal SMTP Port nummer angives her. Fx 25, 465 or 587. Gmail bruger for eksempel port nummer 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "Hvis SMTP mail er valgt, kan her angives om secure sockets layer (SSL) skal anvendes. For gmail: aktiveret",
"smtpAuth_label" => "SMTP autentificering",
"smtpAuth_text" => "Hvis SMTP autentificering er valgt, vil det brugernavn og adgangskode som angives her blive anvendt til at autentificere SMTP mail.",
"smtpUser_label" => "SMTP brugernavn",
"smtpUser_text" => "Hvis SMTP mail er valgt, angives SMTP brugernavn her. For gmail vil dette v&aelig;re den del af email adressen som st&aring;r f&oslash;r @.",
"smtpPass_label" => "SMTP adgangskode",
"smtpPass_text" => "Hvis SMTP mail er valgt, angives SMTP adgangskoden her.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Admin cron job oversigt",
"cronSummary_text" => "Send en cron job oversigt til kalender administratoren.<br>Aktivering er kun relevant hvis et cron job er blevet konfigureret for kalenderen.",
"chgEmailList_label" => "Emailmodtagere for &aelig;ndringer",
"chgEmailList_text" => "Emailadresser, som periodisk modtager en email med kalender&aelig;ndringer.<br>Email-adresser adskilt af semikolonner.",
"chgNofDays_label" => "Dage at se tilbage efter &aelig;ndringer",
"chgNofDays_text" => "Antal dage, der skal ses tilbage efter kalender-&aelig;ndringer.<br>Hvis antal dage s&aelig;ttes til 0 vil der ikke blive sendt en oversigt over &aelig;ndringer.",
"icsExport_label" => "Daglig eksport af iCal begivenheder",
"icsExport_text" => "Hvis aktiveret: Alle begivenheder i datointervallet -1 uge til +1 &aring;r vil blive eksporteret i iCalendar format til en .ics fil i folderen \'files\'.<br>Filnavnet vil v&aelig;re kalenderens navn, hvor mellemrum erstattes af underscore-tegn (\'_\'). Eksisterende filer vil blive overskrevet af nye filer.",
"eventExp_label" => "Begivenhed udl&oslash;b dage",
"eventExp_text" => "Antal dage efter begivenhedens slutdato, hvor begivenheden udl&oslash;ber og automatisk slettes.<br>Hvis antal dage s&aelig;ttes til 0 eller hvis der ikke er konfigureret et cron job, vil der ikke automatisk blive slettet begivenheder.",
"maxNoLogin_label" => "Max. antal dage ikke logget ind",
"maxNoLogin_text" => "Hvis en bruger ikke har logget ind i l&oslash;bet af dette antal dage, vil brugerprofilen automatisk blive slettet.<br>Hvis v&aelig;rdien s&aelig;ttes til 0, vil brugerprofiler ikke blive slettet automatisk",

//settings.php - mini calendar / sidebar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Mini kalender visning",
"miniCalView_text" => "Mulige visninger for minikalenderen er:<br>- M&aring;ned (7d)<br>- Arbejdsm&aring;ned *)<br>- Uge (7d)<br>- Arbejdsuge *)<br>*) For dage i arbejdsuge, se under Visningsindstillinger - Dage i arbejdsuge",
"miniCalPost_label" => "Minikalender begivenhedsoprettelse",
"miniCalPost_text" => "Hvis aktiveret kan brugere:<br>- oprette nye begivenheder direkte fra minikalenderen ved at klikke p&aring; topbj&aelig;lken i et datofelt<br>- editere/slette begivenheder ved at klikke p&aring; firkanten som angiver begivenheden<br>Bem&aelig;rk: Adgangsrettighederne for brugerprofilen Offentlig adgang vil v&aelig;re g&aelig;ldende.",
"popFieldsMcal_label" => "Begivenhedsfelter - minikalender pop-up boks",
"popFieldsMcal_text" => "Begivenhedsfelter, der skal vises i en pop-up boks n&aring;r musen f&oslash;res hen over en begivenhed i minikalenderen, kan angives ved en r&aelig;kke numre.<br>Hvis ingen numre specificeres, vil der ikke blive vist en pop-up boks n&aring;r musen holdes over begivenheden.",
"mCalUrlFull_label" => "Minikalender URL til fuld kalender",
"mCalUrlFull_text" => "Ved klik p&aring; m&aring;neden i toppen af minikalenderen, for at komme til den fulde kalender, vil brugeren blive dirigeret til denne URL.<br>Hvis ingen URL angives, vil den fulde kalender blive &aring;bnet i et nyt vindue.<br>Denne URL er specielt praktisk hvis den fulde kalender er indlagt i en eksisterende brugerside.",
"popFieldsSbar_label" => "Begivenhedsfelter - sidebj&aelig;lke pop-up boks",
"popFieldsSbar_text" => "Begivenhedsfelter, der skal vises i en pop-up boks n&aring;r musen f&oslash;res hen over en begivenhed i den fritst&aring;ende sidebj&aelig;lke, kan angives ved en r&aelig;kke numre.<br>Hvis ingen numre specificeres, vil der ikke blive vist en pop-up boks n&aring;r musen holdes over begivenheden.",
"showLinkInSB_label" => "Vis links i sidebj&aelig;lke",
"showLinkInSB_text" => "Vis URL\'er fra begivenhed beskrivelsesfeltet som et hyperlink i sidebj&aelig;lken med kommende begivenheder.",
"sideBarDays_label" => "Antal dage at se frem i sidebj&aelig;lke",
"sideBarDays_text" => "Antal dage som der skal ses frem efter begivenheder i sidebj&aelig;lken.",

//login.php
"log_log_in" => "Log ind",
"log_remember_me" => "Husk mig",
"log_register" => "Registrer",
"log_change_my_data" => "&AElig;ndre mine data",
"log_change" => "&AElig;ndre",
"log_un_or_em" => "Brugernavn eller email",
"log_un" => "Brugernavn",
"log_em" => "Email",
"log_pw" => "Password",
"log_new_un" => "Nyt brugernavn",
"log_new_em" => "Ny email",
"log_new_pw" => "Nyt Password",
"log_pw_msg" => "Her er dine log in detaljer til at logge ind til",
"log_pw_subject" => "Dit %% Password", //%% will be replaced by calendar name
"log_npw_subject" => "Dit nye %% Password", //%% will be replaced by calendar name
"log_npw_sent" => "Dit nye password er blevet sendt.",
"log_registered" => "Registrering lykkedes - dit password er sendt til dig pr. email",
"log_not_registered" => "Registrering mislykkedes",
"log_un_exists" => "Brugernavn findes allerede",
"log_em_exists" => "Email-adresse findes allerede",
"log_un_invalid" => "Ugyldigt brugernavn (min. l&aelig;ngde 2: A-Z, a-z, 0-9, og _-.) ",
"log_em_invalid" => "Ugyldig email-adresse",
"log_un_em_invalid" => "Brugernavn/email er ikke gyldig",
"log_un_em_pw_invalid" => "Dit brugernavn/email eller password er forkert",
"log_no_un_em" => "Du indtastede ikke brugernavn/email",
"log_no_un" => "Indtast dit brugernavn",
"log_no_em" => "Indtast din email-adresse",
"log_no_pw" => "Du indtastede ikke dit password",
"log_no_rights" => "Login afvist: du har ingen rettigheder til at se kalender - Kontakt administrator",
"log_send_new_pw" => "Send nyt password",
"log_if_changing" => "Kun hvis det &aelig;ndres",
"log_no_new_data" => "Ingen data &aelig;ndret",
"log_invalid_new_un" => "Ugyldigt brugernavn (min. l&aelig;ngde 2: A-Z, a-z, 0-9, og _-.) ",
"log_new_un_exists" => "Nyt brugernavn findes allerede",
"log_invalid_new_em" => "Ny email-adresse ugyldig",
"log_new_em_exists" => "Ny email-adresse findes allerede",
"log_ui_language" => "Brugerinterface sprog",
"log_new_reg" => "Ny bruger registrering",
"log_date_time" => "Dato / tid",

//categories.php
"cat_list" => "Liste med kategorier",
"cat_edit" => "Editer",
"cat_delete" => "Slet",
"cat_add_new" => "Tilf&oslash;j ny kategori",
"cat_add" => "Tilf&oslash;j",
"cat_edit_cat" => "Editer kategori",
"cat_name" => "Kategorinavn",
"cat_sequence" => "R&aelig;kkef&oslash;lge",
"cat_in_menu" => "i menu",
"cat_text_color" => "Tekstfarve",
"cat_background" => "Baggrund",
"cat_select_color" => "V&aelig;lg farve",
"cat_save" => "Opdater",
"cat_added" => "Kategori tilf&oslash;jet",
"cat_updated" => "Kategori opdateret",
"cat_deleted" => "Kategori slettet",
"cat_invalid_color" => "Farvekode ugyldig (#XXXXXX hvor X = HEX-v&aelig;rdi)",
"cat_not_added" => "Kategori ikke tilf&oslash;jet",
"cat_not_updated" => "Kategori ikke opdateret",
"cat_not_deleted" => "Kategori ikke slettet",
"cat_nr" => "#",
"cat_repeat" => "Gentagelse",
"cat_every_day" => "hver dag",
"cat_every_week" => "hver uge",
"cat_every_month" => "hver m&aring;ned",
"cat_every_year" => "hvert &aring;r",
"cat_approve" => "Begivenheder kr&aelig;ver godkendelse",
"cat_public" => "Offentlig",
"cat_check_mark" => "Tjekboks",
"cat_label" => "betegnelse",
"cat_mark" => "m&aelig;rke",
"cat_name_missing" => "Kategorinavn mangler",
"cat_mark_label_missing" => "Tjekm&aelig;rke/betegnelse mangler",

//users.php
"usr_list_of_users" => "Liste med brugere",
"usr_id" => "Bruger ID",
"usr_name" => "Brugernavn",
"usr_email" => "Email",
"usr_password" => "Password",
"usr_rights" => "Rettigheder",
"usr_edit_user" => "Editer bruger profil",
"usr_add" => "Tilf&oslash;j bruger",
"usr_edit" => "Editer",
"usr_delete" => "Slet",
"usr_view" => "Vise",
"usr_post_own" => "Opret/editer egne",
"usr_post_all" => "Opret/editer alle",
"usr_manager" => "Manager",
"usr_admin" => "Admin",
"usr_login_0" => "F&oslash;rste login",
"usr_login_1" => "Sidste login",
"usr_login_cnt" => "Logins",
"usr_add_profile" => "Tilf&oslash;j profil",
"usr_upd_profile" => "Opdater profiler",
"usr_not_found" => "Bruger ikke fundet",
"usr_if_changing_pw" => "Kun hvis password skal &aelig;ndres",
"usr_admin_rights" => "Admin funktioner",
"usr_no_rights" => "Ingen adgangsrettigheder",
"usr_view_calendar" => "Se kalender",
"usr_post_events_own" => "Opret + editer egne begivenheder",
"usr_post_events_all" => "Opret + editer alle begivenheder",
"usr_manager_rights" => "Opret/Edit + manager rettigheder",
"usr_pw_not_updated" => "Password ikke opdateret",
"usr_added" => "Bruger tilf&oslash;jet",
"usr_updated" => "Brugerprofil opdateret",
"usr_deleted" => "Bruger slettet",
"usr_not_added" => "Bruger ikke tilf&oslash;jet",
"usr_not_updated" => "Bruger ikke opdateret",
"usr_not_deleted" => "Bruger ikke slettet",
"usr_cred_required" => "Brugernavn, email og password kr&aelig;ves",
"usr_uname_exists" => "Brugernavn findes allerede",
"usr_email_exists" => "Emailadresse findes allerede",
"usr_un_invalid" => "Ugyldigt brugernavn (min. l&aelig;ngde 2: A-Z, a-z, 0-9, og _-.) ",
"usr_em_invalid" => "Ugyldig email addresse",
"usr_cant_delete_yourself" => "Du kan ikke slette dig selv",
"usr_background" => "Baggrund farve",
"usr_select_color" => "V&aelig;lg farve",
"usr_invalid_color" => "Favekode ugyldig (#XXXXXX hvor X = HEX-v&aelig;rdi)",

//database.php
"mdb_dbm_functions" => "Databasefunktioner",
"mdb_noshow_tables" => "Kan ikke hente tabel(ler)",
"mdb_noshow_restore" => "Kan ikke finde backupfil",
"mdb_compact" => "Komprimer database",
"mdb_compact_table" => "Komprimer tabel",
"mdb_compact_error" => "Fejl",
"mdb_compact_done" => "Udf&oslash;rt",
"mdb_purge_done" => "Slettede begivenheder fjernet permanent",
"mdb_repair" => "Tjek og reparer database",
"mdb_check_table" => "Tjek tabel",
"mdb_ok" => "OK",
"mdb_nok" => "Ikke OK",
"mdb_nok_repair" => "Ikke OK, reparation startet",
"mdb_backup" => "Backup database",
"mdb_backup_table" => "Backup tabel",
"mdb_backup_file" => "Backup fil",
"mdb_backup_done" => "Udf&oslash;rt",
"mdb_records" => "poster",
"mdb_restore" => "Gendan database",
"mdb_restore_table" => "Gendan tabel",
"mdb_inserted" => "poster indsat",
"mdb_db_restored" => "Database gendannet.",
"mdb_run_upgrade" => "Advarsel:<br>Backupfil stemte ikke overens med kalender version.<br>K&oslash;r upgradexxx.php script.",
"mdb_events" => "Begivenheder",
"mdb_delete" => "slet",
"mdb_undelete" => "gendan",
"mdb_between_dates" => "forekommer i perioden",
"mdb_deleted" => "Begivenheder slettet",
"mdb_undeleted" => "Begivenheder gendannet",
"mdb_file_saved" => "Backupfil gemt i 'files' folder p&aring; server.",
"mdb_file_name" => "Filnavn:",
"mdb_start" => "Start",
"mdb_no_function_checked" => "Ingen funktion(er) valgt",
"mdb_write_error" => "Fejl ved skrivning af backupfil<br>Tjek rettigheder for 'files/' folderen",

//import/export.php
"iex_file" => "Valgt fil",
"iex_file_name" => "iCal filnavn",
"iex_file_description" => "iCal fil-beskrivelse",
"iex_filters" => "Begivenhed filtre",
"iex_upload_ics" => "Opload iCal-fil",
"iex_create_ics" => "Opret iCal-fil",
"iex_upload_csv" => "Opload CSV-fil",
"iex_upload_file" => "Opload fil",
"iex_create_file" => "Opret fil",
"iex_download_file" => "Download fil",
"iex_fields_sep_by" => "Felter adskilt af",
"iex_birthday_cat_id" => "F&oslash;dselsdagskategori ID",
"iex_default_cat_id" => "Standardkategori ID",
"iex_if_no_cat" => "hvis ingen kategori findes",
"iex_import_events_from_date" => "Importer begivenheder der sker efter",
"iex_see_insert" => "se vejledning i h&oslash;jre side",
"iex_no_file_name" => "Filnavn mangler",
"iex_inval_field_sep" => "ugyldig eller manglende felt-adskiller",
"iex_no_begin_tag" => "ugyldig iCal-fil (BEGIN-tag mangler)",
"iex_date_format" => "Begivenheds-dato-format",
"iex_time_format" => "Begivenheds-tids-format",
"iex_number_of_errors" => "Antal fejl i listen",
"iex_bgnd_highlighted" => "baggrund fremh&aelig;vet",
"iex_verify_event_list" => "Verificer begivenhedsliste, korriger fejl og klik",
"iex_add_events" => "Tilf&oslash;j begivenheder til database",
"iex_select_ignore_birthday" => "V&aelig;lg f&oslash;dselsdag og slet markeringsfelter som &oslash;nsket",
"iex_select_ignore" => "V&aelig;lg slet markeringsfelter for at ignorere begivenheder",
"iex_title" => "Titel",
"iex_venue" => "Sted",
"iex_owner" => "Ejer",
"iex_category" => "Kategori",
"iex_date" => "Dato",
"iex_end_date" => "Slutdato",
"iex_start_time" => "Starttid",
"iex_end_time" => "Sluttid",
"iex_description" => "Beskrivelse",
"iex_repeat" => "Gentagelse",
"iex_birthday" => "F&oslash;dselsdag",
"iex_ignore" => "Slet",
"iex_events_added" => "begivenheder tilf&oslash;jet",
"iex_events_dropped" => "begivenheder udeladt (findes allerede)",
"iex_db_error" => "Databasefejl",
"iex_ics_file_error_on_line" => "iCal-filfejl p&aring; linje",
"iex_between_dates" => "Startdato i perioden",
"iex_changed_between" => "Tilf&oslash;jet/&aelig;ndret i perioden",
"iex_select_date" => "V&aelig;lg dato",
"iex_select_start_date" => "V&aelig;lg startdato",
"iex_select_end_date" => "V&aelig;lg slutdato",
"iex_all_cats" => "alle kategorier",
"iex_all_users" => "alle brugere",
"iex_no_events_found" => "Ingen begivenheder fundet",
"iex_file_created" => "Fil oprettet",
"iex_write error" => "Oprettelse af eksportfil mislykkedes<br>Tjek rettigheder for folderen 'files/'",

//lcalcron.php
"cro_sum_header" => "CRON JOB OVERSIGT",
"cro_sum_trailer" => "SLUT P&Aring; OVERSIGT",
"cro_evc_sum_title" => "BEGIVENHEDER UDL&Oslash;BET",
"cro_nr_evts_deleted" => "Antal begivenheder slettet",
"cro_not_sum_title" => "EMAIL P&Aring;MINDELSER",
"cro_not_sent_to" => "P&aring;mindelser sendt til",
"cro_no_not_dates_due" => "Ingen p&aring;mindelsesdatoer n&aring;et",
"cro_all_day" => "Hele dagen",
"cro_mailer" => "mailer",
"cro_subject" => "Emne",
"cro_event_due_in" => "F&oslash;lgende begivenhed sker om",
"cro_event_due_today" => "F&oslash;lgende begivenhed sker i dag",
"cro_due_in" => "Sker om",
"cro_due_today" => "Sker i dag",
"cro_days" => "dag(e)",
"cro_date_time" => "Dato /tid",
"cro_title" => "Titel",
"cro_venue" => "Sted",
"cro_description" => "Beskrivelse",
"cro_category" => "Kategori",
"cro_status" => "Status",
"cro_open_calendar" => "&Aring;ben kalender",
"cro_chg_sum_title" => "KALENDER &AElig;NDRINGER",
"cro_nr_changes_last" => "Antal &aelig;ndringer de seneste",
"cro_report_sent_to" => "Rapport sendt til",
"cro_no_report_sent" => "Ingen rapport emailet",
"cro_usc_sum_title" => "BRUGERPROFILER UDL&Oslash;BET",
"cro_nr_accounts_deleted" => "Antal profiler slettet",
"cro_no_accounts_deleted" => "Ingen profiler slettet",
"cro_ice_sum_title" => "EKSPORTEREDE  BEGIVENHEDER",
"cro_nr_events_exported" => "Antal begivenheder eksporteret i iCalendar format til fil",

//explanations
"xpl_manage_db" =>
"<h4>Vedligehold Database vejledning</h4>
<p>P&aring; denne side kan f&oslash;lgende funktioner v&aelig;lges:</p>
<h5>Tjek og reparer database</h5>
<p>Denne funktion vil scanne kalender tabellerne og tjekke for fejl. Hvis en fejl findes, vil den blive repareret, hvis det er muligt.</p>
<p>Hvis der ikke er problemer med kalendervisningerne, skulle det v&aelig;re tilstr&aelig;kkeligt at k&oslash;re denne funktion en gang &aring;rligt.</p>
<h5>Komprimer database</h5>
<p>N&aring;r en bruger sletter en begivenhed, vil begivenheden blive markeret som 'slettet', men den fjernes ikke fra databasen. Komprimer Database funktionen fjerner begivenheder permanent, hvis det er mere end 30 dage siden de blev slettet, for at frig&oslash;re plads i databasen.</p>
<h5>Backup database</h5>
<p>Denne funktion vil oprette en backup af hele kalenderdatabasen (tabellernes struktur og indhold) i .sql format. Backupfilen gemmes i <strong>files/</strong> folderen med filnavn: 
<kbd>cal-backup-&aring;&aring;&aring;&aring;mmdd-ttmmss.sql</kbd> (hvor '&aring;&aring;&aring;&aring;mmdd' = &aring;r, m&aring;ned og dag, og ttmmss = time, minut og sekund.</p>
<p>Backupfilen kan bruges til at gendanne kalenderdatabasen (struktur og data), via gendannelsesfunktionnen beskrevet nedenfor, eller ved at bruge fx
<strong>phpMyAdmin</strong> v&aelig;rkt&oslash;jet, som de fleste webhoteller stiller til r&aring;dighed.</p>
<h5>Gendan database</h5>
<p>Gendan funktionen vil bruge den seneste backupfil i 'files' folderen, som er oprettet af ovenn&aelig;vnte backupfunktion. Bem&aelig;rk, at hvis der bruges flere kalendere, som deler den samme database, vil den senest oprettede backupfil blive anvendt uanset hvilken kalender denne backupfil er lavet fra.</p>
<p>N&aring;r databasen gendannes, vil ALLE NUV&AElig;RENDE DATA V&AElig;RE FJERNET! Kun de gendannede data vil v&aelig;re tilstede.</p>
<p>Efter gendannelse af en backupfil fra en tidligere LuxCal version, er det n&oslash;dvendigt at k&oslash;re det seneste upgradexxx.php script for at sikre at database tabellerne er opdateret til den nye version!</p>
<h5>Begivenheder</h5>
<p>Denne funktion vil slette eller gendanne begivenheder, som forekommer mellem de angivne datoer. Hvis et datofelt er tomt, vil der ikke v&aelig;re nogen gr&aelig;nse; s&aring; hvis begge datofelter er tomme, VIL ALLE BEGIVENHEDER BLIVE SLETTET!</p><br>
<p>VIGTIGT: N&aring;r databasen bliver komprimeret (se ovenfor), vil begivenheder som fjernes permanent fra databasen ikke l&aelig;ngere kunne gendannes!</p>",

"xpl_import_csv" =>
"<h4>CSV import-vejledning</h4>
<p>Denne formular bruges til at importere en <strong>kommasepareret (CSV)</strong> tekst-fil med begivenheder til LuxCal kalenderen.</p>
<p>R&aelig;kkef&oslash;lgen af kolonner i CSV-filen skal v&aelig;re: titel, sted, kategori-id (se herunder), dato, slutdato, starttid, sluttid og beskrivelse. F&oslash;rste r&aelig;kke i CSV-filen, der bruges til kolonnebeskrivelser, ignoreres.</p>
<h5>Eksempel CSV-filer</h5>
<p>Eksempel CSV-filer findes i folderen 'files/' i din LuxCal-download.</p>
<h5>Dato- og tidsformat</h5>
<p>Det valgte begivenheds datoformat og begivenheds tidsformat til venstre skal passe til formatet for datoer og tider i den oploadede CSV-fil.</p>
<h5>Tabel med kategorier</h5>
<p>Kalenderen bruger ID-numre til at angive kategorier. Kategori-ID'erne i CSV-filen skal svare til kategorierne brugt i kalenderen eller v&aelig;re tomme.</p>
<p>Hvis du i n&aelig;ste skridt vil markere en begivenhed som 'f&oslash;dselsdag', skal <strong>f&oslash;dselsdags-
kategorien</strong> s&aelig;ttes til den tilsvarende ID i kategorilisten herunder.</p>
<p class='hilight'>ADVARSEL: Importer ikke mere end 100 begivenheder af gangen!</p>
<p>I din kalender er de f&oslash;lgende kategorier defineret i &oslash;jeblikket:</p>",

"xpl_import_ical" =>
"<h4>iCalendar import-vejledning</h4>
<p>Denne formular bruges til at importere en <strong>iCalendar</strong>-fil med begivenheder til LuxCal-kalender.</p>
<p>Filindholdet skal svare til standarden [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>RFC5545</a></u>] fra Internet Engineering Task Force.</p>
<p>Kun begivenheder importeres; andre iCal-komponenter, som: To-Do, Journal, Fri / optaget, Tidszone og Alarm, ignoreres.</p>
<p>Eksempel iCalendar-filer kan findes i folderen 'files/' i din LuxCal download.</p>
<h5>Tabel med kategorier</h5>
<p>Kalenderen bruger ID-numre til at angive kategorier. Kategori-ID'er i iCalendar-filen skal svare til kategorierne brugt i din kalender eller v&aelig;re tomme.</p>
<p class='hilight'>Advarsel: Importer ikke mere end 100 begivenheder af gangen!</p>
<p>I din kalender er de f&oslash;lgende kategorier defineret i &oslash;jeblikket:</p>",

"xpl_export_ical" =>
"<h4>iCalendar eksport-vejledning</h4>
<p>Denne formular bruges til at udl&aelig;se og eksportere <strong>iCalendar</strong> begivenheder fra LuxCal kalenderen.</p>
<p><b>iCal filnavnet</b> (uden extension) er valgfrit. 
Oprettede filer bliver gemt med det angivne filnavn p&aring; serveren i folderen \"files/\", eller med kalenderens navn hvis filnavn ikke er angivet. Filens extension vil v&aelig;re <b>.ics</b>.
En evt. eksisterende fil med det samme navn i folderen \"files/\" p&aring; serveren vil blive overskrevet af den nye fil.</p>
<p>iCal filbeskrivelsen (f.eks. 'M&oslash;der 2013') er valgfri. Hvis det indtastes, tilf&oslash;jes det til headeren i den eksporterede iCal-fil.</p>
<p>Begivenhed filtre: De eksporterede begivenheder kan filtreres med:</p>
<ul>
<li>begivenhedsejer</li>
<li>begivenhedskategori</li>
<li>begivenhedsstartdato</li>
<li>begivenheds tilf&oslash;jet/sidste &aelig;ndringsdato</li>
</ul>
<p>Hvert filter er valgfrit. En blank dato betyder: ingen gr&aelig;nser</p>
<br>
<p>Indholdet af filen med udl&aelig;ste begivenheder vil svare til standarden 
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>RFC5545</a></u>] 
fra Internet Engineering Task Force.</p>
<p>Ved <b>download</b> af den eksporterede iCal fil vil dato og tid blive tilf&oslash;jet til navnet p&aring; den downloadede fil.</p>
<p>Eksempel iCalendar-filer kan findes i folderen 'files/' i din LuxCal download.</p>"
);
?>
