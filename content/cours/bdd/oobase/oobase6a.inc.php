<?php
/**
 * oobase6a.php
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
?>




<h1>OpenOffice Base : LES FORMULAIRES (a)</h1>
<h2>Introduction</h2>
<p>Un formulaire est une interface graphique entre les tables d'une base de données et l'utilisateur.</p>
<p>Il a l'avantage de pouvoir afficher le contenu de plusieurs tables et de permettre la saisie des données multiples, quels que soient les tables concernées.</p>
<p>Un formulaire peut contenir des champs calculés tels des sous totaux.</p>
<p>Un formulaire se construit à partir d'une table ou d'une requête. Lorsque les données proviennent de plusieurs tables, il est souvent plus pratique d'utiliser une requête. Il en est de même si vous voulez filtrer l'affichage de certains enregistrements.</p>
<p>Les exercices sur les formulaires s'appuyerons sur la table <strong>Employe</strong> du fichier <strong>commerce2</strong>.<strong>odb</strong>.</p>

<h2>Création d'un formulaire assisté</h2>
<p>L'assistant de création de formulaire vous guide étape par étape. Vous pouvez bien entendu modifier le formulaire créé par la suite.</p>
<p>La &quot;source&quot; d'un formulaire doit être une table ou une requête. L'avantage d'une requête est qu'elle peut être basée sur plusieurs tables. Vous pouvez donc créer un formulaire qui accède à des informations issues de plusieurs tables.</p>
<ol class="instruction">
	<li>À partir du menu principal, sélectionnez l'onglet des formulaires <img src="/assets/img/oobase/bt_formulaires.png" alt="bouton formulaire" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_assistant_formulaire.png" alt="bouton assistant formulaire" /> Utiliser l'assistant de création de formulaire...</li>
</ol>
<img src="/assets/img/oobase/fen_assistant_formulaire1.png" alt="assistant nouveau formulaire" />
<p>Dans cette fenêtre vous pouvez sélectionner la table ou la requête dont vous aurez besoin dans le formulaire. Une fois ce choix effecté, la zone des champs disponibles affichera les champs de la table ou de la requête. La zone de droite accueillera la liste des champs qui seront utilisés dans le formulaire.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez la table <strong>Employe</strong>.</li>
</ol>
<p>Pour ajouter un champ&nbsp;:</p>
<ul>
	<li>Sélectionnez le champ que vous voulez ajouter au formulaire.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_fleche_select.png" alt="bouton ajouter un champ" />.</li>
</ul>
<p>Le champ sera ajouté à la liste des champs sélectionnés pour le formulaire.</p>
<ul>
	<li>Pour ajouter tous les champs, Cliquez sur le bouton <img src="/assets/img/oobase/bt_fleches_select.png" alt="bouton ajouter tous les champs" />.</li>
</ul>
<p class="notice remarque">L'ordre dans lequel vous sélectionnez les champs est important. C'est dans cet ordre que ces champs vont apparaître dans le formulaire. On peut toujours le changer en personnalisant le formulaire, mais on s'évite du travail supplémentaire en plaçant les champs dans l'ordre dès ce moment.</p>
 <p class="notice remarque">L'assistant permet de choisir des champs provenant de plusieurs tables ou de requêtes sans avoir auparavant à créer une requête ayant tous les champs voulus.</p>
<p class="notice remarque">Il faut cependant faire attention d'avoir fait des <a href="/cours/qlio/oobase3a">relations permanentes</a> entre les tables avant de choisir des champs de différentes tables ou requêtes.</p>
<div class="notice remarque">Autre remarque importante&nbsp;: le formulaire affiche tous les enregistrements.</p>
<p>Donc si vous ne voulez accéder qu'à une partie des enregistrements vous devez auparavant créer la requête adéquate.</p></div>
 <img src="/assets/img/oobase/fen_assistant_formulaire2.png" alt="assistant formulaire2" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_fleches_select.png" alt="bouton ajouter tous les champs" /> pour sélectionner tous les champs.</li>
</ol>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant" /> deux fois pour passer l'étape 3.</li>
</ol>
<p>Nous ne voulons pas pour l'instant compliquer  la tâche. Nous n'insérerons donc pas de sous-formulaire.</p>
<img src="/assets/img/oobase/fen_assistant_formulaire3.png" alt="assistant formulaire3" />
<p>Vous passerez de ce fait directement à l'étape 5 qui permet de choisir la manière dont les champs seront affichés à l'écran.</p>
<p>OpenOffice Base vous donne un aperçu de votre choix à l'arrière de la fenêtre avant de choisir définitivement.</p>
 <img src="/assets/img/oobase/fen_assistant_formulaire5.png" alt="assistant formulaire5" />
 <ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option <strong>Colonne - Étiquettes à gauche</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant" />.</li>
</ol>
<p>L'étape suivante consiste à sélectionner le mode de saisie des données dans le formulaire.</p>
 <img src="/assets/img/oobase/fen_assistant_formulaire6.png" alt="assistant formulaire6" />
<ol class="instruction">
	<li>Pour les besoins de l'exercice, utilisez l'option <strong>Le formulaire doit affciher toutes les données</strong> proposée.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant" />.</li>
</ol>
<p>L'étape suivante consiste à choisir un style pour le formulaire.</p>
 <img src="/assets/img/oobase/fen_assistant_formulaire7.png" alt="assistant formulaire7" />
<ol class="instruction">
	<li>Sélectionnez &laquo;<strong>Bleu métallique</strong>&raquo;.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant" />.</li>
</ol>
<p>L'étape suivante consiste à choisir un nom pour le formulaire.</p>
<img src="/assets/img/oobase/fen_assistant_formulaire8.png" alt="assistant formulaire8" />
<ol class="instruction">
	<li>Saisissez &laquo;<strong>F_Employés</strong>&raquo;.</li>
</ol>
<p>Vous pouvez également choisir si vous voulez voir le formulaire ou le modifier immédiatement.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_creer.png" alt="bouton créer" />.</li>
</ol>
<p>Voici un aperçu du formulaire :</p>
<img src="/assets/img/oobase/f_employes.png" alt="formulaire f_employés" />

<h3>Saisir des données</h3>
<p>Vous pouvez maintenant ajouter ou modifier des enregistrements de la table. Cette interface de présentation des données est plus compréhensible pour un utilisateur que le mode feuille de données.</p>

<h3>Déplacement dans le formulaire</h3>
<p>Pour se déplacer dans le formulaire, utilisez les touches suivantes&nbsp;:</p>
<ul>
	<li>Utilisez les touches <img src="/assets/img/oobase/touche_tab.png" alt="touche tabulation" width="41" height="25" /> pour vous déplacer au champ suivant et <img src="/assets/img/oobase/touche_Shift.png" alt="touche Shift" /> + <img src="/assets/img/oobase/touche_tab.png" alt="touche tabulation" width="41" height="25" /> pour vous déplacer au champ précédent.</li>
</ul>
<p>Vous pouvez aussi utiliser la barre de navigation située au coin inférieur gauche de la fenêtre pour vous déplacer d'un enregistrement à l'autre ou au premier et dernier enregistrement de la table <img src="/assets/img/oobase/liste_enregistrements_1a7.png" alt="liste des enregistrements de 1 à 7" />.</p>
<ul>
	<li>Utilisez <img src="/assets/img/oobase/bt_enregistrement_precedent.png" alt="bouton enregistrement précédent" /> ou <img src="/assets/img/oobase/bt_enregistrement_suivant.png" alt="bouton enregistrement suivant" /> pour passer à l'enregistrement précédent ou suivant.</li>
	<li>Utilisez <img src="/assets/img/oobase/bt_enregistrement_premier.png" alt="bouton enregistrement premier" /> ou <img src="/assets/img/oobase/bt_enregistrement_dernier.png" alt="bouton enregistrement dernier" /> pour vous rendre au premier ou au dernier enregistrement de la table ou de la requête.</li>
	<li>Utilisez le bouton <img src="/assets/img/oobase/bt_enregistrement_nouveau.png" alt="bouton enregistrement nouveau" /> pour ajouter un enregistrement à la table ou à la requête.</li>
	<li>Placez le pointeur dans la case blanche et écrivez le numéro de l'enregistrement que vous voulez atteindre suivi de la touche <img src="/assets/img/oobase/touche_entree.png" alt="touche entrée" />.</li>
</ul>

<h3>Modifier un enregistrement</h3>
<p>Il est très facile de modifier le contenu d'un champ si celui-ci n'est pas &laquo;&nbsp;verrouillé&nbsp;&raquo;.</p>
<ul>
	<li>Utilisez les touches du clavier ou la barre de navigation pour vous rendre à l'enregistrement que vous voulez modifier.</li>
	<li>Placez le pointeur dans le champ sur lequel vous voulez apporter des modifications.</li>
	<li>Changez le contenu du champ à votre choix.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrement_enregistrer.png" alt="bouton enregistrer un enregistrement" /> de la barre d'outils.</li>
	OU<br />
	<li>Passez simplement à l'enregistrement suivant ou précédent.</li>
</ul>
<p class="notice remarque">Vous pouvez annuler une saisie en cliquant sur le bouton <img src="/assets/img/oobase/bt_annuler_saisie.png" alt="bouton annuler un enregistrement" /> de la barre d'outils.</p>

<h3>Supprimer un enregistrement</h3>
<ul>
	<li>Utilisez les touches du clavier ou la barre de navigation pour vous rendre à l'enregistrement que vous voulez modifier.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrement_supprimer.png" alt="bouton supprimer un enregistrement" /> de la barre d'outils.</li>
</ul>

<h3>Rechercher un enregistrement</h3>
<p>OpenOffice Base vous permet de retrouver rapidement un enregistrement grâce à une recherche sur le contenu de l'un des champs de l'enregistrement.</p>
<img src="/assets/img/oobase/fen_rechercher_enregistrement.png" alt="fenêtre rechercher un enregistrement"  />
<ul>
	<li>Placez le pointeur dans le champ sur lequel vous allez accomplir la recherche.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrement_rechercher.png" alt="bouton rechercher un enregistrement" /> de la barre d'outils.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_rechercher.png" alt="bouton rechercher" />.</li>
</ul>
<p>La fenêtre reste ouverte et vous permet de continuer votre recherche pour d'autres enregistrements.</p>
<p class="notice remarque">Si plusieurs enregistrementS correspondent à votre critère de recherche, vous passez à l'enregistrement suivant en cliquant sur le bouton <img src="/assets/img/oobase/bt_rechercher.png" alt="bouton rechercher" /> jusqu'à ce que le message suivant apparaisse : <strong>Débordement, la recherche a continué au début</strong>.</p>


