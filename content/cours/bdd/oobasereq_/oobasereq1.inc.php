<?php
/**
 * BUT : solution requête 1
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:46:00
 *
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package Jackadit.com
 * @subpackage examoobase
 * @category examen
 * @access protected
 * @uses db
 */
$sNavigation = navigation('oobase', '1', 'req');
include_once 'tdmsolreq.php';
?>




<h1>OpenOffice Base : Réponses requête 1</h1>
<h2>Affichez le prénom et le nom des personnes ayant pour poste &quot; Gérant &quot;.</h2>
<pre>Recherche simple.</pre>

<p>Cette requête permet de commencer doucement avec une requête simple en utilisant du texte.</p>
<ul>
  <li>Choisir la ou les tables nécessaires.</li>
</ul>
<ol class="instruction">
	<li>Créer une nouvelle requête en utilisant le mode Ébauche.</li>
	<li>Dans la liste des tables et requêtes, sélectionner la table <strong>Employés</strong>.</li>
</ol>
<ul>
  <li>Choisir  le ou les champs nécessaires. </li>
</ul>
<ol class="instruction">
	<li>Ajouter les champs <strong>Nom</strong>, <strong>Prénom</strong> et <strong>Poste</strong> à la liste des champs.</li>
</ol>
<ul>
  <li>Déterminer si les champs ont besoin d'être triés.</li>
</ul>
	<p>Pour cet exercice, aucun tri de champ n'est nécessaire.</p>
<ul>
  <li>Cacher les champs au besoin.</li>
</ul>
<ol class="instruction">
	<li>Pour cet exercice, le champ <strong>Poste</strong> peut être caché.</li>
</ol>
<ul>
  <li>Déterminer les critères de sélection.</li>
</ul>
<ol class="instruction">
	<li>Écrire <strong>Gérant</strong> dans la première ligne de critère sous le champ <strong>Poste</strong>.</li>
</ol>
<ul>
  <li>Exécuter  la requête.</li>
</ul>
<p>Critères&nbsp;:</p>
<table class="table" summary="critère d'exécution de la requête">
  <tr>
    <th>Champ</th>
    <td>Prenom</td>
    <td>Nom</td>
    <td>Poste</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&lsquo;&lsquo;Gérant''</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<pre>Vous n'êtes pas obligé de mettre les guillemets (OpenOffice Base va les mettre pour indiquer que le champ est de type &quot;texte&quot;)
 ni de  mettre l'opérateur &quot; = &quot; (Il est mis par défaut si aucun autre opérateur n'est choisi).</pre>
<pre>Vous êtes obligé de respecter les majuscules et les minuscules. OpenOffice Base est sensible à la casse.<br />De même pour les accents. 
Par exemple, vous ne trouverez personne si vous avez écrit &quot;gérant&quot; ou &quot;Gerant&quot; !</pre>
<pre>Pour les champs de type Date/Heure, OpenOffice Base placera automatiquement devant et après la date le caractère &quot; # &quot;. 
Donc, vous n'êtes pas obligé de le mettre. Ceci est fait pour différencier les types de champs; &quot;&quot; pour texte, 
# pour Date/Heure et rien pour les chiffres (monétaire ou numérique).</pre>
<ol class="instruction">
	<li>Appuyez  sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton executer" />.</li>
</ol>
<p>Pour les prochains exercices, nous n'afficheront plus que les critères et le résultat. Lisez attentivement la question et essayez d'imaginer  la requête avant de regarder la réponse. Il y aura des explications  supplémentaires sur les nouvelles options que chaque exercice apportera.</p>
<p> Résultat :</p>
<table class="table">
  <tr>
    <th>Prenom</th>
    <th>Nom</th>
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


