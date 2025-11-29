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
 * @subpackage gpstock
 * @category gpstock
 * @access protected
 * @uses db
 */
?>
<h1>Gestion physiques des stocks (10mn)</h1>

<h2> Entrepôt ou plate-forme ?</h2>

<p>Quand on parle de gestion physique des stocks, on parle d'entrepôt, de plate-forme et de magasin de stockage. On peut distinguer :</p>
<ul>
<li>Les <span class="tag--info">entrepôts</span> où l'on stocke le matériel</li>
<li>Les <span class="tag--info">plates-formes logistiques</span> où l'on reçoit du matériel que l'on réexpédie immédiatement ou dans un délai très court (quelques heures à 2 jours) à son destinataire. On parle alors de cross-docking (ou hub). L'intérêt de faire passer les articles sur la plate-forme est qu'ils sont éclatés sans délai.</li>
</ul>

<p>La distinction n'est cependant pas toujours évidente car beaucoup utilisent les deux termes. Dans un certain nombre de cas, la situation est mixte : un entrepôt peut stocker une partie des composants nécessaire à la production et en recevoir d'autres en juste–à-temps avec un minimum de stock voire pas de stock du tout.</p>
<h2> Le cross-docking</h2>

<dl>
<dt>Cross Docking (ou Cross Dock)</dt>
<dd>Le cross docking est un mode d‘organisation des flux logistiques qui permet une préparation des commandes pour une expédition immédiate des marchandises dès leur livraison sans qu'elles ne soient stockées dans l'entrepôt.</dd>
</dl>

<img src="/assets/img/qlio/gpstock/cross_docking.png" alt="méthode cross docking" width="450px">

<p>Cette méthode est particulièrement intéressante lorsque le niveau d'activité de l'entrepôt est élevé. Il permet en effet d'optimiser la manutention et l'entreposage des marchandises dans l'entrepôt grâce à de fréquentes livraisons de marchandises.</p>

<p>Les colis sont regroupés par commande sur une plate-forme où ils ne font que transiter. Ils passent donc du transport amont au transport aval dans un délai très court.</p>

<p>Grâce au temps économisé en se passant du stockage, cette méthode de préparation des commandes est donc particulièrement utile pour traiter les commandes à priorité élevée, ce qui peut être le cas de produits tels que les produits frais, la presse quotidienne, les produits évènementiels, etc.</p>

<p>Elle nécessite cependant une organisation pointue avec le respect d'un ordonnancement des tâches de réception, expédition très précis. De même au niveau du système d'informations, il convient de s‘assurer que cette opération est possible à traiter.</p>
<!-- TODO Schéma du document Hohmann à représenter. -->

<h3>Types de cross-docking</h3>

<p>On peut distinguer trois types de cross-docking :</p>
<ul>
  <li>le fournisseur prépare des palettes pour " un client et un élément " ou " un client et plusieurs éléments". Les opérations de tri sont réalisées par le fournisseur.</li>
  <li>le fournisseur prépare des palettes pour " plusieurs " clients. Les opérations de tri sont réalisées par la plate-forme logistique.</li>
  <li>le fournisseur prépare des palettes neutres : l‘identification , le marquage et les opérations de tri sont réalisés par la plate-forme logistique.</li>
</ul>

<h3>Avantages</h3>
<h3>Avantages</h3>

<div class="ok">
<ul>
<li>Réduction des stocks.  Les colis ne font que transiter sur les quais de la plate-forme et passent donc du transport d‘approvisionnement "amont" (quai des arrivées des marchandises) au transport terminal "aval" (quai des départs des marchandises).</li>
<li>Suppression d'un certain nombre d'opérations de manutention.  Aucune opération de "préparation" (au sens traditionnel du mot) ne s‘y déroule : La marchandise est déjà préparée, conditionnée et identifiée en vue d‘une livraison en l‘état au client concerné.</li>
<li>Diminution des coûts (grâce aux deux avantages précédents). Absence de frais intermédiaires de stockage ou d‘entreposage.</li>
<li>Les colis en souffrance (arrivés et non expédiés) correspondent à des erreurs facilement détectables que l‘on peut retraiter sans délai.</li>
<li>Augmentation de la réactivité (les produits ne restent généralement pas plus de 24 heures sur la plate-forme logistique) : pour des produits frais, augmentation de leur durée de vie dans les linéaires grâce au gain de temps.</li>
<li>Optimisation des transport en amont pour un meilleur taux de remplissage.</li>
</ul>
</div>
<h3>Inconvénients</h3>
<ul class="notice alert">
<li>Les approvisionnements doivent être parfaitement maîtrisés pour garantir la synchronisation des flux physiques dans un créneau de temps court.</li>
<li>Nécessite une organisation respectant un ordonnancement précis des tâches de réception, des préparations et des expéditions.</li>
<li>Le système d‘information doit permettre la gestion des allotissements (en particulier l‘ordre alloué), la traçabilité des produits en transit sur la plate-forme, l‘approvisionnement synchrone par rapport aux besoins de débit en aval, l‘organisation des opérations de transit sur la plate-forme.</li>
<li>La plate-forme de transbordement doit être géographiquement positionnée de manière à minimiser le coût global de transport des fournisseurs - à la clientèle. Une approche barycentrique est souvent utilisé comme méthode de prépositionnement.</li>
</ul>

<h2>Les fonctions de la gestion de l'entrepôt</h2>


<p>La gestion de l'entrepôt est au « service » de la gestion des stocks. Elle remplit les fonctions suivantes :</p>
<ul>
<li>Planifier et effectuer les réceptions (déchargement)</li>
<li>Enregistrer les contrôles (contrôle de conformité entre les colis reçus et le bon de livraison avec émission éventuelle de réserve et marquage éventuel des colis et palettes + contrôle livraison – commande et si nécessaire, réclamation auprès du fournisseur ou transporteur)</li>
<li>Identifier les pièces par leur référence (si ce n'est pas déjà fait par le fournisseur)</li>
<li>Affecter les adresses de stockage et vérifier qu'elles sont respectées – manutention jusqu'à ce lieu de stockage</li>
<li>Stockage plus ou moins long</li>
<li>Recevoir les commandes (pour la production, le client final…) : ordonnancement de la préparation, lancement et affectation des missions de préparation, édition des bons de préparation</li>
<li>Organiser les tournées de prélèvement : éclatement éventuel des palettes ou colis pour le picking, transfert de palettes en zone de préparation ou de chargement, picking de colis ou d'articles</li>
<li>Contrôle des commandes, regroupement, emballage</li>
<li>Gérer le conditionnement (pré-colisage ou post-colisage) :
  <ul>
    <li><span class="tag--info">Post-colisage</span> : prendre les dimensions d'un colis une fois que celui-ci aura été constitué (inverse de pré-colisage)</li>
    <li><span class="tag--info">Pré-colisage</span> : calcul théorique de la taille d'un colis avant que celui-ci ne soit constitué.</li>
  </ul>
</li>
<li>Gérer les expéditions</li>
<li>Contrôler l'inventaire</li>
<li>Ordonnancer les tâches des magasiniers</li>
<li>Établir les tableaux de bord</li>
</ul>

<p><a src="/assets/img/qlio/gpstock/fonctions_entrepot.png" class="image-link"><img class="aligncenter" src="/assets/img/qlio/gpstock/fonctions_entrepot.png" alt="Les fonctions de la gestion de l‘entrepôt" /></a></p>


<p>&nbsp;</p>
<p>Tous les entrepôts ne remplissent pas toutes ces fonctions, cela correspond à l'idéal.</p>
<p>Un entrepôt bien géré remplit généralement toutes ces fonctions.</p>

<div class="notice remarque">
  <p><u>Importance de la synchronisation entre les entrées et les sorties</u> :</p>
  <p>La validation des réceptions des produits et leur mise en place juste un peu après peut créer des désynchronisations importantes.</p>
  <p>Par exemple un camion arrive à 8 heures, il est déchargé et contrôlé à 8h40 (les palettes sont affectées à des emplacements de stockage pour certains produits, de picking pour d‘autres). Si la réception est validée, mais que les caristes tardent dans leur mise en place, le préparateur arrive devant un emplacement vide.</p>
</div>

