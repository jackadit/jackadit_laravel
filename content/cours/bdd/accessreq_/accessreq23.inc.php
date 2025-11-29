<?php
/**
 * solution requête 23
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   02/03/07  15:52:00  
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
$sNavigation=navigation('access', '23', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 23</h1>
<h2>Utilisez une requête d'analyse croisée pour déterminer la masse salariale de l'entreprise par occupation en colonne et par lieu de  travail en ligne.</h2>
<p class="notice remarque">Requête d'analyse croisée et l'opération <strong>Somme</strong></p>

<p>Pour créer une analyse croisée, vous avez besoin <strong>d'au moins trois champs.</strong></p>
<ul>
	<li><strong>L'en-tête de colonne&nbsp;</strong>: Ce sont les valeurs  qui seront affichées au haut de chaque colonne du tableau d'analyse croisé.  Pour cet exercice, ce sera le contenu du champ Poste.</li>
</ul>
<p>Les colonnes du tableau vont  représenter chacune des valeurs qui se retrouvent dans le champ.</p>
<p>Puisqu'il y a seulement deux  activités, gérant et vendeur, le tableau aura seulement deux colonnes avec  ces valeurs.</p>
<ul>
	<li><strong>L'en-tête de ligne&nbsp;</strong>: C'est le champ qui va  détailler les valeurs des colonnes.</li>
</ul>
<p>Il vous est aussi possible  d'ajouter d'autres <strong>En-têtes de ligne</strong> pour décrire avec plus de détails  les résultats. Pour cet exercice, ce champ sera le champ <strong>emp_bureau</strong>.</p>
<ul>
	<li><strong>Les valeurs</strong> : dernier élément nécessaire à la création d'une analyse croisée.</li>
</ul>
<p>C'est  un chiffre ou une opération comme ceux utilisés pour les exercices de 16 à 21 (<strong>somme</strong>, <strong>moyenne</strong>, <strong>compte</strong> ...).</p>
<p>Pour les besoins de l'exercice, il est encore une fois  nécessaire d'utiliser le champ calculé <strong>Revenu</strong> qui est le total du  salaire et de la commission de chacun des employés de l'entreprise (<strong>Revenu:  [emp_salaire] + [emp_commission]</strong>).</p>
<p class="notice remarque">Un tableau d'analyse croisé ne peut avoir qu'une seule opération à la fois.</p>
<p>Donc, si vous avez besoin d'avoir la somme et la moyenne  de la masse salariale, il faudra deux analyses avec des opérations différentes  (<strong>Somme</strong> et <strong>Moyenne</strong> par exemple).</p>
<ol class="instruction">
	<li>Créez une nouvelle requête en mode <strong>Création</strong>.</li>
</ol>
<p>Il aurait été possible d'utiliser l'assistant d'analyse croisée si l'exercice n'utilisait pas le champ calculé <strong>Revenu</strong>.</p>
<ol class="instruction">
	<li>Parmi la liste des tables et requêtes, sélectionnez la table <strong>Employe</strong>.</li>
	<li>Sélectionnez  une requête de type d'analyse croisé en sélectionnant le bouton <img src="/assets/img/access/bt_analyse_croisee.png" alt="bouton requête analyse croisée" />.</li>
</ol>
  OU<br />
<ol class="instruction">
	<li>Du menu <strong>Requête</strong>, sélectionnez la requête <strong>Analyse croisée</strong>.</li>
	<li>Sélectionnez le champ <strong>emp_poste</strong>  et <strong>emp_bureau</strong>.</li>
	<li>Sur la ligne des champs, à la droite des deux champs que vous venez d'ajouter,  écrivez la formule pour le champ calculé: <strong>Revenu: [emp_salaire] + [emp_commission]</strong>.</li>
	<li>À la ligne des opérations, sélectionnez l'opération <strong>Somme</strong> sous le champ <strong>Revenu</strong>.</li>
	<li>Laissez l'opération <strong>Regroupement</strong> aux deux autres champs.</li>
	<li>À la ligne d'analyse, sélectionnez l'option <strong>En-tête de colonne</strong> sous le champ <strong>emp_poste</strong> .</li>
	<li>À la ligne d'analyse, sélectionnez l'option <strong>En-tête de ligne</strong> sous le champ <strong>emp_bureau</strong>.</li>
	<li>À la ligne d'analyse, sélectionnez l'option <strong>Valeur</strong> sous le champ calculé <strong>Revenu</strong>.</li>
</ol>
<p>Voici une représentation des champs et des options sélectionnées.</p>
<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_poste</td>
    <td>emp_bureau</td>
    <td>Revenu: [emp_salaire] + [emp_commission]</td>
  </tr>
  <tr>
    <th>Table</th>
    <td>Employe</td>
    <td>Bureau</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Regroupement</td>
    <td>Somme</td>
  </tr>
  <tr>
    <th>Analyse</th>
    <td>En-tête de colonne</td>
    <td>En-tête de ligne</td>
    <td>Valeur</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton exécuter" />.</p>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>bur_nom</th>
    <th>Gérant</th>
    <th>Vendeur</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>50 000</td>
    <td>129 000</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>46 000</td>
    <td>63 000</td>
  </tr>
</table>
<p>Vous pouvez ajouter d'autres champs sur la ligne d'analyse s'il utilise l'<strong>en-tête de ligne</strong>.</p>
<p>Le résultat sera plus détaillé s'il y a plus de champs qui utilisent l'en-tête de ligne.</p>
<p class="notice exemple">Ex : vous pouvez ajouter le champ <strong>emp_permanence</strong> pour différencier la masse salariale des employés qui ont ou n'ont pas <br />
la permanence à l'intérieur de l'entreprise.<br />
  Ou, vous pouvez utiliser un champ calculé avec la fonction <strong>Année([embauche])</strong> pour déterminer la masse salariale par <br />
  le nombre d'années d'expérience dans la société.</p>
<p>Il vous est aussi possible d'avoir d'autres champs pour des  critères de sélection. Si vous ne voulez pas que ces champs s'affichent dans le tableau, utilisez l'option <strong>Non</strong> affichée sur la ligne d'analyse.</p>

