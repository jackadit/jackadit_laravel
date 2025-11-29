<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours4a.php	v 1.0   16/08/07	13:36:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 4a										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '4a', '4b', '3b');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Gérer un disque de base</a>
		  <ol class="alpha">
				<li><a href="#chap11" name="tdmchap11" id="tdmchap11">Créer une partition</a></li>
				<li><a href="#chap12" name="tdmchap12" id="tdmchap12">Formater une partition</a></li>
				<li><a href="#chap13" name="tdmchap13" id="tdmchap13">Créer une partition étendue</a></li>
				<li><a href="#chap14" name="tdmchap14" id="tdmchap14">Formater une partition étendue</a></li>
				<li><a href="#chap15" name="tdmchap15" id="tdmchap15">Convertir une partition</a></li>
				<li><a href="#chap16" name="tdmchap16" id="tdmchap16">Supprimer une partition</a></li>
				<li><a href="#chap17" name="tdmchap17" id="tdmchap17">Augmenter la taille d'une partition</a></li>
		  </ol></li>
    </ol>
</aside>



<h1>Gestion des disques (a)</h1>
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

<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Gestion des disques de base</a></h2>

<p>Les disques de base constituent le support de stockage par défaut de Windows XP. l'avantage d'un disque de base est qu'il peut être lu localement par toutes les versions antérieures de Windows, à condition d'être formaté dans un format reconnu par le système d'exploitation.</p>
<p>Un disque de base peut être divisé en parties plus petites de stockage. En général cela se fait en deux parties. La première  pour le système d'exploitation et la deuxième pour les données. </p>
<p>Mais il est également utile de diviser le disque dur en parties pour un double amorçage dans lequel chaque système d'exploitation est installé sur une partie distincte. </p>
<p>Les parties d'un disque de base sont des<strong> volumes de base</strong> ou des <strong>partitions</strong>.</p>
<p>Les types de partitions disponibles sont :</p>
<ol>
	<li><strong>Partition principale</strong> : vous pouvez disposez au <strong>maximum de quatre</strong> partitions principales.</li>
	<li><strong>Partition étendue</strong> : vous pouvez subdiviser une partition étendue en <strong>lecteurs logiques</strong>. Elle est utilisée lorsque vous voulez créer plus de quatre zones de stockage sur un disque de base.</li>
</ol>
<h3><a href="#tdmchap11" name="chap11" id="chap11">1.a-Créez deux partitions principales E: et F:</a></h3>
<p>Pour créer les partitions principales, vous pouvez utiliser l'outil d'administration <strong>Gestion des disques</strong> ou utiliser l'outil en ligne de commande <strong>DiskPart</strong>.</p>

<p class="notice remarque">Pour accéder à la liste des commandes de <strong>DiskPart</strong>, saisissez <strong>commands</strong> à l'invite <strong>diskpart</strong>.</p>

<img src="/assets/img/xp/xp4/diskpartcommands.png" alt="commandes diskpart" />
<ul>
	<li>Cliquez avec le bouton droit sur le <strong>Poste de travail</strong> et sélectionnez <strong>Gérer</strong>.</li>
	<li>Dans la fenêtre <strong>Gestion de l'ordinateur</strong>, double-cliquez sur <strong>Gestion des disques</strong>.</li>
</ul>

<p class="notice remarque">Vous pouvez également accéder à cet outil en passant par <strong>Démarrer > Panneau de configuration > Performance et maintenance &gt; Outils d'administration &gt; Gestion de l'ordinateur</strong>.</p>

<img src="/assets/img/xp/xp4/GestionDisque.png" alt="Gestion des disques" />
<ul>
	<li>Dans l'espace non alloué, faites un clic droit et choisissez <strong>Nouvelle partition</strong> .</li>
	<li>Dans l'<strong>Assistant Nouvelle Partition</strong> apparu à l'écran, activez l'option <strong>Partition principale</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantNouvellePartition1.png" alt="Assistant Nouvelle Partition 1" />
<ul>
	<li>Dans l'écran suivant spécifiez une taille de <strong>3000 Mo</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantNouvellePartition2.png" alt="Assistant Nouvelle Partition 2" />
<ul>
	<li>Dans la partie <strong>Attribuer une lettre de lecteur ou un chemin d'accès</strong>, le système doit vous proposer la valeur par défaut <strong>E:</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/AssistantNouvellePartition3.png" alt="Assistant Nouvelle Partition 3" />
<ul>
	<li>Dans le dernière fenêtre <strong>Formater une partition</strong>, sélectionnez le système de fichier <strong>FAT32</strong>. </li>
</ul>	
<img src="/assets/img/xp/xp4/AssistantNouvellePartition4.png" alt="Assistant Nouvelle Partition 4" />
<p>Le <strong>Gestionnaire de disque</strong> va créer et formater la partition pour obtenir le système suivant :</p>
<img src="/assets/img/xp/xp4/GestionDisque2.png" alt="Gestionnaire de disque 2" />


<h3><a href="#tdmchap12" name="chap12" id="chap12">1.b-Formater une partition</a></h3>
<p>Nous allons cette fois-ci formater la deuxième partition en NTFS.</p>
<ul>
	<li>Relancez l'<strong>Assistant Nouvelle Partition</strong>.</li>
	<li>Dans la fenêtre <strong>Sélection du type de partition</strong>, activez l'option <strong>Partition principale</strong>.</li>
	<li>Dans l'écran suivant spécifiez une taille de <strong>3000 Mo</strong>.</li>
	<li>Dans la partie <strong>Attribuer une lettre de lecteur ou un chemin d'accès</strong>, le système doit vous proposer la valeur par défaut <strong>F:</strong>.</li>
	<li>Dans le dernière fenêtre <strong>Formater une partition</strong>, sélectionnez le système de fichier <strong>NTFS</strong> et laissez les autres options par défaut.</li>
</ul>
<p>Le <strong>Gestionnaire de disque</strong> va créer et formater la partition pour obtenir le système suivant :</p>
<img src="/assets/img/xp/xp4/GestionDisque3.png" alt="Gestionnaire de disque 3" />

<h3><a href="#tdmchap13" name="chap13" id="chap13">1.c-Créer une partition étendue</a></h3>
<p>Vous pouvez créer une partition étendue si vous souhaiter la diviser en un ou plusieurs lecteurs logiques </p>
<p>Nous allons créer une <strong>partition étendue</strong> de <strong>6 Go</strong> et ajoutez deux lecteurs logiques de <strong>2 Go</strong> <strong>G:</strong> et <strong>H:</strong>.</p>
<ul>
	<li>Relancez à nouveau l'<strong>Assistant</strong>  et dans l'écran <strong>Sélection du type de partition</strong>, activez l'option <strong>Partition étendue </strong>.</li>
	<li>Spécifiez une taille de <strong>6000 Mo</strong>, puis terminez l'assistant.</li>
	<li>Dans l'outil <strong>Gestion des disques</strong>, placez votre curseur dans la représentation schématique de la partition étendue, puis à l'aide du menu contextuel, sélectionnez <strong>Nouveau lecteur logique</strong>.</li>
	<li>Grâce à  cet assistant, créez les deux lecteurs logiques <strong>G:</strong> et <strong>H:</strong> et modifiez la taille proposée par défaut à <strong>2 Go</strong>. </li>
	<li>Dans le dernière fenêtre <strong>Formater un lecteur </strong>, sélectionnez  <strong>Ne pas formater ce lecteur</strong>.</li>
</ul>
<p>Le <strong>Gestionnaire de disque</strong> va créer et formater la partition pour obtenir le système suivant :</p>
<img src="/assets/img/xp/xp4/GestionDisque4.png" alt="Gestionnaire de disque 4" />

<h3><a href="#tdmchap14" name="chap14" id="chap14">1.d-Formater une partition</a></h3>
<p>Nous voulons formater le premièr lecteur en <strong>FAT32</strong> et le deuxième en <strong>NTFS</strong> en utilisant deux méthodes différentes.</p>
<ul>
	<li>Faites un clic droit sur <strong>G:</strong> dans l'outil <strong>Gestion des disques</strong>, puis sélectionnez <strong>Formater</strong>.</li>
	<li>Laissez le nom de volume vierge et choisissez <strong>FAT32</strong>.</li>
</ul>
<p>Pour formater le deuxième lecteur en <strong>NTFS</strong>, nous allons utiliser l'<strong>invite de commandes MS-Dos</strong> en cliquant sur <strong>Démarrer > Exécuter</strong>, puis saisissez <strong>cmd</strong> et validez.</p>
<ul>
	<li>Saisissez la commande suivante : <strong>format H: /FS:NTFS</strong>.</li>
</ul>
<img src="/assets/img/xp/xp4/invitecommandeformat.png" alt="Invite de commande Format H: /FS:NTFS" />
<ul>
	<li>Laissez le nom de volume vierge et validez.</li>
</ul>

<p class="notice remarque">Pour plus d'informations sur la commande <strong>format</strong>, saisissez<strong> help format</strong> dans l'invite de commandes.</p>

<p>Vous pouvez vérifier le fonctionnement des différentes partitions en essayant de créer un dossier dans chacune d'elles.</p>
	
<h3><a href="#tdmchap15" name="chap15" id="chap15">1.e-Convertir une partition FAT en NTFS</a></h3>
<p>Nous allons convertir les lecteurs <strong>E:</strong> et <strong>G:</strong> en <strong>NTFS</strong> de deux manières différents.</p>
<ul>
	<li>Cliquez sur <strong>Démarrer > Exécuter</strong>, puis saisissez <strong>cmd</strong>.</li>
	<li>Saisissez la commande suivante : <strong>convert E: /FS:NTFS</strong> et validez.</li>
</ul>
<img src="/assets/img/xp/xp4/invitecommandeconvert.png" alt="Invite de commande convert E: /FS:NTFS" />
<ul>
	<li>Une fois la conversion terminée vous obtenez l'écran suivant : </li>
</ul>
<img src="/assets/img/xp/xp4/invitecommandeconverttermine.png" alt="Écran de conversion terminé" />	
<ul>
	<li>Faites un clic droit sur <strong>G:</strong> dans l'outil <strong>Gestion des disques</strong>, puis sélectionnez <strong>Convertir en NTFS</strong>.</li>
	<li>Acceptez le message de confirmation.</li>
</ul>

<h3><a href="#tdmchap16" name="chap16" id="chap16">1.f-Supprimer une partition</a></h3>
<p> Nous allons supprimer la  partition <strong>F:</strong> et le lecteur logique <strong>H:</strong>.</p>
<ul>
	<li>Ouvrez l'outil <strong>Gestion des disques</strong>, sélectionnez le lecteur <strong>F:</strong> puis dans le menu contextuel, choisissez <strong>Supprimer la partition... </strong>.</li>
	<li>Validez le message de confirmation.</li>
	<li>Sélectionnez le lecteur <strong>H:</strong> puis dans le menu contextuel, choisissez <strong>Supprimer un lecteur logique... </strong>.</li>
	<li>Validez le message de confirmation.</li>
</ul>

<h3><a href="#tdmchap17" name="chap17" id="chap17">1.g-Augmenter la taille d'une partition</a></h3>
<p>Nous voulons augmenter la taille de la partition <strong>E:</strong> à <strong>4 Go</strong>.</p>
<ul>
	<li> Pour ce faire, il faut d'abord <strong>supprimer</strong> la partition existante comme vu précédemment.</li>
	<li>Puis recréer une nouvelle partition en spécifiant le lecteur <strong>E:</strong> et une taille de <strong>4000 Mo</strong>. </li>
</ul>

<p class="notice remarque">Une partition ne peut être étendue par l'outil <strong>Gestion des disques</strong>. Il faut pour cela utiliser des outils comme <strong>Partition Magique </strong> (payant) ou <strong>Gparted</strong> (gratuit).</p>

	
<p>&nbsp;</p>

