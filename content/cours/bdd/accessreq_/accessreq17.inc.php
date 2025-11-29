<?php
/**
 * solution requête 17
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
$sNavigation=navigation('access', '17', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 17</h1>
<h2>Affichez la somme de la masse salariale de la compagnie par occupation.</h2>
<p class="notice remarque">Utilisation de l'opération <strong>Somme</strong> sur plusieurs critères.</p>

<p>Il s'agit encore une fois d'une requête qui a besoin d'une  opération. Il faut cependant un champ de plus pour avoir le détail nécessaire.  Dans ce cas, il faut ajouter le champ bureau pour pouvoir répartir les revenus  par poste.</p>
<ol class="instruction">
	<li>De  la barre d'outils, Cliquez sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_poste</td>
    <td class="w300p">Revenu : emp_salaire + emp_commission</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
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
    <th>Poste</th>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Gérant</td>
    <td>96 000</td>
  </tr>
  <tr>
    <td>Vendeur</td>
    <td>192 000</td>
  </tr>
</table>
<p>La masse salariale de l'entreprise est maintenant réparti selon le poste de travail: gérant ou vendeur.</p>
<p>Pour l'exemple, il y a seulement deux postes. S'il y en avait eu plus, chaque poste aurait été affiché avec son revenu équivalent.</p>

