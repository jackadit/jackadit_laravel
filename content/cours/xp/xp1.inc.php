<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours1.php 	v 1.0   16/04/07	14:01:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 1											|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '1');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Vérification de la configuration système requise</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Vérification de la compatibilité du matériel et des applications</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Choix des options d'installation</a>
			<ol class="alpha">
				  <li><a href="#chap3a" name="tdmchap3a" id="tdmchap3a">Partitionnement</a></li>
				  <li><a href="#chap3b" name="tdmchap3b" id="tdmchap3b">Système de fichier</a></li>
				  <li><a href="#chap3c" name="tdmchap3c" id="tdmchap3c">Groupe de travail ou domaine</a></li>
			</ol></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Installation de Windows XP Pro</a></li>
    </ol>
</aside>



<h1>Installation de Windows XP Professionnel</h1>
	<h3>Durée :</h3>
	<p>1 heures</p>
	<h3>Objectifs</h3>
	<ul>
	  <li>Vérifier la configuration système requise.</li>
	  <li>Vérifier la compatibilité du matériel et des applications.</li>
	  <li>Installer Windows XP Pro sur un poste vierge.</li>
	  <li>Automatiser la mise à jour du système vers Windows XP Pro.</li>
	  <li>Modifier les composants installés.</li>
	</ul>
	<h3>Prérequis</h3>
	<p>Aucun</p>
	<h3>Matériel à prévoir</h3>
	<p>Deux ordinateurs répondants aux pré-requis d'installation pour Windows XP et équipés au minimum d'un disque dur de 10 Go, d'un CD-Rom d'installation de Windows XP Pro.</p>
	<p>Un des deux postes doit être configuré avec le système d'exploitation Windows 98 ou NT Workstation. L'autre poste ne possède aucun système d'exploitation. </p>

	<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Vérification de la configuration système requise</a></h2>
	<table class="table">
	  <caption>
	  configuration système minimale requise
	  </caption>
	  <tr>
		<th scope="col">Composant</th>
		<th scope="col">Configuration système minimale requise</th>
		<th scope="col">Niveaux de système recommandés</th>
	  </tr>
	  <tr>
	  <th>Processeurs (jusqu'à deux)</th>
		<td>Pentium II, 233 MHz ou équivalent</td>
		<td>PII, 300 MHz ou équivalent</td>
	  </tr>
	  <tr>
	  <th>Mémoire Vive (RAM : min - max)</th>
		<td>64 Mo - 4 Go</td>
		<td>128 Mo - 4 Go</td>
	  </tr>
	  <tr>
	  <th>Espace disque dur</th>
		<td>2 Go avec 650 Mo libre (facultatif pour installation via un réseau)</td>
		<td>2 Go </td>
	  </tr>
	  <tr>
	  <th>Espace maximal du disque dur sur partition</th>
		<td>2 TéraOctets</td>
		<td>2 TéraOctets</td>
	  </tr>
	  <tr>
	  <th>Taille de la partition </th>
		<td>1,5 Go </td>
		<td>2 Go </td>
	  </tr>
	  <tr>
	  <th>Affichage</th>
		<td>Carte graphique VGA ou supérieur ; résolution d'écran : 800 x 600 </td>
		<td>Carte graphique compatible SVGA </td>
	  </tr>
	  <tr>
	  <th>Accessoires</th>
		<td>Clavier - souris ou autre dispositif de pointage - Lecteur CD-Rom</td>
		<td>Clavier - souris ou autre dispositif de pointage - Lecteur CD-Rom</td>
	  </tr>
	  <tr>
	  <th>Si installation réseau </th>
		<td>Client réseau ou disquette de démarrage</td>
		<td>Client réseau ou disquette de démarrage</td>
	  </tr>
	</table>

	<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Vérification de la compatibilité du matériel et des applications</a></h2>

	<p>Assurez-vous que tous vos périphériques appartiennent à la liste HCL (Hardware Compatibility List) en ouvrant le fichier HCL.txt qui se trouve dans le dossier "Support" de votre CD-ROM de Microsoft Windows XP.
La liste HCL sur le site Internet de Microsoft n'existe plus pour Windows XP, elle a été remplacée par sa version pour Windows 8.1 et Windows RT.</p>
	
	<p>Microsoft a testé et fournit des pilotes de périphérique pour tous les éléments de cette liste. Si votre matériel ne figure pas dans cette liste, contactez le fabricant pour vérifier s'il n'existe pas un pilote compatible avec Windows XP Pro.</p>
	<p>Si votre ordinateur possède déjà un système d'exploitation, vous pouvez exécuter l'analyseur de mise à niveau Microsoft. Celui-ci vérifie si vous avez installé un matériel ou un logiciel incompatible ou non reconnu.</p>
	<ul>
		<li>insérez le CD-Rom d'installation de Windows XP Pro</li>
        <li>cliquez sur démarrer, puis exécuter</li>
	    <li>saisissez <strong>E:\I386\winnt32 /checkupgradeonly</strong> (si votre lecteur de CD-Rom est le lecteur E:\)</li>
	</ul>
	<p>L'analyseur de mise à niveau affiche ensuite un rapport de compatibilité du système qui peut-être enregistré par défaut sous le nom <strong>Upgrade.txt</strong> dans le dossier Windows du lecteur local.</p>
	<p>Vérifiez également que votre <strong>BIOS</strong> est configuré pour amorcer votre système à partir du lecteur de CD-Rom.</p>
	<p class="notice remarque">Il existe des différences dans les procédures d'installation selon le système d'exploitation. De ce fait, il est parfois nécessaire de réinstaller certains logiciels après une mise à niveau à partir de Windows 98. </p>

	<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Choix des options d'installation</a></h2>
	<h3><a href="#tdmchap3a" name="chap3a" id="chap3a">3.a-Partitionnement</a></h3>
	<p>Le partitionnement permet de diviser un disque dur physique en plusieurs unités distinctes. Chacune pouvant être formatée indifféremment en FAT, FAT32 ou NTFS.</p>
	<p>Lors d'une installation à partir d'un CD-Rom, vous aurez, selon le cas, la possibilité de choisir parmi les options suivantes :</p>
	<ul>
	  <li>création d'une partition sur un disque dur non partitionné</li>
			<li>création d'une nouvelle partition sur un disque dur partitionné</li>
			<li>installation sur une partition existante</li>
			<li>suppression d'une partition</li>
	</ul>
	<p class="notice remarque">Ne créez et ne définissez la taille que de la partition sur laquelle vous désirez installez  Windows XP Pro. Utilisez l'outil de Gestion des disques pour partitionner l'espace restant.</p>
	<h3><a href="#tdmchap3b" name="chap3b" id="chap3b">3.b-Système de fichier</a></h3>
	<p>Une fois la partition créée, vous aurez la possibilité de la formater selon le système de fichier FAT, FAT32 ou NTFS. C'est ce dernier qui est recommandé pour Windows XP Pro. </p>
	<p>Le système NTFS (New Technology File System) offre un niveau de sécurité plus élevé et permet la compression de fichiers. NTFS est à utiliser lorsque vous avez besoin des fonctionnalités ci-dessous : </p>
	<ul>
		<li>sécurité au niveau des fichiers ou des dossiers</li>
	    <li>compression de fichiers</li>
	    <li>quotas de disque</li>
	    <li>cryptage de fichiers</li>
	</ul>
	<p class="notice remarque">Pour une partition supérieure à 2 Go, le formatage en FAT n'est pas possible et sera effectué automatiquement en FAT32. </p>
	<h3><a href="#tdmchap3c" name="chap3c" id="chap3c">3.c-Groupe de travail ou domaine</a></h3>
	<p>Avant d'installer Windows XP Pro, vous devez opter pour une installation en groupe de travail ou en domaine.</p>
	<p>Les caractéristiques d'un groupe de travail sont :  </p>
	<ul>
		<li>chaque ordinateur du groupe de travail peut contenir des ressources.</li>
	    <li>l'authentification et l'administration des utilisateurs est exécutée sur chaque ordinateur. </li>
	    <li>chaque ordinateur possède sa propre base de données locale pour le gestionnaire de comptes de sécurité (SAM, Security Accounts Manager). Ainsi chaque utilisateur doit avoir un compte sur chacun des ordinateurs du groupe de travail auquel il a besoin d'accéder. </li>
	    <li>plus un groupe de travail est grand, plus il devient difficile à gérer.</li>
	    <li>Windows XP Pro est limité à dix connexions entrantes simultanées.</li>
	</ul>
	<p class="notice remarque">Si vous devez installer Windows XP Pro sur un ordinateur autonome, votre configuration sera de type <strong>groupe de travail</strong>.</p>
	<p>Les caractéristiques d'un domaine sont :</p>
	<ul>
	    <li>les ressources, l'authentification et l'administration des utilisateurs est centralisée. </li>
	    <li>tous les comptes d'utilisateurs et d'ordinateur sont stockés dans une base de données d'annuaire utilisé par un service d'annuaire appelé <strong>Active directory</strong> . Ainsi chaque utilisateur n'a besoin que d' un seul compte d'utilisateur du domaine pour accéder aux ressources partagées du domaine. </li>
	    <li>la prise en charge d'un groupe d'ordinateur allant jusqu'à plusieurs milliers d'ordinateurs.</li>
	</ul>
	<p>Pour pouvoir intégrer un ordinateur à un domaine les conditions suivantes sont nécessaires :</p>
		<ul>
	    <li>la personne exécutant l'installation doit avoir un compte d'utilisateur dans Active Directory.</li>
	    <li>l'ordinateur doit avoir un compte d'ordinateur dans la base de données d'Active Directory ou la personne effectuant l'installation doit avoir l'autorisation de créer un compte d'ordinateur.</li>
	</ul>
	<p class="notice remarque">Pour intégrer un domaine, un ordinateur doit avoir le même nom que son nom de compte d'ordinateur dans Active Directory.</p>
	<p class="notice remarque">Tout utilisateur ayant un compte dans Active Directory peut créer jusqu'à dix comptes d'ordinateur.</p>
	
	<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Installation de Windows XP Pro</a></h2>
	<p>Voici les différentes étapes de l'installation :</p>
	<ul>
	<li>Démarrez l'ordinateur à partir du CD-Rom.</li>
	</ul>

	<ul>
	<li>Appuyez sur la touche <img src="/assets/img/xp/ToucheEntree.png" alt ="Touche Entree" width="49" height="30" /> pour installer Windows XP Pro maintenant.</li>
	</ul>
	<img src="/assets/img/xp/xp1/install0.png" alt ="Installation1" />
	<ul>
	<li>Acceptez le contrat de licence en appuyant sur la touche <strong><img src="/assets/img/xp/ToucheF8.png" alt="Touche F8" width="30" height="30" /></strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp1/install1.png" alt ="Installation2" />
	<ul>
	<li>Appuyez sur <strong>C</strong> pour créer une partition (spécifiez une taille de <strong>5 Go</strong>).</li>
	</ul>
	<img src="/assets/img/xp/xp1/install2.png" alt ="Installation3" />
	<img src="/assets/img/xp/xp1/install3.png" alt ="Installation4" />
	<ul>
	<li>Formatez la partition en utilisant le système <strong>NTFS</strong>.</li>
	</ul>

	<video controls="controls" poster="../img/xp/xp1/videoxp01.png" >
		<source src="../img/xp/xp1/videoxp01.mp4" type="video/mp4" />
		Votre navigateur ne prend pas en charge les vidéos HTML5.
	</video>

	<p>À partir de là, le système copie les fichiers sur le disque. À la suite de cette copie, cous serez amené à retirer le CD-Rom pour permettre le redémarrage du poste.</p>
	<p>L'installation en mode graphique démarre... Laissez le système installer les périphériques.</p>
	<ul>
		<li>Dans l'écran option régionales et linguistiques, validez les options par défaut.</li>
		<li>Indiquez votre nom et numéro de produit dans les écrans suivants.</li>
		<li>Saisissez le nom de l'ordinateur : <strong>Ordi1</strong></li>
	    <li>Saisissez le mot de passe pour l'administrateur : <strong>mdp1</strong></li>
	</ul>
	<p>Dans l'écran Réglage de la date et de l'heure, vérifiez que les paramètres correspondent à :</p>
	<ul>
		<li>Fuseau horaire : <strong>GMT+01 : Brussels, Copenhagen, Madrid, Paris</strong></li>
    </ul>	
	<video controls="controls" poster="../img/xp/xp1/videoxp03.png" >
		<source src="../img/xp/xp1/videoxp03.mp4" type="video/mp4" />
		Votre navigateur ne prend pas en charge les vidéos HTML5.
	</video>

	<p>Pour la configuration réseau laissez les paramètres par défaut permettant d'installer le protocole TCP/IP et d'obtenir automatiquement une adresse IP.</p>
	<ul>
	    <li>saisissez ensuite le nom du groupe de travail : <strong>GTXP</strong></li>
	</ul>
	<p>Après installation de plusieurs éléments, le système va redémarrer une deuxième fois.</p>
	
	<video controls="controls" poster="../img/xp/xp1/videoxp04.png" >
		<source src="../img/xp/xp1/videoxp04.mp4" type="video/mp4" />
		Votre navigateur ne prend pas en charge les vidéos HTML5.
	</video>
	<p>Configurez les paramètres d'affichage avec les éléments suivants :</p>
	<ul>
		<li>Résolution d'écran : <strong>1024 x 768</strong></li>
        <li>Ignorez les étapes de la connectivité internet</li>
	    <li>Répondez par la négative à la question : &quot;Êtes-vous prêt à vous enregistrer auprès de microsoft ?&quot;</li>
	</ul>	
	<p>Créez deux utilisateurs nommés <strong>Util1</strong> et <strong>Util2</strong> lorsque vous y êtes invité.</p>
	<p>Enregistrez-vous si besoin auprès de Microsoft pour activer Windows XP Pro (vous disposez  de 30 jours pour effectuer cette opération).</p>
	<p>Fermez la session puis connectez-vous en tant que chacun des utilisateurs créés précédemment pour vérifier le bon fonctionnement de l'installation.</p>
	<ul>
		<li>Cliquez sur Démarrer > Panneau de configuration > Outils d'aministration > gestion de l'ordinateur.</li>
        <li>Développez  l'Observateur d'événements et consultez le journal système.</li>
	    <li>Vérifiez qu'il n'y a aucun message d'erreur (avec une croix rouge). Sinon, double-cliquez sur le message pour visualiser le détail et remédiez aux éventuels problèmes constatés. </li>
	</ul>
	

