<?php
/**
 * BUT : solution requête 12
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
$sNavigation=navigation('oobase', '12', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 12</h1>
<h2>Affichez le prénom et le nom des personnes embauché en 2003 sans utiliser le critère ENTRE ou <=.</h2>
<pre>Fonction YEAR([Nom du champ de type Date/Heure]).
 Montrer le générateur d'expression</pre>

<p>Il serait facile de trouver la réponse en utilisant le critère &quot;<strong>Entre</strong>&quot; (<strong>Between</strong>).</p>
<p>Cette requête vous montre ce qui est possible d'accomplir avec les fonctions d'OpenOffice Base.</p>
<p>Pour l'exercice, il faut utiliser la fonction <strong>YEAR()</strong> . Cette fonction renvoie sous forme de chiffre l'année du champ du type <strong>Date/Heure</strong> qui s'y trouve.</p>
<p>Un champ de type <strong>Date/Heure</strong> contient beaucoup  d'informations. En l'occurence l'année, le mois, le jour, l'heure, les minutes, les secondes et même les fractions de secondes y sont conservées.</p>
<p>OpenOffice Base nous offre des fonctions pour ne renvoyer que la partie des données qui nous intéresse.</p>
<pre>Ex : si le champ <strong>Date de naissance</strong> de type <strong>Date/Heure</strong> est 22-02-1970, 
la fonction <strong>YEAR([Date de naissance])</strong> renverra le chiffre <strong>1970</strong>.</pre>
<p>Le même concept s'applique à d'autres fonctions.</p>
<table class="table">
  <tr>
    <th>MONTH([champ de type Date/Heure])</th>
    <td>Chiffre de 1 à 12 ( Janvier à décembre )</td>
  </tr>
  <tr>
    <th>DAY([champ de type    Date/Heure])</th>
    <td>Chiffre de 1 à 31 ( 1er au 31e jour du mois )</td>
  </tr>
  <tr>
    <th>WEEKDAY([champ de type Date/Heure])</th>
    <td>Chiffre de 1 à 7 ( Dimanche à samedi )</td>
  </tr>
</table>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>YEAR("embauche")</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>"Année Embauche"</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2003</td>
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
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
  </tr>
</table>
<p>Bien que cette manière fonctionne, elle ne démontre pas  les possibilités des fonctions. Cet exercice a démontré qu'il est possible  d'utiliser une fonction pour un champ calculé. Mais, vous pouvez aussi utiliser  les fonctions pour les critères de votre requête.</p>

