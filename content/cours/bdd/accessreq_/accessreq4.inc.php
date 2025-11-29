<?php
/**
 * solution requête 4
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
$sNavigation=navigation('access', '4', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 4</h1>
<h2>Affichez le prénom et le nom des personnes embauchées en 2003.</h2>
<p class="notice remarque">Entre et type Date</p>

<p>Pour cette requête nous pourrions être tenté d'utiliser les opérateurs <strong>&gt;=</strong>, et <strong>&lt;=</strong>.</p>
<p>Mais pour cet exercice, nous allons utiliser l'opérateur &quot;<strong>Entre</strong>&quot; et le type de champ <strong>Date/Heure</strong>.</p>
<p class="notice remarque">Remarquez les &quot;<strong>#</strong>&quot; devant et après la date. Si vous ne les mettez pas, 
Access va les écrire pour  vous. C'est pour identifier que le champ <strong>emp_embauche</strong> 
est de type <strong>Date/Heure</strong>.</p>
<p>Critères :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>emp_embauche</td>
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
    <td>Entre    #01/01/03# et #31/12/03#</td>
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
    <th>emp_embauche</th>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
    <td>05/05/2003</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
    <td>01/01/2003</td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
    <td>01/06/2003</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
    <td>01/06/2003</td>
  </tr>
</table>
<p class="notice remarque">Attention, il se peut que le format de la date soit différent. 
Le format date dépend des options sélectionnées dans Windows et Access. 
Vous devrez probablement mettre l'année devant le mois et le jour.</p> 
<ol class="instruction">
	<li>Faites quelques essais en changeant l'ordre de l'année, du mois et de la journée.</li>
</ol>

