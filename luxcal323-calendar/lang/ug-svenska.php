<?php
/*
= LuxCal event calendar on-line user guide =

Översatt till svenska av Thomas "Morgoo" Karlsson. Skicka gärna kommentarer, förslag på förbättringar m.m till thomas.virserum@telia.com.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ug language file version
define("LUG","3.2.3");

?>
<div style="margin:0 20px">
<div class="floatR">
	<img src="lang/ug-layout.png" alt="LuxCal page layout"><br>
	a: titellist&nbsp;&nbsp;b: navigationslist&nbsp;&nbsp;c: kalender&nbsp;&nbsp;d: dag
</div>
<br>
<h4>Innehållsförteckning</h4>
<ol>
<li><p><a href="#ov">Översikt</a></p></li>
<li><p><a href="#li">Logga in</a></p></li>
<li><p><a href="#ae">Lägg till händelse</a></p></li>
<li><p><a href="#ee">Redigera / radera händelse</a></p></li>
<li><p><a href="#co">Kalenderoptions</a></p></li>
<li><p><a href="#cv">Kalendertyper</a></p></li>
<li><p><a href="#ts">Text Search</a></p></li>
<li><p><a href="#lo">Logga ut</a></p></li>
<li><p><a href="#ca">Kalender-administration</a></p></li>
<li><p><a href="#al">About LuxCal</a></p></li>
</ol>
</div>
<div class="help">
<br>
<ol>
<li id="ov"><h4>Översikt</h4>
<p>Denna webb-kalender körs på en webbserver och kan visas och administreras via
webbläsaren.</p>
<p>I namnlisten visas kalender-titel, datum och namn på den aktuella användaren.
Strax under namnlisten är navigeringsfältet med flera rullgardinsmenyer och länkar
för att navigera till logga in och ut, lägga till händelser och välja funktioner
som administratör. Vilka menyer och länkar som visas beror på användarens behörighet.
Under navigeringsfältet visas de olika kalendertyperna.</p>
<br></li>
<li id="li"><h4>Logga in</h4>
<p>Om du vill använda kalendern så logga in på höger sida av navigationsfältet. 
Som tar dig till inloggningsskärmen. Skriv in ditt användarnamn eller e-postadress 
(en av de två) och det lösenord du fick från administratören och klicka sedan på 
Logga in. If you select "Remember me" before clicking Log In, next times you launch 
the calendar you will be automatically logged in. Om du glömt ditt lösenord, klicka 
på Logga in och klicka på länken för att få ett nytt lösenord.</p>
<p>Du kan ändra din e-postadress och ditt lösenord, ange ditt användarnamn och
nuvarande lösenord och en ny e-postadress och ett nytt lösenord.</p>
<p>Kalender-administratören tillandahåller kalendern till allmänheten så att
kalendern och tillagda händelser kan ses utan att logga in.</p>
<br></li>
<li id="ae"><h4>Lägga till en händelse</h4>
<p>Händelser kan läggas till på flera sätt:</p>
<ul class="c1">
<li><p>genom att klicka på Lägg till händelse knappen i navigeringsfältet</p></li>
<li><p>genom att välja årlig eller månadskalender och klicka på den</p></li>
<li><p>genom att markera en del av en dag för en vecka eller i dag kalender</p></li>
</ul>
<p>Varje metod kommer att skapa ett fönster med ett formulär där information
om händelsen visas. Vissa fält i formuläret är redan fyllda, beroende på vilket av
ovanstående metoder som har använts.</p>
<p>I den övre delen av formuläret ange titel, plats, kategori och ev. meddelande 
till oss, och möjligheten Privat är valbar. Titeln ska innehålla ditt namn och 
detaljerna placeras under meddelande. Fälten plats och kategori är frivilligt. 
Om du väljer en kategori får händelsen en färgkod i alla kalendrar enligt kategori 
färg. Plats och beskrivningvisas när muspekaren förs över kalendern. Händelsen är 
privat och bara synlig för dig själv och inte för andra.</p>
<p>Internet-adresser i meddelandefältet i format [url | namn] (t.ex.
[www.minsida.com | Mitt Namn]), görs automatiskt om till länkar som kan väljas i
månadsvyn, kommande händelser och e-post reklam.</p>
<p>Under andra hälften av formuläret anges datum och tider. Om hela dagen är vald,
syns inga datum i dagböcker. Sista datum är valfritt och kan användas för evenemang
som går över flera dagar. Datum och tider kan skrivas in manuellt eller efter datum
och tid som är valbara. Efter datum- och tid-fälten kan händelser defineras som
återkommande via en separat dialogruta, som du öppnar genom att klicka på knappen
Ändra. I detta fall upprepas bokningen som anges från startdatum till slutdatum. Om
inte ett slutdatum anges, upprepas händelsen tills du väljer att avbryta den.</p>
<p>I den nedre delen av blanketten med påminnelsefunktion, kan du välja att skicka
e-post som påminnelse till en eller flera e-postadresser direkt, om kryssrutan
för valt index är markerad, och / eller ett par dagar före själva dagen för
händelsen. Dessutom, skicka ett mail på den aktuella dagen för händelsen. För
upprepade händelser skickas ett mail det valda antalet dagar före varje händelse 
som ska upprepas och på den aktuella dagen för varje upprepning.</p>
<p>När allt är klart, klicka på Lägg till händelse.</p>
<br></li>
<li id="ee"><h4>Redigera / radera händelser</a></h4>
<p>I varje kalender-typ, kan du klicka på en händelse för att visa,
redigera eller radera dem. Detta öppnar fönstret Redigera händelser som ser ut som
fönstret för Lähgga till händelse som beskrivs ovan, förutom titeln och knappar 
längst ner i fönstret.</p>
<p>Beroende på dina rättigheter kan du se händelser, visa / redigera / radera dina
egna händelser eller se / redigera / radera alla händelser, inklusive andra
användares evenemang.</p>
<p>För en beskrivning av fälten se Ny händelse ovan. Observera att ett klick på Ta
bort händelse så raderas omedelbart händelsen i kalendern, <strong>utan att be om
bekräftelse.</strong></p>
<p>Ta bort en händelse som upprepas raderar alla förekomster av händelsen,
inte bara det valda datumet.</p>
<p>Om "Stäng inte detta fönster" är förkryssad, så när du klickar på Lägg 
till händelse så tillkommer tre nya knappar längst ner i fönstret, för att 
uppdatera den aktuella händelsen, ta bort händelsen, eller till att återanvända 
aktuella händelser och skapa ett andra Nytt evenemang, till exempel, två exemplar 
av evenemanget som berör andra datum.</p>
<br></li>
<li id="co"><h4>Calendar Options</h4>
<p>Clicking the Options button on the navigation bar will open the calendar's 
Options Panel. On this panel you can select the following via check boxes:</p>
<ul style="margin:0 20px">
<li><p>The calendar view (year, month, week, day, upcoming or changes).</p></li>
<li><p>An event filter based on event owners. Events of one single owner or 
multiple owners can be selected.</p></li>
<li><p>An event filter based on event categories. Events in one single category 
or multiple categories can be selected.</p></li>
<li><p>The user interface language.</p></li>
</ul>
<p>Note: The display of the event filter menus and the language menu can be 
enabled/disabled by the calendar administrator.</p>
<p>After having made your choices in the Options Panel, the Options button in the 
navigation bar should be clicked again to activate your choices.</p> 
<br></li>
<li id="cv"><h4>Kalendertyper</h4>
<p>Mer information om en händelse dyker upp när musen
flyttas över den. För privata evenemang bakgrundsfärgen av pop-up fönster kommer 
att vara ljusgrönt. Webbadresser i fältet Meddelande kommer automatiskt att 
konverteras till länkar till motsvarande webbsida.</p>
<p>Events in a category for which the admin has activated a check box will have 
a check box displayed in front of the event title, which can be used to flag 
events for example as "completed". When having sufficient rights, this check box 
can be clicked to check/uncheck it.</p>
<p>Om du har tillräcklig behörighet:</p>
<ul style="margin:0 20px">
<li><p>När du klickar på en händelse öppnas redigera denna händelse där du kan visa, 
redigera och radera händelsen.</p></li>
<li><p>Visning månader och år: lägg till en ny händelse till ett visst
datum genom att klicka överst i cellen för en dag (den rad där datum
visas.)</p></li>
<li><p>Visning veckor och dagar: du kan lägga till och öppna ett nytt fönster, 
genom att dra markören över en del av datum- och tidfälten så fylls dem automatiskt 
med den valda perioden och sean klicka på den.</p></li>
</ul>
<p>Förutsättningar som förändras: du kan ange ett nytt startdatum 
där en lista över alla händelser visas, så redigeras eller raderas det gamla 
startdatumet och det nya startdatumet visas istället.</p>
<p>Om du vill flytta en händelse till ett nytt datum eller tid, stänger du
redigeringsfönstret genom att klicka på händelsen och klicka på datum
och tid. Händelser kan inte dras med musen till nya dagar och tider.</p>
<br></li>
<li id="ts"><h4>Text Search</h4>
<p>When clicking the button with the triangle on the right side in 
the navigation bar, the Text Search page will open. On this page the text search 
can be defined. The Text Search page contains detailed instructions.</p>
<br></li>
<li id="lo"><h4>Logga ut</h4>
<p>När du vill logga ut klickar du på Logga ut i navigeringsfältet. Om du
stänger kalendern utan att logga ut så kan det hända att du inte uppmanas att
logga in nästa gång kalendern öppnas.</p>
<br></li>
<li id="ca"><h4>Kalenderadministration</h4>
<p>- Följande funktioner kräver administratörsrättigheter -</p>
<p>När en användare loggar in med administratörsbehörighet, ser du en
rullgardinsmeny som kallas Administration till höger om navigationsfältet. Med 
denna meny finns följande funktioner tillgängliga:</p>
<br>
<h5>a. Inställningar</h5>
<p>Denna sida visar aktuella kalendern-inställningar, som sedan kan
modifieras. Alla alternativ förklaras på sidan Ändra kalender-alternativ. Sidan
ger en bra beskrivning av alla tänkbara alternativ.</p>
<br>
<h5>b. Kategorier</h5>
<p>Använda kategorier med olika färger - även om det inte är nödvändigt -
kan det optimera visningen av kalendern. Exempel på möjliga händelser är:'ledighet', 
'semester', 'möte', 'födelsedag', 'viktigt', m.m.</p>
<p>När du väljer kategorier från menyn Administration kommer du till en
sida med en lista över alla kategorier och möjlighet att lägga till nya poster
eller redigera / ta bort befintliga kategorier.</p>
<p>När du har lagt till / ändrat händelser, visas de definierade 
kategorierna på rullgardinsmenyn. I vilken ordning kategorierna visas i listan 
bestäms av sekvens-fältet. Fälten textfärg och bakgrund definierar färger eftersom 
händelse i denna kategori visas i kalendern.</p>
<p>When adding / editing categories a 'repeat' value can be set; events in this 
category will automatically repeat as specified. The checkbox 'Public' can be 
used to hide events belonging to this category from being viewed by public access 
users (not logged in users) and exclude them from the RSS feeds.</p>
<p>One or two check marks can be activated, resulting in the calendar in 
the display of one or two check marks in front of the event title for all events 
in this category. The user can use this check mark to flag events for example 
as "approved" or "completed". The fields Text Color and Background define the 
colors used to display events in the calendar belonging to this category.</p>
<p>När en kategori tas bort, flyttas de händelser som hör till denna 
kategori till kategorin "nej".</p>
<br>
<h5>c. Användare</h5>
<p>På användarsidan kan administratören lägga till och redigera 
kalender-användare och deras rättigheter. Två huvudområden kan redigeras: 
användarnamn / e-post / lösenord och privilegier för användare. Tillgängliga 
rättigheter: Se, Skicka eget. Det är viktigt att använda en giltig e-postadress 
så att användarna kan ta emot e-post för påminnelser om kommande evenemang.</p>
<p>Via sidan Inställningar kan administratören aktivera "användare
självregistrering och ställa in rättigheter för registrerade användare. När 
självregistrering är aktiverat kan användare registrera sig till kalender via 
webbläsarens gränssnitt.</p>
<p>Om inte administratören har gett tillgång till offentliga användare 
så att dem kan se de tillagda händelserna måste användarna logga in med sitt 
användarnamn eller e-postadress och lösenord. Beroende på vilken typ av användare, 
kan användaren få olika rättigheter.</p>
<p>For each user the default user-interface language on log-in can be specified. 
If no language is specified, the default calendar language specified on the 
settings page will be used.</p>
<br>
<h5>d. Database</h5>
<p>The database page allows the calendar administrator to execute the following 
fucntions:</p>
<ul>
<li>Check and Repair the database, to find and solve inconsistencies in the 
database tables</li>
<li>Compact database, to free unused space and to avoid overhead</li>
<li>Backup database, to create a backup file which can be used to recreate the 
database tables structure and content</li>
</ul>
<p>The first function, Check and Repair database, only needs to be run when the 
calendar views don't work properly. The second function, Compact database, 
could be run once a year to clean up the database, and the third function, 
Backup database, should be run more frequently, depending on the number of 
calendar updates.</p>
<br>
<h5>e. CSV File Import</h5>
<p>This function can be used to import into the LuxCal Calendar event data that has been exported from other calendars (e.g. MS Outlook). Further instructions are given on the CSV Import page.</p>
<br>
<h5>f. iCal File Import</h5>
<p>This function can be used to import events from iCal files (file extension .ics) into the LuxCal Calendar. Further instructions are given on the iCal Import page. Only events which are compatible with the LuxCal calendar will be imported. Other components, like: To-Do, Journal, Free / Busy, Time zone and Alarm, will be ignored.</p>
<br>
<h5>g. iCal File Export</h5>
<p>This function can be used to export LuxCal events into iCal files (file extension .ics). Further instructions are given on the iCal Export page.</p>
<br></li>
<li id="al"><h4>About LuxCal</h4>
<p>Produced by: <b>Roel Buining</b>&nbsp;&nbsp;&nbsp;&nbsp;Website and forum: <b><a href="http://www.luxsoft.eu/" target="_blank">www.luxsoft.eu/</a></b></p>
<p>LuxCal is freeware and may be redistributed and/or modified under the terms of the <b><a href="http://www.luxsoft.eu/index.php?pge=gnugpl" target="_blank">GNU General Public License</a></b>.</p>
<br>
</li>
</ol>
</div>