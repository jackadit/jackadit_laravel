<?php
/**
 * BUT : solution requête 4
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
$sNavigation=navigation('oobase', '4', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 4</h1>
<h2>Affichez le prénom et le nom des personnes embauchées en 2003.</h2>
<pre>BETWEEN et type Date</pre>

<p>Pour cette requête nous pourrions être tenté d'utiliser les opérateurs <strong>>=</strong>, et <strong><=</strong>.</p>
<p>Mais pour cet exercice, nous allons utiliser l'opérateur &quot;<strong>BETWEEN</strong>&quot;.</p>
<pre>Remarquez les &quot;<strong>#</strong>&quot; devant et après la date. Si vous ne les mettez pas, 
OpenOffice Base va les écrire pour  vous.
C'est pour identifier que le champ <strong>Embauche</strong> est de type <strong>Date/Heure</strong>.</pre>
<p>Critères&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Embauche</td>
	<td>Embauche</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
	<td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>>=#2003/01/01#</td>
	<td><=#2003/12/31#</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
  </tr>
</table>
<p>Avec le critère <strong>Between</strong> :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Embauche</td>
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
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>BETWEEN #2003/01/01# AND #2003/12/31#</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat&nbsp;:</p>
<table  class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Embauche</th>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>05/05/2003</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>01/01/2003</td>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
    <td>01/06/2003</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>01/06/2003</td>
  </tr>
</table>
<pre>Attention, il se peut que le format de la date soit différent. 
Le format date dépend des options sélectionnées dans Windows et OpenOffice Base. 
Vous devrez probablement mettre l'année devant le mois et le jour.</pre> 
<ol class="instruction">
	<li>Faites quelques essais en changeant l'ordre de l'année, du mois et de la journée.</li>
</ol>

