<?php
/**
 * BUT : Ergonomie des postes de travail
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		21/09/21 	10:14::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Ergonomie
 * @access public
 * @uses
 */
$sNavigation = navigation('ergo', '3', 'fin'); ?>




<h1>Tables MTM</h1>


<h2>Métrologie du travail</h2>

<p>Les termes <span class="tag--info">mesure du rendement</span> et <span class="tag--info">métrologie du travail</span> font référence à la manière dont les entreprises définissent :</p>
<ul>
	<li>Le nombre d'opérations qu'un opérateur doit effecteur pendant une phase de travail donnée ;</li>
	<li>Les procédures qu'il suit pour les accomplir ;</li>
	<li>Le temps pendant lequel il doit les accomplir (appelé <span class="tag--info">cycle de travail</span>). </li>
</ul>

<p>Le modèle utilisé pour définir la quantité de travail à accomplir pendant un <strong>cycle de travail</strong>, qui est similaire chez tous les constructeurs automobiles, consiste dans les phases suivantes : </p>
<ol class="alpha">
	<li><strong>Étude du produit</strong> : définir les caractéristiques du produit et réduire au minimum le temps nécessaire pour l'assembler. </li>
	<li><strong>Définition des procédures d'assemblage du produit</strong> : au cours de cette phase, le chef d'un groupe d'opérateurs (unité technologique élémentaire) transpose les informations dégagées lors de la première phase en une séquence d'opérations élémentaires nécessaires à l'assemblage du produit (sous la forme de ce qu'on appelle une fiche d'analyse du travail). Le responsable de l'unité technologique élémentaire effectue généralement un premier calcul des temps à l'aide d'un chronomètre. </li>
	<li><strong>Définition de la charge et des temps de travail</strong> : les ingénieurs chargés de la mesure des temps utilisent les tableaux de temps prédéterminés et procèdent à des mesures chronométriques pour calculer le temps requis pour la réalisation des opérations figurant sur la fiche d'analyse du travail et ainsi la durée finale du cycle. </li>
</ol>

<p>Nous allons développer cette dernière partie.</p>
<p>Les charges et temps de travail sont déterminés essentiellement sur la base de deux critères (qui peuvent agir conjointement ou alternativement) : </p>
<ul>
	<li>La mesure peut être effectuée à l'aide d'un chronomètre (<span class="tag--info">méthode chronométrique</span>) </li>
	<li>Ou en suivant la <span class="tag--info">méthode des temps prédéterminés</span> (MTP).</li>
</ul>
<p>Pour résumer, la ligne d'assemblage des pièces d'un véhicule est subdivisée en « postes/phases d'assemblage » ; le nombre d'opérations (charge de travail) et le temps pendant lequel celles-ci doivent être effectuées (« cycle de travail ») sont ainsi définis pour chacune des phases.</p>
<p>Dans la méthode <strong>chronométrique</strong>, d'une part, l'analyste fixe les deux paramètres <strong>charge de travail</strong> et <strong>cycle de travail</strong> en observant un nombre suffisant d'opérateurs (« panel ») présentant un niveau moyen de compétence et de connaissance du travail ; ces deux paramètres sont calculés à l'aide d'un chronomètre.</p>
<p>Dans la méthode <strong>MTP</strong>, d'autre part, les deux paramètres <strong>charge de travail</strong> et <strong>cycle de travail</strong> sont calculés en comparant le nombre et les caractéristiques des opérations requises.</p>


<h2>Méthode MTM</h2>

    <p>La MTP la plus largement appliquée à l'échelle internationale est la MTM, une méthode où les tableaux des temps ont été conçus sur la base de recherches menées principalement aux États-Unis dans les années 1940 et 1950. D'après ces recherches, les temps de travail, tels que définis par le tableau MTM, devraient permettre à un opérateur de « capacité moyenne » de travailler pendant huit heures sans se fatiguer !</p>
    <p>Les tableaux MTM décrivent la majorité des mouvements effectués par un opérateur pendant une phase de travail.</p>
<p class="notice exemple">Exemple : saisir un objet, le déplacer, le placer, le visser, etc.). Un temps d'exécution standard est ensuite fixé pour chaque mouvement à partir d'une série de paramètres (poids, distance par rapport au corps, niveau de difficulté des opérations pour « saisir et placer l'objet », etc.</p>
<p>Pour résumer, un ingénieur chargé de la mesure des temps appliquant la MTM effectue les opérations suivantes :</p>
<ul>
	<li>Diviser chaque phase de travail en opérations élémentaires, détermine le temps d'exécution correspondant à chaque opération dans le tableau MTM selon les paramètres requis (poids, distance, etc.).</li>
	<li>Additionner les temps de chaque opération et obtient enfin le temps nécessaire à l'exécution de la phase de travail dans son ensemble.</li>
</ul> 
<p class="notice exemple">Par exemple, pour déterminer le temps nécessaire pour assembler le plafonnier d'un véhicule, la phase est décomposée en opérations élémentaires (saisir une pièce du plafonnier, la placer sur le plafond du véhicule, prendre le tournevis, la visser, etc.), puis le temps requis pour chaque opération est retrouvé dans le tableau MTM et les temps des différentes opérations sont enfin additionnés pour obtenir le temps final de la phase. </p>
<p>Indépendamment de la méthode utilisée (chronométrique ou MTM), la quantité de travail à effectuer pendant une période donnée (cycle de travail) est déterminée en suivant trois étapes : </p>
<ol class="alpha">
	<li>Définition du « temps de base » (généralement déterminé grâce aux tableaux MTM) ; </li>
	<li>Définition du « facteur d'augmentation du temps de base » (ou coefficient de repos) ; </li>
	<li>Définition du temps final de la phase de travail (cycle de travail) : la somme du temps de base et du coefficient de repos. </li>
</ol>
<p>Le coefficient de repos dans une phase de travail est lui-même calculé à partir de trois facteurs : </p>
<ol>
	<li>un facteur physiologique (besoins physiologiques, pause-café, etc.) ; </li>
	<li>un facteur ergonomique : lié à la fatigue et à l'inconfort physique de l'opérateur (positions à risque, force, etc.) ; </li>
	<li>un facteur technico-organisationnel : arrêts de la ligne, retards, gamme de production, etc. </li>
</ol>
<p>Le temps alloué (T.A.) détermine aussi le niveau de « saturation » ou l'intensité du travail. Plus le « coefficient de repos » est élevé, plus la quantité de travail fixée est faible, et par conséquent, plus le niveau de saturation est bas. </p>
<p class="notice exemple">Si, par exemple, 54 opérations d'une seconde sont fixées dans une phase de travail pour un cycle de 60 secondes, on obtient un taux de saturation de 90 % du cycle et un « coefficient de repos » de 10 % (6 secondes). Il apparaît clairement que, si le niveau de saturation est élevé, l'opérateur devra accroître sa vitesse d'exécution, accélérer son rythme de travail pour parvenir à effectuer les opérations demandées dans le cycle de travail.</p>
<p>La phase finale, après l'établissement du cycle de travail ou du « rythme » de la ligne, est celle de l'« équilibrage », c'est-à-dire de la distribution des « charges de travail » aux différents postes de la ligne d'assemblage. Comme nous le verrons, cette phase consiste principalement à fixer le « coefficient de repos » de chaque poste. </p>
<p>Après cette description sommaire des critères standards et des concepts de base de ce que l'on appelle la « métrologie du travail », nous pouvons analyser les procédures d'évaluation utilisées par les constructeurs automobiles européens.</p>


<h2>Procédures de mesure du travail</h2>

<p>Le modèle défini dans le paragraphe précédent (temps de base + coefficient de repos = temps du cycle final) est suivi par tous les constructeurs automobile et le temps de base est calculé à partir des tableaux MTM (essentiellement MTM2-3 et MTM-UAS) et de relevés chronométriques. Cette dernière méthode est utilisée en particulier dans la production de nouveaux véhicules et pour vérifier de manière empirique les temps lors de certaines phases de travail. </p>
<p>En dehors de ce modèle qui est appliqué par tous les grands constructeurs, deux aspects caractérisent de manière très notable les entreprises du secteur automobile européen en particulier : </p>
<ol class="alpha">
	<li>La fixation du « coefficient de repos » en associant la MTM et les méthodes d'analyse er-gonomique ; </li>
	<li>Le recours à des méthodes dérivées du modèle de Lean Production pour optimiser le rendement en éliminant ce que l'on appelle les « activités sans valeur ajoutée » (ASVA). </li>
</ol>
<p>Nous allons examiner plus en détail ces deux aspects, car ils jouent un rôle important dans la définition des conditions de travail matérielles de millions d'opérateurs.</p>

<h3>Association des systèmes de métrologie du travail aux méthodes d'analyse des risques ergonomiques.</h3>

<p>Les systèmes de métrologie du travail ont toujours tenu compte du facteur « fatigue » pour déterminer la charge de travail à fixer pour une période donnée (cycle de travail).</p>
<p>En cas de « fatigue » plus importante, qui se manifeste chez l'opérateur par des troubles musculosquelettiques et une perte d'énergie, un nombre moins important d'opérations à effectuer était fixé.</p>
<p>Il s'agissait cependant de « critères sommaires », puisque les tableaux reprenaient ces facteurs dans des termes très simplifiés comme « postures à risque ».</p>
<p class="notice exemple">Par exemple : bras levés, écrasement de la poitrine, etc ou « force sur une partie du corps ».</p>
<p>Au cours des dix dernières années, les constructeurs automobiles ont commencé à suivre des méthodes empruntées à la recherche ergonomique pour mesurer la charge biomécanique des phases de travail (postures à risque pour les bras et la colonne vertébrale, force, etc.) de manière relativement plus précise.</p>
<p>De la sorte, le « coefficient de repos » fixé pour une phase de travail donnée devient directement proportionnel au niveau du risque ergonomique obtenu. Si le risque est faible (bande verte), le coefficient de repos baisse également. Si le risque est modéré (bande jaune) ou élevé (bande rouge), le coefficient de repos augmente petit à petit.</p>


<h2>Tables MTM</h2>

<p class="notice remarque">Note : Les symboles de ces mouvements sont appellés <strong>STEMES</strong> et les praticiens, des <strong>stémistes</strong>.</p>

<p class="h3-like">Objectifs :</p>
<p>Essentiellement, SIMPLIFIER les méthodes de mesure de travail :</p>
<ul>
	<li>Supprimer le chronométrage.</li>
	<li>Supprimer le calcul « temps de référence ».</li>
	<li>Internationaliser le vocabulaire technique des mouvements.</li>
	<li>Éliminer toute contestation : automatiser les résultats.</li>
	<li>Déterminer facilement des temps très courts.</li>
	<li>Décomposer les éléments simples fondamentaux.</li>
	<li>Prédéterminer le temps de référence.</li>
</ul>

<p class="h3-like">Limites d'emploi des standards de temps</p>
<ul>
	<li>Peu utilisables pour les travaux impliquant une participation mentale importante.</li>
	<li>Pour les travaux à cycles longs, l'analyse très fine et l'addition de trop nombreux stèmes demande une préparation trop laborieuse.</li>
	<li>Nécessité d'une formation professionnelle des stémistes.</li>
	<li>Ne permet pas de détecter les postes cause d'un mauvais fonctionnement technologique (recours au chrono de diagnostique).</li>
	<li>Ne permet pas de mesurer le degré de stabilisation des postes (recours au chrono d'étude).</li>
</ul>


<h2>Mouvements des membres supérieurs</h2>
<p>Atteindre, saisir, mouvoir, lâcher , positionner, désengager, tourner, mouvements de manivelle, appliquer pression</p>

<h3>ATTEINDRE – R – (Reach)</h3>

<p>Élément de base lorsque le but prédominant du mouvement est de déplacer la main ou les doigts.</p>

<img src="/assets/img/qlio/ergo/atteindre.png" alt="table atteindre" />

<p>On remarque 5 cas de « atteindre », ( voir le tableau ;A, B, C, D, E, ) et 3 types de mouvements en fonction de l'état de la main au début ou à la fin du geste.</p>

<h4>Influence de l'état de la main au début ou à la fin du geste.</h4>

<ul>
	<li>Type I – Geste normal – Main arrêtée au début ou à la fin du geste.</li>
	<li>Type II – Main en mouvement au début ou à la fin du geste. On ajoute un « m », soit avant, soit après le symbole du geste normal.</li>
	<li>Type III – Main en mouvement au début et à la fin du geste. On ajoute un « m » avant et après le symbole du geste normal.</li>
</ul>


<div class="notice exemple">
	<p>Exemple 1 : Atteindre type I : R 30 A (geste R, distance 30 cm, cas A) = 9.5 cmh</p>
	<img src="/assets/img/qlio/ergo/exemple1.png" alt="atteindre R 30 A" />

	<p>Exemple 2 : Atteindre type II : mR 20 B (geste mR, distance 20 cm, cas B) = 7.1 cmh</p>
	<img src="/assets/img/qlio/ergo/exemple2.png" alt="atteindre mR 20 B" />

	<p>Exemple 3 : Atteindre type III : mR 40 Bm (geste mR, distance 40 cm, cas B en mouvement) = 10 tmu</p>
	<p> ou MR40B = 12.8 cmh, moins 2.8 pour le deuxieme « m » = 10 cmh</p>
	<img src="/assets/img/qlio/ergo/exemple3.png" alt="atteindre mR 40 Bm" />

	<p>Exemple 4 : Atteindre ciseau : RB</p>
	<img src="/assets/img/qlio/ergo/exemple4.png" alt="atteindre RB" />

	<p>Exemple 5 : Atteindre tournevis dans un tiroir : RC</p>
	<img src="/assets/img/qlio/ergo/exemple5.png" alt="atteindre RC" />

	<p>Exemple 6 : Atteindre déchets tissus. Atteindre tournevis : RE</p>
	<img src="/assets/img/qlio/ergo/exemple6.png" alt="atteindre RE" />

</div>

<h3>SAISIR – G – (Grap)</h3>
<p>Élément de base réalisé par les doigts et la main ou les doigts seuls pour assurer un contrôle partiel ou total d'un ou plusieurs objets de façon que les autres éléments de base puissent s'effectuer.</p>

<img src="/assets/img/qlio/ergo/saisir.png" alt="table saisir" />

<p>On remarque les temps d'exécution dépendent de trois variables :</p>
<ul>
	<li>Saisir par préhension (G1A, G1B, G1C, G3, G4A, G4B, G4C)</li>
	<li>Saisir par contact (G5)</li>
	<li>Ressaisir (G2)</li>
</ul>

<div class="notice exemple">
	<p>Exemples</p>
	<img src="/assets/img/qlio/ergo/exemple13.png" alt="saisir G1B" />

</div>

<h3>MOUVOIR – M – (Move)</h3>

<p>Élément de base effectué par les doigts ou la main lorsque le but prédominant du mouvement est de déplacer un objet.</p>
<img src="/assets/img/qlio/ergo/mouvoir.png" alt="table mouvoir" />

<p>On remarque 3 cas de MOUVOIR (voir le tableau A, B, C) et 3 types de mouvements symbolisés par un « m », les mêmes que ceux décrits dans l'élément de base ATTEINDRE.</p>


<div class="notice exemple">
	<p>Exemple 1 : Amener le devant d'un blouson contre la butée de réglage de la machine à boutonnières : MA</p>
	<img src="/assets/img/qlio/ergo/exemple7.png" alt="mouvoir MA" />

	<p>Exemple 2 : Déplacer des ciseaux d'un point à l'autre : MB</p>
	<img src="/assets/img/qlio/ergo/exemple8.png" alt="mouvoir MB" />

	<p>Exemple 3 : Diriger pièce vers pied-presseur : MC</p>


	<h4>Mouvoir avec effort :</h4>
	<p>La bonification pour EFFORT :</p>
	<ul>
		<li>On applique le coefficient dynamique.</li>
		<li>Au résultat on ajoute la constante statique (voir le tableau).</li>
	</ul>

	<p>1 - Presser couture (fer à repasser 5 kg, distance 30 cm ) : M 30 B 5</p>
	<ul>
		<li>M 30 B = 13.2 cmh</li>
		<li>Coeff dynam.pour 5 kg : 1.09 cmh</li>
		<li>13.2 x 1.09 = 14.388 cmh</li>
		<li>+ constante statique : 3.3 cmh</li>
		<li>14.388 + 3.3 = 17.688 cmh</li>
	</ul>

	<p>2 - Déplacer rouleau tissu (avec les deux mains, pièce de 20 kg, distance 90cm) : M 90 B 20/2</p>
	<ul>
		<li>M 90 B = 25.2 cmh + 2.4cmh = 27.6 cmh</li>
		<li>Coeff dynam.pour 10 kg : 1.21 cmh</li>
		<li>27.6 x 1.21 = 33.396 cmh</li>
		<li>+ constante statique : 7.1 cmh</li>
		<li>33.396 + 7.1 = 40.496 cmh</li>
	</ul>

<p class="notice remarque">Remarque : Dans le cas où les deux mains porteraient, séparément, deux objets de poids différents, c'est le temps le plus fort qui serait pris en considération.</p>

</div>
<!--table class="table">
	<thead>
	<tr>
			<th rowspan="2">Distance en cm</th>
			<th rowspan="2">M-A</th>
			<th rowspan="2">M-B</th>
			<th rowspan="2">M-C</th>
			<th rowspan="2">m M-B<br />M-B m</th>
			<th rowspan="2">M(B))</th>
			<th colspan="3">AVEC EFFORT</th>
			<th rowspan="2">Description des cas</th>
		</tr>
		<tr>
			<th>kg</th>
			<th></th>
			<th>Coeff dyn.</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><= 2<br />
				4
			</td>
			<td>
				2.0<br />
				3.1
			</td>
			<td>2.0<br />
				3.8
			</td>
			<td>2.0
			<br />
				4.5
			</td>
			<td>1.7
			<br />
				2.6
			</td>
			<td>0.3
			<br />
				1.2
			</td>
			<td>De 0<br />
				à 1.25
			</td>
			<td>0</td>
			<td>1</td>
			<td rowspan="3"><p class="txtleft">A<br />
				Mouvoir un objet jusqu'à l'autre main ou contre une butée.</p>
			</td>
		</tr>
		<tr>
			<td>6<br />
				8<br />
				10
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>5<br />
				6<br />
				6.9
			</td>
			<td>5.8<br />
				7.0<br />
				8.0
			</td>
			<td>3.1<br />
				3.7<br />
				4.2
			</td>
			<td>1.9<br />
				2.3<br />
				2.7
			</td>
			<td>>1.2<br />
				5<br />
				à 2.5
			</td>
			<td>1.9</td>
			<td>10.4</td>
		</tr>
		<tr>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>4.1<br />
				5.1<br />
				6.1
			</td>
			<td>1.9</td>
			<td>10.4</td>
		</tr>
	</tbody>
</table-->

<h3>LÂCHER – RL – (Release)</h3>

<p>Élément de base utilisé lorsque les doigts ou la main abandonnent le contrôle d'un objet.</p>

<table class="table">
<tbody>
<tr>
	<td>RL1</td>
	<td>2</td>
	<td>Lâcher par ouverture des doigts</td>
</tr>
<tr>
	<td>RL2</td>
	<td>0</td>
	<td>Lâcher de contact</td>
</tr>
</tbody>
</table>

<p>On remarque que les temps d'exécution dépendent de deux variables : RL1 et RL2</p>

<div class="notice exemple">
	<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple14.png" alt="lâcher RL1" />

	<p>Le cas RL2 résulte de G5 (saisir par contact), comme lui, sa valeur est nulle.</p>
	<img src="/assets/img/qlio/ergo/exemple15.png" alt="lâcher RL2" />

</div>

<h3>TOURNER – T – (Turn)</h3>

<p>Élément de base réalisé par une rotation de la main vide ou chargée du poignet ou de l'avant-bras autour de l'axe de l'avant-bras.</p>
<p>Le temps d'exécution dépend de deux variables :</p>
<ul>
	<li>L'angle de rotation exprimé en degrés.</li>
	<li>L'effort fourni pendant le mouvement.</li>
</ul>

<img src="/assets/img/qlio/ergo/tourner.png" alt="table tourner" />


<p>On remarque 3 cas de TOURNER : S, M, L en fonction de l'effort fourni (voir le tableau ).</p>

<div class="notice exemple">
	<p>Exemple 1 : Tourner le bouton de réglage autour d'un axe (90°) : T 90 S, temps 5.4 cmh</p>
	<img src="/assets/img/qlio/ergo/exemple9.png" alt="tourner T 90 S" />

	<p>Exemple 2 : Contrôler la qualité d'un vêtement reposant sur un cintre (angle de rotation 160°, poids du vêtement 1.650 kg) : T 165 M 5, temps 13.7 cmh</p>
	<img src="/assets/img/qlio/ergo/exemple10.png" alt="tourner T 165 M 5" />

</div>


<h3>MOUVEMENT DE MANIVELLE – C –</h3>
<img src="/assets/img/qlio/ergo/manivelle.png" alt="table mouvement de manivelle" />

<p>On remarque que le temps d'exécution dépend :</p>
<ul>
	<li>Du diamètre de la trajectoire.</li>
	<li>Du nombre de tours.</li>
	<li>De l'effort (on utilise les coefficients de majoration utilisés pour MOUVOIR).</li>
</ul>

<div class="notice exemple">
	<p>Exemple 1 : Enroulement du tissu après l'opération de décatissage</p>
	<img src="/assets/img/qlio/ergo/exemple11.png" alt="Enroulement du tissu 6 C 30 5" />

	<p>Tourner manivelle : 6 fois</p>
	<p>Diamètre de manivelle : 30 cm</p>
	<p>Effort développée : 5 kg</p>
	<p>6 C 30 5</p>
	<p>Temps :</p>
	<p>1° tour : 20.2 cmh</p>
	<p>5 tours supplémentaires : 15 x 5 =75 cmh</p>
	<p>Total temps manivelle : 95.2 cmh</p>
	<p>Coefficient dynamique : 1.09 cmh</p>
	<p>Constante statique : 3.3 cmh</p>
	<p>Temps opération : (95.2 x 1.09) + 3.3 = 107.068 cmh</p>

</div>




<h3>APPLIQUER PRESSION – AP – </h3>

<p>On remarque que les cas APPLIQUER PRESSION se détermine en fonction du contrôle de l'objet et de l'effort développé.</p>

<img src="/assets/img/qlio/ergo/exemple12.png" alt="appliquer pression AP" />

<p>AP A) - effort faible, la contraction musculaire se ressent uniquement dans les doigts ; temps = 10.6 cmh</p>
<p>AP B) - la contraction musculaire se ressent dans l'avant-bras ; temps = 16.2 cmh</p>


<h3>POSITIONNER – P – (Position)</h3>

<p>Élément de base utilisé pour ALIGNER, ORIENTER et ENGAGER un objet avec un autre objet au moyen de mouvements d'une amplitude si faible que leur classification dans les autres éléments ne se justifie pas.</p>
<ul>
	<li>ALIGNER : C'est réaliser la coïncidence des deux axes de 2 profils.</li>
	<li>ORIENTER : C'est réaliser la coïncidence géométrique de 2 profils par rotation autour de l'axe d'alignement</li>
	<li>ENGAGER : C'est effectuer l'insertion jusqu'à une profondeur de 25 mm maximum de l'objet qu'on engage dans l'objet où l'on engage. Au-delà de 25 mm, c'est un mouvoir.</li>
</ul>

<img src="/assets/img/qlio/ergo/positionner.png" alt="table positionner" />

<p>On remarque que les temps d'exécution dépendent de trois variables :</p>
<ul>
	<li>La classe d'ajustement P1, P2, P3</li>
    <li>La symétrie S, SS (semisymmetrical), NS (nonsymmetrical - par exemple, une clé insérée dans une serrure)</li>
	<li>La manipulation E, D</li>
</ul>

<div class="notice exemple">
<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple16.png" alt="positionner P2SS" />

	<p>Exemple 2 :</p>
	<img src="/assets/img/qlio/ergo/exemple17.png" alt="positionner P2SS" />

</div>

<h3>DÉSENGAGER – D – </h3>

<p>Mouvement manuel de base réalisé pour rompre le contact entre deux ou plusieurs objets.</p>
<p>Cette rupture est caractérisée par un mouvement involontaire, provoqué par la cessation de la résistance : LE RECUL.</p>


<p>On remarque que les temps d'exécution dépendent de deux variables :</p>
<ul>
	<li>La classe d'ajustement D1, D2, D3</li>
	<li>La manipulation E, D</li>
</ul>

<div class="notice exemple">
<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple18.png" alt="desengager D1E" />
</div>

<h3>Mouvements des yeux</h3>
<h4>DÉPLACER LE REGARD – ET – (Eye Travel)</h4>
<p>(Sans rotation de la tête)</p>
<table class="table">
	<tbody>
	<tr>
		<td colspan="2"><p class="txtleft">Temps exact = 0.285 * angle de rotation des yeux en degrés</p></td>
	</tr>
	<tr>
		<td>Temps approché = 15.2 T/D</td>
		<td><p class="txtleft">T = distance entre les deux points regardés</p></td>
	</tr>
	<tr>
		<td></td>
		<td><p class="txtleft">D = distance de l'œil à la droite joignant ces points avec une valeur maximale de 20 cmh</p></td>
	</tr>
	</tbody>
</table>
<p>Le temps du mouvement dépend de l'angle formé par :</p>
<ul>
	<li>Le mouvement des yeux seuls.</li>
	<li>La rotation de la tête, les yeux restant immobiles.</li>
	<li>Les yeux et la tête combinant les mouvements (le temps maximum évalué à 20 cmh).</li>
</ul>

<div class="notice exemple">
<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple19.png" alt="déplacer le regard ET" />
</div>

<p>Par mesure directe : 0.285 x 35 = 9.97 cmh</p>
<p>Par calculs : 15.2 x ( 25/40) = 9.50cmh</p>

<h4>EXAMINER – EF – (Eye Focus)</h4>
<p>(Sans déplacement de l'axe oculaire)</p>
<p>Action de base exécutée par les deux yeux qui se fixe sur un point, pour déterminer certaines caractéristiques d'un objet , situé dans la zone normale de vision (surface de 10cm environ ; distance de 40 cm des yeux).</p>

<table class="table">
	<tbody>
		<tr>
			<td>
			Examiner, sans déplacement de l'axe oculaire - Temps = 7.3 cmh
			</td>
		</tr>
	</tbody>
</table>

<div class="notice exemple">
	<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple20.png" alt="examiner EF 1" />
	<p>Contrôler la longueur d'une boutonnière. On alloue ici un EXAMINER</p>

	<p>Exemple 2 :</p>
	<img src="/assets/img/qlio/ergo/exemple21.png" alt="examiner EF 2" />
	<p>Définir l'armure d'un tissu. On alloue ici quatre à cinq EXAMINER</p>
</div>

<h2>Mouvements du corps et des membres inférieurs</h2>
<p>Mouvement du pied, de la jambe, pas de côté, tourner le corps, marcher, s'incliner, se baisser s'asseoir , se lever, s'agenouiller se relever</p>

<p>La table indique aussi les mouvements de base qui sont faciles, possibles ou difficiles à exécuter SIMULTANÉMENT.</p>

<h3>MOUVEMENTS DU PIED symbole FM</h3>
<p>C'est un mouvement du pied développé autour de l'axe de la cheville, effectué le plus souvent dans le plan vertical.</p>

<div class="notice exemple">
	<p>Exemple : appuyer sur la pédale de la machine à coudre FM = 8.5 dmh</p>
</div>

<h3>DÉPLACER LA JAMBE - LM</h3>
<p>Élément de base utilisé pour déplacer le pied ou la jambe (ou les deux) dans une direction quelconque, l'articulation du genou et (ou) de la hanche servant de pivot.</p>

<div class="notice exemple">
	<p>Exemples :</p>
	<ul>
		<li>Appuyer avec le genou sur la genouillère de la machine à coudre : LM 7.1 cmh.</li>
		<li>Appuyer sur la pédale de verrouillage d’une presse, course de la pédale 16 cm : L16M = 7.6 cmh.</li>
	</ul>
</div>


<h3>MARCHER - W</h3>
<p>Cette action se rencontre dans les déplacements de personnes. Marche avant. Marche arrière.</p>

<div class="notice exemple">
	<p>Exemple :</p>
	<p>Déplacer un chariot, poids 22 kg, distance 2.40 m, chariot poussé avec les deux mains (2.40m = 8 pas) W 8 P M 240 B 22/2</p>
	<p>Temps : W 8 P = 17x8 = 136 cm</p>
	<p>M 240 B 22/2 : M B80 = 25.2 cmh</p>
	<p>(240-80)/5 = 32</p>
	<p>32 x 1.2 = 38.4 cmh</p>
	<p>Total temps pour la distance : 25.2 + 38.4 =63.6 cmh</p>
	<p>Temps pour le poids : (63.6 x 1.27) + 9 = 89.77 cmh ( arrondis = 90 cmh)</p>
	<p>Total temps : 136 + 90 = 226 cmh</p>
</div>
<h3>PAS DE COTÉ - SS</h3>
<p>Mouvement effectué pour déplacer le corps sur le côté, d'un position à l'autre, voisine, sans faire tourner le corps.</p>

<div class="notice exemple">
	<p>Exemple 1 :</p>
	<img src="/assets/img/qlio/ergo/exemple22.png" alt="pas de côté SS 1" />
	<p>Le pied gauche fait un pas de 25 cm, le pied droit a légèrement pivoté mais il n'a pas quitté le sol : SS 25 C1</p>
	<p>Temps = 0 cmh (temps masqué)</p>

	<p>Exemple 2 :</p>
	<img src="/assets/img/qlio/ergo/exemple23.png" alt="pas de côté SS 1" /><img src="/assets/img/qlio/ergo/exemple24.png" alt="pas de côté SS 2" />
	<p>Le pas de côté est terminé lorsque la 2° jambe levée atteint le sol . Pas de 32 cm.</p>
	<p>SS 32 C2 = 34.1 + ( 0.4 x 2 ) = 34.9 cmh</p>
</div>


<h3> S'INCLINER - B</h3>
<p>Élément de base effectué lorsque le corps se penche sans que les genoux fléchissent, pour ATTEINDRE avec les mains un point situé au niveau, ou un peu en dessous des genoux.</p>

<h3>SE RELEVER - A</h3>
<p>Revenir à la position debout après un S'INCLINER, SE BAISER, METTRE UN GENOU À TERRE, S'ASSEOIR.</p>

<h3>SE BAISSER - S</h3>
<p>Mouvement de base effectué lorsque le corps fléchit sur les genoux pour ATTEINDRE avec les mains un point situé au sol ou près du sol.</p>

<h3>METTRE UN GENOU À TERRE - KOK</h3>
<p>Élément de base effectué pour ATTEINDRE un point situé au sol ou près du sol.</p>

<h3>S'AGENOUILLER - KBK</h3>
<p>Élément de base effectué pour s'agenouiller sur les deux genoux, l'un près de l'autre, à partir de la position debout.</p>

<h3>S'ASSEOIR - SIT</h3>
<p>Élément de base effectué pour s'asseoir sur un siège de hauteur normale, sans aucun geste accompagnant ce mouvement tel que : rapprocher la chaise, déplacer les pieds, etc…</p>


<img src="/assets/img/qlio/ergo/mouvement_inf.png" alt="table des mouvements du corps et des membres inférieurs" />

<!--table class="table">
	<thead>
	<tr>
		<th>Description</th>
		<th>Symbole</th>
		<th>Distance</th>
		<th>cmh</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><p class="txtleft">Déplacer le pied autour de la cheville </p>
			<p class="txtleft">avec forte pression.</p>
			<p class="txtleft">Déplacer la jambe ou le mollet.</p>
		</td>
		<td>
			<p>FM</p>
			<p>FMP</p>
			<p>LM</p>
		</td>
		<td>
			<p>Jusqu'à 10 cm</p>
			<p>&nbsp;</p>
			<p>Jusqu'à 15 cm</p>
			<p>Chaque cm en plus</p>

		</td>
		<td>
			<p>8.5</p>
			<p>19.1</p>
			<p>7.1</p>
			<p>0.5</p>
		</td>
	</tr>
	<tr>
		<td>
			<p class="txtleft">Marcher, par pas : 	libre.</p>
			<p>	gêné.</p>
			<p>	en déplaçant un chariot.</p>
		</td>
		<td>
			<p>W-P</p>
			<p>W-PO</p>
			<p>W-PL</p>
		</td>
		<td>

		</td>
		<td>
			<p>15.0</p>
			<p>17.0</p>
			<p>17.0</p>
		</td>
	</tr>
	<tr>
		<td>
			<p class="txtleft">Effectuer un pas de côté.</p>
			<p class="txtleft">Cas I 	: terminé lorsque la jambe levée atteint le sol.</p>
			<p class="txtleft">Cas II 	: terminé lorsque la deuxième jambe levée atteint le sol.</p>

		</td>
		<td>
			<p></p>
			<p>SS-C1</p>
			<p>SS-C2</p>
		</td>
		<td>
			<p>		</p>
			<p>Moins de 30 cm</p>
			<p>30cm</p>
			<p>Chaque cm en plus</p>
			<p>30 cm</p>
			<p>Chaque cm en plus</p>
		</td>
		<td>
			<p>Masqué par R ou M</p>
			<p>17.0</p>
			<p>0.2</p>
			<p>34.1</p>
			<p>0.4</p>
		</td>
	</tr>
	<tr>
		<td>
			<p class="txtleft">Tourner le corps de 45° à 90°.</p>
			<p class="txtleft">Cas I 	: terminé lorsque la jambe levée atteint le sol.</p>
			<p class="txtleft">Cas II 	: terminé lorsque la deuxième jambe levée atteint le sol.</p>
		</td>
		<td>
			<p></p>
			<p>TBC1</p>
			<p>TBC2</p>
		</td>
		<td>

		</td>
		<td>
			<p></p>
			<p>18.6</p>
			<p>37.2</p>
		</td>
	</tr>
	<tr>
		<td>
			<p class="txtleft">S'asseoir.</p>
			<p class="txtleft">Se lever.</p>
			<p class="txtleft">S'incliner.</p>
			<p class="txtleft">	Se baisser.</p>
			<p class="txtleft">	Mettre un genou à terre.</p>
			<p class="txtleft"></p>
			<p class="txtleft">Se redresser, se relever respectivement.</p>
			<p class="txtleft"></p>
			<p class="txtleft">S'agenouiller complètement.</p>
			<p class="txtleft">Se relever.</p>
		</td>
		<td>
			<p>SiT</p>
			<p>STD</p>
			<p>B</p>
			<p>S</p>
			<p>KOK</p>
			<p>AB</p>
			<p>AS</p>
			<p>AKOK</p>
			<p>K B K</p>
			<p>A K B K</p>
		</td>
		<td>

		</td>
		<td>
			<p>34.7</p>
			<p>43.4</p>
			<p></p>
			<p>29.0</p>
			<p></p>
			<p></p>
			<p>31.9</p>
			<p></p>
			<p>69.4</p>
			<p>76.7</p>
		</td>
	</tr>
	</tbody>
</table-->

<h2>Exemple d'analyse MTM</h2>

<div class="notice exemple">

<p class="h3-like">Opération : ourler bas chemise</p>
<p>Symbole : AS</p>
<p>Machine : Singer 251-3000pts/minute</p>
<p>Nombre de points au cm : 7</p>

<table class="table">
	<tbody>
		<tr>
			<td>1</td>
			<td>Prendre chemise (R40B+G1B)</td>
			<td></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Placer sur table (M40A+RL2)</td>
			<td></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Lâcher (RL1)</td>
			<td></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Prendre bas chemise (R40B+G1B)</td>
			<td></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Former ourlet (R10B+G4B+P2SD+APB)</td>
			<td></td>
		</tr>
		<tr>
			<td>6</td>
			<td>Ressaisir (G2+G2)</td>
			<td></td>
		</tr>
		<tr>
			<td>7</td>
			<td>Placer en pied presseur (R30A+M2C)</td>
			<td></td>
		</tr>
		<tr>
			<td>8</td>
			<td>Arrêt (FM+EM+P1SD)</td>
			<td></td>
		</tr>
		<tr>
			<td>9</td>
			<td>Lâcher (RL1)</td>
			<td></td>
		</tr>
		<tr>
			<td>10</td>
			<td>Reprendre travail pour placer dans guide (G2)</td>
			<td></td>
		</tr>
		<tr>
			<td>11</td>
			<td>Placer dans guide ( P1NSD)</td>
			<td></td>
		</tr>
		<tr>
			<td>12</td>
			<td>Orienter (G2+M20C+P1SD)</td>
			<td></td>
		</tr>
		<tr>
			<td>13</td>
			<td>Coudre (non contrôlé) (+FM).</td>
			<td></td>
		</tr>
		<tr>
			<td>14</td>
			<td>Engager parementure dans guide (R10B+G5+P1SD)</td>
			<td></td>
		</tr>
		<tr>
			<td>15</td>
			<td>Orienter (R10B+G1B+G1B+P1NSD+G2)</td>
			<td></td>
		</tr>
		<tr>
			<td>16</td>
			<td>Coudre (non contrôlé) (+FM)</td>
			<td></td>
		</tr>
		<tr>
			<td>17</td>
			<td>Arrêt (FM+FM+P1SD)</td>
			<td></td>
		</tr>
		<tr>
			<td>18</td>
			<td>Évacuer (G2+M45A)</td>
			<td></td>
		</tr>
		<tr>
			<td>19</td>
			<td>Lâcher (RL1)</td>
			<td></td>
		</tr>
	</tbody>
</table>

</div>


