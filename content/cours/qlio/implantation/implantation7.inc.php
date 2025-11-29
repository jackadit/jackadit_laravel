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
$sNavigation = navigation('implantation', '7', "fin"); ?>




<h1>Méthode BTE (Bureau des Temps Élémentaires)</a></h1>

<p>La méthode BTE, également appelée méthode OPTIMALE et méthode des gammes fictives, présente l'avantage d'indiquer la solution théoriquement optimale, surtout quand le nombre des liaisons est grand (grand nombre de produits, grand nombre de postes).</p>
<p>Elle se base sur une démarche plus rigoureuse que de la méthode des chainons ou des ficelles.</p>

<p>Les produits variés à fabriquer sont classés en familles analogiques.</p>
<p>Chaque famille est caractérisée par sa gamme opératoire et les quantités à produire.</p>

<p>Son domaine d'application se situe dans les productions en ligne (production de masse : industrie automobile, etc).</p>
<p>Les implantations d'ateliers sont très souvent imposées par les gammes des différents produits.</p>

<p>Étant données :</p>
<ul>
	<li>Les gammes de fabrication et de montage de chaque famille de produits.</li>
	<li>Les cadences de production.</li>
</ul>

<p>La méthode consiste : </p>
<ul>
	<li>À chercher une gamme fictive et unique synthétisant les différentes gammes réelles.</li>
	<li>À regrouper certains postes à un même niveau de fabrication sans que cela entraîne de retours des produits en arrière.</li>
</ul>

<p>On complétera par :</p>
<ul>
	<li>Le tableau des gammes.</li>
	<li>Le tableau de dénombrement des phases.</li>
	<li>Le tableau de classement des postes en une seule ligne de production.</li>
	<li>Le tableau de regroupement des postes par niveaux.</li>
	<li>Le tableau des liaisons.</li>
</ul>

<div class="exercice">Exercice

<p>On considère un atelier où l'on fabrique quatre familles de produits A, B, C et D.</p>
<p>On donne la liste des gammes par famille de produits avec indications des postes de charges ainsi que la densité du trafic.</p>
<p>Les statistiques de productions montrent que sur une période de référence, le volume des fabrications a été : </p>



<table class="table w500p">
<thead>
<tr>
<th>Produit</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>D</th>
</tr>
</thead>
<tbody>
<tr>
<th>Volume</th>
<td>70</td>
<td>140</td>
<td>70</td>
<td>210</td>
</tr>
<tr class="center fondGris">
<th>Coefficient</th>
<td>1</td>
<td>2</td>
<td>1</td>
<td>3</td>
</tr>
</tbody>
</table>



<table class="table">
<thead>
<tr>
<th colspan="2" class="">Produits A<br /> Coef 1</th>
<th colspan="2" class="">Produits B<br /> Coef 2</th>
<th colspan="2" class="">Produits C<br /> Coef 1</th>
<th colspan="2">Produits D<br /> Coef 3</th>
</tr>
<tr>
<th>Phases</th>
<th class="w80p">Postes</th>
<th>Phases</th>
<th class="w80p">Postes</th>
<th>Phases</th>
<th class="w80p">Postes</th>
<th>Phases</th>
<th class="w80p border-right">Postes</th>
</tr>
</thead>
<tbody>
<tr>
<td>I Tournage</td>
<td>TO</td>
<td>I Tournage</td>
<td>TO</td>
<td>I Tournage</td>
<td>TO</td>
<td>I Tournage</td>
<td>TO</td>
</tr>
<tr>
<td>II Fraisage</td>
<td>FS1</td>
<td>II Fraisage</td>
<td>FS1</td>
<td>II Perçage</td>
<td>PE1</td>
<td>II Fraisage</td>
<td>FS2</td>
</tr>
<tr>
<td>III Fraisage</td>
<td>FS2</td>
<td>III Perçage</td>
<td>PE1</td>
<td>III Perçage</td>
<td>PE2</td>
<td>III Perçage</td>
<td>PE2</td>
</tr>
<tr>
<td>IV Perçage</td>
<td>PE1</td>
<td>IV Ebavurage</td>
<td>EB</td>
<td>IV Lamage</td>
<td>PE3</td>
<td>IV Lamage</td>
<td>PE3</td>
</tr>
<tr>
<td>V Perçage</td>
<td>PE2</td>
<td></td>
<td></td>
<td>V Taraudage</td>
<td>PE4</td>
<td>V Ebavurage</td>
<td>EB</td>
</tr>
<tr>
<td>VI Ebavurage</td>
<td>EB</td>
<td></td>
<td></td>
<td>VI Ebavurage</td>
<td>EB</td>
<td></td>
<td></td>
</tr>

</tbody>
</table>

<p class="formule">3 postes « TO » et 2 postes « FS2 »</p>

</div>


<h2>Tableau des gammes</h2>

<p class="h3-like">Méthodologie</p>

<p>Il est rempli à partir de la liste des gammes par produits ou familles de produits.</p>

<p>L'<span class="tag--info">indice</span> caractérise l'intensité du trafic des produits (cadence de production).</p>

<p>Exemple :</p>
<pre>
produit x : 50 pièces / mois = indice 1
Produit y : 100 pièces / mois = indice 2
</pre>

<p>Les <span class="tag--info">numéros de phase</span> : Si le produit transite par un poste de travail, on inscrit en chiffre romain le numéro de la phase dans la ligne du poste de travail.</p>

<p>Exemple :</p>
<pre>Le produit B transite par PE1 en phase III : on inscrit III à l'intersection de la colonne B et de la ligne PE1.</pre>

<table class="table w600p">
<thead>
<tr>
<th rowspan="5">Poste de <br />travail</th>
<th colspan="4">Produits</th>
<th rowspan="5">Total</th>
</tr>
<tr>
<td>A</td>
<td>B</td>
<td>C</td>
<td>D</td>
</tr>
<tr>
<td colspan="4">Indices</td>
</tr>
<tr>
<td>1</td>
<td>2</td>
<td>1</td>
<td>3</td>
</tr>
<tr>
<td colspan="4">Numéros de phase</td>
</tr>
</thead>
<tbody>
<tr>
<td>TO</td>
<td>I</td>
<td>I</td>
<td>I</td>
<td>I</td>
<td>4</td>
</tr>
<tr>
<td>FS1</td>
<td>II</td>
<td>II</td>
<td class="diagonalCross"></td>
<td class="diagonalCross"></td>
<td>2</td>
</tr>
<tr>
<td>FS2</td>
<td>III</td>
<td class="diagonalCross"></td>
<td class="diagonalCross"></td>
<td>II</td>
<td>2</td>
</tr>
<tr>
<td>PE1</td>
<td>IV</td>
<td>III</td>
<td>II</td>
<td class="diagonalCross"></td>
<td>3</td>
</tr>
<tr>
<td>PE2</td>
<td>V</td>
<td class="diagonalCross"></td>
<td>III</td>
<td>III</td>
<td>3</td>
</tr>
<tr>
<td>PE3</td>
<td class="diagonalCross"></td>
<td class="diagonalCross"></td>
<td>IV</td>
<td>IV</td>
<td>2</td>
</tr>
<tr>
<td>PE4</td>
<td class="diagonalCross"></td>
<td class="diagonalCross"></td>
<td>V</td>
<td class="diagonalCross"></td>
<td>1</td>
</tr>
<tr>
<td>EB</td>
<td>VI</td>
<td>IV</td>
<td>VI</td>
<td>V</td>
<td>4</td>
</tr>
<tr>
<td>Total</td>
<td>6</td>
<td>4</td>
<td>6</td>
<td>5</td>
<td>21</td>
</tr>
</tbody>
</table>




<h2>Tableau de dénombrement des phases</h2>

<p>Il est rempli à partir du tableau des gammes.</p>

<p><span class="tag--info">Dénombrement des phases</span> : le dénombrement des phases s'effectue par spécialité (par ligne). On indique pour chaque spécialité le nombre de phases de même rang dans la colonne correspondante.</p>

<p><span class="tag--info">Affectation des postes identiques</span> (si le nombre de postes > 1) : elle se fait en fonction des possibilités de charge de chaque machine afin d'obtenir un équilibrage normal dans l'atelier.</p>

<p class="notice exemple">Exemple : Pour le poste FS2 : 1 poste en phase de rang II et 1 poste en phase de rang III.</p>

<p class="notice remarque">Les 3 postes de TO interviennent tous en phase de rang I. L'affectation de ces postes n'est pour le moment pas d'une importance extrême, la répartition sera effectuée lors de l'implantation finale.</p>

<p>Recherche des maximums</p>

<p>Principe :</p>

<p>Si toutes les tâches qu'effectue le poste « X » se trouvent au rang « N », c'est au N-ième rang que le poste « X » sera le mieux placé.</p>
<p>On va donc rechercher le chiffre maximal unique de chaque phase de rang et l'entourer (recherche par colonne).</p>
<p>Si une ligne ne possède aucun maximum entouré, on souligne le nombre qui correspond à la phase de rang moyen (cas de 3 nombres identiques : 1 1 1).</p>

<p>À la spécialité FS2, nous avons deux postes à répartir donc nous soulignerons 1 / n°1 et 1 / n°2.</p>


<p>On commence donc par remplir les spécialités avec le nombre de postes concernés.</p>

<table class="table w800p">
<thead>
<tr>
<th rowspan="2">Nb de <br />postes</th>
<th rowspan="2">Spécialités<br />(postes)</th>
<th colspan="6">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
</tr>
</thead>
<tbody>
<tr>
<td>3</td>
<td>TO</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>FS1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>FS2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>PE1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>PE2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td colspan="2">Total</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>



<p>Ensuite on compte pour chaque spécialité, le nombre de fois qu'elle apparait pour chaque phase dans la gamme.</p>

<p>Pour le poste TO, il apparait quatre fois en phase I, le poste FS1 apparait deux fois en phase II, le poste FS2 apparait une fois en phase III et une fois en phase II.</p>
<p>Et ainsi de suite...</p>

<table class="table w800p">
<thead>
<tr>
<th rowspan="2">Nb de <br />postes</th>
<th rowspan="2">Spécialités<br />(postes)</th>
<th colspan="6">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
</tr>
</thead>
<tbody>
<tr>
<td>3</td>
<td>TO</td>
<td>4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>4</td>
</tr>
<tr>
<td>1</td>
<td>FS1</td>
<td></td>
<td>2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>2</td>
<td>FS2</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>1</td>
<td>PE1</td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>PE2</td>
<td></td>
<td></td>
<td>2</td>
<td></td>
<td>1</td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td>2</td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>1</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>2</td>
<td>4</td>
</tr>
<tr>
<td colspan="2">Total</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>21</td>
</tr>
</tbody>
</table>

<fieldset>
	<legend>Résolution de cas complexes</legend>
<p>Exemple : Pour une spécialité X, on dispose de 4 postes identiques qu'il faut répartir sur les différentes phases de rang.</p>

<p>Aucun chiffre n'est entouré et l'étude des possibilités de charge des machines a permis d'affecter : </p>
<ul>
	<li>à X n°1, les phases de rang 3, 4 et 5.</li>
	<li>à X n°2, les phases de rang 6 et 8.</li>
	<li>à X n°3, la phase de rang 9.</li>
	<li>à X n°4, les phases de rang 10 et 12.</li>
</ul>

<table class="table w800p">
<thead>
<tr>
<th class="w100p" rowspan="2">Nb de <br />postes</th>
<th class="w100p" rowspan="2">Spécialités<br />postes</th>
<th colspan="12">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
<td>VII</td>
<td>VIII</td>
<td>IX</td>
<td>X</td>
<td>XI</td>
<td>XII</td>
</tr>
</thead>
<tbody>
<tr>
<td>4</td>
<td>X</td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>2</td>
<td></td>
<td>1</td>
<td>3</td>
<td>2</td>
<td></td>
<td>2</td>
<td>13</td>
</tr>
</tbody>
</table>


<table class="table w800p">
<thead>
<tr>
<th class="w100p" rowspan="2">Nb de <br />postes</th>
<th class="w100p" rowspan="2">Spécialités<br />postes</th>
<th colspan="12">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
<td>VII</td>
<td>VIII</td>
<td>IX</td>
<td>X</td>
<td>XI</td>
<td>XII</td>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Xn°1</td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>Xn°2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>Xn°3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>3</td>
<td></td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>Xn°4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
<td></td>
<td>2</td>
<td>4</td>
</tr>
</tbody>
</table>

</fieldset>

<p>On entoure d'abord les maximums de chaque colonne. Puis on souligne les maximums de chaque ligne.</p>


<div class="notice remarque"> 
<p>S'il y a deux fois le maximum, comme pour FS2, on souligne les deux (car il y a deux machines FS2 !).</p>
<p>S'il n'y avait qu'une seule machine FS2, on mettrait le trait souligné entre les deux.</p>
<p>S'il y a trois maximums, comme pour PE1, on souligne celui du milieu.</p>
<p class="tag--danger">Attention : uniquement s'il n'y a pas déjà de maximum entouré sur la ligne !</p>
</div>


<table class="table w800p">
<thead>
<tr>
<th rowspan="2">Nb de <br />postes</th>
<th rowspan="2">Spécialités<br />(postes)</th>
<th colspan="6">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
</tr>
</thead>
<tbody>
<tr>
<td>3</td>
<td>TO</td>
<td><span class="cercle">4</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>4</td>
</tr>
<tr>
<td>1</td>
<td>FS1</td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>2</td>
<td>FS2</td>
<td></td>
<td><span class="souligne">1</span><span class="fr"><sup>n°1</sup></span></td>
<td><span class="souligne">1</span><span class="fr"><sup>n°2</sup></span></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>1</td>
<td>PE1</td>
<td></td>
<td>1</td>
<td><span class="souligne">1</span></td>
<td>1</td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>PE2</td>
<td></td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td>1</td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>1</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>1</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="souligne">1</span></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td><span class="cercle">2</span></td>
<td>4</td>
</tr>
<tr>
<td colspan="2">Total</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>21</td>
</tr>
</tbody>
</table>


<h2>Tableau de classement des postes en une seule ligne de production</h2>

<p>Ce tableau permet de chercher la ligne de fabrication idéale autorisant un écoulement rationnel de la production.</p>

<p>La ligne idéale étant la diagonale, on cherchera à rapprocher les postes affectés à un rang « n » du numéro d'ordre « n » de la gamme fictive.</p>

<p>Ce tableau se rempli à partir du tableau de dénombrement des phases.</p>

<p>Dans l'ordre des colonnes, on reporte successivement et en face de la spécialité correspondante, le maximum entouré puis les maximums soulignés.</p>

<table class="table w800p">
<thead>
<tr>
<th rowspan="2">Ordre de <br />la gamme<br /> fictive</th>
<th rowspan="2">Spécialités<br />(postes)</th>
<th colspan="6">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>TO</td>
<td><span class="cercle">4</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>4</td>
</tr>
<tr>
<td>2</td>
<td>FS1</td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>3</td>
<td>FS2/1</td>
<td></td>
<td><span class="souligne">1</span><span class="fr"><sup>n°1</sup></span></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>PE2</td>
<td></td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td>1</td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>5</td>
<td>FS2/2</td>
<td></td>
<td></td>
<td><span class="souligne">1</span><span class="fr"><sup>n°2</sup></span></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>.<tr>
<td>6</td>
<td>PE1</td>
<td></td>
<td>1</td>
<td><span class="souligne">1</span></td>
<td>1</td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>7</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td><span class="cercle">2</span></td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>8</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="souligne">1</span></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>9</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td><span class="cercle">2</span></td>
<td>4</td>
</tr>
<tr>
<td colspan="2">Total</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>21</td>
</tr>
</tbody>
</table>



<h2>Tableau de regroupement des postes par niveaux</h2>

<p>On regroupe les postes par niveaux N1, N2, N3, etc. de telle manière que le maximum de la colonne phases de rang « n » se retrouve au niveau « n ».</p>

<p>Pour remplir le tableau, il suffit de regrouper par colonne, à partir du tableau précédent les maximums entourés et soulignés et de porter ces regroupements successifs aux niveaux correspondants.</p>

<p>On reportera également les valeurs non soulignées.</p>

<table class="table w800p">
<thead>
<tr>
<th rowspan="2">Niveau</th>
<th rowspan="2" class="w200p">Groupement</th>
<th colspan="6">Phases de rang</th>
<th rowspan="2">Total</th>
</tr>
<tr>
<td>I</td>
<td>II</td>
<td>III</td>
<td>IV</td>
<td>V</td>
<td>VI</td>
</tr>
</thead>
<tbody>
<tr>
<td>N1</td>
<td>3TO</td>
<td>4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>4</td>
</tr>
<tr>
<td>N2</td>
<td>FS1 + FS2/1</td>
<td></td>
<td>3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>3</td>
</tr>
<tr>
<td>N3</td>
<td>PE2 + FS2/2 + PE1</td>
<td></td>
<td>1</td>
<td>4</td>
<td>1</td>
<td>1</td>
<td></td>
<td>7</td>
</tr>
<tr>
<td>N4</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td>2</td>
<td></td>
<td></td>
<td>2</td>
</tr>
<tr>
<td>N5</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>N6</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>2</td>
<td>4</td>
</tr>
<tr>
<td colspan="2">Total</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>4</td>
<td>3</td>
<td>2</td>
<td>21</td>
</tr>
</tbody>
</table>

<h2>Tableau des liaisons</h2>

<p>Le premier des buts poursuivis par la méthode BTE est atteint : obtenir pour tous les produits un écoulement dans le sens des niveaux successifs I, II, III, … avec le moins possible de retours en arrière.</p>

<p>Il reste à éviter les croisements, c'est-à-dire à placer les postes d'un niveau donné par rapport aux postes du niveau précédent. Pour ce faire, on établit le tableau des liaisons sous une forme voisine de celle utilisée dans la méthode dite des « chaînons ».</p>

<p>On y interpose tous les postes en précisant ceux affectés. Les différents niveaux sont séparés par des traits forts.</p>

<p>Cette représentation permet un raisonnement analytique précis, par exemple :</p>
<ul>
	<li>« verticalement » de niveau I à niveau II « horizontalement »,</li>
	<li>« verticalement » de niveau II à niveau III « horizontalement »,</li>
	<li>et ainsi de suite.</li>
</ul>

<p>On met ainsi en évidence les trajets parcourus par les différents produits.</p>

<p>L'affectation des produits aux différents postes se fera en fonction de leur quantité et de leur temps d'usinage.</p>
<p>Le tableau des liaisons permet de déterminer la position relative des différents postes.</p>

<p class="notice remarque">Les cases grisées ne peuvent normalement pas être remplies. Mais vous pouvez dans certains cas vous retrouver avec des cases remplies au-delà de la diagonale.</p>


<div class="notice exemple">
<p>Exemple : de niveau I à niveau II.</p>

    <p>On voit dans cet exemple que le produit A passe de TO1 (1<sup>ère</sup> phase) à FS1 (2<sup>e</sup> phase), avec un coefficient égal à 1 (intensité du trafic).</p>

    <p>Le produit B passe de TO2 (1<sup>ère</sup> phase) à FS1 (2<sup>e</sup> phase).</p>

    <p>Le produit D passe de TO3 (1<sup>ère</sup> phase) à FS21 (2<sup>e</sup> phase)</p>

</div>


<table class="table w800p">
<thead>
<tr>
<td colspan="3">Niveau</td>
<td colspan="3">I</td>
<td colspan="2">II</td>
<td colspan="3">III</td>
<td>IV</td>
<td colspan="2">V</td>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="2"></td>
<td colspan="2">Produits affectés</td>
<td>A</td>
<td>B C</td>
<td>D</td>
<td>A B</td>
<td>D</td>
<td>A</td>
<td>A B<br />C</td>
<td>A C<br />D</td>
<td>C D</td>
<td>C</td>
<td></td>
</tr>
<tr class="">
<td></td>
<td class="diagonalFalling">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de<br />&nbsp;à</td>
<td>TO1</td>
<td>TO2</td>
<td>TO3</td>
<td>FS1</td>
<td>FS21</td>
<td>FS22</td>
<td>PE1</td>
<td>PE2</td>
<td>PE3</td>
<td>PE4</td>
<td>EB</td>
</tr>
<tr>
<td rowspan="3">I</td>
<td>A</td>
<td>TO1</td>
<td class="diagonalFalling">&nbsp;</td>
<td></td>
<td></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>B C</td>
<td>TO2</td>
<td></td>
<td class="diagonalFalling"></td>
<td></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>D</td>
<td>TO3</td>
<td></td>
<td></td>
<td class="diagonalFalling"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td rowspan="2">II</td>
<td>A B</td>
<td>FS1</td>
<td>A(1)</td>
<td>B(2)</td>
<td></td>
<td class="diagonalFalling"></td>
<td></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>D</td>
<td>FS21</td>
<td></td>
<td></td>
<td>D(3)</td>
<td></td>
<td class="diagonalFalling"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td rowspan="3">III</td>
<td>A</td>
<td>FS22</td>
<td></td>
<td></td>
<td></td>
<td>A(1)</td>
<td></td>
<td class="diagonalFalling"></td>
<td></td>
<td></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>A B<br />C</td>
<td>PE1</td>
<td></td>
<td>C(1)</td>
<td></td>
<td>B(2)</td>
<td></td>
<td>A(1)</td>
<td class="diagonalFalling"></td>
<td></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>A C<br />D</td>
<td>PE2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>D(3)</td>
<td></td>
<td>A(1)<br />C(1)</td>
<td class="diagonalFalling"></td>
<td class="fondGris"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>IV</td>
<td>C D</td>
<td>PE3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>C(1)<br />D(3)</td>
<td class="diagonalFalling"></td>
<td class="fondGris"></td>
<td class="fondGris">&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td rowspan="2">V</td>
<td>C</td>
<td>PE4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>C(1)</td>
<td class="diagonalFalling"></td>
<td>&nbsp;<br />&nbsp;</td>
</tr>
<tr>
<td>&nbsp;<br />&nbsp;</td>
<td>EB</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>B(2)</td>
<td>A(1)</td>
<td>D(3)</td>
<td>C(1)</td>
<td class="diagonalFalling"></td>
</tr>
</tbody>
</table>

<p class="h3-like">Étude pour le produit A :</p>

<p>À partir du tableau des liaisons, nous déterminerons les relations entre les différents niveaux relatifs aux phases de fabrication du produit A.</p>

<ul>
	<li>De niveau I à niveau II : FS1 du même côté que TO1.</li>
	<li>De niveau II à niveau III : FS2/2 du même côté que FS1.</li>
	<li>De niveau III à niveau III : PE1 du même côté que FS2/2, PE2 du même côté que PE1.</li>
	<li>De niveau III à niveau V : EB du même côté que PE2.</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/implantation/implantation_BTE.png" alt="Schéma final de l'implantation avec la méthode BTE" />

<p>En conclusion :</p>

<div class="notice remarque">
<p>Pour réaliser une implantation pratique, il faut tenir compte des réalités de l'atelier.</p>
<p>Une implantation doit être faite en fonction d'une fabrication déterminée et n'est valable que pour cette fabrication.</p>
<p>Un problème d'implantation ne peut être résolu qu'après avoir mené à bien une étude préalable aboutissant à la mise en « familles » de produits de l'entreprise et à la détermination précise des gammes de fabrication.</p>
</div>


