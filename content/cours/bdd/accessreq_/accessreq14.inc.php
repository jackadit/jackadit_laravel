<?php
/**
 * solution requête 14
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
$sNavigation=navigation('access', '14', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 14</h1>
<h2>Affichez à côté du prénom et du nom des employés de l'entreprise le texte &quot;champion&quot; pour ceux qui ont une commission de  45 000 &euro; ou plus. Placez le texte &quot;Désolé&quot; à côte de ceux qui ne répondent pas au critère précédent.</h2>
<p class="notice remarque">Fonction Vraifaux(condition;si vrai;si faux) dont le résultat est du texte</p>

<p>Cet exercice utilise la fonction Vraifaux pour afficher du texte.</p>
<p>Elle fonctionne sur le même principe que la fonction <strong>=Si</strong> d'Excel. Il lui faut trois informations, ou trois &quot;arguments&quot;, pour fonctionner correctement : la condition, que faire si vrai et que faire si faux. Ces arguments sont séparés par un point-virgule (;).</p>
<p>On vous demande ici d'écrire le texte &quot;Champion&quot; si la personne a une commission de 45 000 &euro; ou plus. Sinon, il faut afficher le texte &quot;Désolé&quot;.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>Critère:vraifaux([emp_commission]&gt;= 45000;&quot;Champion&quot;;&quot;Désolé&quot;)</td>
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
    <th>Critère</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>Désolé</td>
  </tr>
  <tr>
    <td>Marc</td>
    <td>ASSIN</td>
    <td>Désolé</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFERY</td>
    <td>Champion</td>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>Désolé</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>Désolé</td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
    <td>Désolé</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>Désolé</td>
  </tr>
</table>
<p>Pour cet exercice, la fonction <strong>Vraifaux</strong> a été utilisée pour afficher du texte.</p>
<p>Vous pouvez aussi l'utiliser pour aussi afficher des chiffres comme dans le prochain exercice.</p>

