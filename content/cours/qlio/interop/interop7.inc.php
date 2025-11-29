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
$sNavigation = navigation('interop', '7'); ?>




<h1>Langages et format d’échanges</h1>

<p>Il existe plusieurs normes et protocoles d'interopérabilité utilisés dans les systèmes d'information pour faciliter la communication et l'échange de données entre différentes applications et services. Voici quelques-uns des principaux :</p>

<h2>XML (Extensible Markup Language)</h2>

<p><strong>XML (eXtensible Markup Language)</strong> est un langage de balisage utilisé pour structurer les données et permettre leur échange entre différentes applications. Il est largement utilisé dans l'interopérabilité des systèmes d'information en raison de sa capacité à décrire des données complexes de manière précise et structurée.</p>

<p class="h3-like">Exemple de mise en œuvre en logistique :</p>

<p>L'échange de données en XML (Extensible Markup Language) peut également être utilisé en logistique pour permettre une communication interopérable entre différents systèmes d'information impliqués dans la gestion de la chaîne d'approvisionnement. Voici un exemple de mise en œuvre de l'échange de données en XML en logistique :</p>
<p>Supposons qu'une entreprise de logistique, C, travaille avec un fournisseur de produits, D, pour approvisionner un client en produits. L'entreprise C utilise un système de gestion des commandes propriétaire, tandis que le fournisseur D utilise un système basé sur SAP.</p>
<p>Pour permettre une communication interopérable entre les deux systèmes, les deux entreprises peuvent échanger des données en XML. Dans ce cas, l'entreprise C enverrait une commande en XML au fournisseur D, contenant des informations sur les produits, les quantités et les délais de livraison.</p>
<p>Le fournisseur D recevrait la commande en XML et traiterait la commande en fonction des informations contenues dans le fichier XML. Il enverrait ensuite une réponse en XML à l'entreprise C, contenant des informations sur la disponibilité des produits commandés, les délais de livraison et le prix.</p>
<p>L'entreprise C recevrait la réponse en XML et mettrait à jour son système de gestion des commandes en conséquence. Cela permettrait à l'entreprise C de suivre l'état de la commande en temps réel et de prendre des décisions en conséquence.</p>
<p>En utilisant l'échange de données en XML, les deux entreprises peuvent communiquer de manière interopérable, même si elles utilisent des systèmes d'information différents. L'échange de données en XML permet une communication standardisée et une intégration transparente des processus de gestion des commandes.</p>
<p>Cet exemple montre comment l'utilisation de l'échange de données en XML peut aider les entreprises de logistique à optimiser leurs processus de gestion des commandes en facilitant la communication interopérable entre différents systèmes d'information.</p>
<p>Voici un exemple de code XML échangé en logistique pour un bon de commande entre un fournisseur et un client :</p>


<code>

&lt;?xml version="1.0" encoding="UTF-8"?&gt;
&lt;!DOCTYPE bon_de_commande SYSTEM "bon_de_commande.dtd"&gt;
&lt;bon_de_commande&gt;
  &lt;client&gt;
    &lt;nom&gt;Client X&lt;/nom&gt;
    &lt;adresse&gt;10 rue du Commerce&lt;/adresse&gt;
    &lt;ville&gt;Paris&lt;/ville&gt;
    &lt;code_postal&gt;75001&lt;/code_postal&gt;
    &lt;pays&gt;France&lt;/pays&gt;
  &lt;/client&gt;
  &lt;produits&gt;
    &lt;produit&gt;
      &lt;reference&gt;AB123&lt;/reference&gt;
      &lt;designation&gt;Produit 1&lt;/designation&gt;
      &lt;quantite&gt;50&lt;/quantite&gt;
      &lt;prix_unitaire&gt;10.50&lt;/prix_unitaire&gt;
    &lt;/produit&gt;
    &lt;produit&gt;
      &lt;reference&gt;CD456&lt;/reference&gt;
      &lt;designation&gt;Produit 2&lt;/designation&gt;
      &lt;quantite&gt;100&lt;/quantite&gt;
      &lt;prix_unitaire&gt;5.20&lt;/prix_unitaire&gt;
    &lt;/produit&gt;
  &lt;/produits&gt;
&lt;/bon_de_commande&gt;

</code>


    <p>Dans cet exemple, le document XML commence par la déclaration de version et d'encodage.</p>
    <p>Ensuite, une DTD (bon_de_commande.dtd) est référencée pour définir la structure du document.</p>
    <p>La balise bon_de_commande contient des sous-éléments pour décrire le client et les produits commandés.</p>
    <p>Les informations sur chaque produit sont incluses dans des balises produit, et comprennent une référence, une désignation, une quantité commandée et un prix unitaire.</p>

<p>Ce format permet aux systèmes du fournisseur et du client de facilement extraire les informations nécessaires pour traiter la commande, en s'assurant que les données sont bien structurées et cohérentes.</p>


<h2>JSON (JavaScript Object Notation)</h2>
    <p>Langage de notation pour les objets JavaScript.</p><p>

    <p>Supposons que nous voulions représenter les informations d'un véhicule de transport en JSON pour une entreprise de logistique.</p>
    <p> Le code JSON pourrait ressembler à ceci :</p>

    <code>
        {
        "id": "VEH-123",
        "type": "camion",
        "capacité": 10,
        "poids_max": 5000,
        "dimensions": {
            "longueur": 10,
            "largeur": 3,
            "hauteur": 4
        },
        "état": "disponible"
        }
    </code>

    <p>Avantages : léger, facile à lire et à écrire, compatible avec les langages de programmation modernes</p>

<h2>CSV (Comma Separated Values)</h2>
    <p>Supposons que nous voulions représenter les informations de plusieurs expéditions en CSV pour une entreprise de logistique.</p>
    <p>Le code CSV pourrait ressembler à ceci :</p>

<code>
    "Id","Expéditeur","Destinataire","Poids","Dimensions","État"
    "EXP-123","Entreprise X","Client Y","10 kg","50x30x20 cm","en cours"
    "EXP-456","Entreprise Z","Client W","20 kg","60x40x30 cm","livré"
    "EXP-789","Entreprise Y","Client X","5 kg","30x20x10 cm","en attente"
</code>


<h2>YAML (YAML Ain't Markup Language)</h2>

    <p>Définition : YAML est un format de sérialisation de données lisible par l'homme, souvent utilisé pour la configuration et l'échange de données. Il est simple et intuitif, structurant les données sous forme de paires clé-valeur.</p>

    <p>Principes :</p>
    <ul>
        <li>Lisibilité : Conçu pour être facilement lisible et modifiable par les humains.</li>
        <li>Hiérarchie : Utilise l'indentation pour représenter des structures de données complexes.</li>
        <li>Flexibilité : Supporte divers types de données (listes, dictionnaires).</li>
    </ul>

    <p>Exemple :</p>
    <code>
    entrepot:
    nom: "Entrepôt Principal"
    emplacement: "Paris"
    produits:
        - nom: "Palette de pommes"
        quantite: 100
        - nom: "Palette de bananes"
        quantite: 150
    </code>

    <h2>Protocol Buffers</h2>

    <p>Définition : Développé par Google, Protocol Buffers (ou Protobuf) est un format de sérialisation de données qui permet de structurer des données de manière efficace.</p>

    <p>Principes :</p>
    <ul>
        <li>Compact et rapide : Protobuf est plus léger et plus rapide que JSON ou XML.</li>
        <li>Schémas définis : Utilise des fichiers .proto pour définir la structure des données.</li>
        <li>Support multilingue : Prend en charge plusieurs langages de programmation.</li>
    </ul>
    <p>Exemple : Un fichier .proto pour les informations sur les livraisons :</p>
    <code>
    syntax = "proto3";

    message Livraison {
    int32 id = 1;
    string produit = 2;
    int32 quantite = 3;
    string dateLivraison = 4;
    }
    </code>

    <p>Exemple avec Protocol Buffers</p>

    <p>Dans une application web de gestion d'inventaire, les données peuvent être stockées en utilisant Protocol Buffers pour une transmission efficace entre le serveur et le client.</p>
    <p>Cela permet d'optimiser la bande passante et d'accélérer les temps de chargement des pages.</p>
    <code>
    const Livraison = {
    id: 1,
    produit: "Palette de pommes",
    quantite: 100,
    dateLivraison: "2024-10-25"
    };
    </code>

