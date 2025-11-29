<?php
/*
  +---------------------------------------------------------------+
  | Jackadit version 1.0                                          |
  +---------------------------------------------------------------+
  | Copyright (c) 2007 Jackadit                                   |
  +---------------------------------------------------------------+
  | xpcours5d.php v 1.0   16/08/07  16:47:00                      |
  +---------------------------------------------------------------+
  | Auteur: Jackadit <jackadit@jackadit.com>                      |
  +---------------------------------------------------------------+
  | But : page du cours 5d                                        |
  +---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '5d', '6a', '5c');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol start="6" id="xp" class="unstyled">
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Personnaliser les outils d'administration</a>
		<ol class="alpha">
				<li><a href="#chap61" name="tdmchap61" id="tdmchap61">Ajouter les outils d'administration </a></li>
				<li><a href="#chap62" name="tdmchap62" id="tdmchap62">Créer une console MMC </a></li>
				<li><a href="#chap63" name="tdmchap63" id="tdmchap63">Personnaliser une console MMC</a></li>
				<li><a href="#chap64" name="tdmchap64" id="tdmchap64">Afficher des commandes personnalisées</a></li>
				<li><a href="#chap65" name="tdmchap65" id="tdmchap65">Bloquer la modification d'une console</a></li>
		  </ol></li>
    </ol>
</aside>



<h1>Configuration de l'environnement de travail (d)</h1>
<h3>Durée :</h3>
	<p>1 heures 30</p>
<h3>Objectifs</h3>
	<ul>
	  <li>Personnaliser les options d'affichage </li>
      <li>Configurer la <strong>Barre des tâches</strong> et le menu <strong>Démarrer</strong> </li>
	  <li>Rendre le système accessible aux handicapés </li>
	  <li>Créer et personnaliser une console MMC   </li>
	</ul>
<h3>Prérequis</h3>
  <p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Un ordinateur configuré avec Windows XP.</p>

	<h2><a href="#tdmchap6" name="chap6" id="chap6">6-Personnaliser les outils d&rsquo;administration</a></h2>
<h3><a href="#tdmchap61" name="chap61" id="chap61">6.a-Ajouter les outils d&rsquo;administration</a></h3>
<p>Pour accéder plus rapidement aux outils d'administration, vous pouvez les faire apparaître dans le menu Démarrer.</p>
<ul>
  <li>Ouvrez les <strong>Propriétés</strong> du menu <strong>Démarrer</strong>.</li>
  <li>Cliquez sur <strong>Personnaliser</strong>, puis sur l'onglet <strong>Avancé</strong>. </li>
  <li>Activez l'option <strong>Afficher sur le menu Tous les programmes et le menu Démarrer</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/OutilsAdministration1.png" alt="Outils d'administration 1" />

<h3><a href="#tdmchap62" name="chap62" id="chap62">6.b-Créer une console MMC </a></h3>
<p>Pour créer une console MMC (Microsoft Management Console) personnalisée :</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Exécuter</strong>.</li>
  <li>Saisissez <strong>mmc.exe</strong> et validez.  </li>
  <li>Cliquez sur <strong>Fichier &gt; Ajouter/Supprimer un composant logiciel enfichable</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/MMC0.png" alt="Ajouter un composant enfichable dans une console MMC" />
<ul>
  <li>Cliquez sur le bouton <strong>Ajouter</strong>.</li>
</ul>
<img src="/assets/img/xp/xp5/MMC1.png" alt="Ajouter un composant enfichable dans une console MMC 1" />
<ul>
  <li>Cliquez sur <strong>Utilisateur et groupes locaux</strong> dans la liste des <strong>Composants logiciels enfichables disponibles</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/MMC2.png" alt="Ajouter un composant enfichable dans une console MMC 2" />
<ul>
  <li>Choisissez <strong>L'ordinateur local</strong> dans la boite de dialogue puis validez.</li>
</ul>
<img src="/assets/img/xp/xp5/MMC3.png" alt="Ajouter un composant enfichable dans une console MMC 3" />
<ul>
  <li>Cliquez sur <strong>Fichier > Enregistrer sous</strong>.</li>
  <li>Saisissez <strong>Utilisateurs et groupe locaux</strong>.</li>
</ul>
<img src="/assets/img/xp/xp5/MMC4.png" alt="Ajouter un composant enfichable dans une console MMC 4" />

<h3><a href="#tdmchap63" name="chap63" id="chap63">6.c-Personnaliser une console MMC </a></h3>
<p>Nous allons maintenant modifiez l'affichage pour permettre uniquement certains fonctionnalités.</p>
<ul>
  <li>Sélectionnez <strong>Utilisateurs et groupes locaux</strong>.</li>
  <li>Cliquez avec le bouton droit sur <strong>Utilisateurs et groupes locaux</strong>, sélectionnez <strong>Nouvelle vue de la liste des tâches</strong>. </li>
  <li>Laissez les options par défaut. </li>
</ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache1.png" alt="Assistant nouvelle tâche 1" />
<ul>
  <li>Poursuivez la procédure.</li>
</ul>
	<img src="/assets/img/xp/xp5/AssistantNouvelleTache2.png" alt="Assistant nouvelle tâche 2" />
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache3.png" alt="Assistant nouvelle tâche 3" />
<ul>
  <li>Sur le dernier écran cochez l'option <strong>Exécuter l'assistant Nouvelle tâche</strong>. </li>
</ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache4.png" alt="Assistant nouvelle tâche 4" />
<p>L'<strong>Assistant Nouvelle tâche</strong> débute.</p>
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache5.png" alt="Assistant nouvelle tâche 5" />
<ul>
  <li>Optez pour <strong>Commande de menu</strong> dans le type de commande.</li>
</ul>
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache6.png" alt="Assistant nouvelle tâche 6" />
<ul>
  <li>Choisissez <strong>Nouvel utilisateur... </strong> dans la fenêtre <strong>Commande du menu contextuel.</strong>.</li>
</ul>
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache7.png" alt="Assistant nouvelle tâche 7" />
<ul>
  <li>Laissez le nom défini par défaut .</li>
</ul>
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache8.png" alt="Assistant nouvelle tâche 8" />
<ul>
  <li>Sélectionnez l'icône &quot;<strong>Utilisateur</strong>&quot;  .</li>
</ul>
    <img src="/assets/img/xp/xp5/AssistantNouvelleTache9.png" alt="Assistant nouvelle tâche 9" />
	<ul>
  <li>Cliquez sur <strong>Terminer</strong>  .</li>
</ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache10.png" alt="Assistant nouvelle tâche 10" />
<p>Vous devriez obtenir la console suivante :</p>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache10a.png" alt="Assistant nouvelle tâche 10a" />
	
    <h3><a href="#tdmchap64" name="chap64" id="chap64">6.d-Afficher des commandes personnalisées</a></h3>
<p>Nous voulons  définir l'affichage des commandes suivantes liées aux comptes utilisateur  : <strong>déverrouiller un compte, réinitialiser le mot de passe, contrôler l'appartenance aux groupes</strong> </p>
<ul>
  <li>Développez <strong>Utilisateurs et groupes locaux</strong> et sélectionnez <strong>Utilisateurs</strong>.</li>
  <li>Cliquez avec le bouton droit sur <strong>Utilisateurs</strong> et sélectionnez <strong>Nouvelle vue de la liste des tâches</strong>. </li>
  <li>Laissez les options par défaut et poursuivez comme précédemment jusqu'à l'<strong>Assistant Nouvelle tâche</strong>.</li>
  <li>Optez pour <strong>Commande de menu</strong> dans le <strong>Type de commande</strong>.</li>
  <li>Choisissez <strong>Définir le mot de passe...</strong> dans la fenêtre <strong>Commande du menu contextuel</strong>.</li>
</ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache11.png" alt="Assistant nouvelle tâche 11" />
<ul>
  <li>Laissez les options par défaut et choisissez l'icône &quot;<strong>Mot de passe</strong>&quot;.</li>
  </ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache12.png" alt="Assistant nouvelle tâche 12" />
<ul>
  <li>Dans la dernière fenêtre cochez l'option <strong>Exécuter cet assistant à nouveau</strong>.</li>
  </ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache13.png" alt="Assistant nouvelle tâche 13" />
<ul>
  <li>Sélectionnez à nouveau <strong>Commande de menu</strong> dans le <strong>Type de commande</strong>.</li>
  <li>Choisissez <strong>Propriétés</strong> dans la fenêtre <strong>Commande de menu contextuel</strong>.</li>
</ul>

<p class="notice remarque">Cette commande permet de déverrouiller les comptes utilisateur et de contrôler l'appartenance aux groupes.</p>

<ul>
  <li>Laissez le nom défini par défaut et choisissez l'icône &quot;<strong>Propriétés</strong>&quot;.</li>
  </ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache14.png" alt="Assistant nouvelle tâche 14" />
<ul>
  <li>Cliquez sur le bouton <strong>Terminer</strong>.</li>
  </ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache15.png" alt="Assistant nouvelle tâche 15" />

<h3><a href="#tdmchap65" name="chap65" id="chap65">6.e-Bloquer la modification d'une console</a></h3>
<p>Nous voulons maintenant faire en sorte que cette console ne soit plus modifiable</p>
<ul>
  <li>Cliquez sur la commande <strong>Affichage &gt; Personnaliser</strong>.</li>
  <li>Décochez toutes les options de la fenêtre et validez. </li>
</ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache16.png" alt="Assistant nouvelle tâche 16" />
<ul>
  <li>Utilisez la commande <strong>Fichier &gt; Options</strong> et dans la liste <strong>Mode de console</strong>, définissez l'utilisation du <strong>Mode utilisateur - accès limité, fenêtre unique</strong>.</li>
  </ul>
<img src="/assets/img/xp/xp5/AssistantNouvelleTache17.png" alt="Assistant nouvelle tâche 17" />
<ul>
  <li>Enregistrez la console sous le nom <strong>Gestion Utilisateurs</strong>.</li>
  </ul>
<p>Vous devriez obtenir la console suivante :</p> 
<img src="/assets/img/xp/xp5/AssistantNouvelleTache18.png" alt="Assistant nouvelle tâche 18" />

<p class="notice remarque">Pour créer un nouvel utilisateur, cliquez avec le bouton droit dans la console et sélectionnez <strong>Nouvel utilisateur...</strong></p>

<p>&nbsp;</p>

