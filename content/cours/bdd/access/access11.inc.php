<?php
/**
 * page de cours 11 sur ACCESS 2003 : Cours sur les macros
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
<h1>ACCESS : LES MACROS</h1>
<h2>Introduction</h2>
<p>Une macro permet d'exécuter une série de commandes les unes après les autres. Vous pouvez également &laquo;&nbsp;attacher&nbsp;&raquo; une macro à un bouton de formulaire. L'exercice qui suit consiste à créer une petite macro qui contient une seule instruction. Par après, cette nouvelle macro sera attachée à un bouton d'un formulaire.</p>
<h2>Création d'une macro</h2>
<ol class="instruction">
	<li>À partir du menu <strong>Créer</strong>, cliquez sur le bouton <strong>Macro</strong> <img src="/assets/img/access/bt_macro.png" alt="bouton macro" />.</li>
</ol>
<p>La fenêtre de catalogue d'actions va apparaître.</p>
 <img src="/assets/img/access/f_catalogue_actions.png" alt="fenêtre du catalogue d'actions" />
<p>Sous la colonne <strong>Actions</strong> se trouve la liste des instructions que vous pouvez exécuter.</p>
<p>Comme vous le constatez, Access vous offre plusieurs instructions.</p>
<p class="notice remarque">Pour avoir plus d'information sur celles-ci, consulter l'aide en saisissant le mot &quot;Action&quot; dans l'index de la recherche.</p>
<p>Pour continuer la création de la macro, il faut entrer les &laquo;&nbsp;arguments de l'action&nbsp;&raquo; ou les caractéristiques de celle-ci. Ces arguments changent selon le type d'action.</p>
<p>Pour l'action <strong>ZoneMessage</strong> :</p>

<img src="/assets/img/access/f_macro1.png" alt="boite de message macro1" />

<ol class="instruction">
	<li>Saisissez le texte suivant dans le champ message : <strong>Ceci est un test</strong>.</li>
	<li>Sélectionnez l'option <strong>Oui</strong> pour le Bip.</li>
	<li>Pour le type de fenêtre, sélectionnez le type <strong>Information</strong>.</li>
	<li>Pour le titre de la fenêtre, écrivez le texte <strong>Test</strong>.</li>
</ol>
<p>Si vous voulez ajouter une autre action, placez le pointeur en dessous de la dernière action et sélectionnez-la parmi la liste des actions.</p>
<p>Pour sauvegarder la macro :</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
	<li>Laissez le nom <strong>Macro1</strong>.</li>
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_OK.png" alt="bouton OK" /></strong>.</li>
</ol>
<p>Voilà le résultat :</p>

<img src="/assets/img/access/f_macro_test.png" alt="boite de message macro test" />

<h2>Attacher une macro à un bouton de formulaire</h2>
<p>La prochaine partie consiste à attacher la nouvelle macro <strong>Macro1</strong> qui vient d'être créée dans la partie précédente à un bouton de formulaire. Il y a deux manières pour attacher : attacher à un nouveau bouton ou à bouton déjà existant.</p>
<p>Cette partie va couvrir ces deux manières.</p>
    <h3>Attacher à un nouveau bouton</h3>
<ol class="instruction">
	<li>Ouvrez un formulaire existant, sélectionnez-le et cliquez sur le bouton <img src="/assets/img/access/bt_modifier.png" alt="bouton modifier" />.</li>
	<li>Ou cliquez sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
	<li>De la barre d'outils, sélectionnez le bouton de commande <img src="/assets/img/access/bt_controle_rectangle.png" alt="bouton de commande" />.</li>
</ol>
 <img src="/assets/img/access/f_assistant_bt_commande_macro1.png" alt="assistant bouton de commande1" />
 <ol class="instruction">
	<li>Cliquez sur le formulaire à l'endroit où vous voulez avoir le bouton de commande.</li>
</ol>
<p>L'assistant de Bouton de commande offre plusieurs options. Il contient plusieurs modèles de boutons pour créer rapidement les boutons les plus utilisés dans différentes catégories.</p>
<p>Parmi la liste des catégories, sélectionnez la catégorie <strong>Divers</strong>.</p>
<ol class="instruction">
	<li>Sélectionnez l'option <strong>Exécuter une macro</strong> parmi la liste des actions.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
	<li>Parmi la liste des macros disponibles, sélectionnez la macro <strong>Macro1</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
  <img src="/assets/img/access/f_assistant_bt_commande_macro2.png" alt="assistant bouton de commande2" />
<p>Access vous offre le choix d'afficher du texte ou une image sur le dessus du bouton.</p>
<p>Pour cet exercice, le texte <strong>Exécuter macro</strong> sera écrit sur le bouton.</p>
<ol class="instruction">
	<li>Cliquez sur l'option <strong>Texte</strong></li>
	<li>Laissez le texte par défaut dans le champ à la droite de l'option <strong>Texte</strong></li>
</ol>
<img src="/assets/img/access/f_assistant_bt_commande_macro3.png" alt="assistant bouton de commande3" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Il ne reste qu'à donner un nom au bouton.</p>
<ol class="instruction">
	<li>Pour l'exercice, écrivez <strong>Test de macro</strong> dans la première case de la fenêtre.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<img src="/assets/img/access/f_assistant_bt_commande_macro4.png" alt="assistant bouton de commande4" />

    <h3>Attacher un bouton existant</h3>
<img src="/assets/img/access/f_assistant_bt_commande_macro5.png" alt="feuille de propriété évènement macro" />
<p>Cette partie du cours vous montre comment changer l'affectation d'une macro à un bouton et la liste des événements possibles avec Access.</p>
<ol class="instruction">
	<li>Sélectionnez le <strong>Mode création</strong> pour le formulaire.</li>
	<li>Placez le pointeur par-dessus le bouton à modifier.</li>
	<li>Cliquez sur le bouton droit de la souris.</li>
	<li>De la liste des options possibles, sélectionnez l'option Propriétés.</li>
	<li>Cliquez sur l'onglet <strong>Événement</strong>.</li>
</ol>
<p>Access vous affiche une liste des événements possible. Vous pouvez attacher une macro ou un module à chacun de ces événements.</p>
<p>Il est donc possible qu'Access exécute une macro lorsque vous cliquez sur un bouton ou un champ et un exécute événement différent si vous faites un double-clique sur le même contrôle.</p>
<ol class="instruction">
	<li>Cliquez dans la case à la droite de l'événement <strong>Sur clic</strong>.</li>
	<li>Cliquez sur le bouton avec un triangle pointant vers le bas à la fin de la case.</li>
	<li>De la liste des macros et des modules, sélectionnez la macro <strong>Macro1</strong>.</li>
</ol>
<p>Lorsque vous allez appuyer sur le bouton <strong>Exécuter macro</strong>, la fenêtre suivante va apparaître :</p>
<img src="/assets/img/access/f_macro_test.png" alt="boite de message macro test" />

<h2>La macro autoexec</h2>
<p>Access vous offre l'opportunité d'ouvrir une base de données en exécutant une macro-commande.</p>
<p>Ceci vous donne l'avantage d'ouvrir avec une macro pour exécuter des commandes ou pour ouvrir la base de données à partir d'un formulaire (menu) principal. Il suffit de créer une macro en lui donnant le nom <strong>Autoexec</strong>.</p>
<p>Si vous voulez ouvrir une base de données sans exécuter la macro de départ <strong>Autoexec</strong>, restez appuyé sur la touche <strong><img src="/assets/img/access/touche_Shift.png" alt="touche shift" width="41" height="25" /></strong> au moment d'ouvrir la base de données.</p>

