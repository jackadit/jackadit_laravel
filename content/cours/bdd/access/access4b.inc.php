<?php
/**
 * page de cours 4b sur ACCESS 2003
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
<h1>ACCESS: LES REQUÊTES (b)</h1>

<h2>Exécuter une requête</h2>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</li>
</ol>
<p>OU</p>
<ol class="instruction">
	<li>Dans l'onglet <strong>Affichages</strong> du menu <strong>Accueil</strong>, sélectionnez l'option <strong>Mode Feuille de données</strong>.</li>
</ol>
<p>Les enregistrements qui répondent aux critères seront affichés.</p>
<ol class="instruction">
	<li>Pour revenir ensuite au <strong>Mode création</strong>, Cliquez sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
</ol>
<p>OU</p>
<ol class="instruction">
	<li>Dans l'onglet  <strong>Affichages</strong> du menu <strong>Accueil</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
</ol>

    <h3>Options spécialisées : les fonctions, le générateur d'expression et les opérations</h3>
<p>Access vous offre beaucoup de possibilités pour concevoir des requêtes complexes. Il intègre une série de fonctions que vous pouvez utiliser dans les requêtes, les formulaires ou les états.</p>
<p>Pour vous aider à utiliser ces fonctions, Access vous propose le générateur d'expressions qui vous donne accès à toutes les ressources disponibles à partir du logiciel.</p>
<p>Que ce soit les champs, les tables, les requêtes, les formulaires, les états, les macros, les modules ou les fonctions intégrées, ils sont tous disponibles à partir du générateur d'expressions.</p>
<p>Il est également possible de regrouper les enregistrements pour faire des opérations telles que la somme sur un champ donné, pour compter, pour trouver la moyenne parmi d'autres, etc.</p>

<h4>Les fonctions</a></h4>
<p>En plus des champs calculés, Access possède des fonctions intégrées pour vous aider à réaliser des requêtes et des analyses plus complexes. Il y a <strong>148</strong> <strong>fonctions</strong> disponibles qui sont regroupées en <strong>14 catégories</strong>.</p>
<p>Voici la liste des catégories et le nombre de fonctions dans chacune des catégories.</p>
 <table class="table" summary="liste des catégories et leur nombre de fonctions">
  <tr>
   <th>Nom de la catégorie</th>
   <th>Nombre de fonctions</th>
  </tr>
  <tr>
    <td>Base de données</td>
    <td>13</td>
  </tr>
  <tr>
    <td>Conversion</td>
    <td>47</td>
  </tr>
  <tr>
    <td>Date/Heure</td>
    <td>25</td>
  </tr>
  <tr>
    <td>Déroulement prog</td>
    <td>3</td>
  </tr>
  <tr>
    <td>DDE</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Financier</td>
    <td>13</td>
  </tr>
  <tr>
    <td>Général</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Gestion d'erreur</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Inspection</td>
    <td>10</td>
  </tr>
  <tr>
    <td>Mathématique</td>
    <td>13</td>
  </tr>
  <tr>
    <td>Messages</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Regroup.domaine</td>
    <td>12</td>
  </tr>
  <tr>
    <td>Regroupement SQL</td>
    <td>9</td>
  </tr>
  <tr>
   <td>Tableaux</td>
   <td>2</td>
  </tr>
  <tr>
    <td>Texte</td>
    <td>40</td>
  </tr>
</table>
 <ol class="instruction">
   <li>Pour afficher le générateur d'expression, appuyez sur les touches <img src="/assets/img/access/touche_ctrl.png" alt="touche CTRL" /> + <img src="/assets/img/access/touche_f2.png" alt="touche F2" /></li>
  </ol>
  <p>OU</p>
  <ol class="instruction">
    <li>Dans le menu  <strong>Conception de requête</strong>, dans l'onglet <strong>Paramètres de requête</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_generateur_expression.png" alt="Bouton générateur d'expressions" /></li>
  </ol>
  <img src="/assets/img/access/generateur_expression.png" alt="générateur d'expression" />
<p>À partir de cette fenêtre, vous avez accès à toutes les ressources disponibles d'Access. Pour voir la liste des fonctions :</p>
<ol class="instruction">
	<li>Faites un double-clique sur le dossier <strong>Fonctions</strong> situé dans la première colonne de la fenêtre.</li>
	<li>Cliquez sur le dossier <strong>Fonctions intégrées</strong>.</li>
</ol>
<p>Le contenu de la deuxième et la troisième colonne vont s'afficher. La deuxième colonne contient la liste des catégories de fonctions, la troisième, la liste des fonctions disponibles.</p>
<p>Pour avoir plus d'informations sur l'une des fonctions :</p>
<ol class="instruction">
	<li>Cliquez sur la fonction qui vous intéresse.</li>
	<li>Cliquez sur le bouton <strong>Aide</strong>.</li>
</ol>
<p>Une description de la fonction va apparaître dans une fenêtre.</p>
	
<h4>Les opérations</a></h4>
 <p>En plus de faire des recherches avec des critères ou des fonctions intégrées d'Access, il est également possible de regrouper les champs pour faire des opérations telles que la somme, la moyenne de champs numérique.</p>
<p>Parmi d'autres opérations, il est aussi également possible de compter le nombre d'enregistrements qui répondent à certains critères.</p>
<ol class="instruction">
	<li>Pour accéder aux opérations, dans le menu <strong>Conception des requêtes</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>

<p>Voici la liste des opérations et ce que vous pouvez accomplir.</p>
 <table class="table" summary="liste des opérations et leurs descriptions">
  <tr>
   <th class="w200p">Nom des opérations</th>
   <th>Description</th>
  </tr>
  <tr>
   <td>Regroupement</td>
   <td>Regrouper sur le champ.</td>
  </tr>
  <tr>
   <td>Somme</td>
   <td>Trouver la somme d'un regroupement d'enregistrements. eulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
   <td>Moyenne</td>
   <td>Trouver la moyenne d'un regroupement d'enregistrements. Seulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
   <td>Min</td>
   <td>Trouver la plus petite valeur pour le champ.</td>
  </tr>
  <tr>
   <td>Max</td>
   <td>Trouver la plus grande valeur pour un champ.</td>
  </tr>
  <tr>
   <td>Compte</td>
   <td>Compte le nombre d'enregistrements qui répondent auxcritères voulus.</td>
  </tr>
  <tr>
   <td>StDev (EcartType)</td>
   <td>Trouver l'écart type d'un regroupement d'enregistrements. Seulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
   <td>Var</td>
   <td>Trouver la variance d'un regroupement d'enregistrements. Seulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
   <td>Premier</td>
   <td>Trouver le premier enregistrement inscrit dans la table qui répond aux critères demandés.</td>
  </tr>
  <tr>
   <td>Dernier</td>
   <td>Trouver le dernier enregistrement inscrit dans la table qui répond aux critères demandés.</td>
  </tr>
  <tr>
   <td>Expression</td>
   <td>Entrer ses propres formules ou champs calculs pour un regroupement.</td>
  </tr>
  <tr>
   <td>Où</td>
   <td>Entrer des critères sans qu'ils soient pris en  considération pour le regroupement.</td>
  </tr>
 </table>
<p>Toutes les opérations ne s'appliquent pas à tous les types de champs.</p>
<p class="notice exemple">Ex : il est impensable de faire une moyenne sur un champ de type Texte.</p>
<p>Voici une liste des opérations et sur quel type de champs ils peuvent s'appliquer :</p>
 <table class="table" summary="liste des opérations et types de champs">
  <tr>
   <th>Opérations</th>
   <th>Texte</th>
   <th>Texte long</th>
   <th>Numérique<br />
	 	Date/Heure<br />
    Monétaire<br />
    NuméroAuto<br />
    Oui/Non</th>
   <th>OLE</th>
  </tr>
  <tr>
   <td>Somme</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Moyenne</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Min</td>
   <td>X</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Max</td>
   <td>X</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Compte</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
  </tr>
  <tr>
   <td>StDev</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Var</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Premier</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
  </tr>
  <tr>
   <td>Dernier</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
  </tr>
 </table>
 
<h2>Relier des tables</h2>
<p>Si votre requête requiert des champs qui proviennent de plusieurs tables ou d'autres requêtes, vous devez les relier par des champs en commun. Il est également possible que vous ayez besoin d'autres tables pour créer des liens &quot;indirectes&quot; entre deux tables.</p>
<p class="notice exemple">Ex : dans la structure des relations entre les tables qui composent une facture, on remarque qu'il n'y a pas de 
relations directes entre la table <strong>Client</strong> et celle des articles de l'entreprise.</p>
<img src="/assets/img/access/f_relations.png" alt="relations entre les tables" />
<p>Mais il y a une relation entre <strong>Client</strong> et <strong>Facture</strong>. Une autre relation entre <strong>Facture</strong> et <strong>Liaison_Fact-Art</strong>  et une dernière entre <strong>Liaison_Fact-Art</strong>  et <strong>Article</strong>.</p>
<p>Bien qu'il n'y ait pas de relation &quot;directe&quot; entre <strong>Client</strong> et <strong>Article</strong>, il est toujours possible de les &quot;relier&quot; en utilisant d'autres tables tels que <strong>Facture</strong> et <strong>Liaison_Fact-Art</strong> .</p>

<h2>Modifier une requête</h2>
 <p>Après votre premier aperçu du résultat de la requête, il est possible que vous vouliez modifier un ou plusieurs éléments de la requête.
Peut-être voulez-vous changer l'ordre de présentation des champs dans la requête.</p>
<p>La partie qui suit consiste à voir comment insérer une nouvelle colonne entre des champs, supprimer un champ de la liste et comment déplacer un champ dans l'ordre des champs affichés de la requête.</p>

    <h3>Insérer une colonne</h3>
 <p>Il est possible d'insérer une colonne entre deux champs dans la liste des champs de la requête. Cela est avantageux lorsque vous voulez insérer un champ calculé entre deux champs de la requête.</p>
<ol class="instruction">
	<li>Cliquez sur la colonne placée à la droite de la colonne que vous voulez insérer.</li>
	<li>Du menu <strong>Conception de requêtes</strong>, cliquez le bouton <img src="/assets/img/access/bt_inserer_colonne.png" alt="Bouton insérer des colonnes" />.</li>
</ol>

    <h3>Supprimer une colonne</h3>
 <p>Si vous n'avez plus besoin d'un champ pour une requête, il est facile de le retirer en suivant les instructions suivantes :</p>
<ol class="instruction">
	<li>Cliquez sur la colonne à supprimer.</li>
	<li>Du menu <strong>Conception de requêtes</strong>, cliquez le bouton <img src="/assets/img/access/bt_supprimer_colonne.png" alt="Bouton supprimer des colonnes" />.</li>
</ol>
  OU<br />
<ol class="instruction">
	<li>Sélectionnez la colonne à supprimer et appuyer sur la touche <img src="/assets/img/access/touche_suppr.png" alt="touche SUPPR" />.</li>
</ol>

    <h3>Déplacer une colonne</h3>
 <p>Il est également possible de changer l'ordre de présentation des champs dans la requête. Avant de commencer l'opération, prenez note que c'est la pointe de la flèche (curseur) qui est utilisée pour sélectionner la colonne du champ et pour la déplacer.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête gris au-dessus du nom du champ à déplacer.</li>
</ol>
<img src="/assets/img/access/deplacer_colonne.png" alt="déplacer une colonne" />
<p>La colonne au complet devrait être sélectionnée.</p>
<ol class="instruction">
	<li>Placez le pointeur par-dessus de la boîte grise du champ à déplacer.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le champ vers la gauche ou vers la droite selon vos besoins.</li>
</ol>
<p>Le champ va se réinsérer dans la requête à l'endroit où il y a une barre verticale entre les champs dès que vous relâcherez le bouton gauche de la souris.</p>

<h2>Exporter les données</h2>
<p>Comme pour les tables, Access peut exporter le résultat d'une requête vers d'autres applications. Cette option est plus avantageuse que pour les tables puisque vous pouvez demander les enregistrements qui répondent à vos besoins. L'exportation vous offre l'opportunité d'utiliser les avantages des autres applications.</p>
<p>Afin de pouvoir exporter les données, il faut avoir enregistré la requête dans la base de données Access.</p>
<p>Une fois la requête enregistrée, il est possible de l'exporter.</p>

<ol class="instruction">
	<li>Du menu <strong>Données externes</strong>, sélectionnez l'option de votre choix parmi les choix proposés <img src="/assets/img/access/f_exporter.png" alt="fenêtre exporter" />.</li>
</ol>

<p>Access va ensuite créer un fichier dans le format choisi. Vous pourrez ensuite l'utiliser pour répondre à vos exigences.</p>

