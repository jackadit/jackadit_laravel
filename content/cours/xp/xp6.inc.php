<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 					                                |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 				                          |
	+---------------------------------------------------------------+
	| xpcours6.php	v 1.0   16/04/07	15:58:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>		                  |
	+---------------------------------------------------------------+
	| But : page du cours 6					                                |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '6', '7', '5');
?>
<aside>
	<h2>Windows XP  : Gestion des périphériques</h2>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Signatures des pilotes</a>
		<ol class="alpha">
				<li><a href="#chap11" name="tdmchap11" id="tdmchap11">Utilitaire de vérification</a></li>
				<li><a href="#chap12" name="tdmchap12" id="tdmchap12">Configurer le niveau de sécurité</a></li>
		</ol></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Installer/modifier/supprimer un périphérique</a>
		  <ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Installer un périphérique</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Mettre un pilote à jour</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Revenir à une version de pilote antérieure</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Supprimer un périphérique</a></li>
	  	</ol></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Utiliser des profils matériels</a>
		<ol class="alpha">
				<li><a href="#chap31" name="tdmchap31" id="tdmchap31">Créer un profil matériel</a></li>
				<li><a href="#chap32" name="tdmchap32" id="tdmchap32">Désactiver la fonctionnalité réseau</a></li>
				<li><a href="#chap33" name="tdmchap33" id="tdmchap33">Configurer un profil par défaut</a></li>
	  	</ol></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Configurer le mode hors connexion</a>
		<ol class="alpha">
				<li><a href="#chap41" name="tdmchap41" id="tdmchap41">Activer le mode hors connexion</a></li>
				<li><a href="#chap42" name="tdmchap42" id="tdmchap432">Rendre un dossier disponible hors connexion</a></li>
				<li><a href="#chap43" name="tdmchap43" id="tdmchap43">Synchroniser des fichiers</a></li>
				<li><a href="#chap44" name="tdmchap44" id="tdmchap44">Supprimer le mode hors connexion</a></li>
	  	</ol></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Utiliser le planificateur de tâches</a></li>
	</ol>
</aside>



<h2>Durée :</h2>
	<p>45 minutes</p>
<h2>Objectifs</h2>
	<ul>
	  <li>Savoir installer/désinstaller un périphérique</li>
      <li>Configurer les périphériques</li>
	  <li>Optimiser la configuration des ordinateurs portables</li>
    </ul>
<h2>Prérequis</h2>
<h2>Matériel à prévoir</h2>
	<p>Deux ordinateurs configuré avec Windows XP installés dans le premier cours.</p>
	
<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Signatures des pilotes</a></h1>
<h2><a href="#tdmchap11" name="chap11" id="chap11">1.a-Utilitaire de vérification</a></h2>
<p>Pour vérifier la signature des pilotes de votre ordinateur, il existe un utilitaire que vous pouvez lancer en ligne de commande.</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Exécuter</strong>, puis saisissez <strong>cmd</strong> et validez.</li>
    <li>Saisissez <strong>sigverif.exe</strong>.</li>
</ul>
<p>La fenêtre suivante apparait :</p>
<img src="../img/xp/xp6/Sigverif1.png" alt="Vérification des signatures de pilotes 1" />
<ul>
  <li>Cliquez sur le bouton <strong>Avancé</strong>, puis sur l'onglet <strong>Journaux</strong>.</li>
  <li>Activez la case à cocher <strong>Enregistrer les résultats de la vérification des signatures des fichiers dans un fichier journal</strong>.</li>
</ul>
<img src="../img/xp/xp6/Sigverif2.png" alt="Vérification des signatures de pilotes 2" />
<ul>
  <li>Fermez la fenêtre et cliquez sur <strong>Démarrer</strong>. </li>
</ul>
<p class="notice remarque">Pour voir le contenu de ce fichier ouvrez-le avec un éditeur de texte (Notepad par exemple) ou  relancez  l'utilitaire <strong>sigverif</strong> et cliquez sur <strong>Afficher le journal</strong> dans l'onglet <strong>Journaux</strong>.</p>

<h2><a href="#tdmchap12" name="chap12" id="chap12">1.b-Configurer le niveau de sécurité</a></h2>
<ul>
  <li>Ouvrez les propriétés du poste de travail.</li>
  <li>Cliquez sur l'onglet <strong>Matériel</strong> puis sur le bouton <strong>Signature du pilote</strong>.  </li>
  <li>Choisissez <strong>Bloquer - Ne jamais installer de pilotes logiciels non signés</strong>.</li>
  <li>Cochez la case <strong>Définir cette action en tant qu'action par défaut</strong>. </li>
</ul>
<img src="../img/xp/xp6/Sigverif3.png" alt="Vérification des signatures de pilotes 3" />

<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Installer/modifier/supprimer un périphérique</a></h1>
<h2><a href="#tdmchap21" name="chap21" id="chap21">2.a-Installer un périphérique</a></h2>
<p>Pour installer un nouveau périphérique, vous pouvez utiliser l'assistant ajout de matériel.</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Panneau de configuration &gt; Imprimantes et autres périphériques</strong>.</li>
  <li>Cliquez sur <strong>Ajout de matériel</strong>.</li>
</ul>
<p>L'assistant <strong>Ajout de matériel</strong> s'ouvre.</p>
<img src="../img/xp/xp6/AjoutMateriel1.png" alt="Assistant Ajout de matériel 1" />
<ul>
  <li>Cliquez sur <strong>Suivant</strong> et Choisissez <strong>Oui, j'ai déjà connecté le matériel</strong>.</li>
</ul>
<img src="../img/xp/xp6/AjoutMateriel2.png" alt="Assistant Ajout de matériel 2" />
<ul>
  <li>Sélectionnez <strong>Ajouter un nouveau périphérique matériel</strong> à la fin de la liste déroulante. </li>
</ul>
<img src="../img/xp/xp6/AjoutMateriel3.png" alt="Assistant Ajout de matériel 3" />
<ul>
  <li>Optez pour <strong>Installer le matériel que je sélectionne manuellement dans la liste</strong>. </li>
</ul>
<img src="../img/xp/xp6/AjoutMateriel4.png" alt="Assistant Ajout de matériel 4" />
<ul>
  <li>Choisissez <strong>Modems</strong>. </li>
</ul>
<img src="../img/xp/xp6/AjoutMateriel5.png" alt="Assistant Ajout de matériel 5" />
<ul>
  <li>L'assistant <strong>Installer un nouveau modem</strong> se lance.</li>
  <li>Choisissez  <strong>Ne pas détecter mon modem.</strong></li>
 </ul>
<img src="../img/xp/xp6/AjoutMateriel6.png" alt="Assistant Ajout de matériel 6" />
 <ul>
  <li>Sélectionnez <strong>Câble de communication entre deux ordinateurs </strong>. </li>
</ul>
<img src="../img/xp/xp6/AjoutMateriel7.png" alt="Assistant Ajout de matériel 7" />
<ul>
  <li>Choisissez le port série <strong>Com1</strong> puis terminez l'installation . </li>
</ul>
<p><img src="../img/xp/xp6/AjoutMateriel8.png" alt="Assistant Ajout de matériel 8" /></p>
<p>Pour vérifier que votre modem est bien installé suivez la procédure :</p>
<ul>
  <li>Ouvrez le <strong>Gestionnaire de périphérique</strong> (onglet <strong>Matériel</strong> du <strong>Gestionnaire système</strong>).</li>
</ul>

<h2><a href="#tdmchap22" name="chap22" id="chap22">2.b-Mettre un pilote à jour </a></h2>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique et sélectionnez <strong>Mettre à jour le pilote...</strong></li>
</ul>
<p>L'<strong>Assistant installation</strong> se lance.</p>
<img src="../img/xp/xp6/AssistantInstallation1.png" alt="Assistant installation 1" />
<ul>
  <li>Choisissez <strong>Installer à partir d'une liste ou d'un emplacement spécifié</strong>. </li>
</ul>
<img src="../img/xp/xp6/AssistantInstallation2.png" alt="Assistant installation 2" />
<ul>
  <li>Choisissez <strong>Ne pas rechercher. Je vais choisir le pilote à installer</strong>. </li>
</ul>
<img src="../img/xp/xp6/AssistantInstallation3.png" alt="Assistant installation 3" />
<ul>
  <li>Décochez l'option  <strong>Afficher les matériels compatibles</strong>.</li>
  <li>Choisissez le modèle <strong>Câble parallèle entre deux ordinateurs</strong>.  </li>
</ul>
<img src="../img/xp/xp6/AssistantInstallation4.png" alt="Assistant installation 4" />
<p>Le message suivant doit apparaître :</p>
<img src="../img/xp/xp6/AssistantInstallation5.png" alt="Assistant installation 5" />
<ul>
  <li>Validez en cliquant sur <strong>Oui</strong> et terminez l'installation.</li>
</ul>
<p>Après le changement de pilotes, vous devriez obtenir :</p>
<img src="../img/xp/xp6/AssistantInstallation6.png" alt="Assistant installation 6" />

<h2><a href="#tdmchap23" name="chap23" id="chap23">2.c-Revenir à une version de pilote antérieure</a></h2>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique, puis sélectionnez <strong>Propriétés</strong>. </li>
  <li>Sélectionnez l'onglet <strong>Pilote</strong>.</li>
  <li>Cliquez sur le bouton <strong>Revenir à la version précédente</strong>. </li>
</ul>
<img src="../img/xp/xp6/AssistantInstallation7.png" alt="Assistant installation7" />
<ul>
  <li>Vérifiez dans le Gestionnaire de périphérique si vous avez bien la version précédente. </li>
</ul>

<h2><a href="#tdmchap24" name="chap24" id="chap24">2.d-Supprimer un périphérique</a></h2>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique, puis sélectionnez <strong>Désinstaller</strong>.</li>
  <li>Validez ; Le pilote du périphérique est maintenant supprimé du système. </li>
</ul>
<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Utilisation des profils matériels</a></h1>
<p>Il arrive très fréquemment avec un ordinateur portable de se retrouver dans une situation &quot;hors réseau&quot;. La gestion de profils matériels permet de configurer son portable selon les besoins matériels ou de connexion.</p>

<h2><a href="#tdmchap31" name="chap31" id="chap31">3.a-Créer un profil matériel</a></h2>
<ul>
  <li>Accédez aux <strong>Propriétés système</strong>, onglet <strong>Matériel</strong> puis cliquez sur le bouton <strong>Profils matériels</strong>. </li>
</ul>
<p>La fenêtre suivante apparaît : </p>
<img src="../img/xp/xp6/ProfilMateriel1.png" alt="Profil matériel 1" />
<ul>
  <li>Sélectionnez  <strong>Profil 1 (actuel)</strong> et cliquez sur <strong>Renommer.</strong></li>
  <li>Saisissez <strong>Travail</strong> dans la zone appropriée et validez. </li>
  <li>Cliquez ensuite sur <strong>Copier</strong> et saisissez <strong>Maison</strong>. </li>
</ul>
<p>Vous obtenez :</p>
<img src="../img/xp/xp6/ProfilMateriel2.png" alt="Profil matériel 2" />

<h2><a href="#tdmchap32" name="chap32" id="chap32">3.b-Désactiver la fonctionnalité réseau </a></h2>
<ul>
  <li>Accédez aux <strong>Propriétés</strong> du profil <strong>Maison</strong> et activez l'option <strong>L'ordinateur est retir� de sa station d'accueil</strong>. </li>
</ul>
<img src="../img/xp/xp6/ProfilMateriel3.png" alt="Profil matériel 3" />
<ul>
  <li>Cliquez sur <strong>Panneau de configuration &gt; Connexions réseau et Internet &gt; connexions réseau</strong>.</li>
  <li>Double-cliquez sur  <strong>Connexion  au réseau local</strong> et cliquez sur le bouton <strong>Désactiver</strong>. </li>
</ul>
<img src="../img/xp/xp6/ProfilMateriel4.png" alt="Profil matériel 4" />

<h2><a href="#tdmchap33" name="chap33" id="chap33">3.c-Configurer un profil par défaut</a></h2>
<p class="notice remarque">Pour qu'un profil devienne profil par défaut, il suffit de le placer en tête de liste dans la fenêtre <strong>Profils matériels</strong>.</p>
<p>Si vous voulez choisir le profil au démarrage :</p>
<ul>
  <li>Activez l'option <strong>Sélectionner le premier profil listé en l'absence de sélection</strong>.</li>
  <li>Augmentez le temps de sélection à <strong>40 secondes</strong>.</li>
  <li>Accédez aux propriétés de chaque profil utilisé et cochez l'option <strong>Toujours inclure ce profil en tant qu'option lors du démarrage de Windows</strong>.</li>
</ul>
<img src="../img/xp/xp6/ProfilMateriel5.png" alt="Profil matériel 5" />

<h1><a href="#tdmchap4" name="chap4" id="chap4">4-Configurer le mode hors connexion</a></h1>
<p>La fonctionnalité des fichiers hors connexion permet d'optimiser l'utilisation des PC portables. En effet elle permet d'avoir accès à des documents même si vous n'êtes pas connecté à votre réseau. Une fonctionnalité de synchronisation permet d'avoir toujours la dernière version d'un fichier sur votre Pc portable et sur le réseau. </p>

<h2><a href="#tdmchap41" name="chap41" id="chap41">4.a-Activer le mode hors connexion</a></h2>
<ul>
  <li>Ouvrez le <strong>Poste de travail</strong>.</li>
  <li>Activez le menu <strong>Outils &gt; Options des dossiers</strong></li>
  <li>Cliquez sur l'onglet <strong>Fichiers hors connexion</strong>.</li>
  <li>Cochez la case <strong>Autoriser l'utilisation de fichiers hors connexion</strong>.   </li>
</ul>
<p>Pour les besoins de l'exercice, nous allons créer sur le deuxième ordinateur un nouveau dossier que nous nommerons <strong>Travail_Hors_Connexion</strong>. </p>
<p>Sur le premier ordinateur, nous allons créer un lecteur réseau  pointant vers ce dossier.</p>
<ul>
  <li>Dans le <strong>Poste de travail</strong>, cliquez sur le menu <strong>Outils &gt; Connecter un lecteur réseau</strong>. </li>
  <li>Choisissez le lecteur <strong>Z:</strong> et saisissez le chemin UNC : <strong>\\ORDI2\Travail_Hors_Connexion</strong> </li>
</ul>

<h2><a href="#tdmchap42" name="chap42" id="chap42">4.b-Rendre un dossier disponible hors connexion</a></h2>
<ul>
  <li>Ouvrez l'explorateur Windows.</li>
  <li>Sélectionner <strong>Mes documents</strong>, activez le menu contextuel sur ce dossier et cliquez sur <strong>Rendre disponible hors connexion</strong>.</li>
 </ul>
  <p>L'assistant se lance.</p>
 <ul>
  <li>Cliquez sur <strong>Suivant</strong> pour accepter les paramètres par défaut</li>
  <li>Dans la fenêtre <strong>Confirmer les dossiers en mode hors connexion</strong>, choisissez de synchroniser l'ensemble des éléments contenus dans <strong>Mes documents</strong>. </li>
  <li>Répétez ces opérations pour le lecteur <strong>Z:</strong> et le <strong>Bureau</strong>. </li>
 </ul>
 
<h2><a href="#tdmchap43" name="chap43" id="chap43">4.c-Synchroniser des fichiers</a></h2>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Tous les programmes &gt; Accessoires &gt; Synchroniser</strong>.</li>
  <li>Cliquez sur le bouton <strong>Configurer</strong> dans la fenêtre <strong>Éléments à synchroniser</strong>. </li>
</ul>

<h2><a href="#tdmchap44" name="chap44" id="chap44">4.d-Supprimer le mode hors connexion</a></h2>
<ul>
  <li>Activez le menu contextuel sur <strong>Mes documents</strong>.</li>
  <li>Cliquez sur <strong>Rendre disponible hors connexion</strong>.</li>
  <li>Sélectionnez la première option   dans la fenêtre qui apparaît. </li>
  <li>Répétez l'opération pour le lecteur <strong>Z:</strong> et le <strong>Bureau</strong>.</li>
  <li>Dans le Poste de travail, activez le menu <strong>Outils &gt; Options des dossiers</strong>, onglet <strong>Fichiers hors connexion</strong>.</li>
  <li>Cliquez sur le bouton <strong>Supprimer les fichiers</strong> et validez le message de confirmation.   </li>
  <li>Décochez <strong>Autoriser l'utilisation de fichiers hors connexion</strong> puis cliquez sur <strong>OK</strong>. </li>
</ul>
<h1><a href="#tdmchap5" name="chap5" id="chap5">5-Utiliser le planificateur de tâches</a></h1>
<p>le planificateur de tâches permet de lancer une application sans aucune intervention de votre part. C'est par exemple utile pour lancer une sauvegarde de vos données ou une défragmentation de votre disque dur de manière automatisée.</p>
<p>Dans cet exercice nous allons créer une tâche pour lancer le défragmenteur de disque.</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Tous les programmes &gt; Accessoires &gt; Outils système &gt; Tâches planifiées</strong>.</li>
  <li>Double-cliquez sur la tâche <strong>Création d'une tâche planifiée</strong>.</li>
 </ul>
 <p>L'assistant se lance.</p>
 <img src="../img/xp/xp6/TachePlanifie1.png" alt="Tâche planifiée 1" />
 <ul>
  <li>Choisissez le défragmenteur de disque.</li>
</ul>
<p class="notice remarque">Si l'outil de défragmentation n'est pas disponible dans la liste, cliquez sur <strong>Parcourir</strong>. Sélectionnez le fichier <strong>%systemroot%\system32\dfrg.msc</strong>.</p>
<ul>
  <li>Dans la zone de planification, choisissez <strong>Tous les mois</strong>, puis activez le <strong>Le 1</strong> à <strong>18:00</strong>.</li>
</ul>
 <img src="../img/xp/xp6/TachePlanifie2.png" alt="Tâche planifiée 2" />
 <img src="../img/xp/xp6/TachePlanifie3.png" alt="Tâche planifiée 3" />
<ul>
  <li>Cliquez sur <strong>Suivant</strong>, puis entrez le nom d'utilisateur et le mot de passe.</li>
</ul>
 <p><img src="../img/xp/xp6/TachePlanifie4.png" alt="Tâche planifiée 4" />
    <img src="../img/xp/xp6/TachePlanifie5.png" alt="Tâche planifiée 5" /> </p>
 <ul>
   <li>Testez votre planification en modifiant la date et l'heure du système.</li>
 </ul>
 <p>&nbsp;</p>

