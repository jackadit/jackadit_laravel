<?php
/**
 * BUT : solution requête 16
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:51:00
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
$sNavigation=navigation('oobase', '16', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 16</h1>
<h2>Affichez la somme de la masse salariale de la compagnie.</h2>
<pre>Utilisation de la fonction Somme (SUM)</pre>


<p>Pour l'instant, les requêtes affichaient les informations selon les critères demandés. Mais que faire lorsqu'on a besoin de trouver la somme, la moyenne ou le nombre d'enregistrements qui répondent à certains critères ?</p>
<p>C'est pour ce genre de critères qu'il existe les opérations de regroupement.</p>
<p>Il est possible avec les opérations de regrouper les enregistrements pour pouvoir les additionner, les compter, trouver la moyenne,  e plus petit, le plus grand et plusieurs autres fonctions.</p>
<p>C'est aussi l'opportunité de revoir les champs calculés pour déterminer la masse salariale de l'entreprise. </p>
<p>On utilise encore une fois un champ calculé pour déterminer le revenu (salaire + commission) de chaque employé.</p>

<div class="ok">L'opération <strong>Somme</strong> est utilisée pour l'addition de chiffres de champs de  type numérique ou de type monétaire.<br />
L'opération <strong>Nombre</strong> est utilisée pour compter le nombre d'enregistrements qui répondent aux critères sélectionnés.</div>
<p>Il est aussi à noter qu'il est impossible de mettre un  critère sous les opérations sauf pour les opérations <strong>Regroupement</strong>, <strong>Compte</strong>, <strong>Expression</strong> et <strong>Où</strong>.</p>
<p>Cette dernière sera utilisée pour <a href="/cours/qlio/oobasereq/19">la requête 19</a>.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>"Salaire" + "Commission"</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>288 000</td>
  </tr>
</table>
<p>On peut également réaliser la requête en utilisant la  fonction <strong>SUM</strong>. Voici à quoi elle ressemblerait.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>SUM("Salaire" + "Commission")</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td></td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td></td>
  </tr>
  <tr>
    <th>Ou</th>
    <td></td>
  </tr>
</table>
<p>Dans ce cas, OpenOffice Base transforme la requête en la première solution.</p>
<p>La fonction <strong>SUM</strong> est cependant plus pratique lorsqu'elle est utilisée dans un champ calculé avec d'autres fonctions.</p>
<pre>Ex : <strong>SUM("Commission" + "Salaire")/Nombre("bureau")</strong>.</pre>
<p>Cette dernière formule est l'équivalent de <strong>AVG("Salaire" + "Commission")</strong>.</p>

