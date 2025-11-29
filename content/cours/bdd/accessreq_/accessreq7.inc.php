<?php
/**
 * solution requête 7
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   01/03/07  22:20:00  
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
$sNavigation=navigation('access', '7', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 7</h1>
<h2>En utilisant seulement le champ commentaire, affichez le prénom et nom des gérants de l'entreprise.</h2>
<p class="notice remarque">Critère &quot;Est Null&quot;</p>

<p>Si on regarde le contenu du champ &quot;commentaire&quot;, on s'aperçoit que toutes les personnes ont un commentaire, sauf les gérants.</p>
<p>Nous pouvons donc indiquer à Access de rechercher les enregistrements dont le champ commentaire est vide. Pour ce faire, il faut utiliser le critère &quot;Null&quot;.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_commentaires</td>
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
    <td>Est Null</td>
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
    <th>emp_commentaires</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>&nbsp;</td>
  </tr>
</table>

