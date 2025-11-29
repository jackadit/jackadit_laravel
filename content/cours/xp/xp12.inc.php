<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours12.php 	v 1.0   09/05/07	23:21:00				|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 12										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '12', 'fin');
?>
<aside>
<p class="h2-like">Table des matières</p>
  	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Installer une imprimante locale</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Installer une imprimante réseau</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Modifier les propriétés d'une imprimante</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Gérer les impressions</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Configurer et administrer à distance un serveur d&rsquo;impression</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Supprimer des imprimantes</a></li>
  	</ol>
  </aside>



<h1>Gestion des impressions</h1>
<h3>Durée :</h3>
	<p>1 heure 30 </p>
    <h3>Objectifs</h3>
	<ul>
	  <li>Installer une imprimante locale</li>
      <li>Installer une imprimante réseau</li>
	  <li>Administrer un serveur d'impression : spécifier des permissions, configurer le spool, rediriger des impressions</li>
      <li>Créer de nouveaux ports locaux et TCP/IP</li>
	  <li>Administrer son serveur à distance</li>
	  <li>Supprimer les imprimantes créées   </li>
	</ul>
<h3>Prérequis</h3>
<p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Deux ordinateurs avec carte réseau, configurés avec Windows XP utilisant le système NTFS et connecté entre eux par l'intermédiaire d'un câble croisé ou d'un Hub/switch.</p>

    <h2><a href="#tdmchap1" name="chap1" id="chap1">1-Installer une imprimante locale</a></h2>
    <ul>
      <li>Connectez-vous sur l'ordinateur1 et cliquez sur <strong>Démarrer &gt; Imprimantes et télécopieurs</strong></li>
      <li>Cliquez sur <strong>Ajouter une imprimante</strong></li>
    </ul>
<p>L'assistant <strong>Ajout d'imprimante</strong> démarre</p>
<ul>
  <li>Dans la fenêtre <strong>Imprimante réseau ou locale</strong>, activez l'option <strong>Imprimante locale connectée à cet ordinateur</strong>.</li>
  <li>Dans l'écran <strong>Sélectionnez un port d'imprimante</strong>, laissez les options par défaut.</li>
  <li>Dans l'écran <strong>Installer le logiciel d'impression</strong>, choisissez l'imprimante de votre choix (Pour l'exemple nous utiliserons le pilote <strong>HP   LaserJet 5P</strong>).</li>
  <li>Donnez ensuite un nom à votre imprimante : <strong>HPLaser5P</strong>, puis cliquez sur <strong>Suivant</strong>. </li>
  <li>Laissez l'option par défaut : <strong>Ne pas partager cette imprimante</strong> (vous le ferez ultérieurement), puis cliquez sur <strong>Suivant</strong>.</li>
  <li>Dans la fenêtre <strong>Imprimer une page de test</strong>, cochez <strong>Non</strong> puis terminez l'Assistant. </li>
  <li> </li>
</ul>

