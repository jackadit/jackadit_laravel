<?php
/**
 * page de cours 10 sur ACCESS 2003 : Cours sur l'état-étiquette
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   11/03/07  23:37:00  
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
<h1>ACCESS : L'ÉTAT ÉTIQUETTE</h1>
<p class="h2-like">Avant de commencer</p>
<p>Access vous offre plusieurs types d'états. Ce cours montre comment créer un état étiquette et le modifier. Pour plus d'informations sur les états, veuillez vous rendre sur le cours relatif aux <a href="/cours/qlio/access/9">états</a>.</p>
<p>L'exercice de ce cours consiste à créer un état étiquette qui contient la liste des étiquettes postales de la liste des clients de la société.</p>
<p>Pour réaliser l'exercice de ce cours, il vous faut la base de données <strong>commerce2.mdb</strong>.</p>
<h2>Introduction</h2>
<p>Access vous permet de créer rapidement et facilement des étiquettes à partir des données de vos tables et de vos requêtes. La prochaine partie consiste à créer un nouvel état à partir des données de la table <strong>Client</strong></p>
<ol class="instruction">
	<li>Sélectionner la table <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton <strong>Étiquette</strong> <img src="/assets/img/access/bt_etat_etiquette.png" alt="bouton état étiquette" />.</li>
</ol>

<p class="notice remarque">Si vous avez des données qui proviennent de plusieurs tables, créez une requête composée de plusieurs tables. Pour plus d'informations, lisez le cours sur les requêtes et les exercices des requêtes.</p>
<p>L'assistant étiquettes va ensuite vous poser quelques questions sur le type d'étiquettes sur lequel l'état va déposer les données choisies.</p>
<ol class="instruction">
	<li>Pour l'exercice, les étiquettes choisies seront celle de 90,2 mm x 42,3 mm du fabricant A-ONE.</li>
</ol>
<img src="/assets/img/access/f_assistant_etiquette1.png" alt="assistant étiquette1" />

<ol class="instruction">
	<li>Pour la liste des unités de mesure, sélectionnez l'option <strong>Métrique</strong>.</li>
	<li>Pour le type d'étiquette, sélectionnez l'option <strong>Feuille à feuille</strong>.</li>
	<li>Pour le modèle de l'étiquette, sélectionnez <strong>28171</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p class="notice remarque">L'option <strong>Nombre de front</strong> indique le nombre d'étiquettes côte à côte. Il est toutefois possible que vous ne trouviez pas le format que vous désirez parmi les unités de mesure, les compagnies et les types d'étiquettes.</p>
<p>Si c'est le cas, vous pouvez appuyer sur le bouton "personnaliser" pour générer vos propres formats d'étiquettes avec les informations que vous possédez.</p>
<p class="notice remarque">Access vous donne la possibilité de choisir parmi plusieurs compagnies pour le choix des étiquettes. Sélectionnez la compagnie de laquelle vous avez acheté les étiquettes et le modèle.</p>

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
 <img src="/assets/img/access/f_assistant_etiquette2.png" alt="assistant étiquette2" />

<p>L'assistant étiquette vous propose ensuite de modifier le format de présentation du texte. Faites attention de ne pas choisir une taille de police de caractère trop grande. Sinon, le texte n'entrera pas sur l'étiquette.</p>
<ol class="instruction">
	<li>Sélectionnez la police de caractère, sa taille, sa présentation et la couleur de votre choix.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant étiquette vous demande par après de choisir les champs dont vous avez besoin et de la placer sur l'étiquette. Vous pouvez aussi ajouter du texte en plus des champs désirés.</p>
<img src="/assets/img/access/f_assistant_etiquette3.png" alt="assistant étiquette3" />
<p>Il y a deux manières de sélectionner un champ :</p>
<ol class="instruction">
	<li>Choisir le champ désiré de la colonne de gauche et appuyer sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un item" width="30" height="19" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Faites un double-clique sur le champ désiré de la colonne de gauche.</li>
	<li>Pour les besoins de l'exercice, placez les champs dans l'ordre tel que sur l'image ci-contre.</li>
	<li>Sélectionnez le champ <strong>cli_nom</strong>.</li>
	<li>Appuyez sur la <strong>barre d'espacement</strong>, la touche &laquo;<strong>&nbsp;-&nbsp;</strong>&raquo; et la <strong>barre d'espacement</strong> encore une fois.</li>
	<li>Sélectionnez le champ <strong>cli_contact</strong>.</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" />.</li>
</ol>
<p>L'étiquette va changer de ligne à chaque fois que vous appuyez sur la touche <img src="/assets/img/access/touche_entree.png" alt="touche entr&amp;eacute;e" width="40" height="24" />.</p>
<p>Il est possible d'associer du texte avec des champs sur une même ligne.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>cli_adresse</strong>.</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" />.</li>
	<li>Sélectionnez le champ <strong>cli_code_postal</strong>.</li>
	<li>Appuyez sur la <strong>barre d'espacement.</strong></li>
	<li>Sélectionnez le champ <strong>cli_ville</strong>.</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<img src="/assets/img/access/f_assistant_etiquette4.png" alt="assistant étiquette4" />
<p>L'assistant vous demande ensuite si vous voulez trier les enregistrements sur un ou plusieurs champs. Pour les besoins de l'exercice, les enregistrements seront triés en ordre croisant selon le nom de compagnie.</p>
<ol class="instruction">
	<li>De la liste des champs disponibles de la colonne de gauche, sélectionnez le champ <strong>cli_nom</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un item" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Faites un double-clique sur le champ <strong>cli_nom</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<img src="/assets/img/access/f_assistant_etiquette5.png" alt="assistant étiquette5" />
<p>L'assistant va ensuite vous demander quel nom il faut donner à l'état. Il vous suggère le titre <strong>Étiquettes</strong> <strong>Client</strong>. Cela est une assez bonne description de l'état. Donc, nous allons le conserver pour l'exercice.</p>

  <ol class="instruction">
	<li>Pour les besoins de l'exercice, laissez les options telles quelles.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Access va prendre quelques instants pour générer l'état selon les options que vous avez choisies et l'enregistrer dans votre base de données.</p>
<p>Voici à quoi devrait ressembler la première étiquette de l'état.</p>
<img src="/assets/img/access/f_assistant_etiquette6.png" alt="assistant étiquette6" />

<h2>Modifier l'état</h2>
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode crétion" />.</li>
</ol>
 <img src="/assets/img/access/f_assistant_etiquette7.png" alt="assistant étiquette7" />
<p>Access utilise la fonction <strong>SupprEspace()</strong> pour retirer les espaces inutiles à la fin d'un champ.</p>
<p>Le logiciel utilise aussi la commande <strong>&amp;</strong> pour coller ensemble des parties de texte, placé entre des guillemets, ou d'autres champs.</p>
<p class="notice exemple">Ex : regardez la première ligne de l'étiquette. 
     La fonction rassemble le champ <strong>emp_nom</strong>, le texte qui a été mis entre guillemets, &quot;<strong>-</strong>&quot;, et le champ <strong>Personne contact</strong>.</p>
<p>Pour plus d'informations sur la manière de modifier cet état, référez-vous au cours sur les <a href="/cours/qlio/access6a">formulaires</a>. Les outils utilisés pour concevoir les formulaires et les états sont identiques.</p>

