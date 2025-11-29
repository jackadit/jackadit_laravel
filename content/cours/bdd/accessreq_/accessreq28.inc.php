<?php
/**
 * solution requête 28
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
$sNavigation=navigation('access', '28', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 28</h1>
<h2>Affichez le numéro de facture, nom et adresse du client ainsi que le prénom et nom du vendeur.</h2>
<p class="notice remarque">Requête basée sur plusieurs table</p>

<p>Pour l'instant, tous les exercices que vous avez vus ne nécessitaient qu'une table; la table <strong>Employe</strong>. Cependant, les requêtes les plus puissantes peuvent utiliser les informations provenant de plusieurs tables ou de requêtes reliées. Les prochains exercices consistent à créer des requêtes utilisant plusieurs tables.</p>
<p>Pour avoir plus d'informations sur les relations entre les tables et les requêtes, veuillez -vous rendre au cours sur les <a href="/cours/qlio/access3b">relations</a> entre les tables ou les requêtes. Toutes les opérations que vous avez vues dans les exercices précédents auraient été possibles avec des tables ou des requêtes non reliées.</p>
<ol class="instruction">
	<li>Créez une nouvelle requête en <strong>Mode Création</strong>.</li>
	<li>De la liste des tables disponibles, sélectionnez les tables <strong>Client</strong>, <strong>Facture</strong> et <strong>Employe</strong>.</li>
</ol>
<p>Il faut maintenant ajouter les champs à la requête.</p>
<ol class="instruction">
	<li>De la table <strong>Facture</strong>, sélectionnez le champ <strong>fact_id</strong>.</li>
	<li>De la table <strong>Client</strong>, sélectionnez les champs <strong>cli_nom</strong> et <strong>cli_adresse</strong>.</li>
	<li>De la table <strong>Employe</strong>, sélectionnez les champs <strong>emp_prenom</strong> et <strong>emp_nom</strong>.</li>
</ol>
<p>Le résultat final devrait ressembler à ceci. Si vous n'avez pas ce résultat, refaites les relations entre les tables.</p>
<img src="/assets/img/access/relation_client_facture_employe.png" alt="tables requête 28" />
<table class="table">
 <tr>
 <th>Champ</th>
 <td>fact_id</td>
 <td>cli_nom</td>
 <td>cli_adresse</td>
 <td>emp_prenom</td>
 <td>emp_nom</td>
 </tr>
 <tr>
 <th>Table</th>
 <td>Facture</td>
 <td>Client</td>
 <td>Client</td>
 <td>Employe</td>
 <td>Employe</td>
 </tr>
 <tr>
 <th>Tri</th>
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
	<li>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>Résultat :</p>
<table class="table">
 <tr>
 <th>Fact_ide</th>
 <th>cli_nom</th>
 <th>cli_adresse</th>
 <th>emp_prenom</th>
 <th>emp_nom</th>
 </tr>
 <tr>
 <td>6</td>
 <td>BRICO</td>
 <td>10 rue des prés</td>
 <td>Bruno</td>
 <td>ZIEUVAIR</td>
 </tr>
 <tr>
 <td>7</td>
 <td>DEBORD</td>
 <td>20 avenue de la Liberté</td>
 <td>Mélanie</td>
 <td>ZETAUFREY</td>
 </tr>
 <tr>
 <td>8</td>
 <td>MAGNE et Cie.</td>
 <td>30 rue des poissons</td>
 <td>Paul</td>
 <td>TERGEIST</td>
 </tr>
 <tr>
 <td>...</td>
 <td>...</td>
 <td>...</td>
 <td>...</td>
 <td>...</td>
 </tr>
</table>
<p class="notice info">Si nous n'avions pas préfixé les champs des différentes tables, Access aurait fait la différence entre les champ de dénomination identique en affichant le nom de la table devant le nom du champ (ex : <strong>Client.nom</strong> et <strong>Employe.nom</strong>).</p>

