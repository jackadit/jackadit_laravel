<?php
/** 
 * BUT : solution requ? 29
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:54:00 
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
$sNavigation=navigation('oobase', '29', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 29</h1>
<h2>Affichez le nom de l'employé ainsi que le nombre des différents produits, avec description du produit, qu'il (ou elle) a vendu.</h2>

<pre>Requête basée sur plusieurs tables reliées avec l'opération compte</pre>

<p>Cette requête nécessite la présence de champs de plusieurs tables. Elle fait également intervenir les liens &laquo;indirects&raquo; entre les tables de la base de données.</p><p>Bien qu'il n'y ait pas de liens &laquo;directs&raquo; entre les tables <strong>Employés</strong> et <strong>Stock</strong>, il est possible de les &laquo;relier&raquo; en utilisant les tables <strong>Facture</strong> et <strong>Transition_Fact-Stock</strong>.</p>
<p>De cette façon, il est possible d'avoir dans la même requête les champs <strong>Nom</strong> et <strong>Prénom</strong> de la table <strong>Employés</strong> et <strong>Description</strong> de la table <strong>Stock</strong>.</p>
<p>Cet exercice introduit également l'utilisation de l'opération <strong>Compte</strong> utilisée pour connaître le nombre d'items vendus et par qui.</p><p>Voici la liste des tables et des relations dont vous avez besoin.</p>
<img src="/assets/img/oobase/requete29.png" alt="tables requ&eciirc;te 29" />
<p>Critères&nbsp;:</p>
<table class="table">
<tr>
	<th>Champ</th>
	<td>Prenom</td>
	<td>Nom</td>
	<td>Description</td>
	<td>Quantité</td>
</tr>
<tr>
	<th>Alias</th>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>Quantité vendue</td>
	</tr>
<tr>
<th>Table</th>
	<td>Employés</td>
	<td>Employés</td>
	<td>Stock</td>
	<td>Transition_Fact-Stock</td>
</tr>
<tr>
	<th>Fonction</th>
	<td>Groupe</td>
	<td>Groupe</td>
	<td>Groupe</td>
	<td>Somme</td>
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
	<td>X</td>
	<td>X</td>
</tr>
<tr>
	<th>Critères</th>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
</table>
<ol class="instruction">
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter" />.</li>
</ol>
<p>Résultat&nbsp;:</p>
<table class="table">
<tr>
	<th>Prenom</th>
	<th>Nom</th>
	<th>Description</th>
	<th>Quantité vendue</th>
</tr>
<tr>
	<td>Bruno</td>
	<td>ZIEUVAIR</td>
	<td>Carte mère</td>
	<td>4</td>
</tr>
<tr> 
	<td>Bruno</td>
	<td>ZIEUVAIR</td>
	<td>RAM</td>
	<td>3</td>
</tr>
<tr>
	<td>Elie</td>
	<td>COPTAIRE</td>
	<td>RAM</td>
	<td>10</td>
</tr>
<tr>
	<td>Marc</td>
	<td>ASSIN</td>
	<td>RAM</td>
	<td>20</td>
</tr>
<tr>
	<td>Mélanie</td>
	<td>ZETAUFREY</td>
	<td>Carte mère</td>
	<td>5</td>
</tr>
<tr>
	<td>Mélanie</td>
	<td>ZETAUFREY</td>
	<td>RAM</td>
	<td>12</td>
</tr>
<tr>
	<td>Mélanie</td>
	<td>ZETAUFREY</td>
	<td>Ventilateur</td>
	<td>15</td>
</tr>
<tr>
	<td>Paul</td>
	<td>TERGEIST</td>
	<td>Carte mère</td>
	<td>5</td>
</tr>
</table>

