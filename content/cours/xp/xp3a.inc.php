<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											|
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									|
	+---------------------------------------------------------------+
	| xpcours3a.php	v 1.0   16/08/07	13:58:00					|
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						|
	+---------------------------------------------------------------+
	| But : page du cours 3a										|
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '3a', '3b', '2');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Présentation de l'automatisation de l'installation</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Créer un fichier de réponse</a>
			<ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Compréhension de la syntaxe</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">L'assistant Gestionnaire de l'installation</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Configuration du fichier de réponses</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Enregistrer le fichier de réponses</a></li>
			</ol></li>
    </ol>
</aside>



	<h1>Installation automatisée (a)</h1>
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


	<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Présentation de l'automatisation de l'installation</a></h2>
	<p>L'automatisation de l'installation de Windows XP Professionnel implique la création et l'utilisation d'un fichier de réponses qui fournit les paramètres qu'un utilisateur devrait autrement fournir pendant une installation manuelle.</p>
	<p>Il existent deux types de fichiers :</p>
	<ul>
		<li><strong>Fichier de réponse</strong> : Fichier texte contenant les paramètres de configuration répondant au programme d'installation.</li>
	    <li><strong>Fichier UDF</strong> : Fichier texte contenant des paramètres de remplacement aux paramètres d'un fichier réponse. Il est utilisé pour configurer les paramètres spécifiques à chaque ordinateur lors d'une installation multiple. </li>
	</ul>
	<p>Ces deux fichiers sont exécutés sur chaque ordinateur à partir d'une disquette ou d'un emplacement réseau.</p>

	<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Création d'un fichier de réponse</a></h2>
	<h3><a href="#tdmchap21" name="chap21" id="chap21">2.a-Compréhension de la syntaxe des fichiers de réponses</a></h3>
	<p>Les paramètres d'un fichier de réponses s'écrivent de la manière suivante :</p>
	<pre>[section]
clé=valeur</pre>
	<ul>
		<li><strong>[Section]</strong> représente la catégorie des paramètres qui suivent</li>
		<li><strong>clé</strong> représente le nom du paramètre</li>
		<li><strong>valeur</strong> contient les paramètres de configuration </li>
	</ul>
	<div class="notice exemple">Par exemple :	
		<pre>[UserData]
		Fullname="Ordi1"
		OrgName="Société Infocom"</pre>
	</div>
	<p>En cas de clé manquante, le programme d'installation s'arrête et attend la saisie du paramètre par l'utilisateur.</p>
	<p class="notice remarque">Remarque : Plus de détails dans le <strong>Guide de planification et de déploiement</strong> situé dans le dossier <strong>Support\Tools</strong> sur le CD-Rom Windows XP Professionnel. </p>
	
	<h3><a href="#tdmchap22" name="chap22" id="chap22">2.b-L'assistant Gestionnaire de l'installation</a></h3>
	<p>L'assistant est situé dans le dossier Support\Tools sur le CD-Rom de Windows XP Professionnel. </p>
	<h4>Extraction des outils de déploiement du CD-Rom de Windows XP Professionnel</h4>
	<ul>
		<li>Insérez le CD-Rom de Windows XP Pro dans votre lecteur, puis cliquez sur <strong>Quitter</strong> pour fermer l'écran de bienvenue.</li>
	    <li>Cliquez sur <strong>Démarrer</strong> puis <strong>Exécuter</strong>.</li>
	    <li>Saisissez dans la zone Ouvrir : <img src="/assets/img/xp/xp3/executerouvrir.png" alt="Ouvrir exécuter" width="363" height="186" /></li>
  </ul>
	<p><strong>D:\</strong>  étant la lettre  attribuée à votre lecteur de CD-Rom</p>
	<ul>
		<li>Dans la fenêtre <strong>Deploy</strong>, sélectionnez tous les fichiers, cliquez avec le bouton droit sur l'un d'eux, puis cliquez sur <strong>Extraire</strong>.</li>
	    <li>Dans la fenêtre <strong>Sélectionnez une destination</strong>, développez <strong>Poste de travail</strong>, cliquez sur <strong>Disque local (C:)</strong> puis sur <strong>Créer un nouveau dossier</strong>.</li>
	    <li>Nommez le nouveau dossier <strong>Deploy</strong>, puis cliquez sur <strong>Extraire</strong>.</li>
	    <li>Fermez la fenêtre <strong>Deploy</strong>.  </li>
	</ul>
	
	<h3><a href="#tdmchap23" name="chap23" id="chap23">2.c-Configuration du fichier de réponses</a></h3>
	<h4>Exécution des outils de déploiement du CD-Rom de Windows XP Professionnel</h4>	
	<p>Nous allons maintenant créer le fichier <strong>Unattend.txt</strong> pour répondre au système lors de l'installation</p>
	<ul>
		<li>Dans le dossier <strong>Deploy</strong>, double-cliquez sur <strong>Setupmgr.exe</strong>.</li>
		<li>Dans la page <strong>Bienvenue dans l'Assistant Gestionnaire de l'installation de Windows</strong>, cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="/assets/img/xp/xp3/AssistantGestionnaireInstall1.png" alt="Setup manager 1" />
	<ul>
		<li>Dans la page <strong>Fichier de réponse nouveau ou existant</strong>, vérifiez que l'option <strong>Créer un nouveau fichier de réponse</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall2.png" alt="Setup manager 2" />
	<ul>
	    <li>Dans la page <strong>Produit à installer</strong>, vérifiez que l'option <strong>Une installation automatique de Windows</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="/assets/img/xp/xp3/AssistantGestionnaireInstall3.png" alt="Setup manager 3" />
	<ul>
		<li>Dans la page <strong>Plate-forme</strong>, vérifiez que l'option <strong>Windows XP Professionnel</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall4.png" alt="Setup manager 4" />
	<ul>
	    <li>Dans la page <strong>Niveau d'interaction avec l'utilisateur</strong>, cliquez sur <strong>Entièrement automatisée</strong>, puis  sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall5.png" alt="Setup manager 5" />
	<ul>
	    <li>Dans la page <strong>Dossier de distribution</strong>, cliquez sur <strong>Non, ce fichier de réponses sera utilisé pour l'instant à partir d'un CD</strong>, puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall6.png" alt="Setup manager 6" />
	<ul>
	    <li>Dans la page <strong>Contrat de licence</strong>, activez la case à cocher <strong>J'accepte les termes du contrat de licence</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall7.png" alt="Setup manager 7" />
	<ul>
	    <li>Dans la page <strong>Personnaliser le logicie</strong>l, saisissez <strong>admin</strong> dans la zone <strong>Nom</strong>, puis cliquez sur <strong>Suivant</strong></li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall8.png" alt="Setup manager 8" />
	<ul>
	    <li>Dans la page <strong>Paramètres d'affichage</strong>, dans la zone <strong>Zone écran</strong>, cliquez sur <strong>1024x768</strong> puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall9.png" alt="Setup manager 9" />
	<ul>
	    <li>Dans la page <strong>Fuseau horaire</strong>, sélectionnez votre fuseau horaire actuel, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="/assets/img/xp/xp3/AssistantGestionnaireInstall10.png" alt="Setup manager 10" />
	<ul>
		<li>Dans la page <strong>Fourniture de la clé de produit</strong>, tapez la clé du produit, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
	    <img src="/assets/img/xp/xp3/AssistantGestionnaireInstall11.png" alt="Setup manager 11" />
	<ul>
		<li>Dans la page <strong>Nom des ordinateurs</strong>,   dans la zone <strong>Nom d'ordinateur</strong>, saisissez <strong>Ordi2</strong>, cliquez sur Ajouter, puis sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall12.png" alt="Setup manager 12" />
	<ul>
	    <li>Dans la page <strong>Mot de passe Administrateur</strong>, saisissez <strong>mdp2</strong>, activez la case à cocher <strong>Crypter le mot de passe adminisdtrateur dans un fichier de réponses</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall13.png" alt="Setup manager 13" />
	<ul>
	    <li>Dans la page <strong>Composants de réseau</strong>, vérifiez que l'option  <strong>Paramètres par défaut</strong> est sélectionnée, puis cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall14.png" alt="Setup manager 14" />
	<ul>
	    <li>Dans la page <strong>Groupe de travail ou domaine</strong>, sélectionnez <strong>Groupe de travail</strong>, puis cliquez sur <strong>Suivant</strong>. </li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall15.png" alt="Setup manager 15" />
	<ul>
	    <li>Acceptez les options proposées dans les pages suivantes et cliquez sur <strong>Suivant</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall16.png" alt="Setup manager 16" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall17.png" alt="Setup manager 17" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall18.png" alt="Setup manager 18" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall19.png" alt="Setup manager 19" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall20.png" alt="Setup manager 20" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall21.png" alt="Setup manager 21" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall22.png" alt="Setup manager 22" /><img src="/assets/img/xp/xp3/AssistantGestionnaireInstall23.png" alt="Setup manager 23" />
	<h3><a href="#tdmchap24" name="chap24" id="chap24">2.d-Enregistrer le fichier de réponses</a></h3>
	<ul>
		<li>Dans la page <strong>Emplacement et nom de fichier</strong>, vérifiez que <strong>C:\Deploy\Unattend.txt</strong> est affiché, puis cliquez sur <strong>OK</strong>.</li>
	</ul>
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall24.png" alt="Setup manager 24" />
		<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall25.png" alt="Setup manager 25" />
	<pre>Si vous installez à partir d'un CD-Rom, le fichier <strong>unattend.txt</strong> devra être renommé en <strong>winnt.sif</strong></pre>
		<pre>Attention à afficher les extensions des fichiers connus, sinon vous aurez un fichier <strong>winnt.sif.txt</strong>.
Pour cela cliquez sur <strong>Outils &gt; Options des dossiers</strong>, puis sur l'onglet <strong>Affichage</strong>, puis désactivez la case à cocher 
<strong>Masquer les extensions de fichiers dont le type est connu</strong>.</pre>
	    <p>Le fichier <strong>Unattend.bat</strong> :</p>
	<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall26.png" alt="Setup manager 26" />
	<p>Le fichier <strong>Unattend.txt</strong> ou <strong>winnt.sif</strong> :</p>
	<img src="/assets/img/xp/xp3/AssistantGestionnaireInstall27.png" alt="Setup manager 27" />
<p>&nbsp; </p>

