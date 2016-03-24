<?php
/*
= LuxCal event calendar on-line user guide = ROMANIAN / ROMÂNĂ

Traducerea în limba română realizată de Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).
This file has been translated in română by Laurențiu Florin Bubuianu (laurfb@gmail.com - laurfb.tk).

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
This file is part of the LuxCal Web Calendar.
*/

//LuxCal ug language file version
define("LUG","3.2.3");

?>
<div style="margin:0 20px">
<div class="floatR">
<img src="lang/ug-layout.png" alt="LuxCal page layout"><br>
a: bara de titlu&nbsp;&nbsp;b: bara de navigare&nbsp;&nbsp;c: calendar&nbsp;&nbsp;d: zi
</div>
<br>
<h4>Cuprins</h4>
<ol>
<li><p><a href="#ov">Generalități</a></p></li>
<li><p><a href="#li">Autentificare</a></p></li>
<li><p><a href="#co">Opțiuni calendar</a></p></li>
<li><p><a href="#cv">Vizualizare calendar</a></p></li>
<li><p><a href="#ts">Căutare text</a></p></li>
<?php if ($privs > 1) { //if post rights ?>
<li><p><a href="#ae">Adăugare / Editare / Ștergere eveniment</a></p></li>
<?php } ?>
<li><p><a href="#lo">Deautentificare</a></p></li>
<?php if ($privs == 9) { //if administrator ?>
<li><p><a href="#ca">Administrare calendar</a></p></li>
<?php } ?>
<li><p><a href="#al">Despre LuxCal</a></p></li>
</ol>
</div>
<div class="help">
<br>
<ol>
<li id="ov"><h4>Generalități</h4>
<p>Calendarul <b>LuxCal</b> rulează pe un server web cu suport php și mySQL și poate fi vizualizat și configurat prin intermediul oricărui browser web actual(Firefox, Internet Explorer, Opera etc.).</p>
<p>În bara de titlu sînt afișate titlul calendarului, data și numele utilizatorului curent.
Imediat sub bara de titlu apare bara de navigare care conține cîteva meniuri drop-down și link-uri care permit navigarea, autentificarea, adăugarea și vizualizarea evenimentelor precum și adminstrarea și configurarea calendarului. Aceste opțiuni pot fi sau nu afișate funcție de drepturile de acces ale utilizatorului.
Imediat sub bara de navigare, funcție de opțiunile selectate, sînt afișate evenimentele din calendar.
</p>
<br></li>
<li id="li"><h4>Autentificare</h4>
<p>Pentru a putea folosi calendarul este necesar mai întîii să vă autentificați (faceți clic pe opțiunea <b>'Autentificare'</b> situată în colțul din dreapta sus, în bara de navigare). În fereastra de autentificare va trebui să introduceți numele sau adresa de email și parola. Dacă selectați opțiunea "Memorare Utilizator" data următoare nu veți mai fi obligat să vă autentificați. Dacă ați uitat parola puteți primi o parolă nouă pe email folosind opțiunea <b>'(trimitere parolă nouă)'</b>.</p>
<p>Deasemenea puteți schimba în orice moment adresa de email și parola introducînd pe rînd adresa și parola curente urmate de adresa nouă și/sau parola nouă.</p>
<p>Dacă administratorul calendarului a setat drepturi publice de vizualizare a calendarului, nu va mai fi nevoie să vă autentificați pentru a putea vizualiza evenimentele din calendar ci doar dacă doriți să introduceți alte evenimente sau să modificați unele dintre ele.</p>
<br></li>
<li id="co"><h4>Opțiuni calendar</h4>
<p>Selectarea butonului 'Opțiuni' determină deschiderea ferestrei 'Opțiuni calendar'. Aici veți putea selecta diverse opțiuni de afișare:</p>
<ul style="margin:0 20px">
<li><p>Modul de afișare calendar (lunar, anual, săptămînal, zilnic, evenimente viitoare sau evenimente modificate).</p></li>
<li><p>Un filtru de evenimente bazat pe utilizator. Pot fi afișate evenimentele corespunzătoare unui utilizator sau mai multor utilizatori simultan.</p></li>
<li><p>Un filtru de evenimente bazat pe categorie. Pot fi afișate evenimentele corespunzătoare unei singure categorii sau mai multor categorii simultan.</p></li>
<li><p>Limba folosită pentru afișare.</p></li>
</ul>
<p>Obs.: Afișarea meniului filtrare evenimente și a meniului selecție limbă poate fi activată/dezactivată în orice moment de către administrator.</p>
<p>După selectarea opțiunilor dorite în fereastra 'Opțiuni calendar' validarea acestora se face selectînd din nou butonul 'Opțiuni'.</p> 
<br></li>
<li id="cv"><h4>Moduri vizualizare calendar</h4>
<p>În toate modurile de vizualizare, deplasînd cursorul mausului deasupra evenimentului, putem obține informații suplimentare despre eveniment. Pentru evenimente private culoarea de fundal a ferestrei pop-up box va fi verde deschis. Mai mult, în modul <b>'Care urmează'</b>, URL-urile din cîmpul <b>Descriere eveniment</b> vor fi convertite automat în linkuri către siteurile corespunzătoare, acestea putînd fi astfel accesate direct.</p>
<p>Evenimentele dintr-o categorie pentru care administratorul a activat unul sau două cîmpuri de verificare/marcare vor avea două controale tip check-box afișate în fața titlului evenimentului, putînd fi folosite pentru a marca un eveniment ca "realizat". Avînd drepturi suficiente de acces veți putea activa/dezactiva aceste căsuțe printr-un simplu clic.</p>
<?php if ($privs > 1) { //if post rights ?>
<p>Funcție de drepturile de acces pe care le aveți:</p>
<ul style="margin:0 20px">
<li><p>În toate modurile, făcînd clic pe eveniment se va deschide fereastra <b>'Editare eveniment'</b> care permite vizualizarea, editarea sau ștergerea evenimentului.</p></li>
<li><p>În modurile <b>'Anual'</b> și <b>'Lunar'</b> un eveniment nou poate fi adăugat, la o anumită dată, făcînd clic pe linia din celulă unde este afișată ziua din lună.</p></li>
<li><p>În modurile <b>'Săptămînal'</b> și <b>'Zilnic'</b> fereastra <b>'Adăugare eveniment'</b> poate fi deschisă selectînd cu mausul o zonă oarecare. În acest mod, cîmpurile dată și timp vor fi automat completate funcție de zona selectată.</p></li>
</ul>
<p>În modul de afișare <b>'Modificări'</b> se poate introduce o dată de început, aici fiind afișate toate evenimentele adăugate sau modificate de la data specificată</p>
<p>Pentru a muta un eveniment la o nouă dată și/sau oră, deschideți fereastra <b>Editare eveniment</b> și modificați data/ora funcție de necesități. Evenimentele nu pot fi mutate ('trase') cu mausul la o nouă dată/oră.</p>
<?php } ?>
<br></li>
<li id="ts"><h4>Căautare Text</h4>
<p>Pentru căutarea unui text oarecare oriunde în calendar apăsați butonul cu simbolul unui triunghi din partea dreaptă a meniului. Se va deschide pagina de căutare, aici găsind toate detaliile necesare pentru utilizare.</p>
<br></li>
<?php if ($privs > 1) { //if post rights ?>
<li id="ae"><h4>Adăugare / Editare / Ștergere eveniment</h4>
<p>Adăugarea, editarea și ștergerea evenimentelor se face prin intermediul ferestrei Eveniment, care poate fi deschisă în diferite moduri după cum va fi explicat mai jos.</p>
<br><h5>a. Adăugare eveniment</h5>
<p>Evenimentele pot fi adăugate în mai multe moduri:</p>
<ul style="margin:0 20px">
<li><p>făcînd clic pe butonul <b>'Adăugare eveniment'</b> din bara de navigare</p></li>
<li><p>făcînd clic pe titlul celulei în modul de vizualizare <b>Lunar</b> sau <b>Anual</b> (metoda cea mai folosită)</p></li>
<li><p>prin operațiunea de 'drag' (tragere) efectuată asupra unei zone a calendarului în modul de vizualizare <b>Zilnic</b> sau <b>Săptămînal</b>.</p></li>
</ul>
<p>Folosirea oricărei metode va deschide fereastra <b>'Eveniment'</b> prin care pot fi introduse toate datele corespunzătoare evenimentului. Unele cîmpuri sînt deja predefinite funcție de metoda folosită pentru a adăuga evenimentul.</p>
<p>În această fereastră pot fi introduse: denumirea evenimentului, locația, categoria, precum și descrierea acestuia. Oricare eveniment poate fi definit ca <b>'Privat'</b> prin selectarea opțiunii corespunzătoare. Definind un eveniment ca <b>'Privat'</b> acesta va fi vizibil doar pentru dumneavoastră. Ca recomandare, titlul e bine să fie minimal, descrierea, locația, alte amănunte rămînînd să fie introduse în cîmpurile corespunzătoare. Trebuie remarcat că definirea cîmpurilor <b>'Locația'</b> și <b>'Categoria'</b> este opțională. Pentru lizibilitate, fiecare categorie poate avea o culoare particulară. Modificînd culoarea unei categorii din opțiunea <b>'Categorii'</b> din bara de navigare, se schimbă culoarea tuturor evenimentelor corespunzatoare, în toate modurile de afișare. </p>
<p>Tot în acest formular pot fi definite și orele de început și de sfîrșit corespunzătoare evenimentului. Dacă se selectează opțiunea <b>'Zilnic'</b> nu va fi afișat niciun timp. Data de final este opțională și poate fi utilizată pentru evenimentele care se întind pe mai multe zile. Datele și orele specifice evenimentului pot fi introduse manual sau selectate folosind butonul calendar. Se pot defini și evenimente recurente (care se repetă periodic) folosind un formular special accesibil prin butonul <b>'Modificare'</b>. Aici se poate defini direct modul de repetiție fie se poate specifica intervalul în care se dorește repetiția evenimentului. Dacă nu se specifică nicio dată de final, evenimentul se va repeta la nesfîrșit, situație care apare spre exemplu în cazul zilelor de naștere.</p>
<p>Suplimentar, tot din acest formular, se poate defini dacă și cînd vor fi trimise notificări privind evenimentul respectiv la una sau mai multe adrese de email. Avem opțiunea <b>'acum'</b> și/sau cu un număr definit de zile înainte de eveniment. Totodată va fi trimis un email de notificare și în ziua evenimentului. Pentru evenimentele recurente emailurile de notificare vor fi trimise cu un număr de zile (specificat aici) înainte și în fiecare zi în care evenimentul se repetă.</p>
<p>La final validarea/salvarea evenimentului se face folosind butonul <b>'Adăugare eveniment'</b>.</p>
<p>Dacă opțiunea 'Nu închide fereastra' este activată, apăsarea butonului <b>'Adăugare eveniment'</b> nu va închide fereastra de editare, în acest caz în fereastră fiind afișate trei butoane noi: Adăugare eveniment, Ștergere eveniment, respectiv utilizarea datelor curente pentru un alt eveniment.</p>
<br>
<h5>b. Editare / Ștergere eveniment</h5>
<p>În fiecare mod de vizualizare al calendarului, un eveniment poate fi vizualizat, editat sau șters. Făcînd clic pe eveniment se va deschide fereastra <b>'Editare eveniment'</b> care este similară ferestrei <b>'Eveniment'</b> descrisă mai sus, cu excepția celor trei butoane de la bază.</p>
<p>Funcție de drepturile de acces pe care le aveți, veți putea vizualiza/edita sau șterge evenimente (cele personale sau chiar cele ale altor utilizatori).</p>
<p>Cîmpurile din această fereastră au aceleași funcții cu cele descrise mai sus (fereastra <b>'Eveniment'</b>). Pentru o descriere a cîmpurilor vedeți descrierea făcută cîmpurilor din fereastra <b>'Adăugare eveniment'</b> de mai sus. ATENȚIE: butonul <b>Ștergere eveniment</b> determină ștergerea instantanee a evenimentului din calendar, <strong>fără a cere nicio cerere de confirmare suplimentară</strong>.</p>
<p>Ștergerea unui eveniment recurent va determina ștergerea tuturor instanțelor evenimentului, nu doar pentru o dată anume.</p>
<br></li>
<?php } ?>
<li id="lo"><h4>Deautentificare</h4>
<p>Pentru a vă deautentifica faceți clic pe opțiunea <b>Deautentificare</b> din bara de navigare. Dacă ieșiți din calendar fără a vă deautentifica este posibil ca la o noua deschidere a calendarului să nu vă mai fie cerută parola.</p>
<br></li>
<?php if ($privs == 9) { //administrator only ?>
<li id="ca"><h4>Administrare calendar</h4>
<p>- următoarele opțiuni necesită drepturi de administrator -</p>
<p>Cînd un utilizator se loghează ca administrator, suplimentar, în bara de navigare apare și opțiunea <b>Administrare</b>. Folosind această opțiune veți putea accesa diverse funcții specifice de administrare:</p>
<br>
<h5>a. Setări</h5>
<p>Această pagină afișează setările curente ale calendarului, permițînd și modificarea lor. Toate setările sînt explicate suficient de detaliat în fereastra <b>Detalii setări calendar</b>.</p>
<br>
<h5>b. Categorii</h5>
<p>Adăugarea de categorii folosind culori diferite - deși acest lucru nu este obligatoriu - va îmbunătăți într-un mod evident modul de afișare al evenimentelor în calendar. Exemple posibile de evenimente pot fi: 'vacanță', 'întîlnire', 'zi de naștere', 'important', etc.</p>
<p>Inițial, la instalarea calendarului, nu este definită decît o categorie - 'no cat'. Selectînd opțiunea <b>Categorii</b> va fi afișată lista de categorii curentă, existînd posibilitatea de a le modifica pe cele existente sau de a adăuga altele noi.</p>
<p>Cînd se adaugă/modifică diferite evenimente, categoria dorită se poate selecta direct din lista de categorii. Ordinea în care apar categoriile în listă depinde de valoarea setată în cîmpul <b>Secvență</b>. </p>
<p>Cînd se adaugă/modifică o categorie se poate seta și un mod de repetiție, toate evenimentele definite cu această categorie în calendar repetîndu-se conform setării. Opțiunea 'Public' poate fi folosită pentru a ascunde evenimentele aparținînd acestei categorii de utilizatorii care nu sînt autentificați și pentru a le exclude din fluxul RSS.</p>
<p>Tot aici pot fi activate una sau două căsuțe de marcare, calendarul afișînd în fața titlului evenimentului aceste două căsuțe pentru toate evenimentele din această categorie. Utilizatorul poate folosi aceste căsuțe spre exemplu pentru a marca evenimentul ca "aprobat" sau "rezolvat".</p>
<p>Cîmpurile <b>Culoare text</b> și <b>Fundal</b> definesc culorile utilizate la afișarea evenimentelor în calendar funcție de categoria de care aparțin.</p>
<p>Atunci cînd se șterge o categorie, evenimentele care au fost definite folosind această categorie, vor trece automat la categoria 'no cat'.</p>
<br>
<h5>c. Utilizatori</h5>
<p>Pagina <b>Utilizatori</b> permite administratorilor calendarului să gestioneze utilizatorii acestuia (adăugare / modificare / ștergere utilizatori). Aici găsim definite două zone principale: numele utilizatorului/adresa de email/parola și drepturile de acces. Drepturile de acces care pot fi definite sînt: vizualizare, editare evenimente proprii, editare toate evenimentele și administrator. Este important ca adresa de email să fie corectă pentru a putea primi notificări prin email privind diferite evenimente din calendar sau pentru a recupera parola pierdută.</p>
<p>Prin intermediul paginii <b>Setări</b> administratorul poate permite autoînregistrarea utilizatorilor (opțiunea <b>'autoînregistrare utilizatori'</b>) și seta drepturile de acces pe care le vor primi aceștia în mod automat. Dacă opțiunea este activată utilizatorii se pot înregistra direct folosind interfața browser-ului.</p> 
<p>În cazul în care administratorul calendarului nu a setat modul <b>'acces public'</b>, utilizatorii vor trebui să se autentifice (prin nume și parolă) pentru a putea accesa și vizualiza calendarul.</p>
<p>Suplimentar, pentru fiecare utilizator, individual, se poate defini limba implicită pentru interfața web a calendarului. Dacă nu se specifică nicio limbă în profilul utilizatorului, pentru afișare va fi folosită limba implicită a calendarului.</p>
<br>
<h5>d. Baza de Date</h5>
<p>Pagina <b>'Baza de Date'</b> permite administratorilor sa execute următoarele funcții:</p>
<ul>
<li><b>Verificare și Reparare</b>, pentru a verifica și corecta eventualele erori</li>
<li><b>Compactare Bază de Date</b>, pentru a optimiza baza prin eliminarea înregistrările nule sau marcate pentru ștergere</li>
<li><b>Back-up Bază de Date</b>, pentru a crea o copie de rezervă a bazei de date, utilă pentru refacerea acesteia în cazuri extreme (pierderea bazei, mutatea calendarului pe alt server, etc.)</li>
</ul>
<p>Prima funcție, <b>Verificare și Reparare Bază</b>, e recomandabil să fie utilizată doar dacă sînt observate disfuncționalități în utilizarea calendarului. A doua funcție, <b>Compactare Bază de Date</b>, poate fi utilizată periodic pentru optimizarea bazei (este suficient în mod normal dacă o folosiți o dată pe an). Similar, funcția <b>Back-up Bază de Date</b>, poate fi folosită periodic pentru a crea copii de siguranță ale bazei de date, uzual ori de cîte ori sînt operate modificări majore în calendar.</p>
<br>
<h5>e. Import CSV</h5>
<p>Această opțiune poate fi utilizată pentru a importa evenimente în calendar din fișiere de tip <b>CVS - Comma Separated Values</b> (evenimente exportate spre exemplu din aplicații gen Microsoft Outlook). Mai multe informații despre utilizarea acestei opțiuni pot fi găsite în pagina <b>'Import CSV'</b>.</p>
<br>
<h5>f. Import iCal</h5>
<p>Această opțiune poate fi utilizată pentru a importa evenimente în calendar din fișiere de tip <b>iCal</b> (extensie <b>.ics</b>). Pot fi importate doar evenimentele compatibile cu acest calendar. Alte cîmpuri cum ar fi cîmpurile de tipul: 'De Făcut', 'Jurnal', 'Liber / Ocupat', 'Fus Orar' și 'Alarme' vor fi ignorate. Mai multe informații despre utilizarea acestei opțiuni pot fi găsite în pagina <b>'Import iCal'</b>.</p>
<br>
<h5>g. Export iCal</h5>
<p>Această opțiune poate fi utilizată pentru a exporta evenimente din calendar în fișiere de tip <b>iCal</b> (extensie <b>.ics</b>). Mai multe informații despre utilizarea acestei opțiuni pot fi găsite în pagina <b>'Export iCal'</b>.</p>
<br></li>
<?php } ?>
<li id="al"><h4>Despre LuxCal</h4>
<p>Produs de: <b>Roel Buining</b>&nbsp;&nbsp;&nbsp;&nbsp;Website și forum: <b><a href="http://www.luxsoft.eu/" target="_blank">www.luxsoft.eu/</a></b></p>
<p>LuxCal este un produs gratuit și poate fi distribuit cu respectarea termenilor specificați în <b><a href="http://www.luxsoft.eu/index.php?pge=gnugpl" target="_blank">GNU General Public License</a></b>.</p>
<br></li>
</ol>
</div>