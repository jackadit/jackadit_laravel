<?php
/**
 * page d'examen 8
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	15/05/07	14:52:00
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
$sNavigation = navigation('examaccess', '8'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">État liste clients</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Bouton aperçu liste client</a></li>
        <li><a href="#chap3" name="tdmchap3" id="tdmchap3">État des commandes</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Modifier l'état</a></li>
	</ol>
</aside>



<h1>Examen Access : Manipuler les état</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>10 minutes</p>
	<h2>Objectifs</h2>
	<ul>
  	  <li>Créer des états.</li>
	  <li>Modifier des états.</li>
	</ul>
  
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access. La base de données.</p>
	
	<h3><a href="#tdmchap1" name="chap1" id="chap1">1-Créez un état représentant la liste des clients.</a></h3>
	<p>Vous enregistrerez cet état sous le nom E_Clients. </p>
	<img src="../img/examaccess/E_client.png" alt="Etat clients" />
	<h3><a href="#tdmchap2" name="chap2" id="chap2">2-Créez un bouton de commande <em>Aperçu de la liste des clients</em> dans le formulaire F_CLIENT. </a></h3>
	<p>Ce bouton ouvrira un aperçu de la liste des clients .</p>

	<h3><a href="#tdmchap3" name="chap3" id="chap3">3-Créez un état <strong>des commandes</strong>.</a></h3>
	<p>Vous l'enregistrerez sous le nom : E_COMMANDES .</p>

    <h3><a href="#tdmchap4" name="chap4" id="chap4">4-Modifiez  l&rsquo;état <strong>E_COMMANDES</strong>.</a></h3>
    <p>L'état des commandes devra fournir une commande par page ressemblant à : </p>
	<img src="../img/examaccess/E_commandes.png" alt="Etat Commandes" />


