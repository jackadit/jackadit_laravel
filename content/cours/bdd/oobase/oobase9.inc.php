<?php
/**
 * BUT : Cours sur les rapports
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:33:00
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
$sNavigation=navigation('oobase', '9', '12', '6d');
?>




<h1>OpenOffice Base : LES RAPPORTS</h1>

<p class="h2-like">Avant de commencer</p>
<p>Afin de réaliser les exercices de ce cours, vous avez besoin de la table <strong>Employe</strong>. Vous la retrouverez dans la base de données <strong>commerce4.odb</strong>.</p>

<h2>Introduction</h2>
<p>Un rapport est une représentation des enregistrements de la base de données mise en forme pour être imprimée.</p>
<p>Un rapport permet donc de faire une synthèse à partir de données qu'il serait difficile d'obtenir autrement.</p>

<h2>Les types de rapports</h2>
<p>OpenOffice Base peut vous aider lors de la création de rapports.</p>
<p>A l'inverse de Access, OpenOffice Base ne contient pas plusieurs types de rapports (graphique, étiquette, ...).<p>
<p>Pour cela, vous devez passer par des outils adaptés tel Calc ou Writer.</p>

<h2>Création d'un état simple avec l'assistant</h2>
<p>L'exemple qui suit vous montre comment créer un rapport en utilisant l'assistant tout en détaillant chacune des étapes de la création.</p>
<ol class="instruction">
	<li>Cliquez sur l'onglet des rapports <img src="/assets/img/oobase/bt_rapports.png" alt="bouton rapports" width="95" height="54" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_assistant_rapport.png" alt="bouton assistant rapport" width="16" height="16" /> Utiliser l'assistant pour créer rapport...</li>
</ol>
<p>OpenOffice Base la fenêtre d'assistant de rapport au-dessus d'une feuille OpenOffice Writer sur laquelle s'affichera le rapport au final.</p>
<img src="/assets/img/oobase/fen_assistant_rapport1.png" alt="assistant rapport1" width="652" height="430"  />
<ol class="instruction">
	<li>Parmi la liste des tables et des requêtes disponibles, sélectionnez la table &quot;<strong>Employe</strong>&quot;.</li>
	<li>De la liste des champs disponibles, sélectionnez dans l'ordre les champs <strong>Nom, Prénom, Salaire, Commission, Bureau et Poste</strong> en sélectionnant le champ et en cliquant sur le bouton <strong>Ajouter</strong>.</li>
</ol>

<div class="notice alert">Faites attention à l'ordre des champs que vous sélectionnez. C'est dans cet ordre qu'ils vont apparaître dans votre rapport.</div>
<div class="notice remarque">Vous pouvez toujours modifier l'ordre des champs à l'aide des boutons <img src="/assets/img/oobase/bt_haut.png" alt="bouton haut" width="31" height="24" /> et <img src="/assets/img/oobase/bt_bas.png" alt="bouton bas" width="31" height="24" />.</div>
<div class="notice alert">Il n'est pas possible de sélectionner des champs de plusieurs tables. Pour faire cela il vous faut passer par des requêtes sélectionnant les champs des différentes tables souhaitées.</div>

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" width="96" height="21" />.</li>
</ol>
<p>L'assistant vous demande ensuite quel type d'étiquetage vous souhaitez. C'est à ce moment-là que vous pourrez renommer vos champs pour l'affichage.</p>
<img src="/assets/img/oobase/fen_assistant_rapport2.png" alt="assistant d'étiquetage" width="654" height="430"  />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" width="96" height="21" />.</li>
</ol>
<p>L'assistant vous demande si vous voulez regrouper les enregistrements sur un champ en particulier.</p>
<img src="/assets/img/oobase/fen_assistant_rapport3.png" alt="assistant rapport 3" width="654" height="430"  />
<p>Vous pouvez aussi faire des &laquo;&nbsp;<strong>sous regroupements</strong>&nbsp;&raquo;, ou plutôt des regroupements à l'intérieur de regroupements.</p>
<ol class="instruction">
	<li>De la liste des champs du rapport, sélectionnez le champ <strong>emp_bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_fleche_select.png" alt="bouton ajouter un item" width="29" height="21" />.</li>
</ol>
<p>L'aperçu de la présentation sur le document Writer va changer. Il va maintenant afficher les champs regroupés par rapport au champ <strong>emp_bureau</strong>. Cela signifie, qu'à chaque fois que la valeur du champ <strong>emp_bureau</strong> va changer, un nouveau regroupement sera généré.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <strong><img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" width="96" height="21" /></strong>.</li>
</ol>
<p>L'assistant vous demande si vous voulez trier les enregistrements selon un ou plusieurs champs. Vous pouvez trier les enregistrements jusqu'à sur quatre champs. Le champ dans la première case a priorité sur la seconde et ainsi de suite. Aussi, vous pouvez choisir si vous voulez afficher les enregistrements en ordre croissant ou décroissant en appuyant sur le bouton du coté droit du nom du champ.</p>
<img src="/assets/img/oobase/fen_assistant_rapport4.png" alt="assistant rapport4" width="654" height="430"  />
 <ol class="instruction">
	<li>Sélectionnez de la liste le champ &quot;<strong>emp_nom</strong>&quot; pour le premier tri.</li>
</ol>
<p>Les employés seront triés selon le nom de famille.</p>
<ol class="instruction">
	<li>Sélectionnez de la liste le champ &quot;<strong>emp_prenom</strong>&quot; pour le second tri.</li>
</ol>
<p>En plus d'être triés par nom de famille, les enregistrements seront aussi triés par prénom. Donc, pour un même nom de famille, les enregistrements seront aussi triés sur le prénom de ces personnes.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <strong><img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" width="96" height="21" /></strong>.</li>
</ol>
<p>L'assistant vous demande ensuite quel apparence vous souhaitez donner à votre rapport ?</p>
<p>Vous pouvez également décider de l'orientation du papier.</p>
<img src="/assets/img/oobase/fen_assistant_rapport5.png" alt="assistant rapport5" width="654" height="430"  />
<ol class="instruction">
	<li>Sélectionnez les mêmes options que sur l'image ci-dessus.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" width="96" height="21" />.</li>
</ol>
<br class="clear" />
<p>L'assistant vous propose de modifier le nom du rapport.</p>
<img src="/assets/img/oobase/fen_assistant_rapport6.png" alt="assistant rapport6" width="654" height="430"  />

<p>Vous pouvez à présent modifier le titre principal du rapport et décider si vous voulez modifier sa mise en forme ou le créer tel quel.</p>

<div class="notice remarque"><p>Vous pouvez également choisir de créer un rapport statique ou dynamique. Dynamique signifiant qu'il va automatiquement être mis à jour si vous modifiez les données dans les tables.</p></div>

<ol class="instruction">
	<li>Écrivez dans la case du titre du rapport &quot;<strong>R_Employés</strong>&quot;.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_creer.png" alt="bouton créer" width="96" height="22" />.</li>
</ol>

<p>Voici la première partie du résultat final.</p>
 <img src="/assets/img/oobase/fen_assistant_rapport7.png" alt="assistant rapport7" width="654" height="430"  />
<p>Il est maintenant temps de regarder en détail la composition du rapport.</p>
	
<h2>Modifier un rapport</h2>
<p>Il est possible de modifier un rapport.</p>
<ol class="instruction">
	<li>&Agrave; partir de l'onglet rapport, cliquez avec le bouton droit sur le nom du rapport et choisissez <strong>Modifier</strong>".</li>
</ol>

<h2>Ajouter un champ calculé</h2>
<p>Comme pour les requêtes et les formulaires, il est possible d'ajouter des champs calculés qui répondent mieux à vos besoins.</p>
<pre>Pour avoir accès à des champs calculés, vous devez obligatoirement passer par une requête.</pre>


