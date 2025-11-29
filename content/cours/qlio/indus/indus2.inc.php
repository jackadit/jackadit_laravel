<?php
/**
 * BUT : Introduction à l'éco-conception
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Industrialisation
 * @access public
 * @uses 
 */
$sNavigation=navigation('indus', '2', '3');
?>




<h1>Arbre de défaillance</h1>

	<h2>Présentation</h2>
	<p>L'analyse par l'arbre de défaillance (ADD) est une analyse déductive. Cet outil graphique permet de présenter la démarche conduisant à une défaillance</p>


    <h2>Concepts et composants graphiques</h2>
	<p>Un ADD est composé d'évènements reliés entre eux par des opérateurs logiques</p>

    <h3>Concepts</h3>
	<p>Cette organisation graphique permet de voir les liens entre les évènements d'après une structure ascendante</p>
	
    <h3>Composants graphiques</h3>
	<p>Un ADD est généralement représenté verticalement avec :</p>
	<ul>
		<li>des rectangles pour les évènements</li>
		<li>des carrés et losanges pour les liens</li>
	</ul>

	<p>Les évènements sont de plusieurs types :</p>
	<ul>
	<li>Un évènement de base est situé à l'origine d'une branche de l'ADD</li>
	<li>Un évènement intermédiaire est le résultat d'au-moins deux autres évènements reliés par un opérateur logique</li>
	<li>Un évènement indésirable se produit lorsqu'un système ne rempli pas une de ses fonctions</li>
	</ul>


	<div class="notice remarque">Un ADD a pour but d'ordonner, d'analyser et d'évaluer toutes les causes possibles conduisant à un évènement indésirable.</div>
	
	<h4>Les opérateurs logiques</h4>
	<p><img class="aligncenter" src="/assets/img/qlio/indus/operateurs_logiques.png" alt="Opérateurs logiques d'un arbre de défaillances" /></p>
	
	<h4>Les symboles de transfert</h4>
	<p>Ils permettent la réduction de la taille de l'ADD en évitant les répétitions de branches  identiques ou semblables.</p>
	<p><img class="aligncenter" src="/assets/img/qlio/indus/symboles_transfert.png" alt="Symbole de transfert d'un arbre de défaillances" /></p>
	



	<h2>Construction d'un ADD</h2>
    <h3>Détermination de l'évènement indésirable</h3>
	<p>C'est à partir de l'étude des défauts potentiels que sera identifié l'évènement indésirable</p>

	
    <h3>Détermination des limites de l'étude</h3>
	<p>La construction d'un ADD allant de l'évènement indésirable jusqu'aux évènements de base, il est nécessaire de fixer des limites à l'étude. Elles sont géographiques et temporelles.</p>
	<p>Elles permettent d'éliminer les cas sans intérêt.</p>
	
    <h3>Procédure itérative</h3>
	<p>Le procédé itératif est inscrit dans la méthode de construction d'un ADD.</p>
	<p>Un évènement, indésirable ou intermédiaire, suppose que l'on cherche ce qui l'a produit et ce jusqu'aux limites de l'étude</p>


	<h2>Méthodologie</h2>
	<p>Lors de la construction d'un ADD, il faut respecter certaines règles afin de ne pas s'éloigner de la logique de lecture et d'exploitation.</p>

	
    <h3>Élaboration horizontale</h3>
	<p>Il est tentant de rechercher en cascade les évènements d'une même branche, depuis l'évènement indésirable jusqu'à la limite de l'étude.</p>
	<p>Cependant il est absolument nécessaire de mener l'analyse horizontalement.</p>
	<p>Pour un évènement il faut chercher toutes les causes immédiates, nécessaire et suffisantes (CINS) de son niveau avant de passer au niveau inférieur.</p>
	<p>Si l'élaboration ne se fait pas comme cela, vous risquez de générer des décalages dans le graphique qui rendront sa lecture et sa compréhension difficile.</p>

    <h3>Liaisons et désignation des évènements</h3>
	<p>Vous ne devez pas avoir deux opérateurs logiques qui se suivent. Il faut absolument enchainer sur des évènements.</p>

	<p>Exemple d'un ADD :</p>
	<p><img class="aligncenter" src="/assets/img/qlio/indus/exemple_add.png" alt="Exemple d'un arbre de défaillances" /></p>


	<h2>Analyse quantitative</h2>
	<p>Équivalente à l'évaluation de la criticité par l'AMDEC, l'analyse quantitative de l'ADD permet d'estimer la probabilité d'apparition d'un évènement indésirable.</p>
	<p>À condition de connaître la probabilité de défaillance des organes d'un système on peut calculer la probabilité de défaillance du système</p>

	<h3>Exercice</h3>
	<p>Construire l'arbre de défaillance des enchaînements d'évènements pouvant conduire à une mauvaise lecture de codes à barres affectant un système d'aiguillage par lecture d'étiquettes apposées sur des unités de conditionnement.</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><a src="/assets/img/qlio/indus/ex_add.png" class="image-link">Correction</a></p>
	


