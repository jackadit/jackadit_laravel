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
$sNavigation=navigation('metro', '2');
?>




<h1>Spécifications linéaires et angulaires</h1>
<em><a href="./cours/metro/ISO406-decembre1995.pdf">D'après ISO 406</a></em>

	<h2>Unités utilisées</h2>
	<p>La tolérance et la dimension nominale doivent être inscrites dans la même unité. Les écarts par rapport à la cote nominale doivent comporter le même nombre de décimales sauf pour la valeur 0. L'unité utilisée par défaut en production mécanique est le mm.</p>

	<h2>Inscription sur le dessin de définition</h2>
		
	<p>On inscrit en premier la valeur nominale de la dimension puis la tolérance. Dans le cas ou l'on souhaite préciser les valeurs numériques de tolérance en plus d'un symbole d'ajustement, on doit mettre ces valeurs entre parenthèses.</p>
	<p>Exemples :</p>
	<img src="/assets/img/qlio/metro/cote_nominale_tolerance.png" alt="Cotation nominale avec tolérance" />
	
	<p>La plus grande pièce acceptée est 10,1 : tolérance supérieure Ts</p>
	<p>La plus petite pièce acceptée est 9,8 : tolérance inférieure Ti</p>
	<p>La différence entre Ts et Ti s'appelle tolérance dimensionnelle ou souvent Intervalle de Tolérance : IT=0,3</p>
	<h3>Cas général :</h3>
	<img src="/assets/img/qlio/metro/cote_tolerance.png" alt="exemples de cotation nominale avec tolérance" />

	<h3>Cas des ajustements :</h3>
	<img src="/assets/img/qlio/metro/ajustements.png" alt="Exemples d'ajustements" />

	<h2>Inscription sur le dessin d'ensemble</h2>
	<p>La dimension de l'alésage précède celle de l'arbre ou se trouve au dessus, la dimension nominale n'est inscrite qu'une fois.</p>
	
	<p>Exemple :</p>
	<h3>Tolérance numérique :</h3>
	<img src="/assets/img/qlio/metro/dimensions_alesage.png" alt="Dimensions alésage" />

	<h3>Ajustements :</h3>
	<img src="/assets/img/qlio/metro/ajustement_alesage1.png" alt="Ajustement &empty;25 H7/g6" />
	<img src="/assets/img/qlio/metro/ajustement_alesage2.png" alt="Ajustement &empty;25 tolérancé" />


	<h2>Inscription des spécifications angulaires</h2>
	
	<p>Les spécifications angulaires doivent toujours comporter l'unité utilisée pour la cote nominale et pour la tolérance.</p>
	
	<p>Exemple :</p>
	<img src="/assets/img/qlio/metro/specification_angulaire.png" alt="spécifications angulaires" />



