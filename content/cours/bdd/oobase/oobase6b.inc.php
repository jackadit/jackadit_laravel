<?php
/**
 * BUT : Cours sur les formulaires
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:29:00
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
$sNavigation=navigation('oobase', '6b', '6c', '6a');
?>




<h1>OpenOffice Base : LES FORMULAIRES (b)</h1>
<h2>Personnaliser un formulaire</h2>
<p>Chaque objet de votre formulaire est appelé un &laquo; <strong>contrôle</strong> &raquo; ; que ce soit du texte, un champ ou tout autre objet sur le formulaire. Vous pouvez changer, ajouter et supprimer un <strong>contrôle</strong>.</p>
<p>Pour passer en mode conception :</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_mode_conception.png" alt="bouton mode conception" /> de la barre d'outils en bas de l'écran.</li>
</ol>
<p>Ou si vous avez fermé le formulaire :</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur le fichier F_employés dans l'onglet formulaire <img src="/assets/img/oobase/bt_formulaires.png" alt="onglet formulaires" />.</li>
	<li>Sélectionnez la commande <strong>Modifier</strong>.</li>
</ol>

<h3>Supprimer un champ</h3>
<p>Il est toujours possible de supprimer un contrôle (objet) du formulaire. Cela peut être un intitulé, une ligne, une boîte ou un autre élément du formulaire. L'exercice qui suit consiste à retirer le champ <strong>emp_poste</strong>  du formulaire.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>emp_poste</strong> .</li>
	<li>Appuyez sur la touche <img src="/assets/img/oobase/touche_suppr.png" alt="touche suppr" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Sélectionnez la commande <strong>Couper</strong>, du menu <strong>Édition</strong> ou du <strong>menu contextuel</strong> </li>
</ol>

<h3>Ajouter un champ</h3>
<img src="/assets/img/oobase/fen_liste_champs_employes.png" alt="liste des champs de la table employés"  />
<p>L'exercice précédent consistait à enlever le champ <strong>emp_poste</strong>  du formulaire. Cet exercice consiste à remettre le champ poste qui avait été retiré du formulaire à l'endroit où il était placé.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_liste_champs.png" alt="bouton liste des champs" />.</li>
</ol>
<p>La liste des champs de la table ou de la requête à la source du formulaire va apparaître.</p>
<ol class="instruction">
	<li>Dans la liste des champs, sélectionnez le champ <strong>emp_poste</strong> .</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le champ à l'endroit désiré dans le formulaire.</li>
	<li>Relâchez le bouton de la souris.</li>
</ol>
<p>Il suffit de faire attention à l'ordre de présentation des champs. Cette option est revue plus loin dans ce cours (voir ordre de tabulation).</p>

<h3>Déplacer un contrôle (objet)</h3>
<ol class="instruction">
	<li>Cliquez sur le contrôle à déplacer.</li>
	<li>Placez le pointeur sur la bordure de l'objet.</li>
</ol>
<p>Le pointeur devrait se transformer en <img src="/assets/img/oobase/curseur_double_fleche.png" alt="curseur déplacement" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le contrôle à l'endroit de votre choix.</li>
</ol>
<p class="notice remarque">Si vous déplacez une zone de texte (champ) ou un intitulé, l'élément associé (champ ou intitulé) se déplace également.</p>

<h3>Renommer un champ ou un intitulé</h3>
<p>Avant de continuer, nous allons renommer l'intitulé et le nom du champ <strong>emp_poste</strong> .</p>
<p>Pour cela, nous avons besoin d'afficher le navigateur de formulaire;</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_navigateur.png" alt="bouton navigateur de formulaire déplacement" /> de la barre d'outils au bas du formulaire.</li>
</ol>
<p>La fenêtre suivante s'affiche :</p>
<img src="/assets/img/oobase/fen_navigateur_formulaire.png" alt="fenêtre navigateur de formulaire" />
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur le contrôle à renommer (il doit se situer en fin de liste normalement).</li>
	<li>Sélectionnez la commande <strong>Renommer</strong>.</li>
</ol>
	<p>L'intitulé sera renommé en <strong>lblPoste</strong> et la zone de texte en <strong>txtPoste</strong>.</p>

<h3>Déplacer un champ ou un intitulé</h3>
<p>Pour pouvoir sélectionner chaque contrôle distinctement, vous aurez besoin de la fenêtre de navigateur de formulaire.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur le contrôle <strong>zone de texte</strong> nommé <strong>txtPoste</strong>.</li>
	<li>Revenez sur le formulaire et déplacez le contrôle sous son intitulé.</li>
</ol>

<h3>Déplacer une série de contrôles (objets)</h3>
<p>Pour déplacer plusieurs éléments à la fois, il faut premièrement les sélectionner&nbsp;: en un bloc en utilisant la souris ou avec une combinaison de clics de souris et des touches <img src="/assets/img/oobase/touche_ctrl_petit.png" alt="touche Ctrl" /> et <img src="/assets/img/oobase/touche_Shift.png" alt="touche Shift" />.</p>
<p><strong>À partir d'un bloc avec la souris :</strong></p>
<p>Assurez-vous avant d'avoir appuyé sur le bouton <img src="/assets/img/oobase/bt_selection.png" alt="bouton sélection" />.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez-la pour entourer tous les éléments que vous voulez sélectionner.</li>
</ol>
<p>Cette technique est pratique si les éléments sont proches les uns des autres et qu'il n'y a pas de contrôles qui ne doivent pas être déplacés entre ceux-ci. Pour être plus sélectif dans vos choix de contrôles, utilisez la technique suivante&nbsp;:</p>
<ol class="instruction">
	<li>En restant appuyé sur les touches <img src="/assets/img/oobase/touche_ctrl_petit.png" alt="touche Ctrl" /> et <img src="/assets/img/oobase/touche_Shift.png" alt="touche Shift" />, cliquez sur les contrôles à déplacer.</li>
</ol>
<p>Une fois que les éléments sont choisis, utilisez la technique expliquée ci-dessus pour déplacer une série de contrôles au lieu d'un seul.</p>

<h3>Changer la présentation d'un contrôle (objet), changer les couleurs</h3>
<p>À partir des propriétés des contrôles, il est possible de changer la présentation du texte et des champs.</p>
<p>Pour cela, nous allons nous servir du navigateur de formulaire.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur le contrôle <strong>txtPoste</strong>.</li>
	<li>Sélectionnez la commande <strong>Propriétés</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_proprietes_zone_texte.png" alt="fenêtre propriétés de zone de texte" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suite.png" alt="bouton suite" /> en face de la propriété de couleur d'arrière-plan.</li>
	<li>Modifiez les valeurs des couleurs <strong>Rouge</strong>,<strong>Vert</strong> et <strong>Bleu</strong> à <strong>221</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_couleurs_gris.png" alt="fenêtre des couleurs" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_OK.png" alt="bouton OK" />.</li>
</ol>

    <h3>Changer la taille d'un contrôle (objet)</h3>
<p>Il est possible de modifier la taille d'un contrôle à n'importe quel moment.</p>


