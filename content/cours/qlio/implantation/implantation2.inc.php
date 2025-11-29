<?php
/**
 * BUT : Implantation
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Implantation
 * @access public
 * @uses 
 */
$sNavigation=navigation('implantation', '2');
?>




<h1>Organisation des processus de production</h1>

<h2>Typologie de production</h2>

<p>Le schéma d'implantation dépend étroitement de la nature de l'activité.</p>

<p>Pour l'industrie de fabrication, on distingue certains types d'implantation couramment adoptés.</p>
<p>On a recourt à l'implantation :</p>
<ul>
	<li><strong>Par sections spécialisées</strong>, plus particulière aux fabrications unitaires ou variées.</li>
	<li><strong>Par sections de fabrication</strong>, adaptée pour la production de pièces ayant des gammes opératoires voisines.</li>
	<li><strong>En ligne de fabrication</strong>, appelée aussi chaîne.</li>
</ul>

<p class="h3-like">Exemple de typologie de production.</p>	

<img class="aligncenter" src="/assets/img/qlio/implantation/typologie_production.png" alt="Graphique des différentes typologie de produciton" />


<h2>Caractéristiques des processus</h2>


<h3>Type de flux</h3>

<p>On peut classer les types de flux de production en quatre grandes tendances en fonction de la taille des séries et de la diversité de la production.</p>

<p>Ces types de flux de production sont :</p>
<ul>
	<li>La production en continu.</li>
	<li>La production en discontinu.</li>
	<li>La production par projet.</li>
	<li>Type d'élaboration du produit.</li>
</ul>

<p>Les outils et méthodes de gestion des flux diffèrent selon le type de production.</p>

<h4>Flux continus.</h4>

<p>L'implantation par sections spécialisées, plus particulière aux fabrications unitaires ou variées. Dans chaque section on procède à une opération technique déterminée, et le produit passe successivement dans chacune des sections spécialisées intéressant sa gamme de fabrication.</p>


<p>Les exemples les plus caractéristiques de production en continu sont des produits comme le sucre, le pétrole, le ciment, l'acier en coulée continue.</p>
<p>Ce type de flux de production a généralement les caractéristiques suivantes :</p>
<ul>
<li>Flux de matière continu.</li>
	<li>Produit unique ou quasiment.</li>
	<li>Implantation linéaire des machines.</li>
	<li>Flexibilité très faible.</li>
	<li>Investissement important.</li>
	<li>Étroite gamme de fabrication : matériel dédié.</li>
	<li>Délai de fabrication très court.</li>
	<li>Production 24 h / 24 ; 7 j / 7.</li>
	<li>En-cours faible.</li>
	<li>Stock : matière première et produit fini.</li>
	<li>Équipe de production faible.</li>
	<li>Équipe d'entretien importante.</li>
	<li>Forte automatisation.</li>
</ul>

<fieldset>
<legend>Remarque</legend>
On retrouve des caractéristiques identiques pour des produits fabriqués en grande série tels que roulements à billes, embouteillage d'eau minérale, etc.
</fieldset>


<h4>Flux discontinus</h4>

<p>La production en discontinu est utilisée pour des quantités relativement faibles et pour des produits variés.</p>
<p>Les industries de confection, les industries mécaniques sont des exemples de ce type de production (atelier).</p>
<p>Ce type de flux de production a généralement les caractéristiques suivantes :</p>
<ul>
	<li>Implantation des machines par fonction.</li>
	<li>Grande flexibilité, car les machines ne sont pas spécifiques.</li>
	<li>Équilibrage de la capacité des machines difficile d'où l'apparition d'en-cours.</li>
</ul>

<h4>Production unitaire (PROJET).</h4>

<p>L'implantation par <span class="tag--info">sections spécialisées</span> est plus particulière aux fabrications unitaires ou variées.</p>
<p>Dans chaque section, on procède à une opération technique déterminée, et le produit passe successivement dans chacune des sections spécialisées intéressant sa gamme de fabrication.</p>

<ul>
	<li>Personnel fortement qualifié.</li>
	<li>Ressources qui se déplacent.</li>
	<li>Équipement standard.</li>
	<li>Très forte réactivité, peu de préparation.</li>
	<li>Faibles capitaux.</li>
	<li>Délai de fabrication en semaines ou en mois, voire année.</li>
	<li>Variété du produit très forte.</li>
</ul>

<p>Exemples de production sous forme de projet : un pont, un navire, une formule 1, un prototype de voiture, etc.</p>

<h3>ILOT (production en petites séries)</h3>

<p>L'implantation par <span class="tag--info">sections de fabrication</span>, est adaptée pour la production de pièces de même famille, ayant des gammes opératoires voisines.</p>

<ul>
	<li>Machines à vocation assez générale.</li>
	<li>Production intermittente .</li>
	<li>Flexibilité assez importante.</li>
	<li>Les produits ont une gamme de fabrication différente.</li>
	<li>Atelier homogène (mêmes machines ) .</li>
	<li>File d'attente importante.</li>
	<li>En-cours important.</li>
	<li>Temps de fabrication important.</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/implantation/ilot.png" alt="Schéma d'une implantation en ilot" />


<p>C'est une organisation en <strong>ateliers technologiques</strong> aussi appelée en « <strong>sections homogènes</strong> », est orientée « <strong>métiers</strong> ».</p>
<p>On regroupe les machines ayant la même technicité, ou les mêmes fonctions (fraiseuse, tour,..).</p>
<p>On regroupe également pour des critères de facilité de mise en œuvre ou de sécurité (traitement thermique ou finition).</p>

<div class="reussite">
<p>Avantages :</p>
<ul>
	<li>Regroupement des équipements de même nature (par métiers)</li>
	<li>Optimisation de l'utilisation des moyens de production</li>
	<li>Flexibilité de la fabrication</li>
</ul>
</div>

<div class="echec">
<p>Inconvénients :</p>
<ul>
	<li>Flux complexes</li>
	<li>En-cours important</li>
	<li>Gestion des lancements souvent délicate</li>
</ul>
</div>


<h3>LIGNE (production de masse)</h3>

<p>L'implantation en <span class="tag--info">ligne de fabrication</span>, appelée aussi chaîne. C'est le cas de la grande série. Le produit se déplace en passant successivement par tous les postes de travail.</p>

<ul>
	<li>Même produit ou famille de produits.</li>
	<li>Implantation d'atelier imposée par la gamme.</li>
	<li>Temps de réglage machine court (SMED).</li>
	<li>Stocks les plus faibles possibles.</li>
	<li>Capital élevé.</li>
	<li>Délai de fabrication en jours ou en heures.</li>
	<li>Équilibrage de postes de travail.</li>
	<li>Ligne de production, ligne d'assemblage.</li>
	<li>Cellules de fabrication.</li>
</ul>


<p>Il s'agit d'une organisation axée « produits » (par exemple fabrication de menuiseries), caractérisée par l'implantation des moyens de production conformément aux flux.</p>

<p>On dédie toutes les ressources nécessaires à un type de produit et on implante en respectant la chronologie de la gamme de fabrication.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/implantation_ligne.png" alt="Schéma d'une implantation en ligne" />

<div class="reussite">
<p>Les avantages d'une telle implantation sont :</p>
<ul>
	<li>Clarté des flux (bonne traçabilité).</li>
	<li>Pas de point de rebroussement.</li>
	<li>Réduction des tâches de manutention.</li>
	<li>Simplification du suivi de fabrication.</li>
	<li>Écoulement d'un flux important, nécessite un bon équilibrage.</li>
	<li>... </li>
</ul>
</div>

<div class="echec">
<p>Les inconvénients d'une telle implantation sont :</p>
<ul>
	<li>Cette organisation implique l'affectation des moyens de production à une ligne de produits identiques.</li>
	<li>Ce qui suppose des volumes importants.</li>
	<li>Les temps de changement de série peuvent être importants.</li>
	<li>... </li>
</ul>
</div>


<h3>CELLULE (production de masse).</h3>

<p>L'implantation en <span class="tag--info">cellule</span> revient à regrouper géographiquement les ressources différentes nécessaires à la réalisation d'une suite d'opération pour un type de produit.</p>

<p>On va partir de petits ateliers de production spécialisés pour une famille de produit ou de processus, usines dans l'usine, UPA, mini-usine, mini-factories de Bosch.</p>

<p class="h3-like">Exemples d'aménagement de cellules ou « ilots »</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/ligne_droite.png" alt="Schéma d'une implantation de cellule en ligne droite" />

<img class="aligncenter" src="/assets/img/qlio/implantation/serpentin.png" alt="Schéma d'une implantation de cellule en serpentin" />

<img class="aligncenter" src="/assets/img/qlio/implantation/cellule_u.png" alt="Schéma d'une implantation de cellule en u" />

<img class="aligncenter" src="/assets/img/qlio/implantation/amenagement_circulaire.png" alt="Schéma d'une implantation de cellule en aménagement circulaire" />


<div class="reussite">
<p>Les avantages d'une telle implantation sont :</p>
<ul>
	<li>Augmente la vitesse du flux et diminue les distances de transfert.</li>
	<li>Peu d'en-cours, c'est un compromis entre la ligne et l'implantation fonctionnelle.</li>
	<li>Facilite le pilotage.</li>
	<li>Favorise le management par équipe autonome et pluridisciplinaire.</li>
	<li>... </li>
</ul>
</div>
 
<p class="h3-like">Exemple d'organisation de flux complexe homogène.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/complexite_flux_homogene.png" alt="Schéma d'un flux complexe homogène" />

<p class="h3-like">Le même organisé en cellules.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/implantation_cellule.png" alt="Schéma d'un flux avec une implantation en cellules" />

<p>Il n'est cependant pas rare de voir cohabiter plusieurs typologies de production au sein d'une même entreprise.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/melange_type_organisation.png" alt="Schéma d'un mélange de typologies d'implantation" />


<p>&nbsp;</p>
<p>&nbsp;</p>





