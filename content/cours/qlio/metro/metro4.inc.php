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
$sNavigation=navigation('metro', '4');
?>




<h1>Tolérances pour dimensions linéaires et angulaires non affectées de tolérances individuelles (ou tolérances générales)</h1>
<em><a href="./cours/metro/EN22768-1-novembre1993.pdf">D'après ISO 2768-1 </a></em>

<p>La norme ISO 2768-1 s'applique aux dimensions linéaires et angulaires.des pièces usinées ou en tôle. Cette norme a pour but de simplifier le dessin technique. Elle propose de ne pas mettre de tolérances pour les cotes non fonctionnelles (essentielles pour le fonctionnement de la pièce). Les tolérances pour les différentes dimensions sont ensuite issues de tableaux prenant en compte la classe de tolérance, la dimension nominale et la fonction de la géométrie concernée (épaisseur, chanfrein, rayon).</p>


	<h2>Inscription sur le dessin et choix de la classe de tolérance</h2>
	<p>À l'intérieur ou à proximité du cartouche, on doit trouver l'indication ISO 2768 accompagnée de la classe de tolérance : ISO 2768 m pour une classe de qualité moyenne.</p>
	<p>Chaque entreprise fixe sa classe de précision sachant qu'à partir de valeurs relativement larges, produire moins précis ne diminue pas forcément le cout de production.</p>
	<p>Une pièce ne sera pas mise au rebut systématiquement si une dimension dépasse occasionnellement la tolérance générale, sauf si le fonctionnement de la pièce est affecté.</p>
	<p>Ce type de décision doit faire l'objet d'un accord entre le client et le fournisseur.</p> 

	<h2>Tableaux des écarts</h2>
		

	<p>Valeurs en millimètres :</p>
	<table class="table">
	<caption>Écarts admissibles pour dimensions linéaires à l'exception des dimensions d'arêtes abattues (pour rayons extérieurs et hauteurs de chanfrein, voir tableau 2).</caption>
	<thead>
		<tr>
			<th class="w200p" colspan="2">Classe de tolérance</th>
			<th colspan="8">Écarts admissibles pour des plages de dimensions nominales</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="w100p" scope="col">Désignation</th>
			<th class="w100p" scope="col">Description</th>
			<td>de <strong>0.5</strong> <sup>(1)</sup> jusqu'à <strong>3</strong></td>
			<td>au-delà de <strong>3</strong> jusqu'à <strong>6</strong></td>
			<td>au-delà de <strong>6</strong> jusqu'à <strong>30</strong></td>
			<td>au-delà de <strong>30</strong> jusqu'à <strong>120</strong></td>
			<td>au-delà de <strong>120</strong> jusqu'à <strong>400</strong></td>
			<td>au-delà de <strong>400</strong> jusqu'à <strong>1000</strong></td>
			<td>au-delà de <strong>1000</strong> jusqu'à <strong>2000</strong></td>
			<td>au-delà de <strong>2000</strong> jusqu'à <strong>4000</strong></td>
		</tr>
		<tr>
			<th scope="row"><strong>f</strong></th>
			<td>fine</td>
			<td>&plusmn;0.05</td>
			<td>&plusmn;0.05</td>
			<td>&plusmn;0.1</td>
			<td>&plusmn;0.15</td>
			<td>&plusmn;0.2</td>
			<td>&plusmn;0.3</td>
			<td>&plusmn;0.5</td>
			<td>-</td>
		</tr>
		<tr>
			<th scope="row"><strong>m</strong></th>
			<td>moyenne</td>
			<td>&plusmn;0.1</td>
			<td>&plusmn;0.1</td>
			<td>&plusmn;0.2</td>
			<td>&plusmn;0.3</td>
			<td>&plusmn;0.5</td>
			<td>&plusmn;0.8</td>
			<td>&plusmn;1.2</td>
			<td>&plusmn;2</td>
		</tr>
		<tr>
			<th scope="row"><strong>c</strong></th>
			<td>grossière</td>
			<td>&plusmn;0.2</td>
			<td>&plusmn;0.3</td>
			<td>&plusmn;0.5</td>
			<td>&plusmn;0.8</td>
			<td>&plusmn;1.2</td>
			<td>&plusmn;2</td>
			<td>&plusmn;3</td>
			<td>&plusmn;4</td>
		</tr>
		<tr>
			<th scope="row"><strong>v</strong></th>
			<td>très grossière</td>
			<td>-</td>
			<td>&plusmn;0.5</td>
			<td>&plusmn;1</td>
			<td>&plusmn;1.5</td>
			<td>&plusmn;2.5</td>
			<td>&plusmn;4</td>
			<td>&plusmn;6</td>
			<td>&plusmn;8</td>
		</tr>
	</tbody>
	</table>
	<p><sup>(1)</sup> Pour les dimensions nominales inférieures à 0,5 mm, l'écart doit figurer à la suite de la dimension nominale.</p>

	<table class="table">
	<caption>Écarts admissibles pour dimensions linéaires d'arêtes abattues (rayons extérieurs et hauteurs de chanfrein).</caption>
	<thead>
		<tr>
			<th class="w200p" colspan="2">Classe de tolérance</th>
			<th colspan="3">Écarts admissibles pour des plages de dimensions nominales</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="w100p" scope="col">Désignation</th>
			<th class="w100p" scope="col">Description</th>
			<td>de <strong>0.5</strong> <sup>(1)</sup> jusqu'à <strong>3</strong></td>
			<td>au-delà de <strong>3</strong> jusqu'à <strong>6</strong></td>
			<td>au-delà de <strong>6</strong></td>
		</tr>
		<tr>
			<th scope="row"><strong>f</strong></th>
			<td>fine</td>
			<td rowspan="2">&plusmn;0.2</td>
			<td rowspan="2">&plusmn;0.5</td>
			<td rowspan="2">&plusmn;1</td>
		</tr>
		<tr>
			<th scope="row"><strong>m</strong></th>
			<td>moyenne</td>
		</tr>
		<tr>
			<th scope="row"><strong>c</strong></th>
			<td>grossière</td>
			<td rowspan="2">&plusmn;0.4</td>
			<td rowspan="2">&plusmn;1</td>
			<td rowspan="2">&plusmn;2</td>
		</tr>
		<tr>
			<th scope="row"><strong>v</strong></th>
			<td>très grossière</td>
		</tr>
	</tbody>
	</table>
	<p><sup>(1)</sup> Pour les dimensions nominales inférieures à 0,5 mm, l'écart doit figurer à la suite de la dimension nominale.</p>
	

	<p>&nbsp;</p>
	<table class="table">
	<caption>Écarts admissibles pour dimensions angulaires</caption>
	<thead>
		<tr>
			<th class="w200p" colspan="2">Classe de tolérance</th>
			<th colspan="5">Écarts admissibles en fonction des plages de longueurs, en millimètres, du côté le plus long de l'angle considéré</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th class="w100p" scope="col">Désignation</th>
			<th class="w100p" scope="col">Description</th>
			<td>jusqu'à <strong>10</strong></td>
			<td>au-delà de <strong>10</strong> jusqu'à <strong>50</strong></td>
			<td>au-delà de <strong>50</strong> jusqu'à <strong>120</strong></td>
			<td>au-delà de <strong>120</strong> jusqu'à <strong>400</strong></td>
			<td>au-delà de <strong>400</strong></td>
		</tr>
		<tr>
			<th scope="row"><strong>f</strong></th>
			<td>fine</td>
			<td rowspan="2">&plusmn;1°</td>
			<td rowspan="2">&plusmn;0°30'</td>
			<td rowspan="2">&plusmn;0°20'</td>
			<td rowspan="2">&plusmn;0°10'</td>
			<td rowspan="2">&plusmn;0°5'</td>
		</tr>
		<tr>
			<th scope="row"><strong>m</strong></th>
			<td>moyenne</td>
		</tr>
		<tr>
			<th scope="row"><strong>c</strong></th>
			<td>grossière</td>
			<td>&plusmn;1°30'</td>
			<td>&plusmn;1°</td>
			<td>&plusmn;0°30'</td>
			<td>&plusmn;0°15'</td>
			<td>&plusmn;0°10'</td>
		</tr>
		<tr>
			<th scope="row"><strong>v</strong></th>
			<td>très grossière</td>
			<td>&plusmn;3°</td>
			<td>&plusmn;2°</td>
			<td>&plusmn;1°</td>
			<td>&plusmn;0°30'</td>
			<td>&plusmn;0°20'</td>
		</tr>
	</tbody>
	</table>




