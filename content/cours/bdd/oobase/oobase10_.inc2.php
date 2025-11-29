<?php
/**
 * oobase10.php
 * BUT : Cours sur le rapport étiquette
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
?>
<div class="navig">
<a href="/cours/qlio/oobase/9">&laquo; Précédent</a> - Cours10 - <a href="/cours/qlio/oobase/11">Suivant &raquo;</a> <a href="/cours/qlio/index">Table des mati�res</a>
</div>
<div id="tdm" class="dockclass">
<p class="h2-like">Table des matières</p>
	<ul class="tdm">
		<li><a href="#chap1" id="tdmchap1">1-Avant de commencer</a></li>
		<li><a href="#chap2" id="tdmchap2">2-Introduction</a></li>
		<li><a href="#chap3" id="tdmchap3">3-Modifier l'état</a></li>
	</ul>
</div>
<div id="cours">
<h1><a href="#tdmchap1" id="chap1">Les rapport étiquette</a></h1>
<p>OpenOffice Base vous offre plusieurs types d'états. Ce cours montre comment créer un état étiquette et le modifier. Pour plus d'informations sur les états, veuillez vous rendre sur le cours relatif aux <a href="/cours/qlio/oobase/9">états</a>.</p>
<p>L'exercice de ce cours consiste à créer un état étiquette qui contient la liste des étiquettes postales de la liste des clients de la société.</p>
<p>Pour réaliser l'exercice de ce cours, il vous faut la base de données <strong>commerce2.odb</strong>.</p>
<h1><a href="#tdmchap2" id="chap2">2-Introduction</a></h1>
<p>OpenOffice Base vous permet de créer rapidement et facilement des étiquettes à partir des données de vos tables et de vos requêtes. La prochaine partie consiste à créer un nouvel état à partir des données de la table <strong>Client</strong></p>
<ol class="instruction">
	<li>à partir du menu principal, cliquez sur l'onglet états <img src="../images/oobase/bouton_etat.png" alt="bouton état" width="126" height="25" />.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_nouvel_etat.png" alt="bouton nouvel état" width="69" height="22" />.</li>
</ol>
<img src="../images/oobase/assistant_Etat_Etiquette1.png" alt="assistant étiquette1" width="310" height="200" />
<ol class="instruction">
	<li>De la liste des états que vous pouvez créer, sélectionnez <strong>Assistant étiquette</strong>.</li>
	<li>De la liste des tables et des requêtes disponibles, sélectionnez la table <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_OK_simple.png" alt="bouton OK" width="92" height="26" />.</li>
</ol>
<p class="notice remarque">Si vous avez des données qui proviennent de plusieurs tables, créez une requête composée de plusieurs tables. Pour plus d'informations, lisez le cours sur les requêtes et les exercices des requêtes.</p>
<p>L'assistant étiquettes va ensuite vous poser quelques questions sur le type d'étiquettes sur lequel l'état va déposer les données choisies.</p>
<ol class="instruction">
	<li>Pour l'exercice, les étiquettes choisies seront celle de 90,2 mm x 42,3 mm du fabricant A-ONE.</li>
</ol>
 <img src="../images/oobase/assistant_Etat_Etiquette2.png" alt="assistant étiquette2" width="319" height="200" />
<ol class="instruction">
	<li>Pour la liste des unités de mesure, sélectionnez l'option <strong>Métrique</strong>.</li>
	<li>Pour le type d'étiquette, sélectionnez l'option <strong>Feuille à feuille</strong>.</li>
	<li>Pour le modèle de l'étiquette, sélectionnez <strong>28171</strong>.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
<p class="notice remarque">L'option <strong>Nombre de front</strong> indique le nombre d'étiquettes côte à côte. Il est toutefois possible que vous ne trouviez pas le format que vous désirez parmi les unités de mesure, les compagnies et les types d'étiquettes.</p>
<p>Si c'est le cas, vous pouvez appuyer sur le bouton <img src="../images/oobase/bouton_Personnaliser.png" alt="bouton personnaliser" width="100" height="22" /> pour générer vos propres formats d'étiquettes avec les informations que vous possédez.</p>
<p class="notice remarque">OpenOffice Base vous donne la possibilité de choisir parmi plusieurs compagnies pour le choix des étiquettes. sélectionnez la compagnie de laquelle vous avez acheté les étiquettes et le modèle.</p>
 <img src="../images/oobase/assistant_Etat_Etiquette3.png" alt="assistant étiquette3" width="319" height="200" />
<p>L'assistant étiquette vous propose ensuite de modifier le format de présentation du texte. Faites attention de ne pas choisir une taille de police de caractère trop grande. Sinon, le texte n'entrera pas sur l'étiquette.</p>
<ol class="instruction">
	<li>sélectionnez la police de caractère, sa taille, sa présentation et la couleur de votre choix.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
<p>L'assistant étiquette vous demande par après de choisir les champs dont vous avez besoin et de la placer sur l'étiquette. Vous pouvez aussi ajouter du texte en plus des champs désirés.</p>
 <img src="../images/oobase/assistant_Etat_Etiquette4.png" alt="assistant étiquette4" width="319" height="200" />
<p>Il y a deux manières de sélectionner un champ&nbsp;:</p>
<ol class="instruction">
	<li>Choisir le champ désiré de la colonne de gauche et appuyer sur le bouton <img src="../images/oobase/bouton_ajouter_un.png" alt="bouton ajouter un item" width="30" height="19" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Faites un double-clique sur le champ désiré de la colonne de gauche.</li>
	<li>Pour les besoins de l'exercice, placez les champs dans l'ordre tel que sur l'image ci-contre.</li>
	<li>sélectionnez le champ <strong>emp_nom</strong>.</li>
	<li>Appuyez sur la <strong>barre d'espacement</strong>, la touche &laquo;<strong>&nbsp;-&nbsp;</strong>&raquo; et la <strong>barre d'espacement</strong> encore une fois.</li>
	<li>sélectionnez le champ <strong>Personne contact</strong>.</li>
	<li>Appuyez sur la touche <img src="../images/oobase/touche_entree.png" alt="touche entr&amp;eacute;e" width="40" height="24" />.</li>
</ol>
<p>L'étiquette va changer de ligne à chaque fois que vous appuyez sur la touche <img src="../images/oobase/touche_entree.png" alt="touche entr&amp;eacute;e" width="40" height="24" />.</p>
<p>Il est possible d'associer du texte avec des champs sur une même ligne.</p>
<ol class="instruction">
	<li>sélectionnez le champ <strong>Adresse</strong>.</li>
	<li>Appuyez sur la touche <img src="../images/oobase/touche_entree.png" alt="touche entr&amp;eacute;e" width="40" height="24" />.</li>
	<li>sélectionnez le champ <strong>Code postal</strong>.</li>
	<li>Appuyez sur la <strong>barre d'espacement.</strong></li>
	<li>sélectionnez le champ <strong>Ville</strong>.</li>
	<li>Appuyez sur la touche <img src="../images/oobase/touche_entree.png" alt="touche entr&amp;eacute;e" width="40" height="24" />.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
 <img src="../images/oobase/assistant_Etat_Etiquette5.png" alt="assistant étiquette5" width="319" height="200" />
<p>L'assistant vous demande ensuite si vous voulez trier les enregistrements sur un ou plusieurs champs. Pour les besoins de l'exercice, les enregistrements seront tri�s en ordre croisant selon le nom de compagnie.</p>
<ol class="instruction">
	<li>De la liste des champs disponibles de la colonne de gauche, sélectionnez le champ <strong>emp_nom</strong>.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_ajouter_un.png" alt="bouton ajouter un item" width="30" height="19" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Faites un double-clique sur le champ <strong>emp_nom</strong>.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
<p>L'assistant va ensuite vous demander quel nom il faut donner à l'état. Il vous suggère le titre <strong>étiquettes</strong> <strong>Client</strong>. Cela est une assez bonne description de l'état. Donc, nous allons le conserver pour l'exercice.</p>
<img src="../images/oobase/assistant_Etat_Etiquette6.png" alt="assistant étiquette6" width="319" height="200" />
  <ol class="instruction">
	<li>Pour les besoins de l'exercice, laissez les options telles quelles.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_terminer.png" alt="bouton terminer" width="76" height="24" />.</li>
</ol>
<p>OpenOffice Base va prendre quelques instants pour générer l'état selon les options que vous avez choisies et l'enregistrer dans votre base de données.</p>
<p>Voici à quoi devrait ressembler la première étiquette de l'état.</p>
<img src="../images/oobase/assistant_Etat_Etiquette7.png" alt="assistant étiquette7" width="165" height="47" />
<h1><a href="#tdmchap3" id="chap3">3-Modifier l'état</a></h1>
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_affichage_creation.png" alt="bouton affichage cr&amp;eacute;tion" width="32" height="22" />.</li>
</ol>
 <img src="../images/oobase/assistant_Etat_Etiquette8.png" alt="assistant étiquette8" />
<p>OpenOffice Base utilise la fonction <strong>SupprEspace()</strong> pour retirer les espaces inutiles à la fin d'un champ.</p>
<p>Le logiciel utilise aussi la commande <strong>&amp;</strong> pour coller ensemble des parties de texte, placé entre des guillemets, ou d'autres champs.</p>
<p class="notice exemple">Ex : regardez la première ligne de l'étiquette. 
     La fonction rassemble le champ <strong>emp_nom</strong>, le texte qui a été mis entre guillemets, &quot;<strong>-</strong>&quot;, et le champ <strong>Personne contact</strong>.</p>
<p>Pour plus d'informations sur la manière de modifier cet état, référez-vous au cours sur les <a href="/cours/qlio/oobase/6">formulaires</a>. Les outils utilisés pour concevoir les formulaires et les états sont identiques.</p>
</div>
<div class="navig">
<a href="/cours/qlio/oobase/9">&laquo; Précédent</a> - Cours10 - <a href="/cours/qlio/oobase/11">Suivant &raquo;</a> <a href="/cours/qlio/index">Table des matières</a>
</div>
<!-- Fin contenu -->