<?php
/**
 * BUT : page du cours 2c
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:23:00
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




<h1>OpenOffice Base : LES TABLES (c)</h1>
<h2>Création d'une table à l'aide de l'assistant</h2>
<p>Nous désirons créer une nouvelle table <strong>Bureau</strong> que nous compléterons avec les données suivantes&nbsp;:</p>
<table  class="table" summary="Données de la table Bureaux">
 <tr>
 <th class="w100p">Bureaux</th>
 <th class="">Adresse</th>
 <th class="w100p">Ville</th>
 <th class="w60p">Code Postal</th>
 <th class="w100p">Téléphone</th>
 </tr>
 <tr>
 <td>Colmar</td>
 <td>42 rue des mégères</td>
 <td>Colmar</td>
 <td>68000</td>
 <td>0388102030</td>
 </tr>
 <tr>
 <td>Haguenau</td>
 <td>11 rue du puits</td>
 <td>Haguenau</td>
 <td>67500</td>
 <td>0388061662</td>
 </tr>
 <tr>
 <td>Strasbourg</td>
 <td>22 rue des magasins</td>
 <td>Strasbourg</td>
 <td>67000</td>
 <td>0388020301</td>
 </tr>
</table>
<p>Pour ce faire, nous allons utiliser l'assistant.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_assistant_table.png" alt="bouton assistant création de table" /> de la fenêtre principale de OpenOffice Base.</li>
</ol>
<p>OpenOffice Base nous propose une série de bases en exemple.</p>
<ol class="instruction">
	<li>Choisissez la base exemple &laquo;Employés&raquo; de la catégorie Professionnel.</li>
	<li>Sélectionnez le champ <strong>emp_poste</strong>  et cliquez sur le bouton <img src="/assets/img/oobase/bt_fleche_select.png" alt="bouton flèche sélectionner" />.</li>
	<li>Faîtes de même pour les champs <strong>AdresseBureau</strong>, <strong>Ville</strong>, <strong>CodePostal</strong> et <strong>NuméroTéléphone</strong>
</ol>
<img src="/assets/img/oobase/assistant_table1.png" alt="assistant table 1" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" /> pour définir les types et les formats de ces champs.</li>
</ol>
<img src="/assets/img/oobase/assistant_table2.png" alt="assistant table 2" />
<p class="notice remarque">Laissez tous les champs par défaut sauf le champ &laquo;NuméroTéléphone&raquo; que vous modifierez en type &laquo;Nombre [NUMERIC]&raquo;.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" /> et cochez le champ <strong>Valeur automatique</strong>.</li>
</ol>
<img src="/assets/img/oobase/assistant_table3.png" alt="assistant table 3" />
<p class="notice remarque">L'assistant va créer un champ supplémentaire qui servira de clé primaire.</p>
<img src="/assets/img/oobase/assistant_table4.png" alt="assistant table 4" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suivant1.png" alt="bouton suivant" /> et nommez la table <strong>Bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_creer.png" alt="bouton créer" />.</li>
</ol>
<p>Avant de compléter la table <strong>Bureau</strong>, nous allons ajouter un masque de saisie pour le champ <strong>NuméroTéléphone</strong>.</p>

    <h3>Insérer un masque de saisie</h3>
<p>Un masque de saisie indique à OpenOffice Base la manière dont l'information doit être affichée dans une table.</p>
<p>L'utilisateur n'à donc pas à s'occuper de cette mise en forme lors de la saisie des données.</p>
<p class="notice exemple">Ex : vous voulez séparer les numéros du numéro de téléphone par un point.
     Les masques de saisie nous assurent que les données seront saisies de la bonne manière.</p>
<p>La partie qui suit vous montre comment accéder à ces modèles.</p>
<ol class="instruction">
	<li>Placez le curseur sur le champ <strong>NuméroTéléphone</strong>.</li>
	<li>Parmi la liste de propriétés, cliquez sur <strong>Exemple de format</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_suite.png" alt="bouton suite" />.</li>
</ol>
<p>La fenêtre de formatage s'affichera.</p>
<ol class="instruction">
	<li>Cliquez sur la catégorie <strong>Défini par l'utilisateur</strong></li>
	<li>Dans le champ <strong>Description de format</strong>, saisissez <strong>00.00.00.00.00</strong></li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_modifier_commentaire.png" alt="bouton modifier le commentaire" /> et saisissez <strong>Masque numéro de téléphone</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_masque_telephone.png" alt="fenêtre masque de téléphone" />
<ol class="instruction">
	<li>Validez en cliquant sur le bouton <img src="/assets/img/oobase/bt_OK2.png" alt="bouton OK" />.</li>
</ol>
<ol class="instruction">
	<li>Finissez la saisie des données de la table <strong>Bureau</strong>.</li>
</ol>
<h2>Ajout d'enregistrements</h2> 
<ol class="instruction">
	<li>Apportez les ajouts aux enregistrements déjà créés et ajoutez les autres enregistrements à votre table.</li>
</ol>
<img src="/assets/img/oobase/tableau_7_saisies.png" alt="tableau avec 7 saisies" />
<h2>Le tri</h2>
<p>Au moment d'afficher le contenu de la table en mode <strong>Feuille de données</strong>, l'option du tri affiche les enregistrements en ordre croissant ou décroissant selon un champ.</p>
<p>Dans le mode <strong>Feuille de données</strong>, vous retrouverez dans la barre d'outils les boutons suivants&nbsp;: 
<img src="/assets/img/oobase/bt_tri_croissant.png" alt="bouton tri croissant" />&nbsp;<img src="/assets/img/oobase/bt_tri_decroissant.png" alt="bouton tri décroissant" />.</p>
<ol class="instruction">
	<li>Placez le curseur dans la colonne que vous voulez afficher en ordre croissant ou décroissant.</li>
	<li>Appuyez sur l'un des boutons pour afficher la table selon ce champ dans l'ordre que vous voulez.</li>
</ol>
<p>Tous les enregistrements seront triés selon l'ordre demandé sur le champ o&ugrave; se trouve le pointeur à ce moment.</p>

<h2>Le filtre</h2>
<p>L'option du filtre permet d'afficher seulement une partie des enregistrements : celle qui répond aux critères que vous avez déterminée auparavant. Ceci est très avantageux lorsque l'utilisateur veut retrouver rapidement quelques enregistrements parmi une grande masse de données. </p>
<p>&Agrave; partir du mode <strong>Feuille de données</strong>, vous retrouverez les boutons pour créer, activer et désactiver le filtre sur une table ou une requête: <img src="/assets/img/oobase/bt_autofiltre.png" alt="bouton autofiltre" />&nbsp;<img src="/assets/img/oobase/bt_appliquer_filtre.png" alt="bouton appliquer un filtre" />&nbsp;<img src="/assets/img/oobase/bt_filtre_standard.png" alt="bouton filtre standard" />.</p>

    <h3>Création d'un filtre</h3>
<p>Vous devez déterminer les critères de sélection. Vous pouvez choisir d'afficher seulement une partie des enregistrements; ceux qui répondent à certains critères.</p>
<ol class="instruction">
	<li>&Agrave; partir du <strong>Mode Feuille de données</strong>, Cliquez sur le bouton <img src="/assets/img/oobase/bt_filtre_standard.png" alt="bouton filtre standard" />.</li>
</ol>
<p>Une fenêtre de critères contenant les champs de la table va apparaître.</p>
<img src="/assets/img/oobase/fen_filtre_vendeur_strasbourg.png" alt="Fenêtre filtre standard" />
<p>Il ne reste qu'à mettre les critères pour afficher seulement les enregistrements qui répondent à ces conditions.</p>
<p>Pour cet exercice, nous voulons afficher seulement les vendeurs de <strong>Strasbourg</strong>.Il faudra donc deux critères : l'un pour le champ <strong>emp_poste</strong>  et l'autre pour le champ <strong>emp_bureau</strong>.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>emp_poste</strong>  dans la liste déroulante des noms de champ.</li>
	<li>Sélectionnez le signe <strong>=</strong> dans la liste déroulante des conditions.</li>
	<li>Saisissez <strong>'Vendeur'</strong> dans le champ <strong>Valeur</strong> (avec les guillemets simples).</li>
</ol>
<p class="notice remarque">Attention les critères sont sensibles à la casse.</p>
<p class="notice remarque">En cas d'ommission des guillemets, ceux-ci se mettrons automatiquement lorsque vous passer au critère suivant.</p>
<ol class="instruction">
	<li>Sélectionnez <strong>ET</strong> dans la liste déroulante de la ligne suivante.</li>
	<li>Sélectionnez <strong>emp_bureau</strong> dans la liste déroulante des noms de champ.</li>
	<li>Sélectionnez le signe <strong>=</strong> dans la liste déroulante des conditions.</li>
	<li>Saisissez <strong>'Strasbourg'</strong> dans le champ <strong>Valeur</strong> (avec les guillemets simples).</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_OK.png" alt="Bouton OK" /></li>
</ol>
<p>Nous obtenons le résultat suivant :</p>
<img src="/assets/img/oobase/filtre_vendeur_strasbourg_resultat.png" alt="Résultat du filtre vendeur-strasbourg" />
<ol class="instruction">
	<li>Pour retirer les filtres précédents, Cliquez sur le bouton <img src="/assets/img/oobase/bt_supprimer_tri-filtre.png" alt="bouton supprimer le tri ou le filtre" />.</li>
</ol>
<p class="notice exemple">Autre ex : Quelles personnes ont un salaire supérieur à 45 000 &euro; ? &Agrave; vous d'essayer.</p>

    <h3>Activer un filtre</h3>
<ol class="instruction">
	<li>Pour activer le filtre, Cliquez sur le bouton <img src="/assets/img/oobase/bt_appliquer_filtre.png" alt="bouton filtre actif" width="23" height="22" />.</li>  
</ol>
<p>OpenOffice Base va ensuite vous montrer les enregistrements qui répondent aux critères que vous avez choisi.</p>

    <h3>Désactiver un filtre</h3>
<ol class="instruction">
	<li>Ré-Cliquez sur le bouton <img src="/assets/img/oobase/bt_appliquer_filtre.png" alt="bouton filtre actif" width="23" height="22" />.</li>
</ol>

