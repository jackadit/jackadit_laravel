<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours4c.php	v 1.0   16/08/07	13:37:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 4c										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '4c', '5a', '4b');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol start="3" id="xp" class="unstyled">
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Modifier la lettre de lecteur</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Monter un volume</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Ajouter un disque</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Créer un volume fractionné et un agrégat par bandes (RAID 0)</a></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Supprimer un disque</a></li>
		<li><a href="#chap8" name="tdmchap8" id="tdmchap8">Surveiller et optimiser disques</a></li>
    </ol>
</aside>



<h1>Gestion des disques (c)</h1>
<h3>Durée :</h3>
	<p>1 heures 30</p>
	<h3>Objectifs</h3>
	<ul>
	  <li>Apprendre à gérer les disques : création de partitions, de volumes...</li>
      <li>Maîtriser les différents systèmes de fichiers</li>
	  <li>Savoir optimiser la gestion des disques, modifier la configuration existante</li>
	  <li>Dépanner votre système  </li>
	</ul>
	<h3>Prérequis</h3>
	<p>Aucun</p>
	<h3>Matériel à prévoir</h3>
	<p>Un ordinateur configuré avec Windows XP, équipés d'un disque dur de 10 Go et d'un disque dur supplémentaire pour l'énoncé 5.</p>
	
<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Modifier la lettre de lecteur</a></h2>
<p>Nous allons maintenant modifier les lettres des lecteurs <strong>F:</strong> en <strong>U:</strong> et <strong>H:</strong> en <strong>V:</strong></p>
	<ul>
	    <li>Faites un clic droit sur le volume <strong>F:</strong> et choisissez <strong>Modifier la lettre de lecteur </strong>. Indiquez <strong>U:</strong> et validez. </li>
	    <li>Répétez cette opération pour transformer le lecteur <strong>H:</strong> en <strong>V:</strong>.</li>
	</ul>  
<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Monter un volume</a></h2>
<p class="notice remarque"><strong>Monter un volume</strong> consiste à <strong>créer un branchement virtuel d'un espace de stockage</strong> (une partition, un volume ou un disque) sur un <strong>dossier vide</strong> d'une partition ou d'un <strong>volume NTFS local</strong>.</p>
<p>De ce fait vous aurez un seul lecteur dont les fichiers sont en réalités stockés sur des volumes distincts.</p>
<p>Dans un premier temps nous allons monter le lecteur <strong>U:</strong> dans un dossier <strong>Montage</strong> sur le lecteur <strong>V:</strong>. </p>
	<ul>
	    <li>Créez un dossier sur <strong>V:</strong> que vous nommerez <strong>Montage</strong>.</li>
	    <li>Relancez l'<strong>Assistant Création d'un nouveau volume</strong> et cliquez avec le bouton droit sur le lecteur <strong>U:</strong>.</li>
	    <li>Sélectionnez <strong>Modifier la lettre de lecteur et les chemins d'accès</strong>.</li>
    </ul>
	<img src="/assets/img/xp/xp4/MonterVolume1.png" alt="Monter un volume 1" />
	<ul>
	    <li>Cliquez sur <strong>Ajouter</strong>.</li>
	    <li>Dans <strong>Monter dans le dossier NTFS vide suivant</strong>, saisissez le chemin d'accès au dossier <strong>Montage</strong> ou cliquez sur <strong>Parcourir</strong> pour l'atteindre.</li>
	</ul>
	<img src="/assets/img/xp/xp4/MonterVolume2.png" alt="Monter un volume 2" />
	<p>Maintenant nous allons monter <strong>un nouveau volume local</strong> dans un dossier <strong>Données</strong> situé dans <strong>Mes documents</strong>.</p>
	<ul>
	    <li>Créez un dossier <strong>Données</strong> dans <strong>Mes documents</strong>.</li>
	    <li>Relancez l'<strong>Assistant Création d'un nouveau volume</strong> et cliquez avec le bouton droit sur un espace non alloué puis sélectionnez <strong>Nouveau nom </strong>.</li>
	    <li>Sélectionnez le <strong>disque 0</strong> et attribuez la taille <strong>2000 Mo</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	    <li>Sélectionnez <strong>Monter dans le dossier vide suivant </strong>et saisissez le chemin d'accès au dossier <strong>Données</strong> ou cliquez sur <strong>Parcourir</strong> pour l'atteindre.</li>
        <li>Formatez le volume en NTFS.</li>
	</ul>

  	<p class="notice remarque">Pour afficher les chemins d'accès existants dans l'outil <strong>Gestion des disques</strong>, cliquez sur <strong>Affichage</strong>, puis sur <strong>Chemins d'accès de lecteurs</strong>.</p>

	<img src="/assets/img/xp/xp4/MonterVolume3.png" alt="Afficher les chemins d'accès existants" />

  	<p class="notice remarque">Pour <strong>modifier</strong> un chemin d'accès, vous devez le <strong>supprimer</strong> puis le <strong>recréer</strong>.</p>


<h2><a href="#tdmchap5" name="chap5" id="chap5">5-Ajouter un disque</a></h2>

<p>Pour ajouter un second disque sur votre ordinateur vous devez arrêter votre système. Le disque dur ajouté doit être reconnu dans le BIOS de votre machine au redémarrage.</p>
<ul>
	<li>Dans l'outil <strong>Gestion des disques</strong>,  votre nouveau disque devrait apparaître sous <strong>Disque 1</strong> avec l'état <strong>Connecté</strong>.</li>
	<li>Si ce n'est pas le cas, cliquez sur <strong>Action &gt; Analyser les disques de nouveau</strong>.</li>
	<li>S'il n'est pas dans l'état connecté, cliquez avec le bouton droit sur <strong>Disque 1</strong> et sélectionnez <strong>Importer des disques étrangers</strong>.</li>
</ul>
<p>Pour les besoins de l'exercice, créez un <strong>disque dynamique</strong> de <strong>1 Go</strong>.</p>
<img src="/assets/img/xp/xp4/AjoutDisque1.png" alt="Ajouter un disque dynamique" />

<h2><a href="#tdmchap6" name="chap6" id="chap6">6-Créer un volume fractionné et un agrégat par bandes (RAID 0)</a></h2>
<p>Pour les besoins de cet exercice, supprimez tous les volumes créés sur le premier disque sauf le lecteur <strong>U:</strong>.</p>
<p>Vous devez obtenir l'écran suivant :</p>
<img src="/assets/img/xp/xp4/AjoutDisque2.png" alt="Ajouter un disque dynamique 2" />
<p>Nous voulons créer un <strong>volume fractionné</strong> de <strong>12 Go</strong> sur le <strong>disque 0</strong>, puis un <strong>agrégat par bande</strong>s en utilisant le maximum d'espace disponible sur les deux disques. </p>
<ul>
	<li>Dans l'<strong>Assistant Création d'un nouveau volume</strong>, sélectionnez <strong>Volume fractionné</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantFractionne1.png" alt="Assistant Fractionné 1" />
<ul>
	<li>Dans l'écran <strong>Sélection de disque</strong>, les disques <strong>disque 0</strong> et <strong>disque 1 </strong>doivent apparaître dans la zone de droite.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantFractionne2.png" alt="Assistant Fractionné 2" />
<ul>
	<li>Sélectionnez une taille de <strong>6000 Mo</strong> pour chacun.</li>
	<li>Spécifiez un lecteur et le système de fichiers <strong>NTFS</strong>.</li>
</ul>
<p>Vous obtenez l'écran suivant :</p>
<img src="/assets/img/xp/xp4/AssistantFractionne3.png" alt="Assistant Fractionné 3" />

<ul>
	<li>Dans l'<strong>Assistant Création d'un nouveau volume</strong>, sélectionnez <strong>Agrégé par bandes </strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantAgrege1.png" alt="Agrégat par bandes 1" />
<ul>
	<li>Dans l'écran <strong>Sélection de disque</strong>, les deux disques doivent apparaître dans la zone de droite.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantAgrege2.png" alt="Agrégat par bandes 2" />

<p class="notice remarque">Malgré que le disque 0 ait 15,35 Go de disponible, c'est la capacité du disque 1 avec 9,16 Go qui déterminera la taille de l'agrégat par bandes. </p>

<img src="/assets/img/xp/xp4/AssistantAgrege3.png" alt="Agrégat par bandes 3" />
<ul>
	<li>Spécifiez un lecteur et le système de fichiers <strong>NTFS</strong>.</li>
</ul>
<p>Vous obtenez l'écran suivant :</p>
<img src="/assets/img/xp/xp4/AssistantAgrege4.png" alt="Agrégat par bandes 4" />

<h2><a href="#tdmchap7" name="chap7" id="chap7">7-Supprimer un disque</a></h2>
<p>Nous allons supprimer le disque 1 créé précédemment. Pour cela : </p>
<ul>
	<li>Supprimez le <strong>volume agrégé par bandes</strong>.</li>
	<li>Supprimez le volume simple <strong>F:\</strong>.</li>
	<li>Supprimez le volume simple <strong>E:\</strong>.></li>
	<li>Arrêtez votre ordinateur et enlever le <strong>disque 1</strong>.</li>
	<li>Redémarrer votre système et vérifiez que seul le <strong>disque 0</strong> persiste.</li>
</ul>
<p>Si ce n'est pas le cas :</p>
	<ul>
		<li>Utilisez la commande <strong>Action > Analyser les disques de nouveau</strong>.</li>
	    <li>Si le <strong>disque 1</strong> est toujours représenté, activez son menu contextuel et sélectionnez <strong>Supprimer</strong> .</li>
	</ul>
<img src="/assets/img/xp/xp4/SupprimerDisque.png" alt="Supprimer un disque" />

<h2><a href="#tdmchap8" name="chap8" id="chap8">8-Surveiller et optimiser un disque</a></h2>
<p>Pour vérifier l'état de vos disques, vous pouvez utiliser l'utilitaire suivant :</p>
<ul>
	<li>Ouvrez le <strong>Poste de travail</strong>. </li>
    <li>Cliquez avec le bouton droit sur le disque à vérifier et cliquez sur <strong>Propriétés</strong>.</li>
    <li>Cliquez sur l'onglet <strong>Outils</strong>.</li>
    <li>Cliquez sur <strong>Vérifiez maintenant</strong>, puis sur <strong>Démarrer</strong>. </li>
</ul>
<img src="/assets/img/xp/xp4/OutilsVerifier1.png" alt="Outils vérification 1" />
<p>En cas de besoin, cochez les cases correspondantes dan la zone Options de vérification du disque pour que le système tente de réparer les secteurs défectueux.</p>
<p>Si vous voulez vérifier le disque système, vous devrez relancer votre ordinateur après le message suivant :</p>
<img src="/assets/img/xp/xp4/OutilsVerifier2.png" alt="Outils vérification 2" />
<p>Pour effectuer une analyse de vos disques, vous pouvez utiliser l'<strong>outil de défragmentation de disque</strong>.</p>
<ul>
    <li>Cliquez avec le bouton droit sur le disque à vérifier et cliquez sur <strong>Propriétés</strong>.</li>
    <li>Cliquez sur l'onglet <strong>Outils</strong>.</li>
	<li>Cliquez sur <strong>Défragmenter maintenant</strong>, puis sur <strong>Analyser</strong>.</li>
    <li>Au besoin, cliquez sur <strong>Défragmenter</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/Defragmenter1.png" alt="Défragmenter" />

<p class="notice remarque">Pendant la défragmentation, vous ne devez pas ouvrir d'application ; suivant la taille de vos disques, le processus sera plus ou moins long ; Répétez l'opération pour chacun des volumes configurés.</p>

<div class="notice remarque">
  <p>Vous pouvez également accéder à cet outil par :</p>
  <p><strong>Démarrer &gt; Tous les programmes &gt; Accessoires &gt; Outils système &gt; Défragmenteur de disque</strong></p>
  <p>ou</p>
  <p><strong>Démarrer &gt; Panneau de configuration &gt; Performance et maintenance &gt; Réorganiser les éléments sur votre disque dur ...</strong> </p>
</div>

<p>&nbsp;</p>

