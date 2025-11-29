<?php
/**
 * BUT : Ergonomie des postes de travail
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		21/09/21 	06:03::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Ergonomie
 * @access public
 * @uses 
 */
$sNavigation=navigation('ergo', '2');
?>




<h1>Mesurer le temps</h1>


	<h2>Comment mesurer le temps ?</h2>

<p>Le système <span class="tag--info">méthodes de mesure du temps</span> (MTM) (développé par l'Association MTM pour les normes et la recherche) composé d'étalons de temps prédéterminés a été mis au point à partir d'études cinématographiques d'opérations industrielles, et Les normes de temps ont été publiées pour la première fois en 1948.</p>
<p>MTM analyse un travail industriel ou toute opération ou méthode manuelle en fonction des mouvements de base ou des mouvements humains nécessaires à son exécution et attribue à chaque mouvement un temps prédéterminé déterminé par la nature du mouvement et les conditions dans lesquelles il est effectué. Lorsque toutes ces heures sont additionnées, cela donne l'heure normale du travail. Le temps standard peut être déterminé en ajoutant des indemnités appropriées.</p>
<p>La plupart de ces activités industrielles pourraient être regroupées dans les dix mouvements suivants :</p>
<ol>
	<li>Atteindre (R)</li>
	<li>Bouge-toi	(M)</li>
	<li>Tour	(T)</li>
	<li>Appliquer une pression	(AP)</li>
	<li>Saisir	(G)</li>
	<li>Position	(P)</li>
	<li>Libération	(RL)</li>
	<li>Se dégager	(RÉ)</li>
	<li>Eye Times (Voyage et focus)	(ET et EF)</li>
	<li>Mouvement du corps, des jambes et des pieds.</li>
</ol>

<p>Il existe des tableaux séparés de valeurs de temps pour tous les mouvements ci-dessus dans des conditions changeantes dans lesquelles ils sont effectués.</p>

<p class="h3-like">Valeurs de temps MTM-1</p>
<p>Les tableaux fournissent la date du temps de mouvement pour chaque élément de base. L'unité de temps utilisée dans ces tableaux est la suivante: - Mille (c'est-à-dire 0, 00001 heure), créée pour les tables de temps de mouvements MTM et connue sous le nom d'Unité de mesure temporelle (TMU).</p>

<p>Ainsi, un TMU = 0, 0006 minute = 0, 036 sec.</p>


<h2>Les unités de temps</h2>
		
<p>Les unités de temps généralement utilisées dans la confection, sont exprimées en : seconde, centième de minute, dix millième d'heure et cent millième d'heure.</p>
<p>La raison est très simple : il est plus facile de comptabiliser les relevés de temps, dépendant du système décimal que ceux qui dépendent du système sexagésimal.</p>
<p>Le système sexagésimal n'est ni pratique ni facile lorsque l'on veut convertir, par exemple, des heures en minutes et inversement.</p>

<p>Symboles :</p>
<ul>
	<li>Jour : j</li>
	<li>Heure : h</li>
	<li>Minute : mn</li>
	<li>Seconde : s</li>
	<li>Centièmes de seconde : cs</li>
	<li>Centièmes de minute : cmn</li>
	<li>Dix-millième d'heure : dmh</li>
	<li>Cent-millième d'heure : cmh</li>
</ul>

<p class="h3-like">Conversion des unités de temps</p>

<h4>Les Secondes</h4>

<table class="table">
	<tr>
		<th>&nbsp;</th>
		<td>cmh</td>
		<td>dmh</td>
		<td>h</td>
		<td>cmn</td>
		<td>mn</td>
		<td>cs</td>
		<td>s</td>
	</tr>
	<tr>
		<td>s</td>
		<td>1000/36</td>
		<td>10/36</td>
		<td>1/3600</td>
		<td>10/6</td>
		<td>1/60</td>
		<td>100</td>
		<td>1</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 s = 10/6 cmn</p>
<p>150 s = 150 x 10/6 cmn = 250 cmn</p>

<h4>Les Centièmes de seconde</h4>

<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>cs</td>
		<td>10/36</td>
		<td>1/36</td>
		<td>1/360 000</td>
		<td>1/60</td>
		<td>1/6 000</td>
		<td>1</td>
		<td>1/100</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 cs = 10/36 cmh</p>
<p>120 cs = 120 x 10/36 cmh = 33,33 cmh</p>

<h4>Les Minutes</h4>

<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>mn</td>
		<td>10 000/6</td>
		<td>1 000/6</td>
		<td>1/60</td>
		<td>100</td>
		<td>1</td>
		<td>6 000</td>
		<td>60</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 mn = 1000/6 dmh = 166,67 dmh</p>
<p>12 mn = 12 x 1000/6 dmh = 2000 dmh</p>

<h4>Les Centièmes de Minute</h4>
<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>cmn</td>
		<td>100/6</td>
		<td>10/6</td>
		<td>1/6 000</td>
		<td>1</td>
		<td>1/100</td>
		<td>60</td>
		<td>6/10</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 cmn = 6/10 s = 0,6 s</p>
<p>72 cmn = 72 x 6/10 s = 43,2 s</p>

<h4>Les Heures</h4>
<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>h</td>
		<td>100 000</td>
		<td>10 000</td>
		<td>1</td>
		<td>6 000</td>
		<td>60</td>
		<td>360 000</td>
		<td>3 600</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 h = 6000 cmn</p>
<p>0,19 h = 0,19 x 6000 cmn = 1140 cmn</p>

<h4>Les Dix-millièmes d'heure</h4>
<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>dmh</td>
		<td>10</td>
		<td>1</td>
		<td>1/10 000</td>
		<td>6/10</td>
		<td>6/1 000</td>
		<td>36</td>
		<td>36/100</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 dmh = 36/100 s = 0,36 s</p>
<p>50 dmh = 50 x 36/100 s = 18 s</p>

<h4>Les Cent-millièmes d'heure</h4>
<table class="table">
	<tr>
		<th>&nbsp;</th>
		<th>cmh</th>
		<th>dmh</th>
		<th>h</th>
		<th>cmn</th>
		<th>mn</th>
		<th>cs</th>
		<th>s</th>
	</tr>
	<tr>
		<td>cmh</td>
		<td>1</td>
		<td>1/10</td>
		<td>1/100 000</td>
		<td>6/100</td>
		<td>6/10 000</td>
		<td>36/10</td>
		<td>36/1 000</td>
	</tr>
</table>

<p>Exemples :</p>
<p>1 cmh = 6/100 cmn = 0,06 cmn</p>
<p>120 cmh = 120 x 0,06 cmn = 7,2 cmn</p>





