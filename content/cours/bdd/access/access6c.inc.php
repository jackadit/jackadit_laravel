<?php
/**
 * page de cours 6c sur ACCESS 2003 : Cours sur les formulaires
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  13:09:00
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
<h1>ACCESS : LES FORMULAIRES (c)</h1>

<h2>La barre d'outils</h2>
<ol class="instruction">
	<li>Cliquez sur le menu <strong>Création</strong> pour afficher la barre d'outils.</li>
</ol>
    
    <img src="/assets/img/access/barre_outil_controle.png" alt="barre d'outils de contrôles" />
<p>La barre d'outils vous offre l'accès à plusieurs contrôles que vous pouvez ajouter à votre formulaire. La partie qui suit explique chacun de ces outils et donne un exemple du fonctionnement de chacun dans un formulaire.</p>

<h3>Sélectionner un contrôle</h3>
<p>En appuyant sur le bouton <img src="/assets/img/access/bt_selectionner.png" alt="bouton sélectionner" />, il vous est possible de sélectionner un ou plusieurs contrôles (objets) pour ensuite les déplacer ou changer une de leurs propriétés.</p>

    <h3>Activer les assistants</h3>
    <img src="/assets/img/access/bt_assistant_controle.png" alt="bouton assistant contrôle" width="23" height="22" />
<p>Il existe des assistants pour les différents contrôles de la barre d'outils. Laissez-les actifs pour pouvoir être guidé, notamment lors de l'ajout de certains contrôles à votre formulaire.</p>

    <h3>Ajouter un &laquo;&nbsp;intitulé&nbsp;&raquo; ou du texte libre</h3>
    <img src="/assets/img/access/bt_controle_texte.png" alt="bouton champ texte" width="23" height="22" />
<p>Aussi anciennement appelé une étiquette, il sert à décrire les champs ou à ajouter de l'information supplémentaire sur le formulaire. Un intitulé apparaît à chaque fois que vous ajoutez un champ au formulaire. Pour l'utiliser :</p>
<ol class="instruction">
    <li>Cliquez sur le bouton <img src="/assets/img/access/bt_controle_texte.png" alt="bouton champ texte" />.</li>
	<li>Cliquez sur le formulaire où vous voulez placer l'intitulé.</li>
	<li>Écrivez le texte de votre choix.</li>
</ol>

<h3>Ajouter une &laquo;&nbsp;&quot;zone de texte&nbsp;&raquo; ou un champ indépendant</h3>
    <img src="/assets/img/access/bt_controle_zone_texte.png" alt="bouton zone de texte" width="23" height="22" />
<p>Comme pour les requêtes, il est possible d'ajouter des champs calculés à partir d'autres données dans un formulaire ou un état.</p>
<p>Vous pouvez donc accomplir des calculs directement dans le formulaire avec une zone de texte (i.e. champ).</p>
<p class="notice exemple">Ex : le total d'une facture ressemblerait à ceci : <strong>=[SousTotalProduits] + [SousTotalServices] + [Taxes] </strong>.</p>
<p>La seule différence entre une zone de texte contenant un champ et un champ calculé est qu'il faut commencer la formule en utilisant le caractère &laquo;&nbsp;<strong>=</strong>&nbsp;&raquo;.</p>
<p>La prochaine partie consiste à ajouter un champ calculé qui calcule le total des revenus (salaire+commission) de l'employé affiché à l'écran.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_controle_zone_texte.png" alt="bouton zone de texte" /> pour ajouter une zone de texte.</li>
	<li>Cliquez à l'endroit où vous voulez le champ indépendant.</li>
</ol>
<p>La zone de texte et un intitulé vont apparaître.</p>
<ol class="instruction">
	<li>Placez le curseur à l'intérieur de la case de zone de texte.</li>
	<li>Entrez la formule suivante: <strong>=[emp_salaire] + [emp_commission]</strong>.</li>
</ol>
    <p class="notice remarque">Vous pouvez également remplir les propriétés du contrôle dans la feuille de propriétés.</p>
    <img src="/assets/img/access/f_feuille_propriete_revenu.png" alt="propriétés zone de texte revenu" />
    <p class="notice remarque">Vous pouvez également vous aider de l'assistant générateur d'expresion</p>
    <img src="/assets/img/access/f_generateur_expression_revenu.png" alt="générateur d'expression du champ revenu calculé" />
<ol class="instruction">
	<li>Affichez le formulaire en mode Formulaire en appuyant sur le bouton <img src="/assets/img/access/bt_affichage_mode_formulaire.png" alt="bouton affichage formulaire" />.</li>
</ol>

<p class="notice remarque">Si le champ revenu affiche <strong>#Nom?</strong>, il y a une erreur dans la formule. Veillez retourner au mode création et vérifier la formule.</p>
<ol class="instruction">
	<li>Entrez un chiffre dans la case salaire ou commission et appuyez sur la touche <img src="/assets/img/access/touche_entree.png" alt="touche entrée" width="40" height="24" />.</li>
</ol>
<p>Dès que vous avez appuyé sur cette touche, ou que vous avez déplacé le pointeur sur un autre champ, le champ indépendant <strong>Revenu</strong> que vous venez de créer s'est mis à jour avec le nouveau total de la somme des champs <strong>emp_salaire</strong> et <strong>emp_commission</strong>.</p>
<p>Vous pouvez créer vos propres formules pour calculer quasiment n'importe quoi. Vous pouvez calculer la TVA sur une facture, la commission d'un vendeur sur une facture ou utiliser les fonctions d'Access pour d'autres calculs. En fait, vous devriez utiliser un champ calculé dans une requête, un formulaire ou un état dès que l'occasion se présente.</p>

<h3>Ajouter un groupe d'options</h3>
    <img src="/assets/img/access/bt_controle_groupe_option.png" alt="bouton groupe d'options" width="23" height="22" />

<p>Un groupe d'options vous permet, comme pour la zone de liste modifiable et la zone de liste, de choisir parmi une liste prédéterminée. L'une des différences entre un groupe d'options et les deux autres est que toutes les options apparaissent à l'écran.</p>
<p>Pour les deux autres, il faut appuyer sur un bouton à la droite de la case pour voir les autres possibilités.</p>
<p>Une autre différence est que vous devez écrire la description, appelée &laquo;&nbsp;<strong>étiquette</strong>&nbsp;&raquo; en jargon d'Access, au lieu de choisir parmi une liste qui se retrouve dans une table ou une requête.</p>
<p>La dernière différence est qu'il faut déterminer la valeur qui sera conservé dans le champ pour chacune des étiquettes que vous avez écrit.</p>
<p>L'exercice consiste à créer un groupe d'options qui sert à déterminer le statut social de l'employé. La valeur qui sera choisie sera conservée dans le champ <strong>emp_statut</strong> de la table <strong>Employe</strong>.</p>
<img src="/assets/img/access/f_assistant_groupe_option1.png" alt="assistant groupe d'options1" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_controle_groupe_option.png" alt="bouton groupe d'options" />.</li>
	<li>Cliquez sur le formulaire à l'endroit où vous voulez mettre un groupe d'options.</li>
</ol>
<p>À la première fenêtre, l'assistant de groupe d'options va vous demander la liste des étiquettes, ou descriptions, pour les choix que vous voulez offrir à l'utilisateur du formulaire.</p>

<ol class="instruction">
	<li>Écrivez ensuite la liste des possibilités. Pour les besoins de l'exercice, écrivez les mêmes étiquettes, ou descriptions, que ceux affichés à la fenêtre ci-contre.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant pour le groupe d'options vous demande ensuite si l'une des valeurs devrait être la valeur par défaut. Ce qui veut dire qu'il y aurait une valeur prédéterminée.</p>
    <img src="/assets/img/access/f_assistant_groupe_option2.png" alt="assistant groupe d'options2" />
<p>Si aucune autre valeur n'est choisie, c'est celle-ci qui sera la valeur du champ.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option: <strong>Non, je ne veux pas définir de valeur par défaut.</strong></li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>Après avoir entré les étiquettes, il faut donner une valeur à chacune de celles-ci. Par défaut, Access affiche un chiffre à côté de chacune de ces étiquettes. Il vous est aussi possible de mettre du texte au lieu des chiffres. Cette fenêtre vous permet de modifier ces valeurs à ceux de votre choix.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, laissez les valeurs affichées initialement à la fenêtre.</li>
</ol>
    <img src="/assets/img/access/f_assistant_groupe_option3.png" alt="assistant groupe d'options3" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant vous demande ensuite que faire avec la valeur sélectionnée. Il vous offre de la conserver dans un champ indépendant (conserver la valeur pour un usager ultérieur) ou de placer cette valeur dans un champ d'une table.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option : <strong>Stocker la valeur dans ce champ :</strong> et sélectionnez le champ <strong>emp_statut</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant vous demande ensuite de l'information sur le style de présentation du groupe d'options que vous préférez. Il vous offre le choix pour la présentation des intitulés (descriptions) et de la bordure qui entoure le groupe. La partie gauche de la fenêtre vous offre un aperçu du groupe d'options avec vos choix d'options.</p>
    <img src="/assets/img/access/f_assistant_groupe_option4.png" alt="assistant groupe d'options4" />
<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option <strong>Case d'option </strong>pour la présentation des étiquettes.</li>
	<li>Sélectionnez l'option <strong>Échelonné </strong>pour le choix de la bordure.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<br class="clear" />
    <img src="/assets/img/access/f_assistant_groupe_options5.png" alt="assistant groupe d'options5" />
    <img src="/assets/img/access/f_assistant_groupe_options6.png" alt="assistant groupe d'options6" />
<p>Le dernier élément dont l'assistant a besoin pour terminer la création du groupe est le titre pour le groupe d'options. Ce titre va apparaître au haut du groupe d'options. Pour les besoins de l'exercice :</p>

<ol class="instruction">
	<li>Écrivez le texte suivant dans la case : <strong>Statut social</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Access va prendre quelques instants pour générer le groupe d'options avec les options que vous avez choisies. Voici le résultat de l'exercice :</p>
    <img src="/assets/img/access/f_assistant_groupe_option7.png" alt="assistant groupe d'options résultat" />
<p class="notice remarque">Avec un groupe d'options, le choix se limite à une seule des options. 
Dans notre exemple, il est impossible d'être célibataire et marié en même temps !</p>

<table class="table" summary="boutons de contrôle">
 <tr>
 <th class="w200p">Bouton bascule <img src="/assets/img/access/bt_controle_bascule.png" alt="bouton bascule" /></th>
 <td>Le bouton bascule, comme pour le bouton d'option et le bouton crochet sont utilisés pour les champs de type <strong>Oui/Non</strong>. Il faut appuyer sur le bouton pour dire &laquo;&nbsp;<strong>oui</strong>&nbsp;&raquo; ou pour &laquo;&nbsp;<strong>activer</strong>&nbsp;&raquo; l'option ou le champ.</td>
 </tr>
 <tr>
     <th>Bouton d'option  <img src="/assets/img/access/bt_controle_bouton_option.png" alt="bouton radio" /></th>
 <td>Le bouton d'option (anciennement appelé bouton radio) peut être utilisé avec un champ de type <strong>Oui/Non</strong>. Il faut &laquo;&nbsp;<strong>noircir</strong>&nbsp;&raquo; le bouton pour l'activer ou pour dire l'équivalent de Oui.</td>
 </tr>
 <tr>
     <th>Case à cocher <img src="/assets/img/access/bt_controle_case_cocher.png" alt="bouton case à cocher" /></th>
 <td>La case à cocher peut être utilisée avec un champ de type <strong>Oui/Non</strong>. Il faut mettre un &laquo;&nbsp;V&nbsp;&raquo; dans la case pour l'activer ou dire l'équivalent de <strong>Oui</strong>. </td>
 </tr>
</table>
    <h3>Zone de liste modifiable</h3>
    <img src="/assets/img/access/bt_controle_zone_liste_modifiable.png" alt="bouton zone de liste modifiable" />
<p>Comme un groupe d'options ou une zone de liste, une zone de liste modifiable vous permet de sélectionner une valeur parmi une liste prédéterminée. Il vous est aussi possible d'ajouter d'autres valeurs à la liste si nécessaire. C'est un élément que le groupe d'options et la zone de liste ne vous permettent pas.</p>
<p>Une liste a aussi l'avantage d'éviter des erreurs d'orthographe lors de la retranscription des données.</p>
<p>Le dernier avantage d'une liste modifiable est qu'il est possible d'afficher plusieurs champs en même temps. Ceci a l'avantage de donner une meilleure référence au moment de faire un choix pour une valeur de la liste.</p>

 <p>L'exercice consiste à créer une zone de liste modifiable pour le champ <strong>emp_bur_id</strong> qui représente le lieu de travail des employés.</p>
<p>La source de la liste modifiable sera la table <strong>Bureau</strong> qui contient le nom des villes ainsi que les adresses de chacun des bureaux de la compagnie.</p>
<ol class="instruction">
	<li>Du formulaire, sélectionnez le champ <strong>emp_bur_id</strong> et effacez-le.</li>
	<li>De la barre d'outils, Cliquez sur le bouton <img src="/assets/img/access/bt_controle_zone_liste_modifiable.png" alt="bouton zone de liste modifiable" />.</li>
	<li>Placez la zone de liste modifiable en cliquant à l'endroit où le champ <strong>emp_bur_id</strong> était situé.</li>
</ol>
<p>L'assistant vous offre trois manières de déterminer la source pour la liste modifiable :</p>
<ul>
	<li>par le contenu d'une table</li>
	<li>par le contenu d'une requête.</li>
</ul>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable1.png" alt="assistant zone de liste modifiable1" />
<ul>
	<li>vous pouvez aussi écrire les valeurs de votre choix. Celles-ci seront ensuite conservées dans une nouvelle table.</li>
</ul>
<p>La dernière possibilité vous permet de vous rendre à un enregistrement selon le choix de cette liste modifiable.</p>
<ol class="instruction">
	<li>Sélectionnez la première option : <strong>Je veux que la liste modifiable recherche ...</strong></li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>L'assistant va ensuite vous demander le nom de la table ou de la requête qui sera utilisé pour la source de la zone modifiable. Il vous affiche même la liste de ceux-ci.</p>
 <ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez la table <strong>Bureau</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable2.png" alt="assistant zone de liste modifiable2" />
<p>La fenêtre suivante vous demande de choisir parmi la liste des champs de la requête ceux que vous voulez afficher à l'écran.</p>
<p>Ceux-ci vous donnent une référence supplémentaire lors de la sélection de la valeur de la liste modifiable.</p>
<p>Les champs seront affichés selon l'ordre où ils se retrouvent dans la zone <strong>Champs sélectionnés</strong>.</p>
 <ol class="instruction">
	<li>Sélectionnez dans l'ordre les champs suivants: <strong>bur_nom</strong>, <strong>bur_adresse</strong>, <strong>bur_telephone</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant"  />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable3.png" alt="assistant zone de liste modifiable3" />
<p>La prochaine fenêtre vous demande dans quel ordre afficher les éléments de la liste.</p>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable4.png" alt="assistant zone de liste modifiable4" />
<ol class="instruction">
    <li>Choisissez le champ <strong>bur_nom</strong> en ordre <strong>Croisssant</strong>.</li>
</ol>

<p>La fenêtre suivante vous permet également d'afficher ou de cacher la colonne clé. Pour ce cas, il s'agit du champ <strong>bur_id</strong>.</p>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable5.png" alt="assistant zone de liste modifiable5" />
<h5>Pour ajuster la largeur des colonnes :</h5>
<p>Il est intéressant d'être capable d'ajuster la largeur des colonnes contenant de l'information. Vous pouvez vous assurer que toute l'information du champ apparaît dans la case.</p>
<ol class="instruction">
	<li>Placez le pointeur au bout de la colonne ou entre deux colonnes.</li>
	<li>Ajuster la largeur des colonnes pour afficher tout le contenu de celles-ci.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
    <p class="notice remarque">S'il y a seulement deux champs dans la liste des champs disponibles effectuez les opérations ci-dessous :</p>
 <ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_precedent.png" alt="bouton précédent" />.</li>
	<li>Désactivez l'option <strong>Colonne clé cachée</strong>.</li>
	<li>Appuyez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<p>L'assistant vous demande ensuite l'endroit où vous voulez conserver la donnée.</p>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable6.png" alt="assistant zone de liste modifiable6"  />

<p class="notice remarque">Vous pouvez la conserver dans un champ indépendant (<strong>Mémoriser la valeur pour usage ultérieur</strong>) ou la mettre dans l'un des champs de la table.</p>
 <ol class="instruction">
	<li>Stockez la donnée dans le champ <strong>emp_bur_id</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>La dernière question est de savoir quel est le texte de l'étiquette qui va décrire la liste modifiable.</p>
<ol class="instruction">
	<li>Écrivez &laquo;<strong>Bureau</strong>&raquo; dans la case.</li>
	<li>Écrivez &laquo;<strong>emp_bureau</strong>&raquo; dans la case.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable7.png" alt="assistant zone de liste modifiable7" />
    <p>Voici le résultat :</p>
    <img src="/assets/img/access/f_assistant_zone_liste_modifiable8.png" alt="assistant zone de liste modifiable8" />
<p>Pour ajouter un nouveau bureau, ajoutez un enregistrement dans la table <strong>Bureau</strong>.</p>
<p class="notice exemple">Ex : ajoutez Mulhouse au 3 rue paul Verlaine 68200 (0389431617). 
Ensuite, retournez voir le contenu de la liste modifiable.</p>

    <h3>Zone de liste</h3>
    <img src="/assets/img/access/bt_controle_zone_liste.png" alt="bouton zone de liste" width="23" height="22" />
 <img src="/assets/img/access/f_assistant_zone_liste1.png" alt="assistant zone de liste1" />
<p>L'exercice qui suit consiste à créer une zone de liste et d'afficher une liste pour les activités possibles dans l'entreprise.</p>
<ol class="instruction">
    <li>Cliquez sur le bouton <strong>Zone de liste</strong> <img src="/assets/img/access/bt_controle_zone_liste.png" alt="bouton zone de liste" />.</li>
</ol>
<p>Dans cette base de données, il y a une table qui contient la liste des activités de l'entreprise. Cette table s'appelle d'ailleurs <strong>Activite</strong>. Vous pouvez aussi créer votre propre liste en sélectionnant l'option <strong>Je taperais les valeurs souhaitées</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
 <img src="/assets/img/access/f_assistant_zone_liste2.png" alt="assistant zone de liste2" />
<p>Access va ensuite vous demander le nom de la table ou de la requête qui contient le champ avec l'information à mettre dans la zone de liste. De la liste des tables et requêtes de la base de données, sélectionnez celle qui contient l'information que vous voulez afficher dans la zone de liste.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
    <p>La table ne contient que deux champs : <strong>ac_id</strong> et <strong>ac_nom</strong>.</p>
<p class="notice info">Dans cette table, il n'y a que deux activités possibles: <strong>gérant</strong> et <strong>vendeur</strong>. Si vous vouliez ajouter une autre poste à la liste, il faudrait ajouter un enregistrement à cette table.</p>
 <img src="/assets/img/access/f_assistant_zone_liste3.png" alt="assistant zone de liste3" />

    <ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_tous.png" alt="bouton ajouter tous les items" /> pour transférer tous les champs dans la zone des <strong>Champs sélectionnés</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
 <img src="/assets/img/access/f_assistant_zone_liste4.png" alt="assistant zone de liste4" />
<ol class="instruction">
	<li>Choisissez l'ordre dans lequel doivent s'afficher les items, en l'occurrence par ordre croissant des noms.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant"/>.</li>
</ol>

    <img src="/assets/img/access/f_assistant_zone_liste5.png" alt="assistant zone de liste5" />
    <ol class="instruction">
        <li>Ajustez la largeur des colonnes si besoin.</li>
        <li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
    </ol>
    <p class="notice remarque">L'option <strong>Colonne clé cachée</strong> est coché par défaut comme recommandé.</p>
<p>L'avant dernière étape consiste à indiquer à l'assistant de la zone de liste si vous voulez conserver les choix dans une valeur pour usage ultérieur ou parmi l'un des champs qui se retrouve dans le formulaire. Pour l'exercice, la valeur choisie de la zone de liste ira dans le champ <strong>emp_poste</strong> .</p>
    <img src="/assets/img/access/f_assistant_zone_liste6.png" alt="assistant zone de liste6" />
<ol class="instruction">
    <li>Sélectionnez la seconde option: <strong>Stocker la valeur dans ce champ</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>

<p>La dernière étape consiste à écrire le texte qui ira avec la zone de liste.</p>
    <img src="/assets/img/access/f_assistant_zone_liste7.png" alt="assistant zone de liste7" />
<ol class="instruction">
    <li>Saisissez <strong>Poste</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>

    <p>Résultat</p>
    <img src="/assets/img/access/f_assistant_zone_liste8.png" alt="assistant zone de liste8" />

    <h3>Bouton de commande</h3>
    <img src="/assets/img/access/bt_de_commande.png" alt="bouton de commande" width="23" height="22" />
<p>Les boutons commandes sont très pratiques pour les utilisateurs de formulaires. Ils permettent de facilement accéder à des options qui affectent le formulaire ou la base de données.</p>
<p class="notice exemple">Ex : grâce aux boutons de commande, il est possible de passer d'un enregistrement à un autre, d'ouvrir ou d'imprimer 
un formulaire ou un état ainsi que plusieurs autres possibilités.</p>
<p>Access offre une série d'options prédéterminées pour faciliter la création de boutons de commande. Si, ceux-ci ne répondent pas à vos besoins, vous pouvez toujours créer une macro ou un module et &laquo;&nbsp;l'attacher&nbsp;&raquo; à un bouton.</p>

<p>Le prochain exercice consiste à la création d'un bouton commande pour passer à l'enregistrement suivant.</p>
<ol class="instruction">
	<li>À partir de la barre d'outils, cliquez sur le bouton de commande <img src="/assets/img/access/bt_de_commande.png" alt="bouton de commande" />.</li>
</ol>
<p>L'assistant pour le bouton de commande va afficher la fenêtre suivante.</p>
    <img src="/assets/img/access/f_assistant_bouton_commande1.png" alt="assistant bouton de commande1" />
<p>Cette première fenêtre nous demande quelle action devra faire le bouton lorsqu'on appuie sur celui-ci.</p>
<p>La première colonne les catégories d'actions possibles. La seconde colonne affiche les actions possibles.</p>

<p>Pour l'exercice, le bouton doit afficher l'enregistrement suivant :</p>
<ol class="instruction">
	<li>De la colonne <strong>Catégories</strong>, sélectionnez l'option <strong>Déplacements entre enreg.</strong></li>
	<li>De la colonne <strong>Actions</strong>, sélectionnez l'option <strong>Enregistrement suivant</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>La prochaine fenêtre nous demande quel genre de présentation nous voulons sur le bouton. Est-ce du texte de votre choix ou une image représentative ? Pour l'exercice, nous utiliserons une image.</p>
    <img src="/assets/img/access/f_assistant_bouton_commande2.png" alt="assistant bouton de commande2" />
<ol class="instruction">
	<li>Cliquez sur l'option <strong>Image</strong>.</li>
	<li>De la liste des images possibles, sélectionnez l'image <strong>Atteindre suivant</strong>.</li>
</ol>
<p>Il y a aussi deux autres options intéressantes sur cette fenêtre.</p>

<p>En cliquant sur l'option <strong>Afficher toutes les images</strong>, vous aurez plus de possibilités pour choisir une image. Même avec cette liste, il est encore possible qu'il n'y ait pas d'image qui réponde à vos besoins. Il est donc possible, avec le <strong>bouton </strong><img src="/assets/img/access/bt_parcourir.png" alt="bouton parcourir" /> d'aller chercher vos propres images et de les coller au bouton.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant" />.</li>
</ol>
<p>La dernière fenêtre nous demande quel nom nous voulons donner au contrôle bouton de commande.</p>
    <img src="/assets/img/access/f_assistant_bouton_commande3.png" alt="assistant bouton de commande3" />
<ol class="instruction">
	<li>Dans la case, écrivez le texte <strong>Bouton suivant</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>

<h3>Image</h3>
    <img src="/assets/img/access/bt_image.png" alt="bouton image" width="23" height="22" />
<p>Il est aussi possible d'insérer des images dans un formulaire. Que ce soit le logo de la compagnie ou une image représentative.</p>
<ol class="instruction">
	<li>De la barre d'outils, cliquez sur le bouton d'image <img src="/assets/img/access/bt_image.png" alt="bouton image" />.</li>
</ol>
<p>Un pointeur ayant la forme suivante <img src="/assets/img/access/ajouter_image.png" alt="pointeur ajouter image" /> va apparaître. Il suffit de le placer sur le formulaire à l'endroit où vous voulez insérer l'image.</p>
<ol class="instruction">
	<li>Placez le pointeur sur le formulaire et cliquez sur le bouton de la souris.</li>
</ol>
<p>Access va ensuite nous demander l'endroit et le nom de l'image que nous voulons insérer.</p>
<ol class="instruction">
	<li>Sélectionnez l'endroit et l'image de votre choix.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_ok.png" alt="bouton OK" />.</li>
</ol>
	<p>L'image va ensuite s'insérer sur le formulaire. Vous pourrez toujours le déplacer sur le formulaire. Selon le format de l'image, il est possible que vous ne pourrez pas changer sa taille. C'est une chose à prendre en considérations lorsque vous créez les images pour vos formulaires ou vos états.</p>

<h3>Cadre d'objet indépendant</h3>
    <img src="/assets/img/access/bt_cadre_independant.png" alt="bouton cadre d'objet indépendant" width="23" height="22" />
<p>Permet d'insérer des objets provenant d'autres applications Windows tel qu'un graphique d'Excel ou un organigramme de Visio ou d'autres applications. L'objet est indépendant du contenu des tables d'Access.</p>

    <h3>Cadre d'objet dépendant</h3>
    <img src="/assets/img/access/bt_cadre_dependant.png" alt="bouton cadre d'objet dépendant" width="23" height="22" />
<p>L'objet inséré est dépendant du contenu des tables ou des requêtes d'Access. Une modification de ceux-ci pourrait affecter l'objet dépendant.</p>

    <h3>Saut de page</h3>
    <img src="/assets/img/access/bt_saut_page.png" alt="bouton saut de page" width="23" height="22" />
<p>Même dans un formulaire, il est possible de mettre des sauts de page. Cela n'a aucun effet à l'affichage à l'écran. Mais, cette option est très pratique au moment de l'impression du formulaire. Cela permet d'imprimer un formulaire sur plusieurs pages.</p>
<ol class="instruction">
	<li>De la barre d'outils, appuyez sur bouton saut de page <img src="/assets/img/access/bt_saut_page.png" alt="bouton saut de page" />.</li>
	<li>Déplacez le pointeur au bas de la zone <strong>Détails</strong>.</li>
	<li>Cliquez sur le bouton gauche de la souris.</li>
</ol>
<p>Un petit contrôle <img src="/assets/img/access/controle_saut_page.png" alt="contrôle saut de page" /> va apparaître collé sur la bordure gauche de la fenêtre. Ceci est le séparateur de page. Tout ce qui est au dessus de ce contrôle va être sur une page. Le reste sera imprimé sur une autre page.</p>
<p>Pour voir l'effet de ce contrôle, il faut premièrement le déplacer au milieu du formulaire.</p>
<ol class="instruction">
	<li>Cliquez sur le contrôle du séparateur de page.</li>
	<li>En restant appuyé sur le bouton gauche de la souris, déplacez le contrôle au milieu du formulaire.</li>
</ol>
<p>Le séparateur va automatiquement se coller à la bordure gauche du formulaire.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_apercu_avant_impression.png" alt="bouton aperçu avant impression" />.</li>
</ol>
<p>Vous verrez un aperçu de votre formulaire tel qu'il serait imprimé sur papier. Vous ne verrez également qu'une partie de votre formulaire. Le reste est sur la page suivante.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_enregistrement_suivant.png" alt="bouton enregistrement suivant" /> situé au coin inférieur gauche de la fenêtre.</li>
</ol>
<p>Vous remarquerez que le reste du formulaire va apparaître sur le papier, mais également le début d'un formulaire pour l'enregistrement suivant.</p>
    <p>C'est pour cette raison, pour des besoins d'impression, que des sauts de page sont mis tout à la fin de la zone <strong>Détail</strong> du formulaire ; pour ne pas avoir deux formulaires sur une même feuille de papier.</p>


<h3>Contrôle Onglet</h3>
    <img src="/assets/img/access/bt_controle_onglet.png" alt="bouton contrôle onglet" width="23" height="22" />
<p>Le contrôle Onglet offre deux avantages.</p>
<ul>
	<li>Il regroupe les informations à une même place</li>
	<li>Il prend moins d'espace à l'écran.</li>
</ul>
<p>Il suffit de cliquer sur l'onglet pour voir les informations de la catégorie choisie.</p>

    <h3>Sous formulaire/Sous État</h3>
    <img src="/assets/img/access/bt_controle_sous-formulaire.png" alt="bouton sous-formulaire/sous-état" width="23" height="22" />
<p>Très pratique pour faire des formulaires complexes dont les données proviennent de plusieurs tables reliées. Il faut cependant faire attention qu'il y a des relations &quot;formelles&quot; entre les tables. Le cours sur les sous-formulaires donnera plus d'explications sur cette option.</p>

    <h3>Trait</h3>
    <img src="/assets/img/access/bt_controle_trait.png" alt="bouton trait" width="23" height="22" />
<p>Sert à séparer les différentes sections d'un formulaire. Aide à la lecture du formulaire.</p>

    <h3>Boîte</h3>
    <img src="/assets/img/access/bt_controle_rectangle.png" alt="bouton controle rectangle" width="23" height="22" />
<p>Permet d'encadrer du texte ou un ou plusieurs champs. Seulement pour des besoins de présentation.</p>


<h3>Autres contrôles</h3>
<p>D'autres contrôles sont disponibles dans la bibliothèque des contrôles.</p>


