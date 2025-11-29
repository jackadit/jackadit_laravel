<?php
/**
 * BUT : page du cours 2d
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       10/02/09        18:26:00
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




<h1>OpenOffice Base : LES TABLES (d)</h1>
<h2>Exporter une table</h2>
<p>OpenOffice Base nous offre la possibilité d'exporter les données des tables. Celles-ci peuvent être exportées vers d'autres bases de données ou dans le format d'autres applications tel que Calc.</p>
<p>Vous pouvez de cette façon prendre avantage des possibilités de celles-ci pour des calculs, des analyses ou du publipostage par exemple. Il est à noter cependant qu'il est préférable d'exporter à partir des <a href="/cours/qlio/oobase4a">requêtes</a> si vous avez seulement besoin d'une partie des enregistrements et non le tout.</p>
<p>Dans cet exercice, nous allons nous servir de Calc pour exporter au format csv.</p>
<ol class="instruction">
	<li>&Agrave; partir du menu principal, sélectionnez l'onglet <img src="/assets/img/oobase/bt_tables.png" alt="onglet tables" />.</li>
	<li>Cliquez avec le bouton droit de la souris sur la table que vous voulez exporter, puis choisissez la commande <strong>Copier</strong>.</li>
	<li>Du menu <strong>Fichier</strong>, sélectionnez la commande <strong>Nouveau</strong> > <strong>Classeur</strong>.</li>
	<li>Cliquez dans la cellule A1 de la fenêtre Calc, puis choisissez <strong>Édition</strong> > <strong>Coller</strong>.</li>
</ol>
<p>Vous pouvez à présent enregistrer ou exporter les données de la table dans de nombreux formats.</p>
<ol class="instruction">
	<li>Dans Calc, sélectionnez la commande <strong>Fichier</strong> > <strong>Enregistrer sous...</strong></li>
	<li>Saisissez le nom <strong>Employe</strong></li>
	<li>Choisissez le type <strong>Texte CSV (.csv)</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrer2.png" alt="Bouton Enregistrer" />.</li>
</ol>
<img src="/assets/img/oobase/export_csv_employes.png" alt="export de la table employés au format csv" />
<br class="clear" />

<h2>Importer une table</h2>
<p>L'option <strong>Importer</strong> vous permet d'aller chercher des données provenant d'autres bases de données ou d'autres applications et de les ajouter à votre base de données.</p>
<p class="notice remarque">Vous ne pouvez importer les fichiers texte, les fichiers classeur et le carnet d'adresse de votre système qu'en <strong>lecture seule</strong>.</p>
<div class="notice remarque">
<p>Lorsque vous importez un fichier texte ou classeur, la première ligne du fichier doit être une ligne d'en-tête contenant des informations.</p> 
<p>La seconde ligne du fichier est la première ligne contenant effectivement des données. Le format de chacun des champs de la deuxième ligne détermine le format de toute la colonne.</p>
<p>Toute information de format d'une feuille de calcul est perdue lors de l'importation dans Base.</p>
</div>
<p>Le prochain exercice consiste à importer des données à partir d'un fichier Excel <strong><a href="../exercices/Clients.ods" name="clients" id="clients">Clients.ods</a></strong>.</p>
<ol class="instruction">
	<li>Ouvrez le fichier contenant les données à importer dans Base.</li>
	<li>Sélectionnez les données à copier dans Base.</li>
</ol>
<p class="notice remarque">N'oubliez pas d'inclure la première ligne qui contient les données d'en-tête.</p>
<ol class="instruction">
	<li>Choisissez la commande <strong>Édition</strong> > <strong>Copier</strong>.</li>
	<li>Dans la fenêtre Base, cliquez sur l'onglet <img src="/assets/img/oobase/bt_tables.png" alt="onglet Tables" /> pour afficher les tables.</li>
	<li>Dans la fenêtre Base, choisissez la commande <strong>Édition</strong> > <strong>Coller</strong>.</li>
</ol>
<p>La boîte de dialogue Copier la table s'affiche. Étant donné que la plupart des bases de données requiert une clé primaire, il est recommandé d'activer l'option <strong>Créer une clé primaire</strong>.</p>
<img src="/assets/img/oobase/fen_copier_table_clients.png" alt="boîte de dialogue Copier la table" />
<ol class="instruction">
	<li>Saisissez <strong>Client</strong> dans le champ <strong>Nom de la table</strong>.</li>
	<li>Cochez la case <strong>Créer une clé primaire</strong>.</li>
	<li>Saisissez <strong>ID_client</strong> dans le champ <strong>emp_nom</strong> prévu à cet effet.</li>
</ol>
<p class="notice remarque">Si vous importer des données avec une clé primaire, vous n'avez pas besoin de cocher cette case.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant2.png" alt="bouton Suivant" />.</li>
</ol>
<img src="/assets/img/oobase/fen_appliquer_colonnes.png" alt="fenêtre appliquer des colonnes" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_tout_selectionner.png" alt="bouton Sélectionner tout" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant2.png" alt="bouton Suivant" />.</li>
</ol>
<img src="/assets/img/oobase/fen_formatage_type.png" alt="fenêtre formatage type" />
<p>Vous pouvez maintenant modifier le nom ou le type des champs importés.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_creer2.png" alt="bouton Créer" />.</li>
</ol>
<p>Voici le résultat de l'importation si vous ouvrez la table <strong>Client</strong>.</p>
<img src="/assets/img/oobase/tableau_5_saisies_clients.png" alt="tableau des clients" />

<h2>Mise en application</h2>
<p>Le but de cet exercice est de d'importer les tables manquantes à cette base.</p>
<p>Vous pouvez télécharger les fichiers ci-dessous en cliquant sur leur lien.</p>
<ul>
<li><a href="../cours/exercices/factures.ods" name="Factures" id="Factures">Factures</a></li>
<li><a href="../cours/exercices/stock.ods" name="Stock" id="Stock">Stock</a></li>
<li><a href="../cours/exercices/activites.ods" name="Activites" id="Activites">Activites</a></li>
<li><a href="../cours/exercices/transition_Fact-Stock.ods" name="Transition_Fact-Stock" id="Transition_Fact-Stock">Transition_Fact-Stock</a></li>
</ul>
<p>Une fois les tables importées, vous devez procéder aux modifications nécessaires au bon fonctionnement de la base <strong>Employe</strong>.</p>


