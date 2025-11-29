<?php
/**
 * BUT : Introduction à la gestion de la demande
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
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


<h1>Concepts de base de la prévision</h1>

<h2>Enjeux de la prévision</h2>

<h3>Pourquoi travailler sur prévisions ?</h3>

<p>Lorsque le délai de production est supérieur au délai promis au client il faut produire d'après des prévisions.</p>

<p>Lorsqu'une entreprise veut développer un secteur d'activité, elle vérifie – par des prévisions – l'évolution possible des marchés concernant ses produits.</p>

<blockquote>
Il vaut mieux une image floue que ... pas d'image du tout !»<br />
<cite>(Proverbe chinois)</cite>
</blockquote>

<p class="h2-like">Un peu d'histoire...</p>

<p>À partir des années 80, il y a eu une remise en cause des organisations traditionnelles en raison d'un environnement changeant et de profondes mutations dans les comportements de consommation des individus.</p>

<p class="h3-like">Avant les années 80</p>
<p>Les entreprises fonctionnaient sur un modèle de production de masse.</p>
<p>Cette organisation basée sur une approche métier était rigide et avait pour défaut majeur un taux de service faible.</p>
<p>&nbsp;</p>
<img src="/assets/img/qlio/dem/avant80.png" alt="Organisation avant les années 80" />

<p class="h3-like">Après les années 80</p>
<p>Pour remédier à cette difficulté, une nouvelle méthode de production est apparue.</p>
<p>La production différenciée, permit de gagner en flexibilité et en agilité.</p>
<p>La logistique est dorénavant appréhendée de façon globale, les systèmes d'informations ayant permis de développer ce qu'on appelle la <span class="tag--info">Supply Chain</span></p>

<img src="/assets/img/qlio/dem/apres80.png" alt="Organisation après les années 80" />

<p class="h3-like">Environnement changeant...</p>
<ul>
	<li>Une relative volatilité des clients.</li>
	<li>Les délais de mise sur le marché des nouveaux produits se réduisent.</li>
	<li>Les gammes s'élargissent.</li>
	<li>Les actions promotionnelles s'amplifient.</li>
	<li>Lancement sur des marchés ou des canaux de distribution peu connus.</li>
	<li>Politique environnementale de plus en plus exigeante (taxes,…).</li>
</ul>
<p>Dans ces conditions, il devient indispensable de définir des processus opérationnels permettant de mieux contrôler la construction des prévisions de ventes, afin de s'adapter à cet environnement.</p>


<h3>Buts et utilisations de la prévision</h3>

<blockquote>« ... Gouverner c'est prévoir… »</blockquote>

<p>Une prévision est l'activité où l'on cherche à calculer ou prédire un évènement futur, sur la base d'une analyse rationnelle de données disponibles, de l'expérience passée et de tout autre évènement pertinent.</p>

<p>Cela se traduit concrètement par :</p>
<ul>
	<li>Identifier un article.</li>
	<li>Définir l'unité de consommation de cet article.</li>
	<li>Définir l'unité de temps de la période de prévision concernée.</li>
	<li>Définir l'horizon de prévision.</li>
</ul>

<p class="h3-like">Objectif</p>

<p>Réduire l'incertitude dans le calcul des ventes futures de produits afin de fabriquer ou acheter ces derniers à l'avance dans les quantités appropriées.</p>

<p>Plus la fiabilité des prévisions est élevée, et plus il est possible :</p>
<ul>
	<li>d'optimiser la finance, les ressources, les canaux de production et logistique,</li>
	<li>d'améliorer le niveau de service client.</li>
</ul>

<h3>Unités de consommation</h3>

<p>Pour un même article, on peut rencontrer :</p>
<ul>
	<li>Unité d'achat.</li>
	<li>Unité de livraison du fournisseur.</li>
	<li>Unité de manutention…</li>
</ul>


<p class="notice remarque">Attention aux livraisons invraisemblables à la suite d'erreur d'unité dans le calcul des prévisions.</p>

<p>À ces unités de consommation peuvent s'ajouter d'autres unités comme :</p>
<ul>
	<li>La taille de lot fournisseurs.</li>
	<li>La quantité de conditionnement.</li>
</ul>

<p class="h3-like">À savoir...</p>
<p class="notice info">Si la quantité statistiquement prévue est inférieure à la taille de lot mini du fournisseur alors la prévision sera au minimum la taille de lot.</p>

<p class="notice info">Pour réduire les manipulations, et donc réduire les coûts de manutentions en logistique et transport, la quantité statistiquement prévue sera arrondie à la quantité d'emballage juste supérieure.</p>

<p>En synthèse : la quantité à prévoir est un multiple d'unité fournisseur et/ou d'une unité de conditionnement.</p>

<h3>Faut-il faire des prévisions sur tous les articles ?</h3>

<p>Sous‐entendu à force de vouloir chercher mieux, on risque de perdre ce qui est bien !</p>

<p class="notice remarque">L'efficacité de la prévision dépend pour plus de 80% de la qualité de l'organisation de cette fonction et pour moins de 20% du choix des modèles mathématiques utilisés.</p>

<p class="h3-like">Segmentation des produits par catégorie.</p>
<p>Les catégories évoluent en fonction :</p>
<ul>
	<li>De la politique / stratégie des stocks.</li>
	<li>Du secteur dans lequel on évolue.</li>
	<li>Des types de produits de l'entreprise.</li>
	<li>Des contraintes.</li>
	<li>Des ressources.</li>
	<li>De la qualité des prévisions.</li>
</ul>

<p class="h3-like">À retenir :</p>
<p class="ok">Il est essentiel d'identifier les <strong>produits critiques</strong> pour lesquels on doit suivre la qualité des prévisions car « le mieux est l'ennemi du bien …»</p>

<h3>Méthode de segmentation : Classification ABC</h3>


<p>La classification ABC est une application de la loi de Pareto (ou loi des 20/80) selon laquelle 20 % des unités les plus importantes représentent 80 % de la valeur globale ou du chiffre d'affaires.</p>

<p>Elle segmente les articles en trois groupes :</p>
<ul>
	<li>Groupe A: 80% des ventes pour 20% des produits.</li>
	<li>Groupe B: 15% des ventes pour 30% des produits.</li>
	<li>Groupe C: 5% des ventes pour 50% des produits.</li>
</ul>

<div class="notice info">
<p class="h3-like">Notes linguistiques</p>
<p>Le sigle ABC vient de <span class="tag--warning">American Audit Bureau of Circulation</span>.</p>
<p>Il est important de ne pas confondre cette méthode ABC classique avec une méthode comptable américaine des années 80 appelée, elle aussi, ABC pour <span class="tag--warning">Activity Based Costing</span>.</p>
<p>Certains auteurs apportent une légère distinction entre les termes méthode ABC et classement ABC ou classification ABC.</p>
<p>Ils emploient ces derniers termes pour mettre l'accent sur l'action plutôt que sur la méthode.</p>
</div>

<p class="h3-like">La classe de précision – la fluctuation</p>

<p>Le critère de consommation n'est pas suffisant pour cibler les produits critiques. Il faut également intégrer la fluctuation des ventes.</p>

<img src="/assets/img/qlio/dem/classe_precision.png" alt="Classe de précision" />

<p>Intégration de la fluctuation des ventes</p>
<ul>
	<li>Groupe A.1</li>
	<li>Groupe A.2</li>
	<li>Groupe B.1</li>
	<li>Groupe B.2</li>
</ul>

<h2>Niveaux de planification dans la prévision de la demande</h2>


<p>La prévision de la demande se fait à trois niveaux :</p>
<ol>
<li>Business plan.</li>
<li>S&OP (Sales and Operations Planning) = PIC (Planification Industrielle et Commerciale).</li>
<li>Master Scheduling (Programme directeur).</li>
</ol>

<dl>
<dt>S&OP (PIC)</dt>
	<dd>Plan tactique réalisé une fois par mois et validé par la direction au niveau des familles de produits. Ce processus rapproche l'approvisionnement de la demande.</dd>
<dt>MS</dt>
	<dd>Master Scheduling (Programme directeur) :  tableau qui regroupe par période, les prévisions et commandes clients, le stock disponible prévisionnel, le disponible à la vente et le PDP</dd>
<dt>MPS (PDP)</dt>
	<dd>MPS = Master Production Schedule - PDP = Plan Directeur de Production</dd>
</dl>

<p>Les prévisions deviennent de plus en plus détaillées au fur et à mesure qu'on passe du <span class="tag--info">Business Plan</span> au <span class="tag--info">Master Scheduling</span> (dont le output est le MPS)</p>

<h3>Comment les prévisions servent de support au planning ?</h3>

<table class="table">
<thead>
<tr>
<th class="w250p">Niveau de planning</th>
<th class="w400p">Prévision</th>
<th class="">Horizon</th>
</tr>
</thead>
<tbody>
<tr>
<td>Business planning</td>
<td>Lancement d'un nouveau produit, <br />Nouvelle technologie, <br />Investissement</td>
<td>2 à 10 ans</td>
</tr>
<tr>
<td>S&OP (PIC)</td>
<td>Unités physiques de production au niveau de la famille de produits
<br />Ajustement des capacités (PIC), <br />Établissement des budgets</td>
<td>1 à 3 ans </br>(18 mois minimum)
</td>
</tr>
<tr>
<td>Master scheduling (PDP et MRP)</td>
<td>Unités physiques de production au niveau de l'élément final
<br />Gestion des approvisionnements, <br />Ajustement des capacités (CRP)</td>
<td>3 à 18 mois</td>
</tr>
<tr>
<td>Ordonnancement</td>
<td>Prévision à très court terme</td>
<td>jours</td>
</tr>
</tbody>
</table>

<div class="notice remarque">
<p>Horizon = temps d'acquisition des ressources critiques</p>
<p>On admet généralement que : horizon = 2 * cumulative lead time</p>
<p>Plus l'horizon est long, plus grande sera l'incertitude</p>
</div>

<blockquote>
	<p>… Parler d'un avenir très lointain, c'est mesurer l'infini avec un décimètre… </p>
	<cite>D. Pennac</cite>
</blockquote>

<h3>2.2 - Principes fondamentaux</h3>

<ol>
<li><strong>L'incertitude croît avec l'horizon de prévision</strong>.</li>
<p class="notice remarque">Plus l'horizon de prévision augmente, plus il est nécessaire de faire des prévisions agrégées (par familles).</p>
<li><strong>Il faut toujours associer un pourcentage d'erreur</strong>.</li>
<p class="notice remarque">Faire des prévisions n'est pas une science exacte, il est important d'y associer une variabilité espérée.</p>
<li><strong>Il faut segmenter les prévisions lorsqu'elles sont nombreuses</strong>.</li>
<p class="notice remarque">Si le nombre de prévisions à réaliser est grand, on n'aura pas le temps de tout valider…</p>
<li><strong>On doit assurer l'intégration de différents types d'informations</strong>.</li>
<p class="notice remarque">Les chiffres ne sont pas tout, on doit intégrer des données quantitatives (historiques) ainsi que des données qualitatives (ou globales).</p>
</ol>



<h2>Prévision et collecte de données</h2>

<h3>Les prévisions : quatre principes</h3>
<ol>
<li><strong>Sont rarement précises au fil du temps</strong>.</li>
<p class="notice remarque">Elles sont basées sur des statistiques de probabilité. Des erreurs sont donc inévitables et doivent être attendues.</p>
<li><strong>Devraient inclure une estimation de l'erreur</strong>.</li>
<p class="notice remarque">Basées sur l'étude de la variabilité autour de la demande moyenne. Les prévisionnistes peuvent fournir des estimations d'erreurs basées sur des statistiques soit en pourcentage de la prévision soit en marge entre une valeur max et une valeur min.</p>
<li><strong>Sont plus précises pour des groupes ou familles de produits</strong>.</li>
<p class="notice remarque">Il est plus facile de prévoir des ventes globales pour un type de boisson que des ventes dans un certain conteneur (boite, bouteille, taille de lot, etc.</p>
<li><strong>Sont plus précises sur de courtes périodes</strong>.</li>
<p class="notice remarque">Les prévisions à long terme sont plus sensibles aux évènements inattendus que les prévisions à court terme.</p>
<p class="notice remarque">On a donc intérêt à réduire le lead time !</p>
</ol>

<h3>La collecte et la préparation de données : trois principes</h3>

<p>Beaucoup de prévision sont basées sur des historiques de données.
<p>La collecte et la préparation des données à utiliser sont de ce fait de la plus haute importance.</p>
<p>Il faut un jugement et des compétences analytiques solides.</p>

<ol>
<li><strong>Enregistrer les données en termes nécessaires pour la prévision</strong></li>
<p>De préférence les demandes des clients – et non les ventes ou les livraisons. Ces dernières ne sont pas une véritable indication de la demande.</p>
<p>On utilise les mêmes périodes de prévision que le calendrier de production</p>
<p>Pour faire correspondre les éléments prévus au niveau S&OP, la prévision doit se faire au niveau de la famille de produit.</p>
<p>Au niveau MPS, la prévision doit se faire au niveau des "end items".</p>
<li><strong>Enregistrer les circonstances relatives aux données</strong></li>
<p>L'historique des données des demandes peut être influencé par des évènements comme des promotions, le temps, le changement de prix, des grèves, des initiatives marketing de concurrents. Ces facteurs doivent être pris en compte dans l'analyse des données.</p>
<li><strong>Enregistrer la demande séparément pour les différents groupes de clients</strong></li>
<p>Différents canaux de distribution ont des cycles de commande différents ainsi que des tailles de lot différents.</p>
<p>Il faut enregistrer les données pour chaque groupe séparément pour tenir compte de l'importance de la demande sur l'horizon prévisionnel.</p>
</ol>

<h2>Prévisions quantitatives et qualitatives</h2>

<img src="/assets/img/qlio/dem/technique_prevision.png" alt="Techniques de prévision" />

<h3>Techniques qualitatives</h3>

<p>Elles n'utilisent pas de modèles mathématiques et sont basées sur l'intuition et/ou l'opinion de personnes concernées, donc subjectives.</p>
<p>Elles sont un complément nécessaire pour le business plan et aident à prévoir des tendances générales grâce notamment à des études de marché, etc.</p>
<p>C'est une vision à moyen ou long terme.</p>


<h4>Avis de commerciaux</h4>
<p>Chaque commercial évalue les ventes dans son territoire.</p>
<p class="ok">Avantage : Méthode facile à mettre en oeuvre et intéressante pour le lancement d'un nouveau produit.</p>
<p class="alert">Inconvénient : Elle dépend d'opinions pouvant être biaisées par des objectifs.</p>

<h4>Jury de cadres</h4>
<p>Les avis d'un groupe de cadre sont regroupés en une seule estimation.</p>
<p class="ok">Avantage : Permet d'obtenir une prévision en un temps relativement court en considérant de nombreux ppoints de vue (de secteurs différents).</p>
<p class="alert">Inconvénient : Elle peut conduire à des résultats biaisés par des attitudes individuelles.</p>

<h4>Sondages</h4>
<p>Les avis de personnes extérieures à l'entreprise (et en particulier les clients actuels ou potentiels) sont pris en compte.</p>
<p class="ok">Avantage : Permet d'apprendre le mode de pensée et les attentes des clients.</p>
<p class="alert">Inconvénient : Méthode coûteuse en temps et en personnes.</p>

<h4>Méthode DELPHI</h4>
<p>La méthode <span class="tag--info">DELPHI</span> permet d'avoir un consensus à partir de réponses d'experts.</p>
<p class="ok">Avantage : Permet de diminuer le biais sur l'estimation.</p>
<p class="alert">Inconvénient : Coût élevé et concerne essentiellement les prévisions à long terme.</p>


<h3>Techniques quantitatives</h3>

<h4>Techniques quantitatives extrinsèques</h4>
<p>Elles sont basées sur l'idée de corrélation et de cause à effet, elles s'appuient sur des indicateurs externes pour faire des prévisions de demandes. 

<p class="notice exemple">Par exemple :
Les mises en chantier influencent la vente de matériaux de construction, ou de jouets !</p>

<p>C'est une vision au-delà du court terme pour des familles de produit.</p>

<p>Deux types d'indicateurs :</p>
<ul>
	<li>Économique : démarrage de chantier, contrats de construction, commande pour des avions militaire ou commerciaux, etc.</li>
	<li>Démographique : Taux de natalité, distribution de la pyramide des âges, revenus et niveau d'éducation, etc.</li>
</ul>

<h4>Techniques quantitatives intrinsèques</h4>

<p>Basées sur plusieurs hypothèses :</p>
<ul>
	<li>Le passé aide à comprendre le futur.</li>
	<li>L'historique de données est disponible.</li>
	<li>Le modèle du passé prévoit le modèle futur.</li>
</ul>

<div class="notice exemple">Exemple :
<ul>
<li>Moyenne mobile : à chaque nouvelle observation, on élimine la plus ancienne</li>
<p>Utilisée quand la demande est stable, petite tendance ou saisonnalité et les variations sont aléatoires.</p>
<li>Lissage exponentiel</li>
</ul>
</div>

