<?php
/**
 * page de cours 6a sur ACCESS 2003 : Cours sur les formulaires
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
<h1>ACCESS : LES FORMULAIRES (a)</h1>
<h2>Introduction</h2>
<p>Les formulaires servent à mieux présenter l'information qui se retrouve dans les différentes tables. Ils permettent également une saisie des données plus &quot;conviviale&quot; ou pratique que directement dans une table ou une requête.</p>
<p>Il est de ce fait possible d'afficher seulement les champs qui sont nécessaires à l'écran. Il est aussi possible de &quot;verrouiller&quot; un champ. Ceci permet à l'utilisateur du formulaire de voir le contenu d'un champ mais pas de le modifier.</p>
<p>Comme pour une requête, il est possible d'avoir des champs calculés tels des sous totaux ou des taxes. La liste des fonctions d'Access vous permet d'accomplir beaucoup plus que de simples calculs.</p>
<p>La création d'un formulaire nécessite une table ou une requête pour être la source de celui-ci. Une requête est plus pratique lorsque vous avez besoin d'un formulaire dont les champs proviennent de plusieurs tables. C'est aussi plus pratique si vous voulez filtrer les enregistrements pour voir seulement une partie qui répond à vos critères.</p>
<p>Les exercices sur les différents éléments et fonctions d'un formulaire seront démontrés à partir de la table <strong>Employe</strong> du fichier <strong>commerce2</strong>.<strong>mdb</strong>.</p>

<h2>Création d'un formulaire assisté</h2>
<p>Vous pouvez créer un formulaire de toute pièce. Mais il est plus avantageux d'utiliser l'un des assistants qu'Access met à votre disposition pour réaliser un formulaire. Vous pouvez toujours par la suite le modifier selon vos besoins.</p>
<p>Vous pouvez créer un formulaire à partir d'aucun champ, mais, la &quot;source&quot; d'un formulaire doit être une table ou une requête. Cependant, une requête peut avoir plusieurs tables. Donc, vous pouvez avoir un formulaire &quot;complexe&quot; qui entre ou accède à des informations dans plusieurs tables en même temps.</p>
<p>Il faut cependant vérifier le &quot;bon fonctionnement&quot; de ces requêtes avant de créer un formulaire basé sur ceux-ci. On part du principe que, si vous êtes capable de saisir des données directement à partir de la requête, vous serez aussi capable de le faire dans le formulaire.</p>
<ol class="instruction">
	<li>À partir du menu <strong>Créer</strong>, sélectionnez le bouton <img src="/assets/img/access/bt_assistant_formulaire.png" alt="bouton nouveau formulaire" />.</li>
</ol>
<p>Ou</p>
<ol class="instruction">
	<li>Affichez la liste des types de formulaire en cliquant sur le bouton <img src="/assets/img/access/menu_assistant_formulaire.png" alt="menu assistant formulaire" />.</li>
</ol>
<p>Access affiche la liste des assistants disponibles pour la création d'un formulaire. Comme vous pouvez le constater, il y a plusieurs choix.</p>
<h3>Avantages et inconvénients des assistants de Access</h3>
<table class="table" summary="avantages et inconvénients des assistants">
 <tr>
 <th class="w200p">Type</th>
 <th>Description</th>
 <th>Avantages / Inconvénients</th>
 </tr>
 <tr>
 <td>Mode création</td>
 <td>Permet de construire un formulaire à partir de zéro.</td>
 <td>Bien pour de petits formulaires ou des formulaires ayant beaucoup de champs indépendants.<br />
  Les assistants sont mieux placés pour créer des formulaires pour afficher les données de tables ou de requêtes.</td>
 </tr>
 <tr>
 <td>Assistant formulaire</td>
 <td>Il vous pose quelques questions pour déterminer les champs dont vous aurez besoin ainsi que du genre de présentation que vous voulez afficher.</td>
 <td>Il vous offre plus d'options que les autres assistants.</td>
 </tr>
 <tr>
 <td>Formulaire avec onglets</td>
 <td>Il génère automatiquement un formulaire qui affiche un ou plusieurs onglets.</td>
 <td>Rapide à créer. On peut toujours changer la présentation par la suite.</td>
 </tr>
</table>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez le bouton <strong>Assistant formulaire</strong>.</li>
	<li>Sélectionnez la table ou la requête de votre choix. Pour les besoins de l'exercice, sélectionnez la table <strong>Employe</strong>.</li>
</ol>
<img src="/assets/img/access/f_assistant_formulaire1.png" alt="fenêtre assistant formulaire1" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>La prochaine étape consiste à déterminer les champs que vous aurez besoin dans le formulaire. Au bas de la fenêtre, celle-ci est séparée en deux parties. La zone de gauche affiche les champs de la table ou de la requête. La zone de droite affiche la liste des champs qui seront utilisés dans le formulaire.</p>
<p>Pour ajouter un champ :</p>
<ul>
	<li>Sélectionnez de la zone de gauche le champ que vous voulez ajouter au formulaire.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un" />.</li>
</ul>
<p>Le champ sera ajouté à la liste des champs sélectionnés.</p>
<ul>
	<li>Pour ajouter tous les champs, Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous" />.</li>
</ul>
<p class="notice remarque">L'ordre dans lequel vous sélectionnez les champs est important. C'est dans cet ordre que ces champs vont apparaître dans le formulaire. On peut toujours le changer en personnalisant le formulaire, mais on s'évite du travail supplémentaire en plaçant les champs dans l'ordre dès ce moment.</p>
 <p class="notice remarque">L'assistant permet de choisir des champs provenant de plusieurs tables ou de requêtes sans avoir auparavant à créer une requête ayant tous les champs voulus.</p>
<p class="notice remarque">Il faut cependant faire attention d'avoir fait des <a href="/cours/qlio/access3a">relations permanentes</a> entre les tables avant de choisir des champs de différentes tables ou requêtes.</p>
<p class="notice remarque">Autre remarque importante : le formulaire affiche tous les enregistrements.</p>
<p>Si vous ne voulez afficher ou accéder qu'à une partie des enregistrements ou s'il n'y a pas de relations entre les tables ou les requêtes dont vous avez besoin, vous devez auparavant créer une requête.</p>
 <img src="/assets/img/access/f_assistant_formulaire2.png" alt="assistant formulaire2" />
<ol class="instruction">
	<li>Sélectionnez tous les champs <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous" />&nbsp;dans le même ordre que dans la table.</li>
</ol>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Le prochain écran demande quelle est la manière dont les champs seront affichés à l'écran.</p>
<p>Access vous donne même un aperçu de votre choix à la gauche de la fenêtre avant de choisir définitivement.</p>
<p>L'option <strong>Colonne simple</strong> va afficher les champs les uns en-dessous des autres.</p>
<p>L'option <strong>Tabulaire</strong> va afficher les champs côte à côte. Access va pour ce faire réduire la taille des champs.</p>
 <img src="/assets/img/access/f_assistant_formulaire3.png" alt="assistant formulaire3" />
<p>L'option<strong> Feuille de données</strong> va afficher les champs de la même manière que pour la saisie des données dans une table. Ceci n'est pas pratique si l'utilisateur ne connaît pas tous les champs.</p>
<p>Le mode <strong>Justifié</strong> va afficher les champs côte à côte mais sans réduire la taille des champs. En cas de dépassement, Access va afficher les autres champs en-dessous. La partie gauche de la fenêtre vous donne une image du type de présentation.</p>
 <ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option <strong>Colonne simple</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>La prochaine fenêtre vous demande quelle est le titre du formulaire.</p>
 <img src="/assets/img/access/f_assistant_formulaire4.png" alt="assistant formulaire4" />
<ol class="instruction">
	<li>Changez le titre à &laquo;<strong>Liste des employés</strong>&raquo;.</li>
</ol>

<p>Access vous demande également ce que vous voulez faire ensuite. Vous pouvez ouvrir le formulaire ou modifier immédiatement le formulaire.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option <strong>Ouvrir le formulaire pour afficher ou entrer des infos</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Voici un aperçu du formulaire une fois terminé.</p>
<img src="/assets/img/access/f_assistant_formulaire5.png" alt="assistant formulaire5" />

    <h3>Entrer de l'information</h3>
<p>Il vous est maintenant possible d'ajouter ou de modifier les enregistrements de la table comme vous l'avez peut être fait en mode feuille de données lors de la création de la table. Cependant, la présentation des données est plus compréhensible pour un nouvel utilisateur qu'en utilisant le mode feuille de données.</p>

    <h3>Déplacement dans le formulaire</h3>
<p>Pour se déplacer dans le formulaire, utilisez les touches suivantes :</p>
<ul>
	<li>Utilisez les touches <img src="/assets/img/access/touche_tab.png" alt="touche tabulation" width="41" height="25" /> pour vous déplacer au champ suivant et <img src="/assets/img/access/touche_Shift.png" alt="touche Shift" /> + <img src="/assets/img/access/touche_tab.png" alt="touche tabulation" /> pour vous déplacer au champ précédent.</li>
	<li>Utilisez les touches <img src="/assets/img/access/touche_page_bas.png" alt="touche page bas" /> et <img src="/assets/img/access/touche_page_haut.png" alt="touche page haut" /> pour vous déplacer d'un enregistrement à l'autre.</li>
</ul>
<p>Vous pouvez aussi utiliser la barre de navigation située au coin inférieur gauche de la fenêtre pour vous déplacer d'un enregistrement à l'autre ou au premier et dernier enregistrement de la table <img src="/assets/img/access/enregistrements_1a7.png" alt="liste des enregistrements de 1 à 7" />.</p>
<ul>
	<li>Utilisez <img src="/assets/img/access/bt_enregistrement_precedent.png" alt="bouton enregistrement précédent" /> ou <img src="/assets/img/access/bt_enregistrement_suivant.png" alt="bouton enregistrement suivant" /> pour passer à l'enregistrement précédent ou suivant.</li>
	<li>Utilisez <img src="/assets/img/access/bt_enregistrement_premier.png" alt="bouton enregistrement premier" /> ou <img src="/assets/img/access/bt_enregistrement_dernier.png" alt="bouton enregistrement dernier" /> pour vous rendre au premier ou au dernier enregistrement de la table ou de la requête.</li>
	<li>Utilisez le bouton <img src="/assets/img/access/bt_enregistrement_nouveau.png" alt="bouton enregistrement nouveau" /> pour ajouter un enregistrement à la table ou à la requête.</li>
	<li>Placez le pointeur dans la case blanche et écrivez le numéro de l'enregistrement que vous voulez atteindre suivi de la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" />.</li>
</ul>
 OU<br />
<ul>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_F5.png" alt="touche F5" />&nbsp;et entrez le numéro de l'enregistrement que vous voulez atteindre suivi de la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" />.</li>
	<li>Pour ajouter un enregistrement à la table, allez au dernier enregistrement et appuyez sur la touche <img src="/assets/img/access/touche_page_bas.png" alt="touche page bas" />. Un enregistrement vide va apparaître. Ensuite, entrez les nouvelles données à votre choix.</li>
</ul>
 OU<br />
<ul>
	<li>De la barre d'outils, cliquez sur le bouton <img src="/assets/img/access/bt_nouvel_enregistrement.png" alt="bouton nouvel enregistrement" />.</li>
</ul>

    <h3>Modifier un enregistrement</h3>
<p>Il est très facile de modifier le contenu d'un champ si celui-ci n'est pas &laquo;&nbsp;verrouillé&nbsp;&raquo;.</p>
<ul>
	<li>Utilisez les touches du clavier ou la barre de navigation pour vous rendre à l'enregistrement que vous voulez modifier.</li>
	<li>Placez le pointeur dans le champ sur lequel vous voulez apporter des modifications.</li>
	<li>Changez le contenu du champ à votre choix.</li>
</ul>

    <h3>Supprimer un enregistrement</h3>
<ul>
	<li>Utilisez les touches du clavier ou la barre de navigation pour vous rendre à l'enregistrement que vous voulez modifier.</li>
	<li>Du menu <strong>Édition</strong>, sélectionnez la commande <strong>Supprimer l'enregistrement</strong>.</li>
</ul>
 OU<br />
<ul>
	<li>De la barre d'outils, cliquez sur le bouton <img src="/assets/img/access/bt_supprimer_enregistrement.png" alt="bouton supprimer un enregistrement" />.</li>
</ul>

    <h3>Rechercher un enregistrement</h3>
<p>Access vous permet de retrouver rapidement un enregistrement grâce à une recherche sur le contenu de l'un des champs de l'enregistrement.</p>
<img src="/assets/img/access/f_rechercher_remplacer.png" alt="fenêtre rechercher et remplacer"  />
<ul>
	<li>Placez le pointeur dans le champ sur lequel vous allez accomplir la recherche.</li>
	<li>Du menu <strong>Édition</strong>, sélectionnez l'option <strong>Rechercher</strong>.</li>
</ul>
 OU<br />
<ul>
	<li>Appuyez sur les touches <img src="/assets/img/access/touche_ctrl.png" alt="touche CTRL" /> et <img src="/assets/img/access/Touche_F.png" alt="touche F" />.</li>
</ul>
 OU<br />
<ul>
	<li>De la barre d'outils, cliquez sur le bouton <img src="/assets/img/access/bt_rechercher.png" alt="bouton rechercher" />.</li>
	<li>Entrez la valeur, la date ou le nom que vous recherchez.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ul>


