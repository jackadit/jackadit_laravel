<?php
/**
 * BUT : solution requête 21
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
$sNavigation=navigation('oobase', '21', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 21</h1>
<h2>Le piège de la fonction Nombre.</h2>


<p>La fonction <strong>Nombre</strong> calcule le nombre d'enregistrements qui répondent aux critères que vous avez choisi.</p>
<p>Il y a  cependant une situation ou celle-ci pourrait sous-estimer le nombre exact.</p>
<p>Reprenons le dernier exemple avec une petite modification.  Au lieu de faire le comptage sur le champ <strong>Prénom</strong>, utilisez le champ <strong>Commentaires</strong>.</p>

<p>Critères&nbsp;</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>Bureau</td>
    <td>Poste</td>
    <td>Commentaires</td>
  </tr>
  <tr>
    <th>Alias</th>
    <td>&nbsp</td>
    <td>&nbsp</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>Croissant</td>
    <td>Croissant</td>
    <td>&nbsp;</td>
  </tr>
  <tr class="center">
    <th>Visible</th>
    <td>X</td>
    <td>X</td>
    <td>X</td>
  </tr>
  <tr>
    <th>Fonction</th>
    <td>Groupe</td>
    <td>Groupe</td>
    <td>Nombre</td>
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
<p>Résultat&nbsp;:</p>
<table class="table">
  <tr>
    <th>Bureau</th>
    <th>Poste</th>
    <th>CompteDeCommentaire</th>
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
<p>OpenOffice Base n'ajoute pas les enregistrements dont le contenu du  champ est vide.</p>
<p>Comme vous l'avez vu à <a href="/cours/qlio/oobasereq/7">l'exercice 7</a>, le contenu du champ <strong>Commentaires</strong> est vide pour les gérants de l'entreprise. Il est donc fortement suggéré de toujours utiliser, avec la fonction <strong>Nombre</strong>, un champ dont on est certain  qu'il y ait un contenu.</p>
<p>Vous pouvez utiliser l'un des autres champs de la requête ou le champ qui sert de clé primaire de la table. Par définition, celui-ci ne  peut jamais être vide.</p>

