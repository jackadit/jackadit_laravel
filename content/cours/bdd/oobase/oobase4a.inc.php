<?php
/**
 * BUT : page du cours 4a
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:26:00
 * 
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package Jackadit.com
 * @subpackage 
 * @category 
 * @access protected
 * @uses db
 */
?>




<h1>OpenOffice Base : LES REQUÊTES (a)</h1>
<h2>Introduction</h2>
<p>La puissance des bases de données réside dans leur capacité à faire des recherches dans une masse d'informations entreposées au sein de leur tables. Il est également possible d'en faire des analyses et d'en sortir des tendances.</p>
<p class="notice exemple">Ex : vous n'avez pas besoin de voir toute la liste des clients si vous avez
 seulement besoin du numéro de téléphone de l'un d'eux. 
 Il existe également des requêtes pour certaines actions telles que la 
 mise à jour et la suppression de données.</p>
<p>Cette partie du cours tente de vous faire comprendre la procédure de création d'une requête qui donnera des informations sur les employés. Il faut préalablement avoir créé la table &laquo; <strong>Employe</strong> &raquo; du cours sur la <a href="/cours/qlio/oobase2a"><strong>création de tables</strong></a>.</p>
<p>Si vous n'avez pas le temps de créer la table, vous pouvez utiliser la base de données <strong><a href="../cours/exercices/commerce4.odb" name="commerce4" id="commerce4">commerce4.odb</a></strong> contenant la table &quot;<strong>Employe</strong>&quot; et commencer immédiatement la création des requêtes. Ces fichiers sont dans le dossier <strong>Mes documents</strong> ou dans le dossier indiqué par le formateur. Les différentes options possibles d'une requête seront ensuite vues en détail au travers d'exercices approfondis.</p>

<h2>Les étapes pour la création d'une requête</h2>
<ol>
	<li>Choisir la ou les tables et les requêtes nécessaires.</li>
	<li>Choisir le ou les champs nécessaires.</li>
	<li>Déterminer si les champs ont besoin d'être triés.</li>
	<li>Cacher les champs au besoin.</li>
	<li>Déterminer les critères de sélection.</li>
	<li>Exécuter la requête.</li>
	<li>Options spécialisées&nbsp;: regroupement, générateur d'expression.</li>
	<li>Relier des tables.</li>
</ol>
<p>La prochaine étape consiste à créer une requête. Il s'agit d'afficher le prénom et nom de famille de tous les employés dont le poste est <strong>Gérant</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur l'onglet des requêtes <img src="/assets/img/oobase/bt_requetes.png" alt="bouton requête" />.</li>
	<li>Cliquez sur le bouton <strong>Créer une requête en mode Ébauche</strong> <img src="/assets/img/oobase/bt_creer_requete_ebauche.png" alt="bouton nouvelle requête en mode ébauche" />.</li>
</ol>

    <h3>Choisir la ou les tables et les requêtes nécessaires</h3>
<p>OpenOffice Base vous offre plusieurs manières de créer une requête :</p>
<ul>
	<li>En utilisant l'assistant.</li>
	<li>En la construisant de toute pièce en <strong>Mode Ébauche</strong>.</li>
	<li>En utilisant le <strong>Mode SQL</strong> qui est celui qui vous permet d'écrire vous-même la requête. Cependant, il n'y a pas d'assistant pour vous aider.</li>
</ul>
<p class="notice exemple">Ex : vous pouvez récupérer le nombre d'employés travaillant dans l'entreprise par lieu de travail et par activité. 
Ou, quels types de produits achètent les clients de l'entreprise. Cela peut devenir un outil d'analyse puissant.</p>
<ol class="instruction">
	<li>Pour cet exemple, sélectionnez l'option <strong>Mode Création</strong>.</li>
</ol>
<p class="notice remarque">Vous pouvez créer une requête à partir d'une table ou même d'une autre requête. Il est même possible d'avoir une requête composée de champs provenant de plusieurs tables ou de requêtes.</p>
	<img src="/assets/img/oobase/fen_ajouter_table_employes.png" alt="fenêtre ajouter table employés" />
<p>OpenOffice Base va vous demander à partir de la liste des tables et des requêtes de choisir laquelle ou lesquelles vous voulez ajouter à votre nouvelle requête.</p>
<ol class="instruction">
	<li>Sélectionnez la table <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_ajouter.png" alt="bouton ajouter" />.</li>
	<li>Puisqu'il n'y a pas d'autres tables ou de requêtes à choisir, Cliquez sur le bouton <img src="/assets/img/oobase/bt_fermer.png" alt="bouton fermer" />.</li>
</ol>
<p class="notice remarque">Si vous avez oublié une table ou une requête, vous pouvez en ajouter en <strong>Mode Création</strong> en appuyant sur le bouton <img src="/assets/img/oobase/bt_ajouter_tables.png" alt="bouton ajouter tables" />.<br />
Il faudra ensuite répéter l'opération ci-dessus.</p>
<p>Pour les besoins de formation, les prochaines requêtes seront toutes composées à partir de la table <strong>Employe</strong>.</p>
<p>Vous êtes maintenant dans l'écran pour la création de requête. La partie du haut contient les tables et les requêtes que vous ayez demandées auparavant. La partie du bas est celle qui est la plus importante. C'est là que vous décidez des champs que vous ayez besoin ainsi que des options que vous voulez.</p>
<img src="/assets/img/oobase/fen_resultat_requete1a.png" alt="fenêtre résultat de la requête 1" />
<ul>
	<li>La ligne <strong>Champ</strong> contient le nom des champs dont vous avez besoin pour votre requête.</li>
	<li>La ligne <strong>Alias</strong> permet de renommer le champ que vous utilisez.</li>
	<li>La ligne <strong>Table</strong> détermine la table à utiliser.</li>
	<li>La ligne <strong>Tri</strong> détermine l'ordre d'affichage des données.</li>
	<li>La ligne <strong>Visible</strong> détermine si le champ doit être affiché ou non. Parfois il est souhaitable de ne pas afficher un champ.</li>
	<li>La ligne <strong>Fonction</strong> détermine une fonction devant être exécutée dans la requête.</li>
	<li>La ligne <strong>Ou</strong> et les lignes suivantes servent à déterminer les critères de sélection des enregistrements.</li>
</ul>
<p>&nbsp;</p>

    <h3>Choisir le ou les champs nécessaires</h3>
<p>Parmi les tables et les requêtes que vous avez sélectionnées, vous devez choisir les champs dont vous avez besoin pour votre nouvelle requête. Cela veut dire que vous n'êtes pas obligé d'utiliser tous les champs, mais seulement ceux nécessaires pour la requête.</p>
<p class="notice remarque">Le caractère &laquo; <strong>*</strong> &raquo; situé au début de chaque table qui se retrouve dans une requête indique que vous pouvez ajouter tous les champs de celle-ci dans la requête dans l'ordre o&ugrave; ils se présentent dans la table.</p>
<p>Ceci s'applique aussi aux autres requêtes que vous pouvez ajouter à votre requête.</p>
<p>Il y a trois manières de choisir un champ&nbsp;:</p>
<ol>
	<li>Double-cliquer sur le champ.</li>
  <li>Choisir parmi la liste.</li>
  <li>Cliquer-glisser un champ et l'insérer au bon endroit.</li>
</ol>

<h4>Double-clique sur le champ</h4>
<img src="/assets/img/oobase/choisir_champ_double_clic.png" alt="choisir un champ par double-clic" />
<ol class="instruction">
	<li>Placez le pointeur sur le champ dont vous avez besoin.</li>
	<li>Faites ensuite un double-clique en utilisant le bouton gauche de la souris.</li>
</ol>
<p class="notice remarque">Le champ sélectionné va s'ajouter à la fin de la liste des champs déjà sélectionnés.</p>
<ol class="instruction">
	<li>Répétez l'opération jusqu'à ce que vous ayez tous les champs nécessaires à la requête.</li>
</ol>

<h4>Choisir parmi la liste</h4>
<img src="/assets/img/oobase/choisir_champ_dans_liste.png" alt="choisir un champ dans la liste" />
<ol class="instruction">
	<li>Placez le pointeur dans la cellule blanche à côté du mot <strong>Champ</strong>.</li>
	<li>Cliquez dans la cellule.</li>
	<li>Cliquez ensuite sur la flèche noire pointant vers le bas du côté droit de la cellule.</li>
	<li>De la liste des champs, sélectionnez le champ dont vous avez besoin.</li>
	<li>Répétez l'action dans les cellules situées à droite jusqu'à ce que vous ayez choisi tous les champs nécessaires pour terminer votre nouvelle requête.</li>
</ol>

<h4>&quot;Cliquer-glisser&quot; un champ et l'insérer au bon endroit</h4>
<img src="/assets/img/oobase/choisir_champ_cliquer_glisser.png" alt="choisir un champ en cliquer-glisser" />
<ol class="instruction">
	<li>Placez le pointeur sur l'un des champs désirés de la liste des tables et requêtes que vous avez sélectionnée.</li>
	<li>Cliquez et restez appuyé avec votre doigt sur le bouton gauche de la souris.</li>
</ol>
<p>Une petite boîte blanche va apparaître indiquant que vous &laquo;&nbsp;tenez&nbsp;&raquo; le champ de votre choix. Il ne reste qu'à le glisser dans la zone des critères.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur sur la ligne o&ugrave; vous devez insérer le nom des champs.</li>
</ol>
<p class="notice remarque">Cette dernière méthode est très pratique pour insérer un champ entre deux autres.</p>
<p>Une fois choisis, ces champs seront affichés dans le même ordre que vous les avez choisis de gauche à droite. Il est aussi possible de déplacer les champs dans la requête.</p>
<ol class="instruction">
	<li>Placez le pointeur sur l'en-tête gris au dessus du nom du champ.</li>
	<li>Cliquez et en restant appuyé avec votre doigt sur le bouton gauche de la souris, déplacez la souris vers la gauche ou la droite jusqu'à ce que le champ sélectionné soit à son nouvel emplacement.</li>
	<li>Relâchez le bouton de la souris.</li>
</ol>
<p>Pour la création de votre première requête, utilisez la technique que vous préférez pour mettre sur la ligne des champs le <strong>emp_prenom</strong> suivi du champ <strong>emp_nom</strong>.</p>

    <h3>Déterminer si les champs ont besoin d'être triés</h3>
<p>Une fois que vous avez choisi les champs nécessaires pour compléter votre nouvelle requête, vous devez déterminer si ces champs ont besoin d'être affichés dans un certain ordre.</p>
<p class="notice exemple">Ex : vous voulez la liste des clients par ordre alphabétique, mais également triée par ordre de leur chiffre d'affaire 
avec votre compagnie, selon leur lieu géographique ou une combinaison de ces ordres.</p>
<p>En dessous de chaque nom du champ se trouve l'option pour activer le tri sur celui-ci. Vous pouvez décider de ne pas activer le tri ou de l'avoir en ordre croissant ou décroissant.</p>
<img src="/assets/img/oobase/options_de_tri.png" alt="options de tri" />
<ol class="instruction">
	<li>Cliquez dans la case des tris.</li>
	<li>Cliquez sur le triangle pointant vers le bas.</li>
	<li>Dans la liste, vous pouvez sélectionner le type de tri que vous désirez.</li>
</ol>

<h3>La priorité des tris</h3>
<p>Il faut cependant faire attention. Le champ trié le plus à la gauche à la priorité sur les autres qui sont à sa droite. Donc, si les champs <strong>emp_prenom</strong> et <strong>emp_nom</strong> sont triés, le tri se fera premièrement sur le prénom puis sur le nom de famille.</p>
 <table class="table" summary="résultat du tri">
  <tr>
   <td>Alain</td>
   <td>DISOIR</td>
  </tr>
  <tr>
   <td>Alain</td>
   <td>TERIEUR</td>
  </tr>
  <tr>
   <td>Sam</td>
   <td>DISOIR &hellip;</td>
  </tr>
 </table>
<p class="notice exemple">Ex : Pour la création de votre première requête, il est inutile de trier les champs affichés.</p>
<br class="clear" />

    <h3>Cacher les champs au besoin</h3>
<p>Normalement, tous les champs que vous sélectionnez sont affichés. Il arrive cependant que vous n'ayez besoin d'un champ que pour la recherche sans avoir besoin de l'afficher.</p>
<p class="notice exemple">Ex : vous voulez le prénom et nom des personnes gagnant un revenu supérieur à 45&nbsp;000 &euro; 
mais vous ne voulez pas afficher ce montant.</p>
<p>Pour cacher un champ de l'affichage <img src="/assets/img/oobase/option_visible.png" alt="option visible" /> :</p>
<ol class="instruction">
	<li>Cliquez sur le carré d'affichage en dessous de l'option du tri.</li>
</ol>
<p>La case cochée indique que le champ sera affiché lors de la présentation des enregistrements. Pour la création de votre première requête, il est inutile de cacher des champs.</p>

<h3>Déterminer les critères de sélection</h3>
<p>Après avoir choisi et placé les champs dans l'ordre de votre choix, trié certains champs, décidé d'afficher ou non certains champs, il faut déterminer quels sont les critères de sélection. Si vous n'écrivez aucun critère, tous les enregistrements vont s'afficher.</p>
<p>Les critères servent à filtrer les enregistrements pour afficher seulement ceux dont vous avez besoin. Pour cela, OpenOffice Base vous propose plusieurs opérateurs. Voici une liste ainsi qu'une courte description de chacun.</p>
 <table class="table" summary="Liste des opérateurs">
 <caption>Liste des opérateurs</caption>
  <tr>
   <th class="w100p">=, &lt;, &gt;, &lt;=, &gt;=</th>
   <td>&Agrave; moins qu'un autre opérateur ne soit choisi, le critère est toujours égale au contenu du critère.</td>
  </tr>
  <tr>
   <th>?, *</th>
   <td>Ces opérateurs remplacent un caractère (<strong>?</strong>) ou une série de caractères (<strong>*</strong>).</td>
  </tr>
  <tr>
   <th>Et</th>
   <td>Il est possible de combiner des critères pour limiter le nombre d'enregistrements.</td>
  </tr>
  <tr>
   <th>Ou</th>
   <td>Il est possible de combiner des critères pour avoir le plus d'enregistrements possibles.</td>
  </tr>
  <tr>
   <th>&lt;&gt;</th>
   <td>Affiche tous les enregistrements SAUF ceux qui répondent aux critères.</td>
  </tr>
  <tr>
   <th>=Null</th>
   <td>Affiche les enregistrements dont le contenu du champ est vide.</td>
  </tr>
  <tr>
   <th>Champ calculé</th>
   <td>Il est possible de créer des champs calculés qui donnent le résultat d'une formule qui utilise le contenu des champs de l'enregistrement.<br />
    Ex.: <strong>Total: [Quantité]*[Prix_Unitaire]</strong></td>
  </tr>
  <tr>
   <th>Les fonctions</th>
   <td>Permet d'avoir la somme, la moyenne, le nombre ainsi que d'autres opérations mathématiques sur les enregistrements qui répondent aux critères demandés.</td>
  </tr>
 </table>
<p>Les opérateurs, les opérations ainsi que le générateur d'expressions sont expliqués en plus de détails un peu plus loin dans ce cours.</p>
<ol class="instruction">
	<li>Dans notre exemple, écrivez &laquo;&nbsp;<strong>Gérant</strong>&nbsp;&raquo; pour le critère sous le champ &quot;<strong>emp_poste</strong> &quot;.</li>
</ol>


