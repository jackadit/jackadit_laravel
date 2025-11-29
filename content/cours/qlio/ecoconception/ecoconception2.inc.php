<?php
/**
 * BUT : cours sur l'analyse fonctionnelle externe
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Organisation
 * @category Eco_conception
 * @access public
 * @uses 
 */
$sNavigation=navigation('ecoconception', '2');
?>




<h1>Analyse fonctionnelle externe</h1>

	<p class="h2-like">Introduction</p>
	<p>Puisqu'un produit génère des impacts à toutes les étapes de son cycle de vie, on comprend que l'éco-conception a pour objectif principal de réduire ces impacts.</p>
	<p>Mais cette réduction d'impacts ne doit pas se faire aux dépends de la qualité d'usage (besoins et fonctions) du produit considéré, d'où la nécessité de la connaître, de la préciser, et de la redéfinir le cas échéant.</p>
	<p>Cette démarche est innovante et efficace dès lors qu'il s'agit de concevoir ou de reconcevoir des produits.</p>
	
	<h2>L'analyse fonctionnelle dans l'éco-conception</h2>

	<p>Les outils de l'<strong>analyse fonctionnelle</strong>" sont primordiaux dans le processus de conception. Il en est évidemment de même en éco-conception, sauf qu'il faut tenir compte, en plus des contraintes classiques, d'une contrainte environnementale.</p>
	<p>L'idée est de concevoir ou de re-concevoir un produit qui gardera les mêmes qualités d'usage mais avec des impacts environnementaux réduits par rapport à ce qu'ils seraient avec une approche classique de conception.</p>
	<p>Dans cette optique, on parle d'unité fonctionnelle, c'est-à-dire qu'on met en place une fonction quantifiable et/ou mesurable qui caractérise les fonctions du produit, étant entendu qu'on évalue les impacts environnementaux générés pour l'unité fonctionnelle considérée.</p>

	<p>La méthode de référence pour l'évaluation environnementale des produits est l'<strong>analyse du cycle de vie</strong> (ACV).</p>
	<p>Cette méthode, introduite en France à partir du début des années 1990, fait aujourd'hui l'objet de deux normes internationales : la norme ISO 14 040, qui présente la démarche générale de l'ACV et ses différentes étapes, ainsi la norme ISO 14 044, qui se focalise sur l'étape de l'évaluation et de la hiérarchisation des impacts environnementaux.</p>



    <h3>Outils de l'analyse fonctionnelle</h3>

	<p>Il existe de nombreux outils classiques destinés à aider le concepteur dans la définition de la fonction et plus généralement dans l'analyse fonctionnelle.</p>
	<img src="/assets/img/qlio/ecoconception/outils_concepteur.png" alt="Outils du concepteur" />

	<p>Parmi les outils pour les concepteurs, les plus utilisés sont :</p>
	<ul>
   	<li>La <strong>bête à cornes</strong> : aide à la recherche d'un besoin.</li>
   	<li>Le <strong>diagramme pieuvre</strong> : permet de définir les liens (les fonctions de service) entre le système et son environnement.</li>
   	<li>Le <strong>diagramme FAST</strong> : aide à trouver des solutions techniques pour les différentes fonctions.</li>
   	<li>Le <strong>diagramme SADT</strong> : c'est une approche système d'un produit complexe.</li>
   	<li>Le <strong>cahier des charges</strong> : permet de lister et de décrire les fonctions (principale, complémentaires et contraintes) du produit.</li>
	</ul>
	
	<h2>Méthode APTE</h2>

	<p>La <strong>méthode APTE</strong> (APplication aux Techniques d'Entreprise) est une méthode rationnelle d'optimisation d'un produit (ou d'un procédé, ou d'un processus).</p>
	<p>En partant de l'expression d'un besoin ressenti et sans considérer à priori les solutions, elle permet d'évaluer l'ensemble des contraintes (techniques, économiques, culturelles...) qui affectent le produit. Elle constitue la première phase de conception débouchant sur l'édition du cahier des charges fonctionnel.</p>
	
	<p class="h3-like">Historique</p>
	<p>À la fin de la Seconde Guerre mondiale, pour faire face à la hausse du prix de revient des produits industriels, la General Electric demanda à un de ses ingénieurs affectés aux achats, M. Lawrence Delos Miles, de définir une méthode d'optimisation de ces derniers.</p>
	<p>Miles découvre alors que dans un produit, ce qui compte c'est la fonction qu'il exerce, et que 70 à 80% du coût d'un produit est lié à la solution utilisée pour satisfaire cette fonction.</p>
	<p>À partir de ce constat, il développe une méthode : <strong>Value Analysis</strong> (Analyse de la valeur) en cherchant des solutions de produit qui répondent uniquement au besoin pour lequel le produit existe.</p>
	<p>Cette méthode, appliquée dès la conception, a ensuite été beaucoup améliorée au Japon avant d'être importée dans les années 1960 en Europe, via les filiales des entreprises américaines.</p>
	<p>Au début des années soixante, Gilbert Barbey, alors consultant en France au sein du cabinet KBWhite, décide de créer le cabinet Apte et adapte la méthode aux modes de raisonnement français.</p>
	

    <h3>Expression du besoin : la "bête à corne"</h3>
	<p>La méthode APTE propose un outil graphique appelé bête à cornes qui permet une expression graphique du besoin en donnant la réponse aux questions suivantes :</p>
	<ul>
    <li>À qui le Produit rend-il service ?</li>
    <li>Sur quoi le Produit agit-il ?</li>
    <li>Dans quel but le Produit existe-t-il?</li>
	</ul>
	<img src="/assets/img/qlio/ecoconception/bete_a_cornes.png" alt="diagramme bête à cornes" />
	
	<p><u>Exemple</u> : le sécateur électronique</p>
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/bete_a_cornes_secateur.png" alt="diagramme pieuvre du sécateur électronique" />

    <h3>Expression fonctionnelle : diagramme pieuvre (ou graphe des interactions)</h3>

	<p>Ce diagramme permet d'imaginer le produit en situation d'utilisation, avec les éléments de son environnement.</p>
	<p>Il sert à caractériser les <strong>fonctions de services</strong> attendues et générées par l'usage du produit.<p>
	<p>Le produit est considéré comme une ensemble fonctionnel assurant un certain nombre de fonctions et non pas comme un assemblage de composants.</p>
	
	<p>Le <strong>diagramme pieuvre</strong> ne remplace pas un <strong>cahier des charges</strong>, il permet uniquement d'en représenter certains points avec une grande rapidité de compréhension.</p>
	
	<p>Deux types de fonctions de service sont en jeu :</p>
	<ul>
    <li>les <strong>fonctions principales</strong> : Encore appelées <strong>fonctions d'usage</strong>, ce sont celles qui justifient l'existence du produit. 
    	<p>On les dessine par des liens entre deux éléments de l'environnement, passant par le système.</p>
    	<p class="notice remarque">On utilise un <strong>verbe à l'infinitif</strong> qui exprime ce que fait le produit, suivi d'un complément précisant sur qui ou quoi agit le produit.</p>
    </li>
    <li>les <strong>fonctions contraintes</strong> : Elles sont aussi appelées <strong>fonctions complémentaires</strong>. Elles naissent d'une contrainte imposée par un élément extérieur au produit ou encore d'une exigence particulière de l'utilisateur voire de la présence de normes et de législations.</li>
	</ul>
	<img class="aligncenter" src="/assets/img/qlio/ecoconception/pieuvre.png" alt="diagramme pieuvre" />
	
	<h4>Inventaire systématique du milieu environnant</h4>
	<ul>
		<li><strong>Milieu physique</strong> :
			<ul>
				<li>Milieu ambiant (vent, humidité, eau, chaleur, froid, luminosité, poussière, sève).</li>
				<li>Cep de vigne (forme, dimensions).</li>
			</ul> 
		</li>
		<li><strong>Milieu technique</strong> : Énergie électrique (autonomie, recharge).</li>
		<li><strong>Milieu humain</strong> : Opérateur (ergonomie, esthétique, poids, bruit, sécurité).</li>
		<li><strong>Milieu économique</strong> : Critères de qualité (maintenance, coût).</li>
	</ul>
	<h4>Démarche</h4>
	<p>Prenons un sécateur électronique en exemple.</p>
	<ol>
		<li>On isole le produit</li>
		<li>On recherche et on place les éléments du milieu extérieur en relation avec le produit</li>
		<img class="aligncenter" src="/assets/img/qlio/ecoconception/pieuvre_secateur.png" alt="diagramme pieuvre du sécateur électronique" />
	
		<li>On recherche et on place les fonctions de service principales, complémentaires ou contraintes.
			<ol start="31">
				<li>Les <strong>fonctions principales</strong> représentent les relations créées par le produit entre deux éléments du milieu extérieur.</li>
				<p><u>ex</u> : tailler les vignes avec un moindre effort.</p>
				<li>Les <strong>fonctions complémentaires</strong> ou de <strong>contraintes</strong> représentent les relations entre le milieu extérieur et le produit. Elles adaptent le produit aux éléments du milieu environnant et limitent les libertés du concepteur.</li>
				<p><u>ex</u> : 
				<ul>
					<li>C1 - Avoir un poids et un encombrement en mains correct.</li>
					<li>C2 - Être intégralement portable.</li>
					<li>C3 - Résister aux conditions extérieures.</li>
					<li>C4 - Être autonome.</li>
					<li>C5 - Être conforme aux normes de sécurité des travailleurs.</li>
					<li>C6 - Être agréable à l'oeil de l'utilisateur.</li>
				</ul>
			</ol>
		</li>
	</ol>


	<h4>Au delà du diagramme pieuvre</h4>
	<p>Les fonctions de service sont d'usage ou d'estime.</p>
	<caption>tableau de classement des fonctions de service</caption>
	<table class="table w500p">
	<thead>
	<tr>
	<th>Fonctions de service</th>
	<th>principales</th>
	<th>contraintes</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<th>d'usage</th>
	<td>fonction<br />fonction<br />fonction</td>
	<td>fonction<br />fonction<br />fonction</td>
	</tr>
	<tr>
	<th>d'estime</th>
	<td>fonction<br />fonction<br />fonction</td>
	<td>fonction<br />fonction<br />fonction</td>
	</tr>
	</tbody>
	</table>

	<p>La compétitivité se joue souvent dans les fonctions de la cellule <span class="fondtd">fonctions de contraintes et d'estime</span></p>

	<h2>Cahier des charges fonctionnelles</h2>

	<p>Afin d'établir le cahier des charges fonctionnelles (CDCF), il faut caractériser les fonctions de services. CARACTÉRISER une FS, c'est :</p>
	<ul>
	<li>Qualifier par des mots les critères de performances.</li>
	<li>Quantifier pour chaque critère, le niveau de performance attendu et les limites d'acceptation.</li>
	<li>Contrôler la validité et la stabilité de ces critères et valeurs.</li>
	</ul>

	<p class="h4-like">La norme NF X 50-150</p>
	<p>Le <strong>Cahier Des Charges Fonctionnelles</strong> prévoit la manière dont on pourra évaluer avec quelle pertinence le besoin est satisfait par le produit.</p>
	<ul>
		<li><strong>Critère</strong> : caractère retenu pour apprécier la manière dont une fonction est remplie ou une contrainte respectée.</li>
		<li><strong>Niveau</strong> : grandeur repérée dans une échelle adoptée pour le critère considéré.</li>
		<li><strong>Flexibilité</strong> : ensemble d'indications exprimées par le demandeur, sur les possibilités de moduler le niveau recherché.</li>
		<li><strong>Classes</strong> (de F0 à F3) : indication littérale placée auprès du niveau, permettant de préciser son degré de négociabilité ou d'impérativité.</li>
		<li><strong>Limite d'acceptation</strong> : niveau au-delà duquel le besoin est jugé insatisfait.</li>
		<li><strong>Taux d'échange</strong> : rapport déclaré acceptable par le demandeur, entre la variation du prix et la variation correspondante du niveau d'un critère.</li>
	</ul>
	
	<table class="table">
	<caption>Extrait du cahier des charges fonctionnelles du sécateur électronique.</caption>
	<thead>
	<tr>
		<th rowspan="2">FONCTION</th>
		<th rowspan="2">CRITÈRES d'acceptation</th>
		<th rowspan="2">NIVEAUX d'acceptation</th>
		<th colspan="3" class="w200p">FLEXIBILITÉ</th>
	</tr>
	<tr>
		<th>Classes</th>
		<th>Limites d'acceptation</th>
		<th>Taux d'échange</th>
	</tr>
	</thead>
	<tbody>
	<tr>
	<td>FP1 :<br />Couper un sarment avec un moindre effort</td>
	<td class="w300p">
		- Capacité de coupe<br />
		- Effort de coupe<br />
		- Cadence<br />
	</td>
	<td>
		- &Oslash;22 mm<br />
		- 1000 N<br />
		- 60 coupes/min<br />
	</td>
	<td>F1</td>
	<td>20 mm min.</td>
	<td>&pm; 10%</td>
	</tr>
	<tr>

	<td>FC1 :<br />Avoir un poids et un encombrement en mains correct</td>
	<td>
		- Masse "en main"<br />
		- Longueur<br />
	</td>
	<td>
		- 800g<br />
		- < 320 mm<br />
	</td>
	<td>F1</td>
	<td>max 1kg</td>
	<td>&pm; 50g</td>
	</tr>

	<td>FC2 :<br /> Être intégralement portable</td>
	<td>
		- Masse totale<br />
	</td>
	<td>
		- 3,5 kg<br />
	</td>
	<td>F1</td>
	<td>max 3,7 kg</td>
	<td>&pm; 5%</td>
	</tr>
	
	<td>FC3 :<br />Résister aux conditions extérieures</td>
	<td>
		- Température d'utilisation<br />
		- Humidité, poussière<br />
		- Chocs<br />
	</td>
	<td>
		- de -15°C à 50°C<br />
		- Étanche<br />
		- Chute < 1m<br />
	</td>
	<td>F2<br />F0</td>
	<td><br />
	Aucune</td>
	<td>&pm; 5°C</td>
	</tr>

	<td>FC4 :<br />Être autonome</td>
	<td>
		- Durée d'autonomie<br />
	</td>
	<td>
		- 8 h<br />
	</td>
	<td>F1<br />F0</td>
	<td>7 h min.<br /></td>
	<td>&pm; 10%</td>
	</tr>

	<td>FC5 :<br />Être conforme aux normes de sécurité des travailleurs</td>
	<td>
		- Article R233-10 du Code du Travail<br />
	</td>
	<td>
		- Respect total sans limitation<br />
	</td>
	<td>F0<br /></td>
	<td>Aucune<br /></td>
	<td></td>
	</tr>

	<td>FC6 :<br />Être agréable à l'oeil de l'utilisateur</td>
	<td>
		- Forme<br />
		- Couleur
	</td>
	<td>
		<br />
	</td>
	<td>F2<br /></td>
	<td><br /></td>
	<td></td>
	</tr>

	</tbody>
	</table>
	




