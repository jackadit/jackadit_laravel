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
$sNavigation = navigation('implantation', '6'); ?>




<h1>Méthodes des antériorités</a></h1>

<p>La méthode consiste à trouver l'ordre optimal de placement des machines dans les ilots.</p>

<p>Nous avons les ilots suivants :</p>

<div class="formule">
	<p>Ilot 2 :</p>
	<p>Machines : M3, M6, M14, M15, M16, M17</p>
	<p>Pièces : P2, P5, P8</p>
</div>

<div class="formule">
	<p>Ilot 3 :</p>
	<p>Machines : M4, M5, M10, M11, M12, M13</p>
	<p>Pièces : P3, P4</p>
</div>

<p>La pièce P7 appartenant aux deux ilots, on va l'ignorer dans un premier temps.</p>

<p>Commençons par l'ilot 2.</p>

<h2>Détermination de l'ilot 2</h2>

<p>Il faut construire la matrice suivante en listant les machines en horizontal et en vertical dans l'ordre obtenu avec la méthode de KING.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td></td>
<td></td>
<td></td>
<td></td>
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


<p>On avait donc les produits et les gammes suivantes.</p>

<table class="table w500p">
<thead>
<tr>
<th class="w100p">Produits</th>
<th colspan="4">Gamme / Phases</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<th>10</th>
<th>20</th>
<th>30</th>
<th>40</th>
</tr>
<tr>
<td>P1</td>
<td>M1</td>
<td>M18</td>
<td>M7</td>
<td>M9</td>
</tr>
<tr class="center bg-gris-light">
<td>P2</td>
<td>M17</td>
<td>M3</td>
<td>M15</td>
<td>M14</td>
</tr>
<tr>
<td>P3</td>
<td>M10</td>
<td>M5</td>
<td>M4</td>
<td>M12</td>
</tr>
<tr>
<td>P4</td>
<td>M10</td>
<td>M11</td>
<td>M13</td>
<td>M12</td>
</tr>
<tr class=" bg-gris-light">
<td>P5</td>
<td>M17</td>
<td>M16</td>
<td>M6</td>
<td>M14</td>
</tr>
<tr>
<td>P6</td>
<td>M1</td>
<td>M8</td>
<td>M2</td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td>M16</td>
<td>M5</td>
<td>M6</td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P8</td>
<td>M17</td>
<td>M3</td>
<td>M15</td>
<td>M14</td>
</tr>
</tbody>
</table>

<p>Débutons avec le produit P2 et la liaison M17 - M3.</p>
<p>On va remplir avec le chiffre 1 l'intersection entre la colonne de la machine 17 et la ligne de la machine 3.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P2</td>
<td class=" bg-vert-light">M17</td>
<td class=" bg-vert-light">M3</td>
<td>M15</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td></td>
<td></td>
<td></td>
<td></td>
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


<p>Puis on fait de même avec la liaison M3 - M15.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P2</td>
<td>M17</td>
<td class=" bg-vert-light">M3</td>
<td class=" bg-vert-light">M15</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td></td>
<td></td>
<td></td>
<td></td>
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

<p>Puis on fait de même avec la liaison M15 - M14.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P2</td>
<td>M17</td>
<td>M3</td>
<td class=" bg-vert-light">M15</td>
<td class=" bg-vert-light">M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td></td>
<td></td>
<td></td>
<td></td>
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


<p>Ensuite on fait de même avec le produit P5 et la liaison M17 - M16.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td class=" bg-vert-light">M17</td>
<td class=" bg-vert-light">M16</td>
<td>M6</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
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

<p>Puis on fait de même avec la liaison M16 - M6.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td>M17</td>
<td class=" bg-vert-light">M16</td>
<td class=" bg-vert-light">M6</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
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

<p>Suivi de la liaison M6 - M14.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td>M17</td>
<td>M16</td>
<td class=" bg-vert-light">M6</td>
<td class=" bg-vert-light">M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
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

<p>On s'occupe du dernier produit P8 et on débute avec la liaison M17 - M3.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td class=" bg-vert-light">M17</td>
<td class=" bg-vert-light">M3</td>
<td>M15</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
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


<p>Comme la liaison existe déjà, on n'a rien à faire...  on poursuit donc avec la prochaine liaison M3 - M15. Là non plus il n'y a rien à faire puisqu'elle existe également.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td>M17</td>
<td class=" bg-vert-light">M3</td>
<td class=" bg-vert-light">M15</td>
<td>M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
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

<p>Puis on termine avec la liaison M15 - M14. Là encore, elle existe déjà.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P5</td>
<td>M17</td>
<td>M3</td>
<td class=" bg-vert-light">M15</td>
<td class=" bg-vert-light">M14</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
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


<p>L'étape suivante consiste à additionner les chiffres par ligne pour le niveau 1.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>14</th>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>Ensuite là où on a "0" … on va éliminer les lignes et les colonnes concernées et inscrire la machine dans le niveau I.</p>
<p>Les niveaux II, III, et IV ne sont pas concernés, on les "supprime" également.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On aditionne à nouveau suivant les lignes les chiffres restant pour le niveau II.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On "élimine" à nouveau les lignes et les colonnes où on trouve 0 et on inscrit la machine concernée dans le niveau 2. On commence avec la M3</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td>1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>Puis la M16</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M16</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>

<p>On aditionne à nouveau suivant les lignes les chiffres restant pour le niveau III.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td>2</td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td>0</td>
<td></td>
<td></td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td>0</td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M16</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>


<p>On indique et on barre la machine M15.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M15</td>
<td>-</td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M16</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>

<p>On indique et on barre la machine M6 et on additionne les chiffres restants.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">0</span></td>
<td></td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M15</td>
<td>-</td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M6</td>
<td>-</td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M16</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>


<p>Il n'en reste plus donc on peut terminer en plaçant la dernière machine, c'est-à-dire, la M14.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 2</span></th>
<th>17</th>
<th>14</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>17</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M17</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>14</th>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">0</span></td>
<td>M14</td>
</tr>
<tr>
<th>3</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M3</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>15</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M15</td>
<td>-</td>
</tr>
<tr>
<th>6</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M6</td>
<td>-</td>
</tr>
<tr>
<th>16</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M16</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>


<h2>Détermination de l'ilot 3</h2>

<p>On fait de même pour l'ilot 3.</p>

<p>On a les produits et les gammes suivantes.</p>

<table class="table w500p">
<thead>
<tr>
<th class="w100p">Produits</th>
<th colspan="4">Gamme / Phases</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<th>10</th>
<th>20</th>
<th>30</th>
<th>40</th>
</tr>
<tr>
<td>P1</td>
<td>M1</td>
<td>M18</td>
<td>M7</td>
<td>M9</td>
</tr>
<tr>
<td>P2</td>
<td>M17</td>
<td>M3</td>
<td>M15</td>
<td>M14</td>
</tr>
<tr class=" bg-gris-light">
<td>P3</td>
<td>M10</td>
<td>M5</td>
<td>M4</td>
<td>M12</td>
</tr>
<tr class=" bg-gris-light">
<td>P4</td>
<td>M10</td>
<td>M11</td>
<td>M13</td>
<td>M12</td>
</tr>
<tr>
<td>P5</td>
<td>M17</td>
<td>M16</td>
<td>M6</td>
<td>M14</td>
</tr>
<tr>
<td>P6</td>
<td>M1</td>
<td>M8</td>
<td>M2</td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td>M16</td>
<td>M5</td>
<td>M6</td>
<td></td>
</tr>
<tr>
<td>P8</td>
<td>M17</td>
<td>M3</td>
<td>M15</td>
<td>M14</td>
</tr>
</tbody>
</table>

<p>On débute avec le produit P3 et la liaison M10 - M5.</p>
<p>On va remplir avec le chiffre 1 l'intersection entre la colonne de la machine 10 et la ligne de la machine 5.</p>
<p>Sachant que le déplacement de la machine à la machine n'existe pas on peut également "supprimer" ces cases de la matrice.</p>

<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P3</td>
<td class=" bg-vert-light">M10</td>
<td class=" bg-vert-light">M5</td>
<td>M4</td>
<td>M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On continue avec la liaison M5 - M4.</p>


<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P3</td>
<td>M10</td>
<td class=" bg-vert-light">M5</td>
<td class=" bg-vert-light">M4</td>
<td>M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>Puis la liaison M4 - M12.</p>


<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P3</td>
<td>M10</td>
<td>M5</td>
<td class=" bg-vert-light">M4</td>
<td class=" bg-vert-light">M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>


<p>On passe au produit P4 et la première liaison M10 - M11.</p>


<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P4</td>
<td class=" bg-vert-light">M10</td>
<td class=" bg-vert-light">M11</td>
<td>M13</td>
<td>M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>Puis la liaison M11 - M13.</p>


<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P4</td>
<td>M10</td>
<td class=" bg-vert-light">M11</td>
<td class=" bg-vert-light">M13</td>
<td>M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td>1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>Et on termine avec la liaison M13 - M12.</p>


<table class="table noborder w500p">
<tbody>
<tr class=" bg-gris-light">
<td>P4</td>
<td>M10</td>
<td>M11</td>
<td class=" bg-vert-light">M13</td>
<td class=" bg-vert-light">M12</td>
</tr>
</tbody>
</table>


<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td>1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On additionne les chiffres des lignes.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td>1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On rempli la machine M10 dans le niveau I et on barre les lignes et les colonnes de cette machine dans la matrice.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On additionne les chiffres des lignes restantes pour le niveau II.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td></td>
<td></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>12</th>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td></td>
<td class="fondBleu"></td>
<td>1</td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>


<p>On s'occupe des machines M5 et M11.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M5</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M11</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>12</th>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td>1</td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>


<p>On additionne les lignes restantes.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
</tr>
<tr>
<th>5</th>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M5</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M11</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>12</th>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td>1</td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>On s'occupe des machines M4 et M13.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M4</td>
<td>-</td>
</tr>
<tr>
<th>5</th>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M5</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M11</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>12</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td></td>
<td></td>
</tr>
<tr>
<th>13</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M13</td>
<td>-</td>
</tr>
</tbody>
</table>

<p>Puis de la M12 restante.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 3</span></th>
<th>4</th>
<th>5</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>4</th>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M4</td>
<td>-</td>
</tr>
<tr>
<th>5</th>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M5</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>10</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">0</span></td>
<td>M10</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>11</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class="fondBleu"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M11</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>12</th>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td class=" bg-gris-light">1</td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">2</span></td>
<td><span class="rouge">0</span></td>
<td>M12</td>
</tr>
<tr>
<th>13</th>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light">1</td>
<td class=" bg-gris-light"></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M13</td>
<td>-</td>
</tr>
</tbody>
</table>

<h2>Détermination de l'ilot 1</h2>

<p>On ontient pour l'ilot le résultat suivant.</p>

<table class="table noborder w800p">
<thead>
<tr>
<th class="noborder"><span class="rouge">Ilot 1</span></th>
<th>1</th>
<th>2</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>18</th>
<th class="noborder"></th>
<th>I</th>
<th>II</th>
<th>III</th>
<th>IV</th>
</tr>
</thead>
<tbody>
<tr>
<th>1</th>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><span class="rouge">0</span></td>
<td>M1</td>
<td>-</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>2</th>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M2</td>
<td>-</td>
</tr>
<tr>
<th>7</th>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td>1</td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M7</td>
<td>-</td>
</tr>
<tr>
<th>8</th>
<td>1</td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M8</td>
<td>-</td>
<td>-</td>
</tr>
<tr>
<th>9</th>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td class="fondBleu"></td>
<td></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M9</td>
</tr>
<tr>
<th>18</th>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="fondBleu"></td>
<td><span class="rouge">1</span></td>
<td><span class="rouge">0</span></td>
<td>M18</td>
<td>-</td>
<td>-</td>
</tr>
</tbody>
</table>


