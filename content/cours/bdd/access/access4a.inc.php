<?php
/**
 * page de cours 4a sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:13:00  
 * 
 * @author Stéphane WAHL 
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category cours
 * @access public
 * @uses
 */
?>
<h1>ACCESS : LES REQUÊTES (a)</h1>
<h2>Introduction</h2>
<p>La puissance des bases de données réside dans leur capacité à faire des recherches dans une masse d'informations entreposées au sein de leur tables. Il est également possible d'en faire des analyses et d'en sortir des tendances.</p>
<p class="notice exemple">Ex : vous n'avez pas besoin de voir toute la liste des clients si vous avez
 seulement besoin du numéro de téléphone de l'un d'eux. 
 Il existe également des requêtes pour certaines actions telles que la 
 mise à jour et la suppression de données.</p>
<p>Cette partie du cours tente de vous faire comprendre la procédure de création d'une requête qui donnera des informations sur les employés. Il faut préalablement avoir créé la table &laquo; <strong>Employe</strong> &raquo; du cours sur la <a href="/cours/qlio/access2a"><strong>création de tables</strong></a>.</p>
<p>Si vous n'avez pas le temps de créer la table, vous pouvez utiliser la base de données <a href="./cours/exercices/commerce2.accdb" title="Fichier commerce2.accdb"><strong>commerce2.accdb</strong></a> contenant la table &quot;<strong>Employe</strong>&quot; et commencer immédiatement la création des requêtes.</p>
<p>Les différentes options possibles d'une requête seront ensuite vues en détail au travers d'exercices approfondis.</p>

<h2>Les étapes pour la création d'une requête</h2>
<ol>
	<li>Choisir la ou les tables et les requêtes nécessaires.</li>
	<li>Choisir le type de requête.</li>
	<li>Choisir le ou les champs nécessaires.</li>
	<li>Déterminer si les champs ont besoin d&rsquo;être triés.</li>
	<li>Cacher les champs au besoin.</li>
	<li>Déterminer les critères de sélection.</li>
	<li>Exécuter la requête.</li>
	<li>Options spécialisées : regroupement, générateur d'expression.</li>
	<li>Relier des tables.</li>
</ol>
<p>La prochaine étape consiste à créer une requête. Il s'agit d'afficher le prénom et nom de famille de tous les employés dont le poste est <strong>Gérant</strong>.</p>

    <h3>Choisir la ou les tables et les requêtes nécessaires</h3>
<img src="/assets/img/access/f_assistant_requete.png" alt="fenêtre nouvelle requête" />
<p>Access vous offre plusieurs manières de créer une requête :</p>
<ol>
	<li>En la construisant de toute pièce en <strong>Mode Création</strong>.</li>
	<p class="notice remarque">Le <strong>Mode Création</strong> est celui qui vous permet d'accéder à toutes les options de la création d'une requête. Cependant, il n'y a pas d'assistant pour vous aider.</p>
	<li>En utilisant l'un des assistants.</li>
</ol>
<ul>
	<li>L'<strong>Assistant Requête simple</strong> vous demande la liste des champs que vous voulez utiliser et affiche le résultat. Il n'y a pas de critères de sélection. Il affiche les champs demandés pour tous les enregistrements.</li>
	<li>L'<strong>Assistant requête analyse croisée</strong> vous pose quelques questions pour créer un tableau croisé. Vous pouvez facilement récupérer le nombre, la somme, la moyenne ou d'autres opérations d'un champ par rapport à un autre.</li>

<p class="notice exemple">Ex : vous pouvez récupérer le nombre d'employés travaillant dans l'entreprise par lieu de travail et par activité. 
Ou, quels types de produits achètent les clients de l'entreprise. Cela peut devenir un outil d'analyse puissant.</p>

	<li>L'<strong>Assistant Requête trouver les doublons</strong> est très intéressant lorsque vous avez des difficultés à créer des relations entre les tables. L'une des raisons pour qu'Access refuse de créer une relation entre les tables est l'existence de doublons dans l'une des tables. Cette requête vous permet de trouver quel enregistrement a un contenu d'un champ en double et par là-même corriger la situation.</li>
	<li>L'<strong>Assistant Requête de non correspondance</strong> est utile pour les relations entre les tables. À quoi sert une relation s'il n'y a pas la donnée équivalente dans l'autre table ? Cette requête permet de trouver les enregistrements qui n'ont pas d'équivalent, ou de valeur en commun, dans la table reliée. Ceci permet de s'assurer que tous les enregistrements sont reliés à une données d'une autre table.</li>
</ul>
<ol class="instruction">
	<li>Pour cette exemple, allez dans le menu <strong>Créer</strong>, dans l'onglet <strong>Requêtes</strong>, sélectionnez l'option <strong>Mode Création</strong> <img src="/assets/img/access/bt_requete_creation.png" alt="bouton requête création" />.</li>
</ol>
<p class="notice remarque">Vous pouvez créer une requête à partir d'une table ou même d'une autre requête. Il est même possible d'avoir une requête composée de champs provenant de plusieurs tables ou de requêtes.</p>

<p>Pour les besoins de formation, les prochaines requêtes seront toutes composées à partir de la table <strong>Employe</strong>.</p>
<ol class="instruction">
	<li>Si le volet de visualisation des tables n'est pas affiché, cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_tables.png" alt="bouton ajouter tables" />.</li>
	<li>Double cliquez sur la table <strong>Employe</strong> pour l'afficher dans la zone de requête.</li>
</ol>

<p>Vous êtes maintenant dans l'écran pour la création de requête.</p>
<p>La partie du haut affiche les tables et/ou les requêtes choisies pour effectuer votre requête.</p>
<p>La partie du bas est celle qui est la plus importante. C'est là que vous décidez des champs dont vous ayez besoin ainsi que les options souhaitées.</p>
<img src="/assets/img/access/f_requete2.png" alt="fenêtre requête2" />
<ul>
	<li>La première ligne <strong>Champ</strong> sert à sélectionner les champs dont vous avez besoin pour votre requête.</li>
	<li>La seconde ligne <strong>Table</strong> détermine la table à utiliser.</li>
	<li>La troisième ligne <strong>Tri</strong> détermine l'ordre d'affichage des données.</li>
	<li>La quatrième ligne <strong>Critères</strong> détermine si le champ doit être affiché ou pas. Parfois il est souhaitable de ne pas afficher un champ.</li>
	<li>La cinquième ligne <strong>Ou</strong> et les lignes suivantes servent à déterminer les critères d'affichage des enregistrements.</li>
</ul>


<h3>Choisir le type de requête</h3>
<p>Access vous offre six genres de requêtes. Chacune est spécialisée dans un genre de recherche ou d'opération.</p>
<ul>
	<li class="selection"> <strong>Requête sélection :</strong> Affiche les enregistrements qui répondent aux critères demandés.</li>
</ul>
<p>C'est le type que vous allez utiliser le plus souvent. Il affiche seulement les enregistrements qui répondent aux critères sélectionnés.</p>
<ul>
	<li class="analysecroise"> <strong>Requête analyse croisée :</strong> Affiche un tableau de synthèse selon les champs demandés.</li>
	<li class="nouvelletable"> <strong>Requête nouvelle table :</strong> Création d'une nouvelle table avec les champs demandés selon les critères demandés.</li>
	<li class="miseajour"> <strong>Requête mise à jour :</strong> Mise à jour des enregistrements selon les critères demandés.</li>
	<li class="ajout"> <strong>Requête ajout :</strong> Ajoute des enregistrements d'une autre table selon les critères demandés.</li>
	<li class="suppression"> <strong>Requête suppression :</strong> Élimine des enregistrements selon les critères demandés.</li>
</ul>
<p>Pour le moment, on s'intéressera à la requête de type sélection. C'est celle que vous utilisez pour accomplir des recherches dans une base de données. Pour les exercices numéro 1 jusqu'à 21, c'est la requête de type sélection qui sera utilisé. Les exercices suivants utiliseront un autre type de requêtes.</p>

    <h3>Choisir le ou les champs nécessaires</h3>
<p>Parmi les tables et les requêtes que vous avez sélectionnées, vous devez choisir les champs dont vous avez besoin pour votre nouvelle requête. Cela veut dire que vous n'êtes pas obligé d'utiliser tous les champs, mais seulement ceux nécessaires pour la requête.</p>
<p class="notice remarque">Le caractère &laquo; <strong>*</strong> &raquo; situé au début de chaque table qui se retrouve dans une requête indique que vous pouvez ajouter tous les champs de celle-ci dans la requête dans l'ordre où ils se présentent dans la table.</p>
<p>Ceci s'applique aussi aux autres requêtes que vous pouvez ajouter à votre requête.</p>
<p>Il y a trois manières de choisir un champ :</p>
<ol>
	<li>Double-cliquer sur le champ.</li>
  <li>Choisir parmi la liste.</li>
  <li>Cliquer-glisser un champ et l'insérer au bon endroit.</li>
</ol>

<h4>Double-clique sur le champ</h4>
<img src="/assets/img/access/choisir_champ_double_clic.png" alt="choisir un champ par double-clic" />
<ol class="instruction">
	<li>Placez le pointeur sur le champ dont vous avez besoin.</li>
	<li>Faites ensuite un double-clique en utilisant le bouton gauche de la souris.</li>
</ol>
<p class="notice remarque">Le champ sélectionné va s'ajouter à la fin de la liste des champs déjà sélectionnés.</p>
<ol class="instruction">
	<li>Répétez l'opération jusqu&rsquo;à ce que vous ayez tous les champs nécessaires à la requête.</li>
</ol>

<h4>Choisir parmi la liste</h4>
<img src="/assets/img/access/choisir_champ_dans_liste.png" alt="choisir un champ dans la liste" />
<ol class="instruction">
	<li>Placez le pointeur dans la cellule blanche à côté du mot <strong>Champ</strong>.</li>
	<li>Cliquez dans la cellule.</li>
	<li>Cliquez ensuite sur la flèche noire pointant vers le bas du côté droit de la cellule.</li>
	<li>De la liste des champs, sélectionnez le champ dont vous avez besoin.</li>
	<li>Répétez l'action dans les cellules situées à droite jusqu&rsquo;à ce que vous ayez choisi tous les champs nécessaires pour terminer votre nouvelle requête.</li>
</ol>

<h4>Cliquer-glisser&quot; un champ et l'insérer au bon endroit</h4>
<img src="/assets/img/access/choisir_champ_cliquer_glisser.png" alt="choisir un champ en cliquer-glisser" />
<ol class="instruction">
	<li>Placez le pointeur sur l'un des champs désirés de la liste des tables et requêtes que vous avez sélectionnée.</li>
	<li>Cliquez et restez appuyé avec votre doigt sur le bouton gauche de la souris.</li>
</ol>
<p>Le champ sélectionné va se dédoubler indiquant que vous &laquo;&nbsp;tenez&nbsp;&raquo; le champ de votre choix. Il ne reste qu'à le glisser dans la zone des critères.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur sur la ligne où vous devez insérer le nom des champs.</li>
</ol>
<p class="notice remarque">Cette dernière méthode est très pratique pour insérer un champ entre deux autres.</p>
<p>Une fois choisis, ces champs seront affichés dans le même ordre que vous les avez choisis de gauche à droite. Il est aussi possible de déplacer les champs dans la requête.</p>
<ol class="instruction">
	<li>Placez le pointeur sur l'en-tête gris au dessus du nom du champ.</li>
	<li>Cliquez et en restant appuyé avec votre doigt sur le bouton gauche de la souris, déplacez la souris vers la gauche ou la droite jusqu'à ce que le champ sélectionné soit à son nouvel emplacement.</li>
	<li>Relâchez le bouton de la souris.</li>
</ol>
<p>Pour la création de votre première requête, utilisez la technique que vous préférez pour mettre sur la ligne des champs le <strong>emp_prenom</strong> suivi du champ <strong>emp_nom</strong>.</p>

    <h3>Déterminer si les champs ont besoin d&rsquo;être triés</h3>
<p>Une fois que vous avez choisi les champs nécessaires pour compléter votre nouvelle requête, vous devez déterminer si ces champs ont besoin d&rsquo;être affichés dans un certain ordre.</p>
<p class="notice exemple">Ex : vous voulez la liste des clients par ordre alphabétique, mais également triée par ordre de leur chiffre d'affaire 
avec votre compagnie, selon leur lieu géographique ou une combinaison de ces ordres.</p>
<p>En dessous de chaque nom du champ se trouve l'option pour activer le tri sur celui-ci. Vous pouvez décider de ne pas activer le tri ou de l'avoir en ordre croissant ou décroissant.</p>
<img src="/assets/img/access/options_de_tri.png" alt="options de tri" />
<ol class="instruction">
	<li>Cliquez dans la case des tris.</li>
	<li>Cliquez sur la flèche pointant vers le bas.</li>
	<li>Dans la liste, vous pouvez sélectionner le type de tri que vous désirez.</li>
</ol>

<h3>La priorité des tris</h3>
<p>Il faut cependant faire attention. Le champ trié le plus à la gauche à la priorité sur les autres qui sont à sa droite. Donc, si les champs <strong>emp_prenom</strong> et <strong>emp_nom</strong> sont triés, le tri se fera premièrement sur le prénom puis sur le nom de famille.</p>
 <table class="table" summary="résultat du tri">
  <tr>
   <td>Bruno</td>
   <td>ZIEUVAIR</td>
  </tr>
  <tr>
   <td>Élie</td>
   <td>COPTAIRE</td>
  </tr>
  <tr>
   <td>Marc</td>
   <td>ASSIN &hellip;</td>
  </tr>
 </table>
<p class="notice exemple">Ex : Pour la création de votre première requête, il est inutile de trier les champs affichés.</p>


<h3>Cacher les champs au besoin</h3>
<p>Normalement, tous les champs que vous sélectionnez sont affichés. Il arrive cependant que vous n'ayez besoin d'un champ que pour la recherche sans avoir besoin de l'afficher.</p>
<p class="notice exemple">Ex : vous voulez le prénom et nom des personnes gagnant un revenu supérieur à 45&nbsp;000 &euro; 
mais vous ne voulez pas afficher ce montant.</p>
<p>Pour cacher un champ de l'affichage <img src="/assets/img/access/option_afficher.png" alt="option afficher" /> :</p>
<ol class="instruction">
	<li>Cliquez sur le carré d'affichage en dessous de l'option du tri.</li>
</ol>
<p>La case cochée indique que le champ sera affiché lors de la présentation des enregistrements. Pour la création de votre première requête, il est inutile de cacher des champs.</p>

<h3>Déterminer les critères de sélection</h3>
<p>Après avoir choisi et placé les champs dans l'ordre de votre choix, trié certains champs, décidé d'afficher ou non certains champs, il faut déterminer quels sont les critères de sélection. Si vous n'écrivez aucun critère, tous les enregistrements vont s'afficher.</p>
<p>Les critères servent à filtrer les enregistrements pour afficher seulement ceux dont vous avez besoin. Pour cela, Access vous propose plusieurs opérateurs. Voici une liste ainsi qu'une courte description de chacun.</p>
 <table class="table" summary="Liste des opérateurs">
 <caption>Liste des opérateurs</caption>
  <tr>
   <th class="w200p">=, &lt;, &gt;, &lt;=, &gt;=</th>
   <td>À moins qu'un autre opérateur ne soit choisi, le critère est toujours égale au contenu du critère.</td>
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
   <th>Entre et</th>
   <td>Affiche les enregistrements qui sont entre deux critères. Ceux-ci sont inclusifs.</td>
  </tr>
  <tr>
   <th>Pas ou &lt;&gt;</th>
   <td>Affiche tous les enregistrements SAUF ceux qui répondent aux critères.</td>
  </tr>
  <tr>
   <th>Est Null</th>
   <td>Affiche les enregistrements dont le contenu du champ est vide.</td>
  </tr>
  <tr>
   <th>Champ calculé</th>
   <td>Il est possible de créer des champs calculés qui donnent le résultat d'une formule qui utilise le contenu des champs de l'enregistrement.<br />
    Ex.: <strong>Total: [Quantité]*[Prix_Unitaire]</strong></td>
  </tr>
  <tr>
   <th>Les opérations</th>
   <td>Permet d'avoir la somme, la moyenne, le nombre ainsi d'autres opérations mathématiques sur les enregistrements qui répondent aux critères demandés.</td>
  </tr>
  <tr>
   <th>Générateur d'expression</th>
   <td>Permet d'utiliser au maximum les requêtes. Utilise les fonctions intégrées dans Access.</td>
  </tr>
 </table>
<p>Les opérateurs, les opérations ainsi que le générateur d'expressions sont expliqués en plus de détails un peu plus loin dans ce cours.</p>
<img src="/assets/img/access/requete1.png" alt="requete 1" />
<ol class="instruction">
	<li>Dans notre exemple, écrivez &laquo;&nbsp;<strong>Gérant</strong>&nbsp;&raquo; pour le critère sous le champ &quot;<strong>emp_poste</strong> &quot;.</li>
</ol>


