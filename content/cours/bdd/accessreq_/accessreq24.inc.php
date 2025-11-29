<?php
/**
 * solution requête 24
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
$sNavigation=navigation('access', '24', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 24</h1>
<h2>Utilisez une requête d'analyse croisée pour déterminer le nombre d'employés par statut social et lieu de travail ayant la permanence.</h2>
<p class="notice remarque">Requête d'analyse croisée et l'opération <strong>Compte</strong> avec un critère</p>

<p>Cet exercice démontre qu'il est possible d'avoir une  analyse croisée qui utilise l'opération <strong>Compte</strong> et des critères. Au lieu d'avoir  un tableau contenant tous les employés, cette analyse aura seulement les  employés ayant la permanence dans l'entreprise.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>bur_nom</td>
    <td>emp_statut</td>
    <td>emp_commission</td>
    <td>emp_permanence</td>
  </tr>
  <tr>
    <th>Table</th>
    <td>Bureau</td>
    <td>Employe</td>
    <td>Employe</td>
    <td>Employe</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Regroupement</td>
    <td>Compte</td>
    <td>Regroupement</td>
  </tr>
  <tr>
    <th>Analyse</th>
    <td>En-tête de colonne</td>
    <td>En-tête de ligne</td>
    <td>Valeur</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Oui</td>
  </tr>
</table>
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</p>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>emp_statut</th>
    <th>Haguenau</th>
    <th>Strasbourg</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>1</td>
  </tr>
  <tr>
    <td>2</td>
    <td>1</td>
    <td>1</td>
  </tr>
</table>
<p>Il y a cinq personnes parmi la liste qui ont la  permanence; trois à Haguenau et deux à Strasbourg. Avec la description des  nombres, on sait qu'il y a trois célibataires (1) et deux personnes mariées (2).</p>

