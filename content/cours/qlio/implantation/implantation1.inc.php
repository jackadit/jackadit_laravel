<?php
/**
 * BUT : Implantation
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Implantation
 * @access public
 * @uses 
 */
$sNavigation=navigation('implantation', '1');
?>




<h1>Étude d'implantation</h1>

<h2>Implantation : pourquoi ?</h2>

<p>Une entreprise est équivalente à un tuyau : on entre une matière, on en sort un produit.</p>

<p>Le diamètre du tuyau va déterminer le débit. Mais ce qui importe pour une entreprise, c'est la longueur du débit : plus on est long a produire, plus on a un tuyau qui est long, ce qui équivaut à une perte de temps.</p>

<p>Pour remédier à cela, il faut une organisation du travail adaptée. D'une part on s'occupe du lieu où on produit (implantation) et d'autre part des moyens pour mener à bien la production (LEAN) .</p>

<p>Ainsi, les solutions à rechercher sont à orienter vers l'élimination des pertes de toute nature : de temps, de matière, de main-d'oeuvre, d'énergie, etc., ce qui conduit à étudier les problèmes-clés de l'organisation des ateliers.</p>
<p>Ce sont par exemple :</p>
<ul>
	<li>Les implantations, car la disposition des bâtiments, chantiers, bureaux, ainsi que la situation des postes de travail successivement utilisés, commandent le déroulement des gammes de fabrication ;</li>
	<li>L'équipement, répartissant dans l'implantation les moyens de production, et permettant de distribuer au mieux l'énergie, l'eau, les gaz et tous autres aliments de la fabrication ;</li>
	<li>Les manutentions, qui sont de gourmands parasites lorsqu'elles ne sont pas strictement limitées aux déplacements indispensables réalisés économiquement ;</li>
	<li>L'entretien des locaux et du matériel, indispensable au maintien en état de l'outil de travail, sans pour autant grever trop lourdement les prix de revient de fabrication ;</li>
	<li>Les approvisionnements procurant à pied d'oeuvre les matières et éléments prévus, en temps fixé par l'ordonnancement.</li>
</ul>

<h3>JAT (juste à temps)</h3>

<p>La philosophie du JAT et du LEAN vise la suppression des gaspillages (stocks, ressources,…) et l'augmentation de la vitesse des flux.</p>

<p>Les délais de livraisons devenant de plus en plus courts et les coûts de production de plus en plus bas, sans oublier le fait que le coût du foncier est non négligeable, si on veut augmenter la productivité et la réactivité des entreprises (indicateurs d'efficacité et de mesure de la performance), on se doit d'être dans une logique d'évolution et d'optimisation constante.</p>

<p>Sachant que souvent plus de 60% du temps nécessaire pour fabriquer une pièce se passe en manutention, en stockage ou en attente, on a tout intérêt à minimiser les temps de déplacement des produits d'un poste à un autre.</p>

<p>Cela s'avère moins évident que cela en à l'air car les produit deviennent de plus en plus complexes.</p>
<p>S'ajoute à cela qu'il faut veiller à respecter les normes et les contraintes techniques des bâtiments.</p>

<p>Ainsi l'optimisation des flux est primordiale et cela passe par une implantation optimale.</p>


<h2> Implantation : objectifs</h2>

<p>Il est particulièrement important de résoudre les problèmes d'implantation lors de la création d'une usine, d'un chantier, d'un bureau.</p>

<p>L'étude d'implantation est la recherche de la meilleure place du matériel et des équipements, dans un cadre disponible ou à ériger, de façon à faciliter la réalisation de toutes les opérations nécessaires à la production.</p>

<p>Les objectifs à atteindre sont, principalement, les suivants :</p>
<ul>
<li><strong>Organiser la production dans le minimum d'espace</strong>, car la surface, surtout la surface couverte, coûte cher, et de plus, une implantation étalée, en apparence plus commode, entraîne des frais de manutention plus considérables.</li>
<li><strong>Réduire et faciliter (sans rebroussements ou étranglements) les circuits de personnel, d'engins de transport, de matières, d'outillage, de produits et de déchets</strong>. 
<p>Le problème d'évacuation des déchets est très souvent sous-estimé ; dans certaines activités il s'avère difficile.</p>
<p>Exemple : la tournure métallique encombrante et agressive ; les copeaux et sciure de bois qui obscurcissent les
aires de travail, les papiers et emballages surabondants ; les eaux usées ; et les pires de tous, les déchets radioactifs dont l'industrie atomique a bien du mal à se débarrasser.</p></li>
<li><strong>Faciliter les opérations de réglage et d'entretien des machines et des canalisations</strong>. 
<p>Exemple : on voit trop souvent la démolition de murs pour pouvoir sortir des organes de machines importantes.</p></li>
<li><strong>Réduire les stocks et les attentes</strong> en ménageant un acheminement des produits équilibrant les tâches parcellaires des divers postes de travail ;</li>
<li><strong>Disposer les postes de travail et les installations communes</strong> de façon à assurer au personnel de bonnes conditions de travail et de confort, tant du point de vue physiologique (ergonomie) que psychologique (ambiance).</li>
</ul>

<p class="h3-like">Exemple d'organisation obsolète : Complexité des flux.</p>	

<img class="aligncenter" src="/assets/img/qlio/implantation/complexite_flux.png" alt="Schéma d'un flux complexe" />


<p>On peut donc formuler l'optimisation de l'implantation par la minimisation du coût total de transport C<sub>t</sub> entre poste (entre cellules, …).</p>

<div class="formule">
 C<sub>t</sub> = mini { I<sub>ij</sub> . D<sub>ij</sub> . C<sub>ij</sub> }
</div>
<p>Avec :</p>
<ul>
	<li>I<sub>ij</sub> : Indice de circulation entre le poste (i) et le poste (j)</li>
	<li>D<sub>ij</sub> : distance entre le poste (i) et le poste (j)</li>
	<li>C<sub>ij</sub> : coût unitaire de transport</li>
</ul>

<div class="notice remarque">
<p>Ce qui revient au final à :</p>
<ul>
	<li>Simplifier ses flux pour faciliter le pilotage.</li>
	<li>Avoir une meilleure lisibilité des flux.</li>
	<li>Améliorer la gestion des flux en réduisant les trajets entre les postes, en éliminant les points d'engorgement, en évitant les retours en arrière, … pour augmenter la vitesse du flux.</li>
</ul>
</div>

<h2> Cartographie des services</h2>
	
<p>Les problèmes d'implantation peuvent être traités dans les services suivants :</p>
<ul>
	<li>Méthodes - industrialisation : les méthodistes vont faire de l'implantation car ils travaillent également sur l'ergonomie.</li>
	<li>Service amélioration continue, Lean.</li>
	<li>Logistique industrielle (gestion de production, implantation, ordonnancement).</li>
</ul>


<img class="aligncenter" src="/assets/img/qlio/implantation/services.png" alt="Cartographie des services" />




