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


<h1>Caractéristiques de la demande</h1>

<p>Il est important de bien comprendre les caractéristiques de la demande client pour bien comprendre le processus de prévision de la demande.</p>

<p>Nous allons traiter les caractéristiques suivantes qui ont une influence majeure sur la prévision de la demande.</p>

<h2>Demande indépendante et demande dépendante</h2>

<p>Seule la demande indépendante a besoin de prévisions</p>
<p>La demande dépendante ne doit pas être prévisionnelle, elle doit être calculée</p>

<p class="notice exemple">Ex : un constructeur automobile fait une prévision indépendante pour le nombre de véhicules, mais n'a pas besoin  de prévision pour les roues puisqu'elles sont directement liées au nombre de véhicules.</p>

<h2>Sources de demande indépendante</h2>

<p>Il existe cinq sources communes de demandes indépendantes utilisées en prévision et gérées pendant le traitement des commandes :</p>

<ol>
<li><strong>Prévisions</strong> : basée sur  des méthodes quantitatives et qualitatives (ou les deux).</li>
<li><strong>Demandes clients</strong> : demande externe aussi appelée demande réelle.</li>
<li><strong>Commandes de réapprovisionnement</strong> : basée sur les demandes clients dans les centres de distribution et sur les prévisions de ces centres.</li>
<li><strong>Transfert inter usines</strong> : Commandes de pièces ou composants fabriqués à partir d'autres divisions de l'entreprise.</li>
<li><strong>Autres</strong> : demandes nécessaires pour le marketing et les démonstrations de produits.</li>
</ol>

<h2>Modèles de demande</h2>

<p>La représentation graphique des données de la demande montre qu'elle peut suivre différents modèles.</p>
<p>Les prévisionnistes analysent et tentent de comprendre ces modèles en termes de forme et de stabilité.</p>

<h3>Tendance</h3>

<p>Le traçage des données de la demande dans un graphique révèle que la demande peut prendre différents modèles.</p>
<p>Les prévisionnistes analysent et tentent de comprendre ces modèles en termes de forme et de stabilité.</p>

<img src="/assets/img/qlio/dem/tendance.png" alt="Courbes de tendances" />

<h3>Variations saisonnières</h3>

<p>L'activité de la très grande majorité des entreprises est affectée de variations saisonnières, parfois importantes.</p>
<p>C'est l'ampleur de celle‐ci qu'il convient de calculer, soit pour éliminer les effets dans le passé, soit pour en prévoir les fluctuations à l'avenir.</p>
<p>Ces variations sont influencée par : la météo, le calendrier scolaire, les coutumes sociales, etc.</p>
<p>Cela peut se produire sur des périodes plus courtes que la saison, comme dans les ventes de produits de consommation.</p>

<img src="/assets/img/qlio/dem/saisonnier.png" alt="Courbes variations saisonnières" />

<h3>Aléatoire</h3>

<p>Montre la fluctuation de la demande due à des événements aléatoires tels que les intempéries, évènements spéciaux et les caprices des comportements humains.</p>
<p>Au fil du temps, la demande aléatoire variera près de la moyenne et les variations s'annuleront.</p>
<p>Si les variations sont faibles, la demande est considérée comme stable, sinon c'est instable.</p>

<img src="/assets/img/qlio/dem/aleatoire.png" alt="Courbes variations aléatoires" />

<h3>Cyclique</h3>

<p>La demande cyclique se caractérise par des fluctuations ondulatoires qui se déroulent sur de longues périodes, telles que plusieurs années, et sont liées à des influences extérieures telles que le cycle économique.</p>
<p>La prévision du cycle est le domaine des prévisionnistes économiques, bien que les entreprises reconnaissent leur impact sur la demande et les ventes.</p>

<img src="/assets/img/qlio/dem/cyclique.png" alt="Courbes variations cycliques" />

<h3>Les événements exceptionnels</h3>

<p>Les consommations exceptionnelles sont de plusieurs types :</p>
<ul>
<li>Forte vente : suite à un contrat exceptionnel.</li>
<li>Aucune vente : suite à une grève, de la non qualité de production, des conditions climatiques difficile pour livrer.</li>
</ul>

<p class="notice exemple"><u>Exemple</u> : dans la distribution de pièces de rechange : ‐40% de volumes en Août.</p>

<p class="notice remarque">Il est indispensable de « purger » de leur influence toute série d'observations avant de calculer l'équation de vente.</p>


<h2>Modèle stable/dynamique</h2>

<p>Les modèles de demande peuvent changer avec le temps.</p>
<p>Les modèles qui conservent leur forme générale dans le temps sont appelés stables et sont plus faciles à prévoir.</p>
<p>Les variations dans le scénario de la demande stable sont relativement prévisibles et restent constamment dans les limites supérieures et inférieures prédéterminées ou attendues, ce qui permet des variations aléatoires.</p>
<p>Il est plus facile de développer une prévision basée sur la demande moyenne et d'élaborer une politique d'inventaire, par exemple, un stock de sécurité, pour ce scénario.</p>

<img src="/assets/img/qlio/dem/stable_dynamique.png" alt="Courbes Stable/Dynamique" />

<p class="notice remarque">Les modèles dynamiques sont moins prévisibles, bien que techniquement, à long terme, ils peuvent avoir un motif aléatoire.</p>
<p class="notice remarque">Les changements dynamiques rendent la prévision de la demande difficiles et sont susceptibles d'entraîner des erreurs.</p>

