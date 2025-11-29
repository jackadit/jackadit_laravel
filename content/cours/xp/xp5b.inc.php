<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours5b.php	v 1.0   16/08/07	16:46:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 5b										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '5b', '5c', '5a');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol start="3" id="xp" class="unstyled">
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Configurer la Barre des tâches et le menu démarrer</a>
		<ol class="alpha">
				<li><a href="#chap31" name="tdmchap31" id="tdmchap31">Afficher la barre de lancement rapide</a></li>
				<li><a href="#chap32" name="tdmchap32" id="tdmchap32">Masquer la Barre des tâches</a></li>
				<li><a href="#chap33" name="tdmchap33" id="tdmchap33">Masquer les icônes inactives</a></li>
				<li><a href="#chap34" name="tdmchap34" id="tdmchap34">Personnaliser le menu Démarrer</a></li>
		  </ol></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Configurer les options d'accessibilité</a>
		<ol class="alpha">
				<li><a href="#chap41" name="tdmchap41" id="tdmchap41">Modifier la taille des icônes sur le bureau</a></li>
				<li><a href="#chap42" name="tdmchap42" id="tdmchap42">Configurer le contraste</a></li>
				<li><a href="#chap43" name="tdmchap43" id="tdmchap43">Modifier les options du clavier</a></li>
		  </ol></li>
    </ol>
</aside>



<h1>Configuration de l'environnement de travail (b)</h1>
<h3>Durée :</h3>
	<p>1 heures 30</p>
<h3>Objectifs</h3>
	<ul>
	  <li>Personnaliser les options d'affichage </li>
      <li>Configurer la <strong>Barre des tâches</strong> et le menu <strong>Démarrer</strong> </li>
	  <li>Rendre le système accessible aux handicapés </li>
	  <li>Créer et personnaliser une console MMC   </li>
	</ul>
<h3>Prérequis</h3>
	<p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Un ordinateur configuré avec Windows XP.</p>
	
<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Configurer la Barre des tâches et le menu Démarrer</a></h2>
<h3><a href="#tdmchap31" name="chap31" id="chap31">3.a-Afficher la Barre de lancement rapide</a></h3>
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

<h3><a href="#tdmchap32" name="chap32" id="chap32">3.b-Masquer la Barre des tâches</a></h3>
<p>Pour augmenter la taille disponible sur votre bureau, vous pouvez cacher la <strong>Barre des tâches</strong>.
  <ul>
	  <li>Cliquez avec le bouton droit sur le menu <strong>Démarrer</strong>, puis sélectionnez <strong>Propriétés</strong>. </li>
	    <li>Cliquez sur l'onglet <strong>Barre des tâches</strong> et cochez la case <strong>Masquer automatiquement la Barre des tâches</strong>. </li>
	    <li>Décochez l'option <strong>Grouper les boutons similaires de la Barre des tâches</strong>. </li>
  </ul>
 
<p class="notice remarque">Cette dernière option peut s'avérer pratique si l'on change fréquement de fenêtre d'application. </p>

<img src="/assets/img/xp/xp5/BarreMenuTache2.png" alt="Propriétés de la Barre des tâches 2" />

<p class="notice remarque">Pour <strong>déplacer la Barre des tâches</strong>,  cliquez dans la barre et tout en restant appuyé, glissez la souris vers un des bords de l'écran.</p>

<h3><a href="#tdmchap33" name="chap33" id="chap33">3.c-Masquer les icônes inactives</a></h3>
<p>Dans un souci d'augmenter au maximum l'espace d'affichage dans la barre des tâches, vous pouvez masquer les icônes des applications ne servant pas dans la partie système de la barre des tâches (à droite à côté de l'horloge). </p>
<ul>
  <li>Cochez l'option <strong>Masquer les icônes inactives</strong> dans la fenêtre des propriétés. </li>
  <li>Cliquez sur <strong>Personnaliser</strong>, sélectionnez une des applications et dans la partie comportement, modifiez au besoin l'option. </li>
</ul>
<img src="/assets/img/xp/xp5/BarreMenuTache3.png" alt="Propriétés de la Barre des tâches 3" />

<h3><a href="#tdmchap34" name="chap34" id="chap34">3.d-Personnaliser le Menu Démarrer</a></h3>
<p>Nous pouvons configurer le menu Démarrer pour que les nouveaux programmes installés apparaissent en surbrillance ou que certains dossiers comme Mes documents apparaissent en tant que menu. </p>
<ul>
  <li>Ouvrez les <strong>propriétés</strong> du menu <strong>Démarrer</strong>.</li>
  <li>Cliquez sur le bouton <strong>Personnaliser</strong>.</li>
  <li>Sélectionnez l'option <strong>Petites icônes</strong>. </li>
  <li>Augmentez le nombre de programmes dans la zone de <strong>Programmes</strong> à <strong>10</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/BarreMenuTache4.png" alt="Propriétés du menu Démarrer 1" />
<ul>
  <li>Cliquez sur l'onglet <strong>Avancé</strong>.</li>
  <li>Faites défiler les éléments dans la zone <strong>Éléments du menu Démarrer</strong> jusqu'à l'élément <strong>Mes documents</strong>.</li>
  <li>Activez l'option <strong>Affichez en tant que menu</strong> pour l'élément <strong>Mes documents</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/BarreMenuTache5.png" alt="Propriétés du menu Démarrer 2" />

<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Configurer les options d&rsquo;accessibilité</a></h2>
<p>Pour permettre à une personne malvoyante ou ayant des difficultés gestuelles d'utiliser au mieux Windows XP, vous pouvez configurer plusieurs options d'accessibilité.</p>
<h3><a href="#tdmchap41" name="chap41" id="chap41">4.a-Modifier la taille des icônes sur le bureau</a></h3>
<ul>
  <li>Ouvrez les <strong>Propriétés d'affichage</strong> et cliquez sur l'onglet <strong>Apparence</strong>. </li>
  <li>Cliquez sur le bouton <strong>Effets</strong>.</li>
  <li>Cochez l'option <strong>Utilise de grandes icônes</strong>.  </li>
</ul>
<img src="/assets/img/xp/xp5/Accessibilite1.png" alt="Propriétés d'accessibilité 1" />

<h3><a href="#tdmchap42" name="chap42" id="chap42">4.b-Configurer le contraste</a></h3>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration &gt; Options d'accessibilité</strong>. </li>
  <li>Choisissez <strong>Ajuster le contraste pour le texte et les couleurs affichés à l'écran</strong>.</li>
  <li>Cochez l'option <strong>Utiliser le contraste élevé</strong>.</li>
  <li>Déplacez le curseur de <strong>Fréquence de clignotement</strong> vers la gauche.</li>
  <li>Déplacez le curseur de <strong>Largeur</strong> vers la droite. </li>
</ul>
<img src="/assets/img/xp/xp5/Accessibilite2.png" alt="Propriétés d'accessibilité 2" />

<h3><a href="#tdmchap43" name="chap43" id="chap43">4.c-Modifier les options du clavier</a></h3>
<ul>
  <li>Ouvrez les <strong>Options d'accessibilité</strong>.</li>
  <li>Cliquez sur l'onglet <strong>Clavier</strong>.</li>
  <li>Cochez les cases <strong>Utiliser les touches filtres</strong> et <strong>Utiliser les touches rémanentes</strong>.</li>
</ul>
<img src="/assets/img/xp/xp5/Accessibilite3.png" alt="Propriétés d'accessibilité 3" />

<p>&nbsp;</p>

