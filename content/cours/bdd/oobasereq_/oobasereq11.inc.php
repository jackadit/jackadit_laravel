<?php
/**
 * BUT : solution requête 11
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:49:00
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
$sNavigation=navigation('oobase', '11', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 11</h1>
<h2>Affichez la commission de chacun des vendeurs si on leur donne  une augmentation de 20%.</h2>
<pre>Champ calculé avec une constante (20%)</pre>

<p>Cette requête utilise encore une fois un champ calculé.</p>
<p>Il s'agit d'une multiplication au lieu d'une addition.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Poste</td>
    <td>"Commission" * 1.2</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>Ajusté</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>&nbsp;</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&quot;Vendeur&quot;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Ajusté</th>
  </tr>
  <tr>
    <td>51 600</td>
  </tr>
  <tr>
    <td>76 800</td>
  </tr>
  <tr>
    <td>26 400</td>
  </tr>
  <tr>
    <td>50 400</td>
  </tr>
  <tr>
    <td>25 200</td>
  </tr>
</table>
<p>En exercice supplémentaire, vous pouvez essayer de corriger cette requête en ajoutant le prénom et le nom de famille des vendeurs devant leurs revenus.</p>

