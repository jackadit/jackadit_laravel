<?php
/**
 * BUT : Introduction à la gestion de la demande
 *
 * @copyright Copyright jackadit.com 2014
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



<h1>Méthodes d'ajustement linéaire</h1>


<h2>Méthode des points extrêmes</h2>

<p>La méthode consiste à calculer l'équation de la droite d'ajustement qui passe par le premier point et le dernier point d'une série de coordonnées (x, y).</p>
<p>Elle s'applique de préférence lorsque l'on constate que la variable, par exemple le nb de commande, augmente ou diminue de façon très régulière en fonction de l'autre variable, par exemple, le temps.</p>
<p>C'est la méthode la plus simple à utiliser.</p>

<div class="exercice">
<table class="table">
<thead>
<tr>
<th>Année</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
<th>6</th>
</tr>
</thead>
<tbody>
<tr>
<td>Valeur</td>
<td>12</td>
<td>18</td>
<td>30</td>
<td>51</td>
<td>66</td>
<td>75</td>
</tr>
</tbody>
</table>

<p>Le premier point de la série a pour coordonnées (1 ; 12) et le dernier a pour coordonnées (6 ; 75).</p>
<p>Nous allons donc pouvoir calculer l'équation de la droite passant par ces deux points.</p>
<p>Cette équation a pour forme y = ax + b ; en remplaçant y et x par les coordonnées des deux points, on obtient donc :</p>


<p>(1) : 75 = a * 6 + b</p>
<p>(2) : 12 = a * 1 + b</p>
<p>&nbsp;</p>
<p>Pour calculer "a", il suffit de soustraire (2) à (1).

<p>75 - 12 = 6a - a</p>
<p>63 = 5a</p>
<p>a = 12.6</p>
<p>&nbsp;</p>
<p>Puis on injecte "a" dans l'équation (2) pour obtenir "b".</p>
<p>12 = 12.6 * 1 + b</p>
<p>b = 12 - 12.6 = -0.6</p>
<p>&nbsp;</p>
<p>On obtient ainsi l'équation de la droite :  <strong>y = 12.6 * x - 0.6</strong></p>
<p>&nbsp;</p>
<p>La prévision pour l'année 7 sera donc :</p>

<p>y = 12.6 * 7 - 0.6 = 88.2 - 0.6 = 87.6</p>
<p>&nbsp;</p>
<p>La prévision pour l'année 7 sera de : 87.6</p> 

</div>

<h2>Méthode de Mayer</h2>

<p>La méthode de Mayer consiste à découper la série de données en deux sous-séries, ce qui permet de tenir compte de tous les points de la série.</p>
<p>On calcule ensuite le point moyen de chaque sous-série avant de déterminer l'équation de la droite d'ajustement qui passe par ces deux points moyens.</p>
<p>Si la série comporte un nombre de points impairs, il est préférable de prendre un point de plus dans la deuxième sous-série pour augmenter son poids relatif, car elle est plus récente, donc plus représentative.</p>

<div class="exercice">
<p>Prenons les données suivantes :</p>
<table class="table">
<thead>
<tr>
<th>Année</th>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
</tr>
</thead>
<tbody>
<tr>
<td>Valeur</td>
<td>89</td>
<td>97</td>
<td>108</td>
<td>120</td>
</tr>
</tbody>
</table>

<p>On décompose la série en deux sous-séries</p>
<table class="table">
<thead>
<tr>
<th colspan="3">Groupe 1</th>
<th colspan="3">Groupe 2</th>
</tr>
</thead>
<tbody>
<tr>
<td>Année</td>
<td>Xi</td>
<td>Yi</td>
<td>Année</td>
<td>Xi</td>
<td>Yi</td>
</tr>
<tr>
<td>N</td>
<td>1</td>
<td>89</td>
<td>N+2</td>
<td>3</td>
<td>108</td>
</tr>
<tr>
<td>N+1</td>
<td>2</td>
<td>97</td>
<td>N+3</td>
<td>4</td>
<td>120</td>
</tr>
<tr>
<td>Moyenne</td>
<td>1.5</td>
<td>93</td>
<td>Moyenne</td>
<td>3.5</td>
<td>114</td>
</tr>
</tbody>
</table>

<p>À partir des moyennes de deux séries, on peut déterminer deux "points moyens" (un pour chaque série) par lesquels va passer une droite qu'on appelle la droite de Mayer.</p>

<p>Cette droite a pour équation y = a * x + b et passe par ces deux points. On peut donc écrire :</p>
<p>(1) : 114 = 3.5 * a + b</p>
<p>(2) :  93 = 1.5 * a + b</p>

<p>&nbsp;</p>
<p>En soustrayant l'équation (1) à l'équation (2), comme on l'a fait pour la droite passant par les points extrèmes, on obtient :</p>
<p>(1)-(2) : 2a = 21</p>
<p>a = 10.5</p>
<p>et</p>
<p>b = 93 -(1.5 * 10.5) = 77.25</p>

<p>&nbsp;</p>
<p>D'où l'équation : <strong>y = 10.5 * x + 77.25</strong></p>

<p>&nbsp;</p>
<p>Donc pour l'année N+4, on aura : x = 5</p>
<p>&nbsp;</p>
<p>Il en résulte une prévision de :  10.5 * 5 + 77.25 = 129.75</p>

</div>

<h2>Méthode des moindres carrés</h2>

<p>La méthode des moindres carrés permet de déterminer l'équation de la droite d'ajustement qui passe le plus près possible de l'ensemble des points de la série étudiée.</p>
<p>C'est la méthode la plus précise.</p>
<p>Elle est le mieux appropriée lorsque les points sont peu alignés mais qu'une tendance se dégage.</p>
<p>Cette droite a pour équation y = ax + b</p>

<h3>Calcul de "a"</h3>

    <p>Le coefficient directeur "a" de la droite, se calcule de la façon suivante : </p>

	<div class="formule">
	a = 
	<div class="fraction">
	<span class="numerateur"><span class="xl">Σ</span> (x<sub>i</sub> - <span class="moyenne">x</span>)(y<sub>i</sub> - <span class="moyenne">y</span>)</span>
	<span class="bar">/</span>
	<span class="denominateur"><span class="xl">Σ</span> (x<sub>i</sub> - <span class="moyenne">x</span>)<sup>2</sup></span>
	</div>
	</div>

<h3>Calcul de "b"</h3>

<div>La constante "b" (qui est l'ordonnée à l'origine) se calcule grâce à l'équation : 
<div class="formule">
<p><span class="moyenne">y</span> = a * <span class="moyenne">x</span> + b</p>
</div>
</div>


<h3>Autre manière d'écrire cette équation :</h3>

<div class="formule">
    a = 
    <div class="fraction">
        <span class="numerateur">n <span class="xl">&Sigma;</span>x<sub>i</sub>y<sub>i</sub> - <span class="xl">Σ</span>x<sub>i</sub> <span class="xl">Σ</span>y<sub>i</sub></span>
        <span class="bar">/</span>
        <span class="denominateur">n <span class="xl">Σ</span>x<sub>i</sub><sup>2</sup> - (<span class="xl">Σ</span>x<sub>i</sub>)<sup>2</sup></span>
    </div>
</div>

<p>Avec n le nombre de valeurs.</p>

<h3>Calcul de "a" en fonction des moyennes <span class="moyenne">x</span> et <span class="moyenne">y</span></h3>

<p>On sait que :</p>

<div>
    <span class="moyenne">x</span> = 
    <div class="fraction">
        <span class="numerateur">1</span>
        <span class="bar">/</span>
        <span class="denominateur">n
    </div>
        <span class="xl">Σ</span>x<sub>i</sub> 

        <span class="xl">⇒</span>

        <span class="xl">Σ</span>x<sub>i</sub> = n <span class="moyenne">x</span>
</div>
<p>et</p>
<div>
    <span class="moyenne">y</span> = 
    <div class="fraction">
        <span class="numerateur">1</span>
        <span class="bar">/</span>
        <span class="denominateur">n
    </div>
        <span class="xl">Σ</span>y<sub>i</sub> 

        <span class="xl">⇒</span>

        <span class="xl">Σ</span>y<sub>i</sub> = n <span class="moyenne">y</span>
</div>
<p>En substituant dans la formule on aura :</p>

        a = 
        <div class="fraction">
            <span class="numerateur">n <span class="xl">&Sigma;</span>x<sub>i</sub>y<sub>i</sub> - (n <span class="moyenne">x</span><sub>i</sub>)(n <span class="moyenne">y</span><sub>i</sub>)</span>
            <span class="bar">/</span>
            <span class="denominateur">n <span class="xl">Σ</span>x<sub>i</sub><sup>2</sup> - (n <span class="moyenne">x</span><sub>i</sub>)<sup>2</sup></span>
        </div> = 
    
    <div class="fraction">
        <span class="numerateur">n <span class="xl">&Sigma;</span>x<sub>i</sub>y<sub>i</sub> - n<sup>2</sup><span class="moyenne">x</span><sub>i</sub><span class="moyenne">y</span><sub>i</sub></span>
        <span class="bar">/</span>
        <span class="denominateur">n <span class="xl">Σ</span>x<sub>i</sub><sup>2</sup> - n<sup>2</sup> <span class="moyenne">x</span><sub>i</sub><sup>2</sup></span>
    </div>

<p>On peut factoriser n au numérateur et au dénominateur :</p>
    a= 
    <div class="fraction">
        <span class="numerateur">n (<span class="xl">&Sigma;</span>x<sub>i</sub>y<sub>i</sub> - n<span class="moyenne">x</span><sub>i</sub><span class="moyenne">y</span><sub>i</sub>)</span>
        <span class="bar">/</span>
        <span class="denominateur">n (<span class="xl">Σ</span>x<sub>i</sub><sup>2</sup> - n<span class="moyenne">x</span><sub>i</sub><sup>2</sup>)</span>
    </div>

    <p>Puis on simplifie par n :</p>
    <div class="formule">
    a= 
    <div class="fraction">
        <span class="numerateur"><span class="xl">&Sigma;</span>x<sub>i</sub>y<sub>i</sub> - n<span class="moyenne">x</span><sub>i</sub><span class="moyenne">y</span><sub>i</sub></span>
        <span class="bar">/</span>
        <span class="denominateur"><span class="xl">Σ</span>x<sub>i</sub><sup>2</sup> - n<span class="moyenne">x</span><sub>i</sub><sup>2</sup></span>
    </div>
    </div>

<div class="notice remarque">
    <p>Avantage : cette version est souvent plus pratique quand tu as déjà les sommes <span class="xl">Σ</span>x<sub>i</sub>y<sub>i</sub> et <span class="xl">Σ</span>x<sub>i</sub><sup>2</sup>, en plus de <span class="moyenne">x</span> et <span class="moyenne">y</span>, sans forcément recalculer tous les écarts.</p>
    </div>

<div class="exercice">
<p>Exercice d'application</p>
<table class="table">
	<thead>
		<tr>
			<th></th>
			<th>x</th>
			<th>y</th>
			<th>xy</th>
			<th>x²</th>
			<th>y²</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>22</td>
			<td>18</td>
			<td>396</td>
			<td>484</td>
			<td>324</td>
		</tr>
		<tr><td>2</td><td>22</td><td>19</td><td>418</td><td>484</td><td>361</td></tr>
		<tr><td>3</td><td>23</td><td>20</td><td>460</td><td>529</td><td>400</td></tr>
		<tr><td>4</td><td>26</td><td>18</td><td>468</td><td>676</td><td>324</td></tr>
		<tr><td>5</td><td>31</td><td>23</td><td>713</td><td>961</td><td>529</td></tr>
		<tr><td>6</td><td>32</td><td>24</td><td>768</td><td>1024</td><td>576</td></tr>
		<tr><td>7</td><td>34</td><td>22</td><td>748</td><td>1156</td><td>484</td></tr>
		<tr><td>8</td><td>37</td><td>25</td><td>925</td><td>1369</td><td>625</td></tr>
		<tr><td>9</td><td>41</td><td>29</td><td>1189</td><td>1681</td><td>841</td></tr>
		<tr><td>10</td><td>42</td><td>27</td><td>1134</td><td>1764</td><td>729</td></tr>
		<tr><td>Somme</td><td>310</td><td>225</td><td>7219</td><td>10128</td><td>5193</td></tr>
	</tbody>
</table>

<p>En remplaçant les valeurs dans la formule on obtient :</p>

<div class="">
a = 
	<div class="fraction">
	<span class="numerateur">10 * 7219 - 310 * 225</span>
	<span class="bar">/</span>
	<span class="denominateur">10 * 10128 - (310)<sup>2</sup></span>
	</div>
	=
	<div class="fraction">
	<span class="numerateur">72190 - 69750</span>
	<span class="bar">/</span>
	<span class="denominateur">101280 - 96100</span>
	</div>
	=
	<div class="fraction">
	<span class="numerateur">2440</span>
	<span class="bar">/</span>
	<span class="denominateur">5180</span>
	</div>
	=
	<div class="fraction">
	<span class="numerateur">122</span>
	<span class="bar">/</span>
	<span class="denominateur">259</span>
	</div>
	= 0.471
</div>

<p>&nbsp;</p>
<p>On calcule également la moyenne des x et la moyenne des y :</p>

<div class="">
<span class="moyenne">x</span> = 
<div class="fraction">
	<span class="numerateur"><span class="xl">&Sigma;</span>x</span>
	<span class="bar">/</span>
	<span class="denominateur">n</span>
	</div>
	= 
	<div class="fraction">
	<span class="numerateur">310</span>
	<span class="bar">/</span>
	<span class="denominateur">10</span>
	</div>
	= 31
</div>

<div class="">
<span class="moyenne">y</span> = 
<div class="fraction">
	<span class="numerateur"><span class="xl">&Sigma;</span>x</span>
	<span class="bar">/</span>
	<span class="denominateur">n</span>
	</div>
	= 
	<div class="fraction">
	<span class="numerateur">225</span>
	<span class="bar">/</span>
	<span class="denominateur">10</span>
	</div>
	= 22.5
</div>

<p>&nbsp;</p>
<p>Pour trouver :  b = <span class="moyenne">y</span> - a * <span class="moyenne">x</span></p>

<div class="">
b = 
<div class="fraction">
	<span class="numerateur">225</span>
	<span class="bar">/</span>
	<span class="denominateur">10</span>
	</div>
	- 
	<div class="fraction">
	<span class="numerateur">122</span>
	<span class="bar">/</span>
	<span class="denominateur">259</span>
	</div>
	*
	<div class="fraction">
	<span class="numerateur">310</span>
	<span class="bar">/</span>
	<span class="denominateur">10</span>
	</div>
	= 7.898
</div>

<p>&nbsp;</p>
<p>Par conséquent, l'équation de la droite des moindres carrés sera : y = 0.471x + 7.898 </p>

</div>


