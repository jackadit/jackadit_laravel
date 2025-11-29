<?php
/**
 * page de cours 3b sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:15:00
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
<h1>ACCESS : LES RELATIONS (b)</h1>

<h2>Supprimer une relation</h2>
<p>Il existe quelques raisons pour retirer une relation entre des tables ou des requêtes.</p>
<p>La première est que vous avez commis une erreur au moment de la création de la relation. Vous avez accidentellement choisi le mauvais champ au moment de la création de la relation. Ou, après une analyse plus approfondie, vous changez les relations entre les tables.</p>
<p>Pour vous permettre de modifier la structure d'une table reliée, il peut être nécessaire auparavant de retirer une relation. Access vous le précisera si c'est le cas.</p>
<ol class="instruction">
	<li>Cliquez sur la ligne qui relie les deux tables.</li>
	<li>Du menu <strong>Enregistrements</strong>, sélectionnez l'option <strong>Supprimer</strong>.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_suppr.png" alt="touche SUPPR" /> du clavier.</li>
</ol>

<h2>Modifier les options d'une relation</h2>	 
<ol class="instruction">
	<li>Cliquez sur la ligne qui relie les deux tables.</li>
	<li>Faites un double-clique sur cette ligne.</li>
</ol>
   OU<br />
<ol class="instruction">
	<li>Du menu <strong>Conception des relations</strong>, dans l'onglet <strong>Outils</strong>, cliquez sur le bouton <strong>Modifier des relations</strong> <img src="/assets/img/access/bt_modifier_relation.png" alt="Bouton modifier des relations" /></li>
</ol>
<p>Les options de la relation vont ensuite apparaître. Vous pourrez les modifier et ensuite appuyer sur le bouton <strong>OK</strong> pour conserver ces modifications.</p>
<p>Il est maintenant temps de créer les relations entre les tables. Voici un cas particulier qui pourrait bien vous arriver au moment de la création de relations entre les tables de votre base de données.</p>


<h3>Que faire lorsqu'Access refuse de créer une relation</h3>

<h4>Création d'une relation entre les tables <strong>Facture</strong> et <strong>Client</strong>.</h4>

<ol class="instruction">
	<li>Placez le pointeur par-dessus le champ <strong>cli_id</strong> de la table <strong>Client</strong>.</li>
	<li>Cliquez sur le bouton gauche de la souris pour sélectionner le champ.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur par-dessus le champ <strong>fact_cli_id</strong> de la table <strong>Facture</strong>.</li>
	<li>Relâchez ensuite le bouton de la souris.</li>
</ol>
<p>Vous devez maintenant choisir les options.</p>
<ol class="instruction">
	<li>Activez l'option <strong>Appliquer l'intégrité référentielle</strong>.</li>
	<li>Assurez-vous que la relation est de <strong>un à plusieurs</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_creer_active.png" alt="bouton créer" />.</li>
</ol>
<p>La relation ne fonctionnera pas !</p>

<img src="/assets/img/access/f_index_unique_introuvable.png" alt="fenêtre message index unique introuvable" />

<p class="notice remarque">Cela s'explique par le fait qu'il n'existe pas de clé primaire sur le champ <strong>cli_id</strong>.</p>

<p>Pour résoudre ce problème, ouvrez la table <strong>Client</strong> en mode création, sélectionnez le champ <strong>cli_id</strong> et ajoutez une clé primaire en cliquant sur le bouton <img src="/assets/img/access/bt_cle_primaire.png" alt="bouton clé primaire" /></p>

<ol class="instruction">
	<li>Recommencer la création de la relation entre les champs <strong>cli_id</strong> et <strong>fact_cli_id</strong> en n'oubliant pas d'activer la case <strong>Appliquer l'intégrité référentielle</strong>.</li>
</ol>

<p>La relation ne fonctionne toujours pas !</p>
<img src="/assets/img/access/f_message_type_donnees.png" alt="fenêtre message type de données" />

<p class="notice remarque">Cette fois ci le problème vient du type de données du champ <strong>fact_cli_id</strong> qui est de type <strong>Numérique</strong> et de taille <strong>Réel double</strong>, alors que le champ <strong>cli_id</strong> et de type <strong>NuméroAuto</strong> et de taille <strong>Entier long</strong>.</p>

<ol class="instruction">
	<li>Modifier la taille du champ <strong>fact_cli_id</strong> en <strong>Entier long</strong> et recommencez la création de la relation avec le champ <strong>cli_id</strong>.</li>
</ol>

<h4>Création d'une relation entre les tables <strong>Facture</strong> et <strong>Employe</strong>.</h4>
<p>Il faut premièrement déterminer de quel type de relation il s'agit ou sa cardinalité.</p>
<ol>
   <li>Une facture est générée par un seul vendeur.</li>
   <li>Un vendeur peut générer plusieurs factures.</li>
</ol>
<p>Il s'agit d'une relation de type <strong>un à plusieurs</strong>.</p>
<p>Il faut maintenant créer la relation entre les tables <strong>Employe</strong> et <strong>Facture</strong> sur leur champ en commun.</p>
<ol class="instruction">
	<li>Placez le pointeur par-dessus le champ <strong>emp_id</strong> de la table <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton gauche de la souris pour sélectionner le champ.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le pointeur par-dessus le champ <strong>fact_emp_id</strong> de la table <strong>Facture</strong>.</li>
	<li>Relâchez ensuite le bouton de la souris.</li>
</ol>
<p>Vous devez maintenant choisir les options.</p>
<ol class="instruction">
	<li>Activez l'option <strong>Appliquer l'intégrité référentielle</strong>.</li>
	<li>Assurez-vous que la relation est de <strong>un à plusieurs</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_creer_active.png" alt="bouton créer" />.</li>
</ol>
<p>La relation ne fonctionnera pas !</p>
<p>Comme mentionné ci-dessus, la relation entre les tables <strong>Facture</strong> et <strong>Employe</strong> ne fonctionnera pas. Le contenu de certains enregistrement sur le champ en commun (<strong>emp_id</strong> et <strong>fact_emp_id</strong>) ne respectent pas les règles d'intégrité. Pour vous en avertir, Access vous affichera le message suivant.</p>
<p class="notice remarque">Il faut attentivement lire le message pour comprendre ce qui arrive. Dans notre cas, c'est la deuxième phrase qui explique la situation : Les données de la table « Facture » ne respectent pas les règles d'intégrité référentielle.</p>


<img src="/assets/img/access/f_message_integrite_referentielle.png" alt="fenêtre message intégrité référentielle" />
<p>Et c'est vrai. Le dernier enregistrement de la table n'a pas de contenu valide dans le champ <strong>fact_emp_id</strong>. C'est pour cette raison qu'Access refuse de créer une relation permanente entre ces deux tables.</p>
<p>Pour cet exemple, vous connaissez la cause du problème. Il suffit de mettre une valeur appropriée pour cet enregistrement pour régler le problème.</p>

<p>Mais que faire lorsque vous ne connaissez pas la cause du problème ?</p>
<p>Access vous offre un outil indispensable pour s'assurer du bon fonctionnement des relations. Il s'agit de la requête de <strong>Non correspondance</strong>.</p>
<p>La partie qui suit consiste à créer une requête de non correspondance qui détermine la cause du problème entre les tables <strong>Facture</strong> et <strong>Employe</strong>.</p>
<img src="/assets/img/access/f_assistant_requete1.png" alt="assistant requête1" />
<ol class="instruction">
	<li>Fermez la zone des relations en sélectionnant du menu <strong>Fichier</strong> l'option <strong>Fermer</strong>.</li>
	<li>Dans l'onglet des requêtes, cliquez sur le bouton <img src="/assets/img/access/bt_assistant_requete.png" alt="bouton assistant requête" />.</li>
	<li>De la liste des requêtes possibles, choisir <strong>Assistant Requête de non correspondance</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ok_active.png" alt="bouton OK" />.</li>
</ol>
<p>Pour déterminer les enregistrements qui ne correspondent pas entre les deux tables, il faut premièrement indiquer à Access le nom des deux tables à relier suivi du nom des champs en commun des deux tables.</p>
<p>Pour indiquer à Access le nom de la première table à relier qui cause un problème de relation :</p>
<img src="/assets/img/access/f_assistant_requete2.png" alt="assistant requête2" />
<ol class="instruction">
	<li>De la liste des tables, sélectionnez la table <strong>Facture</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Il faut maintenant indiquer le nom de la seconde table qui cause un problème de relation.</p>
<img src="/assets/img/access/f_assistant_requete3.png" alt="assistant requête3" />
<ol class="instruction">
	<li>De la liste des tables, sélectionnez la table <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Il faut ensuite montrer à Access quels sont les champs en commun des deux tables.</p>
<img src="/assets/img/access/f_assistant_requete4.png" alt="assistant requête4" />
<ol class="instruction">
	<li>De la table <strong>Facture</strong>, cliquez sur le champ <strong>fact_emp_id</strong>.</li>
	<li>De la table <strong>Employe</strong>, cliquez sur le champ <strong>emp_id</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_retrait.png" alt="bouton ajouter-retrait" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Access vous demande ensuite quels sont les champs que vous voulez voir dans la requête. Pour les besoins de l'exemple, sélectionnez tous les champs.</p>
<img src="/assets/img/access/f_assistant_requete5.png" alt="assistant requête5" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Pour terminer, Access vous demande le nom à donner à la requête. Pour le moment, ne changez pas le nom de la requête.</p>
<img src="/assets/img/access/f_assistant_requete6.png" alt="assistant requête6" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
	<li>Access affiche le résultat de la requête.</li>
</ol>
<br class="clear" />
<p>Les factures 14 et 15 n'ont pas de valeurs valides dans le champ <strong>emp_id</strong>. La facture 14 à un numéro de vendeur impossible puisqu'il y a seulement 7 employés dans l'entreprise. Pour la facture 15, il n'y a aucun numéro de vendeur. Une relation est impossible si le contenu d'un champ en commun est vide.</p>
<img src="/assets/img/access/f_assistant_requete7.png" alt="assistant requête7" />
<p>Pour les deux factures, entrez le numéro de vendeur <strong>7</strong> au champ <strong>emp_id</strong>. Après cette correction, il vous est maintenant possible de créer une relation &quot;permanente&quot; entre ces deux tables.</p>
<ol class="instruction">
	<li>Fermez la requête.</li>
	<li>Retournez à la section des relations.</li>
</ol>
<p>Refaite la relation entre les tables <strong>Employe</strong> et <strong>Facture</strong> sur leur champ en commun (<strong>emp_id</strong> et <strong>fact_emp_id</strong>).</p>
<p>Les deux tables sont maintenant reliées sur un champ en commun. Vous pouvez maintenant créer les relations entre les tables de cette base de données telles que sur l'image précédente.</p>

<h2>Les relations de plusieurs à plusieurs</h2>
<p>Access vous permet de créer facilement des relations de type <strong>un à un</strong> et de <strong>un à plusieurs</strong> avec l'option d'<strong>intégrité référentielle</strong>.</p>
<p>Cependant, la création de relations de type <strong>plusieurs à plusieurs</strong> nécessitent plus de travail.</p>
<p>Prenons l'exemple de la création d'une relation entre les tables <strong>Facture</strong> et <strong>Article</strong>. Avant tout, il faut déterminer de quel type de relation il s'agit.</p>
<ul>
	<li>Une facture peut contenir plusieurs produits.</li>
	<li>Un produit peut être contenu dans plusieurs factures.</li>
	<li>Il s'agit bien d'une relation de plusieurs à plusieurs.</li>
</ul>
<p>Il est impossible de faire directement une relation de type plusieurs à plusieurs. Il faut créer une <strong>table intermédiaire</strong> qui contient la clé primaire des deux tables.</p>
<p>Il faut ensuite créer deux relations de type <strong>un à plusieurs</strong> entre les tables <strong>Facture</strong>, <strong>Article</strong> et la table intermédiaire en utilisant le champ de la clé primaire des deux tables.</p>
<img src="/assets/img/access/f_assistant_requete8.png" alt="assistant requête8" />
<p class="notice remarque">N'oubliez pas d'activer l'option d'intégrité référentielle et aussi l'option de <strong>mise à jour en cascade</strong>.</p>
<p>Pour qu'une relation fonctionne, vous devez avoir le même type d'informations dans les deux tables reliées.</p>
<p>L'option &quot;<strong>Mettre à jour en cascade</strong>&quot; s'assure que l'information se retrouve aussi dans l'autre table. Il vous est donc inutile de vous préoccuper d'avoir l'information dans les deux tables. Access s'en occupe pour vous.</p>

    <h3>Sortir de l'écran des relations</h3>
<p>Si vous voulez conserver les relations entre les tables, vous devez premièrement les sauvegarder avant de quitter le mode de relations.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
	<li>Du menu <strong>Fichier</strong>, sélectionnez l'option <strong>Fermer</strong>.</li>
</ol>
	 
<h2>Création d'une facture</h2>
<p>C'est ici que toutes les relations entre les tables seront mises en avantage. Le prochain exercice consiste à la création d'une requête qui contient toutes les tables reliées.</p>
<ol class="instruction">
	<li>Dans l'onglet <strong>Requêtes</strong> du menu <strong>Créer</strong>, cliquez sur le bouton <img src="/assets/img/access/bt_requete_creation.png" alt="bouton creation requête" />.</li>
	<li>Sélectionnez de la liste des tables: <strong>Facture</strong>, <strong>L_Fact_Art</strong>, <strong>Article</strong>, <strong>Client</strong> et <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <strong>Fermer</strong>.</li>
</ol>
<p>Chaque ajout d'une table à la requête, rajoute également les relations avec les autres tables. Ces relations sont définies avec les options d'intégrité référentielle.</p>
<ol class="instruction">
	<li>De la liste des champs possibles, sélectionnez dans l'ordre les champs suivants :</li>
</ol>
<p><strong>fact_id (L_Fact_Art), fact_cli_id (Facture), fact_emp_id (Facture), art_id (L_Fact_Art), art_quantite (L_Fact_Art), art_pu (Article).</strong></p>
<p class="notice remarque">Il faut au moins que l'un des champs dans une relation soit affiché.</p>
<p>Pour vous démontrer l'avantage de relier les tables, le dernier champ à ajouter est un champ calculé. Il va prendre l'information de deux différentes tables (<strong>art_quantite</strong> de la table <strong>Laision_fact_Art</strong> et <strong>art_pu</strong> de la table <strong>Article</strong>) pour trouver le total de la transaction.</p>
<p>Puisqu'il est possible de trouver le total à partir des informations des tables, il est inutile d'avoir un champ &laquo;<strong>Total</strong>&raquo; dans l'une des tables.</p>
<ol class="instruction">
	<li>Placez le curseur dans la case vide à la droite du champ <strong>art_pu</strong>.</li>
	<li>Écrivez le texte suivant: <strong>Total:[art_quantite] * [art_pu]</strong></li>
</ol>
<p>Comme pour tous les champs calculés, il faut lui donner un nom (<strong>Total</strong>). Il faut ensuite séparer le nom de la formule en écrivant un &quot;<strong>:</strong>&quot;. Il reste qu'à écrire la formule. Ce champ va donner le total de chacun des items de la facture. </p>
<h2>Saisie de factures</h2>
  <p>Après avoir complété les opérations précédentes pour la création de relations entre les différentes tables de la base de données, il reste à voir le résultat en entrant quelques facture et à expliquer le fonctionnement des options choisies. Pour entrer les données :</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_affichage_feuille.png" alt="bouton affichage feuille de données" />.</li>
</ol>
<p>Dès que le curseur est passé au champ suivant, un chiffre est apparu dans le premier champ. Pourquoi ?</p>
<p>C'est à cause de la relation entre ce champ et celui de <strong>fact_id</strong> de la table <strong>Facture</strong>. Non seulement la relation est de type &laquo; <strong>1 à plusieurs</strong> &raquo;, mais il y a aussi l'option &laquo; <strong>Mettre à jour en cascade</strong> &raquo;.</p>
<p>C'est cette option qui force Access à voir le contenu du champ <strong>fact_id</strong> et de le recopier dans le champ <strong>fact_id</strong>. Pas besoin d'entrer l'information à chaque fois que vous commencer une nouvelle facture.</p>
<ol class="instruction">
	<li>Entrez les informations pour les autres champs à votre choix.</li>
</ol>
<p>L'avantage des relations, lorsqu'il y a redondance d'information, c'est de pouvoir saisir l'information qu'une seule fois et que cette information se répercute dans plusieurs tables en même temps. Il est inutile de réécrire l'information sur le client ou sur le produit puisqu'Access a accès à cette information grâce aux relations entre les tables.</p>
<p>Le prochain exercice consiste à ajouter un second item à la même facture.</p>
<ol class="instruction">
	<li>Dans le champ <strong>fact_id</strong>, entrez le même numéro de facture de l'enregistrement précédent.</li>
	<li>Entrez les informations pour les autres champs à votre choix.</li>
</ol>
<p>C'est ainsi qu'il est possible d'ajouter plusieurs items à la même facture. Vous pourrez utiliser cette technique pour d'autres tables qui ont une relation de type &laquo; <strong>1 à plusieurs</strong> &raquo;.</p>
<p>&nbsp;</p>


