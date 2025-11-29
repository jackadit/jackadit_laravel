<?php
/**
 * BUT : solution requête 13
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:50:00
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
$sNavigation=navigation('oobase', '13', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 13</h1>
<h2>Affichez combien d'années de service a chaque employé de  l'entreprise.</h2>
<pre>Fonction YEAR() et variable CURRENT_DATE</pre>

<p>Cet exercice démontre un peu mieux l'avantage des fonctions dans des champs calculés.</p>
<p>Elle montre également la variable date courante de l'ordinateur sur lequel vous travaillez. Il devient donc facile, avec la fonction YEAR(), de faire une soustraction pour calculer le nombre d'années de service.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>YEAR(CURRENT_DATE)-YEAR("Embauche")</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Service</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat&nbsp; en 2009 :</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Service</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFERY</td>
    <td>7</td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>6</td>
  </tr>
</table>
<p>D'autres fonctions de type <strong>Date/Heure</strong> pourraient  vous intéresser.</p>
<p>Il y a la fonction <strong>NOW()</strong> qui donne non seulement la date mais aussi l'heure de l'ordinateur. Donc, au lieu d'avoir juste 01/01/2003 de la variable <strong>CURRENT_DATE</strong>, il est possible d'avoir avec la fonction <strong>NOW()</strong> 01/01/2003 12:00:00 .</p>
<p>Parmi les plus usitées notons <strong>DAY(</strong>), <strong>WEEKDAY()</strong>, <strong>MONTH()</strong>...</p>
<p>Bien qu'OpenOffice Base affiche l'information sous forme de date ou d'heure, les informations sont conservées dans le logiciel sous forme  numérique.</p>
<pre>Ex : le chiffre 25621 équivaut au 22 février 1970. Donc  25621,5 équivaut à midi le 22 février 1970.</pre>

