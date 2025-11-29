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
?>
<h1>Combien commander ?</h1>

<h2>Introduction</h2>

<h3>Décisions à prendre</h3>
    <p>Quand faut-il commander ? Répondre revient à déterminer l'événement déclencheur de la passation de commande :</p>
    <ol>
      <li>Ordre de réapprovisionnement à période fixe (un fois par semaine, par mois).</li>
      <li>Passation de commande quand le stock disponible descend en-dessous du point de commande (stock d'alerte).</li>
    </ol>
    <p>&nbsp;</p>
  <p>Combien faut-il commander ? La réponse dépend de la précédente …</p>
  <p>Si on fait une passation de commande à date fixe pour une quantité fixe on ne s'adapte pas aux variations de la demande.</p>
  <p>Donc il faut que le facteur temps et/ou le facteur quantité soient variables pour absorber les fluctuations.</p>
  <ol>
    <li>Si la passation de commande a lieu à <span class="tag--info">périodicité fixe</span>, on approvisionne des quantités différentes d'une commande à la suivante (typiquement on approvisionne ce qui a été consommé) => Méthode du recomplètement périodique</li>
    <li>Si la commande survient lorsque le <span class="tag--info">stock mini</span> est atteint, on approvisionne toujours la même quantité => Méthode du point de commande</li>
  </ol>

<h3>Les méthodes de réapprovisionnement</h3>

<table class="table noborder">
  <tr>
    <td class="noborder"></td>
    <th>Période fixe</th>
    <th>Période variable</th>
  </tr>
  <tr>
    <th>Quantité fixe</th>
    <td>Méthode du réapprovisionnement fixe</td>
    <td>Méthode du point de commande</td>
  </tr>
  <tr>
    <th>Quantité variable</th>
    <td>Méthode du recomplètement périodique</td>
    <td>Approvisionnement par date et quantité variable</td>
  </tr>
</table>

<h3>Facteurs influents</h3>
<ul>
  <li>Les prévisions.</li>
  <li>Les délais de réapprovisionnement.</li>
  <li>Les coûts des stocks.</li>
  <li>La politique de gestion de stock.</li>
</ul>


<h2>Combien commander ?</h2>

<div class="notice remarque">
<p>Hypothèse simple :</p>
<ul>
	<li>On gère un seul article.</li>
	<li>La demande ou la consommation est linéaire (constante par unité de temps) et connue avec certitude.</li>
	<li>La livraison d'une commande est reçue en une seule fois.</li>
	<li>Les coûts de possession et les coûts de commande sont constants et connus.</li>
	<li>Le prix est fixe, quelle que soit la quantité commandée (pas de remise sur quantité).</li>
	<li>Le délai d'obtention est connu et fixe (délai = moment où est passée la commande et le moment où la marchandise est en rayon).</li>
	<li>Pas de rupture de stock.</li>
</ul>
</div>

<p>Ces hypothèses sont généralement respectées pour les produits finis ou marchandises dont la demande est indépendante et régulière.</p>
<p>Soit le graphique des quantités commandées en fonction du temps suivant :</p>

<img src="/assets/img/qlio/gstock/graphique_combien_commander.png" alt="graphique des quantités commandées en fonction du temps" />

<p>Q = quantité commandée
<br />D = demande par unité de temps
<br />d = délai d'obtention</p>

<p>L'intervalle entre deux commande successive est donné par le rapport Q/D.</p>
<p>Le nombre de commandes passées par unité de temps est égal à D/Q.</p>

<p>Comme la stock diminue de façon linéaire entre Q et 0 le stock moyen sera de Q/2.</p>

<p>Dans ce système la nouvelle commande est passée quand le stock descendra à la valeur D*d.</p>

<h3>Interprétation de ce modèle simple :</h3>
<ul>
	<li>C'est un système à point de commande dont les paramètres sont D*d et Q comme taille de commande.</li>
	<li>C'est un système à révision périodique : la période de révision est Q/D.</li>
	<li>Le niveau de recomplètement doit permettre de couvrir la demande pendant la période de révision + délai d'obtention et vaut donc Q + D*d.</li>
</ul>

<div class="notice exemple">

<p>Exemple :</p>
<p>Si la demande annuelle est de D=100 et si l'on commande à chaque fois Q= 20 unités, on passera 100/20 = 4 commande dans l'année.</p>
<p>Supposons un délai du fournisseur de 2 semaines, soit 2/50éme de l'année (qui est l'unité de temps).</p>
<p>On trouve : D*d = 100 * 2/50 = 4 unités.</p>
<p>Ce qui signifie qu'on commandera à chaque fois que le stock descendra à 4 unités et la commande arrivera 2 semaines plus tard alors que notre stock deviendra nul.</p>
</div>

<div class="exercice">
	<p>Exercice</p>
	<p>Une entreprise de sous-traitance doit monter et livrer des sous-ensembles à un constructeur de remorques :</p>

	<ul>
		<li>Demande annuelle : D = 1 200 unités.</li>
		<li>Rythme de livraison : 25 / semaine (on comptera 4 semaines / mois).</li>
		<li>Coût unitaire : u = 600 €.</li>
		<li>Coût de préparation : c = 625 €.</li>
		<li>Taux de possession de stock : t = 25% (an).</li>
	</ul>

	<p>L'entreprise veut choisir entre 2 politiques de production :</p>
	<ul>
		<li>Lancer des lots hebdomadaires.</li>
		<li>Lancer des lots mensuels.</li>
	</ul>

	<img src="/assets/img/qlio/gstock/graphique_combien_commander_stock_securite.png" alt="graphique des quantités commandées en fonction du temps avec un stock de sécurité" />


	<p class="h3-like">Chiffrage des 2 solutions</p>
	<p class="h4-like vert">1. Lots mensuels</p>
	<p>Coût de préparation :<!-- 625 x 1200 / 100 = 7 500 €--></p>

	<p>Coût de possession du stock :<!-- 100 / 2 x 600 x 0,25 = 7 500 €--></p>

	<p>Total : <!--15 000 €--></p>

	<p class="h4-like rouge">2. Lots hebdomadaires</p>
	<p>Coût de préparation :<!-- 625 x 1200 / 25 = 30 000 €--></p>

	<p>Coût de possession du stock :<!-- 25 / 2 x 600 x 0,25 = 1 875 €--></p>

	<p>Total :<!-- 31 875 €--></p>


</div>


<h2>Calcul de la série économique</h2>

<p>La quantité économique est la quantité, lancée ou commandée, qui minimise la sommes des coûts des stocks.</p>

<p>Pour simplifier, on ne prend en compte que les coûts de possession (K1 = Q/2 * u * t) et de passation de commande (K2 = S/D * a).</p>

<p>En prenant les définitions suivantes :</p>
<ul>
	<li>Q = Quantité économique.</li>
	<li>D = Demande annuelle.</li>
	<li>c = coût de passation de commande (de préparation).</li>
	<li>u = coût unitaire de l'article.</li>
	<li>t = taux de possession de stock (25% /an).</li>
</ul>

<p class="tag--danger">ATTENTION : t et D doivent être cohérents … donc sur la même échelle de valeur … ici /an.</p>

<p>Pour trouver la quantité économique Q il faut utiliser la formule de Wilson  :</p>

<div class="notice alert">
<p>Hypothèse de calcul de la quantité économique :</p>
<ul>
	<li>Demande connue et stable.</li>
	<li>Article produit et acheté en lot et non pas en continu.</li>
	<li>Coûts de passation de commandes et de possession connus et <strong>constants</strong>.</li>
	<li>Coûts unitaire indépendant de la quantité.</li>
</ul>
</div>

<div class="formule">
Q = <span class="radical4">&radic;</span>
<div class="fraction radicand4">
    <span class="numerateur">2 * D * c&nbsp;</span>
		<span class="bar">/</span>
		<span class="denominateur">u * t</span>
</div>
</div>


<div class="notice remarque">
<p>Cette quantité économique résulte d'un compromis simple :</p>
<p>Les coûts de possession augmentent avec la valeur et donc de la quantité du stock (pour les réduire il faudrait multiplier les petites commandes).</p>
<p>Les coûts de passation de commande augmentent avec le nombre de commande (pour les réduire il ne faudrait passer que des grosses commandes).</p>
</div>

<img src="/assets/img/qlio/gstock/courbe_quantite_economique.png" alt="graphique explicatif de la quantité économique" />


<div class="notice alert">
	<p>La formule de Wilson n'est pas utilisable dans les cas suivants :</p>
	<ul>
		<li>Fabrication à la commande.</li>
		<li>Cycle de vie court.</li>
		<li>Lot technologique.</li>
	</ul>

</div>

<h3>Faut-il réduire la taille de lot ?</h3>

<p>Pour répondre à cette question, il faut analyser la formule de Wilson.</p>
<p>Sur quelle variable devrait-on jouer pour diminuer la quantité économique ?</p>

<p>On ne peut pas influencer la demande "D" dépendante du marché.</p>
<p>Le taux de possession "t" est lui également tributaire du marché et de sa propre production.</p>
<p>Si on essaye d'avoir un coût unitaire "u" le plus bas possible, cela passe forcément par une augmentation de la quantité économique !</p>
<p>Il reste la coût de passation "c" qui devrait être le plus bas possible puisqu'il ferait diminuer la quantité économique.</p>

<h3>Ristourne et lot économique</h3>

<p>Le calcul de la quantité économique suppose qu'il n'y a pas de remise par quantité.</p>
<p>Dans notre exemple précédent, que se passerait-il si une ristourne était accordée à partir d'une certaine taille de lot ?</p>

<p>Il faut donc commencer par vérifier si la quantité économique correspondant au coût unitaire minimum est supérieure au seuil donnant droit à la réduction.</p>
<p>Si tel n'est pas le cas, il faut comparer les coûts totaux annuels, c'est à dire les coûts de possession, plus les coûts de préparation, plus les coûts unitaires multipliés par le besoin annuel.</p>


<p>Pour comprendre, prenons l'exemple d'un fournisseur d'une entreprise qui consent à faire une ristourne sur les composants et matières des sous-ensembles, à condition que les achats se fassent par lots de 120 au minimum.</p>

<p>On aurait donc les conditions suivantes :</p>

<p>Pour Q < 120 : u = 600 €</p>

<p>Pour Q > 120 : u = 550 €</p>


<p>Les coûts à considérer sont :</p>
<ul>
	<li>Coût d'acquisition.</li>
	<li>Coût de passation de commande.</li>
	<li>Coût de possession.</li>
</ul>

<p>La démarche se fait en cinq étapes.</p>

<ol>
	<li>Calculer le lot économique en utilisant « u mini » ! Si la quantité est supérieure au seuil donnant droit à la réduction, le lot économique est validé et engendrera le coût minimum pour cet article.</li>
	<li>Si le lot économique calculé en (1) n'est pas validé, déterminer le coût total annuel pour chaque seuil correspondant à un changement de tarif.</li>
	<li>Calculer le lot économique correspondant à chaque coût unitaire.</li>
	<li>Calculer le coût total annuel pour chaque série économique déterminée en (3).</li>
	<li>La série économique est celle correspondant au plus bas coût trouvé soit en (2), soit en (4).</li>
</ol>

<h4>Calcul de la quantité économique</h4>

<p>Sachant qu'on considère que le taux de possession est de t=25%.</p>

<div class="formule">
Q = <span class="radical">&radic;</span>
	<div class="fraction radicand">
    <span class="numerateur">2 * 1200 * 625&nbsp;</span>
		<span class="bar">/</span>
		<span class="denominateur">550 * 0.25</span>
	</div>
	= 104
</div>

<p>Q est donc inférieur à la quantité 120 initialement prévue. On passe donc à l'étape 2.</p>

<h4>Coût total annuel pour Q = 120</h4>

<p>CTA (120) = (550 x 1 200) + (1 200 / 120 x 625) + (120 / 2 x 550 x 0,25) = 674 500 €</p>

<h4>Calcul du lot économique pour chaque coût unitaire</h4>

    <p>Nous avons déjà calculé le lot économique à l'étape 1 pour u = 550 €... il est de 104 unités.</p>
<p>Pour u = 600 €</p>
<div class="formule">
	Q = <span class="radical">&radic;</span>
	<div class="fraction radicand">
		<span class="numerateur">2 * 1200 * 625&nbsp;</span>
		<span class="bar">/</span>
		<span class="denominateur">600 * 0.25</span>
	</div>
	= 100
</div>


<h4>Coût total annuel pour Q = 100 </h4>

<p>CTA (100) = (600 x 1 200) + (1 200 / 100 x 625) + (100 / 2 x 600 x 0,25) = 735 000 €</p>

<h4>Choisir le lot économique pour lequel le coût annuel total est le plus bas</h4>

<p>Dans notre exemple, le lot économique sera donc Qec = 120 unités </p>


<h3>Remise sur quantité</h3>

<p>Le modèle de Wilson a des limites, notamment en ce qui concerne les tarifs dégressifs.</p>

<p>Il est courant de voir appliquer des rabais en fonction de la quantité commandée. Ce qui peut impliquer ou non un changement au niveau de la quantité optimale à commander.</p>

<p>En effet, la dégressivité peut être uniforme (elle s'applique dans ce cas à l'ensemble de la commande comme dans notre exemple précédent) ou alors on peut bénéficier d'une remise incrémentale (selon des tranches).</p>

<p>Prenons un exemple pour illustrer ce principe.</p>


<img src="/assets/img/qlio/gstock/graphique_remise_quantite.png" alt="graphique des remises sur quantité" />

<p>&nbsp;</p>


