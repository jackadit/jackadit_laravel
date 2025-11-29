<?php
/**
 * solution requête 15
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
$sNavigation=navigation('access', '15', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 15</h1>
<h2>Affichez la commission des vendeurs si on donnait une prime de 5 000 &euro; aux vendeurs ayant une commission de 45 000 &euro; ou plus.</h2>
<p class="notice remarque">Fonction VraiFaux(condition; si vrai; si faux) dont le résultat est un chiffre</p>


<p>C'est dans ce genre de situation que la fonction <strong>VraiFaux()</strong>  est vraiment avantageuse. Elle s'applique seulement si les conditions requises  sont remplies.</p>
<p>Dans l'exercice précédent, la fonction <strong>VraiFaux()</strong> était utilisée  avec du texte. Ici la fonction est utilisée pour calculer un chiffre.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>Ajusté:vraifaux([emp_commission]&gt;= 45000;[emp_commission]+5000;[emp_commission])</td>
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
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
    <th>Ajusté</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>0</td>
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
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
    <td>42 000</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>21 000</td>
  </tr>
</table>
<p>Pouvez-vous préparer une requête qui montrerait la  différence par rapport à la masse salariale avec et sans cette prime ?</p>
<p> Vous  devriez être capable si vous avez bien compris les exercices précédents.</p>

