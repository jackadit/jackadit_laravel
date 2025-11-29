<?php
/**
 * BUT : Introduction à l'éco-conception
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Industrialisation
 * @access public
 * @uses 
 */
$sNavigation=navigation('indus', '3', 'fin');
?>




<h1>Introduction au concept FMD : Fiabilité - Maintenabilité - Disponibilité</h1>

	<h2>Définitions</h2>

    <dl>
        <dt>MTTF - Mean Time To Failure</dt>
        <dd>Durée moyenne de fonctionnement d'une entité avant la première défaillance MTTF = ∫ [0;+∞[ R(x).dx</dd>
    </dl>
    
    <dl>
        <dt>MTTR - Mean Time To Repair</dt>
        <dd>Durée moyenne de réparation</dd>
		<div class="eq-c formule">
		 MTTR = 
			<div class="fraction">
				<span class="numerateur">Σ Temps d'arrêt</span>
				<span class="bar">/</span>
				<span class="denominateur">Nombre d'arrêts</span>
			</div>
		</div>
    </dl>
    
    <dl>
        <dt>MUT - Mean Up Time</dt>
        <dd>Durée moyenne de fonctionnement après réparation</dd>
    </dl>
    
    <dl>
        <dt>MDT - Mean Down Time</dt>
        <dd>Durée moyenne d'indisponibilité (temps de détection de la panne + temps de réparation + temps de remise en service)</dd>
    </dl>

    <dl>
        <dt>MTBF - Mean Time Between Failure</dt>
        <dd>Durée moyenne des temps de bon fonctionnement entre deux défaillances consécutives</dd>

		<div class="eq-c formule">
		MTBF = 
			<div class="fraction">
				<span class="numerateur">Σ Temps de bon fonctionnement</span>
				<span class="bar">/</span>
				<span class="denominateur">Nombre de défaillances ou nombre de période de bon fonctionnement</span>
			</div>
		</div>
    </dl>

	<div class="notice remarque">
	<p><u>Remarques</u> :</p>
	<ul>
		<li>La somme des temps de bon fonctionnement est égale au temps total d'analyse (période de référence) moins la somme des temps d'arrêts</li>
		<li>Le nombre de périodes de bon fonctionnement (tbf) est normalement égal au nombre de défaillances (arrêts) de la période si on considère le début et la fin de la période comme un seul temps de bon fonctionnement (Cas n°1) ou bien si on effectue l'analyse entre deux arrêts, sans prendre en compte l'arrêt initial (Cas n°2)</li>
	</ul>
	</div>
	
	<p><u>cas n°1</u> :</p>
	<img src="/assets/img/qlio/indus/cas1.png" alt="n=nb_defaillance" />
	<p><u>cas n°2</u> :</p>
	<img src="/assets/img/qlio/indus/cas2.png" alt="n=nb_bon_fonctionnement" />
	<img src="/assets/img/qlio/indus/definitions_MTTF_MTTR_MTD_MTBF_MUT.png" alt="définitions des termes MTTF, MTTR ,MTD, MTBF, MUT" />


	<h2>Maintenabilité</h2>

	<blockquote>« Dans les conditions d'utilisation données pour lesquelles il a été conçu, la maintenabilité est l'aptitude d'un bien 
    à être maintenu ou rétabli dans un état dans lequel il peut accomplir une fonction requise, 
    lorsque la maintenance est accomplie dans des conditions données, avec des procédures et des moyens prescrits. » 
    <br />(NF X60-010).
    </blockquote>

	<p>La maintenabilité caractérise la facilité à remettre ou de maintenir un bien en bon état de fonctionnement. Cette notion ne peut s'appliquer qu'à du matériel maintenable, donc réparable.</p>
	<p>« Les moyens prescrits » englobent des notions très diverses : moyens en personnel, appareillages, outillages, etc.</p>
	<p>La maintenabilité d'un équipement dépend de nombreux facteurs : </p>
	
	<table class="table">
	<caption>Tableau des facteurs de dépendances</caption>
	<tr>
		<th class="w400p">ÉQUIPEMENT</th>
		<th class="w400p">CONSTRUCTEUR</th>
		<th class="w400p border-right">MAINTENANCE</th>
	</tr>
	<tr>
		<td class="left">- documentation<br />
			- aptitude au démontage<br />
			- facilité d'utilisation</td>
		<td class="left">- conception<br />
			- qualité  du  service  après-vente<br />
			- facilité d'obtention des pièces de rechange<br />
			- coût des pièces de rechange</td>
		<td class="left">- préparation  et  formation des personnels<br />
			- moyens adéquats<br />
			- études d'améliorations (maintenance améliorative)</td>
	</tr>
	</table>

    <h3>Calcul de la maintenabilité</h3>
    
    <p>La maintenabilité concerne l'action de maintenance comme telle. 
    Par la maintenabilité, on recherche l'optimisation du temps d'intervention afin d'augmenter le temps de production en diminuant les délais dûs au :</p>
    <ul>
    <li>temps pour l'attente de pièce de remplacement</li>
    <li>temps pour compléter les documents</li>
    <li>temps de préparation de l'action</li>
    </ul>
    
    <p>Son indice est le MTTR et se calcule de manière suivante :</p>
    
	<div class="eq-c formule">
	MTTR = 
		<div class="fraction">
			<span class="numerateur">Temps total d'arrêts</span>
			<span class="bar">/</span>
			<span class="denominateur">Nombre d'arrêts</span>
		</div>
	</div>

	<p>La maintenabilité peut se caractériser par sa MTTR (Mean Time To Repair) ou encore Moyenne des Temps Techniques de Réparation</p>

	<p>Pour l'exemple traité en fiabilité : </p>
	<div class="eq-c">
	MTTR = 
		<div class="fraction">
			<span class="numerateur">2,5</span>
			<span class="bar">/</span>
			<span class="denominateur">3s</span>
		</div>= 0,83 heure
	</div>

    <h3>Taux de réparation μ</h3>

	<p>Il est égal à l'unité de temps sur la MTTR :</p>


	<div class="eq-c formule">
	μ = 
		<div class="fraction">
			<span class="numerateur">1</span>
			<span class="bar">/</span>
			<span class="denominateur">MTTR</span>
		</div>
	</div>


	<h2>Fiabilité</h2>

    <h3>Fiabilité (en anglais Reliability)</h3>

    <p>La fiabilité est la probabilité qu'un produit fonctionne correctement sans panne dans des conditions d'utilisation données pendant une durée spécifique.</p>

	<blockquote>"caractéristique d'un bien exprimée par la probabilité qu'il accomplisse une fonction requise dans des conditions données pendant un temps donné" (NF X50 –500).</blockquote>
	<p>Il s'agit d'une probabilité, notée R(t).</p>
	<p>R(t) = probabilité que l'entité ne soit pas défaillante dans l'intervalle de temps [0;t] </p>


    <p>Cette définition suppose que soit bien définis :</p>
    <ul>
    <li>Les conditions d'utilisation ;</li>
    <li>Le temps moyen souhaité entre les pannes.</li>
    </ul>

    <p>L'indice de fiabilité le plus employé est le MTBF</p>

    <h3>Défiabilité</h3>

	<p>A l'inverse de la fiabilité, la défiabilité est la probabilité que l'entité ait connu une défaillance pendant une durée donnée.</p>
	<p>Elle est notée F(t)</p>
	<p>F(t) = probabilité que l'entité soit défaillante dans l'intervalle de temps [0;t]</p>
	
    <p class="formule">F(t) = 1-R(t)</p>

	<p>La notion de temps peut prendre la forme : </p>
	<ul>
		<li>De nombre de cycles effectués => machine automatique</li>
		<li>De distance parcourue => matériel roulant</li>
		<li>De tonnage produit => équipement de production</li>
	</ul>

	<blockquote>
	<ul>Un équipement est fiable s'il subit peu d'arrêts pour pannes. La notion de fiabilité s'applique :
		<li>à du système réparable => équipement industriel ou domestique.</li>
		<li>à des systèmes non réparables => lampes, composants donc jetables</li>
	</ul>
	</blockquote>

    <h3>Calcul de la MTBF</h3>

	<p>La fiabilité peut se caractériser par la moyenne des temps de bon fonctionnement ou MTBF (Mean Time Between Failure).</p>
	
	<p></p>

	<img src="/assets/img/qlio/indus/fiabilite.png" alt="Définition de fiabilité" />

    <p>Il se calcule ainsi :</p>

	<h4>si le MTBF est calculé suite à un TBF</h4>

	<div class="eq-c formule">
	MTBF = 
	<div class="fraction">
		<span class="numerateur">Temps total d'opération</span>
		<span class="bar">/</span>
		<span class="denominateur">Nombre d'arrêts + 1</span>
	</div>
	</div>
    
    <h4>si le MTBF est calculé suite à un TA</h4>

	<div class="eq-c formule">
	MTBF = 
	<div class="fraction">
		<span class="numerateur">Temps total d'opération</span>
		<span class="bar">/</span>
		<span class="denominateur">Nombre d'arrêts</span>
	</div>
	</div>

	<h4><u>Exemple</u> :</h4> 
    <p>Fonctionnement d'un équipement sur 24 heures</p>

	<img src="/assets/img/qlio/indus/ex_fiabilite.png" alt="Exemple de calcul de fiabilité" />

	<div class="eq-c">
	MTBF = 
	<div class="fraction">
		<span class="numerateur">21,50</span>
		<span class="bar">/</span>
		<span class="denominateur">4</span>
	</div>= 5,375 heures.
	</div>

    <h3>Taux de défaillance λ</h3>

	<p>Le taux de défaillance instantané est le taux de défaillance d'un système ayant fonctionné pendant une durée t.</p>
	<p>Appelé également taux de panne, il est égal à l'unité de temps sur la MTBF :</p>
	
	<div class="eq-c formule">
	λ = 
		<div class="fraction">
			<span class="numerateur">1</span>
			<span class="bar">/</span>
			<span class="denominateur">MTBF</span>
		</div>
	</div>

	<p>Pour l'exemple précédent :</p>
	<div class="eq-c">
	λ = 
		<div class="fraction">
			<span class="numerateur">1</span>
			<span class="bar">/</span>
			<span class="denominateur">5,37</span>
		</div>= 0,19 panne / heure
	</div>

	<p>Pour un équipement (système réparable) le taux de défaillance se traduit souvent par une courbe dite « courbe en baignoire » mettant en évidence 3 époques :</p>
	<img src="/assets/img/qlio/indus/taux_defaillance.png" alt="Courbe représentative du taux de défaillance" />

	<ul>
		<li>Zone A => époque de jeunesse</li>
		<li>Zone B => époque de maturité, fonctionnement normal, défaillance aléatoire indépendante du temps</li>
		<li>Zone C => époque d'obsolescence, défaillances d'usure ou pannes de vieillesse</li>
	</ul>
	
	<h4><u>Exemple</u> :</h4>
    <p>Dans cette partie, on s'intéresse au temps de bon fonctionnement (TBF) d'une presse. A chaque panne, on associe le nombre de jours de bon fonctionnement ayant précédé de cette panne.</p>
	<p>Les observations se sont déroulées sur une période de 4 ans et ont donné les résultats suivants :</p>

	<table class="table">
	<tr>
		<th>Rang de la panne</th>
		<th class="w20p">1</th>
		<th class="w20p">2</th>
		<th class="w20p">3</th>
		<th class="w20p">4</th>
		<th class="w20p">5</th>
		<th class="w20p">6</th>
		<th class="w20p">7</th>
		<th class="w20p">8</th>
		<th class="w20p">9</th>
		<th class="w20p border-right">10</th>
	</tr>
	<tr>
		<td>TBF ayant précédé la panne (en jour)</td>
		<td>55</td>
		<td>26</td>
		<td>13</td>
		<td>80</td>
		<td>14</td>
		<td>21</td>
		<td>124</td>
		<td>35</td>
		<td>18</td>
		<td>26</td>
	</tr>
	</table>

	<p>Calculer au jour près par défaut, le temps moyen de bon fonctionnement entre deux pannes.</p>

	<div class="eq-c">
	MTBF = 
		<div class="fraction">
			<span class="numerateur">(55+26+13+80+14+21+124+35+18+26)</span>
			<span class="bar">/</span>
			<span class="denominateur">10</span>
		</div> = 
		<div class="fraction">
			<span class="numerateur">412</span>
			<span class="bar">/</span>
			<span class="denominateur">10</span>
		</div> = 41,2 &asymp; 41 jours
	</div>

	<h2>Fiabilité des systèmes</h2>
    
    <p>Lorsque les équipements sont composés de plusieurs équipements formant ainsi un système, il faut ajuster le calcul de la fiabilité au système.</p>
    <p>De façon générale, les systèmes sont en série ou en parallèle.</p>

    <h3>Système en série</h3>
    
    <p>Un système constitué de n éléments est dit en série si la défaillance d'un élément entraîne celle du système et si les défaillances sont indépendantes.</p>
    <img src="/assets/img/qlio/indus/systeme_serie.png" alt="Système en série" />
    
    <p class="h4-like">La fiabilité résultante est donnée par :</p>


    <div class="formule">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<sub>n</sub><br />
		R(t) = <span class="h2-like">&pi;</span> R<sub>i</sub>(t)
		<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<sup>i=1</sup>
	</div>

    <p>La fiabilité du système en série se calcul ainsi :</p>
    <p>R(t) = R<sub>1</sub>(t) x R<sub>2</sub>(t) x R<sub>3</sub>(t) x … R<sub>n</sub>(t)</p>

    <h3>Système en parallèle</h3>
    <p>Un système est dit en parallèle s'il suffit qu'un seul des élément fonctionne pour que le système fonctionne.</p>
    <img src="/assets/img/qlio/indus/systeme_parallele.png" alt="Système en parallèle" />


        <p class="h4-like">La fiabilité résultante est donnée par :</p>

        <div class="formule">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<sub>n</sub><br />
			R(t) = 1 - <span class="h2-like">&pi;</span> (1 - R<sub>i</sub>(t))
			<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<sup>i=1</sup>
		</div>

    <p>La fiabilité du système en série se calcule ainsi :</p>
    <p>R(t) = 1-( (1-R<sub>1</sub>(t)) x (1-R<sub>2</sub>(t)) x … x (1-R<sub>n</sub>(t)) )</p>

	<div class="notice remarque">
    <p><u>Remarque</u> :</p>
    <p>Plus il y a de composantes en parallèle, meilleure est la fiabilité.</p>
    <p>Habituellement, on utilise cette propriété pour accroître la sécurité de fonctionnement d'un système.</p>
	</div>

	<div class="notice exemple">
    <p>Exemple :</p>
    <ul>
    <li>système de freins d'urgence sur une automobile</li>
    <li>deux pompes en parallèle</<li>
    </ul>
	</div>

    <h2>Exercices</h2>

	<p>MTBF est l'abréviation pour Temps Moyen de Bon Fonctionnement (Mean Time Between Failures en anglais). Le MTBF est un indicateur de la fiabilité d'un produit ou d'un système réparable. Il mesure le taux de défaillances aléatoires à l'exclusion des pannes systématiques dues par exemple aux erreurs de conception (par exemple erreurs logiciel) ou défauts de fabrication (produits en début de vie) et à l'exclusion de l'usure due à l'usage (fin de vie d'un produit).</p>

	<p>Le MTBF s'exprime habituellement en nombre d'heures. Plus le MTBF est élevé, plus le produit ou le système est fiable.</p>

	<p>La valeur du MTBF ne peut être définie que pour un usage et un environnement donnés. Par exemple, le MTBF d'un produit donné pour fonctionner entre -20°C et +70°C sera différent selon que le produit est utilisé en intérieur à 20°C ou en extérieur à 70°C.</p>

	<h3>Calculs de MTBF</h3>

	<p>Lorsqu'un système est composé de plusieurs composants, on fait la somme des défaillances de chaque composant en supposant que la panne d'un seul composant provoque la panne du système.</p>

	<div class="eq-c formule">
	MTBF = 
		<div class="fraction">
			<span class="numerateur">1</span>
			<span class="bar">/</span>
			<span class="denominateur">Σ des taux de défaillance de chaque composant du système</span>
		</div>
	</div>

	<p class="notice remarque">Note : Ceci ne s'applique pas aux systèmes complexes (par exemple système redondant) où les taux de défaillances ne sont plus constants.</p>

	<h3>La probabilité (P) que le produit fonctionnera pendant un temps T avant une panne est égale à :</h3>

    <div class="formule">P(t) = e <sup>(-t/MTBF)</sup></div>

	<div class="notice exemple">
	<p><u>Exemple 1</u> : Centrale OLDHAM MX 43, version 4 voies, alimentation 24 V, température d'utilisation 25°C</p>

	<p>MTBF = 174805 heures (<!--19,95--> ?? ans)</p>

	<p>La probabilité que la centrale fonctionne 5 ans avant de tomber en panne est de P = <!--e(-5/19,95) = 77,8--> ?? %.</p>
	</div>

	<div class="notice exemple">
	<p><u>Exemple 2</u> : Détecteur de gaz OLDHAM OLCT 100 pour la détection des gaz explosibles.</p>

	<p>Ce détecteur a été certifié SIL2 par un organisme certifié. Les données de fiabilité sont les suivantes :</p>
	<ul>
	 <li>Taux de défaillances dangereuses non détectées (λdu) = 189.10-9 par heure</li>
	 <li>Proportion de défaillances non dangereuses (SFF) = 92,9%</li>
	</ul>

	<div class="eq-c">
		SFF = 1 – ( 
		<div class="fraction">
			<span class="numerateur">λdu</span>
			<span class="bar">/</span>
			<span class="denominateur">Σ des taux de défaillance</span>
		</div>)
	</div>

	<p>donc Σ des taux de défaillance = 2,66.10-6 par heure = <!--0,0233--> ?? par an</p>

	<p>et</p> 
		<div class="eq-c">
		MTBF = 
            <div class="fraction">
                <span class="numerateur">1</span>
                <span class="bar">/</span>
                <span class="denominateur">Σ des taux de défaillance</span>
            </div>= <!--42,9--> ?? ans.
        </div> 

	<p>La probabilité que le détecteur fonctionne 4 ans (durée de vie moyenne d'une cellule de détection pour les gaz explosibles) avant de tomber en panne est de : <!--91,1--> ? %.</p>

	<p>En fait le MTBF intègre également le temps nécessaire au diagnostic de la panne, à l'approvisionnement des pièces détachées et à la remise en état de fonctionnement (la somme de ces temps correspond au MTTR : temps moyen avant réparation ou Mean Time To Repair en anglais).</p>
	<p>Dans le cas de l'OLCT100 le MTTR est de <!--24--> ?? heures et reste négligeable devant <!--42,9--> ?? ans.</p>
	</div>

	<h2>Disponibilité</h2>

	<blockquote>« Aptitude d'un bien, sous les aspects combinés  de sa fiabilité, de sa maintenabilité et  de l'organisation de la maintenance, à être en état d'accomplir une fonction requise dans des conditions de temps déterminées » 
	<br />(NF X60-010)</blockquote>

	<p>Pour qu'un équipement présente une bonne disponibilité, il doit :</p>
	<ul>
		<li>Avoir le moins possible d'arrêts de production</li>
		<li>Être rapidement remis en bon état s'il tombe en panne</li>
	</ul>
	<p>La disponibilité d'un équipement dépend de nombreux facteurs :</p>

	<img src="/assets/img/qlio/indus/disponibilite.png" alt="Disponibilité" />

	<p>La disponibilité allie donc les notions de fiabilité et de maintenabilité</p>
	<p>Augmenter la disponibilité passe par : </p>
	<ul>
		<li>L'allongement de la MTBF (action sur la fiabilité)</li>
		<li>La réduction de la MTTR (action sur la maintenance)</li>
	</ul>

	<h3>Synthèse</h3>
	<img src="/assets/img/qlio/indus/synthese.png" alt="Synthèse" />

	<p>La disponibilité est un indice qui est en général mesuré car il inclut les précédents.</p>
    <p>Il détermine la disponibilité d'un équipement à effectuer son travail dans le temps.</p>

    <p>On le calcule ainsi :</p>
  
	<div class="eq-c formule">
	D = 
		<div class="fraction">
			<span class="numerateur">MTBF</span>
			<span class="bar">/</span>
			<span class="denominateur">MTBF + MTTR</span>
		</div>
	</div>
    
	<p>&nbsp;</p>
	<p>&nbsp;</p>


