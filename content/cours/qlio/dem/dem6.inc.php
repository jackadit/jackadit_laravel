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


<h1>Lissages exponentiels</h1>


<h2>Les différents lissages exponentiels</h2>

<p class="h3-like">Introduction</p>
<p>Les méthodes de lissage exponentiel sont des méthodes de prévision à court terme. Elles supposent que le phénomène étudié ne dépend que de ses valeurs passées.</p>
<p>Ce sont des méthodes d'extrapolation qui donnent un poids prépondérant aux valeurs récentes : les coefficients de pondération décroissent exponentiellement en remontant dans le temps.;</p>
<p>Chacune des méthodes dépend d'un ou plusieurs paramètres (paramètres de lissage) compris entre 0 et 1.</p>
<p>Le poids de chacune des valeurs passées se calcule à partir de ces paramètres.</p>

<p class="h3-like">Historique</p>
<p>Les méthodes de prévision se sont développées au cours de la seconde moitié du XXe siècle.</p>
<p>La méthode de lissage exponentiel simple a été introduite par Brown en 1962.</p>
<p>Elle a ensuite été généralisée par Holt et Winters.</p>
<p>Ces méthodes sont largement diffusées et utilisées. Leur succès est dû à la fois à leur simplicité et à la qualité des prévisions obtenues.</p>

<h3>Les différentes méthodes</h3>

<table class="table">
	<thead>
		<tr>
			<th>Saisonnalité</br>Tendance</th>
			<th>NON</th>
			<th>OUI</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>NON</th>
			<td>Lissage Exponentiel simple</td>
			<td>Méthode de WINTERS</td>
		</tr>
		<tr>
			<th>OUI</th>
			<td>Méthode de HOLT</td>
			<td>Méthode de WINTERS</td>
		</tr>
	</tbody>
</table>

<p>Le lissage exponentiel simple dépend d'un seul paramètre de lissage.</p>
<p>Le lissage de Holt dépend de deux paramètres : l'un relatif au niveau, l'autre à la tendance.</p>
<p>Le lissage de Winters dépend de trois paramètres : l'un relatif au niveau, un autre relatif à la tendance, et le dernier à la saisonnalité.</p>

<h3>Autres méthodes :</h3>
<p>D'autres méthodes de prévision reposant sur des hypothèses probabilistes ont été développées depuis les années 1970.</p>
<p>Elles reposent sur une première approche due à Box et Jenkins, qui a fait ensuite l'objet de nombreuses extensions utilisées notamment dans des modèles complexes de finance.</p>



<h2> Lissage exponentiel simple</h2>

<p>La technique du <span class="tag--info">lissage exponentiel</span> est similaire à la moyenne mobile mais requiert moins de données et est plus facile à calculer.</p>

<ol>
<li>Prendre l'ancienne prévision et la demande pour la dernière période.</li>
<li>Assigner un facteur de pondération (ou constante de lissage α, alpha) à la dernière demande par rapport à la prévision.</li>
<li>Calculer la moyenne pondérée des prévisions et de la dernière demande.</li>
</ol>

<p class="formule">Prévision<sub>t</sub> = α * Demande<sub>t-1</sub> + (1‐ α) * Prévision<sub>t‐1</sub></p>

<h4>Démonstration mathématique :</h4>
<ul>
	<li>P = Prévision</li>
	<li>D = Demande</li>
	<li>t = période</li>
</ul>

<p>P<sub>t+1</sub> = α D<sub>t</sub> + (1‐ α) P<sub>t</sub></p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + (1‐ α) [ α * D<sub>t-1</sub> + (1‐ α) P<sub>t‐1</sub> ]</p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + α(1‐ α) D<sub>t-1</sub> + (1‐ α)² P<sub>t‐1</sub></p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + α(1‐ α) D<sub>t-1</sub> + (1‐ α)² [ α D<sub>t-2</sub> + (1‐ α) P<sub>t‐2</sub> ]</p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + α(1‐ α) D<sub>t-1</sub> + α (1‐ α)² D<sub>t-2</sub> + (1‐ α)<sup>3</sup> P<sub>t‐2</sub></p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + α(1‐ α) D<sub>t-1</sub> + α (1‐ α)² D<sub>t-2</sub> + (1‐ α)<sup>3</sup> [ α D<sub>t-3</sub> + (1‐ α) P<sub>t‐3</sub> ]</p>
<p>P<sub>t+1</sub> = α D<sub>t</sub> + α(1‐ α) D<sub>t-1</sub> + α (1‐ α)² D<sub>t-2</sub> + α (1‐ α)<sup>3</sup> D<sub>t-3</sub> + ... + α (1‐ α)<sup>t-1</sup> D<sub>1</sub> + (1‐ α)<sup>t</sup> D<sub>0</sub></p>

<P>Cette présentation permet de comprendre pourquoi on appelle ce lissage EXPONENTIEL (décroissance exponentielle des pondérations en remontant dans le temps).</P>

<p class="notice exemple">En choisissant α = 0,2, la dernière demande connue est donc pondérée à 20 %, la précédente à 0,2 × 0,8 = 16 %, celle d’avant à 12,8 % et ainsi de suite jusqu’au début de la série.</p>



<h4>Autre formulation :</h4>
<p class="formule">P<sub>t</sub> = α * e<sub>t</sub> + P<sub>t‐1</sub></p>

<p>Avec e<sub>t</sub> = erreur de prévision = D<sub>t-1</sub> - P<sub>t-1</sub></p>



<div class="notice remarque">
<p><u>Remarque</u> :</p>
<p>Le choix de α requiert une analyse du modèle de la demande et du jugement.</p>
<p>En pratique le coefficient sera plus proche de 1 lors de fortes fluctuations, et proche de 0 lors de consommations stables.</p>
<p>Un grand α dans cette technique a un effet comparable à un faible nombre d'observations incluses dans une moyenne mobile, et inversement.</p>
<p>Le succès de cette méthode réside dans le fait qu'il ne requiert que peu de données et la vérification du comportement du modèle est facilement testable.</p>
</div>


<div class="exercice">
<p><u>Exemple</u> :</p>
<p>Si α=0,8 cela donnera plus de poids à la dernière demande (1-0,8=0,2), ce qui sera approprié si on a une tendance à la hausse ou à la baisse.</p>
<p>A - Prévision exponentielle lissée pour mars :</p>
	Février : demande effective = 110; prévision = 100; 𝛼 = 0.8
	Prévision mars = 0.8 * 110 + 0.2 * 100 = 88 + 20 = 108

<p>B - Prévision exponentielle lissée pour avril :</p>
	Mars : demande effective = 120
	Prévision avril = 0.8 * 120 + 0.2 * 108 = 96 + 21.6 = 117.6
</div>

<div class="notice alert">
<p>Limites du modèle</p>
<ul>
	<li>Cette technique de prévision ne peut être appliquée qu'à un horizon t + 1.</li>
	<li>Elle n'est pas appropriée s'il y a une tendance, une saisonnalité ou un cycle.</li>
	<li>Il n'y a pas de règle pour le choix de la valeur de 𝛼.</li>
</ul>
</div>

<div class="notice remarque">
<p>Cette technique est très utilisée en gestion de stocks quand il existe un très grand nombre de références.</p>
<p>En revanche, en prévision de la demande, on lui préfère le lissage exponentiel double, et surtout le lissage de Holt et le lissage de Winters. </p>
<p>Elle est plus réactive que les moyennes mobiles ou les modèles utilisant la régression car elle prend rapidement en compte une modification de tendance.</p>
</div>

<div class="notice ok">
<p>Prévision initiale</p>
<p>En raison de la formule récurrente du lissage exponentiel simple, on est obligé de CHOISIR une valeur à partir de laquelle les prévisions seront effectuées.</p>
<p>Cette valeur a peu d’importance si la série est longue. On prend souvent la moyenne des deux ou trois premières observations mais ce choix reste arbitraire.</p>
<p>Les logiciels non spécialisés en prévision, comme par exemple l'utilitaire d'analyse d'Excel, utilisent la première valeur.</p>
</div>


<h2>Lissage exponentiel double (modèle de HOLT)</h2>

<p class="notice remarque">À utiliser lorsqu'on a un historique de valeurs avec tendance et pas de saisonnalité.</p>

<p>Le <span class="tag--info">lissage exponentiel double</span> permet de réaliser des prévisions à plus de t + 1.</p>

<div class="notice remarque">
<p>Il est important de noter que le moindre écart est pris en compte et il est amplifié à chaque recul de l'horizon de prévision.</p>
<p>Le lissage exponentiel double n'est donc valable que dans un contexte de court terme.</p>
</div>


<p>Lorsque le niveau moyen de la demande change (croissance ou décroissance), le système de prévision simple est toujours en retard (puisqu'il se fonde sur les demandes passées).</p>

<p>D'où la nécessité d'effectuer une correction sur le niveau et sur la tendance.</p>

<p>Si le niveau et la tendance estimés au temps t-1 sont respectivement L<sub>t‑1</sub> et T<sub>t-1</sub>, alors la prévision pour P<sub>t</sub> qui aurait été faite au temps t-1 est égale à :

<p class="formule"> P<sub>t</sub> = L<sub>t-1</sub> + T<sub>t-1</sub></p>


<h3>Calcul du niveau</h3>

<p>Lorsque la valeur réelle est observée, l'estimation mise à jour du niveau est calculée de manière récursive par interpolation entre la demande et sa prévision.</p>

<p>C'est une moyenne pondérée entre deux estimations de constantes au moment où l'on établit la prévision.</p>

<p>On va déterminer un coefficient 𝛼 (compris entre 0 et 1) et on l'applique à la dernière demande D<sub>t</sub> et ensuite on applique la pondération (1-𝛼) à la dernière prévision P<sub>t</sub> :</p>

<div>Niveau lissé : <div class="formule">L<sub>t</sub> = 𝛼 D<sub>t</sub> + (1-𝛼) P<sub>t</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> le niveau lissé<br />
D<sub>t</sub> la demande réelle <br />
P<sub>t</sub> la prévision lissée <br />
et 𝛼 le coefficient de lissage du niveau de la série</p>

<h3>Calcul de la tendance</h3>

<p>La tendance est également une moyenne pondérée entre deux estimations.</p>

<p>On va déterminer un coefficient β (compris entre 0 et 1) et on l'applique à la dernière estimation de tendance observée, c'est-à-dire à la différence des deux niveaux en t et t-1.</p>
<p>Puis on applique la pondération (1 - β) à l'estimation de tendance précédente.</p>

<div>Tendance lissée : <div class="formule">T<sub>t</sub> = β (L<sub>t</sub> – L<sub>t-1</sub>) + (1- β)T<sub>t-1</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> et L<sub>t-1</sub> les niveaux lissées<br />
T<sub>t-1</sub> la précédente tendance lissée <br />
et β le coefficient de lissage de la tendance</p>

<h3>Prévision lissée</h3>

<p>Le modèle de HOLT permet donc une prévision linéaire sous forme de fonction affine.</p>

<p>Les dernières données étant les plus importantes, conformément au principe du lissage exponentiel, les prévisions pour le futur proche qui sont faites à partir du temps t sont obtenues par extrapolation du niveau et de la tendance actualisés :</p>
<div>On corrige la prévision : <div class="formule">P<sub>t+k</sub> = L<sub>t</sub> + k T<sub>t</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> le niveau lissé<br />
T<sub>t</sub> la tendance lissée <br />
et k = horizon de la prévision calculée à l'instant t</p>

<h3>Comment choisir les coefficients de lissage ?</h3>

<p>Les coefficients de lissage permettent de donner plus ou moins d'importance aux dernières valeurs par rapport à l'ensemble de la série.</p>
<p>Ainsi, si le coefficient est grand, on s'adapate plus vite au changement de niveau.</p>
<div class="ok">
<p>Donc en pratique, le coefficient sera plus proche de 1 lorsque les fluctuations seront fortes, et proche de 0 lorsque la consommation sera stable.</p>
</div>



<h2>Lissage exponentiel triple (modèle de WINTERS)</h2>

<p class="notice remarque">À utiliser lorsqu'on a un historique de valeurs avec tendance et une saisonnalité.</p>

<p>La logique du modèle LES de Holt peut être étendue pour estimer de manière récursive les indices saisonniers variant dans le temps ainsi que le niveau et la tendance.</p>

<h3>Cas d'une série à tendance additive</h3>

<p>On suppose que la série D<sub>t</sub> peut s'écrire comme la somme d'un niveau L<sub>t</sub>, d'une tendance T<sub>t</sub> et d'un facteur saisonnier S<sub>t</sub>.</p>
<p>Les coefficients de lissage sont α, β et γ, compris entre 0 et 1.</p>

<h4>Calcul du niveau</h4>

<ul>
	<li>Soit L<sub>t</sub>, T<sub>t</sub> et S<sub>t</sub> le niveau estimé, la tendance et l'indice saisonnier à la période t.</li>
	<li>Soit s le nombre de périodes dans une saison.</li>
	<li>D<sub>t</sub> la demande réelle.</li>
	<li>Soit 𝛼, β et γ des constantes de lissage distincts, compris entre 0 et 1, pour le niveau, la tendance et la saisonnalité</li>
</ul>

<div>Niveau lissé : 
	<div class="formule">
		L<sub>t</sub> = 𝛼 (D<sub>t</sub> - S<sub>t-s</sub>) + (1-𝛼) (L<sub>t-1</sub> + T<sub>t-1</sub>)</div>
	</div>

<div class="notice remarque">
	(D<sub>t</sub> - S<sub>t-s</sub>) représente la valeur désaisonnalisée de D<sub>t</sub>.
	<br />
	L<sub>t-1</sub> + T<sub>t-1</sub> représente la prévision de L<sub>t</sub> faite à la période t-1.
</div>

<h4>Calcul de la tendance</h4>

<div>Tendance lissée : <div class="formule">T<sub>t</sub> = β (L<sub>t</sub> – L<sub>t-1</sub>) + (1- β)T<sub>t-1</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> et L<sub>t-1</sub> les niveaux lissées<br />
T<sub>t-1</sub> la précédente tendance lissée <br />
et β le coefficient de lissage de la tendance</p>

<p class="notice remarque">L<sub>t</sub> – L<sub>t-1</sub> représente le changement de niveau juste observé.<br/>
T<sub>t-1</sub> représente une estimation de la tendance précédente.</p>

<h4>Calcul de la saisonnalité</h4>

<div>Saisonnalité lissée :
	<div class="formule">S<sub>t</sub> = γ (D<sub>t</sub> - L<sub>t</sub>) + (1-γ) S<sub>t-s</sub></div>		
</div>

<div class="notice remarque">
	D<sub>t</sub> - L<sub>t</sub> représente le "différence à la moyenne mobile" de la donnée actuelle.<br/>
	S<sub>t-s</sub> représente la dernière estimation de l'indice saisonnier pour la même saison.
</div>

<h4>Calcul de la prévision lissée</h4>

<div>On corrige la prévision : <div class="formule">P<sub>t+h</sub> = L<sub>t</sub> + h T<sub>t</sub> + S<sub>t-s+h</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> le niveau lissé<br />
T<sub>t</sub> la tendance lissée <br />
et h = horizon de la prévision calculée à l'instant t<br />
</p>


<p class="notice remarque">L<sub>t</sub> + h T<sub>t</sub> représente l'extrapolation du niveau et de la tendance à partir de la période t.<br/>
	S<sub>t-s+h</sub> représente une estimation la plus récente de l'indice saisonnier pour la période h dans le futur.</p>

<h3>Cas d'une série à tendance multiplicative</h3>

<p>On suppose que la série D<sub>t</sub> peut s'écrire comme le produit d'un niveau L<sub>t</sub>, d'une tendance T<sub>t</sub> et d'un facteur saisonnier S<sub>t</sub>.</p>
<p>Les paramètres de lissage sont α, β et γ, compris entre 0 et 1.</p>

<h4>Calcul du niveau</h4>

<ul>
	<li>Soit L<sub>t</sub> , T<sub>t</sub> et S<sub>t</sub> le niveau estimé, la tendance et l'indice saisonnier à la période t.</li>
	<li>Soit s le nombre de périodes dans une saison.</li>
	<li>D<sub>t</sub> la demande réelle.</li>
	<li>Soit 𝛼, β et γ des constantes de lissage distincts, compris entre 0 et 1, pour le niveau, la tendance et la saisonnalité</li>
</ul>

<div>Niveau lissé : 
	<div class="formule">
		L<sub>t</sub> = 𝛼 
		<div class="fraction">
			<span class="numerateur">D<sub>t</sub></span>
			<span class="bar">/</span>
			<span class="denominateur">S<sub>t-s</sub></span>
		</div>
		 + (1-𝛼) (L<sub>t-1</sub> + T<sub>t-1</sub>)</div>
</div>

<div class="notice remarque">
	<div class="fraction">
		<span class="numerateur">D<sub>t</sub></span>
		<span class="bar">/</span>
		<span class="denominateur">S<sub>t-s</sub></span>
	</div> représente la valeur désaisonnalisée de D<sub>t</sub>.
		 <br />
		 L<sub>t-1</sub> * T<sub>t-1</sub> représente la prévision de Lt faite à la période t-1.
</div>

<h4>Calcul de la tendance</h4>

<div>Tendance lissée : <div class="formule">T<sub>t</sub> = β (L<sub>t</sub> – L<sub>t-1</sub>) + (1- β) T<sub>t-1</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> et L<sub>t-1</sub> les niveaux lissées<br />
T<sub>t-1</sub> la précédente tendance lissée <br />
et β le coefficient de lissage de la tendance</p>

<div class="notice remarque">
<div class="fraction">
			<span class="numerateur">L<sub>t</sub></span>
			<span class="bar">/</span>
			<span class="denominateur">L<sub>t-1</sub></span>
		</div> représente le changement de niveau juste observé.<br/>
T<sub>t-1</sub> représente une estimation de la tendance précédente.
</div>

<h4>Calcul de la saisonnalité</h4>

<div>Saisonnalité lissée : 
	<div class="formule">
		S<sub>t</sub> = γ 
		<div class="fraction">
			<span class="numerateur">D<sub>t</sub></span>
			<span class="bar">/</span>
			<span class="denominateur">L<sub>t</sub></span>
		</div>
		 + (1-γ) S<sub>t-s</sub></div>
</div>

<div class="notice remarque"><div class="fraction">
			<span class="numerateur">D<sub>t</sub></span>
			<span class="bar">/</span>
			<span class="denominateur">L<sub>t</sub></span>
		</div> représente le "rapport à la moyenne mobile" de la donnée actuelle.<br/>
	S<sub>t-s</sub> représente la dernière estimation de l'indice saisonnier pour la même saison.
</div>

<h4>Calcul de la prévision lissée</h4>

<div>On corrige la prévision : <div class="formule">P<sub>t+h</sub> = (L<sub>t</sub> + h T<sub>t</sub>) * S<sub>t-s+h</sub></div></div>

<p>Avec</p>
<p>L<sub>t</sub> le niveau lissé<br />
T<sub>t</sub> la tendance lissée <br />
et h = horizon de la prévision calculée à l'instant t<br />
</p>


<p class="notice remarque">L<sub>t</sub> + k T<sub>t</sub> représente l'extrapolation du niveau et de la tendance à partir de la période t.<br/>
	S<sub>t-s+k</sub> représente une estimation la plus récente de l'indice saisonnier pour la kième période dans le futur.</p>


<h3>Choix des valeurs initiales</h3>

<p>Il existe plusieurs méthodes pour choisir ces valeurs initiales, par exemple :</p>

<ul>
	<li>Utiliser les premières observations de la série comme valeurs initiales pour le niveau et la tendance, et calculer les valeurs initiales pour la saisonnalité à partir des moyennes des saisons.</li>
	<li>Utiliser une régression linéaire pour estimer le niveau et la tendance à partir des premières observations, et calculer les valeurs initiales pour la saisonnalité à partir des résidus de la régression.</li>
	<li>Utiliser une méthode d'optimisation numérique pour trouver les valeurs initiales qui minimisent l'erreur de prévision sur un ensemble d'apprentissage.</li>
</ul>

<p>Ces méthodes ont chacune leurs avantages et leurs inconvénients, et il n'existe pas de règle universelle pour choisir les meilleures valeurs initiales.</p>
<p>Il faut donc tester différentes possibilités et comparer les performances des prévisions obtenues avec la méthode de Holt-Winters.</p>

<p>Voici un exemple de choix pour des données annuelles sur n années </p>

<div>Pente :
	<div class="formule">
		D<sub>0</sub> =  
		<div class="fraction">
			<span class="numerateur">m<sub>n</sub> - m<sub>1</sub></span>
			<span class="bar">/</span>
			<span class="denominateur">(n-1) P</span>
		</div>
	</div>
</div>

<p>m<sub>n</sub> = moyenne sur l'année n<br />
n = le nombre d'années<br />
P = le nombre de périodes
</p>

<div>Niveau :
	<div class="formule">
		 =  m<sub>1</sub> - 
				<div class="fraction">
					<span class="numerateur">P</span>
					<span class="bar">/</span>
					<span class="denominateur">2</span>
				</div> * pente
	</div>
</div>


<p>Combinaison de deux corrections :</p>
<ul>
	<li>Correction de tendance.</li>
	<li>Correction de saisonnalité.</li>
</ul>

<p>Dans ce cas, la méthodologie est la suivante :</p>
<ul>
	<li>Désaisonnaliser la dernière demande en divisant par le coefficient saisonnier correspondant.</li>
	<li>Effectuer les calculs de prévision selon l'une des méthodes vues précédemment.</li>
	<li>Corriger si nécessaire la tendance</li>
</ul>
<p>Soit Dd la demande désaisonnalisée, D<sub>t</sub> la demande sur la période t et I<sub>t</sub> l'indice de saisonnalité correspondant à la période.</p>

<div>1. Demande désaisonnalisée : 
		<div class="formule">
		Dd<sub>t</sub> = 
			<div class="fraction">
				<span class="numerateur">D<sub>t</sub></span>
				<span class="bar">/</span>
				<span class="denominateur">I<sub>t</sub></span>
			</div>
		</div>
		 avec 
		 <div class="formule">
		 I<sub>t</sub> = 
			<div class="fraction">
				<span class="numerateur">D<sub>t-1</sub></span>
				<span class="bar">/</span>
				<span class="denominateur">Demande moyenne par période</span>
			</div>
		</div>
</div>



<div>2. Prévision sur demande désaisonnalisée : <div class="formule">Pd<sub>t+1</sub> = α.Dd<sub>t</sub> + (1- α)Pd<sub>t</sub></div></div>

<div>3. Resaisonnalisation de la prévision : <div class="formule">P<sub>t+1</sub> = Pd<sub>t+1</sub> * I<sub>t+1</sub></div></div>


<h2> Lissage exponentiel triple (modèle de BROWN)</h2>

<p>En considérant la demande D, le modèle de Brown est obtenu en définissant les données initiales des deux séries lissées égales à la demande initiale :</p>

<p>S'<sub>0</sub> = S"<sub>0</sub> = D<sub>0</sub></p>

<p>Avec</p>
<p>S' = la série lissée obtenue en appliquant un lissage exponentiel simple à la série D. C'est-à-dire que la valeur de S' à la période t est donnée par :</p>

<p class="formule">S'<sub>t</sub> = α D<sub>t</sub> + (1-α) S'<sub>t-1</sub></p>


<p>S" = la série doublement lissée obtenue en appliquant un lissage exponentiel simple (utilisant le même α ) à la série S' :</p>

<p class="formule">S"<sub>t</sub> = α S'<sub>t</sub> + (1-α) S"<sub>t-1</sub></p>


<p>La prévision P<sub>t+k</sub>, pour tout k>1, est donnée par :</p>

<p>P<sub>t</sub> = L<sub>t</sub> + k T<sub>t</sub></p>

<p>Avec</p>
<p class="formule">L<sub>t</sub> = 2 S'<sub>t</sub> - S"<sub>t</sub></p>

<p>Le niveau estimé (la valeur lissée) à la période t pour t>1.</p>

<div class="formule">
	T<sub>t</sub> = 
	<div class="fraction">
		<span class="numerateur">α</span>
		<span class="bar">/</span>
		<span class="denominateur">(1-α)</span>
	</div> (S'<sub>t</sub> - S"<sub>t</sub>)
</div>

<p>L'estimation de la tendance T à la période t.</p>



<p class="h3-like">Ce qu'il faut retenir...</p>
<div class="ok">
<ul>
<li>La prévision est la base de la plupart des décisions de gestion.</li>
<li>Une prévision parfaite n'existe pas même si cela reste un objectif.</li>
<li>La flexibilité du système peut compenser les erreurs de prévisions.</li>
<li>Bien souvent, les modèles simples donnent des résultats satisfaisants.</li>
<li>Il faut suivre la précision du modèle de prévision.</li>
</ul>
</div>



