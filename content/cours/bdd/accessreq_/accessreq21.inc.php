<?php
/**
 * solution requête 21
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
$sNavigation=navigation('access', '21', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 21</h1>
<h2>Le piège de l'opération Compte.</h2>

<p>L'opération <strong>Compte</strong> calcule le nombre d'enregistrements qui répondent aux critères que vous avez choisi.</p>
<p>Il y a  cependant une situation ou celle-ci pourrait sous-estimer le nombre exact.</p>
<p>Reprenons le dernier exemple avec une petite modification. Au lieu de faire le compte sur le champ <strong>emp_prenom</strong>, utilisez le champ <strong>Commentaire</strong>.</p>

<p>Critères&nbsp;</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_bureau</td>
    <td>emp_poste</td>
    <td>emp_commentaire</td>
  </tr>
  <tr>
    <th>Opération</th>
    <td>Regroupement</td>
    <td>Regroupement</td>
    <td>Compte</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
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
    <td>&nbsp;</td>
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
    <th>emp_bureau</th>
    <th>emp_poste</th>
    <th>CompteDeemp_commentaire</th>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Gérant</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Haguenau</td>
    <td>Vendeur</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Gérant</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Strasbourg</td>
    <td>Vendeur</td>
    <td>2</td>
  </tr>
</table>
<p>Il n'y a plus de gérants ! Pourquoi y a-t-il une  différence ?</p>
<p>Access n'ajoute pas les enregistrements dont le contenu du  champ est vide.</p>
<p>Comme vous l'avez vu à <a href="/cours/qlio/accessreq/7">l'exercice 7</a>, le contenu du champ <strong>emp_commentaire</strong>  est vide pour les gérants de l'entreprise. 
Il est donc fortement suggéré de toujours utiliser, avec l'opération <strong>Compte</strong>, un champ dont on est certain qu'il y ait un contenu.</p>
<p>Vous pouvez utiliser l'un des autres champs de la requête ou le champ qui sert de clé primaire de la table. Par définition, celui-ci ne peut jamais être vide.</p>

