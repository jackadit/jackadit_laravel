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
$sNavigation=navigation('metro', '5');
?>




<h1>Tolérances géométriques non affectées de tolérances individuelles</h1>
<em><a href="./cours/metro/EN22768-2-novembre1993.pdf">D'après ISO 2768-2</a></em>

<p>Afin de définir complètement la géométrie d'une pièce, il faut à la fois des spécifications dimensionnelles et géométriques, ce qui implique une cotation très lourde.</p>
<p>Dans le même esprit que pour la tolérance générale ISO 2768-1, la norme ISO 2768-2 défini des limites aux défauts géométriques lorsqu'il n'y a pas d'indication spécifique sur le dessin. En effet, il n'est pas cohérent de fixer le diamètre d'un arbre à 100±0,05 si le défaut de circularité de cet arbre peut dépasser cette valeur. On peut citer aussi l'exemple d'une pièce dont l'épaisseur serait très précise mais avec un mauvais parallélisme.</p>
<p>ISO 2768-2 fixe des tolérances géométriques générales pour les surfaces non affectées de tolérance géométrique individuelle.</p>

	<h2>Indication sur le dessin</h2>

	<p>A l'intérieur ou à proximité du cartouche, on doit trouver l'indication ISO 2768 accompagnée de la classe de tolérance d'ISO 2768-1 puis la classe de tolérance d'ISO 2768-2.</p>
	<p>Exemple : ISO 2768 m-K</p>

	<p>Il est possible de complété par la lettre E si tous les éléments isolés sont concernés par le principe de l'enveloppe.</p>
	<p>Exemple ISO 2768-mK-E</p>

	<p>La classe de tolérance suivant ISO 2768-1 peut être omise si elle ne s'applique pas.</p>
	<p>Exemple ISO 2768-K</p>

	<h2>Tolérances des éléments isolés</h2>

    <h3>Rectitude et planéité</h3>
	<p>La rectitude est basée sur la longueur de la ligne correspondante.</p>
	<p>La planéité est basée sur la plus grande dimension latérale de la surface ou sur le diamètre d´une surface circulaire.</p>

	<table class="table">
	<caption>Tolérances générales de rectitude et de planéité</caption>
	<thead>
		<tr>
			<th class="w100p" rowspan="2">Classe de tolérance</th>
			<th colspan="6">Tolérances générales de rectitude et de planéité pour des plages de longueurs nominales</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th></th>
			<td>jusqu'à <strong>10</strong></td>
			<td>au-delà de <strong>10</strong> jusqu'à <strong>30</strong></td>
			<td>au-delà de <strong>30</strong> jusqu'à <strong>100</strong></td>
			<td>au-delà de <strong>100</strong> jusqu'à <strong>300</strong></td>
			<td>au-delà de <strong>300</strong> jusqu'à <strong>1000</strong></td>
			<td>au-delà de <strong>1000</strong> jusqu'à <strong>3000</strong></td>
		</tr>
		<tr>			
			<th scope="row">H</th>
			<td>0.02</td>
			<td>0.06</td>
			<td>0.1</td>
			<td>0.2</td>
			<td>0.3</td>
			<td>0.4</td>
		</tr>
		<tr>			
			<th scope="row">K</th>
			<td>0.05</td>
			<td>0.1</td>
			<td>0.2</td>
			<td>0.4</td>
			<td>0.6</td>
			<td>0.8</td>
		</tr>
		<tr>			
			<th scope="row">L</th>
			<td>0.1</td>
			<td>0.2</td>
			<td>0.4</td>
			<td>0.8</td>
			<td>1.2</td>
			<td>1.6</td>
		</tr>
	</tbody>
	</table>


    <h3>Circularité</h3>

	<p>La tolérance de circularité est égale à la tolérance sur le diamètre, sans être supérieure à la valeur correspondante de la tolérance de battement circulaire radial.</p>

    <h3>Cylindricité</h3>
	
	<p>La cylindricité n'est pas spécifiée par cette norme cependant elle reste encadrée par la composition des tolérances de circularité, rectitude et parallélisme des génératrices opposées du cylindre. Ces spécifications peuvent être générales ou provenir de spécifications géométriques individuelles. L'exigence de l'enveloppe peut permettre de limiter convenablement le défaut de cylindricité.</p>

	
	<h2>Tolérances des éléments associés</h2>
	<p>La dimension de l'alésage précède celle de l'arbre ou se trouve au dessus, la dimension nominale n'est inscrite qu'une fois.</p>

    <h3>Parallélisme</h3>

	<p>La tolérance générale de parallélisme est égale à la plus grande valeur entre la tolérance dimensionnelle et la tolérance de planéité/rectitude. La référence est le plus long des éléments ou un des deux si les dimensions sont identiques.</p>

    <h3>Perpendicularité</h3>

	<p>La référence est le plus long des éléments ou un des deux si les dimensions sont identiques.</p>
	
	<table class="table">
	<caption>Tolérances générales de perpendicularité</caption>
	<thead>
		<tr>
			<th class="w100p" rowspan="2">Classe de tolérance</th>
			<th colspan="4">Tolérances générales de perpendicularité pour des plages de longueurs nominales des côtés les plus courts</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th></th>
			<td>jusqu'à <strong>100</strong></td>
			<td>au-delà de <strong>100</strong> jusqu'à <strong>300</strong></td>
			<td>au-delà de <strong>300</strong> jusqu'à <strong>1000</strong></td>
			<td>au-delà de <strong>1000</strong> jusqu'à <strong>3000</strong></td>
		</tr>
		<tr>			
			<th scope="row">H</th>
			<td>0.2</td>
			<td>0.3</td>
			<td>0.4</td>
			<td>0.5</td>
		</tr>
		<tr>			
			<th scope="row">K</th>
			<td>0.4</td>
			<td>0.6</td>
			<td>0.8</td>
			<td>1</td>
		</tr>
		<tr>			
			<th scope="row">L</th>
			<td>0.6</td>
			<td>1</td>
			<td>1.5</td>
			<td>2</td>
		</tr>
	</tbody>
	</table>

    <h3>Symétrie</h3>

	<p>La référence est le plus long des éléments ou un des deux si les dimensions sont identiques.</p>
	<p>Les tolérances générales de symétrie s´appliquent quand au moins l´un des deux éléments a un plan médian ou quand les axes des deux éléments sont perpendiculaires entre eux.</p>
	
	<table class="table">
	<caption>Tolérances générales de symétrie</caption>
	<thead>
		<tr>
			<th class="w100p" rowspan="2">Classe de tolérance</th>
			<th colspan="4">Tolérances générales de symétrie pour des plages de longueurs nominales</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th></th>
			<td>jusqu'à <strong>100</strong></td>
			<td>au-delà de <strong>100</strong> jusqu'à <strong>300</strong></td>
			<td>au-delà de <strong>300</strong> jusqu'à <strong>1000</strong></td>
			<td>au-delà de <strong>1000</strong> jusqu'à <strong>3000</strong></td>
		</tr>
		<tr>			
			<th scope="row">H</th>
			<td colspan="4">0.5</td>
		</tr>
		<tr>			
			<th scope="row">K</th>
			<td colspan="2">0.6</td>
			<td>0.8</td>
			<td>1</td>
		</tr>
		<tr>			
			<th scope="row">L</th>
			<td>0.6</td>
			<td>1</td>
			<td>1.5</td>
			<td>2</td>
		</tr>
	</tbody>
	</table>

    <h3>Coaxialité</h3>

	<p>Cette norme ne spécifie pas les tolérances de coaxialité.</p>
	<p>La coaxialité reste cependant limitée car elle est incluse dans le battement radial avec la circularité. La tolérance de coaxialité ne dépassera pas la valeur du battement radial.</p>

    <h3>Battement circulaire</h3>

	<p>La référence est la surface portante si elle est identifiable. Dans le cas contraire on prendra comme référence l'élément le plus long ou un des 2 si les dimensions sont égales.</p>
	
	<table class="table">
	<caption>Tolérances de battement circulaire</caption>
	<thead>
		<tr>
			<th class="w100p" rowspan="2">Classe de tolérance</th>
			<th>Tolérances de battement circulaire</th>
		</tr>
	</thead>
	<tbody>
		<tr>			
			<th scope="row">H</th>
			<td>0.1</td>
		</tr>
		<tr>			
			<th scope="row">K</th>
			<td>0.2</td>
		</tr>
		<tr>			
			<th scope="row">L</th>
			<td>0.5</td>
		</tr>
	</tbody>
	</table>
	
	<p>Il convient de connaitre le niveau de précision de la production avant de fixer la classe de précision.</p>
	<p>Une pièce ne sera pas mise au rebut systématiquement si une spécification dépasse occasionnellement la tolérance générale, sauf si le fonctionnement de la pièce est affecté. Ce type de décision doit faire l'objet d'un accord entre le client et le fournisseur.</p>

	<h2>Exemple issu d'ISO 2768-2</h2>
	
	<div class="notice exemple">
		<p>Exemple explicite issu de la norme ISO 2768-2 :</p>
		<img src="/assets/img/qlio/metro/exemple_iso2768-2_explicite.png" alt="exemple explicite issu de iso2768-2" />
	
		<p>Exemple de dessin de ce qui est sous entendu par la norme ISO 2768-2 (ajouté en trait mixte) :</p>
		<img src="/assets/img/qlio/metro/exemple_iso2768-2_implicite.png" alt="exemple implicite issu de iso2768-2" />
	</div>


