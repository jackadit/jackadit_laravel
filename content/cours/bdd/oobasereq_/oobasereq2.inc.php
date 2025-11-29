<?php
/**
 * BUT : solution requête 2
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:46:00
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
$sNavigation=navigation('oobase', '2', 'req');
include_once 'tdmsolreq.php';
?>




<h1>OpenOffice Base : Réponses  requête 2</h1>
<h2>Affichez le prénom, nom de toutes les personnes dont le nom de famille commence par la lettre &quot;Z&quot;.</h2>
<pre>Comme</pre>

<p>Cette requête permet de voir les caractères spéciaux tel que &laquo; * &raquo; et &laquo; ? &raquo;. Le caractère &laquo; ? &raquo; est utile pour remplacer un caractère dans la requête.</p>
<pre>Ex : une recherche sur b?lle renverrait les résultats suivants: <br />
balle, belle, bille, bulle.</pre>
<p>Le caractère ? peut également être utilisé avec les champs de type <strong>Date/Heure</strong>.</p>
<pre>Ex : #07-??-01# afficherait tous les enregistrements du premier jour <br />
de chaque mois de l'année 2007.</pre>
<p>Le caractère &laquo; * &raquo; permet de remplacer une série indéterminée de caractères. On connaît le début mais pas la fin.</p>
<pre>Ex : une recherche en utilisant bal* pourrait donner le résultat suivant: <br />
balade, balai, balance, balcon, baleine, balise, balle, ballerine, ballet ...</pre>
<ol class="instruction">
	<li>Pour le critère du champ &laquo; nom &raquo;, écrivez seulement Z*.</li>
</ol>
<p>OpenOffice Base se chargera d'écrire Comme pour indiquer que les enregistrements recherchés commencent par la lettre &laquo; Z &raquo;.</p>

<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>Comme Z*</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton executer" />.</li>
</ol>
</div>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th><strong>Prénom</strong></th>
    <th><strong>Nom</strong></th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFREY</td>
  </tr>
</table>


