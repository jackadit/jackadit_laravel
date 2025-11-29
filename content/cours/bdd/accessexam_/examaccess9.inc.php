<?php
/**
 * page d'examen 9
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	09/05/07	09:00:00
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
$sNavigation = navigation('examaccess', '9', 'fin'); ?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol class="tdm1">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Bouton Fermer</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Titre en en-tête</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Modifier le formulaire F_Commande</a></li>
        <li><a href="#chap4" name="tdmchap4" id="tdmchap4">Modifier le formulaire F_Client</a></li>
        <li><a href="#chap5" name="tdmchap5" id="tdmchap5">Modifier ordre tabulation</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">Désactiver NumCommande</a></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Modifier sous-formulaire</a></li>
		<li><a href="#chap8" name="tdmchap8" id="tdmchap8">Ajouter un nouveau formulaire</a></li>
		<li><a href="#chap9" name="tdmchap9" id="tdmchap9">Modifier les formulaires</a></li>
		<li><a href="#chap10" name="tdmchap10" id="tdmchap10">Macro d'ouverture et fermeture</a></li>
	</ol>
</aside>



<h1>Examen Access : Manipuler les macros</h1>
<div id="cours">
	<h2>Durée :</h2>
	<p>15 minutes</p>
	<h2>Objectifs</h2>
	<ul>
	  <li>Personnaliser un formulaire.</li>
  	  <li>Créer des macros-commandes.</li>
	  <li>Les affecter à un bouton.</li>
	</ul>
  
	<h2>Prérequis</h2>
	<p>Avoir suivi le cours sur Access</p>
	<h2>Matériel à prévoir</h2>
	<p>Un ordinateur équipé du logiciel Access. La base de données.</p>
	
	<h3><a href="#tdmchap1" name="chap1" id="chap1">1-Ajouter un bouton <strong>Fermer</strong> dans les pieds des formulaires.</a></h3>
	<p>Créez un bouton de fermeture pour les formulaires F_CLIENT, et "Mise à jour des produits".</p>
	
	<h3><a href="#tdmchap2" name="chap2" id="chap2">2-Ajoutez des titres &quot; <strong>Mise à jour des ... &quot;</strong> dans l&rsquo;en-tête de tous les formulaires. </a></h3>
	<p>Appliquez aux titres des formulaires la mise en forme  suivante : 16, G, Centré et couleur Bleu foncé.</p>

	<h3><a href="#tdmchap3" name="chap3" id="chap3">3-Modifiez le formulaire F_COMMANDE.</a></h3>
	<p>Remplacez le champ NumClient  par une liste déroulante dans laquelle apparaitra le numéro et la raison sociale du client.</p>

    <h3><a href="#tdmchap4" name="chap4" id="chap4">4-Modifiez le formulaire F_CLIENT.</a></h3>
    <p>Dans ce formulaire, il ne devra plus être possible  d'agrandir le formulaire ou de le redimensionner, ni d'utiliser le bouton <img src="../img/examaccess/boutonfermer.png" alt="Bouton fermer" width="21" height="21" />.</p>
	<img src="../img/examaccess/formulaire3.png" alt="Formulaire F_CLIENT" />
	
    <h3><a href="#tdmchap5" name="chap5" id="chap5">5-Modififiez l'ordre de tabulation du formulaire F_COMMANDE.</a></h3>
	<p>L'ordre doit être celui d'apparition des différents champs.</p>
	
    <h3><a href="#tdmchap6" name="chap6" id="chap6">6-Désactivez le champ NumCommande du formulaire F_COMMANDE.</a></h3>
	<p>&nbsp;</p>
	
	<h3><a href="#tdmchap7" name="chap7" id="chap7">7-Modifiez le sous-formulaire F_DETAILS_COMMANDE.</a></h3>
    <p>Remplacez le champ RéfProduit par une liste modiable dans laquelle apparaitra la référence et le nom du produit.</p>
    <p>Au final le formulaire commande resemblera à ceci : </p>
	<img src="../img/examaccess/formulaire4.png" alt="Formulaire Commande" />
    <h3><a href="#tdmchap8" name="chap8" id="chap8">8-Ajouter un nouveau formulaire&nbsp;: <strong>MENU_PRINCIPAL</strong>.</a></h3>
	<img src="../img/examaccess/formulaire5.png" alt="Formulaire MENU PRINCIPAL" />
	
	<h3><a href="#tdmchap9" name="chap9" id="chap9">9-Apportez les modifications suivantes.</a></h3>
	<table class="table">
  <caption>
    Modifications des formulaires
  </caption>
  <tr>
    <th scope="col">Nom du formulaire </th>
    <th scope="col">Nom du champ </th>
    <th scope="col">Propriété</th>
    <th scope="col">Valeur</th>
  </tr>
  <tr>
    <td rowspan="4">Tous les formulaires </td>
    <td>&nbsp;</td>
    <td>Fenêtre Indépendante </td>
    <td>Oui</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Fenêtre Modale </td>
    <td>Oui</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Afficher Sélecteur </td>
    <td>Non</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Auto Center </td>
    <td>Oui</td>
  </tr>
  <tr>
    <td rowspan="5">MENU PRINCIPAL </td>
    <td>&nbsp;</td>
    <td>Barre de défilement </td>
    <td>Aucune</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Boîte de contrôle </td>
    <td>Non</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Style bordure </td>
    <td>Trait simple fixe </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bouton Fermer</td>
    <td>Non</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Bouton MinMax</td>
    <td>Min activé</td>
  </tr>
  <tr>
    <td rowspan="3">DETAILS_COMMANDE</td>
    <td>&nbsp;</td>
    <td>Affichage par défaut </td>
    <td>Feuille de données </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Boutons de déplacement </td>
    <td>Non</td>
  </tr>
</table>

	<h3><a href="#tdmchap10" name="chap10" id="chap10">10-Créer des macros d'ouverture et de fermeture.</a></h3>
	<p>Vous devrez créer une macro <strong>Autoexec</strong> qui ouvre automatiquement le MENU PRINCIPAL à l'ouverture de la base <strong>GesCom</strong>. </p>
	<p>Vous devrez créer une macro <strong>Quitter Access</strong> et l'affecter au bouton <strong>Quitter</strong> du MENU PRINCIPAL.</p>


