<?php
/**
 * BUT : Interopérabalité
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		18/04/23 	23:35::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Interoperabilite
 * @access public
 * @uses
 */
$sNavigation = navigation('interop', '3'); ?>




<h1>Modèle d’architecture orientée services SOA</h1>

<h2>Genèse</h2>

<p>Avant l'arrivée de l'architecture SOA (Service-Oriented Architecture) à la fin des années 1990, il était difficile de connecter une application à des services hébergés par un autre système.<p>
<p>Cela nécessitait une intégration point-à-point poussée (connectivité, routage, traduction des modèles de données, etc.), que les développeurs devaient ensuite reproduire pour chaque nouveau projet.</p>

<p>Ce modèle était appelé « monolithique », car tout le code de l'application tenait dans un déploiement unique.</p>
<p>Si l'un des éléments de l'application ne fonctionnait pas correctement, il fallait mettre hors ligne l'application entière pour résoudre le problème avant de déployer une autre version.</p>

<p>La construction des systèmes d'information s'est le plus souvent réalisée de façon organique, chaque domaine métier bâtissant un sous-système propre adapté à ses besoins et adossé à des technologies hétérogènes, rarement interopérables.</p>
<p>Rapidement, et pour répondre aux besoins croissants d'informatisation des procédures, les problématiques d'intégration de systèmes ont émergé, et avec elles deux questions centrales :</p>
<ul>
	<li>Comment déclencher, en réponse à un événement dans un sous-système donné, un traitement dans un autre sous-système ?</li>
	<li>Comment assurer la consistance et la propagation des données entre plusieurs sous-systèmes ?</li>
</ul>
<p>&nbsp;</p>
<p>Comme nous le verrons plus loin, un certain nombre de solutions techniques ont été trouvées pour répondre à ces questions.</p>


<p>La mise en œuvre de ces solutions d'intégration s'est le plus souvent faite de façon opportuniste, pour répondre aux besoins immédiats de telle ou telle application.</p>
<p>À mesure que ces solutions ad hoc ont été mises en œuvre, les problématiques de gouvernance ou de pilotage global sont apparues :</p>
<ul>
	<li>Les flux se sont multipliés, parfois de façon redondante, ainsi que les chaînes de liaison techniques ;</li>
	<li>Le couplage croissant des systèmes a amené son lot de problèmes, synthétisés par le concept d'effet spaghetti ;</li>
	<li>Les organisations ont été confrontées à des défis organisationnels nouveaux : si les chaînes de responsabilités étaient claires pour chaque sous-système métier, quid des liaisons entre ces systèmes ?</li>
</ul>

    <p>&nbsp;</p>
<p>Ces défis de l'intégration à l'échelle du SI ont été adressés avec plus ou moins de succès par les DSI au travers de chantiers d'urbanisation et de schémas directeurs informatiques.</p>
<p>Récemment, le concept d'Architecture Orientée Service (SOA) a permis de cristalliser les bonnes pratiques en matière d'urbanisation et d'intégration du SI et, en les nommant, de fournir un horizon aux grands projets de rationalisation et d'intégration.</p>

    <p>&nbsp;</p>



<h2>Qu'est-ce que SOA ?</h2>

<p><strong>L'architecture orientée services (ou SOA)</strong> est un modèle de conception qui rend des composants logiciels réutilisables, grâce à des interfaces de services qui utilisent un langage commun pour communiquer via un réseau.</p>

<p>Un service est une unité autonome de fonctionnalité logicielle, ou d'un ensemble de fonctionnalités, conçue pour réaliser une tâche précise comme récupérer des informations ou exécuter une opération. Il contient les intégrations de code et de données nécessaires pour exécuter une fonction métier distincte et complète. Vous pouvez y accéder à distance, et interagir avec lui ou le mettre à jour de manière indépendante.</p>

<p>En d'autres termes, l'architecture SOA permet à des composants logiciels déployés et gérés séparément de communiquer et de fonctionner ensemble sous la forme d'applications logicielles communes à différents systèmes.</p>

<h2>Principes Fondamentaux de SOA</h2>
    <ol>
        <li><strong>Interopérabilité</strong></li>
        <p>L'un des principaux objectifs de SOA est de permettre l'interaction entre différents services, indépendamment de leurs plateformes de développement. Cela signifie qu'un service développé en Java peut interagir sans problème avec un service développé en .NET.</p>
        <li><strong>Réutilisabilité</strong></li>
        <p>Les services dans une architecture SOA sont conçus pour être réutilisables. Cela signifie qu'un service peut être utilisé par plusieurs applications différentes, ce qui réduit les coûts de développement et de maintenance.</p>
        <li><strong>Modularité</strong></li>
        <p>SOA permet de construire des applications en assemblant des services individuels. Cette modularité facilite la maintenance et l'évolution des systèmes, car il est possible de modifier ou de remplacer des services sans affecter l'ensemble de l'application.</p>
        <li><strong>Découplage</strong></li>
        <p>Les services sont indépendants les uns des autres. Cela signifie que les modifications apportées à un service n'ont pas d'impact direct sur les autres services, ce qui facilite la mise à jour et la maintenance des systèmes.</p>
    </ol>
<h2>Composants de SOA</h2>
    <ul>
    <li><strong>Service Provider (Fournisseur de Service)</strong></li>
    <p>Le fournisseur de service publie et offre des services aux consommateurs. Il est responsable de la mise en œuvre et de la maintenance des services.</p>

    <li><strong>Service Consumer (Consommateur de Service)</strong></li>
    <p>Le consommateur de service est l'application ou l'utilisateur qui utilise les services fournis. Il découvre les services via le registre de services et les invoque.</p>

    <li><strong>Service Registry (Registre de Services)</strong></li>
    <p>Le registre de services est un répertoire où les services sont enregistrés et découverts. Il facilite la recherche et l'accès aux services disponibles.</p>
    </ul>

<h2>Cycle de vie d'un service SOA</h2>
    <ol>
        <li><strong>Conception</strong></li>
            <p>La première étape consiste à définir les spécifications du service. Cela inclut la définition des interfaces, des contrats et des politiques de sécurité.</p>
        <li><strong>Développement</strong></li>
            <p>Le service est ensuite développé selon les spécifications définies. Cette étape inclut le codage, les tests et la documentation du service.</p>
        <li><strong>Publication</strong></li>
            <p>Une fois le service développé, il est publié dans le registre de services. Cela permet aux consommateurs de découvrir et d'accéder au service.</p>
        <li><strong>Découverte</strong></li>
            <p>Les consommateurs de services recherchent et trouvent les services nécessaires dans le registre. Ils peuvent utiliser des critères de recherche pour trouver les services qui répondent à leurs besoins.</p>
        <li><strong>Invocation</strong></li>
            <p>Les consommateurs utilisent le service en l'invoquant via les interfaces définies. Cela peut être fait via des protocoles comme HTTP, SOAP ou REST.</p>
        <li><strong>Gestion</strong></li>
            <p>La dernière étape consiste à surveiller, maintenir et gérer le service. Cela inclut la gestion des performances, de la sécurité et de la disponibilité du service.</p>
    </ol>

    <h2>Avantages de SOA</h2>
    <ol>
        <li><strong>Flexibilité</strong></li>
            <p>SOA permet de réutiliser des services existants dans différents contextes, ce qui améliore la flexibilité et l'agilité des systèmes.</p>
        <li><strong>Scalabilité</strong></li>
            <p>Il est facile d'ajouter ou de modifier des services sans affecter l'ensemble du système, ce qui facilite la scalabilité des applications.</p>
        <li><strong>Maintenance</strong></li>
            <p>La maintenance est simplifiée car chaque service est autonome et peut être mis à jour indépendamment des autres services.</p>
        <li><strong>ROI Accru</strong></li>
            <p> Le retour sur investissement est amélioré grâce à la réutilisation des services existants, ce qui réduit les coûts de développement et de maintenance.</p>
    </ol>

<h2>Défis de SOA</h2>
    <ol>
        <li><strong>Complexité</strong></li>
            <p>La gestion et l'orchestration des services peuvent être complexes, surtout dans des environnements à grande échelle.</p>
        <li><strong>Sécurité</strong></li>
            <p>Assurer la sécurité des services exposés sur le réseau est crucial. Cela inclut la gestion des authentifications, des autorisations et des communications sécurisées.</p>
        <li><strong>Performance</strong></li>
            <p>La communication sur le réseau peut introduire des latences, ce qui peut affecter les performances des applications.</p>
        <li><strong>Gouvernance</strong></li>
            <p>Une gouvernance rigoureuse est nécessaire pour maintenir la qualité et la cohérence des services. Cela inclut la gestion des politiques, des standards et des procédures.</p>
    </ol>

<h2>Technologies et Protocoles SOA</h2>
    <ol>
        <li><strong>REST (Representational State Transfer)</strong></li>
            <p>REST est un style d'architecture qui utilise HTTP et des principes simples pour l'interaction avec les services. Il est largement utilisé en raison de sa simplicité et de son efficacité.</p>
        <li><strong>SOAP (Simple Object Access Protocol)</strong></li>
            <p>SOAP est un protocole basé sur XML pour l'échange de messages structurés. Il est utilisé pour les communications entre services et est souvent associé aux services web.</p>
        <li><strong>WSDL (Web Services Description Language)</strong></li>
            <p>WSDL est un langage basé sur XML pour décrire les services web et leurs interfaces. Il permet de spécifier les points de terminaison et les méthodes disponibles pour un service.</p>
    </ol>


    <h2>Exemples d'implémentation SOA</h2>
    <ul>
        <li><strong>Banque</strong></li>
            <p>Les services de gestion de comptes, de transactions et de prêts sont souvent implémentés en utilisant SOA. Cela permet de réutiliser ces services dans différentes applications bancaires.</p>
        <li><strong>E-commerce</strong></li>
            <p>Les services de gestion de produits, de paiements et de livraisons peuvent être réutilisés dans différentes applications de commerce électronique, améliorant ainsi l'efficacité et la flexibilité.</p>
        <li><strong>Santé</strong></li>
            <p>Les services de gestion des dossiers médicaux, de prises de rendez-vous et de prescriptions sont souvent implémentés en utilisant SOA pour améliorer l'interopérabilité et l'efficacité des systèmes de santé.</p>
    </ul>

<p class="h3-like">Échanges de données</p>
<p>Les échanges de données entre plusieurs applications web peuvent se faire via des interfaces de programmation d'application (API). Il existe deux manières de les développer.</p>
<ul>
<li>REST (Representational State Transfer) est un ensemble de principes architecturaux.</li>
<li>SOAP (Simple Object Access Protocol) est un protocole officiel géré par le W3C (World Wide Web Consortium).</li>
</ul>
<p>La principale différence entre les deux est que SOAP est un protocole, REST non.</p>
<p class="notice remarque">En général, les API suivent l'approche REST ou SOAP en fonction de leur utilisation et des préférences du développeur.</p>


<h3>REST : Representational State Transfer</h3>

<p>REST est un ensemble de principes architecturaux adapté aux besoins des services web et applications mobiles légers. La mise en place de ces recommandations est laissée à l'appréciation des développeurs.</p>

<p>L'envoi d'une requête de données à une API REST se fait généralement par le protocole HTTP (Hypertext Transfer Protocol). À la réception de la requête, les API développées selon les principes REST (appelées API ou services web RESTful) peuvent renvoyer des messages dans différents formats : HTML, XML, texte brut et JSON. Le format JSON (JavaScript Object Notation) est le plus utilisé pour les messages, car, en plus d'être léger, il est lisible par tous les langages de programmation (en dépit de son nom) ainsi que par les humains.</p>
<p>Les API RESTful sont ainsi plus flexibles et plus faciles à mettre en place.</p>
    <p>&nbsp;</p>
<p>Une application est dite RESTful lorsqu'elle respecte six recommandations architecturales. Ainsi, une application RESTful doit inclure les éléments suivants :</p>
<ol>
	<li>Une architecture client-serveur composée de clients, de serveurs et de ressources.</li>
	<li>Des communications client-serveur stateless, ce qui signifie que le contenu du client n'est jamais stocké sur le serveur entre les requêtes ; les informations sur l'état de la session sont stockées sur le client.</li>
	<li>Des données qui peuvent être mises en mémoire cache pour éviter certaines interactions entre le client et le serveur.</li>
	<li>Une interface uniforme entre les composants qui permet un transfert standardisé des informations au lieu d'un échange personnalisé en fonction des besoins d'une application. Roy Fielding, le créateur de REST, décrit ceci comme « la fonction centrale qui distingue le style architectural REST des autres styles basés sur le réseau ».</li>
	<li>Un système à couches où des couches hiérarchiques peuvent assurer la médiation dans les interactions entre le client et le serveur.</li>
	<li>Du code à la demande qui permet au serveur d'étendre la fonctionnalité d'un client en transférant le code exécutable (recommandation facultative, car elle réduit la visibilité).</li>
</ol>

<h3>SOAP : Simple Object Access Protocol</h3>

<p>SOAP est un protocole standard initialement conçu pour que des applications développées avec différents langages sur différentes plateformes puissent communiquer. Comme il s'agit d'un protocole, il impose des règles intégrées qui augmentent la complexité et les coûts, ce qui peut ralentir le chargement des pages.</p>

<p>Cependant, ces standards assurent la conformité et sont ainsi privilégiés pour certains scénarios d'entreprise. Les standards de conformité intégrés incluent la sécurité, l'atomicité, la cohérence, l'isolement et la durabilité (ACID <a href="#chap2c">voir ci-dessous</a>), un ensemble de propriétés qui permet d'assurer des transactions de base de données fiables.</p>

<p>Les principales spécifications de services web :</p>
<ul>
	<li><strong>WS-Security (Web Services Security)</strong> : spécification qui standardise la manière dont les messages sont sécurisés et transférés via des identifiants uniques appelés jetons.</li>
	<li><strong>WS-ReliableMessaging</strong> : spécification qui standardise la gestion des erreurs entre les messages transférés par le biais d'une infrastructure informatique non fiable.</li>
	<li><strong>WS-Adressing (Web Services Addressing)</strong> : spécification qui ajoute les informations de routage des paquets en tant que métadonnées dans des en-têtes SOAP, au lieu de les conserver plus en profondeur dans le réseau.</li>
	<li><strong>WSDL (Web Services Description Language)</strong> : décrit la fonction d'un service web ainsi que ses limites.</li>
</ul>

<p>Lorsqu'une requête de données est envoyée à une <strong>API SOAP</strong>, elle peut être gérée par n'importe quel protocole de couches de l'application :</p>
<ul>
	<li><strong>HTTP</strong> (pour les navigateurs web),</li>
	<li><strong>SMTP</strong> (pour les e-mails),</li>
	<li><strong>TCP</strong> et autres.</li>
</ul>
<p>En revanche, suite à la réception de la requête, les messages SOAP doivent être renvoyés sous la forme d'un document <strong>XML</strong>, un langage balisé lisible aussi bien par les humains que par les machines. Une fois finalisée, une requête destinée à une API SOAP ne peut pas être mise en cache par un navigateur. Il n'est donc pas possible d'y accéder plus tard sans la renvoyer vers l'API.</p>

<h4>SOAP ou REST : comment choisir ?</h4>

<p>De nombreux systèmes d'anciennes générations reposent encore sur le protocole <strong>SOAP</strong>. <strong>REST</strong> est arrivé plus tardivement et est souvent considéré comme une solution plus rapide pour des scénarios basés sur le web. <strong>REST</strong> est un ensemble de recommandations qui permet une mise en œuvre flexible, tandis que SOAP est un protocole avec des exigences spécifiques comme l'envoi de messages au format XML.</p>
<p>Les <strong>API REST</strong> sont plus légères et donc plus adaptées aux concepts récents tels que l'Internet des objets (IoT), le développement d'applications mobiles et le serverless. Les services web SOAP intègrent des spécifications de sécurité et de conformité des transactions qui répondent aux besoins de nombreuses entreprises, mais qui les rendent également plus lourds. De plus, de nombreuses API publiques, telles que l'API Google Maps, suivent les recommandations REST.</p>
</p>


<h3>Quelques définitions</h3>
<dl>
<dt>ACID</dt>
<dd>ACID est un acronyme résumant les quatre propriétés élémentaires d’une transaction informatique : Atomicité, Cohérence, Isolation, Durabilité.</dd>

<dt>Transaction</dt>
<dd>Au sein d’une base de données, le terme de transaction désigne les opérations apportant des modifications aux données.</dd> 
<p class="notice exemple">Par exemple, un virement bancaire provoquant le débit du compte de l’émetteur et le crédit du compte du bénéficiaire est une transaction. Ces transactions doivent toutefois présenter les quatre propriétés visant à garantir leur validité même en cas d’erreur ou de pannes informatiques.</p>

<p class="notice info">Jim Gray, chercheur américain de Microsoft Research, a défini les propriétés qui garantissent des transactions fiables à la fin des années 1970 et a développé des technologies pour les mettre en œuvre automatiquement. Afin de mémoriser facilement ces attributs, Andreas Reuter et Theo Härder ont inventé l’acronyme "ACID" en 1983.</p>

<p class="notice remarque">Il existe des modèles de bases de données qui s'écartent des propriétés ACID, pour répondre à d'autres priorités comme la gestion de données massives et distribuées pour les usages du Big Data notamment par les géants d'Internet : ce sont les bases NoSQL.</p>

<dt>Atomicité</dt>
<dd>L’atomicité d'une transaction de bases de données signifie que, soit tout les changements apportés par la transaction sont enregistrés, soit la base de données revient automatiquement à son état antérieur.</dd>

<p class="notice remarque">L’atomicité permet d’éviter que les changements prennent effet en cas de panne de l’application ou du serveur de la base de données en plein milieu de la transaction. Ainsi, la base de données ne risque pas d’être corrompue par des opérations imprévisibles et/ou incomplètes.></p>

<dt>Cohérence</dt>
<dd>La cohérence, ou consistency en anglais, est un principe permettant de garantir qu’une transaction n’enfreigne pas les contraintes d’intégrité des données fixées pour une base de données. L'intégrité référentielle garantit la relation clé primaire-clé étrangère.</dd>

<dt>Isolation</dt>
<dd>L’isolation signifie que les écritures et lectures des transactions réussies ne seront pas affectées par les écritures et lectures d’autres transactions, qu’elles soient ou non réussies. Les transactions isolées peuvent être "sérialisées", ce qui signifie que l’état final du système peut être atteint en effectuant les transactions une par une.</dd>

<dt>Durabilité</dt>
<dd>La durabilité garantit que les transactions réussies resteront valides de façon permanente et ne seront pas affectées par d’éventuelles pannes ou problèmes techniques. Les changements apportés aux données doivent être permanents.</dd>

<p class="notice remarque">La simple écriture des données sur le disque ne suffit pas pour atteindre la durabilité. En effet, le disque peut par exemple tomber en panne. Il est nécessaire que le SGBD (Système de gestion de base de données) écrive des logs sur les changements effectués. Ces logs doivent être permanents, et éventuellement redondants.</p>
</dl>

<p class="notice info"><a target="blank" href="https://www.iso.org/obp/ui/#iso:std:iso:23903:ed-1:v1:fr">ISO 23903:2021(fr) Informatique de santé — Architecture de référence d'interopérabilité et d'intégration — Modèle et cadre</a></p>



