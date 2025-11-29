<?php
/**
 * page d'examen 1
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	16/04/07	14:01:00
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
$sNavigation = navigation('examaccess', '1'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Création de la base de données</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Création des tables</a></li>
	</ol>
</aside>



<h1>Examen Access : Créer une base de données</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>5 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer les tables d'une base de données relationnelle.</li>
	  <li>Créer les champs de ces tables.</li>
	  <li>Préciser le type de données par champ.</li>
 </ul>
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access.</p>

	<h3><a href="#tdmchap1" name="chap1" id="chap1">1-Créez une nouvelle base de  données</a></h3>
	<p>Enregistrez-là sous R405_NOM_Prénom.</p>
	<p>Créez également un document Word du même nom dans lequel vous insèrerez des copies d'écran pour preuve de réponse à chaque question.</p>
	<h3><a href="#tdmchap2" name="chap2" id="chap2">2-Créez les tables suivantes  dans la base de données</a></h3>
	<p>Les champs en gras représentent les clés primaires.</p>
	<table class="table">
	 <caption>
	 Structure de la table T_CLIENT
	 </caption>
	 <tbody><tr>
	  <th>Nom du champ</th>
	  <th>Type de champ</th>
	  <th>Taille</th>
	  <th>Format</th>
	 </tr>
	 <tr>
	  <td><strong>cli_id</strong></td>
	  <td>NuméroAuto</td>
	  <td>&nbsp;</td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>cli_raison_sociale</td>
	  <td>Texte</td>
	  <td>100</td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>cli_adresse</td>
	  <td>Texte</td>
	  <td>100</td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>cli_ville</td>
	  <td>Texte</td>
	  <td>50</td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>cli_tel</td>
	  <td>Texte</td>
	  <td>20 </td>
	  <td>&nbsp; </td>
	 </tr>
	 </tbody>
 	</table>

	<table class="table">
	 <caption>
	 Structure de la table T_COMMANDE
	 </caption>
	 <tbody><tr>
	  <th>Nom du champ</th>
	  <th>Type de champ</th>
	  <th>Taille</th>
	  <th>Format</th>
	 </tr>
	 <tr>
	  <td><strong>com_id</strong></td>
	  <td>NuméroAuto</td>
	  <td>&nbsp;</td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>com_cli_id</td>
	  <td>Numérique</td>
	  <td>Entier long </td>
	  <td>&nbsp; </td>
	 </tr>
	 <tr>
	  <td>com_date</td>
	  <td>Date/Heure</td>
	  <td>&nbsp;</td>
	  <td>&nbsp; </td>
	 </tr>
	 </tbody>
 	</table>
	
    <table class="table">
      <caption>
        Structure de la table T_PRODUIT
      </caption>
      <tbody>
        <tr>
          <th>Nom du champ</th>
          <th>Type de champ</th>
          <th>Taille</th>
          <th>Format</th>
        </tr>
        <tr>
          <td><strong>prod_id</strong></td>
          <td>NuméroAuto</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>prod_nom</td>
          <td>Texte</td>
          <td>50</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>prod_prix</td>
          <td>Monétaire</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>prod_qte</td>
          <td>Numérique</td>
          <td>Entier long </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>prod_dispo</td>
          <td>Oui/Non</td>
          <td>20 </td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>

    <table class="table">
      <caption>
        Structure de la table T_DETAILS_COMMANDE
      </caption>
      <tbody>
        <tr>
          <th>Nom du champ</th>
          <th>Type de champ</th>
          <th>Taille</th>
          <th>Format</th>
        </tr>
        <tr>
          <td>com_id</td>
          <td>Numérique</td>
          <td>Entier long </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>prod_id</td>
          <td>Numérique</td>
          <td>Entier long </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>qte_commande</td>
          <td>Numérique</td>
          <td>Entier </td>
          <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>

