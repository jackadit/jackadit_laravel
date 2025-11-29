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
<h1>Les inventaires (1h)</h1>

<h2> Définition de l'inventaire</h2>

<p>État détaillé article par article décrivant :</p>
<ul>
<li>le nombre,</li>
<li>l'état (matières premières, en-cours, produits finis)</li>
<li>la valeur des différents stocks de l'entreprise.</li>
</ul>

<div class="notice remarque">
<p>Comptablement parlant, on fait une distinction entre matière première, en-cours et produit fini (un produit fini pour une entreprise donnée peut être une matière première pour une autre).</p>
<p>Les stocks de matières premières, marchandises et approvisionnements sont évalués à leur coût d'acquisition.</p>
<p>Les stocks de produits (en-cours ou finis) doivent, quant à eux, être évalués à leur coût de production.</p>
<p>La notion de coût d'un stock est plus « étendue » que celle d'un prix d'achat : en effet, contrairement au prix d'achat, il comprend tous les coûts d'acquisition, de transformation et également tous autres coûts supportés pour amener les stocks à l'endroit et dans l'état où ils se trouvent.</p>
</div>

<dl>
<dt>matières première</dt>
<dd>Une matière première est un objet qui va entrer dans la production du produit finis.</dd>
<dt>Produits consommables</dt>
<dd>ce sont des produits plus ou moins élaborés consommer au premier usage et qui n'est pas dans le produit finis. Ex : graisse.</dd>
<dt>Emballages</dt>
<dd>Ils relèvent des stocks d'amont ou d'aval. C'est-à-dire que certains emballages sont compris dans le prix du produit. Néanmoins il existe aussi des emballages consigné.</dd>
<dt>En cours de production de biens</dt>
<dd>c'est un produit en cours de production</dd>
<dt>En cours de production de services</dt>
<dd>Ex : plan d'architecte</dd>
<dt>Produit semi-fini</dt>
<dd> c'est un produit qui a atteint un stade d'achèvement destiné à entrer dans une nouvelle phase. Ex : une aile d'avion ne peut pas être vendue en l'état mais s'associe à l'avion fini.</dd>
<dt>Produit fini</dt>
<dd>qui peut être vendu.</dd>
<dt>Produit résiduels</dt>
<dd>déchets, rébus</dd>
<dt>Marchandise</dt>
<dd>produit destiné à être revendu en l'état. </dd>
</dl>


<p>On peut faire des inventaires périodiques (par exemple une fois par an) ou des inventaires tournants qui consistent à contrôler le niveau du stock sur des parties du magasin ou des articles pour éviter la pointe de charge de l'inventaire complet.
</p>

<h2> En quoi consiste l'opération d'inventaire physique ?</h2>

<p>L'opération d'inventaire physique consiste :</p>
<ul>
  <li>À compter les produits physiquement en stock</li>
  <li>À comparer avec les quantités théoriques données par les listes informatiques et sur lequel s'appuient :
  <ul>
    <li>L'administration des ventes de l'entreprise pour répondre aux demandes des clients</li>
    <li>Le gestionnaire de stock et le service approvisionnement pour déclencher le réapprovisionnement.</li>
  </ul>
  </li>
</ul>

<p>Il est essentiel d'avoir des stocks justes sinon les conséquences peuvent être les suivantes :</p>
<ul>
  <li>Pertes de clients.</li>
  <li>Ruptures de stocks.</li>
  <li>Surplus de stock (si erreur d'article dans une transaction).</li>
  <li>Productivité faible (perte de temps à rechercher).</li>
  <li>Livraison à temps au client pas toujours respectée.</li>
</ul>

<p class="notice remarque">Toute entreprise est tenue par la loi de procéder une fois par an à l'inventaire de ses biens. Le stock, propriété de l'entreprise, fait partie de ses biens qui figurent à l'actif du bilan.</p>

<p>En dehors de cet aspect légal, ce contrôle périodique permet de suivre la bonne gestion des stocks, de repérer les anomalies éventuelles et d'entreprendre les actions correctives.</p>

<p>Lors d'un inventaire il y a des écarts dus, soit aux erreurs de prélèvement physique, soit à des erreurs de saisies lors de l'enregistrement des mouvements. Il convient donc dans ces cas de procéder à des corrections appelées <span class="tag--info">ajustement d'inventaire</span> afin que les stocks physiques correspondent le plus exactement possible au stock théorique, afin que :</p>
<ul>
  <li>Les approvisionnements soient déclenchés au moment opportun.</li>
  <li>Les bons de préparation portent sur des produits réellement en stock et disponibles.</li>
</ul>

<p>L'inventaire est une opération longue et fastidieuse. Il se fait de préférence lorsque l'activité de l'entreprise est arrêtée (il paraît en effet bien difficile de « fixer » l'existant de tous les articles à un moment donné si, pendant le comptage, il y a des mouvements d'entrées / sorties).</p>


<h2>Les 4 méthodes d'inventaire</h2>

<p class="h3-like">L'inventaire annuel</p>
<p>C'est une méthode classique, chaque année en fin d'exercice on vérifie ce qui reste en stock pour chacun des articles répertoriés.</p>
<p class="notice alert">Inconvénient : Cette opération implique l'arrêt de tous les mouvements dans le magasin, ce qui conduit généralement à l'arrêt de l'activité de l'entreprise.</p>

<p class="h3-like">L'inventaire permanent</p>
<p>L'inventaire permanent consiste à comptabiliser en permanence les entrées et les sorties, et de connaître ainsi le stock dont on dispose. Tous les stocks sont gérés de cette façon aujourd'hui.</p>
<p class="ok">Avantage : connaissance en temps réel de l'état des stocks.</p>
<p class="notice alert">Inconvénient : cela n'exclut pas les écarts car il s'agit de valeurs calculées.</p>

<p class="h3-like">L'inventaire aveugle</p>
<p>L'inventaire aveugle est un contrôle par comparaison de l'inventaire permanent aux quantités effectivement observées dans le magasin. Il consiste à sonder au hasard une ou plusieurs références. L'usage de l'identification automatique rend cet inventaire infiniment plus rapide et plus sûr.</p>

<p class="h3-like">L'inventaire tournant</p>
<p>L'inventaire tournant est également un contrôle comme le précédent. Il consiste à répartir le comptage tout au long de l'année. Chaque jour (ou chaque semaine) le magasin va comptabiliser un certain nombre de références. Cela peut se faire au passage à zéro : zéro dans les fichiers informatiques ou zéro sur les étagères.</p>
<p>Un entrepôt étant généralement ouvert entre 220 et 250 jours par an, il est conseillé de procéder aux vérifications pendant 200 jours, en traitant environ 1/200è du stock chaque jour.</p>

<div class="ok">Avantages :
<ul>
  <li>Détection et correction régulière des erreurs</li>
  <li>Personnel formé et dédié à l'inventaire tournant.</li>
</ul>
</div>

<h2>L'inventaire tournant</h2>
<p class="h3-like">La fréquence de comptage</p>

<p>L'idée de base est de compter un certain nombre de références chaque jour, de façon à ce que chaque référence est comptée un nombre prédéterminé de fois au bout d'une année.</p>

<p>La fréquence de comptage correspond donc au nombre de fois qu'une référence est comptée annuellement.</p>

<p>Pour un article donné, cette fréquence devrait augmenter lorsque la valeur de l'article et le nombre de mouvements augmente (risque d'erreurs plus important si plus de mouvements).</p>

<p>Il existe plusieurs manières de déterminer la fréquence :</p>
<ul>
  <li>La classification ABC.</li>
  <li>La méthode par zone.</li>
  <li>La méthode par emplacement.</li>
</ul>

<p class="h3-like">La classification ABC</p>

<p>C'est une méthode assez répandue.</p>
<p>Les références sont classées selon le système ABC et des règles sont définies pour la fréquence de comptage.</p>
<p class="notice remarque">Par exemple, un article de classe A va être compté une fois par semaine ou par mois, un article de classe B tous les 3 mois et un article de classe C une fois par an.</p>


<p class="h3-like"><a title="Exercice 3 - Détermination fréquence de comptage" href="../gpstock/Ex3_Détermination_fréquence_comptage.odt">Exercice 3 - Détermination fréquence de comptage (0h15)</a></p>

<p class="h3-like">La méthode par zone</p>

<p>Les articles sont regroupés par zone de façon à ce que le comptage soit plus efficace. On peut mettre ceci en œuvre lorsqu'on utilise un stockage fixe ou lorsque ce sont les en-cours qui sont comptés.</p>

<p class="h3-like">La méthode par emplacement</p>

<p>Dans un stockage dynamique, les articles peuvent être stockés n'importe où.</p>
<p>À cause d'erreurs humaines, ces emplacements enregistrés dans le système ne sont pas toujours justes.</p>
<p>Dans ce système, chaque période, un nombre prédéterminé d'emplacements est inventorié.</p>

<div class="notice remarque">
<p>Un programme d'inventaire devrait inclure ces 3 méthodes.</p>
<p>La méthode par zone est idéale pour les articles qui tournent beaucoup.</p>
<p>Si on utilise le stockage dynamique, une combinaison de la méthode ABC et de la méthode par emplacement est conseillée.</p>
</div>

<p class="h3-like">Quand compter ?</p>

<p>Les inventaires tournants peuvent être programmés à des intervalles réguliers ou à des occasions précises. Certains critères peuvent être :</p>
<ul>
  <li>Quand une commande est placée : les articles sont comptés juste avant qu'une commande ne soit placée. Cela a l'avantage de détecter les erreurs avant que la commande ne soit placée et réduit le temps de comptage, puisque le stock est bas</li>
  <li>Quand une commande est réceptionnée : le stock est au plus bas</li>
  <li>Quand le stock informatique approche de 0 : le stock est aussi au plus bas</li>
  <li>Quand un certain nombre de transactions de stock ont eu lieu : les erreurs ont lieu lorsqu'il y a des transactions. Des articles qui tournent beaucoup connaissent plus de transactions et sont donc plus sujets aux erreurs.</li>
  <li>Quand il y a une erreur.</li>
</ul>


<h2>La préparation de l'inventaire</h2>

<p class="h3-like">Avant l'inventaire</p>
<ul>
  <li>Prévenir les fournisseurs et les clients des dates, un mouvement d'entrée ou de sortie des produits ne peut avoir lieu.</li>
  <li>Ranger le magasin, ce qui signifie de mettre chaque chose à sa place, de nettoyer le magasin.</li>
  <li>Organiser le travail en constituant des équipes, en rédigeant la procédure (si elle n'existe pas encore), et en informant le personnel de cette procédure.</li>
  <li>Prévoir le matériel nécessaire (Transpalette, roll, diable, stylo, calculettes…)</li>
</ul>

<p class="h3-like">Pendant l'inventaire</p>
<p class="h4-like">Les équipes</p>
<p>il convient d'abord de constituer des équipes de comptage dont le nombre est fonction de l'importance du travail à réaliser.</p>

<p class="h4-like">Le gel du stock et l'édition des listings :</p>
<p>Dès la fin de l'activité du magasin, le stock est informatiquement gelé afin qu'aucun mouvement ne soit effectué. Puis on procède à l'édition des listings d'inventaire comportant la liste des produits classés par ordre de rangement suivant la procédure de comptage.</p>

<p class="h4-like">Les comptages :</p>
<p>Tous les produits sont comptés par équipes. Le magasin est divisé en zones géographiques, et chaque équipe se voit confier un ensemble de zones où elle va opérer. Après chaque comptage, pour visualiser la fin de l'opération de comptage, on imposera une gommette de couleur (ou un autre signe) sur les matériels inventoriés.</p>
<p>Le responsable d'inventaire tient une comptabilité des listings d'inventaire en notant l'heure de remise des documents et l'heure de retour après comptage.</p>
<p>Une personne est chargée du rapprochement des comptages. S'il y a un écart entre le comptage et le listing d'inventaire, pour le même article, dans le même emplacement, un nouveau comptage est effectué par une autre équipe.</p>


<h2> Les saisies d'inventaire et la sortie de l'état des écarts</h2>

<p>Au fur et à mesure des comptages et du contrôle on peut procéder, s'il n'y a pas d'erreur, à la saisie des quantités inventoriées, et à la fin de cette saisie, à l'édition de l'état des écarts d'inventaire.</p>

<p class="h3-like">Première analyse des écarts</p>
<p>Il convient de procéder à une première analyse des écarts, car un certain nombre peuvent provenir d'erreurs grossières de saisies ou de mauvaises imputations que l'on peut immédiatement redresser.</p>

<p class="h3-like">S'il n'y a pas d'écarts : Dégel du stock</p>
<p>On est généralement contraint à procéder rapidement au dégel du stock pour permettre aux autres services de reprendre leurs activités.</p>

<p class="h3-like">S'il y a des écarts : Seconde analyse des écarts</p>
<p>Compte tenu des impératifs ci-dessus, l'analyse approfondie des écarts est généralement faite après le dégel du stock.</p>
<p>Si les deux comptages donnent le même résultat, ils sont considérés comme justes.</p>



<h2> La mesure de la justesse des inventaires</h2>

<p>Il est important d'avoir à disposition un indicateur qui va nous indiquer si nos stocks sont fiables ou non.</p>

<p>Pour l'exemple suivant, quel serait la fiabilité de notre stock ?</p>
<p>En observant le total de tous les articles, le stock physique = stock informatique.</p>
<p>Par contre, seuls 2 articles sur 10 ont un stock juste.</p>
<p>La fiabilité est-elle de 100 % ? 20 % ? Ou autre ?</p>

<table class="table">
<tr><th>Code article</th><th>Stock informatique</th><th>Stock physique</th></tr>
<tr><td>1</td><td>100</td><td>105</td></tr>
<tr><td>2</td><td>100</td><td>100</td></tr>
<tr><td>3</td><td>100</td><td>98</td></tr>
<tr><td>4</td><td>100</td><td>97</td></tr>
<tr><td>5</td><td>100</td><td>102</td></tr>
<tr><td>6</td><td>100</td><td>103</td></tr>
<tr><td>7</td><td>100</td><td>99</td></tr>
<tr><td>8</td><td>100</td><td>100</td></tr>
<tr><td>9</td><td>100</td><td>97</td></tr>
<tr><td>10</td><td>100</td><td>99</td></tr>
<tr><td>TOTAL</td><td>1000</td><td>1000</td></tr>
</table>

<p>Pour juger de la fiabilité d'un stock, on peut utiliser le terme de <span class="tag--info">niveau de tolérance</span> pour chaque article.</p>

<p>La <span class="tag--info">tolérance</span> est la variation acceptable entre un stock physique et un stock informatique.</p>
<p>Elle est établie pour chaque référence et dépend de :</p>
<ul>
  <li>La valeur.</li>
  <li>La nature critique ou non de la pièce.</li>
  <li>La disponibilité.</li>
  <li>Le délai.</li>
  <li>Le risque d'arrêter la production en cas de rupture.</li>
  <li>La difficulté d'avoir des mouvements justes ou non (pour des vis, on ne vérifie pas forcément si on en sort 999 ou 1000 du stock).</li>
</ul>

<div class="notice remarque">
Par exemple, pour un article de valeur élevée à consommation faible (donc pour lequel une rupture de stock pourrait nous coûter cher), la tolérance pourrait être de 0.
Pour des vis, de valeur peu élevée, que l'on réceptionne par paquets de 1000, on pourrait accepter une tolérance de 5%.
</div>

<p>La tolérance pour notre exemple précédent :</p>

<table class="table">
<tr><th>Code article</th><th>Stock informatique</th><th>Stock physique</th><th>Tolérance</th><th>Dans le niveau<br /> de tolérance</th><th>En-dehors du niveau<br /> de tolérance</th></tr>
<tr><td>1</td><td>100</td><td>105</td><td>+/- 5%</td><td>X</td><td></td></tr>
<tr><td>2</td><td>100</td><td>100</td><td>+/- 0%</td><td>X</td><td></td></tr>
<tr><td>3</td><td>100</td><td>98</td><td>+/- 3%</td><td>X</td><td></td></tr>
<tr><td>4</td><td>100</td><td>97</td><td>+/- 2%</td><td></td><td>X</td></tr>
<tr><td>5</td><td>100</td><td>102</td><td>+/- 2%</td><td>X</td><td></td></tr>
<tr><td>6</td><td>100</td><td>103</td><td>+/- 2%</td><td></td><td>X</td></tr>
<tr><td>7</td><td>100</td><td>99</td><td>+/- 3%</td><td>X</td><td></td></tr>
<tr><td>8</td><td>100</td><td>100</td><td>+/- 0%</td><td>X</td><td></td></tr>
<tr><td>9</td><td>100</td><td>97</td><td>+/- 5%</td><td>X</td><td></td></tr>
<tr><td>10</td><td>100</td><td>99</td><td>+/- 5%</td><td>X</td><td></td></tr>
<tr><td>TOTAL</td><td>1000</td><td>1000</td><td></td><td></td><td></td></tr>
</table>

<p>La justesse de stock serait de 80%.</p>

<p class="h3-like"><a title="Exercice 4 - Fiabilité des stocks" href="../gpstock/Ex4_Fiabilité_des_stocks.odt">Exercice 4 - Fiabilité des stocks (0h05)</a></p>

<h2> Les audits d'inventaire</h2>

<p>Les erreurs doivent être détectées de façon à engager des actions pour les éviter.</p>

<p>Il est important de réaliser des inventaires mais il est encore PLUS IMPORTANT d'auditer pour trouver les causes des écarts d'inventaire pour les éliminer.</p>

<p>Pour auditer, les inventaires tournants sont mieux adaptés que l'inventaire annuel.</p>
<p>En effet, l'inventaire annuel a avant tout comme but de montrer aux auditeurs financiers que les stocks physiques correspondent bien aux stocks informatiques.</p>
<p>Alors que le but des inventaires, pour les planificateurs, est de corriger les erreurs de stock.</p>


<h2> Les causes des écarts d'inventaire</h2>
<ul>
  <li>Une mauvaise réception (mauvais comptage)</li>
  <li>Une erreur de saisie informatique ou sur la fiche de stock</li>
  <li>Une erreur au niveau de la préparation de commande</li>
  <li>Démarque inconnue (vol)</li>
  <li>Démarque connue sans mouvement (Une pièce mise à la poubelle sans avoir été sortie du stock)</li>
  <li>Non respect des procédures ou pas du tout de procédure ou non connue</li>
</ul>

<p>Quelles actions peut-on mettre en place pour éviter les écarts d'inventaire ?</p>
<ul>
  <li>2ème contrôle de comptage (par une autre personne)</li>
  <li>Codes-barres (scannages)</li>
  <li>2ème contrôle de la préparation (par une autre personne)</li>
  <li>Fermer le magasin de stockage : grillager, donner la clé à un magasinier responsable du stockage</li>
  <li>Définir et rédiger la procédure (si inexistante) et mise en œuvre</li>
  <li>Pour l'ensemble des étapes de réception et préparation : des audits réguliers (vérification de l'application des procédures, si elles sont suffisantes, si les personnes sont bien formées… avec mise en œuvre d'actions correctives et préventives).</li>
</ul>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

