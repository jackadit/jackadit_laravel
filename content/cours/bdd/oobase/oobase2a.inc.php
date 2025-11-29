<?php
/**
 * BUT : page du cours 2a 
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:19:00
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




<h1>OpenOffice Base : LES TABLES (a)</h1>
<h2>Introduction</h2>
<p>Ce cours vous montre comment créer, modifier ou ajouter une table.</p>
<p>Les informations d'une base de données sont stockées dans des tables. Celles-ci sont composées de champs ayant des propriétés.</p>
<p>La première partie de cours consistera à créer une table pour conserver des informations sur les employés d'une société. Vous allez de ce fait voir toutes les étapes de la création et de la gestion d'une table.</p>
<p>Avant de commencer, vous devez créer une base de données. Pour cela :</p>
<ol class="instruction">
	<li>Ouvrez le logiciel OpenOffice Base en cliquant sur le bouton <img src="/assets/img/oobase/bt_base.png" alt="bouton OpenOffice Base" width="16" height="16" /></li>
</ol>
<img src="/assets/img/oobase/base1.png" alt="nouvelle base" width="590" height="396" />
<ol class="instruction">
	<li>Cliquez sur l'option <strong>Créer une base de données</strong></li>
	<li>Cliquez sur <img src="/assets/img/oobase/bt_suivant.png" alt="bouton Suivant" width="96" height="21" /></li>
</ol>
<img src="/assets/img/oobase/base2.png" alt="nouvelle base" width="590" height="396" />
<ol class="instruction">
	<li>Cliquez sur <img src="/assets/img/oobase/bt_terminer.png" alt="bouton Terminer" width="96" height="21" /></li>
	<li>Enregistrez cette base sous : <strong>Commerce.odb</strong></li>
</ol>
<p>La prochaine étape consiste à créer une première table que nous nommerons <strong>Employe</strong>.</p>
<p>Mais avant de commencer, voici quelques explications sur les champs de cette table <strong>Employe</strong>.</p>
<p>Chaque enregistrement de la table devra contenir le <strong>emp_nom</strong> et le <strong>emp_prenom</strong> de la personne. Le <strong>emp_poste</strong>  indiquera l'activité de la personne dans l'entreprise.</p>
<p>Pour cet exemple, il n'y aura que deux types de poste : les <strong>gérants</strong> et les <strong>vendeurs</strong>. Le champ <strong>emp_bureau</strong> indiquera le lieu de travail.</p>
<p>Pour cette société, il y a des employés à <strong>Haguenau</strong> et à <strong>Strasbourg</strong>.</p>
<p>Les gérants sont rémunérés par <strong>emp_salaire</strong> tandis que les vendeurs par <strong>emp_commission</strong>.</p> <p>Pour terminer, nous voulons également répertorier la date d'embauche de chaque employé.</p>
<p>Voici la liste des champs de la table <strong>Employe</strong> ainsi que les caractéristiques obligatoires. En plus de donner un nom au champ, nous devrons déterminer un type et, dans la plupart des cas, une taille. Nous devrons indiquer la taille des champs selon le nombre de caractères que nous voulons conserver dans ces champs.</p>

 <table class="table" summary="Structure de la table employés">
 <caption>
 Structure de la table employés
 </caption>
 <tr>
  <th>Nom du champ</th>
  <th>Type de champ</th>
  <th>Longueur</th>
  <th>Format</th>
  <th>Autre</th>
 </tr>
 <tr>
  <td>Nom</td>
  <td>Texte&nbsp;[VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Prenom</td>
  <td>Texte&nbsp;[VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Poste</td>
  <td>Texte&nbsp;[VARCHAR]</td>
  <td>25</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Bureau</td>
  <td>Texte&nbsp;[VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Salaire</td>
  <td>Décimal&nbsp;[DECIMAL]</td>
  <td>&nbsp; </td>
  <td>Monétaire</td>
  <td>Valeur par défaut = 0</td>
 </tr>
 <tr>
  <td>Commission</td>
  <td>Décimal&nbsp;[DECIMAL]</td>
  <td>&nbsp; </td>
  <td>Monétaire</td>
  <td>Valeur par défaut = 0</td>
 </tr>
 <tr>
  <td>Embauche</td>
  <td>Date&nbsp;[DATE]</td>
  <td>&nbsp; </td>
  <td>JJ/MM/AAAA</td>
  <td>&nbsp; </td>
 </tr>
 </table>

<h2>Création d'une table</h2>
<p>Avant même de saisir des données, nous devons créer la structure de cette table. Nous devons donc déterminer une liste de champs ainsi que les caractéristiques de ces champs.</p>
<p>C'est seulement après cette étape qu'il sera possible de saisir des informations.</p>
<p>L'onglet Tables comprend plusieurs tâches&nbsp;:</p>
<ul>
	<li><img width="16" height="16" src="/assets/img/oobase/bt_creer_table.png" alt="bouton Créer une table en mode Ébauche" /><strong> Créer une table en mode Ébauche</strong>...</li>
	<li><img width="16" height="16" src="/assets/img/oobase/bt_assistant_table.png" alt="bouton Utiliser l'assistant pour créer une table" /><strong> Utiliser l'assistant création de table</strong>...</li>
	<li><img width="16" height="16" src="/assets/img/oobase/bt_creer_vue.png" alt="bouton Créer une vue" /><strong> Créer une vue</strong>...</li>
</ul>
<p>Pour les besoins de l'apprentissage, nous allons utiliser le mode <strong>Ébauche</strong>. Mais en général, il est préférable d'utiliser l'assistant.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img width="95" height="54" src="/assets/img/oobase/bt_tables.png" alt="onglet tables" />.</li>
	<li>Cliquez sur le bouton <img width="16" height="16" src="/assets/img/oobase/bt_creer_table.png" alt="bouton Créer une table" /> <strong>Créer une table en mode ébauche</strong>.</li>
</ol>
<h2>Donner un nom au champ</h2>
<!--img src="/assets/img/oobase/ebauche_table1.png" alt="Ébauche table" /-->
<p>Lorsque vous ajoutez un champ à la structure d'une table, vous devez indiquer un nom et un type de champ. Selon le type de champ, il faut également indiquer à OpenOffice Base le nombre de caractères que vous voulez préserver dans le champ.</p>
<p>Vous pouvez aussi, à votre choix, ajouter une description pour donner plus d'information sur le contenu du champ.</p>

<br class="clear" />

    <h3>Les types de champs</h3>

<p>OpenOffice Base vous donne le choix entre plusieurs types de champ.</p>
<table class="table" summary="types de champ">
<caption>Les valeurs entre parenthèses indiquent les valeurs par défaut de champs à longueur variable
<br /><strong>SR</strong> : saisie requise <strong>AV</strong> : Auto-valeur <strong>VD</strong> : Valeur par défaut <strong>EF</strong> : exemple de format</caption>
 <tr>
 <th class="w160p">Nom</th>
 <th class="w190p">Type</th>
 <th class="w100p">Longueur</th>
 <th class="w30p">Dec</th>
 <th class="w30p">SR</th>
 <th class="w30p">AV</th>
 <th class="w30p">VD</th>
 <th class="w30p">EF</th>
 <th class="dercell">Entier ne prenant que des très petites valeurs</th>
 </tr>
 <tr>
 <td>TinyInteger</td>
 <td>TINYINT</td>
 <td>3</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Entier ne prenant que des très petites valeurs</td>
 </tr>
 <tr>
 <td>BigInt</td>
 <td>BIGINT</td>
 <td>19</td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Grand entier</td> </tr>
 <tr>
 <td>Image</td>
 <td>LONGVARBINARY</td>
 <td>2147483647</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td>Image stockée sous forme binaire, format bitmap (*.bmp)</td> </tr>
 <tr>
 <td>Champ Binaire</td>
 <td>VARBINARY</td>
 <td>2147483647</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td></td>
 <td class="coche"></td>
 <td>Données binaires</td> </tr>
 <tr>
 <td>Champ Binaire (fixe)</td>
 <td>BINARY</td>
 <td>2147483647</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td></td>
 <td class="coche"></td>
 <td>Données binaires fixes</td> </tr>
 <tr>
 <td>Memo</td>
 <td>LONGVARCHAR</td>
 <td>2147483647</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Longue suite de caractères</td> </tr>
 <tr>
 <td>Texte (fixe)</td>
 <td>CHAR</td>
 <td>(50)</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Entier ne prenant que des très petites valeurs</td> </tr>
 <tr>
 <td>Nombre</td>
 <td>NUMERIC</td>
 <td>(50)</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Données numériques</td> </tr>
 <tr>
 <td>Decimal</td>
 <td>DECIMAL</td>
 <td>(50)</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre décimal</td> </tr>
 <tr>
 <td>Integer</td>
 <td>INTEGER</td>
 <td>10</td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre entier</td> </tr>
 <tr>
 <td>SmallInteger</td>
 <td>SMALLINT</td>
 <td>5</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre entier</td> </tr>
 <tr>
 <td>Float</td>
 <td>FLOAT</td>
 <td>17</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre entier</td> </tr>
 <tr>
 <td>Real</td>
 <td>REAL</td>
 <td>17</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre réel</td> </tr>
 <tr>
 <td>Double</td>
 <td>DOUBLE</td>
 <td>17</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Nombre décimal</td> </tr>
 <tr>
 <td>Texte</td>
 <td>VARCHAR</td>
 <td>10</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Chaîne de caractères</td> </tr>
 <tr>
 <td>Texte</td>
 <td>VARCHAR_IGNORCASE</td>
 <td>10</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Chaîne de caractères</td> </tr>
 <tr>
 <td>Oui/Non</td>
 <td>BOOLEAN</td>
 <td>1</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Case à cocher oui/non</td> </tr>
 <tr>
 <td>Date</td>
 <td>DATE</td>
 <td></td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Date</td> </tr>
 <tr>
 <td>Heure</td>
 <td>TIME</td>
 <td></td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Heure</td> </tr>
 <tr>
 <td>Date/Heure</td>
 <td>TIMESTAMP</td>
 <td></td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Date et Heure</td> </tr>
 <tr>
 <td>OTHER</td>
 <td></td>
 <td>2147483647</td>
 <td></td>
 <td class="coche"></td>
 <td></td>
 <td class="coche"></td>
 <td class="coche"></td>
 <td>Autre format</td> </tr>
</table>

<p class="notice remarque">Un champ d'Auto-Valeur est la plupart du temps une clef primaire. Il est incrémenté
automatiquement à l'ajout d'un nouvel enregistrement, il correspond au "NuméroAuto" présent
dans Access.<br />
Lors de la création d'un champ d'Auto-Valeur (type Integer ou Bigint), il apparaît une ligne
"expression d'auto-incrément", si le champ est une clef primaire, il faut entrer comme paramètre
"IDENTITY".</p>

    <h3>Les propriétés de champs</h3>
<p>Ci-dessous, les caractéristiques ou les propriétés de champs que vous pouvez rencontrer.</p>
<table class="table" summary="Propriétés du champ Texte">
 <tr>
 <th class="w200p">Saisie requise</th>
 <td>Activez cette option si ce champ n'accepte aucune valeur NULL et si l'utilisateur doit donc toujours y saisir des données.</td>
 </tr>
 <tr>
 <th>Longueur</th>
 <td>Saisissez la longueur de texte maximale autorisée.</td>
 </tr>
 <tr>
 <th>Valeur par défaut</th>
 <td>Saisissez une valeur par défaut pour ce champ.<br />
Lorsque vous saisirez des données ultérieurement dans la table, cette chaîne sera utilisée à chaque nouvel enregistrement pour le champ sélectionnée. Elle doit donc correspondre au format de cellule qui doit être saisi en-dessous.</td>
 </tr>
 <tr>
 <th>Exemple de format</th>
 <td>La propriété &laquo;exemples de format&raquo; (EF) permet facilement de formater un champ de la table en
définissant sont type (monétaire, date, pourcentage, scientifique...) et son alignement dans la cellule.</td>
 </tr>
</table>
<img width="529" height="397" src="/assets/img/oobase/fen_formatage_champ.png" alt="Fenêtre formatage de champ" />
<p>Cet exemple de formatage est disponible pour les champs de type <strong>Nombre, Decimal, Integer, Small Integer, Float, Real</strong> et <strong>Double</strong>.</p>
<p>Voilà le résultat escompté&nbsp;:</p>
 <img src="/assets/img/oobase/fen_ebauche_table2.png" alt="fenêtre table remplie" />
<p>Pour avoir plus d'informations sur les propriétés des champs&nbsp;:</p>
<ol class="instruction">
	<li>Placez le pointeur dans la propriété pour laquelle vous voulez plus d'informations.</li>
 	<li>Appuyez sur la touche <img src="/assets/img/oobase/touche_F1.png" alt="touche F1" />.</li>
</ol>
<p>L'aide d'OpenOffice Base va vous afficher l'information qu'elle possède sur cette propriété.</p>

    <h3>Clé primaire</h3>
<p>Une clé primaire est un champ, ou une série de champs, qui aide à différencier un enregistrement de tous les autres de la table.</p>
<div class="notice exemple">Ex : on peut utiliser le numéro de sécurité sociale pour différencier chacun des employés de la société.<br />
     On peut aussi utiliser un numéro d'inventaire pour différencier chacun des produits des autres, etc.</div>
<p>Nous verrons comment insérer la clé primaire sur un champ de la table un peu plus loin dans ce cours, lors de la modification de la table.</p>

    <h3>Clé secondaire</h3>
<p>Une clé secondaire est un champ qui est relié à la clé primaire d'une autre table.</p>
<div class="notice exemple">EX : le champ de la table <strong>Facture</strong> peut être relié à la clé <strong>N&deg; de client</strong> de la table <strong>Client</strong>.</div>
 
<h2>Sauvegarder la structure de la table</h2> 
<p>Après avoir conçu une table, il faut la conserver.</p> 
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
</ol>
 OU<br /><img src="/assets/img/oobase/fen_ebauche_table3.png" alt="enregistrer sous" />
<ol class="instruction">
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Enregistrer</strong>.</li>
</ol>

<p>OpenOffice Base va ensuite vous demander quel est le nom de la nouvelle table.</p>
<ol class="instruction">
	<li>Entrez le nom <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_OK.png" alt="bouton Ok" />.</li>
	<li>OpenOffice Base va vous demander si vous voulez ajouter une clé primaire à votre table. Pour le moment, cette table n'a pas besoin de clé primaire. Elle sera ajoutée un peu plus loin dans ce cours.</li>
</ol>
 <img src="/assets/img/oobase/fen_ebauche_table4.png" alt="aucune clé primaire" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_non.png" alt="bouton Non" />.</li>
 </ol>


