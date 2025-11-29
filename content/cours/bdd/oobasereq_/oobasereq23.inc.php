<?php
/**
 * BUT : solution requête 23
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:53:00
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
$sNavigation=navigation('oobase', '23', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 23</h1>
<h2>Déterminer la masse salariale de l'entreprise par activité en colonne et par lieu de  travail en ligne.</h2>
<pre>Fonction <strong>Somme</strong></pre>

<p>Cette requête à pour but de créer une analyse croisée.</p>
Celle-ci est composée de :</p>
<ul>
	<li><strong>L'en-tête de colonne&nbsp;</strong>: Ce sont les valeurs  qui seront affichées au haut de chaque colonne du tableau d'analyse croisé.  Pour cet exercice, ce sera le contenu du champ Poste.</li>
</ul>
<p>Les colonnes du tableau vont  représenter chacune des valeurs qui se retrouvent dans le champ.</p>
<p>Puisqu'il y a seulement deux activités, gérant et vendeur, le tableau aura seulement deux colonnes avec ces valeurs.</p>
<ul>
	<li><strong>L'en-tête de ligne&nbsp;</strong>: C'est le champ qui va détailler les valeurs des colonnes.</li>
</ul>
<p>Il vous est aussi possible d'ajouter d'autres <strong>En-têtes de ligne</strong> pour décrire avec plus de détails  les résultats. Pour cet exercice, ce champ sera le champ <strong>Bureau</strong>.</p>
<ul>
	<li><strong>Les valeurs</strong> : dernier élément nécessaire à la création d'une analyse croisée.</li>
</ul>
<p>C'est  un chiffre ou une opération comme ceux utilisés pour les exercices de 16 à 21 (<strong>somme</strong>, <strong>moyenne</strong>, <strong>nombre</strong> ...).</p>
<p>Pour les besoins de l'exercice, il est encore une fois  nécessaire d'utiliser le champ calculé <strong>Revenu</strong> qui est le total du  salaire et de la commission de chacun des employés de l'entreprise (<strong>revenu:  [salaire] + [commission]</strong>).</p>
<div  class="notice alert">Un tableau d'analyse croisé ne peut avoir qu'une seule opération à la fois.</div>
<p>Donc, si vous avez besoin d'avoir la somme et la moyenne  de la masse salariale, il faudra deux analyses avec des opérations différentes  (<strong>Somme</strong> et <strong>Moyenne</strong> par exemple).</p>
<ol class="instruction">
	<li>Créez une nouvelle requête en mode <strong>Création</strong>.</li>
	<li>Parmi la liste des tables et requêtes, sélectionnez la table <strong>Employés</strong>.</li>
	<li>Sélectionnez le champ <strong>Poste</strong> et <strong>Bureau</strong>.</li>
	<li>Sur la ligne des champs, à la droite des deux champs que vous venez d'ajouter,  écrivez la formule pour le champ calculé: <strong>"Salaire" + "Commission"</strong>.</li>
	<li>Sur la ligne Fonction, sélectionnez <strong>Somme</strong> sous le champ <strong>Revenu</strong>.</li>
	<li>Laissez la fonction <strong>Groupe</strong> pour les deux autres champs.</li>
</ol>
<p>Voici une représentation des champs et des options sélectionnées.</p>
<p>Critères&nbsp;:</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Poste</td>
    <td>Bureau</td>
    <td>"Salaire" + "Commission"</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Revenu</td>
  </tr>
  <tr>
    <th>Table</th>
    <td>Employés</td>
    <td>Employés</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Groupe</td>
    <td>Somme</td>
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
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton exécuter" />.</p>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Poste</th>
    <th>Bureau</th>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Gérant</td>
	<td>Haguenau</td>
    <td>50 000</td>
  </tr>
  <tr>
    <td>Vendeur</td>
	<td>Haguenau</td>
    <td>129 000</td>
  </tr>
  <tr>
    <td>Gérant</td>
	<td>Strasbourg</td>
    <td>46 000</td>
  </tr>
  <tr>
	<td>Vendeur</td>
	<td>Strasbourg</td>
    <td>63 000</td>
  </tr>
</table>
<p>Pour obtenir le tableau croisé suivant, vous devez exporter ces données vers <strong>Calc</strong> et procéder à une analyse croisée.</p>
<p>Ceci se fait par l'intermédiaire de la commande <strong>Pilote de données</strong>.
<table class="table">
  <tr>
    <th>Bureau</th>
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
<p>Vous pouvez ajouter d'autres champs si l'analyse doit être plus fine.</p>
<p>Le résultat sera plus détaillé s'il y a plus de champs dans l'en-tête de ligne.</p>
<pre>Ex : vous pouvez ajouter le champ <strong>Permanence</strong> pour différencier la masse salariale des employés qui ont ou <br />
	n'ont pas la permanence à l'intérieur de l'entreprise.<br />
	Ou, vous pouvez utiliser un champ calculé avec la fonction <strong>Année([embauche])</strong> pour déterminer <br />
	la masse salariale par le nombre d'années d'expérience dans la société.</pre>

