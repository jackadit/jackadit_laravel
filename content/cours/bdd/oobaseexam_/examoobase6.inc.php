<?php
/**
 * examoobase6php
 * BUT : page d'examen 6 
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

$sNavigation=navigation('examoobase', '6');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="excelvba" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Question1</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Question2</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Question3</a></li>
    </ol>
</aside>



<h1>Examen OpenOffice Base : Créer des formulaires</h1>

<div id="cours">
	<h2>Durée :</h2>
	<p>30 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer un formulaire .</li>
	  <li>Modifier un   formulaire.</li>
  </ul>
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur OpenOffice Base</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel OpenOffice Base. La base de données GesCom.odb</p>
	
	<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Créez le formulaire suivant :</a></h1>
	<p><img src="../img/examoobase/formulaire1.png" alt="Formulaire de saisie des clients" width="488" height="213" /></p>
	<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Créez le formulaire pour la saisie des produits.</a></h1>
	<ul>
		<li>Changez la couleur des étiquettes.</li>
	    <li>Agencez les étiquettes et les zones de texte.</li>
	    <li>Modifiez les largeurs des zones de texte.</li>
	    <li>Ajoutez le titre &quot;Nos Produits Phare&quot;.</li>
	    <li>Ajouter une image.</li>
	    <li>Enregistrez le formulaire sous &quot;Mise à jour des produits&quot;.</li>
	</ul>
	<img src="../img/examoobase/formulaire2.png" alt="Formulaire de saisie des produits" />
	<h1><a href="#tdmchap3" name="chap3" id="chap3">3-Créez un formulaire pour la saisie des commandes et  des détails de commande.</a></h1>
	<ul>
		<li>Ajoutez l'adresse complète du client.</li>
	    <li>Ajoutez le prix des produits commandés.</li>
	    <li>Calculez le montant TTC pour chaque produits et affichez-le au format monétaire.</li>
	    <li>Calculez le montant TTC total commandé et affichez-le au format monétaire.</li>
	    <li>Enregistrez le formulaire sous "F_COMMANDE".</li>
	</ul>
		
</div>

