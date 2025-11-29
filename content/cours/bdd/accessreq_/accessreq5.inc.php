<?php
/**
 * solution requête 5
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   28/02/07  23:20:00  
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
$sNavigation=navigation('access', '5', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 5</h1>
    <h2>Affichez le prénom et le nom des employés ayant la permanence selon l'ordre alphabétique de nom de famille et de prénom.</h2>
<p class="notice remarque">type logique et tri des enregistrements</p>

<p>Cette requête montre les possibilités d'utilisation du champ de type logique <strong>Oui/Non</strong> et la possibilité de trier le résultat de la requête.</p>
<p>Nous utiliserons le champ <strong>emp_permanence</strong> pour filtrer les enregistrements. Mais celui-ci ne s'affichera pas lors de la présentation de l'information.</p>
<p>Assurez-vous que la case <strong>Afficher</strong> soit désactivée pour ce champ.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_nom</td>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_permanence</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>&nbsp; </td>
    <td>X</td>
    <td>X</td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>Oui</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFREY</td>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
  </tr>
</table>
<p class="notice remarque">Rappelez-vous ! La priorité des tris va au champ trié le  plus à la gauche, même si celui-ci n'est pas affiché !</p>

