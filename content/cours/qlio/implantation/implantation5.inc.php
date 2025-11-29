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
$sNavigation = navigation('implantation', '5'); ?>




<h1>Méthodes de KING et KUZIAK</h1>

<h2>Méthodes de KUZIAK</h2>

<p class="h3-like">Objectifs :</p>

<p>Recherche constante de la réactivité face aux besoins du marché pour une meilleure compétitivité.</p>
<ul>
<li>Simplifier ses flux pour faciliter le pilotage.</li>
<li>Avoir une  meilleure lisibilité des flux.</li>
<li>Améliorer la gestion des flux en réduisant les trajets entre les postes, en éliminant les points d'engorgement, en évitant les retours en arrière, … pour augmenter la vitesse du flux.</li>
<li>Minimiser les stocks d'en-cours, les manipulations.</li>
<li>Améliorer les conditions de travail.</li>
<li>Optimiser l'occupation des surfaces par une meilleure prise en compte des contraintes des bâtiments et des moyens de production (bruit, dimensions, sécurité, vibration, …) .</li>
</ul>


<p class="h3-like">Méthodologie de détermination des ilots :</p>

<p>Déterminer des ilots est nécessaire lorsqu'on est confronté à des cas complexes.</p>


<ul>
	<li>Grand nombre de produits, grand nombre de postes, nombreuses phases.</li>
	<li>Son domaine d'application est plus particulièrement les productions en ligne (production de masse : industrie automobile, etc.).</li>
	<li>Les implantations d'ateliers sont très souvent imposées par les gammes des différents produits. </li>
	<li>Par une étude systématique des gammes, on peut identifier des familles de pièces qui ont des flux similaires et regrouper les machines requises en ilots.</li>
</ul>

<p class="h3-like">Définitions :</p>

<dl>
<dt>Ilots de production</dt> <dd>Groupe de machines ayant la charge de la fabrication d'une famille de pièces et dont la disposition a été optimisée pour simplifier les flux de matière.</dd>
<dt>Ilots indépendants</dt> <dd>Il n'existe pas de relation de flux entre les ilots.</dd>
<dt>Ilots dépendants</dt> <dd>Il existe une relation de flux entre les ilots.</dd>
</dl>

<div class="exercice">
<p>Exemple :</p>

<p>Pour illustrer cette démarche, prenons l'exemple d'un atelier de 18 postes de production (M1 à M18) permettant la réalisation de 8 produits (P1 à P8) parmi de nombreux autres produits.</p>
<p>Les pièces P1 à P8 sont issues d'une classification ABC et représentent la classe A.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/classificationABC.png" alt="Graphique d'une classification ABC" />


<table class="table">
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


<p>Sur cet exemple, proposer une solution théorique d'implantation d'atelier en respectant les objectifs et la méthodologie proposés ci-dessous.</p>

<p class="h3-like">Objectifs :</p>
 
<ul>
	<li>Éviter les retours en arrière.</li>
	<li>Trois ilots maximum.</li>
	<li>Équilibrer le nombre de machines par ilot.</li>
	<li>Minimiser le parcours des pièces.</li>
</ul>
 
<p class="h3-like">Méthodologie :</p>

<ul>
	<li>Trouver les ilots indépendants avec l'algorithme de KUZIAK.</li>
	<li>Dans les ilots indépendants, chercher si nécessaire une partition de machine avec l'algorithme de KING.</li>
	<li>Implanter chaque ilot avec la méthode des antériorités.</li>
	<li>Représenter le schéma théorique d'implantation avec une implantation la plus optimisée possible en fonction des objectifs..</li>
</ul>

</div>

<h3>Tableau des affectations pièces machines.</h3>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr>
<td>P1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
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
<td>1</td>
</tr>
<tr>
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P6</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>


<p>On met des « 1 » dans le tableau en fonction de la gamme des produits.</p>

<h3>Algorithme de KUZIAK</h3>

<ul> 
	<li>On sélectionne au hasard une pièce (exemple P1 : M1, M7, M9, M18).</li>
	<li>On barre la ligne P1.</li>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr>
<td>P1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
</tr>
<tr>
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P6</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>

<li>Puis on barre les colonnes qui correspondent aux « 1 » barrés.</li>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr>
<td>P1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
</tr>
<tr>
<td>P2</td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class="vertical"></td>
</tr>
<tr>
<td>P3</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
</tr>
<tr>
<td>P4</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
</tr>
<tr>
<td>P5</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
</tr>
<tr>
<td>P6</td>
<td class="vertical">1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
</tr>
<tr>
<td>P7</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td class="vertical"></td>
</tr>
<tr>
<td>P8</td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class="vertical"></td>
</tr>
</tbody>
</table>

	<li>En barrant les colonnes, on va peut-être rencontrer d'autres liaisons machines – pièces avec d'autres « 1 » (dans ce cas P6).</li>
	<li>On recommence avec P6 le même processus qu'avec P1, etc ….</li>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class="vertical"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P6</td>
<td class=" bg-gris-light">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

	<li>Lorsqu'on ne rencontre plus de liaisons pièces – machines en barrant les colonnes, on recense les machines et les pièces validées..</li>
	
<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

</ul>

<h3>Résultat : On détermine l'ilot 1.</h3>


<div class="formule">
	<p>Ilot 1 :</p>
	<p>Machines : M1, M2, M7, M8, M9, M18</p>
	<p>Pièces : P1, P6</p>
</div>


<h3>Phase 2 : On sélectionne les lignes attachées aux colonnes sélectionnées.</h3>

<blockquote>Pour séparer des ilots éventuellement rattachés entre eux par une machine, on ne prend dans un ilot que les pièces qui ont au moins 50% des machines déjà rattachées à celui-ci.</blockquote>

<p>On recommence avec P2 et on intègre P8 (4 machines sur 4), P5 (2 machines sur 4).</p>
<p>Puis P7 ( 2 machines sur 3) …  mais pas P3 (1 machine sur 4).</p>


<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

<p>Puis les verticales...</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td>1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

<p>On remarque qu'on croise les produits 5, 7 et 8.</p>
<p>Pour repartir avec les horizontales, la règle est qu'il ne faut considérer que les pièces dont les machines sont déjà barrées à au mois 50% en nombre.</p>
<p>Ce qui signifie que le produit transite déjà par ces machines, donc elles seront bien dans l'ilot qu'on est en train de constituer.</p>
<p>Dans notre cas, on va vérifier si c'est le cas pour les trois produits 5,7 et 8.</p>

<h4>Produit 5 :</h4>
<p>Deux machines non croisées (6 et 16), et deux machines déjà croisées (14 et 17). On a donc 2 sur 4, c'est-à-dire 50%.</p>
<p>Donc on pourra barrer ce produit.</p>

<h4>Produit 7 :</h4>
<p>Deux machines non croisées (5 et 6), et une machine déjà croisée (15). On a donc 1 sur 3, c'est-à-dire 33%, donc moins de 50% !</p>
<p>Donc on ne barrera pas ce produit.</p>

<h4>Produit 8 :</h4>
<p>Quatre machines déjà croisées (3, 14, 15 et 17). On a donc 4 sur 4, c'est-à-dire 100%.</p>
<p>Comme c'est 100% des machines qui sont déjà utilisées pour cet ilot, on n'aura plus à s'en occuper. Donc on peut barrer ce produit.</p>


<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td>1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

<p>On va maintenant s'occuper du produit P5. On barre donc sa ligne.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

<p>On rencontre les machines 6 et 16. On barre alors les verticales correspondantes.</p>


<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>


<p>On rencontre le produit P7. On continuera avec lui seulement si au moins 50% des machines sont déjà barrées.</p>
<p>Et c'est le cas, puisqu'on a deux machines (6 et 15) sur trois (la 5 n'étant pas barrée).</p>
<p>On a 66%, on doit donc continuer en barrant la ligne 7.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>

<p>On croise la machine 5, les autres sont déjà barrées. On trace donc la verticale pour cette machine.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr>
<td>P2</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td>1</td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class="vertical"></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="horizontal"></td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical"></td>
<td class="vertical">1</td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class="vertical">1</td>
<td class="horizontal"></td>
<td class="vertical">1</td>
<td class=" bg-gris-light"></td>
</tr>
</tbody>
</table>


<p>On croise le produit P3 uniquement.</p>
<p>Pour repartir, il faudrait au moins 50% des machines déjà barrées pour la ligne 3. Or c'est une seule sur quatre, c'est-à-dire 25%. Donc on s'arrête.</p>
<p>Comme on a traité tous les produits et toutes les machines y étant rattachées, on peut donc consituer le prochain ilot.</p>


<h3>Résultat : On détermine l'ilot 2.</h3>


<div class="formule">
	<p>Ilot 2 :</p>
	<p>Machines : M3, M5, M6, M14, M15, M16, M17</p>
	<p>Pièces : P2, P5, P7, P8</p>
</div>

<h3>Avantages de l'algorithme de KUZIAK.</h3>
 
<p>L'algorithme de Kuziak est très rapide, notre exemple as a été traité en très peu de temps.</p>
 

<p>Il reste maintenant à terminer la procédure pour vérifier si un autre ilot ne devrait pas être créé en plus de celui qui reste.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr class=" bg-gris-light">
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>

<p>On commence par barrer la ligne 3.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr class=" bg-gris-light">
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td></td>
<td class="horizontal">1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>

<p>On croise les machines 4, 5, 10 et 12.</p>
<p>On trace les verticales.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr class=" bg-gris-light">
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td></td>
<td class="horizontal">1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td>1</td>
<td class="vertical">1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>

<p>On croise les machines 10 et 12 pour le produit P4 mais pas les 11 et 13.</p>
<p>Ce qui fait deux sur quatre donc 50%, donc on continue.</p>

<table class="table w600p">
<thead>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>7</th>
<th>8</th>
<th>9</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th>18</th>
</tr>
</thead>
<tbody>
<tr class=" bg-gris-light">
<td>P1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
</tr>
<tr class=" bg-gris-light">
<td>P2</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
<tr>
<td>P3</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="horizontal">1</td>
<td></td>
<td class="horizontal">1</td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr>
<td>P4</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical"></td>
<td class="vertical"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class="vertical">1</td>
<td class="horizontal">1</td>
<td class="vertical">1</td>
<td class="horizontal">1</td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
</tr>
<tr class=" bg-gris-light">
<td>P5</td>
<td></td>
<td></td>
<td></td>
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
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P6</td>
<td>1</td>
<td>1</td>
<td class=" bg-gris-light"></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td class=" bg-gris-light"></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr class=" bg-gris-light">
<td>P8</td>
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
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
</tr>
</tbody>
</table>

<p>On a bien toutes les machines et tous les produits.</p>

<h3>Résultat : On détermine l'ilot 3.</h3>


<div class="formule">
	<p>Ilot 3 :</p>
	<p>Machines : M4, M5, M10, M11, M12, M13</p>
	<p>Pièces : P3, P4</p>
</div>


<p>On remarquera que nous avons la machine M5 dans les ilots 2 et 3.</p>
<p>La machine M5 doit être dédoublée si on veut rendre les îlots indépendants.</p>

<p>Bien sûr, le critère de choix pour ce dédoublement reste la charge de cette machine !</p>

<h2>Méthodes de KING</h2>

<p>La méthode de King est plus rigoureuse que la méthode de Kuziak.</p>

<p>La machine M5 étant partagée entre deux ilots, on va repartir de là pour déterminer dans quel ilot il serait idéal de la placer.</p>

<p>Il n'y avait aucune ambiguité sur l'ilot 1, nous n'avons donc plus besoin de l'étudier.</p>

<p>Il reste donc les machines M3, M4, M5, M6, M10, M11, M12, M13, M14, M15, M16, M17.</p>
<p>Et les produits P2, P3, P4, P5, P7 et P8.</p>

<h4>Méthodologie</h4>
<ul>
<li>On va reconstruire une matrice comme pour la méthode de KUZIAK. On mettra les machines en ligne et les pièces en colonne.</li>
<li>Ensuite, on va traduire la matrice en écriture binaire en affectant un poids en puissance de 2 à chacune des pièces.</li>
<li>On ordonne les lignes dans l'ordre décroissant de l'équivalent décimal. En cas d'égalité, on respecte l'ordre des machines.</li>
<li>On suit alors le même processus, mais sur les colonnes.</li>
<li>Puis on recommence le même processus sur les lignes.</li>
</ul>

<h3>Première itération.</h3>

<p>Les puissances de 2 sont classées du plus grand au plus petit (en dernier vous avez toujours 2<sup>0</sup> qui est égal à 1 !).</p>
<P>Dans la tableau on inscrit des "1" dans chaque case concernée par le produit.</p>
<p>Pour la pièce P2, la gamme nous indique qu'elle passe par les machines 17, 3, 15 et 14.</p>
<p>On va donc trouver des "1" à l'intersection de P2 et 3, puis P2 et 14, puis P2 et 15 et enfin P2 et 17.</p>
<p>Ensuite on additionne les nombres correspondant dans la table des puissances de 2.</p>
<p>Pour la pièce P2 ce sera : 2048 + 8 + 4 + 1 = 2061; Et ainsi de suite pour les autres pièces.</p>

<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"></th>
<th>2<sup>11</sup></th>
<th>2<sup>10</sup></th>
<th>2<sup>9</sup></th>
<th>2<sup>8</sup></th>
<th>2<sup>7</sup></th>
<th>2<sup>6</sup></th>
<th>2<sup>5</sup></th>
<th>2<sup>4</sup></th>
<th>2<sup>3</sup></th>
<th>2<sup>2</sup></th>
<th>2<sup>1</sup></th>
<th>2<sup>0</sup></th>
<th class="noborder"></th>
</tr>
</thead>
<tbody>
<tr>
<td class="noborder"></td>
<td>2048</td>
<td>1024</td>
<td>512</td>
<td>256</td>
<td>128</td>
<td>64</td>
<td>32</td>
<td>16</td>
<td>8</td>
<td>4</td>
<td>2</td>
<td>1</td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"><span class="rouge">1</span></th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th class="noborder"></th>
</tr>
</thead>
<tbody>
<tr>
<td>P2</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td>2061</td>
</tr>
<tr>
<td>P3</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1696</td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>240</td>
</tr>
<tr>
<td>P5</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td>267</td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>770</td>
</tr>
<tr>
<td>P8</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td>2061</td>
</tr>
</tbody>
</table>

<h3>Deuxième itération.</h3>

<p>Avant de commencer la deuxième itération, vous devez d'abord réordonner les lignes en commençant par celle ayant obtenu le plus grand "coefficient" jusqu'au plus petit.</p>
<p>Donc, dans notre exemple, on va classer P2 (2061), puis P8 (2061), puis P3 (1696), P7 (770), P5 (267) et P4 (240).</p>
<p>On additionne maintenant suivant les colonnes.</p>
<P>Pour la machine 3, la pièce P2 vaut 32 et la pièce P8 vaut 16. On obtient donc 32 + 16 = 48.</p>

<table class="table noborder w700p">
<thead>
<tr>
<th class="noborder"><span class="rouge">2</span></th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
<th>10</th>
<th>11</th>
<th>12</th>
<th>13</th>
<th>14</th>
<th>15</th>
<th>16</th>
<th>17</th>
<th class="noborder"></th>
<th class="noborder"></th>
<th class="noborder"></th>
</tr>
</thead>
<tbody>
<tr>
<td>P2</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class="noborder"></td>
<td>32</td>
<th>2<sup>5</sup></th>
</tr>
<tr>
<td>P8</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td class="noborder"></td>
<td>16</td>
<th>2<sup>4</sup></th>
</tr>
<tr>
<td>P3</td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="noborder"></td>
<td>8</td>
<th>2<sup>3</sup></th>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td class="noborder"></td>
<td>4</td>
<th>2<sup>2</sup></th>
</tr>
<tr>
<td>P5</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td>1</td>
<td>1</td>
<td class="noborder"></td>
<td>2</td>
<th>2<sup>1</sup></th>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="noborder"></td>
<td>1</td>
<th>2<sup>0</sup></th>
</tr>
<tr>
<td class="noborder"></td>
<td>48</td>
<td>8</td>
<td>12</td>
<td>6</td>
<td>9</td>
<td>1</td>
<td>9</td>
<td>1</td>
<td>50</td>
<td>48</td>
<td>6</td>
<td>50</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>


<h3>Troisième itération.</h3>

<p>On classe cette fois-ci les machines (donc les colonnes) par ordre décroissant de "coefficent".</p>
<p>Ce qui, dans notre exemple, correspond aux machines : 14, puis 17, puis 3, 15, 5, 10, 12, 4, 6, 16, 11 et 13.</p>
<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"></th>
<th>2<sup>11</sup></th>
<th>2<sup>10</sup></th>
<th>2<sup>9</sup></th>
<th>2<sup>8</sup></th>
<th>2<sup>7</sup></th>
<th>2<sup>6</sup></th>
<th>2<sup>5</sup></th>
<th>2<sup>4</sup></th>
<th>2<sup>3</sup></th>
<th>2<sup>2</sup></th>
<th>2<sup>1</sup></th>
<th>2<sup>0</sup></th>
<th class="noborder"></th>
</tr>
</thead>
<tbody>
<tr>
<td class="noborder"></td>
<td>2048</td>
<td>1024</td>
<td>512</td>
<td>256</td>
<td>128</td>
<td>64</td>
<td>32</td>
<td>16</td>
<td>8</td>
<td>4</td>
<td>2</td>
<td>1</td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"><span class="rouge">3</span></th>
<th>14</th>
<th>17</th>
<th>3</th>
<th>15</th>
<th>5</th>
<th>10</th>
<th>12</th>
<th>4</th>
<th>6</th>
<th>16</th>
<th>11</th>
<th>13</th>
<th class="noborder"></th>
</tr>
</thead>
<tbody>
<tr>
<td>P2</td>
<td>1</td>
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
<td></td>
<td>3840</td>
</tr>
<tr>
<td>P8</td>
<td>1</td>
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
<td></td>
<td>3840</td>
</tr>
<tr>
<td>P3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>240</td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td>142</td>
</tr>
<tr>
<td>P5</td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td>3084</td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td>99</td>
</tr>
</tbody>
</table>


<p>Et ainsi de suite jusqu'à la sixième itération.</p>

<h3>Sixième itération.</h3>

<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"><span class="rouge">6</span></th>
<th>14</th>
<th>17</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th>5</th>
<th>10</th>
<th>12</th>
<th>4</th>
<th>11</th>
<th>13</th>
</tr>
</thead>
<tbody>
<tr>
<td>P2</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
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
</tr>
<tr>
<td>P3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
</tr>
</tbody>
</table>


<p>On peut donc proposer de mettre le machine 5 dans l'ilot 3 et la pièce 7 va donc passer d'un ilot à l'autre.</p>

<table class="table noborder w600p">
<thead>
<tr>
<th class="noborder"><span class="rouge">6</span></th>
<th>14</th>
<th>17</th>
<th>3</th>
<th>15</th>
<th>6</th>
<th>16</th>
<th>5</th>
<th>10</th>
<th>12</th>
<th>4</th>
<th>11</th>
<th>13</th>
</tr>
</thead>
<tbody>
<tr>
<td>P2</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P8</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P5</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light"></td>
<td class=" bg-vert-light">1</td>
<td class=" bg-vert-light">1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>P7</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>1</td>
<td>1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
</tr>
<tr>
<td>P3</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light"></td>
</tr>
<tr>
<td>P4</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light"></td>
<td class=" bg-orange-light">1</td>
<td class=" bg-orange-light">1</td>
</tr>
</tbody>
</table>


<h4>Résultat :</h4>


<div class="formule">
	<p>Ilot 1 :</p>
	<p>Machines : M1, M2, M7, M8, M9, M18</p>
	<p>Pièces : P1, P6</p>
</div>

<div class="formule">
	<p>Ilot 2 :</p>
	<p>Machines : M3, M6, M14, M15, M16, M17</p>
	<p>Pièces : P2, P5, P8 et P7</p>
</div>

<div class="formule">
	<p>Ilot 3 :</p>
	<p>Machines : M4, M5, M10, M11, M12, M13</p>
	<p>Pièces : P3, P4 et P7</p>
</div>





