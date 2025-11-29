<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours4b.php	v 1.0   16/08/07	13:37:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 4b										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '4b', '4c', '4a');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol start="2" id="xp" class="unstyled">
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Gérer des disques dynamiques</a>
		  <ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Convertir un disque de base en disque dynamique</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Créer un volume</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Formater un volume</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Étendre et supprimer  un volume</a></li>
		  </ol></li>
    </ol>
</aside>



<h1>Gestion des disques (b)</h1>
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
	
	<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Gestion des disques dynamiques</a></h2>
	<p>Sur un disque dynamique, le stockage est organisé en <strong>volumes</strong> et <strong>non en partitions</strong>. Les disques dynamiques permettent de créer des <strong>volumes</strong> pouvant s'<strong>étendre sur plusieurs disques</strong>. Un <strong>volume</strong> étant une partie d'un disque dynamique.</p>

	<p class="notice remarque">Les <strong>partitions</strong> d'un disque de base <strong>ne peuvent pas être supérieures en taille à un seul disque</strong> et un disque de base ne peut exéder <strong>2 téraoctets</strong>. En utilisant des disques dynamiques, vous pouvez disposer de <strong>volumes excédant les 2 téraoctets</strong> en les étendant sur plusieurs disques !</p>

	<p>Vous n'avez pas de restriction pour l'espace contigu lorsque vous voulez augmenter ou étendre la taille d'un volume.</p>
	
	<p class="notice remarque">Pour augmenter la taille d'une partition sur un disque de base, l'espace supplémentaire doit être <strong>non alloué et contigu</strong> !</p>
	
	<div class="notice alert">
      	<p>Vous ne pouvez cependant pas utiliser de disques dynamiques dans un système à double amorçage. Pour cela il faut nécessairement un disque de base.</p>
      	<p>Un disque dur ne peut être à la fois de base ou dynamique. Toutefois, si vous avez deux disques durs, vous pouvez configurer l'un en disque de base et l'autre en disque dynamique.</p>
	</div>

  	<h3><a href="#tdmchap21" name="chap21" id="chap21">2.a-Convertir un disque de base en disque dynamique</a></h3>
	<ul>
		<li>Faites un clic droit sur <strong>Disque 0</strong> dans l'outil <strong>Gestion des disques</strong>.</li>
	    <li>Dans le menu contextuel, sélectionnez <strong>Convertir en disque dynamique</strong>.</li>
	    <li>Choisissez le <strong>Disque 0</strong> et validez. </li>
	</ul>
<img src="/assets/img/xp/xp4/disqueaconvertir.png" alt="Disque à convertir" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Convertir</strong>.</li>
	</ul>
<img src="/assets/img/xp/xp4/messageconversion.png" alt="Message d'avertissement de conversion" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Oui</strong>.</li>
	</ul>
<img src="/assets/img/xp/xp4/messageconversion2.png" alt="Message d'avertissement de conversion" />
	<ul>
	    <li>Cliquez sur le bouton <strong>Oui</strong>.</li>
	</ul>
	<p>Pour terminer l'opération de conversion, l'ordinateur va redémarrer.</p>
	<p>Vous obtenez les modifications suivantes :</p>
	<img src="/assets/img/xp/xp4/GestionDisqueDynamique.png" alt="Gestion des disques dynamiques" />
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
	    <li>Redémarrer l'ordinateur.  </li>
	</ul>
	<img src="/assets/img/xp/xp4/diskpart.png" alt="commandes diskpart" />

	<p class="notice remarque">Lors de la conversion d'un <strong>disque de base</strong> en <strong>disque dynamique</strong>, les <strong>partitions</strong> sont  transformées en <strong>volumes simples</strong> et le disque contiendra une copie de la base de données des disques dynamiques.</p>
	<p class="notice info">Si vous <strong>créez</strong> ou <strong>supprimez</strong> un volume dynamique, cette <strong>base de données est mise à jour</strong>. En revanche, la <strong>table de partition</strong> sur le disque <strong>n'est pas mise à jour</strong> </p>

	<p class="notice alert">Un <strong>double amorçage n'est pas possible</strong> sur un disque dynamique. Seul le système d'exploitation en cours d'exécution lors de la conversion d'un disque de base en disque dynamique reconnaîtra le nouveau disque dynamique. </p>

	<p class="notice info">Si vous voulez revenir à un disque de base, il faudra d'abord supprimer tous les volumes avant la conversion. Ce qui implique une sauvegarde complète des données sur un autre support. </p>
	
	<h3><a href="#tdmchap22" name="chap22" id="chap22">2.b-Créer un volume</a></h3>
	<p>Nous allons créer deux volumes simples <strong>F:</strong> et <strong>H:</strong> d'une taille de 3 Go chacun.</p>
    <ul>
		<li>Dans l'espace disponible de votre disque, faites un clic droit et choisissez <strong>Nouveau nom</strong>.</li>
	    <li>L'<strong>Assistant Création d'un nouveau volume</strong> apparaît à l'écran, activez l'option <strong>Simple</strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp4/AssistantNouveauVolume2.png" alt="Assistant Création d'un nouveau volume2" />
	<ul>
	    <li>Dans l'écran suivant, spécifiez une taille de <strong>3000 Mo</strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp4/AssistantNouveauVolume3.png" alt="Assistant Création d'un nouveau volume3" />
	<ul>
	    <li>Dans la partie <strong>Attribuer une lettre de lecteur ou chemin d'accès</strong>, sélectionnez le lecteur <strong>F:</strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp4/AssistantNouveauVolume4.png" alt="Assistant Création d'un nouveau volume4" />
	<ul>
	    <li>Dans la dernière fenêtre <strong>Formater un volume</strong>, sélectionnez <strong>Ne pas formater ce volume</strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp4/AssistantNouveauVolume5.png" alt="Assistant Création d'un nouveau volume5" />


	
	<h3><a href="#tdmchap23" name="chap23" id="chap23">2.c-Formater un volume</a></h3>
	<p>Nous allons formater le premier volume en <strong>FAT32</strong> et le deuxième en <strong>NTFS</strong>.</p>
	<p class="notice remarque">L'outil <strong>Gestion des disques ne dispose pas</strong> du formatage <strong>FAT</strong> ni <strong>FAT32</strong>. Vous devrez pour cela utiliser l'<strong>explorateur Windows</strong>.</p>
	<ul>
	    <li>Ouvrez l'<strong>explorateur Windows</strong>.</li>
	    <li>Cliquez avec le bouton droit sur le disque <strong>F:</strong>, puis cliquez sur <strong>Formater</strong>.</li>
	    <li>Choisissez <strong>FAT32</strong>, puis cliquez sur <strong>Démarrer</strong>. </li>
	</ul>
	<img src="/assets/img/xp/xp4/formaterFat32.png" alt="Formater FAT32" />
	<ul>
	    <li>Relancez l'<strong>Assistant Nouveau volume</strong> et sélectionnez <strong>Simple</strong> dans le premier écran.</li>
	    <li>Spécifiez une taille de <strong>3000 Mo</strong> et indiquez la lettre de lecteur <strong>H:</strong>.</li>
	    <li>Dans la dernière fenêtre <strong>Formater un volume</strong>, sélectionnez le système de fichier <strong>NTFS</strong>.</li>
	</ul>
	<p>Vous devez obtenir l'écran suivant :</p>
	<img src="/assets/img/xp/xp4/GestionDisqueDynamique2.png" alt="Gestion des disques dynamiques 2" />	
	
	<h3><a href="#tdmchap24" name="chap24" id="chap24">2.d-Étendre et supprimer des volumes</a></h3>
	<p>Nous allons augmenter la taille des volumes <strong>F:</strong> et <strong>H:</strong> à <strong>4 Go</strong>.</p>

	<p class="notice remarque">Seuls les volumes <strong>formatés</strong> ( et <strong>non convertis</strong>) en <strong>NTFS</strong> peuvent être <strong>étendus</strong>.</p>

	<ul>
	    <li>Faites un clic droit sur le lecteur <strong>H:</strong> et sélectionnez <strong>Étendre le volume</strong>.</li>
	    <li>Sélectionnez <strong>Disque 0</strong> dans l'écran suivant et spécifiez la taille de <strong>1000 Mo</strong> pour obtenir la taille totale du volume désiré.  </li>
	</ul>  
	<p>Le lecteur <strong>F:</strong> étant formatté en <strong>FAT32</strong>, vous ne pouvez pas l'étendre. Vous devrez donc  le supprimer d'abord.</p>
	<ul>
	    <li>Faites un clic droit sur le lecteur concerné, puis sélectionnez <strong>Supprimer un volume</strong>.</li>
	    <li>Relancez l'<strong>Assistant Nouveau volume</strong> pour recréer un lecteur <strong>F:</strong> de <strong>4 Go</strong>.</li>
	</ul>
	<p>Vous obtiendrez l'écran suivant :</p>
	<img src="/assets/img/xp/xp4/GestionDisqueDynamique3.png" alt="Gestion des disques dynamiques 3" />

	<p class="notice remarque">Contrairement aux partitions, pour <strong>étendre un volume</strong>, l'espace alloué <strong>ne doit pas obligatoirement être contigu</strong> ou sur le même disque. </p>

	
<p>&nbsp;</p>

