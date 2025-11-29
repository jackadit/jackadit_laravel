<?php
/**
 * BUT : solution requête 24
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:54:00
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
$sNavigation=navigation('oobase', '24', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 24</h1>
<h2>Déterminer le nombre d'employés par statut social et lieu de travail ayant la permanence.</h2>
<pre>Fonction <strong>Nombre</strong> et <strong>Groupe</strong> avec un critère</pre>

<p>Cet exercice démontre qu'il est possible d'avoir une  analyse croisée qui utilise la fonction <strong>Nombre</strong> et des critères. Au lieu d'avoir  un tableau contenant tous les employés, cette analyse aura seulement les  employés ayant la permanence dans l'entreprise.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Bureau</td>
    <td>Statut</td>
    <td>Commission</td>
    <td>Permanence</td>
  </tr>
  <tr>
    <th>Table</th>
    <td>Employés</td>
    <td>Employés</td>
    <td>Employés</td>
    <td>Employés</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Groupe</td>
    <td>Nombre</td>
    <td>Groupe</td>
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
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter" />.</p>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Bureau</th>
    <th>Statut</th>
    <th>COUNT("Commission")</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>1</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Haguenau</td>
	<td>2</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
	<td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
	<td>2</td>
    <td>1</td>
  </tr>
</table>

<p>Il y a cinq personnes parmi la liste qui ont la  permanence; trois à Haguenau et deux à Strasbourg. Avec la description des  nombres, on sait qu'il y a trois célibataires (1) et deux personnes mariées (2).</p>
<p>Pour obtenir le tableau croisé suivant, vous devez exporter ces données vers <strong>Calc</strong> et procéder à une analyse croisée. Ceci se fait par l'intermédiaire de la commande <strong>Pilote de données</strong>.
<table class="table">
  <tr>
    <th>Statut social</th>
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

