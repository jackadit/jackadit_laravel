<?php
/**
 * BUT : solution requête 7
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
$sNavigation=navigation('oobase', '7', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 7</h1>
<h2>En utilisant seulement le champ commentaire, affichez le prénom et nom des gérants de l'entreprise.</h2>
<pre>Critère &quot;IS NULL&quot;</pre>

<p>Si on regarde le contenu du champ &quot;commentaire&quot;, on s'aperçoit que toutes les personnes ont un commentaire, sauf les gérants.</p>
<p>Nous pouvons donc indiquer à OpenOffice Base de rechercher les enregistrements dont le champ commentaire est vide. Pour ce faire, on peut utiliser le critère &quot;NULL&quot;.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr class="center">
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Commentaires</td>
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
    <td>IS NULL</td>
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
    <th>Commentaires</th>
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
</div>
<p>Vous remarquerez qu'une fois exécuté, la requête transforme le critère <strong>IS NULL</strong> en <strong>IS EMPTY</strong>.</p>

