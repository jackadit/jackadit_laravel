<?php
/**
 * BUT : Introduction à la métrologie
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Métrologie
 * @access public
 * @uses 
 */
$sNavigation=navigation('metro', '3');
?>




<h1>Système d'ajustement</h1>
<em><a href="./cours/metro/EN20286-1-decembre1993.pdf">NF EN 20286-1 OU ISO 286-1 :1993</a></em>

	<h2>Introduction</h2>
	<p>En production mécanique, on ajuste très souvent 2 pièces entre elles. Cet ajustement peut être plus ou moins serré, avec jeu ou incertain en fonction des tolérances choisies pour l'arbre (partie extérieur d'une pièce) et l'alésage (partie intérieure d'une la pièce). Les valeurs des ajustements s'appliquent à des formes simples : les formes cylindriques ou composées de 2 surfaces planes parallèles. Les valeurs des ajustements sont issues de formules empiriques représentant l'expérience du domaine, elles prennent en compte le type d'ajustement, la dimension nominale de la pièce et le niveau de précision choisi par le concepteur. Des tableaux de valeurs usuelles sont extraits des normes pour faciliter le travail des concepteurs, des producteurs et des métrologues.</p> 
	
	<dl>Définitions :
	<dt><dfn>Dimension nominale</dfn></dt> 
	<dd>Dimension de référence à laquelle s'appliqueront les écarts inférieurs et supérieurs. La dimension nominale peut être entière ou décimale. Le terme cote est l'appellation de la dimension sur le dessin.</dd>
	<dt><dfn>Tolérance ou intervalle de tolérance</dfn></dt>
	<dd>Différence entre la plus grande dimension tolérée et la plus petite.</dd>
	<dt><dfn>Ecart inférieur</dfn></dt>
	<dd>Différence entre la dimension nominale et la plus petite dimension tolérée.</dd>
	<dt><dfn>Ecart supérieur</dfn></dt> 
	<dd>Différence entre la dimension maximale tolérée et la dimension nominale.</dd>
	<dt><dfn>Ajustement avec jeu</dfn></dt>
	<dd>L'ajustement est dit avec jeu lorsque l'arbre a une dimension toujours inférieure à celle l'alésage (1).</dd>
	<dt><dfn>Ajustement serré</dfn></dt>
	<dd>L'ajustement est dit serré lorsque l'arbre a une dimension toujours supérieure à l'alésage (3).</dd>
	<dt><dfn>Ajustement incertain</dfn></dt>
	<dd>L'ajustement est dit incertain lorsqu'il peut y avoir jeu ou serrage en fonction des dimensions réelles de l'alésage et de l'arbre (2).</dd>
	</dl>

	<img src="/assets/img/qlio/metro/representation_ajustement_longitudinal.png" alt="Représentation de l'ajustement longitudinalement" />

	<img src="/assets/img/qlio/metro/representation_ajustement_transversal.png" alt="Représentation de l'ajustement transversalement" />

	<h2>Inscription sur le dessin</h2>
		
	<p><a href="/cours/qlio/metro/2#toc-inscription-sur-le-dessin-de-définition">Voir chapitre 2.3 du présent document.</a></p>
	<p>Les lettres majuscules sont utilisées pour les alésages (partie femelle).Les lettres minuscules correspondent à l'arbre (partie mâle). Les chiffres donnent la qualité de la cote. Plus les chiffres sont petits, plus l'intervalle de tolérance est petit (ajustement précis).</p>

	<p>Exemples :</p>
	<img src="/assets/img/qlio/metro/ecriture_ajustement.png" alt="Écriture de l'ajustement sur le dessin technique" />
	
	<h2>Positions et intervalles de tolérance</h2>

	<h3>Positions</h3>
	<img src="/assets/img/qlio/metro/position_ecart_iso.png" alt="position des écarts iso" />

	<h3>Tolérance</h3>
	
	<table class="table">
	<caption>Principales qualités ou tolérances (IT) ISO
	<br> (IT en micromètre : 1µm = 0.001 mm)</caption>
	<tbody><tr><th colspan="14">Dimensions nominales en mm</th></tr>
	<tr>
		<th>de -&gt;
		<br>à &nbsp;&nbsp;-&gt;</th>
		<th>1<br>3</th>
		<th>3<br>6</th>
		<th>6<br>10</th>
		<th>10<br>18</th>
		<th>18<br>30</th>
		<th>30<br>50</th>
		<th>50<br>80</th>
		<th>80<br>120</th>
		<th>120<br>180</th>
		<th>180<br>250</th>
		<th>250<br>315</th>
		<th>315<br>400</th>
		<th>400<br>500</th>
	</tr>
	<tr>
		<th>IT5</th>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>8</td>
		<td>9</td>
		<td>11</td>
		<td>13</td>
		<td>15</td>
		<td>18</td>
		<td>20</td>
		<td>23</td>
		<td>25</td>
		<td>27</td>
	</tr>
	<tr>
		<th>IT6</th>
		<td>6</td>
		<td>8</td>
		<td>9</td>
		<td>11</td>
		<td>13</td>
		<td>16</td>
		<td>19</td>
		<td>22</td>
		<td>25</td>
		<td>29</td>
		<td>32</td>
		<td>36</td>
		<td>40</td>
	</tr>
	<tr>
		<th>IT7</th>
		<td>10</td>
		<td>12</td>
		<td>15</td>
		<td>18</td>
		<td>21</td>
		<td>25</td>
		<td>30</td>
		<td>35</td>
		<td>40</td>
		<td>46</td>
		<td>52</td>
		<td>57</td>
		<td>63</td>
	</tr>
	<tr>
		<th>IT8</th>
		<td>14</td>
		<td>18</td>
		<td>22</td>
		<td>27</td>
		<td>33</td>
		<td>39</td>
		<td>46</td>
		<td>54</td>
		<td>63</td>
		<td>72</td>
		<td>81</td>
		<td>89</td>
		<td>97</td>
	</tr>
	<tr>
		<th>IT9</th>
		<td>25</td>
		<td>30</td>
		<td>36</td>
		<td>43</td>
		<td>52</td>
		<td>62</td>
		<td>74</td>
		<td>87</td>
		<td>100</td>
		<td>115</td>
		<td>130</td>
		<td>140</td>
		<td>155</td>
	</tr>
	<tr>
		<th>IT10</th>
		<td>40</td>
		<td>48</td>
		<td>58</td>
		<td>70</td>
		<td>84</td>
		<td>100</td>
		<td>120</td>
		<td>140</td>
		<td>160</td>
		<td>185</td>
		<td>210</td>
		<td>230</td>
		<td>250</td>
	</tr>
	<tr>
		<th>IT11</th>
		<td>60</td>
		<td>75</td>
		<td>90</td>
		<td>110</td>
		<td>130</td>
		<td>160</td>
		<td>190</td>
		<td>220</td>
		<td>250</td>
		<td>290</td>
		<td>320</td>
		<td>360</td>
		<td>400</td>
	</tr>
	<tr>
		<th>IT12</th>
		<td>100</td>
		<td>120</td>
		<td>150</td>
		<td>180</td>
		<td>210</td>
		<td>250</td>
		<td>300</td>
		<td>350</td>
		<td>400</td>
		<td>460</td>
		<td>520</td>
		<td>570</td>
		<td>630</td>
	</tr>
	<tr>
		<th>IT13</th>
		<td>140</td>
		<td>180</td>
		<td>220</td>
		<td>270</td>
		<td>330</td>
		<td>390</td>
		<td>460</td>
		<td>540</td>
		<td>630</td>
		<td>720</td>
		<td>810</td>
		<td>890</td>
		<td>970</td>
	</tr>
	</tbody></table>

	<h2>Choix de l'ajustement</h2>
	
    <p>Des tableaux permettent au concepteur de faire le choix des ajustements pour l'arbre et l'alésage pour assurer le fonctionnement du mécanisme.</p>
    <p>Système d´ajustements à alésage normal : système où l'alésage est toujours coté avec la lettre H, on ajustera l'arbre pour obtenir le fonctionnement mécanique désiré.</p>
	
	<img src="/assets/img/qlio/metro/ajustement_alesage.png" alt="Ajustement des alésages" />

	<p>Ce système présente l'avantage de réduire le nombre de combinaisons d'ajustements ce qui présente un intérêt financier pour la production et la métrologie. On met un indice de qualité supérieur sur l'arbre par rapport à l'alésage. En effet, les coûts de production et de mesure des alésages sont plus élevés à qualité identique. On reporte donc la difficulté technique sur l'arbre.</p>

	<h3>Tableaux des ajustements usuels</h3>

    <!--img src="/assets/img/qlio/metro/ajustements_usuels.png" alt="Ajustement usuels" /-->

    <p>Légende : <span class="bg-bleu-light">&nbsp;u&nbsp;</span> : cas les plus utilisés; <span class="bg-bleu">&nbsp;c&nbsp;</span> : cas les plus utilisés (à connaître)</p>

    <table class="table">
        <caption>Ajustements usuels - système de l'alésage H</caption>
        <thead><tr>
            <th rowspan="2" colspan="3">Type</th>
            <th rowspan="2">Arbre</th>
            <th colspan="6">Alésage</th>
            <th colspan="3" rowspan="2">Observations</th>
        </tr>
        <tr>
            <th>H6</th>
            <th>H7</th>
            <th>H8</th>
            <th>H9</th>
            <th>H10</th>
            <th>H11</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="txtvertical bg-bleu-light" rowspan="14">Pièces mobiles</td>
            <td class="txtvertical bg-orange-light" rowspan="18">Jeu</td>
            <td class="bg-vert-dark" rowspan="4">Jeu élevé</td>
            <td class="bg-jaune-dark">c11</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td rowspan="4" colspan="3">Cas usuels de longues portées, mauvais aligneme, dilatations , ...</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">c10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">c9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">d10</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
        </tr>
        <tr>
            <td class="bg-vert" rowspan="8">Jeu moyen</td>
            <td class="bg-jaune-dark">d9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td rowspan="8" colspan="3">Cas usuels pour guidages tournants ou glissant avec jeu (bon graissage assuré)</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">d8</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">e9</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td class="bg-gris-light">x</td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">e8</td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">e7</td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">f8</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">f7</td>
            <td></td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">f6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-vert-light" rowspan="2">Jeu faible</td>
            <td class="bg-jaune-dark">g6</td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="2" colspan="3">Pour guidages précis</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">g5</td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="txtvertical bg-bleu-light" rowspan="19">Pièces immobiles</td>
            <td class="bg-jaune" rowspan="4">Ajusté</td>
            <td class="bg-jaune-dark">h9</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td rowspan="7">Assemblage possible à la main</td>
            <td rowspan="12">Pour centrages et positionnement </br> Ne peut pas transmettre des efforts</td>
            <td rowspan="12">Pas de détérioration des pièces au démontage</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">h7</td>
            <td></td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">h6</td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">h5</td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="txtvertical bg-rouge-light" rowspan="8">Jeu incertain</td>
            <td class="bg-orange" rowspan="3">Très ajusté</td>
            <td class="bg-jaune-dark">js7</td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">js6</td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">js5</td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-orange-dark" rowspan="5">Peu serré</td>
            <td class="bg-jaune-dark">k6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="5">Assemblage possible au "maillet" 'Presse recommandée)</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">k5</td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">m7</td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">m6</td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">n6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="txtvertical bg-orange" rowspan="7">Serrage (interférence)</td>
            <td class="bg-rouge" rowspan="2">Serré</td>
            <td class="bg-jaune-dark">p6</td>
            <td></td>
            <td class="bg-bleu">c</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="2">Assemblage à la presse</td>
            <td rowspan="7">Pour transmission des efforts</td>
            <td rowspan="7">Détérioration des pièces au démontage</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">r6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-rouge-dark" rowspan="5">Serré fort</td>
            <td class="bg-jaune-dark">s7</td>
            <td></td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td rowspan="5">Assemblage à la presse lourde ou par dilatation (frettage)</td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">s6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">t6</td>
            <td></td>
            <td class="bg-bleu-light">u</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">u6</td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="bg-jaune-dark">x7</td>
            <td></td>
            <td></td>
            <td class="bg-gris-light">x</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>

    <p></p>
    <p></p>


	<table class="table tolerance">
        <caption>Écart en micromètre (1µm = 0,001mm) en fonction des dimensions nominales en mm</caption>
          <thead><tr> 
            <th>au delà de</th>
            <th>-</th>
            <th>3</th>
            <th>6</th>
            <th>10</th>
            <th>18</th>
            <th>30</th>
            <th>50</th>
            <th>80</th>
            <th>120</th>
            <th>180</th>
            <th>250</th>
            <th>315</th>
            <th>400</th>
          </tr>
          <tr> 
            <th>à (inclus)</th>
            <th>3</th>
            <th>6</th>
            <th>10</th>
            <th>18</th>
            <th>30</th>
            <th>50</th>
            <th>80</th>
            <th>120</th>
            <th>180</th>
            <th>250</th>
            <th>315</th>
            <th>400</th>
            <th>500</th>
          </tr>
          </thead>
          <tbody>
          <tr> 
            <th>D10</th>
            <td>+60<br>
                +20</td>
            <td>+78<br>
                +30</td>
            <td>+98<br>
                +40</td>
            <td>+120<br>
                +50</td>
            <td>+149<br>
                +65</td>
            <td>+180<br>
                +80</td>
            <td>+220<br>
                +100</td>
            <td>+260<br>
                +120</td>
            <td>+305<br>
                +145</td>
            <td>+355<br>
                +170</td>
            <td>+400<br>
                +190</td>
            <td>+440<br>
                +210</td>
            <td>+480<br>
                +230</td>
          </tr>
          <tr> 
            <th>F7</th>
            <td>+16<br>
                +6</td>
            <td>+22<br>
                +10</td>
            <td>+28<br>
                +13</td>
            <td>+34<br>
                +16</td>
            <td>+41<br>
                +20</td>
            <td>+50<br>
                +25</td>
            <td>+60<br>
                +30</td>
            <td>+71<br>
                +36</td>
            <td>+83<br>
                +43</td>
            <td>+96<br>
                +50</td>
            <td>+108<br>
                +56</td>
            <td>+119<br>
                +62</td>
            <td>+121<br>
                +68</td>
          </tr>
          <tr> 
            <th>F9</th>
            <td>+31<br>
                +6</td>
            <td>+40<br>
                +10</td>
            <td>+49<br>
                +13</td>
            <td>+59<br>
                +16</td>
            <td>+72<br>
                +20</td>
            <td>+87<br>
                +25</td>
            <td>+104<br>
                +30</td>
            <td>+123<br>
                +36</td>
            <td>+143<br>
                +43</td>
            <td>+165<br>
                +50</td>
            <td>+185<br>
                +56</td>
            <td>+202<br>
                +62</td>
            <td>+223<br>
                +68</td>
          </tr>
          <tr> 
            <th>E9</th>
            <td>+39<br>
                +14</td>
            <td>+50<br>
                +20</td>
            <td>+61<br>
                +25</td>
            <td>+75<br>
                +32</td>
            <td>+92<br>
                +40</td>
            <td>+112<br>
                +50</td>
            <td>+134<br>
                +60</td>
            <td>+159<br>
                +72</td>
            <td>+185<br>
                +85</td>
            <td>+215<br>
                +100</td>
            <td>+240<br>
                +110</td>
            <td>+265<br>
                +125</td>
            <td>+290<br>
                +135</td>
          </tr>
          <tr> 
            <th>G6</th>
            <td>+8<br>
                +2</td>
            <td>+12<br>
                +4</td>
            <td>+14<br>
                +5</td>
            <td>+17<br>
                +6</td>
            <td>+20<br>
                +7</td>
            <td>+25<br>
                +9</td>
            <td>+29<br>
                +10</td>
            <td>+34<br>
                +12</td>
            <td>+39<br>
                +14</td>
            <td>+44<br>
                +15</td>
            <td>+49<br>
                +17</td>
            <td>+54<br>
                +18</td>
            <td>+60<br>
                +20</td>
          </tr>
          <tr> 
            <th>G8</th>
            <td>+16<br>
                +2</td>
            <td>+22<br>
                +4</td>
            <td>+27<br>
                +5</td>
            <td>+33<br>
                +6</td>
            <td>+40<br>
                +7</td>
            <td>+48<br>
                +9</td>
            <td>+56<br>
                +10</td>
            <td>+66<br>
                +12</td>
            <td>+77<br>
                +14</td>
            <td>+87<br>
                +15</td>
            <td>+98<br>
                +17</td>
            <td>+107<br>
                +18</td>
            <td>+117<br>
                +20</td>
          </tr>
          <tr class="fond"> 
            <th>H6</th>
            <td>+6<br>
                0</td>
            <td>+8<br>
                0</td>
            <td>+9<br>
                0</td>
            <td>+11<br>
                0</td>
            <td>+13<br>
                0</td>
            <td>+16<br>
                0</td>
            <td>+19<br>
                0</td>
            <td>+22<br>
                0</td>
            <td>+25<br>
                0</td>
            <td>+29<br>
                0</td>
            <td>+32<br>
                0</td>
            <td>+36<br>
                0</td>
            <td>+40<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H7</th>
            <td>+10<br>
                0</td>
            <td>+12<br>
                0</td>
            <td>+15<br>
                0</td>
            <td>+18<br>
                0</td>
            <td>+21<br>
                0</td>
            <td>+25<br>
                0</td>
            <td>+30<br>
                0</td>
            <td>+35<br>
                0</td>
            <td>+40<br>
                0</td>
            <td>+46<br>
                0</td>
            <td>+52<br>
                0</td>
            <td>+57<br>
                0</td>
            <td>+63<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H8</th>
            <td>+14<br>
                0</td>
            <td>+18<br>
                0</td>
            <td>+22<br>
                0</td>
            <td>+27<br>
                0</td>
            <td>+33<br>
                0</td>
            <td>+39<br>
                0</td>
            <td>+46<br>
                0</td>
            <td>+54<br>
                0</td>
            <td>+63<br>
                0</td>
            <td>+72<br>
                0</td>
            <td>+81<br>
                0</td>
            <td>+89<br>
                0</td>
            <td>+97<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H9</th>
            <td>+25<br>
                0</td>
            <td>+30<br>
                0</td>
            <td>+36<br>
                0</td>
            <td>+43<br>
                0</td>
            <td>+52<br>
                0</td>
            <td>+62<br>
                0</td>
            <td>+74<br>
                0</td>
            <td>+87<br>
                0</td>
            <td>+100<br>
                0</td>
            <td>+115<br>
                0</td>
            <td>+130<br>
                0</td>
            <td>+140<br>
                0</td>
            <td>+155<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H10</th>
            <td>+40<br>
                0</td>
            <td>+48<br>
                0</td>
            <td>+58<br>
                0</td>
            <td>+70<br>
                0</td>
            <td>+84<br>
                0</td>
            <td>+100<br>
                0</td>
            <td>+120<br>
                0</td>
            <td>+140<br>
                0</td>
            <td>+160<br>
                0</td>
            <td>+185<br>
                0</td>
            <td>+210<br>
                0</td>
            <td>+230<br>
                0</td>
            <td>+250<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H11</th>
            <td>+60<br>
                0</td>
            <td>+75<br>
                0</td>
            <td>+90<br>
                0</td>
            <td>+110<br>
                0</td>
            <td>+103<br>
                0</td>
            <td>+160<br>
                0</td>
            <td>+190<br>
                0</td>
            <td>+220<br>
                0</td>
            <td>+250<br>
                0</td>
            <td>+290<br>
                0</td>
            <td>+320<br>
                0</td>
            <td>+360<br>
                0</td>
            <td>+400<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H12</th>
            <td>+100<br>
                0</td>
            <td>+120<br>
                0</td>
            <td>+150<br>
                0</td>
            <td>+180<br>
                0</td>
            <td>+210<br>
                0</td>
            <td>+250<br>
                0</td>
            <td>+300<br>
                0</td>
            <td>+350<br>
                0</td>
            <td>+400<br>
                0</td>
            <td>+460<br>
                0</td>
            <td>+520<br>
                0</td>
            <td>+570<br>
                0</td>
            <td>+630<br>
                0</td>
          </tr>
          <tr class="fond"> 
            <th>H13</th>
            <td>+140<br>
                0</td>
            <td>+180<br>
                0</td>
            <td>+220<br>
                0</td>
            <td>+270<br>
                0</td>
            <td>+330<br>
                0</td>
            <td>+390<br>
                0</td>
            <td>+460<br>
                0</td>
            <td>+540<br>
                0</td>
            <td>+630<br>
                0</td>
            <td>+720<br>
                0</td>
            <td>+810<br>
                0</td>
            <td>+890<br>
                0</td>
            <td>+970<br>
                0</td>
          </tr>
          <tr> 
            <th>J7</th>
            <td>+4<br>
                -6</td>
            <td>+6<br>
                -6</td>
            <td>+8<br>
                -7</td>
            <td>+10<br>
                -8</td>
            <td>+12<br>
                -9</td>
            <td>+14<br>
                -11</td>
            <td>+18<br>
                -12</td>
            <td>+22<br>
                -13</td>
            <td>+26<br>
                -14</td>
            <td>+30<br>
                -16</td>
            <td>+36<br>
                -16</td>
            <td>+39<br>
                -18</td>
            <td>+43<br>
                -20</td>
          </tr>
          <tr> 
            <th>JS7</th>
            <td> &pm;5</td>
            <td> &pm;6</td>
            <td> &pm;7,5</td>
            <td> &pm;9</td>
            <td> &pm;10,5</td>
            <td> &pm;12,5</td>
            <td> &pm;15</td>
            <td> &pm;17,5</td>
            <td> &pm;20</td>
            <td> &pm;23</td>
            <td> &pm;26</td>
            <td> &pm;28,5</td>
            <td> &pm;31,5</td>
          </tr>
          <tr> 
            <th>JS13</th>
            <td> &pm;70</td>
            <td> &pm;90</td>
            <td> &pm;110</td>
            <td> &pm;135</td>
            <td> &pm;165</td>
            <td> &pm;195</td>
            <td> &pm;230</td>
            <td> &pm;270</td>
            <td> &pm;315</td>
            <td> &pm;360</td>
            <td> &pm;405</td>
            <td> &pm;445</td>
            <td> &pm;485</td>
          </tr>
          <tr> 
            <th>K6</th>
            <td>+0<br>
                -6</td>
            <td>+3<br>
                -6</td>
            <td>+5<br>
                -7</td>
            <td>+6<br>
                -9</td>
            <td>+6<br>
                -11</td>
            <td>+7<br>
                -13</td>
            <td>+9<br>
                -15</td>
            <td>+10<br>
                -18</td>
            <td>+12<br>
                -21</td>
            <td>+13<br>
                -24</td>
            <td>+16<br>
                -27</td>
            <td>+17<br>
                -29</td>
            <td>+18<br>
                -32</td>
          </tr>
          <tr> 
            <th>K7</th>
            <td>+0<br>
                -10</td>
            <td>+3<br>
                -9</td>
            <td>+5<br>
                -10</td>
            <td>+6<br>
                -12</td>
            <td>+6<br>
                -15</td>
            <td>+7<br>
                -18</td>
            <td>+9<br>
                -21</td>
            <td>+10<br>
                -25</td>
            <td>+12<br>
                -28</td>
            <td>+13<br>
                -33</td>
            <td>+16<br>
                -36</td>
            <td>+17<br>
                -40</td>
            <td>+18<br>
                -45</td>
          </tr>
          <tr> 
            <th>M7</th>
            <td>-2<br>
                -12</td>
            <td>-0<br>
                -12</td>
            <td>-0<br>
                -15</td>
            <td>-0<br>
                -18</td>
            <td>-0<br>
                -21</td>
            <td>-0<br>
                -25</td>
            <td>-0<br>
                -30</td>
            <td>-0<br>
                -35</td>
            <td>-0<br>
                -40</td>
            <td>-0<br>
                -46</td>
            <td>-0<br>
                -52</td>
            <td>-0<br>
                -57</td>
            <td>-0<br>
                -63</td>
          </tr>
          <tr> 
            <th>N7</th>
            <td>-4<br>
                -14</td>
            <td>-4<br>
                -16</td>
            <td>-4<br>
                -19</td>
            <td>-5<br>
                -23</td>
            <td>-7<br>
                -28</td>
            <td>-8<br>
                -33</td>
            <td>-9<br>
                -39</td>
            <td>-10<br>
                -45</td>
            <td>-12<br>
                -52</td>
            <td>-14<br>
                -60</td>
            <td>-14<br>
                -66</td>
            <td>-16<br>
                -73</td>
            <td>-17<br>
                -80</td>
          </tr>
          <tr> 
            <th>N9</th>
            <td>-4<br>
                -29</td>
            <td>-4<br>
                -30</td>
            <td>-4<br>
                -36</td>
            <td>-5<br>
                -43</td>
            <td>-7<br>
                -52</td>
            <td>-8<br>
                -62</td>
            <td>-9<br>
                -74</td>
            <td>-10<br>
                -87</td>
            <td>-12<br>
                -100</td>
            <td>-14<br>
                -115</td>
            <td>-14<br>
                -130</td>
            <td>-16<br>
                -140</td>
            <td>-17<br>
                -155</td>
          </tr>
          <tr> 
            <th>P6</th>
            <td>-6<br>
                -12</td>
            <td>-9<br>
                -17</td>
            <td>-12<br>
                -21</td>
            <td>-15<br>
                -26</td>
            <td>-18<br>
                -31</td>
            <td>-21<br>
                -37</td>
            <td>-26<br>
                -45</td>
            <td>-30<br>
                -52</td>
            <td>-36<br>
                -61</td>
            <td>-41<br>
                -70</td>
            <td>-47<br>
                -79</td>
            <td>-51<br>
                -87</td>
            <td>-5<br>
                -95</td>
          </tr>
          <tr> 
            <th>P7</th>
            <td>-6<br>
                -16</td>
            <td>-8<br>
                -20</td>
            <td>-9<br>
                -24</td>
            <td>-11<br>
                -29</td>
            <td>-14<br>
                -35</td>
            <td>-17<br>
                -42</td>
            <td>-21<br>
                -51</td>
            <td>-24<br>
                -59</td>
            <td>-28<br>
                -68</td>
            <td>-33<br>
                -79</td>
            <td>-36<br>
                -88</td>
            <td>-41<br>
                -98</td>
            <td>-45<br>
                -108</td>
          </tr>
          <tr> 
            <th>P9</th>
            <td>-9<br>
                -31</td>
            <td>-12<br>
                -42</td>
            <td>-15<br>
                -51</td>
            <td>-18<br>
                -61</td>
            <td>-22<br>
                -74</td>
            <td>-26<br>
                -88</td>
            <td>-32<br>
                -106</td>
            <td>-37<br>
                -124</td>
            <td>-43<br>
                -143</td>
            <td>-50<br>
                -165</td>
            <td>-56<br>
                -186</td>
            <td>-62<br>
                -202</td>
            <td>-68<br>
                -223</td>
          </tr>
        </tbody>
    </table>

    <table class="table tolerance">
        <caption>Écart en micromètre (1µm = 0,001mm) en fonction des dimensions nominales en mm</caption>
          <thead><tr> 
            <th>au delà de</th>
            <th>-</th>
            <th>3</th>
            <th>6</th>
            <th>10</th>
            <th>18</th>
            <th>30</th>
            <th>50</th>
            <th>80</th>
            <th>120</th>
            <th>180</th>
            <th>250</th>
            <th>315</th>
            <th>400</th>
          </tr>
          <tr> 
            <th>à (inclus)</th>
            <th>3</th>
            <th>6</th>
            <th>10</th>
            <th>18</th>
            <th>30</th>
            <th>50</th>
            <th>80</th>
            <th>120</th>
            <th>180</th>
            <th>250</th>
            <th>315</th>
            <th>400</th>
            <th>500</th>
          </tr>
          </thead>
          <tbody>
          <tr> 
            <th>a11</th>
            <td>-270<br>
                -330</td>
            <td>-270<br>
                -345</td>
            <td>-280<br>
                -370</td>
            <td>-290<br>
                -400</td>
            <td>-300<br>
                -430</td>
            <td>-320<br>
                -470</td>
            <td>-360<br>
                -530</td>
            <td>-410<br>
                -600</td>
            <td>-585<br>
                -710</td>
            <td>-820<br>
                -950</td>
            <td>-1050<br>
                -1240</td>
            <td>-1350<br>
                -1560</td>
            <td>-1650<br>
                -1900</td>
          </tr>
          <tr> 
            <th>c11</th>
            <td>-60<br>
                -120</td>
            <td>-70<br>
                -145</td>
            <td>-80<br>
                -170</td>
            <td>-95<br>
                -205</td>
            <td>-110<br>
                -240</td>
            <td>-130<br>
                -280</td>
            <td>-150<br>
                -330</td>
            <td>-180<br>
                -390</td>
            <td>-230<br>
                -450</td>
            <td>-280<br>
                -530</td>
            <td>-330<br>
                -620</td>
            <td>-400<br>
                -720</td>
            <td>-480<br>
                -840</td>
          </tr>
          <tr> 
            <th>d9</th>
            <td>-20<br>
                -45</td>
            <td>-30<br>
                -60</td>
            <td>-40<br>
                -76</td>
            <td>-50<br>
                -93</td>
            <td>-65<br>
                -117</td>
            <td>-80<br>
                -142</td>
            <td>-100<br>
                -207</td>
            <td>-120<br>
                -245</td>
            <td>-145<br>
                -245</td>
            <td>-170<br>
                -285</td>
            <td>-190<br>
                -320</td>
            <td>-210<br>
                -350</td>
            <td>-230<br>
                -385</td>
          </tr>
          <tr> 
            <th>d10</th>
            <td>-20<br>
                -60</td>
            <td>-30<br>
                -78</td>
            <td>-40<br>
                -98</td>
            <td>-50<br>
                -120</td>
            <td>-65<br>
                -149</td>
            <td>-80<br>
                -180</td>
            <td>-100<br>
                -220</td>
            <td>-120<br>
                -260</td>
            <td>-145<br>
                -305</td>
            <td>-170<br>
                -355</td>
            <td>-190<br>
                -400</td>
            <td>-210<br>
                -440</td>
            <td>-230<br>
                -480</td>
          </tr>
          <tr> 
            <th>d11</th>
            <td>-20<br>
                -80</td>
            <td>-30<br>
                -105</td>
            <td>-40<br>
                -130</td>
            <td>-50<br>
                -160</td>
            <td>-65<br>
                -195</td>
            <td>-80<br>
                -240</td>
            <td>-100<br>
                -290</td>
            <td>-120<br>
                -340</td>
            <td>-145<br>
                -395</td>
            <td>-170<br>
                -460</td>
            <td>-190<br>
                -510</td>
            <td>-210<br>
                -570</td>
            <td>-230<br>
                -630</td>
          </tr>
          <tr> 
            <th>e7</th>
            <td>-14<br>
                -24</td>
            <td>-20<br>
                -32</td>
            <td>-25<br>
                -40</td>
            <td>-32<br>
                -50</td>
            <td>-40<br>
                -61</td>
            <td>-50<br>
                -75</td>
            <td>-60<br>
                -90</td>
            <td>-72<br>
                -107</td>
            <td>-85<br>
                -125</td>
            <td>-100<br>
                -146</td>
            <td>-110<br>
                -162</td>
            <td>-125<br>
                -182</td>
            <td>-135<br>
                -198</td>
          </tr>
          <tr> 
            <th>e8</th>
            <td>-14<br>
                -28</td>
            <td>-20<br>
                -38</td>
            <td>-25<br>
                -47</td>
            <td>-32<br>
                -59</td>
            <td>-40<br>
                -73</td>
            <td>-50<br>
                -89</td>
            <td>-60<br>
                -106</td>
            <td>-72<br>
                -126</td>
            <td>-85<br>
                -148</td>
            <td>-100<br>
                -172</td>
            <td>-110<br>
                -191</td>
            <td>-125<br>
                -214</td>
            <td>-135<br>
                -232</td>
          </tr>
          <tr> 
            <th>e9</th>
            <td>-14<br>
                -39</td>
            <td>-20<br>
                -50</td>
            <td>-25<br>
                -61</td>
            <td>-32<br>
                -75</td>
            <td>-40<br>
                -92</td>
            <td>-50<br>
                -112</td>
            <td>-60<br>
                -134</td>
            <td>-72<br>
                -159</td>
            <td>-85<br>
                -185</td>
            <td>-100<br>
                -215</td>
            <td>-110<br>
                -240</td>
            <td>-125<br>
                -265</td>
            <td>-135<br>
                -290</td>
          </tr>
          <tr> 
            <th>f6</th>
            <td>-6<br>
                -12</td>
            <td>-10<br>
                -18</td>
            <td>-13<br>
                -22</td>
            <td>-16<br>
                -27</td>
            <td>-20<br>
                -33</td>
            <td>-25<br>
                -41</td>
            <td>-30<br>
                -49</td>
            <td>-36<br>
                -58</td>
            <td>-43<br>
                -68</td>
            <td>-50<br>
                -79</td>
            <td>-56<br>
                -88</td>
            <td>-62<br>
                -98</td>
            <td>-68<br>
                -108</td>
          </tr>
          <tr> 
            <th>f7</th>
            <td>-6<br>
                -16</td>
            <td>-10<br>
                -22</td>
            <td>-13<br>
                -28</td>
            <td>-16<br>
                -34</td>
            <td>-20<br>
                -41</td>
            <td>-25<br>
                -50</td>
            <td>-30<br>
                -60</td>
            <td>-36<br>
                -71</td>
            <td>-43<br>
                -83</td>
            <td>-50<br>
                -96</td>
            <td>-56<br>
                -108</td>
            <td>-62<br>
                -119</td>
            <td>-68<br>
                -131</td>
          </tr>
          <tr> 
            <th>f8</th>
            <td>-6<br>
                -20</td>
            <td>-10<br>
                -28</td>
            <td>-13<br>
                -35</td>
            <td>-16<br>
                -43</td>
            <td>-20<br>
                -53</td>
            <td>-25<br>
                -64</td>
            <td>-30<br>
                -76</td>
            <td>-36<br>
                -90</td>
            <td>-43<br>
                -106</td>
            <td>-50<br>
                -122</td>
            <td>-56<br>
                -137</td>
            <td>-62<br>
                -151</td>
            <td>-68<br>
                -165</td>
          </tr>
          <tr> 
            <th>g5</th>
            <td>-2<br>
                -6</td>
            <td>-4<br>
                -9</td>
            <td>-5<br>
                -11</td>
            <td>-6<br>
                -14</td>
            <td>-7<br>
                -16</td>
            <td>-9<br>
                -20</td>
            <td>-10<br>
                -23</td>
            <td>-12<br>
                -27</td>
            <td>-14<br>
                -32</td>
            <td>-15<br>
                -35</td>
            <td>-17<br>
                -40</td>
            <td>-18<br>
                -43</td>
            <td>-20<br>
                -47</td>
          </tr>
          <tr> 
            <th>g6</th>
            <td>-2<br>
                -8</td>
            <td>-4<br>
                -12</td>
            <td>-5<br>
                -14</td>
            <td>-6<br>
                -17</td>
            <td>-7<br>
                -20</td>
            <td>-9<br>
                -25</td>
            <td>-10<br>
                -29</td>
            <td>-12<br>
                -34</td>
            <td>-14<br>
                -39</td>
            <td>-15<br>
                -44</td>
            <td>-17<br>
                -49</td>
            <td>-18<br>
                -54</td>
            <td>-20<br>
                -60</td>
          </tr>
          <tr class="fond"> 
            <th>h5</th>
            <td>0<br>
                -4</td>
            <td>0<br>
                -5</td>
            <td>0<br>
                -6</td>
            <td>0<br>
                -8</td>
            <td>0<br>
                -9</td>
            <td>0<br>
                -11</td>
            <td>0<br>
                -13</td>
            <td>0<br>
                -15</td>
            <td>0<br>
                -18</td>
            <td>0<br>
                -20</td>
            <td>0<br>
                -23</td>
            <td>0<br>
                -25</td>
            <td>0<br>
                -27</td>
          </tr>
          <tr class="fond"> 
            <th>h6</th>
            <td>0<br>
                -6</td>
            <td>0<br>
                -8</td>
            <td>0<br>
                -9</td>
            <td>0<br>
                -11</td>
            <td>0<br>
                -13</td>
            <td>0<br>
                -16</td>
            <td>0<br>
                -19</td>
            <td>0<br>
                -22</td>
            <td>0<br>
                -25</td>
            <td>0<br>
                -29</td>
            <td>0<br>
                -32</td>
            <td>0<br>
                -36</td>
            <td>0<br>
                -40</td>
          </tr>
          <tr class="fond"> 
            <th>h7</th>
            <td>0<br>
                -10</td>
            <td>0<br>
                -12</td>
            <td>0<br>
                -15</td>
            <td>0<br>
                -18</td>
            <td>0<br>
                -21</td>
            <td>0<br>
                -25</td>
            <td>0<br>
                -30</td>
            <td>0<br>
                -35</td>
            <td>0<br>
                -40</td>
            <td>0<br>
                -46</td>
            <td>0<br>
                -52</td>
            <td>0<br>
                -57</td>
            <td>0<br>
                -63</td>
          </tr>
          <tr class="fond"> 
            <th>h8</th>
            <td>0<br>
                -14</td>
            <td>0<br>
                -18</td>
            <td>0<br>
                -22</td>
            <td>0<br>
                -27</td>
            <td>0<br>
                -33</td>
            <td>0<br>
                -39</td>
            <td>0<br>
                -46</td>
            <td>0<br>
                -54</td>
            <td>0<br>
                -63</td>
            <td>0<br>
                -72</td>
            <td>0<br>
                -81</td>
            <td>0<br>
                -89</td>
            <td>0<br>
                -97</td>
          </tr>
          <tr class="fond"> 
            <th>h9</th>
            <td>0<br>
                -25</td>
            <td>0<br>
                -30</td>
            <td>0<br>
                -36</td>
            <td>0<br>
                -43</td>
            <td>0<br>
                -52</td>
            <td>0<br>
                -62</td>
            <td>0<br>
                -74</td>
            <td>0<br>
                -87</td>
            <td>0<br>
                -100</td>
            <td>0<br>
                -115</td>
            <td>0<br>
                -130</td>
            <td>0<br>
                -140</td>
            <td>0<br>
                -155</td>
          </tr>
          <tr class="fond"> 
            <th>h10</th>
            <td>0<br>
                -40</td>
            <td>0<br>
                -48</td>
            <td>0<br>
                -58</td>
            <td>0<br>
                -70</td>
            <td>0<br>
                -84</td>
            <td>0<br>
                -100</td>
            <td>0<br>
                -120</td>
            <td>0<br>
                -140</td>
            <td>0<br>
                -160</td>
            <td>0<br>
                -185</td>
            <td>0<br>
                -210</td>
            <td>0<br>
                -230</td>
            <td>0<br>
                -250</td>
          </tr>
          <tr class="fond"> 
            <th>h11</th>
            <td>0<br>
                -60</td>
            <td>0<br>
                -75</td>
            <td>0<br>
                -90</td>
            <td>0<br>
                -110</td>
            <td>0<br>
                -130</td>
            <td>0<br>
                -160</td>
            <td>0<br>
                -190</td>
            <td>0<br>
                -220</td>
            <td>0<br>
                -250</td>
            <td>0<br>
                -290</td>
            <td>0<br>
                -320</td>
            <td>0<br>
                -360</td>
            <td>0<br>
                -400</td>
          </tr>
          <tr class="fond"> 
            <th>h13</th>
            <td>0<br>
                -140</td>
            <td>0<br>
                -180</td>
            <td>0<br>
                -220</td>
            <td>0<br>
                -270</td>
            <td>0<br>
                -330</td>
            <td>0<br>
                -390</td>
            <td>0<br>
                -460</td>
            <td>0<br>
                -540</td>
            <td>0<br>
                -630</td>
            <td>0<br>
                -720</td>
            <td>0<br>
                -810</td>
            <td>0<br>
                -890</td>
            <td>0<br>
                -970</td>
          </tr>
          <tr> 
            <th>js5</th>
            <td>&pm;2</td>
            <td>&pm;2,5</td>
            <td>&pm;3</td>
            <td>&pm;4</td>
            <td>&pm;4,5</td>
            <td>&pm;5,5</td>
            <td>&pm;6,5</td>
            <td>&pm;17,5</td>
            <td>&pm;9</td>
            <td>&pm;10</td>
            <td>&pm;11,5</td>
            <td>&pm;12,5</td>
            <td>&pm;13,5</td>
          </tr>
          <tr> 
            <th>js6</th>
            <td>&pm;3</td>
            <td>&pm;4</td>
            <td>&pm;4,5</td>
            <td>&pm;5,5</td>
            <td>&pm;6,5</td>
            <td>&pm;8</td>
            <td>&pm;9,5</td>
            <td>&pm;11</td>
            <td>&pm;12,5</td>
            <td>&pm;14,5</td>
            <td>&pm;16</td>
            <td>&pm;18</td>
            <td>&pm;20</td>
          </tr>
          <tr> 
            <th>js7</th>
            <td>&pm;5</td>
            <td>&pm;6</td>
            <td>&pm;7,5</td>
            <td>&pm;9</td>
            <td>&pm;10,5</td>
            <td>&pm;12,5</td>
            <td>&pm;15</td>
            <td>&pm;17,5</td>
            <td>&pm;20</td>
            <td>&pm;23</td>
            <td>&pm;26</td>
            <td>&pm;28,5</td>
            <td>&pm;31,5</td>
          </tr>
          <tr> 
            <th>js9</th>
            <td>&pm;12</td>
            <td>&pm;15</td>
            <td>&pm;18</td>
            <td>&pm;21</td>
            <td>&pm;26</td>
            <td>&pm;31</td>
            <td>&pm;37</td>
            <td>&pm;43</td>
            <td>&pm;50</td>
            <td>&pm;57</td>
            <td>&pm;65</td>
            <td>&pm;70</td>
            <td>&pm;77</td>
          </tr>
          <tr> 
            <th>js11</th>
            <td>&pm;30</td>
            <td>&pm;37</td>
            <td>&pm;45</td>
            <td>&pm;55</td>
            <td>&pm;65</td>
            <td>&pm;80</td>
            <td>&pm;95</td>
            <td>&pm;110</td>
            <td>&pm;125</td>
            <td>&pm;145</td>
            <td>&pm;160</td>
            <td>&pm;180</td>
            <td>&pm;200</td>
          </tr>
          <tr> 
            <th>j6</th>
            <td>+4<br>
                -2</td>
            <td>+6<br>
                -2</td>
            <td>+7<br>
                -2</td>
            <td>+8<br>
                -3</td>
            <td>+9<br>
                -4</td>
            <td>+11<br>
                -5</td>
            <td>+12<br>
                -7</td>
            <td>+13<br>
                -9</td>
            <td>+14<br>
                -11</td>
            <td>+16<br>
                -13</td>
            <td>+16<br>
                -16</td>
            <td>+18<br>
                -18</td>
            <td>+20<br>
                -20</td>
          </tr>
          <tr> 
            <th>j7</th>
            <td>+6<br>
                -4</td>
            <td>+8<br>
                -4</td>
            <td>+10<br>
                -5</td>
            <td>+12<br>
                -6</td>
            <td>+13<br>
                -8</td>
            <td>+15<br>
                -10</td>
            <td>+18<br>
                -12</td>
            <td>+20<br>
                -15</td>
            <td>+22<br>
                -18</td>
            <td>+25<br>
                -21</td>
            <td>+26<br>
                -26</td>
            <td>+29<br>
                -28</td>
            <td>+31<br>
                -32</td>
          </tr>
          <tr> 
            <th>k5</th>
            <td>+4<br>
                0 </td>
            <td>+6<br>
                +1</td>
            <td>+7<br>
                +1</td>
            <td>+9<br>
                +1</td>
            <td>+11<br>
                +2</td>
            <td>+13<br>
                +2</td>
            <td>+15<br>
                +2</td>
            <td>+18<br>
                +3</td>
            <td>+21<br>
                +3</td>
            <td>+24<br>
                +4 </td>
            <td>+27<br>
                +4</td>
            <td>+29<br>
                +4</td>
            <td>+32<br>
                +5</td>
          </tr>
          <tr> 
            <th>k6</th>
            <td>+6<br>
                0 </td>
            <td>+9<br>
                +1</td>
            <td>+10<br>
                +1</td>
            <td>+12<br>
                +1</td>
            <td>+15<br>
                +2</td>
            <td>+18<br>
                +2</td>
            <td>+21<br>
                +2</td>
            <td>+25<br>
                +3</td>
            <td>+28<br>
                +3</td>
            <td>+33<br>
                +4 </td>
            <td>+36<br>
                +4</td>
            <td>+40<br>
                +4</td>
            <td>+45<br>
                +5</td>
          </tr>
          <tr> 
            <th>m5</th>
            <td>+6<br>
                +2</td>
            <td>+9<br>
                +4</td>
            <td>+12<br>
                +6</td>
            <td>+15<br>
                +7</td>
            <td>+17<br>
                +8</td>
            <td>+20<br>
                +9</td>
            <td>+24<br>
                +11</td>
            <td>+28<br>
                +13</td>
            <td>+33<br>
                +15</td>
            <td>+37<br>
                +17</td>
            <td>+43<br>
                +20</td>
            <td>+46<br>
                +21</td>
            <td>+50<br>
                +23</td>
          </tr>
          <tr> 
            <th>m6</th>
            <td>+8<br>
                +2</td>
            <td>+12<br>
                +4</td>
            <td>+15<br>
                +6</td>
            <td>+18<br>
                +7</td>
            <td>+21<br>
                +8</td>
            <td>+25<br>
                +9</td>
            <td>+30<br>
                +11</td>
            <td>+35<br>
                +13</td>
            <td>+40<br>
                +15</td>
            <td>+46<br>
                +17</td>
            <td>+52<br>
                +20</td>
            <td>+57<br>
                +21</td>
            <td>+63<br>
                +23</td>
          </tr>
          <tr> 
            <th>m7</th>
            <td>+12<br>
                +2</td>
            <td>+16<br>
                +4</td>
            <td>+21<br>
                +6</td>
            <td>+25<br>
                +7</td>
            <td>+29<br>
                +8</td>
            <td>+34<br>
                +9</td>
            <td>+41<br>
                +11</td>
            <td>+48<br>
                +13</td>
            <td>+55<br>
                +15</td>
            <td>+63<br>
                +17</td>
            <td>+72<br>
                +20</td>
            <td>+78<br>
                +21</td>
            <td>+86<br>
                +23</td>
          </tr>
          <tr> 
            <th>n6</th>
            <td>+10<br>
                +4</td>
            <td>+16<br>
                +8</td>
            <td>+19<br>
                +10</td>
            <td>+23<br>
                +12</td>
            <td>+28<br>
                +15</td>
            <td>+33<br>
                +17</td>
            <td>+39<br>
                +20</td>
            <td>+45<br>
                +23</td>
            <td>+52<br>
                +27</td>
            <td>+60<br>
                +31</td>
            <td>+66<br>
                +34</td>
            <td>+73<br>
                +37</td>
            <td>+80<br>
                +40</td>
          </tr>
          <tr> 
            <th>p6</th>
            <td>+12<br>
                +6</td>
            <td>+20<br>
                +12</td>
            <td>+24<br>
                +15</td>
            <td>+29<br>
                +18</td>
            <td>+35<br>
                +22</td>
            <td>+42<br>
                +26</td>
            <td>+51<br>
                +32</td>
            <td>+59<br>
                +37</td>
            <td>+68<br>
                +43</td>
            <td>+79<br>
                +50</td>
            <td>+88<br>
                +56</td>
            <td>+98<br>
                +62</td>
            <td>+108<br>
                +68</td>
          </tr>
        </tbody>
    </table>
	
	<p class="notice remarque">L'ajustement js/JS est le seul pour lequel l'écart supérieur et inférieur ont la même valeur absolue. Ce type d'ajustement est plutôt utilisé pour du tolérancement général.</p>


