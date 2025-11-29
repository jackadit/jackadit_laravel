<?php
/**
 * BUT : Système de production
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/15 	22:08::00
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
$sNavigation=navigation('sysprod', '1');
?>




<h1>Système de production</h1>

	<h2>Historique</h2>
		
	<p>XVIII<sup>ème</sup> S : production artisanale</p>
	<p>XIX<sup>ème</sup> S : production manufacturière (armes, tabac…)</p>
	<p>XX<sup>ème</sup> S : désir de rationalisation des facteurs de production</p>
	<p>→point de départ de la gestion de production...</p>
	<p class="h3-like">Taylor (1911) : organisation du travail basée sur :</p>
	<ul>
		<li>distinction radicale entre conception et exécution</li>
		<li>recherche systématique des économies de gestes et mouvements</li>
		<li>utilisation maximale de la machine</li>
	</ul>
	<p class="h3-like"> Ford (1913) : standardisation de la production et travail à la chaîne</p>
	<ul>
		<li>avancée du concept de flexibilité dans les entreprises</li>
	</ul>
	<p class="h3-like">Harris et Wilson (1913-1924) : quantité économique</p>
	<p class="h3-like">Fayol (1916) : modèle hiérarchique d'organisation de la production</p>
	<ul>
		</li>savoir, prévoir, organiser, commander, coordonner, contrôler</li>
	</ul>
	<p class="h3-like">Gantt (1917) : ordonnancement</p>


	
    <h2>Généralités</h2>

	<dl>
		<dt>Système de Production</dt>
		<dd>vision automaticienne : transformer un ensemble de matières premières ou de composants semi-finis en produits finis.</dd>

		<dt>Gestion de Production</dt>
		<dd>assurer l'organisation du système de production afin de fabriquer les produits en quantités et temps voulus compte tenu des moyens (humains ou technologiques) disponibles.</dd>
	</dl>
	
	<h3>Gestion de Production Assistée par Ordinateur</h3>
	<p class="ok">Avantage : vision synthétique</p>
	<p class="alert">Inconvénient : masquage des activités non orientées fabrication (étude de marché, conception, recherche, ...)</p>

	<h3>Vision systémique d'un SP</h3>
	<img src="/assets/img/qlio/sysprod/vision_systemique_sp.png" alt="vision systémique d'un système de production" />

    <h3>Quatre grandes activités de la GP</h3>

	<p class="h4-like">Gestion des données techniques</p>
	<ul>
		<li>Description des produits et des familles de produits (nomenclatures).</li>
		<li>Description des processus de réalisation (gammes).</li>
	</ul>
	
	<p class="h4-like">Gestion des données commerciales</p>
	<ul>
		<li>Reçoit les commandes et établit les calendriers de livraison souhaités.</li>
	</ul>

	<p class="h4-like">Gestion des matières</p>
	<ul>
		<li>Assurer l'approvisionnement en matières premières ou composants.</li>
		<li>Assurer le stockage de produits fabriqués.</li>
	</ul>
	<p class="h4-like">Gestion du travail</p>
	<ul>
		<li>Organiser dans le temps la réalisation des tâches en leur attribuant les ressources nécessaires. Prend en compte les données techniques et commerciales et celles du suivi de fabrication (quantités déjà fabriquées, état des ressources...).</li>
	</ul>


    <h3>Trois sous-systèmes dans un SP</h3>

	<p class="h4-like">Système physique</p>
	<ul>
		<li>Éléments directement impliqués dans le processus de fabrication.</li>
		<li>Soumis aux perturbations émanant de l'environnement.</li>
	</ul>

	<p class="h4-like">Système décisionnel</p>
	<ul>
		<li>Gestion des activités du système physique.</li>
		<li>Prise en compte des contraintes environnementales.</li>
		<li>Besoin de réactivité.</li>
	</ul>

	<p class="h4-like">Système informationnel</p>
	<ul>
		<li>Assurer les liens système physique-système décisionnel et système décisionnel-environnement besoin de réactivité.</li>
	</ul>


	<h2>S.A.P.</h2>

	<p>Un Système Automatisé de Production est un moyen d'assurer l'objectif principal d'une entreprise : la compétitivité de ses produits.</p>
	<img src="/assets/img/qlio/sysprod/sap.png" alt="principe de fonctionnement d'un S.A.P." />
	
    <h3>Aspect système d'un S.A.P.</h3>
	<img src="/assets/img/qlio/sysprod/systeme_sap.png" alt="aspect système d'un S.A.P." />


    <h3>Analyse fonctionnelle d'un S.A.P.</h3>
	<img src="/assets/img/qlio/sysprod/analyse_fonctionnelle_sap.png" alt="analyse fonctionnelle d'un S.A.P." />


	<p>La P.C. doit gérer des information telles :</p>
	<ul>
		<li>Gérer des E/S TOR (tout ou rien).</li>
		<li>Traiter des équations booléennes.</li>
		<li>Traiter de fonctions de sécurité machine (de fonctionnement).</li>
		<li>Gérer du séquentiel.</li>
		<li>Calculer / réguler / asservir.</li>
		<li>Contrôler la qualité d'un produit.</li>
		<li>Aider à la maintenance.</li>
		<li>Conduire ou superviser.</li>
		<li>Suivre la production.</li>
		<li>...</li>
	</ul>

	<p>Le concepteur devra définir de façon exhaustive le comportement attendu d'un S.A.P. intégrant la QUALITÉ et la SÉCURITÉ.</p>

	<p>Un outil a été créé pour cela : le <strong>G.E.M.M.A.</strong> (guide d'étude des modes de marche et d'arrêt)</p>



