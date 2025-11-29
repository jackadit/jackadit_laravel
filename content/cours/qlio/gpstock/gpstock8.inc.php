<?php
/**
 * BUT : La gestion des stocks
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
<h1>Les indicateurs de performance d'un magasin (0h30)</h1>


<h2> Les différents indicateurs de performance d'un magasin</h2>

<p>Il ne faut pas en suivre trop peu ni trop : un bon tableau de bord consiste à suivre les « bons » indicateurs.</p>
<p>Si on suit trop d'indicateurs, le tableau de bord devient inexploitable et consommateur de trop de temps pour son élaboration.</p>
<p>L'idéal est que la mise à jour des indicateurs se fasse de façon automatique. Cependant, l'inconvénient à ceci est qu'il y a un risque d'appropriation moindre des indicateurs et qu'ils soient moins souvent scrutés.</p>

<h3>Les indicateurs de sécurité</h3>

<ul>
  <li>Le nombre d'accidents du travail</li>
  <li>Le nombre d'arrêts de travail liés aux accidents de travail</li>
  <li>…</li>
</ul>

<h3>Les indicateurs de qualité</h3>

<ul>
  <li>Les écarts d'inventaire</li>
  <li>Le nombre de retours</li>
  <li>Le nombre de retard d'expédition</li>
  <li>Les erreurs en référence, en quantité</li>
  <li>…</li>
</ul>

<h3>Le taux de service</h3>

<p> = indicateur synthétique de la qualité d'un entrepôt : nombre de commandes livrées complètes en bon état et à temps / nombre total de commandes.</p>

<h3>Les indicateurs d'état</h3>

<p>Ces indicateurs donnent une image statique de l'entrepôt à un moment donné.</p>
<ul>
  <li>Le taux d'occupation de l'entrepôt (optimal entre 80 et 85%) = volume du stock effectif / volume de stockage total disponible.</li>
  <li>L'inventaire par référence : l'état de stock par référence.</li>
  <li>L'inventaire par emplacement.</li>
  <li>L'inventaire par date de péremption<./li>
</ul>

<h3>Les indicateurs d'activité</h3>

<ul>
  <li>Le nombre de réceptions effectuées (l'indication du nombre par créneau horaire est la plus intéressante).</li>
  <li>Le nombre de véhicules de livraison accueillis.</li>
  <li>Le nombre de commandes traitées.</li>
  <li>Le nombre de lignes traitées.</li>
  <li>Le nombre de picks effectués (nombre de saisies d'objets).</li>
  <li>Le nombre de colis expédiés.</li>
  <li>Le nombre d'expéditions effectuées.</li>
</ul>

<h3>Les indicateurs de productivité</h3>

<ul>
  <li>le taux d'engagement des équipements (de manutention par exemple)</li>
  <li>La productivité des préparateurs de commande = (nombre de lignes de commande préparées x temps gamme) / temps réel de travail</li>
</ul>


<p class="h4-like"><a title="Exercice 8 - Indicateurs de performance d'un magasin" href="./assets/img/qlio/gpstock/Ex8_Indicateurs_de_performance_magasin.odt">Exercice 8 - Indicateurs de performance d'un magasin (0h20)</a></p>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

