<?php
/**
 * BUT : solution requête 31
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:55:00
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
$sNavigation=navigation('oobase', '31', 'req', 'fin');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 31</h1>
<h2>Utilisez une requête pour entrer les données de factures.</h2>
<pre>Requête basée sur plusieurs tables pour entrer des enregistrements</pre>

<p>Il est aussi possible d'utiliser une requête pour entrer des données. La requête doit avoir, au minimum, l'un des champs en commun des tables reliées. De plus, le champ en commun doit être celui qui permet d'entrer plusieurs fois la même information.</p>
<pre>Ex : entre les champs <strong>No Facture</strong> et <strong>Numéro de facture</strong> qui relient les tables
 <strong>Facture</strong> et <strong>Transition_Fact-Stock</strong>, il faut utiliser le second.</pre>
<p>Donc, pour cet exercice, il faut au minimum les champs <strong>Numéro de facture</strong>, <strong>Code Client</strong>, <strong>No vendeur</strong> et <strong>Numéro de produit</strong>. On pourrait ensuite choisir d'autres champs.</p>
<p>Pour démontrer l'efficacité de cette requête, seulement les champs suivants seront ajoutés : <br />
<strong>Nom</strong> (de la table <strong>Clients</strong>), <strong>adresse</strong> et <strong>quantité</strong>.</p>
<p>De plus, un champ calculé sera ajouté à la fin de chaque enregistrement pour déterminer le total de l'item. La formule sera la suivante: <strong>Total: quantité * [prix unitaire]</strong>.</p>
<table class="table">
 <tr>
 <th>Champ</th>
 <td>Numéro de Facture</td>
 <td>No Client</td>
 <td>Nom</td>
 <td>Adresse</td>
 <td>No Vendeur</td>
 <td>Numéro de produit</td>
 <td>Quantité</td>
 <td>Total: quantité * [Prix unitaire]</td>
 </tr>
 <tr>
 <th>Table</th>
 <td>Transition_<br />Fact-Stock</td>
 <td>Clients</td>
 <td>Clients</td>
 <td>Clients</td>
 <td>Facture</td>
 <td>Transition_<br />Fact-Stock</td>
 <td>Transition_<br />Fact-Stock</td>
 <td>&nbsp;</td>
 </tr>
 <tr>
 <th>Tri</th>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
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
 <td>X</td>
 <td>X</td>
 <td>X</td>
 <td>&nbsp;</td>
 </tr>
 <tr>
 <th>Critères</th>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 </tr>
</table>
<ol class="instruction">
	<li>Modifiez les données suivantes dans les champs appropriés.</li>
</ol>
<table class="table">
 <tr>
 <th>Numéro de Facture</th>
 <th>No Client</th>
 <th>No Vendeur</th>
 <th>Numéro de produit</th>
 <th>Quantité</th>
 </tr>
 <tr>
 <td>Aucune</td>
 <td>1</td>
 <td>2</td>
 <td>1</td>
 <td>10</td>
 </tr>
 <tr>
 <td>Même qu'OpenOffice Base a déterminé à l'enregistrement ci-dessus</td>
 <td>Même</td>
 <td>Même</td>
 <td>2</td>
 <td>20</td>
 </tr>
 <tr>
 <td>Aucune</td>
 <td>2</td>
 <td>3</td>
 <td>1</td>
 <td>10</td>
 </tr>
</table>
<p>Il est inutile d'entrer un numéro pour commencer une nouvelle facture. Les tables <strong>Facture</strong> et<strong> Transition_Fact-Stock</strong> sont reliées avec l'option d'intégrité référentielle. Mais surtout, l'option <strong>Mise à jour en cascade</strong> a été activée.</p>
<p>Cela veut dire que, lorsque vous ne saisissez pas de chiffres, OpenOffice Base va vérifier s'il existe une valeur équivalente dans la table <strong>Facture</strong>. Puisque <strong>No Facture</strong> est la clé primaire de la table, est qu'il est impossible d'avoir un champ vide, cela force OpenOffice Base a créer un nouvel enregistrement dans la table <strong>Facture</strong> et de lui donner un numéro. Ce numéro est ensuite transféré au champ <strong>Numéro de facture</strong>.</p>
<p>Le second enregistrement démontre qu'il est possible d'entrer plusieurs items sur une même facture. Il suffit d'écrire le même numéro de facture dans le champ <strong>No Facture</strong>. Cependant, grâce à la clé primaire composée de plusieurs champs de la table <strong>Transition_Fact-Stock</strong>, l'utilisateur de la base de données ne pourra pas entrer plusieurs fois le même item sur la même facture.</p>

