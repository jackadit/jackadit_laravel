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
$sNavigation=navigation('oobase', '6c', '6d', '6b');
?>




<h1>OpenOffice Base : LES FORMULAIRES (c)</h1>

<h2>4-La barre d'outils</h2>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_barre_outils_formulaire.png" alt="bouton barre d'outils formulaire" /> pour afficher la barre d'outils.</li>
</ol>
<p>La barre d'outils permet d'accéder aux contrôles les plus usités dans un formulaire. Nous allons détailler chacun de ces outils et en donner un exemple du fonctionnement.</p>

<h3>Sélectionner un contrôle</h3>
<p>En appuyant sur le bouton <img src="/assets/img/oobase/bt_selection.png" alt="bouton sélection" />, il vous est possible de sélectionner un ou plusieurs contrôles (objets) pour ensuite les déplacer ou changer une de leurs propriétés.</p>

<h3>Activer les assistants</h3>
<p>Vous cliquez sur le bouton <img src="/assets/img/oobase/bt_assistant_controles.png" alt="bouton assistant de contrôles" /> pour activer ou non les assistants pour les différents contrôles de la barre d'outils. Laissez les assistants &quot;actifs&quot;. Ceci va vous aider lors de l'ajout de certains contrôles à votre formulaire.</p>

<h3>Ajouter une &laquo;&nbsp;étiquette&nbsp;&raquo; ou du texte libre</h3>
<p>Ce champ permet d'ajouter un texte libre mais il est surtout utilisé chaque fois que vous ajoutez un champ <strong>zone de texte</strong> pour décrire le champ. Pour l'utiliser&nbsp;:</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_champ_etiquette.png" alt="bouton champ étiquette" />.</li>
	<li>Cliquez sur le formulaire à l'endroit o&uacute; vous voulez placer l'étiquette.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_proprietes_controle.png" alt="bouton propriétés du contrôle" /> ou double-cliquez sur le champ.</li>
	<li>Dans le propriété <strong>Étiquette</strong> écrivez le texte &laquo;Revenu&raquo;.</li>
</ol>
<img src="/assets/img/oobase/fen_proprietes_etiquette.png" alt="fenêtre des propriétés du champ étiquette" />

<h3>Ajouter une &laquo;&nbsp;zone de texte&nbsp;&raquo;</h3>
<p>Un champ <strong>zone de texte</strong> n'est pas automatiquement lié à une étiquette.</p>
<p>Dans l'exercice suivant, nous allons ajouter un champ <strong>zone de texte</strong> et le lier à l'étiquette créée précédement.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_zone_texte.png" alt="bouton zone de texte" /> pour ajouter une zone de texte.</li>
	<li>Cliquez à l'endroit où vous voulez afficher ce champ.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_proprietes_controle.png" alt="bouton propriétés du contrôle" /> ou double-cliquez sur le champ.</li>	
	<li>Sur la ligne de propriété <strong>Champ d'étiquette</strong> cliquez sur le bouton <img src="/assets/img/oobase/bt_suite.png" alt="bouton suite" />.</li>
</ol>
<p>La fenêtre suivante s'affichera :</p>
<img src="/assets/img/oobase/fen_selection_etiquette.png" alt="fenêtre de sélection du champ étiquette" />
<ol class="instruction">
	<li>Sélectionnez le champ d'étiquette <strong>Revenu</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_OK.png" alt="bouton OK" />.</li>	
</ol>
<p>Vous obtiendrez la fenêtre suivante :</p>
<img src="/assets/img/oobase/fen_proprietes_zone_texte2.png" alt="fenêtre propriétés du champ zone de texte" />

<h3>Ajouter une zone de groupe</h3>
<p>Une zone de groupe vous permet, comme pour la boîte combinée et la zone de liste, de choisir parmi une liste prédéterminée. L'une des différences entre une zone de groupe et les deux autres est que toutes les options sont visibles à l'écran.</p>
<p>Une autre différence est que vous devez saisir la description, appelée &laquo;&nbsp;<strong>étiquette</strong>&nbsp;&raquo;, au lieu de choisir parmi une liste qui se retrouve dans une table ou une requête.</p>
<p>La dernière différence est qu'il faut déterminer la valeur qui sera conservé dans le champ pour chacune des étiquettes que vous avez saisie.</p>
<p>L'exercice consiste à créer une zone de groupe qui servira à déterminer le statut social de l'employé. La valeur qui sera choisie sera conservée dans le champ <strong>Statut</strong> de la table <strong>Employe</strong>.</p>

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_autres_controles.png" alt="bouton autres contrôles" />.</li>
</ol>
<p>La barre d'outils suivante s'affichera :</p>
<img src="/assets/img/oobase/barre_autres_controles.png" alt="barre d'outils autres contrôles" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_zone_groupe.png" alt="bouton zone de groupe" />.</li>
	<li>Cliquez sur le formulaire à l'endroit où vous voulez mettre un groupe d'options.</li>
</ol>
<p>L'assistant de groupe d'options va ouvrir une fenêtre dans laquelle vous saisirez la liste des statuts des employés.</p>
<img src="/assets/img/oobase/fen_assistant_zone_groupe1.png" alt="fenêtre assistant zone de groupe 1" />
<ol class="instruction">
	<li>Saisissez la liste des statuts (Célibataire, Marié, Marié avec enfants, Divorcé, Veuf/veuve).</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant de zone de groupe vous demande ensuite si l'une des valeurs devrait être la valeur par défaut. Ce qui veut dire qu'il y aurait une valeur prédéterminée.</p>
<img src="/assets/img/oobase/fen_assistant_zone_groupe2.png" alt="fenêtre assistant zone de groupe 2" />
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option: <strong>Non, aucun champ particulier ne va être sélectionné.</strong></li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>Après avoir saisi les étiquettes, il faut donner une valeur à chacune de celles-ci. OpenOffice Base propose automatiquement un chiffre par défaut. Il vous est aussi possible de mettre du texte au lieu des chiffres. Cette fenêtre vous permet de modifier ces valeurs par ceux de votre choix.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, laissez les valeurs affichées initialement dans la fenêtre.</li>
</ol>
<img src="/assets/img/oobase/fen_assistant_zone_groupe3.png" alt="fenêtre assistant zone de groupe3" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>L'assistant vous demande ensuite que faire avec la valeur sélectionnée. Il vous offre de la conserver dans un champ indépendant (Non, je souhaite enregistrer la valeur uniquement dans le formulaire) ou de placer cette valeur dans un champ d'une table.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option&nbsp;: <strong>Oui je souhaite l'enregistrer dans le champ de base de données :</strong> et sélectionnez le champ <strong>Statut</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_assistant_zone_groupe4.png" alt="fenêtre assistant zone de groupe4" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>

<p>Le dernier élément dont l'assistant a besoin pour terminer la création du groupe est le titre pour le groupe d'options. Ce titre va apparaître au haut de la zone de groupe. Pour les besoins de l'exercice&nbsp;:</p>
<img src="/assets/img/oobase/fen_assistant_zone_groupe5.png" alt="fenêtre assistant zone de groupe5"/>
<ol class="instruction">
	<li>Saisissez le texte : <strong>Statut social</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>OpenOffice Base va prendre quelques instants pour générer le groupe d'options avec les options que vous avez choisies. Voici le résultat de l'exercice&nbsp;:</p>
<img src="/assets/img/oobase/resultat_zone_groupe.png" alt="Résultat de la zone de groupe" />
<pre>Avec un groupe d'options, le choix se limite à une seule des options. 
Dans notre exemple, il est impossible d'être célibataire et marié en même temps !</pre>

<table class="table" summary="boutons de contrôle">
 <tr>
 <th class="w200p"><img src="/assets/img/oobase/bt_bouton.png" alt="bouton bascule" /> Bouton bascule</th>
 <td>Le bouton bascule est un bouton dont la propriété <strong>Basculer</strong> est activée. Comme pour le bouton d'option et le bouton case à cocher il est utilisé pour les champs de type <strong>Oui/Non</strong>. Il faut appuyer sur le bouton pour dire &laquo;&nbsp;<strong>oui</strong>&nbsp;&raquo; ou pour &laquo;&nbsp;<strong>activer</strong>&nbsp;&raquo; l'option ou le champ.</td>
 </tr>
 <tr>
 <th><img src="/assets/img/oobase/bt_radio.png" alt="bouton radio" /> Bouton d'option</th>
 <td>Le bouton d'option (anciennement appelé bouton radio) peut être utilisé avec un champ de type <strong>Oui/Non</strong>. Il faut &laquo;&nbsp;<strong>noircir</strong>&nbsp;&raquo; le bouton pour l'activer. C'est l'équivalent de <strong>Oui</strong>.</td>
 </tr>
 <tr>
 <th><img src="/assets/img/oobase/bt_case_cocher.png" alt="bouton case à cocher" /> Case à cocher</th>
 <td>La case à cocher peut être utilisée avec un champ de type <strong>Oui/Non</strong>. Il faut cocher la case pour l'activer. C'est l'équivalent de <strong>Oui</strong>. </td>
 </tr>
</table>

<h3>Zone de liste</h3>
<p>Une zone de liste vous permet de sélectionner une valeur parmi une liste prédéterminée comme un groupe d'options ou une zone de liste. Il vous est aussi possible d'ajouter d'autres valeurs à la liste si nécessaire, contrairement aux groupex d'options et aux zonex de liste.</p>
<p>L'utilisation d'une liste permet d'éviter les erreurs d'orthographe lors de la saisie des données.</p>
<p>L'exercice consiste à créer une zone de liste pour le champ <strong>emp_bureau</strong> qui représente le lieu de travail des employés.</p>
 <img src="/assets/img/oobase/fen_assistant_zone_liste1.png" alt="assistant zone de liste1" />
<p>La source de la liste sera la table <strong>Bureau</strong> qui contient le nom des villes ainsi que les adresses de chacun des bureaux de l'entreprise.</p>
<ol class="instruction">
	<li>Dans le formulaire, sélectionnez le champ <strong>emp_bureau</strong> et supprimez-le.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_zone_liste.png" alt="bouton zone de liste" /> de la barre d'outils, .</li>
	<li>Placez la zone de liste en cliquant à l'ancien emplacement du champ <strong>emp_bureau</strong> que vous venez de supprimer.</li>
</ol>
<p>L'assistant va vous demander le nom de la table qui sera utilisé pour la source de la zone.</p>
 <ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez la table <strong>Bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>La fenêtre suivante vous demande de choisir parmi la liste des champs celui que vous voulez afficher à l'écran.</p>

 <img src="/assets/img/oobase/fen_assistant_zone_liste2.png" alt="assistant zone de liste2" />

<ol class="instruction">
	<li>Sélectionnez le champ : <strong>Ville</strong></li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>La fenêtre suivante vous demande de sélectionner les champs dont le contenu doit co&itrema;ncider afin d'afficher la valeur du champ de visualisation parmi la liste des champs celui que vous voulez afficher dans la liste.</p>
 <img src="/assets/img/oobase/fen_assistant_zone_liste3.png" alt="assistant zone de liste3" />
 <ol class="instruction">
	<li>Sélectionnez les champs <strong>emp_bureau</strong> et <strong>ID_Bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_terminer.png" alt="bouton terminer"/>.</li>
</ol>
<p class="notice remarque">Si vous vous souvenez bien , la table <strong>Employe</strong> contenait un champ <strong>emp_bureau</strong> complété par le nom des villes. Or nous avons relié ce champ avec le champ <strong>ID_Bureau</strong> de la table <strong>Bureau</strong>. Ce qui logiquement entrainera une erreur d'affichage.</p>
<p>Nous devons donc modifier la structure de la table Employés pour pouvoir accueillir les identifiants des bureaux et non les noms des villes de la liste</p>
 <ol class="instruction">
	<li>Convertissez le champ <strong>emp_bureau</strong> de la table <strong>Employe</strong> en <strong>Integer [INTEGER]</strong>.</li>
	<li>Saisissez les identifiants des villes dans ce champ (2 = Haguenau et 3 = Strasbourg).</li>
</ol>
<p>Pour ajouter un nouveau bureau, ajoutez un enregistrement dans la table <strong>Bureau</strong>.</p>
<p class="notice exemple">Ex : ajoutez Mulhouse au 3 rue paul Verlaine 68200 (0389431617). Ensuite, retournez voir le contenu de la liste.</p>
<p>Vous pouvez également modifier les propriétés de cette zone de liste en lui attachant l'étiquette &laquo;Bureau&raquo;.</p>
<img src="/assets/img/oobase/fen_proprietes_zone_liste2.png" alt="propriétés générales zone de liste" />
<p>Dans l'onglet <strong>Données</strong> vous pouvez consulter la requête se cachant derrière le contenu de la liste.</p>
<img src="/assets/img/oobase/fen_proprietes_zone_liste.png" alt="propriétés zone de liste" />

<h3>Boîte combinée</h3>
<p>Une boîte combinée est une liste déroulante contenant les valeurs d'un champ, mais avec l'avantage de pouvoir saisir une valeur supplémentaire n'existant pas dans la table sur laquelle est basée la liste.</p>
 <img src="/assets/img/oobase/fen_assistant_boite_combinee1.png" alt="assistant boîte combinée1" />
<p>L'exercice suivant consiste à remplacer le champ <strong>emp_poste</strong> par une boîte combinée pour afficher la liste des activités de l'entreprise.</p>
<ol class="instruction">
	<li>Dans le formulaire, sélectionnez le champ <strong>emp_poste</strong> et supprimez-le.</li>
	<li>Cliquez sur le bouton <strong>Boîte combinée</strong> <img src="/assets/img/oobase/bt_boite_combinee.png" alt="bouton boîte combinée" />.</li>
	<li>Placez la boîte combinée en cliquant à l'emplacement désiré sur le formulaire.</li>
</ol>
<p>L'assistant va vous demander le nom de la table qui sera utilisé pour la source de la boîte combinée.</p>
<ol class="instruction">
	<li>Sélectionnez la table <strong>Activites</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>La fenêtre suivante vous demande le nom du champ dont le contenu sera affiché dans la liste de la zone combinée.</p>
 <img src="/assets/img/oobase/fen_assistant_boite_combinee2.png" alt="assistant boîte combinée2" />

<ol class="instruction">
	<li>Sélectionnez le champ <strong>Activite</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>
<p>La table ne contient qu'un seul champ : <strong>Activite</strong>.</p>
<p>Dans cette table, il n'y a que deux activités possibles : <strong>Gérant</strong> et <strong>Vendeur</strong>.</p>
<p>Si vous vouliez ajouter une autre activité à la liste, il faudrait ajouter un enregistrement à cette table.</p>
<p>Contrairement à une zone de liste, il est impossible d'ajouter un enregistrement directement dans la zone combinée.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>Activite</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_ajouter_un_item.png" alt="bouton ajouter un item" />&nbsp;pour transférer le champ <strong>Activite</strong> dans la zone des <strong>Champs sélectionnés</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant.png" alt="bouton suivant"/>.</li>
</ol>

<p>L'étape suivante consiste à indiquer si vous voulez conserver les choix dans une valeur pour usage ultérieur ou les enregistrer dans l'un des champs du formulaire. Pour l'exercice, la valeur choisie de la zone combiniée s'enregistrera dans le champ <strong>emp_poste</strong> .</p>
<img src="/assets/img/oobase/fen_assistant_boite_combinee3.png" alt="assistant boîte combinée3" />
<ol class="instruction">
	<li>Sélectionnez l'option : <strong>Oui, je souhaite l'enregistrer dans le champ de base de données</strong>.</li>
	<li>Sélectionnez le champ <strong>emp_poste</strong>  dans la liste des champs disponibles.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_terminer.png" alt="bouton terminer"/>.</li>
</ol>
<p>Vous pouvez également modifier les propriétés de cette zone de liste en lui attachant l'étiquette &laquo;Poste&raquo;.</p>
<img src="/assets/img/oobase/fen_proprietes_zone_combinee.png" alt="propriétés générales zone combinée" />

<h3>Bouton de commande</h3>
<p>Les boutons commandes permettent d'associer des commandes macros à des évènements qui affectent le formulaire ou la base de données.</p>
<p class="notice exemple">Ex : Passer d'un enregistrement à un autre, ouvrir ou imprimer un formulaire ou un rapport, etc.</p>
<p>Il n'existe pas d'assistant pour faciliter la création de boutons de commande pour le moment.</p>
<p>Les macros seront développées plus tard dans ce cours.</p>

<h3>Images</h3>
<p>Il est possible d'insérer des images dans un formulaire. Que ce soient celles prédéfinies dans OpenOffice ou vos propres images.</p>
<ol class="instruction">
	<li>De la barre d'outils, cliquez sur l'image désirée, puis glissez-la sur le formulaire.</li>
</ol>
<p>L'image va ensuite s'insérer sur le formulaire. Vous pouvez la redimensionner et/ou la déplacer sur le formulaire.</p>
 

<h3>Autres contrôles</h3>
    <img src="/assets/img/oobase/bt_autres_controles.png" alt="bouton autres contrôles" />
<p>D'autres contrôles sont disponibles dans la bibliothèque des contrôles.</p>


