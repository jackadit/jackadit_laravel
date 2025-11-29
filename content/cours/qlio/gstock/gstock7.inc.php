<?php
/**
 * BUT : La gestion des stocks
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Représentation des systèmes qualité et logistique
 * @category gstock
 * @access protected
 * @uses db
 */
$sNavigation = navigation('gstock', '7'); ?>





<h1>Les stocks dans la supply chain</h1>

<h2> Principe de Forrester</h2>

<p>Le <span lang="en">Beer Game</span>, un classique des jeux de simulation en management de la chaîne logistique a été inventé dans les années 1960 par Jay Forrester au MIT, avec comme objectif initial d'étudier l'effet de la structure des systèmes sur le comportement des décideurs.</p>

<p>Le jeu a depuis connu d'autres applications dont la plus connue est celle qui consiste à mettre en évidence l'effet coup de fouet, ou phénomène de variabilité croissante de la demande dans les chaînes logistiques.</p>

<p>Le <span lang="en">Beer Game</span> permet de mettre en évidence trois phénomènes illustrés ci-après.</p>

<p>Lorsque le client commande une quantité supérieure à d'habitude, pour éviter toute rupture de stock à l'avenir, les prochains maillons de la supply chain réagiront de telle manière à provoquer irrémédiablement une oscillation au niveau de la quantité commandée.</p>
<p>Et plus on s'éloigne de l'événement source, plus chaque maillon de la chaîne réagit :</p>
<ul>
  <li>de manière disproportionnée (amplification)</li>
  <li>et avec retard (déphasage)</li>
</ul>

<!--div class="exercice w800p">
  <p>Prenons l'exemple suivant : un client commande quatre unités pendant quatre semaines, puis huit pour les autres périodes.</p>


<img src="/assets/img/qlio/gstock/beer_game_demande_client.png" alt="Graphique illustrant la demande client pour le beer game" />

<p>Au niveau des commandes, pour chaque maillon de la supply chain, nous aurons des résultats sensiblement identiques au graphique suivant :</p>

<img src="/assets/img/qlio/gstock/beer_game_commandes.png" alt="Graphique illustrant la demande des différents maillons de la supply chain" />

<p>Le niveau des stocks des différents acteurs de la supply chain ressemblera vraisemblablement à ce qui s'affiche dans le graphique suivant :</p>
<img src="/assets/img/qlio/gstock/beer_game_niveau_stock.png" alt="Graphique illustrant le niveau des stocks des différents maillons de la supply chain" />

<P>Et en ce qui concerne les coûts engagés par chacun, le graphique ressemblera à ce qui suit :</P>
<img src="/assets/img/qlio/gstock/beer_game_couts.png" alt="Graphique illustrant les couts pour les différents maillons de la supply chain" />

</div>


<h3>Champ de vision "local"</h3>

<p>Sous la pression, nous nous concentrons sur notre propre maillon.</p>

<p class="notice remarque">Chaque maillon à son niveau interprètera, malheureusement de manière érronée, la commande du maillon précédent.</p>

<img src="/assets/img/qlio/gstock/beer_game_champ_vision.png" alt="Graphique illustrant le champ de vision pour les différents maillons de la supply chain" />

<p class="notice remarque">Et quand les effets long-terme dus à notre vision partielle surviennent, nous accusons notre client de commander de manière désordonnée et notre fournisseur de livrer en retard !</p>


<h3>Oscillation</h3>

<p>Les commandes et les stocks suivent des fluctuations à larges amplitudes avec une période moyenne d'environ 20 semaines.</p>

<img src="/assets/img/qlio/gstock/beer_game_oscillation.png" alt="Graphique illustrant le phénomène d'oscillation du beer game" />

<p class="notice info">L'oscillation est le premier des trois phénomènes (ou effets) que l'on peut observer lors du beer game. Il découle principalement de l'action-réaction.</p>

<h3>Amplification</h3>

<p class="notice info">Plus on s'éloigne de l'événement source, plus chaque maillon de la chaîne réagit de manière disproportionnée. C'est le phénomène d'amplification.</p>

<img src="/assets/img/qlio/gstock/beer_game_amplification.png" alt="Graphique illustrant le phénomène d'amplification du beer game" />


<h3>Déphasage</h3>

<p class="notice info">Le troisième phénomène, également du à l'éloignement de l'évènement source, est celui du déphasage. En d'autres termes... on réagit avec du retard !</p>

<img src="/assets/img/qlio/gstock/beer_game_dephasage.png" alt="Graphique illustrant le phénomène de déphasage du beer game" />


<h3>Champ de vision … élargi !</h3>


<p class="notice remarque">Chacun des acteurs de la chaîne a besoin d'une visibilité globale pour apporter une réponse adaptée …</p-->


<h2> Management du réseau logistique</h2>

<h3> Éviter le "Bullwhip Effect"</h3>

<img src="/assets/img/qlio/gstock/bullwhip_effect.png" alt="graphique illustrant le bullwhip effect" />


<div class="notice remarque">
  <p>Les stocks coûtent, mais aident à assurer le service client.</p>
  <p>Les délais créent l'inertie tout comme les chaînes logistiques longues.</p>
  <p>Nécessité d'un système d'informations pour coordonner chaque étage de la chaîne.</p>
  <p>Nécessité d'une coopération dans le réseau.</p>
</div>


<h2> D.R.P. : planification des ressources de distribution</h2>

<dl>
  <dt>D.R.P.</dt>
  <dd><span lang="en">Distribution Resource Planning</span> : En français <span class="tag--info">planification des ressources de distribution</span>, est un processus de gestion en cascade qui détermine les besoins des
localisations de stocks qui garantit que les sources d'approvisionnement pourront répondre à
la demande </dd>
</dl>

<h3> Livraison planifiée des dépôts</h3>

<img src="/assets/img/qlio/gstock/drp.png" alt="graphique illustrant le principe de la DRP" />

<p>Le concept de DRP, a été inventé par André J. MARTIN dans les années 80.</p>

<h4>Système classique de gestion de stock dans les réseaux de distribution</h4>

<ul>
  <li>On constate le niveau des stocks.</li>
  <li>Point de commande ou recomplètement périodique dans chacun des dépôts.</li>
  <li>Déclenchement de commandes de réapprovisionnement à l'entrepôt central ou à l'usine.</li>
  <li>Aucune anticipation possible dans la supply chain : on ne traite que les besoins immédiats.</li>
</ul>

<p>Partant du constat que dans de nombreuses entreprises disposant d'entrepôts primaires qui servent un réseau d'entrepôts secondaires, ce sont ces derniers qui décident quoi, combien et à quelle fréquence commander aux entrepôts primaires.</p>
<p>Les limites de ce mode d'approvisionnement sont assez évidentes. Dans une situation de pénurie, cela peut conduire à reconstituer un stock tandis qu'un client d'un autre entrepôt est en rupture.</p>

<P>La DRP repose sur l'utilisation de nomenclatures de distribution qui modélisent le réseau logistique en interconnectant entrepôts primaires et secondaires. Tout comme le MRP utilise les nomenclatures de production pour calculer les besoins en composants, la DRP utilise des nomenclatures de distribution pour propager la demande des entrepôts secondaires aux entrepôts primaires.</P>
<P>Dans la pratique, le calcul DRP prend en compte les besoins fermes et prévisionnels de chaque marché, calcule les besoins nets à chaque niveau du réseau, consolide ces besoins, et les positionne à la bonne période en tenant compte des délais d'approvisionnement.</P>
<P>C'est ce besoin net consolidé que les entrepôts primaires doivent servir à partir de leur stock. La DRP s'achève par le déploiement, c'est-à-dire la répartition du stock central vers les stocks locaux. En cas de pénurie, le DRP permet de remonter à l'origine du besoin et facilite les arbitrages. Des règles de répartition équitable peuvent également être utilisées.</P>
<P>L'invention du MRP au cours des années 60, a révolutionné la gestion industrielle : depuis lors, les besoins en composants ne sont plus considérés comme des besoins indépendants, mais comme des besoins dépendants issus des besoins des articles niveau supérieur. La DRP revient à considérer les besoins des entrepôts primaires non plus comme des besoins indépendants, mais comme des besoins dépendants, issus des besoins des entrepôts secondaires.</P>
<P>Elle permet l'extension de la Supply Chain vers l'aval, que l'entreprise soit propriétaire ou non de son réseau de distribution.</P>

<p>En d'autre termes, la DRP est un processus de planification qui permet de définir certains paramètres de contrôle du niveau de stocks, notamment un stock de sécurité, et de calculer les besoins en stocks échelonnés dans le temps en fonction des prévisions de ventes et des commandes.</p>

<p>Ce procédé intègre plusieurs variables tels que :</p>
<ul>
  <li>La quantité de produit requise au début d'une période.</li>
  <li>La quantité limite de produit disponible au début d'une période.</li>
  <li>La quantité de commande recommandée au début d'une période.</li>
  <li>La demande en attente à la fin d'une période.</li>
  <li>L'inventaire disponible à la fin d'une période.</li>
</ul>
 
<p>Pour un fonctionnement optimal, le processus de Distribution Resource Planning nécessite de rassembler différentes données input, telles que :</p>
<ul>
  <li>Les prévisions de ventes.</li>
  <li>Les recettes prévisionnelles.</li>
  <li>L'inventaire au début d'une période.</li>
  <li>Le stock de sécurité requis pour une période.</li>
</ul>

<div class="exercice">
  Exercice de planification des besoins de distribution :
    <img src="/assets/img/qlio/gstock/drp_exo.png" alt="exercice de planification des besoins de distribution" />

    Correction :
    <img src="/assets/img/qlio/gstock/drp_exo_corrige.png" alt="corrigé de l'exercice de planification des besoins de distribution" />

</div>

<h3> Cas d'une vente promotionnelle</h3>

<table class="table w900p">
<thead>
<tr>
    <th class="w300p" colspan="2">Dépôt</th>
    <th colspan="10">Périodes</th>
</tr>
</thead>
<tbody>
  <tr>
    <td colspan="2">SS=10  d= 1période  Q=25</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
  </tr>
  <tr>
    <td colspan="2">Besoins prévisionnels</td>
    <td>25</td>
    <td>25</td>
    <td>25</td>
    <td>25</td>
    <td>50</td>
    <td>50</td>
    <td>35</td>
    <td>35</td>
    <td>15</td>
    <td>15</td>
  </tr>
  <tr>
    <td colspan="2">En transit</td>
    <td>25</td>
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
    <td class="w250p">Disponible prévisionnel</td>
    <td class="w50p">35</td>
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
    <td colspan="2">Livraisons prévisionnelles</td>
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

<table class="table w900p">
<thead>
<tr>
    <th class="w300p" colspan="2">Packaging</th>
    <th colspan="10">Périodes</th>
</tr>
</thead>
<tbody>
  <tr>
    <td colspan="2">SS=10  d= 1période  Q=lot pour lot<br />Capacité : 40 unités/période</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
  </tr>
  <tr>
    <td colspan="2">Besoins bruts</td>
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
    <td colspan="2">Réceptions prévues</td>
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
    <td class="w250p">Disponible prévisionnel</td>
    <td class="w50p">0</td>
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
    <td colspan="2">Ordres prévisionnels</td>
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
    <td colspan="2">Ordres fermes</td>
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


<h3>Niveau de service et stock de sécurité</h3>

<img src="/assets/img/qlio/gstock/niveau_service_stock_securite.png" alt="Courbe montrant la correlation entre le niveau de service et le stock de sécurité" />


<h3>Relation entre stock de sécurité et nombre de dépôt</h3>


<p>Le stock de sécurité (SS) pour <strong>chaque</strong> centre de distribution se calcule de la manière suivante :</p>

<div class="formule">
  <span class="xl">Stock de sécurité pour chaque centre</span> = 
	<div class="fraction ">  
		<span class="numerateur">Stock de sécurité pour<br />UN centre de distribution</span>
		<span class="bar">/</span>
		<span class="denominateur"><span class="radical3">&radic;</span><span class="radicand3">Nombre de centres de distribution</span>
	</div>
</div>

<div class="exercice w800p">
  <p>Prenons l'exemple suivant : Une entreprise garde 500 unités d'un produit fini en stock de sécurité dans son unique centre de distribution, vu la croissance du marché, elle décide de construire 3 centres de distribution.</p>
  <h4>Stock de sécurité nécessaire dans chaque centre :</h4>

<div>
	<span class="xl">SS chaque centre</span> = <span class="radical2">&radic;</span>
	<div class="fraction radicand2">
		<span class="numerateur">500</span>
		<span class="bar">/</span>
		<span class="denominateur">4</span>
	</div>= 250
</div>

  <h4>Stock de sécurité total :</h4>

  <p>SS chaque centre = 250 x 4 = 1 000</p>

</div>

<div class="exercice w800p">
  <p>Autre exemple : Une entreprise à un stock de produits finis d'une valeur de 30 600 000 euros dont 600 000 euros de stock de sécurité. Ces stocks sont répartis dans 9 dépôts. La société décide de construire 
16 dépôts supplémentaires :</p>

<h4>Nouveau stock de sécurité par dépôt :</h4>

<div>
	<span class="">SS comme s'il y avait un unique dépôt</span> = <span class="radical2">&radic;</span>
	<div class="fraction radicand2">
		<span class="numerateur">600 000</span>
		<span class="bar">/</span>
		<span class="denominateur">9</span>
	</div>= 200 000
</div>

  <h4>Nouveau stock de sécurité total :</h4>

  <div>
	<span class="">Si 25 dépôts, alors SS par dépôt</span> = <span class="radical2">&radic;</span>
	<div class="fraction radicand2">
		<span class="numerateur">600 000</span>
		<span class="bar">/</span>
		<span class="denominateur">25</span>
	</div>= 40 000
</div>

  <p>Nouveau stock total = 40 000 x 25 = 1 000 000</p>

</div>


<h3>Flowcasting</h3>

<p>Le concept de flowcasting a été également inventé par André J. MARTIN.</p>

<p>D'un côté, les contraintes que les acteurs de la Supply Chain (approvisionneurs, manufacturiers, planificateurs, prestataires logistiques, ...) subissent sont :</p>
<ul>
  <li>Niveau de profitabilité.</li>
  <li>Réglementation sécuritaire et alimentaire.</li>
  <li>Raréfaction des ressources de matières premières.</li>
  <li>Limites des capacités de transport.</li>
  <li>Hyper-concurrence.</li>
  <li>…</li>
 </ul>

<p>De l'autre, la volatilité des demandes des consommateurs :</p>
<ul>
  <li>Dispersion des comportements.</li>
  <li>Métro-urbains.</li>
  <li>Promotions.</li>
  <li>Low cost attitude.</li>
  <li>Renouvellement des gammes et références.</li>
  <li>…</li>
</ul>

<p>Le développement et la pratique du processus DRP n'a malheureusement que modérer cette réalité.</p>

<p>Pour rappel, les principales données à connaître dans le cadre de ce processus sont :</p>
<ul>
  <li>Les prévisions de vente par unité de stock et par dépôt .</li>
  <li>Les commandes clients à date.</li>
  <li>Les stocks disponibles à la vente par unité de stock et par dépôt.</li>
  <li>Les délais de la supply chain (achat, production et distribution).</li>
  <li>Les politiques de stock de sécurité.</li>
  <li>Les quantités minimum d'achat, production et distribution.</li>
</ul>
 
<p>Elles permettent une simulation des besoins en ressources dans le temps à savoir :</p>
<ul>
  <li>Les références dont on aura besoin, où et à quelle date ?</li>
  <li>Les besoins en capacités de transport par type de véhicule et par dépôt.</li>
  <li>Les besoins en main d'œuvre, équipements par dépôt.</li>
  <li>Les besoins en investissement de stock.</li>
  <li>Les volumes de production et/ou achat par produit et source d'approvisionnement.</li>
</ul>

<p>Partant d'une réalité stable dans le temps, celle du niveau rémanent, et semble-t-il incompressible des ruptures en linéaire, aux alentours de 8 à 9% du nombre des références
présentes (aussi bien aux USA qu'en Europe), les recherches se sont développées pour le réduire dans le contexte qualifié ci-dessus.</p>
<p>Dans le cadre d'une Conférence organisée par la Chaire de Logistique des Professeurs ZIV et JOUENNE au CNAM, André J. MARTIN, spécialiste de l'intégration des chaînes de
distribution et père concepteur du DRP, est venu présenter à la communauté des logisticiens et experts de la Supply Chain son dernier concept dit de <span class="tag--info">FLOWCASTING</span>.</p>

<p class="h2-like">De quoi parle-t-on ?</p>
<p>Tout d'abord , du constat que 100% de ce qui devrait être « prévisionné » est calculé et que 100% de ce qui devrait être calculé est prévisionné.</p>

<p>Ensuite du constat que 97% des produits approvisionnés en points de vente le sont par leur propre réseau de distribution (autrement dit le réseau des plate-formes des distributeurs) et les
méthodes de réapprovisionnement sont encore bien souvent disparates, basiques (le point de commande est encore largement pratiqué) et très éloignées de la variété des évènements se
produisant sur un point de vente (ruptures, promotions, mise en avant, aspects de concurrence locale….).</p>
<p>Le résultat, malgré la mise en œuvre du DRP depuis une douzaine d'années, amène à constater la résistance de ce taux de ruptures en linéaire de l'ordre de 8 à 9%.</p>
<p>Fort de ce constat et dans un état d'esprit très innovant (think out of the box), empreint d'une réflexion partagée avec J. ORLICKY sur le fait de ne jamais « prévoir ce que vous
pouvez calculer », André J. MARTIN en a dégagé un nouveau paradigme dénommé <span class="tag--info">FLOWCASTING</span> qui repose sur une simple idée :</p>

<ul>
  <li>Le seul endroit où il est juste et pertinent de faire de la prévision est sur le point de vente (head of the Retail Supply Chain), et elle doit être faite entre tous les acteurs concernés par la connaissance des évènements du magasin.</li>
  <li>Cette prévision donne un ensemble de données, unique , homogène et connu de tous dans la chaîne.</li>
  <li>À partir de cette prévision, unique et partagée, et les flux de la chaîne étant modélisés, tout le reste doit être calculé ( planification des stocks, approvisionnements, niveau de ressources humaines, mètres carrés, équipements, etc).</li>
</ul>

<p>La planification des flux commence en point de vente et l'exécution des flux se termine en point de vente.</p>

<p>Toutes les actions et informations (que ce soit en calcul de prévision ou calculs de planification ) sont sujettes à enrichissement et révision par les acteurs de la chaîne Les premiers pilotes opérés sous la conduite de André J. MARTIN ont donné des résultats spectaculaires :</p>
<ul>
  <li>Réduction du niveau des stocks de 50% en quelques semaines.</li>
  <li>Réduction des coûts de la supply chain de 1 à 6% du niveau des ventes.</li>
  <li>Retour des ruptures en linéaire à un niveau de 1 à 2% du nombre de références.</li>
</ul>
<p>L'enjeu estimé de cette approche aux USA est de 600 milliards de dollars (soit 6% de 10,36 trillions de dollars).</p>
<p>Le message est donc clair : <span class="tag--info" lang="en">Don't forecast but flowcast !</span></p>


<p>&nbsp;</p>

