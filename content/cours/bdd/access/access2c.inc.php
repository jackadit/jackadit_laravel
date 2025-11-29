<?php
/**
 * page de cours 2c sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  12:44:00
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
<h1>ACCESS : LES TABLES (c)</h1>
<h2>Liste de choix (liste déroulante)</h2>
<p>Les listes ont l'avantage de permettre une saisie plus rapide des données ainsi que de réduire les erreurs de saisie. Il est également possible de limiter les données au contenu de la liste. Les prochains exercices consistent à utiliser une liste de choix avec le champ <strong>emp_bureau</strong>.</p>
 <img src="../img/access/prop_liste_de_choix.png" alt="liste de choix" />
<ol class="instruction">
	<li>Retournez en <strong>Mode création</strong>.</li>
	<li>Placez le pointeur sur le champ <strong>emp_bureau</strong>.</li>
	<li>Au bas de l'écran, sélectionnez l'onglet <strong>Liste de choix</strong>.</li>
</ol>
<p>Au début la seule option disponible est le mode d'affichage des données qui est en mode texte.</p>
<ol class="instruction">
	<li>Changez l'option <strong>Afficher le contrôle</strong> à <strong>Zone de liste déroulante</strong>.</li>
</ol>
<p>Les autres options vont apparaître.</p>
<p>L'option <strong>Origine source</strong> spécifie quelle sera la source de la liste. Il y a trois options&nbsp;:</p>
<table class="table" summary="Options des listes de choix">
 <tr>
 <th class="w200p">Liste valeurs</th>
 <td>Prends la liste des valeurs que vous entrez dans la case <strong>Contenu</strong>.</td>
 </tr>
 <tr>
 <th>Liste des champs</th>
 <td>Prends la liste des champs d'une table ou d'une requête.</td>
 </tr>
 <tr>
 <th>Table/requête</th>
 <td>Prends la liste des valeurs des champs qui sont dans une table ou une requête que vous déterminez dans la case <strong>Contenu</strong>.</td>
 </tr>
</table>

<ol class="instruction">
	<li>Pour les besoins de l'exercice, sélectionnez l'option <strong>Liste valeurs</strong>.</li>
</ol>
<p>Cette option vous permet d'écrire les valeurs que vous désirez dans la liste. Il faut maintenant préparer une liste des valeurs qui seront affichés dans la liste.</p>
<ol class="instruction">
	<li>Placez le pointeur dans la case <strong>Contenu</strong>.</li>
	<li>Entrez le texte suivant: &lsquo;&lsquo;Haguenau&rsquo;&rsquo;;&lsquo;&lsquo;Strasbourg&rsquo;&rsquo;;&lsquo;&lsquo;Colmar&rsquo;&rsquo;</li>
</ol>
<p class="notice remarque">Puisque le champ <strong>emp_bureau</strong> est de type <strong>Texte</strong>, il faut mettre des guillemets avant et après chaque valeur de la liste. Cela serait inutile pour un champ de type <strong>Numérique</strong> ou <strong>Monétaire</strong>.</p>
<p>Chaque valeur de la liste est séparée par un point-virgule (<strong>;</strong>).</p>
<p>Les autres options seront expliquées dans les prochains exercices. Il reste deux options à changer.</p>
<ol class="instruction">
	<li>Modifier la valeur de la case <strong>Lignes affichées</strong> à <strong>8</strong>.</li>
	<li>Changez la valeur de la case <strong>Limiter à la liste</strong> à <strong>Oui</strong>.</li>
</ol>
<p>L'utilisateur ne pourra pas saisir de valeurs autres que celles dans la liste que vous avez écrit. Access va afficher un message d'erreur s'il essaie.</p>
<ol class="instruction">
	<li>Enregistrer les modifications de la table en appuyant sur le bouton <img src="../img/access/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_affichage_feuille.png" alt="bouton affichage feuille de données" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode Feuille de données</strong>.</li>
	<li>Placez le pointeur sur le champ <strong>emp_bureau</strong> de l'un des enregistrements.</li>
</ol>
 <img src="../img/access/liste_deroulante_bureau.png" alt="liste déroulante bureau" />
<p>Le bouton de la liste va apparaître à la droite de la case. Vous pouvez cliquez dessus pour choisir l'un des choix. Vous pouvez aussi commencer à écrire dans la case.</p>
<ol class="instruction">
	<li>Saisissez dans la case la ville de <strong>Saverne</strong>.</li>
	<li>Appuyez sur la touche <img src="../img/access/touche_entree.png" alt="touche entrée" />.</li>
</ol>
<p>Access va vous afficher ce message d'erreur puisque <strong>Saverne</strong> n'est pas dans la liste prédéterminée.</p>
 <img src="../img/access/f_message_erreur.png" alt="fenêtre de message d'erreur" />
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../img/access/bt_ok_active.png" alt="bouton OK activé" /></li>
	<li>Sélectionnez l'un des éléments de la liste.</li>
	<li>Retournez en <strong>Mode création</strong> en appuyant sur le bouton <img src="../img/access/bt_mode_creation.png" alt="bouton affichage création" />.</li>
</ol>
<p class="notice remarque">Vous pouvez également utiliser une liste de choix en utilisant les champs d'une table ou d'une requête.</p>
<p>Pour réaliser cet exercice, vous devez avoir une autre table ou une requête qui servira de référence pour la liste de choix.</p>	
<p>Nous devons donc créer une nouvelle table <strong>Bureau</strong> que nous compléterons avec les données suivantes&nbsp;:</p>
<table class="table" summary="Données de la table Bureaux">
 <tr>
 <th>bur_nom</th>
 <th>bur_adresse</th>
 <th>bur_ville</th>
 <th>bur_code_postal</th>
 <th>bur_telephone</th>
 </tr>
 <tr>
 <td>Colmar</td>
 <td>42 rue des mégères</td>
 <td>Colmar</td>
 <td>68000</td>
 <td>0388102030</td>
 </tr>
 <tr>
 <td>Haguenau</td>
 <td>11 rue du puits</td>
 <td>Haguenau</td>
 <td>67500</td>
 <td>0388061662</td>
 </tr>
 <tr>
 <td>Strasbourg</td>
 <td>22 rue des magasins</td>
 <td>Strasbourg</td>
 <td>67000</td>
 <td>0388020301</td>
 </tr>
</table>
<ol class="instruction">
	<li>Créez la table <strong>Bureau</strong> avec les champs indiqués dans le tableau ci-dessus.</li>
</ol>
<p class="notice remarque">Tous les champs sont de type <strong>Texte court</strong> !</p>
<ol class="instruction">
	<li>Laissez Access choisir une clé primaire. Vous la renommerez en <strong>bur_id</strong> ensuite.</li>
</ol>
<p>Avant de compléter la table <strong>Bureau</strong>, nous allons ajouter des masques de saisie pour les champ <strong>bur_telephone</strong> et <strong>bur_code_postal</strong>.</p>

    <h3>Insérer un masque de saisie</h3>
<p>Un masque de saisie indique à Access la manière dont l'information doit être saisie dans une table.</p>
<p>On force donc l'utilisateur à saisir les données d'une certaine manière.</p>
<p class="notice exemple">Ex : il ne doit pas y avoir de lettres dans un numéro de téléphone ou un numéro de sécurité sociale.
     Les masques de saisie nous assurent que les données seront saisies de la bonne manière.</p>
<p>Access possède déjà quelques modèles pour les informations qui se retrouvent le plus souvent dans une base de données.</p>
<img src="../img/access/assistant_masque_saisie1.png" alt="assistant masque de saisie 1" />
<p>La partie qui suit vous montre comment accéder à ces modèles.</p>
<ol class="instruction">
	<li>Placez le curseur sur le champ <strong>bur_telephone</strong>.</li>
	<li>Parmi la liste de propriétés, cliquez sur <img src="../img/access/prop_masque_saisie.png" alt="propriété masque de saisie" />.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_suite.png" alt="bouton suite" />.</li>
</ol>
<p>Access va peut-être vous demander de sauvegarder votre table avant de pouvoir continuer. Sauvegardez-la. Si Access vous demande aussi une clé primaire, pour les besoins de l'exercice, n'en ajoutez pas pour le moment.</p>
<p>La fenêtre avec la liste des modèles s'affichera.</p>
<ol class="instruction">
	<li>Cliquez sur le masque de saisie <strong>Numéro de téléphone</strong>, puis Cliquez sur le bouton <img src="../img/access/bt_suivant_active.png" alt="bouton suivant activé" />.</li>
</ol>
<img src="../img/access/assistant_masque_saisie2.png" alt="assistant masque de saisie2" />
<p>La fenêtre suivante vous montre le masque de saisie. Vous pouvez expérimenter en écrivant du texte dans la case <strong>Essayer</strong>. Il vous est possible de changer le format du masque de saisie pour mieux répondre à vos besoins.</p>
<p>En plaçant le curseur dans la case <strong>Masque de saisie</strong> et en appuyant sur la touche <img src="../img/access/touche_F1.png" alt="touche F1" />, vous aurez une liste des possibilités pour le format du masque de saisie. Cette liste est très détaillée et devrait être lu attentivement.</p>
<p>Access demande ensuite de quelle manière sera enregistré l'information dans le champ&nbsp;: <strong>avec</strong> ou <strong>sans les symboles</strong> du masque de saisie (les parenthèses, les espaces ainsi que les tirets).</p>
<ol class="instruction">
	<li>Faites votre choix et Cliquez sur le bouton <img src="../img/access/bt_suivant_active.png" alt="bouton suivant activé" />.</li>
</ol>
<p>Une dernière fenêtre devrait apparaître pour vous indiquer que la création du masque de saisie est terminée.</p>
 <img src="../img/access/assistant_masque_saisie3.png" alt="assistant masque de saisie3" />
<p>À moins que vous ne vouliez changer une option en appuyant sur le bouton <img src="../img/access/bt_precedent.png" alt="bouton précédent" />, il ne reste qu'à appuyer sur le bouton <img src="../img/access/bt_terminer.png" alt="bouton terminer" />.</p>
<ol class="instruction">
	<li>À vous de créer le masque de saisie du <strong>bur_code_postal</strong> en suivant la même démarche.</li>
</ol>
<br class="clear" /> 
    <h3>Ajouter un masque de saisie</h3>
<p>L'option précédente montrait comment utiliser les masques de saisies existant. Mais, il vous est aussi possible d'ajouter vos propres masques de saisies pour mieux répondre à vos besoins. Le texte qui suit montre les étapes à suivre pour créer un nouveau masque de saisie.</p>
<p>Le prochain exercice va créer un nouveau masque de saisie pour le code d'inventaire. Ce code est composé de trois lettres, d'un tiret et de quatre chiffres.</p>
<ol class="instruction">
	<li>Entrez dans le mode de masque de saisie en appuyant sur le bouton <img src="../img/access/bt_suite.png" alt="bouton suite" />.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_modifier_liste.png" alt="bouton modifier liste" />&nbsp;situé au coin inférieur gauche de la fenêtre.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_fin_liste.png" alt="bouton fin de liste" /> pour vous rendre à la fin de la liste des masques de saisies et pouvoir en ajouter un nouveau.</li>
</ol>
 <img src="../img/access/assistant_personnaliser_masque_saisie.png" alt="assistant personnaliser masque de saisie" />
<p>Une fenêtre à compléter s'affichera :</p>
<ol class="instruction">
	<li>Pour les besoins de l'exemple, saisissez le texte de l'image ci-dessus dans les cases appropriées.</li>
</ol>
<p>Lorsque vous aurez fini la saisie des options voulues, cliquez sur le bouton <img src="../img/access/bt_fermer.png" alt="bouton fermer" />.</p>
<p>Vous pouvez ajouter autant de masques de saisie que vous voulez.</p>

    <h3>Liste de choix (suite)</h3>
<ol class="instruction">
	<li>Finissez la saisie des données de la table <strong>Bureau</strong>.</li>
</ol>
<p>Vous pouvez soit continuer avec votre fichier Access créé ou ouvrir le fichier <a href="./cours/exercices/commerce2.accdb" title="Fichier commerce2.accdb">commerce2.accdb</a>, pour accéder à la table <strong>Employe</strong> et sélectionner le champ <strong>emp_bureau</strong>.</p>
 <img src="../img/access/prop_liste_deroulante_bureau.png" alt="zone de liste modifiable bureaux" />
<ol class="instruction">
	<li>Retournez en <strong>Mode création</strong> en appuyant sur le bouton <img src="../img/access/bt_mode_creation.png" alt="bouton affichage création" />.</li>
	<li>Changez le contenu de la case <strong>Afficher le contrôle</strong> à <strong>Zone de liste déroulantee</strong>.</li>
	<li>Changez le contenu de la case <strong>Origine source</strong> à <strong>Table/requête</strong>.</li>
</ol>
<p class="notice remarque">Lorsque vous utilisez l'option <strong>Table/requête</strong>, la source de la liste peut être n'importe quel table ou requête de votre base de données.</p>
<ol class="instruction">
	<li>Changez le contenu de la case <strong>Contenu</strong> à la table <strong>Bureau</strong>.</li>
	<li>Changez le contenu de la case <strong>Colonne liée</strong> à <strong>1</strong>.</li>
</ol>
<p>C'est le contenu du premier champ de la table <strong>Bureau</strong> qui sera ajouté au champ <strong>emp_bureau</strong> de la table <strong>Employe</strong>.</p>
<ol class="instruction">
	<li>Changez le contenu de la case <strong>Nbre colonnes</strong> à <strong>3</strong>.</li>
</ol>
<p>Le contenu des trois premiers champs de la table <strong>Bureau</strong> sera affiché. Cela fourni plus d'informations à l'utilisateur pour faire le bon choix.</p>
<ol class="instruction">
	<li>Laissez l'option de la case<strong> En-têtes colonnes</strong> à <strong>Non</strong>.</li>
</ol>
<p>L'en-tête des colonnes affiche au dessus de la liste le nom des champs. Cela peut être inutile par moment comme pour ce cas.</p>
<ol class="instruction">
	<li>Changez le contenu de la case <strong>Largeurs colonnes</strong> à <strong>2cm;2cm;4cm</strong>.</li>
</ol>
<p>Vous pouvez déterminer la largeur de chaque champ qui sera affiché. Vous devez placer un point-virgule (<strong>;</strong>) entre la largeur de chaque colonne (<strong>champ</strong>).</p>
<ol class="instruction">
	<li>Laissez l'option de la case <strong>Lignes affichées</strong> à <strong>8</strong>.</li>
</ol>
<p>Un maximum de huit choix sera affiché en même temps à l'écran. Une barre de défilement verticale apparaîtra à si le nombre de choix possibles est supérieur.</p>
<ol class="instruction">
	<li>Changez le contenu de la case <strong>Largeur liste</strong> à <strong>8cm</strong>.</li>
</ol>
<p>C'est la largeur totale de tous les champs qui sera affichées.</p>
<ol class="instruction">
	<li>Changez le contenu de la case <strong>Limiter à la liste</strong> à <strong>Non</strong>.</li>
	<li>Enregistrez les modifications de la table en appuyant sur le bouton <img src="../img/access/bt_enregistrer.png" alt="bouton enregistrer" />.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_affichage_feuille.png" alt="bouton affichage feuille de données" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu <strong>Création</strong>, sélectionnez le menu <strong>Mode Feuille de données</strong> <img src="../img/access/menu_affichage_feuille.png" alt="menu affichage feuille de données" />.</li>
</ol>
<img src="../img/access/liste_3_colonnes.png" alt="liste sur 3 colonnes" />
<p>Vous remarquerez qu'il est plus facile de trouver le bon choix lorsqu'il y a plus d'informations. Le contenu des trois premiers champs de la table <strong>Bureau</strong> vont apparaître lorsque vous cliquerez sur le bouton à la droite de la cellule. C'est le contenu du premier champ qui sera placé dans cette cellule.</p>

<h2>Ajout d'enregistrements</h2> 
<ol class="instruction">
	<li>Apportez les ajouts aux enregistrements déjà créés et ajoutez les autres enregistrements à votre table.</li>
</ol>
<table class="table" summary="Ajout d'enregistrements">
 <tr>
 <th class="w70p">emp_id</th>
 <th class="w70p">emp_prenom</th>
 <th>emp_nom</th>
 <th class="w70p">emp_poste</th>
 <th>emp_bur_id</th>
 <th class="w60p">emp_salaire</th>
 <th>emp_commission</th>
 <th>emp_embauche</th>
 <th class="w50p">emp_statut</th>
 <th>emp_permanence</th>
 <th>emp_commentaires</th>
 </tr>
 <tr>
 <td>1</td>
 <td>Bruno</td>
 <td>ZIEUVAIR</td>
 <td>Gérant</td>
 <td>2</td>
 <td>50000</td>
 <td>&nbsp; </td>
 <td>01/01/2002</td>
 <td>2</td>
 <td>oui</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>2</td>
 <td>Marc</td>
 <td>ASSIN</td>
 <td>Vendeur</td>
 <td>2</td>
 <td>&nbsp; </td>
 <td>43000</td>
 <td>01/01/2002</td>
 <td>1</td>
 <td>oui</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>3</td>
 <td>Mélanie</td>
 <td>ZETAUFREY</td>
 <td>Vendeur</td>
 <td>2 </td>
 <td>&nbsp; </td>
 <td>64000</td>
 <td>01/01/2002</td>
 <td>1</td>
 <td>oui</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>4</td>
 <td>Paul</td>
 <td>TERGEIST</td>
 <td>Vendeur </td>
 <td>2</td>
 <td>&nbsp; </td>
 <td>22000</td>
 <td>05/05/2003</td>
 <td>5</td>
 <td>non</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>5</td>
 <td>Pierre</td>
 <td>HAFEUX</td>
 <td>Gérant</td>
 <td>3</td>
 <td>46000</td>
 <td>&nbsp; </td>
 <td>01/01/2003</td>
 <td>1</td>
 <td>oui</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>6</td>
 <td>Élie</td>
 <td>COPTAIRE</td>
 <td>Vendeur</td>
 <td>3</td>
 <td>&nbsp; </td>
 <td>42000</td>
 <td>01/06/2003</td>
 <td>2</td>
 <td>oui</td>
 <td>&nbsp; </td>
 </tr>
 <tr>
 <td>7</td>
 <td>Vincent</td>
 <td>TIME</td>
 <td>Vendeur</td>
 <td>3</td>
 <td>&nbsp; </td>
 <td>21000</td>
 <td>01/06/2003</td>
 <td>1</td>
 <td>non</td>
 <td>&nbsp; </td>
 </tr>
</table>

<h2>Le tri</h2>
<p>Au moment d'afficher le contenu de la table en mode <strong>Feuille de données</strong>, l'option du tri affiche les enregistrements en ordre croissant ou décroissant selon un champ.</p>
<p>Dans le mode <strong>Feuille de données</strong>, vous retrouverez dans la barre d'outils les boutons suivants&nbsp;: <img src="../img/access/bt_croissant.png" alt="bouton croissant" />&nbsp;<img src="../img/access/bt_decroissant.png" alt="bouton décroissant" />.</p>
<ol class="instruction">
	<li>Placez le curseur dans la colonne que vous voulez afficher en ordre croissant ou décroissant.</li>
	<li>Appuyez sur l'un des boutons pour afficher la table selon ce champ dans l'ordre que vous voulez.</li>
</ol>
<p>Tous les enregistrements seront triés selon l'ordre demandé sur le champ o&ugrave; se trouve le pointeur à ce moment.</p>

<h2>Le filtre</h2>
<p>L'option du filtre permet d'afficher seulement une partie des enregistrements : celle qui répond aux critères que vous avez déterminée auparavant. Ceci est très avantageux lorsque l'utilisateur veut retrouver rapidement quelques enregistrements parmi une grande masse de données. </p>
<p>À partir du mode <strong>Feuille de données</strong>, vous retrouverez les boutons pour créer, activer et désactiver le filtre sur une table ou une requête :
<img src="../img/access/bt_filtre_par_selection.png" alt="bouton filtre par sélection" /></p>
<p>Et le bouton renfermant le menu suivant : <img src="../img/access/menu_filtre_avance.png" alt="menu filtre avancé" /></p>


<h3>Création d'un filtre</h3>
<p>Vous devez déterminer les critères de sélection. Vous pouvez choisir d'afficher seulement une partie des enregistrements; ceux qui répondent à certains critères.</p>
<ol class="instruction">
	<li>À partir du <strong>Mode Feuille de données</strong>, Cliquez sur le bouton <img src="../img/access/bt_filtrer_par_formulaire.png" alt="bouton filtre par formulaire" />.</li>
</ol>
<p>La liste des champs de la table va apparaître les uns à côté des autres.</p>
<ol class="instruction">
	<li>Pour retirer les filtres précédents, Cliquez sur le bouton <img src="../img/access/bt_effacer_tous_les_filtres.png" alt="bouton efffacer tous les filtres" />.</li>
</ol>
<p>Il ne reste qu'à mettre les critères pour afficher seulement les enregistrements qui répondent à ces conditions.</p>
<p>Pour l'exercice, cela consiste à afficher seulement les vendeurs de <strong>Strasbourg</strong>. Donc, il faudra deux critères: l'un pour le champ <strong>emp_poste</strong> et l'autre pour le champ <strong>emp_bureau</strong>.</p>
<ol class="instruction">
	<li>Placez le pointeur dans la case <strong>emp_poste</strong>.</li>
	<li>Appuyez sur le triangle pointant vers le bas au bout de la case.</li>
	<li>De la liste, sélectionnez le poste vendeur.</li>
</ol>
<img src="../img/access/menu_sel_vendeur.png" alt="Filtre vendeur" /> et <img src="../img/access/menu_sel_strasbourg.png" alt="Filtre strasbourg" />
<ol class="instruction">
	<li>Placez le pointeur dans la case <strong>emp_bureau</strong>.</li>
	<li>Sélectionnez <strong>3 (Strasbourg)</strong> dans la liste.</li>
</ol>
<p>La liste des choix rend facile de trouver l'information. Elle affiche seulement ce qui est contenu dans le champ. Mais, il est aussi possible de créer ses propres critères.</p>
<p class="notice exemple">Ex : il est possible de savoir qui gagne un salaire supérieur à 45 000 &euro; en saisissant <strong>&gt;45000</strong> en dessous du champ <strong>emp_salaire</strong>.</p>
<p>Il est aussi possible de combiner des critères. Dans cet exercice, deux critères sont combinés. <strong>emp_poste</strong> est égal à <strong>Vendeur</strong> <strong>ET</strong> <strong>emp_bureau</strong> est égal à <strong>3 (Strasbourg)</strong>.</p>
    <h3>Activer un filtre</h3>
<ol class="instruction">
	<li>Pour activer le filtre, Cliquez sur le bouton <img src="../img/access/bt_activer-desactiver_filtre.png" alt="bouton filtre actif" />.</li>  
</ol>
<p>Access va ensuite vous montrer les enregistrements qui répondent aux critères que vous avez choisi.</p>
    <h3>Désactiver un filtre</h3>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="../img/access/bt_activer-desactiver_filtre.png" alt="bouton filtre actif" />.</li>
</ol>


