<?php
/**
 * BUT : solution requête 6
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:47:00
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
$sNavigation=navigation('oobase', '6', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 6</h1>
<h2>Affichez le prénom et le nom des employés n'ayant pas la  permanence.</h2>
<pre>type logique et l'opérateur IS EMPTY</pre>

<p>Les case à cocher ont plusieurs états :</p>
<ul>
	<li>Soit cochée = <strong>1</strong>,</li>
	<li>soit non cochée = <strong>0</strong>,</li>
	<li>soit non encore utilisée = <strong>VIDE</strong> ou <strong>EMPTY</strong>.</li>
</ul>
<p>C'est-à-dire la case à cocher n'a pas été sélectionnée ou désélectionnée.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Permanence</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
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
    <td>IS EMPTY</td>
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
    <td>Marc</td>
    <td>ASSIN</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
  </tr>
</table>
<p>Il y a une caractéristique des champs de type <strong>Oui/Non</strong> qu'il est intéressant de connaître.</p>
<pre>Bien qu'il soit affiché <strong>Oui/Non</strong>, <strong>Vrai/Faux</strong> à l'écran, l'information est 
conservée dans la table sous forme numérique.<br />
OpenOffice Base inscrit <strong>0</strong> (zéro) lorsque <strong>faux</strong> et <strong>1</strong> lorsque <strong>vrai</strong>.</pre>
<p>Avec un peu d'imagination, on peut vraiment prendre avantage de cette situation.</p>

