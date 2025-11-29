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
 * @category Interoperabilité
 * @access public
 * @uses
 */
$sNavigation = navigation('interop', '5'); ?>




<h1>Modèle d’architecture ESB</h1>

<h2>Introduction</h2>

    <p>L'Enterprise Service Bus (ESB) a été conçu pour sécuriser et structurer les échanges au sein des systèmes d'information.</p>
    <p>Cette technologie crée un flux d'information continu et fiable, facilitant l'intégration des applications et répondant aux besoins d'unification des échanges dans un contexte de multiplication des données et d'obsolescence des applications.</p>
    <p>Successeur de l'Enterprise Application Integration (EAI), l'ESB s'est imposé face à la complexité croissante des SI, due à l'explosion de la mobilité et des solutions SaaS dans les années 2000.</p>
    <p>Utilisant largement les services web, l'ESB permet de gérer les doublons d'applications, l'obsolescence des programmes et les échanges point à point.</p>
    <p>Il s'inscrit aujourd'hui dans une Architecture Orientée Services (SOA), répondant aux besoins de flexibilité des entreprises.</p>


<h2>Qu’est-ce qu'un ESB ?</h2>

<p>L'<strong>ESB</strong> (<strong>Enterprise Service Bus</strong>) est une plate-forme d'intégration standardisée qui combine messagerie, services Web, transformation de données et routage intelligent, pour connecter et coordonner de manière fiable l'interaction d'un nombre important d'applications hétérogènes avec intégrité transactionnelle.</p>

<p>L'ESB est donc un modèle d'architecture logicielle qui permet de mettre en relation différentes applications qui n’ont pas été conçues pour fonctionner ensemble. C'est une méthode de médiation inter-applicative.</p>

<p>Une solution ESB utilise des services pour échanger des données. Les messages entre les composants sont transportés dans un Bus applicatif. L’ESB assure le transport, la standardisation, la consolidation et le partage des données.</p>

<p>Dans une architecture ESB, les applications sont connectées indirectement via ESB, plutôt que d'être directement connectées les unes aux autres.</p>
<img src="../img/interop/esb.png" alt="ESB - Enterprise Service Bus" />

<h2>Caractéristiques de l'ESB</h2>

<p>En plus d'être basés sur des technologies standards telles que XML ou les services web, les outils ESB intègrent plusieurs caractéristiques communes.</p>

<h4>Connectivité</h4>

<p>L’intégration d’applications repose sur la connexion entre plusieurs environnements. Cloud, CRM, ERP et autres bases de données doivent pouvoir communiquer facilement avec le bus. La question de la compatibilité se pose.</p>

<p>Les outils ESB possèdent généralement une liste de connecteurs natifs. Ils simplifient les échanges entre les applications et logiciels métier.</p>

<h4>Normes et standards</h4>

<p>Déployer un ESB revient à homogénéiser le SI en s'appuyant sur des normes et des standards. On compte par exemple les services web parmi les standards utilisés par l'ESB. La majorité de ces outils sont construits sous XML ou JMS. Les protocoles d’échanges sont structurés en SOAP.</p>

<h2>Exemples d'utilisation</h2>

<p>Une entreprise de commerce électronique souhaite intégrer plusieurs systèmes pour améliorer l'efficacité de ses opérations. Ces systèmes incluent une plateforme de gestion des commandes, un système de gestion des stocks, une solution CRM (Customer Relationship Management), et une passerelle de paiement.</p>

<h4>Systèmes à Intégrer</h4>
<ol>
    <li><strong>Gestion des commandes</strong></li>
        <p>Ce système traite les commandes clients depuis leur réception jusqu'à leur expédition.</p>
    <li><strong>Gestion des stocks</strong></li>
        <p>Ce système suit les niveaux de stock en temps réel et génère des alertes en cas de niveaux bas.</p>
    <li><strong>CRM</strong></li>
        <p>Le CRM gère les informations clients, incluant les historiques d'achat, les préférences et les interactions de support.</p>
    <li><strong>Passerelle de paiement</strong></li>
        <p>Ce système gère les transactions financières de manière sécurisée pour les paiements en ligne.</p>
</ol>

<h4>Problématiques Sans ESB</h4>
<p>Sans l'utilisation d'un ESB, chaque système doit communiquer directement avec les autres. Cela engendre plusieurs défis :</p>
<ol>
    <li><strong>Communication fragmentée</strong></li>
        <p>Chaque système doit établir et maintenir des connexions individuelles avec les autres systèmes, créant une architecture complexe et difficile à gérer.</p>
    <li><strong>Complexité et duplication</strong></li>
        <p>Les intégrations point-à-point se multiplient, rendant la maintenance et les mises à jour plus complexes et coûteuses.</p>
    <li><strong>Incohérence des données</strong></li>
        <p>Les données peuvent devenir désynchronisées entre les systèmes, entraînant des erreurs et des incohérences.</p>
</ol>

<h4>Implémentation d'un ESB</h4>
<p>Pour résoudre ces problèmes, l'entreprise décide de mettre en place un Enterprise Service Bus (ESB). L'ESB centralise et simplifie la communication entre les différents systèmes.</p>

<h2>Composants clés de l'ESB</h2>
    <p>L’architecture ESB repose sur 4 fonctionnalités primordiales :</p>
<ol>
    <li><strong>Bus de communication</strong></li>  <p>Le bus transporte les messages entre les différentes applications et services.</p>
    <li><strong>Adaptateurs</strong></li>
    <p>L'ESB (Enterprise Service Bus) permet à des applications utilisant différents protocoles de communication (SOAP, REST, JMS, etc.) d'échanger des données entre elles.</p>
    <p>Il utilise des adaptateurs qui se chargent de faire la traduction entre les protocoles et formats de données spécifiques à chaque système individuel, afin de les connecter au bus de communication commun.</p>
    <li><strong>Moteur de transformation</strong></li>
        <p>Il convertit les messages d'un format à un autre pour assurer la compatibilité entre les systèmes.</p>
    <li><strong>Moteur de routage</strong></li>
        <p>Ce composant aiguille la destination des messages en fonction des règles de routage définies.</p>
</ol>


<h2>Fonctionnement de l'ESB</h2>

    <p>Voici un exemple de fonctionnement de l'ESB :</p>

    <ol>
        <li><strong>Nouvelle commande :</strong></li>
            <p> Lorsqu'une commande est passée par un client, le système de gestion des commandes envoie les détails de la commande au bus de communication de l'ESB.</p>
        <li><strong>Routage de la commande :</strong></li>
            <p>L'ESB achemine la commande au système de gestion des stocks pour vérifier la disponibilité des articles commandés.</p>
        <li><strong>Validation des stocks :</strong></li>
            <p>Le système de gestion des stocks confirme la disponibilité des articles et envoie cette information via le bus à l'ESB.</p>
        <li><strong>Mise à Jour du CRM :</strong></li>
            <p>L'ESB achemine les informations de commande au CRM pour que l'historique client soit mis à jour avec les nouvelles transactions.</p>
        <li><strong>Traitement du paiement :</strong></li>
            <p>Enfin, l'ESB achemine les détails de la commande à la passerelle de paiement pour traiter le paiement en ligne de manière sécurisée.</p>
    </ol>

<h2>Avantages de l'ESB</h2>
    <p>L'utilisation d'un ESB apporte plusieurs avantages :</p>
<ol>
    <li><strong>Découplage des systèmes</strong></li>
        <p> Chaque système communique via l'ESB sans dépendre directement des autres, permettant ainsi une évolutivité et une flexibilité accrues.</p>
    <li><strong>Simplification des intégrations</strong></li>
        <p>La réduction des intégrations point-à-point simplifie la maintenance et les mises à jour des systèmes.</p>
    <li><strong>Cohérence des données</strong></li>
        <p>La centralisation des flux de données réduit le risque de désynchronisation, assurant ainsi la cohérence des informations entre les différents systèmes.</p>
    <li><strong>Scalabilité</strong></li>
        <p>L'ajout de nouveaux systèmes ou services est facilité grâce aux adaptateurs supplémentaires connectés au bus.</p>
</ol>

<h2>Défis potentiels</h2>
    <p>Cependant, l'implémentation d'un ESB comporte également certains défis :</p>
<ul>
    <li><strong>Complexité initiale</strong></li>
        <p>La mise en place de l'ESB peut nécessiter des compétences spécialisées et une planification minutieuse.</p>
    <li><strong>Surveillance et gestion</strong></li>
        <p> Il est nécessaire de disposer d'outils de surveillance et de gestion pour contrôler les flux de messages et les performances du système.</p>
    <li><strong>Sécurité</strong></li>
        <p>Assurer la sécurité des données échangées via l'ESB est essentiel, surtout lorsque des informations sensibles telles que les détails de paiement sont en jeu.</p>
</ul>

<p>En résumé, l'architecture de passerelle de service ESB permet de faciliter la communication entre des applications distribuées en utilisant des protocoles standards et en fournissant des mécanismes pour gérer les erreurs et la sécurité. Elle est particulièrement adaptée aux environnements hétérogènes où les applications sont développées avec différents langages de programmation et utilisent différents protocoles de communication.</p>

<p>Quoique non indispensable, un ESB n'en demeure pas moins une brique à forte valeur ajoutée dans le cadre d'une mise en place d'une architecture orientée service (SOA) mature.</p>
<!--
    <h2>Pour aller plus loin...</h2>
    <p>Pensez à ce qui se passe quand vous vous connectez à votre interface bancaire (application cliente):</p>
    <ol>
        <li>Votre nom est affiché.</li>
        <li>Votre solde est présent.</li>
        <li>Votre carte de crédit et/ou carte de débit sont présentes.</li>
        <li>Il y a une liste de vos investissements.</li>
        <li>Vous recevez une liste pré-établie de prêts avantageux susceptibles de vous intéresser.</li>
    </ol>
    <p>Il est très probable que les données appartiennent à des applications différentes, dont chacune expose des données à travers une interface (REST, JSON, AMQP, SOAP, FTP, CSV, etc). Par exemple :</p>
    <ol>
        <li>Un CRM qui fonctionne sur Linux et Oracle.</li>
        <li>Un système COBOL sur un IBM Z/OS.</li>
        <li>Un mainframe exportant les données au format CSV.</li>
        <li>Un mix de PHP et Ruby fonctionnant sur Windows.</li>
        <li>PostgreSQL, Python et Java qui fonctionnent sur Linux et IBM System i.</li>
    </ol>
    <p>La question est, comment faire pour que l'application frontend parle à toutes ces applications ? <strong>Eh bien, on ne peut pas.</strong></p>
    <p>Ce sont les bases fondamentales permettant d'assurer que de tels environnements puissent évoluer au-dessus d'un petit nombre de systèmes.</p>
    <p><strong>Vous ne les laissez pas se parler directement.</strong></p>
    <p>Dans le schéma ci-dessous, chacune des invocations d'un service que d'autres systèmes proposent est représenté par une ligne de largeur et style différents :</p>
    <p>
        <img alt="" src="https://upcdn.io/kW15bqq/raw/root/en/docs/3.2/gfx/api/intro/mess1-abg4.png">
    </p>
    <p>Notez bien que des processus de plus haut niveau ne sont pas représentés (App1 invoque App2 et de même, App3 ou App5 selon la réponse précédente et positive d'App 6 dans le but que App4 récupérer les données en différé produit par App 2, mais seulement si App 1 l'autorise, etc.).</p>
    <p>Notez également que nous ne parlons pas de serveurs. Chacun des systèmes peuvent nécessiter 10 serveurs physiques, ce qui peut nous amener à 60 composants physiques communiquant entre eux.</p>
    <p>Comment séparer des interfaces ? Comment peut-on planifier les déploiements ? Comment organiser des mises à jour ou temps d'arrêt programmés quand chaque application est gérée par des équipes, vendeurs ou départements différents et la moitié des développeurs originaux ne sont plus présents ?</p>
    <p>Si vous pensez que vous êtes capable de gérer 6 applications, pourquoi pas 30 ?</p>
    <p>
        <img alt="" src="https://upcdn.io/kW15bqq/raw/root/en/docs/3.2/gfx/api/intro/mess2a-abg4.png">
    </p>
    <p>Pouvez-vous en gérer 400 ? Et pourquoi pas 2000 ? Chaque application peut être un écosystème unique nécessitant 10 serveurs ou d'autres devices pour fonctionner, cela veut dire 20'000 pièces mobiles réparties sur les continents et toutes sortes de frontières techniques et culturels, toutes ces pièces souhaitant sans cesse échanger des informations et communiquer en permanence sans aucune relâche, jamais. (On vous fera grâce d'un diagramme)</p>
    <p>Il y a un nom pour ce type de situation. Ça s'appelle un gâchis.</p>

    <h2>Comment pouvez-vous nettoyer ce gâchis ?</h2>
    <p>La première chose à faire, c'est d'admettre honnêtement que la situation vous a échappé. Ce qui permet d'y remédier sans trop se sentir coupable. D'accord, c'est arrivé, vous ne pensiez que c'était le mieux, mais il est possible de repartir sur de bonnes bases.</p>
    <p>Cela pourrait impliquer un changement organisationnel dans une approche IT mais il faut également se rappeler que les systèmes et les applications ne sont pas créés simplement pour pousser les données. Ils sont destinés à porter un soutien aux processus commerciaux, indépendamment de la nature de votre entreprise, des opérations bancaires, des enregistrements audio, des dispositifs de radiorepérage, tout.</p>
    <p>Une fois clairement défini, vous pouvez commencer à penser à construire ou redessiner vos systèmes autours des services.</p>
    <p>Un service est quelque chose d'intéressant, réutilisable et atomique offert par un système pour d'autres applications disposées à en faire bon usage, mais n'est jamais directement exposé de bout en bout. C'est la définition la plus claire et courte possible.</p>
    <p>Si une fonctionnalité donnée d'un système satisfait ces 3 exigences, c'est-à-dire, si c'est :</p>
    <ul>
        <li><p><strong>I</strong>ntéressant</p></li>
        <li><p><strong>R</strong>éutilisable</p></li>
        <li><p><strong>A</strong>tomique</p></li>
    </ul>
    <p>Alors, il est fort probable qu'il pourrait et devrait être exposé comme un service pour d'autres systèmes, mais jamais directement.</p>
    <p>Examinons cette approche IRA à travers quelques exemples.</p>
    <table class="table">
        <thead>
        <tr>
            <th>Variable</th>
            <th>Remarques</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Environnement</td>
            <td>Un CRM d'une société d'électricité</td>
        </tr>
        <tr>
            <td>Fonctionnalité</td>
            <td>Renvoyer une liste de clients actifs sur self-service portal le troisième trimestre 2022</td>
        </tr>
        <tr>
            <td>Est-il intéressant ?</td>
            <td>Oui. Assez intéressant. Cela peut servir à générer toutes sortes de rapports utiles et des statistiques.</td>
        </tr>
        <tr>
            <td>Est-il réutilisable ?</td>
            <td>Non, pas vraiment. Bien qu'il permette de créer des éléments de plus haut niveaux, tel que des statistiques pour toute l'année, il est clair que ce ne sera pas nécessaire en 2028.</td>
        </tr>
        <tr>
            <td>Est-il atomique?</td>
            <td>Le plus probable est oui. S'il y a d'autres services similaires pour d'autres trimestres, il sera possible d'avoir une idée de toute l'année.</td>
        </tr>
        <tr>
            <td>Comment le faire IRA ?</td>
            <td>1) Faites-le accepter un début et une fin quelconque au lieu de le limiter à seulement un trimestre.
                2) Faites-le accepter d'autres applications, pas uniquement le portail, laissez l'application qui vous intéresse être un paramètre d'entrée, il ne peut pas être programmé que pour le portail.</td>
        </tr>
        </tbody>
    </table>

<table class="table">
    <thead>
    <tr>
        <th>Variable</th>
        <th>Remarques</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Environnement</td>
        <td>Site e-commerce</td>
    </tr>
    <tr>
        <td>Fonctionnalité</td>
        <td>Renvoyer toutes les informations recueillies concernant un client précis</td>
    </tr>
    <tr>
        <td>Est-il intéressant ?</td>
        <td>Eh bien oui. Si vous avez accès à tout ça vous pouvez toujours choisir ce dont vous avez réellement besoin.</td>
    </tr>
    <tr>
        <td>Est-il réutilisable ?</td>
        <td>Pas exactement. Il n'y aura qu'une poignée d'applications, qui seront intéressées par chaque élément des données.</td>
    </tr>
    <tr>
        <td>Est-il atomique?</td>
        <td>Certainement pas. Cette énorme fonctionnalité est sans nul doute logiquement constituée de dizaines de plus petits éléments.</td>
    </tr>
    <tr>
        <td>Comment le faire IRA ?</td>
        <td>1) Divisez éléments distincts. Pensez à ce qui caractérise un client : ils ont leurs adresses, téléphones, produits préférés, les méthodes de contact, ils préfèrent, etc. Chacun d'entre eux devrait être transformé en service indépendant.
            2) Utilisez un ESB pour créer des services “composites” de ces atomiques.</td>
    </tr>
    </tbody>
</table>

<table class="table">
    <thead>
    <tr>
        <th>Variable</th>
        <th>Remarques</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Environnement</td>
        <td>N'importe quel CRM, où qu'il soit</td>
    </tr>
    <tr>
        <td>Fonctionnalité</td>
        <td>Mis à jour d'une colonne "CUST_AR_ZN" dans un tableau C_NAZ_AJ après la création d'un compte</td>
    </tr>
    <tr>
        <td>Est-il intéressant ?</td>
        <td>Pas du tout. C'est une fonction interne de CRM. En toute cohérence, personne ne veut faire face à tel faible niveau de fonctionnalité.</td>
    </tr>
    <tr>
        <td>Est-il réutilisable ?</td>
        <td>Oui, probablement. Un compte peut être créé à travers de multiples canaux alors ça semble réutilisable.</td>
    </tr>
    <tr>
        <td>Est-il atomique ?</td>
        <td>Probablement, oui. Ce n'est qu'une simple mise à jour d'une colonne dans un tableau.</td>
    </tr>
    <tr>
        <td>Comment le faire IRA ?</td>
        <td>N'essayez même pas de le transformer en service. Ce n'est pas très intéressant. Personne n'aime à penser à des colonnes et tableaux particuliers dans un système.
            C'est un détail complexe de CRM, donc même s'il est réutilisable et atomique, vous ne devriez pas offrir un service par-dessus.
            C'est votre responsabilité, le responsable du CRM, d'y réfléchir, ne le mettez pas également sur les épaules de quelqu’un d'autre.</td>
    </tr>
    </tbody>
</table>

<table class="table">
    <thead>
    <tr>
        <th>Variable</th>
        <th>Remarques</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Environnement</td>
        <td>Opérateur mobile</td>
    </tr>
    <tr>
        <td>Fonctionnalité</td>
        <td>Rechargement d'une carte prépayée dans un système de facturation</td>
    </tr>
    <tr>
        <td>Est-il intéressant ?</td>
        <td>Extrêmement. Tout le monde veut l'utiliser à travers des SMS, IVR, IM, portails, des cartes-cadeaux, etc.</td>
    </tr>
    <tr>
        <td>Est-il réutilisable ?</td>
        <td>Très réutilisable, il peut participer à toutes sortes de processus supérieur</td>
    </tr>
    <tr>
        <td>Est-il atomique?</td>
        <td>Oui, du point de vue de l'application d'appel, il peut ou non recharger une carte.
            Peu importe que le système de facturation mette en place cette fonctionnalité par une série d'étapes.
            Du point de vue commercial, c'est un service atomique et indivisible offert par un système de facturation.</td>
    </tr>
    <tr>
        <td>Comment le faire IRA ?</td>
        <td>C'est déjà IRA.</td>
    </tr>
    </tbody>
</table>

<p>Si vous avez fait de la programmation dans les 50 dernières années, il est désormais tout à fait clair qu'exposer un service, c'est précisément comme exposer un API d'une partie d'un code à un autre.</p>
<p>La seule différence, c'est qu'il ne s'agit pas de sous modules d'un seul système, vous opérez sur un niveau d'environnement complet de systèmes variés.</p>

<h2>Mise à disposition de services sur ESB dans un SOA</h2>

<p>Maintenant que vous savez que les systèmes n'échangent pas des informations directement et que vous comprenez ce que ça veut dire service, vous pouvez commencer à utiliser un ESB.</p>

<p>
    <img alt="" src="https://upcdn.io/kW15bqq/raw/root/en/docs/3.2/gfx/api/intro/esb-ok-abg4.png">
</p>

<p>C'est maintenant le rôle de l'ESB d'exposer et d'invoquer des services des systèmes intégrés.
    Ainsi, dans la plupart des cas, vous avez seulement un mode d’accès, une interface, et doit être clairement défini entre chaque système et ESB.</p>
    <p>Si, comme l'indique le schéma ci-dessus, vous avez 8 systèmes, il y aura 16 interfaces (une dans chaque sens) à créer, entretenir, gérer et s'occuper.</p>
    <p>Sans ESB, il y aurait 56 interfaces à penser et traiter (supposant que chaque système se parle).</p>
    <p>40 interfaces de moins, cela signifie moins de temps perdu et plus d'argent économisé. C'est une des raisons pour laquelle les vendredis seront moins tendu.</p>
    <p>Ce seul fait doit vous faire fortement envisager l'introduction d'un ESB.</p>
    <p>Si le système subit une réécriture, changement de propriétaire, qu'il est divisé entre des départements ou vendeurs, ce sera aux responsables de l'ESB de se conformer aux changements. Aucun des autres systèmes ne le remarquera parce que leur interface avec ESB sera inchangée.</p>
    <p>Quand vous commencez à travailler avec des services IRA quotidiennement, vous pouvez commencer à penser à des composites.</p>
    <p>Vous souvenez-vous de ce type de service ci-dessus "pouvez-vous me donner tout ce que vous pourrez sur ce client" ?</p>
    <p>Ce n'était pas une bonne idée de le créer, mais il faut parfois traiter les applications client qui nécessitent des informations agrégées et résumées. Ce sera aux responsables de l'ESB de choisir les meilleurs services atomiques et créer un composite pour ce système particulier de client, nécessitant cette base de données composite.</p>
    <p>Avec le temps toute l'entreprise va commencer à comprendre qu'il ne s'agit plus de tables de base données, fichiers, séries, fonctions, routines ou archives.</p>
    <p>Il sera question d'architecture centrée sur des services d'application intéressants, réutilisables et atomiques proposés auprès de l'ESB.</p>
    <p>Les gens ne penseront plus que les applications et le système envoie des choses réciproquement. Ils considèreront qu'il s'agit du point d’accès universel aux services intéressant dont leurs propres systèmes peuvent profiter.</p>
    <p>Et ils ne se soucieront pas de quel système fournit les informations, leur système communiquera seulement avec l'ESB.</p>
    <p>Tout ceci demande du temps, de la patience et de la coordinnation, mais c'est très faisable.</p>

<h2>Il faut cependant faire attention à ...</h2>

<p>La meilleure façon de ruiner toute l'idée de SOA est de mettre en œuvre l'ESB et pensez que les choses vont se lisser elles-mêmes. Tout en étant une très bonne idée, installer simplement un ESB ne fera pas tout, malheureusement.</p>
    <p>Dans le meilleur cas, tout injecter tel quel dans l'ESB, comme dans le schéma ci-dessous, n'accomplira rien.</p>
    <p>
        <img alt="" src="https://upcdn.io/kW15bqq/raw/root/en/docs/3.2/gfx/api/intro/esb-mess-abg4.png">
    </p>
    <p>Vos informaticiens vont détester le système et la direction va au début tolérer un ESB comme un petit nouveau, mais plus tard, il se couvrira de ridicule.</p>
    <p>“Quoi, cette nouvelle solution miracle ? Hahaha”.</p>
    <p>Ces conséquences sont inévitables si un ESB ne fait pas partie d'un plus grand projet et de faire réellement évoluer les choses.</p>

<h2>L'ESB est-il uniquement pour les banques and entreprises similaires ?</h2>

<p>Non. Pas du tout. C'est un bon choix en toutes situations qui nécessitent de multiples ressources de données, des méthodes d'accès multiples, pour coopérer afin d'atteindre un résultat intéressant.</p>
    <p>Par exemple, saisir les dernières variantes de détecteurs thermiques et les publier en plusieurs canaux, comme les alertes par courriel et une application iPhone semble une bonne situation pour une plate-forme d'intégration.</p>
    <p>Consulter et surveiller périodiquement si des applications critiques sont en alarme et dans ce cas, exécuter un script préconfiguré qui envoie un SMS aux administrateurs semble également une bonne situation.</p>
    <p>Tout ce qui doit être intégré dans un environnement propre et bien défini est probablement une bonne réponse pour un ESB mais comme toujours, décider si quelque chose est réellement une réponse s'en va suivra d'une expérience propre de chacun. Naturellement, <a href="/en/services/index.html">les auteurs de Zato</a> peuvent aider.</p>

<h2>Mais j'ai entendu que SOA, ça veut dire XML, SOAP et les services de web</h2>
    <p>Oui, c'est-ce que certaines personnes voudraient que vous pensiez.</p>
    <p>Si les gens ou vendeurs avec qui vous avez travaillé ont fait d'opérations, comme encoder un fichier CSV en BASE64 et vous l'ont envoyé via un message SAML2-SOAP sécurisé alors, il est tout à fait compréhensible que vous ayez cette impression.</p>
    <p>XML, SOAP et les WebServuces ont leur utilité, mais comme toute autre chose, ils peuvent être utilisés à mauvais escient.</p>
    <p>SOA est une architecture propre et gérable. Le fait qu'un service particulier puisse ou non utiliser SOAP n'est pas pertinent. Il s'agit d'une approche d'architecture, SOA sera encore valide même si aucun service SOAP n'est utilisé.</p>
    <p>Quand un architecte conçoit un beau bâtiment, il n'est pas vraiment en mesure de faire grand chose par rapport à la couleur de la peinture, les gens choisissent leur intérieur.</p>
    <p>Donc non, SOA n'est pas que XML, SOAP et WebServices. Ils peuvent aussi être utilisés, mais ce n'est pas tout.</p>
    <p>Nous vous conseillons de transmettre cet article à vos collègues pour leur faire comprendre le vrai sens de SOA.</p>

<h2>Et ce n'est pas fini</h2>

<p>Ce chapitre donne les éléments de base, mais devrait néanmoins vous permettre de bien comprendre comment ESB et SOA devraient être et ce qui est nécessaire à la réussite.</p>
    <p>D'autres sujets, non traités ici, comprennent, mais non exclusivement :</p>
    <ul>
        <li>Comment obtenir le soutien de la direction pour un ESB.</li>
        <li>Comment rassembler les architectes SOA et des équipes analytiques.</li>
        <li>Introduire Canonical Data Model (CDM) dans une entreprise.</li>;
        <li>Les principaux indicateurs de performance (KPI) - maintenant que vous avez une méthode commune et unifiée en fournissant des services entre les systèmes, il faut commencer la surveillance et évaluation de ce qui vous est fourni.</li>
        <li>Gestion des processus commerciaux (BPM) - comment et quand choisir une plateforme BPM pour mettre en œuvre des services (réponse - pas trop tôt, il faut bien se familiariser avec le développement des services bien construit au début)</li><li>Que faire avec des systèmes qui n'ont pas d'API ? Par exemple – si un ESB accède à une base de données directement (réponse – ça dépend, il n'y a pas de règle d'or).</li>
-->

