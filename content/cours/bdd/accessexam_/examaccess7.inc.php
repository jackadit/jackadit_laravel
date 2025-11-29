<?php
/**
 * page d'examen 7
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	09/05/07	08:41:00
 *
 * @author Stéphane WAHL
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category examen
 * @access public
 * @uses
 */
$sNavigation = navigation('examaccess', '7'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Liste téléphones clients</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">CLients du Bas-Rhin</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">CLients du Bas-Rhin commençant par "B"</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Liste des commandes par client</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Nombre de commandes par client</a></li>
	</ol>
</aside>



<h1>Examen Access : Créer des requêtes</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>10 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer une requête simple.</li>
  	  <li>Créer une requête multi-table. </li>
	</ul>
  
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access. La base de données.</p>
	
	<h3><a href="#tdmchap1" name="chap1" id="chap1">1-Liste téléphonique des clients</a></h3>
	<p>Vous n'afficherez que la raison sociale, la ville et le numéro de téléphone. Enregistrez cette liste sous le nom "Liste téléphonique des clients".</p>
	
	<h3><a href="#tdmchap2" name="chap2" id="chap2">2-Renseignements sur les clients du Bas-Rhin </a></h3>
	<p>Vous trierez suivant l'ordre croissant de la raison sociale. Enregistrez cette requête sous "Liste clients Bas-Rhin".</p>

	<h3><a href="#tdmchap3" name="chap3" id="chap3">3-Liste des clients habitant le Bas-Rhin et dont la raison sociale commence par &quot;B&quot;.</a></h3>
	<p>Vous n'afficherez que la raison sociale.</p>

<h3><a href="#tdmchap43" name="chap4" id="chap4">4-Liste des commandes par client.</a></h3>
	<p>Vous afficherez la raison sociale et le téléphone du client pour chaque commande. Enregistrez cette liste sous le nom &laquo; Liste des commandes  par client &raquo;.</p>

<h3><a href="#tdmchap5" name="chap5" id="chap5">5-Liste des nombres de commandes par client.</a></h3>
	<p>Vous n'afficherez que la raison sociale triée par ordre croissant.</p>


