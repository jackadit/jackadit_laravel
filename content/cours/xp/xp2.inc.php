<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpindex.php	v 1.0   09/05/07	22:38:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 2											|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '2', '3a');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Transfert des paramètres et fichiers utilisateur à l'aide de l'outil USMT</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Vérifier la compatibilité</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Migration des fichiers et des paramètres utilisateur</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Modification des composants installés</a>
			<ol class="alpha">
				<li><a href="#chap51" name="tdmchap51" id="tdmchap51">Suppression d'un composant</a></li>
				<li><a href="#chap52" name="tdmchap52" id="tdmchap52">Ajout d'un composant</a></li>
			</ol></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Manipulation de base sur le poste Windows XP</a>
			<ol class="alpha">
				<li><a href="#chap61" name="tdmchap61" id="tdmchap61">Fermer une session</a></li>
				<li><a href="#chap62" name="tdmchap62" id="tdmchap62">Verrouiller la station de travail</a></li>
				<li><a href="#chap63" name="tdmchap63" id="tdmchap63">Redémarrer le système</a></li>
			</ol></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Modification du nom de l'ordinateur et de l'appartenance au groupe de travail</a></li>
    </ol>
</aside>



	<h1>Mise à jour d'un poste Windows 98 vers Windows XP Professionnel </h1>
	<h3>Durée :</h3>
	<p>1 heure</p>
	<h3>Objectifs</h3>
	<ul>
	  <li>Vérifier la configuration  système requise.</li>
	  <li>Vérifier la compatibilité du matériel et des applications.</li>
	  <li>Automatiser la mise à jour du système vers Windows XP Pro.</li>
	  <li>Modifier les composants installés.</li>
	</ul>
	<h3>Prérequis</h3>
	<p>Aucun</p>
	<h3>Matériel à prévoir</h3>
	<p>Deux ordinateurs répondants aux pré-requis d'installation pour Windows XP et équipés au minimum d'un disque dur de 10 Go, d'un CD-Rom d'installation de Windows XP Pro.</p>
	<p>Un des deux postes doit être configuré avec le système d'exploitation Windows 98 ou NT Workstation. L'autre poste ne possède aucun système d'exploitation. </p>
	
	<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Transfert des paramètres et fichiers utilisateur à l'aide de l'outil USMT</a></h2>
	<p>L'outil USMT permet de migrer les paramètres et les fichiers de l'utilisateur d'un poste exécutant Windows 95 ou ultérieur vers un poste exécutant Windows XP Professionnel.</p>    
	<p>Ceci évite d'avoir à reconfigurer un nouveau système d'exploitation et de devoir transférer manuellement des fichiers.</p>

	<table class="table">
      <caption>
        Paramètres transférés par défaut avec l'outil USMT
      </caption>
	  <tr>
        <td>Options d'accessibilité </td>
	    <td>Paramètres du navigateur et du courrier </td>
      </tr>
      <tr>
        <td>Propriétés d'affichage </td>
        <td>Options des dossiers et de la barre des tâches </td>
      </tr>
      <tr>
        <td>Polices</td>
        <td>Options de la souris et du clavier </td>
      </tr>
      <tr>
        <td>Imprimantes réseau et lecteurs réseau mappés </td>
        <td>Paramètres régionaux </td>
      </tr>
      <tr>
        <td>Microsoft Office </td>
        <td>Microsoft Excel </td>
      </tr>
      <tr>
        <td>Microsoft Outlook </td>
        <td>Courrier et contacts stockés </td>
      </tr>
      <tr>
        <td>Microsoft Word </td>
        <td>Microsoft Powerpoint </td>
      </tr>
    </table>
	<br />
	<table class="table w300p">
  <caption>
    Dossiers transférés par défaut
  </caption>
  <tr>
    <td>Mes documents </td>
    <td>Bureau</td>
  </tr>
  <tr>
    <td>Mes images </td>
    <td>Favoris</td>
  </tr>
</table>
<br />
<table class="table">
  <caption>
    Types de fichiers transférés par défaut
  </caption>
  <tr>
    <td>*.ch3</td>
    <td>*.csv</td>
    <td>*.dif</td>
    <td>*.doc</td>
    <td>*.dot</td>
    <td>*.dqy</td>
  </tr>
  <tr>
    <td>*.iqy</td>
    <td>*.mcw</td>
    <td>*.oqy</td>
    <td>*.pot</td>
    <td>*.ppa</td>
    <td>*.pps</td>
  </tr>
  <tr>
    <td>*.ppt</td>
    <td>*.pre</td>
    <td>*.rqy</td>
    <td>*.rtf</td>
    <td>*.scd</td>
    <td>*.sh3</td>
  </tr>
  <tr>
    <td>*.txt</td>
    <td>*.wpd</td>
    <td>*.wps</td>
    <td>*.wq1</td>
    <td>*.wri</td>
    <td>*.xls</td>
  </tr>
</table>

	<p>Pour lancer l'outil de transfert de fichiers et de paramètres :</p>
	<ul>
		<li>Insérez le CD-Rom de Windows XP Pro dans le lecteur.</li>
		<li>Cliquez sur <strong>Effectuer des tâches supplémentaires</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/installXpPro.png" alt="Fenparamêtrestre d'installation de XP Pro"  width="400" height="300" />
	<ul>
		<li>Cliquez sur <strong>Transférer des fichiers et des paramètres</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier0.png" alt="Assistant transfert de fichier et de paramètres 0" width="400" height="300" />
	<ul>
		<li>Cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier1.png" alt="Assistant transfert de fichiers et paramètres 1" />
	<ul>
		<li>Cliquez sur <strong>Ancien ordinateur</strong>, puis suivant.</li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier2.png" alt="Assistant transfert de fichier et paramètres 2" />
	<ul>
		<li>Si votre firewall est actif, sélectionnez <strong>Débloquer</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier3.png" alt="Assistant transfert de fichier et paramètres 3" />
	<ul>
		<li>Sélectionnez <strong>Les fichiers et les paramètres</strong>, puis <strong>Suivant</strong> </li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier4.png" alt="Assistant transfert de fichier et paramètres 4" />
	<p>L'outil USMT collecte tous les fichiers et paramètres de l'ancien ordinateur. </p>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier5.png" alt="Assistant transfert de fichier et paramètres 5" />
	<ul>
		<li>Cliquez sur <strong>Terminer</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/AssistantTransfertFichier6.png" alt="Assistant transfert de fichier et paramètres 6" />
	<div class="notice remarque">
	  <p>Vous pouvez également effectuer cette opération en ligne de commande. Pour cela saisissez :</p>
	  <p><strong>Scanstate /I migsys.inf /I miguser.inf /I sysfiles.inf D:\USMT</strong></p>
	  <p><strong>D:\USMT</strong> étant l'endroit de stockage des données à migrer </p>
	  <p>Cette opération peut durer un certain temps en fonction de la quantité de données à migrer </p>
	</div>

	<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Vérification de la compatibilité</a></h2>
	<ul>
		<li>Insérez le CD-Rom Windows XP Pro dans le lecteur.</li>
        <li>Cliquez sur <strong>Vérifier la compatibilité du système</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp2/installXpPro1.png" alt="Écran d'installation de Win98 vers XP Pro" />
    <ul>
	    <li>Cliquez sur <strong>Vérifier mon système automatiquement</strong>.</li>
	</ul>
	<img src="/assets/img/xp/xp2/installXpPro2.png" alt="Fenêtre de vérification de la compatibilité du système" />

	<p class="notice remarque">Si le CD-Rom ne démarre pas, accédez au dossier i386 et saisissez la ligne de commande <strong>Winnt32.exe /checkupgradeonly</strong>.</p>

	
	<ul>
		<li>Sélectionnez  l'affichage des problèmes matériels et logiciels.</li>
	</ul>
	<img src="/assets/img/xp/xp2/rapportmiseaniveau.png" alt="Fenêtre de rapport de mise à niveau" />
	<ul>
		<li>Ignorez l'étape d'installation des fichiers de mise à jour.</li>
	</ul>
	<img src="/assets/img/xp/xp2/miseajournon.png" alt="Ignorer la mise à jour des fichiers" />
	<p>Si vous ne constater pas de problème, vous pouvez procéder à la mise à jour</p>
	<img src="/assets/img/xp/xp2/rapportmiseaniveau2.png" alt="Fenêtre finale de rapport de mise à niveau" />
	<p>En cas de problème, un fichier de réponse <strong>upgrade.txt</strong> servant à la mise à jour de votre système sera copié dans <strong>%SystemRoot%</strong> (c'est-à-dire à la racine de votre système <strong>C:\</strong> ).</p>
	<ul>
		<li>Cliquez sur <strong>Terminer</strong> puis sur <strong>Précédent</strong>..</li>
		<li>Cliquez sur <strong>Installer Microsoft Windows XP</strong>.</li>
	    <li>Dans la boite de dialogue <strong>Type d'installation</strong>, vérifiez que l'option <strong>Mise à niveau (recommandé)</strong> est sélectionnée, puis cliquez sur suivant.</li>
	    <li>Acceptez le contrat de licence.</li>		
	    <li>Tapez dans les zones appropriées les 25 caractères qui composent la clé du produit.</li>
	    <li>Dans la page <strong>Obtenir les fichiers d'installation mis à jour</strong>, sélectionnez Non, ignorer cette étape et continuer l'installation de Windows et cliquez sur suivant. </li>
	</ul>

	<h2><a href="#tdmchap4" name="chap4" id="chap4">3-Migration des fichiers et des paramètres utilisateur</a></h2>
	<p>La récupération des fichiers et des paramètres utilisateur respecte pratiquement la même procédure que la migration. Suivez les étapes une à une en précisant o&ugrave; sont stockées les données.</p>
	<div class="notice remarque">
	  <p>En ligne de commande cela donne :</p>
	  <p><strong>Loadstate /I migsys.inf /I miguser.inf /I sysfiles.inf /I D:\USMT</strong></p>
	</div>
	
	<h2><a href="#tdmchap5" name="chap5" id="chap5">4-Modification des composants installés</a></h2>
	
	<h3><a href="#tdmchap51" name="chap51" id="chap51">4.a-Suppression d'un composant</a></h3>	
	<p>Dans cet exemple vous allez supprimer les jeux installés par défaut. Pour ce faire vous devez lancer l'outil <strong>Ajout /Suppression de programmes</strong></p>
	<ul>
		<li>Cliquez sur <strong>Démarrer &gt; Panneau de configuration &gt; Ajouter ou supprimer des programmes</strong>.</li>
	    <li>Sélectionnez <strong>Ajouter ou supprimer des composants Windows</strong>.</li>
	    <li>Sélectionnez <strong>Accessoires et utilitaires</strong>, puis <strong>Détails</strong>.</li>
	    <li>Décochez   la case à gauche de <strong>Jeux</strong> puis validez en cliquant sur OK. </li>
	    <li>Cliquez sur suivant pour lancer la suppression des fichiers.</li>
	    <li>Cliquez sur <strong>Terminer</strong>.</li>
	</ul>
	
	<h3><a href="#tdmchap52" name="chap52" id="chap52">4.b-Ajout d'un composant</a></h3>
	<p>Pour ajouter un composant :</p>
	<ul>
		<li>Ouvrez à nouveau l'<strong>Assistant Composants de Windows</strong>.</li>
	    <li>Sélectionnez le composant <strong>Service de télécopie</strong>.</li>
	    <li>Validez en cliquant sur OK </li>
	</ul>
	<p>Avant de continuer en cliquant sur <strong>Suivant</strong>, demandez l'installation des services IIS</p>
	<ul>
		<li>Sélectionnez le composant <strong>Service Internet (IIS)</strong>, puis cliquez sur <strong>Détails</strong>.</li>
	    <li>Décochez le composant <strong>Extensions serveur FrontPage 2000</strong> et cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	<p>Une fenêtre demandant l'emplacement des sources de Windows apparait. Insérez le CD-Rom Windows XP Pro dans votre lecteur puis cliquez sur <strong>OK</strong>. </p>
	<ul>
	    <li>Cliquez sur <strong>Terminer</strong>. </li>
	</ul>
	
	<h2><a href="#tdmchap6" name="chap6" id="chap6">5-Manipulation de base sur le poste Windows XP</a></h2>
	<ul>
		<li>Sur le poste <strong>Ordi1</strong>, ouvrez une session avec le compte <strong>Util1</strong>.</li>
	</ul>	
	<p>Effectuez les manipulations suivantes :</p>
	<h3><a href="#tdmchap61" name="chap61" id="chap61">5.a-Fermer une session</a></h3>
	<ul>
		<li>Appuyez sur les touches <img src="/assets/img/xp/ToucheCtrl.png" alt="Touche CTRL" width="49" height="30" /> + <img src="/assets/img/xp/ToucheAlt.png" alt="Touche ALT" width="49" height="30" /> + <img src="/assets/img/xp/ToucheSuppr.png" alt="Touche SUPPR" width="30" height="30" /> puis sélectionnez <strong>Fermer la session</strong>. </li>
	</ul>
	<p>Ou</p>
	<ul>
		<li>Cliquez sur <img src="/assets/img/xp/xp2/boutondemarrer.png" alt="Bouton démarrer" /> puis sur <img src="/assets/img/xp/xp2/boutonfermersession.png" alt="Bouton Fermer la session" /></li>
	</ul>
	<h3><a href="#tdmchap62" name="chap62" id="chap62">5.b-Verrouiller la station de travail</a></h3>
	<ul>
		<li>Appuyez sur les touches <img src="/assets/img/xp/ToucheCtrl.png" alt="Touche CTRL" width="49" height="30" /> + <img src="/assets/img/xp/ToucheAlt.png" alt="Touche ALT" width="49" height="30" /> + <img src="/assets/img/xp/ToucheSuppr.png" alt="Touche SUPPR" width="30" height="30" /> puis sélectionnez <strong>Verrouiller l'ordinateur</strong>. </li>
	</ul>

	<h3><a href="#tdmchap63" name="chap63" id="chap63">5.c-Redémarrer le système</a></h3>
	<ul>
		<li>Cliquez sur <img src="/assets/img/xp/xp2/boutondemarrer.png" alt="Bouton démarrer" /> puis sur <img src="/assets/img/xp/xp2/boutonarreter.png" alt="Bouton Arrêter" /> puis sur <img src="/assets/img/xp/xp2/arreterredemarrer.png" alt="Redémarrer le système" /></li>
	</ul>

	<h2><a href="#tdmchap7" name="chap7" id="chap7">6-Modification du nom de l'ordinateur et de l'appartenance au groupe de travail</a></h2>
	<ul>
		<li>Faites un clic droit sur le <strong>Poste de travail</strong> et sélectionnez <strong>Propriétés</strong>.</li>
	    <li>Cliquez sur l'onglet <strong>Nom de l'ordinateur</strong> puis sur le bouton <strong>Modifier</strong>.</li>
	    <li>Saisissez <strong>PCXP2</strong> puis cliquez sur <strong>Ok</strong>. </li>
    </ul>	
	<p>Vous devez ensuite redémarrer l'ordinateur </p>
	<ul>
	  <li>Après le redémarrage, retournez sur l'onglet <strong>Nom de l'ordinateur</strong> puis cliquez sur le bouton <strong>Modifier</strong>.</li>
	  <li>Dans la zone Groupe de travail, saisissez <strong>GTXP</strong> puis cliquez sur <strong>Ok</strong>.</li>
      <li>Redémarrez votre ordinateur pour prendre en compte les changements. </li>
</ul>
	<p>&nbsp;</p>

