<?php
/**
 * solution requête 31
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
$sNavigation=navigation('access', '31', 'req', 'fin');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 31</h1>
<h2>Utilisez une requête pour entrer les données de factures.</h2>
<p class="notice remarque">Requête basée sur plusieurs tables pour entrer des enregistrements</p>

<p>Il est aussi possible d'utiliser une requête pour entrer des données. La requête doit avoir, au minimum, l'un des champs en commun des tables reliées. De plus, le champ en commun doit être celui qui permet d'entrer plusieurs fois la même information.</p>
<p class="notice exemple">Ex : entre les champs <strong>fact_id</strong> et <strong>fact_id</strong> qui relient les tables
 <strong>Facture</strong> et <strong>L_Fact_Art</strong>, il faut utiliser le second.</p>
<p>Donc, pour cet exercice, il faut au minimum les champs <strong>fact_id</strong>, <strong>cli_id</strong>, <strong>emp_id</strong> et <strong>art_id</strong>. On pourrait ensuite choisir d'autres champs.</p>
<p>Pour démontrer l'efficacité de cette requête, seulement les champs suivants seront ajoutés : <br />
<strong>cli_contact</strong> (de la table <strong>Client</strong>), <strong>cli_adresse</strong> et <strong>art_qte</strong>.</p>
<p>De plus, un champ calculé sera ajouté à la fin de chaque enregistrement pour déterminer le total de l'item. La formule sera la suivante: <strong>Total: [art_qte] * [art_pu]</strong>.</p>
<table class="table">
 <tr>
 <th>Champ</th>
 <td>fact_id</td>
 <td>cli_id</td>
 <td>cli_nom</td>
 <td>cli_adresse</td>
 <td>emp_id</td>
 <td>art_id</td>
 <td>art_qte</td>
 <td>Total: [art_qte] * [art_pu]</td>
 </tr>
 <tr>
 <th>Table</th>
 <td>L_Fact_Art</td>
 <td>Client</td>
 <td>Client</td>
 <td>Client</td>
 <td>Facture</td>
 <td>L_Fact_Art</td>
 <td>L_Fact_Art</td>
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
 <tr>
 <th>Afficher</th>
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
 <th>fact_id</th>
 <th>cli_id</th>
 <th>emp_id</th>
 <th>art_id</th>
 <th>art_qte</th>
 </tr>
 <tr>
 <td>Aucune</td>
 <td>1</td>
 <td>2</td>
 <td>1</td>
 <td>10</td>
 </tr>
 <tr>
 <td>Même qu'Access a déterminé à l'enregistrement ci-dessus</td>
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
<p>Il est inutile d'entrer un numéro pour commencer une nouvelle facture. Les tables <strong>Facture</strong> et<strong> L_Fact_Art</strong> sont reliées avec l'option d'intégrité référentielle. Mais surtout, l'option <strong>Mise à jour en cascade</strong> a été activée.</p>
<p>Cela veut dire que, lorsque vous ne saisissez pas de chiffres, Access va vérifier s'il existe une valeur équivalente dans la table <strong>Facture</strong>. Puisque <strong>fact_id</strong> est la clé primaire de la table, est qu'il est impossible d'avoir un champ vide, cela force Access a créer un nouvel enregistrement dans la table <strong>Facture</strong> et de lui donner un numéro. Ce numéro est ensuite transféré au champ <strong>fact_id</strong>.</p>
<p>Le second enregistrement démontre qu'il est possible d'entrer plusieurs items sur une même facture. Il suffit d'écrire le même numéro de facture dans le champ <strong>fact_id</strong>. Cependant, grâceà la clé primaire composée de plusieurs champs de la table <strong>L_Fact_Art</strong>, l'utilisateur de la base de données ne pourra pas entrer plusieurs fois le même item sur la même facture.</p>

