<?php
/**
 * page de cours 2b sur ACCESS 2003
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   16/08/07  12:45:00
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
<h1>ACCESS : LES TABLES (b)</h1>

<h2>Modification d'une table</h2> 
<p>Nous allons maintenant modifier le contenu de la table <strong>Employe</strong></p>
<p>Dans notre exemple, nous devons ajouter quatre nouveaux champs&nbsp;: <strong>emp_id</strong>, <strong>emp_statut</strong>, <strong>emp_permanence</strong> et <strong>emp_commentaire</strong>.</p>
<p>Le champ <strong>emp_id</strong> sera utilisé pour différencier chacun des enregistrements. Il sera la clé primaire de la table et sera inséré au début de la structure de la table.</p>
<p>Le champ <strong>emp_statut</strong> servira à conserver le statut marital de l'employé. Ce champ sera du type <strong>Numérique</strong>. Il va conserver le statut marital selon un chiffre: 1 = célibataire, 2 = marié sans dépendants, 3 = marié avec dépendants, 4 = divorcé, 5 = divorcé avec allocation familiale. Donc, les seules chiffes valides sont entre 1 et 5. Cela sera aussi utilisé lors de la création d'un formulaire.</p>
<p>Le champ <strong>emp_permanence</strong> sera du type <strong>Oui/Non</strong>.</p>
<p>Le champ <strong>emp_commentaire</strong> sera de type <strong>Texte long</strong>. Il sera ainsi possible d'écrire des commentaires, au sujet de la performance de chacun des employés de l'entreprise.</p>
<div>
 <table class="table" summary="tableau des modifications">
 <tr>
  <th>Nom du champ</th>
  <th>Type de champ</th>
  <th>Taille</th>
  <th>Format</th>
  <th>Autre</th>
 </tr>
 <tr>
  <td class="txtleft">emp_id</td>
  <td class="txtleft">NuméroAuto</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td class="txtleft">emp_nom</td>
  <td class="txtleft">Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_prenom</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_poste</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_bureau</td>
  <td>Texte</td>
  <td>30</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_salaire</td>
  <td>Monétaire</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_commission</td>
  <td>Monétaire</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_embauche</td>
  <td>Date/Heure</td>
  <td>&nbsp; </td>
  <td>Date, abrégé</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_statut</td>
  <td>Numérique</td>
  <td>Entier long</td>
  <td>&nbsp; </td>
  <td>Valide si: Entre 1 Et 5</td>
 </tr>
 <tr>
  <td>emp_permanence</td>
  <td>Oui/Non</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_commentaire</td>
  <td>Texte long</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 </table>
</div>
<img src="../img/access/prop_valide_si.png" alt="propriété valide si" />

    <h3>Insérer un champ</h3>
<ol class="instruction">
	<li>Placez le pointeur sur la ligne du champ <strong>emp_nom</strong>.</li>
	<li>Du menu <strong>Création</strong>, sélectionnez le bouton <strong>Insérer des lignes</strong> <img src="../img/access/bt_inserer_ligne.png" alt="bouton insérer des lignes" />.</li>
</ol>
 OU<br />
<ol class="instruction">
    <li>Cliquez avec le bouton droit sur la ligne du champ <strong>emp_nom</strong> et choisir le menu <strong>Insérer des lignes</strong> <img src="../img/access/menu_inserer_ligne.png" alt="bouton insérer des lignes" />.</li>
</ol>
<p>Une nouvelle ligne libre apparaîtra. Les autres lignes seront décalées vers le bas.</p>
<ol class="instruction">
	<li>Écrivez le nom du champ. Pour l'exercice, il s'agit de <strong>emp_id</strong>.</li>
	<li>Sélectionnez le type de champ <strong>NuméroAuto</strong>.</li>
	<li>Insérez les nouveaux champs <strong>emp_statut</strong>, <strong>emp_permanence</strong> et <strong>emp_commentaires</strong> à la fin de la table en tenant compte des propriétés décrites dans la table ci-dessus.</li>
</ol>

    <h3>Déplacer un champ</h3>
<p>Nous allons maintenant déplacer le champ <strong>emp_prenom</strong> avant le champ <strong>emp_nom</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête gris à la gauche du nom du champ.</li>
	<li>En gardant un doigt sur le bouton gauche de la souris, déplacez le champ vers le haut.</li>
	<li>Lorsque la ligne séparatrice entre deux champs devient plus épaisse, lâchez le bouton de la souris.</li>
</ol>
<p>Le champ va se réinsérer dans la structure de la table entre les deux champs.</p>

    <h3>Supprimer un champ</h3>
<ol class="instruction">
	<li>Sélectionnez la ou les lignes dont vous voulez supprimer le champ et appuyez sur la touche <img src="../img/access/touche_suppr.png" alt="touche supprimer" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu <strong>Création</strong>, sélectionnez le bouton <strong>Supprimer les lignes</strong> <img src="../img/access/bt_supprimer_ligne.png" alt="bouton supprimer les lignes" />.</li>
</ol>
OU<br />
<ol class="instruction">
	<li>Cliquez avec le bouton droit sur la ou les lignes de champ désirés et choisir le menu <strong>Supprimer des lignes</strong> <img src="../img/access/menu_supprimer_ligne.png" alt="menu supprimer les lignes" />.</li>
</ol>
<h2>Placer la clé primaire <img src="../img/access/bouton_cle_primaire.png" alt="bouton clé primaire" /></h2>
<p>La clé primaire est un champ (ou une série de champs) qui permet de distinguer chaque enregistrement de façon unique.</p>
<p>De la même manière qu'une personne a un numéro de sécurité sociale, un numéro de client ou d'employé, la clé primaire est unique et peut être composée de lettres ou de chiffres.</p>
<p class="notice remarque">Access ne permet pas la création d'une clé primaire si deux enregistrements ont la même information dans le champ choisi. Si vous avez absolument besoin que deux enregistrements aient la même information, il faudrait considérer un autre champ, ou une combinaison de champs, pour la clé primaire de la table.</p>
<p>Une table n'est pas obligée d'avoir une clé primaire. Elle a cependant besoin d'une clé primaire si d'autres tables veulent accéder à une information de cette table.</p>
<p class="notice exemple">Ex : la table <strong>Facture</strong> pourrait, grâce aux relations entre les tables, accéder à l'information de la table <strong>Client</strong> pour connaître le nom du client, son adresse et d'autres informations.<br />
Donc, pour trouver plus rapidement l'information et pour s'assurer qu'il n'y a pas deux clients avec le même numéro
     de clients, il faut que le champ <strong>cli_id</strong> de la table <strong>Client</strong> soit la clé primaire de cette table.</p>
<p>Pour cet exercice, le nouveau champ <strong>emp_id</strong> sera la clé primaire de la table <strong>Employe</strong>.</p>
<ol class="instruction">
	<li>Placez le pointeur sur la ligne du champ <strong>emp_id</strong> qui sera la clé primaire de la table.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_cle_primaire.png" alt="bouton clé primaire" />.</li>
</ol>
OU<br />
<ol class="instruction">
	<li>Cliquez avec le bouton droit sur la ligne de champ désiré et choisir le menu <strong>Clé primaire</strong> <img src="../img/access/menu_cle_primaire.png" alt="clé primaire de la table Employe" />.</li>
</ol>

<p>La clé placée dans l'en-tête gris à gauche du champ <strong>emp_id</strong> confirme que la clé primaire est sur ce champ.</p>
<p>Si par erreur, vous avez choisi le mauvais champ pour la clé primaire, positionnez-vous sur ce champ et cliquez sur le bouton <img src="../img/access/bt_cle_primaire.png" alt="bouton clé primaire" /> pour désélectionner le champ comme clé primaire.</p>

    <h3>Placer une clé primaire sur plusieurs champs</h3>
<p>Une clé primaire peut aussi être composée de plusieurs champs. Il y a même des occasions où il est nécessaire d'avoir une clé primaire de cette façon. Pour cet exercice, la clé primaire sera composée des champs <strong>emp_prenom</strong>, <strong>emp_nom</strong> et <strong>emp_embauche</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur l'en-tête gris à la gauche du champ <strong>emp_prenom</strong>.</li>
	<li>En gardant un doigt sur la touche <img src="../img/access/touche_ctrl.png" alt="touche ctrl" />, cliquez ensuite sur l'en-tête gris à gauche des champs <strong>emp_nom</strong> et <strong>emp_embauche</strong>.</li>
	<li>Cliquez sur le bouton <img src="../img/access/bt_cle_primaire.png" alt="bouton clé primaire" />.</li>
</ol>
 <img src="../img/access/table_cles_primaires_multiples.png" alt="table clé primaire multiple" />
<p>Voici le résultat final&nbsp;:</p>
<p>Les clés placées dans l'en-tête gris confirme que la clé primaire est composée des champs <strong>emp_prenom</strong>, <strong>emp_nom</strong> et <strong>emp_embauche</strong>. Cela veut dire qu'il est possible d'inscrire plusieurs fois la même valeur dans l'un des champs.</p>
<p>Mais il est impossible d'inscrire plusieurs fois les mêmes valeurs dans tous les champs qui composent la clé primaire en même temps.</p>
<p class="notice exemple">Ex : il est impossible d'avoir deux personnes ayant le même prénom et nom qui soient embauchées
     en même temps.</p>
<ol class="instruction">
	<li>Pour les besoins des prochains exercices, replacez la clé primaire sur le champ <strong>emp_id</strong>.</li>
</ol>

<h2>Saisie de données</h2>
<p>Maintenant que la structure de la table est définie, il est possible de saisir de l'information utile pour l'utilisateur, à savoir, des données. Pour commencer, il y a des données sur les quatre employés du bureau de Haguenau. La prochaine étape consiste à saisir ces données dans la table.</p>
<ol class="instruction">
  <li>Cliquez sur le bouton <img src="../img/access/bt_affichage_feuille.png" alt="bouton affichage feuille de données" />.</li>
</ol>
 OU<br />
<ol class="instruction">
  <li>Du menu <strong>Création</strong>, sélectionnez le menu <strong>Mode Feuille de données</strong> <img src="../img/access/menu_affichage_feuille.png" alt="menu affichage feuille de données" />.</li>
</ol>
<p>Access affiche une grille pour saisir les données comme celle-ci (sans les données).</p>
 <img src="../img/access/feuille_employes1.png" alt="feuille employés" />
<p>Saisissez les informations ci-dessus sur les employés de la société.</p>

<p class="notice remarque">La dernière ligne d'une table ou d'une requête affiche toujours un <img src="../img/access/bouton_etoile.png" alt="bouton étoile" /> dans la case grise à la gauche de la ligne. Cela indique la fin de la table. Saisissez les chiffres sans les signes &euro;.</p>
<p class="notice alert">Vous n'avez pas besoin de saisir le numéro du champ <strong>emp_id</strong> puiqu'il sera créé automatiquement.</p>

    <h3>Insérer un Valide Si</h3>
<p>La propriété <strong>Valide Si</strong> permet de mettre des limites ou des bornes à l'entré de données.</p>
<p class="notice exemple">Ex : un salaire ou une commission ne peuvent être négatifs. Appliquez cette propriété aux champs <strong>emp_salaire</strong> et <strong>emp_commission</strong>.</p>
<ol class="instruction">
  <li>Ouvrez la table <strong>Employe</strong> en <strong>Mode création</strong> en cliquant sur le bouton <img src="../img/access/bt_mode_creation.png" alt="bouton mode création" />.</li>
</ol>
 OU<br />
<ol class="instruction">
  <li>Du menu <strong>Création</strong>, sélectionnez le menu <strong>Mode création</strong> <img src="../img/access/menu_mode_creation.png" alt="menu mode création" />.</li>
</ol>
<ol class="instruction">
 <li>Placez le pointeur sur le champ <strong>emp_salaire</strong>.</li>
</ol>
<p>Les propriétés du champ vont apparaître dans la section du bas.</p>
<ol class="instruction">
  <li>Placez le pointeur dans la case <strong>Valide Si</strong>.</li>
</ol>
<p>C'est dans cette case que vous mettez les critères de validation. Vous pouvez utiliser de différents opérateurs ( =, &gt;, &lt;, &lt;=, &gt;=, &lt;&gt;, Entre et, ou, Pas ...) pour créer le critère de validation.</p>
<ol class="instruction">
  <li>Dans la case <strong>Valide Si</strong>, saisissez le critère suivant:<strong> &gt;= 0</strong> .</li>
</ol>
<p>Dans l'exercice, les gérants gagnent seulement un salaire tandis que les vendeurs gagnent seulement une commission sur les ventes. Il est donc possible d'avoir un salaire ou une commission égale à zéro.</p>
<ol class="instruction">
  <li>Dans la case <strong>Message si erreur</strong>, saisissez le texte suivant&nbsp;: <em>Un employé de la société ne peut pas avoir un salaire négatif. Saisissez un nombre positif ou zéro.</em></li>
  <li>Répétez l'opération pour le champ <strong>emp_commission</strong>.</li>
  <li>Enregistrez.</li>
</ol>
<p>La fenêtre suivante apparaitra :</p>
<img src="../img/access/f_regle_integrite.png" alt="règle intégrité" />
<ol class="instruction">
  <li>Cliquez sur <strong>Oui</strong>.</li>
</ol>


