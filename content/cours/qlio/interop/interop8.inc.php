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
$sNavigation = navigation('interop', '8', 'fin'); ?>




    <h1>API : une forme d’EDI en service web</h1>

    <h2>API (Application Programming Interface)</h2>

    <p>Une API est une interface par laquelle un logiciel offre des services à d’autres logiciels.</p>
    <p>Elle permet l’appel de fonctions internes à une application pour qu’un programme puisse interagir et échanger avec un autre.</p>
    <p>Lorsque cette action implique l’envoi de données par un réseau, les services web entrent en jeu.</p>
    <p>Tous les services web sont des API mais toutes les API ne sont pas des services web.</p>

    <h3>Exposer des données</h3>

    <p>Une des principales fonctionnalités qu’on retrouve quand on utilise une API est l’exposition de données.</p>
    <p>Cela signifie que les contenus d’un site (pages, articles) sont accessibles grâce à des <span class="tag--info">endpoints</span>, dans un format de données structurées.</p>
    <p>Concrètement, en se rendant à une certaine URL vous aurez les données d’un site au format JSON.</p>


    <p>A quoi cela ressemble ? Voici un exemple de l’API proposée par le site data.gouv.fr</p>
    <img src="/assets/img/qlio/interop/API_data_gouv.png" alt="fichier json exposé par l'api data.gouv.fr" />

    <h2>Web services</h2>

    <p>Un web service, ou service web en français, est un programme informatique qui permet la communication et l’échange de données entre des applications distantes, à travers Internet.</p>
    <p>Ainsi les applications peuvent dialoguer et appeler des fonctions à distance, indépendamment des plateformes et des langages sur lesquels elles reposent.</p>
    <p>Ce type de communication se base sur le principe standard des demandes et des réponses.</p>
    <p>Il s’effectue avec des messages au format XML principalement. HTTP est le protocole de communication le plus souvent utilisé.</p>

    <p>Les services web peuvent être de trois types :</p>
    <ul>
        <li>SOAP (Simple Object Access Protocol),</li>
        <li>REST (Representational State Transfer),</li>
        <li>XML-RPC.</li>
    </ul>

    <h2>Quand utiliser votre EDI en service web ?</h2>

    <p>L’EDI demeure le moyen le plus robuste et fiable pour échanger des données en masse entre des systèmes d’information différents.</p>
    <p>Avec les standards, on bénéficie d’un large choix de documents commerciaux déjà définis, en particulier dans les processus Order-to-cash, Purchase-to-pay et tout au long du cycle de la Supply Chain.</p>
    <p>Pour les entreprises travaillant avec plusieurs prestataires logistiques, le déploiement des standards EDI évite le développement d’autant de services web que de portails distants.</p>

<h3>En fonction de votre système d’information et des volumes d’échanges.</h3>

    <p>Toutefois, en fonction des volumes de données et de la disparité des systèmes impliqués, votre architecture idéale fera sans doute appel à l’échange de données informatisé complété par des services web.</p>
    <p>Certains donneurs d’ordre ne laissent pas le choix en mettant en place des portails accessibles uniquement via leurs API.</p>

    <p class="notice info">À noter : des ERP comme CEGID ou MS Dynamics disposent nativement d’API pour échanger des données avec des logiciels externes.</p>

    <p>Les services web donnent la possibilité d’effectuer des interactions globales.</p>
    <p>Ils apportent les fonctionnalités d’un portail et l’accès à de nouveaux types de transactions, souvent plus orientées utilisateurs.</p>
    <p>Optimisez votre entrepôt (WMS) et votre transport (TMS) en ouvrant votre ERP vers l’extérieur et visualisez ce qui se passe.</p>
    <p>Vous pouvez consulter toutes les informations en temps réel. Les connexions via API se font en temps réel, sans plateforme intermédiaire : la visibilité sur les données est instantanée.</p>



    <h3>EDI en service web pour gérer les exceptions</h3>


    <p>Avec l’utilisation d’une API web, vous voudrez peut-être pouvoir gérer des exceptions avec vos clients, ce qu’il est difficile de configurer en EDI.</p>
    <p>Vous pouvez aussi afficher les informations de suivi d’expédition, rendues accessibles par votre prestataire logistique via son application web.</p>
    <p>Vous avez même la possibilité de récupérer les données du portail d’un fournisseur pour créer et alimenter des statistiques de niveau de service.</p>


    <p>Conseil : l’utilisation des API d’un portail peut nécessiter de faire évoluer ses développements avec le cycle de vie du portail. Renseignez-vous auprès de votre partenaire sur les évolutions prévues à court ou moyen terme.</p>


<h2>Exemple d’utilisation avec la plateforme Chorus</h2>

    <p>Chorus PRO est le portail public de l’Etat sur lequel transiteront progressivement l’ensemble des factures électroniques à destination du service public. Il s’agit là d’un portail mutualisé, pour tous les fournisseurs et toutes les administrations publiques.</p>

    <p>L’objectif de l’Etat est de dématérialiser 100% des factures qui lui sont adressées selon un échéancier qui a démarré le premier janvier 2017 et qui s’est achevé le premier janvier 2020.</p>


<h3>En EDI classique</h3>


    <p>En mode EDI classique, les fournisseurs de la sphère publique adressent les factures dématérialisées sous forme de fichiers normalisés, et reçoivent en retour un accusé émis par Chorus.</p>


<h3>En web service</h3>


    <p>Par service web, vous obtenez en sus des informations concernant le suivi de la facture : il est possible de retrouver des factures selon une recherche multicritères, de récupérer la visualisation PDF générée par Chorus Pro et l’historique de traitement.</p>

    <p>L’API de Chorus Pro permet une remontée d’informations plus complète vers votre outil de facturation, pour un meilleur
    suivi par vos utilisateurs.</p>

    <p>Les entreprises cherchent à apporter davantage de services à leurs clients.</p>
    <p>Dans ce contexte qui tend vers des écosystèmes informatiques de plus en plus ouverts et interopérables, les services web sont certainement le meilleur moyen de connecter deux applications.</p>

