<?php
/**
 * examoobase1.php
 * BUT : page d'examen 1
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
 * @uses
 */

$sNavigation = navigation('examoobase', '1'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="excelvba" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Question1</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Question2</a></li>
    </ol>
</aside>



<h1>Examen OpenOffice Base : Créer une base de données</h1>

<div id="cours">
	<h2>Durée :</h2>
	<p>10 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Créer les tables d'une base de données relationnelle.</li>
	  <li>Créer les champs de ces tables.</li>
	  <li>Préciser le type de données par champ.</li>
 </ul>
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur OpenOffice Base</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel OpenOffice Base.</p>
	<h1><a href="#tdmchap1" name="chap1" id="chap1">1-Créez une nouvelle base de  données du nom de GesCom.odb</a></h1>
	<p>&nbsp;</p>
	<h1><a href="#tdmchap2" name="chap2" id="chap2">2-Créez les tables suivantes  dans la base de données  GesCom.odb</a></h1>
	<p>Les champs en gras représentent les clés primaires.</p>
	<table class="table">
	 <caption>
	 Structure de la table T_CLIENTS
	 </caption>
	 <tbody><tr>
	  <th>Nom du champ</th>
	  <th>Type de champ</th>
	  <th>Longueur</th>
	  <th>Format</th>
	  <th>Autre</th>
	 </tr>
	 <tr>
	  <td><strong>NumClient</strong></td>
	  <td>Interger [INTEGER]</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>AutoValeur</td>
	 </tr>
	 <tr>
	  <td>RaisonSociale</td>
	  <td>Texte [VARCHAR]</td>
	  <td>100</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 <tr>
	  <td>AdresseClient</td>
	  <td>Texte [VARCHAR]</td>
	  <td>100</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 <tr>
	  <td>VilleClient</td>
	  <td>Texte [VARCHAR]</td>
	  <td>50</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 <tr>
	  <td>Téléphone</td>
	  <td>Texte [VARCHAR]</td>
	  <td>20 </td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 </tbody>
 	</table>
<p>&nbsp;</p>
    <table class="table">
	 <caption>
	 Structure de la table T_COMMANDES
	 </caption>
	 <tbody><tr>
	  <th>Nom du champ</th>
	  <th>Type de champ</th>
	  <th>Longueur</th>
	  <th>Format</th>
	  <th>Autre</th>
	 </tr>
	 <tr>
	  <td><strong>NumCommande</strong></td>
	  <td>Interger [INTEGER]</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>AutoValeur</td>
	 </tr>
	 <tr>
	  <td>NumClient</td>
	  <td>Nombre [NUMERIC]</td>
	  <td>10</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 <tr>
	  <td>DateCommande</td>
	  <td>Date [DATE]</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	 </tr>
	 </tbody>
 	</table>
	
    <p>&nbsp;</p>
    <table class="table">
      <caption>
        Structure de la table T_PRODUITS
      </caption>
      <tbody>
        <tr>
          <th>Nom du champ</th>
          <th>Type de champ</th>
          <th>Longueur</th>
          <th>Format</th>
		  <th>Autre</th>
        </tr>
        <tr>
          <td><strong>RéfProduit</strong></td>
          <td>Interger [INTEGER]</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
		  <td>AutoValeur</td>
        </tr>
        <tr>
          <td>NomProduit</td>
          <td>Texte [VARCHAR]</td>
          <td>50</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <td>PrixUnitaire</td>
          <td>Texte [VARCHAR]</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <td>QtéStockée</td>
          <td>Nombre [NUMERIC]</td>
          <td>2</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Indisponible</td>
          <td>Oui/Non</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
  <p>&nbsp;</p>
    <table class="table">
      <caption>
        Structure de la table T_DETAILS_COMMANDES
      </caption>
      <tbody>
        <tr>
          <th>Nom du champ</th>
          <th>Type de champ</th>
          <th>Longueur</th>
          <th>Format</th>
		  <th>Autre</th>
        </tr>
        <tr>
          <td>NumCommande</td>
          <td>Nombre [NUMERIC]</td>
          <td>2</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <td>RéfProduit</td>
          <td>Nombre [NUMERIC]</td>
          <td>2</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
        <tr>
          <td>QtéCommandée</td>
          <td>Nombre [NUMERIC]</td>
          <td>2</td>
          <td>&nbsp;</td>
		  <td>&nbsp;</td>
        </tr>
      </tbody>
    </table>
    <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>

