<h1>Accessibilité : Les tableaux complexes</h1>
<h2>Tableaux complexes</h2>
<p>Un tableau complexe de données est un tableau de données comportant plus d'une ligne ou plus d'une
colonne d'en-tête ou un tableau dont les cellules de données font référence à plus de deux cellules d'en-tête.</p>
<p>Exemple d'un tableau complexe de données : </p>
<table class="table">
	<thead>
	<tr>
		<th colspan="2" rowspan="2"></th>
		<th colspan="2">Année N</th>
		<th colspan="2">Année N+1</th>
	</tr>
	<tr>
		<th>M€</th>
		<th>%</th>
		<th>M€</th>
		<th>%</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td rowspan="3">Étude 1</td>
		<td>Coûts initiaux</td>
		<td>3</td>
		<td>75</td>
		<td>2</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>1</td>
		<td>25</td>
		<td>8</td>
		<td>80</td>
	</tr>
	<tr>
		<td>Total</td>
		<td>4</td>
		<td>100</td>
		<td>10</td>
		<td>100</td>
	</tr>
	<tr>
		<td rowspan="3">Étude 2</td>
		<td>Coûts initiaux</td>
		<td>3</td>
		<td>60</td>
		<td>9</td>
		<td>45</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>2</td>
		<td>40</td>
		<td>11</td>
		<td>55</td>
	</tr>
	<tr>
		<td>Total</td>
		<td>5</td>
		<td>100</td>
		<td>20</td>
		<td>100</td>
	</tr>
	<tr>
		<td rowspan="3">Totaux</td>
		<td>Coûts initiaux</td>
		<td>6</td>
		<td>67</td>
		<td>11</td>
		<td>37</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>3</td>
		<td>33</td>
		<td>19</td>
		<td>63</td>
	</tr>
	<tr>
		<td>Total</td>
		<td>9</td>
		<td>100</td>
		<td>30</td>
		<td>100</td>
	</tr>
	</tbody>
</table>

<h3>Problème</h3>
<p>La mise en accessibilité d'un tableau complexe de données dans une page web n'est pas une chose aisée. La lecture d'un
tel tableau même accessible n'est pas facile.</p>

<h3>Un tableau complexe de données est-il vraiment nécessaire?</h3>

<p>Pour que l'information présentée soit davantage accessible et compréhensible pour l'utilisateur 
et pour faciliter la mise en accessibilité, on peut de recourir à d'autres solutions d'affichage qu'un tableau
complexe de données.</p>

<h3>Première solution : remplacer un tableau complexe par des tableaux simples.</h3>
<p>Un tableau complexe peut être présenté en plusieurs tableaux simples selon différentes logiques.</p>
<p>À titre indicatif et à partir de l'exemple précédent, il pourrait y avoir au moins trois possibilités : </p>
</p>

<h4>Présentation de tableaux par simple par étude</h4>
<table class="table">
<caption>Coûts annuels de l'étude 1</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N</th>
		<th>Année N+1</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Coûts initiaux</td>
		<td>3 M€ (75%)</td>
		<td>2 M€ (20%)</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>1 M€ (25%)</td>
		<td>8 M€ (80%)</td>
	</tr>
	<tr>
		<td>Totaux</td>
		<td>4 M€ (100%)</td>
		<td>10 M€ (100%)</td>
	</tr>
	</tbody>
</table>

<table class="table">
<caption>Coûts annuels de l'étude 2</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N</th>
		<th>Année N+1</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Coûts initiaux</td>
		<td>3 M€ (60%)</td>
		<td>9 M€ (45%)</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>2 M€ (40%)</td>
		<td>11 M€ (55%)</td>
	</tr>
	<tr>
		<td>Totaux</td>
		<td>5 M€ (100%)</td>
		<td>20 M€ (100%)</td>
	</tr>
	</tbody>
</table>

<table class="table">
<caption>Coûts annuels des études</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N</th>
		<th>Année N+1</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Coûts initiaux</td>
		<td>4 M€ (44%)</td>
		<td>10 M€ (33%)</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>5 M€ (56%)</td>
		<td>20 M€ (67%)</td>
	</tr>
	<tr>
		<td>Totaux</td>
		<td>9 M€ (100%)</td>
		<td>30 M€ (100%)</td>
	</tr>
	</tbody>
</table>



<h4>Présentation de tableaux simple par étude par type de coûts</h4>

<table class="table">
<caption>Dépenses initiales des études</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N</th>
		<th>Année N+1</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Coûts initiaux</td>
		<td>3 M€ (50%)</td>
		<td>2 M€ (18%)</td>
	</tr>
	<tr>
		<td>Coûts récurrents</td>
		<td>3 M€ (50%)</td>
		<td>9 M€ (82%)</td>
	</tr>
	<tr>
		<td>Totaux</td>
		<td>6 M€ (100%)</td>
		<td>11 M€ (100%)</td>
	</tr>
	</tbody>
</table>

<table class="table">
<caption>Dépenses supplémentaires des études</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N<br /> M€ (%)</th>
		<th>Année N+1<br /> M€ (%)</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Étude 1</td>
		<td>1 M€ (33%)</td>
		<td>8 M€ (42%)</td>
	</tr>
	<tr>
		<td>Étude 2</td>
		<td>2 M€ (67%)</td>
		<td>11 M€ (58%)</td>
	</tr>
	<tr>
		<td>Coûts totaux</td>
		<td>3 M€ (100%)</td>
		<td>19 M€ (100%)</td>
	</tr>
	</tbody>
</table>

<table class="table">
<caption>Coûts des études</caption>
	<thead>
	<tr>
		<th></th>
		<th>Année N<br /> M€ (%)</th>
		<th>Année N+1<br /> M€ (%)</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Étude 1</td>
		<td>4 M€ (44%)</td>
		<td>10 M€ (33%)</td>
	</tr>
	<tr>
		<td>Étude 2</td>
		<td>5 M€ (56%)</td>
		<td>20 M€ (67%)</td>
	</tr>
	<tr>
		<td>Coûts totaux</td>
		<td>9 M€ (100%)</td>
		<td>30 M€ (100%)</td>
	</tr>
	</tbody>
</table>

<h3>Deuxième solution  : aplanir les en-têtes de lignes et de colonnes. </h3>

<table class="table">
	<thead>
	<tr>
		<th></th>
		<th colspan="2">Année N<br />(M€ et %)</th>
		<th colspan="2">Année N+1<br />(M€ et %)</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Coûts initiaux Étude 1</td>
		<td>3</td>
		<td>75</td>
		<td>2</td>
		<td>20</td>
	</tr>
	<tr>
		<td>Coûts récurrents Étude 1</td>
		<td>1</td>
		<td>25</td>
		<td>8</td>
		<td>80</td>
	</tr>
	<tr>
		<td>Coûts totaux Étude 1</td>
		<td>4</td>
		<td>100</td>
		<td>10</td>
		<td>100</td>
	</tr>
	<tr>
		<td>Coûts initiaux Étude 2</td>
		<td>3</td>
		<td>60</td>
		<td>9</td>
		<td>45</td>
	</tr>
	<tr>
		<td>Coûts récurrents Étude 2</td>
		<td>2</td>
		<td>40</td>
		<td>11</td>
		<td>55</td>
	</tr>
	<tr>
		<td>Coûts totaux Étude 2</td>
		<td>5</td>
		<td>100</td>
		<td>20</td>
		<td>100</td>
	</tr>
	<tr>
		<td>Coûts initiaux totaux</td>
		<td>6</td>
		<td>67</td>
		<td>11</td>
		<td>37</td>
	</tr>
	<tr>
		<td>Coûts récurrents totaux</td>
		<td>3</td>
		<td>33</td>
		<td>19</td>
		<td>63</td>
	</tr>
	<tr>
		<td>Coûts totaux</td>
		<td>9</td>
		<td>100</td>
		<td>30</td>
		<td>100</td>
	</tr>
	</tbody>
</table>

<h3>Troisième solution : utiliser les liste à puces</h3>

<p>Voici deux possibilités de présentation parmi plusieurs, selon la logique qu'il est
	souhaitable de faire ressortir : </p>
<p>Année N</p>
<ul>
	<li> Étude 1
	<ul>
		<li>Coûts initiaux de 3 M€ (75 %)</li>
		<li>Coûts récurrents de 1 M€ (25 %)</li>
		<li>Coûts totaux de 4 M€ (100 %)</li>
	</ul>
	</li>
	<li> Étude 2
	<ul>
		<li>Coûts initiaux de 3 M€ (60 %)</li>
		<li>Coûts récurrents de 2 M€ (40 %)</li>
		<li>Coûts totaux de 5 M€ (100 %)</li>
	</ul>
	</li>
	<li>Coûts totaux
	<ul>
		<li>Coûts initiaux de 6 M€ (67 %)</li>
		<li>Coûts récurrents de 3 M€ (33 %)</li>
		<li>Coûts totaux de 9 M€ (100 %)</li>
	</ul>
	</li>
</ul>

<p>Année N+1</p>
<ul>
	<li> Étude 1
	<ul>
		<li>Coûts initiaux de 3 M€ (75 %)</li>
		<li>Coûts récurrents de 1 M€ (25 %)</li>
		<li>Coûts totaux de 4 M€ (100 %)</li>
	</ul>
	</li>
	<li> Étude 2
	<ul>
		<li>Coûts initiaux de 3 M€ (60 %)</li>
		<li>Coûts récurrents de 2 M€ (40 %)</li>
		<li>Coûts totaux de 5 M€ (100 %)</li>
	</ul>
	</li>
	<li>Coûts totaux
	<ul>
		<li>Coûts initiaux de 6 M€ (67 %)</li>
		<li>Coûts récurrents de 3 M€ (33 %)</li>
		<li>Coûts totaux de 9 M€ (100 %)</li>
	</ul>
	</li>
</ul>

<p>ou encore</p>

<p>Étude 1</p>
<ul>
	<li>Année N
	<ul>
		<li>Coûts initiaux de 3 M€ (75 %)</li>
		<li>Coûts récurrents de 1 M€ (25 %)</li>
		<li>Coûts totaux de 4 M€ (100 %)</li>
	</ul>
	</li>
	<li>Année N+1
	<ul>
		<li>Coûts initiaux de 2 M€ (60 %)</li>
		<li>Coûts récurrents de 8 M€ (40 %)</li>
		<li>Coûts totaux de 10 M€ (100 %)</li>
	</ul>
	</li>
</ul>

<p>Étude 2</p>
<ul>
	<li>Année N
	<ul>
		<li>Coûts initiaux de 3 M€ (60 %)</li>
		<li>Coûts récurrents de 2 M€ (40 %)</li>
		<li>Coûts totaux de 5 M€ (100 %)</li>
	</ul>
	</li>
	<li>Année N+1
	<ul>
		<li>Coûts initiaux de 9 M€ (60 %)</li>
		<li>Coûts récurrents de 11 M€ (33 %)</li>
		<li>Coûts totaux de 9 M€ (100 %)</li>
	</ul>
	</li>
</ul>

<p>Coûts totaux</p>
<ul>
	<li>Année N
	<ul>
		<li>Coûts initiaux de 6 M€ (67 %)</li>
		<li>Coûts récurrents de 3 M€ (33 %)</li>
		<li>Coûts totaux de 9 M€ (100 %)</li>
	</ul>
	</li>
	<li>Année N+1
	<ul>
		<li>Coûts initiaux de 11 M€ (37 %)</li>
		<li>Coûts récurrents de 19 M€ (33 %)</li>
		<li>Coûts totaux de 30 M€ (100 %)</li>
	</ul>
	</li>
</ul>


<p>Remarque : une personne avec une formation adéquate consacre environ 15 minutes pour coder et vérifier la qualité du code du tableau complexe. 
Pour la présentation sous forme de liste, le travail équivalent nécessite seulement 5 minutes et les risques d'erreur sont moindres.</p>


<h2>Les tableaux complexes dans un document PDF</h2>

<p>Un tableau de données doit comporter des cellules d'en-têtes de ligne ou de colonne détectables par les technologies d'adaptation informatiques, 
	ou offrir l'une des possibilités suivantes :</p>
<ul>
<li>soit, un hyperlien vers une page Web qui présente une version de ce tableau qui satisfait aux exigences de l'accessibilité d'un site Web ;</li>
<li>soit, une description complète présentant les données principales ou une synthèse des données présentées dans le tableau ;</li>
<li>soit, un texte de remplacement offrant une présentation de l'information restructurée de façon linéaire ;</li>
</ul>
<p>Un tableau complexe de données doit comporter une association explicite entre les cellules de données et les cellules d'en-tête qui est détectable par les technologies d'adaptation informatiques, 
	ou offrir l'une des possibilités prévues au paragraphe précédent;</p>

<p>Les données principales ou la synthèse d'un tableau peuvent être présentés dans le corps du texte avant ou après le tableau, 
	comme un texte de remplacement du tableau ou en annexe au document avec un hyperlien y conduisant placé immédiatement après le tableau.</p>
<p>Les exemples qui suivent le tableau suivant sont présentés comme équivalent à ce tableau.</p>

<table class="table">
	<tr><td colspan="6">Rappport des frais de voyage</td></tr>
	<tr>
		<td>Nice</td>
		<td>25 août</td>
		<td>37 €</td>
		<td>112</td>
		<td>45 €</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>26 août</td>
		<td>27 €</td>
		<td>112</td>
		<td>45 €</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="bold">total partiel</td>
		<td>64 €</td>
		<td>224</td>
		<td>90 €</td>
		<td>378 €</td>
	</tr>
	<tr>
		<td>Cannes</td>
		<td>27 août</td>
		<td>96 €</td>
		<td>109</td>
		<td>36 €</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>28 août</td>
		<td>35 €</td>
		<td>109</td>
		<td>36 €</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="bold">total partiel</td>
		<td>131 €</td>
		<td>218</td>
		<td>72 €</td>
		<td>421 €</td>
	</tr>
	<tr>
		<td>Compilation</td>
		<td class="bold">total global</td>
		<td>195 €</td>
		<td>442</td>
		<td>162 €</td>
		<td>799 €</td>
	</tr>
</table>

<p>Exemple de données principales ou de synthèse avec analyse des données (en utilisant le tableau précédent)</p>
<div class="notice exemple">
<p>Ce rapport des frais de voyage indique que le déplacement à Nice a coûté 378 € et celui à Cannes a coûté 421 €. 
Au total, les frais de voyage se chiffrent à 799 €. Les frais d'hôtel et de transport sont toutefois un peu plus élevés 
pour le déplacement à Nice (224 € et 90 €) comparativement à ceux du déplacement pour Cannes (218 € et 72 €). 
Cette tendance est toutefois inversée pour les frais de repas puisque les repas à Cannes ont coûté 131 € alors que les repas à Nice sont de seulement à 64 €. 
Si ce n'était des repas, ce serait le déplacement à Nice qui aurait été le plus coûteux.</p>
</div>

<p>Exemple d'information restructurée de façon linéaire dans une logique de lecture par ligne (en utilisant le tableau précédent).</p>
<p>Lorsque l'auteur du tableau ne peut en fournir une analyse, il est possible de restructurer l'information de façon linéaire. 
Il faut toutefois choisir une logique de lecture par ligne ou par colonne. Par exemple :</p>


<div class="notice exemple">
<p>Rapport des frais de voyage</p>
<ul>
<li>Nice, 25 août, repas 37 €, hôtel 112 €, transport 45 €.</li>
<li>Nice, 26 août, repas 27 €, hôtel 112 €, transport 45 €.</li>
<li>Nice, total partiel, repas 64 €, hôtel 224 €, transport 90 €, total 378 €.</li>
<li>Cannes, 27 août, repas 96 €, hôtel 109 €, transport 36 €.</li>
<li>Cannes, 28 août, repas 35 €, hôtel 109 €, transport 36 €.</li>
<li>Cannes, Total partiel, repas 131 €, hôtel 218 €, transport 72 €, total 421 €.</li>
<li>Compilation : Total global, repas 195 €, hôtel 442 €, transport 162 €, total 799 €.</li>
</ul>
</div>

<h2>Plus loin...</h2>
<p></p>

<h3>Que faire avec un tableau extrêmement complexe ?</h3>
<p>Il y a des situations où un tableau extrêmement complexe ne peut être simplifié au complet. </p>
<p>Dans un tel cas, il est suggéré de procéder à toutes les simplifications possibles.</p>


