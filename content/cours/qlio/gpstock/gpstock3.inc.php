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
<h1>Les mouvements de stock (50mn)</h1>

<p>Pour simplifier, il y a deux types de mouvements: les <span class="tag--info">entrées</span> et les <span class="tag--info">sorties</span>.</p>

<p>Pour chaque transaction physique de stock, il est essentiel qu'il existe une transaction informatique correspondante, bien documentée. L'accès aux transactions, physique ou informatique doit donc être limité aussi et le personnel chargé de ces transactions, bien formé.</p>

<h2> Les entrées de stock</h2>


<p>Les étapes clés d'une bonne réception :</p>
<ol>
<li>Accueil du transporteur ou du produit</li>
<li>Recherche de la commande</li>
<li>Vérification de l'identité du produit et de sa quantité</li>
<li>Signature du bon de livraison (éventuellement avec réserve)</li>
<li>Vérification qualitative du produit</li>
<li>Signature du bon de réception (éventuellement avec réserve) qui va déclencher le paiement s'il n'y a pas de réserve</li>
</ol>


<p class="notice remarque">Autres types d'entrées en stock: retours clients, retours fournisseurs…</p>

<h2> Les sorties de stock</h2>

<p>Types de sorties de stock :</p>
<ul>
<li>Préparation pour consommation en production ou commande client</li>
<li>Problème qualité</li>
<li>Rebut</li>
<li>Riblonnage</li>
</ul>

<h2> En quoi consiste la préparation de commande ?</h2>

<h3>Quelques définitions :</h3>
<dl>
<dt>Préparation de commandes</dt>
<dd>Ensemble des opérations réalisées (<span class="tag--info">picking</span>, regroupement, emballage…) pour composer une commande client dans les conditions de coût, de qualité et de délai fixées par l'entreprise et le client.</dd>
</dl>
<p>Il faut noter que le client peut être <strong>interne</strong> (ex.: préparation de tôle pour poinçonnage… ou préparation de divers composants pour chaîne d'assemblage) ou <strong>externe</strong>.</p>
<dl>
<dt>Picking</dt>
<dd>Opération de prélèvement lors d'une préparation de commande.</dd>
</dl>

<p>Lorsqu‘une commande client arrive, elle ne peut pas être traitée par l‘opérateur telle quelle, elle doit d‘abord être contrôlée, puis convertie en liste de prélèvement. </p>

<p>Suivant les organisations et les règles de gestion que l‘on se fixe :</p>
<ul>
<li>soit l‘entreprise prend en compte <u>l‘ensemble de la commande</u> (toutes les lignes, tous les articles) et la transmet telle quelle à l‘entrepôt,</li>
<li>soit elle ne transmet à servir <u>que les articles disponibles en stock</u> (les articles non disponibles ne seront transmis à la préparation qu'au moment où ils le seront).</li>
</ul>

<p>Généralement, on définit des règles de préparation de commande et c'est dans cet ordre-là que les commandes vont ensuite être préparées.</p>

<p>Il s‘agit de gagner en productivité et d‘assurer une haute qualité de service, car la commande que va recevoir le client est représentative de <u>l‘image de marque de l‘entreprise</u> (prélèvement des bonnes références dans les bonnes quantités, tri et regroupement des articles d‘une même commande, mise en expédition et envoi des produits dans le respect des prescriptions et délais négociés avec les clients).</p>

<p>Pour cette raison, on définit parfois :</p>
<dl>
<dt>Le chemin de préparation</dt>
<dd>Itinéraire physique de préparation de commandes organisé afin de limiter les mouvements des préparateurs, de réduire le risque d'erreur et de fluidifier l'ensemble des déplacements au sein de la zone de préparation.</dd>
</dl>

<h3>Processus de préparation des commandes</h3>
<ol>
    <li>Création des chargements</li>
      <p class="notice remarque">Chaque préparation est rattachée à un chargement. Les chargements servent de base à l'organisation du transport.</p>
    <li>Génération des missions de préparation</li>
      <p class="notice remarque">L'utilisateur peut s'appuyer sur la gestion des chargements pour prendre les rendez-vous avec les transporteurs et les destinataires.</p>
    <li>Liste et étiquettes</li>
    <div>
      <ul class="notice remarque">
        <li>Code chargement</li>
        <li>Mission de préparation</li>
        <li>Produit</li>
        <li>Référence, coloris, taille</li>
        <li>Emplacement de stockage : Allée, côté, colonne, niveau, emplacement</li>
        <li>Numéro de commande, colis x/total</li>
        <li>Nom du client</li>
        <li>Adresse de livraison</li>
      </ul>
    </div>
    <p class="notice alert">Une étiquette par carton = UP</p>
    <li>Contrôle et validation des préparations</li>
    <li>Bon de livraison</li>
    <li>Expéditions</li>
</ol>

<h3>Support d'information pour la préparation commande</h3>

<p>La préparation de commandes peut s‘effectuer soit :</p>
<ul>
    <li>Avec une simple liste papier de préparation (2 modèles) avec les différentes informations.</li>
    <li>Avec des planches ou rouleaux d‘étiquettes, chaque étiquette correspondant à un article à prélever.</li>
    <li>Avec un pistolet donnant les indications au préparateur.</li>
    <li>Avec un système associant des indications vocales et une validation de la part du préparateur à chaque étape.</li>
</ul>

<p>Exemple de ticket de préparation :</p>
<img src="/assets/img/qlio/gpstock/ticket_preparation.jpg" width="300px" alt="Exemple de ticket de préparation" />
 

<h3>Différents types de préparation</h3>

<p>On peut lancer la préparation <span class="tag--info">commande par commande</span> ou bien par <span class="tag--info">vagues</span> ou <span class="tag--info">rafales</span>.</p>
<p>On peut regrouper par exemple une vague de commandes correspondant à un certain critère, comme les commandes prioritaires, ou bien les commandes les plus anciennes, ou même celles qui doivent être prêtes avant 17 heures car elles prennent la navette de Limoges, celles pour Marseille peuvent être préparées jusqu‘à 19 heures.</p>
<p>La planification par vague de prélèvement permet de minimiser les déplacements dans l'entrepôt. Ces traitements améliorent l‘efficacité des manutentionnaires.</p>
<p>On peut aussi traiter différemment les commandes supérieures à 3 tonnes ou à 10 palettes.</p>
<p>On sortira par exemple les produits des plus lourds au plus léger, ou bien avec un parcours optimisé, ou plusieurs listes en fonction des types et modes de préparation choisis.</p>


<h3> Les principes de préparation de commande</h3>


<p>On peut appliquer un principe unique pour la préparation de commandes ou mixer des principes différents en fonction de la configuration de l‘entrepôt, de la taille de la commande, de la taille des produits ou pour des produits particuliers.</p>

<p class="h4-like notice info">Principe 1 : un préparateur, une commande = la préparation de <span class="tag--info">commandes en « U »</span></p>

<p>Un ordre de préparation correspond à une seule commande client.</p>
<p>Le préparateur se rend aux différents points de prélèvement et prélève les articles. Il emballe ensuite.</p>
<p>Il est évident que si on doit prélever 100 fois dans la journée à un emplacement de picking, il y aura 100 fois dans la journée un préparateur qui se rendra à cet emplacement, ce qui n‘est pas très productif.</p>
<p>L‘ordre de préparation peut alors être celui qui minimise le parcours en mètres du préparateur.</p>

<p class="ok">C'est la méthode la plus simple à gérer si l'entrepôt n'est pas trop grand.</p>

<p class="h4-like notice info">Principe 2: un préparateur, plusieurs commandes = la préparation en <span class="tag--info">rafale</span></p>

<p>Un ordre de préparation comprend plusieurs commandes client à traiter simultanément. </p>
<p>Ces commandes sont dispatchées sur la base de différents critères permettant de réduire le cycle de préparation : articles similaires, proximité physique des articles à prélever…</p>
<p>C‘est la même chose que précédemment, on peut imaginer que le préparateur collecte tous les articles et les apporte ensuite sur une zone de tri ou bien qu‘il prélève et trie simultanément les articles dans des cartons différents. Il prélève, trie et emballe en simultané.</p>

<p><u>Quand l'utiliser</u> : lorsqu'une même référence est commandée par un grand nombre de clients.
<p><u>Intérêt</u> : Grâce à cette méthode on minimise les déplacements des préparateurs de commandes. 
<p><u>Limites</u> : Pour que le temps de répartition soit "amorti", il faut que la ligne de commande soit commune à un maximum de clients.

<p>On considère que le différentiel de temps passé à prélever 2 unités d‘une même référence plutôt qu‘une seule est marginal, à condition que le prélèvement de la deuxième unité n‘oblige pas à se déplacer à un autre emplacement de picking...

<p class="h4-like notice info">Principe 3 : plusieurs préparateurs, une commande = <span class="tag--info">l'allotissement</span></p>

<dl>
<dt>Allotissement </dt>
<dd>mode de préparation des commandes consistant à prélever tous les articles d'une même référence ou d'une même zone de stockage avant de les affecter aux différentes commandes en cours de constitution. L'allotissement se distingue de la préparation en rafale par le fait que ce sont plusieurs préparateurs qui traitent une même commande client.</dd>
</dt>
</dl>

<p>On imagine que l‘entrepôt est grand et divisé en zones. Différents préparateurs collectent les articles de la commande et la regroupent ensuite sur un point de contrôle et de conditionnement.</p>
<p>On peut également envisager que certains préparateurs s‘occupent des palettes complètes et d‘autres des articles inférieurs à une palette sans distinction de zone.</p>
<p>Les articles peuvent être également stockés dans des bâtiments différents, chacun assure sa part de préparation et les articles sont regroupés et conditionnés avant une mise en expédition.</p>

<p class="ok">Quand l'utiliser ? Lorsque l'entrepôt est plus grand.</p>

<div class="notice remarque">
<p>Exemple de processus de préparation de commandes par allotissement :</p>
<ul>
  <li>Déstockage d‘une palette par un cariste</li>
  <li>Transfert de la palette en "zone d‘allotissement" </li>
  <li>Répartition des colis de la palette sur les emplacements clients dans la "zone d‘allotissement"</li>
</ul>
</div>

<p class="h4-like notice info">Principe 4 : plusieurs préparateurs, plusieurs commandes = <span class="tag--info">l'allotissement</span></p>

<p>C'est le même principe que le 3, sauf que, au lieu de traiter commande par commande, plusieurs commandes sont regroupées et tous les articles correspondants sont scindés par zone.
Les préparateurs  circulent dans leur zone, préparant les articles nécessaires pour leurs commandes. Ces articles sont envoyés vers la zone de conditionnement où ils sont triés par commande.
Cette méthode est adaptée quand il y a beaucoup d'articles ou beaucoup de petites commandes avec peu d'articles.</p>


<p class="h4-like notice info">Principe 5 : préparateur à poste fixe</p>

<p>Le préparateur ne bouge pas et prélève les articles (sorties de transstockeur, on prélève des articles sur une palette : la palette est ensuite renvoyée dans le transstockeur).</p>


<h3>Le prélèvement des articles</h3>

<h4>Préparation au niveau du sol</h4>
<p>Celui-ci signifie généralement le sol +1. Le prélèvement au sol est approprié aux commandes contenant un grand nombre de lignes ou d‘articles.</p>

<h4>Préparation en hauteur</h4>
<p>Avec un chariot spécial, on prélève directement sur les palettes en emplacement de stockage qui sont en hauteur. C'est un prélèvement assez lent. Il faut souvent redescendre la nacelle après chaque prélèvement pour se déplacer.</p>

<h4>Préparation à poste fixe</h4>
<p>Elle est rentable quand on prélève de grandes quantités de peu d‘articles.</p>


<h3>Contrôler la préparation de commandes</h3>

<p>Les erreurs de préparation peuvent coûter très cher aux entreprises ou aux prestataires en charge des opérations de distribution. De mauvaises informations peuvent conduire à expédier 4 boîtes de douze au lieu de 4 unités si les informations sont floues et imprécises.</p>
<p>Les notions d‘articles unitaires et de conditionnement de regroupement (si cela existe) doivent être très précises.</p>
<p>Un contrôle et un recomptage des préparations est souvent important.</p>

<p>Il existe plusieurs façons de faire :</p>
<ul>
  <li>Par échantillonnage,</li>
  <li>Par préparateur (en fonction des taux d‘erreurs passées remontées des clients)</li>
  <li>Contrôle systématique des commandes et expéditions</li>
</ul>

<p>Les erreurs de préparation remontent aussi de la part de la clientèle, mais suivant les produits et leurs valeurs elles peuvent ne remonter que lorsque l‘erreur est en défaveur du client.</p>


<p class="h3-like">Exercice sur la préparation de commande (Exercice 1 - 0h35)</p>

<p class="h4-like"><a title="Exercice 1 - préparation de commande" href="./cours/gpstock/Ex1_Préparation_de_commande.odt">Exercice 1</a> et <a title="Exercice 1 - annexe" href="./cours/gpstock/annexes_ex1.ods">annexes</a> (2 feuilles d'annexes)</p>

<p>Pour continuer l'exercice : Quels indicateurs le responsable du service doit-il suivre ?</p>


<h2> La gestion des files d'attente : FIFO, LIFO…</h2>

<p>La gestion des files d'attente dépend de deux critères :</p>
<ul>
  <li>l'ordre d'entrée</li>
  <li>l'ordre de sortie des éléments dans la file</li>
</ul>

<p>On utilise les termes suivants :</p>
<ul>
  <li>First et Last</li>
  <li>In et Out</li>
</ul>

<table class="table w300p">
<tr>
<th></th><th>Fo</th><th>Lo</th>
</tr>
<tr>
<th>Fi</th><td>Fifo</td><td>Filo</td>
</tr>
<tr>
<th>Li</th><td>Lifo</td><td>Lilo</td>
</tr>
</table>


<h3>La méthode FIFO ou PEPS ("First in, first out" ou "Premier entré, premier sorti")</h3>

<p>Il s'agit de la règle la plus courante.</p>
<p>Elle permet d'assurer le suivi chronologique des éléments pour des raisons diverses : traçabilité, obsolescence, péremption…</p>
<p>Dans le cas dans lequel la file n'est pas une contrainte (par ex. : on pose librement une pièce sur une étagère), le respect de ce principe nécessite l'établissement et l'application d'une règle de gestion.</p>

<img src="/assets/img/qlio/gpstock/fifo.png" alt="principe du FIFO" width="350px /">

<h3>La méthode LIFO ou DEPS ("Last in, first out" ou "Dernier entré, premier sorti")</h3>

<p>Elle est souvent une conséquence d'une contrainte, comme par exemple le remplissage d'un bocal, d'un conteneur, d'un empilement (palettes)…</p>
<img src="/assets/img/qlio/gpstock/lifo.png" alt="principe du LIFO" width="350px /">

<h3>Autres règles</h3>

<dl>
<dt>FEFO = First expired, first out</dt>
<dd>règle du premier périmé, premier sorti (pour les entreprises gérant des produits périssables) : on utilise pour cela la date limite de consommation (DLC).</dd>
</dl>

<p>En fonction des exigences des magasins concernant le nombre de jours minimum restants entre la livraison des produits en magasin et la DLC des produits à livrer, on détermine en entrepôt une date limite de préparation.</p>

<dl>
<dt>NIFO = Next in, first out = règle du prochain entré, premier sorti</dt>
<dd>Coût de remplacement</dd>
</dl>

<p>Méthode valorisation comptable des sorties de stock qui ne prend pas en compte la valeur réelle des entrées mais s'appuie sur la valeur des prochaines entrées.</p>
<p>Contrairement aux autres méthodes qui sont applicables comptablement et dans l'entrepôt, celle-ci n'est applicable qu'en comptabilité.</p>

<h3>Applications (0h15)</h3>


<p class="h4-like"><a title="Exercice 2 - gestion des files d‘attente" href="../gpstock/Ex2_FIFO_LIFO.odt">Exercice 2 : gestion des files d‘attente</a></p>

