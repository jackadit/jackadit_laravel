<?php
/**
 * solution requête 20
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
$sNavigation=navigation('access', '20', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 20</h1>
<h2>Affichez le nombre de personnes pour l'entreprise par lieu de travail et par occupation.</h2>
<p class="notice remarque">Utilisation de l'opération Compte</p>


<p>Cet exercice est pour vous démontrer le fonctionnement de l'opération <strong>Compte</strong>.</p>
<p>Cette opération, comme le nom l'indique, compte le  nombre d'enregistrements qui répondent aux critères demandés.</p>
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>

<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>bur_nom</td>
    <td>emp_poste</td>
    <td>emp_prenom</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Regroupement</td>
    <td>Compte</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>bur_nom</th>
    <th>emp_poste</th>
    <th>CompteDeemp_prenom</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Gérant</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Vendeur</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Gérant</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Vendeur</td>
    <td>2</td>
  </tr>
</table>

