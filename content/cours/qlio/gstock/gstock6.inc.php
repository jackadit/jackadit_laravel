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
$sNavigation = navigation('gstock', '6'); ?>





<h1>Stock de sécurité</h1>


<h2> Détermination du stock de sécurité</h2>

<p>Si la demande et l'offre sont volatile et variable, le stock de sécurité permet d'améliorer la disponibilité des produits dans la Supply Chain.</p>

<img src="/assets/img/qlio/gstock/graphique_simple_point_commande.png" alt="graphique simple illustrant le point de commande" />

<img src="/assets/img/qlio/gstock/graphique_complet_point_commande.png" alt="graphique complet illustrant le point de commande" />

<p>Si on augmente le délai le stock de sécurité augmente également.</p>

<img src="/assets/img/qlio/gstock/graphique_complet_point_commande_securite.png" alt="graphique complet illustrant le point de commande avec le stock de sécurité" />

<h2> Pourquoi un stock de sécurité ?</h2>

<dl>
	<dt>Stock de sécurité</dt>
	<dd>Quantité de stock prévue pour protéger contre les fluctuations de demande ou de livraison.</dd>
</dl>

<p>Demande dépendante : se protéger contre les variations du délai fournisseur ou rebuts de production.</p>
<p>Demande indépendante : se protéger contre la variation de la demande</p>

<h2> Variabilité</h2>

<p>La variabilité peut se traduire sous deux formes :</p>
<ul>
	<li>Quantité : stock de sécurité</li>
	<li>Délai : délai de sécurité</li>
</ul>

<p>On peut également trouver d'autres éléments influençant :</p>
<ul>
	<li>Variabilité de la demande pendant le délai de réapprovisionnement.</li>
	<li>Fréquence de réapprovisionnement.</li>
	<li>Niveau de service souhaité.</li>
	<li>Longueur du délai.</li>
</ul>

<p class="notice remarque">Plus le délai est long, plus le niveau du stock de sécurité est important, c'est pourquoi il faut réduire les délais.</p>
<p class="notice remarque">Plus on alimente fréquemment, plus les risques de ruptures sont importants.</p>
<p class="notice remarque">Dans tous les cas, il faut connaître les distributions de probabilité.</p>

<p>Si la demande indépendante sur un article suit une loi normale (courbe de Gauss), on peut déterminer le stock de sécurité par calcul.</p>


<img src="/assets/img/qlio/gstock/courbe_de_gauss.png" alt="Courbe de Gauss" />


<p>Les seuils de commande sont déterminés à partir des délais et des consommations moyennes (c). Si la consommation est inférieure à la moyenne (b) cela va faire monter, momentanément, le niveau du stock. Si la consommation est supérieure à la moyenne (d) cela provoquera une rupture de stock.</p>
<p>C'est pour se prémunir de cette rupture que l'on mettra en place un stock de sécurité.</p>



<h2> Répartition de la demande</h2>


<img src="/assets/img/qlio/gstock/repartition_demande_50.png" alt="Courbe de Gauss avec répartion de 50%" />


<img src="/assets/img/qlio/gstock/risque_rupture.png" alt="Courbe de Gauss montrant la zone de risque de rupture" />

<p>L'importance du stock de sécurité dépendra du niveau de service que l'on veut obtenir.</p>


<p>Si le stock de sécurité est égal à 0, nous aurons un taux de service de 50%. Il est possible de calculer le taux de service que l'on peut obtenir, en connaissant le nombre d'écart-type de produits que l'on a en stock de sécurité.</p>


<div>Si la répartition est normale, on pourra calculer l'écart-type (<span class="xl">𝜎</span>) selon la formule :

	<div class="formule">
		<span class="xxl">𝜎</span> = <span class="radical4">&radic;</span>
		<div class="fraction">
			<div class="radicand4">
				<sup class="n">n</sup>
				<span class="xxl">Σ</span>
				<sub class="i">i=1</sub>
				<div class="fraction">
					<span class="numerateur ">(X<sub>i</sub> - <span class="moyenne">X</span>)<sup>2</sup></span>
					<span class="bar">/</span>
					<span class="denominateur">n</span>
				</div>
			</div>

		</div>
	</div>

</div>

<div class="notice remarque">
    <p class="h3-like">L'écart-type est la racine carré de la variance.</p>
    <p class="h3-like">Comment interpréter la variance ?<p>

    <p>La variance est la dispersion des valeurs par rapport à la moyenne.</p>
    <p>Concrètement, la variance est définie comme la moyenne des carrés des écarts à la moyenne.</p>
    <p>La considération du carré de ces écarts évite que s'annulent des écarts positifs et négatifs.</p>
    </div>

<p>&nbsp;</p>
<img src="/assets/img/qlio/gstock/probabilite_demande.png" alt="Courbe de Gauss montrant la probabilité de la demande en %" />


<p>Dans notre exemple, la distribution de la demande est donnée :
<ul>
	<li>Demande de 5 articles/période : 1% du temps.</li>
	<li>Demande de 10 articles/période : 4% du temps.</li>
	<li>Demande de 15 articles/période : 10% du temps.</li>
	<li>Etc.</li>
</ul>

<p>Si X est la demande moyenne, on aura :</p>
<ul>
    <li>99,73% des demandes qui seront situées dans un intervalle de X &plusmn;3<span class="xl">𝜎</span></li>
    <li>95,45% des demandes qui seront situées dans un intervalle de X &plusmn;2<span class="xl">𝜎</span></li>
    <li>68,27% des demandes qui seront situées dans un intervalle de X &plusmn;1<span class="xl">𝜎</span></li>
</ul>

<p>On peut également, à partir de tables de probabilités, déterminer le niveau du stock de sécurité pour obtenir un taux de service objectif.</p>



<p>Un stock de sécurité de un écart-type donnera un taux de service de :</p>


<div class="formule">
<span class="xl">𝜎</span> =
	<div class="fraction">
		<span class="numerateur">68,27 %</span>
		<span class="bar">/</span>
		<span class="denominateur">2</span>
	</div>
	+ 50 % =  84,135%
</div>
    <h2>La loi normale</h2>

    <p>Lorsqu'un phénomène est influencé par plusieurs facteurs indépendants, les résultats des mesures de ce phénomène obéissent à une loi que l'on appelle la <strong>loi normale</strong>.</p>

    <p>La loi normale décrit beaucoup de phénomènes naturels et peut être utilisée dans un grand nombre de situations.</p>

    <h3>Qu'est-ce qu'une distribution normale ?</h3>

    <p>La distribution normale est une distribution de probabilité continue, contrairement à la loi de Poisson ou à la loi binomiale qui sont des distributions de probabilité discrète.</p>

    <p> On peut parler également de distribution Gaussienne. On notera que sa représentation graphique est appelée courbe en cloche. La courbe normale a la particularité d'être symétrique.</p>


    <h3>Quelle est la formule de la loi normale ?</h3>
    <p>La variable utilisée est continue, C'est-à-dire qu'elle peut prendre un nombre indéfini de valeurs.</p>

    <p>Cette courbe a deux paramètres : μ et σ.</p>

    <p>formule loi normale : </p>

    <div class="formule">
    <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
        <mtable displaystyle="true" columnspacing="1em" rowspacing="3pt">
            <mtr>
                <mtd>
                    <msub>
                        <mi>p</mi>
                    </msub>
                    <mo stretchy="false">(</mo>
                    <mi>x</mi>
                    <mo stretchy="false">)</mo>
                    <mo>=</mo>
                    <mfrac>
                        <mn>1</mn>
                        <mrow>
                            <mi>&#x3C3;</mi>
                            <mo stretchy="false">&radic;</mo>
                            <mn class="radicand">2</mn>
                            <mi class="radicand">&#x3C0;</mi>
                        </mrow>
                    </mfrac>
                    <mi>exp</mi>
                    <mo data-mjx-texclass="NONE">&#x2061;</mo>
                    <mrow data-mjx-texclass="INNER">
                        <mo data-mjx-texclass="OPEN">(</mo>
                        <mo>&#x2212;</mo>
                        <mfrac>
                            <mrow>
                                <mo stretchy="false">(</mo>
                                <mi>x</mi>
                                <mo>&#x2212;</mo>
                                <mi>&#x3BC;</mi>
                                <msup>
                                    <mo stretchy="false">)</mo>
                                    <mn>2</mn>
                                </msup>
                            </mrow>
                            <mrow>
                                <mn>2</mn>
                                <msup>
                                    <mi>&#x3C3;</mi>
                                    <mn>2</mn>
                                </msup>
                            </mrow>
                        </mfrac>
                        <mo data-mjx-texclass="CLOSE">)</mo>
                    </mrow>
                </mtd>
            </mtr>
        </mtable>
    </math>
    </div>

    <p>avec :
    <ul>
        <li>μ : moyenne</li>
        <li>σ : écart type</li>
        <li>e : Le nombre d'Euler (2,71828)</li>
        <li>π : Pi (3.14159)</li>
    </ul>

    <p>N'ayez pas peur de cette formule puisque vous n'aurez pas à l'utiliser. En effet, les outils, tel que Excel, permettent de réaliser très facilement son calcul.</p>


<h2>Loi normale centrée réduite</h2>

<div class="notice info">
    <p class="h3-like">Astuce Excel pour calculer la probabilité</p>

    <p>Il est possible d'utiliser la formule Excel suivante :</p>

    <p>=LOI.NORMALE.STANDARD.N(Z;VRAI)-(1-LOI.NORMALE.STANDARD.N(Z;VRAI))</p>

    <p> Par exemple, pour calculer la probabilité dans une aire comprise entre -1.8 α et +1.8 α on appliquera la formule en remplaçant Z par 1.8 :</p>

    <p>=LOI.NORMALE.STANDARD.N(1.8;VRAI)-(1-LOI.NORMALE.STANDARD.N(1.8;VRAI))</p>

    <p>Le résultat obtenu sera : 92.82%</p>
</div>

    <h3>Pourquoi utiliser le Z-score ?</h3>
    
    <p>Le principe est de convertir les valeurs de l'unité de mesure originale en une nouvelle unité appelé le Z-score (ou cote Z).</p>
    <p>La cote Z correspond au nombre d'écarts types séparant un résultat de la moyenne.</p>

    <div class="notice exemple">
    <p>Exemple d'une distribution quelconque centré sur μ et d'écart-type σ.</p>
    
    <img src="/assets/img/qlio/gstock/loinormaleaireecarttype1.png" alt="loi normal d'écart type = 1" />

    <p>La formule est la suivante :</p>
        <div class="formule">
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mtable displaystyle="true" columnspacing="1em" rowspacing="3pt">
                    <mtr>
                        <mtd>
                            <msub>
                                <mi>Z</mi>
                            </msub>
                            <mo>=</mo>
                            <mrow data-mjx-texclass="INNER">
                                <mfrac>
                                    <mrow>
                                        <mi>x</mi>
                                        <mo>&#x2212;</mo>
                                        <mi>&#x3BC;</mi>
                                    </mrow>
                                    <mrow>
                                        <msup>
                                            <mi>&#x3C3;</mi>
                                        </msup>
                                    </mrow>
                                </mfrac>
                            </mrow>
                        </mtd>
                    </mtr>
                </mtable>
            </math>
        </div>

    <p>En d'autres termes, le Z score défini de combien d'écart-types la valeur recherchée est éloignée de la moyenne.</p>
    <p>Ainsi, si on décale la distribution sur "0" en soustrayant la valeur de la moyenne μ, on obtient un écart-type égale à "1" en divisant par l'écart-type de la population.</p>

    <p>Le Z-score correspondra ainsi à la coordonnée en abscisse. On n'aura plus à soustraire μ, car la moyenne sera de 0 et on n'aura pas à diviser par sigma σ car l'écart-type sera de 1.</p>
    </div>

<h2> Table de la loi normale centrée réduite</h2>

    <p class="notice remarque">Comme il existe une infinité de loi normale, pour simplifier les choses, on choisi une loi normale spécifique de paramètres : μ=0 et de σ=1. Cette distribution est connue sous le nom de loi normale centrée réduite.</p>

<img src="/assets/img/qlio/gstock/exemple_courbe_gauss.png" alt="Courbe de Gauss exemple z=1.24" />


    <div  class="notice remarque">
        <p class="h3-like">Interprétation de l'écart-type de la loi normale centrée réduite.</p>

        <p>Les valeurs en abscisse représentent des unités d'écart-type.</p>

        <p>Sur l'axes des abscisses on trouve des valeurs allant de -6σ à +6σ.</p>
        <p>Le centre de la courbe est positionné au-dessus de 0.</p>
    </div>


<p>Lecture de la table : Pour z=1.24 (intersection de la ligne 1.2 et de la colonne 0.04), on a la proportion P(Z < 1,24) = 0.8925</p>


<table class="table font-s">
<tr><th>Z  </th><th>0,00 </th><th>0,01 </th><th>0,02 </th><th>0,03 </th><td class=" bg-bleu-light">0,04 </td><th>0,05 </th><th>0,06 </th><th>0,07 </th><th>0,08 </th><th>0,09 </th></tr>
<tr><td>0,0</td><td>0,5000</td><td>0,5040</td><td>0,5080</td><td>0,5120</td><td>0,5160</td><td>0,5199</td><td>0,5239</td><td>0,5279</td><td>0,5319</td><td>0,5359</td></tr>
<tr><td>0,1</td><td>0,5398</td><td>0,5438</td><td>0,5478</td><td>0,5517</td><td>0,5557</td><td>0,5596</td><td>0,5636</td><td>0,5675</td><td>0,5714</td><td>0,5753</td></tr>
<tr><td>0,2</td><td>0,5793</td><td>0,5832</td><td>0,5871</td><td>0,5910</td><td>0,5948</td><td>0,5987</td><td>0,6026</td><td>0,6064</td><td>0,6103</td><td>0,6141</td></tr>
<tr><td>0,3</td><td>0,6179</td><td>0,6217</td><td>0,6255</td><td>0,6293</td><td>0,6331</td><td>0,6368</td><td>0,6406</td><td>0,6443</td><td>0,6480</td><td>0,6517</td></tr>
<tr><td>0,4</td><td>0,6554</td><td>0,6591</td><td>0,6628</td><td>0,6664</td><td>0,6700</td><td>0,6736</td><td>0,6772</td><td>0,6808</td><td>0,6844</td><td>0,6879</td></tr>
<tr><td>0,5</td><td>0,6915</td><td>0,6950</td><td>0,6985</td><td>0,7019</td><td>0,7054</td><td>0,7088</td><td>0,7123</td><td>0,7157</td><td>0,7190</td><td>0,7224</td></tr>
<tr><td>0,6</td><td>0,7257</td><td>0,7291</td><td>0,7324</td><td>0,7357</td><td>0,7389</td><td>0,7422</td><td>0,7454</td><td>0,7486</td><td>0,7517</td><td>0,7549</td></tr>
<tr><td>0,7</td><td>0,7580</td><td>0,7611</td><td>0,7642</td><td>0,7673</td><td>0,7704</td><td>0,7734</td><td>0,7764</td><td>0,7794</td><td>0,7823</td><td>0,7852</td></tr>
<tr><td>0,8</td><td>0,7881</td><td>0,7910</td><td>0,7939</td><td>0,7967</td><td>0,7995</td><td>0,8023</td><td>0,8051</td><td>0,8078</td><td>0,8106</td><td>0,8133</td></tr>
<tr><td>0,9</td><td>0,8159</td><td>0,8186</td><td>0,8212</td><td>0,8238</td><td>0,8264</td><td>0,8289</td><td>0,8315</td><td>0,8340</td><td>0,8365</td><td>0,8389</td></tr>
<tr><td>1,0</td><td>0,8413</td><td>0,8438</td><td>0,8461</td><td>0,8485</td><td>0,8508</td><td>0,8531</td><td>0,8554</td><td>0,8577</td><td>0,8599</td><td>0,8621</td></tr>
<tr><td>1,1</td><td>0,8643</td><td>0,8665</td><td>0,8686</td><td>0,8708</td><td>0,8729</td><td>0,8749</td><td>0,8770</td><td>0,8790</td><td>0,8810</td><td>0,8830</td></tr>
<tr><td class=" bg-bleu-light">1,2</td><td>0,8849</td><td>0,8869</td><td>0,8888</td><td>0,8907</td><td class=" bg-bleu-light">0,8925</td><td>0,8944</td><td>0,8962</td><td>0,8980</td><td>0,8997</td><td>0,9015</td></tr>
<tr><td>1,3</td><td>0,9032</td><td>0,9049</td><td>0,9066</td><td>0,9082</td><td>0,9099</td><td>0,9115</td><td>0,9131</td><td>0,9147</td><td>0,9162</td><td>0,9177</td></tr>
<tr><td>1,4</td><td>0,9192</td><td>0,9207</td><td>0,9222</td><td>0,9236</td><td>0,9251</td><td>0,9265</td><td>0,9279</td><td>0,9292</td><td>0,9306</td><td>0,9319</td></tr>
<tr><td>1,5</td><td>0,9332</td><td>0,9345</td><td>0,9357</td><td>0,9370</td><td>0,9382</td><td>0,9394</td><td>0,9406</td><td>0,9418</td><td>0,9429</td><td>0,9441</td></tr>
<tr><td>1,6</td><td>0,9452</td><td>0,9463</td><td>0,9474</td><td>0,9484</td><td>0,9495</td><td>0,9505</td><td>0,9515</td><td>0,9525</td><td>0,9535</td><td>0,9545</td></tr>
<tr><td>1,7</td><td>0,9554</td><td>0,9564</td><td>0,9573</td><td>0,9582</td><td>0,9591</td><td>0,9599</td><td>0,9608</td><td>0,9616</td><td>0,9625</td><td>0,9633</td></tr>
<tr><td>1,8</td><td>0,9641</td><td>0,9649</td><td>0,9656</td><td>0,9664</td><td>0,9671</td><td>0,9678</td><td>0,9686</td><td>0,9693</td><td>0,9699</td><td>0,9706</td></tr>
<tr><td>1,9</td><td>0,9713</td><td>0,9719</td><td>0,9726</td><td>0,9732</td><td>0,9738</td><td>0,9744</td><td>0,9750</td><td>0,9756</td><td>0,9761</td><td>0,9767</td></tr>
<tr><td>2,0</td><td>0,9772</td><td>0,9778</td><td>0,9783</td><td>0,9788</td><td>0,9793</td><td>0,9798</td><td>0,9803</td><td>0,9808</td><td>0,9812</td><td>0,9817</td></tr>
<tr><td>2,1</td><td>0,9821</td><td>0,9826</td><td>0,9830</td><td>0,9834</td><td>0,9838</td><td>0,9842</td><td>0,9846</td><td>0,9850</td><td>0,9854</td><td>0,9857</td></tr>
<tr><td>2,2</td><td>0,9861</td><td>0,9864</td><td>0,9868</td><td>0,9871</td><td>0,9875</td><td>0,9878</td><td>0,9881</td><td>0,9884</td><td>0,9887</td><td>0,9890</td></tr>
<tr><td>2,3</td><td>0,9893</td><td>0,9896</td><td>0,9898</td><td>0,9901</td><td>0,9904</td><td>0,9906</td><td>0,9909</td><td>0,9911</td><td>0,9913</td><td>0,9916</td></tr>
<tr><td>2,4</td><td>0,9918</td><td>0,9920</td><td>0,9922</td><td>0,9925</td><td>0,9927</td><td>0,9929</td><td>0,9931</td><td>0,9932</td><td>0,9934</td><td>0,9936</td></tr>
<tr><td>2,5</td><td>0,9938</td><td>0,9940</td><td>0,9941</td><td>0,9943</td><td>0,9945</td><td>0,9946</td><td>0,9948</td><td>0,9949</td><td>0,9951</td><td>0,9952</td></tr>
<tr><td>2,6</td><td>0,9953</td><td>0,9955</td><td>0,9956</td><td>0,9957</td><td>0,9959</td><td>0,9960</td><td>0,9961</td><td>0,9962</td><td>0,9963</td><td>0,9964</td></tr>
<tr><td>2,7</td><td>0,9965</td><td>0,9966</td><td>0,9967</td><td>0,9968</td><td>0,9969</td><td>0,9970</td><td>0,9971</td><td>0,9972</td><td>0,9973</td><td>0,9974</td></tr>
<tr><td>2,8</td><td>0,9974</td><td>0,9975</td><td>0,9976</td><td>0,9977</td><td>0,9977</td><td>0,9978</td><td>0,9979</td><td>0,9979</td><td>0,9980</td><td>0,9981</td></tr>
<tr><td>2,9</td><td>0,9981</td><td>0,9982</td><td>0,9982</td><td>0,9983</td><td>0,9984</td><td>0,9984</td><td>0,9985</td><td>0,9985</td><td>0,9986</td><td>0,9986</td></tr>
<tr><td>3,0</td><td>0,9987</td><td>0,9987</td><td>0,9987</td><td>0,9988</td><td>0,9988</td><td>0,9989</td><td>0,9989</td><td>0,9989</td><td>0,9990</td><td>0,9990</td></tr>
<tr><td>3,1</td><td>0,9990</td><td>0,9991</td><td>0,9991</td><td>0,9991</td><td>0,9992</td><td>0,9992</td><td>0,9992</td><td>0,9992</td><td>0,9993</td><td>0,9993</td></tr>
<tr><td>3,2</td><td>0,9993</td><td>0,9993</td><td>0,9994</td><td>0,9994</td><td>0,9994</td><td>0,9994</td><td>0,9994</td><td>0,9995</td><td>0,9995</td><td>0,9995</td></tr>
<tr><td>3,3</td><td>0,9995</td><td>0,9995</td><td>0,9995</td><td>0,9996</td><td>0,9996</td><td>0,9996</td><td>0,9996</td><td>0,9996</td><td>0,9996</td><td>0,9997</td></tr>
<tr><td>3,4</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9997</td><td>0,9998</td></tr>
<tr><td>3,5</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td><td>0,9998</td></tr>
</table>



<h2> Calcul du stock de sécurité</h2>

<p class="exercice">Exercice : calculer le stock de sécurité permettant d'avoir « x% » de chance de ne jamais être en rupture de stock.
La demande n'est pas constante, mais aléatoire et, de plus, les délais de livraison ou de fabrication peuvent eux-mêmes être aléatoires !</p>

<h3>Délai de livraison fixe</h3>

<p>Considérons un laps de temps comprenant un assez grand nombre de périodes, et faisons les hypothèses suivantes :</p>
<ul>
	<li>Le délai de livraison D est fixe.</li>
	<li>La consommation varie autour d'une moyenne sur une période x et selon une loi normale d'écart type <span class="xl">𝜎</span><sub>x</sub></li>
	<li>Sur le laps de temps T, on considère que les périodes sont indépendantes.</li>
</ul>

<p>Il y a donc additivité des variances : <span class="xl">𝜎</span><sup>2</sup><sub>x,D</sub> = D * <span class="xl">𝜎</span><sup>2</sup><sub>x</sub>

<p>La consommation sur une période D suit donc une loi normale d'écart type <span class="xl">𝜎</span><sub>x,D</sub>  =  <span class="xl">𝜎</span><sub>x</sub> * <span class="radical">&radic;</span><span class="radicand">D</span></p>

<p>Le stock de sécurité est donc égal à :</p>

<p class="formule">SS = z * <span class="xl">𝜎</span><sub>x</sub> * <span class="radical">&radic;</span><span class="radicand">D</span></p>
<p>Z étant la variable réduite associée au risque de rupture choisi.</p>

<p class="notice remarque">On note tout de suite l'intérêt fondamental qu'il y a à réduire de façon considérable le délai de fabrication ou de livraison afin de pouvoir diminuer le stock de sécurité.</p>

<img src="/assets/img/qlio/gstock/courbe_gauss_securite.png" alt="Courbe de Gauss pour stock de sécurité" />



<h3>Consommation fixe :</h3>

    <p>Soit <span class="xl">𝜎</span><sub>d</sub> (jours), l'écart type de la variation sur le <strong>délai de livraison</strong>.</p>
<p>Effectuons un changement de variables jour  &rarr; consommation :</p>
<p><span class="xl">𝜎</span><sub>d</sub>(Conso)  =  (Consommation/jour) . <span class="xl">𝜎</span><sub>d</sub> (jours)</p>

<p>Le stock de sécurité est donc égal à :</p>

<p class="formule">SS =  z * <span class="xl">𝜎</span><sub>d</sub></p>

<p>z étant la variable réduite associée au risque de rupture choisi.</p>

<h3>Consommation et délai variables</h3>

    <p>Le <strong>délai</strong> et la <strong>consommation</strong> étant des variables <strong>indépendantes</strong>, on peut appliquer le théorème d'additivité des variances.</p>

<span class="xl">𝜎</span><sup>2</sup>  =  <span class="xl">𝜎</span><sup>2</sup><sub>d</sub>   +   D * <span class="xl">𝜎</span><sup>2</sup><sub>x</sub>

<p>Le stock de sécurité est donc égal à :</p>

<p class="formule">SS =  z * <span class="xl">𝜎</span> = z * <span class="radical">&radic;</span><span class="radicand"><span class="xl">𝜎</span><sup>2</sup><sub>d</sub> + D * <span class="xl">𝜎</span><sup>2</sup><sub>x</sub></span></p>

<p>z étant la variable réduite associée au risque de rupture choisi.</p>


<div class="exercice">

<p>Exercice 1</p>
<p>Un article de consommation suit une loi de Gauss de moyenne hebdomadaire <span class="barre">X</span> = 50 unités et d'écart-type de : <span class="xl">𝜎</span><sub>x</sub> = 5 unités.</p>
<p>Le délai moyen de livraison est de 4 semaines (20 jours) avec une variation d'écart type de deux jours : <span class="xl">𝜎</span><sub>d</sub> = 2.</p>

<p>En considérant le délai fixe, on peut calculer : <span class="xl">𝜎</span><sup>2</sup><sub>x,D</sub> = D * <span class="xl">𝜎</span><sup>2</sup><sub>x</sub> = 4 * 5² = 100

<p>En considérant la consommation fixe, on peut calculer :</p>

<p><span class="xl">𝜎</span><sub>d</sub>(conso) = (Consommation/jour) * <span class="xl">𝜎</span><sub>d</sub> (jours) = 10 * 2 = 20 , soit <span class="xl">𝜎</span><sup>2</sup><sub>l</sub> = 400</p>

<p>En considérant la consommation et le délai variables, on peut calculer :</p>

<p><span class="xl">𝜎</span><sup>2</sup> = <span class="xl">𝜎</span><sup>2</sup><sub>d</sub>   +   D * <span class="xl">𝜎</span><sup>2</sup><sub>x</sub> = 400 + 100 = 500 , soit <span class="xl">𝜎</span> = 22.36</p>

<p>En acceptant un risque de rupture de 2,5% (taux de service = 97,5%), le stock de sécurité sera :</p>

<p>D'après table de  loi normale réduite  z =  1.96</p>

<p> SS =  z * <span class="xl">𝜎</span> = 1.96 * 22.36 = 44 pièces</p>

</div>

<div class="exercice">
<p>Exercice 2</p>

<ul>
	<li>Qté de commande = 2 600 pièces</li>
	<li>Délai = 1 mois (4 semaines)</li>
	<li>1 commande/an en retard acceptée (52 semaines)</li>
</ul>

<p>Calculer :</p>
<ul>
	<li>Nombre de commandes/an</li>
	<li>Taux de service visé</li>
	<li>Stock de sécurité</li>
	<li>Point de commande</li>
</ul>

<p>Demande actuelle :</p>
<table class="table">
	<tr>
		<th>Semaine</th>
		<th>Pièces</th>
	</tr>
	<tr>
		<td>1</td>
		<td>1200</td>
	</tr>
	<tr>
		<td>2</td>
		<td>1000</td>
	</tr>
	<tr>
		<td>3</td>
		<td>800</td>
	</tr>
	<tr>
		<td>4</td>
		<td>900</td>
	</tr>
	<tr>
		<td>5</td>
		<td>1400</td>
	</tr>
	<tr>
		<td>6</td>
		<td>1100</td>
	</tr>
	<tr>
		<td>7</td>
		<td>1100</td>
	</tr>
	<tr>
		<td>8</td>
		<td>700</td>
	</tr>
	<tr>
		<td>9</td>
		<td>1000</td>
	</tr>
	<tr>
		<td>10</td>
		<td>800</td>
	</tr>
</table>

</div>


<p>Corrigé <input type="checkbox" class="switch" onclick="toggle('reponse')"></p>
<div class="exercice collapse" id="reponse">


	<table class="table">
	<tr>
		<th>Semaine</th>
		<th>Pièces</th>
		<th>X-<span class="barre">X</span></th>
		<th>(X-<span class="barre">X</span>)²</th>
	</tr>
	<tr>
		<td>1</td>
		<td>1 200</td>
		<td>200</td>
		<td>40 000</td>
	</tr>
	<tr>
		<td>2</td>
		<td>1000</td>
		<td>0</td>
		<td>0</td>
	</tr>
	<tr>
		<td>3</td>
		<td>800</td>
		<td>-200</td>
		<td>40 000</td>
	</tr>
	<tr>
		<td>4</td>
		<td>900</td>
		<td>-100</td>
		<td>10 000</td>
	</tr>
	<tr>
		<td>5</td>
		<td>1 400</td>
		<td>400</td>
		<td>160 000</td>
	</tr>
	<tr>
		<td>6</td>
		<td>1 100</td>
		<td>100</td>
		<td>10 000</td>
	</tr>
	<tr>
		<td>7</td>
		<td>1 100</td>
		<td>100</td>
		<td>10 000</td>
	</tr>
	<tr>
		<td>8</td>
		<td>700</td>
		<td>-300</td>
		<td>90 000</td>
	</tr>
	<tr>
		<td>9</td>
		<td>1 000</td>
		<td>0</td>
		<td>0</td>
	</tr>
	<tr>
		<td>10</td>
		<td>800</td>
		<td>-200</td>
		<td>40 000</td>
	</tr>
	<tr>
		<th>Total</th>
		<th>10 000</th>
		<th></th>
		<th>400 000</th>
	</tr>
</table>

<div>
	<span class="barre">X</span> = 
	<div class="fraction">
		<span class="numerateur">10 000</span>
		<span class="bar">/</span>
		<span class="denominateur">10</span>
	</div> = 1000
</div>

<div>
	<span class="xl">𝜎</span> = <span class="radical2">&radic;</span>
	<div class="fraction radicand2">
		<span class="numerateur">400 000</span>
		<span class="bar">/</span>
		<span class="denominateur">9</span>
	</div>= 211 pièces
</div>

<h3>Nombre de commandes / an :</h3>
<ul>
	<li> 
	Demande annuelle = 
	<div class="fraction">
		<span class="numerateur">10 000</span>
		<span class="bar">/</span>
		<span class="denominateur">10</span>
	</div> * 52 = 52 000 pièces

	</li>
	<li>Nombre de commande/an = 
	<div class="fraction">
		<span class="numerateur">52 000</span>
		<span class="bar">/</span>
		<span class="denominateur">2 600</span>
	</div> = 20
</li>
</ul>
<h3>Taux de service</h3>
<ul>
	<li>1 commande en retard /an</li>
	<li>Taux de service = <div class="fraction">
		<span class="numerateur">(20 – 1)</span>
		<span class="bar">/</span>
		<span class="denominateur">20</span>
	</div> = 95 %</li>
</ul>
<h3>Stock de sécurité</h3>
<ul>
	<li>95 % pour 1,65 σ (z = 1,65)</li>
	<li>Stock de sécurité = 1,65 * 211 * <span class="radical">&radic;</span><span class="radicand">4</span> = 696</li>
</ul>
<h3>Point de commande</h3>
<ul>
	<li>Demande pendant le délai = <div class="fraction">
		<span class="numerateur">10 000</span>
		<span class="bar">/</span>
		<span class="denominateur">10</span>
	</div> * 4 = 4 000 pièces</li>
	<li>Point de commande = 4 000 + 696 = 4 696  pièces</li>
</ul>

</div>


<h3>Cas d'emploi d'un stock de sécurité fixe</h3>

<ul>
	<li>Lancement d'un nouveau produit.</li>
	<li>Fin de vie d'un produit.</li>
	<li>Articles à demande dépendante, consommés et planifiés avec le MRP.</li>
</ul>

<div class="notice remarque">
	<ul>
	<li>Pas d'historique ou de prévision de consommation stable et fiable : donc selon le gestionnaire.</li>
	<li>Mise à 0 sinon non consommation du stock de sécurité.</li>
	<li>Stock de sécurité fixe et à zéro.</li>
	</ul>
</div>

<p>&nbsp;</p>

