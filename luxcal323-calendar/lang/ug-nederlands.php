<?php
/*
= LuxCal event calendar on-line user guide =

Dit bestand is vertaald door de Purple Crocodile - opmerkingen en verbeteringen graag 
sturen naar rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
This file is part of the LuxCal Web Calendar.
*/

//LuxCal ug language file version
define("LUG","3.2.3");

?>
<div style="margin:0 20px">
<div class="floatR">
<img src="lang/ug-layout.png" alt="LuxCal page layout"><br>
a: titelbalk&nbsp;&nbsp;b: navigatie balk&nbsp;&nbsp;c: kalender&nbsp;&nbsp;d: dag
</div>
<br>
<h4>Inhoud</h4>
<ol>
<li><p><a href="#ov">Weergave</a></p></li>
<li><p><a href="#li">Aanmelden</a></p></li>
<li><p><a href="#co">Kalenderopties</a></p></li>
<li><p><a href="#cv">Kalenderweergave</a></p></li>
<li><p><a href="#ts">Zoeken op tekst</a></p></li>
<?php if ($privs > 1) { //if post rights ?>
<li><p><a href="#ae">Activiteit toevoegen / wijzigen / wissen</a></p></li>
<?php } ?>
<li><p><a href="#lo">Uitloggen</a></p></li>
<?php if ($privs == 9) { //if administrator ?>
<li><p><a href="#ca">Kalenderbeheer</a></p></li>
<?php } ?>
<li><p><a href="#al">Over LuxCal</a></p></li>
</ol>
</div>
<div class="help">
<br>
<ol>
<li id="ov"><h4>Weergave</h4>
<p>De LuxCal kalender draait op een webserver en kan worden bekeken en gebruikt via uw browser.</p>
<p>In de titelbalk staan de titel van de kalender, de datum en de naam van de actuele gebruiker.
De navigatiebalk bevat menu's en links voor navigatie, in- en uitloggen, activiteiten toevoegen, enz. Welke menu's en links worden weergegeven is afhankelijk van de rechten van de gebruiker.
Onder de navigatiebalk kan de kalender op verschillende manieren worden weergegeven.</p>
<br></li>
<li id="li"><h4>Aanmelden</h4>
<p>Om de kalender te kunnen gebruiken klikt u op Log in, rechts in de navigatiebalk. U komt dan in het inlogscherm. Tik uw gebruikersnaam of mailadres in (een van de twee) en het van de beheerder ontvangen wachtwoord, en klik op Log in. Als u "Onthoudt mij" selecteert voor u op Log In klikt, dan wordt u de volgende keren dat u de kalender start automatisch ingelogd. Bent u uw wachtwoord vergeten, klik dan op Log in en daarna op de link om een nieuw wachtwoord toegestuurd te krijgen.</p>
<p>U kunt uw mailadres en wachtwoord wijzigen door uw huidige gebruikersnaam/mailadres en wachtwoord in te tikken, en daarna rechts een nieuw mailadres en/of nieuw wachtwoord.</p>
<p>Als de beheerder het publiek toegang tot de kalender heeft gegeven, kan de kalender worden bekeken zonder in te loggen.</p>
<br></li>
<li id="co"><h4>Calendar Options</h4>
<p>Clicking the Options button on the navigation bar will open the calendar's Options Panel. On this panel you can select:</p>
<ul style="margin:0 20px">
<li><p>The calendar view (year, month, week, day, upcoming or changes).</p></li>
<li><p>An event filter based on event owners. Events of one single owner or multiple owners can be selected.</p></li>
<li><p>An event filter based on event categories. Events in one single category or multiple categories can be selected.</p></li>
<li><p>The user interface language.</p></li>
</ul>
<p>After having made your choices, the Options button in the navigation bar should be clicked again to activate your choices.</p> 
<p>Note: The display of the event filter menus and the language menu may have been disabled by the calendar administrator.</p>
<br></li>
<li id="cv"><h4>Kalenderweergaven</h4>
<p>In alle weergaven zijn de details per activiteit zichtbaar als u er met de muis overheen gaat. Voor privé activiteiten wordt de achtergrond van de details licht groen en voor zich herhalende activiteiten is de rand van het detailsveld rood. In de weergave 'Binnenkort' worden URLs automatisch hyperlinks naar de betreffende websites.</p>
<p>In alle weergaven heeft de dag van vandaag een blauwe rand en als een nieuwe datum wordt geselecteerd in de navigatiebalk, krijgt deze geselecteerde datum een rode rand in de weergaven Maand en Jaar.</p>
<p>Activiteiten in een categorie waarvoor de admin een aankruisvakjes heeft geactiveerd worden weergegeven met een vakje/vinkje voor de titel; dit vakje kan worden gebruikt om activiteiten bijvoorbeeld als "gedaan" te markeren. Wanneer de gebruiker voldoende privileges heeft, kan dit vakje/vinkje worden aangeklikt om het vinkje aan of uit te zetten.</p>
<?php if ($privs > 1) { //if post rights ?>
<p>Wanneer u voldoende rechten hebt:</p>
<ul style="margin:0 20px">
<li><p>zal in alle weergaven door op een activiteit te klikken het window 'Activiteit wijzigen' opengaan, waarmee de activiteit kan worden bekeken, gewijzigd of gewist</p></li>
<li><p>kan in de jaar- en maandweergave een activiteit worden toegevoegd op een bepaalde datum door te klikken bovenaan in de datumcel (de regel waar de dag van de maand wordt weergegeven)</p></li>
<li><p>kan in de week- en dagweergave het window 'Activiteit toevoegen' worden geopend door de cursor over een bepaalde tijdsperiode te slepen; in de veldjes voor datum en tijd wordt dan automatisch de geselecteerde tijdsperiode ingevuld.</p></li>
</ul>
<p>Om een activiteit te verplaatsen naar een andere datum of tijd klikt u op de activiteit en wijzigt u de datum of tijd in het window 'Activiteit wijzigen' dat dan opengaat. U kunt activiteiten niet slepen naar een andere datum of tijd.</p>
<?php } ?>
<br></li>
<li id="ts"><h4>Zoeken op Tekst</h4>
<p>Door te klikken op de knop met de driehoek rechts in de navigatie balk opent de zoekpagina. Op deze pagina kan een zoekactie worden gestart. De zoekpagina bevat gedetailleerde zoekinstructies.</p>
<br></li>
<?php if ($privs > 1) { //if post rights ?>
<li id="ae"><h4>Activiteiten toevoegen / wijzigen / wissen</h4>
<p>Activiteiten toevoegen, wijzigen en wissen wordt gedaan via het window Activiteit, wat op verschillende manier kan worden geopend zoals hierna uitgelegd.</p>
<br><h5>a. Activiteit toevoegen</h5>
<p>Activiteiten toevoegen kan op de volgende manieren:</p>
<ul style="margin:0 20px">
<li><p>door in de navigatiebalk op de knop Activiteit toevoegen te klikken</p></li>
<li><p>door in de jaar- of maandweergave bovenaan in een datumcel te klikken</p></li>
<li><p>door in de dag- of weekweergave een bepaald deel van de dag te selecteren</p></li>
</ul>
<p>In al deze gevallen gaat het window 'Activiteit Toevoegen' open en kan de activiteit worden ingetikt. Sommige velden zijn al ingevuld, al naargelang welke manier is gekozen.</p>
<h6>Title, Locatie, Categorie, Beschrijving en Privé velden</h6>
<p>De velden locatie, categorie en een beschrijving zijn niet verplicht. Wanneer een categorie wordt aangevinkt, krijgt de activiteit in alle kalenderweergaven de bijbehorende tekst- en achtergrondkleur. Van URL's in de omschrijving wordt automatisch een hyperlink gemaakt die kan worden aangeklikt in de maandweergave, de weergave van de binnenkort plaatsvindende activiteiten en in kalendermails. Een privé-activiteit is alleen zichtbaar voor uzelf en niet voor anderen.</p>
<h6>Datums, Tijden and Herhaling velden</h6>
<p>Het veld 'Einddatum' is niet verplicht; het kan worden gebruikt voor activiteiten die meerdere dagen duren. Datum en tijd kunnen met de hand worden ingetikt of worden gekozen via de datum- en tijdkeuzeknopjes. U kunt activiteiten wekelijks, maandelijks, op bepaalde dagen van de maand, etc. laten terugkomen. Dit kunt u specificeren in het dialoogvenster dat opent wanneer u op 'Wijzigen' klikt. De activiteit zal worden herhaald tot de aangegeven einddatum. Als geen einddatum wordt aangegeven, wordt de activiteit oneindig herhaald, wat met name handig is voor verjaardagen.</p>
<h6>Stuur mail velden</h6>
<p>Via stuur mail kunt u aangeven dat de kalender direct en/of een aantal dagen vóór een geplande activiteit een mail moet sturen naar een of meer mailadressen. Ook zal op de dag zelf automatisch nog een mail worden gestuurd. Als het aantal dagen "0" wordt ingevoerd, zal alleen op de dag van de activiteit een mail worden verstuurd. Voor terugkomende activiteiten zal een mail worden verstuurd op het gekozen aantal dagen vóór elke keer dat de activiteit is gepland, en op de dag zelf.</p>
<p>De e-mail lijst kan bestaan uit mailadressen en/of de naam (zonder bestandsextensie) van een bestand met een voorgedefinieerde e-mail lijst, allen gescheiden door een puntkomma. De voorgedefinieerde e-mail lijst moet een tekstbestand met extensie ".txt" in de "emlists/" map zijn met een e-mail adres per regel. In de bestandsnaam mag niet het "@" teken voorkomen.</p>
<p>Als alles is ingevuld, klikt u op 'Toevoegen'.</p>
<br>
<h5>b. Activiteiten wijzigen / wissen</h5>
<p>In elke kalenderweergave kan op een activiteit worden geklikt om een window met details van deze activiteit te openen. Indien u voldoende rechten heeft, kunt u de knop Activiteit wijzigen kiezen om de activiteit te wijzigen, te kopiëren of te wissen. Het window 'Activiteit' gaat dan open. Dit window is gelijk aan het boven beschreven window 'Activiteit toevoegen', behalve de titel van het window en de knoppen onderaan.</p>
<p>Afhankelijk van uw rechten kunt u of activiteiten zien, of uw eigen activiteiten zien/wijzigen/wissen, of alle activiteiten zien/wijzigen/wissen, ook die van andere gebruikers.</p>
<p>Voor een beschrijving van de velden, zie bovenstaande beschrijving van 'Activiteit Toevoegen'.</p>
<p>In het Activiteit Wijzigen window, bieden de knoppen onderaan de mogelijkheid een gewijzigde activiteit op te slaan, een gewijzigde activiteit als een nieuwe activiteit op te slaan (bijv. om een kopie voor een andere datum te maken) en om een activiteit te verwijderen.</p>
<p>Let op! Wanneer u klikt op 'Verwijderen', wordt de activiteit direct uit de kalender gewist <strong>zonder dat bevestiging wordt gevraagd</strong>.</p>
<p>Wanneer een terugkomende activiteit wordt gewist, worden alle keren gewist dat de activiteit voorkomt, niet alleen die op een bepaalde datum.</p>
<br></li>
<?php } ?>
<li id="lo"><h4>Uitloggen</h4>
<p>Om uit te loggen klikt u in de navigatiebalk op Log uit.</p>
<br></li>
<?php if ($privs == 9) { //administrator only ?>
<li id="ca"><h4>Kalenderbeheer</h4>
<p>- voor de volgende functies zijn beheersrechten vereist -</p>
<p>Wanneer een gebruiker inlogt met beheersrechten, zal rechts in de navigatiebalk een dropdownmenu 'Beheer' verschijnen. Via dit menu zijn de volgende beheersfuncties beschikbaar:</p>
<br>
<h5>a. Instellingen</h5>
<p>Deze pagina laat de actuele kalenderinstellingen zien, die vervolgens kunnen worden gewijzigd. Alle instellingen worden uitgelegd op de pagina 'Kalenderinstellingen wijzigen'. Deze pagina geeft een goede beschrijving van alle mogelijke instellingen.</p>
<br>
<h5>b. Categorieën</h5>
<p>Het toekennen van verschillende kleuren aan categorieën activiteiten is niet per se nodig, maar hierdoor wordt de kalender wel veel overzichtelijker. Categorieën kunnen bijvoorbeeld zijn 'vakantie', 'afspraak', 'verjaardag', 'belangrijk', etc.</p>
<p>Bij installatie is er maar één categorie, 'geen cat'. Als u in het beheersmenu 'Categorieën' kiest, komt u op een pagina met een lijst van categorieën, waar u nieuwe categorieën kunt toevoegen of bestaande wijzigen/wissen.</p>
<p>Wanneer de gebruiker activiteiten toevoegt of wijzigt, kan deze in een dropdownmenu een van de gedefinieerde categorieën kiezen. De volgorde van de categorieën in het dropdownmenu wordt bepaald in het 'Volgorde' veld. De velden 'Tekstkleur' en 'Achtergrond' geven de kleuren aan waarmee activiteiten van die categorie in de kalender worden weergegeven.</p>
<p>Bij het toevoegen / wijzigen van een categorie kan een 'herhaling' worden ingesteld; activiteiten in deze categorie zullen automatisch worden herhaald zoals hier ingesteld. De checkbox 'Publiek' kan worden gebruikt om activiteiten welke tot deze categorie behoren te verbergen voor de publieke gebruiker (niet ingelogd) en uit te sluiten van de RSS feeds.</p>
<p>Een of twee aankruisvakjes/vinkjes kunnen worden geactiveerd; dit resulteert in de kalender in de weergave van de aankruisvakjes/vinkjes voor de titel van de activiteit voor alle activiteiten in deze categorie. De gebruiker kan deze vinkjes bijvoorbeeld gebruiken om activiteiten aan te vinken als "goedgekeurd" of "gedaan".</p>
<p>De velden Tekstkleur en Achtergrand bepalen de kleuren waarin de activiteiten worden weergegeven welke tot deze categorie behoren.</p>
<p>Wanneer u een categorie wist, komen de in die categorie vallende activiteiten terecht in 'no cat'.</p>
<br>
<h5>c. Gebruikers</h5>
<p>Via de pagina 'Gebruikers' kan de beheerder gebruikers, hun toegangsrechten tot de kalender en hun interface taal toevoegen en wijzigen. Met name op twee punten kunnen wijzigingen worden aangebracht: naam/mailadres/wachtwoord en toegangsrechten van de gebruiker en gebruikers interface taal. Toegangsrechten kunnen zijn: Bekijken, Eigen invoer, Alle invoeren, en Admin. Het is belangrijk dat een geldig mailadres wordt ingevoerd, omdat de gebruiker dan per mail een melding kan krijgen dat een bepaalde activiteit over een aantal dagen op het programma staat.</p>
<p>Via de Settings pagina, kan de beheerder "gebruikers zelfregistratie" toestaan en de toegangsrechten bepalen voor zelfgeregistreerde gebruikers. Wanneer zelfregistratie is toegestaan, kunnen gebruikers zichzelf registreren via de browser interface.</p>
<p>Tenzij de beheerder het publiek toegang heeft gegeven om de kalender te bekijken, moet de gebruiker zich aanmelden met zijn of haar gebruikersnaam of mailadres en wachtwoord. Afhankelijk van het type gebruiker kunnen aan gebruikers verschillende toegangsrechten worden gegeven.</p>
<p>Voor iedere gebruiker kan de standaard user-interface taal worden gespecificeerd. Indien geen taal is gespecificeerd, wordt de standaard kalender taal gebruikt die op de Beheer pagina is ingesteld.</p>
<br>
<h5>d. Database</h5>
<p>De database pagina geeft de beheerder toegang tot de volgende functies:</p>
<ul>
<li>Check and Repair the database, to find and solve inconsistencies in the database tables.</li>
<li>Compact database, to free unused space and to avoid overhead. This function will permanently remove events which have been deleted more than 30 days ago.</li>
<li>Backup database, to create a backup file which can be used to recreate the database tables structure and content.</li>
</ul>
<p>The first function, Check and Repair database, only needs to be run when the calendar views don't work properly. The second function, Compact database, could be run once a year to clean up the database, and the third function, Backup database, should be run more frequently, depending on the number of calendar updates.</p>
<br>
<h5>e. CSV File Import</h5>
<p>Deze functie kan worden gebruikt om in de LuxCal kalender gegevens te importeren die zijn geëxporteerd uit andere kalenders (bijv. MS Outlook). Instructies zijn te vinden op de CSV Import pagina.</p>
<br>
<h5>f. iCal File Import</h5>
<p>Deze functie kan worden gebruikt om activiteiten uit iCal bestanden (bestandstype .ics) in de LuxCal kalender te importeren. Instructies zijn te vinden op de iCal Import pagina. Alleen activiteiten, welke compatibel zijn met de LuxCal kalender worden geïmporteerd. Andere componenten, zoals: To-Do, Jounal, Free / Busy, Time zone en Alarm, worden genegeerd.</p>
<br>
<h5>g. iCal File Export</h5>
<p>Deze functie kan worden gebruikt om activiteiten uit de LuxCal kalender naar iCal bestanden te exporteren (bestandstype .ics). Instructies zijn te vinden op de iCal Export pagina.</p>
<br></li>
<?php } ?>
<li id="al"><h4>Over LuxCal</h4>
<p>Geproduceerd door: <b>Roel Buining</b>&nbsp;&nbsp;&nbsp;&nbsp;Website en forum: <b><a href="http://www.luxsoft.eu/" target="_blank">www.luxsoft.eu/</a></b></p>
<p>LuxCal is freeware and may be redistributed and/or modified under the terms of the <b><a href="http://www.luxsoft.eu/index.php?pge=gnugpl" target="_blank">GNU General Public License</a></b>.</p>
<br></li>
</ol>
</div>