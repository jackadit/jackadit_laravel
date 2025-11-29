<?php
/**
 * page d'examen 6
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	09/05/07	00:25:00
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
$sNavigation = navigation('examaccess', '6'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Création formulaire client</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Création formulaire produit</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Création formulaire commande</a></li>
	</ol>
</aside>


	
<h1>Examen Access : Créer des formulaire</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>10 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer un formulaire .</li>
	  <li>Modifier un formulaire.</li>
  </ul>
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access. La base de données.</p>
	
	<h3><a href="#tdmchap1" name="chap1" id="chap1">1-Créez le formulaire suivant :</a></h3>
	<p><img src="../img/examaccess/F_client.png" alt="Formulaire de saisie des clients" /></p>

	<h3><a href="#tdmchap2" name="chap2" id="chap2">2-Créez le formulaire pour la saisie des produits.</a></h3>
	<ul>
		<li>Changez les intitulés des étiquettes.</li>
	    <li>Modifiez les largeurs des zones de texte.</li>
	    <li>Ajoutez le titre &quot;Nos Produits Phare&quot;.</li>
	    <li>Ajouter une image.</li>
	    <li>Enregistrez le formulaire sous &quot;F_produit&quot;.</li>
	</ul>
	<img src="../img/examaccess/F_produit.png" alt="Formulaire de saisie des produits" />

	<h3><a href="#tdmchap3" name="chap3" id="chap3">3-Créez un formulaire pour la saisie des commandes et des détails de commande.</a></h3>
	<ul>
		<li>Ajoutez l'adresse complète du client.</li>
	    <li>Ajoutez le prix des produits commandés.</li>
	    <li>Calculez le montant TTC pour chaque produit et affichez-le au format monétaire.</li>
	    <li>Calculez le montant TTC total commandé et affichez-le au format monétaire.</li>
	    <li>Enregistrez le formulaire sous "F_COMMANDE".</li>
	</ul>


