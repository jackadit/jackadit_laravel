<?php
/**
 * BUT : solution requête 18
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:52:00
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
$sNavigation=navigation('oobase', '18', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 18</h1>
<h2>Affichez la somme de la masse salariale de la compagnie par lieu de travail et par poste.</h2>
<pre>Utilisation des fonctions SOMME et GROUPE</pre>


<p>Il s'agit aussi d'une requête qui a besoin d'une fonction <strong>SOMME</strong>. Il faut ajouter les champs <strong>Bureau</strong> et <strong>Poste</strong> en plus  de calculer les revenus.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Bureau</td>
    <td>Poste</td>
    <td>"Salaire" + "Commission"</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Groupe</td>
    <td>Somme</td>
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
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Bureau</th>
    <th>Poste</th>
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

