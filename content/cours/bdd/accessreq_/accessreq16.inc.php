<?php
/**
 * solution requête 16
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   02/03/07  10:11:00  
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
$sNavigation=navigation('access', '16', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 16</h1>
<h2>Affichez la somme de la masse salariale de la compagnie.</h2>
<p class="notice remarque">Utilisation de l'opération somme</p>


<p>Pour l'instant, les requêtes affichaient les informations selon les critères demandés. Mais que faire lorsqu'on a besoin de trouver la somme, la moyenne ou le nombre d'enregistrements qui répondent à certains critères ?</p>
<p>C'est pour ce genre de critères qu'il existe les opérations de regroupement.</p>
<p>Il est possible avec les opérations de regrouper les enregistrements pour pouvoir les additionner, les compter, trouver la moyenne, le plus petit, le plus grand et plusieurs autres fonctions.</p>
<p>C'est aussi l'opportunité de revoir les champs calculés pour déterminer la masse salariale de l'entreprise. </p>
<p>On utilise encore une fois un champ calculé pour déterminer le revenu (salaire + commission) de chaque employé.</p>
<ol class="instruction">
	<li>De  la barre d'outils, Cliquez sur le bouton <img src="/assets/img/access/bt_totaux.png" alt="bouton totaux" />.</li>
</ol>

<p>Une nouvelle ligne s'est insérée en dessous de la ligne des champs. C'est la ligne des opérations. Access vous permet d'accomplir des opérations mathématiques sur les enregistrements d'une requête. Si vous regardez les opérations possibles, vous retrouverez parmi d'autres la somme, la moyenne, le plus petit (min), la plus grande (max), etc.</p>
<ol class="instruction">
	<li>Dans la première colonne, écrivez la formule suivante: <strong>Revenu: [emp_salaire] +  [emp_commission]</strong>.</li>
</ol>
  <img src="/assets/img/access/regroupement.png" alt="regroupement somme" />
<ol class="instruction">
	<li>De la ligne des  opérations, sélectionnez l'opération de <strong>Somme</strong> pour le revenu.</li>
</ol>
<p class="notice remarque">L'opération <strong>Somme</strong> est utilisée pour l'addition de chiffres de champs de  type numérique ou de type monétaire.<br />
L'opération <strong>Compte</strong> est utilisée pour compter le nombre d'enregistrements qui répondent aux critères sélectionnés.
<p>Il est aussi à noter qu'il est impossible de mettre un  critère sous les opérations sauf pour les opérations <strong>Regroupement</strong>, <strong>Compte</strong>, <strong>Expression</strong> et <strong>Où</strong>.</p>
<p>Cette dernière sera utilisée pour <a href="/cours/qlio/accessreq/19">la requête 19</a>.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Revenu : [emp_salaire] + [emp_commission]</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>288 000,00 &euro;</td>
  </tr>
</table>
<p>On peut également réaliser la requête en utilisant la  fonction <strong>Somme</strong>. Voici à quoi elle ressemblerait.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Revenu : somme([emp_salaire] + [emp_commission])</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td></td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td></td>
  </tr>
  <tr>
    <th>Ou</th>
    <td></td>
  </tr>
</table>
<p>Dans ce cas, elle n'est pas vraiment plus pratique que  l'opération <strong>Somme</strong>. Elle est cependant plus pratique lorsqu'elle est  utilisée dans un champ calculé avec d'autres fonctions.</p>
<p class="notice exemple">Ex : <strong>somme([emp_commission] +  [emp_salaire])/compte([bur_id])</strong>.</p>
<p>Cette dernière formule est l'équivalent de <strong>moyenne([emp_salaire] + [emp_commission])</strong>.</p>

