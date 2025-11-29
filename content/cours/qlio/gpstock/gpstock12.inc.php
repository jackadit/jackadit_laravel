<?php
/**
 * gpstockexam.inc.php
 * BUT : Examen sur la gestion physique des stocks
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		08/12/14 	22:02::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Classes
 * @category métier
 * @access protected
 * @uses 
 */
?>
<h1>Examen Gestion Physique des stocks</h1>

<p class="h2-like">Consignes</p>

<p>Toutes les ressources sont admises... sauf les voisins...</p>
<p>Répondre en détaillant les calculs pour faire clairement apparaitre les raisonnements.</p>
<p>Les résultats de calcul sont arrondis à deux décimales.</p>

<h2> La palettisation</h2>

<p>L'entreprise JackNCo vend des calculatrices. En vue d'exporter son produit, en Belgique, elle veut faire un diagnostic de l'emballage et du conditionnement des colis.</p>

<p>Le directeur logistique vous transmet les données suivantes :</p>
<ul>
	<li>Dans une remorque type "savoyarde" de 13,50 m x 2,45 m x 2,45 m, vous devez charger 66 palettes type EUR EPAL.</li>
	<li>Le volume unitaire d'une palette pleine est de 1,152 m3.</li>
	<li>Chaque palette comprend 84 caisses réparties en 7 couches identiques.</li>
</ul>

<p>La largeur d'un carton est égale à la moitié de sa longueur et la hauteur d'une palette vide est de 15 cm. </p>

<h3>Question 1 : Chaque colis étant identique, quelles sont les dimensions du colis ?</h3>


<h2>Optimisation des expéditions</h2>

<p>Votre chef d'entreprise propose d'augmenter la hauteur de la charge palettisée car il y a beaucoup de casse due au transport des palettes gerbées.</p>
<p>Il vous demande de réaliser une étude de rentabilité. Pour cela vous disposez des informations suivantes :</p>
<ul>
	<li>Palettes EUR (800 x 1200 x 150) chargées sans débord ni retrait</li>
	<li>Gerbage des palettes autorisé</li>
	<li>1980 cartons à expédier par jour</li>
	<li>30 cartons par palette sur 5 couches (palette homogène)</li>
	<li>2 colis sur la largeur de la palette</li>
	<li>Temps de manutention par palette du palettier au camion </li>
	<li>3 minutes pour les palettes gerbées (2 palettes.)</li>
	<li>2 minutes pour les palettes non gerbées</li>
	<li>Dimension du plancher de la remorque 13,40m x 2,40m x 2,60m (Longueur x largeur x hauteur)</li>
	<li>Prix de la palette EUR 13,00 € HT</li>
	<li>Coût horaire de manutention 12,90 € HT</li>
	<li>Coût de transport pour 1 palette au sol 15,00 € HT ( 2 palettes gerbées = 1 palette au sol)</li>
	<li>Hauteur de la charge palettisée : avant = 1,15 m, après = 1.75 m</li>
</ul>

<h3>Exercice 1</h3>
<ol>
	<li>Calculer les dimensions d'un carton. (L x l x h)</li>
	<li>Calculer le nombre de cartons mis sur la nouvelle palette (h = 1,75 m)</li>
	<li>Calculer le nombre de cartons supplémentaires par palettes (passage de 1,15 m à 1,75m)</li>
</ol>

<h3>Exercice 2</h3>
<ol>
	<li>Calculer le nombre de palettes nécessaires par jour (avant et après)</li>
	<li>Calculer la valeur des palettes nécessaires par jour (avant et après)</li>
	<li>Calculer l'économie réalisée sur les palettes en nombre et en valeur</li>
</ol>

<h3>Exercice 3</h3>
<ol>
	<li>Indiquer le nombre de palettes pouvant être chargées dans la remorque (avant et après)</li>
	<li>Dessiner le plan de chargement </li>
</ol>

<h3>Exercice 4</h3>
<ol>
	<li>Calculer la durée de chargement (pour hauteur 1,15 et 1,75m)</li>
	<li>Calculer le coût de chargement (pour hauteur 1,15 et 1,75m)	Pour l'ensemble des colis</li>
	<li>Calculer le coût du transport (pour hauteur 1,15 et 1,75m)</li>
</ol>

<h3>Exercice 5</h3>
<ol>
	<li>Compléter le tableau de comparaison</li>
	<li>Choisir une solution et justifier</li>
</ol>


<h2>La préparation de commande</h2>

<p>L'entreprise JackFood vend plusieurs références de produits agroalimentaires. Afin de mieux organiser son entrepôt, le directeur logistique vous transmet les données suivantes :</p>

<p></p>

<table class="table" summary="Ce schéma donne une vision de l'implantation des rayonnage de l'entrepôt.">
<caption><em>Schéma d'implantation actuel de l'entrepôt</em></caption>
	<tr>
		<td class="w10l alleegauche"><span class="article">A</span><span class="quantite_sortie">(1300)</span></td>
		<td rowspan="8" class="w10 alleecentrale">Allée<br /><br />de<br /><br />circulation</td>
		<td class="w10r alleedroite"><span class="article">B</span><span class="quantite_sortie">(250)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">C</span><span class="quantite_sortie">(130)</span></td>
		<td class="w10r alleedroite"><span class="article">D</span><span class="quantite_sortie">(9500)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">E</span><span class="quantite_sortie">(350)</span></td>
		<td class="w10r alleedroite"><span class="article">F</span><span class="quantite_sortie">(50)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">G</span><span class="quantite_sortie">(8000)</span></td>
		<td class="w10r alleedroite"><span class="article">H</span><span class="quantite_sortie">(2300)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">I</span><span class="quantite_sortie">(70)</span></td>
		<td class="w10r alleedroite"><span class="article">J</span><span class="quantite_sortie">(5300)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">K</span><span class="quantite_sortie">(10)</span></td>
		<td class="w10r alleedroite"><span class="article">L</span><span class="quantite_sortie">(150)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">M</span><span class="quantite_sortie">(30)</span></td>
		<td class="w10r alleedroite"><span class="article">N</span><span class="quantite_sortie">(400)</span></td>
	</tr>
	<tr>
		<td class="w10l alleegauche"><span class="article">O</span><span class="quantite_sortie">(900)</span></td>
		<td class="w10r alleedroite"><span class="article">P</span><span class="quantite_sortie">(1800)</span></td>
	</tr>
	<tr class="vide"><td class="nobordure" colspan="3"></td></tr>
	<tr><td class="nobordure"></td><td class="bordure w10"><span class="article">X</span></td><td class="nobordure"></td></tr>
</table>

<p><u>Données</u> : </p>

<ul>
	<li>X étant la zone de préparation</li>
	<li>distance entre X et P = 3 mètres</li>
	<li>distance entre X et O = 3 mètres</li>
	<li>distance entre P et N = 3 mètres</li>
	<li>distance entre O et M = 3 mètres</li>
	<li>distance entre chaque référence est de 3 mètres</li>
</ul>

<p>Il faut 5 secondes pour manipuler 10 colis (1 voyage)</p>
<p>La vitesse de manutention pour transporter les colis de leur emplacement jusqu'au comptoir est de 4 km/h.</p>
<p>La durée de travail journalière est de 8 heures.</p>
<p>Les fréquences de sortie sont données par jour. </p>

<h3>Question 1 : Combien de personnes doivent travailler dans cet entrepôt ? </h3>
<h3>Question 2 : En optimisant, combien faut-il de personnes dans cet entrepôt ?</h3>



<h2>Entrepôt</h2>




<p>&nbsp;</p>


<p>Bon examen.</p>
<p>&nbsp;</p>
<p>Jackadit</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

