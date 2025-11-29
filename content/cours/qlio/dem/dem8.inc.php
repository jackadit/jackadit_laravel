<?php
/**
 * BUT : Introduction à la gestion de la demande
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		11/04/21 	10:37::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Structuration des systèmes qualité et logistique
 * @category Gestion de la demande
 * @access public
 * @uses 
 */
?>


<h1>Organisation des prévisions</h1>

<h2>Implications de la gestion de la chaîne d'approvisionnement</h2>

<p>Du point de vue du supply chain manager, une façon de faire face à l'erreur de prévision est de réduire la dépendance aux prévisions, spécialement à long terme.</p>

<p>Cela nécessite une amélioration continue des processus pour réduire le délai de fabrication.</p>

<p>En d'autres termes, cela va impliquer de :</p>

<ul>
	<li>Diminuer la dépendance à l'égard des prévisions à long terme et accroître la capacité à réagir rapidement à la demande.</li>
	<li>Collaborer avec des clients et des fournisseurs, en particulier dans le partage de l'information sur la demande.</li>
	<li>Augmenter la flexibilité de fabrication en interne et l'intégration des opérations à l'externe avec les clients et les fournisseurs.</li>
</ul>

<h2>Supply Chain Management (SCM).</h2>

<p>Autour d'une stratégie Supply Chain gravite un certain nombre de concepts ou de métiers dont il faut tenir compte pour créer de la valeur ajoutée.</p>

<img src="/assets/img/qlio/dem/supplychain_management.png" alt="Graphique représentant le Supply Chain Managment (SCM)" />

<p>La fiabilisation des prévisions peut se faire par une organisation transversale.</p>

<p>La communication est essentielle : La fiabilisation des prévisions passe par une communication des informations entre les acteurs externes et internes de l'entreprise.</p>

<p>Cela nécessite une étroite collaboration régulière entre les services concernés et le partage d'informations stratégiques en temps réel.</p>

<p>D'autre part, l'élaboration des prévisions de vente doit être constamment améliorée après un audit interne et la mise en place d'indicateurs de contrôle et de mesure de la qualité des prévisions.</p>

<p>Mais également, par la motivation des prévisionnistes à l'aide d'objectifs afin de fiabiliser les prévisions au cours du temps et les rendre conformes à la réalité du terrain.</p>

<h2>La collaboration interne – clé de réussite de la fiabilisation des prévisions.</h2>

<p>Chaque acteur apporte son propre point de vue sur le montant des prévisions en fonction des informations dont il dispose (marketing, commercial, finance ou logistique).</p>

<p>Il est pertinent d'effectuer une revue mensuelle des prévisions de vente entre les marketeurs, les commerciaux, et la logistique qui fournissent leurs hypothèses de volume promotionnel.</p>

<p>Ainsi :</p>
<ul>
	<li>Les commerciaux peuvent apporter leur éclairage et leur information terrain.</li>
	<li>Le marketing pourra partager sa connaissance des produits, et des publicités programmées.</li>
	<li>Les logisticiens apporteront leur visibilité sur les ventes écoulées par marché, ainsi que sur les capacités fournisseurs et les délais de mise sur marché !</li>
</ul>

<p class="notice alert">Attention : le marketing, rarement en relation avec la gestion des stocks, a tendance à sur‐prévoir car il préfère avoir du stock supplémentaire plutôt que de tomber en rupture.</p>

<h2>La collaboration externe – pour être plus près de la demande réelle du consommateur</h2>

<h3>GPA = gestion partagée des approvisionnements.</h3>

<p>Elle consiste pour une entreprise à confier, généralement à un industriel de la grande consommation, l'approvisionnement des entrepôts ou des magasins de ses clients.</p>

<p>Le distributeur va transmettre au fournisseur les données de stocks (sorties caisses, sorties de stock, sorties d'entrepôt, niveaux de stocks…).</p>

<p>Le fournisseur proposera quant à lui un réapprovisionnement selon des règles préalablement négociées.</p>

<p>Une fois que le distributeur aura validé la proposition, le fournisseur procèdera au réapprovisionnement convenu.</p>

<p>Cette diminution de l'incertitude qui pèse sur la demande réelle permet de réduire le <span class="tag--info">bullwhip effect</span> grâce à une réduction des stocks de sécurité en aval de la chaîne.</p>

<h3>GMA = gestion mutualisée des approvisionnements.</h3>

<p>La GMA consiste à confier à un groupe d'industriels la gestion de l'approvisionnement vers le distributeur.</p>
<p>Elle garde les principes de la GPA avec une collaboration étroite entre industriel et distributeur et ajoute une collaboration « multi-industriels » pour servir de façon commune le distributeur.</p>

<p>Cette technique part du fait que le moyen idéal pour maintenir un niveau de stock bas et pour répondre à la variabilité de la demande est d'obtenir des produits plus souvent et en faibles quantités, ce qui implique une augmentation des livraisons et une baisse importante du taux de remplissage des camions.</p>
<p>Pour garder l'objectif de « camion complet », cher aux industriels, tout en augmentant le nombre de livraisons, il est nécessaire de partager le camion entre plusieurs fournisseurs.</p>


<div class="grid-2">
	<div>
		<img src="/assets/img/qlio/dem/GMA.png" alt="Graphique représentant le fonctionnement d'une gestion mutualisée des approvisionnement" />
	</div>
	<div>
		<ol>
		<li>Transmission du niveau du stock fournisseur.</li>
		<li>Élaboration par le SI de GMA des commandes de réapprovisionnement complémentaires aux deux industriels.</li>
		<li>Envoi des commandes au distributeur pour validation.</li>
		<li>Validation des commandes aux industriels.</li>
		</ol>
	</div>
</div>

<h3>CPFR = Collaborative Planning and Forecasting Replenishment.</h3>

<p>Ce mode de gestion des approvisionnements implique que le distributeur et le producteur mettent en commun leurs informations pour élaborer ensemble des prévisions fiables, tant au niveau du volume des achats que de l'introduction de nouveaux produits ou des promotions.</p>
<p>Les décisions de réapprovisionnement ne se fondent plus sur des historiques de données et des ajustements aléatoires mais sur une collaboration étroite entre distributeurs et fournisseurs.</p>
<p>La principale limite à la généralisation de cette méthode réside toutefois dans la nécessaire évolution des mentalités pour passer à une réelle « logique collaborative ».</p>
<p>Par ailleurs, les questions de confidentialité sont un vrai obstacle au développement du CPFR. La montée en puissance des marques de distributeur (MDD) complique cette relation car les distributeurs deviennent également des concurrents.</p>

<h3>Enjeux de la grande distribution.</h3>

<p>Les nouveaux enjeux qui préoccupent les principaux acteurs de la grande distribution sont :</p>
<ul>
	<li>La réduction des coûts logistiques,</li>
	<li>l'optimisation du transport,</li>
	<li>la réduction des stocks,</li>
	<li>les impacts sur l'environnement,</li>
	<li>l'augmentation du prix des carburants,</li>
	<li>la rareté des transporteurs, etc.</li>
</ul>

<p>À la recherche de l'efficience, de nouvelles solutions apparaissent.</p>

<ul>
	<li>Réduire les stocks et améliorer le taux de service (GMA).</li>
	<li>Mutualiser le transport et le stockage.</li>
</ul>
<img src="/assets/img/qlio/dem/gma-exemple.png" alt="Graphique représentant la différence entre une GMA et une logistique traditionnelle" />

<p>Certaines solutions proposent d'effectuer des tournées de chargement multipick.</p>
<p>Elles répondent à l'objectif de mutualisation des flux de transport, mais elles impliquent une proximité géographique des centres de distribution des industriels.</p>
<p>Pour éviter d'effectuer ces tournées de chargement, il est possible d'utiliser un prestataire logistique commun aux industriels.</p>
<p>En plus de mutualiser le transport, cette solution permet de mutualiser le stock et sa gestion.</p>

<h3>Garder la responsabilité de l'approvisionnement.</h3>

<p>GMA à quotas de répartition fixés dans un horaire établi entre les fournisseurs et les distributeurs.</p>

<div class="grid-2 has-gutter-l">
	<div>
	<ul class="reussite">Avantages
		<li>Cette GMA est la plus simple à réaliser.</li>
		<li>Pas de changements logistiques et informationnels importants.</li>
	</ul>
	</div>
	<div>
		<ul class="echec">Inconvénients
			<li>Contraintes de quotas de palettes par industriel dans un camion.</li>
			<li>Freins importants à l'efficience logistique.</li>
		</ul>
	</div>
</div>

<p>Chaque industriel peut effectuer sa proposition de commande et garder la responsabilité de l'approvisionnement de leurs produits en GPA.</p>
<p>La GMA dans sa forme la plus aboutie consiste à réunir les informations nécessaires à l'approvisionnement du distributeur (stock, sorties de stock, manquants, en cours, etc.) pour tous les produits (multi-industriels) dans un même système.</p>
<p> Le but est d'avoir une vision simple des besoins cumulés à approvisionner vers le distributeur. Un super-utilisateur valide la proposition de commande en prenant en compte les besoins prioritaires. Il n'y a donc plus de quotas de palettes par industriel.</p>
<p>Certains éditeurs de logiciels GPA/GMA et prestataires logistiques proposent aux industriels et aux distributeurs de remplir le rôle de super-utilisateur.</p>
<p> Il faut noter que l'utilisation d'un tiers pose plusieurs problèmes, essentiellement liés à la concurrence (confidentialité, complexité des opérations des industriels, gestion des ruptures usines/fournisseurs, etc.).</p>

<h3>Mutualiser le transport et le stockage</h3>

<p>La GMA dans sa forme la plus aboutie consiste à réunir les informations nécessaires à l'approvisionnement du distributeur (stock, sorties de stock, manquants, en cours, etc.) pour tous les produits (multi-industriels) dans un même système.</p>

<p>Certains éditeurs de logiciels GPA/GMA et prestataires logistiques proposent aux industriels et aux distributeurs de remplir le rôle de super-utilisateur.</p>


<div class="grid-2 has-gutter-l">
	<div>
	<ul class="reussite">Avantages
		<li>Vision simple des besoins cumulés à approvisionner vers le distributeur.</li>
		<li>Un seul « super-utilisateur » valide la proposition de commande en prenant en compte les besoins prioritaires.</li>
		<li>Pas de quotas de palettes par industriel.</li>
	</ul>
	</div>
	<div>Il faut noter que l'utilisation d'un tiers pose plusieurs problèmes, essentiellement liés à la concurrence :

		<ul class="echec">Inconvénients
			<li>Confidentialité.</li>
			<li>Complexité des opérations des industriels.</li>
			<li>Gestion des ruptures usines/fournisseurs.</li>
			<li>Etc.</li>
		</ul>
	</div>
</div>

<h3>Vision globale de la chaîne logistique.</h3>

<p>La GMA nécessite une maturité importante et une similitude des organisations :</p>
<ul>
	<li>mêmes industries,</li>
	<li>mêmes secteurs et tailles similaires.</li>
</ul>

<p>Comme pour les cartels, il faut stabiliser la relation. C'est pourquoi la stratégie WIN/WIN Industrie/Distribution doit être respectée.</p> 

<p>Les premiers tests de GMA sont très encourageants avec des réductions de stocks importantes chez le distributeur, tout en gardant un taux de service optimal.</p>

<p>Les pilotes réalisés montrent qu'il faut prioriser les objectifs et en abandonner quelques-uns.</p>

<div class="notice exemple">
<ul>Exemple : 
	<li>L'optimisation du taux de préparation des cueillettes pour l'industriel.</li>
	<li>La réduction du taux de chevauchement pour le distributeur (= pourcentage de SKU (stock-keeping unit) proposés plusieurs fois sur une période).</li>
</ul>
</div>

<img src="/assets/img/qlio/dem/gma_collaboration_externe.png" alt="Schéma d'une organisation en collaboration externe" />


</div>

