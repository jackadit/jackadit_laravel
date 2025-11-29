<?php
/**
 * page de cours 2a sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  12:55:00
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
<h1>ACCESS : LES TABLES (a)</h1>
<h2>Introduction</h2>
<p>Ce cours vous montre comment créer, modifier ou ajouter une table.</p>
<p>Les informations d'une base de données sont stockées dans des tables. Celles-ci sont composées de champs ayant des propriétés.</p>
<p>La première partie de cours consistera à créer une table pour conserver des informations sur les employés d'une société. Vous allez de ce fait voir toutes les étapes de la création et de la gestion d'une table.</p>
<p>Avant de commencer, vous devez créer une base de données. Pour cela :</p>
<img src="/assets/img/access/nouvelle_base_vide.png" alt="nouvelle base vide" />
<ol class="instruction">
	<li>Ouvrez le logiciel Access en cliquant sur le bouton <img src="/assets/img/access/icone_access.png" alt="icone access" /></li>
	<li>Cliquez sur l'option <strong>Base de données vide</strong></li>
	<li>Dans la nouvelle fenêtre, saisisssez le nom de fichier : <strong>Commerce.accdb</strong></li>
	<li>Cliquez sur <img src="/assets/img/access/bt_creer.png" alt="bouton créer" /></li>
</ol>
<p>La prochaine étape consiste à créer une première table que nous nommerons <strong>Employe</strong>.</p>
<p>Mais avant de commencer, voici quelques explications sur les champs de cette table <strong>Employe</strong>.</p>
<p>Chaque enregistrement de la table devra contenir le <strong>emp_nom</strong> et le <strong>emp_prenom</strong> de la personne. Le <strong>emp_poste</strong>  indiquera l'activité de la personne dans l'entreprise.</p>
<p>Pour cet exemple, il n'y aura que deux types de poste : les <strong>gérants</strong> et les <strong>vendeurs</strong>. Le champ <strong>emp_bureau</strong> indiquera le lieu de travail.</p>
<p>Pour cette société, il y a des employés à <strong>Haguenau</strong> et à <strong>Strasbourg</strong>.</p>
<p>Les gérants sont rémunérés par <strong>emp_salaire</strong> tandis que les vendeurs par <strong>emp_commission</strong>.</p> <p>Pour terminer, nous voulons également répertorier la date d'embauche de chaque employé.</p>
<p>Voici la liste des champs de la table <strong>Employe</strong> ainsi que les caractéristiques obligatoires. En plus de donner un nom au champ, nous devrons déterminer un type et, dans la plupart des cas, une taille. Nous devrons indiquer la taille des champs selon le nombre de caractères que nous voulons conserver dans ces champs.</p>

<p class="notice remarque">Pour des raisons pratique d'écriture de <a href="/cours/qlio/access4a">requêtes</a> que nous aborderons plus loin dans ce cours, il est d'usage de nommer les noms des champs d'une même table avec un préfixe.
  <br /> Par exemple dans la table <strong>Employe</strong>, nous conviendrons d'utiliser le prefixe <strong>emp_</strong>.
</p>

 <table class="table" summary="Structure de la table employés">
 <caption>
 Structure de la table employés
 </caption>
 <tr>
  <th>Nom du champ</th>
  <th>Type de champ</th>
  <th>Taille</th>
  <th>Format</th>
 </tr>
 <tr>
  <td>emp_nom</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_prenom</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_poste</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_bureau</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_salaire</td>
  <td>Monétaire</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_commission</td>
  <td>Monétaire</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_embauche</td>
  <td>Date/Heure</td>
  <td>&nbsp; </td>
  <td>Date, abrégé</td>
 </tr>
 </table>

<h2>Création d'une table</h2>
<p>Avant même de saisir des données, nous devons créer la structure de cette table. Nous devons donc déterminer une liste de champs ainsi que les caractéristiques de ces champs.</p>
<p>C'est seulement après cette étape qu'il sera possible de saisir des informations.</p>
<ol class="instruction">
    <li>Choisir le menu <strong>Créer</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_table_creation.png" alt="bouton creation table" />.</li>
</ol>
<p>Access vous offre plusieurs manières de créer une table de données&nbsp;:</p>
<ul>
	<li>Le mode <strong>Feuille de données</strong> affiche une grille dans laquelle vous saisissez simplement les informations que vous voulez conserver. Vous pourrez ensuite choisir le <strong>Mode création</strong> pour changer les options qu'Access avait déterminées par défaut.</li>
	<li>Le <strong>Mode création</strong> contient toutes les options pour créer et personnaliser la structure d'une table de données.</li>
	<li>L'<strong>assistant Table</strong> vous guide dans la création d'une table en vous demandant de choisir parmi une liste de champs qui se retrouvent le plus souvent dans une table.</li>
	<li>Vous pouvez aussi <strong>importer</strong> une table à partir d'une autre base de données d'Access ou même d'une feuille de travail d'Excel.</li>
	<li>La dernière option vous permet de faire un <strong>lien vers une autre table</strong> d'une autre base de données et d'accéder à ses informations.</li>
</ul>
<ol class="instruction">
	<li>Dans la liste des choix, sélectionnez l'option<strong> Mode création</strong>.</li>
</ol>

<h2>Donner un nom au champ</h2>
<img src="/assets/img/access/f_table1.png" alt="fenêtre table1" />
<p>Lorsque vous ajoutez un champ à la structure d'une table, vous devez indiquer un nom et un type de champ. Selon le type de champ, il faut également indiquer à Access le nombre de caractères que vous voulez préserver dans le champ.</p>
<p>Vous pouvez aussi, à votre choix, ajouter un commentaire pour donner plus d'information sur le contenu du champ.</p>

<h3>Les types de champs</h3>

<p>Access vous donne le choix entre plusieurs types de champ.</p>
<table class="table" summary="types de champ">
 <tr>
 <th class="w100p">Texte court</th>
 <td>Peut contenir des chiffres et/ou des lettres. Par défaut, Access indique que la taille du champ est de 50 caractères. Vous pouvez toujours modifier la taille du champ selon vos besoins. Le maximum est de 255 caractères.</td>
 </tr>
 <tr>
 <th>Texte long</th>
 <td>Utile pour inscrire des commentaires. La taille du champ n'est pas déterminée. Le maximum est de 65535 caractères.</td>
 </tr>
 <tr>
 <th>Numérique</th>
 <td>Peut contenir des chiffres seulement. Vous pouvez aussi déterminer le nombre de chiffres après la décimale selon vos besoins.</td>
 </tr>
 <tr>
 <th>Date/Heure</th>
 <td>Peut contenir ou afficher des dates ou même des horaires. Bien qu'une date ou une heure soit affichée, Access conserve ces données sous forme de nombre.<br />
  Chaque nombre représente une journée. Chiffre 1 est pour le 1 janvier 1900. Le chiffre 2 pour le 2 janvier ...<br />
  Access conserve l'heure, les minutes et les secondes en fractions de journée. Donc 0,5 est l'équivalent de midi, 0,75 de 18h etc. Il est ainsi plus facile de faire la différence entre deux dates.</td>
 </tr>
 <tr>
 <th>Monétaire</th>
 <td>Il s'agit d'un type de champ numérique dont le format affiche le signe &euro;.</td>
 </tr>
 <tr>
 <th>NuméroAuto</th>
 <td>Champ numérique entier qui s'incrémente automatiquement à chaque nouvel enregistrement que vous ajoutez à la table. C'est idéal pour ajouter de nouvelles factures, des commandes ou des clients.</td>
 </tr>
 <tr>
 <th>Oui/Non</th>
 <td>Champ logique. Détermine si un cas s'applique ou pas.<br />
  Ex.: un champ appelé <strong>Réglé</strong> permet de saisir si oui ou non une facture à été réglée.<br />
  Access conserve l'information sous forme numérique. 0 = faux, -1 = vrai.</td>
 </tr>
 <tr>
 <th>Objet OLE</th>
 <td>Permet de faire un lien avec un objet provenant d'autres applications de Windows.<br />
  Access est capable de gérer un objet en le liant ou en l'implantant dans la base de données (Object Linking and Embedding).</td>
 </tr>
 <tr>
 <th>Lien hypertexte</th>
 <td>Permet de faire un lien hypertexte vers un autre objet ou vers l'un des services d'Internet tel que FTP, gopher et les newsgroups.</td>
 </tr>
 <tr>
 <th>Assistant liste de choix</th>
 <td>Cet assistant vous permet d'accéder à une liste de choix prédéterminée qui est contenue dans une autre table ou requête, ou que vous avez saisie vous même.</td>
 </tr>
</table>

<p class="notice remarque">Rem : la description apparaîtra dans le coin inférieur gauche de la fenêtre au moment de la saisie ou de la modification des données.</p>

<h3>Les propriétés du champ.</h3>
<p>Ci-dessous, les caractéristiques ou les propriétés du champ texte.</p>
<table class="table" summary="Propriétés du champ Texte">
 <tr>
 <th class="w100p">Taille:</th>
 <td>Détermine le nombre de caractères qui peut être contenu dans un champ. Cette propriété est seulement valide pour les champs de type <strong>Texte</strong>. Les autres types de champs ont déjà une taille prédéterminée.</td>
 </tr>
 <tr>
 <th>Format:</th>
 <td>Détermine la façon dont l'information sera affichée dans le champ.</td>
 </tr>
 <tr>
 <th>Masque de saisie:</th>
 <td>Détermine la façon dont l'information sera saisie dans le champ.</td>
 </tr>
 <tr>
 <th>Légende:</th>
 <td>Texte qui sera affiché dans la feuille de données, les formulaires et les états à la place du nom du champ.</td>
 </tr>
 <tr>
 <th>Valeur par défaut:</th>
 <td>Détermine une valeur initiale lors de l'ajout de nouveaux enregistrements.</td>
 </tr>
 <tr>
 <th>Valide si:</th>
 <td>Place des bornes ou des limites sur le genre d'information qui peut être saisie dans un champ.<br />
  Par exemple, peu de personnes seraient prêtes à travailler pour un salaire négatif.</td>
 </tr>
 <tr>
 <th>Message si erreur:</th>
 <td>Affiche ce message si le contenu du champ ne respecte pas les restrictions de la propriété <strong>Valide si</strong>.</td>
 </tr>
 <tr>
 <th>Null Interdit:</th>
 <td>Si actif, ne permet pas d'avoir un contenu vide dans le champ.</td>
 </tr>
 <tr>
 <th>Chaîne vide autorisée:</th>
 <td>Permet d'insérer des espaces &quot; &quot; dans un champ.</td>
 </tr>
 <tr>
 <th>Indexé:</th>
 <td>Cette propriété permet de trier les informations en ordre croissant lors de l'affichage.<br />
  Elle est aussi nécessaire lors de la création de relations avec d'autres tables.</td>
 </tr>
</table>
<p>Ces dernières propriétés sont celles qui sont disponibles pour les champs de type <strong>Texte</strong>.</p>
<p>Voici quelques propriétés supplémentaires disponibles pour les autres types de champs.</p>
<table class="table" summary="Propriétés supplémentaires">
 <tr>
 <th class="w200p">Décimales<br />(Numérique, Monétaire)</th>
 <td>Détermine le nombre de décimales qui sera conservé avec le chiffre.</td>
 </tr>
 <tr>
 <th>Nouvelles Valeurs (NuméroAuto)</th>
 <td>Détermine si le prochain chiffre sera la suite de la série (Incrément) ou un chiffre au hasard (aléatoire).</td>
 </tr>
</table>

<p>Voilà le résultat escompté&nbsp;:</p>
 <img src="/assets/img/access/f_table_employe_init.png" alt="fenêtre table employé" />
<p class="notice remarque">Informations sur les propriétés des champs&nbsp;: On limitera la taille des champs "Texte court" à 30 caractères.</p>


<h3>Clé primaire</h3>
<p class="notice info">Une clé primaire est un champ, ou une série de champs, qui aide à différencier un enregistrement de tous les autres de la table.</p>
<p class="notice exemple">Ex : on peut utiliser le numéro de sécurité sociale pour différencier chacun des employés de la société.<br />
     On peut aussi utiliser un numéro d'inventaire pour différencier chacun des produits des autres, etc.</p>
<p class="notice remarque">Une clé primaire peut aussi être composée de plusieurs champs.<br />
C'est plus rare, mais tant que la combinaison des champs différencie un enregistrement des autres, c'est possible.</p>
<p>Nous verrons comment insérer la clé primaire sur un ou des champs de la table un peu plus loin dans ce cours, lors de la modification de la table.</p>

<h3>Clé secondaire</h3>
<p>Une clé secondaire est un champ qui est relié à la clé primaire d'une autre table.</p>
<p class="notice exemple">EX : le champ de la table <strong>Facture</strong> peut être relié à la clé <strong>N&deg; de client</strong> de la table <strong>Client</strong>.</p>
 
<h2>Sauvegarder la structure de la table</h2> 
<p>Après avoir conçu une table, il faut la conserver.</p> 
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
</ol>
 OU<br /><img src="/assets/img/access/f_enregistrer_sous.png" alt="enregistrer sous" />
<ol class="instruction">
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Enregistrer</strong>.</li>
</ol>

<p>Access va ensuite vous demander quel est le nom de la nouvelle table.</p>
<ol class="instruction">
	<li>Entrez le nom <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ok_active.png" alt="bouton ok" />.</li>
	<li>Access va vous demander si vous voulez ajouter une clé primaire à votre table. Pour le moment, cette table n'a pas besoin de clé primaire. Elle sera ajoutée un peu plus loin dans ce cours.</li>
</ol>
 <img src="/assets/img/access/f_aucune_cle_primaire.png" alt="aucune clé primaire" />
<ol class="instruction">
	<li>Cliquez sur le bouton <strong>Non</strong>.</li>
 </ol>
 <p class="notice remarque">Par convention, les noms des bases, des tables et des champs d'une base de données ne comporteront pas d'accent ni d'espace. Ceci dans un souci de compatibilité avec d'autres sytèmes en cas de migration sur un autre serveur et d'éviter d'inutiles problèmes d'encodage de police de caractères spéciaux.</p>


