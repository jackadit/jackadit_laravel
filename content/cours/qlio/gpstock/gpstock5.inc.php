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
$sNavigation=navigation('gpstock', '5');
?>





<h1>Organisation et agencement des stocks physiques (1h)</h1>

<h2> Les différentes zones de stockage</h2>

<p>Une zone de stockage ne se limite pas à un empilage de rayonnages mais il faut dissocier différentes zones, aussi bien pour un flux entrant que pour un flux sortant.</p>


<table class="table">
  <tr>
    <td rowspan="2" colspan="3">Stock produits finis</td>
    <td rowspan="2">Zone de consolidation</td>
    <td colspan="2">Zone de conditionnement</td>
    <td rowspan="2">Zone d'attente départ</td>
    <td rowspan="4">Quai routier</td>
  </tr>
  <tr>
    <td colspan="2">Zone de contrôle départ</td>
  </tr>
  <tr>
    <td rowspan="2">Zone de préparation</td>
    <td rowspan="2">Stock de détail</td>
    <td colspan="3">Stock de masse</td>
    <td colspan="2">Zone de contrôle des arrivées</td>
  </tr>
  <tr>
    <td colspan="3">Matière première arrivée</td>
    <td colspan="2">Zone de quarantaine</td>
  </tr>
</table>

<h3>Le flux entrant</h3>

<p><span class="tag--info">Le quai de déchargement</span>: sur lequel arrivent les palettes et / ou produits par route ou voie ferrée</p>

<p><span class="tag--info">La zone de contrôle arrivée</span>: traitement des différents contrôles à l'arrivée: contrôle administratif des documents ou aussi contrôle par échantillonnage des produits</p>

<p><span class="tag--info">La zone de quarantaine</span>: souvent repérée en rouge, pour isoler les lots en attente de décision après un contrôle qui n'a pas donné satisfaction.</p>

<p>Les lots sont isolés de façon à ce qu'ils ne soient pas mélangés au flux normal de production.</p>

<p><span class="tag--info">Le stock de réserve ou de masse</span>: souvent un stock de palettes, qui sont empilées sur de grandes hauteurs dans des palettiers. Il s'agit d'un stockage volumineux, qui va être stocké un certain temps avant expédition.</p>
<img src="/assets/img/qlio/gpstock/stockage_masse.png" alt="Stock de masse" />

<p><span class="tag--info">Le stock de détail</span>: il rassemble dans un périmètre réduit l'ensemble des produits nécessaires à la préparation des commandes (mis en place parfois car il n'est pas très pratique de préparer des commandes à partir du stock de masse).</p>
<p>Le stock de détail est alimenté par le stock de masse. C'est un stockage temporaire.</p>


<p><span class="tag--info">La zone de préparation</span> (ou <span class="tag--info">zone de prélèvement</span> ou <span class="tag--info">picking</span>)</p>

<h4>Le stock de réserve et la zone de prélèvement: les différentes possibilités</h4>

<p>La réserve et ses emplacements vont dépendre de la quantité d‘articles en stock, de la rotation, de la façon dont est organisé le picking...</p>

<p><strong>- Réserve et zone de prélèvement au même endroit</strong> : il s‘agit d‘articles de catégorie C (faible rotation) et tout le stock se trouve dans le même emplacement </p>

<p><strong>- Réserve et zone de prélèvement séparées</strong> : Stockage en allée étroite dans des entrepôts de grande hauteur, stockage dans des allées et préparation dans l‘allée opposée.</p>
<p>Ou bien allées de stockage et préparation au sol sur l‘autre face</p>

<p class="ok">Avantage: Permet de préparer les commandes dans une petite zone</p>

<p><strong>- Réserve et zone de stockage dans le même rack ou la même allée</strong> : Il faut que les opérations de stockage et de déstockage puissent se faire sans perturber, ni gêner la préparation des commandes.</p>

<p>On trouve classiquement dans des entrepôts des picking au sol et des réserves positionnées juste au dessus ou dans les alvéoles de la même allée. Dans ce cas, on doit avoir des allées assez larges pour qu‘il puisse y avoir des croisements.</p>


<h4>Différentes possibilités de ranger une référence dans une zone de stockage</h4>


<p><strong>- Regrouper les références similaires fonctionnellement</strong> (ex.: celles utilisées pour telle ligne de montage…)</p>

<p class="ok">Avantage: le personnel se familiarise avec les zones de stockage</p>

<p><strong>- Regrouper les références avec taux de rotation élevé</strong>: si ces références sont placées près de la réception et de l'expédition, le temps de les déplacer et de les entrer / sortir du stock, est réduit. Les références avec taux de rotation faible peuvent être placées plus loin de ces zones de réception / emballage.</p>

<p><strong>- Regrouper les articles similaires</strong>: des articles similaires ont souvent besoin du même mode de stockage ou moyen de manutention. Des articles stockés dans de petits bacs vont être stockés sur des étagères et transportés sur un petit chariot. Des denrées congelées nécessitent une zone de stockage avec congélateur.</p>


<h4>Stockage central ou stockage au point d'utilisation ?</h4>

<p>Dans certaines situations, on stocke le matériel près du lieu de consommation.</p>

<div class="ok">Les avantages :
<ul>
  <li>Le matériel est accessible facilement par les utilisateurs et à n'importe quel moment (heures ouverture magasin de stockage central)</li>
  <li>La manutention est réduite voire éliminée</li>
  <li>Les coûts de stockage central sont réduits</li>
</ul>
</div>
<p>Cette méthode est appropriée si le stock est faible et si les opérateurs sont capables de contrôler les entrées / sorties de stock. Parfois, les articles de type C sont gérés en « stock atelier » (on en sort une grande quantité – physiquement et informatiquement).</p>


<p>Les avantages du stockage central :</p>
<ul>
  <li>Facilité de contrôle</li>
  <li>Maintenance plus facile de la justesse des stocks</li>
  <li>On peut utiliser des modes de stockage spécialisés</li>
  <li>Stock de sécurité réduit</li>
</ul>

<h3>Le flux sortant</h3>

<p><strong>Le stock de produits finis</strong></p>
<p><strong>Zone de consolidation</strong> : pour rassembler l'ensemble des éléments présents sur une commande client</p>
<p><strong>Zone de conditionnement</strong> : pour conditionner la commande et imprimer l'ensemble des éléments nécessaires au traitement administratif de la livraison</p>
<p><strong>Zone de contrôle départ</strong> : pour un dernier contrôle qualité et / ou un comptage des produits avant emballage</p>
<p><strong>Zone d'attente départ</strong> 0h05: les caisses ou palettes sont organisées dans cette zone en fonction des destinations pour optimiser le temps de chargement des camions.</p>

<h3>Le stock déporté (ou stock avancé)</h3>

<p>On l'appelle le plus souvent VMI (Vendor Managed Inventory) : les stocks se trouvent physiquement dans le périmètre du client mais appartiennent au fournisseur tant que le client ne s'est pas servi dans ce stock. C'est le fournisseur qui doit s'occuper de la gestion et est en charge de la charge financière qui correspond à ce stock.</p>

<p>Dans ce cas, le fournisseur et le client doivent s'engager dans un partenariat, avec la possibilité pour le fournisseur de trouver une contrepartie équitable à la charge financière qu'il supporte.</p>

<h2>La terminologie du stockage</h2>

<p>Le problème du stockage est un problème de gain de place.</p>
<p>Les surfaces au sol sont le plus souvent limitées et le stockage en hauteur permet d'occuper au maximum la place disponible : c'est pour cette raison que les stockages en hauteur se sont beaucoup développés ces dernières années.</p>
<p>La solution la plus répandue pour stocker des produits en hauteur consiste à utiliser des rayonnages de stockage métalliques, dont les plus courants sont les palettiers.</p>

<h3>Le palettier ou rack</h3>

<p><span class="tag--info">Palettier ou rack</span> = rayonnage métallique constitué d'échelles et de lisses agrafables sur les poteaux, destiné au stockage des produits généralement conditionnés sur des palettes.</p>

<p><span class="tag--info">Rack conventionnel ou à simple profondeur</span> = palettier comprenant une seule rangée de stockage en profondeur de façon à ce que toutes les marchandises soient immédiatement accessibles.</p>

<p>Il faut néanmoins plus d'allées pour ce type de stockage et donc la capacité de stockage est moindre.</p>

<p><span class="tag--info">Rack à double profondeur</span> = palettier comprenant deux rangées de stockage en profondeur.</p>
<p>Cette configuration de stockage implique le déplacement de la charge située à l'avant de la travée pour atteindre celle située dans la seconde rangée ou permet de stocker, dans cette seconde rangée, les palettes destinées au réapprovisionnement de la zone picking située sur la première rangée.</p>

<p><span class="tag--info">Échelle</span> = structure métallique constituant le palettier. Le terme échelles est souvent employé pour désigner tout simplement les montants verticaux du palettier, qui délimitent les travées.</p>

<p><span class="tag--info">Lisse</span> = élément horizontal du palettier, accroché sur les échelles et destiné à supporter les charges entreposées généralement sous la forme de palettes.</p>

<p><span class="tag--info">Alvéole</span> = espace d'un palettier (ou rack) délimité horizontalement par deux échelles consécutives et verticalement par deux paires de lisses consécutives ou le sol et la première paire de lisses</p>

<p><span class="tag--info">Travée</span> = ensemble des alvéoles superposées comprises entre deux échelles consécutives</p>

<p><span class="tag--info">Rangée</span> = ensemble de travées consécutives le long d'une allée de service</p>


<div class="ok">Avantages
<ul>
    <li>Le poids des charges admissibles peut être élevé (parfois plus de 4000 kg).</li>
    <li>La structure est évolutive (ajout de niveaux…).</li>
    <li>Les produits sont facilement repérables et accessibles.</li>
    <li>Mode adapté au stock de réserve et stock de réserve + prélèvement sur palette.</li>
    <li>Peut être combiné avec du stockage dynamique.</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
    <li>Instable de par sa conception : il faut l'appuyer contre une paroi ou le « lier » à un autre palettier.</li>
    <li>Coût d'acquisition élevé (env. 23 €H.T. pour un emplacement palette).</li>
    <li>Les allées diminuent le volume de stockage.</li>
</ul>
</div>
<div class="notice remarque">
<p class="h4-like">Les jeux fonctionnels</p>
<p>Ils sont destinés à faciliter les manutentions et non à compenser les fluctuations dimensionnelles des charges stockées.</p>

<p><span class="tag--info">Jeu fonctionnel en largeur</span> : laisser un espace d'au moins 75mm entre deux charges voisines ou entre une charge et un montant.</p>
<p><span class="tag--info">Jeu fonctionnel en hauteur</span> : laisser un espace d'au moins 75mm entre le dessus de la charge et le dessous de la lisse supérieure lorsqu'elle est chargée.</p>
</div>
  

<h3>Les différents types d'allées</h3>

<p><span class="tag--info">Allée de service</span> = allée desservant une seule rangée (allée simple) ou deux rangées (allée double)</p>
<p>La largeur de ce type d'allée est fonction du type de chariot, de ses dimensions.</p>

<p><span class="tag--info">Allée de circulation</span> = allée desservant les allées de service et donc perpendiculaire à celles-ci</p>
<p>Il est préconisé de prévoir une largeur au moins égale à la largeur du chariot ou du chargement, augmentée d'1m ou, en cas de circulation dans les deux sens, la largeur de deux chariots ou de leur chargement, augmentée de 1,40m.</p>
<p>Les allées de circulation des piétons doivent avoir une largeur d'au moins 80cm.</p>

<p><span class="tag--info">Allée de secours</span> = couloir de circulation exceptionnelle aménagé pour l'évacuation d'urgence des piétons perpendiculairement ou parallèlement au rayonnage.</p>

<div class="notice remarque">  
Pour limiter les risques d'accident, il faut organiser une séparation physique des voies de circulation des chariots et des piétons.
Dans la zone de stockage, la circulation des piétons est interdite, celle d'un opérateur (personne habilitée à réaliser les opérations de stockage, déstockage et préparation des commandes) est autorisée.
</div>

<h3>Stockage par accumulation - stockage dynamique</h3>

<p>Les rayonnages à accumulation, aussi nommés systèmes <span class="tag--info">drive in</span> (en impasse) et <span class="tag--info">drive through</span>, qui permettent au chariot d'entrer dans les travées, sont particulièrement adaptés aux entrepôts avec peu de références et des flux importants (exemple : eaux minérales, lessives). les rayonnages par accumulation  permettent de densifier le stockage de palettes. Particulièrement adapté au stockage de lots de palettes identiques, il permet un gain de place pouvant aller jusqu‘à 70%</p>

<h4>Le stockage par accumulation</h4>

<a src="/assets/img/qlio/gpstock/rayonnage_accumulation.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/rayonnage_accumulation.jpg" alt="rayonnage par accumulation" /></a>
<p><span class="tag--info">Stockage par accumulation</span> = autorise le stockage de palettes les unes derrière les autres et sur plusieurs niveaux au moyen d'un chariot élévateur qui pénètre dans le rayonnage</p>
<p>On pose les produits les uns devant les autres, si bien que le dernier produit stocké sera le premier sorti (LIFO) – hormis le cas de pièces que l'on déverse dans un bac. Cette méthode peut présenter de graves inconvénients notamment en cas de risques d'obsolescence de produits.</p>


<div class="notice remarque">
<p>Le stockage par accumulation est adapté aux produits stockés en grande quantité mais dont le nombre de références est limité. Il peut se faire à partir d'une seule allée de circulation ou de deux allées de circulation qui peuvent alors être respectivement réservées au stockage et au déstockage.</p>
<p>Par rapport à un système de rayonnages en hauteur pour palettes classiques, vous bénéficiez d‘une meilleure exploitation de l‘espace. Le recours au stockage par accumulation s‘avère par exemple très rentable pour le secteur des marchandises réfrigérées.</p>
</div>

<h4>Le stockage dynamique</h4>

<p>Le stockage dynamique permet de corriger cela en permettant un stockage FIFO.</p>

<p><span class="tag--info">Rack à accumulation dynamique</span> = palettier composé de plusieurs rangées de stockage accolées (de deux à cinq en général) et dont les travées, légèrement inclinées, sont équipées de systèmes permettant le déplacement des palettes (rails, rouleaux gravitaires…).</p>

<a src="/assets/img/qlio/gpstock/rack_accumulation.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/rack_accumulation.jpg" alt="rack d‘accumulation" width="250px" /></a>
<a src="/assets/img/qlio/gpstock/rack_accumulation_schema.png" class="image-link"><img src="/assets/img/qlio/gpstock/rack_accumulation_schema.png" alt="schéma d‘utilisation d‘un rack d‘accumulation" width="250px" /></a>

<p><span class="tag--info">Stockage dynamique</span> = palettier ou mobilier de stockage dont les étagères, légèrement inclinées, sont munies de rouleaux ou de coussins d'air permettant aux cartons et/ou palettes d'avancer vers le préparateur. Ce système de stockage est utilisé de préférence pour les produits à forte rotation.</p>

<a src="/assets/img/qlio/gpstock/rayonnage_dynamique.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/rayonnage_dynamique.jpg" alt="rayonnage dynamique" width="250px" /></a>
<a src="/assets/img/qlio/gpstock/stockage_dynamique.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/stockage_dynamique.jpg" alt="stockage dynamique" width="500px" /></a>

<h3>Utilisation de l'espace de stockage</h3>

<p>Le matériel n'est pas stocké juste sur le sol mais dans un espace du centre de stockage.</p>

<p class="h4-like">Accessibilité</p>

<p><span class="tag--info">Accessibilité</span> = le fait d'être capable de disposer le matériel voulu en un minimum de manutention.</p>

<p>Par exemple, pour une référence, pour laquelle on n'a pas besoin de déplacer une autre référence, l'accessibilité est de 100%.</p>

<p class="h4-like">Taux d'occupation</p>

<p><span class="tag--info">Taux d'occupation</span> = utilisation de l'espace horizontal et vertical.</p>

<table class="table">
  <tr><td>1</td><td>1</td><td>2</td><td>3</td><td>4</td><td></td><td></td><td></td><td></td><td></td></tr>
  <tr><td>1</td><td>1</td><td>2</td><td>3</td><td>4</td><td></td><td></td><td></td><td></td><td>10</td></tr>
  <tr><td>1</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
</table>

<p>Il y a de la place pour 30 palettes mais seules 21 places sont utilisées pour un taux d'occupation de 21/30 = 70%.</p>

<p>On peut augmenter le taux d'occupation tout en maintenant l'accessibilité.</p>

<p class="h4-like">Exemple</p>

<p>5 références sont stockées sur des palettes dans un petit magasin. Si on autorise jusqu'à 3 piles de palettes en hauteur et qu'il est obligatoire d'avoir 100% d'accessibilité, quel est le nombre d'emplacements de stockage nécessaire ? Quel est le taux d'occupation ?</p>

<table class="table">
  <tr><th>Références</th><th>Nombre de palettes</th><th>Nombre d'emplacements au sol</th></tr>
  <tr><td>A</td><td>4</td><td>2</td></tr>
  <tr><td>B</td><td>6</td><td>2</td></tr>
  <tr><td>C</td><td>14</td><td>5</td></tr>
  <tr><td>D</td><td>8</td><td>3</td></tr>
  <tr><td>E</td><td>5</td><td>2</td></tr>
  <tr class="strong"><td>Total</td><td>37</td><td>14</td></tr>
</table>

<p>14 emplacements au sol d'où 14 x 3 = 42 palettes</p>
<p>Nombre de palettes stockées = 37</p>
<p>Taux d'occupation = 37 / 42 = 88 %</p>

<p class="h4-like"><a title="Exercice 5 - Accessibilité et taux d‘occupation." href="./cours/gpstock/Ex5_Accessibilité_et_taux_occupation.odt">Exercice 5 - Accessibilité et taux d‘occupation (0h05)</a></p>

<h2> Les différents types de stockage</h2>

<p>Il existe différents types de stockages :</p>
<ul>
    <li>Le stockage fixe.</li>
    <li>Le stockage par étagères mobiles.</li>
    <li>Le stockage rotatif.</li>
    <li>Le stockage dynamique.</li>
</ul>

<h3>Le stockage fixe</h3>

<p>Le stockage par étagère est le plus classique, il permet de stocker des éléments sur deux faces. Les allées sont de 80 cm minimum si le préparateur se déplace à pied.</p>
<p>Elles doivent être de 1,20 à 1,40m dans le cas de l'utilisation d'un engin de manutention.</p>

<h3>Le stockage par étagères mobiles</h3>

<div class="ok">Avantages
<ul>
    <li>Il permet un gain de place au sol considérable.</li>
    <li>La capacité de stockage est augmentée de 80 à 90% par rapport à une installation fixe. Une seule allée de consultation est nécessaire, les rayonnages étant fixés sur des chariots qui se déplacent sur des rails fixés au sol ou encastrés.</li>
    <li>Le déplacement des chariots peut être manuel, mécanique ou électrique.</li>
    <li>Ces chariots s‘adaptent aussi bien sur des rayonnages existants que sur une installation à créer. </li>
    <li>La longueur des rayonnages peut atteindre 12 mètres et la charge jusqu'à 8 tonnes. </li>
</ul>
</div>
<p class="notice alert">L'inconvénient est qu'il faut déplacer à chaque fois les étagères pour accéder à un produit.</p>

<div class="notice remarque">Applications
<p>On utilise donc le plus souvent ce type de rangement pour des stockages dont la fréquence d'entrées / sorties est faible (archivage par exemple) et / ou lorsque le coût du mètre carré de stockage est très élevé.</p>
</div>

<h3>Le stockage rotatif</h3>

<p>Ce type de stockage exploite toute la hauteur des locaux (comme un rayonnage vertical) mais la mise à disposition des produits se fait toujours à hauteur d'homme. En outre, il permet de stocker les pièces en optimisant la hauteur sans aucune perte d'espace et procure ainsi une capacité de stockage maximale pour un encombrement au sol minimal.</p>

<ul>
  <li>Stockage rotatif vertical : c'est le plus fréquent</li>
<a src="/assets/img/qlio/gpstock/stockage_rotatif_vertical.png" class="image-link"><img src="/assets/img/qlio/gpstock/stockage_rotatif_vertical.png" alt="stockage rotatif" width=""></a>
  <li>Stockage rotatif horizontal : se réalise sur un carrousel avec des panières en fil pendues à un rail et circulant en boucle.</li>
</ul>
<a src="/assets/img/qlio/gpstock/stockage_rotatif_horizontal.png" class="image-link"><img src="/assets/img/qlio/gpstock/stockage_rotatif_horizontal.png" alt="stockage rotatif" width=""></a>

<div class="ok">Avantages
<ul>
  <li>Suppression des mouvements de l'opérateur puisque les articles sont automatiquement amenés</li>
  <li>Espace de stockage réduit</li>
  <li>Diminution du temps de recherche</li>
</ul>
</div>

<p>Sur certains modèles, le plateau et / ou la référence peuvent être appelés. Le plateau se positionne alors automatiquement à hauteur ergonomique en choisissant généralement le chemin le plus court.</p>

<div class="notice alert">Inconvénient
<p>Un seul préparateur peut se servir - pas d'intérêt si on y stocke des pièces fréquemment consommées et que les préparateurs doivent attendre qu'un collègue ait terminé de préparer.</p>
</div>

<div class="notice remarque">Applications
<p>Ce stockage est particulièrement adapté pour le stockage de petites pièces de consommation peu régulière.</p>
</div>

<h3>Le stockage dynamique</h3>

<p>Les trois systèmes de stockage précédents sont appelés des stockages par accumulation. Dans ce paragraphe, on étudie le stockage dynamique de façon plus détaillée.</p>

<p class="h4-like">Stockage dynamique léger</p>
<p>Dans les systèmes dédiés aux petits conditionnements, cartons ou bacs, le déplacement des conditionnements profite de la force gravitationnelle sur des plans inclinés à rouleaux.</p>

<a src="/assets/img/qlio/gpstock/stockage_dynamique_leger.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/stockage_dynamique_leger.jpg" alt="stockage dynamique leger" height="200px" /></a>

<p class="h4-like">Stockage dynamique lourd</p>

<p>Des systèmes similaires adaptés existent pour les conditionnements lourds, en caisses ou palettes.</p>
<a src="/assets/img/qlio/gpstock/stockage_dynamique_lourd.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/stockage_dynamique_lourd.jpg" alt="stockage dynamique lourd" height="200px" /></a>


<div class="ok">Les avantages du stockage dynamique
<ul>
  <li>Respect du FIFO</li>
  <li>Amélioration et optimisation du travail de préparation des commandes (réduction des déplacements et de la manutention des préparateurs et magasiniers)</li>
  <li>Zone de prélèvement distincte de la zone d'approvisionnement : évite le croisement des flux. Meilleure productivité des préparateurs </li>
  <li>L'accès aux conditionnements est unique, la gestion du stock peut devenir visuelle. On peut se servir du stock comme dans un supermarché.</li>
  <li>La manutention est simplifiée, en nécessitant que des moyens légers</li>
  <li>Ce mode de stockage permet également de faire des inventaires plus aisément.</li>
  <li>Réduction des risques d'accidents par la suppression d'allées et venues</li>
  <li>Stockage en rotation continuelle</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<p>Investissement souvent plus coûteux que les solutions précédentes</p>
</div>
<div class="notice remarque">Applications :
<p>On peut l'utiliser pour stocker des cartons, des bacs et des palettes.</p>
<p>Les produits en réserve peuvent être stockés au-dessus de la zone de préparation.</p>
</div>

<p class="h4-like">Stockage dynamique à plat</p>
<p>Le stockage dynamique à plat ou au sol désigne des magasins utilisant le principe du stockage dynamique, avec ou sans systèmes de plans inclinés à rouleaux.</p>
<p>Le front du magasin représente l'accès « client » aux différentes références gérées de cette manière, les clients viennent prélever selon le principe du supermarché.</p>
<p>L'arrière du magasin correspond à une zone de réapprovisionnement.</p>
<p>Plus une référence est en demande, plus sa part de front est importante.</p>
<p>Les aires réservées aux différentes références se déterminent suivant la classification ABC des consommations.</p>
<p>Il est recommandé de ménager des couloirs de circulation entre les travées afin d'accéder facilement aux différentes références.</p>
<p>La hauteur de stockage peut être bridée par un dispositif physique, servant en même temps de bandeau d'identification.</p>


<p class="h4-like"><a title="Exercice 6 - Le rangement sur étagère" href="./cours/gpstock/Ex6_Le_rangement_sur_etagere.odt">Exercice 6 - Le rangement sur étagère (0h05)</a></p>

<h2> Autres types de stockage</h2>

<h3>Le transstockeur</h3>

<p><span class="tag--info">Transstockeur</span> = engin de manutention circulant sur rail et pouvant desservir des hauteurs allant jusqu'à 45 mètres. </p>


<img src="/assets/img/qlio/gpstock/transstockeur.jpg" alt="transstockeur" />

<a src="/assets/img/qlio/gpstock/transstockeur2.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/transstockeur2.jpg" alt="transstockeur" height="200px" /></a>

<p>Il se déplace dans une allée et peut stocker des objets de part et d'autre de celle-ci : tous les nouveaux appareils sont automatisés et par sécurité, la présence de l'homme dans son champ de manœuvre est interdite.</p>

<p>Ils sont peu répandus en France et très utilisés aux Etats-Unis par de très grandes entreprises.</p>
<p>Ils sont conçus pour travailler uniquement dans les allées d'un palettier, certains modèles permettant cependant de les faire changer d'allée.</p>
<p>Certains transstockeurs sont manuels et d'autres automatiques.</p>

<div class="notice remarque">
Un exemple de fonctionnement d'un transstockeur - les quatre temps d'un cycle :
<ol>
  <li>L'opérateur indique la référence directement sur le PC ou par lecteur code-barres</li>
  <li>L'ensemble se positionne devant le tiroir / plateau destiné à recevoir / distribuer la référence</li>
  <li>Le tiroir est extrait et amené au poste de travail</li>
  <li>Validation de l'entrée / sortie par l'opérateur</li>
</ol>
</div>
  
<p class="notice alert">Inconvénient</strong> : Investissement important</p>

<p>Les transstockeurs sont notamment utilisés dans le cas du stockage en silo.</p>

<p><span class="tag--info">Stockage en silo</span> = mode de stockage de produits dans des réservoirs clos généralement métalliques ou en béton. Par analogie, le stockage en silo peut désigner des infrastructures d'entreposage de très grande hauteur équipées de transstockeurs (céréales…)</p>

<h3>Le cantilever</h3>

<a src="/assets/img/qlio/gpstock/cantilever.png" class="image-link"><img src="/assets/img/qlio/gpstock/cantilever.png" alt="cantilever" /></a>

<p>Pour le stockage des charges longues : longueur supérieure à 3 ou 4 mètres.</p>

<div class="ok">Avantages
<ul>
  <li>Investissement modéré.</li>
  <li>Excellente accessibilité.</li>
</ul>
</div>

<h2> L'identification des articles et des emplacements</h2>

<p>Il s'agit d'une notion essentielle dans le stockage (ex. des codes-barres).</p>

<h3>L'identification des articles</h3>

<p>Il est nécessaire d'identifier correctement les articles de façon à éviter les erreurs de stock, les erreurs de préparation et donc d'augmenter la qualité de livraison au client.</p>

<p>Si un emplacement est dédié à un article, on peut identifier l'emplacement par le code-article également.</p>


<h3>L'identification des emplacements</h3>

<p>Chaque emplacement de stockage doit être identifié par un code qui permette de le retrouver facilement et de communiquer avec le système informatique.</p>
<p>Il faut donc définir un système de codification précis.</p>
<p>Ce système doit ensuite être visualisé par des pancartes en tête d'allées. Des numéros avec leur traduction en codes à barre peuvent être collés sur les lisses à chaque emplacement.</p>
