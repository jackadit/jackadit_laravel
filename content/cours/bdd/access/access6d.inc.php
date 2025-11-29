<?php
/**
 * page de cours 6d sur ACCESS 2003 : Cours sur les formulaires
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:09:00
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
<h1>ACCESS  : LES FORMULAIRES (d)</h1>

<h2>Changer les propriétés d'un champ ou d'un objet</h2>
<p>Sélectionnez l'objet, ou le contrôle, dont vous voulez changer un attribut.</p>

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_proprietes.png" alt="bouton propriétés" /> de la barre d'outils <strong>Création</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Cliquez sur le contrôle avec le bouton droit de la souris.</li>
	<li>Du menu contextuel, sélectionnez la commande <strong>Propriétés</strong>.</li>
</ol>
<p>Voici la liste de toutes les propriétés ou options que vous pouvez modifier pour chacun des &quot;contrôles&quot; du formulaire.</p>
    <img src="/assets/img/access/f_proprietes_zone_de_liste_poste.png" alt="propriétés zone de liste poste" />
    <p>Les propriétés peuvent être regroupées en 4 catégories : <strong>Format</strong>, <strong>Données</strong>, <strong>Événement</strong> et <strong>Autres</strong>.</p>
    <p>Les options <strong>Origine source</strong> et <strong>Contenu</strong> permettent à Access d'utiliser un champ d'une requête ou d'une table. Il est aussi possible d'y entrer une formule.</p>

<h2>Verrouiller un champ</h2>
<p>L'option de verrouiller un champ permet à l'usager de voir l'information contenue dans un champ sans pouvoir le modifier. L'option <strong>Activé</strong> est aussi modifiée pour que le curseur n'entre pas dans le champ.</p>
<ol class="instruction">
	<li>Sélectionnez l'objet, ou le contrôle, que vous voulez verrouiller.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_proprietes.png" alt="bouton propriétés" /> de la barre d'outils.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Cliquez sur le contrôle avec le bouton droit de la souris.</li>
	<li>Du menu contextuel, sélectionnez la commande <strong>Propriétés</strong>.</li>
</ol>
    <img src="/assets/img/access/f_proprietes_activer_verrouiller.png" alt="activer - verrouiller" />
<ol class="instruction">
    <li>Dans l'onglet <strong>Données</strong>, changez l'option <strong>Activé</strong> à <strong>Non</strong>.</li>
</ol>
<p>Le pointeur n'ira pas dans le champ.</p>
<ol class="instruction">
    <li>Changez l'option <strong>Verrouillé</strong> à <strong>Oui</strong>.</li>
</ol>
<p>L'usager ne pourra pas changer le contenu du champ.</p>

<h2>Masquer un champ</h2>
<p>Il est parfois intéressant de masquer un contrôle pour que l'usager ne le voit pas au moment de l'utilisation du formulaire.</p>
<p class="notice exemple">Ex : Vous n'avez pas besoin de voir un champ calculé qui n'est utile que pour les besoins du formulaire. 
Ce contrôle restera cependant visible en mode création.</p>
<ol class="instruction">
	<li>Sélectionnez l'objet, ou le contrôle, que vous voulez masquer.</li>
    <li>Cliquez sur le bouton <img src="/assets/img/access/bt_proprietes.png" alt="bouton propriétés" /> de la barre d'outils.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Cliquez sur le contrôle avec le bouton droit de la souris.</li>
	<li>Du menu contextuel, sélectionnez la commande <strong>Propriétés</strong>.</li>
	<li>Dans l'onglet <strong>Format</strong>, changez la propriété <strong>Visible</strong> à Non.</li>
</ol>
<p>L'usager ne verra plus le champ sur le formulaire. Mais le formulaire peut toujours utiliser ce contrôle invisible pour ses propres besoins.</p>

<h2>Ordre de tabulation</h2>

<p>L'ordre de tabulation vous permet de déterminer l'ordre dans lequel le curseur va passer d'un champ à l'autre sur le formulaire. Il vous est possible de le changer pour vous permettre de mieux répondre aux besoins du formulaire. Pour cet exemple, le champ <strong>emp_poste</strong>  devrait être en dessous du champ Nom. Voici comment le déplacer.</p>
<ol class="instruction">
    <li>Du menu <strong>Création</strong>, sélectionnez le bouton <strong>Ordre des tabulations</strong>. <img src="/assets/img/access/bt_ordre_tabulation.png" alt="ordre des tabulations" /></li>
</ol>
<p>L'écran qui est affiché vous donne la liste des champs qui se retrouve sur le formulaire dans l'ordre dans lequel le curseur passe d'un champ à l'autre.</p>
<ol class="instruction">
 <li>Cliquez sur la petite boîte grise à la gauche du champ <strong>emp_poste</strong> .</li>
 <li>En restant appuyé sur le bouton gauche de la souris, déplacez le champ en dessous du champ <strong>emp_nom</strong>.</li>
</ol>
 <img src="/assets/img/access/f_ordre_tabulation_modifie.png" alt="ordre des tabulations modifié" />
<p>Une fois que le champ est à la bonne place, vous pouvez relâcher le bouton de la souris.</p>
<p>Le bouton<strong> Ordre Automatique</strong>, met automatiquement  les champs en ordre. L'ordre est établi selon l'emplacement des champs sur le formulaire : de gauche à droite et du haut vers le bas.</p>
<p>Donc, le champ le plus proche du coin supérieur gauche du formulaire sera le premier champ où le curseur va s'arrêter, celui à sa droite le second etc.</p>
<p>Mais cela n'est peut être pas ce dont vous avec besoin. Imaginez que vous ayez sur votre formulaire trois &quot;zones&quot; : informations personnelles, salaire et avantages sociaux par exemple.</p>
<p>Il est  possible d'avoir ces zones l'une à coté de l'autre. Donc, l'ordre automatique ne serait pas avantageux.</p>
<p>C'est pour cette raison qu'il est toujours possible de changer l'ordre de tabulation.</p>

    <h2>Imprimer un formulaire</h2>
    <img src="/assets/img/access/bt_imprimer.png" alt="bouton imprimer" width="23" height="22" />
<div class="notice alert">Attention !
<p>Puisqu'il ne s'agit que d'un exemple, n'imprimez pas tous les enregistrements. Imprimez seulement la première page du formulaire. Sinon, tous les enregistrements vont s'imprimer sous forme de formulaire.</p>
</div>
    <p class="notice remarque">Vous pouvez aussi changer la mise en page du document en utilisant le menu <strong>Fichier &gt; Imprimer &gt; Aperçu avant impression</strong>.</p>
<ol class="instruction">
 <li>Du menu <strong>Fichier</strong>, sélectionnez la commande <strong>Imprimer</strong>.</li>
</ol>


