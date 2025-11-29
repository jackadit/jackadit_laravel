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
$sNavigation=navigation('metro', '6', 'fin');
?>




<h1>Tolérances géométriques</h1>
<em><a href="./cours/metro/ISO1101-janvier2006.pdf">D'après ISO 1101 : 2006</a></em>

	<h2> Introduction</h2>

	<p>Les généralités sur le tolérancement géométrique sont présentées dans l'ISO 1101. Cependant d'autres normes la complètent.</p>
	<p><a href="./cours/metro/NF_E04-554-decembre1988.pdf">ISO 5459</a> : Références spécifiées et systèmes de références (ou NF E 05-554).</p>
	<p><a href="./cours/metro/ISO5458-juin1999.pdf">ISO 5458</a> : Tolérance de localisation.</p>
	<p><a href="./cours/metro/ISO10578-avril1996.pdf">ISO 10578</a> : Zone de tolérance projetée.</p>
	<p><a href="./cours/metro/ISO2692-fevrier1992.pdf">ISO 2692</a> : Principe du maximum et du minimum de matière.</p>
	<p><a href="./cours/metro/ISO10579-decembre1994.pdf">ISO 10579</a> : Pièces non rigides.</p>
	<p><a href="./cours/metro/EN22768-1-novembre1993.pdf">ISO 1660</a> : Tolérancement des profils.</p>


	<h2>Définitions et inscription</h2>
	
	<p>Les tolérances géométriques limitent l'écart de l'élément réel par rapport à :</p>
	<ul>
		<li>sa forme,</li>
		<li>son orientation,</li>
		<li>sa position théorique exacte, sans tenir compte de la dimension de l'élément.</li>
	</ul>
	
    <h3>Principe du tolérancement géométrique</h3>
	<img src="/assets/img/qlio/metro/representation_tolerance.png" alt="Exemple de représentation de tolérance" />

	<dl>
		<dt>La surface de référence</dt>
		<dd>Élément réel appartenant à la pièce et utilisé pour construire la référence spécifiée A.</dd>
		<dt>L'élément de référence</dt>
		<dd>Élément idéal (géométriquement parfait), de même nature que l'élément nominal, associé à une surface de référence réelle de façon unique. Dans ce cas il s'agit d'un plan tangent du côté libre de matière et, si nécessaire, occupant une position moyenne.</dd>
		<dt>La référence spécifiée<dt>
		<dd>Élément idéal identique à l'élément de référence ou dérivé de celui-ci. Ici la référence spécifiée et l'élément de référence sont identiques.</dd>
		<dt>Le support de la zone de tolérance</dt>
		<dd>Élément idéal de même nature que l'élément tolérancé idéal (plan), parallèle à la référence spécifiée et situé à une distance théorique de 10mm de celle-ci.</dd>
		<dt>La zone de tolérance</dt>
		<dd>Ici, espace limité par deux plans parallèles au support de la zone de tolérance, distants de 0,2mm et situés symétriquement par rapport à ce support.</dd>
		<dt>La surface tolérancée</dt>
		<dd>Élément réel de la pièce dont il faut limiter les défauts et qui doit donc être compris à l'intérieur de la zone de tolérance pour satisfaire la condition de conformité.</dd>
		<dt>La dimension théorique exacte</dt>
		<dd>Cote encadrée (sur le dessin de définition) qui définit la position théorique du support de la zone de tolérance par rapport à la référence spécifiée.</dd>
	</dl>
	
    <h3>Cadre de tolérance à 2, 3, 4 ou 5 cases</h3>
	<img src="/assets/img/qlio/metro/cadre_tolerance.png" alt="Cadre de tolérance" />

    <h3>Désignation d'une référence ou d'un système de référence</h3>

	<em><a href="./cours/metro/NF_E04-554-decembre1988.pdf">d'après ISO 5459</a></em>

	<p>Référence et système de référence sont construits à partir d'un ou de plusieurs éléments de référence.</p>
		
	<p class="h4-like">Référence simple</p>
	<img src="/assets/img/qlio/metro/reference_simple.png" alt="Désignation référence simple" />

	<p class="h4-like">Référence commune</p>
	<img src="/assets/img/qlio/metro/reference_commune.png" alt="Désignation référence commune" />

	<p class="h4-like">Système de référence ordonné</p>
	<img src="/assets/img/qlio/metro/systeme_reference.png" alt="Désignation système de référence" />

	<p class="h4-like">Références partielles</p>
	<img src="/assets/img/qlio/metro/reference_partielle.png" alt="Désignation référence partielle" />
	

	<h2>Désignation de l'élément géométrique constituant la référence</h2>

	<p>La référence ou les références sont nécessaires au positionnement de la zone de tolérance dans le cas des tolérances d'orientation, de position et de battement. Les surfaces réelles qui servent de référence ont des défauts qui ne permettent pas d'utiliser directement ces surfaces pour définir le tolérancement géométrique. On devra donc créer des surfaces parfaites à partir des surfaces réelles. La surface crée s'appelle <strong>référence spécifiée</strong>.</p>
	<p>Le contrôle s'effectuera toujours par rapport à la référence spécifiée et pas par rapport à la surface réelle. Les références spécifiées peuvent être obtenues par calcul dans le cas de la métrologie tridimensionnelle ou grâce à des dispositifs précis de mise en position comme un marbre. Dans le cas du marbre, on parlera de référence simulée.</p>
	
    <h3>Désignation d'un plan</h3>

	<p>Dans le cas où la flèche ou le triangle sont directement appliqués sur la surface ou un trait de rappel, l'élément concerné est la surface (élément intégral).</p>
	<img src="/assets/img/qlio/metro/designation_plan.png" alt="Désignation d'un plan" />
	<img src="/assets/img/qlio/metro/designation_surface_plane.png" alt="Désignation d'une surface plane" />

    <h3>Désignation de l'axe d'un cylindre</h3>
	<p>Si la flèche ou le triangle sont dans le prolongement du trait de cote, l'élément spécifié ou de référence est un élément milieu ou médian (axe, plan médian, centre d'une sphère) appelé aussi élément dérivé.</p>

	<img src="/assets/img/qlio/metro/designation_axe_cylindre.png" alt="Désignation de l'axe d'un cylindre" />
	<img src="/assets/img/qlio/metro/designation_axe_cylindre_et_sphere.png" alt="Désignation de l'axe d'un cylindre et d'une sphère" />

    <h3>Désignation d'un plan médian</h3>

	<img src="/assets/img/qlio/metro/designation_plan_median.png" alt="Désignation d'un plan médian" />
	<img src="/assets/img/qlio/metro/designation_plan_median2.png" alt="Désignation d'un plan médian 2" />
	

	<p class="h4-like">Quelques définitions</p>
	<dl>
	<dt>Définition d'un axe réel d'un arbre :</dt>
		<dd>ligne joignant les centres des cercles circonscrits aux différentes sections droites de la surface réputée cylindriques.</dd>
	</dl>

	<img src="/assets/img/qlio/metro/definition_axe.png" alt="Définition de l'axe réel d'un arbre" />

	<dl>
	<dt>Définition du plan médian de 2 surfaces réputées planes :</dt>
		<dd>plan médian aux 2 plans tangents du coté libre de la matière qui minimisent l'écart maximum avec les 2 surfaces réputées planes.</dd>
	</dl>

	<img src="/assets/img/qlio/metro/definition_plan.png" alt="Définition du plan médian de 2 surfaces" />

	<h2>Désignation de l'élément tolérancé</h2>

    <h3>Tolérancement de l'élément lui-même</h3>
	<img src="/assets/img/qlio/metro/tolerancement_element_lui-meme.png" alt="Tolérancement de l'élément lui-même" />
	<p>La ligne de repère n'est pas alignée avec la ligne de cote ⇒ la tolérance s'applique à l'élément.</p>

    <h3>Tolérancement d'un axe</h3>
	<img src="/assets/img/qlio/metro/tolerancement_axe.png" alt="Tolérancement d'un axe" />
	
	<p>La ligne de repère est alignée avec la cote ⇒ la tolérance s'applique à l'axe ou au plan médian.</p>

    <h3>Tolérancement d'un plan médian</h3>
	<img src="/assets/img/qlio/metro/tolerancement_plan_median.png" alt="Tolérancement d'un plan médian" />


	<h2>Élément tolérancé et zone de tolérance</h2>

	<p>La zone de tolérance est la portion d'espace à l'intérieur de laquelle doit être compris l'élément tolérancé. Sauf indication, la zone de tolérance est dans une direction normale à l'élément spécifié.</p>
	<p>La zone de tolérance sera fonction de la nature de l'élément tolérancé et du symbole utilisé. Les zones de tolérance normalisées sont :</p>
	<ul>
		<li>L'espace à l'intérieur d'un cercle (symbole Ø).</li>
		<li>L'espace entre 2 lignes parallèles ou 2 droites parallèles.</li>
		<li>L'espace à l'intérieur de 2 groupes de 2 droites parallèles.</li>
		<li>L'espace à l'intérieur d'un cylindre (symbole Ø).</li>
		<li>L'espace entre 2 cylindres coaxiaux.</li>
		<li>L'espace entre 2 surfaces équidistantes ou 2 plans parallèles.</li>
		<li>L'espace à l'intérieur de 2 groupes de 2 plans parallèles.</li>
		<li>L'espace à l'intérieur d'une sphère (symbole SØ).</li>
	</ul>

	<p>Une spécification de même valeur peut s'appliquer à plusieurs surfaces.</p>

	<p>Si on souhaite que les éléments soient spécifiés par une seule zone de tolérance, il faut ajouter le symbole de zone commune (voir plus loin).</p>

    <h3>Tolérances de forme</h3>
	<table class="table">
	<caption>Tolérances de forme</caption>
	<thead>
		<tr>
			<th rowspan="2" class="w150p">Désignation</th>
			<th rowspan="2" class="w150p">Symbole</th>
			<th rowspan="2" class="w150p">Élément tolérancé</th>
			<th colspan="2">Caractéristiques de la zone de tolérance</th>
		</tr>
		<tr>
			<th>De situation</th>
			<th>Intrinsèque (écart tolérancé)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Rectitude</th>
			<td><img src="/assets/img/qlio/metro/rectitude.png" alt="Symbole de rectitude" /></td>
			<td>Ligne droite</td>
			<td>Aucune</td>
			<td>Ø d'un cylindre,<br />distance entre 2 droites ou 2 plans</td>
		</tr>
		<tr>
			<th scope="row">Circularité</th>
			<td><img src="/assets/img/qlio/metro/circularite.png" alt="Symbole de circularité" /></td>
			<td>Ligne circulaire</td>
			<td>Aucune</td>
			<td>Distance entre 2 cercles concentriques</td>
		</tr>
		<tr>
			<th scope="row">Forme d'une ligne quelconque</th>
			<td><img src="/assets/img/qlio/metro/forme_ligne.png" alt="Symbole de ligne" /></td>
			<td>Ligne quelconque</td>
			<td>Aucune</td>
			<td>Distance entre deux lignes</td>
		</tr>
		<tr>
			<th scope="row">Planéité</th>
			<td><img src="/assets/img/qlio/metro/planeite.png" alt="Symbole de planéité" /></td>
			<td>Surface plane</td>
			<td>Aucune</td>
			<td>Distance entre 2 plans parallèles</td>
		</tr>
		<tr>
			<th scope="row">Cylindricité</th>
			<td><img src="/assets/img/qlio/metro/cylindricite.png" alt="Symbole de cylindricité" /></td>
			<td>Surface cylindre</td>
			<td>Aucune</td>
			<td>Distance entre 2 cylindres coaxiaux</td>
		</tr>
		<tr>
			<th scope="row">Forme d'une surface quelconque</th>
			<td><img src="/assets/img/qlio/metro/forme_surface.png" alt="Symbole de surface" /></td>
			<td>Surface quelconque</td>
			<td>Aucune</td>
			<td>Distance entre 2 surfaces</td>
		</tr>
	</tbody>
	</table>

	<h3>Tolérance de rectitude</h3>
	<p class="h4-like">Définition</p>
	<p>Une génératrice du cylindre doit être comprise entre 2 droites parallèles distantes de 0.02 mm.</p>
	<img src="/assets/img/qlio/metro/tolerance_rectitude_definition.png" alt="Interprétation de la rectitude" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 2 droites parallèles distantes de h.</p>
	<img src="/assets/img/qlio/metro/tolerance_rectitude.png" alt="Représentation de la rectitude" />

	<h3>Tolérance de circularité</h3>
	<p class="h4-like">Définition</p>
	<p>Le contour du trou doit être compris entre les 2 cercles concentriques de 0.02 mm.</p>
	<img src="/assets/img/qlio/metro/tolerance_circularite_definition.png" alt="Interprétation de la circularité" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance dans le plan considéré est limité par 2 cercles concentriques distants de h.</p>
	<img src="/assets/img/qlio/metro/tolerance_circularite.png" alt="Représentation de la circularité" />

	<h3>Tolérance de planéité</h3>
	<p class="h4-like">Définition</p>
	<p>La surface doit être comprise entre 2 plans parallèles distants de 0.05 mm.</p>
	<img src="/assets/img/qlio/metro/tolerance_planeite_definition.png" alt="Interprétation de la planéité" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 2 plans parallèles distants de h sur une longueur de 80 mm.</p>
	<img src="/assets/img/qlio/metro/tolerance_planeite.png" alt="Représentation de la planéité" />

	<h3>Tolérance de cylindricité</h3>
	<p class="h4-like">Définition</p>
	<p>La surface considérée doit être comprise entre les 2 cylindres coaxiaux dont les rayons diffèrent de 0.05 mm.</p>
	<img src="/assets/img/qlio/metro/tolerance_cylindricite_definition.png" alt="Interprétation de la cylindricité" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance dans la surface est limité par 2 cercles coaxiaux distants du rayon h.</p>
	<img src="/assets/img/qlio/metro/tolerance_cylindricite.png" alt="Représentation de la cylindricité" />
	
    <h3>Tolérances d'orientation</h3>
	<table class="table">
	<caption>Tolérances d'orientation</caption>
	<thead>
		<tr>
			<th rowspan="2" class="w150p">Désignation</th>
			<th rowspan="2" class="w150p">Symbole</th>
			<th rowspan="2" class="w150p">Élément tolérancé</th>
			<th colspan="2">Caractéristiques de la zone de tolérance</th>
		</tr>
		<tr>
			<th class="w80p">De situation</th>
			<th class="w340p">Intrinsèque (écart tolérancé)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Parallélisme</th>
			<td><img src="/assets/img/qlio/metro/parallelisme.png" alt="Symbole de parallélisme" /></td>
			<td rowspan="3">Lignes droites - surfaces planes</td>
			<td rowspan="3">angles</td>
			<td rowspan="3">Ø d'un cylindre,<br />distance entre 2 droites ou 2 plans<br />avec <strong><u>une</u></strong> référence spécifiée</td>
		</tr>
		<tr>			
			<th scope="row">Perpendicularité</th>
			<td><img src="/assets/img/qlio/metro/perpendicularite.png" alt="Symbole de Perpendicularité" /></td>
		</tr>
		<tr>			
			<th scope="row">Inclinaison</th>
			<td><img src="/assets/img/qlio/metro/inclinaison.png" alt="Symbole dinclinaison" /></td>
		</tr>
	</tbody>
	</table>

	<h3>Tolérance de parallélisme</h3>
	<p class="h4-like">Définition</p>
	<p>La surface B doit être comprise entre 2 plans parallèles distants de 0.05 mm par rapport à la surface A.</p>
	<img src="/assets/img/qlio/metro/tolerance_parallelisme_definition.png" alt="Interprétation de la parallélisme" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérances est limitée par 2 plans distants de h disposés parallèlement au plan de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_parallelisme.png" alt="Représentation de la parallélisme" />

	<h3>Tolérance de perpendicularité</h3>
	<p class="h4-like">Définition</p>
	<p>La surface tolérancée doit être comprise entre 2 plans parallèles distants de 0.05 mm et perpendiculaire à la surface de référence A.</p>
	<img src="/assets/img/qlio/metro/tolerance_perpendicularite_definition.png" alt="Interprétation de la perpendicularité" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 2 plans parallèles distants de h et disposés perpendiculairement au plan de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_perpendicularite.png" alt="Représentation de la perpendicularité" />

	<h3>Tolérance de inclinaison</h3>
	<p class="h4-like">Définition</p>
	<p>La surface tolérancée doit être comprise entre 2 plans parallèles distants de 0.08 mm et inclinés de 45° par rapport à l'axe de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_inclinaison_definition.png" alt="Interprétation de l'inclinaison" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 2 plans parallèles distants de h et inclinés à l'angle spécifique sur l'axe de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_inclinaison.png" alt="Représentation de l'inclinaison" />

    <h3>Tolérances de position</h3>
	<table class="table">
	<caption>Tolérances de position</caption>
	<thead>
		<tr>
			<th rowspan="2" class="w150p">Désignation</th>
			<th rowspan="2" class="w150p">Symbole</th>
			<th rowspan="2" class="w150p">Élément tolérancé</th>
			<th colspan="3">Caractéristiques de la zone de tolérance</th>
		</tr>
		<tr>
			<th class="w80p">De situation</th>
			<th colspan="2" class="w340p">Intrinsèque (écart tolérancé)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Symétrie</th>
			<td><img src="/assets/img/qlio/metro/symetrie.png" alt="Symbole de symétrie" /></td>
			<td>Points <br /> Lignes droites <br /> Surfaces planes</td>
			<td>Angles <br />Distances</td>
			<td>distance entre 2 droites ou 2 surfaces</td>
			<td rowspan="3">avec <strong><u>une</u></strong> référence spécifiée</td>
		</tr>
		<tr>			
			<th scope="row">Concentricité</th>
			<td><img src="/assets/img/qlio/metro/concentricite.png" alt="Symbole de concentricité" /></td>
			<td>Points</td>
			<td>Distance</td>
			<td>Ø d'un cercle</td>
		</tr>
		<tr>			
			<th scope="row">Coaxialité</th>
			<td><img src="/assets/img/qlio/metro/coaxialite.png" alt="Symbole de coaxialité" /></td>
			<td>Lignes droites</td>
			<td>Distance</td>
			<td>Ø d'un cylindre</td>
		</tr>
		<tr>			
			<th scope="row">Localisation</th>
			<td><img src="/assets/img/qlio/metro/localisation.png" alt="Symbole de localisation" /></td>
			<td>Points <br /> Lignes <br /> Surfaces</td>
			<td>Angles <br />Distances</td>
			<td colspan="2">Ø d'un cylindre, distance entre 2 droites ou 2 plans<br />avec <strong><u>une</u></strong> référence ou un <strong><u>système</u></strong> de référence spécifié</td>
		</tr>
	</tbody>
	</table>

	<h3>Tolérance de symétrie</h3>
	<p class="h4-like">Définition</p>
	<p>Le plan médian de la rainure doit être compris entre 2 plans parallèles distants de 0.04 mm et disposés symétriquement par rapport au plan médian.</p>
	<img src="/assets/img/qlio/metro/tolerance_symetrie_definition.png" alt="Interprétation de la symétrie" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 2 plans parallèles distants de h sont disposés symétriquement par l'axe du plan médian de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_symetrie.png" alt="Représentation de la symétrie" />

	<h3>Tolérance de coaxialité</h3>
	<p class="h4-like">Définition</p>
	<p>L'axe du ø 24 h 8 doit être compris dans une zone de ø 0.02 mm coaxiale à l'axe du cylindre de référence ø 18 h 6.</p>
	<img src="/assets/img/qlio/metro/tolerance_coaxialite_definition.png" alt="Interprétation de la coaxialité" />
	<p class="h4-like">Interprétation</p>
	<p>La tolérance est limitée par 1 zone cylindrique de ø h dont l'axe coïncide avec l'axe de référence.</p>
	<img src="/assets/img/qlio/metro/tolerance_coaxialite.png" alt="Représentation de la coaxialité" />

	<h3>Tolérance de localisation</h3>
	<p class="h4-like">Définition</p>
	<p>L'axe du trou doit être compris dans une zone cylindrique de ø 0.1 mm dont l'axe est dans la position théorique spécifiée.
		<br />A : appui plan.
		<br />B : orientation.
		<br />C : butée.</p>
	<img src="/assets/img/qlio/metro/tolerance_localisation_definition.png" alt="Interprétation de la localisation" />
	<p class="h4-like">Interprétation</p>
	<p>La zone de tolérance est limitée par 1 cylindre de ø h dont l'axe est dans la position théorique de la ligne considérée.</p>
	<img src="/assets/img/qlio/metro/tolerance_localisation.png" alt="Représentation de la localisation" />

    <h3>Tolérances de battement</h3>
	<table class="table">
	<caption>Tolérances de battement</caption>
	<thead>
		<tr>
			<th rowspan="2" class="w150p">Désignation</th>
			<th rowspan="2" class="w150p">Symbole</th>
			<th rowspan="2" class="w150p">Élément tolérancé</th>
			<th colspan="2">Caractéristiques de la zone de tolérance</th>
		</tr>
		<tr>
			<th class="w80p">De situation</th>
			<th class="w340p">Intrinsèque (écart tolérancé)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Battement simple</th>
			<td><img src="/assets/img/qlio/metro/battement_simple.png" alt="Symbole de battement simple" /></td>
			<td>Lignes appartenant à un plan, cylindre, cône</td>
			<td rowspan="2">Angles <br />Distances</td>
			<td rowspan="2">Distance entre 2 lignes 
			<br />Distance entre 2 surfaces
			<br />avec <strong><u>une</u></strong> référence ou un <strong><u>système</u></strong> de référence spécifié</td>
		</tr>
		<tr>			
			<th scope="row">Battement total</th>
			<td><img src="/assets/img/qlio/metro/battement_total.png" alt="Symbole de battement total" /></td>
			<td>Surface plane, cylindrique, conique</td>
		</tr>
	</tbody>
	</table>

    <h3>Tolérances complémentaires</h3>
	<table class="table">
	<caption>Symboles complémentaires</caption>
	<thead>
		<tr>
			<th class="w300p">Description</th>
			<th>Symbole</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Indication de l'élément tolérancé</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Indication de l'élément de référence</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Indication de référence partielle</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Dimension théorique exacte</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Zone de tolérance projetée</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Exigence du maximum de matière</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Exigence du minimum de matière</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Condition à l'état libre (pièces non rigides)</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Tout autour (profil)</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Exigence de l'enveloppe</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Zone commune</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Diamètre intérieur</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Diamètre extérieur</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Diamètre sur flancs</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Ligne</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Non convexe</th>
			<td></td>
		</tr>
		<tr>			
			<th scope="row">Section droite quelconque</th>
			<td></td>
		</tr>
	</tbody>
	</table>


	<h2>Zone commune</h2>
	
	<p>Il est possible de spécifier une tolérance géométrique entre plusieurs éléments séparés. Si nécessaire, cette spécification permet de définir une référence.</p>

	<img src="/assets/img/qlio/metro/zone_commune.png" alt="Zone commune" />


	<h2>Zone de tolérance projetée</h2>

	<p>Les conditions fonctionnelles peuvent conduire à tolérancer non pas l'élément réel lui-même, mais sa projection en dehors de la pièce. C'est notamment le cas lors des assemblages par vis.</p>
	<p>L'élément tolérancé est le prolongement de l'élément réel.</p>

	<img src="/assets/img/qlio/metro/tolerance_projetee.png" alt="Zone de tolérance projetée" />




