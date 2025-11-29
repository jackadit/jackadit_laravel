<?php
/**
 * BUT : page du cours 3a
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:25:00
 * 
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package Jackadit.com
 * @subpackage 
 * @category 
 * @access protected
 * @uses db
 */
?>




<h1>OpenOffice Base : LES RELATIONS (a)</h1>
<h2>Avant de commencer</h2>
<p>Ce cours inclut des exercices pour expérimenter les relations entre les tables. Il utilise le fichier <strong><a href="./cours/exercices/commerce3.odb" name="commerce3" id="commerce3">commerce3.odb</a></strong>.</p>
<h2>Introduction</h2>
<p>On relie des tables entre elles par des champs en commun pour éviter la redondance. Il est inutile de réécrire plusieurs fois les mêmes informations.</p>
<p class="notice exemple">Ex : inutile de réécrire une information sur un client à chaque facture.</p>
<p>La force des tables reliées est de donner accès à de l'information d'une autre table à laquelle vous n'auriez pas eu accès sans une relation entre les tables.</p>
<p>&nbsp;</p>
<div class="notice remarque">Prenons l'exemple des tables <strong>Facture</strong> et <strong>Client</strong>. 
La table <strong>Facture</strong> contient le champ <strong>ID_Client</strong> et aucune autre information sur le client.
Mais ce champ est la clé pour relier les deux tables. Il est possible de le relier au champ <strong>ID_Client</strong> de la table <strong>Client</strong>.
Une fois relié, il est ensuite possible d'avoir les autres informations sur le client tel que le nom de la compagnie, son adresse, etc.</div>

<img src="/assets/img/oobase/rel_Clients-Factures.png" alt="Relation Clients-Factures " />

<h2>Les types de relations ou la cardinalité</h2>
 <p>Il existe trois types de relations: <strong>un à un</strong>, <strong>un à plusieurs</strong> et<strong> plusieurs à plusieurs</strong>.</p>
 <p>Ce n'est pas toujours évident de déterminer quel genre de relation, appelé également cardinalité, existe entre deux tables.</p>
	<p>Il faut se poser deux questions :</p>
	<ul>
		<li>Pour un enregistrement de la première table, combien peut-il en avoir dans la seconde table&nbsp;?</li>
		<li>Pour un enregistrement de la seconde table, combien peut-il en avoir dans la première table&nbsp;?</li>
	</ul>
	<p>Les deux questions commencent toujours par&nbsp;: &laquo;&nbsp;Pour un enregistrement de ceci, combien de cela&nbsp;?&nbsp;&raquo;</p>
  <p>Les deux seules réponses acceptables sont soit <strong>un</strong> ou <strong>plusieurs</strong>. Une fois que vous avez les réponses, placez-les dans le petit tableau qui suit. Il faut inverser la question numéro deux pour la rentrer dans le tableau.</p>
<ol class="instruction">
	<li>Remplacez les &quot;<strong>?</strong>&quot; par les résultats (un ou plusieurs).</li>
</ol>
  <table class="table w300p" summary="type de relation">
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
    <td>&rarr;</td>
    <td>?</td>
   </tr>
   <tr>
    <td>Q2:</td>
    <td>?</td>
    <td>&larr;</td>
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
<p>Vous allez essayer de déterminer quel type de relation existe entre les tables <strong>Facture</strong> et <strong>Client</strong>. Vous devez cous poser les questions :</p>
<ul>
	<li>Q1: Pour une facture, combien avons-nous de clients ? La réponse est un. Une facture, un client.</li>
	<li>Q2: Pour un client, combien pouvons-nous avoir de facture ? La réponse est plusieurs. Du moins, nous l'espérons.</li>
</ul>
<ol class="instruction">
	<li>Remplissez ensuite le tableau ci-dessous.</li>
</ol>
  <table class="table w300p" summary="résultat type de relation">
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
    <td>&rarr;</td>
    <td>1</td>
   </tr>
   <tr>
    <td>Q2:</td>
    <td>Plusieurs</td>
    <td>&larr;</td>
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
<p>Pour cet exemple, chaque valeur du champ <strong>ID_Client</strong> de la table <strong>Client</strong> est unique. Il n'y a pas deux enregistrements (ou clients) avec le même numéro de client.</p>
<p>Cependant, dans la table <strong>Factures</strong>, vous pouvez retrouver le même numéro de client pour plusieurs enregistrements différents. C'est pour cette raison que la relation est appelée de <strong>1 à plusieurs</strong>.</p>
<p>L'information en commun se retrouve seulement une fois dans la première table (<strong>Client</strong>) et potentiellement plusieurs fois dans la seconde (<strong>Factures</strong>).</p>

    <h3>Relation un à un</h3>
<p class="notice exemple">Ex : Un homme est marié à une seule femme. Une femme est mariée à un seul homme.</p>
    <h3>Relation un à plusieurs</h3>
<p class="notice exemple">Ex.: Une personne peut posséder plusieurs voitures. Une voiture ne peut être possédée que par une seule personne. 
(On oublie les cas de copropriété).</p>
    <h3>Relation plusieurs à plusieurs</h3>
<p class="notice exemple">Ex : Un étudiant suit plusieurs cours. Un cours est suivi par plusieurs étudiants</p>
<p>Il faut faire attention lors de la conception d'une base de données avec des relations de type &quot;plusieurs à plusieurs&quot;. Il y a plus de détails plus loin sur cette page Web sur ce cas spécial.</p>
    <h3>Ce qui est nécessaire pour faire une relation</h3>
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
<p class="notice remarque">Il y a cependant <em>une exception</em> qui confirme la règle. Il est possible de faire une relation entre un champ de type <strong>AutoValeur</strong> et un champ de type <strong>Numéric</strong> dont la taille du champ est <strong>Integer</strong>.</p>
<p class="notice remarque">Autre exception de taille : il est impossible de créer une relation de type <strong>un à plusieurs</strong> si les champs en commun sont de type <strong>AutoValeur</strong>. Par définition, ce type de champ ne peut pas avoir deux fois la même information !</p>
<p>Cette exception est cependant très avantageuse.</p>
<p class="notice exemple">Ex : l'utilisateur n'a pas besoin de s'inquiéter de donner un numéro d'identification à un nouveau client.
OpenOffice Base s'en charge automatiquement.</p>

<h2>Création d'une relation dans une requête</h2>
<p>Il est très avantageux par moment d'être capable d'afficher les informations contenues de plusieurs tables en même temps. Il faut cependant avoir une relation entre les tables pour avoir un résultat intéressant. Le prochain exercice consiste à créer une relation entre deux tables dans une requête.</p>
<ol class="instruction">
	<li>&Agrave; partir du menu principal, appuyez sur l'onglet des requêtes <img src="/assets/img/oobase/bt_requetes.png" alt="bouton requêtes" />.</li>
	<li>Cliquez sur le bouton <strong>Créer une requête en mode ébauche...</strong><img src="/assets/img/oobase/bt_creer_requete_ebauche.png" alt="bouton nouvelle requête en mode ébauche" />.</li>
</ol>
<img src="/assets/img/oobase/fen_ajouter_table_ou_requete.png" alt="fenêtre ajouter table ou requête" />
<ol class="instruction">
	<li>&Agrave; partir du Mode ébauche, dans la liste des tables disponibles, double-cliquez sur les tables <strong>Client</strong> et <strong>Factures</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_requete1.png" alt="fenêtre requête1" />
<ol class="instruction">
	<li>Double-cliquez sur les champs suivants de la table <strong>Factures</strong> : <strong>Id_Facture</strong> et <strong>ID_Client</strong>.</li>
	<li>Double-cliquez sur les champs suivants de la table <strong>Client</strong> : <strong>emp_nom</strong> et <strong>Adresse</strong>.</li>
	<li>Exécuter la requête en cliquant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter la requête" />.</li>
</ol>
<img src="/assets/img/oobase/resultat_requete1.png" alt="résultat de la requête1" />
<p>Ce que vous voyez est le résultat de toutes les combinaisons possibles entre les deux tables.</p>
<p>Remarquez que pour chaque numéro de facture il y a 5 clients ! En fait, il y a 14 enregistrements dans la table <strong>Facture</strong> et 5 enregistrements dans la table <strong>Client</strong>. Donc, il y a 14 * 5 (70) enregistrements d'activés. Ceci est en réalité impossible. La raison est qu'il n'y a pas de relation entre ces deux tables en ce moment. Si vous ne faites pas de relations entre les tables d'une requête, OpenOffice Base va afficher toutes les combinaisons d'enregistrements possibles entre les deux tables. Il faut créer une relation entre deux tables pour éviter ce genre de situation.</p>
<p>Dans notre exemple, les champs <strong>ID_client</strong> et <strong>ID_Client</strong> sont communs aux deux tables. Bien qu'ils n'aient pas le même nom, ils sont de même type. Ils ont aussi le même format ou la même longueur et contiennent le même type d'information.</p>
<img src="/assets/img/oobase/relation_clients_factures.png" alt="relation clients-factures dans une requête" />
<ol class="instruction">
	<li>Placez le pointeur sur l'un des champs en commun.</li>
	<li>Cliquez et tout en restant appuyé sur le bouton gauche de la souris, déplacez le pointeur sur l'autre champ en commun.</li>
</ol>
<p>Une ligne mince devrait apparaître entre les deux champs.</p>
<p>Les deux tables sont maintenant reliées. Sinon, réessayez.</p>
<p>Il se peut que, par accident, vous ayez relié des champs qui n'ont pas le même genre d'information. Il faut alors retirer la mauvaise relation avant de pouvoir réessayer.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur la ligne qui relie les deux tables.</li>
	<li>Sélectionnez la commande <strong>Supprimer</strong>.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Appuyez sur la touche <img src="/assets/img/oobase/touche_suppr.png" alt="touche SUPPR" /> du clavier.</li>
</ol>
<p>Maintenant que les tables sont correctement reliées, nous pouvons afficher le résultat.</p>
<ol class="instruction">
	<li>Exécutez encore une fois la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter la requête" />.</li>
</ol>
<p>Le nombre d'enregistrements devrait avoir réduit à 14 factures.</p>
<p>Vous remarquerez que vous voyez les informations de deux tables en même temps ! C'est là l'un des grands avantages des bases de données relationnelles; être capable d'accéder à des informations qu'aucune table, prise seule, n'est capable de fournir. C'est seulement une fois que ces tables sont reliées qu'elles sont vraiment efficaces.</p>

    <h3>Le mécanisme d'une relation</h3>
<p>&Agrave; partir d'une requête, il est possible de modifier ou d'ajouter des enregistrements. Lorsque vous saisissez une valeur dans l'un des champs en commun, OpenOffice Base va essayer de trouver si cette valeur existe dans l'un des enregistrements de l'autre table reliée. S'il trouve, vous aurez accès au contenu de tous les champs de l'enregistrement.</p>
<p>Prenons l'exemple des tables <strong>Client</strong> et <strong>Factures</strong> qui sont reliées sur les champs en commun <strong>ID_client</strong> et <strong>ID_Client</strong> dans une requête.</p>
<p>Pour une valeur de ID_Client dans la table <strong>Factures</strong> comprise entre 1 et 5, OpenOffice Base pourra trouver un enregistrement correspondant dans la table <strong>Client</strong> et vous afficher toutes les informations annexes de cet enregistrement si vous le voulez.</p>
<p>Il est possible d'entrer ou de modifier une information à partir d'une requête qui contient plusieurs tables.</p>
<p>Il suffit de vous assurer qu'il existe un champ en commun entre les tables reliées et qu'il soit utilisé dans la requête. Sinon, OpenOffice Base vous avertira qu'il ne peut pas réaliser la requête.</p>
<p class="notice remarque">Le champ en commun est celui pour lequel vous pouvez avoir plusieurs fois la même donnée.</p>
<p class="notice exemple">Ex : si vous avez une relation entre les tables <strong>Client</strong> et <strong>Factures</strong> sur le champ en commun <strong>ID_client</strong>, 
vous utiliserez le champ <strong>ID_Client</strong> de la table <strong>Factures</strong> puisque vous pouvez avoir plusieurs fois le même numéro de client
 dans les factures.</p>

<h2>Création de relations permanentes entre les tables</h2>
<p>Il est avantageux de relier des tables dans la requête pour accéder à une information qu'aucune des tables prises seules ne possède. Le problème avec cette technique est qu'il faut refaire les relations à chaque fois que vous faites une nouvelle requête. OpenOffice Base vous offre la possibilité de créer des relations &laquo;&nbsp;permanentes&nbsp;&raquo; entre les tables de votre base de données. Elle a aussi l'avantage de vérifier &laquo;&nbsp;l'intégrité&nbsp;&raquo; des relations entre les tables.</p>
<p>&Agrave; partir du menu principal, il est possible d'accéder à la partie des relations.</p>
<ol class="instruction">
	<li>Du menu <strong>Outils</strong>, sélectionnez la commande <strong>Relations...</strong>.</li>
</ol>
<p>C'est dans cette fenêtre que vous allez créer les relations entre les tables. Lorsque vous ouvrez cette section pour la première fois, il n'y a pas de tables; seulement un grand espace vide. Il faut premièrement ajouter les tables ou les requêtes que vous voulez relier.</p>
<p>Dans cet exercice, le fichier contient déjà toutes les tables qui seront nécessaires pour créer les relations sauf la table <strong>Client</strong>.</p>
<img src="/assets/img/oobase/rel_toutes_tables_vide.png" alt="relations entre toutes les tables de la base de données" />

    <h3>Ajouter une table</h3>
<p>Lorsque vous allez ouvrir la zone des relations pour la première fois, elle devrait être vide et une fenêtre contenant toutes les tables de votre base de données s'affichera. Il faudra y ajouter les tables ou les requêtes que vous voulez relier avant d'établir les relations.</p>
<div class="notice remarque">Si vous n'avez pas cette fenêtre, vous pouvez la faire afficher en cliquant sur le bouton <img src="/assets/img/oobase/bt_ajouter_tables.png" alt="bouton ajouter une table" />.</p>
<p>OU</p>
<p>Du menu <strong>Insertion</strong>, sélectionnez la commande <strong>Ajouter des tables</strong>.</p>
</div>
<p>La fenêtre suivante va apparaître&nbsp;:</p>
<img src="/assets/img/oobase/fen_ajouter_tables.png" alt="fenêtre ajouter une table" /><p>Avec OpenOffice Base, il est possible de relier des tables ou des requêtes si elles ont un champ en commun.</p>
<ol class="instruction">
	<li>Ajoutez les tables <strong>Client</strong>, <strong>Factures</strong>, <strong>Transition_Fact-Stock</strong>, <strong>Stock</strong> et <strong>Emplyés</strong>.</li>
</ol>
    <h3>Établir les relations entre les tables</h3>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>ID_client</strong> de la table <strong>Client</strong> avec la souris.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur sur le champ <strong>ID_Client</strong> de la table <strong>Factures</strong>.</li>
</ol>
<p>Une fois que vous aurez fait la relation, l'écran suivant va apparaître.</p>
<img src="/assets/img/oobase/rel_Clients-Factures.png" alt="relation entre Clients et Factures" />
<p>Vous pourrez alors éditer la relation pour la modifier.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur le lien entre les tables.</li>
	<li>Sélectionnez la commande <strong>Éditer</strong>.</li>
</ol>
<img src="/assets/img/oobase/fen_relation_clients_factures.png" alt="relation entre Clients et Factures" />
<p>Ou</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <strong>Nouvelle relation</strong> <img src="/assets/img/oobase/bt_nouvelle_relation.png" alt="Bouton nouvelle relation" />.</li>
</ol>
<p>Puis</p>
<ol class="instruction">
	<li>Sélectionnez le bouton radio <strong>Mise à jour en cascade</strong>.</li>
</ol>
    <h3>L'intégrité référentielle</h3>
<p>La notion d'intégrité référentielle permet d'établir une relation entre deux tables en s'assurant de l'existence d'une valeur dans la table reliée.</p>
<p>Si tel n'était pas le cas, OpenOffice Base afficherait une erreur et aucune relation ne pourrait être établie entre les tables.</p>
<img src="/assets/img/oobase/fen_erreur_integrite.png" alt="fenêtre erreur d'intégrité" />
<p class="notice remarque">Dans cet exemple, nous avons voulu faire correspondre un client numéro 6 de la table <strong>Factures</strong> 
avec un client numéro 6 de la table <strong>Client</strong> qui visiblement n'existe pas ! </p>
    <h3>L'option Mise à jour en cascade</h3>
<p>Cette option met à jour les enregistrements dans la ou les autres tables reliées.</p>
<p>Si vous changez le numéro de client, tous les enregistrements des autres tables reliées dont le code client est identique vont aussi être modifiés.</p>
<p class="notice exemple">Ex : Si vous changez la valeur du champ <strong>ID_client</strong> de la table <strong>Client</strong>, OpenOffice Base va la changer pour tous 
les champs en commun des tables reliées. Dans notre cas, ce serait seulement le champ <strong>ID_Client</strong> de la table <strong>Factures</strong>.</p>

    <h3>L'option Supprimer la cascade</h3>
<p>Cette option efface les enregistrements de l'autre table qui ont le même champ en commun que l'enregistrement supprimé.</p>
<p>Quand doit-on activer cette option ? Cela dépend du contenu des tables.</p>
<p class="notice exemple">Ex : pour des raisons fiscales, si un client part, il serait préférable de conserver ses données. 
Mais pour une autre base de données, pour des réservations par exemple, il serait préférable d'enlever les options 
en même temps qu'une réservation.</p>
<p>Voici une représentation des tables et de leurs relations. Vous devrez créer toutes les relations entre ces tables plus tard. Pour le moment, lisez les autres options concernant les relations.</p>
<img src="/assets/img/oobase/rel_toutes_tables.png" alt="liaisons entre les tables" />
 

