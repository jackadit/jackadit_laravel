<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours3b.php	v 1.0   16/08/07	14:05:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 3b										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '3b', '4a', '3a');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol start="3" id="xp" class="unstyled">
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Créer un fichier UDF</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Exécuter une installation automatisée</a>
			<ol class="alpha">
				<li><a href="#chap41" name="tdmchap41" id="tdmchap41">À partir d'un CD-Rom</a></li>
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
    </ol>
</aside>



	<h1>Installation automatisée (b)</h1>
	<h3>Durée :</h3>
	<p>3 heures</p>
	<h3>Objectifs</h3>
	<ul>
	  <li>Automatiser une installation de Windows XP Professionnel.</li>
    </ul>
	<h3>Prérequis</h3>
	<p>Aucun</p>
	<h3>Matériel à prévoir</h3>
	<p>Un ordinateur répondants aux pré-requis d'installation pour Windows XP et équipés au minimum d'un disque dur de 10 Go, d'un CD-Rom d'installation de Windows XP Pro.</p>

	<h3><a href="#tdmchap3" name="chap3" id="chap3">3-Créer un fichier UDF</a></h3>
	<p>Un fichier <strong>UDF</strong> permet d'utiliser un seul fichier de réponse pour plusieurs ordinateurs nécessitant différentes configurations d'installation. Sinon vous devriez créer autant de fichier de réponse que d'ordinateurs !</p>
	<p>Ce fichier est créé par l'<strong>Assistant Gestionnaire de l'installation</strong>  si la page <strong>Noms des ordinateurs</strong> contient plusieurs noms d'ordinateur.</p>
	<p>Il se compose seulement des identificateurs uniques (<strong>SID</strong>) et des <strong>noms d'ordinateur</strong> créés lors de la création du fichier de réponses.</p>
	<p>S'il faut plus de détails ou s'il faut personnaliser l'installation, double-cliquez sur le fichier <strong>Unattend.udb</strong> et modifiez le fichier UDF à l'aide d'un éditeur de texte. </p>
	<p>Un seul fichier UDF pour plusieurs ordinateurs est possible :</p>
	<div class="notice exemple">
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
	</div>
	
	<h3><a href="#tdmchap4" name="chap4" id="chap4">4-Exécuter une installation automatisée</a></h3>
	<p>Il existe trois manière de démarrer une installation automatisée avec un fichier de réponse :</p>
	<ul>
		<li>Avec un CR-Rom Windows XP Professionnel</li>
	    <li>En ligne de commande avec winnt.exe sur un ordinateur sans système d'exploitation </li>
	    <li>En ligne de commande avec winnt32.exe sur un ordinateur exécutant un systèmre d'exploitation (W95, w98 ou WinNT) </li>
	</ul>
	
	<h3><a href="#tdmchap41" name="chap41" id="chap41">4.a-&Agrave; partir d'un CR-Rom </a></h3>
	<p>Au démarrage de l'installation, vous devez insérer une disquette contenant le fichier de réponses enregistré sous le nom <strong>winnt.sif</strong> obligatoirement, sinon le programme ne le trouvera pas. </p>
	<p>Pour que cela fonctionne, les paramètres suivants doivent être définis dans la section <strong>[Data]</strong> du fichier de réponses :</p>
	<div class="notice exemple">
	<pre>	[data]
	unattendedinstall="yes"
	msdosinitiated="0"
	autopartition="1"</pre>
	</div>

	<h3><a href="#tdmchap42" name="chap42" id="chap42">4.b-Utilisation de la commande winnt</a></h3>
	<pre><strong>winnt</strong> [<strong>/s:</strong><em>chemin_source</em>] [<strong>/t:</strong><em>lecteur</em>] [<strong>/u:</strong><em>fichier_réponses</em>]</pre>
	<p><strong>/s:</strong><em>chemin_source</em> : indique l'emplacement des fichiers Windows XP Professionnel.</p>
	<p><strong>/t:</strong><em>lecteur</em> : indique sur quel lecteur le programme d'installation  doit placer les fichiers temporaires  et installer Windows XP Professionnel.</p>
	<p><strong>/u:</strong><em>fichier_réponses</em> : exécute une installation sans assistance.</p>
	
	<h3><a href="#tdmchap43" name="chap43" id="chap43">4.c-Utilisation de la commande winnt32</a></h3>
	<pre><strong>winnt32</strong> [<strong>/s:</strong><em>chemin_source</em>] [<strong>/tempdrive:</strong><em>lecteur</em>] [<strong>/unattend</strong>[<em>nombre</em>]<strong>:</strong><em>fichier_réponses</em>]</pre>
	<p><strong>/s:</strong><em>chemin_source</em> : indique l'emplacement des fichiers Windows XP Professionnel.</p>
	<p><strong>/tempdrive:</strong><em>lecteur</em> : indique sur quel lecteur le programme d'installation  doit placer les fichiers temporaires  et installer Windows XP Professionnel.</p>
	<p><strong>/unattend</strong>[<em>nombre</em>]<strong>:</strong><em>fichier_réponses</em>: exécute une installation sans assistance. Nombre représente le délai en secondes entre la fin de la copie des fichiers et le redémarrage de l'ordinateur par le programme d'installation. </p>
	
	<h3><a href="#tdmchap44" name="chap44" id="chap44">4.d-Utilisation d'un fichier UDF</a></h3>
	<p>Pour utiliser une fichier UDF lors du mode GUI (Graphique User Interface) d'une installation automatisée, tapez la syntaxe suivante à la fin des lignes de commande winnt ou winnt32 : </p>
	<pre><strong>/udf:</strong><em>identificateur</em>[<em>fichier_UDF</em>]</pre>
	<pre><strong>/udf:</strong><em>identificateur</em>: spécifie l'identificateur unique à utiliser lors de l'installation de Windows XP Professionnel.</pre>
	<p>[<em>fichier_UDF</em>]: spécifie le nom et le chemin d'accès complet du fichier UDF. Les valeurs d'une section spécifiée seront utilisées pour modifier certaines partie d'un fichier de réponses.</p>
	<p class="notice exemple">exemple de syntaxe : <strong>winnt32 /unattend:</strong> <em>unattend.txt</em> <strong>/udf:</strong><em>ordi1,unattend.udf</em></p>

	<p class="notice remarque">Si l'identificateur unique et le nom du fichier UDF sont spécifiés, le fichier UDF est copié sur l'ordinateur cible</p>
	<p class="notice remarque">Si seulement l'identificateur unique est spécifié, le fichier UDF est recherché sur une disquette avec comme nom <strong>$Unique$.udf</strong></p>
	
	<h3><a href="#tdmchap5" name="chap5" id="chap5">5-Préparer un ordinateur modèle </a></h3>
	<h3><a href="#tdmchap51" name="chap51" id="chap51">5.a-Configurer l'ordinateur modèle</a></h3>
	<ul>
		<li>Installez Windows XP Professionnel sur un disque dur nouvellement formaté. </li>
	    <li>Configurez les composants et le paramètres (de l'apparence du bureau jusqu'à l'installation des imprimantes). </li>
	    <li>Installez et configurez les applications.</li>
	    <li>Testez la configuration. </li>
	</ul>
	<p class="notice remarque">Si vous voulez utiliser cette préparation sur des ordinateurs ayant des paramétrages différents, vous devrez créer autant d'images à l'aide de <strong>Sysprep.exe</strong> que d'ordinateurs ou utiliser un <strong>fichier de réponses</strong> et un <strong>fichier UDF</strong>.</p>

	<h3><a href="#tdmchap52" name="chap52" id="chap52">5.b-Conserver les paramètres utilisateurs</a></h3>
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
	<h3><a href="#tdmchap53" name="chap53" id="chap53">5.c-Configurer un fichier de réponses</a></h3>
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

	<div class="notice exemple">
		<pre>	[UserData]
		FullName = "Utilisateur1"
		OrgName = "Société Infocom"
		ProductID = 12345-67890-12345-67890-12345
		</pre>
	</div>
	<h3><a href="#tdmchap54" name="chap54" id="chap54">5.d-Préparer le disque dur</a></h3>
	<p>Avant de créer une image de l'ordinateur modèle, vous devez supprimer toutes les informations de configuration propre à cet ordinateur comme le nom de l'ordinateur et l'identificateur de sécurité (<strong>SID</strong>) grâce à l'outil <strong>Sysprep.exe</strong> </p>
	<p>Pour exécuter  <strong>Sysprep.exe</strong> suivez la procédure ci-dessous :. </p>
	<ul>
		<li>Redémarrez l'ordinateur et ouvrez une session en tant qu'<strong>Administrateur</strong> . </li>
	    <li>Créez un dossier <strong>Sysprep</strong> à la racine du disque o&ugrave; est installé Windows si ce n'est déjà fait .</li>
	    <li>Copiez les fichiers  <strong>Sysprep.exe</strong> et <strong>Setupcl.exe</strong> du dossier <strong>Deploy</strong> dans le dossier <strong>Sysprep</strong>.</li>
      <li>Cliquez sur <strong>Démarrer</strong>, sur <strong>Exécuter</strong>, dans la zone <strong>Ouvrir</strong>, saisissez <strong>C:\Sysprep\Sysprep.exe</strong> -<em>commutateur</em> </li>
  </ul>
	  <table class="table">
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

