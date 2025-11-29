<?php
/**
 * page de cours 3a sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:14:00  
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
<h1>ACCESS : LES RELATIONS (a)</h1>
<h2>Avant de commencer</h2>
<p>Ce cours inclut des exercices pour expérimenter les relations entre les tables. Il utilise le fichier <strong><a href="./cours/exercices/commerce3.accdb" name="commerce3" id="commerce3">commerce3.accdb</a></strong>.</p>
<h2>Introduction</h2>
<p>On relie des tables entre elles par des champs en commun pour éviter la redondance. Il est inutile de réécrire plusieurs fois les mêmes informations.</p>
<p class="notice exemple">Ex : inutile de réécrire une information sur un client à chaque facture.</p>
<p>La force des tables reliées est de donner accès à de l'information d'une autre table à laquelle vous n'auriez pas eu accès sans une relation entre les tables.</p>
<p class="notice exemple">Prenons l'exemple des tables <strong>Client</strong> et <strong>Facture</strong>. 
La table <strong>Facture</strong> contient le champ <strong>fact_cli_id</strong> et aucune autre information sur le client.
Mais ce champ est la clé pour relier les deux tables. Il est possible de le relier au champ <strong>cli_id</strong> de la table <strong>Client</strong>.
Une fois relié, il est ensuite possible d'avoir les autres informations sur le client tel que le nom de la compagnie, son adresse, etc.</p>
<img src="/assets/img/access/rel_client_facture.png" alt="Relation client facture" />

<h2>Les types de relations ou la cardinalité</h2>
 <p>Il existe trois types de relations : <strong>un à un</strong>, <strong>un à plusieurs</strong> et<strong> plusieurs à plusieurs</strong>.</p>
 <p>Ce n'est pas toujours évident de déterminer quel genre de relation, appelé également cardinalité, existe entre deux tables.</p>
	<p>Il faut se poser deux questions :</p>
	<ul>
		<li>Pour un enregistrement de la première table, combien peut-il en avoir dans la seconde table&nbsp;?</li>
		<li>Pour un enregistrement de la seconde table, combien peut-il en avoir dans la première table&nbsp;?</li>
	</ul>
	<p>Les deux questions commencent toujours par : &laquo;&nbsp;Pour un enregistrement de ceci, combien de cela&nbsp;?&nbsp;&raquo;</p>
  <p>Les deux seules réponses acceptables sont soit <strong>un</strong> ou <strong>plusieurs</strong>. Une fois que vous avez les réponses, placez-les dans le petit tableau qui suit. Il faut inverser la question numéro deux pour la rentrer dans le tableau.</p>
<ol class="instruction">
	<li>Remplacez-les &quot;<strong>?</strong>&quot; par les résultats (un ou plusieurs).</li>
</ol>
  <table class="table 250">
  <caption>Détermination le type de relation</caption>
   <tr>
    <th>&nbsp;</th>
    <th>Table 1</th>
    <th>&nbsp;</th>
    <th>Table 2</th>
   </tr>
   <tr>
    <td>Q1:</td>
    <td>1</td>
    <td>-&gt;</td>
    <td>?</td>
   </tr>
   <tr>
    <td>Q2:</td>
    <td>?</td>
    <td>&lt;-</td>
    <td>1</td>
   </tr>
   <tr>
    <td>Max:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   </tr>
  </table>
<ol class="instruction">
	<li>Ensuite, écrivez dans la dernière ligne le résultat le plus élevé des deux colonnes. Vous connaîtrez ainsi le type des relations.</li>
</ol>
<p>Le prochain exercice consiste à expérimenter ce petit truc.</p>
<p>Vous allez essayer de déterminer quel type de relation existe entre les tables <strong>Facture</strong> et <strong>Client</strong>. Vous devez vous poser les questions :</p>
<ul>
	<li>Q1: Pour une facture, combien avons-nous de clients ? La réponse est un. Une facture, un client.</li>
	<li>Q2: Pour un client, combien pouvons-nous avoir de facture ? La réponse est plusieurs. Du moins, on l'espère.</li>
</ul>
<ol class="instruction">
	<li>Remplissez ensuite le tableau ci-dessous.</li>
</ol>
  <table class="table w250">
	<caption>Résultat du type de relation</caption>
   <tr>
    <th>&nbsp;</th>
    <th>Facture</th>
    <th>&nbsp;</th>
    <th>Clients</th>
   </tr>
   <tr>
    <td>Q1:</td>
    <td>1</td>
    <td>-&gt;</td>
    <td>1</td>
   </tr>
   <tr>
    <td>Q2:</td>
    <td>Plusieurs</td>
    <td>&lt;-</td>
    <td>1</td>
   </tr>
   <tr>
    <td>Max:</td>
    <td>Plusieurs</td>
    <td>&nbsp;</td>
    <td>1</td>
   </tr>
  </table>
<p>Effectivement, il s'agit bien d'une relation d'un à plusieurs de <strong>Client</strong> vers <strong>Facture</strong>. Vous pouvez maintenant essayer avec d'autres tables ou d'autres situations.</p>
<p>Ceci veut aussi dire que vous pouvez trouver seulement une fois l'information en commun dans l'une des tables et plusieurs fois dans l'autre.</p>
<p>Pour cet exemple, chaque valeur du champ <strong>cli_id</strong> de la table <strong>Client</strong> est unique. Il n'y a pas deux enregistrements (ou clients) avec le même numéro de client.</p>
<p>Cependant, dans la table <strong>Factures</strong>, vous pouvez retrouver le même numéro de client pour plusieurs enregistrements différents. C'est pour cette raison que la relation est appelée de <strong>1 à plusieurs</strong>.</p>
<p>L'information en commun se retrouve seulement une fois dans la première table (<strong>Client</strong>) et potentiellement plusieurs fois dans la seconde (<strong>Factures</strong>).</p>

<h4>Relation un à un</h4>
<p class="notice exemple">Ex : Un homme est marié à une seule femme. Une femme est mariée à un seul homme.</p>
<h4>Relation un à plusieurs</h4>
<p class="notice exemple">Ex.: Une personne peut posséder plusieurs voitures. Une voiture ne peut être possédée que par une seule personne. 
(On oublie les cas de copropriété).</p>
<h4>Relation plusieurs à plusieurs</h4>
<p class="notice exemple">Ex : Un étudiant suit plusieurs cours. Un cours est suivi par plusieurs étudiants</p>
<p>Il faut faire attention lors de la conception d'une base de données avec des relations de type &quot;plusieurs à plusieurs&quot;. Il y a plus de détails plus loin sur cette page Web sur ce cas spécial.</p>
<h4>Ce qui est nécessaire pour faire une relation</h4>
<p>Pour mettre en place une relation, il faut au minimum :</p>
	<ul>
		<li>Deux tables (ou requêtes ou une combinaison des deux).</li>
		<li>Un champ en commun dans chacune des tables.</li>
		<li>Le même type de champ (Texte avec texte, numérique avec numérique ...).</li>
		<li>La même longueur (impossible de relier un champ de 15 caractères avec un autre de 50 caractères !).</li>
		<li>Le même genre d'information (Ex.: Code d'inventaire avec des codes d'inventaires, ...).</li>
	</ul>   
<p>De ce fait, vous ne pourrez pas, par exemple, créer une relation entre les champs <strong>date</strong> et <strong>numéro de téléphone</strong>. Les champs ne sont pas des mêmes types (<strong>Date/Heure</strong>, <strong>Texte</strong>).</p>
<p>De même, vous ne pourrez pas créer de relation entre les champs <strong>emp_nom</strong> et <strong>emp_prenom</strong>. Bien que les deux champs soient du type <strong>Texte</strong>, ils n'ont pas le même longueur.</p>
<p class="notice remarque">Il y a cependant <em>une exception</em> qui confirme la règle. Il est possible de faire une relation entre un champ de type <strong>NuméroAuto</strong> et un champ de type <strong>Numérique</strong> dont la taille du champ est <strong>Entier long</strong>.</p>
<p class="notice remarque">Autre exception de taille : il est impossible de créer une relation de type <strong>un à plusieurs</strong> si les champs en commun sont de type <strong>NuméroAuto</strong>. Par définition, ce type de champ ne peut pas avoir deux fois la même information !</p>
<p>Cette exception est cependant très avantageuse.</p>
<p class="notice exemple">Ex : l'utilisateur n'a pas besoin de s'inquiéter de donner des numéros d'identifications à un nouveau client.
Access s'en charge automatiquement.</p>

<h2>Création d'une relation dans une requête</h2>
<p>Il est très avantageux par moment d'être capable d'afficher les informations contenues de plusieurs tables en même temps. Il faut cependant avoir une relation entre les tables pour avoir un résultat intéressant. Le prochain exercice consiste à créer une relation entre deux tables dans une requête.</p>
<ol class="instruction">
	<li>À partir du menu <strong>Créer</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_creation_requete.png" alt="bouton création de requête" />.</li>
	<li>Depuis la liste des tables disponibles, glissez-déposez les tables <strong>Facture</strong> et <strong>Client</strong> dans la fenêtre <strong>Relations</strong>.</li>
	<li>Sélectionnez les champs suivants de la table <strong>Facture</strong> : <strong>fact_id</strong> et <strong>fact_cli_id</strong>.</li>
	<li>Sélectionnez les champs suivants de la table <strong>Client</strong> : <strong>cli_nom</strong> et <strong>cli_adresse</strong>.</li>
	<li>Exécuter la requête en cliquant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>Ce que vous voyez est le résultat de toutes les combinaisons possibles entre les deux tables.</p>
<p>Remarquez que pour chaque numéro de facture il y a 5 clients ! En fait, il y a 14 enregistrements dans la table <strong>Facture</strong> et 5 enregistrements dans la table <strong>Client</strong>. Donc, il y a 14 * 5 (70) enregistrements d'activés. Ceci est en réalité impossible. La raison est qu'il n'y a pas de relation entre ces deux tables en ce moment. Si vous ne faites pas de relations entre les tables d'une requête, Access va afficher toutes les combinaisons d'enregistrements possibles entre les deux tables. Il faut créer une relation entre deux tables pour éviter ce genre de situation.</p>
<p>Pour retourner au mode création :</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
</ol>
   OU <br />
<ol class="instruction">
	<li>Du menu <strong>Affichages</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
	<li>Déterminez les champs en commun entre les deux tables.</li>
</ol>
 <p>Dans notre exemple, il s'agit des champs <strong>fact_cli_id</strong> et <strong>cli_id</strong>. Bien qu'ils n'aient pas le même nom, ils sont de même type. Ils ont aussi le même format ou la même longueur et contiennent le même type d'information.</p>
<img src="/assets/img/access/rel_facture_client.png" alt="relation facture-clients dans une requête" />
<ol class="instruction">
	<li>Placez le pointeur sur l'un des champs en commun.</li>
	<li>Cliquez et tout en restant appuyé sur le bouton gauche de la souris, déplacez le pointeur sur l'autre champ en commun.</li>
</ol>
<p>Une ligne mince devrait apparaître entre les deux champs.</p>
<p>Les deux tables sont maintenant reliées. Sinon, réessayez.</p>
<p>Il se peut que, par accident, vous ayez relié des champs qui n'ont pas le même genre d'information. Il faut alors retirer la mauvaise relation avant de pouvoir réessayer.</p>
<ol class="instruction">
	<li>Cliquez sur la ligne qui relie les deux tables avec le bouton droit de la souris.</li>
	<li>Cliquez sur le menu <img src="/assets/img/access/menu_supprimer_ligne_.png" alt="menu supprimer ligne" /> supprimer.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Cliquez sur la ligne qui relie les deux tables.</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_suppr.png" alt="touche SUPPR" /> du clavier.</li>
</ol>
<p>Maintenant que les tables sont correctement reliées, nous pouvons afficher le résultat.</p>
<ol class="instruction">
	<li>Exécutez encore une fois la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>Le nombre d'enregistrements devrait avoir réduit à 14 factures.</p>
<p>Vous remarquerez que vous voyez les informations de deux tables en même temps ! C'est là l'un des grands avantages des bases de données relationnelles; être capable d'accéder à des informations qu'aucune table, prise seule, n'est capable de fournir. C'est seulement une fois que ces tables sont reliées qu'elles sont vraiment efficaces.</p>

<h4>Le mécanisme d'une relation</a></h4>
<p>À partir d'une requête, il est possible de modifier ou d'ajouter des enregistrements. Lorsque vous écrivez une valeur dans l'un des champs en commun, Access va essayer de trouver si cette valeur existe dans l'un des enregistrements de l'autre table reliée. S'il trouve, vous aurez accès au contenu de tous les champs de l'enregistrement.</p>
<p>Prenons l'exemple des tables <strong>Facture</strong> et <strong>Client</strong> qui sont reliées sur les champs en commun <strong>fact_cli_id</strong> et <strong>cli_id</strong> dans une requête.</p>
<p>Si vous écrivez un chiffre entre 1 et 5, Access pourra trouver un enregistrement dans la table <strong>Client</strong> et vous afficher toutes les informations de l'enregistrement si vous le voulez.</p>
<p>Il est possible d'entrer ou de modifier une information à partir d'une requête qui contient plusieurs tables.</p>
<p>Vous devez vous s'assurer que l'un des champs en commun de toutes les tables reliées soit utilisé dans la requête. Sinon, Access va vous avertir qu'il ne peut pas réaliser la requête.</p>
<p class="notice remarque">Le champ en commun doit être celui dans lequel vous pouvez entrer plusieurs fois la même information.</p>
<p class="notice exemple">Ex : si vous faites une relation entre les tables <strong>Facture</strong> et <strong>Client</strong> sur le champ en commun <strong>cli_id</strong>, 
utilisez le champ <strong>fact_cli_id</strong> de la table <strong>Facture</strong> puisque vous pouvez entrer plusieurs fois le même numéro de client
 dans les factures.</p>

<h2>Création de relations permanentes entre les tables</h2>
<p>Il est avantageux de relier des tables dans la requête pour accéder à une information qu'aucune des tables prises seules ne possède. Le problème avec cette technique est qu'il faut refaire les relations à chaque fois que vous faites une nouvelle requête. Access vous offre une manière de créer des relations &laquo;&nbsp;permanentes&nbsp;&raquo; entre les tables de votre base de données. Elle a aussi l'avantage de vérifier &laquo;&nbsp;l'intégrité&nbsp;&raquo; des relations entre les tables.</p>
<p>À partir du menu <strong>Outils de base de données</strong>, il est possible d'accéder à la partie des relations.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_relation.png" alt="bouton relations" />.</li>
</ol>

 <img src="/assets/img/access/f_relations_sans_client.png" alt="fenêtre relations sansla table client" />
<p>C'est dans cette fenêtre que vous allez créer les relations entre les tables. Lorsque vous ouvrez cette section pour la première fois, il n'y a pas de tables; seulement un grand espace vide. Il faut premièrement ajouter les tables ou les requêtes que vous voulez relier.</p>
<p>Dans cet exercice, le fichier contient déjà toutes les tables qui seront nécessaires pour créer les relations sauf la table <strong>Client</strong>.</p>

<h4>Ajouter une table</a></h4>
  <p>Lorsque vous allez ouvrir la zone des relations pour la première fois, elle devrait être vide. Il faut ajouter les tables ou les requêtes que vous voulez relier avant d'établir les relations.</p>
<ol class="instruction">
	<li>Du menu <strong>Relations</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_tables.png" alt="bouton ajouter une table" />.</li>
</ol>
   <p>OU</p>
   <ol class="instruction">
	   <li>Placez le pointeur de la souris dans la zone des relations.</li>
	   <li>Cliquez sur le bouton droit de la souris.</li>
	   <li>Du menu contextuel, sélectionnez l'option <strong>Afficher la table...</strong></li>
	   <img src="/assets/img/access/menu_afficher_table.png" alt="afficher toutes les tables" />
</ol>
<p>Le menu <strong>Ajouter des tables</strong> va s'afficher (s'il ne l'était pas encore).</p>
<ol class="instruction">
	<li>cliquez - glissez les tables souhaitées vers la zone grise et ajuster les tailles des tables si nécessaire.</li>
</ol>
<img src="/assets/img/access/f_relations_vide.png" alt="fenêtre des relations entre tables" />

<h4>Établir les relations entre les tables</a></h4>

<ol class="instruction">
	<li>Placez le pointeur sur le champ <strong>cli_id</strong> de la table <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton gauche de la souris pour sélectionner le champ.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur surs le champ <strong>fact_cli_id</strong> de la table <strong>Facture</strong>.</li>
	<li>Relâchez ensuite le bouton de la souris.</li>
</ol>

<p>Une fois que vous aurez fait la relation, l'écran suivant va apparaître.</p>
<img src="/assets/img/access/f_modifier_relation.png" alt="fenêtre de modification des relations entre tables" />


<h4>Appliquer l'intégrité référentielle</a></h4>
<p>Cette option est nécessaire pour établir une relation &laquo; forte &raquo;. C'est-à-dire une relation qui s'assure de l'existence d'une valeur dans la table reliée.</p>
<p>En activant l'option <strong>Appliquer l'intégrité référentielle</strong>, Access s'assure que certaines règles d'intégrité d'une relation soient respectées et ainsi d'avoir toujours des relations correctes entre les tables reliées. Aucune information ne peut être &laquo;&nbsp;perdue&nbsp;&raquo; en laissant Access valider ces règles.</p>
<p>Access peut cependant refuser de créer une relation avec intégrité référentielle pour plusieurs raisons :</p>
<img src="/assets/img/access/f_index_unique_introuvable.png" alt="fenêtre index unique introuvable" />
<ul>
	<li>La table qui contient l'enregistrement unique n'a pas l'option d'index sans doublons ou une clé primaire.</li>
	<li>La table qui contient l'enregistrement unique a des doublons. </li>
</ul>
<p class="notice exemple">Ex : plusieurs produits ont le même numéro de produit.</p>
<ul>
	<li>L'un des enregistrements de l'une des tables reliées à un des champs communs est vide.</li>
</ul>
<p class="notice remarque">Il faut toujours que les champs en commun des deux tables aient une information dans l'autre table.</p>
<ul>
	<li>Les champs des tables reliées n'ont pas le même type de données.</li>
</ul>
<img src="/assets/img/access/f_message_type_donnees.png" alt="fenêtre erreur même type de données" />
<p class="notice exemple">Ex : le champ <strong>cli_id</strong> est de type <strong>NuméroAuto</strong> et sa taille est <strong>Entier long</strong> 
alors que le champ <strong>fact_cli_id</strong> et de type <strong>Numérique</strong> (ce qui et autorisé) mais sa taille est <strong>Réel double</strong>. Il faut donc modifier celle-ci en <strong>Entier long</strong></p>

<ul>
	<li>La valeur écrite dans la table qui peut contenir plusieurs fois la même valeur dans le champ en commun n'a pas d'équivalent dans l'autre table.</li>
</ul>
<p class="notice exemple">Ex : L'un des enregistrements contient le produit numéro 5 alors qu'il y existe seulement quatre produits, de 1 à 4.</p>
<ul>
	<li>Une autre raison est que l'une des tables est &laquo; ouverte &raquo; ou affichée. Il faut fermer toutes les tables, requêtes, états et formulaires avant de créer les relations entre les tables.</li>
</ul>
<p>Voici la procédure à suivre pour fermer des objets qui seraient resté ouvert.</p>
<ol class="instruction">
	<li>Fermez la fenêtre des relations.</li>
	<li>Du menu <strong>Fenêtre</strong>, sélectionnez l'objet (table, requête ...) qui est resté ouvert.</li>
</ol>
<p>L'option du menu ouvert vous permet de passer facilement d'un objet à un autre. Dans notre cas, c'est pour fermer tous les objets ouverts sauf la base de données et l'écran des relations.</p>
<ol class="instruction">
	<li>Fermez l'objet.</li>
</ol>
<p class="notice remarque">Si d'autres objets sont ouverts, sauf pour la base de données et l'écran des relations, répétez les opérations précédentes 
pour fermer ces objets. Vous pourrez ensuite réessayer de créer des relations entre les tables.</p>

<h4>L'option Mise à jour en cascade</a></h4>
<p>Cette option met à jour les enregistrements dans la ou les autres tables reliées.</p>
<p>Si vous changez le numéro de client, tous les enregistrements des autres tables reliées dont le code client est identique vont aussi être modifiés.</p>
<p class="notice exemple">Ex : Si vous changez la valeur du champ <strong>cli_id</strong> de la table <strong>Client</strong>, Access va la changer pour tous les champs en commun 
des tables reliées. Dans notre cas, ce serait seulement le champ <strong>fact_cli_id</strong> de la table <strong>Facture</strong>.</p>

<h4>L'option Effacer en cascade</a></h4>
<p>Cette option efface les enregistrements de l'autre table qui ont le même champ en commun que l'enregistrement supprimé.</p>
<p>Quand doit-on activer cette option ? Cela dépend du contenu des tables.</p>
<p class="notice exemple">Ex : pour des raisons fiscales, si un client part, il serait préférable de conserver ses données. 
Mais pour une autre base de données, pour des réservations par exemple, il serait préférable d'enlever les options 
en même temps qu'une réservation.</p>
<p>Voici une représentation des tables et de leurs relations. Vous devrez créer toutes les relations entre ces tables plus tard. Pour le moment, lisez les autres options concernant les relations.</p>
<img src="/assets/img/access/f_relations.png" alt="fenêtre des relations entre les tables" />
 

