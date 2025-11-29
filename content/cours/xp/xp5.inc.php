<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									                |
	+---------------------------------------------------------------+
	| xpcours5.php					v 1.0   16/04/07	15:58:00	            |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 5											                    |
  +---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '5', '6', '4');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Créer un raccourci sur le bureau</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Configurer les options d'affichage</a>
		<ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Résolution d'écran </a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Arrière-plan</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Apparence</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">écran de veille </a></li>
		  </ol></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Configurer la Barre des tâches et le menu démarrer</a>
		<ol class="alpha">
				<li><a href="#chap31" name="tdmchap31" id="tdmchap31">Afficher la barre de lancement rapide</a></li>
				<li><a href="#chap32" name="tdmchap32" id="tdmchap32">Masquer la Barre des tâches</a></li>
				<li><a href="#chap33" name="tdmchap33" id="tdmchap33">Masquer les icônes inactives</a></li>
				<li><a href="#chap34" name="tdmchap34" id="tdmchap34">Personnaliser le menu Démarrer</a></li>
		  </ol></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Configurer les options d'accessibilité</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Configurer les options régionales et linguistiques</a>
		<ol class="alpha">
				<li><a href="#chap51" name="tdmchap51" id="tdmchap51">Modifier le séparateur décimal</a></li>
				<li><a href="#chap52" name="tdmchap52" id="tdmchap52">Modifier le symbole monétaire</a></li>
				<li><a href="#chap53" name="tdmchap53" id="tdmchap53">Ajouter une langue suppplémentaire</a></li>
				<li><a href="#chap54" name="tdmchap54" id="tdmchap54">Modifier la touche de basculement minuscule-majuscule</a></li>
		  </ol></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Personnaliser les outils d'administration</a>
		<ol class="alpha">
				<li><a href="#chap61" name="tdmchap61" id="tdmchap61">Ajouter les outils d'administration </a></li>
				<li><a href="#chap62" name="tdmchap62" id="tdmchap62">Créer une console MMC </a></li>
				<li><a href="#chap63" name="tdmchap63" id="tdmchap63">Personnaliser une console MMC</a></li>
				<li><a href="#chap64" name="tdmchap64" id="tdmchap64">Afficher des commandes personnalisées</a></li>
				<li><a href="#chap65" name="tdmchap65" id="tdmchap65">Bloquer la modification d'une console</a></li>
		  </ol></li>
	</ol>
	</aside>
  


<h2>Durée :</h2>
	<p>1 heures 30</p>
<h2>Objectifs</h2>
	<ul>
	  <li>Personnaliser les options d'affichage </li>
      <li>Configurer la <strong>Barre des tâches</strong> et le menu <strong>Démarrer</strong> </li>
	  <li>Rendre le système accessible aux handicapés </li>
	  <li>Créer et personnaliser une console MMC   </li>
	</ul>
<h2>Prérequis</h2>
<h2>Matériel à prévoir</h2>
	<p>Un ordinateur configuré avec Windows XP.</p>
<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Créer un raccourci sur le bureau</a></h1>
	<p>Pour gagner du temps, il est possible de créer des raccourcis vers des applications, vers des dossiers ou des fichiers que l'on utilise souvent.</p>
	<p>Dans le cadre de cet exercice, nous allons créer des raccourcis sur le bureau pour l'application <strong>Notepad</strong> et la <strong>calculatrice</strong> en utilisant plusieurs méthodes.</p>
	<ul>
		<li>Cliquez avec le bouton droit sur le bureau puis sélectionnez <strong>Nouveau &gt; Raccourci</strong></li>
	    <li>Saisissez <strong>&permil;systemroot&permil;\notepad.exe</strong>. </li>
	</ul>
	<p><img src="../img/xp/xp5/AssistantCreationRaccourci1.png" alt="Assistant création de raccourci 1" />  </p>
	<ul>
	  	<li>Cliquez sur <strong>Suivant</strong>, laissez le nom par défaut et fermez l'assistant. </li>
  	</ul>
	<p>Pour créer le raccourci vers la calculatrice procédez de la manière suivante :</p>
	<ul>
	  	<li>Parcourez <strong>Démarrer &gt; Tous les programmes &gt; Accessoires</strong></li>
  	    <li>Cliquez avec le bouton droit sur <strong>Calculatrice</strong></li>
	    <li>Cliquez sur <strong>Envoyer vers &gt; Bureau (créer un raccourci)</strong></li>
	</ul>
	
<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Configurer les options d&rsquo;affichage</a></h1>
<p>Cet exercice a pour but de vous montrer comment configurer votre bureau (en particulier la résolution d'écran, l'arrière plan et l'écran de veille). </p>
<h2><a href="#tdmchap21" name="chap21" id="chap21">2.a-Résolution d'écran</a></h2>
<ul>
  <li>Cliquez avec le bouton droit sur le bureau et sélectionnez <strong>Propriétés</strong>.</li>
  <li>Cliquez sur l'onglet <strong>Paramètres</strong>. </li>
  <li>Déplacez le curseur jusqu'à la résolution désirée (1280 * 1024 par exemple).</li>
</ul>
<p><img src="../img/xp/xp5/AffichageParametres.png" alt="Affichage paramètres" /></p>

<h2><a href="#tdmchap22" name="chap22" id="chap22">2.b-Arrière-plan</a></h2>
<p>Pour modifier l'arrière-plan :</p>
<ul>
  <li>Cliquez sur l'onglet <strong>Bureau</strong> et choisissez une image dans la section <strong>Arrière-plan</strong> ou cliquez sur <strong>Parcourir</strong> pour en recherche une sur un autre espace de stockage. </li>
</ul>
<img src="../img/xp/xp5/AffichageBureau1.png" alt="Affichage Bureau" />
<p>Pour afficher votre <strong>Poste de travail</strong> et le dossier <strong>Mes documents</strong> sur votre bureau :</p>
<ul>
  <li>Cliquez sur le bouton <strong>Personnalisation du Bureau</strong>.</li>
  <li>Cochez les cases adéquates.</li>
</ul>
<p><img src="../img/xp/xp5/AffichageBureau2.png" alt="Personnalisation du bureau" /></p>
<h2><a href="#tdmchap23" name="chap23" id="chap23">2.c-Apparence</a></h2>
<p>Si vous voulez modifier les couleurs de votre bureau, procédez de la manière suivante :</p>
<ul>
  <li>Cliquez sur l'onglet <strong>Apparences</strong>  dans la fenêtre des <strong>Propriétés d'Affichage</strong>.</li>
  <li>Sélectionnez <strong>Vert olive</strong> dans la section <strong>Modèle de couleurs</strong>.</li>
</ul>
<img src="../img/xp/xp5/AffichageApparence1.png" alt="Affichage Apparences 1" />
<p>Vous pouvez également personnaliser un élément en particulier. Par exemple pour la barre de titre :</p>
<ul>
  <li>Cliquez sur le bouton <strong>Avancé</strong> et sélectionnez <strong>Barre de titre active</strong> dans la liste déroulante <strong>élément</strong>.</li>
  <li>Modifiez la configuration en sélectionnant : Police <strong>Verdana</strong>, Taille <strong>12</strong>, Couleur <strong>Prune</strong>. </li>
</ul>
<img src="../img/xp/xp5/AffichageApparence2.png" alt="Affichage Apparences 2" />
<h2><a href="#tdmchap24" name="chap24" id="chap24">2.d-écran de veille</a></h2>
<p>pour modifier l'écran de veille :</p>
<ul>
  <li>Sélectionnez l'onglet <strong>écran de veille</strong> dans la fenêtre des <strong>Propriétés d'Affichage</strong>.</li>
  <li>Sélectionnez <strong>Texte d�filant</strong> dans la liste déroulante</li>
  <li>Modifiez le délai à <strong>8 minutes</strong> </li>
 </ul>
 <img src="../img/xp/xp5/AffichageEcranVeille1.png" alt="Affichage écran de veille 1" />
 <ul>
  <li>Cliquez sur <strong>Paramètres</strong>.</li>
  <li>Saisissez <strong>Absence momentanée</strong>... et validez. </li>
</ul>
	<img src="../img/xp/xp5/AffichageEcranVeille2.png" alt="Affichage écran de veille 2" />
	
<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Configurer la Barre des tâches et le menu Démarrer</a></h1>
<h2><a href="#tdmchap31" name="chap31" id="chap31">3.a-Afficher la Barre de lancement rapide</a></h2>
<p>Il est très pratique d'avoir les raccourcis les plus fréquemment utilisé dans la barre des tâches.</p>
<p>Pour ce faire, il vous faut afficher la <strong>Barre de lancement rapide</strong>.</p>
<ul>
  <li>Cliquez avec le bouton droit sur la <strong>Barre des tâches</strong>, puis sur <strong>Barre d'outils</strong> et sélectionnez <strong>Lancement rapide</strong>.</li>
  <li>Vérifiez que l'option <strong>Verrouiller la Barre des tâches</strong> est décochée. </li>
</ul>
<p class="notice remarque">Vous pouvez également passer par le <strong>Panneau de configuration &gt; Apparence et thèmes &gt; Barre des tâches et menu Démarrer</strong>.</p>
	<ul>
		<li>Glissez les raccourcis créés précédemment dans la barre de lancement rapide.</li>
	</ul>

<h2><a href="#tdmchap32" name="chap32" id="chap32">3.b-Masquer la Barre des tâches</a></h2>
<p>Pour augmenter la taille disponible sur votre bureau, vous pouvez cacher la <strong>Barre des tâches</strong>.
  <ul>
	  <li>Cliquez avec le bouton droit sur le menu <strong>Démarrer</strong>, puis sélectionnez <strong>Propriétés</strong>. </li>
	    <li>Cliquez sur l'onglet <strong>Barre des tâches</strong> et cochez la case <strong>Masquer automatiquement la Barre des tâches</strong>. </li>
	    <li>Décochez l'option <strong>Grouper les boutons similaires de la Barre des tâches</strong>. </li>
  </ul>
 
<p class="notice remarque">Cette dernière option peut s'avérer pratique si l'on change fréquement de fenêtre d'application. </p>

<img src="../img/xp/xp5/BarreMenuTache2.png" alt="Propriétés de la Barre des tâches 2" />

<p class="notice remarque">Pour <strong>déplacer la Barre des tâches</strong>,  cliquez dans la barre et tout en restant appuyé, glissez la souris vers un des bords de l'écran.</p>

<h2><a href="#tdmchap33" name="chap33" id="chap33">3.c-Masquer les icônes inactives</a></h2>
<p>Dans un souci d'augmenter au maximum l'espace d'affichage dans la barre des tâches, vous pouvez masquer les icônes des applications ne servant pas dans la partie système de la barre des tâches (à droite à côté de l'horloge). </p>
<ul>
  <li>Cochez l'option <strong>Masquer les icônes inactives</strong> dans la fenêtre des propriétés. </li>
  <li>Cliquez sur <strong>Personnaliser</strong>, sélectionnez une des applications et dans la partie comportement, modifiez au besoin l'option. </li>
</ul>
<img src="../img/xp/xp5/BarreMenuTache3.png" alt="Propriétés de la Barre des tâches 3" />

<h2><a href="#tdmchap34" name="chap34" id="chap34">3.d-Personnaliser le Menu Démarrer</a></h2>
<p>Nous pouvons configurer le menu Démarrer pour que les nouveaux programmes installés apparaissent en surbrillance ou que certains dossiers comme Mes documents apparaissent en tant que menu. </p>
<ul>
  <li>Ouvrez les <strong>propriétés</strong> du menu <strong>Démarrer</strong>.</li>
  <li>Cliquez sur le bouton <strong>Personnaliser</strong>.</li>
  <li>Sélectionnez l'option <strong>Petites icônes</strong>. </li>
  <li>Augmentez le nombre de programmes dans la zone de <strong>Programmes</strong> à <strong>10</strong>. </li>
</ul>
<img src="../img/xp/xp5/BarreMenuTache4.png" alt="Propriétés du menu Démarrer 1" />
<ul>
  <li>Cliquez sur l'onglet <strong>Avancé</strong>.</li>
  <li>Faites défiler les éléments dans la zone <strong>éléments du menu Démarrer</strong> jusqu'à l'élément <strong>Mes documents</strong>.</li>
  <li>Activez l'option <strong>Affichez en tant que menu</strong> pour l'élément <strong>Mes documents</strong>. </li>
</ul>
<img src="../img/xp/xp5/BarreMenuTache5.png" alt="Propriétés du menu Démarrer 2" />

<h1><a href="#tdmchap4" name="chap4" id="chap4">4-Configurer les options d&rsquo;accessibilité</a></h1>
<p>Pour permettre à une personne malvoyante ou ayant des difficultés gestuelles d'utiliser au mieux Windows XP, vous pouvez configurer plusieurs options d'accessibilité.</p>
<h2><a href="#tdmchap41" name="chap41" id="chap41">4.a-Modifier la taille des icônes sur le bureau</a></h2>
<ul>
  <li>Ouvrez les <strong>Propriétés d'affichage</strong> et cliquez sur l'onglet <strong>Apparence</strong>. </li>
  <li>Cliquez sur le bouton <strong>Effets</strong>.</li>
  <li>Cochez l'option <strong>Utilise de grandes icônes</strong>.  </li>
</ul>
<img src="../img/xp/xp5/Accessibilite1.png" alt="Propriétés d'accessibilité 1" />

<h2><a href="#tdmchap42" name="chap42" id="chap42">4.b-Configurez le contraste </a></h2>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration &gt; Options d'accessibilité</strong>. </li>
  <li>Choisissez <strong>Ajuster le contraste pour le texte et les couleurs affichés à l'écran</strong>.</li>
  <li>Cochez l'option <strong>Utiliser le contraste élevé</strong>.</li>
  <li>Déplacez le curseur de <strong>Fréquence de clignotement</strong> vers la gauche.</li>
  <li>Déplacez le curseur de <strong>Largeur</strong> vers la droite. </li>
</ul>
<img src="../img/xp/xp5/Accessibilite2.png" alt="Propriétés d'accessibilité 2" />

<h2><a href="#tdmchap43" name="chap43" id="chap43">4.c-Modifier les options du clavier</a></h2>
<ul>
  <li>Ouvrez les <strong>Options d'accessibilité</strong>.</li>
  <li>Cliquez sur l'onglet <strong>Clavier</strong>.</li>
  <li>Cochez les cases <strong>Utiliser les touches filtres</strong> et <strong>Utiliser les touches rémanentes</strong>.</li>
</ul>
<img src="../img/xp/xp5/Accessibilite3.png" alt="Propriétés d'accessibilité 3" />

<h1><a href="#tdmchap5" name="chap5" id="chap5">5-Configurer les options régionales et linguistiques</a></h1>	

<h2><a href="#tdmchap51" name="chap51" id="chap51">5.a-Modifier le séparateur décimal</a></h2>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration &gt; Options régionales, date, heure et langue </strong>.</li>
  <li>Cliquez sur  <strong>Options régionales et linguistiques</strong>, puis sur le bouton <strong>Personnaliser</strong>.  </li>
  <li>Modifiez le <strong>Symbole décimal</strong> en choisissant par exemple le <strong>point</strong> (<strong>.</strong>). </li>
</ul>
<img src="../img/xp/xp5/OptionsRegionalesLinguistiques1.png" alt="Options régionales et linguistiques 1" />

<h2><a href="#tdmchap52" name="chap52" id="chap52">5.b-Modifier le symbole monétaire</a></h2>
<ul>
  <li>Cliquez sur l'onglet <strong>Symbole monétaire</strong> et sélectionnez le symbole <strong>$</strong>. </li>
</ul>
<img src="../img/xp/xp5/OptionsRegionalesLinguistiques2.png" alt="Options régionales et linguistiques 2" />

<h2><a href="#tdmchap53" name="chap53" id="chap53">5.c-Ajouter une langue supplémentaire</a></h2>
<ul>
  <li>Dans la fenêtre <strong>Options régionales et linguistiques</strong>, cliquez sur l'onglet <strong>Langues</strong>, puis sur le bouton <strong>Détails</strong>. </li>
</ul>
<img src="../img/xp/xp5/OptionsRegionalesLinguistiques3.png" alt="Options régionales et linguistiques 3" />
<ul>
  <li>Cliquez sur le bouton <strong>Ajouter</strong> dans la zone <strong>Services installés</strong>.</li>
  <li>Sélectionnez la langues désirée, puis validez.</li>
</ul>
<p><img src="../img/xp/xp5/OptionsRegionalesLinguistiques4.png" alt="Options régionales et linguistiques 4" /></p>

<p class="notice remarque">Pour tester ces paramètres, ouvrez <strong>Wordpad</strong> et saisissez <strong>azerty</strong>. Double-cliquez ensuite sur l'icône <strong>EN</strong> de la barre des tâches et ressaisissez <strong>azerty</strong>. Vous devriez obtenir <strong>qwerty</strong>.</p>


<h2><a href="#tdmchap54" name="chap54" id="chap54">5.d-Modifier la touche de basculement minuscule-majuscule</a></h2>
<ul>
  <li>Dans la fenêtre <strong>Services de texte et langues d'entrée</strong>, cliquez sur <strong>Paramètres de touches</strong>.</li>
  <li>Activez l'option <strong>Appuyer sur la touche MAJ</strong> et validez l'ensemble des fenêtres.  </li>
</ul>
<img src="../img/xp/xp5/OptionsRegionalesLinguistiques5.png" alt="Options régionales et linguistiques 5" />

<h1><a href="#tdmchap6" name="chap6" id="chap6">6-Personnaliser les outils d&rsquo;administration</a></h1>
<h2><a href="#tdmchap61" name="chap61" id="chap61">6.a-Ajouter les outils d&rsquo;administration</a></h2>
<p>Pour accéder plus rapidement aux outils d'administration, vous pouvez les faire apparaître dans le menu Démarrer.</p>
<ul>
  <li>Ouvrez les <strong>Propriétés</strong> du menu <strong>Démarrer</strong>.</li>
  <li>Cliquez sur <strong>Personnaliser</strong>, puis sur l'onglet <strong>Avancé</strong>. </li>
  <li>Activez l'option <strong>Afficher sur le menu Tous les programmes et le menu Démarrer</strong>. </li>
</ul>
<img src="../img/xp/xp5/OutilsAdministration1.png" alt="Outils d'administration 1" />

<h2><a href="#tdmchap62" name="chap62" id="chap62">6.b-Créer une console MMC </a></h2>
<p>Pour créer une console MMC (Microsoft Management Console) personnalisée :</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Exécuter</strong>.</li>
  <li>Saisissez <strong>mmc.exe</strong> et validez.  </li>
  <li>Cliquez sur <strong>Fichier &gt; Ajouter/Supprimer un composant logiciel enfichable</strong>. </li>
</ul>
<img src="../img/xp/xp5/MMC0.png" alt="Ajouter un composant enfichable dans une console MMC" />
<ul>
  <li>Cliquez sur le bouton <strong>Ajouter</strong>.</li>
</ul>
<img src="../img/xp/xp5/MMC1.png" alt="Ajouter un composant enfichable dans une console MMC 1" />
<ul>
  <li>Cliquez sur <strong>Utilisateur et groupes locaux</strong> dans la liste des <strong>Composants logiciels enfichables disponibles</strong>. </li>
</ul>
<img src="../img/xp/xp5/MMC2.png" alt="Ajouter un composant enfichable dans une console MMC 2" />
<ul>
  <li>Choisissez <strong>L'ordinateur local</strong> dans la boite de dialogue puis validez.</li>
</ul>
<img src="../img/xp/xp5/MMC3.png" alt="Ajouter un composant enfichable dans une console MMC 3" />
<ul>
  <li>Cliquez sur <strong>Fichier > Enregistrer sous</strong>.</li>
  <li>Saisissez <strong>Utilisateurs et groupe locaux</strong>.</li>
</ul>
<img src="../img/xp/xp5/MMC4.png" alt="Ajouter un composant enfichable dans une console MMC 4" />

<h2><a href="#tdmchap63" name="chap63" id="chap63">6.c-Personnaliser une console MMC </a></h2>
<p>Nous allons maintenant modifiez l'affichage pour permettre uniquement certains fonctionnalités.</p>
<ul>
  <li>Sélectionnez <strong>Utilisateurs et groupes locaux</strong>.</li>
  <li>Cliquez avec le bouton droit sur <strong>Utilisateurs et groupes locaux</strong>, sélectionnez <strong>Nouvelle vue de la liste des tâches</strong>. </li>
  <li>Laissez les options par défaut. </li>
</ul>
<img src="../img/xp/xp5/AssistantNouvelleTache1.png" alt="Assistant nouvelle tâche 1" />
<ul>
  <li>Poursuivez la procédure.</li>
</ul>
	<img src="../img/xp/xp5/AssistantNouvelleTache2.png" alt="Assistant nouvelle tâche 2" />
    <img src="../img/xp/xp5/AssistantNouvelleTache3.png" alt="Assistant nouvelle tâche 3" />
<ul>
  <li>Sur le dernier écran cochez l'option <strong>Exécuter l'assistant Nouvelle tâche</strong>. </li>
</ul>
<img src="../img/xp/xp5/AssistantNouvelleTache4.png" alt="Assistant nouvelle tâche 4" />
<p>L'<strong>Assistant Nouvelle tâche</strong> débute.</p>
    <img src="../img/xp/xp5/AssistantNouvelleTache5.png" alt="Assistant nouvelle tâche 5" />
<ul>
  <li>Optez pour <strong>Commande de menu</strong> dans le type de commande.</li>
</ul>
    <img src="../img/xp/xp5/AssistantNouvelleTache6.png" alt="Assistant nouvelle tâche 6" />
<ul>
  <li>Choisissez <strong>Nouvel utilisateur... </strong> dans la fenêtre <strong>Commande du menu contextuel.</strong>.</li>
</ul>
    <img src="../img/xp/xp5/AssistantNouvelleTache7.png" alt="Assistant nouvelle tâche 7" />
<ul>
  <li>Laissez le nom défini par défaut .</li>
</ul>
    <img src="../img/xp/xp5/AssistantNouvelleTache8.png" alt="Assistant nouvelle tâche 8" />
<ul>
  <li>Sélectionnez l'icône &quot;<strong>Utilisateur</strong>&quot;  .</li>
</ul>
    <img src="../img/xp/xp5/AssistantNouvelleTache9.png" alt="Assistant nouvelle tâche 9" />
	<ul>
  <li>Cliquez sur <strong>Terminer</strong>  .</li>
</ul>
<img src="../img/xp/xp5/AssistantNouvelleTache10.png" alt="Assistant nouvelle tâche 10" />
<p>Vous devriez obtenir la console suivante :</p>
<img src="../img/xp/xp5/AssistantNouvelleTache10a.png" alt="Assistant nouvelle tâche 10a" />
	
    <h2><a href="#tdmchap64" name="chap64" id="chap64">6.d-Afficher des commandes personnalisées</a></h2>
<p>Nous voulons  définir l'affichage des commandes suivantes liées aux comptes utilisateur  : <strong>déverrouiller un compte, réinitialiser le mot de passe, contrôler l'appartenance aux groupes</strong> </p>
<ul>
  <li>Développez <strong>Utilisateurs et groupes locaux</strong> et sélectionnez <strong>Utilisateurs</strong>.</li>
  <li>Cliquez avec le bouton droit sur <strong>Utilisateurs</strong> et sélectionnez <strong>Nouvelle vue de la liste des tâches</strong>. </li>
  <li>Laissez les options par défaut et poursuivez comme précédemment jusqu'à l'<strong>Assistant Nouvelle tâche</strong>.</li>
  <li>Optez pour <strong>Commande de menu</strong> dans le <strong>Type de commande</strong>.</li>
  <li>Choisissez <strong>Définir le mot de passe...</strong> dans la fenêtre <strong>Commande du menu contextuel</strong>.</li>
</ul>
<img src="../img/xp/xp5/AssistantNouvelleTache11.png" alt="Assistant nouvelle tâche 11" />
<ul>
  <li>Laissez les options par défaut et choisissez l'icône &quot;<strong>Mot de passe</strong>&quot;.</li>
  </ul>
<img src="../img/xp/xp5/AssistantNouvelleTache12.png" alt="Assistant nouvelle tâche 12" />
<ul>
  <li>Dans la dernière fenêtre cochez l'option <strong>Exécuter cet assistant à nouveau</strong>.</li>
  </ul>
<img src="../img/xp/xp5/AssistantNouvelleTache13.png" alt="Assistant nouvelle tâche 13" />
<ul>
  <li>Sélectionnez à nouveau <strong>Commande de menu</strong> dans le <strong>Type de commande</strong>.</li>
  <li>Choisissez <strong>Propriétés</strong> dans la fenêtre <strong>Commande de menu contextuel</strong>.</li>
</ul>

<p class="notice remarque">Cette commande permet de déverrouiller les comptes utilisateur et de contrôler l'appartenance aux groupes.</p>

<ul>
  <li>Laissez le nom défini par défaut et choisissez l'icône &quot;<strong>Propriétés</strong>&quot;.</li>
  </ul>
<img src="../img/xp/xp5/AssistantNouvelleTache14.png" alt="Assistant nouvelle tâche 14" />
<ul>
  <li>Cliquez sur le bouton <strong>Terminer</strong>.</li>
  </ul>
<img src="../img/xp/xp5/AssistantNouvelleTache15.png" alt="Assistant nouvelle tâche 15" />

<h2><a href="#tdmchap65" name="chap65" id="chap65">6.e-Bloquer la modification d'une console</a></h2>
<p>Nous voulons maintenant faire en sorte que cette console ne soit plus modifiable</p>
<ul>
  <li>Cliquez sur la commande <strong>Affichage &gt; Personnaliser</strong>.</li>
  <li>Décochez toutes les options de la fenêtre et validez. </li>
</ul>
<img src="../img/xp/xp5/AssistantNouvelleTache16.png" alt="Assistant nouvelle tâche 16" />
<ul>
  <li>Utilisez la commande <strong>Fichier &gt; Options</strong> et dans la liste <strong>Mode de console</strong>, définissez l'utilisation du <strong>Mode utilisateur - accès limité, fenêtre unique</strong>.</li>
  </ul>
<img src="../img/xp/xp5/AssistantNouvelleTache17.png" alt="Assistant nouvelle tâche 17" />
<ul>
  <li>Enregistrez la console sous le nom <strong>Gestion Utilisateurs</strong>.</li>
  </ul>
<p>Vous devriez obtenir la console suivante :</p> 
<img src="../img/xp/xp5/AssistantNouvelleTache18.png" alt="Assistant nouvelle tâche 18" />

<p class="notice remarque">Pour créer un nouvel utilisateur, cliquez avec le bouton droit dans la console et sélectionnez <strong>Nouvel utilisateur...</strong></p>

<p>&nbsp;</p>

