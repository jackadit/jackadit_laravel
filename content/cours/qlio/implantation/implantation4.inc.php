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
$sNavigation=navigation('implantation', '4');
?>




<h1>Méthodes d'implantation</h1>

<h2> Méthodes des ficelles</h2>

<p>Cette méthode est surtout pratique pour estimer l'ampleur des flux et des circulations.</p>
<p>On tend sur un plan des fils de couleurs correspondant aux transports à effectuer : la densité de la nappe de fils renseigne sur les débits à assurer et l'importance à donner aux aires de circulation.</p>
<p>Cette méthode conçue initialement avec des ficelles peut facilement être transposable sous forme informatique.</p>
<p>Un tel diagramme permet de déterminer :</p>
<ul>
	<li>La longueur des flux.</li>
	<li>Les passages fréquentés.</li>
	<li>Les cheminements difficiles.</li>
	<li>Les emplacements peu accessibles.</li>
	<li>Les goulots d'étranglement.</li>
	<li>Les points d'attente.</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/implantation/diagramme_ficelle.png" alt="Schéma d'un diagramme ficelle" />


<h2> Méthodes des chaînons</h2>

<p class="h3-like">Objectif :</p>

<p>Organiser l'implantation d'une unité de production, en structurant et raccourcissant le flux de matières.</p>


<p class="h3-like">Méthodologie :</p>
<ul>
	<li>Inventorier les postes de travail et les gammes opératoires.</li>
	<li>Appliquer la méthode des chaînons.</li>
	<li>Tracer l'implantation théorique.</li>
	<li>Adapter l'implantation théorique dans les locaux prévus.</li>
</ul>

<p class="h3-like">Définitions :</p>

<dl>
<dt>Chaînon</dt> <dd>Trajectoire de manutention réunissant les postes de travail successifs.</dd>
<dt>Noeud</dt> <dd>Poste de travail d'où émanent un ou plusieurs chaînons.</dd>
</dl>
<p>La démarche comprend 5 phases :</p>
<ol>
	<li>Définir la table des chaînons.</li>
	<li>Déterminer les indices de flux.</li>
	<li>Déterminer le nombre de chaînons de chaque poste.</li>
	<li>Tracer l'implantation théorique.</li>
	<li>Adapter l'implantation théorique aux locaux..</li>
</ol>


<div class="exercice">
<p>Exemple :</p>

<p>Atelier de 6 postes de production (M1 à M6) permettant la réalisation de 5 produits (P1 à P5).</p> 
<p>Le nombre de transferts peut être défini par le nombre de lots de transfert moyen durant une équipe de production.</p>

<table class="table">
<thead>
<tr>
<th class="w100p">Produits</th>
<th colspan="5">Gamme / Phases</th>
<th class="w100p border-right">Nb de transferts</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<th>10</th>
<th>20</th>
<th>30</th>
<th>40</th>
<th>50</th>
<th class="border-right"></th>
</tr>
<tr>
<td>P1</td>
<td>M1</td>
<td>M4</td>
<td>M2</td>
<td>M5</td>
<td></td>
<td>25</td>
</tr>
<tr>
<td>P2</td>
<td>M6</td>
<td>M2</td>
<td>M4</td>
<td>M1</td>
<td>M2</td>
<td>43</td>
</tr>
<tr>
<td>P3</td>
<td>M6</td>
<td>M2</td>
<td>M4</td>
<td>M1</td>
<td></td>
<td>15</td>
</tr>
<tr>
<td>P4</td>
<td>M1</td>
<td>M3</td>
<td>M2</td>
<td></td>
<td></td>
<td>24</td>
</tr>
<tr>
<td>P5</td>
<td>M1</td>
<td>M2</td>
<td>M3</td>
<td>M4</td>
<td></td>
<td>90</td>
</tr>
</tbody>
</table>

<h3>Phase 1 : Définir la table des chaînons.</h3>

<p>La table des chaînons se présente sous la forme d'une demi-matrice dont les lignes et les colonnes désignent les différents postes de travail.</p>

<p>Chaque case de la matrice représente un chaînon, c'est-à-dire un flux de pièces entre les deux postes (indépendamment du sens de déplacement).</p>

<table class="table noborder w300p">
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>M1</td>
</tr>
<tr>
<td></td>
<td></td>
<td>X</td>
<td></td>
<td>M2</td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>M3</td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>M4</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td>M5</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M6</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>


<p>X représente le flux de transfert entre M2 et M4 ou entre M4 et M2.</p>

<h3>Phase 2 : Déterminer les indices de flux.</h3>

<p>Pour déterminer les indices de flux, il faut, pour chaque gamme, inscrire dans les cases correspondantes le nombre de transferts.</p>
<p>Ainsi, pour le produit P1, la gamme est : M1, M4, M2, M5.</p>
<p>Les chaînons concernés sont donc M1M4, M4M2 et M2M5. Le nombre de transferts est de 25.</p>
<p>La matrice devient : </p>

<table class="table noborder w300p">
<tbody>
<tr>
<td></td>
<td></td>
<td>25</td>
<td></td>
<td></td>
<td>M1</td>
</tr>
<tr>
<td></td>
<td>25</td>
<td>25</td>
<td></td>
<td>M2</td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>M3</td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>M4</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td>M5</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M6</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<p>On réalise la même démarche en ajoutant le nombre de transferts à chaque maillon concerné par la gamme d'un produit.</p>


<table class="table noborder w300p">
<tbody>
<tr>
<td></td>
<td></td>
<td>83</td>
<td>24</td>
<td>133</td>
<td>M1</td>
</tr>
<tr>
<td>58</td>
<td>25</td>
<td>83</td>
<td>114</td>
<td>M2</td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>90</td>
<td>M3</td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>M4</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td>M5</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M6</td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>


<h3>Phase 3 : Déterminer le nombre de chaînons de chaque poste.</h3>

<p>Cela revient à calculer le nombre de maillons partant ou arrivant à un poste.</p>
<p>Pour cela, il suffit de compter le nombre de cases remplies sur la ligne et sur la colonne de chaque poste.</p>
<p>Le schéma peut être complété par un classement par ordre d'importance.</p>

<table class="table noborder w350p">
<tbody>
<tr>
<td></td>
<td></td>
<td>83</td>
<td>24</td>
<td>133</td>
<td>M1</td>
<td class="noborder"></td>
</tr>
<tr>
<td>58</td>
<td>25</td>
<td>83</td>
<td>114</td>
<td>M2</td>
<td class="noborder"></td>
<td class="bg-bleu">3 <sup>2e</sup></td>
</tr>
<tr>
<td></td>
<td></td>
<td>90</td>
<td>M3</td>
<td class="noborder"></td>
<td class="bg-bleu">5 <sup>1er</sup></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td>M4</td>
<td class="noborder"></td>
<td class="bg-bleu">3 <sup>2e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td>M5</td>
<td class="noborder"></td>
<td class="bg-bleu">3 <sup>2e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M6</td>
<td class="noborder"></td>
<td class="bg-bleu">1 <sup>5e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td class="noborder">&nbsp;</td>
<td class="bg-bleu">1 <sup>5e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>


<h3>Autre représentation</h3>

<table class="table noborder w350p">
<tbody>	
<tr>
<td>&nbsp;</td>
<td>M1</td>
<td>M2</td>
<td>M3</td>
<td>M4</td>
<td>M5</td>
<td>M6</td>
</tr>
<tr>
<td>M6</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class='diagonalRisingVide'></td>
</tr>
<tr>
<td>M5</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="diagonalRisingBas"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M4</td>
<td></td>
<td></td>
<td>X</td>
<td class="diagonalRisingVide"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M3</td>
<td></td>
<td></td>
<td class="diagonalRisingVide"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M2</td>
<td></td>
<td class="diagonalRisingHaut"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M1</td>
<td class="diagonalRisingVide"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<table class="noborder">
<tbody>	
<tr class="">
	<td class="border diagonalRisingHaut w50p">&nbsp;</td>
	<td class="noborder">Indice total de flux arrivant au poste M2 = &sum; indices de flux des colonnes et des lignes.
</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
</tr>
<tr class="">
	<td class="border diagonalRisingBas w50p">&nbsp;</td>
	<td class="noborder">Nombres de chaînons aboutissants au poste M5.</td>
</tr>
</tbody>
</table>

<p>X représente le flux de transfert entre M3 et M4.</p>

<p class="h3-like">Ce qui donnerait pour l'exemple précédent :</p>

<table class="table noborder w400p">
<tbody>	
<tr>
<td>&nbsp;<br />&nbsp;</td>
<td>M1</td>
<td>M2</td>
<td>M3</td>
<td>M4</td>
<td>M5</td>
<td>M6</td>
</tr>
<tr>
<td>M6</td>
<td></td>
<td><span class="font-s bleu">43</span><br /><span class="font-s rouge">15</span></td>
<td></td>
<td></td>
<td></td>
<td class='txtleft diagonalRising'><span class="font-s">58</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;1</span></td>
</tr>
<tr>
<td>M5</td>
<td></td>
<td><span class="font-s vert">25</span><br />&nbsp;</td>
<td></td>
<td></td>
<td class="txtleft diagonalRising"><span class="font-s">25</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;1</span></td>
<td class="noborder"></td>
<td class="bg-bleu">5<sup>e</sup></td>
</tr>
<tr>
<td>M4</td>
<td><span class="font-s vert">25</span> <span class="font-s rouge">15</span><br /><span class="font-s bleu">43</span></td>
<td><span class="font-s vert">25</span> <span class="font-s rouge">15</span><br /><span class="font-s bleu">43</span></td>
<td><span class="font-s orange">90</span></td>
<td class="txtleft diagonalRising"><span class="font-s">256</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;3</span></td>
<td class="noborder"></td>
<td class="bg-bleu">6<sup>e</sup></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M3</td>
<td><span class="font-s vert">24</span><br /></td>
<td><span class="font-s vert">24</span><br /><span class="font-s orange">90</span></td>
<td class="txtleft diagonalRising"><span class="font-s">228</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;3</span></td>
<td class="noborder"></td>
<td class="bg-bleu">2<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M2</td>
<td class=""><span class="font-s bleu">43</span><br /><span class="font-s orange">90</span></td>
<td class="txtleft diagonalRising"><span class="font-s">413</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;5</span></td>
<td class="noborder"></td>
<td class="bg-bleu">4<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>M1</td>
<td class="txtleft diagonalRising"><span class="font-s">240</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;3</span></td>
<td class="noborder"></td>
<td class="bg-bleu">1<sup>er</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="noborder"></td>
<td class="bg-bleu">3<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>


<h3>Phase 4 : Tracer l'implantation théorique.</h3>

<p>Choisir le poste le plus chargé (M2 dans notre exemple) et le placer sur un nœud de la trame.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud1.png" alt="image d'un noeud sur la trame" />

<p>Choisir le poste non placé le plus chargé.</p>
<p>Dans notre exemple, prenons M1 et le placer sur un nœud.</p>
<p>Le maillon M1M2 existe, nous choisissons un nœud proche de M2.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud2.png" alt="image d'un maillon sur la trame" />

<p>Nous continuons sur le même principe en plaçant M4.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud3.png" alt="image de trois maillons sur la trame" />

<p>Puis M3.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud4.png" alt="image de six maillons sur la trame" />

<p>Enfin, nous plaçons les postes M5 et M6 ayant le plus faible nombre de maillons.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud5.png" alt="image de huit maillons sur la trame" />

<p>Cette solution fait apparaître un croisement de flux entre M2M1 et M3M4. Les indices de circulation de ces maillons étant 133 et 90 le premier et le troisième en importance, cette solution n'est pas satisfaisante.</p>
<p>Lors de la deuxième itération, nous avions le choix de placer 3 postes de même poids (M1, M3, M4), regardons les autres solutions.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud6.png" alt="image de huit autres maillons sur la trame" />

<img class="aligncenter" src="/assets/img/qlio/implantation/noeud7.png" alt="image de encore huit autres maillons sur la trame" />


<p>Dans le premier cas, nous avons un croisement entre M2M3 (114) et M1M4 (83).</p>
<p>Dans le second cas, nous avons un croisement entre M2M4 (83) et M1M3 (24).</p>
<p>Cette dernière solution aura donc notre préférence.</p>


<h3>Phase 5 : Adapter l'implantation théorique aux locaux.</h3>


<p>Pour cela, il faut tenir compte de la forme des bâtiments, de l'emplacement des entrées sorties possibles, de l'emplacements des poteaux et de la forme des équipements.</p>
<h4>Identification des entrées sorties de matière.</h4>
<p>Sur l'ensemble des gammes, il existe 2 postes d'entrée M1 et M6 et 4 postes de sortie M1, M2, M4 et M5.</p>

<p>&nbsp;</p>
<p>L'étude d'implantation peut être réalisée soit, en utilisant un logiciel de dessin, soit à partir de silhouettes et d'un plan des bâtiments.</p>

</div>


<div class="exercice">
<p>Autre exemple :</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/implantation_et_flux.png" alt="Implantation avec représentation des flux" />


<h4>Contraintes :</h4>
<p>Le poste D; machine à laver ne peut être déplacé à cause de l'alimentation en eau et l'évacuation.</p>

<p>&nbsp;</p>
<table class="table">
<thead>
<tr>
<th colspan="2" class="w300p">Produits</th>
<th colspan="2" class="w350p">Gammes</th>
<th colspan="3" class="w250p border-right">Programme de production</th>
</tr>
<tr>
<th class="w50p">Référence</th>
<th class="w250p">Nom</th>
<th class="w100p">Produit</th>
<th class="w250p">Gamme</th>
<th class="w100p">Quantité</th>
<th class="w100p">Pièces/<br />Panier</th>
<th class="border-right">Nb paniers</th>
</tr>
</thead>
<tbody>
<tr>
<td>A</td>
<td>Tour n°1</td>
<td><span class="bleu">P1</span></td>
<td>A - B - D - E -  D - G</td>
<td>20 000</td>
<td>100</td>
<td><span class="bleu">200</span></td>
</tr>
<tr>
<td>B</td>
<td>Tour n°2</td>
<td><span class="vert">P2</span></td>
<td>A - D - H</td>
<td>25 000</td>
<td>250</td>
<td><span class="vert">100</span></td>
</tr>
<tr>
<td>C</td>
<td>Tronçonneuse</td>
<td><span class="rouge">P3</span></td>
<td>C - B - E</td>
<td>12 500</td>
<td>100</td>
<td><span class="rouge">125</span></td>
</tr>
<tr>
<td>D</td>
<td>Machine à laver</td>
<td><span class="orange">P4</span></td>
<td>C - B - F - D - H</td>
<td>5 000</td>
<td>10</td>
<td><span class="orange">500</span></td>
</tr>
<tr>
<td>E</td>
<td>Reprise 1</td>
<td><span class="">P5</span></td>
<td>A - D - H</td>
<td>35 000</td>
<td>500</td>
<td><span class="">70</span></td>
</tr>
<tr>
<td>F</td>
<td>Reprise 2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>G</td>
<td>Rectifieuse 1</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>H</td>
<td>Rectifieuse 2</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>

<p>La dernière colonne représente l'indice de traffic.</p>


<h4>Détermination du nombre de chaînons.</h4>

<table class="table noborder w600p">
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td><span class="font-s vert">100</span><br /><span class="font-s orange">500</span> <span class="font-s">70</span></td>
<td></td>
<td></td>
<td></td>
<td>H</td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td><span class="font-s bleu">200</span></td>
<td></td>
<td></td>
<td>G</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">1 <sup>6e</sup></td>
</tr>
<tr>
<td></td>
<td><span class="font-s orange">500</span></td>
<td></td>
<td><span class="font-s orange">500</span></td>
<td></td>
<td>F</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">1 <sup>6e</sup></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td><span class="font-s rouge">125</span></td>
<td></td>
<td><span class="font-s bleu">400</span></td>
<td>E</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">2 <sup>3e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td><span class="font-s vert">100</span><br /><span class="font-s">70</span></td>
<td><span class="font-s bleu">200</span></td>
<td></td>
<td>D</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">2 <sup>3e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td></td>
<td><span class="font-s orange">500</span><br /><span class="font-s rouge">125</span></td>
<td>C</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">6 <sup>1er</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td><span class="font-s bleu">200</span></td>
<td>B</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">1 <sup>6e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>A</td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">5 <sup>2e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">2 <sup>3e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<p>Ou avec la deuxième représentation :</p>

<table class="table noborder w600p">
<tbody>	
<tr>
<td>&nbsp;<br />&nbsp;</td>
<td>A</td>
<td>B</td>
<td>C</td>
<td>D</td>
<td>E</td>
<td>F</td>
<td>G</td>
<td>H</td>
</tr>
<tr>
<td>H</td>
<td></td>
<td></td>
<td></td>
<td><span class="font-s vert">100</span><br /><span class="font-s orange">500</span> <span class="font-s">70</span></td>
<td></td>
<td></td>
<td></td>
<td class='txtleft diagonalRising'><span class="font-s">670</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;1</span></td>
</tr>
<tr>
<td>G</td>
<td></td>
<td></td>
<td></td>
<td><span class="font-s bleu">200</span><br />&nbsp;</td>
<td></td>
<td></td>
<td class="txtleft diagonalRising"><span class="font-s">200</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;1</span></td>
<td class="noborder"></td>
<td class="bg-bleu">6<sup>e</sup></td>
</tr>
<tr>
<td>F</td>
<td></td>
<td><span class="font-s orange">500</span></td>
<td></td>
<td><span class="font-s orange">500</span></td>
<td></td>
<td class="txtleft diagonalRising"><span class="font-s">1000</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;2</span></td>
<td class="noborder"></td>
<td class="bg-bleu">8<sup>e</sup></td>
<td class="noborder"></td>
</tr>
<tr>
<td>E</td>
<td></td>
<td><span class="font-s rouge">125</span><br /></td>
<td></td>
<td><span class="font-s bleu">400</span></td>
<td class="txtleft diagonalRising"><span class="font-s">525</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;2</span></td>
<td class="noborder"></td>
<td class="bg-bleu">3<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>D</td>
<td><span class="font-s vert">100</span><br /><span class="font-s">70</span></td>
<td><span class="font-s bleu">200</span></td>
<td></td>
<td class="txtleft diagonalRising"><span class="font-s">2140</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;6</span></td>
<td class="noborder"></td>
<td class="bg-bleu">4<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>C</td>
<td></td>
<td class=""><span class="font-s orange">500</span><br /><span class="font-s rouge">125</span></td>
<td class="txtleft diagonalRising"><span class="font-s">625</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;1</span></td>
<td class="noborder"></td>
<td class="bg-bleu">1<sup>er</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td>B</td>
<td><span class="font-s bleu">200</span></td>
<td class="txtleft diagonalRising"><span class="font-s">1650</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;5</span></td>
<td class="noborder"></td>
<td class="bg-bleu">7<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td class="">A</td>
<td class="txtleft diagonalRising"><span class="font-s">370</span><br /><span class="txtright">&nbsp;&nbsp;&nbsp;2</span></td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">2<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
<tr>
<td class="noborder"></td>
<td class="noborder">&nbsp;<br />&nbsp;</td>
<td class="bg-bleu">5<sup>e</sup></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
<td class="noborder"></td>
</tr>
</tbody>
</table>

<h4>Résultat de l'implantation</h4>
<img class="aligncenter" src="/assets/img/qlio/implantation/implantation_chainons.png" alt="Schéma de l'implantation des chaînons" />


<p>La machine B devrait être placée au plus près de la machine D selon l'ordre du classement trouvé précédemment.</p>
<p>Mais cela engendrerait un croisement de flux. En déplaçant cette machine un peu plus loin, on arrive à faire en sorte qu'il n'y ait plus de croisement de flux.</p>

</div>


