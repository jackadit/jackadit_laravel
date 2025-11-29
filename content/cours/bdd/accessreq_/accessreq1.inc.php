<?php
/**
 * solution requête 1
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   28/02/07  23:20:00  
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
$sNavigation=navigation('access', '1', 'req', 'access5');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 1</h1>

<h2>Affichez le prénom et le nom des personnes ayant pour poste &quot; Gérant &quot;.</h2>
<p class="notice remarque">Recherche simple.</p>

<p>Cette requête permet de commencer doucement avec une requête simple en utilisant du texte.</p>
<ul>
  <li>Choisir la ou les tables nécessaires.</li>
</ul>
<ol class="instruction">
	<li>Créer une nouvelle requête en utilisant le mode création.</li>
	<li>Dans la liste des tables et requêtes, sélectionnez la table <strong>Employe</strong>.</li>
</ol>
<ul>
  <li>Choisir  le type de requête.</li>
</ul>
<ol class="instruction">
	<li>Assurez-vous  d'avoir la requête de type sélection <img src="/assets/img/access/bt_requete_selection.png" alt="bouton requête sélection" />.</li>
</ol>
<ul>
  <li>Choisir  le ou les champs nécessaires. </li>
</ul>
<ol class="instruction">
	<li>De  la liste des champs, ajoutez le champ de type <strong>emp_nom</strong> , le champ <strong>emp_prenom</strong> et le champ <strong>emp_poste</strong>  à la liste des champs.</li>
</ol>
<ul>
  <li>Déterminer  si les champs ont besoin d&rsquo;être triés.</li>
</ul>
<ol class="instruction">
	<li>Pour  cet exercice, aucun tri de champ n'est nécessaire.</li>
</ol>
<ul>
  <li>Cacher  les champs au besoin.</li>
</ul>
<ol class="instruction">
	<li>Pour  cet exercice, le champ <strong>emp_poste</strong>  peut être caché.</li>
</ol>
<ul>
  <li>Déterminer  les critères de sélection.</li>
</ul>
<ol class="instruction">
	<li>Écrivez <strong>Gérant</strong> dans la première ligne de critère sous le champ <strong>emp_poste</strong> .</li>
</ol>
<ul>
  <li>Exécuter  la requête.</li>
</ul>
<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_poste</td>
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
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&lsquo;&lsquo;Gérant&rsquo;&rsquo;</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p class="notice remarque">Vous n'êtes pas obligé de mettre les guillemets (Access  va les mettre pour indiquer que le champ est de type &quot;texte&quot;)
 ni de  mettre l'opérateur &quot; = &quot; (Il est mis par défaut si aucun autre  opérateur n'est choisi).</p>
<p class="notice remarque">Vous n'êtes pas obligé de mettre le texte en majuscules  ou en minuscules. Access ne fait pas la différence lors de la
 recherche. Il  faut cependant écrire le critère correctement. 
 Par exemple, vous ne trouverez  personne si vous avez écrit &quot;gerant&quot; !</p>
<p class="notice remarque">Pour les champs de type Date/Heure, Access placera automatiquement devant et après la date le caractère &quot; # &quot;. 
Donc,  vous n'êtes pas obligé de le mettre. Ceci est fait pour différencier les types  de champs; &quot;&quot; pour texte, 
# pour Date/Heure et rien pour les chiffres  (monétaire ou numérique).</p>
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/access/bt_executer.png" alt="bouton executer" />.</li>
</ol>
<p>Pour les prochains exercices, nous n'afficheront plus que les critères et le résultat. Lisez attentivement la question et essayez d'imaginer  la requête avant de regarder la réponse. Il y aura des explications  supplémentaires sur les nouvelles options que chaque exercice apportera.</p>
<p> Résultat&nbsp; :</p>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
  </tr>
  <tr>
    <td>Bruno</td>
    <td>ZIEUVAIR</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
  </tr>
</table>


