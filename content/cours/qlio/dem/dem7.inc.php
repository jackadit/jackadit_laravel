<?php
/**
 * BUT : Introduction à la gestion de la demande
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
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
?>


<h1>Suivi de la prévision</h1>

<h2>Erreur et incertitude</h2>

<p>Les prévisions sont rarement correcte à 100% dans le temps.</p>

<p>La valeur réelle observée est déterminée par une loi d'une part, et par l'intervention du hasard d'autre part ( Réel: loi + hasard).</p>

<p>Il existe un écart entre les valeurs prévues et les valeurs réellement observées.</p>


<p class="formule">Erreur de prévision = Demande observée - Demande prévue</p>

<p>Un but commun à toutes les techniques de suivi de la prévision est de minimiser ces écarts. C'est pourquoi ont fait un suivi des prévisions.</p>

<p>Le but est de :</p>
<ul>
	<li>Comprendre pourquoi il y a des écarts avec la réalité.</li>
	<li>Planifier l'erreur à l'avenir.</li>
	<li>Améliorer les méthodes de prévision.</li>
</ul>

<h3>Variation aléatoire - biais</h3>

<p>Une technique simple pour vérifier si le modèle de prévision est correct, est de vérifier s'il existe un biais.</p>

<p>Dans le cas d'une variation aléatoire, si le modèle de variation de la demande reste autour de la moyenne et que la variation cumulée tend vers zéro, alors il n'y a pas de biais.</p>

<div class="exercice">
<p><u>Exemple</u> :</p>

<table class="table">
<thead>
<tr>
<th></th>
<th colspan="3">BIAIS</th>
<th colspan="3">Variation aléatoire</th>
</tr>
<tr>
<th>Mois</th>
<th>Prévision</th>
<th>Actuelle</th>
<th>Variation</th>
<th>Prévision</th>
<th>Actuelle</th>
<th>Variation</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>100</td>
<td>90</td>
<td>-10</td>
<td>100</td>
<td>105</td>
<td>+5</td>
</tr>
<tr>
<td>2</td>
<td>100</td>
<td>125</td>
<td>+25</td>
<td>100</td>
<td>94</td>
<td>-6</td>
</tr>
<tr>
<td>3</td>
<td>100</td>
<td>120</td>
<td>+20</td>
<td>100</td>
<td>98</td>
<td>-2</td>
</tr>
<tr>
<td>4</td>
<td>100</td>
<td>125</td>
<td>+25</td>
<td>100</td>
<td>104</td>
<td>+4</td>
</tr>
<tr>
<td>5</td>
<td>100</td>
<td>120</td>
<td>+20</td>
<td>100</td>
<td>103</td>
<td>-3</td>
</tr>
<tr>
<td>6</td>
<td>100</td>
<td>110</td>
<td>+10</td>
<td>100</td>
<td>96</td>
<td>-4</td>
</tr>
<tr>
<td>Total cumulé</td>
<td>600</td>
<td>690</td>
<td>+90</td>
<td>600</td>
<td>600</td>
<td>0</td>
</tr>
<tr>
<th colspan="4">Un biais existe puisque la variation cumulative n'est pas nulle</th>
<th colspan="3">Il n'y a pas de biais puisque la variation cumulative est nulle</th>
</tr>
</tbody>
</table>
</div>

<p>En cas de <span class="tag--info">biais</span>, il faut envisager des actions telles que :</p>
<ul>
	<li>Enquêter et prendre en compte la cause de l'erreur telle que une promotion, une grosse commande unique, une baisse de clientèle, une panne de machine, des conditions météorologiques exceptionnelles, de nouveau clients</li>
	<li>Ajuster l'historique de la demande</li>
	<li>Changer la valeur de la prévision mensuelle moyenne</li>
</ul>

<p class="notice remarque">S'il existe un <strong>biais</strong>, on ne peut plus utiliser la loi normale.</p>

<h3>1.2 Mesurer l'erreur de prévision.</h3>

<p>Le degré d'écart par rapport à la demande moyenne pose un défi à la gestion des stocks.</p>

<p>Combien de stock de sécurité, par exemple, devrait être utilisé pour faire face aux variations aléatoires de la demande et atteindre le niveau de service à la clientèle désiré ?</p>
<p>C'est pourquoi il est important de mesurer et d'évaluer les erreurs de prévision.</p>

<h4>Erreur moyenne (Mean error).</h4>
<div class="formule">
ME = 
	<div class="fraction">
		<span class="numerateur">&sum; ( D - P )</span>
		<span class="bar">/</span>
		<span class="denominateur">n</span>
	</div>
</div>

<p class="notice remarque">Cet indicateur signale la présence ou l'apparition d'un biais systématique. C'est la mesure du centrage.</p>

<div class="notice remarque">
<p><u>Remarque</u> :</p>
<p>Un modèle correct avec variations aléatoires donnera une valeur nulle de <strong>ME</strong>.</p>
</div>

<h4>1.2.2 Erreur en pourcentage (Percentage error).</h4>


<div class="formule">
PE = 
	<div class="fraction">
		<span class="numerateur">&sum; ( D - P )</span>
		<span class="bar">/</span>
		<span class="denominateur">&sum; D</span>
	</div>
</div>



<h2>Qualité du modèle de prévision</h2>

<h3>Fiabilité de la prévision</h3>

<p>Pour vérifier si l'importance donnée aux coefficients de lissage est correcte, nous pouvons calculer la fiabilité de la prévision.</p>

<div class="formule">
Fiabilité<sub>p</sub> = 
	<div class="fraction">
		<span class="numerateur">| Prévision<sub>p</sub> - Demande<sub>p</sub> |</span>
		<span class="bar">/</span>
		<span class="denominateur">Demande<sub>p</sub></span>
	</div>
</div>
<div>La fiabilité doit tendre vers 0 !</div>
<p>Dans notre exemple précédent, la fiabilité de la prévision sera :</p>

<div class="exercice">Fiabilité<sub>mars</sub> = 
<div class="fraction">
	<span class="numerateur">| 108 - 120 |</span>
	<span class="bar">/</span>
	<span class="denominateur">120</span>
</div>
=  0.1
</div>


<p>Puisque des termes de signes contraires, même importants, peuvent se compenser, au moins partiellement, pour donner une valeur de <strong>ME</strong> qui semble acceptable, on définit un indicateur plus approprié : <span class="tag--info">l'écart moyen absolu</span>.</p>

<h3>Écart absolu moyen (MAD = Mean Absolute Deviation)</h3>

<div class="formule">
MAD = 
	<div class="fraction">
		<span class="numerateur">&sum; | D - P |</span>
		<span class="bar">/</span>
		<span class="denominateur">n</span>
	</div>
</div>

<p class="notice remarque">Cet indicateur mesure la dispersion autour de la moyenne.</p>

<div class="exercice">
<p><u>Exemple</u> :</p>

<table class="table">
<thead>
<tr>
<th class="w100p"></th>
<th>Jan</th>
<th>Fév</th>
<th>Mar</th>
<th>Avr</th>
<th>Mai</th>
<th>Juin</th>
<th>Juil</th>
<th>Aou</th>
<th>Sep</th>
<th>Oct</th>
<th>Nov</th>
<th>Déc</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<td>Prévision</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>50</td>
<td>-</td>
</tr>
<tr>
<td>Actuel</td>
<td>46</td>
<td>52</td>
<td>53</td>
<td>49</td>
<td>46</td>
<td>50</td>
<td>53</td>
<td>49</td>
<td>53</td>
<td>48</td>
<td>49</td>
<td>52</td>
<td>-</td>
</tr>
<tr>
<td>Déviation absolue</td>
<td>4</td>
<td>2</td>
<td>3</td>
<td>1</td>
<td>4</td>
<td>0</td>
<td>3</td>
<td>1</td>
<td>3</td>
<td>2</td>
<td>1</td>
<td>2</td>
<td>26</td>
</tr>
</tbody>
</table>


<p>Dans cet exemple le MAD sera de :</p>

<div class="formule">
MAD = 
	<div class="fraction">
		<span class="numerateur">26</span>
		<span class="bar">/</span>
		<span class="denominateur">12</span>
	</div>
	= 2.2
</div>

<p>Si on observe maintenant la dispersion statistique des erreurs de la demande de l'exemple ci-dessus en utilisant la distribution de la loi normale centrée réduite on aura :</p>

<img src="/assets/img/qlio/dem/loi_normale_centrée.png" alt="Graphique de distribution de la loi normale centre" />

<ul>
	<li>Le centre est la tendance moyenne de la prévision de la demande.</li>
	<li>Les erreurs de prévision  (non représentées ici) sont distribuées de part et d'autre de la moyenne aléatoirement.</li>
	<li>60 % des erreurs de prévision sont comprises dans &plusmn; 1 MAD par rapport à la moyenne.</li>
	<li>90 % des erreurs de prévision sont comprises dans &plusmn; 2 MAD par rapport à la moyenne.</li>
</ul>

<p class="notice remarque">MAD et écart type : 3σ = 4MAD</p>

<p>Ce qui correspond à un filtre à 99,7 % pour une loi normale.</p>
<p>Cela signifie que le risque d'accepter une valeur à rejeter est inférieure à 0,3 %.</p>
<p>On pourra utiliser cette grandeur pour évaluer les stocks de sécurité permettant de couvrir l'incertitude de la prévision.</p>
</div>

<div class="notice remarque">
<p><u>Remarque</u> :</p>
<p>Le MAD indique le coût relatif des différents niveaux de service. Par exemple, en utilisant la table des facteurs de sécurité, les planifieurs peuvent convertir le MAD de 2.2 unités en exigence de stock de sécurité pour un pourcentage de niveau de service souhaité.</p>
</div>

<p>La recherche du MAD va servir à :</p>
<ul>
	<li>Identifier les changements et tendances de la demande.</li>
	<li>Identifier et ajuster les erreurs de prévision résultant d'événements aléatoires.</li>
	<li>Ajuster la prévision de la période afin qu'elle soit proche de la vraie demande moyenne prévue pour minimiser les biais.</li>
	<li>Prendre des décisions sur le stock de sécurité et les niveaux de service en fonction du degré de variation aléatoire (erreur de prévision).</li>
</ul>

<div class="exercice">
<p>Exemple : Erreur moyenne et MAD</p>
<table class="table">
<thead>
<tr>
<th>D<sub>i</sub></th>
<th>P<sub>i</sub></th>
<th>D<sub>i</sub> - P<sub>i</sub></th>
<th>| D<sub>i</sub> - P<sub>i</sub> |</th>
</tr>
</thead>
<tbody>
<tr>
<td>150</td>
<td>153</td>
<td>-3</td>
<td>3</td>
</tr>
<tr>
<td>146</td>
<td>155</td>
<td>-9</td>
<td>9</td>
</tr>
<tr>
<td>156</td>
<td>147</td>
<td>9</td>
<td>9</td>
</tr>
<tr>
<td>152</td>
<td>145</td>
<td>7</td>
<td>7</td>
</tr>
<tr>
<td>145</td>
<td>155</td>
<td>-10</td>
<td>10</td>
</tr>
<tr>
<td>146</td>
<td>154</td>
<td>-8</td>
<td>8</td>
</tr>
<tr>
<td>153</td>
<td>148</td>
<td>5</td>
<td>5</td>
</tr>
<tr>
<td>157</td>
<td>146</td>
<td>11</td>
<td>11</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&sum;</td>
<td>2</td>
<td>62</td>
</tr>
</tbody>
</table>


<p>Les calculs de l'erreur moyenne et du MAD donnent :</p>

	<div class="formule">
	ME = 
		<div class="fraction">
			<span class="numerateur">2</span>
			<span class="bar">/</span>
			<span class="denominateur">8</span>
		</div>
		= 0.25
	</div>

	<div class="formule">
	MAD = 
		<div class="fraction">
			<span class="numerateur">62</span>
			<span class="bar">/</span>
			<span class="denominateur">8</span>
		</div>
		= 7.75
	</div>
</div>


<h3>MAD lissé</h3>

<p>On préfère parfois calculer la MAD lissée (lissage exponentiel) :</p>

<div class="formule">MAD<sub>i</sub> = β|D<sub>i</sub> – P<sub>i</sub>| + (1 – β)MAD<sub>i-1</sub></div>

<p>On choisit un coefficient β petit (par exemple 0,1), ce qui assure un lissage à long terme de la MAD.</p>

<div class="exercice">
<p>Exemple : MAD lissé</p>
<table class="table">
<thead>
<tr>
<th>D<sub>i</sub></th>
<th>P<sub>i</sub></th>
<th>| D<sub>i</sub> - P<sub>i</sub> |</th>
<th>n</th>
<th>MAD</th>
<th>MAD<sub>i</sub></th>
</tr>
</thead>
<tbody>
<tr>
<td>150</td>
<td>153</td>
<td>3</td>
<td>1</td>
<td>3</td>
<td>0.3</td>
</tr>
<tr>
<td>146</td>
<td>155</td>
<td>9</td>
<td>2</td>
<td>6</td>
<td>1.17</td>
</tr>
<tr>
<td>156</td>
<td>147</td>
<td>9</td>
<td>3</td>
<td>7</td>
<td>1.95</td>
</tr>
<tr>
<td>152</td>
<td>145</td>
<td>7</td>
<td>4</td>
<td>7</td>
<td>2.46</td>
</tr>
<tr>
<td>145</td>
<td>155</td>
<td>10</td>
<td>5</td>
<td>7.6</td>
<td>3.21</td>
</tr>
<tr>
<td>146</td>
<td>154</td>
<td>8</td>
<td>6</td>
<td>7.67</td>
<td>3.69</td>
</tr>
<tr>
<td>153</td>
<td>148</td>
<td>5</td>
<td>7</td>
<td>7.29</td>
<td>3.82</td>
</tr>
<tr>
<td>157</td>
<td>146</td>
<td>11</td>
<td>8</td>
<td>7.75</td>
<td>4.54</td>
</tr>
</tbody>
</table>
</div>

<div class="notice remarque">
	<p>L'observation simultanée de e et MAD permet d'avoir une bonne idée de la qualité du modèle de prévision.</p>

	<p>Afin de maîtriser un système de prévision de nombreux articles, il faut mettre en place des fourchettes pour ces indicateurs.</p> 

	<p>Le suivi de ces indicateurs et de leur comportement nous alertera d'une quelconque modification et nous permettra de réagir.</p>
</div>


<h3>Erreur moyenne absolue en pourcentage</h3>

<p>(MAPE = Mean Absolute Percentage Error)</p>

<div class="formule">
MAPE = 
	<div class="fraction">
		<span class="numerateur">&sum; | D - P |</span>
		<span class="bar">/</span>
		<span class="denominateur">&sum; D</span>
	</div>
</div>

    <h3>Écart quadratique moyen (MSE = Mean Squared Error)</h3>

<div class="formule">
Écart quadratique moyen = 
	<div class="fraction">
		<span class="numerateur">&sum; ( D - P )²</span>
		<span class="bar">/</span>
		<span class="denominateur">n</span>
	</div>
</div>

<p>Cet écart, encore appelé <span class="tag--info">carré moyen de l'erreur</span>, pénalise une prévision beaucoup plus pour les écarts extrêmes que pour les écarts faibles.</p>


<p class="notice remarque">On peut aussi mesurer la stabilité de la prévision en regardant l'évolution de la fiabilité et du biais en fonction de l'horizon de prévision.</p>

<h3>Signal d'alerte</h3>

<p>Un autre indicateur utilisé pour prévenir d'un processus de prévision qui devient hors contrôle est le <span class="tag--info">signal d'alerte</span> suivant :</p>

<div class="formule">
A<sub>i</sub> = 
	<div class="fraction">
		<span class="numerateur">&sum; ( D<sub>i</sub> - P<sub>i</sub> )</span>
		<span class="bar">/</span>
		<span class="denominateur">MAD<sub>i</sub></span>
	</div>
</div>


<p>Cette valeur peut naturellement être positive ou négative, mais doit rester dans des limites raisonnables et non biaisées (systématiquement négative ou positive).</p>

<p class="notice remarque">Elle permet de détecter un retournement de tendance.</p>


<div class="exercice">
<p>Exemple : Calcul du signal d'alerte Ai</p>
<table class="table">
<thead>
<tr>
<th>D<sub>i</sub></th>
<th>P<sub>i</sub></th>
<th>D<sub>i</sub> - P<sub>i</sub></th>
<th>&sum; ( D<sub>i</sub> - P<sub>i</sub> )</th>
<th>A<sub>i</sub></th>
</tr>
</thead>
<tbody>
<tr>
<td>150</td>
<td>153</td>
<td>3</td>
<td>-3</td>
<td>-10</td>
</tr>
<tr>
<td>146</td>
<td>155</td>
<td>-9</td>
<td>-12</td>
<td>-10.2</td>
</tr>
<tr>
<td>156</td>
<td>147</td>
<td>9</td>
<td>-3</td>
<td>-1.5</td>
</tr>
<tr>
<td>152</td>
<td>145</td>
<td>7</td>
<td>4</td>
<td>1.6</td>
</tr>
<tr>
<td>145</td>
<td>155</td>
<td>-10</td>
<td>-6</td>
<td>-1.9</td>
</tr>
<tr>
<td>146</td>
<td>154</td>
<td>-8</td>
<td>-14</td>
<td>-3.8</td>
</tr>
<tr>
<td>153</td>
<td>148</td>
<td>5</td>
<td>-9</td>
<td>-2.4</td>
</tr>
<tr>
<td>157</td>
<td>146</td>
<td>11</td>
<td>2</td>
<td>0.4</td>
</tr>
</tbody>
</table>
</div>

<p>On remarquera les valeurs très élevées de Ai en tête du tableau.</p> 

<p>C'est tout à fait normal, car les écarts étaient initialement supposés nuls...
ce qui correspond bien à une modification du modèle !</p>

<h3>Synthèse.</h3>

<div class="ok">
	<p>En résumé :</p>
<ul>
<li>Appliquer les prévisions sur des produits bien sélectionnées (les articles les plus rentables, les plus coûteux, les plus sensibles, en bref les stocks désignés comme critiques).</li>
<li>Repérer les variations de consommation, en examinant les différences entre consommations et prévisions.</li>
<li>Trouver l'explication des divergences.</li>
<li>Corriger l'historique des consommations des variations qui risquent de perturber le calcul des prévisions.</li>
<li>Tirer profit des variations exceptionnelles pour estimer leur impact sur les futures prévisions.</li>
</ul>
</div>

</div>

