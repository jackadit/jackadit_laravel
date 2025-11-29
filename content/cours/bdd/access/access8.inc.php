<?php
/**
 * page de cours 8 sur ACCESS 2003 : Cours sur les sous-formulaires
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   11/03/07  17:13:00
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
<h1>ACCESS : LES SOUS-FORMULAIRES</h1>
<p class="h2-like">Avant de commencer</p>
<p>Access vous offre plusieurs types de formulaires. Ce cours vous montre comment créer et utiliser un formulaire dans un formulaire. Pour plus d'informations sur les formulaires en général, veuillez vous référer au cours sur les formulaires.</p>
<p>On présume que vous savez comment créer des requêtes qui incluent des champs calculés.</p>
<p>Il est très important que les relations entre les tables soient réalisées pour qu'il y ait un lien entre le formulaire et le sous formulaire sur un champ en commun.</p>
<p>Dans le cas étudié, il s'agit du champ <strong>fact_id</strong> de la table <strong>Facture</strong> et du champ <strong>fact_id</strong> de la table <strong>L_Fact_Art</strong>.</p>
<p>Les champs de plusieurs tables et requêtes seront requis pour réaliser l'exercice de ce cours.</p>

<h2>Introduction</h2>
<p>Pour vraiment utiliser une base de données, il faut être capable de chercher et d'afficher des données provenant de plusieurs tables. Cela veut souvent dire qu'il faut un formulaire principal, qui inclut les informations générales, avec un ou des sous formulaires pour avoir plus de détails.</p>
<p>L'exercice de ce cours consiste à créer un formulaire pour la facturation de l'entreprise. Pour afficher toutes les informations que ce genre de formulaire contient, il devra contenir un second formulaire qui décrira les items facturés.</p>
<p>Mais avant de pouvoir créer ce formulaire, vous devez  avoir effectué les exercices précédents. Ainsi les tables sont créés et possèdent des données. Vos tables sont reliés et vous êtes capable de créer des requêtes avec des champs calculés. Assurez-vous de bien maîtriser ces concepts avant de créer un formulaire qui inclut un sous-formulaire.</p>
<p>La création d'un formulaire de facturation se fait par étapes :</p>
<ul>
	<li>Création des requêtes nécessaires.</li>
	<li>Création du formulaire.</li>
	<li>Modification du formulaire pour qu'il soit plus présentable.</li>
	<li>Ajout du sous-formulaire.</li>
	<li>Calcul du total de la facture dans le sous-formulaire.</li>
	<li>Ajout du champ calculé dans le formulaire principal.</li>
</ul>

<h2>Création des requêtes nécessaires</h2>
<p>Avant de pouvoir créer le formulaire et un sous-formulaire, il faut déterminer quels seront les champs requis et dans quel formulaire ils vont se retrouver.</p>
<p>Pour la facture, il faut les informations des tables <strong>Facture</strong> et <strong>Client</strong>. Il faut aussi ajouter dans le sous-formulaire les informations de la table <strong>L_Fact-Art</strong> ainsi que la description du produit et de son prix unitaire qui se retrouve dans la table <strong>Article</strong>.</p>
<p>Vous devez créer deux requêtes: l'une avec les champs requis pour la facture et l'autre sur les items de cette facture. Nous regarderons ensuite comment avoir le total de cette facture.</p>
<img src="/assets/img/access/f_relations_tables.png" alt="relations entre les tables" />
<ol class="instruction">
	<li>Du menu <strong>Créer</strong>, sélectionnez le bouton <strong>Création de requête</strong> <img src="/assets/img/access/bt_creation_requete.png" alt="bouton requête" />.</li>
	<li>De la liste des tables, sélectionnez les tables <strong>Client</strong> et <strong>Facture</strong>.</li>
    <li>Cliquez sur le bouton <img src="/assets/img/access/bt_fermer.png" alt="Bouton fermer" />.</li>
	<li>De la liste des champs de la table <strong>Facture</strong>, sélectionnez <em>tous</em> les champs dans le même ordre.</li>
	<li>De la liste des champs de la table <strong>Client</strong>, sélectionnez les champs <strong>cli_nom</strong>, <strong>cli_adresse</strong>, <strong>cli_ville</strong> et <strong>cli_code_postal</strong>.</li>
	<li>Enregistrez cette requête sous le nom <strong>RFacture</strong>.</li>
	<li>Fermez la requête.</li>
</ol>
    <img src="/assets/img/access/r_Rfacture.png" alt="requête Facture-client" />
<p>Créez une seconde requête.</p>
<ol class="instruction">
    <li>Du menu <strong>Créer</strong>, sélectionnez le bouton <strong>Création de requête</strong> <img src="/assets/img/access/bt_creation_requete.png" alt="bouton requête" />.</li>
    <li>De la liste des tables, sélectionnez les tables <strong>L_Fact-Art</strong> et <strong>Article</strong>.</li>
    <li>Cliquez sur le bouton <img src="/assets/img/access/bt_fermer.png" alt="Bouton fermer" />.</li>
</ol>

    <img src="/assets/img/access/r_RFacture-items.png" alt="requête RFacture-items" />
<p class="notice remarque">Puisque les relations entre les tables ont déjà été établies, vous devriez 
voir un lien entre les champs <strong>art_id</strong> de la table <strong>L_Fact-Art</strong>
et le champ <strong>art_id</strong> de la table <strong>Article</strong>. 
Sinon, il faudra faire la relation entre ces deux champs.</p>
<ol class="instruction">
	<li>De la liste des champs de la table <strong>L_Fact-Art</strong>, sélectionnez tous les champs.</li>
</ol>
<p class="notice remarque">Vous pouvez aussi sélectionnez l'astérisque (*) au dessus de la liste des champs. Cela aura l'effet de choisir tous les champs de la table.</p>
<ol class="instruction">
	<li>De la liste des champs de la table <strong>Article</strong>, sélectionnez les champs <strong>art_nom</strong> et <strong>art_pu</strong>.</li>
	<li>Créez un champ calculé <strong>STotal: [art_qte]*[art_pu]</strong></li>
</ol>
<p class="notice remarque">N'oubliez pas de mettre les crochets autour du champ <strong>art_pu</strong>. Access se chargera de mettre les crochets autour de <strong>art_qte</strong>. Ce champ calculé va donner le total de chacun des items de la facture. On regardera plus loin comment avoir le total de tous les items de la facture.</p>
<p class="notice remarque">Les majuscules ne sont pas nécessaires, Access n'est pas sensible à la casse.</p>
<ol class="instruction">
	<li>Enregistrez cette requête sous le nom <strong>RFacture-Items</strong>.</li>
	<li>Fermez la requête.</li>
</ol>

<h2>Création du formulaire</h2>
<p>Avant de pouvoir ajouter un sous-formulaire, il faut créer le formulaire principal. Celui-ci affichera les informations générales de la facture. Les informations sur les détails de la facture seront dans le sous-formulaire.</p>
<img src="/assets/img/access/f_assistant_formulaire_facture1.png" alt="assistant formulaire facture 1" />
<ol class="instruction">
	<li>Du menu <strong>Créer</strong>, sélectionnez le bouton <strong>Assistant Formulaires</strong> <img src="/assets/img/access/bt_assistant_formulaire.png" alt="bouton assistant formulaire" />.</li>
    <li>Sélectionnez la source du formulaire qui sera la requête <strong>RFacture</strong>.</li>
	<li>Sélectionnez <em>tous</em> les champs de la requête en appuyant sur le bouton <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

    <img src="/assets/img/access/f_assistant_formulaire_facture2.png" alt="assistant formulaire facture 2" />
<p>L'assistant constate qu'il peut trier les enregistrements selon la clé primaire <strong>cli_id</strong> ou par la clé primaire <strong>fact_id</strong>. Il vous demande par quel champ il doit trier les enregistrements. Pour cet exemple, on veut afficher les informations par facture et non par client.</p>
<ol class="instruction">
	<li>Sélectionnez <strong>par Facture</strong>.</li>
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" /></strong>.</li>
</ol>

    <img src="/assets/img/access/f_assistant_formulaire_facture3.png" alt="assistant formulaire facture 3" />
<p>L'assistant vous demande ensuite de choisir le type de présentation des champs.</p>
<ol class="instruction">
	<li>Sélectionnez l'option <strong>Colonne simple</strong>.</li>
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" /></strong>.</li>
</ol>

    <img src="/assets/img/access/f_assistant_formulaire_facture4.png" alt="assistant formulaire facture4" />

<p>L'assistant vous demande pour terminer le nom que vous souhaitez donner au formulaire.</p>
<ol class="instruction">
	<li>Saisissez <strong>Facture</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Voici le résultat :</p>
    <img src="/assets/img/access/f_assistant_formulaire_facture5.png" alt="assistant formulaire facture 5" />


<h2>Modification du formulaire</h2>
<p>Le formulaire est terminé. Mais il n'y a pas assez d'espace pour le sous-formulaire. La prochaine partie consiste à modifier le formulaire ci-dessus pour y inclure un sous formulaire.</p>
<ol class="instruction">
	<li>Passez en <strong>Mode création</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton affichage création" />.</li>
</ol>
 <img src="/assets/img/access/f_creation_formulaire_facture1.png" alt="création formulaire facture1" />
<p class="notice remarque">Au besoin, vous pouvez changer les dimension du formulaire, en plaçant le pointeur sur la bordure du formulaire, puis lorsque le pointeur changera de forme, restez appuyé sur le bouton gauche de la souris et étirez le formulaire vers l'extérieur.</p>

<h2>Ajouter le sous-formulaire</h2>
<p>Il y a maintenant assez d'espace pour voir les items de la facture ainsi que le total. La prochaine partie consiste à créer le sous-formulaire.</p>
<ol class="instruction">
	<li>Du menu <strong>Création</strong>, sélectionnez le bouton <strong>Sous-Formulaire</strong> <img src="/assets/img/access/bt_controle_sous-formulaire.png" alt="bouton contrôle sous-formulaire" />, puis cliquez dans le formulaire.</li>
</ol>
<p>L'assistant pour les sous-formulaires va vous demander quel sera la source du sous-formulaire. Est-ce une table, une requête ou un formulaire que vous avez déjà préparé.</p>
    <img src="/assets/img/access/d_assistant_sous-formulaire1.png" alt="assistant sous-formulaire1" />
    <ol class="instruction">
	<li>Sélectionnez l'option <strong>Utiliser les tables et les requêtes existantes</strong>.</li>
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" /></strong>.</li>
</ol>

<p>L'assistant vous demande ensuite quels seront les champs qui seront inclus dans le formulaire.</p>
<img src="/assets/img/access/f_assistant_sous-formulaire2.png" alt="assistant sous-formulaire2" />
<ol class="instruction">
	<li>De la liste des tables et des requêtes, sélectionnez la requête <strong>RFacture-Items</strong>.</li>
	<li>Sélectionnez <em>tous</em> les champs de la requête en appuyant sur le bouton <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous" />.</li>
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" /></strong>.</li>
</ol>

<p>L'assistant vous demande quels seront les champs en commun entre le formulaire et le sous-formulaire.</p>
<p>Pour cet exercice, nous allons laisser Access trouver les champs en communs.</p>
<p>Si cela ne fonctionne pas, vous verrez à la fin comment déterminer la relation père-fils entre le formulaire et le sous-formulaire.</p>
<img src="/assets/img/access/f_assistant_sous-formulaire3.png" alt="assistant sous-formulaire3" />
<ol class="instruction">
	<li>Sélectionnez l'option <strong>Choisir à partir d'une liste</strong>.</li>
</ol>
<p class="notice remarque">Si vous sélectionnez l'option <strong>Les définir moi-même</strong>, vous devrez aussi déterminer quels sont les champs en commun entre le formulaire et le sous-formulaire.</p>

<img src="/assets/img/access/f_assistant_sous-formulaire4.png" alt="assistant sous-formulaire4" />
<ol class="instruction">
	<li>Pour le champ en commun du formulaire, sélectionnez le champ <strong>fact_id</strong>.</li>
	<li>Pour le champ en commun du sous-formulaire, sélectionnez le champ <strong>fact_id</strong>.</li>
</ol>

<br class="clear" />
<p>Vous aviez le choix entre laisser l'assistant trouver les champ en commun ou les déterminer par vous-même. Le reste des opérations pour terminer le sous-formulaire sont les mêmes.</p>

<img src="/assets/img/access/f_assistant_sous-formulaire5.png" alt="assistant sous-formulaire5" />
<ol class="instruction">
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" /></strong>.</li>
	<li>Laissez le nom du sous-formulaire à <strong>RFacture-Items sous-formulaire</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Le sous-formulaire est maintenant inclus.</p>
<ol class="instruction">
	<li>Passez au <strong>Mode formulaire</strong> en appuyant le bouton <img src="/assets/img/access/bt_affichage_mode_formulaire.png" alt="bouton affichage mode formulaire" />.</li>
</ol>

 <img src="/assets/img/access/f_assistant_sous-formulaire6.png" alt="assistant sous-formulaire6" />
<p class="notice remarque">À moins qu'on ne l'indique autrement, la présentation des données se fait toujours en mode feuille de données comme dans les tables ou les requêtes.</p>
<p class="notice remarque">Il se peut qu'une boite de dialogue vous demande une quantité, cliquez simplement sur le bouton <strong>OK</strong>.</p>


<h2>Le total de la facture</h2>
<p>Le formulaire montre maintenant les informations du formulaire ainsi que les items facturés. Mais il ne montre pas le total de la facture. Il faut ajouter un champ calculé pour le voir. La prochaine partie consiste à ajouter un champ calculé pour voir le total.</p>
<ol class="instruction">
    <li>Retournez en <strong>Mode création</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton affichage mode création" />.</li>
</ol>

 <img src="/assets/img/access/f_creation_facture_sous_formulaire.png" alt="Facture avec sous-formulaire en mode création" />
<p>Il faut ajouter un champ calculé dans l'en-tête ou le pied de ce sous-formulaire. Pour cet exemple, il sera ajouté dans le pied de formulaire.</p>
<p>Pour agrandir le pied de formulaire <img src="/assets/img/access/agrandir_pied_formulaire.png" alt="agrandir le pied de formulaire" width="133" height="25" /> :</p>
<ol class="instruction">
	<li>Placez le pointeur au bas de la barre <strong>Pied de formulaire</strong>.</li>
</ol>
<p>Le pointeur devrait changer de forme.</p>
<ol class="instruction">
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur vers le bas.</li>
</ol>
<p>La zone du pied de formulaire va s'agrandir. Il faut qu'il soit assez grand pour ajouter un champ calculé.</p>
<ol class="instruction">
	<li>De la barre d'outils, cliquez sur le bouton zone de texte <img src="/assets/img/access/bt_controle_zone_texte.png" alt="bouton contrôle zone de texte" />.</li>
	<li>Cliquez dans la zone du pied de formulaire.</li>
</ol>
<p>Un champ vide va apparaître dans le pied de formulaire. Il faut maintenant ajouter la formule pour calculer le total et lui donner un nom significatif.</p>
<ol class="instruction">
	<li>Cliquez une première fois sur le nouveau champ pour le sélectionner.</li>
	<li>Cliquez une seconde fois dans le champ, pour pouvoir écrire la formule requise.</li>
	<li>Écrivez la formule suivante : <strong>=somme(Stotal)</strong>.</li>
	<li>Cliquez ensuite dans l&rsquo;étiquette du champ et nommez-la <strong>Total :</strong></li>
	<li>Appuyez sur la touche <strong><img src="/assets/img/access/touche_entree.png" alt="touche entrée" width="40" height="24" /></strong>.</li>
</ol>
<p>Comme dans Excel, les formules des champs calculés que l'on retrouve dans des formulaires ou des états commencent toujours avec le signe &laquo;&nbsp;<strong>=</strong>&nbsp;&raquo;. Cette formule va additionner les valeurs de tous les enregistrements <strong>STotal</strong>.</p>
<p>Il faut maintenant donner un nom significatif à ce nouveau champ calculé.</p>
    <img src="/assets/img/access/f_zone_texte_totalItems.png" alt="zone de texte TotalItems" />
<ol class="instruction">
	<li>Placez le pointeur sur le nouveau champ.</li>
	<li>Cliquez sur le bouton <strong>droit</strong> de la souris.</li>
	<li>Du menu contextuel, sélectionnez l'option <strong>Propriétés</strong>.</li>
	<li>Changez le contenu de la case <strong>Nom</strong> à <strong>TotalItems</strong>.</li>
</ol>
<p>Puisque ce champ a été placé soit dans l'en-tête ou le pied du formulaire, il va maintenant faire la somme de tous les enregistrements de la table ou de la requête. Si ce même champ avait été placé dans la zone détail, il aurait fait la somme que d'un seul enregistrement. C'est pour cette raison qu'il était important de placer ce champ dans l'en-tête ou le pied du formulaire. Ces zones permettent d'accomplir des opérations sur tous les enregistrements au lieu d'un seul.</p>

<h2>Ajouter le calcul du sous-formulaire dans le formulaire principal</h2>
<p>Dans l'exercice précédent, nous avons ajouté un champ appelé <strong>TotalItems</strong> qui fait le total de tous les enregistrements. Il suffit maintenant de l'ajouter au formulaire <strong>Facture</strong> pour afficher le total.</p>
<p>Nous sommes maintenant de retour au formulaire <strong>Facture</strong>. Il faut ajouter une référence au champ <strong>TotalItems</strong> dans ce formulaire pour voir le total des items de cette facture.</p>
<ol class="instruction">
	<li>Ajoutez un champ en dessous du sous-formulaire en appuyant sur le bouton <img src="/assets/img/access/bt_controle_zone_texte.png" alt="bouton controle zone de texte" />.</li>
	<li>Cliquez avec le bouton <strong>droit</strong> de la souris sur le nouveau champ.</li>
	<li>Du menu contextuel, sélectionnez l'option <strong>Propriétés</strong>.</li>
	<li>Placez le pointeur dans <img src="/assets/img/access/f_source_controle.png" alt="source contrôle" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suite_active.png" alt="bouton suite activé" />&nbsp;à la droite de la case.</li>
</ol>
 <img src="/assets/img/access/f_generateur_expression1.png" alt="générateur d'expression" />
    <p>Cela va activer le générateur d'expression. Il faut spécifier à Access l'endroit où se trouve le champ <strong>TotalItems</strong>. Ce champ se retrouve dans le formulaire <strong>RFacture_items sous-formulaire</strong>.</p>
<ol class="instruction">
    <li>Dans la zone de gauche, cliquez sur le dossier <strong>Facture</strong>, puis <strong>RFacture_items sous-formulaire</strong>.</li>
	<li>Dans la zone <strong>Catégories d'expressions</strong>, double-cliquez sur le champ <strong>TotalItems</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_OK_petit.png" alt="bouton OK petit" />.</li>
	<li>Renommez le texte du champ en : <strong>Total</strong>.</li>
</ol>
 <img src="/assets/img/access/f_SousFormulaire_Facture.png" alt="sous-formulaire facture" />
<ol class="instruction">
	<li>De la barre d'outils, cliquez sur le bouton <img src="/assets/img/access/bt_affichage_mode_formulaire.png" alt="bouton affichage formulaire" />.</li>
</ol>
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode formulaire</strong>.</li>
</ol>
<p>Le total est bien là. Mais va-t-il se mettre à jour si on change une valeur ? </p>
<ol class="instruction">
	<li>Placez le pointeur dans la case quantité de la dernière ligne du sous formulaire.</li>
	<li>Changez la quantité vendue de <strong>3</strong> à <strong>4</strong>.</li>
	<li>Déplacez le pointeur vers le haut.</li>
</ol>
<p>Le total du formulaire se met à jour lorsque vous changez d'enregistrement.</p>

<h2>Les relations père-fils</h2>
<p>Il est possible que la relation entre le formulaire et le sous-formulaire ne se fasse pas. Mais vous pouvez toujours déterminer quels sont les champs en commun entre les deux tables. Le champ père est un champ qui provient du formulaire principal. Le champ fils est l'un qui se retrouve dans le sous-formulaire.</p>
 <img src="/assets/img/access/sous-formulaire_proprietes.png" alt="sous-formulaire propriétés" />
<ol class="instruction">
	<li>Sélectionnez le formulaire <strong>Facture</strong>.</li>
	<li>Passez en <strong>Mode création</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton affichage création" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
	<li>Sélectionnez le sous-formulaire.</li>
	<li>Cliquez sur le bouton <strong>droit</strong> de la souris.</li>
	<li>Du menu contextuel, sélectionnez l'option <strong>Propriétés</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>De la barre d'outils, Cliquez sur le bouton <img src="/assets/img/access/bt_proprietes.png" alt="bouton propriétés" />.</li>
</ol>
<p>L'image ci-dessus indique les propriétés du sous-formulaire incluant les cases <strong>Champs fils</strong> et <strong>Champs pères</strong> qui indiquent les champs en commun entre le sous-formulaire (fils) et le formulaire principal (père). On doit retrouver des champs en commun entre ces deux pour qu'une relation soit possible.</p>
<ol class="instruction">
	<li>Assurez-vous que le champ dans <strong>Champs fils</strong> est <strong>fact_id</strong>.</li>
	<li>Assurez-vous que le champ dans <strong>Champs pères</strong> est <strong>fact_id</strong>.</li>
	<li>Fermez la fenêtre des propriétés.</li>
</ol>


