<?php
/**
 * BUT : solution requête 15
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:51:00
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
$sNavigation=navigation('oobase', '15', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 15</h1>
<h2>Affichez la commission des vendeurs si on donnait une prime de 5 000 &euro; aux vendeurs ayant une commission de 45 000 &euro; ou plus.</h2>
<pre>Fonction CASEWHEN(condition,'si vrai','si faux') dont le résultat est un chiffre</pre>


<p>C'est dans ce genre de situation que la fonction <strong>CASEWHEN()</strong>  est vraiment avantageuse. Elle s'applique seulement si les conditions requises sont remplies.</p>
<p>Dans l'exercice précédent, la fonction <strong>CASEWHEN()</strong> était utilisée  avec du texte. Ici la fonction est utilisée pour calculer un chiffre.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Poste</td>
    <td>CASEWHEN("Commission">= 45000, "Commission"+5000, "Commission")</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Ajusté</td>
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
    <td>&nbsp;</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>'Vendeur'</td>
    <td>&nbsp;</td>
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
    <th>Ajusté</th>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
    <td>43 000</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFERY</td>
    <td>69 000</td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>23 000</td>
  </tr>
  <tr>
    <td>Elie</td>
    <td>COPTAIRE</td>
    <td>42 000</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>21 000</td>
  </tr>
</table>
<p>Pouvez-vous préparer une requête qui montrerait la  différence entre la masse salariale avec et sans cette prime ?</p>
<p> Vous  devriez être capable si vous avez bien compris les exercices précédents.</p>

