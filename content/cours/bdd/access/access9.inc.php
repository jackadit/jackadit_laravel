<?php
/**
 * page de cours 9 sur ACCESS 2003 : Cours sur les états
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   11/03/07  23:37:00  
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
<h1>ACCESS : LES ÉTATS</h1>
<p class="h2-like">Avant de commencer</p>
<p>Afin de réaliser les exercices de ce cours, vous avez besoin de la table <strong>Employe</strong>. Vous la retrouverez dans la base de données <strong>commerce4.accdb</strong>.</p>

<h2>Introduction</h2>
<p>Un état est une représentation des enregistrements de la base de données qui est mise sur papier.</p>
<p>Il est possible de ressortir une synthèse à partir de ces données qui seraient plus difficiles d'avoir autrement. En plus, il est plus facile de trier et de regrouper l'information sur des champs pertinents.</p>

<h2>Les types d'états</h2>
<p>Access peut vous aider lors de la création d'états.</p>
<table class="table" summary="les assistants création d'états">
 <tr>
 <th class="w100p">Standard</th>
 <td>Pour montrer les enregistrements de la base de données sous forme de rapport.</td>
 </tr>
 <tr>
 <th>Graphique</th>
 <td>Pour représenter graphiquement les enregistrements de la base de données.</td>
 </tr>
 <tr>
 <th>Étiquettes</th>
 <td>Pour préparer des étiquettes pour du publipostage ou une conférence.</td>
 </tr>
</table>

<h2>Création d'un état simple avec l'assistant</h2>
<p>L'exemple qui suit est pour vous démontrer comment créer un état en utilisant un assistant en regardant chacune des étapes de la création de l'état. On regarde aussi les possibilités, à chacune de ces étapes.</p>

<p>Access vous offre plusieurs manières de créer un nouvel état :</p>
<ul>
	<li>L'<strong>état vide</strong> <img src="/assets/img/access/bt_etat_vide.png" alt="bouton état vide" /> dabs lequel on peut insérer des champs et des contrôles.</li>
	<li>Le <strong>Mode création</strong> <img src="/assets/img/access/bt_etat_creation.png" alt="bouton creation état" /> pour commencer un état à partir de zéro.</li>
	<li><strong>Les états instantanés</strong> <img src="/assets/img/access/bt_etat.png" alt="bouton état" />, qui affichent tous les champs d'une table ou d'une requête sous la forme de <strong>colonnes</strong> (un champ en dessous de l'autre) ou de <strong>tableau</strong> (un champ à côté de l'autre), ne posent pas de questions. Ils génèrent un état qui affiche tous les champs de la table dans l'ordre qui apparaît dans la structure de la table ou de la requête.</li>
	<li>L'<strong>assistant étiquette</strong> <img src="/assets/img/access/bt_etat_etiquette.png" alt="bouton état étiquette" />vous aide à générer un état composé d'étiquette pour différentes situations : d'étiquettes de lettres à des étiquettes pour des présentations.</li>
</ul>
<img src="/assets/img/access/f_assistant_etat1.png" alt="assistant état1" />
<ol class="instruction">
	<li>Cliquez sur le bouton <strong>Assistant État</strong> <img src="/assets/img/access/bt_assistant_etat.png" alt="bouton assistant état" />.</li>
	<li>Parmi la liste des tables et des requêtes disponibles, sélectionnez la table &quot;<strong>Employe</strong>&quot;.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant vous demande ensuite quels sont les champs dont vous avez besoin dans votre état.</p>
<p class="notice remarque">Faites attention à l'ordre des champs que vous sélectionnez. C'est dans cet ordre qu'ils vont apparaître dans votre nouvel état.</p>
<p class="notice remarque">Il est aussi possible de sélectionner des champs de plusieurs tables ou de requêtes. Il suffit de choisir la table ou la requête parmi la liste.</p>
<p>Ajoutez ensuite le ou les champs de votre choix à la liste des champs sélectionnés.</p>
<ol class="instruction">
	<li>De la liste des champs disponibles, sélectionnez en ordre les champs <strong>emp_nom, emp_prenom, emp_salaire, emp_commission, emp_bureau, emp_poste</strong> en cliquant sur le champ et en appuyant sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un item" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<img src="/assets/img/access/f_assistant_etat2.png" alt="assistant état2" />
<p>L'assistant vous demande si vous voulez regrouper les enregistrements sur un champ en particulier.</p>

<p>Vous pouvez aussi faire des &laquo;&nbsp;<strong>sous regroupements</strong>&nbsp;&raquo;, ou plutôt des regroupements à l'intérieur de regroupements.</p>
<ol class="instruction">
	<li>De la liste des champs de l'état, sélectionnez le champ <strong>emp_bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un item" />.</li>
</ol>
<p>L'aperçu de la présentation à la droite de la fenêtre va changer. Il va maintenant afficher les champs regroupés par rapport au champ <strong>emp_bureau</strong>. Donc, à chaque fois que la valeur du champ <strong>emp_bureau</strong> va changer, un nouveau regroupement sera généré.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <strong><img src="/assets/img/access/bt_options_regroupement.png" alt="bouton option de regroupement" /></strong>.</li>
</ol>
<img src="/assets/img/access/f_intervalle_regroupement.png" alt="fenêtre intervalle de regroupement" />

 <p>L'assistant vous demande comment vous voulez regrouper les enregistrements. Voulez-vous regrouper de manière normal ou seulement sur les premières lettres contenues dans le champ.</p>
<ol class="instruction">
	<li>Laissez l'option à &quot;<strong>Normal</strong>l&quot;</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_OK.png" alt="bouton OK" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant vous demande si vous voulez trier les enregistrements selon un ou plusieurs champs. Vous pouvez trier les enregistrements jusqu'à sur quatre champs. Le champ dans la première case a priorité sur la seconde et ainsi de suite. Aussi, vous pouvez choisir si vous voulez afficher les enregistrements en ordre croissant ou décroissant en appuyant sur le bouton du coté droit du nom du champ.</p>

<img src="/assets/img/access/f_assistant_etat3.png" alt="assistant état3" />

 <ol class="instruction">
	<li>Sélectionnez de la liste le champ &quot;<strong>emp_nom</strong>&quot; pour le premier tri.</li>
</ol>
<p>Les employés seront triés selon le nom de famille.</p>
<ol class="instruction">
	<li>Sélectionnez de la liste le champ &quot;<strong>emp_prenom</strong>&quot; pour le second tri.</li>
</ol>
<p>En plus d'être triés par nom de famille, les enregistrements seront aussi triés par prénom. Donc, pour un même nom de famille, les enregistrements seront aussi triés sur le prénom de ces personnes.</p>
<p>L'une des options les plus avantageuses des états est la possibilité de générer automatiquement une synthèse des résultats.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_options_synthese.png" alt="bouton options de synthèse" />.</li>
</ol>

<img src="/assets/img/access/f_options_synthese.png" alt="fenêtre options de synthèse" />
<p>Parmi les options de synthèse, vous pouvez choisir parmi les opérations mathématiques les plus fréquentes. Si nécessaire, vous pourrez modifier l'état pour ajouter d'autres opérations telles que le nombre d'enregistrements, l'écart type et ainsi de suite. Cette opération sera démontrée plus loin sur cette page.</p>
<ol class="instruction">
	<li>Sélectionnez les mêmes options que ceux marqués à l'image précédente.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_OK.png" alt="bouton OK" />.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant vous demande ensuite quel type de présentation que vous voulez pour votre état?</p>
<p>Vous pouvez aussi décider de l'orientation du papier ainsi que de forcer tous les champs sur une même feuille.</p>

<img src="/assets/img/access/f_assistant_etat4.png" alt="assistant état4" />
<ol class="instruction">
	<li>Sélectionnez les mêmes options que sur l'image ci-dessus.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<img src="/assets/img/access/f_assistant_etat5.png" alt="assistant état5" />

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>


<p>Il est maintenant temps de regarder en détail la composition de l'état.</p>
	
<h2>Modifier un état</h2>
<p>Il est possible de modifier un état pour mieux répondre à vos besoins. Avec le temps, l'état peut également avoir besoin de changer pour mieux répondre à vos nouvelles attentes.</p>

<p>Voici le résultat final souhaité.</p>
<img src="/assets/img/access/f_etat_liste_employes_final.png" alt="état liste des employés" />


<ol class="instruction">
	<li>À partir de l'aperçu de l'état, appuyer sur le bouton mode création <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
</ol>
<img src="/assets/img/access/f_assistant_etat6.png" alt="assistant état6" />
 

<h3>Les objets d'un état</h3>
<p>Il y a plusieurs objets, ou contrôles en jargon d'Access, qui composent un état. Parmi ceux-ci, il y a les &laquo;&nbsp;<strong>intitulés</strong>&nbsp;&raquo;, qui sont du texte libre, des &laquo;&nbsp;<strong>zones de texte</strong>&nbsp;&raquo;, qui sont en réalité des champs provenant de tables ou de requêtes, des lignes, des boîtes, des champs calculés et plusieurs autres.</p>

    <h3>Les sections</h3>
<p>En plus, ces &quot;contrôles&quot; se retrouvent dans différentes zones.</p>

    <h3>Les en-têtes</h3>
<table class="table" summary="Les en-têtes">
 <tr>
 <th class="w200p">En-tête de l'état</th>
 <td>Est placé  au tout début de l'état. On y trouve généralement le titre du rapport.</td>
 </tr>
 <tr>
 <th>En-tête de la page</th>
 <td>Est placé au début de chacune des pages de l'état. On y trouve généralement le nom de chacun des champs de l'état.</td>
 </tr>
 <tr>
 <th>En-tête du groupe</th>
 <td>Est placé au début de chacun des regroupements de l'état. On y trouve généralement la description du regroupement.</td>
 </tr>
</table>

    <h3>Les pieds</h3>
<p>Chaque en-tête à son équivalent à la fin du rapport. </p>
<table class="table" summary="Les pieds">
 <tr>
 <th class="w200p">Pied de l'état</th>
 <td>Contient généralement les cumulatifs ou la synthèse de l'état.</td>
 </tr>
 <tr>
 <th>Pied de page</th>
 <td>Contient les cumulatifs de la page ainsi que le numéro de page.</td>
 </tr>
 <tr>
 <th>Pied de groupe</th>
 <td>Contient généralement les cumulatifs ou la synthèse d'un groupe.</td>
 </tr>
</table>

    <h3>Section détails</h3>
<p>Entre les différents en-têtes et pieds de zones, il y a la section <strong>&laquo; détails &raquo;</strong>. C'est dans cette zone que seront affichées les informations de chacun des enregistrements.</p>

<h2>Ajouter un champ calculé</h2>
<p>Comme pour les requêtes et les formulaires, il est possible d'ajouter des champs calculés qui répondent mieux à vos besoins.</p>
<p class="notice exemple">Ex : il n'y a pas d'écart type ou d'autres formules ou fonctions pour ressortir certains ratios parmi vos données.</p>
<p>La prochaine partie consiste à ajouter un champ calculé qui calcule le total des revenus d'un groupe. Par revenu, on entend ici le total des salaires et des commissions des employés.</p>
<ol class="instruction">
	<li>Si vous ne l'êtes pas déjà, mettez-vous en <strong>Mode création</strong> en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
	<li>Agrandissez la zone <strong>pied de groupe Bureau</strong>.</li>
	<li>De la barre d'outils, cliquez sur le bouton <strong>zone de texte</strong> <img src="/assets/img/access/bt_controle_zone_texte.png" alt="bouton zone de texte" />.</li>
	<li>Cliquez à l'endroit de votre choix dans la zone<strong> pied de groupe emp_bureau</strong>.</li>
</ol>
<p>Un champ indépendant et un intitulé vont apparaître.</p>
<ol class="instruction">
	<li>Cliquez dans la case de l'intitulé et changez le texte à <strong>Revenus</strong>.</li>
	<li>Cliquez dans la zone de texte (champ indépendant).</li>
	<li>Écrivez la formule suivante: <strong>=somme(emp_salaire+emp_commission)</strong>.</li>
</ol>

<p class="notice remarque">Il faut faire attention de ne pas commettre des erreurs lors de l'écriture de la formule. Sinon, au moment d'afficher l'état, Access va vous demander de l'information sur un champ qui n'existe pas.</p>
<p class="notice exemple">Ex : j'ai changé l'une des formules pour qu'il calcule le revenu en utilisant le champ <strong>commisssion</strong> avec trois &quot;s&quot;. 
Ce champ n'existe pas. Mais Access va vous demander la valeur de ce champ avant d'afficher l'état.</p>
<img src="/assets/img/access/f_entrer_valeur_parametre.png" alt="entrer valeur du paramètre" />

<p>Un aperçu de l'état va vous montrer le résultat. À la fin de chaque groupe, il y a maintenant le total des revenus.</p>
<p>Vous pouvez créer des champs calculés plus élaborés en utilisant des fonctions d'Access. Si vous connaissez la fonction, vous pouvez l'écrire directement. Sinon, vous pouvez utiliser le générateur d'expression pour aller chercher la liste des fonctions.</p>
<ol class="instruction">
	<li>Retournez en mode création en appuyant sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
	<li>Placez le pointeur sur le champ calculé que vous venez de créer.</li>
	<li>Cliquez sur le bouton <strong>droit</strong> de la souris.</li>
	<li>Sélectionnez l'option <strong>Propriétés</strong>.</li>
</ol>
<p>OU</p>
<ol class="instruction">
	<li>De la barre d'outils standard, Cliquez sur le bouton <img src="/assets/img/access/bt_proprietes.png" alt="bouton propriétés" />.</li>
	<li>Cliquez dans la case à côté de l'option <strong>Source de contrôle</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suite.png" alt="bouton suite" />.</li>
</ol>
<p>Vous êtes maintenant dans le générateur d'expressions.</p>
<ol class="instruction">
	<li>De la première colonne, double-cliquez sur <img src="/assets/img/access/bt_fonctions.png" alt="bouton + fonctions" />.</li>
</ol>
<p>La deuxième colonne inclus la liste des catégories des fonctions. La troisième colonne inclus la liste de toutes les fonctions disponibles pour Access.</p>
<p>Vous pourrez ensuite choisir parmi la liste la fonction, ou la combinaison de fonctions, qui répond à vos besoins. N'ayez par peur d'expérimenter. Au pire, le calcul ne fonctionnera pas. Il suffira de réessayer jusqu'à ce qu'il fonctionne !</p>
<p>Le prochain exercice consiste à copier la formule précédente, <strong>=somme(emp_salaire+emp_commission)</strong>, dans le pied de l'état.</p>
<ol class="instruction">
	<li>Cliquez sur la nouvelle formule dans la zone pied de groupe <strong>emp_bureau</strong>.</li>
	<li>Du menu <strong>Édition</strong>, sélectionnez l'option <strong>Copier</strong>.</li>
	<li>Cliquez dans la zone pied de l'état.</li>
	<li>Du menu <strong>Édition</strong>, sélectionnez l'option <strong>Coller</strong>.</li>
	<li>Déplacez le champ à côté des champs existants.</li>
</ol>
<p>À la fin de l'état, il y a un nouveau champ qui affiche le cumule des revenus des employés. Bien qu'il s'agisse de la même formule, elle n'a pas la même étendue que la formule dans la zone de groupe <strong>emp_bureau</strong>.</p>
<p>La première affiche le résultat de tous les enregistrements tandis que le second fait seulement le cumule d'un groupe à la fois.</p>
<p>Il est toujours possible d'ajouter un champ qui est contenu dans la table ou la requête qui a créé l'état. Mais il est également possible d'ajouter des champs calculés tel que démontré lors de la création d'une requête ou d'un formulaire.</p>
<p>Comme pour le formulaire, il faut mettre le signe &quot;<strong>=</strong>&quot; devant la formule. Donc, pour faire la somme des revenus, il faut utiliser la formule <strong>=somme([emp_salaire]+[emp_commission])</strong>.</p>
<p>L'endroit où est située la formule détermine l'étendu de celle-ci, que ce soit pour un enregistrement, un groupe ou un état.</p>

    <h3>Création d'un regroupement</h3>
<img src="/assets/img/access/f_regrouper_trier.png" alt="fenêtre regrouper et trier" />
<p>Il est possible de modifier l'ordre des tris des champs ainsi que les regroupements de l'état. La prochaine partie consiste à ajouter un regroupement à l'état ainsi que d'expliquer la différence entre un tri et un regroupement dans l'état.</p>
<ol class="instruction">
	<li>Du menu <strong>Regroupement et totaux</strong>, cliquez sur le bouton <strong>trier et grouper</strong> <img src="/assets/img/access/bt_regrouper_trier.png" alt="regrouper et trier" />.</li>
</ol>
<p>À partir de cet écran, vous pouvez déterminer à partir de quel champ vous voulez trier et regrouper les enregistrements de l'état. La fenêtre montre que l'état est actuellement regroupé sur le champ <strong>emp_bureau</strong>.</p>
<p>Les enregistrements sont également triés sur les champs <strong>emp_nom</strong> et <strong>emp_prenom</strong>.</p>

<p>L'exercice consiste à ajouter un regroupement sur le champ <strong>emp_poste</strong> . Donc, en plus d'être regroupés par lieu de travail, les enregistrements seront divisés par l'occupation de l'employé.</p>
<p>Voici les étapes nécessaires pour ajouter le regroupement <strong>emp_poste</strong> .</p>

<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_groupe.png" alt="bouton ajouter un groupe" />.</li>
	<li>De la liste des champs, sélectionnez le champ <strong>emp_poste</strong> .</li>
</ol>

<p>Le symbole <img src="/assets/img/access/bt_deplacer.png" alt="bouton déplacer" /> apparaît devant le nom du champ pour indiquer qu'il s'agit d'un regroupement sur ce champ.</p>
<p>Aussi une nouvelle section va apparaître dans l'état, soit l'en-tête du nouveau regroupement <strong>emp_poste</strong>.</p>
<p>Si vous faites un aperçu de l'état, vous verrez que le résultat n'est pas vraiment intéressant. Le champ <strong>Poste </strong>fait un regroupement sur chacun des enregistrements au lieu de les regrouper. La raison est que le champ <strong>Poste </strong>est en quatrième position parmi les tris et les regroupements.</p>

<p>La prochaine étape consiste à changer l'ordre des tris et des regroupements en plaçant le champ <strong>emp_poste</strong>  en deuxième position.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête à la gauche du champ <strong>emp_poste</strong> <img src="/assets/img/access/bt_deplacer.png" alt="bouton déplacer" />.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le champ en deuxième position dans la liste des champs.</li>
</ol>
<p>L'aperçu de l'état affiche maintenant les informations par lieu de travail et par occupation des employés. </p>


<h3>Retirer le regroupement</h3>
<p>Vous avez vu comment ajouter un regroupement et changer l'ordre des tris. Le prochain exercice consiste à retirer un regroupement.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête gris à la gauche du champ <strong>emp_poste</strong> .</li>
	<li>Appuyez sur la touche <img src="/assets/img/access/touche_suppr.png" alt="touche SUPPR" width="25" height="25" />.</li>
</ol>


