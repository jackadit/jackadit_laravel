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
$sNavigation=navigation('implantation', '3');
?>




<h1>Projet d'implantation d'atelier</h1>

<p>Il n'y a pas de règle absolue pour organiser l'implantation d'un atelier.</p>

<p>Chaque cas est particulier et dépend de l'historique, de l'activité, de l'équipement et des locaux de l'entreprise.</p>

<p>Il est donc important de réaliser un travail d'analyse permettant de définir l'organisation optimale.</p>

<p>De ce point de vue, il existe plusieurs leviers pour améliorer la performance d'un atelier en entreprise :</p>

<ul>
	<li>Expédition</li>
	<li>Traitement de la commande </li>
	<li>Production : Lean
	<ul>
	<li>Innovation dans le process pour diminuer le temps de transformation, automatisation</li>
	<li>Diminution des temps de manutention et attente, implantation</li>
	<li>5S, diminution des temps de changement de série SMED, management visuel, santé sécurité au travail</li>
	<li>Augmentation de la fiabilité des moyens Maintenance (TPM)</li>
	<li>Diminution de la non qualité</li>
	<li>Management, implication, culture de l'amélioration continue</li>
	</ul></li>
	<li>Mode de gestion et de pilotage choisi</li>
</ul>

<p>Quoi qu'il en soit, on distingue deux paramètres à prendre en considération :</p>
<ul>
	<li>Le temps.</li>
	<li>La distance.</li>
</ul>

<h2>Temps</h2>

<h3>Caractéristiques de l'horizon de production.</h3>

<p>Il s'agit ici de mesurer le temps d'écoulement de la fabrication : c'est ce qu'on appelle l'<span class="tag--info">horizon de production</span>.</p>
<p>Mais il faut également mesurer le débit (Nombre d'éléments / Unité de temps)</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/horizon_poduction.png" alt="Graphique de l'horizon de production" />


<h2>Distance</h2>

<h3>La taille de l'atelier.</h3>

<p>Il s'agit ici de mesurer la distance parcourue par les éléments ou l'élément critique dans le processus de fabrication.</p>

<p>La taille de l'atelier n'est pas forcément un critère décisif en termes d'organisation.</p>
<p>Bien qu'un atelier aéré présente des avantages apparents pour ce qui est du confort de travail, il entraîne une immobilisation au sol importante, le chauffage d'une grande surface, des distances à parcourir par les opérateurs importantes, une surface à ranger importante,… </p>
<p>A contrario, dans un atelier de taille réduite, les flux et le stockage sont plus difficiles à organiser et il y a un risque d'interactions entre les postes de travail.</p>


<p>L'étude d'implantation n'est rien d'autre qu'un problème d'optimisation multicritère (flux pièces, coût, distance, temps, évolution de la demande …) 
<p>Elle est soumise à des contraintes (géographique de lieux, nuisances, …) </p>
<p>Pour les résoudre, il existe différentes méthodes qui seront développées dans les chapitres ultérieurs.</p>
<p>Plusieurs solutions logicielles d'aide à la décision (logiciel Impact) existent également.</p>
 
<p>Il apparait cependant certaines limites dans ces solutions.</p>
<p>Les méthodes utilisées fournissent des résultats statiques (données quasi fixes : quantité à produire, tps opératoire, ratio ...).</p>
<p>Or pour étudier en dynamique les modèles d'implantation, on peut/doit utiliser des logiciels de simulation de flux (Witness) qui ne seront pas traités dans ce cours.</p>


<h2>Indicateurs</h2>

<div class="formule">
Ratio de tension de Flux (RTF) ou Ratio d'efficacité du processus (REP)
</div>

<p class="h3-like">Graphique de l'horizon de production.</p>
<img class="aligncenter" src="/assets/img/qlio/implantation/horizon_poduction_graph.png" alt="Graphique de l'horizon de production" />

<p><img class="aligncenter" src="/assets/img/qlio/implantation/legende_vert.png" alt="case de légende couleur verte" /> Temps à valeur ajoutée</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/legende_rouge.png" alt="case de légende couleur rouge" /> Attente, transport, ... temps à non-valeur ajoutée</p>


<div class="formule">
RTF  = 
	<div class="fraction">
		<span class="numerateur">Durée totale</span>
		<span class="bar">/</span>
		<span class="denominateur">Temps de production</span>
	</div>
</div>

<div class="formule">
REP  = 
	<div class="fraction">
		<span class="numerateur">Horizon de production</span>
		<span class="bar">/</span>
		<span class="denominateur">&sum; Temps à valeur ajoutée</span>
	</div>
</div>

<div class="formule">
Tension de flux (%)  = 
	<div class="fraction">
		<span class="numerateur">&sum; Temps à valeur ajoutée</span>
		<span class="bar">/</span>
		<span class="denominateur">Horizon de production</span>
	</div>
</div>

<h2>Méthodologie</h2>

<p>Pour mener à bien une étude d'implantation, on peut utiliser la méthode <span class="tag--info">DMAIC</span> que l'on peut définir en français par les mots :</p>
<ul>
	<li>D : Define 	= Définir</li>
	<li>M : Mesure 	= Mesurer</li>
	<li>A : Analyse = Analyser</li>
	<li>I : Improve = Améliorer - Innover</li>
	<li>C : Control = Maîtriser- Standardiser</li>
</ul>

<h3>Définir</h3>

<p>C'est la phase où l'on va établir la planification du projet, procéder à l'identification des besoins :</p>
<ul>
	<li>Besoins clients, délai/budget/moyens associés/contraintes.</li>
	<li>Cible industrielle.</li>
	<li>Objectifs visés, indicateurs déployés.</li>
	<li>Équipe projet, planification du projet .</li>
</ul>

<h3>Mesurer</h3>

<p>C'est la phase où l'on va collecter des données, faire une étude de l'existant.</p>
<ul>
	<li>Recherche des données factuelles existantes , indicateurs …</li>
	<li>Situation géographique, bâtiment (plan masse,…).</li>
	<li>Type d'équipement, poste, moyen de fabrication (aire de sécurité, nombre, position opérateurs, …).</li>
	<li>Type de matière premières (type, masse, dangereuse ou non, explosive…).</li>
	<li>Fréquence et importance des livraisons (lots de transfert, dimension de stockage).</li>
	<li>Produits fabriqués (nomenclature, gamme, temps opératoire).</li>
	<li>Taille des séries, capacité de production.</li>
	<li>Personnel, énergie.</li>
</ul>

<h3>Analyser</h3>

<p>C'est la phase où l'on va analyser et évaluer l'existant.</p>

<p class="h3-like">Analyse du déroulement.</p>

<img class="aligncenter" src="/assets/img/qlio/implantation/deroulement.png" alt="Tableau du déroulement du flux de production" />

<p>Légende :</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/triangle.png" alt="Triangle" /> : Stockage avec opération d'entrée/sortie.</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/fleche.png" alt="Flèche" /> : Déplacement, Transport ou manutention.</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/rond.png" alt="Rond" /> : Opération ou transformation qui apporte de la valeur ajoutée.</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/attente.png" alt="Attente" /> : Attente, Stocks tampons (en-cours).</p>
<p><img class="aligncenter" src="/assets/img/qlio/implantation/carre.png" alt="Carré" /> : Inspection, Contrôles.</p>

<h3>Améliorer</h3>

<p>C'est la phase où l'on va améliorer l'existant voire innover</p>
<ul>
	<li>Choix d'un modèle de base d'implantation.</li>
	<li>Implantation théorique.</li>
	<li>Maquettage.</li>
	<li>Implantation pratique.</li>
</ul>

<h3>Maîtriser</h3>

<p>C'est la phase où l'on va se focaliser sur la maîtrise de ce qui a été mise en place. Il s'agit de trouver une standardisation des procéssus.</p>
<ul>
	<li>Détermination de standards.</li>
	<li>Communiquer - Former le personnel.</li>
	<li>Adapter le management.</li>
</ul>


