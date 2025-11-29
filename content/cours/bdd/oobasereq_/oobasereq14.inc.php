<?php
/**
 * BUT : solution requête 14
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
$sNavigation=navigation('oobase', '14', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 14</h1>
<h2>Affichez à côté du prénom et du nom des employés de l'entreprise le texte &quot;champion&quot; pour ceux qui ont une commission de  45 000 &euro; ou plus. Placez le texte &quot;Désolé&quot; à côte de ceux qui ne répondent pas au critère précédent.</h2>
<pre>Fonction CASEWHEN(condition,'si vrai','si faux') dont le résultat est du texte</pre>

<p>Cet exercice utilise la fonction CASEWHEN pour afficher du texte.</p>
<p>Elle fonctionne sur le même principe que la fonction <strong>=Si</strong> d'Excel. Il lui faut trois informations, ou trois &quot;arguments&quot;, pour fonctionner correctement&nbsp;: la condition, que faire si vrai et que faire si faux. Ces arguments sont séparés par une virgule (,) et les textes sont entre guillemets simples.</p>
<p>On vous demande ici d'écrire le texte &quot;Champion&quot; si la personne a une commission de 45 000 &euro; ou plus. Sinon, il faut afficher le texte &quot;Désolé&quot;.</p>
<p>Critère&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>CASEWHEN("Commission">= 45000, 'Champion', 'Désolé')</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Critère</td>
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
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
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
    <td>Elie</td>
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

