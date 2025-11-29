<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours4.php					v 1.0   16/04/07	15:52:00	|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 4											|
	+---------------------------------------------------------------+
*/
?>
<div class="navig">
<a href="index?p=xpcours3">&laquo; Précédent</a> - Cours4 - <a href="/cours/qlio/xpcours/5">Suivant &raquo;</a> <a href="/cours/qlio/xp_intro">Table des matières</a>
</div>
<div id="tdm" class="dockclass">
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
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
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Gérer des disques dynamiques</a>
		  <ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Convertir un disque de base en disque dynamique</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Créer un volume</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Formater un volume</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Étendre et supprimer  un volume</a></li>
		  </ol></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Modifier la lettre de lecteur</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Monter un volume</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Ajouter un disque</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Créer un volume fractionné et un agrégat par bandes (RAID 0)</a></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Supprimer un disque</a></li>
		<li><a href="#chap8" name="tdmchap8" id="tdmchap8">Surveiller et optimiser disques</a></li>
	</ol>
</div>
<div id="cours">
<h2>Durée :</h2>
	<p>1 heures 30</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Apprendre à gérer les disques : création de partitions, de volumes...</li>
      <li>Maîtriser les différents systèmes de fichiers</li>
	  <li>Savoir optimiser la gestion des disques, modifier la configuration existante</li>
	  <li>Dépanner votre système  </li>
	</ul>
	<h2>Prérequis</h2>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur configuré avec Windows XP, équipés d'un disque dur de 10 Go et d'un disque dur supplémentaire pour l'énoncé 5.</p>
	
	<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Gestion des disques de base</a></h1>
	
	<p>Les disques de base constituent le support de stockage par défaut de Windows XP. l'avantage d'un disque de base est qu'il peut être lu localement par toutes les versions antérieures de Windows, à condition d'être formaté dans un format reconnu par le système d'exploitation.</p>
	<p>Un disque de base peut être divisé en parties plus petites de stockage. En général cela se fait en deux parties. La première  pour le système d'exploitation et la deuxième pour les données.</p>
	<p>Mais il est également utile de diviser le disque dur en parties pour un double amorçage dans lequel chaque système d'exploitation est installe sur une partie distincte.</p>
	<p>Les parties d'un disque de base sont des<strong> volumes de base</strong> ou des <strong>partitions</strong>.</p>
	<p>Les types de partitions disponibles sont :</p>
	<ol>
		<li><strong>Partition principale</strong> : vous pouvez disposez au <strong>maximum de quatre</strong> partitions principales.</li>
	    <li><strong>Partition étendue</strong> : vous pouvez subdiviser une partition étendue en <strong>lecteurs logiques</strong>. Elle est utilisée lorsque vous voulez créer plus de quatre zones de stockage sur un disque de base.</li>
	</ol>
	<h2><a href="#tdmchap11" name="chap11" id="chap11">1.a-Créez deux partitions principales E: et F:</a></h2>
	<p>Pour créer les partitions principales, vous pouvez utiliser l'outil d'administration <strong>Gestion des disques</strong> ou utiliser l'outil en ligne de commande <strong>DiskPart</strong>.</p>

	<p class="notice remarque">Pour accéder à la liste des commandes de <strong>DiskPart</strong>, saisissez <strong>commands</strong> à l'invite <strong>diskpart</strong>.</p>
	
	<img src="../images/xp/xp4/diskpartcommands.png" alt="commandes diskpart" />
	<ul>
		<li>Cliquez avec le bouton droit sur le <strong>Poste de travail</strong> et sélectionnez <strong>Gérer</strong>.</li>
	    <li>Dans la fenêtre <strong>Gestion de l'ordinateur</strong>, double-cliquez sur <strong>Gestion des disques</strong>.</li>
	</ul>

	<p class="notice remarque">Vous pouvez également accéder à cet outil en passant par <strong>Démarrer > Panneau de configuration > Performance et maintenance &gt; Outils d'administration &gt; Gestion de l'ordinateur</strong>.</p>

	<img src="../images/xp/xp4/GestionDisque.png" alt="Gestion des disques" />
	<ul>
		<li>Dans l'espace non alloué, faites un clic droit et choisissez <strong>Nouvelle partition</strong> .</li>
	    <li>Dans l'<strong>Assistant Nouvelle Partition</strong> apparu à l'écran, activez l'option <strong>Partition principale</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouvellePartition1.png" alt="Assistant Nouvelle Partition 1" />
	<ul>
	    <li>Dans l'écran suivant spécifiez une taille de <strong>3000 Mo</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouvellePartition2.png" alt="Assistant Nouvelle Partition 2" />
	<ul>
	    <li>Dans la partie <strong>Attribuer une lettre de lecteur ou un chemin d'accès</strong>, le système doit vous proposer la valeur par défaut <strong>E:</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouvellePartition3.png" alt="Assistant Nouvelle Partition 3" />
	<ul>
	    <li>Dans le dernière fenêtre <strong>Formater une partition</strong>, sélectionnez le système de fichier <strong>FAT32</strong>. </li>
	</ul>	
	<img src="../images/xp/xp4/AssistantNouvellePartition4.png" alt="Assistant Nouvelle Partition 4" />
	<p>Le <strong>Gestionnaire de disque</strong> va créer et formater la partition pour obtenir le système suivant :</p>
	<img src="../images/xp/xp4/GestionDisque2.png" alt="Gestionnaire de disque 2" />
	
	
	<h2><a href="#tdmchap12" name="chap12" id="chap12">1.b-Formater une partition</a></h2>
	<p>Nous allons cette fois-ci formater la deuxième partition en NTFS.</p>
	<ul>
		<li>Relancez l'<strong>Assistant Nouvelle Partition</strong>.</li>
	    <li>Dans la fenêtre <strong>Sélection du type de partition</strong>, activez l'option <strong>Partition principale</strong>.</li>
		<li>Dans l'écran suivant spécifiez une taille de <strong>3000 Mo</strong>.</li>
	    <li>Dans la partie <strong>Attribuer une lettre de lecteur ou un chemin d'accès</strong>, le système doit vous proposer la valeur par défaut <strong>F:</strong>.</li>
	    <li>Dans le dernière fenêtre <strong>Formater une partition</strong>, sélectionnez le système de fichier <strong>NTFS</strong> et laissez les autres options par défaut.</li>
	</ul>
	<p>Le <strong>Gestionnaire de disque</strong> va créer et formater la partition pour obtenir le système suivant :</p>
	<img src="../images/xp/xp4/GestionDisque3.png" alt="Gestionnaire de disque 3" />
	
	<h2><a href="#tdmchap13" name="chap13" id="chap13">1.c-Créer une partition étendue</a></h2>
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
	<img src="../images/xp/xp4/GestionDisque4.png" alt="Gestionnaire de disque 4" />
	
	<h2><a href="#tdmchap14" name="chap14" id="chap14">1.d-Formater une partition</a></h2>
	<p>Nous voulons formater le premier lecteur en <strong>FAT32</strong> et le deuxième en <strong>NTFS</strong> en utilisant deux méthodes différentes.</p>
	<ul>
		<li>Faites un clic droit sur <strong>G:</strong> dans l'outil <strong>Gestion des disques</strong>, puis sélectionnez <strong>Formater</strong>.</li>
	    <li>Laissez le nom de volume vierge et choisissez <strong>FAT32</strong>.</li>
    </ul>
	<p>Pour formater le deuxième lecteur en <strong>NTFS</strong>, nous allons utiliser l'<strong>invite de commandes MS-Dos</strong> en cliquant sur <strong>Démarrer > Exécuter</strong>, puis saisissez <strong>cmd</strong> et validez.</p>
	<ul>
		<li>Saisissez la commande suivante : <strong>format H: /FS:NTFS</strong>.</li>
    </ul>
	<img src="../images/xp/xp4/invitecommandeformat.png" alt="Invite de commande Format H: /FS:NTFS" />
	<ul>
		<li>Laissez le nom de volume vierge et validez.</li>
    </ul>
	<blockquote>
	  <p>Pour plus d'informations sur la commande <strong>format</strong>, saisissez<strong> help format</strong> dans l'invite de commandes.</p>
	</blockquote>
	<p>Vous pouvez vérifier le fonctionnement des différentes partitions en essayant de créer un dossier dans chacune d'elles.</p>
		
	<h2><a href="#tdmchap15" name="chap15" id="chap15">1.e-Convertir une partition FAT en NTFS</a></h2>
	<p>Nous allons convertir les lecteurs <strong>E:</strong> et <strong>G:</strong> en <strong>NTFS</strong> de deux manières différents.</p>
	<ul>
		<li>Cliquez sur <strong>Démarrer > Exécuter</strong>, puis saisissez <strong>cmd</strong>.</li>
		<li>Saisissez la commande suivante : <strong>convert E: /FS:NTFS</strong> et validez.</li>
    </ul>
	<img src="../images/xp/xp4/invitecommandeconvert.png" alt="Invite de commande convert E: /FS:NTFS" />
	<ul>
		<li>Une fois la conversion terminée vous obtenez l'écran suivant : </li>
    </ul>
	<img src="../images/xp/xp4/invitecommandeconverttermine.png" alt="écran de conversion terminé" />	
	<ul>
		<li>Faites un clic droit sur <strong>G:</strong> dans l'outil <strong>Gestion des disques</strong>, puis sélectionnez <strong>Convertir en NTFS</strong>.</li>
	    <li>Acceptez le message de confirmation.</li>
    </ul>

	
	<h2><a href="#tdmchap16" name="chap16" id="chap16">1.f-Supprimer une partition</a></h2>
	<p> Nous allons supprimer la  partition <strong>F:</strong> et le lecteur logique <strong>H:</strong>.</p>
	<ul>
		<li>Ouvrez l'outil <strong>Gestion des disques</strong>, sélectionnez le lecteur <strong>F:</strong> puis dans le menu contextuel, choisissez <strong>Supprimer la partition... </strong>.</li>
        <li>Validez le message de confirmation.</li>
		<li>Sélectionnez le lecteur <strong>H:</strong> puis dans le menu contextuel, choisissez <strong>Supprimer un lecteur logique... </strong>.</li>
        <li>Validez le message de confirmation.</li>
	</ul>
	
	<h2><a href="#tdmchap17" name="chap17" id="chap17">1.g-Augmenter la taille d'une partition</a></h2>
	<p>Nous voulons augmenter la taille de la partition <strong>E:</strong> à <strong>4 Go</strong>.</p>
	<ul>
		<li> Pour ce faire, il faut d'abord <strong>supprimer</strong> la partition existante comme vu précédemment.</li>
	    <li>Puis recréer une nouvelle partition en spécifiant le lecteur <strong>E:</strong> et une taille de <strong>4000 Mo</strong>. </li>
	</ul>

	<p class="notice remarque">Une partition ne peut être étendue par l'outil <strong>Gestion des disques</strong>. Il faut pour cela utiliser des outils comme <strong>Partition Magique </strong> (payant) ou <strong>Gparted</strong> (gratuit).</p>

	
	<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Gestion des disques dynamiques</a></h1>
	<p>Sur un disque dynamique, le stockage est organisé en <strong>volumes</strong> et <strong>non en partitions</strong>. Les disques dynamiques permettent de créer des <strong>volumes</strong> pouvant s'<strong>étendre sur plusieurs disques</strong>. Un <strong>volume</strong> étant une partie d'un disque dynamique.</p>

	<p class="notice remarque">Les <strong>partitions</strong> d'un disque de base <strong>ne peuvent pas être supérieures en taille à un seul disque</strong> et un disque de base ne peut exéder <strong>2 téraoctets</strong>. En utilisant des disques dynamiques, vous pouvez disposer de <strong>volumes excédant les 2 téraoctets</strong> en les étendant sur plusieurs disques !</p>

  	<p>Vous n'avez pas de restriction pour l'espace contigu lorsque vous voulez augmenter ou étendre la taille d'un volume.</p>
	
	<p class="notice remarque">Pour augmenter la taille d'une partition sur un disque de base, l'espace supplémentaire doit être <strong>non alloué et contigu</strong> !</p>
	
	<div class="notice alert">
      	<p>Vous ne pouvez cependant pas utiliser de disques dynamiques dans un système à double amorçage. Pour cela il faut nécessairement un disque de base.</p>
      	<p>Un disque dur ne peut être à la fois de base ou dynamique. Toutefois, si vous avez deux disques durs, vous pouvez configurer l'un en disque de base et l'autre en disque dynamique.</p>
	</div>

  	<h2><a href="#tdmchap21" name="chap21" id="chap21">2.a-Convertir un disque de base en disque dynamique</a></h2>
	<ul>
		<li>Faites un clic droit sur <strong>Disque 0</strong> dans l'outil <strong>Gestion des disques</strong>.</li>
	    <li>Dans le menu contextuel, sélectionnez <strong>Convertir en disque dynamique</strong>.</li>
	    <li>Choisissez le <strong>Disque 0</strong> et validez. </li>
	</ul>
<img src="../images/xp/xp4/disqueaconvertir.png" alt="Disque à convertir" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Convertir</strong>.</li>
	</ul>
<img src="../images/xp/xp4/messageconversion.png" alt="Message d'avertissement de conversion" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Oui</strong>.</li>
	</ul>
<img src="../images/xp/xp4/messageconversion2.png" alt="Message d'avertissement de conversion" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Oui</strong>.</li>
	</ul>
	<p>Pour terminer l'opération de conversion, l'ordinateur va redémarrer.</p>
	<p>Vous obtenez les modifications suivantes :</p>
	<img src="../images/xp/xp4/GestionDisqueDynamique.png" alt="Gestion des disques dynamiques" />
	<p>Vous pouvez également utiliser les lignes de commandes pour convertir un disque de base en disque dynamique. </p>
	<ul>
	    <li>Ouvrez une invite de commande et saisissez <pre>diskpart</pre></li>
	    <li>
	      &Agrave; l'invite diskpart, saisissez : <pre>select disk 0</pre>
	    </li>
	    <li>
	      Saisissez ensuite : 
	        <pre>convert dynamic</pre>
	    </li>
	    <li>
	      Refermer l'invite en saisissant : 
	        <pre>exit</pre>
	    </li>
	    <li>Red�marrer l'ordinateur.  </li>
	</ul>
	<img src="../images/xp/xp4/diskpart.png" alt="commandes diskpart" />

	<p class="notice remarque">Lors de la conversion d'un <strong>disque de base</strong> en <strong>disque dynamique</strong>, les <strong>partitions</strong> sont  transformées en <strong>volumes simples</strong> et le disque contiendra une copie de la base de données des disques dynamiques.</p>
	<p class="notice info">Si vous <strong>créez</strong> ou <strong>supprimez</strong> un volume dynamique, cette <strong>base de données est mise à jour</strong>. En revanche, la <strong>table de partition</strong> sur le disque <strong>n'est pas mise à jour</strong> </p>

	<p class="notice alert">Un <strong>double amorçage n'est pas possible</strong> sur un disque dynamique. Seul le système d'exploitation en cours d'exécution lors de la conversion d'un disque de base en disque dynamique reconnaîtra le nouveau disque dynamique. </p>

	<p class="notice info">Si vous voulez revenir à un disque de base, il faudra d'abord supprimer tous les volumes avant la conversion. Ce qui implique une sauvegarde complète des données sur un autre support. </p>
	
	<h2><a href="#tdmchap22" name="chap22" id="chap22">2.b-Créer un volume</a></h2>
	<p>Nous allons créer deux volumes simples <strong>F:</strong> et <strong>H:</strong> d'une taille de 3 Go chacun.</p>
    <ul>
		<li>Dans l'espace disponible de votre disque, faites un clic droit et choisissez <strong>Nouveau nom</strong>.</li>
	    <li>L'<strong>Assistant Création d'un nouveau volume</strong> apparaît à l'écran, activez l'option <strong>Simple</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouveauVolume2.png" alt="Assistant Création d'un nouveau volume2" />
	<ul>
	    <li>Dans l'écran suivant, spécifiez une taille de <strong>3000 Mo</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouveauVolume3.png" alt="Assistant Création d'un nouveau volume3" />
	<ul>
	    <li>Dans la partie <strong>Attribuer une lettre de lecteur ou chemin d'accès</strong>, sélectionnez le lecteur <strong>F:</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouveauVolume4.png" alt="Assistant Création d'un nouveau volume4" />
	<ul>
	    <li>Dans la dernière fenêtre <strong>Formater un volume</strong>, sélectionnez <strong>Ne pas formater ce volume</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantNouveauVolume5.png" alt="Assistant Création d'un nouveau volume5" />


	
	<h2><a href="#tdmchap23" name="chap23" id="chap23">2.c-Formater un volume</a></h2>
	<p>Nous allons formater le premier volume en <strong>FAT32</strong> et le deuxième en <strong>NTFS</strong>.</p>
	<p class="notice remarque">L'outil <strong>Gestion des disques ne dispose pas</strong> du formatage <strong>FAT</strong> ni <strong>FAT32</strong>. Vous devrez pour cela utiliser l'<strong>explorateur Windows</strong>.</p>

	<ul>
	    <li>Ouvrez l'<strong>explorateur Windows</strong>.</li>
	    <li>Cliquez avec le bouton droit sur le disque <strong>F:</strong>, puis cliquez sur <strong>Formater</strong>.</li>
	    <li>Choisissez <strong>FAT32</strong>, puis cliquez sur <strong>Démarrer</strong>. </li>
	</ul>
	<img src="../images/xp/xp4/formaterFat32.png" alt="Formater FAT32" />
	<ul>
	    <li>Relancez l'<strong>Assistant Nouveau volume</strong> et sélectionnez <strong>Simple</strong> dans le premier écran.</li>
	    <li>Spécifiez une taille de <strong>3000 Mo</strong> et indiquez la lettre de lecteur <strong>H:</strong>.</li>
	    <li>Dans la dernière fenêtre <strong>Formater un volume</strong>, sélectionnez le système de fichier <strong>NTFS</strong>.</li>
	</ul>
	<p>Vous devez obtenir l'écran suivant :</p>
	<img src="../images/xp/xp4/GestionDisqueDynamique2.png" alt="Gestion des disques dynamiques 2" />	
	
	<h2><a href="#tdmchap24" name="chap24" id="chap24">2.d-Étendre et supprimer des volumes</a></h2>
	<p>Nous allons augmenter la taille des volumes <strong>F:</strong> et <strong>H:</strong> à <strong>4 Go</strong>.</p>

	<p class="notice remarque">Seuls les volumes <strong>formatés</strong> ( et <strong>non convertis</strong>) en <strong>NTFS</strong> peuvent être <strong>étendus</strong>.</p>

	<ul>
	    <li>Faites un clic droit sur le lecteur <strong>H:</strong> et sélectionnez <strong>étendre le volume</strong>.</li>
	    <li>Sélectionnez <strong>Disque 0</strong> dans l'écran suivant et spécifiez la taille de <strong>1000 Mo</strong> pour obtenir la taille totale du volume désiré.  </li>
	</ul>  
	<p>Le lecteur <strong>F:</strong> étant formaté en <strong>FAT32</strong>, vous ne pouvez pas l'étendre. Vous devrez donc  le supprimer d'abord.</p>
	<ul>
	    <li>Faites un clic droit sur le lecteur concern�é, puis sélectionnez <strong>Supprimer un volume</strong>.</li>
	    <li>Relancez l'<strong>Assistant Nouveau volume</strong> pour recréer un lecteur <strong>F:</strong> de <strong>4 Go</strong>.</li>
	</ul>
	<p>Vous obtiendrez l'écran suivant :</p>
	<img src="../images/xp/xp4/GestionDisqueDynamique3.png" alt="Gestion des disques dynamiques 3" />

	<p class="notice remarque">Contrairement aux partitions, pour <strong>étendre un volume</strong>, l'espace alloué <strong>ne doit pas obligatoirement être contigu</strong> ou sur le même disque. </p>

	
<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Modifier la lettre de lecteur</a></h1>
<p>Nous allons maintenant modifier les lettres des lecteurs <strong>F:</strong> en <strong>U:</strong> et <strong>H:</strong> en <strong>V:</strong></p>
	<ul>
	    <li>Faites un clic droit sur le volume <strong>F:</strong> et choisissez <strong>Modifier la lettre de lecteur </strong>. Indiquez <strong>U:</strong> et validez. </li>
	    <li>Répétez cette opération pour transformer le lecteur <strong>H:</strong> en <strong>V:</strong>.</li>
	</ul>  
<h1><a href="#tdmchap4" name="chap4" id="chap4">4-Monter un volume</a></h1>
<p class="notice remarque"><strong>Monter un volume</strong> consiste à <strong>créer un branchement virtuel d'un espace de stockage</strong> (une partition, un volume ou un disque) sur un <strong>dossier vide</strong> d'une partition ou d'un <strong>volume NTFS local</strong>.</p>
<p>De ce fait vous aurez un seul lecteur dont les fichiers sont en réalités stockés sur des volumes distincts.</p>
<p>Dans un premier temps nous allons monter le lecteur <strong>U:</strong> dans un dossier <strong>Montage</strong> sur le lecteur <strong>V:</strong>. </p>
	<ul>
	    <li>Créez un dossier sur <strong>V:</strong> que vous nommerez <strong>Montage</strong>.</li>
	    <li>Relancez l'<strong>Assistant création d'un nouveau volume</strong> et cliquez avec le bouton droit sur le lecteur <strong>U:</strong>.</li>
	    <li>Sélectionnez <strong>Modifier la lettre de lecteur et les chemins d'accès</strong>.</li>
    </ul>
	<img src="../images/xp/xp4/MonterVolume1.png" alt="Monter un volume 1" />
	<ul>
	    <li>Cliquez sur <strong>Ajouter</strong>.</li>
	    <li>Dans <strong>Monter dans le dossier NTFS vide suivant</strong>, saisissez le chemin d'accès au dossier <strong>Montage</strong> ou cliquez sur <strong>Parcourir</strong> pour l'atteindre.</li>
	</ul>
	<img src="../images/xp/xp4/MonterVolume2.png" alt="Monter un volume 2" />
	<p>Maintenant nous allons monter <strong>un nouveau volume local</strong> dans un dossier <strong>Données</strong> situé dans <strong>Mes documents</strong>.</p>
	<ul>
	    <li>Créez un dossier <strong>Données</strong> dans <strong>Mes documents</strong>.</li>
	    <li>Relancez l'<strong>Assistant création d'un nouveau volume</strong> et cliquez avec le bouton droit sur un espace non alloué puis sélectionnez <strong>Nouveau nom </strong>.</li>
	    <li>Sélectionnez le <strong>disque 0</strong> et attribuez la taille <strong>2000 Mo</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	    <li>Sélectionnez <strong>Monter dans le dossier vide suivant </strong>et saisissez le chemin d'accès au dossier <strong>Données</strong> ou cliquez sur <strong>Parcourir</strong> pour l'atteindre.</li>
        <li>Formatez le volume en NTFS.</li>
	</ul>

  <p class="notice remarque">Pour afficher les chemins d'accès existants dans l'outil <strong>Gestion des disques</strong>, cliquez sur <strong>Affichage</strong>, puis sur <strong>Chemins d'accès de lecteurs</strong>.</p>

<img src="../images/xp/xp4/MonterVolume3.png" alt="Afficher les chemins d'accès existants" />

  <p class="notice remarque">Pour <strong>modifier</strong> un chemin d'accès, vous devez le <strong>supprimer</strong> puis le <strong>recréer</strong>.</p>


<h1><a href="#tdmchap5" name="chap5" id="chap5">5-Ajouter un disque</a></h1>

<p>Pour ajouter un second disque sur votre ordinateur vous devez arrêter votre système. Le disque dur ajouté doit être reconnu dans le BIOS de votre machine au redémarrage.</p>
<ul>
	<li>Dans l'outil <strong>Gestion des disques</strong>,  votre nouveau disque devrait apparaître sous <strong>Disque 1</strong> avec l'état <strong>Connecté</strong>.</li>
	<li>Si ce n'est pas le cas, cliquez sur <strong>Action &gt; Analyser les disques de nouveau</strong>.</li>
	<li>S'il n'est pas dans l'état connecté, cliquez avec le bouton droit sur <strong>Disque 1</strong> et sélectionnez <strong>Importer des disques étrangers</strong>.</li>
</ul>
<p>Pour les besoins de l'exercice, créez un <strong>disque dynamique</strong> de <strong>1 Go</strong>.</p>
<img src="../images/xp/xp4/AjoutDisque1.png" alt="Ajouter un disque dynamique" />

<h1><a href="#tdmchap6" name="chap6" id="chap6">6-Créer un volume fractionné et un agr"gat par bandes (RAID 0)</a></h1>
<p>Pour les besoins de cet exercice, supprimez tous les volumes créés sur le premier disque sauf le lecteur <strong>U:</strong>.</p>
<p>Vous devez obtenir l'écran suivant :</p>
<img src="../images/xp/xp4/AjoutDisque2.png" alt="Ajouter un disque dynamique 2" />
<p>Nous voulons créer un <strong>volume fractionné</strong> de <strong>12 Go</strong> sur le <strong>disque 0</strong>, puis un <strong>agr"gat par bande</strong>s en utilisant le maximum d'espace disponible sur les deux disques. </p>
	<ul>
		<li>Dans l'<strong>Assistant création d'un nouveau volume</strong>, sélectionnez <strong>Volume fractionné</strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantFractionne1.png" alt="Assistant Fractionné 1" />
	<ul>
        <li>Dans l'écran <strong>Sélection de disque</strong>, les disques <strong>disque 0</strong> et <strong>disque 1 </strong>doivent apparaître dans la zone de droite.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantFractionne2.png" alt="Assistant Fractionné 2" />
	<ul>
        <li>Sélectionnez une taille de <strong>6000 Mo</strong> pour chacun.</li>
        <li>Spécifiez un lecteur et le système de fichiers <strong>NTFS</strong>.</li>
	</ul>
<p>Vous obtenez l'écran suivant :</p>
<img src="../images/xp/xp4/AssistantFractionne3.png" alt="Assistant Fractionné 3" />

	<ul>
		<li>Dans l'<strong>Assistant création d'un nouveau volume</strong>, sélectionnez <strong>Agrégé par bandes </strong>.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantAgrege1.png" alt="Agrégat par bandes 1" />
	<ul>
        <li>Dans l'écran <strong>Sélection de disque</strong>, les deux disques doivent apparaître dans la zone de droite.</li>
	</ul>
	<img src="../images/xp/xp4/AssistantAgrege2.png" alt="Agrégat par bandes 2" />

	<p class="notice remarque">Malgré que le disque 0 ait 15,35 Go de disponible, c'est la capacité du disque 1 avec 9,16 Go qui déterminera la taille de l'agr"gat par bandes. </p>

	<img src="../images/xp/xp4/AssistantAgrege3.png" alt="Agrégat par bandes 3" />
	<ul>
        <li>Spécifiez un lecteur et le système de fichiers <strong>NTFS</strong>.</li>
	</ul>
<p>Vous obtenez l'écran suivant :</p>
<img src="../images/xp/xp4/AssistantAgrege4.png" alt="Agrégat par bandes 4" />

<h1><a href="#tdmchap7" name="chap7" id="chap7">7-Supprimer un disque</a></h1>
<p>Nous allons supprimer le disque 1 créé précédemment. Pour cela : </p>
	<ul>
		<li>Supprimez le <strong>volume agrégé par bandes</strong>.</li>
	    <li>Supprimez le volume simple <strong>F:\</strong>.</li>
	    <li>Supprimez le volume simple <strong>E:\</strong>.></li>
	    <li>Arrêtez votre ordinateur et enlever le <strong>disque 1</strong>.</li>
	    <li>Red�marrer votre système et vérifiez que seul le <strong>disque 0</strong> persiste.</li>
	</ul>
<p>Si ce n'est pas le cas :</p>
	<ul>
		<li>Utilisez la commande <strong>Action > Analyser les disques de nouveau</strong>.</li>
	    <li>Si le <strong>disque 1</strong> est toujours représenté, activez son menu contextuel et sélectionnez <strong>Supprimer</strong> .</li>
	</ul>
<img src="../images/xp/xp4/SupprimerDisque.png" alt="Supprimer un disque" />

<h1><a href="#tdmchap8" name="chap8" id="chap8">8-Surveiller et optimiser un disque</a></h1>
<p>Pour vérifier l'état de vos disques, vous pouvez utiliser l'utilitaire suivant :</p>
<ul>
	<li>Ouvrez le <strong>Poste de travail</strong>. </li>
    <li>Cliquez avec le bouton droit sur le disque à vérifier et cliquez sur <strong>Propriétés</strong>.</li>
    <li>Cliquez sur l'onglet <strong>Outils</strong>.</li>
    <li>Cliquez sur <strong>Vérifiez maintenant</strong>, puis sur <strong>Démarrer</strong>. </li>
</ul>
<img src="../images/xp/xp4/OutilsVerifier1.png" alt="Outils vérification 1" />
<p>En cas de besoin, cochez les cases correspondantes dan la zone Options de vérification du disque pour que le système tente de réparer les secteurs défectueux.</p>
<p>Si vous voulez vérifier le disque système, vous devrez relancer votre ordinateur après le message suivant :</p>
<img src="../images/xp/xp4/OutilsVerifier2.png" alt="Outils vérification 2" />
<p>Pour effectuer une analyse de vos disques, vous pouvez utiliser l'<strong>outil de défragmentation de disque</strong>.</p>
<ul>
    <li>Cliquez avec le bouton droit sur le disque à vérifier et cliquez sur <strong>Propriétés</strong>.</li>
    <li>Cliquez sur l'onglet <strong>Outils</strong>.</li>
	<li>Cliquez sur <strong>Défragmenter maintenant</strong>, puis sur <strong>Analyser</strong>.</li>
    <li>Au besoin, cliquez sur <strong>Défragmenter</strong>.</li>
</ul>
<img src="../images/xp/xp4/Defragmenter1.png" alt="Défragmenter" />

<p class="notice remarque">Pendant la défragmentation, vous ne devez pas ouvrir d'application ; suivant la taille de vos disques, le processus sera plus ou moins long ; Répétez l'opération pour chacun des volumes configurés.</p>

<div class="notice remarque">
<p>Vous pouvez également accéder à cet outil par :</p>
<p><strong>Démarrer &gt; Tous les programmes &gt; Accessoires &gt; Outils système &gt; Défragmenteur de disque</strong></p>
<p>ou</p>
<p><strong>Démarrer &gt; Panneau de configuration &gt; Performance et maintenance &gt; Réorganiser les éléments sur votre disque dur ...</strong> </p>
</div>

<p>&nbsp;</p>
</div>
<div class="navig">
<a href="index?p=xpcours3">&laquo; Précédent</a> - Cours4 - <a href="/cours/qlio/xpcours/5">Suivant &raquo;</a> <a href="/cours/qlio/xp_intro">Table des matières</a>
</div>
<!-- Fin contenu -->