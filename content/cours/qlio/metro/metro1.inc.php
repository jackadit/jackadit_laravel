<?php
/**
 * BUT : Introduction à la métrologie
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Métrologie
 * @access public
 * @uses 
 */
$sNavigation=navigation('metro', '1');
?>




<h1>Normalisation GPS</h1>

	<h2>Introduction</h2>

	<p>Pour représenter les produits industriels que nous utilisons, les concepteurs utilisent le dessin technique sous forme papier ou numérique. Ces dessins montrent différentes vues du produit et des pièces qui le composent. Cette représentation graphique représente des pièces idéales.</p>
	<p>Il est impossible de produire des pièces parfaites, d'autant plus que des contraintes s'exerçent sur le produit (température, efforts) lors de sa fabrication, ce qui va faire varier ses caractéristiques.</p>
	<p>Pour qu'une pièce ou un assemblage de pièces soient conforment à la conception initiale, on tolère des variations par rapport aux dimensions idéales.</p>
	<p>Afin de permettre une compréhension sans ambiguïté entre les différents acteurs industriels (conception, production et métrologie), l'ISO (Organisation internationale de normalisation) a rédigé des normes relatives à la spécification géométrique des produits, et une synthèse a été établie dans un tableau appelé <strong>matrice GPS</strong>.</p>
	<p>Le développement qui suit traitera principalement des spécifications par rapport à la représentation des pièces en dessin technique ou à la métrologie.</p>

	<h2>Matrice GPS</h2>
	<em><a href="./cours/metro/ISO14638-decembre1996.pdf">Extrait de ISO/TR 14638 :1996</a></em>
	

	<p>La norme ISO/TR 14638 2 de 1996 portant sur les normes concernant la spécification géométrique des produits (GPS : Geometrical product specification), présente une vue d'ensemble de la normalisation internationale dans le domaine du GPS. Il explique le concept GPS et fournit un schéma directeur sur les normes existantes, à modifier et à établir dans ce domaine.</p>

	<p>La matrice GPS est structurée en 4 groupes principaux :</p>
	<ul>
		<li>Normes GPS de base.</li>
		<li>Normes GPS globales.</li>
		<li>Normes GPS générales.</li>
		<li>Normes GPS complémentaires.</li>
	</ul>

	<p>Les normes relatives à la même caractéristique géométriques font parties d'une chaine de normes.</p>
	<p>Une chaine de norme est constituée de 6 maillons :</p>
	<ul>
		<li>Maillon 1: indication dans la documentation du produit. Codification.</li>
		<li>Maillon 2: définition des tolérances. Définitions théoriques en valeurs.</li>
		<li>Maillon 3: définition des caractéristiques ou paramètres de l'élément extrait.</li>
		<li>Maillon 4: évaluation des écarts de la pièce. Comparaison avec les limites de tolérance.</li>
		<li>Maillon 5: exigence des équipements de mesure.</li>
		<li>Maillon 6: exigences d'étalonnage. Étalons d'étalonnage.</li>
	</ul>

	<p class="notice remarque">Seules les normes GPS générales et complémentaires constituent des chaînes de normes.</p>

	<table class="table">
	<caption>Vue d'ensemble du schéma directeur GPS - Matrice GPS</caption>
		<tr>
			<td class="w100p" rowspan="3">Normes GPS de base</td>
			<td>Normes GPS globales</td>
		</tr>
		<tr>
			<td>Chaines de normes GPS générales</td>
		</tr>
		<tr>
			<td>Chaines de normes GPS complémentaires</td>
		</tr>
	</table>

	<table class="table">
	<caption>Vue d'ensemble du schéma directeur GPS - Matrice GPS</caption>
		<thead>
		<tr>
			<td class="w30p">0</td>
			<td class="">Maillon n°</td>
			<td class="w120p">1</td>
			<td class="w120p">2</td>
			<td class="w120p">3</td>
			<td class="w120p">4</td>
			<td class="w120p">5</td>
			<td class="w120p">6</td>
		</tr>
		<tr>
			<td>0</td>
			<td >Caractéristique géométrique de l'élément</td>
			<td>Indication dans la documentation du produit - codification</td>
			<td>Définition des tolérances - Définition théorique et valeurs</td>
			<td>Définitions des caractéristiques ou paramètres de l'élément extrait</td>
			<td>Évaluation des écarts de la pièce - Comparaison avec les limites de la tolérance</td>
			<td>Exigences pour l'équipement de mesure</td>
			<td>Exigences d'étalonnage - Étalons d'étalonnage</td>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>1</td>
			<td>Taille</td>
			<td>ISO 129, ISO 286-1, ISO 406</td>
			<td>ISO 286</td>
			<td>ISO 1938</td>
			<td>ISO 1938</td>
			<td>ISO 1938</td>
			<td>ISO 1938</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Distance</td>
			<td>ISO 129, ISO 406</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Rayon</td>
			<td>ISO 129, ISO 406</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Angle °</td>
			<td>ISO 129, ISO 1119</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Forme d'une ligne (indépendante d'une référence)</td>
			<td>ISO 1101, ISO 1660</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Forme d'une ligne (dépendant d'une référence)</td>
			<td>ISO 1101</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Forme d'une surface (indépendante d'une référence)</td>
			<td>ISO 1101, ISO 2692</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>8</td>
			<td>Forme d'une surface (dépendant d'une référence)</td>
			<td>ISO 1101</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>9</td>
			<td>Orientation</td>
			<td>ISO 1101, ISO 2692</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>10</td>
			<td>Position</td>
			<td>ISO 1101, ISO 5458</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>11</td>
			<td>Battement circulaire</td>
			<td>ISO 1101</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>12</td>
			<td>Battement total</td>
			<td>ISO 1101</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>13</td>
			<td>Références</td>
			<td>ISO 1101, ISO 5459</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>14</td>
			<td>Rugosités de surface</td>
			<td>ISO 1302</td>
			<td>ISO 4287</td>
			<td>ISO 4288</td>
			<td>ISO 4288</td>
			<td>ISO 3274</td>
			<td>ISO 5436</td>
		</tr>
		<tr>
			<td>15</td>
			<td>Ondulation de surface</td>
			<td>ISO 1302</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>16</td>
			<td>Profil primaire</td>
			<td>ISO 1302</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>17</td>
			<td>Défauts de surface</td>
			<td>ISO 8785</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>18</td>
			<td>Arêtes</td>
			<td>ISO 13715</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		</tbody>
	</table>


	<h2>Choix des normes</h2>
	<p>Afin de rendre abordable ce cours, nous allons nous concentrer sur les normes suivantes :</p>
	<ul>
		<li><a href="./cours/metro/ISO8015-fevrier2006.pdf">NF ISO 8015</a> : Principe de tolérancement de base.</li>		
		<li><a href="./cours/metro/ISO406-decembre1995.pdf">NF ISO 406</a> : tolérance de dimensions linéaires en angulaires.</li>
		<li><a href="./cours/metro/EN20286-1-decembre1993.pdf">NF EN 20286-1 ou ISO 286-1 :1988</a> : tolérances et ajustements.</li>
		<li><a href="./cours/metro/EN22768-1-novembre1993.pdf">NF EN 22768-1 ou ISO 2768-1</a> : tolérances pour dimensions linéaires et angulaires non affectées de tolérances individuelles (ou tolérances générales).</li>
		<li><a href="./cours/metro/EN22768-2-novembre1993.pdf">NF EN 22768-2 ou ISO 2768-2</a> : tolérances géométriques non affectées de tolérances individuelles partie 2.</li>
		<li><a href="./cours/metro/ISO1101-janvier2006.pdf">NF EN ISO 1101 :2006</a> : Tolérancement géométrique/ Tolérancement de forme, orientation, position et battement.</li>
		<li>ISO 2692: Tolérancement géométrique/Exigence du maximum de matière.</li>
	</ul>

	<p>Ces normes seront expliquées en suivant l'ordre suivant :</p>
	<ol>
		<li>Principes de base.</li>
		<li>Tolérances dimensionnelles et angulaires.</li>
		<li>Tolérances géométriques.</li>
	</ol>

	<p>Le cas spécifique des filetages ne sera pas traité car il nécessite un développement spécifique.</p>
	<p>Les spécifications relatives aux états de surface ne seront pas intégrées à ce cours.</p>


	<h2>Principes de base</h2>
	<em><a href="./cours/metro/ISO8015-fevrier2006.pdf">D'après ISO 8015</a></em>

	<p>Sans annotation particulière, les spécifications géométriques s'appliquent sans prendre en compte les spécifications dimensionnelles (linéaires et angulaires).</p>
	<p>Ce principe d'indépendance est rompu par l'exigence de l'enveloppe et le principe de maximum de matière.</p>
	
    <h3>Tolérances linéaires et angulaires</h3>

	<p>Une tolérance linéaire ne contraint que des distances entre 2 points d'un élément et pas les défauts de forme.</p>

	<p>Une tolérance angulaire ne contraint que l'orientation de 2 lignes en contact (lignes tangentes les plus proches) avec les 2 surfaces spécifiées.</p>
	<img src="/assets/img/qlio/metro/ligne_contact.png" alt="tolérance angulaire" />

    <h3>Tolérances géométriques</h3>
	<p>Les tolérances géométriques contraignent les écarts de forme, d'orientation ou de position. Elles se contrôlent indépendamment des spécifications linéaires et angulaires en absence d'exigence de l'enveloppe ou du principe de maximum de matière <img src="/assets/img/qlio/metro/enveloppe.png" alt="symble de l'exigence de l'enveloppe" /></p>

	<p>Exemple :</p>
	<img src="/assets/img/qlio/metro/tolerance_geometrique.png" alt="tolérance géométrique" />

	<p>Cette pièce peut être conforme par rapport à la spécification dimensionnelle alors qu'elle n'est pas cylindrique ou que ses génératrices opposées ne sont pas rectilignes ou parallèles.</p>
	

    <h3>Exigence de l'enveloppe</h3>

	<p>L'exigence de l'enveloppe s'applique à un cylindre ou à 2 surfaces réputées planes et parallèles. Elle indique que l'élément spécifié ne doit pas dépasser une enveloppe de forme parfaite à la dimension du maximum de matière de l'élément.</p>
	<p>L'exigence de l'enveloppe se note à la suite de la spécification linéaire par le symbole </p>

	<p>Exemple :</p>
	<img src="/assets/img/qlio/metro/tolerance_geometrique_enveloppe.png" alt="tolérance géométrique exigence de l'enveloppe" />

	<p>Les différents diamètres doivent rester à l'intérieur de la tolérance de Ø20±0,2 et l'élément ne doit pas franchir une enveloppe cylindrique de diamètre 20,2 car 20,2 correspond au maximum de matière pour cette spécification dimensionnelle.</p>
	<img src="/assets/img/qlio/metro/tolerance_geometrique_enveloppe_cylindre.png" alt="cylindre de tolérance géométrique exigence de l'enveloppe" />

    <h3>Principe du maximum de matière</h3>

	<p>Ce principe permet de prendre en compte la relation entre une dimension linéaire et une spécification géométrique. Il prend en compte la compensation qu'il peut y avoir entre un jeu et un défaut de position ou d'orientation par exemple.</p>
	<p>Le symbole suivant est ajouté à la spécification géométrique <img src="/assets/img/qlio/metro/max_matiere.png" alt="symbole du maximum de matière" /></p>

	<p class="notice remarque">La norme ISO 2692 défini avec plus de précision cette notion. Elle sera abordée avec le tolérancement géométrique.</p>


