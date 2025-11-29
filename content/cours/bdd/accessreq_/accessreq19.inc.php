<?php
/**
 * solution requête 19
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
$sNavigation = navigation('access', '19', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 19</h1>
<h2>Affichez la masse salariale des employés embauchés en 2003 repartis par lieu de travail.</h2>
<p class="notice remarque">Utilisation de l'opération Où</p>

<p>Vous avez remarqué dans les trois derniers exercices, chaque fois que vous ajoutez un champ à la requête, la réponse est plus détaillée.</p>
<p>Mais, que faire lorsqu'il faut effectuer une opération avec des critères sans détailler ceux-ci ?</p>

<p>L'opération &quot;<strong>Où</strong>&quot; est utilisée lorsqu'on veut ajouter une condition à une requête sans pour autant détailler la réponse sur cette condition.</p>
<p>Pour l'exemple, le champ <strong>emp_embauche</strong> est utilisé pour trouver les employés qui ont été embauchés en 2003. Cependant, le revenu n'est pas affiché pour chacune des dates d'embauche de cette année.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th class="w100p">Champ</th>
    <td>emp_embauche</td>
    <td>bur_nom</td>
    <td>Revenu : emp_salaire + emp_commission</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Où</td>
    <td>Regroupement</td>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>&nbsp; </td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>Entre #01-01-2003# et #31-12-2003#</td>
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
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>bur_nom</th>
    <th>Revenu</th>
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
<p>Si vous n'aviez pas utilisé l'opération &quot;<strong>Où</strong>&quot;, et laissé l'opération <strong>Regroupement </strong>pour le champ <strong>emp_embauche</strong>, le résultat aurait affiché le cumule des revenus par bureau et par date d'embauche des employés de la compagnie.</p>

