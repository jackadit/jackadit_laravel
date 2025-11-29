<?php
/**
 * BUT : solution requête 9
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:48:00
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
$sNavigation=navigation('oobase', '9', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 9</h1>
<h2>Affichez le prénom, nom et activité des vendeurs de Haguenau  et de Strasbourg.</h2>
<pre>Utilisation de la fonction <strong>Ou</strong></pre>

<p>Attention ! Il y a un piège dans la question.</p>
<p>Il s'agit d'une question de logique. Posez-vous la  question : pouvez-vous être à <strong>Haguenau</strong> <strong>ET</strong> à <strong>Strasbourg</strong> en même temps ? Non. Mais vous pouvez être à l'un <strong>OU</strong> l'autre.</p>
<p>Il s'agit juste  d'interpréter correctement la question qui vous est présentée. Ce n'est pas  toujours aussi simple que cela.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Poste</td>
    <td>Bureau</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>'Vendeur'</td>
    <td>'Haguenau'</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>'Vendeur'</td>
    <td>'Strasbourg'</td>
  </tr>
</table>
<p>Vous pourriez aussi répondre à cette question de cette  manière&nbsp;:</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Poste</td>
    <td>Bureau</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>'Vendeur'</td>
    <td>'Haguenau' or 'Strasbourg'</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
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
    <th>Poste</th>
    <th>Bureau</th>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
    <td>vendeur</td>
    <td>Haguenau</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFERY</td>
    <td>vendeur</td>
    <td>Haguenau</td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>vendeur</td>
    <td>Haguenau</td>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
    <td>vendeur</td>
    <td>Strasbourg</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>vendeur</td>
    <td>Strasbourg</td>
  </tr>
</table>
<p>Cette question démontre qu'il est possible de combiner des critères dans un même champ sur une même ligne. Il faudra donc ajouter le critère <strong>OR</strong>.</p>
<p>D'une façon plus générale, les critères sur une même ligne sont ajoutés (<strong>ET</strong>) l'un à l'autre.</p>
<p>Les critères qui sont sur une ligne différente offrent une autre possibilité pour chercher de l'information (<strong>OU</strong>).</p>

