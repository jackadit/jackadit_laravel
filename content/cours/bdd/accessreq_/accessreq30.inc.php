<?php
/**
 * solution requête 30
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   08/03/07  01:17:00  
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
$sNavigation=navigation('access', '30', 'req', 'fin');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 30</h1>
<h2>Affichez le total des ventes par clients.</h2>
<p class="notice remarque">Requête basée sur plusieurs tables reliées avec l'opération somme et un champ calculé</p>

<p>Cet exercice utilise aussi plusieurs tables reliées pour avoir le résultat voulu. Il utilise aussi l'opération <strong>Somme</strong> et un champ calculé pour déterminer le total des ventes par items.</p>
<p>C'est surtout une requête qu'un gestionnaire serait intéressé de voir. Il pourrait connaître qui sont ses meilleurs clients.</p>
<p>Voici les tables reliées et leur relations.</p>
<img src="/assets/img/access/relation_client_facture_l_fact_art_article.png" alt="tables requête 30" />
<p>Critères :</p>
<table class="table">
 <tr>
  <th class="w100p">Champ</th>
  <td>cli_nom</td>
  <td>Total: [art_qte] * [art_pu]</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Client</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Opération</th>
  <td>Regroupement</td>
  <td>Somme</td>
 </tr>
 <tr>
  <th>Tri</th>
  <td>Croissant</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Afficher</th>
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
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>Résultat :</p>
<table class="table">
 <tr>
  <th>cli_nom</th>
  <th><strong>Total</th>
 </tr>
 <tr>
  <td>AGERE Tex</td>
  <td>4 950</td>
 </tr>
 <tr>
  <td>BRICO.</td>
  <td>2 400</td>
 </tr>
 <tr>
  <td>COCHET &amp; cie.</td>
  <td>4  800</td>
 </tr>
 <tr>
  <td>DEBORD</td>
  <td>7 655</td>
 </tr>
 <tr>
  <td>MAGNE &amp; Cie</td>
  <td>8 975</td>
 </tr>
</table>

