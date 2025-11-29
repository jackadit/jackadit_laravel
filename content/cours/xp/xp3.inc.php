<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours3.php					v 1.0   22/05/07	22:38:00	|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 3											|
	+---------------------------------------------------------------+
*/
?>
<div class="navig">
<a href="index?p=xpaccess">&laquo; Précédent</a> - Cours3 - <a href="index?p=xpcours4">Suivant &raquo;</a> <a href="index?p=xp_intro">Table des matières</a>
</div>
<div id="tdm" class="dockclass">
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Présentation de l'automatisation de l'installation</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Créer un fichier de réponse</a>
			<ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Compréhension de la syntaxe</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">L'assistant Gestionnaire de l'installation</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Configuration du fichier de réponses</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Enregistrer le fichier de réponses</a></li>
			</ol></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Créer un fichier UDF</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Exécuter une installation automatisée</a>
			<ol class="alpha">
				<li><a href="#chap41" name="tdmchap41" id="tdmchap41">&Agrave; partir d'un CD-Rom</a></li>
				<li><a href="#chap42" name="tdmchap42" id="tdmchap42">Utilisation de la commande winnt</a></li>
				<li><a href="#chap43" name="tdmchap43" id="tdmchap43">Utilisation de la commande winnt32</a></li>
				<li><a href="#chap44" name="tdmchap44" id="tdmchap44">Utilisation d'un fichier UDF</a></li>
			</ol></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Préparer un ordinateur modèle</a>
			<ol class="alpha">
				<li><a href="#chap51" name="tdmchap51" id="tdmchap51">Configurer l'ordinateur modèle</a></li>
				<li><a href="#chap52" name="tdmchap52" id="tdmchap52">Conserver les paramètres utilisateurs </a></li>
				<li><a href="#chap53" name="tdmchap53" id="tdmchap53">Configurer un fichier de réponses</a></li>
				<li><a href="#chap54" name="tdmchap54" id="tdmchap54">Préparer le disque dur </a></li>
			</ol></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Créer, tester et déployer une image</a></li>
	</ol>
</div>
<div id="cours">
	<h2>Durée :</h2>
	<p>3 heures</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Automatiser une installation de Windows XP Professionnel.</li>
    </ul>
	<h2>Prérequis</h2>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur répondants aux pré-requis d'installation pour Windows XP et équipés au minimum d'un disque dur de 10 Go, d'un CD-Rom d'installation de Windows XP Pro.</p>


	<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Présentation de l'automatisation de l'installation</a></h1>
	<p>L'automatisation de l'installation de Windows XP Professionnel implique la création et l'utilisation d'un fichier de réponses qui fournit les paramètres qu'un utilisateur devrait autrement fournir pendant une installation manuelle.</p>
	<p>Il existent deux types de fichiers :</p>
	<ul>
		<li><strong>Fichier de réponse</strong> : Fichier texte contenant les paramètres de configuration répondant au programme d'installation.</li>
	    <li><strong>Fichier UDF</strong> : Fichier texte contenant des paramètres de remplacement aux paramètres d'un fichier réponse. Il est utilisé pour configurer les paramètres spécifiques à chaque ordinateur lors d'une installation multiple. </li>
	</ul>
	<p>Ces deux fichiers sont exécutés sur chaque ordinateur à partir d'une disquette ou d'un emplacement réseau.</p>

	<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Création d'un fichier de réponse</a></h1>
	<h2><a href="#tdmchap21" name="chap21" id="chap21">2.a-Compréhension de la syntaxe des fichiers de réponses</a></h2>
	<p>Les paramètres d'un fichier de réponses s'écrivent de la manière suivante :</p>
	<pre>[section]
clé=valeur</pre>
	<ul>
		<li><strong>[Section]</strong> représente la catégorie des paramètres qui suivent</li>
		<li><strong>clé</strong> représente le nom du paramètre</li>
		<li><strong>valeur</strong> contient les paramètres de configuration </li>
	</ul>
	<pre>Par exemple :	[UserData]
		Fullname="Ordi1"
		OrgName="Société Infocom"</pre>
	<p>En cas de clé manquante, le programme d'installation s'arrête et attend la saisie du paramètre par l'utilisateur.</p>
	<p class="notice remarque">Remarque : Plus de détails dans le <strong>Guide de planification et de déploiement</strong> situé dans le dossier <strong>Support\Tools</strong> sur le CD-Rom Windows XP Professionnel. </p>
	
	<h2><a href="#tdmchap22" name="chap22" id="chap22">2.b-L'assistant Gestionnaire de l'installation</a></h2>
	<p>L'assistant est situé dans le dossier Support\Tools sur le CD-Rom de Windows XP Professionnel. </p>
	<h3>Extraction des outils de déploiement du CD-Rom de Windows XP Professionnel</h3>
	<ul>
		<li>Insérez le CD-Rom de Windows XP Pro dans votre lecteur, puis cliquez sur <strong>Quitter</strong> pour fermer l'écran de bienvenue.</li>
	    <li>Cliquez sur <strong>Démarrer</strong> puis <strong>Exécuter</strong>.</li>
	    <li>Saisissez dans la zone Ouvrir : <img src="../images/xp/executerouvrir.png" alt="Ouvrir exécuter" width="363" height="186" /></li>
  </ul>
	<p><strong>D:\</strong>  étant la lettre  attribuée à votre lecteur de CD-Rom</p>
	<ul>
		<li>Dans la fenêtre <strong>Deploy</strong>, sélectionnez tous les fichiers, cliquez avec le bouton droit sur l'un d'eux, puis cliquez sur <strong>Extraire</strong>.</li>
	    <li>Dans la fenêtre <strong>Sélectionnez une destination</strong>, développez <strong>Poste de travail</strong>, cliquez sur <strong>Disque local (C:)</strong> puis sur <strong>Créer un nouveau dossier</strong>.</li>
	    <li>Nommez le nouveau dossier <strong>Deploy</strong>, puis cliquez sur <strong>Extraire</strong>.</li>
	    <li>Fermez la fenêtre <strong>Deploy</strong>.  </li>
	</ul>
	
	<h2><a href="#tdmchap23" name="chap23" id="chap23">2.c-Configuration du fichier de réponses</a></h2>
	<h3>Exécution des outils de déploiement du CD-Rom de Windows XP Professionnel</h3>	
	<p>Nous allons maintenant créer le fichier <strong>Unattend.txt</strong> pour répondre au système lors de l'installation</p>
	<ul>
		<li>Dans le dossier <strong>Deploy</strong>, double-cliquez sur <strong>Setupmgr.exe</strong>.</li>
		<li>Dans la page <strong>Bienvenue dans l'Assistant Gestionnaire de l'installation de Windows</strong>, cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="../images/xp/AssistantGestionnaireInstall1.png" alt="Setup manager 1" />
	<ul>
		<li>Dans la page <strong>Fichier de réponse nouveau ou existant</strong>, vérifiez que l'option <strong>Créer un nouveau fichier de réponse</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall2.png" alt="Setup manager 2" />
	<ul>
	    <li>Dans la page <strong>Produit à installer</strong>, vérifiez que l'option <strong>Une installation automatique de Windows</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="../images/xp/AssistantGestionnaireInstall3.png" alt="Setup manager 3" />
	<ul>
		<li>Dans la page <strong>Plate-forme</strong>, vérifiez que l'option <strong>Windows XP Professionnel</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall4.png" alt="Setup manager 4" />
	<ul>
	    <li>Dans la page <strong>Niveau d'interaction avec l'utilisateur</strong>, cliquez sur <strong>Entièrement automatisée</strong>, puis  sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall5.png" alt="Setup manager 5" />
	<ul>
	    <li>Dans la page <strong>Dossier de distribution</strong>, cliquez sur <strong>Non, ce fichier de réponses sera utilisé pour l'instant à partir d'un CD</strong>, puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall6.png" alt="Setup manager 6" />
	<ul>
	    <li>Dans la page <strong>Contrat de licence</strong>, activez la case à cocher <strong>J'accepte les termes du contrat de licence</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall7.png" alt="Setup manager 7" />
	<ul>
	    <li>Dans la page <strong>Personnaliser le logiciel</strong>, saisissez <strong>admin</strong> dans la zone <strong>Nom</strong>, puis cliquez sur <strong>Suivant</strong></li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall8.png" alt="Setup manager 8" />
	<ul>
	    <li>Dans la page <strong>Paramètres d'affichage</strong>, dans la zone <strong>Zone écran</strong>, cliquez sur <strong>1024x768</strong> puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall9.png" alt="Setup manager 9" />
	<ul>
	    <li>Dans la page <strong>Fuseau horaire</strong>, sélectionnez votre fuseau horaire actuel, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="../images/xp/AssistantGestionnaireInstall10.png" alt="Setup manager 10" />
	<ul>
		<li>Dans la page <strong>Fourniture de la clé de produit</strong>, tapez la clé du produit, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="../images/xp/AssistantGestionnaireInstall11.png" alt="Setup manager 11" />
	<ul>
		<li>Dans la page <strong>Nom des ordinateurs</strong>,   dans la zone <strong>Nom d'ordinateur</strong>, saisissez <strong>Ordi2</strong>, cliquez sur Ajouter, puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall12.png" alt="Setup manager 12" />
	<ul>
	    <li>Dans la page <strong>Mot de passe Administrateur</strong>, saisissez <strong>mdp2</strong>, activez la case à cocher <strong>Crypter le mot de passe adminisdtrateur dans un fichier de réponses</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall13.png" alt="Setup manager 13" />
	<ul>
	    <li>Dans la page <strong>Composants de réseau</strong>, vérifiez que l'option  <strong>Paramètres par défaut</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall14.png" alt="Setup manager 14" />
	<ul>
	    <li>Dans la page <strong>Groupe de travail ou domaine</strong>, sélectionnez <strong>Groupe de travail</strong>, puis cliquez sur <strong>Suivant</strong>. </li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall15.png" alt="Setup manager 15" />
	<ul>
	    <li>Acceptez les options proposées dans les pages suivantes et cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall16.png" alt="Setup manager 16" />
		<img src="../images/xp/AssistantGestionnaireInstall17.png" alt="Setup manager 17" />
		<img src="../images/xp/AssistantGestionnaireInstall18.png" alt="Setup manager 18" />
		<img src="../images/xp/AssistantGestionnaireInstall19.png" alt="Setup manager 19" />
		<img src="../images/xp/AssistantGestionnaireInstall20.png" alt="Setup manager 20" />
		<img src="../images/xp/AssistantGestionnaireInstall21.png" alt="Setup manager 21" />
		<img src="../images/xp/AssistantGestionnaireInstall22.png" alt="Setup manager 22" /><img src="../images/xp/AssistantGestionnaireInstall23.png" alt="Setup manager 23" />
	<h2><a href="#tdmchap24" name="chap24" id="chap24">2.d-Enregistrer le fichier de réponses</a></h2>
	<ul>
		<li>Dans la page <strong>Emplacement et nom de fichier</strong>, vérifiez que <strong>C:\Deploy\Unattend.txt</strong> est affiché, puis cliquez sur <strong>OK</strong>.</li>
	</ul>
		<img src="../images/xp/AssistantGestionnaireInstall24.png" alt="Setup manager 24" />
		<img src="../images/xp/AssistantGestionnaireInstall25.png" alt="Setup manager 25" />
	<pre>Si vous installez à partir d'un CD-Rom, le fichier <strong>unattend.txt</strong> devra être renommé en <strong>winnt.sif</strong></pre>
		<pre>Attention à afficher les extensions des fichiers connus, sinon vous aurez un fichier <strong>winnt.sif.txt</strong>.
Pour cela cliquez sur <strong>Outils &gt; Options des dossiers</strong>, puis sur l'onglet <strong>Affichage</strong>, puis désactivez la case à cocher 
<strong>Masquer les extensions de fichiers dont le type est connu</strong>.</pre>
	    <p>Le fichier <strong>Unattend.bat</strong> :</p>
	<img src="../images/xp/AssistantGestionnaireInstall26.png" alt="Setup manager 26" />
	<p>Le fichier <strong>Unattend.txt</strong> ou <strong>winnt.sif</strong> :</p>
	<img src="../images/xp/AssistantGestionnaireInstall27.png" alt="Setup manager 27" />
	
	<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Créer un fichier UDF</a></h1>
	<p>Un fichier <strong>UDF</strong> permet d'utiliser un seul fichier de réponse pour plusieurs ordinateurs nécessitant différentes configurations d'installation. Sinon vous devriez créer autant de fichier de réponse que d'ordinateurs !</p>
	<p>Ce fichier est créé par l'<strong>Assistant Gestionnaire de l'installation</strong>  si la page <strong>Noms des ordinateurs</strong> contient plusieurs noms d'ordinateur.</p>
	<p> Il se compose seulement des identificateurs uniques (<strong>SID</strong>) et des <strong>noms d'ordinateur</strong> créés lors de la création du fichier de réponses.</p>
	<p>S'il faut plus de détails ou s'il faut personnaliser l'installation, double-cliquez sur le fichier <strong>Unattend.udb</strong> et modifiez le fichier UDF à l'aide d'un éditeur de texte. </p>
	<p>Un seul fichier UDF pour plusieurs ordinateurs est possible :</p>
	<pre>[UniqueIDs]			------>	Cette section affecte les identificateurs uniques (ComputerID1, ComputerID2)
ComputerID1=Tapilocation, Network	aux en-têtes de section du fichier de réponse (Tapilocation, Network, Userdata)
ComputerID2=UserData

[ComputerID1:Tapilocation]
CountryCode=1
Dialing=Tone
AreaCode=425
LongDistanceAccess=9

[ComputerID1:Network]
JoinDomain="domaineXP"

[ComputerID2:UserData]
FullName="Bruno ZIEUVAIR"
OrgName="Société Infocom"
ComputerName="Ordi2"
ProductID:"12345-67890-12345-67890-12345
</pre>
	
	<h1><a href="#tdmchap4" name="chap4" id="chap4">4-Exécuter une installation automatisée</a></h1>
	<p>Il existe trois manière de démarrer une installation automatisée avec un fichier de réponse :</p>
	<ul>
		<li>Avec un CR-Rom Windows XP Professionnel</li>
	    <li>En ligne de commande avec winnt.exe sur un ordinateur sans système d'exploitation </li>
	    <li>En ligne de commande avec winnt32.exe sur un ordinateur exécutant un systèmre d'exploitation (W95, w98 ou WinNT) </li>
	</ul>
	
	<h2><a href="#tdmchap41" name="chap41" id="chap41">4.a-&Agrave; partir d'un CR-Rom </a></h2>
	<p>Au démarrage de l'installation, vous devez insérer une disquette contenant le fichier de réponses enregistré sous le nom <strong>winnt.sif</strong> obligatoirement, sinon le programme ne le trouvera pas. </p>
	<p>Pour que cela fonctionne, les paramètres suivants doivent être définis dans la section <strong>[Data]</strong> du fichier de réponses :</p>
	<pre>	[data]
	unattendedinstall="yes"
	msdosinitiated="0"
	autopartition="1"</pre>
	
	<h2><a href="#tdmchap42" name="chap42" id="chap42">4.b-Utilisation de la commande winnt</a></h2>
	<pre><strong>winnt</strong> [<strong>/s:</strong><em>chemin_source</em>] [<strong>/t:</strong><em>lecteur</em>] [<strong>/u:</strong><em>fichier_réponses</em>]</pre>
	<p><strong>/s:</strong><em>chemin_source</em> : indique l'emplacement des fichiers Windows XP Professionnel.</p>
	<p><strong>/t:</strong><em>lecteur</em> : indique sur quel lecteur le programme d'installation  doit placer les fichiers temporaires  et installer Windows XP Professionnel.</p>
	<p><strong>/u:</strong><em>fichier_réponses</em> : exécute une installation sans assistance.</p>
	
	<h2><a href="#tdmchap43" name="chap43" id="chap43">4.c-Utilisation de la commande winnt32</a></h2>
	<pre><strong>winnt32</strong> [<strong>/s:</strong><em>chemin_source</em>] [<strong>/tempdrive:</strong><em>lecteur</em>] [<strong>/unattend</strong>[<em>nombre</em>]<strong>:</strong><em>fichier_réponses</em>]</pre>
	<p><strong>/s:</strong><em>chemin_source</em> : indique l'emplacement des fichiers Windows XP Professionnel.</p>
	<p><strong>/tempdrive:</strong><em>lecteur</em> : indique sur quel lecteur le programme d'installation  doit placer les fichiers temporaires  et installer Windows XP Professionnel.</p>
	<p><strong>/unattend</strong>[<em>nombre</em>]<strong>:</strong><em>fichier_réponses</em>: exécute une installation sans assistance. Nombre représente le délai en secondes entre la fin de la copie des fichiers et le redémarrage de l'ordinateur par le programme d'installation. </p>
	
	<h2><a href="#tdmchap44" name="chap44" id="chap44">4.d-Utilisation d'un fichier UDF</a></h2>
	<p>Pour utiliser une fichier UDF lors du mode GUI (Graphique User Interface) d'une installation automatisée, tapez la syntaxe suivante à la fin des lignes de commande winnt ou winnt32 : </p>
	<pre><strong>/udf:</strong><em>identificateur</em>[<em>fichier_UDF</em>]</pre>
	<p><strong>/udf:</strong><em>identificateur</em>: spécifie l'identificateur unique à utiliser lors de l'installation de Windows XP Professionnel.</p>
	<p>[<em>fichier_UDF</em>]: spécifie le nom et le chemin d'accès complet du fichier UDF. Les valeurs d'une section spécifiée seront utilisées pour modifier certaines partie d'un fichier de réponses.</p>
	<pre>exemple de syntaxe : <strong>winnt32 /unattend:</strong> <em>unattend.txt</em> <strong>/udf:</strong><em>ordi1,unattend.udf</em></pre>
	<p class="notice remarque">Si l'identificateur unique et le nom du fichier UDF sont spécifiés, le fichier UDF est copié sur l'ordinateur cible</p>
	<p class="notice remarque">Si seulement l'identificateur unique est spécifié, le fichier UDF est recherché sur une disquette avec comme nom <strong>$Unique$.udf</strong></p>
	
	<h1><a href="#tdmchap5" name="chap5" id="chap5">5-Préparation d'un ordinateur modèle </a></h1>
	<h2><a href="#tdmchap51" name="chap51" id="chap51">5.a-Configuration de l'ordinateur modèle</a></h2>
	<ul>
		<li>Installez Windows XP Professionnel sur un disque dur nouvellement formaté. </li>
	    <li>Configurez les composants et le paramètres (de l'apparence du bureau jusqu'à l'installation des imprimantes). </li>
	    <li>Installez et configurez les applications.</li>
	    <li>Testez la configuration. </li>
	</ul>
	<p class="notice remarque">Si vous voulez utiliser cette préparation sur des ordinateurs ayant des paramétrages différents, vous devrez créer autant d'images à l'aide de <strong>Sysprep.exe</strong> que d'ordinateurs ou utiliser un <strong>fichier de réponses</strong> et un <strong>fichier UDF</strong>.</p>

	<h2><a href="#tdmchap52" name="chap52" id="chap52">5.b-Conservation des paramètres utilisateurs</a></h2>
	<p>Le principe de la conservation des paramètres utilisateurs est de copier le profil de l'administrateur dans le profil de l'utilisateur par défaut. </p>
	<ul>
		<li>Créez un nouveau compte ayant les privilèges d'administrateur et ouvrez une session avec ce compte. </li>
	    <li>Copiez le profil Administrateur dans le profil d'utilisateur par défaut. 
		<ol>
			<li>Cliquez sur <strong>Démarrer</strong>, cliquez avec le bouton  droit sur <strong>Poste de travail</strong>, cliquez sur <strong>Propriétés</strong>, puis sur l'onglet <strong>Avancé</strong></li>
		    <li>Dans la section <strong>Profils des utilisateurs</strong>, cliquez sur <strong>Paramètres</strong>.</li>
		    <li>Dans la page <strong>Profils des utilisateurs</strong>, cliquez sur le <em>nom de l'ordinateur</em> puis sur le bouton Copier dans. </li>
		    <li>Dans la boite de dialogue <strong>Copier dans</strong>, saisissez <strong>C:\Documents and settings\Default User</strong> (si C:\ est la racine du disque dur o&ugrave; est installé Windows XP). </li>
		</ol>
	    </li>
	    <li>Accordez au groupe <strong>Tout le monde</strong> l'autorisation d'utiliser le profil d'utilisateur par défaut.
	    <ol>
			<li>Cliquez sur le bouton <strong>Modifier</strong></li>
		    <li>Dans la boite de dialogue <strong>Sélectionner un utilisateur ou un groupe</strong>, dans la zone <strong>Nom</strong>, saisissez <strong>Tout le monde</strong> et cliquez sur <strong>OK</strong>.</li>
		    <li>Cliquez sur <strong>Oui</strong>, en réponse au message de confirmation de copie.</li>
			<li>Cliquez plusieurs fois sur <strong>OK</strong>, pour fermer toutes les boîites de dialogue.</li>
		</ol>
		</li>
	</ul>
	<h2><a href="#tdmchap53" name="chap53" id="chap53">5.c-Configuration d'un fichier de réponses</a></h2>
	<p>Pour automatiser la fin de l'installation de Windows XP vous devez créer un fichier de réponse <strong>Sysprep.inf</strong> soit avec un éditeur de texte, soit avec l'assistant Gestionnaire de l'installation de Windows.</p>
	<p>Ce fichier sera stocké dans le dossier <strong>Sysprep</strong> sur la partition système contenant les fichiers <strong>Sysprep.exe</strong> et <strong>Setupcl.exe</strong>.</p>
	<ul>
		<li>Créez un nouveau dossier <strong>C:\Sysprep</strong> (si <strong>C:\</strong> est la racine de la partition sur laquelle réside Windows).</li>
	    <li>Dans le dossier <strong>Deploy</strong>, double-cliquez sur <strong>Setupmgr.exe</strong>.</li>
	    <li>Dans la page <strong>Bienvenue dans l'assistant Gestionnaire de l'installation de Windows</strong>, cliquez sur <strong>Suivant</strong>.</li>
	  	<li>Cliquez sur <strong>Créer un nouveau fichier de réponses</strong> puis sur <strong>Suivant</strong>.</li>
		<li>Dans la page <strong>Produit à installer </strong>, cliquez sur <strong>une installation Sysprep</strong>, puis sur <strong>Suivant</strong>.</li>
		<li>Suivez les instructions pour terminer le fichier de réponses.</li>
		<li>Indiquez l'emplacement dans lequel stocker le fichier de réponses.</li>
	</ul>
	<p class="notice remarque">Si vous voulez que l'utilisateur entre un mot de passe administrateur lors de l'installation sur l'ordinateur cible, le mot de passe du compte Administrateur de l'ordinateur modèle doit être vierge avant d'exécuter <strong>Sysprep.exe</strong>.</p>
	<p>Un fichier de réponse peut se présenter comme suit :</p>
	<pre>	[UserData]
	FullName = "Utilisateur1"
	OrgName = "Société Infocom"
	ProductID = 12345-67890-12345-67890-12345
	</pre>
	<h2><a href="#tdmchap54" name="chap54" id="chap54">5.d-Préparation du disque dur</a></h2>
	<p>Avant de créer une image de l'ordinateur modèle, vous devez supprimer toutes les informations de configuration propre à cet ordinateur comme le nom de l'ordinateur et l'identificateur de sécurité (<strong>SID</strong>) grâce à l'outil <strong>Sysprep.exe</strong> </p>
	<p>Pour exécuter  <strong>Sysprep.exe</strong> suivez la procédure ci-dessous :. </p>
	<ul>
		<li>Redémarrez l'ordinateur et ouvrez une session en tant qu'<strong>Administrateur</strong> . </li>
	    <li>Créez un dossier <strong>Sysprep</strong> à la racine du disque o&ugrave; est installé Windows si ce n'est déjà fait .</li>
	    <li>Copiez les fichiers  <strong>Sysprep.exe</strong> et <strong>Setupcl.exe</strong> du dossier <strong>Deploy</strong> dans le dossier <strong>Sysprep</strong>.</li>
      <li>Cliquez sur <strong>Démarrer</strong>, sur <strong>Exécuter</strong>, dans la zone <strong>Ouvrir</strong>, saisissez <strong>C:\Sysprep\Sysprep.exe</strong> -<em>commutateur</em> </li>
  </ul>
	  <table width="600" border="1">
  <caption>
    Commutateurs de Sysprep.exe
  </caption>
  <tr>
    <th>-quiet</th>
    <td>Exécute Sysprep.exe sans afficher de message.</td>
  </tr>
  <tr>
    <th>-reboot</th>
    <td>Fait redémarrer automatiquement l'ordinateur après l'installation de l'image du disque dur et le redémarrage de l'Assistant Mini-installation. </td>
  </tr>
  <tr>
    <th>-nosidgen</th>
    <td>Exécute Sysprep.exe sans générer d'identificateur de sécurité (SID). </td>
  </tr>
</table>

	  <ul>	  
		   <li><strong>Sysprep.exe</strong> affichera un message d'avertissement sauf si vous avez utiliser  le commutateur <strong>-quiet</strong>, puis cliquez sur <strong>OK</strong>.</li>
	</ul>
	<p>Lorsque l'exécution de <strong>sysprep.exe</strong> est terminée, l'ordinateur s'éteint et est prêt pour la création de l'image. </p>
	<p>&nbsp; </p>
</div>
<div class="navig">
<a href="index?p=xpaccess">&laquo; Précédent</a> - Cours3 - <a href="index?p=xpcours4">Suivant &raquo;</a> <a href="index?p=xp_intro">Table des matières</a>
</div>
<!-- Fin contenu -->