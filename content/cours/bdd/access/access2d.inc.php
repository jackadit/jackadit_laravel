<?php
/**
 * page de cours 2d sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  12:45:00
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
<h1>ACCESS : LES TABLES (d)</h1>
<h2>Exporter une table</h2>
<p>Access nous offre la possibilité d'exporter les données des tables. Celles-ci peuvent être exportées vers d'autres bases de données ou dans le format d'autres applications tel qu'Excel ou Word.</p>
<p>Vous pouvez de cette façon prendre avantage des possibilités de celles-ci pour des calculs, des analyses ou du publipostage par exemple. Il est à noter cependant qu'il est préférable d'exporter à partir des <a href="/cours/qlio/access4a">requêtes</a> si vous avez seulement besoin d'une partie des enregistrements et non le tout.</p>
<img src="../img/access/menu_exporter.png" alt="exporter table employés" />
<ol class="instruction">
	<li>À partir du menu principal, sélectionnez la table que vous voulez exporter.</li>
	<li>Du menu <strong>Données externes</strong>, sélectionnez l'option <strong>Excel</strong>.</li>
	<li>Dans la fenêtre qui s'ouvre, indiquez le nom du fichier d'exportation.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_ok.png" alt="bouton ok" />.</li>
</ol>
<p>Access va créer un nouveau document avec les données de tables dans le format que vous avez choisi.</p>


<h2>Importer une table</h2>
<p>L'option <strong>Importer</strong> vous permet d'aller chercher des données provenant d'autres bases de données ou d'autres applications et de les ajouter à votre base de données.</p>
<p>Le prochain exercice consiste à importer des données à partir d'un fichier Excel <strong><a href="./cours/exercices/client.xlsx" name="client" id="client">Client.xlsx</a></strong>.</p>
<ol class="instruction">
	<li>À partir du menu principal, sélectionnez la table concernée.</li>
	<li>Du menu <strong>Données Externes</strong>, cliquez sur le bouton <img src="../img/access/bt_nouvelle_source.png" alt="Bouton nouvelle source de données" />.</li>
	<li>De la liste du menu <strong>Nouvelles sources de données</strong>, sélectionnez le menu <strong>À partir d'un fichier</strong>.</li>
	<li>Puis sélectionnez le type <strong>Excel</strong>.</li>
</ol>
<img src="../img/access/menu_nouvelles_donnees.png" alt="menu données externes Excel" />
<p>La prochaine partie présume que vous avez enregistré le fichier <strong>Client.xlsx</strong> dans le dossier <strong>Mes documents</strong>.</p>

<ol class="instruction">
</ol>
<img src="../img/access/f_donnees_externes.png" alt="importation feuille de calcul" />
<p>Access a besoin de savoir sur quelles feuilles de calcul Excel se trouvent les données à importer.</p>
<p>Pour l'exercice, ces données sur la feuille de travail nommé <strong>Client</strong>. Il n'y a aucune autre information sur cette feuille autre que les données à importer. Sinon, il aurait fallu donner un nom au bloc de cellules contenant les données à importer.</p>
<p>L'assistant d'importation appelle cela l'option &quot;<strong>Afficher les plages nommées</strong>&quot;.</p>

<img src="../img/access/assistant_importation1.png" alt="assistant importation feuille de calcul1" />
<ol class="instruction">
	<li>Sélectionnez l'option <strong>Afficher les feuilles de données</strong>.</li>
	<li>Sélectionnez la feuille de données nommée <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Access vous demande si les données de la première ligne de la feuille de travail sont les noms des champs de la table à importer. Dans ce cas, il est vrai que les données de la première ligne sont les noms des champs.</p>
<img src="../img/access/assistant_importation2.png" alt="assistant importation feuille de calcul2" />
<ol class="instruction">
	<li>Cliquez sur l'option <strong>Première ligne contient les en-têtes de colonnes</strong>.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<br class="clear" />

<p>Access vous demande maintenant plus d'informations sur chacun des champs, ou colonnes, des données à importer.</p>
<p>Pour changer les propriétés de chacun des champs, il suffit de cliquer sur l'en-tête gris contenant le nom du champ. Vous pourrez ensuite changer quelques propriétés tel que le nom, l'indexation et si vous voulez importer ou non le champ.</p>
<p>Si la première ligne des données à importer n'était pas celle avec le nom des champs, vous pouvez la changer maintenant en entrant le nom de votre choix dans la case <strong>Nom du champ</strong>.</p>
<p>Même si vous avez répondu <strong>oui</strong> à la question deux fenêtres auparavant, vous pouvez encore changer le nom pour mieux répondre à vos besoins.</p>
<p>Access vous demande aussi si vous voulez indexer le champ.</p>
<p>Les choix sont <strong>non</strong>, <strong>oui avec doublon</strong> et <strong>oui sans doublon</strong>.</p>
<p>Ceci aide à trier les enregistrements et aussi nécessaire lors des relations entre les tables.</p>
<p>Elle accélère l'accès aux données aux tables reliées.</p>
<img src="../img/access/assistant_importation3.png" alt="assistant importation feuille de calcul3" />
<ol class="instruction">
	<li>Placez un tri seulement sur les champs nécessaires pour vos besoins.</li>
</ol>
<p class="notice remarque">Vous ralentissez la présentation des données lorsque vous placez le tri sur plusieurs champs de la table.</p>
<p>Une dernière option vous donne le choix d'importer seulement les champs dont vous avez besoin. Il vous est encore possible d'exclure un champ de l'importation. Il suffit de choisir le nom du champ et de cocher la case <strong>Ne pas importer le champ (sauter)</strong>.</p>
<p>Access vous demande ensuite de définir une clé primaire.</p>
<img src="../img/access/assistant_importation4.png" alt="assistant importation feuille de calcul4" />
<ol class="instruction">
	<li>Choisissez votre propre clé primaire qui sera&nbsp;: <strong>cli_id</strong>.</li>
</ol>

<br class="clear" />

<p>Access vous demande ensuite quel nom vous allez donner à la table que vous importez. Ceci implique que vous n'importez pas les données dans une table déjà existante.</p>
<p>Vous avez aussi la possibilité d'activer l'assistant d'analyse de structure. Celui-ci analyse les données et regarde pour des dédoublements d'informations.</p>
<p>Il vous demande ensuite s'il peut découper les données en plusieurs tables pour avoir une structure des tables la plus optimale possible.</p>
<p>Pour les besoins de l'exercice, n'activez pas cette option. Vous pouvez aussi avoir de l'aide supplémentaire une fois que l'assistant à terminé son travail.</p>
<p>Access va ensuite vous confirmer l'importation des données selon les choix que vous avez demandés.</p>
<img src="../img/access/assistant_importation5.png" alt="assistant importation feuille de calcul5" />
<ol class="instruction">
	<li>Saisissez dans le champ <strong>Importer vers la table</strong> le nom <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Voici le résultat de l'importation si vous ouvrez la table <strong>Client</strong>.</p>
<img src="../img/access/resultat_importation_client.png" alt="résultat de l'importation de la feuille de calcul" />

<p>Vous pouvez procéder de la même manière pour importer les fichiers suivants :</p>
<ul>
	<li><a href="./cours/exercices/facture.xlsx">Facture</a></li>
	<li><a href="./cours/exercices/article.xlsx">Article</a></li>
	<li><a href="./cours/exercices/activite.xlsx">Activite</a></li>
	<li><a href="./cours/exercices/liaison_fact_art.xlsx">Liaison_Fact-Art</a></li>
</ul>



<h2>Lier une table</h2>
<p>Lier une table à la base de données vous donne l'avantage d'accéder à des données qui sont à l'extérieur de celle-ci sans pour autant la &quot;grossir&quot;.</p>
<p>Vous pouvez aussi ajouter ou retirer des données de la table extérieure.</p>
<p>Le désavantage est que vous ne pouvez pas changer la structure de cette table.</p>
<p>Le prochain exercice consiste à lier la table que vous avez importée dans l'exercice précédent.</p>
<ol class="instruction">
	<li>Du menu <strong>Données externes</strong>, cliquez sur le bouton <strong>Gestionnaire de tables liées</strong> <img src="../img/access/bt_gestionnaire_tables_lies.png" alt="bouton gestionnaire des tables liés" />.</li>
	<img src="../img/access/f_gestionnaire_tables_lies.png" alt="fenêtre du gestionnaire de tables liées" />
	<li>Dans la fenêtre du gestionnaire de tables liées, cliquez sur le bouton <img src="../img/access/bt_ajouter.png" alt="bouton ajouter" />.</li>
</ol>
<p>La prochaine partie présume que vous avez enregistré le fichier <strong>Client.xls</strong> dans le dossier <strong>Mes documents</strong>.</p>
<ol class="instruction">
	<li>Dans la nouvelle fenêtre, <strong>Ajouter un nouveau lien</strong>, sélectionnez l'option <strong>Excel</strong>.</li>	
	<img src="../img/access/f_ajouter_nouveau_lien.png" alt="fenêtre ajouter un nouveau lien" />
	<li>Cliquez sur le bouton <img src="../img/access/bt_suivant.png" alt="bouton suivant" />.</li>
	<li>Sélectionnez le fichier <strong>Client.xlsx</strong>.</li>
	<img src="../img/access/f_ajouter_nouveau_lien2.png" alt="fenêtre ajouter un nouveau lien2" />
	<li>Cliquez sur le bouton <img src="../img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>

<p>Plusieurs des étapes à suivre pour lier une base de données externe ressemblent à ceux de l'importation.</p>
<p>Pour les besoins de l'exercice, écrivez dans la case <strong>Nom de la table attachée : Clients</strong> lorsque cela vous sera demandé.</p>

<p>Access vous confirme que les données de la feuille de travail <strong>Clients</strong> du fichier <strong>Client.xlsx</strong> sont maintenant accessibles à partir de votre base de données.</p>
<ol class="instruction">
	<img src="../img/access/f_gestionnaire_tables_lies2.png" alt="fenêtre du gestionnaire de tables liées" />
	<li>Cliquez sur le bouton <img src="../img/access/bt_fermer.png" alt="bouton fermer" />.</li>
</ol>
 
<p>Pour différencier les tables de la base de données de ceux qui sont attachés, Access place une flèche devant la table attachée. Puisque les données proviennent d'Excel, l'icone de l'application apparaît aussi.</p>
<img src="../img/access/f_tous_les_objets.png" alt="fenêtre tous les obojets" />

<h2>Imprimer la structure d'une table</h2>
<ol class="instruction">
	<li>Du menu <strong>Outils de base de données </strong>, sélectionnez l'option <strong>Documentation de base de données</strong>.</li>
</ol>
<p>La fenêtre suivante va apparaître&nbsp;:</p>
<img src="../img/access/f_documentation.png" alt="fenêtre documentation" />
<ol class="instruction">
	<li>Sélectionnez la ou les tables dont vous voulez imprimer la structure.</li>
</ol>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../img/access/bt_options.png" alt="bouton options" /></li>
</ol>
<br class="clear" />
<p>La fenêtre suivante va apparaître&nbsp;:</p>
 <img src="../img/access/f_imprimer_definitions_tables.png" alt="fenêtre imprimer définitions tables" />
<ol class="instruction">
	<li>Sélectionnez les options dont vous avez besoin.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_ok.png" alt="bouton OK" />.</li>
	<li>Une fois revenue à la fenêtre de documentation, Cliquez sur le bouton <img src="../img/access/bt_ok.png" alt="bouton OK" />.</li>
</ol>
<p>Access va générer l'état que vous avez demandé. Vous pouvez le voir à l'écran ou l'imprimer en appuyant sur le bouton <img src="../img/access/bt_imprimer.png" alt="bouton imprimer" />.</p>
</ol>

 OU<br />
<ol class="instruction">
	<li>Appuyez sur les touches <img src="../img/access/Touche_Ctrl.png" alt="touche CTRL" />&nbsp;+ <img src="../img/access/Touche_P.jpg" alt="touche P" />.</li>
</ol>

