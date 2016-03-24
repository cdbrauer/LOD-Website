<?php
/*
= LuxCal event calendar on-line user guide =

Oversat til dansk af Lars J. Helbo. Kommentarer, forbedringsforslag osv. til lars(at)salldata.dk
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

//LuxCal ug language file version
define("LUG","3.2.3");

?>
<div style="margin:0 20px">
<div class="floatR">
<img src="lang/ug-layout.png" alt="LuxCal page layout"><br>
a: titelbj&aelig;lke&nbsp;&nbsp;b: navigationsbj&aelig;lke&nbsp;&nbsp;c: kalender&nbsp;&nbsp;d: dag
</div>
<br>
<h4>Indholdsfortegnelse</h4>
<ol>
<li><p><a href="#ov">Oversigt</a></p></li>
<li><p><a href="#li">Logge ind</a></p></li>
<li><p><a href="#ae">Tilf&oslash;je begivenhed</a></p></li>
<li><p><a href="#ee">Editere / slette begivenhed</a></p></li>
<li><p><a href="#co">Kalender valgmuligheder</a></p></li>
<li><p><a href="#cv">Kalendervisninger</a></p></li>
<li><p><a href="#ts">Teksts&oslash;gning</a></p></li>
<li><p><a href="#lo">Logge ud</a></p></li>
<li><p><a href="#ca">Kalender administration</a></p></li>
<li><p><a href="#al">Om LuxCal</a></p></li>
</ol>
</div>
<div class="help">
<br>
<ol>
<li id="ov"><h4>Oversigt</h4>
<p>LuxCal kalenderen k&oslash;rer p&aring; en webserver og kan ses og administreres via din webbrowser.</p>
<p>Titelbj&aelig;lken viser kalenderens titel, datoen og navnet p&aring; den aktuelle bruger.
Lige under titelbj&aelig;lken findes navigationsbj&aelig;lken med flere drop-down menuer og links til at navigere med, til at logge ind og ud, tilf&oslash;je en begivenhed og v&aelig;lge administratorfunktioner. Hvilke menuer og links, der vises, afh&aelig;nger af brugerens rettigheder.
Under navigationsbj&aelig;lken vises de forskellige kalendervisninger</p>
<br></li>
<li id="li"><h4>Logge ind</h4>
<p>Hvis kalender-administratoren har givet offentlig adgang til kalenderen, kan kalenderen ses uden at logge ind.</p>
<p>For at bruge kalenderen ud over hvad der er konfigureret som offentligt tilg&aelig;ngeligt, skal du logge ind. Klik p&aring; knappen Log ind i h&oslash;jre side af navigationsbj&aelig;lken for at komme til log ind-sk&aelig;rmen. Indtast dit brugernavn eller din email-adresse (en af de to) og det password, som du fik fra administratoren og klik s&aring; p&aring; Log ind. Hvis du v&aelig;lger "Husk mig" f&oslash;r du klikker Log ind, vil du automatisk blive logget ind n&aelig;ste gang du &aring;bner kalenderen. Hvis du har glemt dit password, klik p&aring; Log ind og derefter p&aring; linket for at f&aring; tilsendt et nyt password.</p>
<p>Du kan &aelig;ndre din email-adresse og dit password ved at indtaste dit brugernavn/email og aktuelle password samt en ny email-adresse og et nyt password.</p>
<p>Hvis du ikke er registreret endnu, og hvis kalenderens administrator har aktiveret selv-registrering, kan du klikke p&aring; "Registrer" i log ind-sk&aelig;rmen. Ellers kan du kontakte kalenderens administrator for at f&aring; oprettet et brugernavn.</p>
</li>
<br><li id="ae"><h4>Tilf&oslash;j begivenhed</h4>
<p>Begivenheder kan tilf&oslash;jes p&aring; flere forskellige m&aring;der:</p>
<ul style="margin:0 20px">
<li><p>ved at klikke p&aring; knappen Tilf&oslash;j begivenhed ("+") i navigationsbj&aelig;lken</p></li>
<li><p>ved at klikke &oslash;verst i feltet for en dag p&aring; en &aring;rs- eller m&aring;nedskalender</p></li>
<li><p>ved at klikke og tr&aelig;kke hen over en del af en dag i en uge- eller dagskalender for at markere et tidsrum</p></li>
</ul>
<p>Hver metode vil &aring;bne vinduet Begivenhed med en formular, hvor informationer om begivenheden indtastes. Nogle felter i formularen er allerede udfyldte, alt efter, hvilken af ovenst&aring;ende metoder, der blev brugt.</p>
<h6>Titel, Sted, Kategori, Beskrivelse og Privat felter</h6>
<p>I &oslash;verste del af formularen indtastes titel, sted, kategori og en beskrivelse, og muligheden Privat kan v&aelig;lges (hvis kalenderen er konfigureret til private begivenheder). Titlen b&oslash;r v&aelig;re kort og detaljerne placeres under beskrivelse. Felterne sted og kategori er valgfri. Hvis der v&aelig;lges en kategori, f&aring;r begivenheden en farvekode i alle kalendervisninger alt efter kategorifarven. Stedet og beskrivelsen vises, n&aring;r musen f&oslash;res hen over begivenheden kalenderen. En privat begivenhed er kun synlig for dig selv og ikke for andre.</p>
<p>Internet-adresser tilf&oslash;jet i begivenhedsbeskrivelsen, i formatet [ url | navn ] (for eksempel [www.mysite.com | mit navn]), omdannes automatisk til links, som kan v&aelig;lges i m&aring;nedsvisning, kommende begivenheder og p&aring;mindelses-emails.</p>
<h6>Dato, Tid og Gentagelse felter</h6>
<p>I den midterste del af formularen kan datoer og tidspunkter angives. Hvis Hele dagen v&aelig;lges, vises ingen tidspunkter i kalendervisningerne eller begivenhedsdetaljer. Slutdato er valgfri og kan bruges til begivenheder, der g&aring;r over flere dage. Datoer og tider kan indtastes manuelt eller via dato- og tidsvalgsknapperne. Derudover kan der defineres gentagelse af begivenheder. Klik p&aring; knappen &AElig;ndre for at &aring;bne den s&aelig;rlige dialogboks til dette. I s&aring; fald gentages begivenheden som angivet fra startdatoen til slutdatoen. Hvis der ikke anf&oslash;res nogen slutdato, gentages begivenheden evigt, hvilket er s&aelig;rlig praktisk til f&oslash;dselsdage.</p>
<h6>Send mail felter</h6>
<p>I den nederste del af formularen med alarm-funktionen, kan du v&aelig;lge at sende en email-p&aring;mindelse til en eller flere email-adresser, straks, hvis "nu" boksen v&aelig;lges, og/eller et antal dage f&oslash;r selve datoen for begivenheden. Derudover sendes en email p&aring; selve dagen for begivenheden. For begivenheder der gentages, sendes en email det valgte antal dage f&oslash;r hver gang begivenheden gentages og p&aring; selve datoen for hver gentagelse.</p>
<p>Email listen kan indeholde email adresser og/eller navnet (uden fil extension) p&aring; en forud defineret email liste fil, adskilt med semikolonner. Den forud definerede email liste fil skal v&aelig;re en tekstfil med extension ".txt", som skal ligge i folderen "emlists/" p&aring; serveren. Filen skal indeholde en email adresse pr. linje. Filnavnet m&aring; ikke indeholde tegnet "@".</p>
<p>N&aring;r alt er udfyldt, klik p&aring; Tilf&oslash;j og luk for at oprette begivenheden og returnere til kalenderen, eller klik p&aring; Tilf&oslash;j for at oprette begivenheden og beholde vinduet &aring;bent, s&aring; oplysningerne kan tilrettes og/eller bruges til at oprette yderligere begivenheder.</p>
</li>
<br><li id="ee"><h4>Editere / slette begivenhed</h4>
<p>I hver kalendervisning kan du klikke p&aring; en begivenhed for at se, editere eller slette den. Dermed &aring;bnes vinduet Editer begivenhed, der ser ud som vinduet Tilf&oslash;j begivenhed beskrevet herover, bortset fra titlen og knapperne nederst i vinduet.</p>
<p>Ved &aelig;ndring af en begivenhed, giver knapperne mulighed for at gemme &aelig;ndringer og lukke vinduet, gemme &aelig;ndringer og beholde vinduet &aring;bent for at foretage yderligere &aelig;ndringer, gemme &aelig;ndringer som en ny begivenhed (fx for at oprette p&aring; en ny dato), slette begivenheden eller lukke vinduet uden at gemme &aelig;ndringer foretaget efter sidste Gem.</p>
<p>Alt efter dine rettigheder kan du se begivenheder, se/editere/slette dine egne begivenheder eller se/editere/slette alle begivenheder, herunder andre brugeres begivenheder.</p>
<p>For en beskrivelse af felterne, se under Tilf&oslash;j begivenhed herover.</p> 
<p>Bem&aelig;rk at et klik p&aring; Slet begivenhed straks sletter begivenheden fra kalenderen, <strong>uden at sp&oslash;rge om bekr&aelig;ftelse</strong>.</p>
<p>Sletning af en begivenhed, der gentages sletter alle forekomster af begivenheden, ikke bare den valgte dato.</p>
<br></li>
<li id="co"><h4>Kalender Valgmuligheder</h4>
<p>Klik p&aring; knappen Valgmuligheder i venstre side af navigationsbj&aelig;lken for at vise kalenderens valgmuligheder. Her kan du v&aelig;lge f&oslash;lgende ved afkrydsning:</p>
<ul style="margin:0 20px">
<li><p>Kalender visning (&Aring;r, M&aring;ned, Uge, Dag, Kommende eller &AElig;ndringer).</p></li>
<li><p>Udv&aelig;lgelse baseret p&aring; begivenhedsejer. Begivenheder oprettet af en enkelt, flere eller alle brugere kan udv&aelig;lges.</p></li>
<li><p>Udv&aelig;lgelse baseret p&aring; begivenhedskategorier. Begivenheder i en enkelt, flere eller alle kategorier kan udv&aelig;lges.</p></li>
<li><p>Brugerinterface sprog.</p></li>
</ul>
<p>Efter afkrydsning af de &oslash;nskede valg i valgmenuerne klikkes igen p&aring; Valgmuligheder (nu Udf&oslash;r) knappen i navigationsbj&aelig;lken for at aktivere dine valg.</p> 
<p>Bem&aelig;rk: Visning af valgmenuer og sprogmenu kan v&aelig;re aktiveret eller deaktiveret af kalenderens administrator.</p>
<br></li>
<li id="cv"><h4>Kalendervisninger</h4>
<p>I alle visninger vil en boks med flere detaljer om en begivenhed poppe op, n&aring;r musen f&oslash;res hen over den. For private begivenheder vil baggrundsfarven i pop-up boksen v&aelig;re lys gr&oslash;n. For gentagne eller flerdages begivenheder vil rammen om pop-up boksen v&aelig;re r&oslash;d. I visningen Kommende vil URL'er i beskrivelsesfeltet automatisk blive omdannet til links til den tilh&oslash;rende webside.</p>
<p>I alle visninger vil dags dato have en bl&aring; ramme, og hvis en ny dato v&aelig;lges med datov&aelig;lgeren i navigationsbj&aelig;lken, vil denne dato have en r&oslash;d ramme i m&aring;neds- og &aring;rsvisning.</p>
<p>Begivenheder i en kategori, hvor administrator har aktiveret Tjekboks, vil vise en tjekboks foran begivenhedstitlen. Den kan bruges til fx at m&aelig;rke en begivenhed som "afsluttet". Hvis du har de n&oslash;dvendige rettigheder kan du klikke i tjekboksen for at s&aelig;tte eller fjerne tjekm&aelig;rket.</p>
<p>Hvis du har tilstr&aelig;kkelige rettigheder:</p>
<ul style="margin:0 20px">
<li><p>I alle visninger g&aelig;lder, at n&aring;r du klikker p&aring; en begivenhed, &aring;bnes vinduet for editering af denne begivenhed, hvor du s&aring; kan se, editere og slette begivenheden.</p></li>
<li><p>I visningerne M&aring;ned og &Aring;r kan en ny begivenhed tilf&oslash;jes for en bestemt dato ved at klikke &oslash;verst i feltet for dagen (linien hvor datoen vises).</p></li>
<li><p>I visningerne Uge og Dag, kan et tilf&oslash;j-vindue &aring;bnes ved at tr&aelig;kke musen hen over en del af dagen; felterne dato og tid udfyldes automatisk med den valgte periode.</p></li>
</ul>
<p>I visningen &AElig;ndringer kan en startdato specificeres. En liste med alle begivenheder tilf&oslash;jet, editeret eller slettet fra og med den angivne startdato vises.</p>
<p>For at flytte en begivenhed til en ny dato eller tid, &aring;bnes editerings-vinduet ved at klikke p&aring; begivenheden og derefter &aelig;ndre dato og tid. Begivenheder kan ikke tr&aelig;kkes til nye dage eller tider.</p>
<br></li>
<li id="ts"><h4>Teksts&oslash;gning</h4>
<p>Klik p&aring; knappen med trekanten i h&oslash;jre side af navigationsbj&aelig;lken for at &aring;bne Teksts&oslash;gning siden. Siden indeholder detaljerede instruktioner.</p>
<br></li>
<li id="lo"><h4>Logge ud</h4>
<p>For at logge ud, klik p&aring; Log ud i h&oslash;jre side af navigationsbj&aelig;lken. Hvis du lukker kalenderen uden at logge ud, kan det ske, at du ikke bliver bedt om at logge ind n&aelig;ste gang kalenderen &aring;bnes.</p>
<br></li>
<li id="ca"><h4>Kalenderadministration</h4>
<p>- de f&oslash;lgende funktioner kr&aelig;ver administratorrettigheder -</p>
<p>N&aring;r en bruger logger ind med administratorrettigheder, vises en drop-down menu kaldet Administration i h&oslash;jre side af navigationsbj&aelig;lken. Med denne menu er f&oslash;lgende funktioner tilg&aelig;ngelige:</p>
<br>
<h5>a. Indstillinger</h5>
<p>Siden viser de aktuelle kalenderindstillinger, som derefter kan &aelig;ndres. Alle indstillinger forklares p&aring; siden i pop-up vinduer, som vises n&aring;r musemark&oslash;ren holdes over titlen p&aring; hver indstilling.</p>
<br>
<h5>b. Kategorier</h5>
<p>Tilf&oslash;jelse af kategorier med forskellig farve vil - selv om det ikke er n&oslash;dvendigt - forbedre oversigten over kalenderen. Mulige kategorier er fx 'ferie', 'aftaler', 'f&oslash;dselsdage', 'vigtigt', etc.</p>
<p>Ved installation er der kun defineret en kategori, kaldet 'ingen'. N&aring;r du v&aelig;lger Kategorier fra administrationsmenuen, kommer du til en side med en liste med alle kategorier og mulighed for at tilf&oslash;je nye kategorier eller editere/slette eksisterende kategorier.</p>
<p>N&aring;r der tilf&oslash;jes / editeres begivenheder, kan de definerede kategorier v&aelig;lges i en drop-down liste. Den r&aelig;kkef&oslash;lge, hvori kategorier vises i listen bestemmes af sekvens-feltet.</p>
<p>En kategori kan have gentagelse defineret. Begivenheder i denne kategori vil automatisk f&aring; sat gentagelse som angivet her.</p>
<p>Hvis "Begivenheder kr&aelig;ver godkendelse" markeres, vil der blive tilf&oslash;jet en tjekboks til godkendelse i toppen af editeringsvinduet for begivenheder, der tilknyttes denne kategori. En begivenhed, der ikke er markeret som godkendt, vil blive vist med en r&oslash;d kantlinje i kalendervisningerne.</p>
<p>Markeringen 'Offentlig' kan fjernes for at skjule begivenheder i denne kategori, s&aring; de ikke er synlige i offentlig visning, men kun kan ses af brugere der er logget ind. De vil ogs&aring; blive udeladt fra RSS feeds.</p>
<p>Der kan defineres en tjekboks med valgfri titel og tjekm&aelig;rke for kategorien, hvilket medf&oslash;rer at der i kalendervisningerne (undtagen &aring;rsvisning) tilf&oslash;jes en tjekboks foran titlen for alle begivenheder i denne kategori. Brugere kan (med de n&oslash;dvendige rettigheder) klikke her for at s&aelig;tte eller fjerne markeringen, som fx kan v&aelig;re 'afsluttet'.</p>
<p>Felterne tekstfarve og baggrund definerer de farver, som begivenheder i denne kategori vises med i kalenderen.</p>
<p>N&aring;r en kategori slettes, vil den stadig v&aelig;re tilg&aelig;ngelig for de begivenheder der tilh&oslash;rer denne kategori.</p>
<br>
<h5>c. Brugere</h5>
<p>P&aring; brugersiden kan administratoren tilf&oslash;je og editere brugere samt deres kalenderrettigheder. To hovedomr&aring;der kan editeres: brugerens navn/email/password og brugerens rettigheder. Mulige rettigheder er: Se, Opret + editer egne, Opret + editer alle og Admin. Det er vigtigt at bruge en gyldig email-adresse, s&aring; brugerne kan modtage email-p&aring;mindelser om kommende begivenheder.</p>
<p>I Indstillingerne kan administrator aktivere Bruger-selvregistrering og definere hvilke rettigheder, der skal tildeles selvregistrerede brugere. Hvis selvregistrering er aktiv, kan brugere registrere sig direkte p&aring; kalendersiden.</p> 
<p>Medmindre kalender-administratoren har givet Se-adgang til offentlige brugere, skal brugerne logge ind med deres brugernavn eller email og password. Alt efter typen af bruger, kan brugeren f&aring; forskellige adgangsrettigheder.</p>
<p>For hver bruger kan der angives et standardsprog. Hvis der ikke angives et sprog, vil kalenderens standardsprog fra Indstillinger blive anvendt.</p>
<br>
<h5>d. Database</h5>
<p>Databasesiden giver kalenderens administrator mulighed for at udf&oslash;re f&oslash;lgende funktioner:</p>
<ul>
<li>Tjek og reparer database, for at finde og l&oslash;se inkonsistens i database tabellerne.</li>
<li>Komprimer database, for at frig&oslash;re ubrugt plads og undg&aring; "overhead". Denne funktion vil fjerne begivenheder permanent hvis det er mere end 30 dage siden de blev slettet.</li>
<li>Backup af database, for at oprette en backupfil, som kan bruges til at gendanne databasetabellernes struktur og indhold.</li>
</ul>
<p>Den f&oslash;rste funktion, Tjek og reparer database, beh&oslash;ver kun at blive udf&oslash;rt, hvis kalendervisningerne ikke virker korrekt. Den anden funktion, Komprimer database, kan fx udf&oslash;res en gang &aring;rligt for at rydde op i databasen, og den tredje funktion, Backup af database, b&oslash;r udf&oslash;res oftere, afh&aelig;ngigt af hvor mange opdateringer der foretages i kalenderen.</p>
<br>
<h5>e. CSV fil-import</h5>
<p>Denne funktion kan bruges til at importere begivenhedsdata til LuxCal kalenderen fra andre kalendere (f.eks. MS Outlook). N&aelig;rmere vejledning findes p&aring; CSV import-siden.</p>
<br>
<h5>f. iCal fil-import</h5>
<p>Denne funktion kan bruges til at importere begivenheder fra iCal-filer (fil extension .ics) til LuxCal-kalenderen. Mere vejledning findes p&aring; iCal-importsiden. Kun begivenheder, som er kompatible med LuxCal-kalenderen importeres. Andre komponenter, s&aring; som: To-Do, Journal, Fri / optaget, Tidszone og Alarm, ignoreres.</p>
<br>
<h5>g. iCal fil-eksport</h5>
<p>Denne funktion kan bruges til at eksportere LuxCal-begivenheder til iCal-filer (fil extension .ics). Mere vejledning findes p&aring; iCal-eksportsiden.</p>
<br>
</li>
<li id="al"><h4>Om LuxCal</h4>
<p>Udviklet af: <b>Roel Buining</b>&nbsp;&nbsp;&nbsp;&nbsp;Website og forum: <b><a href="http://www.luxsoft.eu/" target="_blank">www.luxsoft.eu/</a></b></p>
<p>LuxCal er freeware og m&aring; videregives og/eller modificeres under betingelserne i <b><a href="http://www.luxsoft.eu/index.php?pge=gnugpl" target="_blank">GNU General Public License</a></b>.</p>
<br></li>
</ol>
</div>