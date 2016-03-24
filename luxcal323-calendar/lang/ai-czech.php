<?php
/*
= LuxCal event calendar admin interface language file =

This file has been produced by LuxSoft. Please send your comments to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LAI","3.2.3");

/* -- Admin Interface texts -- */

$ax = array(

//general
"none" => "Žádný",
"all" => "Všechny",
"back" => "Zpět",
"close" => "Zavřít",
"always" => "vždy",
"at_time" => 'v', //date and time separator (e.g. 11-09-2014 @ 10:45)
"year" => "Year",
"month" => "Month",
"week_day" => "Week/Day",
"upcoming" => "Upcoming",

//settings.php - fieldset headers + general
"set_general_settings" => "Základní nastavení",
"set_navbar_settings" => "Navigation Bar",
"set_event_settings" => "Události",
"set_user_settings" => "Uživatelské účty",
"set_email_settings" => "Nastavení e-mailu",
"set_perfun_settings" => "Periodické funkce<br>(pouze je-li aktivní cron job)",
"set_minical_settings" => "Mini kalendář<br>(jen je-li použit)",
"set_sidebar_settings" => "Seznam nadcházejících událostí <br>(jen jsou-li použity)",
"set_view_settings" => "Pohledy",
"set_dt_settings" => "Datum/čas",
"set_save_settings" => "Uložit nastavení",
"set_missing_invalid" => "Chybné nebo neplatné nastavení",
"set_settings_saved" => "Nastavení kalendáře uloženo",
"set_save_error" => "Chyba databáze - Nastavení kalendáře nelze uložit",
"hover_for_details" => "Po najetí myší na názvy nastavení se vám zobrazí krátká nápověda",
"default" => "výchozí",
"enabled" => "povoleno",
"disabled" => "zakázáno",
"no" => "ne",
"yes" => "ano",
"or" => "nebo",
"minutes" => "minut",
"pixels" => "pixelů",
"no_way" => "Nejste oprávněni provádět tuto akci",

//settings.php - general settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"calendarVersion_label" => "Calendar version",
"calendarVersion_text" => "Version of the installed calendar software.",
"calendarTitle_label" => "Název kalendáře",
"calendarTitle_text" => "Zobrazí se v záhlaví kalendáře a je použit v emailových připomínkách.",
"calendarUrl_label" => "URL kalendáře",
"calendarUrl_text" => "Webová stránka kalendáře.",
"calendarEmail_label" => "E-mail adresa kalendáře",
"calendarEmail_text" => "Adresa odesílatele použitá v emailových připomínkách.<br>Formát: \'email\' nebo \'jméno&#8249;email&#8250;\'. \'jméno\' by měl být název kalendáře.",
"backLinkUrl_label" => "Odkaz na nadřazenou stránku",
"backLinkUrl_text" => "URL mateřské stránky. Je-li použito, bude v levé části navigačníhu pruhu zobrazeno tlačítko Zpět které bude odkazovat na zadané URL.<br>Například na nadřazenou stránku, ze které je odkazováno na kalendář",
"timeZone_label" => "Časové pásmo",
"timeZone_text" => "Časové pásmo kalendáře se používá k určení aktuálního času.",
"see" => "viz",
"notifSender_label" => "Odesílatel e-mailových připomínek",
"notifSender_text" => "Když kalendář odesílá připomínky, pole OD: obsahuje buď adresu kalendáře, nebo adresu uživatele, který vytvořil událost<br>Pokud je to aresa uživatele, příjemce může odpovědět na e-mail",
"rssFeed_label" => "Odkaz na RSS kanál",
"rssFeed_text" => "Je-li povoleno: pro uživatele, kteří mají alespoň práva pro \'prohlížení\' bude zobrazen odkaz na RSS kanál v zápatí kalendáře a do HTML hlavičky stránky kalendáře bude přidán odkaz.",
"calendar" => "kalendář",
"user" => "uživatel",
"php_mail" => "PHP mail",
"smtp_mail" => "SMTP mail",

//settings.php - navigation bar settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"navButText_label" => "Tlačítka v navigačním pruhu s textem",
"navButText_text" => "Povoleno: Tlačítka v navigační liště budou zobrazovat název jejich funkce, jinak se zobrazí jen jako ikony.",
"navBar_label" => "Navigačním pruhu",
"navBar_text" => "If enabled: A Todo / Upcoming button will be displayed on the navigation bar, which when clicked will open the Todo list / Upcoming list.",
"navTodoList_label" => "Todo button",
"navUpcoList_label" => "Upcoming button",
"optionsPanel_label" => "Panelu Volby",
"optionsPanel_text" => "Enable/disable menus in the options panel.<br>The user filter can be used to display only events created by one specific user.<br>The category filter can be used to display only events belonging to a specific event category.<br>The language selection menu can be used to select the user interface language. (enabling only useful if several languages are installed)",
"userMenu_label" => "User filter",
"catMenu_label" => "Category filter",
"langMenu_label" => "Language selection",
"defaultView_label" => "Výchozí pohled po startu",
"defaultView_text" => "Možné počáteční pohledy na kalendář jsou:<br>- Rok<br>- Měsíc<br>- Týden<br>- Den<br>- Blízké události<br>- Změny<br>Doporučené nastavení: Měsíc nebo Blízké události.",
"language_label" => "Výchozí jazyk uživatelského rozhraní",
"language_text" => "soubory ui-{language}.php, ai-{language}.php, ug-{language}.php a ug-layout.png musí být ve složce lang/ . {language} = vybraný jazyk rozhraní. Názvy souborů musí být malými písmeny!",

//settings.php - events settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"privEvents_label" => "Vkládaní soukromých událostí",
"privEvents_text" => "Povoleno: uživatelé mohou vkládat soukromé události.<br>Ty budou viditelné pouze pro uživatele, který je vložil.<br>Enabled: users can enter private events.<br>Default: when adding new events, the \'private\' checkbox in the Event window will be checked by default.<br>Always: when adding new events they will always be private, the \'private\' checkbox in the Event window will not be shown.",
"details4All_label" => "Zobrazovat podrobnosti o události všem uživatelům",
"details4All_text" => "Povoleno: podrobnosti o události budou viditelné pro vlastníka a všechny ostatní uživatele.<br>Zakázáno: podrobnosti o události uvidí jen vlastník události a uživatelé s právy \'vkládat a měnit všechny\'. Ostatní uživatelé s nižšími právy je neuvidí.",
"evtDelButton_label" => "Show delete button in Event window",
"evtDelButton_text" => "Disabled: the Delete button in the Event window will not be visible. So users with edit rights will not be able to delete events.<br>Enabled: the Delete button in the Event window will be visible to all users.<br>Manager: the Delete button in the Event window will only be visible to users with \'manager\' rights.",
"eventColor_label" => "Barva událostií se řídí podle",
"eventColor_text" => "Události v pohledech do kalendáře mohou mít přiřazenu barvu podle vlastníka, nebo kategorie, do které jsou zařazeny",
"xField1_label" => "Extra field 1 label",
"xField2_label" => "Extra field 2 label",
"xFieldx_text" => "Name of an optional text field. If this field is included in the event template hereafter, the field will be added as a free format text field to the Event window form and to the events displayed in all calendar views and pages.<br>The specified name can be max. 15 characters long. E.g. \'Email address\', \'Website\', \'Phone number\'.",
"logged_in" => 'logged in',
"manager_only" => 'manager',
"owner_color" => "Barvy vlastníka",
"cat_color" => "Barvy kategorie",

//settings.php - user account settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"selfReg_label" => "Samoobslužná registrace",
"selfReg_text" => "Umožní uživatelům se sami zaregistrovat a získat přístup ke kalendáři.",
"selfRegPrivs_label" => "Oprávnění při samoobslužné reg.",
"selfRegPrivs_text" => "Přístupová práva ke kalendáři pro samoobslužně registrované uživatele.<br>- Prohlížet: jen prohlížení<br>- Jen vlastní: Vkládat události a editovat jen svoje<br>- Všechny: Vkládat a editovat svoje i cizí události",
"selfRegNot_label" => "Oznámení samoobslužné registrace",
"selfRegNot_text" => "Odeslat oznamovací e-mail na adresu administrátora kalendáře, když proběhne samoobslužná registrace.",
"restLastSel_label" => "Restore last user selections",
"restLastSel_text" => "The last user session (the Option Panel settings) will be saved and when the user revisits the calendar later, the values will be restored.",
"cookieExp_label" => "Doba platnosti cookie 'Zapamatuj si mě' dnů",
"cookieExp_text" => "Počet dní po kterých skončí platnost cookie nastavené volbou \'Zapamatuj si mě\' (během přihlášení).",
"view" => "prohlížet",
"post_own" => 'jen vlastní',
"post_all" => 'všechny',
"manager" => 'manažer',

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
"yearStart_label" => "Počáteční měsíc v ročním pohledu",
"yearStart_text" => "Pokud zadáte počáteční měsíc (1 - 12), roční pohled bude vždy začínat tímto měsícem i při listování mezi roky.<br>Hodnota 0 nemá zvláštní význam: výchozí měsíc potom závisí na aktuálním datu a zobrazí se v prvním řádku tabulky.",
"colsToShow_label" => "Počet sloupců v ročním pohledu",
"colsToShow_text" => "Počet měsíců, které se zobrazí v jednom řádku u Ročního pohledu.<br>Doporučená hodnota: 3 nebo 4.",
"rowsToShow_label" => "Počet řádků v ročním pohledu",
"rowsToShow_text" => "Počet řádků, každý obsahující 4 měsíce, které se budou zobrazovat v Ročním pohledu.<br>Doporučeno: 4, což zobrazí 16 měsíců na stránku.",
"weeksToShow_label" => "Počet týdnů v měsíčním pohledu",
"weeksToShow_text" => "Počet týdnů, které se zobrazí v Měsíčním pohledu.<br>doporučená hodnota: 10, což zobrazí 2,5 měsíce na stránku.<br>The values 0 and 1 have a special meaning:<br>0: display exactly 1 month - blank leading and trailing days.<br>1: display exactly 1 month - display events on leading and trailing days.",
"workWeekDays_label" => "Pracovní dny",
"workWeekDays_text" => "Dny, které se budou zobrazovat v přehledu pracovního týdne a měsíce.<br>Zadejte číselně všechny dny, které se mají zobrazit. Platná čísla dnů jsou:<br>1 = pondělí<br>2 = úterý<br>....<br>7 = neděle<br>příklad: 12345 : pondělí - pátek",
"lookaheadDays_label" => "Nadcházejících dní v přehledu",
"lookaheadDays_text" => "Počet dní, které budou zahrnuty do přehledu nadcházejících události, seznamu úkolů a RSS kanálu.",
"dwStartHour_label" => "Počáteční hodina v denním/týdenním pohledu",
"dwStartHour_text" => "Hodina, kdy obvykle začínají první události.<br>Nastavením hodnoty např na 6, zabráníte zbytečnému zobrazování prázdného místa v denním/týdenním pohledu mezi půlnocí a 6:00.<br>The time picker, used to enter a time, will also start at this hour.",
"dwEndHour_label" => "Koncová hodina v denním/týdenním pohledu",
"dwEndHour_text" => "Hodina, kdy obvykle končí události.<br>Např. po nastavení hodnoty na 18 zabrání zbytečnému zobrazování prázdného místa v týdenním/denním pohledu pro nevyužité období od 18 hod do půlnoci.<br>The time picker, used to enter a time, will also end at this hour.",
"dwTimeSlot_label" => "Rozlišení v Denním/Týdenním pohledu",
"dwTimeSlot_text" => "Časové měřítko v denním/týdenním pohledu v minutách.<br>Tato hodnota, společně s Počáteční hodinou (viz předchozí položka) určuje počet řádků v denním/týdenním pohledu.",
"dwTsHeight_label" => "Výška pole v kalendáři",
"dwTsHeight_text" => "Výška mřížky denního/týdenního pohledu v pixelech.",
"showLinkInMV_label" => "Zobrazit odkazy v měsíčním pohledu",
"showLinkInMV_text" => "Pokud je zapnuto, URL z popisu události se zobrazí jako aktivní odkaz v měsíčním pohledu",
"monthInDCell_label" => "Název měsíce v každém poli",
"monthInDCell_text" => "V měsíčním pohledu zobrazí v polích pro jednotlivé dny zkratku názvu měsíce",

//settings.php - date/time settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"dateFormat_label" => "Formát data události (dd mm yyyy)",
"dateFormat_text" => "Textový řetězec, který určuje formát data událostí v pohledech kalendáře a vstuoních polích.<br>Povolené znaky: y = rok, m = měsíc a d = den.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad: <br>y-m-d: 2013-10-31<br>m.d.y: 10.31.2013<br>d/m/y: 31/10/2013",
"dateFormat_expl" => "např. y.m.d: 2013.10.31",
"MdFormat_label" => "Formát data (dd měsíc)",
"MdFormat_text" => "Textový řetězec určující formát data obsahujícího den a měsíc.<br>Povolené znaky: M = název měsíce, d = den čísly.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad: <br>d M: 12 duben<br>M, d: červenec, 14",
"MdFormat_expl" => "např. M, d: červenec, 14",
"MdyFormat_label" => "Formát data (dd měsíc yyyy)",
"MdyFormat_text" => "Textový řetězec určující formát data obsahujícího den, měsíc a rok.<br>Povolené znaky: d = den čísly, M = název měsíce, y = rok čísly.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad:<br>d. M y: 12. duben 2013<br>M d, y: červenec 8, 2013",
"MdyFormat_expl" => "např. M d, y: červenec 8, 2013",
"MyFormat_label" => "Formát data (měsíc yyyy)",
"MyFormat_text" => "Textový řetězec určující formát data obsahujícíhoměsíc a rok.<br>Povolené znaky: M = název měsíce, y = rok čísly.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad: <br>M y: duben 2013<br>y - M: 2013 - červenec",
"MyFormat_expl" => "např. M y: duben 2013",
"DMdFormat_label" => "Formát data (den-v-týdnu dd měsíc)",
"DMdFormat_text" => "Textový řetězec určující formát data obsahujícího den v týdnu, den a měsíc.<br>Povolené znaky: WD = den v týdnu slovy, d = den, M = název měsíce.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad: <br>WD d. M: pátek 12. duben<br>WD, M d: pondělí, červenec 14",
"DMdFormat_expl" => "např. WD - M d: neděle - duben 6",
"DMdyFormat_label" => "Formát data (den-v-týdnu dd měsíc yyyy)",
"DMdyFormat_text" => "Textový řetězec určující formát data obsahujícího den v týdnu, den, měsíc a rok.<br>Povolené znaky: WD = den v týdnu slovy, M = název měsíce, d = den, y = rok.<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad:<br>WD d M y: Friday 13 April 2013<br>WD - M d, y: Monday - July 16, 2013",
"DMdyFormat_expl" => "např. WD, M d, y: pondělí, červenec 16, 2013",
"timeFormat_label" => "Formát času (hh mm)",
"timeFormat_text" => "Textový řetězec určující formát času událostí v pohledech kalendáře a vstupních polích.<br>Povolené znaky: h = hodiny, H = hodiny with leading zeros, m = minuty, a = am/pm (volitelné), A = AM/PM (volitelné).<br>Ne-alfanumerické znaky mohou být použity jako oddělovače a budou zobrazeny jak jsou.<br>Příklad:<br>h:m: 18:35<br>h.m a: 6.35 pm<br>H:mA: 06:35PM",
"timeFormat_expl" => "např. h:m: 22:35 a h:mA: 10:35PM",
"weekStart_label" => "První den týdne",
"weekStart_text" => "Týden může začít v neděli nebo v pondělí.",
"weekNumber_label" => "Zobrazovat čísla týdnů",
"weekNumber_text" => "Zapíná zobrazování čísla týdne v ročním, měsíčním a týdenním pohledu",
"time_format_us" => "12-hod AM/PM",
"time_format_eu" => "24-hod",
"sunday" => "neděle",
"monday" => "pondělí",
"time_zones" => "Časová pásma",
"dd_mm_yyyy" => "dd-mm-yyyy",
"mm_dd_yyyy" => "mm-dd-yyyy",
"yyyy_mm_dd" => "yyyy-mm-dd",

//settings.php - email settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"mailServer_label" => "Mail server",
"mailServer_text" => "PHP je vhodné pro malý počet mailů bez možnosti autorizace. Pro větší počet mailů, nebo je li požadována autorizace byste měli požívat SMTP.<br>Pro SMTP je potřeba SMTP mail server. Zvolíte-li SMTP, bude třeba zadat konfigurační parametry serveru. Pokud je mail zakázán, budou volby pro odeílání upozornění v okně události skryty.",
"smtpServer_label" => "Jméno SMTP serveru",
"smtpServer_text" => "Zde nastavte adresu SMTP serveru. Např. gmail SMTP server: smtp.gmail.com.",
"smtpPort_label" => "Číslo portu SMTP",
"smtpPort_text" => "Nastavuje číslo portu pro komunikaci s SMTP serverem. Obvykle nastaveno na 25, 465 nebo 587. Gmail používá port 465.",
"smtpSsl_label" => "SSL (Secure Sockets Layer)",
"smtpSsl_text" => "Pro SMTP mail zapíná zabezpečenou komunikaci přes secure sockets layer (SSL). Pro gmail zapněte",
"smtpAuth_label" => "SMTP ověření",
"smtpAuth_text" => "Je-li požadována SMTP autorizace, bude uživatelské jméno a heslo nastavené níže použito k přihlášení k SMTP.",
"smtpUser_label" => "SMTP uživatel",
"smtpUser_text" => "Pokud jste zvolili odeílání pomocí SMTP, zadejte uživatelské jméno na SMTP serveru. Pro gmail jde o část vaší e-mailové adresy před znakem @.",
"smtpPass_label" => "SMTP heslo",
"smtpPass_text" => "Pokud jste zvolili odeílání pomocí SMTP, zadejte zde heslo pro SMTP server.",

//settings.php - periodic function settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"cronSummary_label" => "Souhrn z cronu pro admina",
"cronSummary_text" => "Poslat souhrn úlohou cronu administrátorovi kalendáře.<br>Povolení je užitečné jen pokud:<br>- je aktivní úloha cronu",
"chgEmailList_label" => "Příjemce e-mailu se souhrnem změn",
"chgEmailList_text" => "Adresy pro periodické zasílání souhrnů změn v kalendáři.<br>Emailové adresy oddělené středníky.",
"chgNofDays_label" => "Počet dní, které se zahrnou do přehledů",
"chgNofDays_text" => "Počet dní, za které se zpětně zjišťují změny v kalendáři.<br>Pokud je počet nastaven na 0 souhrn se nebude zasílat.",
"icsExport_label" => "Denní export událostí do iCal",
"icsExport_text" => "Je-li povoleno, všechny události v rozsahu -1 týden až +1 rok budou exportovány ve formátu iCalendar do .ics souboru do složky \'files\'.<br>Jméno souboru bude název kalendáře (mezery nahrazeny znaky _ ). Staré soubory přepisují nové.",
"eventExp_label" => "Událost vyprší po dnech",
"eventExp_text" => "Počet dní po platnosti události, kdy bude automaticky smazána.<br>Je-li nastaveno na 0 nebo neběží cron, žádné události nebudou mazány.",
"maxNoLogin_label" => "Max. počet dní bez přihlášení",
"maxNoLogin_text" => "Pokud se uživatel nepřihlásí po tuto dobu, jeho účet bude automaticky smazán.<br>Je-li nastaveno na 0, uživatelské účty ne nikdy nesmažou.",

//settings.php - mini calendar / upcoming events list settings. Single quotes in the ......_text translations below must be escaped by a backslash (e.g. \')
"miniCalView_label" => "Zobrazení mini kalendáře",
"miniCalView_text" => "Možné volby zobrazení kalendáře jsou:<br>- Měsíc<br>- Měsíc - jen pracovní dny *)<br>- Týden<br>- Pracovní týden *)<br>*) Pro nastavení pracovních dní viz volbu na této stránce - Pracovní dny",
"miniCalPost_label" => "Vkládat události přes mini kalendář",
"miniCalPost_text" => "Pouze v případě že používáte mini kalendář!<br>Je-li povoleno uživatelé mohou:<br>- přidat novou událost v mini kalendáři kliknutím na horní lištu buňky dne<br>- editovat / mazat události kliknutím na jejich čtvereček<br>Note: The access rights of the Public User will be applicable.",
"popFieldsMcal_label" => "Event fields - mini calendar hover box",
"popFieldsMcal_text" => "The event fields to be displayed in an overlay when the user hovers an event in the mini calendar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"mCalUrlFull_label" => "Mini-cal URL pro velký kalendář",
"mCalUrlFull_text" => "Po kliknutí na měsíc v záhlaví mini kalendáře pro přechod na celý kalendář, bude uživatel přesměrován na toto URL.<br>Není-li uvedeno, velký kalendář se otevře v novém okně.<br>Vlastní nastavení URL se hodí, pokud je celý kalendář vložen do již existující stránky.",
"popFieldsSbar_label" => "Event fields - sidebar hover box",
"popFieldsSbar_text" => "The event fields to be displayed in an overlay when the user hovers an event in the stand-alone sidebar can be specified by means of a sequence of numbers.<br>If no fields are specified at all, no hover box will be displayed.",
"showLinkInSB_label" => "Zobrazovat odkazy v měsíčním pohledu",
"showLinkInSB_text" => "Zobrazí URL z popisu události jako hyperlink v seznamu nadcházejících událostí",
"sideBarDays_label" => "Počet dní v seznamu nadcházejících událostí",
"sideBarDays_text" => "Počet nadcházejících dní, které se zahrnují do přehledu chystaných událostí.",

//login.php
"log_log_in" => "Přihlásit",
"log_remember_me" => "Pamatuj si mě",
"log_register" => "Registrovat",
"log_change_my_data" => "Změnit moje údaje",
"log_change" => "Změnit",
"log_un_or_em" => "Uživatelské jméno nebo e-mail",
"log_un" => "Jméno",
"log_em" => "E-mail",
"log_pw" => "Heslo",
"log_new_un" => "Nové Jméno",
"log_new_em" => "Nový e-mail",
"log_new_pw" => "Nové heslo",
"log_pw_msg" => "Here are your log in details for calendar",
"log_pw_subject" => "Vaše %% heslo", //%% will be replaced by calendar name
"log_npw_subject" => "Vaše nové %% heslo", //%% will be replaced by calendar name
"log_npw_sent" => "Vaše nové heslo bylo odesláno",
"log_registered" => "Registrace úspěšná - Vaše heslo bylo odesláno e-mailem",
"log_not_registered" => "Registrace nebyla úspěšná",
"log_un_exists" => "Uživatelské jméno již existuje",
"log_em_exists" => "E-mailová adresa již existuje",
"log_un_invalid" => "Chybné jméno (min. délka 2: A-Z, a-z, 0-9, a _-.) ",
"log_em_invalid" => "Chybná emailová adresa",
"log_un_em_invalid" => "Uživatelské jméno/e-mail není platný",
"log_un_em_pw_invalid" => "Uživatelské jméno/e-mail nebo heslo je chybné",
"log_no_un_em" => "Prosím zadejte vaše uživatelské jméno/e-mail",
"log_no_un" => "Zadejte uživatelské jméno",
"log_no_em" => "Zadejte vaši e-mailovou adresu",
"log_no_pw" => "Zadejte heslo",
"log_no_rights" => "Přihlášení odepřeno: nemáte právo k prohlížení - kontaktujte administrátora",
"log_send_new_pw" => "Zaslat nové heslo",
"log_if_changing" => "Pouze při změně",
"log_no_new_data" => "Údaje se nezměnily",
"log_invalid_new_un" => "Chybné nové uživatelské jméno (min. délka 2: A-Z, a-z, 0-9, a _-.) ",
"log_new_un_exists" => "Nové jméno již existuje",
"log_invalid_new_em" => "Nová e-mailová adresa je neplatná",
"log_new_em_exists" => "Nová e-mailová adresa již existuje",
"log_ui_language" => "Jazyk uživatelského rozhraní",
"log_new_reg" => "Registrace nového uživatele",
"log_date_time" => "Datum / čas",

//categories.php
"cat_list" => "Seznam kategorií",
"cat_edit" => "Změnit",
"cat_delete" => "Smazat",
"cat_add_new" => "Přidat novou kategorii",
"cat_add" => "Přidat",
"cat_edit_cat" => "Změnit kategorii",
"cat_name" => "Název kategorie",
"cat_sequence" => "Pořadí",
"cat_in_menu" => "v menu",
"cat_text_color" => "Barva textu",
"cat_background" => "Barva pozadí",
"cat_select_color" => "Vyberte barvu",
"cat_save" => "Uložit",
"cat_added" => "Kategorie uložena",
"cat_updated" => "Kategorie upravena",
"cat_deleted" => "Kategorie smazána",
"cat_invalid_color" => "Chybný formát barvy (#XXXXXX - X = HEX-hodnota)",
"cat_not_added" => "Kategorie nebyla přidána",
"cat_not_updated" => "Kategorie nebyla změněna",
"cat_not_deleted" => "Kategorie nebyla smazána",
"cat_nr" => "č",
"cat_repeat" => "Opakování",
"cat_every_day" => "denně",
"cat_every_week" => "týdně",
"cat_every_month" => "měsíčně",
"cat_every_year" => "ročně",
"cat_approve" => "Události čekají na potvrzení",
"cat_public" => "Veřejné",
"cat_check_mark" => "Značka",
"cat_label" => "štítek",
"cat_mark" => "značka",
"cat_name_missing" => "Chybí název kategorie",
"cat_mark_label_missing" => "Chybí značka/štítek",

//users.php
"usr_list_of_users" => "Seznam uživatelů",
"usr_id" => "User ID",
"usr_name" => "Jméno",
"usr_email" => "E-mail",
"usr_password" => "Heslo",
"usr_rights" => "Oprávnění",
"usr_edit_user" => "Změnit uživatelský profil",
"usr_add" => "Přidat uživatele",
"usr_edit" => "Změnit",
"usr_delete" => "Smazat",
"usr_view" => "Prohlížení",
"usr_post_own" => "Jen vlastní",
"usr_post_all" => "Všechny",
"usr_manager" => "Manažer",
"usr_admin" => "Administrace",
"usr_login_0" => "První přihlášení",
"usr_login_1" => "Poslední přihlášení",
"usr_login_cnt" => "Přihlášení",
"usr_add_profile" => "Přidat profil",
"usr_upd_profile" => "Upravit profil",
"usr_not_found" => "Uživatel nenalezen",
"usr_if_changing_pw" => "Pouze při změně hesla",
"usr_admin_rights" => "Administrátorský přístup",
"usr_no_rights" => "Bez práva přístupu",
"usr_view_calendar" => "Prohlížet kalendář",
"usr_post_events_own" => "Vkládat a měnit vlastní",
"usr_post_events_all" => "Vkládat a měnit všechny",
"usr_manager_rights" => "Post/Edit + manager rights",
"usr_pw_not_updated" => "Heslo nebylo změněno",
"usr_added" => "Uživatel byl přidán",
"usr_updated" => "Uživatelský profil byl aktualizován",
"usr_deleted" => "Uživatel smazán",
"usr_not_added" => "Uživatel nebyl přidán",
"usr_not_updated" => "Uživatel nebyl aktualizován",
"usr_not_deleted" => "Uživatel nebyl smazán",
"usr_cred_required" => "Musíte zadat uživatelské jméno, e-mail a heslo",
"usr_uname_exists" => "Uživatelské jméno již existuje",
"usr_email_exists" => "E-mailová adresa již existuje",
"usr_un_invalid" => "Chybné uživatelské jméno (min. délka 2: A-Z, a-z, 0-9, a _-.) ",
"usr_em_invalid" => "Chybná e-mailová adresa",
"usr_cant_delete_yourself" => "Nemůžete se sami smazat",
"usr_background" => "Barva pozadí",
"usr_select_color" => "Zvolte barvu",
"usr_invalid_color" => "Chybný formát barvy (#XXXXXX - X = HEX-hodnota)",

//database.php
"mdb_dbm_functions" => "Databázové funkce",
"mdb_noshow_tables" => "Nelze získat tabulku(y)",
"mdb_noshow_restore" => "Cannot find backup file",
"mdb_compact" => "Komprimace databáze",
"mdb_compact_table" => "komprimace tabulky",
"mdb_compact_error" => "Chyba",
"mdb_compact_done" => "Hotovo",
"mdb_purge_done" => "Smazané události byly odstraněny",
"mdb_repair" => "Kontrola a oprava databáze",
"mdb_check_table" => "Kontrola tabulky",
"mdb_ok" => "OK",
"mdb_nok" => "Neproběhlo OK",
"mdb_nok_repair" => "Není OK, započata oprava",
"mdb_backup" => "Zálohování databáze",
"mdb_backup_table" => "Zálohování tabulky",
"mdb_backup_file" => "Backup file",
"mdb_backup_done" => "Hotovo",
"mdb_records" => "records",
"mdb_restore" => "Restore database",
"mdb_restore_table" => "Restore table",
"mdb_inserted" => "records inserted",
"mdb_db_restored" => "Database restored.",
"mdb_run_upgrade" => "Warning:<br>Backup file didn't match calendar version.<br>Run upgradexxx.php script.",
"mdb_events" => "Události",
"mdb_delete" => "smazat",
"mdb_undelete" => "obnovit",
"mdb_between_dates" => "mezi dny",
"mdb_deleted" => "Události smazány",
"mdb_undeleted" => "Události obnoveny",
"mdb_file_saved" => "Záložní soubor uložen na server.",
"mdb_file_name" => "Název souboru:",
"mdb_start" => "Start",
"mdb_no_function_checked" => "Nebyla vybrána žádná funkce",
"mdb_write_error" => "Ukládání zálohy selhalo<br>zkontrolujte práva u adresáře 'files/'",

//import/export.php
"iex_file" => "Vybraný soubor",
"iex_file_name" => "Název iCal souboru",
"iex_file_description" => "Popis iCal souboru",
"iex_filters" => "Filtry událostí",
"iex_upload_ics" => "Nahrát iCal soubor",
"iex_create_ics" => "Vytvořit iCal soubor",
"iex_upload_csv" => "Nahrát CSV soubor",
"iex_upload_file" => "Nahrát soubor",
"iex_create_file" => "Vytvořit soubor",
"iex_download_file" => "Uložit soubor",
"iex_fields_sep_by" => "Pole oddělena",
"iex_birthday_cat_id" => "ID kategorie narozenin",
"iex_default_cat_id" => "ID výchozí kategorie",
"iex_if_no_cat" => "pokud není nalezena žádná kategorie",
"iex_import_events_from_date" => "Importovat události konané od",
"iex_see_insert" => "viz vysvětlivky vpravo",
"iex_no_file_name" => "Chybí název souboru",
"iex_inval_field_sep" => "Chybný nebo chybějící oddělovač polí",
"iex_no_begin_tag" => "chybný iCal soubor (chybí značka BEGIN)",
"iex_date_format" => "Formát data události",
"iex_time_format" => "Formát času události",
"iex_number_of_errors" => "Počet chyb v seznamu",
"iex_bgnd_highlighted" => "pozadí zvýrazněno",
"iex_verify_event_list" => "Prověřte seznam událostí, opravte chyby a klikněte na",
"iex_add_events" => "Přidat události do databáze",
"iex_select_ignore_birthday" => "Zaškrtněte políčka Narozeniny a Smazat jak je potřeba",
"iex_select_ignore" => "Zaškrtněte políčko Smazat pro přeskočení události",
"iex_title" => "Název",
"iex_venue" => "Místo",
"iex_owner" => "Vlastník",
"iex_category" => "Kategorie",
"iex_date" => "Datum",
"iex_end_date" => "Začátek",
"iex_start_time" => "Čas od",
"iex_end_time" => "Čas do",
"iex_description" => "Popis",
"iex_repeat" => "Repeat",
"iex_birthday" => "Narozeniny",
"iex_ignore" => "Smazat",
"iex_events_added" => "události přidány",
"iex_events_dropped" => "události nebyly přidány (již uloženy)",
"iex_db_error" => "Chyba databáze",
"iex_ics_file_error_on_line" => "Chyba iCal souboru na řádku",
"iex_between_dates" => "Datum konání mezi",
"iex_changed_between" => "Přidáno/změněno mezi",
"iex_select_date" => "Zvolte datum",
"iex_select_start_date" => "Zvolte počáteční datum",
"iex_select_end_date" => "Zvolte koncové datum",
"iex_all_cats" => "všechny kategorie",
"iex_all_users" => "všichni uživatelé",
"iex_no_events_found" => "Žádná událost nenalezena",
"iex_file_created" => "Soubor byl vytvořen",
"iex_write error" => "Ukládání souboru selhalo<br>Zkontrolujte práva u adresáře 'files/'",

//lcalcron.php
"cro_sum_header" => "SOUHRN ÚLOH CRONU",
"cro_sum_trailer" => "KONEC SOUHRNU",
"cro_evc_sum_title" => "UPLYNULÉ UDÁLOSTI",
"cro_nr_evts_deleted" => "Počet smazaných událostí",
"cro_not_sum_title" => "EMAILOVÉ PŘIPOMÍNKY",
"cro_not_sent_to" => "Připomínky odeslány na",
"cro_no_not_dates_due" => "Žádná oznámení o chystaných událostech",
"cro_all_day" => "Celý den",
"cro_mailer" => "zasílání připomínek",
"cro_subject" => "Předmět",
"cro_event_due_in" => "Nadcházející události pro příštích",
"cro_event_due_today" => "The following event is due today",
"cro_due_in" => "Událost nastane za",
"cro_due_today" => "Due today",
"cro_days" => "dní",
"cro_date_time" => "Datum / čas",
"cro_title" => "Název",
"cro_venue" => "Místo",
"cro_description" => "Popis",
"cro_category" => "Kategorie",
"cro_status" => "Status",
"cro_open_calendar" => "Otevřít kalendář",
"cro_chg_sum_title" => "ZMĚNY KALENDÁŘE",
"cro_nr_changes_last" => "Počet změn za posledních",
"cro_report_sent_to" => "Oznámení odesláno na",
"cro_no_report_sent" => "Nebylo odesláno oznámení",
"cro_usc_sum_title" => "KONTROLA UŽIVATELSKÝCH ÚČTŮ",
"cro_nr_accounts_deleted" => "Počet smazaných účtů",
"cro_no_accounts_deleted" => "Žádný účet nebyl smazán",
"cro_ice_sum_title" => "EXPORTOVANÉ UDÁLOSTI",
"cro_nr_events_exported" => "Počet událostí exportovaných do souboru v formátu iCalendar",

//explanations
"xpl_manage_db" =>
"<h4>Správa databáze, instrukce</h4>
<p>Na této stránce lze provádět následující činnosti:</p>
<h5>Kontrola a oprava databáze</h5>
<p>Tato funkce prověří tabulky kalendáře a vyhledá chyby. Pokud je nějaká chyba
nalezena, pokusí se ji opravit.</p>
<p>Nedochází-li k chybám při zobrazování kalendáře, postačí funkci spustit 
jednou za rok.</p>
<h5>Komprimace databáze</h5>
<p>Po smazání události je tato pouze označena jako smazaná, ale zůstává nadále v 
databázi. Komprese databáze trvale odstraní události smazané před více jak 30ti 
dny z databáze a uvolní místo, které zabírají.</p>
<h5>Záloha databáze</h5>
<p>Funkce vytvoří zálohu celé databáze kalendáře (tabulky, strukturu a obsah)
v .sql formátu. Záložní soubor se uloží do adresáře <strong>files/</strong> 
a je pojmenován v následujícím tvaru: 
<kbd>cal-backup-yyyymmdd-hhmmss.sql</kbd> (kde 'yyyymmdd' = rok, měsíc a den, 
a hhmmss = hodina, minuta a sekunda.</p>
<p>The backup file can be used to recreate the calendar database (structure and 
data), via the restore function described below or by using for instance the 
<strong>phpMyAdmin</strong> tool, which is provided by most web hosts.</p>
<h5>Restore database</h5>
<h5>Restore database</h5>
<p>The restore function will use the latest backup file in the 'files' folder 
created by the back up function described above. Note that when using multiple 
calendars sharing the same database, the latest created backup file will be used 
irrespective of the source calendar.</p>
<p>When restoring the database, ALL CURRENTLY PRESENT DATA WILL BE LOST!</p>
<p>After restoring a backup file of a previous LuxCal version, you must run the 
latest upgradexxx.php script to ensure the database tables are up to date!</p>
<h5>Události</h5>
<p>Tato funkce smaže nebo obnoví události, které probíhají mezi zadanými daty.
Je-li datum prázdné, není nastaven žádný limit, takže pokud ponecháte obě rozmezí 
prázdné, VŠECNY UDÁLOSTI BUDOU SMAZÁNY!</p>
<p>POZOR: Po kompresi databáze (viz výše), události, které byly trvale smazány 
již nemohou být zpětně obnoveny!</p>",

"xpl_import_csv" =>
"<h4>Instrukce pro CSV import</h4>
<p>Tento formulář se používá pro import textových souborů <strong>Comma Separated Values 
(CSV)</strong> s údaji o událostech do LuxCal kalendáře.</p>
<p>Pořadí sloupců ve vstupním CSV souboru musí být následující: název, místo, id kategorie
(viz dále), datum, koncové datum, počáteční čas, koncový čas, popis. První řádek
CSV souboru s názvy sloupců je při importu ignorován.</p>
<h5>Ukázkové CSV soubory</h5>
<p>Vzorové CSV soubory (s příponou .cvs) jsou uloženy v adresáři 'files/' v instalačním 
balíku.</p>
<h5>Formáty data a času</h5>
<p>Zvolený formát data a času událostí musí odpovídat formátu použitému ve vstupním 
CSV souboru.</p>
<h5>Tabulka kategorií</h5>
<p>Kalendář používá k identifikaci jednotlivých kategorií ID čísla. Tato čísla určující 
kategorie v CSV souboru a následující tabulce si musí odpovídat, nebo musí být v CSV 
vynechána.</p>
<p>Pokud chcete v následující kroku označit události jako 'narozeniny', pak musíte také
nastavit <strong>ID kategorie Narozeniny</strong> na odpovídající ID kategorie níže.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>Ve vašem kalendáři jsou definovány tyto kategorie:</p>",

"xpl_import_ical" =>
"<h4>Instrukce pro import iCalendar</h4>
<p>Tento formulář slouží pro import souborů <strong>iCalendar</strong> s událostmi
do kalendáře LuxCal.</p>
<p>Formát souboru musí odpovídat [<u><a href='http://tools.ietf.org/html/rfc5545' 
target='_blank'>standardu RFC5545 </a></u>] Internet Engineering Task Force.</p>
<p>Budou importovány pouze události. Ostatní části iCal souboru, jako jsou úkoly,
žurnál, alarmy, informace o volném čase, budou při importu ignorovány.</p>
<h5>Ukázkové iCal soubory</h5>
<p>Vzorové soubory iCalendar (s příponou .ics) jsou uloženy v adresáři 'files/' 
v instalačním balíku LuxCal.</p>
<h5>Tabulka kategorií</h5>
<p>Kalendář používá k označení kategorií ID čísla. Tato čísla určující 
kategorie v iCal souboru musí odpovídat číslům použitým v kalendáři, nebo musí být v iCal
vynechána.</p>
<p class='hilight'>Warning: Do not import more than 100 events at a time!</p>
<p>Ve vašem kalendáři jsou definovány tyto kategorie:</p>",

"xpl_export_ical" =>
"<h4>Instrukce pro export iCalendar</h4>
<p>Tento formulář slouží pro export událostí <strong>iCalendar</strong> z LuxCal kalendáře.</p>
<p>Jméno <b>iCal souboru</b> (bez přípony) je volitelné. Takto pojmenované soubory s jsou 
ukládány do adresáře \"files/\" na serveru. Pokud jméno nezadáte, bude pojmenován
 of the calendar. Přípona souboru bude <b>.ics</b>.
Existující soubory v adresáři \"files/\" na serveru se stejným jménem budou přepsány
novým obsahem.
<p> <b>Popis iCal souboru</b> (např. 'Schůzky 2011') je nepovinný. Pokud ho zadáte,
bude vložen do hlavičky exportovaného iCal souboru.</p>
<p><b>filtry událostí</b>: Ukládané události mohou být filtrovány podle:</p>
<ul>
<li>vlastníka události</li>
<li>kategorie události</li>
<li>data začátku</li>
<li>data vložení/poslední změny události</li>
</ul>
<p>Filtry jsou nepovinné, prázdné pole data znamená bez omezení.</p>
<br>
<p>Obsah vytvořeného souboru splňuje 
[<u><a href='http://tools.ietf.org/html/rfc5545' target='_blank'>standard RFC5545</a></u>] 
Internet Engineering Task Force.</p>
<p>Při <b>stahování</b> exportovaného iCal souboru, bude k jeho názvu přidáno datum a čas.</p>
<h5>Ukázkové iCal soubory</h5>
<p>Vzorové soubory iCalendar (s příponou .ics) jsou uloženy v adresáři 'files/' 
v instalačním balíku LuxCal.</p>"
);
?>
