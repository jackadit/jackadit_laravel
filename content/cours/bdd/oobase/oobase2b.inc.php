<?php
/**
 * BUT : page du cours 2b
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:23:00
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




<h1>OpenOffice Base : LES TABLES (b)</h1>
<h2>Modification de la table</h2> 
<p>Il se peut que pendant la phase de création de cette table vous ayez commis une erreur. Pour rectifier une éventuelle erreur, nous allons maintenant voir comment faire pour modifier la structure de la table <strong>Employe</strong></p>
<p>Dans notre exemple, nous devons ajouter quatre nouveaux champs&nbsp;: <strong>emp_id</strong>, <strong>Statut</strong>, <strong>emp_permanence</strong> et <strong>Commentaires</strong>.</p>
<p>Le champ <strong>emp_id</strong> sera utilisé pour différencier chacun des enregistrements. Il sera la clé primaire de la table. De plus, le champ <strong>emp_id</strong> sera inséré au début de la structure de la table.</p>
<p>Le champ <strong>Statut</strong> servira à conserver le statut marital de l'employé. Ce champ sera du type <strong>Numérique</strong>. Il va conserver le statut marital selon un chiffre: 1 = célibataire, 2 = marié sans dépendants, 3 = marié avec dépendants, 4 = divorcé, 5 = divorcé avec allocation familiale. Donc, les seules chiffes valides sont entre 1 et 5. Cela sera aussi utilisé lors de la création d'un formulaire.</p>
<p>Le champ <strong>emp_permanence</strong> sera du type <strong>Oui/Non</strong>.</p>
<p>Le champ <strong>Commentaire</strong> sera de type <strong>mémo</strong>. Il sera ainsi possible d'écrire des commentaires, au sujet de la performance de chacun des employés de l'entreprise.</p>
<div>
 <table class="table" summary="tableau des modifications">
 <tr>
  <th>Nom du champ</th>
  <th>Type de champ</th>
  <th>Longueur</th>
  <th>Format</th>
  <th>Autre</th>
 </tr>
 <tr>
  <td>Nom</td>
  <td>Texte [VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Prénom</td>
  <td>Texte [VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Poste</td>
  <td>Texte [VARCHAR]</td>
  <td>25</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Bureau</td>
  <td>Texte [VARCHAR]</td>
  <td>50</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Salaire</td>
  <td>Décimal [DECIMAL]</td>
  <td>&nbsp; </td>
  <td>Monétaire</td>
  <td>Valeur par défaut = 0</td>
 </tr>
 <tr>
  <td>Commission</td>
  <td>Décimal [DECIMAL]</td>
  <td>&nbsp; </td>
  <td>Monétaire</td>
  <td>Valeur par défaut = 0</td>
 </tr>
 <tr>
  <td>Embauche</td>
  <td>Date [DATE]</td>
  <td>&nbsp; </td>
  <td>JJ/MM/AAA</td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Numero_Poste</td>
  <td>Interger [INTEGER]</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>AutoValeur = Oui</td>
 </tr>
 <tr>
  <td>Statut</td>
  <td>Interger [INTEGER]</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>Permanence</td>
  <td>Oui/Non [BOOLEAN]</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 <tr>
  <td>emp_commentaires</td>
  <td>Mémo [LONGVARCHAR )</td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
 </tr>
 </table>
</div>
    <h3>Insérer un champ</h3>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur un en-tête de champ.</li>
	<li>Sélectionnez l'option <strong>Insérer des lignes</strong>.</li>
</ol>
<p class="notice remarque">L'insertion d'une ligne se fait toujours en fin de tableau quel que soit l'en-tête de champ sur lequel vous cliquez !</p>
<ol class="instruction">
	<li>Écrivez le nom du champ. Pour l'exercice, il s'agit de <strong>Numero_Poste</strong>.</li>
	<li>Sélectionnez le type de champ <strong>Interger [INTEGER]</strong>.</li>
	<li>Modifiez la propriété AutoValeur à <strong>Oui</strong>.</li>
	<li>Insérez les nouveaux champs <strong>Statut</strong>, <strong>emp_permanence</strong> et <strong>Commentaires</strong> à la fin de la table en tenant compte des propriétés décrites dans la table ci-dessus.</li>
</ol>

    <h3>Déplacer un champ</h3>
<p class="notice remarque">Un champ ne peut être déplacé qu'en fin de table !</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur l'en-tête gris à la gauche du nom du champ.</li>
	<li>Sélectionnez l'option <strong>Couper</strong> OU cliquez sur le bouton <img src="/assets/img/oobase/bt_couper.png" alt="Bouton Couper" />.</li>
	<li>Cliquez à nouveau avec le bouton droit de la souris sur un en-tête de champ puis sélectionnez l'option <strong>Coller</strong> OU cliquez sur le bouton <img src="/assets/img/oobase/bt_coller.png" alt="Bouton Coller" />.</li>
</ol>
<p class="notice remarque">Vous pouvez sélectionner plusieurs champs de la table en appuyant sur la touche <img src="/assets/img/oobase/touche_CTRL_petit.png" alt="touche CTRL" />.</p>

    <h3>Supprimer un champ</h3>
<ol class="instruction">
	<li>Cliquez sur la ligne dont vous voulez supprimer le champ et appuyez sur la touche <img src="/assets/img/oobase/touche_suppr.png" alt="touche supprimer" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu contextuel, sélectionnez l'option <strong>Supprimer</strong>.</li>
</ol>
<p class="notice remarque">Apparemment cette technique ne fonctionne pas ! Une fois la table enregisté, les champs reviennent à leur position initiale.</p>

<h2>Placer la clé primaire <img src="/assets/img/oobase/cle_primaire.png" alt="bouton clé primaire" /></h2>
<p>La clé primaire est un champ qui permet de distinguer chaque enregistrement de façon unique.</p>
<p>De la même manière qu'une personne a un numéro de sécurité sociale, un numéro de client ou d'employé, la clé primaire est unique et peut être composée de lettres ou de chiffres.</p>
<p class="notice remarque">OpenOffice Base ne permet pas la création d'une clé primaire si deux enregistrements ont la même information dans le champ choisi.</p>
<p>Une table n'est pas obligée d'avoir une clé primaire. Elle a cependant besoin d'une clé primaire si d'autres tables veulent accéder à une information de cette table.</p>
<div class="notice exemple">Ex : la table <strong>Facture</strong> pourrait, grâce aux relations entre les tables, accéder à l'information de la table <strong>Client</strong> pour 
     connaître le nom du client, son adresse et d'autres informations.<br />
     Donc, pour trouver plus rapidement l'information et pour s'assurer qu'il n'y a pas deux clients avec le même numéro
     de clients, il faut que le champ <strong>cli_id</strong> de la table <strong>Client</strong> soit la clé primaire de cette table.</div>
<p>Pour cet exercice, le nouveau champ <strong>Numero_Poste</strong> sera la clé primaire de la table.</p>
<ol class="instruction">
	<li>Cliquez avec le bouton droit de la souris sur l'en-tête du champ qui sera la clé primaire de la table (ici le champ <strong>Numero_Poste</strong>).</li>
	<li>Sélectionnez l'option <strong>Clé primaire</strong>.</li>
</ol>
 <img src="/assets/img/oobase/table_cle_primaire.png" alt="clé primaire de la table employés" />
<p>La clé placée dans l'en-tête gris à gauche du champ <strong>Numero_Poste</strong> confirme que la clé primaire est sur ce champ.</p>
<p class="notice remarque">Si par erreur, vous avez choisi le mauvais champ pour la clé primaire, il suffit de recommencer l'opération précédente.</p>
<h2>Saisie de données</h2> 
<p>Maintenant que la structure de la table est définie, il est possible d'entrer de l'information utile pour l'utilisateur; des données. La prochaine étape consiste à entrer ces données dans la table. Nous allons donc saisir les données concernant quatre employés du bureau de Haguenau. </p>
<p class="notice remarque">Vous ne pourrez pas saisir de données directement dans la table tant que vous n'aurez pas définie une clé primaire !</p>
<ol class="instruction">
	<li>Fermez la fenêtre de la table en mode ébauche.</li>
	<li>Double-cliquez sur la table <strong>Employe</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Choisissez l'option <strong>Ouvrir</strong> du menu contextuel.</li>
</ol>
<p>OpenOffice Base affiche une grille pour entrer les données comme celle-ci (sans les données).</p>
 <img src="/assets/img/oobase/tableau_4_saisies.png" alt="feuille employés" />
<p>Saisissez les informations ci-dessus concernant les employés de la société.</p>

<p class="notice remarque">La dernière ligne d'une table ou d'une requête affiche toujours un <img src="/assets/img/oobase/btn_etoile.png" alt="bouton étoile" /> dans la case grise à la gauche de la ligne. Cela indique la fin de la table. Saisissez les chiffres sans les signes &euro;.</p>

