<?php
/**
 * page de cours 1 sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0 	21/02/07 	16:18:00
 *
 * @author Stéphane WAHL
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category cours
 * @access public
 * @uses
 */
?>
<h1>Formation à ACCESS - Introduction</h1>
	<h2>Introduction</h2>
	<p>Avant de commencer, regardons quelques-uns des avantages d'une base de données relationnelle.</p>
	<ul>
		<li>Accès rapide et facile à l'information.</li>
		<li>Toute l'information est centralisée dans la base de données.</li>
		<li>Recherche Ad hoc facile.</li>
		<li>Suivi de l'information.</li>
		<li>Gestion des données facile.</li>
		<li>Analyse des données aisée.</li>
		<li>Automatisation de certaines tâches répétitives.</li>
	</ul>
	<h2>Intéret d'une base de données relationnelles ?</h2>
	<p>Un système de gestion de base de données relationnel (SGBDR) utilise beaucoup moins d'espace qu'une base de données simple sous forme de liste parce qu'elle réduit au minimum les redondances ou les répétitions des données.</p>
	<p>Pour mieux comprendre le concept et l'avantage d'un SGBDR, utilisons un exemple de factures.</p>

	<p>Regardons quelques-unes des données que l'on retrouve normalement sur une facture.</p>
	<p class="notice exemple">Ex : Date, Numéro de facture, Numéro du vendeur, Numéro de l'article, Quantité vendue, Prix unitaire, Description de l'article,
     Sous total, Taxes, Total ...</pre>

<table class="table" summary="Données d'une base de données simple">
 <caption>
 Voici quelques-unes de ces données dans une BD simple.
 </caption>
 <tr>
 <th>No. Facture</th>
 <th>Client</th>
 <th>Article</th>
 <th>Description</th>
 <th>Prix Unitaire</th>
 <th>Qté</th>
 </tr>
 <tr class="middle">
 <td>001</td>
 <td>Client1</td>
 <td>123</td>
 <td>Article1</td>
 <td>22,02</td>
 <td>14</td>
 </tr>
 <tr class="middle">
 <td>002</td>
 <td>Client1</td>
 <td>456</td>
 <td>Article2</td>
 <td>30,07</td>
 <td>18</td>
 </tr>
 <tr class="middle">
 <td>003</td>
 <td>Client2</td>
 <td>123</td>
 <td>Article1</td>
 <td>22,02</td>
 <td>30</td>
 </tr>
</table>
<p>L'idée d'une base de données relationnelle est de répartir les données dans plusieurs BD ou tables et de créer des relations entre chacune d'elles.</p>
<table class="table" summary="Données d'une base de données relationnelle">
 <caption>
 Les données pourraient être divisées dans une BD relationnelle.
 </caption>
 <tr>
 <th>Facture</th>
 <th>Client</th>
 <th>Vendeur</th>
 <th>Article</th>
 </tr>
 <tr>
 <td>N&deg; Facture</td>
 <td>N&deg; Client</td>
 <td>N&deg; Vendeur</td>
 <td>N&deg; Article</td>
 </tr>
 <tr>
 <td>N&deg; Article</td>
 <td>Adresse</td>
 <td>Nom</td>
 <td>Description</td>
 </tr>
 <tr>
 <td>Qté vendue</td>
 <td>Code Postal</td>
 <td>Prénom</td>
 <td>Prix unitaire</td>
 </tr>
 <tr>
 <td>N&deg; Vendeur</td>
 <td>N&deg; téléphone</td>
 <td>N&deg; Secsoc.</td>
 <td>Qté disponible</td>
 </tr>
 <tr>
 <td>N&deg; Client</td>
 <td>Personne autorisée</td>
 <td>Date d'embauche</td>
 <td>Qté commandée</td>
 </tr>
</table>
<p>Dans le tableau précédent, la table <strong>Facture</strong> va chercher les informations sur le client de la table <strong>Client</strong> par le champ commun <strong>N&deg; Client</strong>. Il est inutile de réécrire les données du client plusieurs fois.</p>
<p>Nous pouvons chercher l'information grâce à une relation entre ces deux tables : le champ <strong>N&deg; Client</strong>.</p>
<p>Il en va de même pour les informations des tables <strong>Vendeur</strong> et <strong>Article</strong> reliées à la table <strong>Facture</strong> par leurs champs communs respectifs <strong>N&deg; Vendeur</strong> et <strong>N&deg; Article</strong> .</p>
<p>Nous économisons une réécriture des données. Cela permet également de conserver de l'espace pour d'autres données.</p>
<p>Pour les trois factures de l'exemple, nous économisons de l'espace et du temps à ne pas avoir à réécrire les informations sur le <strong>Client1</strong> ni la description et le prix unitaire du produit <strong>123</strong>.</p>

<h2>Définitions</h2>
<p>Il est important de bien maîtriser le vocabulaire lié à l'utilisation d'une base de données. Ces nouveaux termes seront utilisés tout au long des pages concernant Access.</p>
<table class="table" summary="Définitions des termes relatifs à Access">
 <tr>
 <th>Champ</th>
 <td>Information nécessaire sur une personne, une chose ou un événement.<br />
  Ex : nom, prénom, adresses, téléphone, description, commentaires, etc.</td>
 </tr>
 <tr>
 <th>Enregistrement</th>
 <td>Regroupement de champs qui décrivent une personne, une chose ou un événement.<br />
  Ex : nom, prénom, date de naissance, numéro de sécurité sociale, adresse, téléphone, télécopieur, etc.</td>
 </tr>
 <tr>
 <th>Table</th>
 <td>Regroupement d'enregistrements sur un thème commun.<br />
  Ex : employés, inventaire, client, fournisseurs, véhicules, contacts etc.</td>
 </tr>
 <tr>
 <th>Base de données</th>
 <td>Regroupement de tables, de requêtes, de formulaires, de rapports qui constituent un système complet.<br />
  Ex : gestion de la facturation, gestion de l'inventaire, carnet de contacts, réservations etc.</td>
 </tr>
 <tr>
 <th>Structure d'une table</th>
 <td>Caractéristiques des différents champs de la tables.<br />
  Ex : nom, type de données, propriétés.</td>
 </tr>
 <tr>
 <th>Relations</th>
 <td>Liens entre les tables. Ils peuvent être de type un à un, un à plusieurs ou plusieurs à plusieurs.</td>
 </tr>
 <tr>
 <th>Clé primaire</th>
 <td>Champ ou combinaisons de champs déterminant de manière unique un enregistrement.</td>
 </tr>
 <tr>
 <th>Feuille de données</th>
 <td>Présentation des enregistrements sous forme d'un tableau. Chaque champ est placé dans une colonne.</td>
 </tr>
 <tr>
 <th>Formulaire</th>
 <td>Présentation à l'écran d'une ou plusieurs tables sous une forme conviviale.</td>
 </tr>
 <tr>
 <th>Requête</th>
 <td>Interrogation de la SGBDR permettant d'extraire des informations.</td>
 </tr>
 <tr>
 <th>État</th>
 <td>Présentation d'une partie ou de l'ensemble des données sous un format imprimable.</td>
 </tr>
</table>

	<p>La définition d'une base de données prend maintenant un sens plus large qu'auparavant. Ce n'est plus juste un fichier qui contient de l'information utile pour l'utilisateur. Il contient aussi les requêtes, les formulaires, les états, les macros et les modules pour développer une &quot;application&quot; ou un &quot;système&quot; qui répond aux besoins spécifiques de l'utilisateur.</p>
	
	<h2>Quelles sont les composantes d'Access ?</h2>
	<p><span class="h4-like">Tables</span> : Contient les champs recueillant les informations. C'est l'objet fondamental de la base de données.</p>
	<p><span class="h4-like">Requêtes</span> : Recherche d'information qui répond à certains critères déterminés par l'utilisateur.</p>
	<p><span class="h4-like">Formulaires</span> : Présentation de l'information à l'écran d'une manière conviviale pour l'utilisateur.</p>
	<p><span class="h4-like">États</span> : Présentation imprimable de l'information.</p>
	<p><span class="h4-like">Macros</span> : Développement de routines pour automatiser certaines tâches.</p>
	<p><span class="h4-like">Modules</span> : Programmation</p>
	
	<h2>Création d'une base de données</h2>
	<p>Pour vous aider à comprendre la création d'une base de données, nous allons montrer les étapes à suivre. Afin d'éviter des répétitions, vous serez amenés à lire d'autres parties du cours, notamment sur <a href="/cours/qlio/access2a">les tables</a> et <a href="/cours/qlio/access3a">les relations</a>. L'exercice va consister à créer une base de données pour la gestion d'un commerce.</p>
	<p>La première étape de la création d'une base de données est l'analyse. C'est d'ailleurs probablement l'étape la plus importante. Si vous passez trop rapidement sur cette étape, vous allez ensuite perdre beaucoup de temps et d'efforts à refaire ce qui aurait dû être accompli auparavant.</p>
	<p>Avant de créer votre base de données, il faut avoir une idée claire des informations dont vous aurez besoin.</p>
	<p class="notice exemple">Ex : informations sur mes clients, sur mes fournisseurs, sur mon inventaire, sur mon personnel, etc.</p>
	<p>Une des techniques que vous pouvez utiliser consiste à partir des formulaires et des états dont vous aurez besoin. Connaissant les résultats, vous découvrirez quels sont les champs nécessaires pour obtenir ceux-ci.</p>
	<p class="notice exemple">Ex : il faut connaître les quantités vendues et à quel prix unitaire avant de connaître le total des ventes.</p>
	<p>Vous pouvez également partir de la base de données et déterminer les informations qui sont nécessaires pour les requêtes, les formulaires et les états.</p>
	<p>Pour les besoins de l'exercice, prenez quelques instants et écrivez sur une feuille les champs que l'on peut retrouver sur une facture. Essayez de trouver autant de champs que vous pouvez.</p>
	<h3>Liste des champs</h3>
	<p>Voici la liste de champs que l'on peut retrouver une facture.</p>
	 <p> Date, Numéro de facture, Numéro de client, Adresse de facturation du client, Ville, Numéro de téléphone, Numéro de télécopieur, Adresse de courriel, Adresse de livraison, Personne contact, Conditions de paiement, Numéro de produit, Description du produit, Prix unitaire du produit, Quantité achetée, Total pour l'item, Sous total, TVA, Escompte, Bon de commande, Numéro du vendeur, Nom du vendeur, ...</p>
	 <p>Ouf ! C'est peut être un peu plus que ce à quoi vous vous attendiez.</p>
	 
	<h3>Regrouper les informations dans des tables.</h3>
	<p>Il faut ensuite regrouper toutes ces informations (champs) en entités dans une table ou un &quot;thème&quot; en commun.</p>
	<p class="notice exemple">Ex : est-ce que le champ &quot;<strong>Escompte</strong>&quot; ou &quot;<strong>Conditions de paiement&quot;</strong> ira dans l'entité (table) &quot;<strong>Facture</strong>&quot; ou &quot;<strong>Client</strong>&quot; ?</p>
	<p>Nous allons voir une technique de regroupement des champs dans les tables et ensuite déterminer les relations entre ces tables.</p>
	<p>La technique est un peu simpliste mais demande un peu d'expérience.</p>
	<p>Le concept est de distribuer les champs dans le plus grand nombre de tables possibles. Cependant certaines règles sont à respecter :</p>
	<ul>
		<li>Regrouper les champs dans les tables qui peuvent être reliées.</li>
		<li>Pas de dédoublement de champs, sauf pour les champs en commun.</li>
		<li>Pas de dédoublement d'entrée d'information.</li>
		<li>Pas de champs calculables dont on peut avoir le résultat avec les informations des autres champs des tables.</li>
	</ul>
	 <p class="notice exemple">Ex : Total = Qté * Prix unitaire</p>
	 <p>Pour pouvoir regrouper les champs dans des tables, il faut se poser un certain nombre de questions :<br />
	 Quels sont les champs que l'on peut regrouper ensemble&nbsp;? Quelles sont les opérations accomplies ? Qui utilise quelle information ?</p>
	<p>Pour la facture, on retrouve des éléments qui distinguent la facture, le client, les produits et le vendeur. Ce sont les quatre tables qui seront utilisées.</p>
	<p>Il faut également s'assurer que les champs sont dans les bonnes tables, qu'il n'y a pas de tables cachées à l'intérieur des autres.</p>
	<p>À l'exception des champs en commun qui servent à &quot;relier&quot; les tables, un champ ne devrait pas se retrouver dans plusieurs tables.</p>
	
    <h3>Déterminer les clés primaires</h3>
	<p class="notice info">Une <strong>clé primaire</strong> est un champ (ou une série de champs) qui permet de différencier un enregistrement des autres.</p>
	<p class="notice exemple">Ex : bien qu'il puisse y avoir plusieurs factures avec la même date, la même quantité achetée, <br />
     le même client ou le même vendeur, il n'y aura pas deux factures avec le même numéro de facture.</p>
	<p class="notice remarque">Une clé primaire n'est pas obligatoire pour une table. Elle le devient lorsque vous voulez relier deux tables.</p>
	<p>Essayez de déterminer le champ approprié pour une clé primaire pour la table <strong>Employe</strong>.</p>
	<p>Certainement pas le champ <strong>sexe</strong>. À moins qu'il y ait seulement un homme et une femme dans l'entreprise. Cela limite un peu la croissance de l'entreprise !</p>
	<p>Il serait possible d'utiliser le champ <strong>Nom de famille</strong> tant que deux personnes dans l'entreprise n'ont pas le même nom. Pour régler le problème, il est possible de créer une clé primaire composé de deux champs : <strong>Nom de famille</strong> et <strong>emp_prenom</strong>.</p>
	<p>Cette clé va fonctionner correctement jusqu'à ce que deux employés aient le même prénom et le même nom. Pour régler ce problème, il est possible de créer une clé primaire composée du nom de famille, du prénom et de la date de naissance. Cette clé primaire va fonctionner correctement jusqu'à ce que ... Cela peut continuer longtemps.</p>
	<p>Pour simplifier, vous verrez qu'il est préférable d'avoir un champ nommé <strong>Numéro d'employé</strong> ou <strong>Numéro de sécurité sociale</strong> pour distinguer chacun des enregistrements de la table.</p>
	<p>Prenez quelques instants pour essayer de déterminer quels champs dans la table seraient appropriés pour être la clé primaire ou être dans la clé primaire. L'explication pour <a href="/cours/qlio/access2a#chap33">appliquer la clé primaire</a> sur un ou plusieurs champs de la table se trouve dans le cours suivant sur les tables.</p>
	
    <h3>Déterminer les relations entre les tables</h3>
	<p>Pour qu'une relation soit possible entre deux tables (ou requêtes ou une combinaison des deux), il faut :</p>
	<ul>
		<li>Un champ commun aux deux tables.</li>
        <li>Le même type de champ (<strong>cardinalité)</strong> avec <strong>Texte</strong>, <strong>Numérique</strong> avec <strong>Numérique</strong>... sauf exception de <strong>Numéroauto</strong> avec <strong>Numérique</strong>).</li>
		<li>La même longueur (Pas un champ long de 15 caractères avec un autre long de 50 caractères !).</li>
		<li>Le même genre d'information (Ex : Code d'inventaire avec des codes d'inventaires, Titre avec Titre, ...).</li>
	</ul>	 
	<p>Vous n'êtes pas obligé de relier toutes les tables les unes aux autres. Il est possible d'accéder à une information d'une des tables si les tables sont reliées soit directement, soit indirectement entre elles. Vous trouverez plus de détails sur la page des <a href="/cours/qlio/access3a">relations</a>.</p>

    <h3>Déterminer les types de relations (cardinalité)</h3>
	<p>Il existe trois types de relations : <strong>un à un</strong>, <strong>un à plusieurs</strong> et <strong>plusieurs à plusieurs</strong>.</p>
	<p>Pour déterminer le type de relation et comment créer des relations vous trouverez de plus amples explications dans le cours sur les <a href="/cours/qlio/access3a">relations</a>.</p>
	<p>Dans le cas d'une facturation, nous pourrions relier les tables de la façon suivante :</p>
		<img src="/assets/img/access/f_relations.png" alt="relations" />
	<p>L'image ci-dessus montre la liste des tables avec les champs qui les composent. Les lignes indiquent le type de relation entre les tables.</p>
	<p>La relation de types <strong>plusieurs à plusieurs</strong> requiert une table intermédiaire composée, au minimum de la clé primaire des deux tables à relier. C'est la raison d'être de la table <strong>L_Fact_Art</strong>.</p>
	
	<h2>La normalisation et les formes normales</h2>
	<p>L'avantage d'une base de données relationnelle est d'éviter au maximum les répétitions ou les redondances d'information.</p>
	<p>La normalisation sert à séparer la liste des champs en plusieurs tables pour avoir une base de données plus efficace.</p>
	<p>Il s'agit de retirer progressivement les quelques problèmes que l'on retrouve dans les bases de données pour pouvoir afficher la base de données sous différentes formes normales (1ère, 2ème, 3ème ...).</p>
	<p>Pour le moment, nous allons seulement regarder les trois premières formes normales.</p>
	
    <h3>Première forme normale : répétition des données</h3>
	<p>Pour atteindre la première forme normale, il faut éliminer les groupes répétitifs en les séparant en plusieurs tables. Le travail à accomplir est d'éviter complètement les répétitions d'entrée de données.</p>
	<p class="notice exemple">Ex : une facture peut contenir plusieurs produits.</p>

 <table class="table" summary="exemple de table facture">
 <tr>
  <th>Numéro de facture</th>
  <th>Numéro de produit</th>
 </tr>
 <tr class="middle">
  <td>1</td>
  <td>1, 3, 5</td>
 </tr>
 </table>

	<p>Nous pouvons avoir plusieurs numéros de produits pour une même facture. Ce qui implique une redondance de saisie de données et cela ne correspond pas à une forme appropriée de conservation d'informations dans une base de données relationnelle.</p>
	<p>En effet, si nous devions modifier un <strong>Numéro de produit</strong>, nous devrions répercuter cette modification sur l'ensemble des enregistrements de toutes les factures dans la table <strong>Facture</strong>. Vous convenez que ce travail est fastidieux et peut être source d'erreurs. Nous devons donc placer le champ <strong>Numéro de produit</strong> dans une table autre que <strong>Facture</strong>.</p>
	<p>Le test de la deuxième forme normale va s'assurer que les champs sont à la bonne place.</p>
	<p>Il faut donc s'assurer que l'utilisateur ne saisisse pas plusieurs fois la même information.</p>	
	<p class="notice exemple">Ex : cela ne serait pas efficace d'avoir une table &quot;<strong>Facture</strong>&quot; qui contienne également les champs &quot;<strong>Nom du client</strong>&quot;,
     &quot;<strong>Adresse de livraison</strong>&quot;, &quot;<strong>personne contact</strong>&quot;.</p>
	<p>En effet, nous devons saisir les informations sur le client pour chaque facture du client. Pas vraiment efficient ! C'est pour cette raison que nous devons &quot;séparer&quot; la liste des champs dont nous avons besoin dans plusieurs tables pour avoir une saisie simplifiée des données.</p>
	<p>La même situation se répète pour les informations sur le vendeur. Nous devrions donc avoir les tables composées de la manière suivantes</p>
	<ul>
		<li><strong>Facture</strong>: Numéro de facture, date, bon de commande, escompte.</li>
		<li><strong>Client</strong>: Numéro de client, adresse de facturation, ville, numéro de téléphone, numéro de télécopieur, <strong>adresse</strong> de courriel, adresse de livraison, personne contact, escompte, conditions de paiement.</li>
		<li><strong>Employe</strong>: Numéro du vendeur, nom, prénom, poste, bureau, salaire, commission, embauche.</li>									 		
		<li><strong>Article</strong>: Numéro de produit, description, prix unitaire, quantité disponible.</li>
	</ul>
	<p>Nous devons ensuite déterminer la clé primaire pour chaque table. Cela est nécessaire pour la seconde forme normale. Une clé primaire est un champ (ou une série de champs) qui permet de distinguer un enregistrement des autres. Pour la table <strong>Facture</strong>, la clé primaire sera le champ <strong>fact_id</strong>.</p>
	<p>En effet, le contenu de tous les autres champs de la table peut se répéter, ce qui serait contraire à la définition d'une clé primaire.</p>
	
    <h3>Deuxième forme normale: Dépendance directe à la clé primaire</h3>
	<p>Pour passer à la deuxième forme normale, nous devons préalablement avoir passé le test de la première forme normale. Nous devons maintenant éliminer les dépendances partielles. Cela veut dire que nous devons nous assurer que tous les champs de la table dépendent de la clé primaire de la table. Sinon, nous devrons créer une nouvelle table ou déplacer le champ.</p>
	<p>Le problème à ce niveau est le champ <strong>Quantité achetée</strong>. Il dépend en même temps du numéro de facture et du numéro de produit. Une facture peut avoir plusieurs produits. Mais un produit peut aussi se retrouver sur plusieurs factures. Il y a donc une relation de plusieurs à plusieurs entre ces deux tables.</p>
	<p>Ce qui nous amène aux tables composées de la manière suivante :</p>
	<ul>
		<li><strong>Facture</strong>: Numéro de facture, Date, bon de commande, escompte.</li>
		<li><strong>Client</strong>: Numéro de client, adresse de facturation, ville, numéro de téléphone, numéro de télécopieur, adresse de courriel, adresse de livraison, personne contact, escompte, conditions de paiement.</li>
		<li><strong>Employe</strong>: Numéro du vendeur, nom, prénom, poste, bureau, salaire, commission, embauche.</li>
		<li><strong>Article</strong>: Numéro de produit, description, prix unitaire, quantité disponible.</li>
		<li><strong>L_Fact_Art</strong>: Numéro de facture, numéro de produit, quantité achetée.</li>
	</ul>
	<p class="notice exemple">Ex : la table <strong>L_Fact_Art</strong> joue le rôle d'intermédiaire entre les tables <strong>Facture</strong> et <strong>Article</strong> pour éviter une saisie
     redondante et surtout permettre une relation entre les clé primaires des deux tables.</p>
	<p>Vous remarquez que la clé primaire de cette table est composé de deux champs : <strong>fact_id</strong> et <strong>Numéro de produit</strong>. Ce sont aussi les clés primaires des tables <strong>Facture</strong> et <strong>Article</strong>.</p>

 <table class="table" summary="Table L_Fact_Art">
 <tr>
  <th>Numéro de facture</th>
  <th>Numéro de produit</th>
  <th>Quantité achetée</th>
 </tr>
 <tr class="middle">
  <td>1</td>
  <td>1</td>
  <td>10</td>
 </tr>
 <tr class="middle">
  <td>1</td>
  <td>2</td>
  <td>25</td>
 </tr>
 <tr class="middle">
  <td>2</td>
  <td>1</td>
  <td>50</td>
 </tr>
 <tr class="middle">
  <td>2</td>
  <td>2</td>
  <td>100</td>
 </tr>
 </table>

	<p>Dans cette table, un même numéro de facture et un même numéro de produit peuvent être utilisé plusieurs fois.</p>
	
	<h3>Troisième forme normale: Dépendances partielles de la clé</h3>
	<p>Pour la troisième forme normale, il s'agit d'éliminer les dépendances transitives. C'est-à-dire qu'il faut s'assurer qu'il n'y ait pas de tables qui soient cachées parmi les autres.</p>
	<p>De cette manière, les tables ne devraient jamais contenir de champs calculés.</p>
	<p class="notice exemple">Ex : les champs &quot;<strong>Sous total</strong>&quot;, &quot;<strong>Total</strong>&quot; ou &quot;<strong>TVA</strong>&quot; ne devraient pas apparaître dans les tables puisqu'il est possible de les 
     calculer à partir des données qui sont déjà dans les tables.<br />
     Il est possible d'avoir le &quot;<strong>Sous total</strong>&quot; en multipliant les &quot;<strong>Quantité vendue</strong>&quot; par les &quot;<strong>art_pu</strong>&quot;.<br />
     Donc, il est inutile de le saisir dans les tables.</p>
	<p>La troisième étape consiste à déterminer les relations entre les différentes tables. Nous devons réfléchir à quelles sont les relations possibles entre les entités.</p>
	<p>Pour pouvoir relier deux tables, celles-ci doivent avoir au moins un champ en commun. Nous pouvons relier une facture à un client par le champ &quot;<strong>N&deg; Client</strong>&quot;. Ou encore, relier un produit à une facture par le champ &quot;<strong>N&deg; Produit</strong>&quot; etc.</p>
	<p>Vous devriez, dans ce cas, vous apercevoir que certains champs seraient mieux placés dans une autre table.<br />
 	Une fois que vous avez réalisé les regroupements et déterminé les relations, vous avez votre base pour la création des tables.</p>
	<p>Maintenant que vous avez les entités et les champs qui les composent, imaginez à quoi devrait ressembler vos formulaires et vos états. Est-ce que les champs que vous avez choisis répondent à tous vos besoins&nbsp;?</p>
	<p>Prenez tout le temps nécessaire pour l'analyse. Il vous coûtera beaucoup plus de temps et d'effort si vous passez trop rapidement à la création et oubliez des éléments importants.</p>
	<p>Maintenant que vous avez créé la base de données, il ne reste qu'a créer les tables, saisir les données, créer les requêtes, les formulaires, les états, les macros et les modules pour votre base de données.</p>
	
<h2>Compacter une base de données</h2>
<p>L'opération de compactage d'une base de données va retirer les enregistrements, les tables, les requêtes et les états que vous avez supprimés lors de la dernière étape. Bien qu'ils ne soient plus accessibles, ils étaient encore dans le fichier de la base de données.</p>
	<ul>
		<li>Ouvrez le programme Access mais n'ouvrez aucune base de données.</li>
		<li>Du menu <strong>Outils</strong>, sélectionnez l'option <strong>Utilitaires de base de données</strong>.</li>
		<li>Sélectionnez l'option <strong>Compacter une base de données</strong>.</li>
		<li>Sélectionnez le fichier à compacter sur le disque dur ou la disquette.</li>
		<li>Cliquez sur le bouton <strong>Compacter</strong>.</li>
	</ul>
	<p>L'opération pour compactage d'une base de données consiste à en créer une nouvelle avec seulement les éléments qui sont encore utiles. Access va ensuite vous demander quel est le nom de la nouvelle base de données.</p>
	<ul>
		<li>Donnez un nom à la nouvelle base de données dans la partie &quot;<strong>Nom du fichier</strong>&quot;.</li>
		<li>Appuyez sur la touche <img src="/assets/img/access/ToucheEntree.png" alt="touche entrée" width="46" height="26" /> ou le bouton <img src="/assets/img/access/bt_enregistrer.png" alt="bouton enregistrer" width="23" height="22" />.</li>
	</ul>
	<p class="notice remarque">Vous ne pouvez pas faire une copie de sécurité pendant que la base de données est ouverte.
Vous pouvez copier le fichier de la base de données seulement après avoir quitté Access.</p>

