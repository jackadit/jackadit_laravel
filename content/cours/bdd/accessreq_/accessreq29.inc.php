<?php
/**
 * solution requête 29
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   08/03/07  01:17:00  
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
$sNavigation=navigation('access', '29', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 29</h1>
<h2>Affichez le nom de l'employé ainsi que le nombre des différents produits, avec description du produit, qu'il (ou elle) a vendu.</h2>
<p class="notice remarque">Requête basée sur plusieurs tables reliées avec l'opération compte</p>

<p>Cette requête nécessite la présence de champs de plusieurs tables. Elle fait également intervenir les liens &laquo;indirects&raquo; entre les tables de la base de données.</p>
<p>Bien qu'il n'y ait pas de liens &laquo;directs&raquo; entre les tables <strong>Employe</strong> et <strong>Article</strong>, il est possible de les &laquo;relier&raquo; en utilisant les tables <strong>Facture</strong> et <strong>L_Fact_Art</strong>.</p>
<p>De cette façon, il est possible d'avoir dans la même requête les champs <strong>emp_nom</strong> et <strong>emp_prenom</strong> de la table <strong>Employe</strong> et <strong>art_nom</strong> de la table <strong>Article</strong>.</p>
<p>Cet exercice introduit également l'utilisation de l'opération <strong>Compte</strong> utilisée pour connaître le nombre d'items vendus et par qui.</p>
<p>Voici la liste des tables et des relations dont vous avez besoin.</p>
<img src="/assets/img/access/relation_employe_facture_l_fact_art_article.png" alt="tables requête 29" />
<ol class="instruction">
	<li>Pour faire apparaître la ligne <strong>opération</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton somme" /></li>
</ol>
<p>Critères :</p>
<table class="table">
 <tr>
  <th>Champ</th>
  <td>emp_prenom</td>
  <td>emp_om</td>
  <td>art_nom</td>
  <td>art_quantite</td>
 </tr>
 <tr>
  <th>Table</th>
  <td>Employe</td>
  <td>Employe</td>
  <td>Article</td>
  <td>L_Fact_Art</td>
 </tr>
 <tr>
  <th>Opération</th>
  <td>Regroupement</td>
  <td>Regroupement</td>
  <td>Regroupement</td>
  <td>Somme</td>
 </tr>
 <tr>
  <th>Tri</th>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
 </tr>
 <tr>
  <th>Afficher</th>
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
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>Résultat :</p>
<table class="table">
 <tr>
  <th>emp_prenom</th>
  <th>emp_nom</th>
  <th>art_nom</th>
  <th>SommeDeart_quantite</th>
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
  <td>Élie</td>
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
 <tr>
    <td>...</td>
    <td>...</td>
    <td>...</td>
    <td>...</td>
 </tr>
</table>

