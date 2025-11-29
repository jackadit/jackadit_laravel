<?php
/**
 * page d'examen 2
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	08/02/07	17:30:00
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
$sNavigation = navigation('examaccess', '2'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Masque téléphone et date</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Champ vide par défaut</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Champ pré-rempli</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Valeur uniquement positive</a></li>
	</ol>
</aside>



<h1>Examen Access : Personnaliser les tables</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>10 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Modifier les champs.</li>
	  <li>Créer des masques de saisie.</li>
	  <li>Préciser les valeurs par défaut.</li>
 </ul>
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access.</p>
	<h3><a href="#tdmchap1" name="chap1" id="chap1">Modifiez les tables et les  champs nécessaires dans la base de données GesCom à partir des propositions suivantes</a></h3>

	<ol>
		<li>Les chiffres du numéro de téléphone doivent pouvoir se saisir sans devoir ajouter les espaces. Faites de même pour la <strong>Date de Commande</strong> sans devoir ajouter les <strong>/</strong>.</li>
	    <li>Pour les champs numériques, il ne doit pas y avoir de zéro déjà inscrit, mais des champs vides.</li>
	    <li>La grande majorité des clients se trouvent à Strasbourg.</li>
	    <li>Certains champs ne peuvent pas avoir une valeur négative (Prix Unitaire, la quantité en stock  et la quantité commandée). Un message d'erreur explicatif est souhaité.</li>
	</ol>


