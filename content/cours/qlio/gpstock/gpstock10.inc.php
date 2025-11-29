<?php
/**
 * BUT : Glossaire
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage gpstock
 * @category gpstock
 * @access protected
 * @uses db
 */
?>
<h1>Dimensionnement d‘un palettier (1h00)</h1>

<p>Ce mode de stockage latéral est très répandu. Les palettes sont rangées dans des rayonnages communément appelés racks ou palettiers. Son succès vient du fait qu'il a été conçu pour supporter des charges élevées et permettre une grande souplesse d'utilisation.</p>

<h2>Rappels</h2>
<h3>Avantages</h3>
<ul class="ok">
  <li>Le poids des charges admissible dans une case, une baie ou une alvéole peut être important (parfois plus de 4 000 kg),</li>
  <li>La structure est évolutive (adjonction de travées, modification des niveaux),</li>
  <li>Les produits sont facilement repérables et accessibles,</li>
  <li>Ce mode de stockage est bien adapté aux différents schémas d'organisation (stock de réserve, stock de réserve + prélèvement direct sur palette …),</li>
  <li>Ce mode de stockage peut être combiné avec un stockage dynamique.</li>
</ul>

<h3>Inconvénients</h3>
<ul class="notice alert">
  <li>De par sa conception, le palettier est instable. Il est donc nécessaire de l'appuyer contre une paroi ou de le « lier » à un autre palettier (palettier double),</li>
  <li>Le coût d'acquisition est élevé (environ 23 € H.T. pour un emplacement palette),</li>
  <li>Les allées de gerbage, (qui dépendent du type d'engin retenu) diminuent le volume de stockage.</li>
</ul>

<h3>Éléments et caractéristiques</h3>
<img src="/assets/img/qlio/gpstock/palettier.png" alt="Palettier" />

<p>À cette construction de base peuvent être ajoutés différents accessoires de sécurité.</p>
<img src="/assets/img/qlio/gpstock/accessoires_de_securite.png" alt="Accessoires de sécurité" />

<h4>Types de stockage :</h4>

<p>Le type de stockage dépend de la disposition des palettes dans le palettier :</p>
<ul>
  <li><strong>Stockage longitudinal</strong> : la longueur de la palette est mise dans le sens de la profondeur du palettier et donc la largeur palette est en façade,</li>
  <img src="/assets/img/qlio/gpstock/stockage_longitudinal.png" alt="Stockage longitudinal" />

  <li><strong>Stockage transversal</strong> : la largeur de la palette est mise dans le sens de la profondeur du palettier et donc la longueur palette est en façade.</li>
  <img src="/assets/img/qlio/gpstock/stockage_transversal.png" alt="Stockage transversal" />

</ul>

<p>Les rayonnages sont constitués d'échelles (souvent bleues) sur lesquelles on place des lisses ou longerons (généralement orange vif, couleur plus voyante).</p>

<h2>Les étapes du calcul d'un palettier</h2>

<h3>Recherche des caractéristiques d'une palette</h3>
<ul>
  <li>Poids d'une palette chargée  = Poids d'une palette vide + poids de la charge (marchandises).</li>
  <li>Hauteur d'une palette chargée  = Hauteur d'une palette vide + hauteur de la charge.</li>
</ul>

<h3>Recherche des caractéristiques et choix d'une lisse (ou longeron)</h3>
<ul>
  <li>Longueur de lisse = Nombre de palettes par alvéole x (façade palette + marge horizontale par palette)</li>
  <p>Ou</p>
  <li>Nombre de palettes par alvéole x (façade palette + intervalle) + un intervalle</li>
  <li>Charge utile par alvéole = Poids d'une palette chargée x nombre de palettes par alvéole</li>
</ul>

<h3>Recherche de la hauteur des différents niveaux</h3>
<ul>
  <li>Hauteur du niveau 1 (au sol, sans lisse) = Hauteur palette chargée + marge de sécurité (souvent 100 mm)</li>
  <li>Hauteur d'un niveau supérieur (niveau 2, 3 …) = Hauteur palette chargée + marge de sécurité + hauteur d'une lisse</li>

</ul>

<h3>Recherche du nombre de niveaux</h3>
<ul>
<li>1 + (hauteur disponible – hauteur niveau 1) / hauteur niveau supérieur</li>
</ul>
<p>On arrondit à l'unité inférieure.</p>

<h3>Recherche des caractéristiques des échelles</h3>
<ul>
  <li>Hauteur d'échelle d'extrémité = Somme des hauteurs de tous les niveaux – hauteur du dernier niveau + hauteur d'une lisse + 1 m (Recommandation INRS)</li>
  <li>Hauteur d'échelle intermédiaire = Somme des hauteurs de tous les niveaux - hauteur du dernier niveau + hauteur d'une lisse</li>
  <li>Charge utile par travée = Charge utile par alvéole x (nombre de niveaux -1)</li>
  <li>Profondeur d'échelle = Profondeur palette - 200 mm </li>
</ul>

<h3>Recherche du nombre de travée</h3>
<ul>
  <li>(longueur disponible – épaisseur d'une échelle) / (longueur d'une lisse + épaisseur d'une échelle)</li>
</ul>
<p>On arrondit à l'unité inférieure.</p>

<h3>Récapitulatif des équipements nécessaires et chiffrage de l'investissement</h3>

<table class="table w500p">
<caption>Chiffrage de l'investissement</caption>
<thead>
  <tr>
  <th>Eléments</th>
  <th>Quantité</th>
  <th>PU Hors taxe</th>
  <th>PT HT</th>
  </tr>
</thead>
<tbody>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">Total</td>
    <td>&nbsp;</td>
  <tr>
</tbody>
</table>

<p class="notice remarque">La hauteur d'une palette, la hauteur d'une lisse et l'épaisseur d'une échelle seront fonction du matériel choisi.</p>

<p class="h4-like"><a title="Exercice 12 - Palettier" href="./cours/gpstock/Ex12_Palettier.odt">Exercice 12 - Calcul d'un palettier (30mn)</a></p>


<p class="h4-like"><a title="Exercice 13 - Palettier" href="./cours/gpstock/Ex13_Palettier.odt">Exercice 13 - Calcul d'un palettier (20mn)</a></p>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

