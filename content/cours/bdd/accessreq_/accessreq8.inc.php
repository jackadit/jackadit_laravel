<?php
/**
 * solution requête 8
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   01/03/07  22:31:00  
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
$sNavigation=navigation('access', '8', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 8</h1>
<h2>Affichez la commission du vendeur ASSIN de Haguenau.</h2>
<p class="notice remarque">Critère &quot;Est Null&quot;</p>

<p>Cette requête démontre la possibilité de cacher des champs ainsi que la possibilité d'utiliser plusieurs critères en même temps et donc plusieurs tables (en l'occurence les tables <strong>Employe</strong> et <strong>Bureau</strong>).</p>
<p>Vous pouvez combiner plusieurs critères en même temps si ceux-ci sont sur la même ligne de critère.</p>
<p>Si les critères sont sur des lignes différentes, c'est  équivalent à afficher le résultat de deux recherches différentes.</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_poste</td>
    <td>emp_nom</td>
    <td>bureau_nom</td>
    <td>emp_commission</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&quot;Vendeur&quot;</td>
    <td>&quot;ASSIN&quot;</td>
    <td>&quot;Haguenau&quot;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>Commission</th>
  </tr>
  <tr>
    <td>43 000 &euro;</td>
  </tr>
</table>

