<?php
/**
 * BUT : solution requête 30
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:55:00
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
$sNavigation=navigation('oobase', '30', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 30</h1>
<h2>Affichez le total des ventes par clients.</h2>
<pre>Requête basée sur plusieurs tables reliées avec l'opération somme et
 un champ calculé</pre>

<p>Cet exercice utilise aussi plusieurs tables reliées pour avoir le résultat voulu. Il utilise aussi l'opération <strong>Somme</strong> et un champ calculé pour déterminer le total des ventes par items.</p>
<p>C'est surtout une requête qu'un gestionnaire serait intéressé de voir. Il pourrait connaître qui sont ses meilleurs clients.</p>
<p>Voici les tables reliées et leur relations.</p>
<img src="/assets/img/oobase/requete30.png" alt="tables requête 30" />
<p>Critères&nbsp;:</p>
<table class="table">
 <tr>
  <th>Champ</th>
  <td>Nom</td>
  <td>Total: Quantité * [prix unitaire]</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Clients</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Fonction</th>
  <td>Groupe</td>
  <td>Somme</td>
 </tr>
 <tr>
  <th>Tri</th>
  <td>Croissant</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Visible</th>
  <td>X</td>
  <td>X</td>
 </tr>
 <tr>
  <th>Critères</th>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
</table>
<ol class="instruction">
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter" />.</li>
</ol>
<p>Résultat&nbsp;:</p>
<table class="table">
 <tr>
  <th>Nom</th>
  <th><strong>Total</th>
 </tr>
 <tr>
  <td>AGERE Tex</td>
  <td>4 950,00 &euro;</td>
 </tr>
 <tr>
  <td>BRICO.</td>
  <td>2 400,00 &euro;</td>
 </tr>
 <tr>
  <td>COCHET &amp; cie.</td>
  <td>4  800,00 &euro;</td>
 </tr>
 <tr>
  <td>DEBORD</td>
  <td>6 155,00 &euro;</td>
 </tr>
 <tr>
  <td>MAGNE &amp; Cie</td>
  <td>8 975,00 &euro;</td>
 </tr>
</table>

