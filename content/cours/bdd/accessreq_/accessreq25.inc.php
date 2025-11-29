<?php
/**
 * solution requête 25
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
$sNavigation=navigation('access', '25', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 25</h1>
<h2>Changer le lieu de travail des employés de Strasbourg à Mulhouse.</h2>
<p class="notice remarque">Requête Mise à jour</p>

<p>Il arrive souvent après l'entré des données initiales qu'il y ait des corrections de données massives. Vous pouvez toujours changer manuellement le contenu des champs. Mais, vous pouvez aussi, avec la requête de type <strong>Mise à jour</strong>, changer le contenu d'un champ plus rapidement et efficacement et sans avoir à s'inquiéter des erreurs d'orthographe.</p>
<p>Contrairement à une requête de type <strong>Sélection</strong> ou de type <strong>Analyse croisée</strong>, une requête d'action modifie le contenu d'une table selon les critères que vous avez choisis.</p>
<p>Dans notre exemple, cela consiste à modifier le contenu du champ <strong>emp_bur_id</strong> à <strong>Mulhouse</strong> (cette ville est à créer dans la table <strong>Bureau</strong>, elle aura comme id=4) pour tous les enregistrements dont le contenu est actuellement <strong>Strasbourg</strong> (id=2).</p>
<ol class="instruction">
    <li>Dans la table <strong>Bureau</strong>, saisissez un nouvel enregistrement pour la ville de Mulhouse.</li>
	<li>Créez une nouvelle requête en <strong>Mode Création</strong>.</li>
	<li>De la liste des tables et requêtes, sélectionnez la table <strong>Employe</strong>.</li>
	<li>Sélectionnez le type de requête <strong>Mise à jou</strong>r en appuyant sur le bouton <img src="/assets/img/access/bt_mise_a_jour.png" alt="bouton requête mise à jour" />.</li>
	<li>De la liste des champs, sélectionnez le champ <strong>emp_bur_id</strong>.</li>
	<li>À la ligne <strong>Mise à jour</strong> sous le champ <strong>emp_bur_id</strong>, saisissez : <strong>4</strong>.</li>
	<li>À la ligne des critères sous le champ <strong>emp_bur_id</strong>, saisissez : <strong>2</strong>.</li>

    <table class="table">
 <tr>
  <th>Champ</th>
  <td>emp_bur_id</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Employe</td>
 </tr>
 <tr>
  <th>Mise à jour</th>
  <td>4</td>
 </tr>
 <tr>
  <th>Critères</th>
  <td>2</td>
 </tr>
</table>
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</p>
<img src="/assets/img/access/f_req25.png" alt="requête mise à jour" />
<p>Access va vous demander une dernière fois de confirmer la modification à la table de la base de données.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ok.png" alt="bouton OK" /> pour confirmer la modification.</li>
</ol>
<p class="notice remarque">Vous pouvez aussi créer une requête de type <strong>Mise à jour</strong> en utilisant plusieurs champs pour les critères de sélection
 ou pour la mise à jour. Vous pouvez aussi inverser cette opération en changeant de place Strasbourg et Mulhouse 
 dans la grille des critères.</p>
<p>Il vous est aussi possible de vérifier si les enregistrements à modifier répondent tous aux critères que vous avez sélectionnés avant la mise à jour.</p>
<p>Utilisez le type de requête <strong>Sélection</strong> pour afficher les enregistrements avec les critères de votre choix. Une fois que vous êtes satisfait des enregistrements devant être modifiés, changez le type de requête de <strong>Sélection</strong> à <strong>Mise à jour</strong>.</p>

