<?php
/**
 * BUT : page du cours 3b
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




<h1>OpenOffice Base : LES RELATIONS (b)</h1>

<h2>Supprimer une relation</h2>
<p>Il existe quelques raisons pour retirer une relation entre des tables ou des requêtes.</p>
<p>La première est que vous avez commis une erreur au moment de la création de la relation. Vous avez accidentellement choisi le mauvais champ au moment de la création de la relation. Ou, après une analyse plus approfondie, vous changez les relations entre les tables.</p>
<p>Pour vous permettre de modifier la structure d'une table reliée, il peut être nécessaire auparavant de retirer une relation. OpenOffice Base vous le précisera si c'est le cas.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur la ligne qui relie les deux tables.</li>
	<li>Du menu contextuel, sélectionnez la commande <strong>Supprimer</strong>.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Appuyez sur la touche <img src="/assets/img/oobase/touche_suppr.png" alt="touche SUPPR" /> du clavier.</li>
</ol>

<h2>Modifier les options d'une relation</h2>	 
<ol class="instruction">
	<li>Double-cliquez sur la ligne qui relie les deux tables.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur la ligne qui relie les deux tables.</li>
	<li>Du menu contextuel, sélectionnez la commande <strong>Éditer...</strong>.</li>
</ol>
<p>Il est maintenant temps de créer les relations entre les tables. Voici un cas particulier qui pourrait bien vous arriver au moment de la création de relations entre les tables de votre base de données.</p>
 <h3>Création d'une relation entre les tables Facture et Employés.</h3>
<p>Il faut premièrement déterminer de quel type de relation il s'agit ou sa cardinalité.</p>
<ol>
   <li>Une facture est générée par un seul vendeur.</li>
   <li>Un vendeur peut générer plusieurs factures.</li>
</ol>
<p>Il s'agit d'une relation de type <strong>un à plusieurs</strong>.</p>
<p>Il faut maintenant créer la relation entre les tables <strong>Employe</strong> et <strong>Facture</strong> sur leur champ en commun.</p>
<ol class="instruction">
	<li>Sélectionnez le champ <strong>Numero_Poste</strong> de la table <strong>Employe</strong>.</li>
	<li>&Agrave; l'aide la souris, faites-le glisser sur le champ <strong>ID_Vendeur</strong> de la table <strong>Factures</strong>.</li>
</ol>
<p>Le message suivant apparaitra :</p>
<img src="/assets/img/oobase/fen_erreur_integrite2.png" alt="fenêtre erreur d'intégrité" />

    <h3>Que faire lorsqu'OpenOffice Base refuse de créer une relation</h3>
  <p>Comme mentionné ci-dessus, la relation entre les tables <strong>Factures</strong> et <strong>Employe</strong> ne fonctionnera pas. Le contenu de certains enregistrement sur le champ en commun (<strong>ID_Vendeur</strong> et <strong>Numero_Poste</strong>) ne respectent pas les règles d'intégrité. OpenOffice Base vous affichera donc le message d'erreur ci-dessus.</p>
<p class="notice remarque">Il faut attentivement lire le message pour comprendre ce qui arrive. Dans notre cas, c'est la phrase &laquo;Integrity constraint violation - no parent 7, table : Factures in statement&raquo; qui explique la situation&nbsp;: &laquo;&nbsp;La donnée 7 du champ <strong>ID_Vendeur</strong> de la table <strong>Factures</strong> ne respectent pas les règles d'intégrité référentielle&nbsp;&raquo;. Il fait référence à un numéro de poste inexistant dans la table <strong>Employe</strong>.</p>
<p>Et en y regardant de plus près on se rend compte que les derniers enregistrements dans le champ <strong>ID_Vendeur</strong> de la table <strong>Factures</strong> n'ont pas de contenu valide dans le champ correspondant de la table <strong>Employe</strong>. C'est pour cette raison qu'OpenOffice Base refuse de créer une relation permanente entre ces deux tables.</p>
<p>Pour cet exemple, vous connaissez la cause du problème. Il suffit de saisir des valeurs appropriés pour ces enregistrements pour régler le problème.</p>
<ol class="instruction">
	<li>Refaite la relation entre les tables <strong>Employe</strong> et <strong>Facture</strong> sur leur champ en commun (<strong>Numero_Poste</strong> et <strong>ID_Vendeur</strong>).</li>
</ol>
<p>Les deux tables sont maintenant reliées sur un champ en commun.</p>
<ol class="instruction">
	<li>Créez maintenant les relations entre les tables de cette base de données telles que sur l'image ci-dessous.</li>
</ol>
<img src="/assets/img/oobase/rel_toutes_tables.png" alt="relations entre toutes les tables" />
<h2>Les relations de plusieurs à plusieurs</h2>
<p>OpenOffice Base vous permet de créer facilement des relations de type <strong>un à un</strong> et de <strong>un à plusieurs</strong>.</p>
<p>Cependant, la création de relations de type <strong>plusieurs à plusieurs</strong> nécessitent plus de travail.</p>
<p>Prenons l'exemple de la création d'une relation entre les tables <strong>Factures</strong> et <strong>Produits</strong>. Avant tout, il faut déterminer de quel type de relation il s'agit.</p>
<ul>
	<li>Une facture peut contenir plusieurs produits.</li>
	<li>Un produit peut être contenu dans plusieurs factures.</li>
	<li>Il s'agit bien d'une relation de plusieurs à plusieurs.</li>
</ul>
<p>Il est impossible de faire directement une relation de type plusieurs à plusieurs. Il faut créer une <strong>table intermédiaire</strong> qui contient la clé primaire des deux tables.</p>
<p>Il faut ensuite créer deux relations de type <strong>un à plusieurs</strong> entre les tables <strong>Factures</strong>, <strong>Produits</strong> et la table intermédiaire en utilisant le champ de la clé primaire des deux tables.</p>
<p class="notice remarque">N'oubliez pas d'activer l'option de <strong>mise à jour en cascade</strong>.</p>
<p>Pour qu'une relation fonctionne, vous devez avoir le même type d'informations dans les deux tables reliées.</p>
<p>L'option &quot;<strong>Mise à jour en cascade</strong>&quot; s'assure que l'information se retrouve aussi dans l'autre table. Il vous est donc inutile de vous préoccuper d'avoir l'information dans les deux tables. OpenOffice Base s'en occupe pour vous.</p>

    <h3>Sortir de l'écran des relations</h3>
<p>Si vous voulez conserver les relations entre les tables, vous devez premièrement les sauvegarder avant de quitter le mode de relations.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Fermer</strong>.</li>
</ol>
	 
<h2>Création d'une facture</h2>
<p>C'est ici que toutes les relations entre les tables seront mises en avantage. Le prochain exercice consiste à la création d'une requête qui contient toutes les tables reliées.</p>
<ol class="instruction">
	<li>Cliquez sur l'onglet des requêtes <img src="/assets/img/oobase/bt_requetes.png" alt="bouton requêtes" />.</li>
	<li>Cliquez sur le bouton <strong>Utiliser l'assistant de création de requête...</strong> <img src="/assets/img/oobase/bt_assistant_requete.png" alt="bouton assistant requête" />.</li>
	<li>De la liste des champs possibles, sélectionnez dans l'ordre les champs suivants :</li>
</ol>
<p><strong>ID_Facture (Transition_Fact-Stock), ID_Client (Factures), ID_Vendeur (Factures), ID_Produit (Transition_Fact-Stock), Quantité (Transition_Fact-Stock), Prix_Unitaire (Stock).</strong></p>
<ol class="instruction">
	<li>Suivez la étapes de la procédure en cliquant sur le bouton <img src="/assets/img/oobase/bt_suivant2.png" alt="bouton SUIVANT" /> jusqu'au bout de l'assistant</li>
</ol>
<p class="notice remarque">Vérifiez que les liaisons existent bien entre les tables de la requête. Sinon vous obtiendrez 63 enregistrements !</p>
<p>Vous devriez obtenir le résultat suivant :</p>
<img src="/assets/img/oobase/fen_resultat_requete_Transition_Fact-Stock.png" alt="résultat de la première requête" />



