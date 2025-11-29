<?php
/**
 * solution requête 10
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   01/03/07  22:31:00
 *
 * @author Stéphane WAHL
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category requête
 * @access public
 * @uses
 */
$sNavigation = navigation('access', '10', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 10</h1>
<h2>Affichez le prénom, le nom et le revenu des employés ayant un revenu supérieur ou égale à 45000 &euro;</h2>
<p class="notice remarque">type monétaire et champ calculé</p>


<p>L'un des grands avantages des requêtes est la possibilité  de créer des champs calculés.</p>
<p>Il est possible d'afficher le résultat d'une formule qui utilise les informations provenant des autres champs de l'enregistrement.</p>
<p>Pour cet exemple, le revenu est calculé par la somme du salaire et de la commission de l'employé.</p>
<ol class="instruction">
	<li>Vous devez écrire le champ calculé dans l'une des cases de la ligne <strong>Champ</strong>.</li>
</ol>
<p>Le champ calculé est composé de deux parties: le <strong>emp_nom</strong> et la <strong>formule</strong>. Elles sont séparées par un &quot;<strong>:</strong>&quot;.</p>
<p>Pour l'exercice, vous devez créer le champ calculé pour le revenu de chaque employé.</p>
<ol class="instruction">
	<li>Placez  le curseur dans l'une des cases vides de la ligne <strong>Champ</strong>.</li>
	<li>Écrivez le nom que vous voulez donner à votre champ. Pour l'exercice, écrivez &quot;<strong>Revenu</strong>&quot;.</li>
	<li>Écrivez un &quot;<strong>:</strong>&quot; pour séparer le nom du champ de la formule dont vous avez besoin. C'est après le : que vous écrivez votre formule.</li>
	<li>Écrivez  la formule <strong>emp_salaire + emp_commission</strong>.</li>
</ol>
<p class="notice exemple">Ex : [nom] : [formule], [tva] : [total]*19,5% , [ttc] :  ([total]+[tva]) etc.</p>
<p>Donc, lorsque vous créez votre table, il ne doit pas y avoir de champs dont vous pouvez trouver le résultat à partir des autres champs de l'enregistrement.</p>
<p>L'exemple ci-dessus démontre qu'il est inutile d'avoir un champ TVA et TTC dans une table puisqu'il est facile de les calculer.</p>
<p>Si le nom du champ est composé de plusieurs mots, vous devez le mettre entre des crochets [ ].</p>
<p class="notice exemple">Ex : <strong>[Date de naissance],</strong> <strong>[Taxe à la valeur ajoutée].</strong></p>
<p>Il arrive souvent après que vous ayez exécuté une requête ayant un champ calculé qu'Access demande la valeur du paramètre. Une fenêtre  apparaît avec le message et indique aussi le nom d'un champ.</p>
<p>La raison pourquoi cette fenêtre apparaît est simple : vous avez fait une erreur d'orthographe sur l'un des noms de champ. Il faut absolument que le nom du champ dans la case du champ calculé soit identique à celui que vous avez donné dans la table ou dans la requête.</p>

<p>Pour cet exercice, il est possible qu'on oublie de mettre deux &quot;<strong>m</strong>&quot; ou deux &quot;<strong>s</strong>&quot; au champ <strong>emp_commission</strong>. Il arrive souvent de mettre un &quot;<strong>s</strong>&quot; à la fin du champ <strong>emp_commission</strong> ou du champ <strong>emp_salaire</strong>. Vous devez l'écrire de la même façon qu'il est écrit dans la table.</p>

<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>Revenu :    [emp_salaire] + [emp_commission]</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&gt;=45000</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>50 000 &euro;</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFREY</td>
    <td>64 000 &euro;</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>46 000 &euro;</td>
  </tr>
</table>

