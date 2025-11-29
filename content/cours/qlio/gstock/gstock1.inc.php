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
 * @uses 
 */
?>
<h1>Le dilemme stocks / délai</h1>
<h2>Un stock, c'est QUOI ?</h2>

<p>Un stock est une provision de <span class=tag--info>produits</span> en instance de <span class=tag--info>consommation</span>.</p>

<h3>Produit.</h3>

<ul>
  <li>Les matières premières</li>
  <li>Les produits semi-finis</li>
  <li>Les produits finis</li>
  <li>Les déchets</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/gstock/place_libre_avion.png" alt="Image de places libres dans un avion" />
<p>Comprendre la notion de coût de stock : Les places libres dans un avion sont un stock ! Donc ça à un coût !</p>

<h3>Consommation.</h3>
<p>Pour un gestionnaire de stock, un produit est consommé dès qu'il est sorti du stock.</p>

<p>Dans le cadre d'une <span class=tag--info>Supply Chain</span> (chaîne logistique), on va parler de <span class=tag--info>flux physique</span>.</p>
<img class="aligncenter" src="/assets/img/qlio/gstock/flux_entrant_sortant.png" alt="Image expliquant ce qu'est le flux entrant et sortant" />

<p>L'image ci-dessus illustre bien la notion de flux et le parallèle avec la notion de stock.</p>
<p>On comprend ainsi aisément que la différence de débit crée du stock.</p>

<p>Dans une entreprise, la désynchronisation de flux internes entraine soit des arrêts de poste ou des files d'attente croissantes en amont de certains postes.</p>



<h2>Loi de Little</h2>

<p>Pour l'historique, cette loi fut trouvée par John Little dans les années 60. Son principe est simple :</p>
<p>Le nombre de clients dans une file d'attente (l) est égale au taux d'arrivée moyen des clients (λ) multiplié par le temps de traitement (ω).</p>
<p class="formule">l = λω</p>

<p>La loi de Little (1961), issue de la théorie des files d'attente, établit un lien entre l'en-cours de production, le temps de traversée de la production (ou lead time) et le débit de production (ou throughput).</p>

<div class="notice exemple">
<p>Exemple 1 : caisse de supermarché</p>
<p>Si j'ai 3 clients par minutes qui arrivent à la caisse et que le traitement d'un client prends 2 minutes, le temps d'attente moyen d'un client est de 6 minutes.</p>
</div>
<div class="notice exemple">
<p>Exemple 2 : Le délai entre l'entrée des matières en stock et la livraison des produits finis aux clients est de trois mois.</p>
<p>Si l'entreprise vend en moyenne 1000 produits finis par mois, il y a approximativement 3000 produits (en pièce détachés et semi-finis ) dans l'usine.</p>
</div>

<p class="formule">WIP = LT x T</p>

<p>Avec :</p>
<ul>
  <li>WIP = work in progress = en-cours (en nombre de pièces).</li>
  <li>LT = lead time (en unité de temps).</li>
  <li>T = throughput =  débit (nombre de pièces par unité de temps) limité par le poste ayant le temps de cycle le plus important (goulot).</li>
</ul>

<p>Le débit peut être vu soit comme la capacité à produire soit comme la consommation du client.</p>

<p>Cette formule est souvent considérée sous la forme suivante :</p>
<p class="formule">LT = WIP / T</p>


<h2>Un stock, ça sert à QUOI ?</h2>

<h3>Les fonctions des stocks</h3>

<p>On peut résumer les fonctions des stocks en quatre points :</p>
<ol>
  <li>Fonction de service</li>
  <li>Fonction de régulation</li>
  <li>Fonction de circulation ou de découplage</li>
  <li>Fonction technologique</li>
</ol>

<h4>Fonction de service</h4>

<p>Les fonctions de service (ou fonctions commerciales si on est dans le cas d'un stock de produits finis) assurent une livraison immédiate au flux de demandes face à des dates de besoin non prévisibles.</p>

<h4>Fonction de régulation</h4>

<p>Cela concerne essentiellement les produits saisonniers.</p>

<h4>Fonction de circulation ou de découplage</h4>

<div class="notice exemple">Exemple : Fabrication de 150 portières par heure avec 30 véhicule/h pour le montage ; 
<p>La fabrication des portières se fait au rythme suivant :</p>
<ul>
  <li>10h pour Avant Gauche,</li>
  <li>2h30 pour changement outillage,</li>
  <li>puis 10h AV Droite, </li>
  <li>2h30 pour changement outillage,</li>
  <li>10h AR Gauche,</li>
  <li>2h30 pour changement outillage,</li>
  <li>10h AR Droite,</li>
  <li>2h30 arrêt</li>
</ul>
<p>Au total la fabrication se fait en 50h et on aura fait les 1500 mais un stock se constitue entre la presse et les lignes de montage avec un stock max de 1200 puisque 300 sont consommés par heure !</p>
</div>

<h4>Fonction technologique</h4>

<p>Cela concerne par exemple des pièces en cours de séchage dans un four, ou en transport.</p>

<p>On pourrait rajouter une cinquième fonction. Elle concernerait les stocks de spéculation !</p>

<h3>Zéro stock ?</h3>

<p>La philosophie du stock zéro est l'essence même du <span class=tag--info>Juste-à-temps</span> initié par Toyota dans les années 70.</p>
<p>à l'époque cela était en totale rupture avec la démarche de gestion de stock.</p>
<p>Dans notre exemple avec les portières, cette approche viserait à réduire le délai de changement d'outil pour réduire le stock.</p>


<h2>Un stock, c'est OÙ ?</h2>

<p>Tout au long de la supply chain nous rencontrons des stocks qui sont de différentes natures.</p>
<img class="aligncenter" src="/assets/img/qlio/gstock/stock_situation.png" alt="Image situant où se trouvent les stock dans une supply chain" />

<p>On peut également citer les stocks concernant les fournitures de maintenance, les pièces de rechanges, les consommables, etc.</p>

<p>Quelques définitions :</p>
<dl>
  <dt class="label"><a name="" id=""></a>Stock de consignation</dt>
    <dd>Le stock se trouve chez le client mais appartient au fournisseur.</dd>
  <dt class="label"><a name="" id=""></a>GPA (Gestion partagée des approvisionnements)</dt>
    <dd>Ce type de gestion de stock permet une visibilité sur les prévisions, les promotions ou encore la consommation.</dd>
</dl>


<h2>Gérer un stock, c'est QUOI ?</h2>

<p>Pour gérer un stock on considère les problématiques suivantes :</p>
<ol>
  <li>La demande</li>
  <li>L'approvisionnement</li>
  <li>En-cours, stock physique et stock disponible</li>
</ol>


<h3>La demande</h3>
<p>La demande client est une donnée exogène c'est-à-dire non contrôlable, extérieure à la production.</p>
<p>C'est le service marketing qui est en charge des moyens d'action la concernant.</p>

<p>Une demande peut être stationnaire (constante) ou non stationnaire (évolutive) avec un caractère aléatoire qui la rend difficilement prévisible.</p>
<p>Il existe des méthodes de prévision de la demande qualitative (intuition d'expert) et quantitative (extrapolation statistique d'historique et régression statistique si on intègre plusieurs autres variables explicatives).</p>


<h3>Approvisionnement</h3>
<p>L'approvisionnement répond à la question du délai d'obtention de la commande suite à un ordre de réapprovisionnement</p>
<p>Ce délai est soit constant, soit modélisable par une loi de probabilité (Loi de Poisson).</p>

<p>On entend par délai, les délais de transmission de l'information, de production, de transport, de réception et contrôle, etc.</p>

<h3>En-cours</h3>
<p>Les en-cours concernent tout ce qui subit une transformation ou est en attente ou en transfert entre deux opérations par opposition à ce qui est en stock (article rangé en magasin qui ne subit pas de transformation).</p>
<p>Le stock disponible = stock physique + quantité commandé mais pas encore réceptionné – demandes non encore satisfaites.</p>


<p>Pour réponde à la question, gérer un stock, c'est faire en sorte qu'il soit constamment apte à répondre aux demandes des clients, des utilisateurs des articles stockés.</p>

<div class="notice remarque">
Différence entre utilisateur et client = celui pour qui ont fait le produit.
</div>


<div class="notice info">Il n'est pas rare que le montant annuel des achats atteigne 50 % du C.A. 
Suivant les branches d'activités, il peut même atteindre 75 %.
</div>
<div class="notice remarque">
Question :
<p>Si l'on considère une entreprise où le pourcentage du montant annuel des achats par rapport au CA est de 50 %, 
combien représente une diminution des commandes de 2% seulement liée à une saine gestion des stocks ?</p>
</div>
<div class="ok">
Réponse : 
<p>Une économie égale à 1 % du C.A.. (2/100 = 1/50  ;-)</p>
<p>Elle est du même ordre de grandeur que les bénéfices distribués qu'elle permettrait de doubler.</p>
</div>

<p>Le stock représente dans un bilan d'une entreprise de 20 à 80 % du total des actifs.</p>
<p>Quant aux  sommes investies dans les stocks, elles sont souvent d'environ 20 % du C.A. et atteignent parfois 100 %.</p>

<div class="notice remarque">
Question :
<p>Si dans une entreprise, le pourcentage des sommes investies par rapport au CA est de 30 %, combien représente une diminution du niveau des stocks liée également à une saine gestion des stocks.</p>
</div>
<div class="ok">
Réponse : 
<p>Cela libère une trésorerie égale à 10 % du chiffre d'affaires et entraîne une diminution des charges financières égale à 1 %  du C.A., l'économie ainsi réalisée est là encore égale au volume des bénéfices distribuées.</p>

<p>Le stock engendre un important besoin de financement ainsi que des coûts de gestion.</p>
</div>

<p>Les fonctions de la gestion de stock sont :</p>
<ul>
<li>Définir les références des articles à tenir en stock</li>
<li>En définir les quantités en tenant compte de différents paramètres comme la prévision des ventes…</li>
<li>Valoriser le stock</li>
<li>Mettre la liste des articles disponibles à la disposition du service commercial et achats et éventuellement le service fabrication s'il s'agit d'une unité de production</li>
<li>Tenir l'inventaire comptable</li>
<li>Prévoir le réapprovisionnement : dates, quantités…</li>
<li>Les mémoriser</li>
<li>Gérer les réservations (statut d'un article encore présent dans le magasin mais déjà affecté à un ordre de fabrication ou à une commande)</li>
<li>Générer les tableaux de bord correspondants : rotation de stock des articles (le nombre de fois que le stock est renouvelé par an (ou sur une autre période) ou taux de couverture…)</li>
</ul>

<p>La gestion des stocks est socle de la gestion industrielle !</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/socle_gestion_stock.png" alt="Illustration maison de la qualité adaptée à la gestion de stock" />

<p>Qui est concerné ?</p>
<ul>
  <li>Gestionnaire d'approvisionnement et d'ordonnancement</li>
  <li>Planificateur de production</li>
  <li>Responsable Supply Chain</li>
</ul>


<h2>Point de découplage</h2>

<p>Si l'on schématise la supply chain du fournisseur au client avec les différents stocks, le délai promis au client va de l'achat de la matière première jusqu'à la livraison du produit fini au client.</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/delai_promis_client.png" alt="Illustration du délai promis au client" />

<p>Le point de découplage est le moment qui sépare ce qui est de l'ordre du prévisionnel et ce qui est de l'ordre de la commande.</p>
<p>Ce point de découplage dépend du type de « fabrication ».</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/point_decouplage.png" alt="Illustration du point de découplage" />

<p>Point de découplage en fonction du type de « fabrication ».</p>


<img class="aligncenter" src="/assets/img/qlio/gstock/delai_reponse_marche.png" alt="Illustration du délai de réponse au marché" />

<h2>Différents types de stocks</h2>

<p>Les différents types de stock que l'on peutrencontrer dans le milieu industriel sont :</p>

<ul>
  <li>Stock de «découplage»</li>
  <li>Stock «taille de lot»</li>
  <li>Stock de «transfert»</li>
  <li>Stock de saisonnalité</li>
  <li>Stock de sécurité</li>
  <li>Stock de spéculation</li>
</ul>

<p>Tous les articles, entreposés dans un magasin ou un atelier, qui servent à rendre indépendantes les opérations successives dans le processus de fabrication (ou dans la distribution) sont considérés comme stock.</p>

<p>On peut les classer en deux familles :</p>

<ul>
  <li>Stock de transfert</li>
  <li>Stock d'organisation</li>
</ul>

<p>Dans un stock de transfert (en cours), un article peut être en attente, mais le circuit qu'il doit suivre et sa destination sont connus.</p>
<p>Dans un stock d'organisation, un article ne peut sortir sans un ordre de sortie (bon de sortie, OF,...).</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/famille_stock.png" alt="Illustration des deux familles de stock" />

<h2>Pilotage de la production</h2>

<p>Le stock intervient également dans le pilotage d'une production.</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/pilotage_production.png" alt="Illustration du stock dans le pilotage d'une production" />

<p>Pour produire à un rythme différent de celui avec lequel on doit livrer les clients, vous avez besoin d'un <span class=tag--info>stock de couverture</span>.</p>

<p>Pour réagir aux variations de la demande des clients à court terme, aux « urgences » et pannes, à la non qualité, etc, vous avez besoin d'un <span class=tag--info>stock de sécurité</span>.</p>


<p>Ces stocks peuvent se calculer.</p>
<p>Il faut cependant distinguer deux types de stock au niveau de la production.</p>

<ul>
  <li>Stock de fabrication</li>
  <li>Stock de distribution</li>
</ul>

<p>Ils sont à la base tributaires de la demande client.</p>
<img class="aligncenter" src="/assets/img/qlio/gstock/types_demande.png" alt="Illustration des deux types de demande" />

<p>Les <span class=tag--info>besoins indépendants</span>, extérieurs à l'entreprise, comme les pièces terminées et les pièces de rechange, sont soumis au choix du consommateur : la prévision est la méthode de planification de ces besoins.</p>
<p>Les <span class=tag--info>besoins dépendants</span> sont tous les besoins rentrant dans la chaine de fabrication : ils peuvent être et même doivent être calculés.</p>


<h3>Stock de fabrication</h3>

<ul>
  <li>Demande dépendante des besoins du niveau supérieur de la nomenclature.</li>
  <li>Demande déterministe.</li>
  <li>Détermination des réapprovisionnements par calcul des besoins nets (principe d'Orlicky).</li>
</ul>

<div class="notice info">
<p>Joseph Orlicky est un ingénieur américain, qui a conçu dans les années 1960, le <strong>MRP</strong> (Material Requirements Planning - Management des Ressources de Production en français) et qui s'est intéressé aux méthodes de planification des besoins.</p>
<p>Il a déterminé les deux types de besoin ("principe d'Orlicky").</p>
</div>

<div class="notice info">
Un système déterministe est un système qui réagit toujours de la même façon à un événement, c'est-à-dire que, quoi qu'il se soit passé auparavant, à partir du moment où le système arrive dans un état donné, son évolution sera toujours identique
</div>

<h3>Stock de distribution</h3>

<ul>
  <li>Indépendance des demandes de chacun des articles.</li>
  <li>Demande aléatoire.</li>
  <li>Détermination des réapprovisionnements par règles de gestion.</li>
</ul>

<h3>Stock disponible</h3>

<p>Quelques définitions...</p>
<dl>
<dt>Le stock physique</dt>
<dd>C'est le stock réellement présent dans un magasin.</dd>
<dt>Les réceptions prévues</dt>
<dd>Ce sont les articles devant intégrés le stock magasin à une date future.</dd>
<dd>Ces articles ne sont pas encore présents physiquement dans les magasins, mais cependant comptabilisés dans le fichier stock de la GPAO.</dd>
<dt>Les réservations</dt>
<dd>Ce sont des articles devant être pris du stock magasin pour réaliser un ordre de fabrication à une date future.</dd>
<dd>Ces articles sont présents physiquement ou non dans les magasins et comptabilisés dans le fichier stock de la GPAO.</dd>
</dl>

<img class="aligncenter" src="/assets/img/qlio/gstock/stock_disponible.png" alt="Illustration du stock disponible" />
<p>Le stock disponible est égale au stock physique augmenté des réceptions prévues et diminué des réservations.</p>
<p class="formule">Stock disponible = stock physique + réceptions prévues - réservations</p>

<p>Le stock disponible se calcule à une date donnée.</p>


<table class="table table--zebra tbody tr:nth-child w700p">
<tbody class="">
<tr>
    <th class="w200p">Jour</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>
  <tr>
    <th>Stock physique</th>
    <td>50</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Réception prévue</th>
    <td></td>
    <td>120</td>
    <td>30</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Réservation</th>
    <td></td>
    <td>40</td>
    <td></td>
    <td>250</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>Stock disponible</th>
    <td>50</td>
    <td>130</td>
    <td>160</td>
    <td>-90</td>
    <td>-90</td>
    <td>-90</td>
  </tr>
</tbody>
</table>

<h2>Niveaux de stock</h2>

<img class="aligncenter" src="/assets/img/qlio/gstock/stock_actif_protection_moyen.png" alt="Illustration du stock actif, de protection et moyen" />

<dl>
  <dt>LE STOCK ACTIF</dt>
  <dd>C'est celui qui évolue constamment par le jeu des sorties de magasin et des réapprovisionnements.</dd>
  <dt>LE STOCK PROTECTION</dt>
  <dd>C'est celui dont la raison d'être est de parer à toute interruption de stock.</dd>
  <dt>LE STOCK MOYEN</dt>
  <dd>Le stock moyen représente le stock permanent donc l'investissement qui doit retenir l'attention de la direction.</dd>
  <dd>Stock moyen = moitié du stock actif + stock de protection</dd>
</dl>

<p>Les stocks masquent les problèmes</p>
<ul>
  <li>Les stocks sont importants.</li>
  <li>Ils camouflent les problèmes.</li>
  <li>Pour mettre en évidence les dysfonctionnements, il faut diminuer le niveau des stocks.</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/gstock/niveau_stock.png" alt="Illustration du niveau de stock" />

<p>Si l'on abaisse le niveau de stock, cela :</p>
<ul>
  <li>Accroît la visibilité.</li>
  <li>Impose une réaction immédiate.</li>
  <li>Oblige à communiquer.</li>
  <li>Rend solidaire.</li>
  <li>Incite à progresser.</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/gstock/baisse_niveau_stock.png" alt="Illustration de la baisse du niveau de stock" />

<h2>Objectifs contradictoires</h2>

<p>Selon le service de l'entreprise dans lequel on se situe, les objectifs concernant les stocks sont contradictoires …</p>

<p>Marketing</p>
<ul>
  <li>Chiffre d'affaires maximum</li>
  <li>Très grande disponibilité des produits</li>
</ul>

<p>Finances</p>
<ul>
  <li>Coûts d'investissement faibles</li>
  <li>Coûts fixes faibles</li>
  <li>Immobilisation stocks faibles</li>
</ul>

<p>Production</p>
<ul>
  <li>Faible coût de production</li>
  <li>Production stabilisée</li>
  <li>Séries longues (lots importants)</li>
</ul>

<section class="grid-2-small-1 has-gutter">
  <div class="col-2 ">En terme financier et de délai</div>
  <div class="bg-bleu"><span class="badge"> 1&nbsp;</span> Stock important</div>
  <div class="bg-vert"><span class="badge"> 2&nbsp;</span> Stock faible</div>
  <div class="ok"><span class="badge"> 1&nbsp;</span><p>Satisfaction maximale du client</p><p>Pas de rupture</p></div>
  <div class="alert"><span class="badge"> 2&nbsp;</span><p>Risque de rupture</p><p>Insatisfaction du client</p></div>
  <div class="alert"><span class="badge"> 1&nbsp;</span> Coûts de stockage et de gestion élevés</div>
  <div class="ok"><span class="badge"> 2&nbsp;</span> Coûts de stockage et de gestion faibles</div>
</section>

<p class="clear">&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


