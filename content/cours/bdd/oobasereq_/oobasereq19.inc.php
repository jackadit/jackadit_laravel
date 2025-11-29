<?php
/**
 * BUT : solution requête 19
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:52:00
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
$sNavigation=navigation('oobase', '19', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 19</h1>
<h2>Affichez la masse salariale des employés embauchés en 2003 repartis par lieu de travail.</h2>
<pre>Utilisation de la fonction Groupe et YEAR</pre>

<p>Vous avez remarqué dans les trois derniers exercices, chaque fois que vous ajoutez un champ à la requête, la réponse est plus détaillée.</p>
<p>Mais, que faire lorsqu'il faut effectuer une opération avec des critères sans détailler ceux-ci ?</p>

<p>Vous pouvez combiner plusieurs fonctions et même rajouter un critère lorsque l'on veut ajouter une condition à une requête sans pour autant détailler la réponse.</p>
<p>Pour l'exemple, le champ <strong>Embauche</strong> est utilisé pour trouver les employés qui ont été embauchés en 2003. Cependant, le revenu n'est pas affiché pour chacune des dates d'embauche de cette année.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>YEAR("Embauche")</td>
    <td>Bureau</td>
    <td>"Salaire" + "Commission"</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>&nbsp;</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Groupe</td>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>2003</td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
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
    <th>Bureau</th>
    <th>Revenus</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>22 000</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>109 000</td>
  </tr>
</table>
<p>Quelle aurait été la requête si vous aviez voulu voir le détail des revenus par bureau et par date d'embauche ?</p>

