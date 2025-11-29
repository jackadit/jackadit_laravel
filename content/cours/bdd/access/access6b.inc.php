<?php
/**
 * page de cours 6b sur ACCESS 2003 : Cours sur les formulaires
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:08:00
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
<h1>ACCESS : LES FORMULAIRES (b)</h1>
<h2>Personnaliser un formulaire</h2>
<p>Chaque objet de votre formulaire est appelé un &laquo; <strong>contrôle</strong> &raquo; ; que ce soit du texte, un champ ou tout autre objet sur le formulaire. Vous pouvez changer, ajouter et supprimer un <strong>contrôle</strong>.</p>
<ol class="instruction">
	<li>Passez en mode création en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton affichage création" />.</li>
</ol>

    <h3>Supprimer un champ</h3>
<p>Il est toujours possible de supprimer un contrôle (objet) du formulaire. Cela peut être un intitulé, une ligne, une boîte ou un autre élément du formulaire. L'exercice qui suit consiste à retirer le champ <strong>emp_poste</strong>  du formulaire.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>emp_poste</strong> .</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_suppr.png" alt="touche suppr" />.</li>
</ol>

    <h3>Ajouter un champ</h3>
<img src="/assets/img/access/liste_champs_employe.png" alt="liste des champs de la table Employe"  />
<p>L'exercice précédent consistait à enlever le champ <strong>emp_poste</strong>  du formulaire. Cet exercice consiste à remettre le champ poste qui avait été retiré du formulaire à l'endroit où il était placé.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_champ_existant.png" alt="bouton ajouter des champs existants" />.</li>
</ol>
<p>La liste des champs de la table ou de la requête à la source du formulaire va apparaître.</p>
<ol class="instruction">
	<li>Dans la liste des champs, sélectionnez le champ <strong>emp_poste</strong> .</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le champ à l'endroit désiré dans le formulaire.</li>
	<li>Relâchez le bouton de la souris.</li>
</ol>
<p>Il suffit de faire attention à l'ordre de présentation des champs. Cette option est revue plus loin dans ce cours (voir ordre de tabulation).</p>

<h3>Déplacer un contrôle (objet)</h3>
<p>Assurez-vous d'avoir appuyé sur le bouton <img src="/assets/img/access/bt_selectionner.png" alt="bouton sélectionner" />&nbsp;avant de sélectionner un contrôle.</p>
<ol class="instruction">
	<li>Cliquez sur le contrôle à déplacer.</li>
	<li>Placez le pointeur sur la bordure de l'objet.</li>
</ol>
<p>Le pointeur devrait se transformer en <img src="/assets/img/access/curseur_main.png" alt="curseur main" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le contrôle à l'endroit de votre choix.</li>
</ol>
<p class="notice remarque">Si vous déplacez une zone de texte (champ) ou un intitulé, l'élément associé (champ ou intitulé) se déplace également.</p>

<h3>Déplacer un champ ou un intitulé</h3>
    <p>Assurez-vous d'avoir appuyé sur le bouton <img src="/assets/img/access/bt_selectionner.png" alt="bouton sélectionner" />.</p>
<ol class="instruction">
	<li>Cliquez sur le contrôle à déplacer.</li>
	<li>Placez le pointeur sur le gros carré noir situé au coin supérieur gauche du contrôle.</li>
</ol>
	<p>Le pointeur devrait se transformer en <img src="/assets/img/access/curseur_main_index.png" alt="curseur main index" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le contrôle à l'endroit de votre choix.</li>
</ol>
<p>Dans ce dernier cas, seulement l'intitulé ou la zone de texte choisi se déplacera. De cette façon, il est possible par exemple de mettre le champ en dessous de l'intitulé.</p>

<h3>Déplacer une série de contrôles (objets)</h3>
<p>Pour déplacer plusieurs éléments à la fois, il faut premièrement les sélectionner : avec un bloc en utilisant la souris ou avec une combinaison de clics de souris et de la touche <img src="/assets/img/access/touche_Shift.png" alt="touche Shift" />.</p>
<p><strong>Avec un bloc de souris :</strong></p>
    <p>Assurez-vous avant d'avoir appuyé sur le bouton <img src="/assets/img/access/bt_selectionner.png" alt="bouton sélectionner" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez-la pour entourer tous les éléments que vous voulez sélectionner.</li>
</ol>
<p>Cette technique est pratique si les éléments sont proches les uns des autres et qu'il n'y a pas de contrôles qui ne doivent pas être déplacés entre ceux-ci. Pour être plus sélectif dans vos choix de contrôles, utilisez la technique suivante :</p>
    <p>Assurez-vous avant d'avoir appuyé sur le bouton <img src="/assets/img/access/bt_selectionner.png" alt="bouton sélectionner" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur la touche <img src="/assets/img/access/touche_Shift.png" alt="touche Shift" />, cliquez sur les contrôles à déplacer.</li>
</ol>
<p>Une fois que les éléments sont choisis, utilisez la technique expliquée ci-dessus pour déplacer une série de contrôles au lieu d'un seul.</p>

<h3>Changer la présentation d'un contrôle (objet), changer les couleurs</h3>
<p>À partir du menu <strong>format</strong>, il est possible de changer la présentation du texte et des champs.</p>
<img src="/assets/img/access/menu_format.png" alt="barre d'outils de formatage des formulaires" />
<p>Ces outils permettent de changer par exemple la couleur de fond, la couleur du texte, la couleur du contour, le type de contour ou mettre un effet de relief aux contrôles (objets) situés sur le formulaire.</p>

    <h3>Changer la taille d'un contrôle (objet)</h3>
<p>Il est possible de modifier la taille d'un contrôle à n'importe quel moment.</p>


