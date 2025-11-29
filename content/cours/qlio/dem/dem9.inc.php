<?php
/**
 * BUT : Introduction à la gestion de la demande
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		11/04/21 	10:37::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Structuration des systèmes qualité et logistique
 * @category Gestion de la demande
 * @access public
 * @uses 
 */
$sNavigation=navigation('dem', '9', 'fin');
?>




<h1>Processus de prise de décision.</h1>

<blockquote>Une prévision n'a de sens que si elle est utilisée pour prendre des décisions.</blockquote>

<img src="/assets/img/qlio/dem/processus_decision.png" alt="Graphique représentant le processus de décision autour d'une prévision" />



<p>Différentes décisions utilisent différentes prévisions.</p>

<table class="table">
<thead>
<tr>
<th>Décision</th>
<th>Horizon</th>
<th>Niveau de détail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Planning de trésorerie de l'entreprise</td>
<td>1 mois</td>
<td>Au niveau global de l'entreprise </td>

</tr>
<tr>
<td>Réapprovisionnement des centres de distribution</td>
<td>1 mois</td>
<td>À la référence et au centre de distribution</td>
</tr>
<tr>
<td>Planning de production des produits finis</td>
<td>1 - 3 mois</td>
<td>À la référence de produit fini</td>
</tr>
<tr>
<td>Approvisionnement des matières premières</td>
<td>3 - 6 mois</td>
<td>À la référence de matière première</td>
</tr>
<tr>
<td>Dimensionnement des équipes de production</td>
<td>3 - 6 mois</td>
<td>À la ligne de production</td>
</tr>
</tbody>
</table>

<h2> Performance de la prévision</h2>

<p>Le générateur et l'utilisateur des prévisions ne voient pas la même performance.</p>

<img src="/assets/img/qlio/dem/perception_performance.png" alt="Schéma représentant le processus de création et d'utilisation d'une prévision" />


<div class="grid-2-small-1 has-gutter-xl">
	<div class="item">Mesurer la performance de la génération des prévisions</div>
	<div class="item">Mesurer la performance des prévisions dans l'utilisation</div>
	<div class="reussite">Permet d'objectiver des personnes / des fonctions</div>
	<div class="reussite">Permet d'évaluer les conséquences de la performance</div>
	<div class="echec">Ne permet pas d'évaluer les conséquences de la performance</div>
	<div class="echec">Ne permet pas d'objectiver des personnes / des fonctions</div>
</div>

<p>On doit définir des indicateurs différents pour mesurer les deux aspects.</p>

<img src="/assets/img/qlio/dem/perception_performance_complet.png" alt="Schéma représentant le processus complet de création et d'utilisation d'une prévision" />

<p>Pour bien cibler les références qui demandent une attention particulière, on peut effectuer différentes analyses.</p>

<img src="/assets/img/qlio/dem/cycle_prevision.png" alt="Schéma représentant le cycle d'une prévision" />

<p>On peut analyser et classifier les références en fonction des ventes réalisées.</p>

<p>Plusieurs classifications simples existent pour définir les références qui méritent plus d'attention du prévisionniste :</p>

<ul>
	<li>Classification en fonction du volume de ventes (chiffres d'affaires).</li>
	<li>Classification en fonction du profil de la demande.</li>
	<li>Classification en fonction de la valeur du produit / la marge générée.</li>
	<li>Classification en fonction d'importance stratégique du produit.</li>
</ul>

<p>Pour plus de finesse, on peut croiser ces classifications (ABC – 123).</p>

<p>Du point de vue du prévisionniste, le profil de la demande est souvent plus important que le volume.</p>


<img src="/assets/img/qlio/dem/types_demande.png" alt="Schéma représentant tous les types de graphique" />

<p>Une façon efficace de cibler les efforts de prévisions peut aussi être de valoriser les erreurs de prévision.</p>

<table class="table">
<thead>
<tr>
<th>Erreur de prévision</th>
<th colspan="4">Volume</th>
</tr>
</thead>
<tbody>
<tr>
<th>Pareto erreur de prévision</th>
<th>A</th>
<th>B</th>
<th>C</th>
<th>Total</th>
</tr>
<tr>
<td>A</td>
<td>50%</td>
<td>20%</td>
<td>10%</td>
<td>80%</td>
</tr>
<tr>
<td>B</td>
<td>2%</td>
<td>5%</td>
<td>7%</td>
<td>14%</td>
</tr>
<tr>
<td>C</td>
<td>0%</td>
<td>1%</td>
<td>5%</td>
<td>6%</td>
</tr>
<tr>
<td>Total</td>
<td>52%</td>
<td>26%</td>
<td>22%</td>
<td>100%</td>
</tr>
</tbody>
</table>

<p>Le type d'erreur de prévision donne une indication sur la composante qui pose problème.</p>


<img src="/assets/img/qlio/dem/classification_fiabilite_erreur.png" alt="Schéma représentant la classification fiabilité-erreur" />

<p>Sur les évènements, on peut encore détailler l'analyse des causes des erreurs.</p>

<img src="/assets/img/qlio/dem/causes_erreurs.png" alt="Graphique représentant les causes des erreurs" />


<p>La comparaison d'une nouvelle prévision avec l'ancienne prévision permet d'identifier des changements importants.</p>

<p>Changement de comportement d'un produit ?</p>
<ul>
	<li>Changement de tendance.</li>
	<li>Changement cycle de vie.</li>
</ul>

<p>Ou instabilité du modèle de prévision ?</p>
<ul>
	<li>Changement de paramètres / de modèle.</li>
	<li>Prise en compte d'une fausse tendance / saisonnalité.</li>
</ul>

<p>Les indicateurs peuvent être les mêmes que ceux que l'on utilise pour mesurer la performance de la prévision.</p>

<p>Dans tous les cas, l'analyse doit être suivie par une action.</p>
<ul>
	<li>Changer le modèle de prévision.</li>
	<li>Focaliser l'effort de prévision commerciale sur le produit.</li>
	<li>Corriger l'historique.</li>
	<li>Revoir le stock de sécurité.</li>
</ul>


<h2> Conclusion</h2>

<p>En fin de compte, n'oubliez pas que :</p>
<blockquote>
La performance qui compte est celle perçue par le client.
<br />
Une bonne mesure doit permettre d'agir si besoin 
</blockquote>

<p>Et</p>

<blockquote>
Début mars : mesurer la performance de la prévision du mois de février, faite en janvier. 
</blockquote>

<fieldset>
<legend>En résumé</legend>
La mesure sur le dernier mois seulement n'est pas un bon indicateur 
</fieldset>

<p>De là on peut se poser la question de la pertinence statistique d'une seule observation ?</p>

<blockquote>Meilleure pratique : au moins 4 mois, idéalement sur 6 mois.</blockquote>

<p class="h3-like">Ce qu'il faut retenir...</p>

<div class="ok">
<ul>
<li>La prévision est la base de la plupart des décisions de gestion.</li>
<li>Une prévision parfaite n'existe pas même si cela reste un objectif.</li>
<li>La flexibilité du système peut compenser les erreurs de prévisions.</li>
<li>Bien souvent, les modèles simples donnent des résultats satisfaisants.</li>
<li>Il faut suivre la précision du modèle de prévision.</li>
</ul>


<p>Les méthodes classiques sont rapides et peu coûteuses.</p>
<p>Elles donnent des informations intéressantes à court terme mais moins fiables dès qu'on s'éloigne dans le temps.</p>

<p>Les modèles plus complexes et plus récents sont beaucoup plus coûteux mais fournissent en général des prévisions valables à plus long terme.</p>

<p>Il reste du ressort de chaque entreprise de choisir la méthode qui lui conviendra en fonction de l'objectif fixé, ainsi que des critères de données et de coûts.</p>

<p>L'expérience, l'intuition et le bon sens seront des facteurs fondamentaux pour réaliser une bonne prévision et détecter toute anomalie.</p>

<p>Le plus important n'est pas d'avoir un outil sophistiqué mais plutôt un outil maitrisé par les gestionnaires.</p>

<p>Développer la collaboration interne et externe à l'entreprise pour être au plus prêt des clients.</p>

<p>Développer le digital afin de mieux connaître les clients et donc de mieux prévoir !</p>
</div>

