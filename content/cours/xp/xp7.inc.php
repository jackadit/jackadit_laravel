<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									                |
	+---------------------------------------------------------------+
	| xpcours7.php   v 1.0   09/05/07	23:08:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 7											                    |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '7', '8', '6b');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Créer un compte utilisateur dans la base SAM locale</a>
		<ol class="alpha">
				<li><a href="#chap11" name="tdmchap11" id="tdmchap11">Basculer d'un compte à l'autre </a></li>
				<li><a href="#chap12" name="tdmchap12" id="tdmchap12">Changer le mot de passe utilisateur </a></li>
		</ol></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Ajouter un compte utilisateur dans un groupe prédéfini</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Créer, modifier et supprimer un groupe d&rsquo;utilisateurs</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Configurer un profil utilisateur</a></li>
    </ol>
</aside>



<h1>Gestion des utilisateurs et des groupes</h1>
<h3>Durée :</h3>
	<p>1 heure</p>
    <h3>Objectifs</h3>
	<ul>
	  <li>Savoir créer, modifier, supprimer des comptes utilisateurs </li>
      <li>Gérer les groupes d'utilisateurs </li>
	  <li>Configurer des stratégie de sécurité </li>
    </ul>
<h3>Prérequis</h3>
<p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Un ordinateur configuré avec Windows XP et un compte d'utilisateur ayant les droits d'administrateur.</p>
	
    <h2><a href="#tdmchap1" name="chap1" id="chap1">1-Créer un compte utilisateur dans la base SAM locale</a></h2>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Panneau de configuration &gt; Compte d'utilisateurs</strong>.</li>
  <li>Choisissez <strong>Créer un nouveau compte</strong>. </li>
</ul>
<img src="/assets/img/xp/xp7/CompteUtilisateur1.png" alt="Créer un compte utilisateur 1" />
<ul>
  <li>Saisissez  <strong>Compte1</strong> dans la fenêtre <strong>Nommer un nouveau compte</strong>. </li>
</ul>
<img src="/assets/img/xp/xp7/CompteUtilisateur2.png" alt="Créer un compte utilisateur 2" />
<ul>
  <li>Sélectionnez  <strong>Administrateur de l'ordinateur </strong> dans la fenêtre <strong>Choisir un type de compte</strong>. </li>
  <li>Cliquez sur <strong>Créer un compte</strong>.</li>
</ul>
<img src="/assets/img/xp/xp7/CompteUtilisateur3.png" alt="Créer un compte utilisateur 3" />

<h3><a href="#tdmchap11" name="chap11" id="chap11">1.a-Basculer d'un compte à l'autre</a></h3>
<p>Pour pouvoir basculer d'un compte à l'autre rapidement nous allons modifier la façon dont les utilisateurs ouvrent et ferment une session.</p>
<ul>
  <li>Dans la fenêtre <strong>Comptes d'utilisateurs</strong>, sélectionnez <strong>Modifier la façon dont les utilisateurs ouvrent et ferment une session</strong>.</li>
  <li>Cochez les cases <strong>Utiliser l'écran d'accueil</strong> et <strong>Utiliser la Bascule rapide utilisateur</strong>.</li>
</ul>
<img src="/assets/img/xp/xp7/CompteUtilisateur4.png" alt="Créer un compte utilisateur 4" />
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Fermer la session &gt; Changer d'utilisateur</strong>.</li>
</ul>
<img src="/assets/img/xp/xp7/CompteUtilisateur5.png" alt="Créer un compte utilisateur 5" />
<p>Si vous décochez l'option <strong>Utiliser la Bascule rapide utilisateur</strong>, vous obtiendrez l'écran suivant au changement de session. </p>
<img src="/assets/img/xp/xp7/CompteUtilisateur6.png" alt="Créer un compte utilisateur 6" />
<p>Si vous décochez les options <strong>Utiliser l'écran d'accueil</strong> et <strong>Utiliser la Bascule rapide utilisateur</strong>, vous obtiendrez l'écran suivant au changement de session. </p>
<img src="/assets/img/xp/xp7/CompteUtilisateur7.png" alt="Créer un compte utilisateur 7" />

<h3><a href="#tdmchap12" name="chap12" id="chap12">1.b-Changer les mots de passe utilisateur</a></h3>
<ul>
  <li>Cliquez avec le bouton droit sur le <strong>Poste de travail</strong>, sélectionnez la commande <strong>Gérer</strong>.</li>
  <li>Développez <strong>Utilisateurs et groupes locaux</strong>.</li>
  <li>Cliquez avec le bouton droit sur un utilisateur et   sélectionnez <strong>Propriétés</strong>.</li>
 </ul>
 <img src="/assets/img/xp/xp7/GestionMDP1.png" alt="Gestion des mots de passe 1" />
 <ul>
  <li>Cochez l'option <strong>L'utilisateur doit changer de mot de passe à la prochaine ouverture de session</strong>.</li>
</ul>
<img src="/assets/img/xp/xp7/GestionMDP2.png" alt="Gestion des mots de passe 2" />
<p class="notice remarque">Vous pouvez également désactivé un compte à cet endroit.</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Ajouter un compte utilisateur dans un groupe prédéfini</a></h2>
<ul>
  <li>Dans l'outil <strong>Gestion de l'ordinateur</strong>, développez <strong>Utilisateurs et groupes locaux</strong>.</li>
  <li>Affichez les propriétés de l'utilisateur <strong>Util2</strong>.</li>
  <li>Dans l'onglet <strong>Membre de</strong>, cliquez sur <strong>Ajouter</strong>.</li>
</ul>
<img src="/assets/img/xp/xp7/AjoutMembre1.png" alt="Ajouter un membre dans un groupe 1" />
<ul>
  <li>Saisissez <strong>Utilisateurs avec pouvoir</strong> et cliquez sur <strong>Vérifier les noms</strong>.</li>
</ul>

<p class="notice remarque">L'utilisateur avec pouvoir peut créer un nouveau compte et le modifier.</p>

<img src="/assets/img/xp/xp7/AjoutMembre2.png" alt="Ajouter un membre dans un groupe 2" />
<ul>
  <li>Saisissez <strong>Opérateur de sauvegarde </strong> et cliquez sur <strong>Vérifier les noms</strong>.</li>
</ul>

<p class="notice remarque">L'<strong>Opérateur de sauvegarde</strong> peut sauvegarder et restaurer des fichiers.</p>

<img src="/assets/img/xp/xp7/AjoutMembre3.png" alt="Ajouter un membre dans un groupe 3" />
<p>Vous obtiendrez :</p>
<img src="/assets/img/xp/xp7/AjoutMembre4.png" alt="Ajouter un membre dans un groupe 4" />
 <p>Nous allons maintenant créer un compte pour gérer les connexions réseau.</p>
 <ul>
   <li>Cliquez avec le bouton droit dans la fenêtre <strong>Gestion de l'ordinateur &gt; Utilisateur et groupes locaux</strong>.</li>
   <li>Sélectionnez <strong>Nouvel utilisateur</strong> et saisissez comme nom <strong>Compte2</strong>.</li>
   <li>Affichez les <strong>Propriétés</strong> de ce compte.</li>
   <li>Dans l'onglet <strong>Membre de</strong>, cliquez sur le bouton <strong>Ajouter.</strong></li>
   <li>Saisissez <strong>Opérateurs de configuration réseau</strong> et cliquez sur <strong>Vérifier les noms</strong>.</li>
 </ul>
<img src="/assets/img/xp/xp7/AjoutMembre5.png" alt="Ajouter un membre dans un groupe 5" />
<p>Vous obtiendrez :</p>
<img src="/assets/img/xp/xp7/AjoutMembre6.png" alt="Ajouter un membre dans un groupe 6" />

<p class="notice remarque">Par défaut, un utilisateur est membre du groupe <strong>Utilisateurs</strong> qui permet l'arrêt du poste de travail et la création de groupes locaux.</p>

 <h2><a href="#tdmchap3" name="chap3" id="chap1">3-Créer, modifier et supprimer un groupe d&rsquo;utilisateurs</a></h2>
 <p>Dans cet exercice nous voulons créer un groupe <strong>Collaborateurs</strong> et y ajouter les utilisateurs <strong>Compte2</strong> et <strong>Util2.</strong></p>
 <p>Ce Groupe devra avoir les permissions suivantes : Sauvegarder les fichiers et les répertoires, prendre possessions des fichiers ou d'autres objets et modifier l'heure du système. </p>
 <ul>
   <li>Ouvrez l'outil <strong>Gestion de l'ordinateur &gt; Utilisateurs et groupes locaux</strong>.</li>
   <li>Cliquez avec le bouton droit sur <strong>Groupes</strong> et sélectionnez <strong>Nouveau groupe</strong>.</li>
   <li>Saisissez <strong>Collaborateurs</strong> et ajoutez les utilisateurs <strong>Compte2</strong> et <strong>Util2</strong>.</li>
 </ul>
 <p><img src="/assets/img/xp/xp7/AjoutGroupe1.png" alt="Ajouter un groupe 1" /> </p>
 <ul>
   <li>Cliquez sur <strong>Panneau de configuration &gt; Performances et maintenance &gt; Outils d'administration</strong>.</li>
   <li>Double-cliquez sur <strong>Stratégie de sécurité locale</strong>.</li>
 </ul>
<img src="/assets/img/xp/xp7/StrategieSecurite1.png" alt="Stratégie de sécurité 1" />
 <ul>
   <li>Développez l'arborescence <strong>Stratégies locales</strong> et sélectionnez <strong>Attribution des droits utilisateur</strong>. </li>
   <li>Double-cliquez sur <strong>Sauvegarder des fichiers et des répertoires</strong>. </li>
 </ul>
 <img src="/assets/img/xp/xp7/StrategieSecurite2.png" alt="Stratégie de sécurité 2" />
 
 
<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Configurer un profil utilisateur</a></h2>
<p>Lorsque vous vous  connecté avec un nouveau compte, le système crée automatiquement un nouveau dossier du nom de l'utilisateur dans <strong>Documents and Settings</strong>.</p>
<p>Vous trouverez dans ce dossier tous les paramètres de l'utilisateur. C'est ce qu'on appelle communément son <strong>profil</strong>.</p>
<p>&Agrave; chaque fermeture de session le profil de l'utilisateur est mis à jour en local sur le poste. Si vous travaillez dans un domaine, ce profil peut être stocké sur le serveur en totalité ou en partie. </p>
<p>Si vous ne voulez pas qu'un utilisateur puisse modifier son profil, il faut le rendre obligatoire. pour cela :</p>
<ul>
  <li>Ouvrez le dossier de l'utilisateur dans <strong>Documents ans Settings</strong>.</li>
  <li>Au besoin affichez les fichiers et dossiers système. </li>
  <li>Renommer le fichier <strong>ntuser.dat</strong> en <strong>ntuser.man</strong>.</li>
</ul>

<p class="notice remarque">L'utilisateur d'un <strong>profil obligatoire</strong> peut modifier ses paramètres d'environnement, mais<strong> il ne peut pas les sauvegarder</strong> !</p>

<p>&nbsp;</p>

