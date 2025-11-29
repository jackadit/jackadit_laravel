<?php
/**
 * solution requête 3
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
$sNavigation = navigation('access', '3', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 3</h1>
<h2>Affichez le prénom, nom et salaire des personnes ayant un salaire supérieur à 45 000 &euro;.</h2>
<p class="notice remarque">&lt;, &gt;, &lt;=, &gt;= et type numérique</p>

<p>Cette requête démontre les possibilités d'utiliser les  opérateurs <strong>&lt;</strong>, <strong>&gt;</strong>, <strong>&lt;=</strong>, et <strong>&gt;=</strong> pour les  champs de type <strong>numérique</strong> ou <strong>monétaire</strong>.</p>
<p>Pour cet exercice, le  critère de recherche utilise un champ de type <strong>monétaire</strong>. Les autres  types de champs peuvent aussi être utilisés avec ces opérateurs.</p>

<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_salaire</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&gt;45000</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
    <th>emp_salaire</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>50000</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>46000</td>
  </tr>
</table>
<p class="notice remarque">Faîtes attention en lisant la  question.
Est-ce qu'on vous demande supérieur à X ou supérieur et égal à X ?
C'est un petit piège dans lequel on tombe facilement !</p>


