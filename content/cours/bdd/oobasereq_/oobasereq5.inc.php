<?php
/**
 * BUT : solution requête 5
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:46:00
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
$sNavigation=navigation('oobase', '5', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 5</h1>
<h2>Affichez le prénom et le nom des employés ayant la permanence  selon l'ordre alphabétique de nom de famille et de prénom.</h2>
<pre>type logique et tri des enregistrements</pre>

<p>Cette requête montre les possibilités d'utilisation du champ de type logique <strong>Oui/Non</strong> et la possibilité de trier le résultat de la requête.</p>
<p>Nous utiliserons le champ <strong>Permanence</strong> pour filtrer les enregistrements. Mais celui-ci ne s'affichera pas lors de la présentation de l'information.</p>
<p>Assurez-vous que la case <strong>Visible</strong> soit désactivée pour ce champ.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Permanence</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>1</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
  </tr>
</table>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
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
<pre>Rappelez-vous ! La priorité des tris va au champ trié le  plus à gauche;<br />
même si celui-ci n'est pas affiché !</pre>

