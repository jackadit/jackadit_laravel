<?php
/**
 * solution requête 13
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
$sNavigation=navigation('access', '13', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 13</h1>
<h2>Affichez combien d'années de service a chaque employé de  l'entreprise.</h2>
<p class="notice remarque">Fonction année() et date()</p>

<p>Cet exercice démontre un peu mieux l'avantage des fonctions dans des champs calculés.</p>
<p>Elle montre également la fonction date courante de l'ordinateur sur lequel vous travaillez. Il devient donc facile, avec la fonction année(), de faire une soustraction pour calculer le nombre d'années de service.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>Service:Année(date())-Année([emp_embauche])</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<?php
function service($date) {
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($date), date_create($aujourdhui));
 return $diff->format('%y');
}
?>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
    <th>Service</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td><?php echo service('01/01/2002') ?></td>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
    <td><?php echo service('01/01/2002') ?></td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFERY</td>
    <td><?php echo service('01/01/2002') ?></td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td><?php echo service('05/05/2003') ?></td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td><?php echo service('01/01/2003') ?></td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
    <td><?php echo service('01/06/2003') ?></td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td><?php echo service('01/06/2003') ?></td>
  </tr>
</table>
<p>D'autres fonctions du groupe <strong>Date/Heure</strong> pourraient  vous intéresser.</p>
<p>Il y a la fonction <strong>maintenant()</strong> qui donne non seulement la date mais aussi l'heure de l'ordinateur. Donc, au lieu d'avoir juste 01/01/2003 de la fonction <strong>date()</strong>, il est possible d'avoir avec la fonction <strong>maintenant()</strong> 01/01/2003 12:00:00 .</p>
<p>Il y d'autres fonctions tel que <strong>jour(</strong>), <strong>joursem()</strong>, <strong>mois()</strong> et plusieurs autres qui sont disponibles dans la catégorie <strong>Date/Heure</strong>.</p>

<p class="notice remarque">Access nous offre <strong>148</strong> fonctions réparties dans <strong>14 </strong>catégories.</p>

<p class="notice remarque">Bien qu'Access affiche l'information sous forme de date ou d'heure, les informations sont conservées dans le logiciel sous forme  numérique.</p>
<p class="notice exemple">Ex : le chiffre 25621 équivaut au 22 février 1970. Donc  25621,5 équivaut à midi le 22 février 1970.</p>

