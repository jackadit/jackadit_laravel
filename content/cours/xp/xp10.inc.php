<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									                |
	+---------------------------------------------------------------+
	| xpcours10.php  v 1.0   06/06/07	22:48:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 10											                  |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '10');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Partager un dossier et configurer les permissions</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Attribuer les permissions NTFS</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Permissions de partage et permissions NTFS</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">S'approprier un dossier pour en modifier les permissions</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Copier/déplacer un dossier</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Héritage de permissions</a></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Partages administratifs et cachés</a></li>
  </ol>
</aside>



<h1>Gestion des accès aux données du disque</h1>
<h3>Durée :</h3>
<p>1 heure 30 </p>
  <h3>Objectifs</h3>
<ul>
  <li>Savoir partager un dossier</li>
    <li>Configurer les permissions de partage</li>
  <li>Configurer les permissions NTFS</li>
  <li>Optimiser l'utilisation des deux types de permissions</li>
  </ul>
<h3>Prérequis</h3>
<p>Aucun</p>
<h3>Matériel à prévoir</h3>
<p>Deux ordinateurs avec carte réseau, configurés avec Windows XP utilisant le système NTFS et connecté entre eux par l'intermédiaire d'un câble croisé ou d'un Hub/switch.</p>

<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Partager un dossier et configurer les permissions</a></h2>
<p>Vous pouvez partager un fichier ou un dossier sur votre ordinateur avec l'ensemble des utilisateurs de l'ordinateur. Pour cela, il vous suffit de déplacer (ou copier) le fichier ou dossier dans le dossier <strong>Documents partagés</strong>. </p>
<p>Pour partager un dossier entre plusieurs ordinateurs, la procédure est la suivante :</p>
<ul>
  <li>Créez un dossier <strong>Partage1</strong> sur votre ordinateur.</li>
    <li>Cliquez avec le bouton droit sur ce dossier et sélectionnez <strong>Partage et sécurité...</strong></li>
    <li>Cochez la case <strong>Partager ce dossier sur le réseau</strong> et laisser le nom par défaut.</li>
    <li>cochez la case <strong>Autoriser les utilisateurs réseau à modifier mes fichiers</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/PartageSecurite1.png" alt="Partage et sécurité 1" />
<p>Cette fenêtre est celle du partage simple. Vous  pouvez désactiver cette configuration.</p>
<p>Pour faire apparaître l'onglet Sécurité dans la fenêtre des propriétés :</p>
<ul>
  <li>Cliquez sur le menu <strong>Outils</strong> du <strong>Poste de travail</strong>.</li>
  <li>Sélectionnez <strong>Options des dossiers...</strong></li>
  <li>Cliquez sur l'onglet <strong>Affichage</strong>.</li>
  <li>Dans la zone <strong>Paramètres avancés</strong>, décochez la case <strong>Utiliser le partage de fichiers simple (recommandé)</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/PartageSimple.png" alt="Partage simple décoché" />
  <p>Vous obtenez alors la fenêtre suivante :</p>
<img src="/assets/img/xp/xp10/PartageSecurite2.png" alt="Partage et sécurité 2" />
<p>En cliquant sur le bouton <strong>Autorisations</strong>, vous accéderez aux permissions de partage.</p>

<p class="notice remarque">Par défaut, le groupe <strong>Tout le monde</strong> a une permission de <strong>Lecture</strong>.</p>

<ul>
  <li>Ajoutez L'utilisateur <strong>Util2</strong> en lui attribuant la permission de partage <strong>Contrôle total</strong>.
  </li>
</ul>
<img src="/assets/img/xp/xp10/PartageSecurite3.png" alt="Partage et sécurité 3" />

<p class="notice remarque">Si vous voulez renommer le partage, il faudra d'abord le supprimer, puis le recréer à nouveau et spécifier les permissions</p>
  
<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Attribuer les permissions NTFS</a></h2>
<p>L'accès à ce dossier ne deviendra effectif que si les permissions NTFS nous y autorise. Pour attribuer les permissions NTFS à un dossier, vous devez ouvrir les <strong>Propriétés</strong> du dossier et accéder à l'onglet <strong>Sécurité</strong>.</p>
<ul>
  <li>Ajoutez le groupe <strong>Tout le monde</strong>. </li>
</ul>
<img src="/assets/img/xp/xp10/PartageSecurite4.png" alt="Partage et sécurité 4" />

<p class="notice remarque">Par défaut, les permissions NTFS suivantes sont attribuées : <strong>Lecture et exécution - Affichage du contenu du dossier - Lecture</strong> </p>

<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Permissions de partage et permissions NTFS</a></h2>
<p>Dans cette partie, vous aller tester la priorité des permissions.</p>
<ul>
  <li>Ouvrez une session en tant que <strong>Util1</strong> sur l'<strong>ordinateur 1</strong>. </li>
  <li>Créez un dossier <strong>Partage3</strong>.</li>
  <li>Activez le menu contextuel, puis sélectionnez <strong>Partage et sécurité</strong>.</li>
  <li>Sélectionnez l'option <strong>Partager ce dossier</strong>, laissez le nom par défaut, puis cliquez sur le bouton <strong>Autorisations</strong>.</li>
  <li>cochez la case <strong>Contrôle total (Autoriser)</strong> pour le groupe <strong>Tout le monde</strong>.</li>
  <li>Affichez les <strong>Propriétés</strong> du dossier <strong>Partage3</strong> et cliquez surl'onglet <strong>Sécurité</strong>.</li>
  <li>Ajoutez les permissions <strong>Contrôle total</strong> au groupe <strong>Tout le monde</strong>.</li>
  <li>Connectez-vous à partir de l'<strong>ordinateur 2</strong> sur ce dossier en cliquant sur<strong> Démarrer &gt; Exécuter</strong> et en saisissant <strong>\\ordi1\partage3</strong>.</li>
</ul>
<p>Vous devriez pouvoir créer un nouveau dossier puisque vous possédez les permissions suffisantes.</p>
<ul>
  <li>Modifiez les permissions NTFS du dossier <strong>Partage3</strong>  dans l'onglet <strong>Sécurité</strong> en cochant uniquement <strong>Lecture (Autoriser)</strong> pour le groupe <strong>Tout le monde</strong>.</li>
  <li>&Agrave; partir de l'ordinateur 2, essayez de créez un nouveau dossier.</li>
</ul>
<p>Vous devriez rencontrer un message d'erreur <strong>Accès refusé</strong>.</p>
<p><img src="/assets/img/xp/xp10/AccesRefuse.png" alt="Accès refusé" /> </p>
<ul>
  <li>Rétablissez les <strong>permissions NTFS</strong> en cochant la case <strong>Contrôle total </strong>pour le groupe <strong>Tout le monde</strong>.</li>
  <li>Modifiez les <strong>permissions de partage</strong> du dossier <strong>Partage3</strong> pour le groupe <strong>Tout le monde</strong> en cochant uniquement la case <strong>Lecture</strong>.</li>
</ul>
<p>Vous devriez obtenir le même message d'erreur.</p>
<p class="notice remarque">En conclusion : La permissions qui s'applique est la plus restrictive entre les permissions NTFS et les permissions de partage.</p>
<h2><a href="#tdmchap4" name="chap4" id="chap4">4-S'approprier un dossier pour en modifier les permissions</a></h2>
<ul>
  <li>Ouvrez une session en tant que <strong>Util2</strong> sur l'<strong>ordinateur 1</strong>.</li>
  <li>Affichez les <strong>Propriétés</strong> du dossier <strong>Partage1</strong>.</li>
  <li>Dans l'onglet <strong>Sécurité</strong>, cliquez sur le bouton <strong>Paramètres avancés</strong>.</li>
  <li>Cliquez sur l'onglet <strong>Propriétaire</strong>.</li>
</ul>
<p>Vous ne pouvez pas modifier le propriétaire puisque vous n'avez pas les permissions adéquates.</p>
<img src="/assets/img/xp/xp10/Appropriation1.png" alt="Appropriation 1" />
<ul>
  <li>Affichez l'onglet <strong>Autorisations</strong> des <strong>Paramètres avancés</strong> du dossier <strong>Partage1</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/Appropriation2.png" alt="Appropriation 2" />
<ul>
  <li>Modifiez les permissions de l'utilisateur <strong>Util2</strong> en cochant la case <strong>Appropriation (Autoriser)</strong>. </li>
</ul>
<img src="/assets/img/xp/xp10/Appropriation3.png" alt="Appropriation 3" />
<ul>
  <li>Vous pouvez maintenant modifier le propriétaire du dossier <strong>Partage1</strong>.</li>
</ul>
<p><img src="/assets/img/xp/xp10/Appropriation4.png" alt="Appropriation 4" />  </p>
<ul>
  <li>Affichez les permissions NTFS du dossier <strong>Partage1</strong>.</li>
  <li>Supprimez le compte <strong>Util2</strong>.</li>
</ul>

<p class="notice remarque">Si le Créateur propriétaire n'existe plus, seul un compte administrateur peut s'approprier le dossier.</p>

<h2><a href="#tdmchap5" name="chap5" id="chap5">5-Copier/déplacer un dossier</a></h2>
<p>Le but de l'exercice est de vérifier si les permissions restent les mêmes une fois un dossier ou un fichier copié ou déplacé. </p>
<ul>
  <li>Connectez-vous sur l'<strong>ordinateur 1</strong> en tant que <strong>Util1</strong>.</li>
  <li>Créez un dossier nommé <strong>Permissions</strong> et un dossier nommé <strong>Parents</strong>. </li>
  <li>Ajouter le groupe <strong>Tout le monde</strong> avec la permission <strong>Lecture</strong> pour le dossier <strong>Permissions</strong>.  </li>
  <li>Ajouter le groupe <strong>Tout le monde</strong> avec la permission <strong>Contrôle total </strong> pour le dossier <strong>Parents</strong>. </li>
  <li>Copiez le dossier <strong>Permissions</strong> dans le dossier <strong>Parents</strong>. </li>
  <li>Vérifiez les permissions NTFS du dossier <strong>Permissions</strong>. </li>
</ul>

<p class="notice remarque"p>Vous constaterez que le dossier <strong>Permissions</strong> a <strong>hérité</strong> des permissions NTFS du dossier <strong>Parents</strong>.</p>

<ul>
  <li>Faites les mêmes opérations mais en <strong>déplaçant</strong> cette fois le dossier <strong>Permissions</strong>. </li>
</ul>

<p class="notice remarque">Vous constaterez que le dossier <strong>Permissions</strong> a <strong>conservé</strong> ses permissions NTFS.</p>

<h2><a href="#tdmchap6" name="chap6" id="chap6">6-Héritage de permissions</a></h2>
<p>Le but de cet exercice est de montrer comment fonctionne l'héritage des permissions. </p>
<ul>
  <li>Créez deux dossiers dans <strong>Parents</strong> : <strong>Enfant1</strong> et <strong>Enfant2</strong>.</li>
  <li>Vérifiez leurs permissions NTFS. (normalement cela devrait être <strong>Contrôle total </strong>pour le groupe <strong>Tout le monde</strong>).</li>
</ul>
<p>Nous allons modifier les permissions du dossier <strong>Enfant1</strong> (<strong>Tout le monde - Lecture</strong>).</p>
<ul>
  <li>Ouvrez les <strong>Propriétés</strong> du dossier <strong>Enfant1</strong> et cliquez sur le bouton <strong>Paramètres avancés</strong> de l'onglet <strong>Sécurité</strong>.</li>
  <li>Décochez l'option <strong>Hérite de l'objet parent les entrées d'autorisation qui s'appliquent aux objets enfants. Cela inclut les objets dont les entrées sont spécifiquement définies ici</strong>. </li>
</ul>
<img src="/assets/img/xp/xp10/Securite1.png" alt="Sécurité 1" />
<ul>
  <li>Cliquez sur le bouton <strong>Copier</strong> et validez.</li>
  <li>Sélectionnez ensuite le groupe <strong>Tout le monde</strong> et ne cochez que <strong>Lecture</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/Heritage1.png" alt="Héritage 1" />
<p>Pour le dossier <strong>Parents</strong>, nous allons ajouter le groupe <strong>Utilisateurs</strong> et attribuer la permission <strong> Lecture</strong>.</p>
<img src="/assets/img/xp/xp10/Heritage2.png" alt="Héritage 2" />
<ul>
  <li>Supprimez ensuite le groupe <strong>Tout le monde</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/Heritage3.png" alt="Héritage 3" />
<ul>
  <li>Validez l'ensemble des fenêtres.</li>
  <li>Vérifiez les permissions de chaque dossier.</li>
</ul>
<p>Vous de devriez avoir :</p>
<ol>
  <li>Dossier <strong>Parents</strong> : <strong>Lecture</strong> pour le groupe <strong>Utilisateurs</strong>.</li>
  <li>Dossier <strong>Enfant1</strong> : <strong>Lecture</strong> pour le groupe <strong>Tout le monde</strong> (puisque ce dossier n'hérite plus du dossier parent).</li>
  <li>Dossier <strong>Enfant2</strong> : <strong>Lecture</strong> pour le groupe <strong>Utilisateurs</strong>.</li>
</ol>

<p class="notice remarque">Si vous vouliez propager les permissions vous auriez du cocher, dans les <strong>Paramètres avancés</strong>, la case 
<strong>Remplacer les entrées d'autorisations de tous les objets enfants par les entrées affichées ici et qui s'appliquent aux objets enfants</strong>.</p>


<h2><a href="#tdmchap7" name="chap7" id="chap7">7-Partages administratifs et cachés</a></h2>
<p>Cet exercice mettra en évidence l'existence de partages administratifs et de partages cachés.</p>
<p>Pour visualiser les partages administratifs, procédez de la manière suivante :</p>
<ul>
  <li>Ouvrez la console Gestion de l'ordinateur à partir des <strong>Outils d'administration</strong> du <strong>Panneau de configuration</strong>.</li>
  <li>Cliquez sur <strong>Outils système &gt; Dossiers partagés &gt; Partages</strong>.   </li>
</ul>
<img src="/assets/img/xp/xp10/Partage1.png" alt="Partage 1" />
<ul>
  <li>Connectez-vous sur l'<strong>ordinateur 2</strong> en tant que <strong>Util2</strong>.</li>
  <li>Cliquez sur <strong>Démarrer &gt; Exécuter</strong> et saisissez <strong>\\ordi1\C$</strong>. </li>
</ul>
<p>La fenêtre suivante apparaît :</p>
<img src="/assets/img/xp/xp10/ConnexionOrdi1.png" alt="Connexion à l'ordinateur 1" />
<ul>
  <li>Saisissez le nom d'utilisateur <strong>Util1</strong> et son mot de passe, car seuls les comptes ayant les privilèges d'administration peuvent accéder à ce partage. </li>
</ul>
<p>Une fenêtre avec l'ensemble du contenu de <strong>C:\</strong> devrait s'afficher.</p>
  
<p>Nous allons maintenant créer un partage caché.</p>
<ul>
  <li>Dans la console <strong>Gestion de l'ordinateur</strong>, cliquez avec le bouton droit sur le dossier <strong>Partages</strong> puis sélectionnez <strong>Nouveau partage de fichiers</strong>.</li>
  <li>Dans la zone <strong>Dossier à partager</strong> de l'<strong>Assistant Création d'un dossier partagé</strong>, parcourez l'arborescence jusqu'au dossier Enfant1.</li>
  <li>Saisissez comme nom de partage <strong>Enfant1$</strong>.</li>
</ul>
<img src="/assets/img/xp/xp10/Partage2.png" alt="Partage 2" />

<p class="notice remarque">Pour qu'un partage soit caché, il faut impérativement que son nom de partage soit suivi du signe <strong>$</strong>. </p>

<ul>
  <li>Connectez-vous sur l'<strong>ordinateur 2</strong> avec le compte <strong>Util2</strong>.</li>
  <li>Saisissez <strong>\\ordi1\Enfant1$</strong> dans le fenêtre <strong>Exécuter</strong>. </li>
</ul>
<p>Une fenêtre avec l'ensemble du contenu du dossier <strong>Enfant1</strong> devrait s'afficher.</p>
<p>&nbsp;</p>

