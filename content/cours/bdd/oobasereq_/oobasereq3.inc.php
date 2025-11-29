<?php
/**
 * BUT : solution requête 3
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
$sNavigation=navigation('oobase', '3', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 3</h1>
<h2>Affichez le prénom, nom et salaire des personnes ayant un salaire supérieur à 45 000 &euro;.</h2>
<pre>=,<, ,=,<, = et type numérique</pre>
<p>Cette requête démontre les possibilités d'utiliser les  opérateurs <strong><</strong>, <strong>></strong>, <strong><=</strong>, et <strong>>=</strong> pour les  champs de type <strong>numérique</strong> ou <strong>monétaire</strong>.</p>
<p>Pour cet exercice, le  critère de recherche utilise un champ de type <strong>monétaire</strong>. Les autres  types de champs peuvent aussi être utilisés avec ces opérateurs.</p>

<p>Critères&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Nom</td>
    <td>Prenom</td>
    <td>Salaire</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>>45000</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Salaire</th>
  </tr>
  <tr>
    <td>ZIEUVAIR</td>
    <td>Bruno</td>
    <td>50000</td>
  </tr>
  <tr>
    <td>HAFEUX</td>
    <td>Pierre</td>
    <td>46000</td>
  </tr>
</table>
<pre>Faîtes attention en lisant la  question. 
Est-ce qu'on vous demande supérieur à X ou supérieur et égale à X ?  
C'est un petit piège dans lequel on tombe facilement&nbsp;!</pre>


