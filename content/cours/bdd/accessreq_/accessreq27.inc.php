<?php
/**
 * solution requête 27
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   08/03/07  01:17:00  
 * 
 * @author Stéphane WAHL 
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category requête
 * @access public
 * @uses
 */
$sNavigation=navigation('access', '27', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 27</h1>
<h2>Créez une requête qui affiche le prénom, le nom et la date d'embauche des employés dont le choix de l'année est laissé à l'utilisateur de la requête.</h2>
<p class="notice remarque">Requête avec entrée de valeur (requête paramétrée)</p>

<p>Contrairement aux autres requêtes où les critères de sélection étaient déterminés dans le mode de création, cette requête donne un choix à l'utilisateur en lui posant une question.</p>
<p>Cette requête va aussi vous demander d'utiliser un champ calculé avec la fonction <strong>Année()</strong> sur le champ <strong>emp_embauche</strong> de type <strong>Date/Heure</strong>.</p>
<ol class="instruction">
	<li>Créez une nouvelle requête en<strong> Mode Création</strong>.</li>
	<li>De la liste des tables et des requêtes, sélectionnez la table <strong>Employe</strong>.</li>
	<li>Sélectionnez le type de requête <strong>Sélection</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_requete_selection.png" alt="bouton requête sélection" />.</li>
	<li>De la liste des champs, sélectionnez les champs <strong>emp_prenom</strong> et <strong>emp_nom</strong>.</li>
	<li>À la droite des champs précédents sur la ligne des champs, entrez le champ calculé suivant : <strong>Année d'embauche: Année([embauche]).</strong></li>
	<li>Sur la ligne des critères sous le champ calculé <strong>Année d'embauche</strong>, entrez le texte suivant :<strong> [Quelle est l'année d'embauche ? (4 chiffres) Ex: 2003]</strong>.</li>
</ol>
<p>Voici les champs et les options pour les critères :</p>
<table class="table">
 <tr>
  <th>Champ</th>
  <td>Prénom</td>
  <td>Nom</td>
  <td>Année  d'embauche: Année([embauche])</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Employe</td>
  <td>Employe</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Tri</th>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Afficher</th>
  <td>X</td>
  <td>X</td>
  <td>X</td>
 </tr>
 <tr>
  <th>Critères</th>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>[Quelle  est l'année d'embauche ? (4 chiffres) Ex: 2003]</td>
 </tr>
</table>
<ol class="instruction">
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
	<li>Pour les besoins de l'exercice, entrez l'année <strong>2003</strong> dans la case de la valeur du paramètre.</li>
</ol>
<img src="/assets/img/access/f_valeur_parametre.png" alt="valeur du paramètre" />
<ol class="instruction">
	<li>Appuyez ensuite sur le bouton <img src="/assets/img/access/bt_ok.png" alt="bouton OK" />.</li>
</ol>
<p>Access va ensuite afficher le résultat suivant :</p>
<table class="table">
 <tr>
  <td>Paul</td>
  <td>TERGEIST</td>
  <td>2003</td>
 </tr>
 <tr>
  <td>Pierre</td>
  <td>HAFEUX</td>
  <td>2003</td>
 </tr>
 <tr>
  <td>Élie</td>
  <td>COPTAIRE</td>
  <td>2003</td>
 </tr>
 <tr>
  <td>Vincent</td>
  <td>TIME</td>
  <td>2003</td>
 </tr>
</table>
<p>Au lieu de poser une question, la requête peut chercher l'information qui vient d'un champ situé dans un formulaire. Le critère ressemblerait à ceci: <strong>[Formulaires]![Nom du formulaire]![Nom du champ]</strong>.</p>
<p>C'est de cette manière qu'on commence à créer une présentation plus &quot;formelle&quot; pour les données. Vous pouvez utiliser le générateur d'expression en appuyant sur le bouton <img src="/assets/img/access/bt_generateur_expression.png" alt="bouton générateur d'expression" />&nbsp;pour aller chercher les contrôles que vous avez besoin dans la base de données.</p>

