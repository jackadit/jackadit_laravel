<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									                |
	+---------------------------------------------------------------+
	| xpcours11.php  v 1.0   06/06/07	22:48:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 11										                    |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '11');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Comprimer des dossiers</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Copier/déplacer des fichiers compressés</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Crypter des données</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Installer les services IIS (Internet Information Server)</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Crée un site Web et ajouter de répertoires virtuels</a></li>
  </ol>
</aside>



<h1>Autres fonctionnalités pour la gestion des disques</h1>
<h3>Durée :</h3>
	<p>1 heure 30 </p>
    <h3>Objectifs</h3>
	<ul>
	  <li>Activer la compression sur les fichiers et les dossiers</li>
      <li>Améliorer la sécurité sur votre système en utilisant le cryptage des données</li>
	  <li>Configurer un serveur Web</li>
    </ul>
<h3>Prérequis</h3>
<p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Un ordinateur avec carte réseau, configurés avec Windows XP utilisant le système NTFS.</p>

<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Comprimer des dossiers</a></h2>
<p>Le but de cet exercice est de préparer des dossiers de compression et d'utiliser les options spéciales d'affichage pour visualiser les fichiers ou dossiers comprimés.</p>
<p>Sur le premier ordinateur, effectuez les opérations suivantes :</p>
<ul>
  <li>Créez deux dossiers <strong>COMP1</strong> et <strong>COMP2</strong> sur le volume <strong>C:\</strong></li>
  <li>Créez deux dossiers <strong>COMP3</strong> et <strong>COMP4</strong> sur le volume <strong>D:\</strong></li>
  <li>Ajoutez deux fichiers texte par dossier.</li>
</ul>
<p>Une fois ces opérations terminées, nous allons comprimer le dossier <strong>COMP1</strong> ainsi que son contenu.</p>
<ul>
  <li>Activez le menu contextuel du dossier <strong>COMP1</strong> et sélectionnez <strong>Propriétés</strong>.</li>
  <li>Dans l'onglet <strong>Général</strong> de la fenêtre qui s'est ouverte, cliquez sur le bouton <strong>Avancé</strong>.</li>
</ul>
<img src="/assets/img/xp/xp11/Attributsavances.png" alt="Compression des données" />
<ul>
  <li>Cochez la case <strong>Compresser le contenu pour minimiser l'espace disque nécessaire</strong>, puis cliquez sur OK.</li>
</ul>
<p>La fenêtre <strong>Confirmation des modifications d'attributs</strong> s'affiche.</p>
<img src="/assets/img/xp/xp11/ConfirmationCompressionDossiersFichiers.png" alt="Confirmation compression dossiers et fichiers" />
<ul>
  <li>Activez l'option <strong>Appliquer les modifications à ce dossier et à tous les sous-dossiers et fichiers</strong>.</li>
  <li>Cliquez sur <strong>OK</strong> et attendez que le système compresse les données. </li>
</ul>
<p>Nous allons maintenant comprimer le dossier <strong>COMP4</strong> mais pas son contenu.</p>
<ul>
  <li>Activez le menu contextuel du dossier <strong>COMP4</strong> et sélectionnez <strong>Propriétés</strong>.</li>
  <li>Dans l'onglet <strong>Général</strong> de la fenêtre qui s'est ouverte, cliquez sur le bouton <strong>Avancé</strong>.</li>
  <li>Cochez la case <strong>Compresser le contenu pour minimiser l'espace disque nécessaire</strong>, puis cliquez sur OK.</li>
</ul>
<p>La fenêtre <strong>Confirmation des modifications d'attributs</strong> s'affiche.</p>
<p><img src="/assets/img/xp/xp11/ConfirmationCompressionDossiers.png" alt="Confirmation compression dossiers" /></p>
<ul>
  <li>Activez l'option <strong>Appliquer les modifications uniquement à ce dossier</strong>.</li>
  <li>Cliquez sur <strong>OK</strong> et attendez que le système compresse les données. </li>
  <li>Créez ensuite un nouveau fichier dans le dossier <strong>COMP4</strong>.</li>
</ul>
<p>Nous allons maintenant modifier les options d'affichage.</p>
<ul>
  <li>Ouvrez le <strong>poste de travail </strong>et cliquez sur le menu <strong>Outils &gt; Options des dossiers</strong> et activez l'onglet <strong>Affichage</strong>.</li>
  <li>Dans la zone <strong>Paramètres avancés</strong>, cochez la case <strong>Afficher les dossiers et les fichiers NTFS cryptés ou compressés en couleur</strong>.</li>
</ul>

<p class="notice remarque">Les documents texte crées avant la compression ne sont pas compressés alors que les nouveaux fichiers qui héritent du dossier parent sont compressés et donc affichés en <font color="#0000FF"><strong>bleu</strong></font>.</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Copier/déplacer des fichiers compressés</a></h2>
<p>Dans cet exercice, nous allons tester tous les cas de déplacement de fichiers compressés ou non dans des dossiers compressés ou non.</p>
<ul>
  <li>Copiez un fichier du dossier compressé COMP1 vers le dossier non compressé COMP2 du lecteur <strong>C:\</strong>.</li>
</ul>

<p class="notice remarque">Le fichier n'est plus compressé car vous avez créé un nouveau fichier qui hérite des attributs du dossier parent.</p>

<ul>
  <li>Copiez un fichier du dossier compressé COMP1 vers le dossier  non compressé COMP3 du  lecteur <strong>D:\</strong>.</li>
</ul>

<p class="notice remarque">Le fichier n'est plus compressé car vous avez créé un nouveau fichier qui hérite des attributs du dossier parent.</p>

<ul>
  <li>Déplacez  un fichier du dossier compressé COMP1 vers le dossier  non compressé COMP2 du  lecteur <strong>D:\</strong>.</li>
</ul>

<p class="notice remarque">Le fichier est toujours compressé car vous l'avez déplacé sur le même volume et garde donc ses attributs.</p>

<ul>
  <li>Déplacez un fichier du dossier compressé COMP1 vers le dossier  non compressé COMP3 du  lecteur <strong>D:\</strong>.</li>
</ul>

<p class="notice remarque">Le fichier n'est plus compressé car vous l'avez déplacé vers un nouveau volume.</p>

<ul>
  <li>Copiez un fichier du dossier non compressé COMP2 vers le dossier   compressé COMP4 du  lecteur <strong>D:\</strong>.</li>
</ul>

<p class="notice remarque">Le fichier est  compressé car vous avez créé  un nouveau fichier qui hérite des attributs du dossier de destination qui possède le statut compressé.</p>

<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Crypter des données</a></h2>
<ul>
  <li>Ouvrez une session en tant que <strong>UTIL1</strong> sur l'ordinateur1.</li>
  <li>Créez un dossier <strong>Test-cryptage </strong>sur <strong>C:\</strong></li>
  <li>Ajoutez des fichiers texte dans ce dossier. </li>
  <li>Affichez les <strong>Propriétés</strong> de ce dossier et dans l'onglet <strong>Général</strong>, cliquez sur le bouton <strong>Avancé</strong>.</li>
  <li>Cochez la case <strong>Crypter le contenu pour sécuriser les données</strong>.</li>
</ul>

<p class="notice remarque">Vous ne pouvez pas cochez simultanément la compression et le cryptage.</p>

<ul>
  <li>Appliquez ce cryptage aux sous-dossiers et aux fichiers.</li>
</ul>
<img src="/assets/img/xp/xp11/ConfirmationCryptageDossiersFichiers.png" alt="Confirmation de cryptage" />

<p class="notice remarque">Les fichiers et dossiers cryptés sont affichés en <font color="#009900"><strong>vert</strong></font>.</p>

<ul>  
  <li>Fermez la session et reconnectez-vous en tant que UTIL2</li>
  <li>Ouvrez un des fichiers crypté. </li>
</ul>

<p class="notice remarque">Le message Accès refusé devrait apparaître.</p>

<img src="/assets/img/xp/xp11/AccesRefuse.png" alt="Accès refusé" />

<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Installer les services IIS (Internet Information Server)</a></h2>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration</strong> puis double-cliquez sur <strong>Ajout/Suppression de programmes</strong>.</li>
  <li>Dans la partie gauche de la fenêtre, cliquez sur <strong>Ajouter ou supprimer des composants Windows</strong>.</li>
  <li>Dans la fenêtre <strong>Assistant Composants de Windows</strong>, cochez le composant <strong>Services Internet (IIS)</strong>.</li>
</ul>
<img src="/assets/img/xp/xp11/AssistantComposantWindows.png" alt="Assistant composants Windows" />
<ul>
  <li>Cliquez sur <strong>Détails</strong>.</li>
  <li>Dans la fenêtre qui s'affiche, vérifiez si le composant <strong>Extensions serveur Frontpage 2000</strong>, que nous ne souhaitons pas installer, est décoché.</li>
</ul>
<img src="/assets/img/xp/xp11/AssistantComposantWindowsDetails.png" alt="Assistant composants Windows Détails" />
<ul>
  <li>Cliquez sur <strong>OK</strong>.</li>
</ul>
<p>Une fenêtre apparaît demandant l'emplacement des sources de Windows XP.</p>
<img src="/assets/img/xp/xp11/EmplacementFichiersWindows.png" alt="Emplacement des fichiers Windows XP" />
<ul>
  <li>Insérez le CD-Rom de Windows XP et cliquez sur <strong>OK</strong>.</li>
</ul>
<p>Un message apparaît indiquant la fin de l'installation.</p>
<ul>
  <li>Cliquez sur <strong>Terminer</strong>.</li>
</ul>

<p class="notice remarque">Le système à installer une nouvelle arborescence dans un dossier <strong>Inetpub</strong> se trouvant à la racine du disque dur. C'est dans ce dossier que se trouvent toutes les pages nécessaires à l'affichage d'un site Web. </p>

<ul>
  <li>Ouvrez la navigateur Web et saisissez l'adresse <strong>http://localhost</strong>, puis validez.</li>
</ul>
<p>La fenêtre doit se modifier et afficher le message suivant : <strong>Microsoft Windows XP Professional, votre service Web est maintenant en service</strong>.</p>
<img src="/assets/img/xp/xp11/Localhost.png" alt="Localhost" />

<h2><a href="#tdmchap5" name="chap5" id="chap5">5-Crée un site Web</a></h2>
<p>Nous allons maintenant créer un site Web sur notre ordinateur.</p>
<ul><li>Ouvrez l'éditeur <strong>Notepad</strong> et saisissez les éléments suivants :</li>
</ul>
<div class="notice code">
<pre>
&lt;html&gt;
&lt;title&gt;Page d'accueil&lt;/title&gt;
&lt;body&gt;
&lt;p&gt;&lt;font size=&quot;7&quot;&gt;Vous êtes sur la page d'accueil de votre intranet&lt;/font&gt;&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
<ul>
  <li>Enregistrez le fichier créé sous le nom <strong>index.htm</strong> dans le dossier <strong>C:\Inetpub\wwwroot</strong>.</li>
  <li>Relancez  le navigateur et configurez-le pour utiliser ce fichier en page de démarrage. </li>
</ul>
<img src="/assets/img/xp/xp11/LocalhostIntranet.png" alt="Localhost Intranet" />


