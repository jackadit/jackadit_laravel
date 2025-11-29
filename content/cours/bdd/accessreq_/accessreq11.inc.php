<?php
/**
 * solution requête 11
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
$sNavigation=navigation('access', '11', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 11</h1>
<h2>Affichez la commission de chacun des vendeurs si on leur donne  une augmentation de 20%.</h2>
<p class="notice remarque">Champ calculé avec une constante (20%)</p>

<p>Cette requête utilise encore une fois un champ calculé.</p>
<p>Il s'agit d'une multiplication au lieu d'une addition.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Poste</td>
    <td>Ajusté : commission * 1,2</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>&nbsp;</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&quot;vendeur&quot;</td>
    <td>&nbsp;</td>
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
    <th>Ajusté</th>
  </tr>
  <tr>
    <td>51 600,00 &euro;</td>
  </tr>
  <tr>
    <td>76 800,00 &euro;</td>
  </tr>
  <tr>
    <td>26 400,00 &euro;</td>
  </tr>
  <tr>
    <td>50 400,00 &euro;</td>
  </tr>
  <tr>
    <td>25 200,00 &euro;</td>
  </tr>
</table>
<p>Il faudra formater le résultat au format <strong>Euro</strong>.</p>
<p>En exercice supplémentaire, vous pouvez essayer de corriger cette requête en ajoutant le prénom et le nom de famille des vendeurs devant leurs revenus.</p>

