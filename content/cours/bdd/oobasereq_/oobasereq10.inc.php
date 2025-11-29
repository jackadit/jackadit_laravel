<?php
/**
 * BUT : solution requête 10
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:48:00
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
$sNavigation=navigation('oobase', '10', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses requête 10</h1>
<h2>Affichez le prénom, le nom et le revenu des employés ayant un  revenu supérieur ou égale à 45000 &euro;</h2>
<pre>requête SQL et champ calculé</pre>


<p>L'un des grands avantages des requêtes est la possibilité  de créer des champs calculés.</p>
<p>Il est possible d'afficher le résultat d'une formule qui utilise les informations provenant de plusieurs champs.</p>
<ol class="instruction">
	<li>Pour cela nous devrons utiliser l'écriture <strong>SQL</strong>.</li>
</ol>
<p>Pour l'exercice, vous devez créer un champ nommé <strong>Revenu</strong> qui sera calculé à partir des champs <strong>Salaire</strong> et <strong>Commission</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bt_requete_sql.png" alt="bouton requête sql" /> <strong>Créer une requête en mode SQL...</strong></li>
</ol>
<p>Une fenêtre s'ouvre dans laquelle vous pourrez écrire votre instruction SQL.</p>
<p>Le mode SQL fonctionne de la manière suivante :</p>
<ol class="instruction">
	<li>Sélectionnez l'ensemble des champs dont vous avez besoin en précisant éventuellement la table (<strong>Nom_Table.Nom_Champ</strong>) en cas d'ambigu&iuml;té.</li>
</ol>
<pre>SELECT Nom, Prenom ou SELECT Employés.Nom, Employés.Prenom</pre>
<ol class="instruction">
	<li>Créez le ou les champs(s) calculé(s) dont vous avez besoin en précisant un alias ( par exemple <strong>"Nom_Champ1" + "Nom_Champ2" AS "Nom_désiré"</strong>).</li>
</ol>
<p>Donc, lorsque vous créez votre table, il ne doit pas y avoir de champs dont vous pouvez trouver le résultat à partir des autres champs de l'enregistrement.</p>
<pre>Ex : <strong>"Salaire" + "Commission" AS "Revenu"</strong></pre>
<ol class="instruction">
	<li>Précisez dans quelle(s) table(s) vous cherchez ces champs grâce à la fonction <strong>FROM</strong>.</li>
</ol>
<pre>FROM "Employés"</pre>
<ol class="instruction">
	<li>Puis précisez le ou les critère(s) de sélection grâce à la fonction <strong>WHERE</strong>.</li>
</ol>
<pre>WHERE "Salaire" + "Commission" >= 45000</pre>
<p>Vous pouvez rajouter des parenthèses si le calcul est plus complexe !</p>
<div class="notice alert">Attention à respecter scrupuleusement l'orthographe et la casse des nom des champs.</div>

<p>Critère&nbsp;:</p>
<p>SELECT "Prenom","Nom", "Salaire"+"Commission" AS "Revenu"<br />
FROM "Employés"<br />
WHERE "Salaire"+"Commission">=45000</p>
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Revenu</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
    <td>50 000</td>
  </tr>
  <tr>
    <td>Mélanie</td>
    <td>ZETAUFREY</td>
    <td>64 000</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>46 000</td>
  </tr>
</table>

