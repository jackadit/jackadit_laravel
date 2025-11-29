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


<h1>Méthodes d'estimation de la demande</h1>

<h2>Avant-propos</h2>

<p>Une prévision est toujours fausse ! L'objectif est de réduire l'incertitude par l'utilisation de méthodes.</p>

<blockquote>
<p> … Qui veut bien juger de l'avenir doit consulter les temps passés … </p>
<cite>Jacques-Bénigne Bossuet</cite>
</blockquote>

<p>Les méthodes reposent sur 2 postulats :</p>
<ul>
	<li>« L'avenir est contenu dans le passé… »</li>
	<li>« La nature ne fait pas de saut… »</li>
</ul>

<h3>Le cycle de vie du produit</h3>

<p>Les gestions de la demande d'un produit n'est pas la même en fonction du cycle de vie du produit.<p>

<p>L'innovation accrue et les délais réduits de mise sur le marché des nouveaux produits rendent le travail des prévisions compliqué.</p>
<p>On distingue 3 phases :</p>
<ul>
<li>Phase de lancement relativement lente.</li>
<li>Phase de croissance rapide.</li>
<li>Phase de saturation du marché et de légère décroissance.</li>
</ul>

<img src="/assets/img/qlio/dem/cycle_vie_produit.png" alt="Cycle de vie d'un produit" />

<div class="notice remarque">
<p><u>Remarque</u> :</p>
<p>Être vigilant lors du passage d'une phase à une autre !</p>
<p>Introduire la notion de cycle de vie dans la segmentation des produits.</p>
</div>

<h3>Les biseaux</h3>

<p>Le problème se complique lorsqu'un produit est remplacé par un nouveau.</p>
<p>Avec des cycles de mise en marché des nouveaux produits plus courts, nous avons de plus en plus de biseaux à gérer !</p>
<p>Il s'agit dès lors d'organiser l'épuisement du stock du produit remplacé, avant de commencer à distribuer le nouveau (revente des produits en fin de vie à des brokers, boutique d'usine, …).</p>
<p>Cela en travaillant en collaboration avec le marketing, la production et l'ingénierie afin de bien préparer la fin de vie du produit remplacé.</p>

<img src="/assets/img/qlio/dem/biseau_remplacement_produit.png" alt="Biseau de remplacement de produit" />

<h3>Les étapes d'une prévision</h3>

<ul>
<li>Préciser le but de la prévision.</li>
<li>Déterminer l'horizon de temps.</li>
<li>Choisir une méthode de prévision.</li>
<li>Recueillir des données pertinentes des sources fiables.</li>
<li>Établir un modèle de prévision.</li>
<li>Évaluer le modèle.</li>
<li>Implanter les résultats du modèle.</li>
<li>Entretenir le modèle de prévision.</li>
</ul>

<h3>Séries chronologiques.</h3>

<p>Une <span class="tag--info">série chronologique</span> est un ensemble d'observations faites à des moments précis, généralement à intervalles réguliers dans le temps.</p>

<h3>Séries chronologiques : les composantes.</h3>

<ul>
<li>La tendance (a).</li>
<li>Le niveau ou une valeur moyenne (b).</li>
<li>La variation saisonnière (F<sub>t</sub>).</li>
<li>La variation cyclique (C<sub>t</sub>).</li>
<li>La variation irrégulière ou composante aléatoire (&epsilon;<sub>t</sub>).</li>
</ul>

<h3>Forme des séries chronologiques.</h3>

<h4>En général</h4>
<p>y<sub>t</sub> = f(a, b, F<sub>t</sub>, C<sub>t</sub>, &epsilon;<sub>t</sub>)</p>

<h4>Modèle additif</h4>
<p>y<sub>t</sub> = a.t + b + F<sub>t</sub> + C<sub>t</sub> + &epsilon;<sub>t</sub></p>


<h4>Modèle multiplicatif</h4>
<p>y<sub>t</sub> = (a.t + b).F<sub>t</sub>.C<sub>t</sub>.&epsilon;<sub>t</sub></p>


<h4>Modèle mixte</h4>
<p>y<sub>t</sub> = (a.t + b).F<sub>t</sub> + C<sub>t</sub> + &epsilon;<sub>t</sub></p>


<h2>Modèles de prévision simples.</h2>

<p>Ce sont des méthodes basées sur la moyenne ou la moyenne mobile.</p>

<img src="/assets/img/qlio/dem/aleatoire.png" alt="Demande aléatoire" />

<img src="/assets/img/qlio/dem/tendance.png" alt="Graphique avec tendance">

<div class="notice remarque">
<p>Utilisé quand :</p>
<ul>
<li>la demande est stable, c'est-à-dire, il existe des variations autour d'un niveau moyen constant,</li>
<li>il n'y a quasiment pas de tendance ni de saisonnalité,</li>
<li>et les variations sont aléatoires.</li>
</ul>
</div>

<div class="notice info">
<p>Quand les demandes passées montrent des variations aléatoires :</p>
<ul>
<li>Ne devinez pas quels seront les effets.</li>
<li>Utilisez les prévisions en fonction de la demande moyenne.</li>
</ul>
</div>

<h3> Moyenne simple.</h3>

<div class="exercice">
<p><u>Exemple</u> :</p>

<table class="table">
<thead>
<tr>
<th>Jan</th>
<th>Fév</th>
<th>Mars</th>
<th>Avr</th>
<th>Mai</th>
<th>Juin</th>
<th>Juil</th>
<th>Août</th>
<th>Sep</th>
<th>Oct</th>
<th>Nov</th>
<th>Déc</th>
<th>Jan</th>
</tr>
</thead>
<tbody>
<tr>
<td>74</td>
<td>66</td>
<td>47</td>
<td>56</td>
<td>57</td>
<td>66</td>
<td>65</td>
<td>63</td>
<td>57</td>
<td>44</td>
<td>70</td>
<td>67</td>
<td>?</td>
</tr>
</tbody>
</table>
<p>Prévision janvier précédent : 74</p>
<p>Prévision mois précédent : 67</p>
<p>Moyenne : 61</p>

<p>La variation est aléatoire, et il n'existe pas de tendance à la hausse ou à la baisse et la somme des variations = 0
Il es préférable d'utiliser la moyenne 61 ! Ça neutralise l'impact de la variation aléatoire et la prévision est plus sûre.</p>
</div>

<p class="h3-like">Valeurs de la prévision</p>

<div class="exercice">
<p>Historique de consommation Produit A, et B / Semaine.</p>

<table class="table">
<thead>
<tr>
<th>Semaine</th>
<th>S1</th>
<th>S2</th>
<th>S3</th>
<th>S4</th>
<th>S5</th>
<th>S6</th>
<th>S7</th>
<th>S8</th>
<th>S9</th>
<th>Moyenne</th>
</tr>
</thead>
<tbody>
<tr>
<th>Produit A</th>
<td>300</td>
<td>200</td>
<td>0</td>
<td>5</td>
<td>75</td>
<td>290</td>
<td>30</td>
<td>0</td>
<td>0</td>
<td>?</td>
</tr>
<tr>
<th>Produit B</th>
<td>103</td>
<td>104</td>
<td>95</td>
<td>101</td>
<td>96</td>
<td>98</td>
<td>101</td>
<td>110</td>
<td>92</td>
<td>?</td>
</tr>
</tbody>
</table>
	<p>1. Quelle prévision pour la semaine S10 pour le produit A et B ?</p>
	<p>2. Quel est le point commun de ces deux séries ?</p>
</div>


<div class="notice exemple">
	<p><u>Réponses</u> :</p>
	<p>Les produits ont une moyenne identique, mais correspondent à des consommations très différentes.</p>
	<p>Les consommations hebdomadaires passées peuvent s'analyser avec une moyenne</p>
	<p>Mais la situation peut être différente selon la variabilité des consommations autour de cette moyenne.</p>
</div>

<div class="notice remarque">
<p><u>Remarques</u> :</p>
<p>La moyenne des consommations passées ne suffit pas et ne peut donc constituer une prévision.</p>
<p>Il faut ajouter d'autres éléments comme la dispersion, que l'on peut aussi appeler la fiabilité de la prévision.</p>
</div>

<h3>Moyenne mobile = Demande moyenne de périodes passées.</h3>

<p>Dans le cas d'une moyenne mobile, la prévision est obtenue en tenant compte des observations passées les plus pertinentes.</p>

<p class="notice remarque">On utilise la moyenne mobile lorsque le niveau moyen de la demande varie dans le temps. (Il n'y a toujours pas de tendance ni de saisonnalité.</p>

<table class="table w400p">
<thead>
<tr>
<th>Mois</th>
<th>Demande</th>
<th>Total Tri</th>
<th>Prévision</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>85</td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>78</td>
<td></td>
<td></td>
</tr>
<tr>
<td>3</td>
<td>80</td>
<td>243</td>
<td></td>
</tr>
<tr>
<td>4</td>
<td></td>
<td></td>
<td>81</td>
</tr>
</tbody>
</table>


<div class="formule">
Moyenne mobile = 
	<div class="fraction">
		<span class="numerateur">Σ demandes des mois 1 à 3</span>
		<span class="bar">/</span>
		<span class="denominateur">nombre de mois</span>
	</div>
	= 
	<div class="fraction">
		<span class="numerateur">243</span>
		<span class="bar">/</span>
		<span class="denominateur">3</span>
	</div>
	= 81
</div>

<p>Ou plus globalement</p>

<div class="formule">
	Prévision(p) = <div class="fraction">
	<span class="numerateur">1</span>
	<span class="bar">/</span>
	<span class="denominateur">n</span>
	</div> * &nbsp;&nbsp;
	<sup class="n">n</sup>
	<span class="xxl">Σ</span>
	<sub class="i">i=1</sub> Consommation (p-i)
</div>

<div class="exercice">
<p>Exemple :</p>

<p>Soit les données suivantes :</p>

<table class="table w200p">
<thead>
<tr>
<th>Mois</th>
<th>Demande</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>70</td>
</tr>
<tr>
<td>2</td>
<td>71</td>
</tr>
<tr>
<td>3</td>
<td>75</td>
</tr>
<tr>
<td>4</td>
<td>73</td>
</tr>
<tr>
<td>5</td>
<td>78</td>
</tr>
<tr>
<td>6</td>
<td>85</td>
</tr>
<tr>
<td>7</td>
<td>87</td>
</tr>
<tr>
<td>8</td>
<td>91</td>
</tr>
</tbody>
</table>

<p>La prévision d'ordre 3 sera donc de :</p>

	P<sub>9</sub> = 
	<div class="fraction">
		<span class="numerateur">1</span>
		<span class="bar">/</span>
		<span class="denominateur">3</span>
	</div> * <sup class="n">3</sup>
		<span class="xxl">Σ</span>
		<sub class="i">i=1</sub> 𝑥<sub>9−𝑖</sub> =  
		<div class="fraction">
		<span class="numerateur">1</span>
		<span class="bar">/</span>
		<span class="denominateur">3</span>
	</div>
	(𝑥<sub>8</sub> + 𝑥<sub>7</sub> + 𝑥<sub>6</sub>) = 
	<div class="fraction">
		<span class="numerateur">1</span>
		<span class="bar">/</span>
		<span class="denominateur">3</span>
	</div>
	(85 + 87 + 91) = 87,6  donc 88

<p>&nbsp;</p>
<p>Ou, si on veut faire ça avec un tableur, la prévision à partir de la moyenne mobile sur trois mois.</p>

<table class="table w400p">
<thead>
<tr>
<th>Mois</th>
<th>Demande</th>
<th>Total Tri</th>
<th>Prévision</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>70</td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>71</td>
<td></td>
<td></td>
</tr>
<tr>
<td>3</td>
<td>75</td>
<td>216</td>
<td></td>
</tr>
<tr>
<td>4</td>
<td>73</td>
<td>219</td>
<td>72</td>
</tr>
<tr>
<td>5</td>
<td>78</td>
<td>226</td>
<td>73</td>
</tr>
<tr>
<td>6</td>
<td>85</td>
<td>236</td>
<td>75</td>
</tr>
<tr>
<td>7</td>
<td>87</td>
<td>250</td>
<td>79</td>
</tr>
<tr>
<td>8</td>
<td>91</td>
<td>263</td>
<td>83</td>
</tr>
<tr>
<td>9</td>
<td></td>
<td></td>
<td>88</td>
</tr>
</tbody>
</table>

<p>Exemple : prévision à partir de la moyenne mobile sur six mois.</p>

<table class="table w400p">
<thead>
<tr>
<th>Mois</th>
<th>Demande</th>
<th>Total Tri</th>
<th>Prévision</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>70</td>
<td></td>
<td></td>
</tr>
<tr>
<td>2</td>
<td>71</td>
<td></td>
<td></td>
</tr>
<tr>
<td>3</td>
<td>75</td>
<td></td>
<td></td>
</tr>
<tr>
<td>4</td>
<td>73</td>
<td></td>
<td></td>
</tr>
<tr>
<td>5</td>
<td>78</td>
<td></td>
<td></td>
</tr>
<tr>
<td>6</td>
<td>85</td>
<td>435</td>
<td></td>
</tr>
<tr>
<td>7</td>
<td>87</td>
<td>452</td>
<td>73</td>
</tr>
<tr>
<td>8</td>
<td>91</td>
<td>472</td>
<td>75</td>
</tr>
<tr>
<td>9</td>
<td></td>
<td></td>
<td>79</td>
</tr>
</tbody>
</table>
</div>




<div class="ok">
    <p class="h3-like">Moyenne mobile : ce qu'il faut retenir</p>
<ul>
	<li>Retarde le développement de la tendance.</li>
	<li>Plus la prévision atteint tardivement les données plus le décalage est important.</li>
	<li>La prévision moyenne mobile sur 3 mois pourrait avoir réagi de manière excessive si l'évolution de la demande avait diminué.</li>
	<li>L'effet de lissage augmente quand le nombre de mois pris en compte augmente.</li>
	<li>La prévision moyenne mobile fonctionne le mieux quand la demande est stable avec des variations aléatoires ; elle filtre les variations aléatoires.</li>
</ul>
</div>


<div class="alert">
<p class="h3-like">Limites du modèle</p>

<p>Cette méthode s'applique surtout dans les cas suivants :</p>
<ul>
	<li>On fait de la prévision à court terme.</li>
	<li>Les fluctuations sont généralement peu importantes à court terme.</li>
	<li>Une certaine loi se dissimule dans les valeurs observées, affectée de fluctuation aléatoires.</li>
	<li>On veut prévoir une seule période.</li>
</ul>
</div>

<p>Cette méthode s'adapte difficilement s'il y a apparition d'une tendance, d'une saisonnalité ou d'un cycle.</p>

<p>Cependant, dans les situations de « court terme », le modèle de prévision peut souvent être considérée comme horizontal (loi aléatoire variant autour d'une moyenne), sans qu'on ne perde trop de précision.


<h2>Lissage des prévisions</h2>

<h3>Moyenne mobile pondérée</h3>

<p>On applique une pondération aux observations de façon à refléter leur pertinence.</p>

<div class="formule">
Prévision<sub>t</sub> =  &nbsp;&nbsp;
<sup class="n">n</sup>
<span class="xxl">Σ</span>
<sub class="i">i=1</sub> 𝛼<sub>i</sub> Prévision<sub>t-i</sub>
</div>

<p>Avec n = ordre de la moyenne mobile pondérée<br />
𝛼<sub>i</sub> = poids accordé aux n dernières demandes<br />
t = période pour laquelle on fait la prévision</p>

<p>Cela permet de moduler l'importance accordée aux diverses demandes.</p>

<div class="notice remarque">
<p>Il n'y a toujours pas de tendance ni de variation saisonnière.</p>
<p>La somme des n coefficients 𝛼 doit évidemment être égal à 1.</p>
</div>


<div class="exercice">
<p>Reprenons l'exemple précédent :</p>

<table class="table w200p">
<thead>
<tr>
<th>Mois</th>
<th>Demande</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>70</td>
</tr>
<tr>
<td>2</td>
<td>71</td>
</tr>
<tr>
<td>3</td>
<td>75</td>
</tr>
<tr>
<td>4</td>
<td>73</td>
</tr>
<tr>
<td>5</td>
<td>78</td>
</tr>
<tr>
<td>6</td>
<td>85</td>
</tr>
<tr>
<td>7</td>
<td>87</td>
</tr>
<tr>
<td>8</td>
<td>91</td>
</tr>
</tbody>
</table>


<p>Avec comme coefficents de pondération : 𝛼<sub>1</sub>=0,5;  𝛼<sub>2</sub>=0,3;  𝛼<sub>3</sub>=0,2</p>
<p>La moyenne mobile d'ordre 3 sera donc de :</p>

P<sub>9</sub> = &nbsp;&nbsp;<sup class="n">3</sup>
<span class="xxl">Σ</span>
<sub class="i">i=1</sub> 𝛼<sub>i</sub> 𝑥<sub>9−𝑖</sub> =  
𝛼<sub>1</sub> * 𝑥<sub>8</sub> + 𝛼<sub>2</sub> * 𝑥<sub>7</sub> + 𝛼<sub>3</sub> * 𝑥<sub>6</sub> = 0.5 * 91 + 0.3 * 87 + 0.2 * 85 = 88,6  donc 89
</div>

<h2>Prévision saisonnière</h2>

<img src="/assets/img/qlio/dem/saisonnier.png" alt="Saisonnalité" />

<p>Les coefficients saisonniers permettent de mesurer l'importance de la composante saisonnière, 
en indiquant le poids d'activité de la période considérée (un mois ou un trimestre) par rapport à une activité moyenne ou globale.</p>

<p>En cas de saisonnalité, la procédure de prévision est la suivante :</p>

<ol>
	<li>Calculer un index de saisonnalité de la demande pour chaque période pour établir la saisonnalité.</li>
	<li>Développer une prévision désaisonnalisée couvrant toutes les périodes.</li>
	<li>Développer une prévision saisonnalisée pour chaque période.</li>
</ol>

<p>Deux méthodes existent pour les calculer : la méthode des <strong>coefficients simples</strong> et la méthode des <strong>coefficients moyens</strong>.</p>


<h3>Saisonnalité avec les coefficients saisonniers simples</h3>

<p>Le coefficient saisonnier simple s'obtient par le rapport entre chaque période et le total général.</p>

<div class="formule">
𝑖𝑛𝑑𝑒𝑥 𝑠𝑎𝑖𝑠𝑜𝑛𝑛𝑎𝑙𝑖𝑡é  =
	<div class="fraction">
		<span class="numerateur">𝑇𝑜𝑡𝑎𝑙 𝑑𝑒 𝑙𝑎 𝑝é𝑟𝑖𝑜𝑑𝑒</span>
		<span class="bar">/</span>
		<span class="denominateur">𝑇𝑜𝑡𝑎𝑙 𝑑𝑒 𝑡𝑜𝑢𝑡𝑒𝑠 𝑙𝑒𝑠 𝑝é𝑟𝑖𝑜𝑑𝑒𝑠</span>
	</div>
</div>


<div class="exercice">

<p><u>Exemple</u> :</p>

<p class="h3-like">Étape 1 : index de saisonnalité</p>

<table class="table">
<thead>
<tr>
<th>Année</th>
<th colspan="4">Trimestres</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th></th>
</tr>
<tr>
<td>1</td>
<td>60</td>
<td>90</td>
<td>280</td>
<td>460</td>
<td>890</td>
</tr>
<tr>
<td>2</td>
<td>70</td>
<td>90</td>
<td>310</td>
<td>500</td>
<td>970</td>
</tr>
<tr>
<td>3</td>
<td>75</td>
<td>105</td>
<td>340</td>
<td>550</td>
<td>1070</td>
</tr>
<tr>
<td>Total</td>
<td>215</td>
<td>285</td>
<td>930</td>
<td>1510</td>
<td>2930</td>
</tr>
<tr>
<td>Coef simple</td>
<td>215/2930=0.07</td>
<td>285/2930=0.10</td>
<td>930/2930=0.32</td>
<td>1510/2930=0.51</td>
<td>&sum; = 1</td>
</tr>
</tbody>
</table>

<p class="h3-like">Étape 2 : Désaisonnaliser la prévision</p>

<p>Faire une prévision annuelle pour l'année suivante avec une des méthodes qui seront développées dans le chapitre suivant.</p>
<p>Ici, on va supposer qu'on a une prévision de 1200.</p>

<p class="h3-like">Étape 3 : Prévision saisonnalisée</p>

<div class="formule">
Prévision trimestrielle = index saisonnalité * demande désaisonnalisée
</div>

<pre>
Demande prévue au 1er  trimestre = 0.07 * 1200 =   84
Demande prévue au 2ème trimestre = 0,10 * 1200 =  120
Demande prévue au 3ème trimestre = 0,32 * 1200 =  384
Demande prévue au 4ème trimestre = 0,51 * 1200 =  612
                         Demande totale prévue = 1200
</pre>

</div>

<h3>Saisonnalité avec les coefficients saisonniers moyens</h3>

<div class="formule">
𝑖𝑛𝑑𝑒𝑥 𝑠𝑎𝑖𝑠𝑜𝑛𝑛𝑎𝑙𝑖𝑡é  =
	<div class="fraction">
		<span class="numerateur">𝑚𝑜𝑦𝑒𝑛𝑛𝑒 𝑑𝑒 𝑙𝑎 𝑑𝑒𝑚𝑎𝑛𝑑𝑒 𝑑𝑒 𝑙𝑎 𝑝é𝑟𝑖𝑜𝑑𝑒</span>
		<span class="bar">/</span>
		<span class="denominateur">𝑑𝑒𝑚𝑎𝑛𝑑𝑒 𝑚𝑜𝑦𝑒𝑛𝑛𝑒 𝑝𝑜𝑢𝑟 𝑡𝑜𝑢𝑡𝑒𝑠 𝑙𝑒𝑠 𝑝é𝑟𝑖𝑜𝑑𝑒𝑠</span>
	</div>
</div>

<p class="notice remarque">L'indice de saisonnalité indique le degré de variation de la moyenne de chaque trimestre sur le cycle annuel.</p>


<div class="exercice">

<p><u>Exemple</u> :</p>

<p class="h3-like">Étape 1 : index de saisonnalité</p>

<table class="table">
<thead>
<tr>
<th>Année</th>
<th colspan="4">Trimestres</th>
<th>Moyenne</th>
</tr>
</thead>
<tbody>
<tr>
<th></th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th></th>
</tr>
<tr>
<td>1</td>
<td>60</td>
<td>90</td>
<td>280</td>
<td>460</td>
<td>222.5</td>
</tr>
<tr>
<td>2</td>
<td>70</td>
<td>90</td>
<td>310</td>
<td>500</td>
<td>242.5</td>
</tr>
<tr>
<td>3</td>
<td>75</td>
<td>105</td>
<td>340</td>
<td>550</td>
<td>267.5</td>
</tr>
<tr>
<td>Moyenne</td>
<td>71.6</td>
<td>95</td>
<td>310</td>
<td>503.3</td>
<td>244.2</td>
</tr>
<tr>
<td>Coef simple</td>
<td>71.6/244.2=0.29</td>
<td>95/244.2=0.38</td>
<td>310/244.2=1.27</td>
<td>503.3/244.2=2.06</td>
<td>&sum; = 4</td>
</tr>
</tbody>
</table>

<p class="h3-like">Étape 2 : Désaisonnaliser la prévision</p>

<p>Faire une prévision pour l'année suivante (on suppose ici 1200).</p>
<p>Désaisonnaliser la prévision = Distribuer la prévision annuelle uniformément sur les 4 trimestres.</p>

<div class="formule">Demande désaisonnalisée = 
	<div class="fraction">
		<span class="numerateur">𝑃𝑟é𝑣𝑖𝑠𝑖𝑜𝑛 𝑎𝑛𝑛𝑢𝑒𝑙𝑙𝑒</span>
		<span class="bar">/</span>
		<span class="denominateur">𝑛𝑜𝑚𝑏𝑟𝑒 𝑑𝑒 𝑝é𝑟𝑖𝑜𝑑𝑒𝑠</span>
	</div> =
	<div class="fraction">
		<span class="numerateur">1200</span>
		<span class="bar">/</span>
		<span class="denominateur">4</span>
	</div> = 300
</div>

<p class="h3-like">Étape 3 : Prévision saisonnalisée</p>

<div class="formule">
Prévision trimestrielle = index saisonnalité * demande désaisonnalisée
</div>

<pre>
Demande prévue au 1er  trimestre = 0.29 * 300 =   87
Demande prévue au 2ème trimestre = 0,38 * 300 =  114
Demande prévue au 3ème trimestre = 1.27 * 300 =  381
Demande prévue au 4ème trimestre = 2.06 * 300 =  618
                        Demande totale prévue = 1200
</pre>
</div>

<h2>Prévision saisonnière avec tendance</h2>

<h3>Saisonnalité additive</h3>

<img src="/assets/img/qlio/dem/saisonnalite_additif.png" alt="Saisonnalité additive" />

<p>C'est le modèle adapté lorsque la saisonnalité s'additionne à la tendance.</p>

<p>y<sub>t</sub> = (a.t + b) + F<sub>t</sub></p>


<h3>Saisonnalité multiplicative</h3>

<img src="/assets/img/qlio/dem/saisonnalite_multiplicatif.png" alt="Saisonnalité multiplicative" />

<p>C'est le modèle adapté lorsque la saisonnalité est proportionnelle à la tendance.</p>

<p>y<sub>t</sub> = (a.t + b).F<sub>t</sub></p>

<h3>Méthode de prévision avec saisonnalité et tendance</h3>

<h4>1. Lisser l'historique de données (le passé)</h4>

<p>On utilise la moyenne mobile (MM<sub>t</sub>) pour effectuer le lissage.</p>

<p class="notice remarque">L'ordre de la moyenne mobile est donné par les périodes de répétition de la saisonnalité (ex : 4 trimestres, 12 mois).</p>

<h4>2. Calculer les coefficients saisonniers (S'<sub>t</sub>)</h4>

<ul>
<li>Méthode additive : <span class="formule">S'<sub>t</sub> = D<sub>t</sub> - MM<sub>t</sub></span></li>
<li>Méthode multiplicative : <span class="formule">S'<sub>t</sub> = D<sub>t</sub> / MM<sub>t</sub></span></li>
</ul>

<p>Avec S'<sub>t</sub> : Coefficient saisonnier</p>
<p>Avec D<sub>t</sub> : Demande réelle</p>

<h4>3. Normaliser les coefficients (S<sub>t</sub>)</h4>

<p>On fait la moyenne des coefficients pour chaque saison : S<sub>t</sub></p>
<ul>
	<li>Méthode additive : Soustraire la moyenne de ces moyennes à la moyenne saisionnière.</li>
	<li>Méthode multiplicative : Faire le produit en croix avec le nombre de saisons et la somme de ces moyennes.</li>
</ul>

<h4>4. Désaisonnaliser (CVS<sub>t</sub>)</h4>

<ul>
<li>Méthode additive : <span class="formule">CVS<sub>t</sub> = D<sub>t</sub> - S<sub>t</sub></span></li>
<li>Méthode multiplicative : <span class="formule">CVS<sub>t</sub> = D<sub>t</sub> / S<sub>t</sub></span></li>
</ul>

<h4>5. Calculer la tendance (T<sub>t</sub>)</h4>

<p>Le calcul de tendance se fait sur "CVS<sub>t</sub>" (y) par rapport à "t" (x).</p>

<h4>6. Calculer la prévision (P<sub>t</sub>) par application de la tendance et de la saisonnalité.</h4>

<ul>
<li>Méthode additive : <span class="formule">P<sub>t</sub> = T<sub>t</sub> + S<sub>t</sub></span></li>
<li>Méthode multiplicative : <span class="formule">P<sub>t</sub> = T<sub>t</sub> * S<sub>t</sub></span></li>
</ul>

<h4>7. Calculer l'erreur de prévision e<sub>t</sub></h4>

<p>On analyse l'erreur pour tester la qualité de la prévision sur les périodes passées.</p>

<p class="formule">e<sub>t</sub> = P<sub>t</sub> - D<sub>t</sub></p>


