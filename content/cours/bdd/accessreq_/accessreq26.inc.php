<?php
/**
 * solution requête 26
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   02/03/07  15:52:00  
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
$sNavigation=navigation('access', '26', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 26</h1>
<h2>Supprimer tous les employés dont le nom de famille est ASSIN.</h2>
<p class="notice remarque">Requête suppression</p>

<p>Il s'agit ici d'une requête d'action de type suppression. Celle-ci supprime tous les enregistrements de la table qui répondent aux critères que vous sélectionnez.</p>
<ol class="instruction">
	<li>Créez une nouvelle en <strong>Mode Création</strong>.</li>
	<li>De la liste des tables et des requêtes, sélectionnez la table <strong>Employe</strong>.</li>
	<li>Sélectionnez le type de requête de type <strong>Suppression</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_requete_suppression.png" alt="bouton requête suppression" />.</li>
	<li>Sélectionnez le champ <strong>emp_nom</strong>.</li>
	<li>Au critère sous le champ <strong>emp_nom</strong>, entrez le texte : <strong>ASSIN</strong>.</li>
<p>Voici la représentation des options choisies pour cette requête.</p>
<table class="table">
 <tr>
  <th>Champ</th>
  <td>Nom</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Employe</td>
 </tr>
 <tr>
  <th>Supprimer</th>
  <td>Où</td>
 </tr>
 <tr>
  <th>Critères</th>
  <td>ASSIN</td>
 </tr>
</table>
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton executer" />.</p>
<img src="/assets/img/access/f_req26.png" alt="supprimer un enregistrement" />
<p>Access vous demande de confirmer la suppression des enregistrements qui répondent aux critères sélectionnés.</p>
<ol class="instruction">
	<li>Pour les besoins des exercices, conservez les enregistrements en sélectionnant l'option <strong>Non</strong>.</li>
</ol>
<p class="notice remarque">Il vous est aussi possible de créer une requête de suppression qui utilise plusieurs critères et plusieurs champs.</p>

<p class="notice remarque">Avant de supprimer des enregistrements, vous pouvez vérifier si vos critères répondent à vos besoins.
Au lieu de choisir une requête de type <strong>Suppression</strong>, sélectionnez une requête de type <strong>Sélection</strong>.</p>

<p>Vous pourrez ensuite afficher les enregistrements avec les critères de votre choix et vous assurer d'avoir choisi les bons enregistrements.</p>
<p>Si vous avez les bons enregistrements, vous pouvez changer le type de requête à une requête <strong>Suppression </strong>et l'exécuter. </p>
<p>Cette possibilité est très avantageuse pour éviter des erreurs de perte de données et de perte de temps pour retranscrire les données.</p>

