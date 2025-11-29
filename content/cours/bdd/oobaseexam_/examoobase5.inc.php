<?php
/**
 * examoobase5.php
 * BUT : page d'examen 5 
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       31/03/09        20:00:00
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

$sNavigation=navigation('examoobase', '5', 'fin');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="excelvba" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Question1</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Question2</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Question3</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Question4</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Question5</a></li>
    </ol>
</aside>



<h1>Examen OpenOffice Base : réer des requêtes</h1>

<div id="cours">
	<h2>Durée :</h2>
	<p>30 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer une requête simple.</li>
  	  <li>Créer une requête multi-table. </li>
	</ul>
  
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur OpenOffice Base</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel OpenOffice Base. La base de données GesCom.odb</p>
	
	<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Liste téléphonique des clients</a></h1>
	<p>Vous n'afficherez que la raison sociale, la ville et le numéro de téléphone. Enregistrez cette liste sous le nom "Liste téléphonique des clients".</p>
	
	<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Renseignements sur les clients du Bas-Rhin </a></h1>
	<p>Vous trierez suivant l'ordre croissant de la raison sociale. Enregistrez cette requête sous "Liste Clients Bas-Rhin".</p>

	<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Liste des clients habitant le Bas-Rhin et dont la raison  sociale commence par &quot;B&quot;.</a></h1>
	<p>Vous n'afficherez que la raison sociale.</p>

<h1><a href="#tdmchap43" name="chap4" id="chap4">4-Liste des commandes par client.</a></h1>
	<p>Vous afficherez la raison sociale et le téléphone du client pour chaque commande. Enregistrez cette liste sous le nom &laquo;Liste des commandes  par client&raquo;.</p>

<h1><a href="#tdmchap5" name="chap5" id="chap5">5-Liste des nombres de commandes par client.</a></h1>
	<p>Vous n'afficherez que la raison sociale triée par ordre croissant.</p>
	<p>&nbsp;</p>
</div>

