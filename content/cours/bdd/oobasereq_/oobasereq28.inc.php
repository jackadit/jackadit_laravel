<?php
/** 
 * BUT : solution requête 28
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
$sNavigation=navigation('oobase', '28', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 28</h1>
 <h2>Affichez le numéro de facture, nom et adresse du client ainsi que le prénom et nom du vendeur.</h2>
 <pre>Requête basée sur plusieurs table</pre>
<p>Pour l'instant, tous les exercices que vous avez vus ne nécessitaient qu'une table; la table <strong>Employés</strong>. Cependant, les requêtes les plus puissantes peuvent utiliser les informations provenant de plusieurs tables ou de requêtes reliées. Les prochains exercices consistent à créer des requêtes utilisant plusieurs tables.</p><p>Pour avoir plus d'informations sur les relations entre les tables et les requêtes, veuillez -vous rendre au cours sur les <a href="/cours/qlio/oobase/3">relations</a> entre les tables ou les requêtes. Toutes les opérations que vous avez vues dans les exercices précédents auraient été possibles avec des tables ou des requêtes non reliées.</p>
<ol class="instruction">	
	<li>Créez une nouvelle requête en <strong>Mode Création</strong>.</li>
	<li>De la liste des tables disponibles, sélectionnez les tables <strong>Clients</strong>, <strong>Factures</strong> et <strong>Employés</strong>.</li>
</ol>
<p>Il faut maintenant ajouter les champs à la requête.</p>
<ol class="instruction">	
	<li>De la table <strong>Factures</strong>, sélectionnez le champ <strong>No facture</strong>.</li>
	<li>De la table <strong>Clients</strong>, sélectionnez les champs <strong>Nom</strong> et <strong>Adresse</strong>.</li>
	<li>De la table <strong>Employés</strong>, sélectionnez les champs <strong>Prénom</strong> et <strong>Nom</strong>.</li>
</ol>
<p>Le résultat final devrait ressembler à ceci. Si vous n'avez pas ce résultat, refaites les relations entre les tables.</p>
<img src="/assets/img/oobase/requete28.png" alt="tables requête 28" />
<p>&nbsp;</p>
<table class="table">
<tr>
	<th>Champ</th>
	<td>ID_Facture</td>
	<td>Nom</td>
	<td>Adresse</td>
	<td>Prenom</td>
	<td>Nom</td>
</tr>
<tr>
	<th>Table</th>
	<td>Factures</td>
	<td>Clients</td>
	<td>Clients</td>
	<td>Employés</td>
	<td>Employés</td>
</tr>
<tr>
	<th>Tri</th>
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
</tr>
<tr>
	<th>Critères</th>
	<td>&nbsp;</td>
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
	<th>No Facture</th>
	<th>Client.Nom</th>
	<th>Adresse</th>
	<th>Prenom</th>
	<th>Employés.Nom</th>
</tr>
<tr>
	<td>1</td>
	<td>BRICO</td>
	<td>10 rue des prés</td>
	<td>Bruno</td>
	<td>ZIEUVAIR</td>
	</tr>
<tr>
	<td>2</td>
	<td>DEBORD</td>
	<td>20 avenue de la Liberté</td>
	<td>Mélanie</td> <td>ZETAUFREY</td>
</tr>
<tr>
	<td>3</td>
	<td>MAGNE et Cie.</td>
	<td>30 rue des poissons</td>
	<td>Paul</td> <td>TERGEIST</td>
</tr>
<tr>
	<td>...</td>
	<td>...</td>
	<td>...</td>
	<td>...</td>
	<td>...</td>
</tr>
</table>
<p>Au moment de l'affichage du résultat, OpenOffice Base fait la différence entre le champ <strong>Nom</strong> de la table <strong>Clients</strong> et celui de la table <strong>Employés</strong> en affichant le nom de la table devant le nom du champ (<strong>Clients.Nom</strong> et <strong>Employés.Nom</strong>).</p>

