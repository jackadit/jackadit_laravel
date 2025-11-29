<?php
/**
 * solution requête 2
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   28/02/07  23:20:00
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
$sNavigation = navigation('access', '2', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 2</h1>
<h2>Affichez le prénom, nom de toutes les personnes dont le nom de famille commence par la lettre &quot;Z&quot;.</h2>
<p class="notice remarque">Comme</p>

<p>Cette requête permet de voir les caractères spéciaux tel que &laquo; * &raquo; et &laquo; ? &raquo;. Le caractère &laquo; ? &raquo; est utile pour remplacer un caractère dans la requête.</p>
<p class="notice exemple">Ex : une recherche sur b?lle renverrait les résultats suivants: <br />
balle, belle, bille, bulle.</p>
<p>Le caractère ? peut également être utilisé avec les champs de type <strong>Date/Heure</strong>.</p>
<p class="notice exemple">Ex : #07-??-01# afficherait tous les enregistrements du premier jour <br />
de chaque mois de l‘année 2007.</p>
<p>Le caractère &laquo; * &raquo; permet de remplacer une série indéterminée de caractères. On connaît le début mais pas la fin.</p>
<p class="notice exemple">Ex : une recherche en utilisant bal* pourrait donner le résultat suivant: <br />
balade, balai, balance, balcon, baleine, balise, balle, ballerine, ballet ...</p>
<ol class="instruction">
	<li>Pour le critère du champ &laquo; nom &raquo;, écrivez seulement Z*.</li>
</ol>
<p>Access se chargera d‘écrire Comme pour indiquer que les enregistrements recherchés commencent par la lettre &laquo; Z &raquo;.</p>

<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
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
	<li>Appuyez  sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton executer" />.</li>
</ol>
</div>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th><strong>emp_prenom</strong></th>
    <th><strong>emp_nom</strong></th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFRAIS</td>
  </tr>
</table>


