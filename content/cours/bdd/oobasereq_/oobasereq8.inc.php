<?php
/**
 * BUT : solution requête 8
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:48:00
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
$sNavigation=navigation('oobase', '8', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 8</h1>
<h2>Affichez le nom ainsi que la commission des vendeurs de Haguenau.</h2>
<pre>Multi-Critères</pre>

<p>Cette requête démontre la possibilité d'utiliser plusieurs critères en même temps et celle de cacher certains champs.</p>
<p>Vous pouvez combiner plusieurs critères en même temps si ceux-ci sont sur la même ligne de critère.</p>
<p>Si les critères sont sur des lignes différentes, c'est équivalent à afficher le résultat de deux recherches différentes.</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Nom</td>
    <td>Poste</td>
    <td>Bureau</td>
    <td>Commission</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>croissant</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&quot;Vendeur&quot;</td>
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
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Nom</th>
	<th>Commission</th>
  </tr>
  <tr>
    <td>ASSIN</td>
	<td>43 000 &euro;</td>
  </tr>
  <tr>
	<td>TERGEIST</td>
	<td>22 000 &euro;</td>
  </tr>
  <tr>
    <td>ZETAUFREY</td>
	<td>64 000 &euro;</td>
  </tr>
</table>

