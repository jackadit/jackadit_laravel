<?php
/**
 * BUT : cours sur l'analyse fonctionnelle interne
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Organisation
 * @category Eco_conception
 * @access public
 * @uses 
 */
$sNavigation=navigation('ecoconception', '3');
?>




<h1>Analyse Fonctionnelle Interne</h1>

	<p class="h2-like">Introduction</p>
	<p>L'objectif de l'analyse fonctionnelle interne d'un produit est d'observer une solution existante ou imaginée pour :</p>
	<ul>
		<li>Analyser son organisation (fonctions techniques).</li>
		<li>Observer la réponse aux exigences du CdCf.</li>
		<li>Distinguer ce qui participe directement à la réalisation des services (chaînes fonctionnelles – états).</li>
	</ul>

	<p>Plusieurs outils existent pour décrire le point de vue du concepteur afin de faire comprendre le système du point de vue mainteneur.

	<h2>La méthode FAST</h2>

    <h3>Principe</h3>
	<p>Le diagramme <strong>FAST</strong> (Function Analysis System Technic) permet de traduire chacune des <strong>fonctions de service</strong> en <strong>fonction(s) technique(s)</strong>, puis matériellement en <strong>solution(s) constructive(s)</strong>.</p>

	<p>Il se construit de gauche à droite, dans une logique du pourquoi au comment.</p>
	
	<p>Dès lors que les fonctions de services sont identifiées, cette méthode les ordonnes et les décompose logiquement pour aboutir aux solutions techniques de réalisation.</p>
	<p>Le diagramme FAST constitue alors un ensemble de données essentielles permettant d'avoir une bonne connaissance d'un produit complexe et ainsi de pouvoir améliorer la solution proposée.</p>
	
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/principe_fast.png" alt="Principe du diagramme FAST" />

    <h3>Fonctions</h3>
	
	<p>Les <strong>fonctions de service</strong> constituent une relation entre le système et le milieu extérieur.</p>
	<p>Il faut souvent plusieurs fonctions de service pour répondre à un besoin.</p>
	<p>Les <strong>fonctions techniques</strong> sont internes au produit, elles sont choisies par le constructeur dans le cadre d'une solution, pour assurer une fonction de service.</p>

    <h3>Schématisation</h3>
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/convention_fast.png" alt="Convention de schématisation du diagramme FAST" />
	<p>La méthode s'appuie sur une technique interrogative. En partant d'une fonction principale, elle présente les fonctions dans un enchaînement logique en répondant aux trois questions :</p>
	<ul>
	<li><strong>Pourquoi</strong> ? pourquoi une fonction doit-elle être assurée ? (suivant l'axe horizontal orienté vers la gauche)
		<p>Accès à une fonction technique d'ordre supérieur, on y répond en lisant le diagramme de droite à gauche.</p>
	</li>
	<li><strong>Comment</strong> ? comment cette fonction doit-elle être assurée ? (suivant l'axe horizontal orienté vers la droite)
		<p>On décompose alors la fonction, et on peut lire la réponse à la question en parcourant le diagramme de gauche à droite</p>
	</li>
	<li><strong>Quand</strong> ? Quand cette fonction doit-elle être assurée ? (suivant un axe vertical orienté vers le bas)
		<p>Recherche des simultanéités, qui sont alors représentées verticalement.</p></li>
	</ul>

    <div class="notice remarque">
		<p>Afin de permettre une compréhension aisée de tous, ce type de représentation est normé.</p>
		<p>Au niveau national (Français) elle est régulée par la norme <strong>NF EN 1325-1</strong> qui décrit les grandes lignes de cette méthode.</p>
		<p>La recherche de solutions techniques (le COMMENT) permet une justification de l'existence de formes de pièces.</p>
	</div>

	<div class="notice remarque"> 
	<p>Chaque forme ou pièce réalise une fonction technique élémentaire.</p>
	<p>Si cela n'est pas le cas, cette forme ou pièce est inutile et le coût du mécanisme devient trop élevé.</p>
	</div>


	<p><u>Exemple partiel de diagramme FAST</u> : aspirateur</p>

	<img class="aligncenter" src="/assets/img/qlio/ecoconception/aspirateur_fast.png" alt="Exemple de diagramme FAST pour un aspirateur" />


	<h2>La méthode SADT</h2>

	<dl>
		<dt><strong>Définition de SADT</strong></dt>
		<dd>Structured Analysis and Design Technic : Technique Structurée d'Analyse et de modélisation des Systèmes.</dd>
	</dl>
	
    <h3>Introduction</h3>

	<p>Il existe principalement deux philosophies pour l'analyse des sytèmes ou objets techniques :</p>
	<ul>
		<li>L'analyse systémique qui s'est développée vers les années 1940 (s'appuie sur la pertinence)<br />
		<strong>Vue globaliste</strong></li>
		<li>Le discours de la méthode de Descartes (s'appuie sur l'évidence)<br />
		<strong>Vue réductionniste</strong></li>
	</ul>

        <h3>Méthode SADT</h3>
	<p>La méthode SADT a été mise au point aux Etats Unis en 1977 par Doug Ross pour la société Softech. Baptisée à l'origine IDEF0 (en anglais Integration Definition for Function Modeling) </p>
	
	<p>Encore appelée <strong>analyse fonctionnelle descendante</strong>, c'est une méthode graphique qui part du général pour aller au particulier.</p>
	<p>Elle permet de décrire des systèmes ou objet technique complexes par l'étude :</p>
	<ul>
		<li>Des actions qu'ils exercent sur leur environnement.</li>
		<li>De leur organisation fonctionnelle et structurelle.</li>
	</ul>
	
	<p>Pour faciliter l'étude, on se base sur une modélisation qui se fait à partir d'un outil graphique composé de :</p>
	<ul>
		<li><strong>Diagramme d'activité</strong> (ou actigramme).</li>
		<img src="/assets/img/qlio/ecoconception/sadt_mecs.png" alt="Méthodologie SADT" />
		<p>En se posant les questions :</p>
		<img src="/assets/img/qlio/ecoconception/sadt_questions.png" alt="Questions de la méthodologie SADT" />

		<li><strong>Diagramme de données</strong> (ou datagramme).</li>
		<img src="/assets/img/qlio/ecoconception/sadt_datagramme.png" alt="Datagramme SADT" />
	</ul>

	<div class="notice remarque">
		<p>Les actigrammes conviennent bien à la description des systèmes et objets techniques</p>
		<p>Les datagrammes conviennent bien à la description des systèmes de traitement de l'information</p>
	</div>

    <h3>Description</h3>
	<p>La SADT s'appuie sur deux principes :</p>
	<ul>
		<li>Délimiter le cadre de l'analyse.</li>
		<li>Procéder par analyse descendante.</li>
	</ul>

	<p>L'outil S.A.D.T. décrit la constitution du système en utilisant des boites et des flèches représentant des flux (énergie, matière ou information) entrant ou sortant de ces boîtes.</p>

	<img src="/assets/img/qlio/ecoconception/sadt_niveauA0.png" alt="SADT Niveau A0" />

    <h3>Cadre de l'analyse</h3>
	<p>Le cadre de l'analyse doit être délimité à partir d'une étude préalable qui permet d'établir la boîte du premier diagramme. Cette boîte représentative du système global se numérote A-0 (lire A moins zéro).</p>
	
	
	<h4>Niveau A-0 (A moins zéro)</h4>

	<p>Il définit :</p>
	<ul>
		<li>La frontière d'isolement du système.</li>
		<li>La fonction globale du système qui permet d'apporter de la valeur ajoutée à la matière d‘œuvre.</li>
	</ul>
	<p><a src="/assets/img/qlio/ecoconception/sadt_niveauA-0.png" class="image-link"><img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_niveauA-0.png" alt="SADT Niveau A-0" /></a></p>

	<p>L'outil SADT permet de réaliser une "analyse descendante" des sytèmes. On va du plus général au plus détaillé, en s'intéressant aux <strong>activités du sytème</strong>.</p>
	<p>Cette analyse descendante traduit la hiérarchie des activités réalisées par le système. De fait, le premier niveau reste très abstrait et ce n'est qu'en descendant dans la hiérarchie que les solutions techniques et les moyens nécessaires à leur réalisation sont précisés et détaillés.</p>

	<div class="notice remarque">
		<p>En général, on utilise 3 à 6 boîtes par niveau</p>
		<p>Il faut toujours au moins une contrainte (celle qui déclenche l'action)</p>
	</div>


	<h4>Niveau A0 (A zéro)</h4>
	<p>Chaque boite représente une action que doit réaliser un constituant du système pour lui permettre de satisfaire la fonction globale. Ce niveau permet d'observer les flux d'énergie et d'information entre les différentes boites nommées A1, A2, A3...</p>

	<img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_niveauA0_A1_A2_A3.png" alt="SADT Niveau A0" />
	
	<h4>Niveaux inférieurs</h4>
	<p>La méthode est valide à condition de veiller à la cohérence des informations aux changements de niveaux. Tout ce qui franchit les frontières d'une boite doit se retrouver à l'identique au niveau suivant.</p>
	
	<p><a src="/assets/img/qlio/ecoconception/sadt_niveaux_inferieurs.png" class="image-link"><img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_niveaux_inferieurs.png" alt="SADT Niveaux inférieurs" /></a></p>
	
    <h3>Exemple SADT sécateur électronique</h3>
	
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_secateur_A-0.png" alt="SADT sécateur électronique A-0" />
	<br />
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_secateur_A0.png" alt="SADT sécateur électronique A0" />
	<br />
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/sadt_secateur_A3.png" alt="SADT sécateur électronique A3" />




