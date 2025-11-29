<?php
/**
 * BUT : solution requête 22
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:53:00
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
$sNavigation=navigation('oobase', '22', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 22</h1>
<h2>Déterminez le nombre de vendeurs &quot;champions&quot; ayant récolté une commission de 40 000 &euro; ou plus.</h2>
<pre>Utilisation de la fonction Nombre et d'un critère</pre>

<p>L'exercice consiste à utiliser la fonction Nombre pour connaître le nombre de personnes qui répondent aux critères mentionnés  ci-dessus. Puisque les gérants de l'entreprise n'ont pas de commissions, le champ Poste est inutile pour compter seulement les vendeurs.<br />
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Commission</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>Nombre d'employés</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>X</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Nombre</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>>=40 000</td>
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
    <th>Nombre d'employés</th>
  </tr>
  <tr>
    <td>3</td>
  </tr>
</table>

