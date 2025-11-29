<?php
/**
 * solution requête 9
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   01/03/07  22:31:00
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
$sNavigation = navigation('access', '9', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 9</h1>
<h2>Affichez le prénom, nom et occupation des vendeurs de Haguenau  et de Strasbourg.</h2>
<p class="notice remarque">Utilisation de la fonction <strong>Ou</strong></p>

<p>Attention ! Il y a un piège dans la question.</p>
<p>Il s'agit d'une question de logique. Posez-vous la  question : pouvez-vous être à <strong>Haguenau</strong> <strong>ET</strong> à <strong>Strasbourg</strong> en même temps ? Non. Mais vous pouvez être à l'un <strong>OU</strong> l'autre.</p>
<p>Il s'agit juste  d'interpréter correctement la question qui vous est présentée. Ce n'est pas  toujours aussi simple que cela.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_poste</td>
    <td>emp_bureau</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Vendeur</td>
    <td>"Haguenau"</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Vendeur</td>
    <td>"Strasbourg"</td>
  </tr>
</table>
<p>Vous pourriez aussi répondre à cette question de cette  manière :</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_poste</td>
    <td>emp_bureau</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Vendeur</td>
    <td>"Haguenau" Ou "Strasbourg"</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
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
    <th>emp_poste</th>
    <th>emp_bureau</th>
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
    <td>Élie</td>
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
<p>Cette question démontre qu'il est possible de combiner des critères sous forme <strong>ET</strong> et <strong>OU</strong>.</p>
<p>Les critères sur une même ligne sont ajoutés (<strong>ET</strong>) l'un à l'autre.</p>
<p>Les critères qui sont sur une ligne différente offrent une autre possibilité pour chercher de l'information (<strong>OU</strong>).</p>

