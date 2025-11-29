<?php
/**
 * BUT : page du cours 4b
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       18/03/09        08:58:00
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




<h1>OpenOffice Base : LES REQUÊTES (b)</h1>

<h2>Exécuter une requête</h2>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter la requête" />.</li>
</ol>
<p>Les enregistrements qui répondent aux critères seront affichés.</p>

    <h3>Options spécialisées : les fonctions</h3>
<p>OpenOffice Base vous offre beaucoup de possibilités pour concevoir des requêtes complexes. Il intègre une série de fonctions que vous pouvez utiliser dans les requêtes, les formulaires ou les rapports.</p>
<p>Il est également possible de regrouper les enregistrements pour faire des opérations telles que sommer sur un champ spécifique, compter le nombre d'enregistrements, trouver la moyenne des valeurs, etc.</p>

<p>En plus de faire des recherches avec des critères, il est également possible de regrouper les champs pour faire des opérations telles que la somme, la moyenne de champs numérique, de compter le nombre d'enregistrements répondants aux critères, etc.</p>

<p>Voici la liste des opérations et la description de leur utilisation.</p>
 <table class="table" summary="liste des opérations et leurs descriptions">
  <tr>
   <th class="w150p">Nom des opérations</th>
   <th>Description</th>
  </tr>
   <td>Moyenne</td>
   <td>Trouver la moyenne d'un regroupement d'enregistrements. Seulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
   <td>Nombre</td>
   <td>Compte le nombre d'enregistrements qui répondent aux critères voulus.</td>
  </tr>
  <tr>
   <td>Maximum</td>
   <td>Trouver la plus grande valeur pour un champ.</td>
  </tr>
  <tr>
   <td>Minimum</td>
   <td>Trouver la plus petite valeur pour le champ.</td>
  </tr>
  <tr>
   <td>Somme</td>
   <td>Trouver la somme d'un regroupement d'enregistrements. Seulement pour un champ de type numérique ou monétaire.</td>
  </tr>
  <tr>
  <tr>
   <td>Groupe</td>
   <td>Regrouper sur le champ.</td>
  </tr>
 </table>
<p>Toutes les opérations ne s'appliquent pas à tous les types de champs.</p>
<p class="notice exemple">Ex : il n'est pas possible de faire une moyenne sur un champ de type Texte.</p>
<p>Voici une liste des opérations et le type de champ associé&nbsp;:</p>
 <table class="table" summary="liste des opérations et types de champs">
  <tr>
   <th>Opérations</th>
   <th>Texte</th>
   <th>Mémo</th>
   <th>Numérique<br />
	 	Date/Heure<br />
    Monétaire<br />
    ValeurAuto<br />
    Oui/Non</th>
   <th>OLE</th>
  </tr>
  <tr>
   <td>Moyenne</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Nombre</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
   <td>X</td>
  </tr>
  <tr>
   <td>Maximum</td>
   <td>X</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Minimum</td>
   <td>X</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td>Somme</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>X</td>
   <td>&nbsp;</td>
  </tr>
 </table>
 
<h2>Relier des tables</h2>
<p>Si votre requête requiert des champs qui proviennent de plusieurs tables ou d'autres requêtes, vous devez les relier par des champs en commun. Il se peut que vous ayez besoin de tables suppléme,ntaires pour créer des liens &quot;indirectes&quot; entre deux tables.</p>
<p class="notice exemple">Ex : dans la structure des relations entre les tables qui composent une facture, on remarque qu'il n'y a pas de 
relations directes entre la table <strong>Client</strong> et celle du stock de l'entreprise.</p>
<img src="/assets/img/oobase/rel_toutes_tables.png" alt="liaisons entre les tables" />
<p>Mais il y a une relation entre <strong>Client</strong> et <strong>Factures</strong>. Une autre relation entre <strong>Factures</strong> et <strong>Transition_Fact-Stock</strong> et une dernière entre <strong>Transition_Fact-Stock</strong> et <strong>Stock</strong>.</p>
<p>Bien qu'il n'y ait pas de relation &quot;directe&quot; entre <strong>Client</strong> et <strong>Stock</strong>, il est toujours possible de les &quot;relier&quot; en utilisant d'autres tables tels que <strong>Facture</strong> et <strong>Transition_Fact-Stock</strong>.</p>

<h2>Modifier une requête</h2>
 <p>Il est fort probable que vous vouliez à un moment donné modifier votre requête. Ne serait-ce que pour modifier l'ordre de présentation des champs de la requête.</p>
<p>La partie qui suit consiste à voir comment insérer, supprimer et déplacer un champ.</p>

    <h3>Insérer une colonne</h3>
 <p>L'insertion d'un champ se fait toujours en dernière position dans la liste des champs. Il n'est pas possible d'insérer une colonne entre deux champs existants. Pour contourner cette contrainte, vous devrez utiliser la méthode du déplacement (cf 5.3).</p>

    <h3>Supprimer une colonne</h3>
 <p>Lorsqu'un champ est inutile, il est facile de le retirer en suivant les instructions suivantes&nbsp;:</p>
<ol class="instruction">
	<li>Cliquez sur la colonne à supprimer avec le bouton droit de la souris.</li>
	<li>Sélectionnez la commande <strong>Supprimer</strong>.</li>
</ol>
  OU<br />
<ol class="instruction">
	<li>Sélectionnez la colonne à supprimer et appuyer sur la touche <img src="/assets/img/oobase/touche_suppr.png" alt="touche SUPPR" />.</li>
</ol>

    <h3>Déplacer une colonne</h3>
 <p>Vous pouvez modifier l'ordre de présentation des champs dans une requête. Pour cela, vous pouvez utiliser la technique du glisser-déplacer (c'est la pointe de la flèche (curseur) qui est utilisée pour sélectionner la colonne du champ et pour la déplacer.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête gris au-dessus du nom du champ à déplacer.</li>
	<li>Tout en restant appuyé sur le bouton gauche de la souris, déplacez le champ vers la gauche ou vers la droite selon vos besoins.</li>
</ol>
<img src="/assets/img/oobase/deplacer_colonne.png" alt="déplacer une colonne" />
<p>Le champ va se réinsérer dans la requête à l'endroit indiqué par la flèche.</p>

<h2>Exporter les données</h2>
<p>Comme pour les tables, OpenOffice Base peut exporter le résultat d'une requête vers d'autres applications. Cette option est plus avantageuse que pour les tables puisque vous pouvez demander les enregistrements qui répondent à vos besoins. L'exportation vous offre l'opportunité d'utiliser les avantages des autres applications.</p>
<p>Avant de pouvoir exporter les données, il faut premièrement enregistrer la requête dans la base de données OpenOffice Base.</p>
<img src="/assets/img/oobase/fen_enregistrer _sous.png" alt="enregistrer sous requête1" />
<ol class="instruction">
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Enregistrer</strong>.</li>
	<li>Entrez le nom de votre choix.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_OK.png" alt="bouton OK" />.</li>
</ol>
<p>Une fois la requête enregistrée, il est possible de l'exporter.</p>
<ol class="instruction">
	<li>Si vous êtes satisfait des résultats de la requête, sélectionnez du menu <strong>Fichier</strong> l'option <strong>Exporter</strong>.</li>
	<li>Dans la case <strong>Nom du fichie</strong>r, entrez le nom de votre choix.</li>
	<li>De la liste <strong>Type de fichier</strong>, sélectionnez le format qui répond à vos besoins.</li>
	<li>Cliquer sur le bouton <strong>Enregistrer</strong>.</li>
</ol>
<p>OpenOffice Base va ensuite créer un fichier dans le format choisi. Vous pourrez ensuite l'utiliser pour répondre à vos exigences.</p>

