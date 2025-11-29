<?php
/**
 * solution requête 22
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
$sNavigation=navigation('access', '22', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 22</h1>
<h2>Déterminez le nombre de vendeurs &quot;champions&quot; ayant récolté une commission de 40 000 &euro; ou plus.</h2>
<p class="notice remarque">Utilisation des opérations Compte et Où</p>

<p>L'exercice consiste à utiliser l'opération Compte pour  connaître le nombre de personnes qui répondent aux critères mentionnés  ci-dessus. Cet exercice ressemble beaucoup à <a href="/cours/qlio/accessreq/19">l'exercice 19</a>.  La différence est que cet exercice utilise l'opération Compte au lieu de  l'opération Somme. Puisque les gérants de l'entreprise n'ont pas de  commissions, le champ Poste est inutile pour compter seulement les vendeurs.<br />
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>
<p>Critère :</p>
<table class="table">
  <tr>
    <th class="w100p">Champ</th>
    <td>Nombre:emp_prénom</td>
    <td>emp_commission</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Compte</td>
    <td>Où</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&gt;=40    000</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>Nombre</th>
  </tr>
  <tr>
    <td>3</td>
  </tr>
</table>

