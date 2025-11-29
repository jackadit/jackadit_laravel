<?php
/**
 * solution requête 6
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
$sNavigation=navigation('access', '6', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 6</h1>
<h2>Affichez le prénom et le nom des employés n'ayant pas la  permanence.</h2>
<p class="notice remarque">type logique et l'opérateur Pas</p>

<p>Il serait facile de simplement mettre le critère <strong>Non</strong> sous le champ permanence. Mais cet exemple est surtout utilisé pour démontrer  l'opérateur <strong>Pas</strong>. Celui-ci affiche toutes les informations sauf ceux que  vous avez sélectionnés. Dans ce cas, il affichera tous ceux qui sont différents  de <strong>oui</strong>. Donc, la seule possibilité est <strong>non</strong>.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_permanence</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>&nbsp; </td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp; </td>
    <td>&nbsp; </td>
    <td>Pas oui</td>
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
    <th>emp_prenom</th>
    <th>emp_nom</th>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
  </tr>
</table>
<p>Un autre exemple serait d'afficher tous les employés sauf ceux de Strasbourg.</p>
<p>Il y a une caractéristique des champs de type <strong>Oui/Non</strong> qu'il est intéressant de connaître.</p>
<p class="notice remarque">Bien qu'il soit affiché <strong>Oui/Non</strong>, <strong>Vrai/Faux</strong> à l'écran, l'information est 
conservée dans la table sous forme numérique.<br />
Access inscrit <strong>0</strong> (zéro) lorsque <strong>faux</strong> et <strong>-1</strong> lorsque <strong>vrai</strong>.</p>
<p>Avec un peu d'imagination, on peut vraiment prendre avantage de cette  situation.</p>

