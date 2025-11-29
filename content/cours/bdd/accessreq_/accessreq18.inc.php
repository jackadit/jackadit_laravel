<?php
/**
 * solution requête 18
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   02/03/07  10:11:00  
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
$sNavigation=navigation('access', '18', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 18</h1>
<h2>Affichez la somme de la masse salariale de la compagnie par lieu de travail et par poste.</h2>
<p class="notice remarque">Utilisation de l'opération somme sur plusieurs critères</p>


<p>Il s'agit aussi d'une requête qui a besoin d'une opération<strong> (somme)</strong>. Il faut ajouter les champs <strong>bur_nom</strong> et <strong>emp_poste</strong>  en plus  de calculer les revenus.</p>
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>

<p>Critère :</p>
<table class="table">
  <tr>
    <th class="w100p">Champ</th>
    <td>bur_nom</td>
    <td>emp_poste</td>
    <td>Revenu : emp_salaire + emp_commission</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Regroupement</td>
    <td>Somme</td>
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
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Gérant</td>
    <td>50 000</td>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Vendeur</td>
    <td>129 000</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Gérant</td>
    <td>46 000</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Vendeur</td>
    <td>63 000</td>
  </tr>
</table>
<p>Plus vous ajoutez de champs, plus la réponse sera détaillée.</p>

