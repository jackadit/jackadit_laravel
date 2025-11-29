<?php
/**
 * BUT : solution requête 17
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
$sNavigation=navigation('oobase', '17', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 17s</h1>
<h2>Affichez la somme de la masse salariale de la compagnie par activité.</h2>
<pre>Utilisation des fonctions <strong>Somme</strong> et <strong>Groupe</strong>.</pre>

<p>Il s'agit encore une fois d'une requête qui a besoin d'une fonction. Il faut cependant un champ de plus pour avoir le détail nécessaire. Dans ce cas, il faut ajouter le champ bureau pour pouvoir répartir les revenus  par poste.</p>

<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Poste</td>
    <td>"Salaire" + "Commission"</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <th>Poste</th>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Gérant</td>
    <td>96 000</td>
  </tr>
  <tr>
    <td>Vendeur</td>
    <td>192 000</td>
  </tr>
</table>
<p>La masse salariale de l'entreprise est maintenant réparti selon le poste de travail: gérant ou vendeur.</p>
<p>Pour l'exemple, il y a seulement deux postes. S'il y en avait eu plus, chaque poste aurait été affiché avec son revenu équivalent.</p>

