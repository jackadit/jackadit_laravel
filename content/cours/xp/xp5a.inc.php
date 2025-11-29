<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours5a.php	v 1.0   16/08/07	16:36:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 5a										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '5a', '5b', '4c');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Créer un raccourci sur le bureau</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Configurer les options d'affichage</a>
			<ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Résolution d'écran </a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Arrière-plan</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Apparence</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Écran de veille </a></li>
			</ol></li>
    </ol>
</aside>



<h1>Configuration de l'environnement de travail (a)</h1>
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
<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Créer un raccourci sur le bureau</a></h2>
	<p>Pour gagner du temps, il est possible de créer des raccourcis vers des applications, vers des dossiers ou des fichiers que l'on utilise souvent.</p>
	<p>Dans le cadre de cet exercice, nous allons créer des raccourcis sur le bureau pour l'application <strong>Notepad</strong> et la <strong>calculatrice</strong> en utilisant plusieurs méthodes.</p>
	<ul>
		<li>Cliquez avec le bouton droit sur le bureau puis sélectionnez <strong>Nouveau &gt; Raccourci</strong></li>
	    <li>Saisissez <strong>&permil;systemroot&permil;\notepad.exe</strong>. </li>
	</ul>
	<p><img src="/assets/img/xp/xp5/AssistantCreationRaccourci1.png" alt="Assistant Création de raccourci 1" />  </p>
	<ul>
	  	<li>Cliquez sur <strong>Suivant</strong>, laissez le nom par défaut et fermez l'assistant. </li>
  	</ul>
	<p>Pour créer le raccourci vers la calculatrice procédez de la manière suivante :</p>
	<ul>
	  	<li>Parcourez <strong>Démarrer &gt; Tous les programmes &gt; Accessoires</strong></li>
  	    <li>Cliquez avec le bouton droit sur <strong>Calculatrice</strong></li>
	    <li>Cliquez sur <strong>Envoyer vers &gt; Bureau (créer un raccourci)</strong></li>
	</ul>
	
<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Configurer les options d&rsquo;affichage</a></h2>
<p>Cet exercice a pour but de vous montrer comment configurer votre bureau (en particulier la résolution d'écran, l'arrière plan et l'écran de veille). </p>
<h3><a href="#tdmchap21" name="chap21" id="chap21">2.a-Résolution d'écran</a></h3>
<ul>
  <li>Cliquez avec le bouton droit sur le bureau et sélectionnez <strong>Propriétés</strong>.</li>
  <li>Cliquez sur l'onglet <strong>Paramètres</strong>. </li>
  <li>Déplacez le curseur jusqu'à la résolution désirée (1280 * 1024 par exemple).</li>
</ul>
<p><img src="/assets/img/xp/xp5/AffichageParametres.png" alt="Affichage paramètres" /></p>

<h3><a href="#tdmchap22" name="chap22" id="chap22">2.b-Arrière-plan</a></h3>
<p>Pour modifier l'arrière-plan :</p>
<ul>
  <li>Cliquez sur l'onglet <strong>Bureau</strong> et choisissez une image dans la section <strong>Arrière-plan</strong> ou cliquez sur <strong>Parcourir</strong> pour en recherche une sur un autre espace de stockage. </li>
</ul>
<img src="/assets/img/xp/xp5/AffichageBureau1.png" alt="Affichage Bureau" />
<p>Pour afficher votre <strong>Poste de travail</strong> et le dossier <strong>Mes documents</strong> sur votre bureau :</p>
<ul>
  <li>Cliquez sur le bouton <strong>Personnalisation du Bureau</strong>.</li>
  <li>Cochez les cases adéquates.</li>
</ul>
<p><img src="/assets/img/xp/xp5/AffichageBureau2.png" alt="Personnalisation du bureau" /></p>
<h3><a href="#tdmchap23" name="chap23" id="chap23">2.c-Apparence</a></h3>
<p>Si vous voulez modifier les couleurs de votre bureau, procédez de la manière suivante :</p>
<ul>
  <li>Cliquez sur l'onglet <strong>Apparences</strong>  dans la fenêtre des <strong>Propriétés d'Affichage</strong>.</li>
  <li>Sélectionnez <strong>Vert olive</strong> dans la section <strong>Modèle de couleurs</strong>.</li>
</ul>
<img src="/assets/img/xp/xp5/AffichageApparence1.png" alt="Affichage Apparences 1" />
<p>Vous pouvez également personnaliser un élément en particulier. Par exemple pour la barre de titre :</p>
<ul>
  <li>Cliquez sur le bouton <strong>Avancé</strong> et sélectionnez <strong>Barre de titre active</strong> dans la liste déroulante <strong>Élément</strong>.</li>
  <li>Modifiez la configuration en sélectionnant : Police <strong>Verdana</strong>, Taille <strong>12</strong>, Couleur <strong>Prune</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/AffichageApparence2.png" alt="Affichage Apparences 2" />
<h3><a href="#tdmchap24" name="chap24" id="chap24">2.d-Écran de veille</a></h3>
<p>pour modifier l'écran de veille :</p>
<ul>
  <li>Sélectionnez l'onglet <strong>Écran de veille</strong> dans la fenêtre des <strong>Propriétés d'Affichage</strong>.</li>
  <li>Sélectionnez <strong>Texte défilant</strong> dans la liste déroulante</li>
  <li>Modifiez le délai à <strong>8 minutes</strong> </li>
 </ul>
 <img src="/assets/img/xp/xp5/AffichageEcranVeille1.png" alt="Affichage Écran de veille 1" />
 <ul>
  <li>Cliquez sur <strong>Paramètres</strong>.</li>
  <li>Saisissez <strong>Absence momentanée</strong>... et validez. </li>
</ul>
	<img src="/assets/img/xp/xp5/AffichageEcranVeille2.png" alt="Affichage Écran de veille 2" />
	
<p>&nbsp;</p>

