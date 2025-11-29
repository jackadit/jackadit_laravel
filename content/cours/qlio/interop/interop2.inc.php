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
$sNavigation = navigation('interop', '2'); ?>




<h1>Modèle d’architecture en couches</h1>

<h2>Présentation</h2>

<p>Une architecture en couche est un modèle d'architecture logicielle dans lequel les différentes fonctionnalités d'un système sont séparées en couches distinctes, chacune fournissant des services ou des fonctionnalités spécifiques. Les couches communiquent entre elles via des interfaces standardisées.</p>

<p>Dans une architecture en couche typique, les couches sont empilées les unes sur les autres, chaque couche offrant un niveau d'abstraction plus élevé que la précédente. La couche inférieure est généralement responsable de la gestion des ressources matérielles et de la communication avec les périphériques, tandis que les couches supérieures fournissent des services plus abstraits et orientés métier.</p>

<p>Les avantages d'une architecture en couche incluent une meilleure modularité, une plus grande évolutivité et une plus grande facilité de maintenance. Les différentes couches peuvent être développées indépendamment les unes des autres, ce qui facilite la mise à jour ou le remplacement de l'une ou plusieurs d'entre elles sans affecter les autres couches. De plus, la séparation des préoccupations entre les couches peut faciliter la compréhension et la conception de chaque couche, ce qui peut rendre le développement plus efficace.</p>

    <p>Les exemples courants d'architecture en couches incluent le modèle <strong>OSI</strong> (Open Systems Interconnection) pour les réseaux informatiques, le modèle <strong>MVC</strong> (Modèle-Vue-Contrôleur) pour les applications Web et le <strong>modèle trois-tiers</strong> pour les applications d'entreprise.</p>


<h2>Le modèle OSI</h2>

<p>Si vous comprenez le modèle OSI et ses couches, vous pouvez également comprendre quels protocoles et quels dispositifs peuvent interagir entre eux quand de nouvelles technologies sont développées et quand elles arrivent sur le marché.</p>

<img src="/assets/img/qlio/interop/couchesOSI.png" alt="les 7 couches du modèle OSI" />

<p>Le modèle OSI est un modèle conceptuel qui caractérise et normalise la façon dont différents composants logiciels et matériels impliqués dans une communication réseau doivent diviser le travail et interagir les uns avec les autres. Il contient sept couches. Vous pouvez voir les noms et fonctions de base de chaque couche dans la figure suivante.</p>

<img src="/assets/img/qlio/interop/interactionsOSI.png" alt="interactions du modèle OSI" />
<p>Voici les principes qui ont conduit à ces 7 couches :</p>
<ol>
	<li>Une couche doit être créée lorsqu’un nouveau niveau d’abstraction est nécessaire.</li>
	<li>Chaque couche a des fonctions bien définies.</li>
	<li>Les fonctions de chaque couche doivent être choisies dans l’objectif de la normalisation internationale des protocoles.</li>
	<li>Les frontières entre couches doivent être choisies de manière à minimiser le flux d’information aux interfaces.</li>
	<li>Le nombre de couches doit être tel qu’il n’y ait pas cohabitation de fonctions très différentes au sein d’une même couche et que l’architecture ne soit pas trop difficile à maîtriser..</li>
</ol>

<p>Les couches basses (1, 2, 3 et 4) sont nécessaires à l’acheminement des informations entre les extrémités concernées et dépendent du support physique.</p>
<p>Les couches hautes (5, 6 et 7) sont responsables du traitement de l’information relative à la gestion des échanges entre systèmes informatiques.</p>
<p>Par ailleurs, les couches 1 à 3 interviennent entre machines voisines, et non entre les machines d’extrémité qui peuvent être séparées par plusieurs routeurs.</p>
<p>Les couches 4 à 7 sont au contraire des couches qui n’interviennent qu’entre hôtes distants.</p>

<p>Le modèle OSI est conceptuel, mais sa conception permet une communication à la fois physique et virtuelle sur un réseau. Nous allons commencer par la couche 1, qui est la couche la plus basse de la pile.</p>

<img src="/assets/img/qlio/interop/protocoles_OSI.png" alt="Protocoles rattachés au modèle OSI" />
<p></p>


<h3>Couche 1 OSI - physique</h3>
<img src="/assets/img/qlio/interop/OSI_couche1-physique.png" alt="Couche 1 OSI - physique" />
<p>La couche physique décrit les caractéristiques électriques, logiques et physiques du système, c'est-à-dire de tous les composants, depuis le type de câble jusqu'à la liaison par radiofréquence (comme dans les systèmes sans fil 802.11), en passant par la disposition des broches, les tensions et autres exigences physiques.</p>

<p>C'est également la couche où les données sont converties en une séquence binaire, qui est une chaîne de 1 et de 0.
La couche physique des deux périphériques doit également convenir d'une convention de signal afin que les 1 puissent être distinguées des 0 sur les deux périphériques.</p>

<p>Cette couche est l'un des aspects de la transmission réseau où les normes sont essentielles. Sans normes, la transmission entre les appareils de différents fabricants est impossible.</p>

<p>En cas de problème de réseau, les professionnels des réseaux commencent souvent par vérifier la couche physique pour s'assurer que tous les câbles sont correctement connectés et que, par exemple, la fiche d'alimentation n'a pas été retirée du routeur, du commutateur ou de l'ordinateur.</p>

    <h4>Fonctionnement de la Couche Physique</h4>
    <p>La couche physique est la première couche du modèle OSI et elle est responsable de la transmission et de la réception des bits bruts sur un support de communication.</p>
    <p>Voici quelques aspects clés de cette couche :</p>

    <ol>
    <li><strong>Transmission des Signaux :</strong></li>
        <ul>
            <li>La couche physique convertit les données numériques en signaux électriques, optiques ou radio selon le type de support utilisé.</li>
            <li>Par exemple, dans un câble en cuivre (comme un câble Ethernet), les bits sont représentés par des variations de tension électrique. Dans la fibre optique, les bits sont représentés par des impulsions de lumière.</li>
        </ul>

    <li><strong>Médias de Transmission :</strong></li>
        <ul>
            <li>Câbles en cuivre (Ethernet, coaxial)</li>
            <li>Fibres optiques (utilisées pour des transmissions à haute vitesse et à longue distance)</li>
            <li>Radiofréquences (Wi-Fi, Bluetooth)</li>
            <li>Ondes infrarouges (télécommandes, certaines applications IoT)</li>
        </ul>

    <li><strong>Topologies de Réseau :</strong></li>
        <ul>
            <li>La couche physique détermine comment les dispositifs sont connectés physiquement entre eux. Les topologies courantes incluent la topologie en étoile (commutateurs et concentrateurs), la topologie en bus (réseaux plus anciens) et la topologie en anneau.</li>
        </ul>

    <li><strong>Synchronisation :</strong></li>
        <ul>
            <li>La couche physique s'assure que l'émetteur et le récepteur sont synchronisés pour que les bits soient correctement interprétés. Cela peut inclure l'utilisation de horloges pour maintenir le timing.</li>
        </ul>
    <li><strong>Modulation et Encodage :</strong></li>
        <ul>
            <li>Les techniques de modulation (comme AM, FM, QAM) et d'encodage (comme Manchester, NRZ) sont utilisées pour convertir les bits en signaux adaptés au support de transmission.</li>
            <li>Par exemple, dans la modulation d'amplitude (AM), la hauteur de l'onde porteuse est modifiée pour représenter les données.</li>
        </ul>
    <li><strong>Débit de Données :</strong></li>
        <ul>
            <li>La couche physique détermine le débit de transmission, c'est-à-dire combien de bits peuvent être transmis par seconde (bps). Les débits peuvent varier de quelques kilobits par seconde (kbps) pour les anciennes technologies à plusieurs gigabits par seconde (Gbps) pour les fibres optiques modernes.</li>
        </ul>

    </ol>

<h4>Exemples</h4>
    <ol>
        <li><strong>Câble Ethernet :</strong></li>
        <ul>
            <li>Un câble Ethernet typique utilise des paires torsadées de fils de cuivre. Les bits sont transmis sous forme de variations de tension. Les différents standards Ethernet (comme 10BASE-T, 100BASE-TX, 1000BASE-T) déterminent le débit de transmission allant de 10 Mbps à 1 Gbps et plus.</li>
        </ul>
        <li><strong>Transmission Wi-Fi :</strong></li>
        <ul>
            <li>Le Wi-Fi utilise des signaux radio pour transmettre les données. La couche physique gère des aspects comme la fréquence de la radio (2,4 GHz, 5 GHz), la modulation (OFDM) et la puissance de transmission pour assurer une communication sans fil efficace.</li>
        </ul>
        <li><strong>Fibre Optique :</strong></li>
        <ul>
            <li>Dans une fibre optique, les données sont transmises par des impulsions lumineuses à travers un câble en verre ou en plastique. La couche physique gère les émetteurs-récepteurs optiques qui convertissent les signaux électriques en lumière et vice versa.</li>
        </ul>
    </ol>

    <h4>Processus de Transmission :</h4>

    <p>Imaginons qu'on envoie un fichier via un câble Ethernet :</p>
    <ol>
        <li><strong>Encodage</strong> : Votre ordinateur convertit les bits du fichier en signaux électriques selon un schéma d'encodage spécifique.</li>
        <li><strong>Transmission</strong> : Ces signaux électriques sont transmis à travers les paires torsadées du câble Ethernet.</li>
        <li><strong>Réception</strong> : Le dispositif récepteur (par exemple, un routeur ou un autre ordinateur) reçoit les signaux électriques.</li>
        <li><strong>Décodage</strong> : Le dispositif récepteur convertit ensuite les signaux électriques en bits de données qu'il peut traiter.</li>
    </ol>

<h3>Couche 2 OSI - liaisons de données</h3>
<img src="/assets/img/qlio/interop/OSI_couche2-liaison_donnees.png" alt="Couche 2 OSI - liaisons de données" />
<p>La couche liaison est très similaire à la couche réseau, sauf que la couche liaison facilite le transfert de données entre deux périphériques sur le même réseau.</p>

<p>
La couche liaison prend les paquets de la couche réseau et les divise en fragments plus petits appelés trames. 
La couche de liaison de données assure le transfert entre nœuds - un lien entre deux nœuds directement connectés. Elle gère l'encapsulation et la décapsulation des données dans les trames.</p>

<p>Elle définit le protocole permettant d'établir et de terminer une connexion entre deux dispositifs physiquement connectés, tel que le protocole point à point (PPP).</p>

<p>La couche de liaison de données est généralement divisée en deux sous-couches :</p>
<ul>
	<li>La couche de contrôle d'accès aux médias (MAC) chargée de contrôler la façon dont les appareils d'un réseau accèdent à un support et sont autorisés à transmettre des données.</li>
	<li>La couche de contrôle de liaison logique (LLC ) est responsable de l'identification et de l'encapsulation des protocoles de la couche réseau, et contrôle la vérification des erreurs et la synchronisation des trames.</li>
</ul>

<p>À l'instar de la couche réseau, la couche liaison est également responsable du contrôle des flux et des erreurs dans les communications intra-réseau (la couche transport n’effectue que le contrôle des flux et des erreurs pour les communications inter-réseaux).</p>

<p>L’unité d’information de la couche liaison de données est la trame qui est composées de quelques centaines à quelques milliers d’octets maximum.</p>

<p>Dans le monde des réseaux, la plupart des commutateurs fonctionnent au niveau de la couche 2.</p>

    <h4>Fonctionnement de la Couche Liaison de Données</h4>
    <p>La couche liaison de données (Data Link Layer) est la deuxième couche du modèle OSI. Elle a pour rôle principal de fournir une communication fiable entre deux dispositifs directement connectés sur le même réseau physique. Elle est responsable de la détection et de la correction des erreurs qui peuvent survenir au niveau de la couche physique et de l'organisation des données en trames (frames).</p>

    <p>La couche liaison de données est elle-même souvent divisée en deux sous-couches :</p>
    <ul>
        <li><strong>La sous-couche de contrôle de liaison logique (LLC - Logical Link Control)</strong> : Elle gère l'interaction avec la couche réseau supérieure et fournit des services comme le contrôle de flux et la gestion des erreurs.</li>
        <li><strong>La sous-couche de contrôle d'accès au média (MAC - Media Access Control)</strong> : Elle gère l'accès au support de transmission et l'adresse physique (adresse MAC) des dispositifs.</li>
    </ul>

    <h4>Fonctions Principales :</h4>
    <ol>
        <li><strong>Encapsulation des Données en Trames</strong> :</li>
            <ul>
                <li>Les données provenant de la couche réseau sont encapsulées en trames. Chaque trame comprend des informations de contrôle (comme les adresses MAC source et destination) et une séquence de bits de données.</li>
            </ul>
        <li><strong>Contrôle d'Accès au Média (MAC)</strong> :</li>
            <ul>
                <li>La sous-couche MAC détermine comment les dispositifs sur le réseau partagent le support de transmission. Par exemple, dans un réseau Ethernet, le protocole CSMA/CD (Carrier Sense Multiple Access with Collision Detection) est utilisé pour gérer les collisions de données.</li>
            </ul>
        <li><strong>Adressage Physique</strong> :</li>
            <ul>
                <li>Chaque dispositif sur un réseau local possède une adresse MAC unique, généralement codée en dur dans la carte réseau (NIC). Cette adresse est utilisée pour identifier les dispositifs à la couche liaison de données.</li>
                <li>Exemple : Une adresse MAC typique pourrait ressembler à 00:1A:2B:3C:4D:5E.</li>
            </ul>
        <li><strong>Détection et Correction d'Erreurs</strong> :</li>
            <ul>
                <li>La couche liaison de données inclut des mécanismes pour détecter et parfois corriger les erreurs de transmission. Les trames contiennent des champs de contrôle d'erreur comme le CRC (Cyclic Redundancy Check).</li>
                <li>Si une trame est reçue avec des erreurs, elle peut être rejetée et une retransmission peut être demandée.</li>
            </ul>
        <li><strong>Contrôle de Flux</strong> :</li>
            <ul>
                <li>La couche LLC peut gérer le contrôle de flux pour éviter que l'émetteur n'envoie des données trop rapidement pour que le récepteur puisse les traiter.</li>
            </ul>
    </ol>

    <h4>Exemples</h4>
    <ol>
        <li><strong>Ethernet</strong> :</li>
        <ul>
            <li>Dans un réseau Ethernet, les données sont encapsulées en trames Ethernet. Chaque trame contient une adresse MAC source et destination, un champ de type de protocole (pour indiquer si les données transportées sont IPv4, IPv6, etc.), les données utiles, et un champ de contrôle d'erreur (CRC).</li>
        </ul>
        <li><strong>Wi-Fi</strong> :</li>
        <ul>
            <li>Le Wi-Fi utilise également des trames pour les communications sans fil. La gestion de l'accès au média est plus complexe en raison de la nature partagée du support radio. Le protocole CSMA/CA (Carrier Sense Multiple Access with Collision Avoidance) est utilisé pour réduire les collisions.</li>
        </ul>
    </ol>


    <h4>Processus de Transmission :</h4>

    <p>Imaginons qu'on envoie un fichier à une imprimante connectée à votre réseau local :</p>
    <ol>
        <li><strong>Encapsulation</strong> : Votre ordinateur encapsule les données du fichier en trames Ethernet.</li>
        <li><strong>Ajout d'Adresses MAC</strong> : Chaque trame inclut l'adresse MAC de votre ordinateur (source) et celle de l'imprimante (destination).</li>
        <li><strong>Contrôle d'Accès</strong> : Si vous utilisez un réseau Ethernet, le protocole CSMA/CD s'assure qu'il n'y a pas de collision de données sur le câble.</li>
        <li><strong>Transmission</strong> : Les trames sont transmises sur le réseau physique.</li>
        <li><strong>Réception et Vérification</strong> : L'imprimante reçoit les trames, vérifie les erreurs à l'aide du CRC, et extrait les données utiles si aucune erreur n'est détectée.</li>
    </ol>


   <h4>Exemple avec un Switch :</h4>
    <p>Un switch Ethernet travaille principalement à la couche liaison de données. Il utilise les adresses MAC pour acheminer les trames aux bons ports :</p>
    <ol>
        <li><strong>Table de Commutation</strong> : Le switch maintient une table de commutation (table CAM) avec les adresses MAC et les ports associés.</li>
        <li><strong>Acheminement des Trames</strong> : Lorsqu'il reçoit une trame, il consulte la table de commutation pour déterminer le port de destination et envoie la trame uniquement à ce port, réduisant ainsi le trafic sur les autres segments du réseau.</li>
    </ol>


<h3>Couche 3 OSI - réseau</h3>
<img src="/assets/img/qlio/interop/OSI_couche3-reseau.png" alt="Couche 3 OSI - réseau" />
<p>C'est au niveau de la couche réseau que se trouvent la plupart des fonctionnalités du routeur. Elle est très surveillée par les professionnels des réseaux.</p>

<p>La couche réseau est chargée de faciliter le transfert de données entre deux réseaux différents.</p>

<p>Si les deux périphériques en communication sont sur le même réseau, la couche réseau est inutile.</p>

<p>La couche réseau divise les segments de la couche transport en unités plus petites, appelées paquets, sur le périphérique de l'expéditeur et réassemble ces paquets sur le périphérique récepteur. La couche réseau trouve également le meilleur chemin physique pour que les données atteignent leur destination ; c'est ce qu'on appelle le routage.</p>

<p class="notice exemple">Pour transférer des données entre un serveur situé à Paris et votre ordinateur, le destinataire est connu, mais des millions de chemins différents sont possibles. Les routeurs de cette couche permettent justement de les mettre en relation le plus efficacement.</p>

    <h4>Fonctionnement de la Couche Réseau</h4>
    <p>La couche réseau (Network Layer) est la troisième couche du modèle OSI. Elle est responsable de l'acheminement des paquets de données entre les dispositifs situés sur des réseaux différents. Cette couche gère l'adressage logique, le routage des paquets, et le contrôle de la congestion.</p>

    <h4>Fonctions Principales :</h4>
    <ol>
        <li><strong>Adressage Logique</strong> :</li>
        <ul>
            <li>La couche réseau utilise des adresses logiques pour identifier de manière unique chaque dispositif sur un réseau. Dans le cas de l'Internet, ces adresses sont des adresses IP (Internet Protocol).</li>
            <li>Exemple : Une adresse IPv4 typique pourrait être 192.168.1.1, tandis qu'une adresse IPv6 pourrait ressembler à 2001:0db8:85a3:0000:0000:8a2e:0370:7334.</li>
        </ul>
        <li><strong>Routage</strong> :</li>
        <ul>
            <li>Le routage consiste à déterminer le chemin optimal pour acheminer les paquets de données depuis la source jusqu'à la destination à travers différents réseaux.</li>
            <li>Les routeurs sont les dispositifs principaux utilisés à cette couche pour lire les adresses IP des paquets et décider où les envoyer ensuite.</li>
        </ul>
        <li><strong>Fragmentation et Réassemblage</strong> :</li>
        <ul>
            <li>Lorsque les paquets traversent différents réseaux avec des tailles de trame maximales (MTU - Maximum Transmission Unit) différentes, ils peuvent être fragmentés en morceaux plus petits. La couche réseau s'assure que ces fragments sont réassemblés correctement à la destination.</li>
        </ul>
        <li><strong>Contrôle de la Congestion</strong> :</li>
        <ul>
            <li>La couche réseau peut mettre en œuvre des mécanismes pour éviter la congestion du réseau, par exemple en limitant le taux de transmission de certains paquets ou en signalant les conditions de congestion aux dispositifs émetteurs.</li>
        </ul>
    </ol>

    <h4>Exemples</h4>
    <ol>
        <li><strong>Protocole IP (Internet Protocol) :</strong></li>
        <ul>
            <li>IP est le protocole le plus couramment utilisé à la couche réseau. Il existe en deux versions principales : IPv4 et IPv6.</li>
            <li>IPv4 utilise des adresses de 32 bits, tandis qu'IPv6 utilise des adresses de 128 bits pour permettre un plus grand nombre d'adresses uniques.</li>
        </ul>
        <li><strong>Routeurs :</strong></li>
        <ul>
            <li>Les routeurs sont des dispositifs de la couche réseau qui relient différents réseaux entre eux. Ils analysent les adresses IP des paquets entrants et utilisent des tables de routage pour déterminer le meilleur chemin pour chaque paquet.</li>
            <li>Exemple : Un routeur à domicile connecte votre réseau domestique à votre fournisseur d'accès Internet (FAI). Il décide où envoyer les paquets de données en fonction des adresses IP de destination.</li>
        </ul>
    </ol>

<h4> Processus de Transmission :</h4>
    <p>Imaginons qu'on envoie une requête web à un serveur situé sur un autre réseau :</p>
    <ol>
        <li>Encapsulation : La requête est encapsulée en un paquet IP avec l'adresse IP de votre ordinateur comme source et l'adresse IP du serveur web comme destination.</li>
        <li>Routage Initial : Votre routeur domestique reçoit le paquet, consulte sa table de routage, et décide de l'envoyer à la passerelle par défaut (probablement un routeur de votre FAI).</li>
        <li>Routers Intermédiaires : Le paquet traverse plusieurs routeurs intermédiaires. Chaque routeur examine l'adresse IP de destination et utilise ses tables de routage pour décider du prochain saut.</li>
        <li>Fragmentation (si nécessaire) : Si le paquet doit traverser un réseau avec une MTU plus petite, il est fragmenté en morceaux plus petits. Ces fragments sont réassemblés par le dispositif de destination.</li>
        <li>Arrivée au Serveur : Le paquet arrive finalement au serveur web. La couche réseau du serveur extrait les informations de la couche supérieure (couche transport) pour traiter la requête.</li>
    </ol>

    <h4>Exemple avec un Traceroute :</h4>

    <p>L'outil traceroute montre comment les paquets voyagent à travers différents routeurs pour atteindre une destination. Chaque "saut" dans le résultat de traceroute représente un routeur intermédiaire qui a reçu et retransmis les paquets.</p>
    <ol>
        <li><strong>Exécution de Traceroute</strong> : Vous exécutez la commande traceroute www.example.com.</li>
        <li><strong>Affichage des Sauts</strong> : L'outil envoie plusieurs paquets avec des TTL (Time To Live) croissants. Chaque routeur qui reçoit un paquet avec un TTL de 1 le décrémente, le paquet expire, et le routeur renvoie un message ICMP "Time Exceeded" à l'expéditeur.</li>
        <li><strong>Suivi du Chemin</strong> : Vous voyez chaque routeur intermédiaire sur le chemin vers www.example.com, avec les délais de réponse correspondants.</li>
    </ol>


<h3>Couche 4 OSI - transport</h3>
<img src="/assets/img/qlio/interop/OSI_couche4-transport.png" alt="Couche 4 OSI - transport" />
<p>La couche transport s'occupe de la coordination du transfert de données entre les systèmes finaux et les hôtes. 
Elle gère la quantité de données à envoyer, le rythme, la destination, etc. </p>

<p>Lorsque des données sont transférées sur un réseau, elles ne sont pas transférées en un seul paquet.</p>

<p>Pour rendre les transferts plus efficaces et plus rapides, la couche transport divise les données en segments plus petits. Ces petits segments contiennent des informations d'en-tête qui peuvent être réassemblées sur le périphérique cible.
Les données segmentées sont également dotées d'un contrôle d'erreur qui indique à la couche session de rétablir une connexion si les paquets ne sont pas entièrement transférés au destinataire cible.</p>

<p>La couche réseau trouve également le meilleur chemin physique pour que les données atteignent leur destination ; c'est ce qu'on appelle le routage.</p>

<p class="notice exemple">L'exemple le plus connu de la couche transport est celui du protocole de contrôle de transmission (TCP), lui-même construit sur le protocole Internet (IP), communément appelé TCP/IP. Les numéros de port TCP et UDP fonctionnent au niveau de la couche 4, tandis que les adresses IP fonctionnent au niveau de la couche 3, la couche réseau.</p>

    <h4>Fonctionnement de la Couche Transport</h4>

    <p>La couche transport (Transport Layer) est la quatrième couche du modèle OSI. Elle est responsable de la gestion de la communication de bout en bout entre les dispositifs. Cette couche assure que les données sont transmises de manière fiable, en ordre, et sans erreur entre les applications exécutées sur des hôtes différents.</p>

    <h4>Fonctions Principales :</h4>

    <ol>
        <li><strong>Segmentation et Réassemblage :</strong></li>
        <ul>
            <li>La couche transport segmente les données provenant de la couche session en morceaux plus petits appelés segments (ou datagrammes, selon le protocole utilisé) pour les transmettre à la couche réseau.</li>
            <li>À la destination, ces segments sont réassemblés dans le bon ordre pour reconstituer les données initiales.</li>
        </ul>
        <li><strong>Contrôle de Flux :</strong></li>
        <ul>
            <li>La couche transport gère le contrôle de flux pour éviter que l'émetteur n'envoie des données plus rapidement que le récepteur ne peut les traiter.</li>
            <li>Par exemple, les protocoles comme TCP utilisent des fenêtres glissantes pour gérer le flux de données.</li>
        </ul>
        <li><strong>Fiabilité et Contrôle d'Erreur :</strong></li>
        <ul>
            <li>Pour assurer la fiabilité, la couche transport utilise des mécanismes de détection et de correction d'erreurs.</li>
            <li>Par exemple, TCP utilise des accusés de réception (ACK) et des retransmissions en cas de perte de segments.</li>
        </ul>
        <li><strong>Multiplexage/Démultiplexage :</strong></li>
        <ul>
            <li>La couche transport permet à plusieurs applications de partager la même connexion réseau en utilisant des numéros de ports. Chaque segment contient des numéros de port source et destination pour identifier les applications spécifiques.</li>
            <li>Exemple : Le port 80 est généralement utilisé pour le trafic HTTP, tandis que le port 443 est utilisé pour le trafic HTTPS.</li>
        </ul>
    </ol>

    <h4>Protocole Principal :</h4>
    <ol>
        <li><strong>TCP (Transmission Control Protocol) :</strong></li>
        <ul>
            <li>TCP est un protocole orienté connexion qui assure une communication fiable et ordonnée. Il établit une connexion avant de commencer la transmission des données.</li>
            <li>Exemple : Lors de la visite d'un site web, une connexion TCP est établie entre votre navigateur et le serveur web pour assurer que toutes les ressources (HTML, CSS, images) sont transmises correctement.</li>
        </ul>
        <li><strong>UDP (User Datagram Protocol) :</strong></li>
        <ul>
            <li>UDP est un protocole non orienté connexion qui ne garantit pas la fiabilité ou l'ordre des segments. Il est plus rapide que TCP mais moins fiable.</li>
            <li>Exemple : Les applications en temps réel comme les jeux en ligne ou les appels VoIP utilisent souvent UDP parce qu'elles nécessitent une faible latence et peuvent tolérer une certaine perte de données.</li>
        </ul>
    </ol>

    <h4>Processus de Transmission :</h4>
    <p>Imaginons qu'on envoie un fichier via FTP (qui utilise TCP) :</p>
    <ol>
        <li><strong>Établissement de la Connexion :</strong></li>
        <ul>
            <li>TCP utilise un processus de "handshake" en trois étapes pour établir une connexion entre le client et le serveur.</li>
            <li>SYN : Le client envoie un segment SYN pour initier la connexion.</li>
            <li>SYN-ACK : Le serveur répond avec un segment SYN-ACK pour accuser réception et synchroniser.</li>
            <li>ACK : Le client envoie un segment ACK pour terminer l'établissement de la connexion.</li>
        </ul>
        <li><strong>Segmentation :</strong></li>
        <ul>
            <li>Le fichier est segmenté en morceaux plus petits. Chaque segment reçoit un numéro de séquence.</li>
        </ul>
        <li><strong>Transmission :</strong></li>
        <ul>
            <li>Les segments sont transmis à la couche réseau pour l'acheminement.</li>
        </ul>
        <li><strong>Accusés de Réception et Réassemblage :</strong></li>
        <ul>
            <li>Le serveur envoie des accusés de réception (ACK) pour chaque segment reçu. Si un segment manque, le client le retransmet.</li>
            <li>Les segments sont réassemblés dans le bon ordre pour reconstituer le fichier.</li>
        </ul>
        <li><strong>Fermeture de la Connexion :</strong></li>
        <ul>
            <li>Une fois la transmission terminée, TCP utilise un processus de "handshake" en quatre étapes pour fermer la connexion.</li>
            <li>FIN : Le client envoie un segment FIN pour indiquer la fin de la transmission.</li>
            <li>ACK : Le serveur répond avec un segment ACK.</li>
            <li>FIN : Le serveur envoie un segment FIN.</li>
            <li>ACK : Le client répond avec un segment ACK pour terminer la fermeture.</li>
        </ul>
    </ol>










    <h4>Exemple avec une Connexion HTTP :</h4>
    <ol>
        <li><strong>Établissement de la Connexion :</strong></li>
        <ul>
            <li>Votre navigateur envoie un segment SYN au serveur web pour établir une connexion TCP.</li>
            <li>Le serveur répond avec un segment SYN-ACK.</li>
            <li>Votre navigateur envoie un segment ACK pour compléter le "handshake".</li>
        </ul>
        <li><strong>Transmission de la Requête :</strong></li>
        <ul>
            <li>Votre navigateur envoie une requête HTTP encapsulée dans un segment TCP.</li>
        </ul>
        <li><strong>Réception de la Réponse :</strong></li>
        <ul>
            <li>Le serveur web envoie la réponse HTTP (par exemple, le code HTML de la page) en segments TCP.</li>
            <li>Votre navigateur accuse réception de chaque segment et réassemble les segments pour afficher la page web.</li>
        </ul>
    </ol>

<h3>Couche 5 OSI - session</h3>
<img src="/assets/img/qlio/interop/OSI_couche5-session.png" alt="Couche 5 OSI - session" />
<p>Il s’agit de la couche responsable de l’ouverture et de la fermeture de la communication entre les deux appareils. L’intervalle entre l’ouverture et la fermeture de la communication est appelé session. Elle réalise le lien entre les adresses logiques et les adresses physiques des tâches réparties.</p>

<p>La couche de session garantit que la session reste ouverte suffisamment longtemps pour transférer toutes les données échangées, puis ferme rapidement la session afin d’éviter le gaspillage de ressources. Elle établit également une liaison entre deux programmes d’application devant coopérer et commande leur dialogue (qui doit parler, qui parle…). Dans ce dernier cas, ce service d’organisation s’appelle la gestion du jeton.</p>

<p>La couche de session synchronise également le transfert de donnée. Elle permet ainsi d’insérer des points de reprise dans le flux de données de manière à pouvoir reprendre le dialogue après une panne.</p>

<p class="notice exemple">Par exemple, si un fichier de 100 mégaoctets est transféré, la couche de session peut définir un point de contrôle tous les 5 mégaoctets. Dans le cas d’une déconnexion ou d’un plantage après le transfert de 52 mégaoctets, la session pourra être reprise à partir du dernier point de contrôle, ce qui signifie que seulement 50 mégaoctets de données supplémentaires devront être transférés. Sans les points de contrôle, tout le transfert devrait reprendre à zéro.</p>

    <h4>Fonctionnement de la Couche Session</h4>
    <p>La couche session (Session Layer) est la cinquième couche du modèle OSI. Elle est responsable de l'établissement, de la gestion et de la terminaison des sessions entre les applications. Une session est une communication continue entre deux dispositifs, qui peut inclure plusieurs échanges de données.</p>

    <h4>Fonctions Principales :</h4>
    <ol>
        <li><strong>Établissement de la Session :</strong></li>
        <ul>
            <li>La couche session établit une session de communication entre deux applications. Cela inclut l'authentification des utilisateurs et la négociation des paramètres de la session.</li>
            <li>Exemple : Lorsqu'un client se connecte à un serveur pour une session de transfert de fichiers, la couche session gère l'établissement de cette connexion.</li>
        </ul>
        <li><strong>Gestion de la Session :</strong></li>
        <ul>
            <li>Une fois la session établie, cette couche assure le maintien de la session, la synchronisation des échanges de données, et le contrôle des dialogues.</li>
            <li>La couche session peut également gérer des points de synchronisation pour permettre la reprise en cas d'interruption.</li>
            <li>Exemple : Dans une session de vidéoconférence, la couche session assure que les flux audio et vidéo sont synchronisés.</li>
        </ul>
        <li><strong>Contrôle du Dialogue :</strong></li>
        <ul>
            <li>La couche session définit qui parle à quel moment. Elle peut gérer les communications en mode full-duplex (les deux parties peuvent envoyer et recevoir simultanément) ou half-duplex (une seule partie peut envoyer ou recevoir à un moment donné).</li>
            <li>Exemple : Un protocole de session de chat peut permettre aux utilisateurs de communiquer de manière ordonnée, gérant qui peut envoyer des messages à quel moment.</li>
        </ul>
        <li><strong>Terminaison de la Session :</strong></li>
        <ul>
            <li>La couche session clôt les sessions de manière ordonnée. Elle s'assure que toutes les données ont été correctement transmises et accuse réception de la fin de la session.</li>
            <li>Exemple : À la fin d'un transfert de fichiers, la session est terminée proprement pour libérer les ressources.</li>
        </ul>
    </ol>

    <h4>Exemples</h4>
    <ol>
        <li><strong>RPC (Remote Procedure Call) :</strong></li>
        <ul>
            <li>RPC est un exemple de protocole de la couche session. Il permet à un programme d'exécuter une procédure (ou une fonction) sur un autre dispositif distant.</li>
            <li>Exemple : Une application client peut appeler une fonction sur un serveur pour obtenir des données ou effectuer une opération.</li>
        </ul>
        <li><strong>NetBIOS (Network Basic Input/Output System) :</strong></li>
        <ul>
            <li>NetBIOS est un autre exemple de protocole de la couche session, utilisé pour la communication dans les réseaux locaux.</li>
            <li>Il permet aux applications sur différents ordinateurs de se communiquer sur un réseau local.</li>
        </ul>
    </ol>

    <h4>Processus de Transmission :</h4>
    <p>Imaginons qu'on utilise un service de vidéoconférence :</p>

    <ol>
        <li><strong>Établissement de la Session :</strong></li>
        <ul>
            <li>Lorsque vous démarrez une vidéoconférence, la couche session établit une session entre votre application de vidéoconférence et celle de votre interlocuteur.</li>
            <li>Cela peut inclure l'authentification des utilisateurs et la négociation des paramètres de la session (comme la qualité vidéo).</li>
        </ul>
        <li><strong>Synchronisation des Flux :</strong></li>
        <ul>
            <li>Pendant la vidéoconférence, la couche session assure que les flux audio et vidéo sont synchronisés.</li>
            <li>Elle peut également gérer les points de contrôle pour permettre la reprise de la session en cas d'interruption.</li>
        </ul>
        <li><strong>Gestion de la Communication :</strong></li>
        <ul>
            <li>La couche session gère le contrôle du dialogue, assurant que les deux parties peuvent échanger des données de manière ordonnée.</li>
            <li>Si vous parlez tous les deux en même temps, la couche session peut gérer comment les flux sont priorisés pour éviter une cacophonie.</li>
        </ul>
        <li><strong>Terminaison de la Session :</strong></li>
        <ul>
            <li>Une fois la vidéoconférence terminée, la couche session clôt la session de manière ordonnée.</li>
            <li>Elle s'assure que toutes les données ont été correctement transmises et libère les ressources utilisées pour la session.</li>
        </ul>
    </ol>

    <h4>Exemple avec une Session FTP :</h4>
    <p>Imaginons que vous transférez un fichier via FTP (File Transfer Protocol), qui utilise les services de la couche session :</p>

    <ol>
        <li><strong>Établissement de la Session :</strong></li>
        <ul>
            <li>Vous lancez une connexion FTP avec un serveur. La couche session gère l'authentification et l'établissement de la connexion.</li>
            <li>Par exemple, vous fournissez un nom d'utilisateur et un mot de passe pour accéder au serveur FTP.</li>
        </ul>
        <li><strong>Transfert de Fichiers :</strong></li>
        <ul>
            <li>Pendant le transfert de fichiers, la couche session maintient la session active et gère les points de contrôle. Si la connexion est interrompue, elle peut reprendre le transfert à partir du dernier point de contrôle.</li>
            <li>La couche session assure également que les fichiers sont transférés de manière ordonnée et sans conflit.</li>
        </ul>
        <li><strong>Terminaison de la Session :</strong></li>
        <ul>
            <li>Une fois le transfert de fichiers terminé, la couche session clôt la session FTP.</li>
            <li>Elle s'assure que toutes les données ont été correctement transférées et libère les ressources.</li>
        </ul>
    </ol>

<h3>Couche 6 OSI - présentation</h3>
<img src="/assets/img/qlio/interop/OSI_couche6-presentation.png" alt="Couche 6 OSI - présentation" />
<p>Cette couche s’intéresse à la syntaxe et à la sémantique des données transmises : c’est elle qui traite l’information de manière à la rendre compatible entre tâches communicantes.</p>

<p>Elle va assurer l’indépendance entre l’utilisateur et le transport de l’information.
Typiquement, cette couche peut convertir les données, les reformater, les crypter et les compresser.</p>

<p>En général, c'est au niveau de cette couche qu'est effectuée la préparation ou la traduction du format d'application au format de réseau, ou du format de réseau au format d'application.</p>

<p>En d'autres termes, la couche « présente », c'est-à-dire formate les données pour l'application ou le réseau.</p>

<p class="notice exemple">Un bon exemple de fonction de la couche 6, c'est le cryptage et le décryptage des données pour une transmission sécurisée, ou encore la compression des données.</p>


    <h4>Fonctionnement de la Couche Présentation</h4>
    <p>La couche présentation (Presentation Layer) est la sixième couche du modèle OSI. Elle est responsable de la traduction des données entre le format utilisé par l'application et le format standardisé pour la transmission sur le réseau. Cette couche gère également des fonctions telles que la compression, le chiffrement, et la conversion de formats de données.</p>

    <h4>Fonctions Principales :</h4>
    <ol>
        <li><strong>Traduction de Données :</strong></li>
        <ul>
            <li>La couche présentation convertit les données d'un format utilisé par l'application en un format standardisé pour la transmission, et vice versa.</li>
            <li>Exemple : Conversion des caractères d'un format de texte ASCII en un format de texte Unicode.</li>
        </ul>
        <li><strong>Compression de Données :</strong></li>
        <ul>
            <li>Elle peut compresser les données pour réduire la taille des paquets à transmettre, ce qui améliore l'efficacité du réseau.</li>
            <li>Exemple : Compression des images ou des fichiers avant leur envoi sur le réseau pour accélérer le transfert et économiser de la bande passante.</li>
        </ul>
        <li><strong>Chiffrement et Déchiffrement :</strong></li>
        <ul>
            <li>La couche présentation peut chiffrer les données avant leur transmission pour assurer la confidentialité et les déchiffrer à la réception.</li>
            <li>Exemple : Utilisation du protocole TLS (Transport Layer Security) pour chiffrer les communications HTTP, transformant HTTP en HTTPS.</li>
        </ul>
    </ol>

    <h4>Exemples</h4>
    <ol>
        <li><strong>Protocole SSL/TLS :</strong></li>
        <ul>
            <li>SSL (Secure Sockets Layer) et TLS (Transport Layer Security) sont des protocoles qui assurent le chiffrement et la sécurité des communications sur le réseau.</li>
            <li>Exemple : Lorsqu'un navigateur web accède à un site web via HTTPS, SSL/TLS est utilisé pour chiffrer les données échangées.</li>
        </ul>
        <li><strong>Formats de Fichiers :</strong></li>
        <ul>
            <li>La couche présentation gère les formats de fichiers et les conversions nécessaires.</li>
            <li>Exemple : Conversion de fichiers graphiques entre différents formats (JPEG, PNG, GIF).</li>
        </ul>
        <li><strong>Compression de Données :</strong></li>
        <ul>
            <li>Protocoles de compression comme gzip ou zlib qui réduisent la taille des données à transmettre.</li>
            <li>Exemple : Compression des pages web avant leur envoi pour améliorer les temps de chargement des sites web.</li>
        </ul>
    </ol>

    <h4>Processus de Transmission :</h4>
    <p>Imaginons qu'on envoie un fichier texte via une application de messagerie sécurisée :</p>
    <ol>
        <li><strong>Traduction de Données :</strong></li>
        <ul>
            <li>Le fichier texte, qui est en format ASCII, est converti en un format Unicode standardisé pour la transmission.</li>
            <li>Cela permet de s'assurer que les caractères spéciaux ou non-ASCII sont correctement interprétés par le destinataire.</li>
        </ul>
        <li><strong>Compression :</strong></li>
        <ul>
            <li>Le fichier texte est compressé pour réduire sa taille avant la transmission. Cela économise de la bande passante et accélère le transfert.</li>
        </ul>
        <li><strong>Chiffrement :</strong></li>
        <ul>
            <li>Avant d'envoyer le fichier, il est chiffré pour assurer la confidentialité. Le chiffrement utilise un protocole comme TLS pour sécuriser les données.</li>
        </ul>
        <li><strong>Transmission :</strong></li>
        <ul>
            <li>Les données chiffrées et compressées sont transmises sur le réseau via les couches inférieures (transport, réseau, etc.).</li>
        </ul>
        <li><strong>Déchiffrement et Décompression :</strong></li>
        <ul>
            <li>À la réception, la couche présentation du destinataire déchiffre les données en utilisant la clé appropriée.</li>
            <li>Les données sont ensuite décompressées pour retrouver leur taille et leur format d'origine.</li>
        </ul>
        <li><strong>Traduction Inverse :</strong></li>
        <ul>
            <li>Enfin, le fichier texte est converti de Unicode à ASCII pour être utilisé par l'application de messagerie du destinataire.</li>
        </ul>
    </ol>

    <h4>Exemple avec une Connexion HTTPS :</h4>
    <ol>
        <li><strong>Établissement de la Connexion :</strong></li>
        <ul>
            <li>Lorsque vous accédez à un site web via HTTPS, votre navigateur et le serveur web établissent une connexion sécurisée à l'aide de TLS.</li>
            <li>Cela inclut la négociation des clés de chiffrement et l'établissement d'un canal sécurisé.</li>
        </ul>
        <li><strong>Chiffrement des Données :</strong></li>
        <ul>
            <li>Les données échangées entre votre navigateur et le serveur web sont chiffrées pour assurer leur confidentialité.</li>
            <li>Par exemple, les données de formulaire que vous soumettez sur une page web sont chiffrées avant d'être envoyées au serveur.</li>
        </ul>
        <li><strong>Déchiffrement des Données :</strong></li>
        <ul>
            <li>Le serveur web déchiffre les données reçues et les traite comme nécessaire (par exemple, enregistrement des informations dans une base de données).</li>
        </ul>
        <li><strong>Réponse du Serveur :</strong></li>
        <ul>
            <li>Le serveur web envoie une réponse chiffrée à votre navigateur, contenant les informations demandées (par exemple, le contenu d'une page web).</li>
            <li>Votre navigateur déchiffre la réponse et l'affiche sous forme lisible.</li>
        </ul>
    </ol>


<h3>Couche 7 OSI - application</h3>
<img src="/assets/img/qlio/interop/OSI_couche7-application.png" alt="Couche 7 OSI - application" />
<p>La couche 7 est la plus connue car elle communique directement avec l'utilisateur.
Une application qui s'exécute sur un appareil peut communiquer avec d'autres couches OSI, mais l'interface fonctionne sur la couche 7.</p>

<p class="notice exemple">Par exemple, un client de messagerie qui transfère des messages entre le client et le serveur fonctionne sur la couche 7.</p>

<p>Lorsqu'un message est reçu sur le logiciel client, c'est la couche application qui le présente à l'utilisateur.
Les protocoles d'application comprennent :</p>
<ul>
	<li>DNS (Domain Name System) : Le système de noms de domaine traduit les noms de domaine lisibles par l'homme (par exemple www.jackadit.com) en adresses IP lisibles par une machine (par exemple, 192.0.2.44).</li>
	<li>FTP (File Transfert Protocol) : Le protocole de transfert de fichiers.</li>
	<li>HTTP (HyperText Transfert Protocol) : C’est le protocole de communication entre les navigateurs et les serveurs Web.</li>
	<li>IMAP (Internet Message Access Protocol) : C’est un protocole de messagerie standard (RFC 3501) qui permet à un utilisateur de lire et de manipuler ses messages comme s'ils étaient stockés localement sur son périphérique, alors qu'ils sont physiquement stockés sur un serveur de messagerie.</li>
	<li>POP (Post Office Protocol) : C’est le protocole de récupération de courrier électronique.</li>
	<li>SMTP (Simple Mail Transfer Protocol) : C’est le protocole de transfert de courrier simple.</li>
	<li>SNMP (Simple Network Management Protocol) : C’est un protocole de communication qui permet aux administrateurs réseau de gérer les équipements du réseau, de superviser et de diagnostiquer des problèmes réseaux et matériels à distance.</li>
	<li>Telnet (une émulation de terminal) : C’est un protocole de réseau d'application qui permet à l'utilisateur de communiquer avec un ordinateur distant via une interface en mode texte.</li>
</ul>

<div class="notice exemple">
<p>Comment les données circulent dans le modèle OSI ?</p>

<p>Afin de permettre le transfert d'informations lisibles par l'homme d'un appareil à un autre sur le réseau, les données doivent circuler de la couche 7 vers la couche 1 depuis l'expéditeur, puis de la couche 1 vers la couche 7 sur le périphérique destinataire.</p>

<p>L'exemple le plus simple de flux de communication à travers le modèle OSI est une application de messagerie électronique.
Lorsqu'un expéditeur clique sur “Envoyer” dans application de messagerie électronique, celle-ci envoie le message à la couche de présentation à l'aide d'un protocole défini (SMTP pour le courrier électronique sortant). La couche présentation compresse les données et envoie le message à la couche session, qui ouvre une session pour la communication entre le dispositif de l'expéditeur et le serveur sortant.</p>

<p>Le message est envoyé à la couche de transport où les données sont segmentées, puis la couche réseau divise les segments en paquets. Ensuite, les paquets sont envoyés de la couche réseau à la couche liaison de données, où les paquets sont encore décomposés en trames. Les trames sont envoyées à la couche physique où les données sont converties en flux binaires de 1 et de 0 et transférées sur un support comme des connexions sans fil ou des câbles.</p>

<p>Lorsque le message atteint le destinataire, le processus est inversé.
Tout d’abord, la couche physique convertira le flux binaire des 1 et des 0 en trames qui seront transmises à la couche de liaison de données. Celle-ci ira ensuite réassembler les trames en paquets pour la couche réseau. 
Puis la couche réseau créera des segments à partir des paquets pour la couche de transport, qui réassemblera les segments en une seule donnée.</p>

<p>Les données seront ensuite transférées à la couche de session du récepteur, qui les transmettra à la couche de présentation, puis mettra fin à la session de communication.</p>

<p>La couche de présentation supprimera alors la compression et transmettra les données brutes à la couche applicative.
Cette dernière alimentera ensuite les données lisibles par l’homme dans le logiciel de messagerie.</p>
</div>


   <h4>Fonctionnement de la Couche Application</h4>
    <p>La couche application (Application Layer) est la septième et dernière couche du modèle OSI. Elle est la plus proche de l'utilisateur final et est responsable de fournir des services réseau directement aux applications de l'utilisateur.</p>
    <p>Cette couche facilite diverses fonctions réseau, telles que le transfert de fichiers, les communications par courriel, la navigation web, et bien plus.</p>

    <h4>Fonctions Principales :</h4>
    <ol>
        <li><strong>Interface Utilisateur :</strong></li>
        <ul>
            <li>La couche application fournit une interface pour que les applications puissent interagir avec le réseau.</li>
            <li>Exemple : Un navigateur web permettant aux utilisateurs d'accéder à des sites web via HTTP ou HTTPS.</li>
        </ul>
        <li><strong>Services de Réseau :</strong></li>
        <ul>
            <li>Elle offre des services spécifiques à des applications, tels que le transfert de fichiers, la gestion de courriels, et l'accès à des bases de données.</li>
            <li>Exemple : Un client de messagerie électronique utilisant SMTP pour envoyer des emails et IMAP ou POP3 pour les recevoir.</li>
        </ul>
        <li><strong>Gestion de Sessions :</strong></li>
        <ul>
            <li>Bien que la couche session gère les sessions, la couche application peut initier et terminer les sessions de communication.</li>
            <li>Exemple : Un logiciel de vidéoconférence initie une session pour une réunion en ligne.</li>
        </ul>
        <li><strong>Gestion de Données :</strong></li>
        <ul>
            <li>La couche application est responsable de la gestion des formats de données spécifiques à l'application.</li>
            <li>Exemple : Un logiciel de traitement de texte peut utiliser des protocoles réseau pour synchroniser des documents avec un service de stockage cloud.</li>
        </ul>
    </ol>

    <h4>Exemples</h4>
    <ol>
        <li><strong>HTTP/HTTPS (Hypertext Transfer Protocol/Secure) :</strong></li>
        <ul>
            <li>Utilisé pour la navigation web, HTTP/HTTPS permet aux navigateurs de demander et de recevoir des pages web et autres ressources.</li>
            <li>Exemple : Lorsque vous accédez à une page web, votre navigateur utilise HTTP ou HTTPS pour récupérer et afficher le contenu.</li>
        </ul>
        <li><strong>FTP (File Transfer Protocol) :</strong></li>
        <ul>
            <li>Utilisé pour le transfert de fichiers entre un client et un serveur.</li>
            <li>Exemple : Un client FTP vous permet de télécharger ou télécharger des fichiers vers et depuis un serveur FTP.</li>
        </ul>
        <li><strong>SMTP/IMAP/POP3 (Simple Mail Transfer Protocol/Internet Message Access Protocol/Post Office Protocol 3) :</strong></li>
        <ul>
            <li>Utilisés pour l'envoi et la réception de courriels.</li>
            <li>Exemple : Un client de messagerie utilise SMTP pour envoyer des emails et IMAP ou POP3 pour récupérer les emails du serveur.</li>
        </ul>
        <li><strong>DNS (Domain Name System) :</strong></li>
        <ul>
            <li>Utilisé pour la résolution de noms de domaine en adresses IP.</li>
            <li>Exemple : Lorsque vous tapez "www.example.com" dans votre navigateur, DNS résout ce nom de domaine en une adresse IP pour établir une connexion avec le serveur web.</li>
        </ul>
    </ol>


    <h4>Processus de Transmission :</h4>
    <p>Prenons l'exemple de l'accès à un site web via HTTP/HTTPS :</p>
    <ol>
        <li><strong>Initiation de la Requête :</strong></li>
        <ul>
            <li>Vous entrez l'URL "http://www.example.com" dans votre navigateur.</li>
            <li>Le navigateur crée une requête HTTP pour demander la page web.</li>
        </ul>
        <li><strong>Résolution DNS :</strong></li>
        <ul>
            <li>Le navigateur interroge un serveur DNS pour résoudre "www.example.com" en une adresse IP.</li>
            <li>La couche application utilise le protocole DNS pour obtenir l'adresse IP correspondante.</li>
        </ul>
        <li><strong>Établissement de la Connexion :</strong></li>
        <ul>
            <li>Le navigateur établit une connexion TCP avec le serveur à l'adresse IP obtenue.</li>
            <li>Si HTTPS est utilisé, une connexion sécurisée est établie via TLS.</li>
        </ul>
        <li><strong>Envoi de la Requête :</strong></li>
        <ul>
            <li>Le navigateur envoie la requête HTTP au serveur web pour demander la page web.</li>
            <li>Exemple de requête : GET /index.html HTTP/1.1</li>
        </ul>
        <li><strong>Réception de la Réponse :</strong></li>
        <ul>
            <li>Le serveur web traite la requête et renvoie une réponse HTTP contenant le contenu de la page web.</li>
            <li>Exemple de réponse : HTTP/1.1 200 OK</li>
        </ul>
        <li><strong>Affichage de la Page Web :</strong></li>
        <ul>
            <li>Le navigateur reçoit la réponse, interprète le contenu (HTML, CSS, JavaScript), et affiche la page web à l'utilisateur.</li>
        </ul>
    </ol>

    <h4>Exemple avec un Client de Messagerie :</h4>
    <ol>
        <li><strong>Envoi d'un Email :</strong></li>
        <ul>
            <li>Vous rédigez un email et cliquez sur "Envoyer".</li>
            <li>Le client de messagerie utilise SMTP pour envoyer l'email au serveur de messagerie.</li>
        </ul>
        <li><strong>Récupération des Emails :</strong></li>
        <ul>
            <li>Vous lancez votre client de messagerie pour vérifier les nouveaux emails.</li>
            <li>Le client utilise IMAP ou POP3 pour récupérer les emails du serveur de messagerie.</li>
        </ul>
        <li><strong>Gestion des Emails :</strong></li>
        <ul>
            <li>Le client de messagerie affiche les emails reçus, permet de les lire, de les organiser, et d'y répondre.</li>
        </ul>
    </ol>

<h2>Le Modèle TCP/IP</h2>

<p>Le modèle TCP/IP est également un modèle de référence en couches, mais c'est un modèle à quatre couches. Il est également connu sous le nom de "suite de protocoles Internet”. Il est généralement appelé TCP/IP parce que les protocoles de base sont TCP et IP, mais ce ne sont pas les seuls protocoles utilisés dans ce modèle.</p>

<h3>Couche d’Application</h3>
<p>La couche d’application du modèle TCP/IP permet aux applications la d’accéder aux services des autres couches, et détermine les protocoles que les applications utilisent pour échanger des données. Les protocoles de couche d'application les plus connus sont HTTP, FTP, SMTP, Telnet, DNS, SNMP et Routing Information Protocol (RIP).</p>

<h3>Couche de Transport</h3>
<p>La couche transport, également connue comme la couche transport hôte-à-hôte, est chargée de fournir à la couche application des services de communication de session et de datagramme. Les protocoles de base de cette couche sont TCP et UDP. TCP fournit un service de communication fiable de dispositif à dispositif et axé sur la connexion. Il est responsable de la séquence et reconnaissance de réception des paquets envoyés, et récupération des paquets perdus en transmission. UDP fournit un service de communication sans connexion et peu fiable de dispositif à dispositif ou dispositif à plusieurs dispositifs. UDP est généralement utilisé lorsqu’il y a une faible quantité de données à transférer (par exemple, lorsque les données peuvent tenir dans un seul paquet).</p>

<h3>Couche Internet</h3>
<p>La couche Internet est responsable des fonctions d'adressage, du conditionnement et de routage des hôtes. Les principaux protocoles de la couche de protocole Internet sont IP, Protocole de résolution d'adresse (ARP), Protocole de message de contrôle Internet (ICMP) et protocole de gestion de groupe Internet (IGMP). IP est un protocole routable responsable de l'adressage IP, du routage, de la fragmentation et du réassemblage des paquets. ARP est responsable de la découverte des adresses de la couche d'accès au réseau telles que les adresses matérielles associées à une couche d'accès Internet déterminée. ICMP est chargé de fournir des fonctions de diagnostic et de signaler les erreurs provoquées par une mauvaise livraison de paquets IP. IGMP est responsable de la gestion des groupes de multidiffusion (Multicast) IP. Dans cette couche, l'IP ajoute un en-tête aux paquets, qui est connu comme adresse IP. Il existe maintenant une adresse IPv4 (32 bits) et une adresse IP Ipv6 (128 bits).</p>

<img src="/assets/img/qlio/interop/ipv4_ipv6.png" alt="Adresse IPv4 et IPv6" />

<h3>Couche Accès Réseau</h3>
<p>La couche d'accès réseau (ou couche de liaison) est responsable de placer et de recevoir les paquets TCP/IP dans et en dehors du support réseau. TCP/IP est conçu pour être indépendant de la méthode d'accès au réseau, du format de trame et du support. En d'autres termes, il est indépendant de toute technologie de réseau spécifique. De cette façon, TCP/IP peut être utilisé pour connecter différents types de réseaux, tels que l’Ethernet, Token Ring, et Asynchronous Transfer Mode (ATM).</p>

<h3>Traitement pendant la transmission</h3>
<p>Dans un système en couches, les dispositifs d'une couche échangent des données dans un format différent, qui est connue sous le nom d'unité de données de protocole (PDU). Le tableau ci-dessous montre les PDU dans différentes couches.</p>

<table class="table">
	<thead>
		<tr>
			<th>Type de modèle</th>
			<th>Couches OSI</th>
			<th>Unité des données du protocole (PDU)</th>
			<th>Couches TCP/IP</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td rowspan="4">Couches hôte</td>
			<td>Couche d'application</td>
			<td rowspan="3">Données</td>
			<td>Couche d'application</td>
		</tr>
		<tr>
			<td>Couche de présentation</td>
			<td>Couche de session</td>
		</tr>
		<tr>
			<td>Couche de session</td>
			<td>Application</td>
		</tr>
		<tr>
			<td>Couche transport</td>
			<td>Segment (TCP) / Datagramme (UDP)</td>
			<td>Couche transport</td>
		</tr>
		<tr>
			<td rowspan="3">Couches média</td>
			<td>Couche réseau</td>
			<td>Paquet</td>
			<td>Couche Internet</td>
		</tr>
		<tr>
			<td>Couche de liaison de données</td>
			<td>Trames</td>
			<td rowspan="2">Couche d'accès réseau</td>
		</tr>
		<tr>
			<td>Couche physique</td>
			<td>Bit</td>
		</tr>
	</tbody>
</table>

<p class="notice exemple">Par exemple, lorsqu'un utilisateur demande à naviguer sur un site Web sur l'ordinateur, le logiciel du serveur à distance donne d’abord les données demandées à la couche application, où elles sont traitées de couche en couche, chaque couche remplissant ses fonctions désignées. Les données sont ensuite transmises sur la couche physique du réseau jusqu'à ce que le serveur de destination ou un autre périphérique les reçoive. À ce stade, les données sont à nouveau transmises à travers les couches, chaque couche effectuant ses opérations assignées jusqu'à ce que les données soient utilisées par le logiciel récepteur.</p>

<img src="/assets/img/qlio/interop/couchesTCP-IP.png" alt="Couches TCP/IP" />

<p>Pendant la transmission, chaque couche ajoute un en-tête, ou pied de page, ou les deux au PDU provenant de la couche supérieure, qui dirige et identifie le paquet. Ce processus s'appelle l'encapsulation. L'en-tête (et le pied de page) et les données forment ensemble le PDU pour la couche suivante. Le processus se poursuit jusqu'à atteindre la couche du plus bas niveau (couche physique ou couche d'accès au réseau), à partir duquel les données sont transmises au dispositif de réception. Le dispositif de réception inverse le processus, désencapsulant les données à chaque couche avec les informations d'en-tête et de pied de page dirigeant les opérations. Ensuite, l'application utilise enfin les données. Le processus se poursuit jusqu'à ce que toutes les données soient transmises et reçues.</p>

<h2>TCP/IP et OSI : dépannage</h2>
<p>Avec la connaissance de la division des couches, nous pouvons diagnostiquer le problème en cas d'échec d'une connexion. Le principe est de vérifier à partir du niveau le plus bas, plutôt qu’à partir du niveau le plus élevé. Parce que chaque couche sert pour la couche supérieure à celle-ci, et il sera plus facile de traiter les problèmes de couche inférieure. Par exemple, si votre ordinateur ne peut pas se connecter à Internet, la première chose que vous devez faire est de vérifier si le câble réseau est branché sur votre ordinateur, ou si le point d'accès sans fil (WAP) est connecté au commutateur, ou si les broches des connecteurs RJ45 sont en bon état.</p>

<h2>Modèle TCP/IP vs. Modèle OSI</h2>
<p>Le modèle TCP/IP est plus ancien que le modèle OSI. La figure suivante montre les relations correspondantes entre leurs couches.</p>

<img src="/assets/img/qlio/interop/modele_OSI_TCP-IP.png" alt="Modèle OSI vs. TCP/IP" />

<p>En comparant les couches du modèle TCP/IP et du modèle OSI, la couche d’application du modèle TCP/IP est similaire aux couches OSI 5, 6 et 7 combinées, mais le modèle TCP/IP n'a pas de couche de présentation ou couche de session distincte. La couche de transport de TCP/IP englobe les responsabilités de la couche de transport OSI et certaines des responsabilités de la couche de session OSI. La couche d'accès au réseau du modèle TCP/IP englobe la liaison de données et les couches physiques du modèle OSI. Notez que la couche Internet du protocole TCP/IP ne profite pas des services de séquençage et d'acquittement qui pourraient être présents dans la couche de liaison de données du modèle OSI. La responsabilité est à la couche de transport dans le modèle TCP/IP.</p>
<p>Compte tenu de la signification des deux modèles de référence, le modèle OSI n'est qu'un modèle conceptuel. Il est principalement utilisé pour la description, la discussion et la compréhension des fonctions individuelles des réseaux. Cependant, TCP/IP est d'abord conçu pour résoudre un ensemble spécifique de problèmes, et non pour fonctionner comme une description de génération pour toutes les communications réseau en tant que modèle OSI. Le modèle OSI est générique, indépendant du protocole, mais la plupart des protocoles et des systèmes y adhèrent, tandis que le modèle TCP/IP est basé sur des protocoles standard que l'Internet a développés. Une autre chose à noter dans le modèle OSI est que toutes les couches ne sont pas utilisées dans des applications plus simples. Alors que les couches 1, 2, 3 sont obligatoires pour toute communication de données, l'application peut utiliser une couche d'interface unique à l'application au lieu des couches supérieures habituelles du modèle.</p>
<p>Conclusion</p>
<p>Le modèle TCP/IP et le modèle OSI sont tous deux des modèles conceptuels utilisés pour la description de toutes les communications réseau, tandis que TCP/IP lui-même est également un protocole important utilisé dans toutes les opérations Internet. Généralement, lorsqu'on parle de la couche 2, de la couche 3 ou de la couche 7 dans laquelle un périphérique réseau fonctionne, nous faisons référence au modèle OSI. Le modèle TCP/IP est utilisé à la fois pour modéliser l'architecture Internet actuelle et pour fournir un ensemble de règles qui sont suivies par toutes les formes de transmission sur le réseau.</p>

<h3>L’avenir du modèle OSI</h3>

<p>Au niveau de son utilisation et implémentation, et ce malgré une mise à jour du modèle en 1994, OSI a clairement perdu la guerre face à TCP/IP. Seuls quelques grands constructeurs dominants conservent le modèle mais il est amené à disparaître d’autant plus vite qu’Internet (et donc TCP/IP) explose.</p>
<p>Le modèle OSI restera cependant encore longtemps dans les mémoires pour plusieurs raisons. C’est d’abord l’un des premiers grands efforts en matière de normalisation du monde des réseaux. Les constructeurs ont maintenant tendance à faire avec TCP/IP, mais aussi le WAP, l’UMTS etc. ce qu’il devait faire avec OSI, à savoir proposer des normalisations dès le départ. OSI marquera aussi les mémoires pour une autre raison : même si c’est TCP/IP qui est concrètement utilisé, les gens ont tendance et utilisent OSI comme le modèle réseau de référence actuel. En fait, TCP/IP et OSI ont des structures très proches, et c’est surtout l’effort de normalisation d’OSI qui a imposé cette « confusion » générale entre les 2 modèles. On a communément tendance à considérer TCP/IP comme l’implémentation réelle de OSI.</p>

<img src="/assets/img/qlio/interop/wireshark1.png" alt="Trame réseau sans fil en octet" />

<img src="/assets/img/qlio/interop/wireshark2.png" alt="Trame réseau sans fil en hexadécimal" />


