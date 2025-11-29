<?php
/**
 * BUT : La gestion des stocks
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Représentation des systèmes qualité et logistique
 * @category gstock
 * @access protected
 * @uses db
 */
$sNavigation = navigation('gstock', '5'); ?>





<h1>Quand commander ?</h1>


<h2> Le principe du point de commande</h2>

<img src="/assets/img/qlio/gstock/graphique_quand_commander.png" alt="graphique illustrant quand commander" />

<p>Le système à point de commande (PC) suppose qu'on peut passer une commande (ou faire un lancement en production) dès que le PC est atteint. Cela entraine des difficultés dans plusieurs cas :</p>
<ol>
	<li>Plusieurs articles proviennent d'un même fournisseur : comme le point de commande peut être atteint à moment différents, on ne peut effectuer un regroupement de commande !</li>
	<li>L'organisation de la production (en entreprise ou chez le fournisseur) fait qu'on ne lance une production qu'au prochain programme (hebdomadaire ou mensuel)… donc le délai est allongé. La prise en compte de la commande étant périodique le système ne fonctionne plus comme un système à point de commande. Il est nécessaire d'associer soit un souplesse de production ou prévoir l'existence de stock chez le fournisseur.</li>
	<li>Il faut connaitre l'état du stock en permanence => cela entraine des coûts de gestion élevés.</li>
</ol>

<p>Lorsque les stocks sont suivi informatiquement en temps réel, on connait le stock en permanence (Exemple : grande surface, entreprises, ...).</p>

<p>Cette méthode a engendré des systèmes simple et astucieux :</p>
<ul>
	<li>Système à deux casiers qui consiste à puiser dans un premier casier jusqu'à ce qu'il soit vide, alors on commande le volume d'un casier et on puise dans le deuxième.</li>
	<li>Système pharmacien : on entoure les 4-6 dernières boîtes (le point de commande) d'un article avec un bracelet en caoutchouc maintenant une fiche qui indique la quantité fixe à commander.</li>
</ul>


<p>En résumé, le système à point de commande correspond à un suivi très précis du stock. Il est le mieux adapté dans les cas suivants :</p>
<ul>
	<li>Demande à forte variabilité.</li>
	<li>Article cher qui impose une forte protection contre la rupture.</li>
	<li>Processus de réapprovisionnement souple (via un stock chez le fournisseur ou un système de production flexible en interne).</li>
</ul>

<img src="/assets/img/qlio/gstock/graphique_point_commande.png" alt="graphique illustrant le point de commande" />

<p>Avec :</p>
<ul>
	<li>P<sub>c</sub> = Point de commande.</li>
	<li>S = Stock de sécurité.</li>
	<li>d = Délai de réapprovisionnement.</li>
	<li>c = Rythme de consommation.</li>
</ul>

<p class="formule rouge"><strong>P<sub>c</sub> = S + d * c</strong></p>


<div class="exercice">
	<p>Exemple : Article 125.230 - Point de commande : 50  - Quantité à commander 200 </p>
<table class="table">
	<tr>
		<th>Date</th>
		<th>Entrées</th>
		<th>Sorties</th>
		<th>Stock</th>
		<th>Commandes</th>
		<th>Disponible</th>
	</tr>
	<tr>
		<td>2/3</td>
		<td></td>
		<td></td>
		<td>85</td>
		<td></td>
		<td>85</td>
	</tr>
	<tr>
		<td>3/3</td>
		<td></td>
		<td>5</td>
		<td>80</td>
		<td></td>
		<td>80</td>
	</tr>
	<tr>
		<td>4/3</td>
		<td></td>
		<td>8</td>
		<td>72</td>
		<td></td>
		<td>72</td>
	</tr>
	<tr>
		<td>6/3</td>
		<td></td>
		<td>10</td>
		<td>62</td>
		<td></td>
		<td>62</td>
	</tr>
	<tr>
		<td>8/3</td>
		<td></td>
		<td>2</td>
		<td>60</td>
		<td></td>
		<td>60</td>
	</tr>
	<tr>
		<td>9/3</td>
		<td></td>
		<td>15</td>
		<td>45</td>
		<td>200</td>
		<td>245</td>
	</tr>
	<tr>
		<td>12/3</td>
		<td></td>
		<td>10</td>
		<td>35</td>
		<td></td>
		<td>235</td>
	</tr>
	<tr>
		<td>14/3</td>
		<td></td>
		<td>7</td>
		<td>28</td>
		<td></td>
		<td>228</td>
	</tr>
	<tr>
		<td>16/3</td>
		<td></td>
		<td>6</td>
		<td>22</td>
		<td></td>
		<td>222</td>
	</tr>
	<tr>
		<td>17/3</td>
		<td></td>
		<td>6</td>
		<td>16</td>
		<td></td>
		<td>216</td>
	</tr>
	<tr>
		<td>18/3</td>
		<td>200</td>
		<td></td>
		<td>216</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>20/3</td>
		<td></td>
		<td>11</td>
		<td>205</td>
		<td></td>
		<td></td>
	</tr>
</table>


<p>Le 9/3 on passe en-dessous du point de commande 50 on passe alors une commande de 200.</p>
<p>Le 12/3 le stock physique est de 35 mais on ne passe pas commande car le stock disponible est de 35+200 = 235 (la commande du 9/3 n'est pas encore livrée).</p>

<p>Le stock correspondant au point de commande a pour but de couvrir la demande jusqu'à la réception de la commande sinon il y a rupture
(si la commande est de 20 par semaine et si le délai d'obtention est de 3 semaines, il faut commander dès que le stock atteint le seuil de 60).</p>
</div>

<div class="notice remarque">
<p>Si le point de commande est trop haut, le stock moyen augmente ainsi que les charges financières associées.</p>
<p>Si le point de commande est trop bas, le stock moyen diminue mais le risque de rupture s'accroit.</p>

<p>Si la demande augmente, le point de commande est atteint plus rapidement et le réapprovisionnement est commandé plus tôt. </p>
<p>Si le point de commande peut absorber pendant le délai de réapprovisionnement, pas de rupture.</p>
</div>


<h2> Le Kanban : un système à point de commande !</h2>

<img src="/assets/img/qlio/gstock/kanban_point_commande.png" alt="kanban un système à point de commande" />

<div class="notice remarque">
<p>Une carte Kanban présente sur le planning représente des articles manquants dans le stock.</p>
<p>Une carte Kanban manquante sur le planning représente des articles présents dans le stock.</p>

</div>

<h3>Le planning Kanban</h3>

<img src="/assets/img/qlio/gstock/exemple_carte_kanban.png" alt="Exemple de carte kanban" />


<ul>
	<li>L'unité de production est le conteneur.</li>
	<li>Chaque conteneur est accompagné d'une carte.</li>
	<li>Chaque carte sur le planning correspond à un conteneur vide.</li>
	<li>Les cartes sur le planning permettent de savoir :
		<ul>
			<li>Ce qu'il faut fabriquer.</li>
			<li>Quand il faut fabriquer.</li>
		</ul>
	</li>
</ul>

<h3>Calcul du nombre de carte par zone</h3>

<p>Pour une référence de pièces (k2) le poste aval consomme en moyenne 50 pièces par heure (CMH).</p>
<p>La taille des conteneurs est de 100 pièces (k).</p>
<p>Le lot économique est de 200 pièces (Qec).</p>
<p>La zone tampon (Zt) devra être l'équivalent de 4 heures de production.</p>
<p>Le délai de réapprovisionnement (d) par le poste amont est de 6 heures.</p>

<img src="/assets/img/qlio/gstock/reference_piece.png" alt="Références des pièces" />

<div>ZONE A : 	Na = 
	<div class="fraction">
		<span class="numerateur">Qec</span>
		<span class="bar">/</span>
		<span class="denominateur">k</span>
	</div>
	=
	<div class="fraction">
		<span class="numerateur">200</span>
		<span class="bar">/</span>
		<span class="denominateur">100</span>
	</div>
	= 2 cartes
</div>

<div>ZONE B : 	Nb = 
	<div class="fraction">
		<span class="numerateur">Zt * CMH</span>
		<span class="bar">/</span>
		<span class="denominateur">k</span>
	</div>
	=
	<div class="fraction">
		<span class="numerateur">4 * 50</span>
		<span class="bar">/</span>
		<span class="denominateur">100</span>
	</div>
	= 2 cartes
</div>

<div>ZONE C : 	Nc = 
	<div class="fraction">
		<span class="numerateur">CMH * d</span>
		<span class="bar">/</span>
		<span class="denominateur">k</span>
	</div>
	=
	<div class="fraction">
		<span class="numerateur">50 * 6</span>
		<span class="bar">/</span>
		<span class="denominateur">100</span>
	</div>
	= 3 cartes
</div>


<h2> Seuil de recomplètement</h2>

<img src="/assets/img/qlio/gstock/graphique_seuil_recompletement.png" alt="graphique seuil de recomplètement" />


<p>Avec :</p>
<ul>
	<li>R = Seuil de recomplètement.</li>
	<li>D = Stock disponible.</li>
	<li>S = Stock de sécurité.</li>
	<li>p = Période constante.</li>
	<li>d = Délai de réapprovisionnement.</li>
	<li>c = Rythme de consommation.</li>
</ul>

<p class="formule rouge"><strong>R = S + c (p + d)</strong></p>



<p>Les commandes sont passés à périodes constantes et connues (C<sub>1</sub>, C<sub>2</sub>, ...). 
	La taille du lot est déterminée en fonction des besoins jusqu'à la livraison suivante et du stock disponible.</p>


<p>Une commande sera passée en C<sub>1</sub> ; elle sera livrée (réceptionnée) en R<sub>2</sub> ;</p>
<p>Le niveau de stock disponible en C<sub>1</sub> (y compris notre commande) devra couvrir les besoins jusqu'en R<sub>2</sub>, c'est-à-dire sur un horizon (p+d).</p>
<p>La quantité R à laquelle il faut recompléter le stock est de c(p+d) + S (le stock de sécurité s'il existe).</p>
<p>Si le disponible D = (stock physique en-cours - commande) est supérieur à R = S + c(p+d), alors il n'y aura pas de commande..</p>
<p>Si D < R, alors la quantité à commander sera égale à R - D.</p>

<h3>Les calculs</h3>

<p>S = 25 ; c = 25 par semaine ; d = 2 semaines ; p = 4 semaines ; D = 75 (à l'instant C<sub>1</sub>)</p>
<h4>Calcul du seuil de recomplètement</h4>
<p>R = S + c(p+d)  donc R = 25 + 25(4+2) = 175</p>

<h4>Calcul de la quantité à commander</h4>
<p>Q = R - D = 175 - 75 = 100</p>

<div class="exercice">
	<p>Exemple : Article 852.642 - Cycle de révision: 2 semaines  - Niveau de recomplètement : 300 – délai d'obtention 8 jours</p>
<table class="table">
	<tr>
		<th>Date</th>
		<th>Entrées</th>
		<th>Sorties</th>
		<th>Stock</th>
		<th>Commandes</th>
		<th>Disponible</th>
	</tr>
	<tr>
		<td>2/3</td>
		<td></td>
		<td></td>
		<td>85</td>
		<td></td>
		<td>85</td>
	</tr>
	<tr>
		<td>3/3</td>
		<td></td>
		<td>5</td>
		<td>80</td>
		<td></td>
		<td>80</td>
	</tr>
	<tr>
		<td>4/3</td>
		<td></td>
		<td>8</td>
		<td>72</td>
		<td></td>
		<td>72</td>
	</tr>
	<tr>
		<td>6/3</td>
		<td></td>
		<td>10</td>
		<td>62</td>
		<td></td>
		<td>62</td>
	</tr>
	<tr>
		<td>8/3</td>
		<td></td>
		<td>2</td>
		<td>60</td>
		<td></td>
		<td>60</td>
	</tr>
	<tr>
		<td>9/3</td>
		<td></td>
		<td>15</td>
		<td>45</td>
		<td>255</td>
		<td>300</td>
	</tr>
	<tr>
		<td>12/3</td>
		<td></td>
		<td>10</td>
		<td>35</td>
		<td></td>
		<td>290</td>
	</tr>
	<tr>
		<td>14/3</td>
		<td></td>
		<td>7</td>
		<td>28</td>
		<td></td>
		<td>283</td>
	</tr>
	<tr>
		<td>16/3</td>
		<td></td>
		<td>6</td>
		<td>22</td>
		<td></td>
		<td>277</td>
	</tr>
	<tr>
		<td>17/3</td>
		<td></td>
		<td>6</td>
		<td>16</td>
		<td></td>
		<td>271</td>
	</tr>
	<tr>
		<td>18/3</td>
		<td>255</td>
		<td></td>
		<td>271</td>
		<td></td>
		<td>271</td>
	</tr>
	<tr>
		<td>20/3</td>
		<td></td>
		<td>11</td>
		<td>260</td>
		<td></td>
		<td>260</td>
	</tr>
	<tr>
		<td>22/3</td>
		<td></td>
		<td>14</td>
		<td>246</td>
		<td></td>
		<td>246</td>
	</tr>
	<tr>
		<td>23/3</td>
		<td></td>
		<td>12</td>
		<td>234</td>
		<td>66</td>
		<td>300</td>
	</tr>
	<tr>
		<td>25/3</td>
		<td></td>
		<td>15</td>
		<td>219</td>
		<td></td>
		<td>285</td>
	</tr>
	<tr>
		<td>26/3</td>
		<td></td>
		<td>9</td>
		<td>210</td>
		<td></td>
		<td>276</td>
	</tr>
	<tr>
		<td>28/3</td>
		<td></td>
		<td>12</td>
		<td>198</td>
		<td></td>
		<td>264</td>
	</tr>
	<tr>
		<td>31/3</td>
		<td>66</td>
		<td></td>
		<td>264</td>
		<td></td>
		<td>264</td>
	</tr>
</table>

<p>Si le délai d'obtention est supérieur à la période de révision alors on peut avoir plusieurs commandes en même temps.</p>

</div>

<div class="notice remarque">
<p>Ce système est préférable lorsque les éléments suivants sont présents :</p>
<ul>
	<li>Demande et délai d'obtention de faible variabilité.</li>
	<li>Articles, dont la valeur de consommation est faible par le prix ou la quantité, ce qui implique qu'un stock moyen important n'entraine pas trop de frais de détention trop élevées.</li>
	<li>Impossibilité de prendre les commandes en charge de façon continue au cours du temps de fait de contrainte d'organisation et/ou de structure du système logistique.</li>
</ul>
</div>

<p class="notice ok">Avantage : Le regroupement de commande est possible.</p>

<h3>Critique des méthodes traditionnelles</h3>

<div class="notice alert">
<p>Les coûts de possession des stocks sont souvent sous-estimés.</p>
<p>Les temps de changement de séries ne doivent pas être considèrés comme des “données” et doivent être réduits constamment et de manière conséquente.</p>
<p>Les formules traditionnelles recherchent les coûts unitaires minimaux et ignorent ainsi l'impact sur la trésorerie.</p>
<p>Les hypothèses de la série économique sont approximatives, voire parfois fausses.</p>
</div>

<h2> Échéancier de demandes indépendantes</h2>

<p>Les méthodes de réapprovisionnement classiques (point de commande, seuil de recomplètement) sont aveugles.</p>
<p>Tant que le point commande n'est pas atteint, nous n'avons aucune information.</p>


<p>Les techniques de point de commande partent du principe que la demande est régulière et la demande moyenne est calculée d'après un historique.</p>
<p>L'échéancier de demande indépendante réagit en fonction de l'avenir (du moins de ce que l'on peut en prévoir) et permet ainsi de prendre en compte les variations par rapport à la moyenne.</p>

<h3>Les calculs</h3>

<div class="exercice">

<p>Soit les données suivantes : Stock de sécurité = 10, délai = 1 période, quantité de commande = 100</p>

<table class="table">
	<tr>
		<th colspan="2" rowspan="2"></th>
		<th colspan="10">Périodes</th>
	</tr>
	<tr>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
		<th>6</th>
		<th>7</th>
		<th>8</th>
		<th>9</th>
		<th>Total</th>
	</tr>
	<tr>
		<th colspan="2">Besoins bruts</th>
		<td>25</td>
		<td>40</td>
		<td>15</td>
		<td>20</td>
		<td>25</td>
		<td>40</td>
		<td>20</td>
		<td>25</td>
		<td>15</td>
		<td>225</td>
	</tr>
	<tr>
		<th>Disponible prévisionnel</th>
		<th>62</th>
		<td>37</td>
		<td class="diagonalRisingVide"><sup><span class="rouge">-3</span></sup><sub><span class="">97</span></sub></td>
		<td>82</td>
		<td>62</td>
		<td>37</td>
		<td class="diagonalRisingVide"><sup><span class="rouge">-3</span></sup><sub><span class="">97</span></sub></td>
		<td>77</td>
		<td>52</td>
		<td>37</td>
		<td></td>
	</tr>
	<tr>
		<th colspan="2">Ordre prévisionnel (début)</th>
		<td>100</td>
		<td></td>
		<td></td>
		<td></td>
		<td>100</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

<p>SI COMMANDES RÉELLES = PRÉVISIONS , cela donne en GESTION SUR POINT DE COMMANDE :</p>

<table class="table">
	<tr>
		<th>Disponible prévisionnel</th>
		<td>37</td>
		<td><span class="rouge">-3</span></td>
		<td>82</td>
		<td>62</td>
		<td>37</td>		
		<td><span class="rouge">-3</span></td>
		<td>77</td>
		<td>52</td>
		<td>37</td>
		<td>&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<th>Ordre prévisionnel (début)</th>
		<td></td>
		<td>100</td>
		<td></td>
		<td></td>
		<td></td>
		<td>100</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

<p>POINT DE COMMANDE = Stock de sécurité + rythme de consommation x délai</p>
<p> P<sub>C</sub> = 10 + (225/9) x 1 = 35</p>


</div>
<p>Le stock prévisionnel en période (1) est égal à 62 - 25 = 37 ; en période (2) il passe à - 3 et déclenche ainsi un OF (ordre de fabrication à lancer en période (1) (début d'O.F.).</p>
<p>La simulation du bas montre de ce qui se passerait en gestion «point de commande» avec l'hypothèse que les commande réelles soient égales aux prévisions.</p>

<p>Le point de commande serait égal à :</p>
<p class="formule"> PC = (délai x consommation moyenne) + stock sécurité</p>

<p class="clear"></p>
<div class="formule">
Consommation moyenne =
	<div class="fraction">
		<span class="numerateur">besoins bruts sur l'horizon</span>
		<span class="bar">/</span>
		<span class="denominateur">nombre de périodes</span>
	</div>
	= 
	<div class="fraction">
		<span class="numerateur">225</span>
		<span class="bar">/</span>
		<span class="denominateur">9</span>
	</div>
	= 25
</div>

<p>En période 1, le disponible est de 37. Le point de commande n'étant pas atteint, il ne se passe rien.</p>
<p>En période 2, la rupture sera inévitable, le système n'ayant pas permis de réagir à temps.</p>


<p>&nbsp;</p>

