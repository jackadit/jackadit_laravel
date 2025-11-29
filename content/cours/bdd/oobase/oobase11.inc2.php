<?php
/**
 * oobase11.php
 * BUT : Cours sur les macros
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
<a href="/cours/qlio/oobase/10">&laquo; Précédent</a> - Cours11 - <a href="/cours/qlio/oobase/12">Suivant &raquo;</a> <a href="/cours/qlio/index">Table des matières</a>
</div>
<div id="tdm" class="dockclass">
<p class="h2-like">Table des matières</p>
	<ul class="tdm">
		<li><a href="#chap1" id="tdmchap1">1-Introduction</a></li>
		<li><a href="#chap2" id="tdmchap2">2-Création d'une macro</a></li>
		<li><a href="#chap3" id="tdmchap3">3-Attacher une macro à un bouton de formulaire</a></li>
		<li><a href="#chap31" id="tdmchap31">3.1-Attacher à un nouveau bouton</a></li>
		<li><a href="#chap32" id="tdmchap32">3.2-Attacher un bouton existant</a></li>
		<li><a href="#chap4" id="tdmchap4">4-La macro autoexec</a></li>
	</ul>
</div>
<div id="cours">
<h2>OpenOffice Base : LES MACROS</h2>
<h1>Introduction</a></h1>
<p>Une macro permet d'exécuter une série de commandes les unes après les autres. Vous pouvez également &laquo;&nbsp;attacher&nbsp;&raquo; une macro à un bouton de formulaire. L'exercice qui suit consiste à créer une petite macro qui contient une seule instruction. Par après, cette nouvelle macro sera attachée à un bouton d'un formulaire.</p>
<h1>Création d'une macro</a></h1>
<ol class="instruction">
	<li>À partir du menu principal, sélectionnez l'onglet des macros <img src="../images/oobase/bouton_macro.png" alt="bouton macros" width="126" height="25" />.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_nouvelle_macro.png" alt="bouton nouvelle macro" width="69" height="22" />.</li>
</ol>
<p>La fenêtre de création de macros va apparaître.</p>
 <img src="../images/oobase/macro1.png" alt="fenêtre macro" width="347" height="200" />
<p>Sous la colonne <strong>Action</strong> se trouve la liste des instructions que vous pouvez exécuter.</p>
<p>Comme vous le constatez, OpenOffice Base vous offre plusieurs instructions.</p>
<p class="notice remarque">Pour avoir plus d'information sur celles-ci, consulter l'aide en saisissant le mot &quot;Action&quot; dans l'index de la recherche.</p>
<p>Pour continuer la création de la macro, il faut entrer les &laquo;&nbsp;arguments de l'action&nbsp;&raquo; ou les caractéristiques de celle-ci. Ces arguments changent selon le type d'action.</p>
<p>Pour l'action <strong>BoîteMsg</strong> (boîte de message)&nbsp;:</p>
<ol class="instruction">
	<li>Saisissez le texte suivant dans le champ message&nbsp;: <strong>Ceci est un test</strong>.</li>
	<li>Sélectionnez l'option <strong>Oui</strong> pour le Bip.</li>
	<li>Pour le type de fenêtre, sélectionnez le type <strong>Information</strong>.</li>
	<li>Pour le titre de la fenêtre, écrivez le texte <strong>Test</strong>.</li>
</ol>
<p>Si vous voulez ajouter une autre action, placez le pointeur en dessous de la dernière action et sélectionnez-la parmi la liste des actions.</p>
<p>Pour sauvegarder la macro&nbsp;:</p>
 <img src="../images/oobase/macro2.png" alt="enregistrer la macro" width="335" height="112" />
<ol class="instruction">
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Enregistrez sous/Exporte</strong>r.</li>
</ol>
 ou<br />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../images/oobase/bt_enregistrer.png" alt="bouton enregistrer" width="23" height="22" />.</li>
	<li>Saisissez le nom est <strong>Test</strong>.</li>
	<li>Cliquez sur le bouton <strong><img src="../images/oobase/bouton_OK_simple.png" alt="bouton OK" width="92" height="26" /></strong>.</li>
</ol>
<h1>Attacher une macro à un bouton de formulaire</a></h1>
<p>La prochaine partie consiste à attacher la nouvelle macro <strong>Test </strong>qui vient d'être créée dans la partie précédente à un bouton de formulaire. Il y a deux manières pour attacher&nbsp;: attacher à un nouveau bouton ou à bouton déjà existant.</p>
<p>Cette partie va couvrir ces deux manières.</p>
<h2><a href="#tdmchap31" id="chap31">3.1-Attacher à un nouveau bouton</h2>
<ol class="instruction">
	<li>Retournez au menu principal et cliquez sur l'onglet <img src="../images/oobase/bouton_formulaire.png" alt="bouton formulaire" width="126" height="25" />.</li>
	<li>Si vous avez déjà un formulaire, sélectionnez-le et Cliquez sur le bouton <img src="../images/oobase/bouton_modifier.png" alt="bouton modifier" width="64" height="22" />.</li>
	<li>Sinon, Cliquez sur le bouton <img src="../images/oobase/bouton_nouveau_formulaire.png" alt="bouton nouveau formulaire" width="69" height="22" />.</li>
	<li>Pour accélérer la création d'un formulaire, sélectionnez un <strong>Formulaire Instantané&nbsp;:Colonnes</strong> et la table <strong>Employe</strong>.</li>
	<li>Une fois que le formulaire est généré, entrez en mode création en appuyant sur le bouton <img src="../images/oobase/bouton_affichage_creation.png" alt="bouton affichage creacute;tion" width="32" height="22" />.</li>
	<li>De la barre d'outils, sélectionnez le bouton de commande <img src="../images/oobase/bouton_de_commande.png" alt="bouton de commande" width="23" height="22" />.</li>
</ol>
 <img src="../images/oobase/assistant_bouton1.png" alt="assistant bouton de commande1" width="343" height="200" />
 <ol class="instruction">
	<li>Cliquez sur le formulaire à l'endroit où vous voulez avoir le bouton de commande.</li>
</ol>
<p>L'assistant de Bouton de commande offre plusieurs options. Il contient plusieurs modèles de boutons pour créer rapidement les boutons les plus utilisés dans différentes catégories.</p>
<p>Parmi la liste des catégories, sélectionnez la catégorie <strong>Divers</strong>.</p>
    <img src="../images/oobase/assistant_bouton2.png" alt="assistant bouton de commande2" width="343" height="200" />
<ol class="instruction">
	<li>Sélectionnez l'option <strong>Exécuter une macro</strong> parmi la liste des actions.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
	<li>Parmi la liste des macros disponibles, sélectionnez la macro <strong>Test</strong>.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
  <img src="../images/oobase/assistant_bouton3.png" alt="assistant bouton de commande3" width="343" height="200" />
<p>OpenOffice Base vous offre le choix d'afficher du texte ou une image sur le dessus du bouton.</p>
<p>Pour cet exercice, le texte <strong>Test</strong> sera écrit sur le bouton.</p>
<ol class="instruction">
	<li>Cliquez sur l'option <strong>Texte</strong></li>
	<li>Écrivez le texte <strong>Test</strong> dans la case à la droite de l'option <strong>Texte</strong></li>
</ol>
 <img src="../images/oobase/assistant_bouton4.png" alt="assistant bouton de commande4" width="343" height="200" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
<p>Il ne reste qu'à donner un nom au bouton.</p>
<ol class="instruction">
	<li>Pour l'exercice, écrivez <strong>Test de macro</strong> dans la première case de la fenêtre.</li>
	<li>Cliquez sur le bouton <img src="../images/oobase/bouton_terminer.png" alt="bouton terminer" width="76" height="24" />.</li>
</ol>
<h2><a href="#tdmchap32" id="chap32">3.2-Attacher un bouton existant</h2>
<img src="../images/oobase/assistant_bouton5.png" alt="assistant bouton de commande5" />
<p>Cette partie du cours vous montre comment changer l'affectation d'une macro à un bouton et la liste des événements possibles avec OpenOffice Base.</p>
<ol class="instruction">
	<li>Sélectionnez le <strong>Mode création</strong> pour le formulaire.</li>
	<li>Placez le pointeur par-dessus le bouton à modifier.</li>
	<li>Cliquez sur le bouton droit de la souris.</li>
	<li>De la liste des options possibles, sélectionnez l'option Propriétés.</li>
	<li>Cliquez sur l'onglet <strong>Événement</strong>.</li>
</ol>
<p>OpenOffice Base vous affiche une liste des événements possible. Vous pouvez attacher une macro ou un module à chacun de ces événements.</p>
<p>Il est donc possible qu'OpenOffice Base exécute une macro lorsque vous cliquez sur un bouton ou un champ et un exécute événement différent si vous faites un double-clique sur le même contrôle.</p>
<ol class="instruction">
	<li>Cliquez dans la case à la droite de l'événement <strong>Sur clic</strong>.</li>
	<li>Cliquez sur le bouton avec un triangle pointant vers le bas à la fin de la case.</li>
	<li>De la liste des macros et des modules, sélectionnez la macro <strong>Test</strong>.</li>
</ol>
 <img src="../images/oobase/assistant_bouton6.png" alt="fenêtre test" width="212" height="126" />
<ol class="instruction">
	<li>Fermer la fenêtre des propriétés en appuyant sur le bouton <img src="../images/oobase/bouton_fermer_croix_rouge.png" alt="bouton fermer" width="21" height="21" />.</li>
</ol>
<p>Lorsque vous allez appuyer sur le bouton <strong>Test</strong>, la fenêtre suivante va apparaître&nbsp;:</p>
<h1>La macro autoexec</a></h1>
<p>OpenOffice Base vous offre l'opportunité d'ouvrir une base de données en exécutant une macro-commande.</p>
<p>Ceci vous donne l'avantage d'ouvrir avec une macro pour exécuter des commandes ou pour ouvrir la base de données à partir d'un formulaire (menu) principal. Il suffit de créer une macro en lui donnant le nom <strong>Autoexec</strong>.</p>
<p>Si vous voulez ouvrir une base de données sans exécuter la macro de départ <strong>Autoexec</strong>, restez appuyé sur la touche <strong><img src="../images/oobase/touche_Shift.png" alt="touche shift" width="41" height="25" /></strong> au moment d'ouvrir la base de données.</p>
</div>
<div class="navig">
<a href="/cours/qlio/oobase/10">&laquo; Précédent</a> - Cours11 - <a href="/cours/qlio/oobase/12">Suivant &raquo;</a> <a href="/cours/qlio/index">Table des matières</a>
</div>
<!-- Fin contenu -->