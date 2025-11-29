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
?>
<h1>Classification ABC</h1>

<div class="notice info">
<p>Le sigle ABC vient de <strong>American Audit Bureau of Circulation</strong>.</p>
<p>Il est important de ne pas confondre la <strong>classification ABC</strong> avec la <strong>méthode ABC</strong> qui est une méthode comptable américaine appelée elle aussi ABC pour <strong>Activity Based Costing</strong>.</p>
<p>Certains auteurs apportent une légère distinction entre les termes méthode ABC et classement ABC ou classification ABC.</p>
<p>Ils emploient ces derniers termes pour mettre l’accent sur l’action plutôt que sur la méthode.</p>
</div>



<h2>Répartition des articles</h2>

<p>La gestion de stock nécessite du temps consacré à de l’adminsitratif et donc par nature coûte cher et immobilise de la trésorerie.</p>
<p>Pour réduire ces coûts, il faut gérer en priorité les articles coûteux et importants.</p>
<p>Pour les déterminer, on fait appel à l’analyse ABC qui n’est rien d’autre qu’une méthode de classification découlant du principe de Pareto.</p>

<div class="notice info">Pareto : nom du sociologue et économiste italien Vilfredo Pareto, né le 15 juillet 1848 à Paris et mort le 19 août 1923 à Céligny (Suisse), qui prouva à la fin du 19e siècle que 20% des bénéficiaires des revenus, classés par ordre décroissant, possédaient à eux seuls 80% de la totalité des revenus.</div>


<p>La classsification ABC est fréquemment utilisée dans le domaine de l’analyse des stocks et consiste à traiter différemment le contrôle de chaque groupe d’articles.</p>
<p>On peut effectuer des classements selon plusieurs critères :</p>
<ul>
  <li>La valeur des articles (quantité * prix unitaire).</li>
  <li>La fréquence d’utilisation</li>
  <li>La difficulté d'approvisionnement.</li>
</ul>

<p>Le résultat se fait sous forme de graphique.</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/classificationABC.png" alt="Image d’un graphique de classification ABC" />

<h3>À chaque classe sa gestion !</h3>

<p>Les articles de classe A seront à stocker au plus près des préparateurs. Tandis que les articles de la classe C seront éloignés des préparateurs puisque qu'ils sont peu consommés… le préparateur ne les prélèvera que rarement.</p>

<p>On adaptera également les stocks de sécurité, les règles de réapprovisionnement, les quantités de commandes, …</p>

<h2>Comment réaliser la classification ABC ?</h2>

<ol>
  <li>Dresser la liste des articles en stock, avec leur consommation.</li>
  <li>Choisir une période significative (en général un an).</li>
  <li>Exprimer les stocks et les consommations en euro € pour permettre la comparaison des articles.</li>
  <li>Trier les articles dans l’ordre décroissant de leur consommation (valorisée en €).</li>
  <li>Calculer le cumul de la consommation sur la période (en €).</li>
  <li>Calculer le cumul du pourcentage représenté par la consommation de chacun des articles sur la consommation totale.</li>
  <li>Tracer la courbe des pourcentages cumulés.</li>
  <li>Créer les catégories A, B et C.</li>
</ol>

<div class="exercice">
<p>Exercice : Déterminer la classification ABC pour les articles suivants :</p>
<table class="table">
  <tr>
    <th>Code article</th>
    <th>Consommation annuelle (pcs)</th>
    <th>Coût unitaire en €</th>
  </tr>
  <tr>
    <td>1</td>
    <td>1100</td>
    <td>2</td>
  </tr>
  <tr>
    <td>2</td>
    <td>600</td>
    <td>40</td>
  </tr>
  <tr>
    <td>3</td>
    <td>100</td>
    <td>4</td>
  </tr>
  <tr>
    <td>4</td>
    <td>1300</td>
    <td>1</td>
  </tr>
  <tr>
    <td>5</td>
    <td>100</td>
    <td>60</td>
  </tr>
  <tr>
    <td>6</td>
    <td>10</td>
    <td>25</td>
  </tr>
  <tr>
    <td>7</td>
    <td>100</td>
    <td>2</td>
  </tr>
  <tr>
    <td>8</td>
    <td>1500</td>
    <td>2</td>
  </tr>
  <tr>
    <td>9</td>
    <td>200</td>
    <td>2</td>
  </tr>
  <tr>
    <td>10</td>
    <td>500</td>
    <td>1</td>
  </tr>
</table>

<!--p>Correction :</p>

<table class="table">
  <tr>
    <th>Code article</th>
    <th>Valeur annuelle €</th>
    <th>Consommation cumulée €</th>
    <th>Consommation cumulée %</th>
    <th>% cumulée d’articles</th>
    <th>Classe</th>
  </tr>
  <tr>
    <td>2</td>
    <td>24 000</td>
    <td>24 000</td>
    <td>62.75%</td>
    <td>10%</td>
    <td>A</td>
  </tr>
  <tr>
    <td>5</td>
    <td>6 000</td>
    <td>30 000</td>
    <td>78.43%</td>
    <td>20%</td>
    <td>A</td>
  </tr>
  <tr>
    <td>8</td>
    <td>3 000</td>
    <td>33 000</td>
    <td>86.27%</td>
    <td>30%</td>
    <td>B</td>
  </tr>
  <tr>
    <td>1</td>
    <td>2 200</td>
    <td>35 200</td>
    <td>92.03%</td>
    <td>40%</td>
    <td>B</td>
  </tr>
  <tr>
    <td>4</td>
    <td>1 300</td>
    <td>36 500</td>
    <td>95.42%</td>
    <td>50%</td>
    <td>B</td>
  </tr>
  <tr>
    <td>10</td>
    <td>500</td>
    <td>37 000</td>
    <td>96.73%</td>
    <td>60%</td>
    <td>C</td>
  </tr>
  <tr>
    <td>3</td>
    <td>400</td>
    <td>37 400</td>
    <td>97.78%</td>
    <td>70%</td>
    <td>C</td>
  </tr>
  <tr>
    <td>9</td>
    <td>400</td>
    <td>37 800</td>
    <td>98.82%</td>
    <td>80%</td>
    <td>C</td>
  </tr>
  <tr>
    <td>6</td>
    <td>250</td>
    <td>38 050</td>
    <td>99.48%</td>
    <td>90%</td>
    <td>C</td>
  </tr>
    <tr>
        <td>7</td>
        <td>200</td>
        <td>38 250</td>
        <td>100%</td>
        <td>100%</td>
        <td>C</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>908</td>
        <td></td>
        <td>C</td>
    </tr>
</table>

<p>Calcul du coefficient de Gini :</p>
<p>((908 * 10)/5000) - 1 = 0.816</p>
<p>Ainsi la classe correspondante est la zone 3 (20,20,60)</p-->

</div>

<h2>Quand et où utiliser la classification ABC ?</h2>
<ul>
  <li><strong>Fréquence des inventaires tournants</strong> : Les articles A doivent être vérifiés plus fréquemment que les articles B ou C.</li>
  <li><strong>Service client</strong> : les quantités économiques et les stocks de sécurité dépendent de la criticité et de la valeur des articles. Les articles A peuvent être plus longs à approvisionner.</li>
  <li><strong>Priorités de développement</strong> : les efforts doivent se concentrer sur les articles chers et consommés</li>
  <li><strong>Politiques d’achats</strong> : les achats doivent concentrer les recherches de nouveaux fournisseurs et les négociations sur les articles de la classe A</li>
  <li><strong>Sécurité</strong> : pièces protégées contre la perte, le vol et la dégradation (autres indicateur que le coût unitaire)</li>
  <li><strong>Système de réapprovisionnement</strong> : contrôle économiques (min/max) des articles C, méthodes sophistiquées pour A.</li>
  <li><strong>Décisions d’investissements</strong> : l’amélioration de la rotation des stocks se concentre sur les articles A.</li>
</ul>


<h2>Limites de la classification ABC</h2>

<h3>Ratio de discrimination</h3>

<p>Le ratio de discrimination ou <span class="tag--info">coefficient de Gini</span> sert à définir les classes à partir de la courbe obtenue avec la classification ABC.</p>

<p>Ce coefficient permet de déterminer, avec l’aide d’un graphique, si le critère retenu pour faire une classification ABC est pertinent, et donc de savoir s’il faut poursuivre l’étude, ou s’il faut choisir un autre critère d’analyse.</p>

<p>On calcule ce ratio par la formule suivante :</p>

<div class="formule">
RD = 
	<div class="fraction">
    <span class="numerateur">(somme des valeurs du critère cumulées en % * % d’une seule référence) – 5 000</span>
		<span class="bar">/</span>
		<span class="denominateur">5000</span>
	</div>
</div>

<p>Ou grâce à la longueur des segments représentés sur la courbe ci-dessous.</p>
<img src="/assets/img/qlio/gstock/courbe_ratio_discrimination.png" alt="Courbe de ratio de discrimination" />

<div class="formule">
RD = 
	<div class="fraction">
		<span class="numerateur">Longueur segment AC</span>
		<span class="bar">/</span>
		<span class="denominateur">Longueur segment AB</span>
	</div>
</div>


<p>Selon la forme de la courbe, on peut définir des zones de classes d’importance.</p>
<img src="/assets/img/qlio/gstock/zones_classe_importance.png" alt="zones de détermination des classes d’importance" />

<div class="notice remarque">
<ul>
  <li>Plus l’ascendance de la courbe sera forte et plus l’indice de Gini sera élevé. A l’inverse, plus l’ascendance sera faible et plus l’indice sera faible.</li>
  <li>Dans le cas où l’on doit effectuer un choix entre plusieurs critères, il faut retenir celui dont l’indice de Gini est le plus élevé. </li>
  <li>Dans certaines études très particulières, les professionnels poursuivent l’analyse même dans le cas où l’indice de Gini est inférieur à 0.6.</li>
</ul>
</div>

<p>Une fois le ratio calculé, vous pouvez déterminer les classes en suivant les indications du tableau suivant :</p>
<table class="table">
  <tr>
    <th>Valeur du ratio</th>
    <th>zone</th>
    <th>A</th>
    <th>B</th>
    <th>C</th>
  </tr>
  <tr>
    <td>1 > RD >= 0.90</td>
    <td>1</td>
    <td>10</td>
    <td>10</td>
    <td>80</td>
  </tr>
  <tr>
    <td>0.90 > RD >= 0.85</td>
    <td>2</td>
    <td>10</td>
    <td>20</td>
    <td>70</td>
  </tr>
  <tr>
    <td>0.85 > RD >= 0.75</td>
    <td>3</td>
    <td>20</td>
    <td>20</td>
    <td>60</td>
  </tr>
  <tr>
    <td>0.75 > RD >= 0.65</td>
    <td>4</td>
    <td>20</td>
    <td>30</td>
    <td>50</td>
  </tr>
  <tr>
    <td>0.65 > RD</td>
    <td>5</td>
    <td colspan="3">Non interprétable</td>
  </tr>
</table>


<h3>Précaution d’emploi de la classification ABC</h3>

<p>La répartition des articles en trois classes A, B et C n’est pas suffisante pour résoudre le problème de base de la gestion des stocks et des approvisionnements :</p>

<ul>
  <li>Quand fabriquer ou commander ?</li>
  <li>Combien fabriquer ou commander ?</li>
</ul>

<h4>Gestion de la classe A</h4>
<ul>
  <li>Gestion rigoureuse.</li>
  <li>Analyse scientifique du stock de sécurité.</li>
  <li>Analyse de remises quantitatives.</li>
  <li>Analyse par articles témoins.</li>
  <li>Analyse de cycle de production.</li>
</ul>

<h4>Gestion de la classe B</h4>
<ul>
  <li>Gestion plus souple avec risque de rupture.</li>
  <li>Stock de sécurité moindre.</li>
</ul>

<h4>Gestion de la classe C</h4>
<ul>
  <li>Approvisionnementsur demande.</li>
  <li>Commandes décidées de manière plus empirique.</li>
</ul>

<h4>Erreurs classiques</h4>

<p>Lorsqu’on est en présence de forte vente sur un article de classe A, on peut avoir deux réflexes diamétralement opposés :</p>
<ol>
  <li>Prévoir une large couverture de stockage pour ne louper aucune vente</li>
  <li>Préférer une faible couverture de stockage, car les ventes sont stables vu les grandes quantités vendues.</li>
</ol>

<p>Malheureusement ces deux raisonnements sont erronés car ils ne tiennent pas compte de l’incertitude des ventes.</p>

<img class="aligncenter" src="/assets/img/qlio/gstock/nb_ventes.png" alt="Image d’un graphique de ventes stables et instables" />

<p>Dans l’exemple ci-dessus, vous avez deux produits qui sur l’année font sensiblement le même nombre de ventes, mais le produit 1, dont les ventes sont stables, permet d’avoir un stock de sécurité bas sans prendre de risque, et un produit 2 dont les ventes sont instables qui aura besoin d’un stock de sécurité plus élevé pour éviter les ruptures de stock en cas de forte hausse.</p>

<p>C’est cette incertitude qui fait qu’on ait besoin d’un critère supplémentaire pour prendre la bonne décision concernant le type de gestion de stock.</p>
<p>On pourra par exemple ajouter le critère d’incertitude suivant : X = article régulier, Y = article à variabilité, Z = article erratique; pour croiser l’analyse ABC avec ces critères supplémentaires.</p>
<p>La classification ABC devient ABC/XYZ et les données cumulent les critères pour une appartenance à une classe spécifique plus précise permettant d’éviter les erreurs.</p>

<div class="notice remarque">
  <p>En gestion de stock l’<strong>analyse ABC XYZ</strong> permet :</p>
  <ul>
    <li>D’identifier les produits à risques (rupture, surstockage).</li>
    <li>De définir le stock de sécurité et la couverture de stock adéquate.</li>
    <li>D’optimiser les volumes de production.</li>
  </ul>
</div>


<h2>Classement combiné ABC XYZ</h2>

<h3>Classement combiné articles/clients</h3>

<p>Le classement ABC XYZ peut se définir à partir de la valeur des ventes annuelles des articles et du chiffre d’affaire annuels des clients.</p>
<p>En combinant ces deux informations, on n’ommettra pas les commandes des clients les plus importants qui ne concerneraient que des articles de la classe C.</p>
<p>Pour le client mécontent, il n’y a pas de différence entre les classes d’articles !</p>


<h3>Classement combiné articles/prix unitaires</h3>

<p>De la même manière, il faut également faire attention aux articles ayant un coût unitaire élevé mais qui ferait partie de la classe C.</p>
<p>On peut également trouver deux articles de la classe A ayant une valeur de consommation identique (1000 €) :</p>
<ul>
  <li>Un article à 100 € pièce consommé 10 fois par an.</li>
  <li>Un article à 1 € pièce consommé 1000 fois par an.</li>
</ul>

<p>Dans ce cas, la classification ABC XYZ peut se résumer par le tableau ci-dessous :</p>

<table class="table">
  <tr>
    <td class="w100p txtright">+</td>
    <td class="w50p"></td>
    <td class="center">X</td>
    <td class="center">Y</td>
    <td class="center">Z</td>
  </tr>
  <tr>
    <td rowspan="3">Volumes</td>
    <td class="center">A</td>
    <td class=" bg-vert">Gros volumes<br />Sorties fréquentes</td>
    <td class=" bg-vert-light">Gros volumes<br />Sorties moyennes</td>
    <td class=" bg-orange-light">Gros volumes<br />Sorties rares</li></td>
  </tr>
  <tr>
    <td class="center">B</td>
    <td class=" bg-vert-light">Volumes moyens<br />Sorties fréquentes</td>
    <td class=" bg-orange-light">Volumes moyens<br />Sorties moyennes</td>
    <td class=" bg-orange">Volumes moyens<br />Sorties rares</td>
  </tr>
  <tr>
    <td class="center">C</td>
    <td class=" bg-orange-light">Faibles volumes<br />Sorties fréquentes</td>
    <td class=" bg-orange">Faibles volumes<br />Sorties moyennes</td>
    <td class=" bg-rouge">Faibles volumes<br />Sorties rares</td>
  </tr>
  <tr>
    <td class="txtright">-</td>
    <td colspan="3" class="center">Incertitude</td>
    <td class="txtright">+</td>
  </tr>
</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

