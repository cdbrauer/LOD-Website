<?php
/*
= LuxCal event calendar on-line user guide =

La traduction française a été réalisée par Fabiou. Mis à jour et complété par Gérard.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ug language file version
define("LUG","3.2.3");

?>
<div style="margin:0 20px">
<div class="floatR">
<img src="lang/ug-layout.png" alt="LuxCal page layout"><br>
  <span style="color: #FF0000; font-weight: bold">a</span>&nbsp;: barre du titre&nbsp;;&nbsp;&nbsp;<span style="color: #FF0000; font-weight: bold">b</span>&nbsp;: barre de navigation&nbsp;;<br><span style="color: #FF0000; font-weight: bold">c</span>&nbsp;: calendrier&nbsp;;&nbsp;&nbsp;<span style="color: #FF0000; font-weight: bold">d</span>&nbsp;: jour </div>
<br>
<h4>Table des Matières</h4>
<ol>
<li><p><a href="#ov">Vue d’ensemble</a></p></li>
<li><p><a href="#li">Connexion</a></p></li>
<li><p><a href="#co">Options du calendrier</a></p></li>
<li><p><a href="#cv">Vues du calendrier</a></p></li>
<li><p><a href="#ts">Recherche de texte</a></p></li>
<?php if ($privs > 1) { //if post rights ?>
<li><p><a href="#ae">Ajouter/Éditer/Supprimer un événement</a></p></li>
<?php } ?>
<li><p><a href="#lo">Déconnexion</a></p></li>
<?php if ($privs == 9) { //if administrator ?>
<li><p><a href="#ca">Administration du calendrier</a></p></li>
<?php } ?>
<li><p><a href="#al">À propos de LuxCal</a></p></li>
</ol>
</div>
<div class="help">
<br>
<ol>
<li id="ov"><h4>Vue d’ensemble</h4>
<p>Le calendrier LuxCal fonctionne sur un serveur web et peut être consulté et administré par l’intermédiaire de votre navigateur web.</p>
<p>La barre supérieure montre le titre de votre calendrier, la date du jour et le nom de l’utilisateur en cours.
	La barre de navigation contient plusieurs menus déroulants et des liens permettant de naviguer, de se connecter/déconnecter, d’ajouter un nouvel événement, etc. Les menus et liens sont activés en fonction des droits d’accès que possède l’utilisateur. En-dessous de la barre de navigation, les diverses vues possibles du calendrier seront affichées.</p>
<br></li>
<li id="li"><h4>Connexion</h4>
<p>Si l’administrateur a donné la possibilité à l’utilisateur public de voir le calendrier, il n’est pas nécessaire de 
se connecter pour le consulter.</p>
<p>Pour ouvrir une session, cliquer sur “Connexion” à l’extrême droite de la barre de navigation. Entrez 
soit votre nom d’utilisateur, soit votre adresse email, et le mot de passe reçu de votre administrateur et cliquez sur le bouton 
“Connexion”. Si vous cocher la case “Connexion auto” avant
	de cliquer sur le bouton “Connexion”, à la prochaine visite au calendrier, vous serez automatiquement connecté.
	Si vous avez oublié votre mot de passe, saisissez votre nom d’utilisateur ou votre adresse e-mail puis cliquez sur le bouton “Envoyer nouveau mot de passe”. Recommencer la connexion avec le nouveau mot de passe que vous aurez reçu à votre adresse email.</p>
<p>Vous pouvez changer votre nom d’utilisateur, votre adresse email ou votre mot de passe en cliquant sur 
“Modifier mes données” puis en complétant les nouveaux champs.</p>
<p>Si vous n’êtes pas encore inscrit et que l’administrateur du calendrier a 
permis l’auto-inscription, vous pouvez cliquer sur ”Inscription” sur la page de 
connexion&nbsp;; sinon, l’administrateur du calendrier peut vous créer un compte.</p>
<br></li>
<li id="co"><h4>Options du calendrier</h4>
<p>Si vous cliquez sur le bouton “Options” de la barre de navigation, vous ouvrez le menu Options. Dans ce menu, vous pouvez sélectionner les options suivantes en cochant les cases&nbsp;:</p>
<ul style="margin:0 20px">
<li><p>La vue du Calendrier (Année, Mois, Semaine, Jour, A venir ou Modifications).</p></li>
<li><p>Un filtre basé sur les utilisateurs. Vous pouvez afficher des événements créés par un ou plusieurs utilisateurs.</p></li>
<li><p>Un filtre basé sur la Catégorie des événements. Vous pouvez afficher les événements liés à une ou à 
plusieurs catégories.</p></li>
<li><p>La langue de l’utilisateur.</p></li>
</ul>
<p>Note&nbsp;: L’affichage des filtres et celui de la sélection de la langue de l’utilisateur ont pu être désactivés par l’administrateur.</p>
<p>Après avoir fait vos choix dans le menu Options, cliquez sur le bouton 
“Terminé” de la barre de navigation pour valider.</p>
<br></li>
<li id="cv"><h4>Vues du calendrier</h4>
<p>Pour toutes les vues, le détail de chaque événement apparaît dans une info-bulle quand le curseur de la souris survole le titre de l’événement. Pour les événements privés, la couleur de fond de l’info-bulle sera vert clair&nbsp;; pour les événements répétés, le bord de l’info-bulle sera rouge. Si vous avez écrit un lien URL dans le champ 
“Description”, le lien sera actif dans chaque vue. Il vous suffira de cliquer dessus pour afficher le site web dans une autre fenêtre.</p>
<p>Dans toutes les vues, la journée d’aujourd’hui aura une bordure bleue et, si une autre date a été choisie avec le sélecteur de dates dans la barre de navigation, cette date aura une bordure rouge pour les vues Mois et Année.</p>
<p>Les événements d’une catégorie pour laquelle l’administrateur aura activé la case à cocher auront la case à cocher affichée devant le titre de l’événement. Cela peut 
servir à marquer des événements en tant que 
“terminés”, par exemple. Si vous avez les droits suffisants, vous pouvez cocher 
ou décocher cette case.</p>
<?php if ($privs > 1) { //if post rights ?>
<p>Si vous avez les droits d’accès requis&nbsp;:</p>
<ul style="margin:0 20px">
<li><p>Cliquer sur un événement dans n’importe quelle vue ouvrira une fenêtre vous permettant d’éditer, de supprimer ou de dupliquer un événement.</p></li>
<li><p>Dans les vues “Année” et “Mois”, on crée un nouvel événement en cliquant en haut de la case de la date concernée (la ligne où le jour du mois est affiché).</p></li>
<li><p>Dans les vues “Semaine” et “Jour”, on crée un nouvel événement en tirant le curseur de la souris sur une certaine période. Les date et heures de la période choisie seront automatiquement remplies.</p></li>
</ul>
<p>Dans la vue “Modifications”, une date de début peut être spécifiée. Une liste 
sera affichée, avec tous les événements ajoutés, modifiés ou effacés depuis la 
date de début spécifiée.</p>
<p>Pour déplacer un événement dans une nouvelle date ou heure, il faut éditer l’événement et changer la date de début et/ou de fin et/ou l’heure dans le formulaire.
 Il n’est pas possible de déplacer les événements en utilisant la souris.</p>
<?php } ?>
<br></li>
<li id="ts"><h4>Recherche de texte</h4>
<p>Lorsque vous cliquez sur le bouton “triangle” du côté droit de la barre de navigation, la page de recherche de texte s’ouvre. Sur cette page, vous pourrez écrire le texte à rechercher dans le calendrier. Cette page contient également les instructions détaillées pour effectuer la recherche.</p>
<br></li>
<?php if ($privs > 1) { //if post rights ?>
<li id="ae"><h4>Ajouter / Éditer / Supprimer un événement</h4>
<p>Ajouter, éditer, et supprimer un événement se fait dans le fenêtre 
“Événements”, qu’on peut ouvrir de plusieurs manières, comme expliqué ci-dessous.</p>
<br><h5>a. <a name="AddEvent"></a>Ajouter un événement</h5>
<p>On peut ajouter un événement de différentes manières&nbsp;:</p>
<ul style="margin:0 20px">
<li><p>En cliquant sur le bouton “Ajouter” de la barre de navigation</p></li>
<li><p>En cliquant en haut de la case du jour concerné, dans la vue “Mois” ou la vue 
“Année” (méthode le plus souvent employée)</p></li>
<li><p>En tirant le curseur de la souris sur une partie de la journée concernée, dans la vue “Semaine” ou “Jour”</p></li>
</ul>
<p>Chacune des méthode affichera une fenêtre permettant de saisir les données de l’événement. Certains champs seront pré-remplis, selon la méthode utilisée pour appeler la fenêtre.<br>&nbsp;</p>
<h6>Champs Titre, Lieu, Catégorie, Description et Privé</h6>
<p>Dans la 1<sup>ère</sup> partie du formulaire, vous pouvez saisir le titre, le lieu du rendez-vous, choisir la catégorie, 
taper une description et cocher
 l’option “Privé” si nécessaire. Il est conseillé d’écrire un titre court et d’utiliser le champ 
“Description” pour détailler l’événement.
	Vous pouvez utiliser également le champ “Description” pour entrer un lien URL. 
Ces liens seront convertis automatiquement en hyperliens qui pourront être 
sélectionnés dans les différentes vues et les notifications par email. Les champs 
“Lieu” et “Catégorie” sont facultatifs.
	Le choix d’une catégorie influence la couleur du texte et du fond de l’événement et son affichage dans les différentes vues.</p>
<p>Si vous cochez la case “Privé”, vous serez le seul utilisateur à voir cet événement.</p>
<h6>Champs Dates, Heures et Périodicité</h6>
<p>Dans la 2<sup>ème</sup> partie du formulaire, vous pouvez saisir les dates et les heures. Si l’événement 
concerne toute la journée, cochez la case du champ 
	“Journée entière”&nbsp;; la possibilité de saisir les heures disparaît et il n’y aura pas d’heures affichées dans les différentes vues.
	La date de fin est facultative et peut s’utiliser pour les événements se déroulant sur plusieurs jours. Les dates et les heures peuvent être
	saisies manuellement ou par l’intermédiaire des boutons se trouvant à côté du champ. Vous pouvez répéter l’événement 
dans une boîte de dialogue séparée 
	qui s’ouvre quand on clique sur le bouton “Modifier”. Suivant le choix effectué, l’événement sera répété en tenant compte de la date de début et de la date de fin.
	Si aucune date de fin n’est spécifiée, l’événement sera répété à l’infini, ce qui peut être utile pour les anniversaires.</p>
<h6>Champs Envoi Rappel</h6>
<p>La 3<sup>ème</sup> partie du formulaire permet d’envoyer le rappel d’un événement à une ou plusieurs adresses email. On peut envoyer un email “Maintenant” si la case appropriée est cochée, ou tant de jours avant le début de l’événement. Dans ce dernier cas, un email de rappel sera aussi envoyé à la date de l’événement. Si aucun nombre de jour n’est spécifié, aucun email ne sera envoyé. Si le nombre de jours est “0”, un rappel sera envoyé le jour de l’événement seulement. Pour les événements répétés, un rappel sera envoyé le nombre de jours spécifié avant chaque occurrence de l’événement, en plus du jour de l’événement.</p>
<p>La liste des emails peut contenir des adresses email et/ou le nom d’un fichier prédéfini (sans l’extension) contenant une liste d’adresses&nbsp;; adresses et nom de fichier sont séparés par des points-virgules. La liste prédéfinie doit être un fichier texte ayant l’extension “.txt” placé dans le dossier “emlists/” avec une adresses email sur chaque ligne. Le nom de fichier ne peut contenir le caractère “@”.</p>
<p>Après avoir rempli le formulaire, cliquer sur le bouton “Ajouter” ou “Ajouter et fermer” pour l’enregistrer dans le calendrier.</p>
<br>
<h5>b. Éditer / Supprimer un événement</h5>
<p>Dans chacune des vues du Calendtier, on peut cliquer sur un événement pour ouvrir une fenêtre contenant tous les détails de l’événement. Un utilisateur avec des droits suffisants peut éditer, dupliquer ou supprimer l’événement.</p>
<p>Selon vos droits d’accès, vous pouvez voir tous les événements, voir/éditer/supprimer vos propres événements ou voir/éditer/supprimer les événements des autres utilisateurs.</p>
<p>Voir la description des champs sous le titre <a href="#AddEvent"><u>Ajouter un événement</u></a> ci-dessus.</p>
<p>Dans le fenêtre d’édition d’événement, les boutons du dessous permettent d’enregistrer l’événement, de l’enregister comme nouvel événement (dupliquer l’événement à une autre date, par exemple) ou de supprimer l’événement.</p>
<p>Pour supprimer un événement du calendrier, cliquer sur le bouton “Supprimer”. <strong>ATTENTION&nbsp;: Il n’y aura pas de demande de confirmation
 et l’événement sera supprimé définitivement</strong>.</p>
<p>Si vous supprimez un événement répété, toutes ses occurrences seront également supprimées et pas uniquement la date sélectionnée.</p>
<br></li>
<?php } ?>
<li id="lo"><h4>Déconnexion</h4>
<p>Pour vous déconnecter, cliquer sur “Déconnexion” dans la barre de navigation.</p>
<br></li>
<?php if ($privs == 9) { //administrator only ?>
<li id="ca"><h4>Administration du calendrier</h4>
<p><strong> — Les fonctions suivantes exigent d’avoir les droits d’administrateur. 
—</strong></p>
<p>Lorsqu’un utilisateur ouvre une session avec les droits d’administrateur, le menu déroulant 
“Administration” apparaît du côté droit dans la barre de navigation.
 Par l’intermédiaire de ce menu, les fonctions suivantes seront disponibles&nbsp;:</p>
<br>
<h5>a. Paramètres</h5>
<p>Cette fonction vous permet d’afficher les paramètres utilisés par le calendrier. Chaque paramètre 
affiche une explication quand on survole son texte avec le curseur de la souris.
 Après avoir effectué une modification d’un ou plusieurs paramètres, cliquer sur le bouton 
“Enregistrer les paramètres” pour les enregistrer.</p>
<br>
<h5>b. Catégories</h5>
<p>Cette fonction vous permet de gérer les types de catégorie affectés à chaque événement. Elle permet également d’ajouter, d’éditer et de supprimer les catégories.</p>
<p>Vous pouvez donner des couleurs différentes aux catégories créées mais ce n’est pas obligatoire. Cela permet de donner une meilleure vue d’ensemble au calendrier.
 Les catégories peuvent être par exemple&nbsp;: rendez-vous, anniversaire, etc.</p>
<p>A l’installation, une seule catégorie est créée avec comme nom “Sans catégorie”.</p>
<p>Vous pouvez définir l’ordre d’affichage des différentes catégories en complétant le champ “Ordre d’affichage”.</p>
<p>Les couleurs définies pour le texte et le fond des différentes catégories seront utilisées dans le calendrier pour 
afficher les événements appartenant à ces catégories.</p>
<p>Lorsque vous ajoutez/éditez une catégorie, une Périodicité peut être choisie&nbsp;; les événements de cette catégorie seront automatiquement répétés comme 
on l’a spécifié. On peut utiliser la case “Public” pour cacher des événements 
à l’utilisateur public et exclure des événements appartenant à la catégorie du flux RSS.</p>
<p>Vous pouvez également activer une ou deux cases à cocher. La ou les cases à cocher seront affichées au début du titre de tous les événements de cette catégorie. L’utilisateur peut utiliser ces cases à cocher pour marquer des événements devant être par exemple&nbsp;: 
“approuvés” ou “terminés”.</p>
<p>Lorsque vous supprimez une catégorie, les événements qui y étaient liés seront associés à la catégorie “Sans catégorie”.</p>
<br>
<h5>c. Utilisateurs</h5>
<p>Cette fonction vous permet de gérer les utilisateurs. Vous pouvez ajouter, éditer ou supprimer des utilisateurs et attribuer ou non des droits d’accès
 pour certaines fonctions. Lorsqu’on ajoute un nouvel utilisateur, il y a deux parties distinctes 
du formulaire à remplir. Dans la première partie, on saisit le nom de l’utilisateur, son adresse email et son mot de passe&nbsp;; dans la deuxième partie, on active les droits d’accès qu’il possèdera.
 Les droits d’accès possibles sont&nbsp;: Voir — Ajouter/Éditer/supprimer un événement 
— et Admin. Il est important d’employer une adresse email valide
 afin de permettre à l’utilisateur de recevoir les notifications d’événements.</p>
<p>Dans la page des paramètres, l’administrateur peut activer l’auto-inscription des utilisateurs et définir leurs droits d’accès au calendrier. 
	Quand l’auto-inscription est permise, les utilisateurs peuvent s’inscrire 
eux-mêmes au calendrier par l’intermédiaire du navigateur.</p> 
<p>À moins que l’Administrateur n’ait donné la possibilité à l’utilisateur public de voir le calendrier, l’utilisateur doit ouvrir une session en utilisant
 son nom d’utilisateur ou son adresse email, et son mot de passe pour consulter le calendrier. Selon le type d’utilisateur, les droits d’accès aux fonctions seront différents.</p>
<p>Il est possible de spécifier la langue à utiliser pour chaque utilisateur. Si aucune langue n’est spécifiée, la langue par défaut du calendrier sera utilisée.</p>
<br>
<h5>d. Base de données</h5>
<p>Cette page vous donne accès aux différentes fonctions de gestion de la base de données&nbsp;:</p>
<ul>
<li>Vérifier et réparer la base de données, pour trouver et réparer les incohérences dans les tables de la base de données.</li>
<li>Compacter la base de données, pour libérer l’espace inutilisé et éviter la surcharge. Cette fonction enlèvera définitivement dans la base de données les événements supprimés depuis plus de 30 jours et libérera l’espace qu’ils occupaient.</li>
<li>Sauvegarder la base de données&nbsp;: créer un fichier de sauvegarde de la structure des tables et de leurs contenus, qui servira à recréer la base de données.</li>
</ul>
<p>La première fonction “Vérifier et réparer la base de données” doit seulement être lancée lorsque des incohérences apparaissent dans le calendrier. La deuxième fonction 
“Compacter la base de données” doit être lancée une fois par an pour nettoyer la base de données, et la troisième fonction 
“Sauvegarde de la base de données”, doit être lancée régulièrement en fonction de l’utilisation du calendrier.</p>
<br>
<h5>e. Import Fichier CSV</h5>
<p>Cette fonction vous permet d’importer dans votre calendrier LuxCal des événements exportés au format CSV à partir d’un autre calendrier, comme par exemple MS Outlook.
 Vous trouverez toutes les instructions pour réaliser cet import après avoir cliqué sur la fonction.</p>
<br>
<h5>f. Import Fichier iCal</h5>
<p>Cette fonction vous permet d’importer dans votre calendrier LuxCal des événements exportés au format iCalendar 
(extension fichier .ics) à partir d’un autre calendrier. Vous trouverez toutes les instructions pour réaliser cet import après 
avoir cliqué sur la fonction Import iCal. Seul les événements compatibles avec le calendrier LuxCal seront importés. 
Les autres composants (À faire, Journal, Libre / Occupé, Alarme et zone horaire) seront ignorés.</p>
<br>
<h5>g. Export Fichier iCal</h5>
<p>Cette fonction vous permet d’exporter à partir de votre calendrier LuxCal des événements au format iCalendar 
(extension fichier .ics). Vous trouverez toutes les instructions pour réaliser cet export après avoir cliqué sur la fonction Export iCal.</p>
<br></li>
<?php } ?>
<li id="al"><h4>A propos de LuxCal</h4>
<p>Produit par&nbsp;: <b>Roel Buining</b>&nbsp;&nbsp;&nbsp;&nbsp;Site Web et forum&nbsp;: <b><a href="http://www.luxsoft.eu/" target="_blank">www.luxsoft.eu/</a></b></p>
<p>LuxCal est un logiciel libre qui peut être redistribué et/ou modifié en respectant les termes du <b><a href="http://www.luxsoft.eu/index.php?pge=gnugpl" target="_blank">GNU General Public License</a></b>.</p>
<br></li>
</ol>
</div>