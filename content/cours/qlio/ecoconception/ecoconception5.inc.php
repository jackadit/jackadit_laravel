<?php
/**
 * BUT : cours sur le dessin technique
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
?>

<h1>Système de projection</h1>
	
    <h2>Projections</h2>

	<p>Une photographie peut montrer un système sous une forme plus ou moins avantageuse, mais ne peut prétendre le décrire complètement en ce qui concerne les formes et les dimensions.</p>
	<p>Pour y remédier, industriellement, on utilise un certain nombre de vues du système, toutes en correspondance les unes par rapport aux autres et choisies pour leur aptitude à le définir</p>
	<img src="/assets/img/qlio/ecoconception/2D_3D.png" alt="Système de projection" />
	
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>Pour passer de la 2D à la 3D, on procède par projection orthogonale de chacune des faces de l'objet.</p>
	<p>&nbsp;</p>

	<p>L'observateur se place perpendiculairement à l'une des faces du système à définir.</p>
	<p>La face observée est ensuite projetée et dessinée dans un plan de projection parallèle à cette face, situé en arrière du système</p>
	<img src="/assets/img/qlio/ecoconception/projections.png" alt="Projections" />
	
    <h3>Disposition relative des vues</h3>
	<p>Pour obtenir une représentation plane de l'ensemble du système, on découpe les faces du cube afin de le déplier selon les arêtes.</p>
	<p>Les vues conservées occupent donc maintenant une place précise.</p>
    
    
	<img src="/assets/img/qlio/ecoconception/vues.png" alt="Disposition des vues" />
	
	<ol>
	<li>On projette.</li>
	<img src="/assets/img/qlio/ecoconception/projection1.png" alt="Projection1" />
	<li>On enlève la pièce.</li>
	<img src="/assets/img/qlio/ecoconception/projection2.png" alt="Projection2" />
	<li>On découpe et on déplie.</li>
	<img src="/assets/img/qlio/ecoconception/projection3.png" alt="Projection3" />
	<li>On met à plat.</li>
	<img src="/assets/img/qlio/ecoconception/projection4.png" alt="Projection4" />
	
	<img src="/assets/img/qlio/ecoconception/mise_en_plan.png" alt="Vues des projections" />


    <h2>Correspondance des vues</h2>
	<p>La méthode de développement du cube, dont les arêtes servent de charnières, a pourconséquence de conserver dans plusieurs directions l'alignement de tous les détails de la pièce. Il y a correspondance entre les vues.</p>
	<p>Cette correspondance permet la construction des vues les unes par rapport aux autres. Un élément représenté sur une vue pourra être situé sur les autres vues.</p>
	<img src="/assets/img/qlio/ecoconception/correspondance_vues.png" alt="Correspondance des vues" />

	<h2>Décodage d'un plan</h2>
	
    <h3>Échelle</h3>
	<p>Lorsque les systèmes sont grands (immeubles, bateaux, automobiles) ou petits (montres, circuits électroniques) il est nécessaire de faire des réductions ou des agrandissements pour les représenter.</p>
	
	<table class="table">
	<caption>Quelques exemples d'échelles</caption>
	<tr>
		<th>Réduction</th>
		<th>Vraie grandeur</th>
		<th>Agrandissement</th>
	</tr>
	<tr>
		<td><p>1:2</p><p>1 cm correspond à 2 cm en réalité</td>
		<td><p>1:1</p><p>1 cm correspond à 1 cm en réalité</td>
		<td><p>2:1</p><p>2 cm correspondent à 1 cm en réalité</td>
	</tr>
	</table>
	

    <h3>Format</h3>
	<p>Il existe différents formats de papier. Le plus répandu est le format A4 qui mesure 21 par 29,7 cm.</p>
	<p>Tous les formats sont issus du format A0 qui correspond à une surface de 1m² mais dont le rapport longueur sur largeur vaut racine de 2 (1,414).
	
	<table class="table w300p">
	<caption>Formats normalisés</caption>
	<tr>
		<th>Format</th>
		<th>Dimensions</th>
	</tr>
	<tr>
		<td class="center strong">A0</td>
		<td>1188 x 840</td>
	</tr>
	<tr>
		<td class="center strong">A1</td>
		<td>840 x 594</td>
	</tr>
	<tr>
		<td class="center strong">A2</td>
		<td>594 x 420</td>
	</tr>
	<tr>
		<td class="center strong">A3</td>
		<td>420 x 297</td>
	</tr>
	<tr>
		<td class="center strong">A4</td>
		<td>297 x 210</td>
	</tr>
	</table>

	<img src="/assets/img/qlio/ecoconception/formats.png" alt="les différents formats normalisés" />

    <h3>Cartouche</h3>

	<p>C'est la carte d'identité du dessin, il est situé en bas du format.</p>
	<p>Le cartouche contient les indications essentielles : titre, échelle, symbole ISO de disposition des vues (norme européenne de projection), format, éléments d'identification (numéro de référence du document, nom du dessinateur, date ...)</p>

    <h3>Traits</h3>

	<p>Pour illustrer un dessin technique, différents types de traits sont utilisés pour montrer différents aspects de l'objet. </p>
	
	<table class="table w650p">
	<caption>Les différents types de traits</caption>
	<tr>
		<th class="w150p">Trait</th>
		<th>Désignation</th>
		<th>Applications générales</th>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_continu_fort.png" alt="Trait continu fort" /></td>
		<td class="center">Continu fort</td>
		<td>
			<ul>
				<li>Contours vus</li>
				<li>Arêtes vues</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_continu_fin.png" alt="Trait continu fin" /></td>
		<td class="center">Continu fin</td>
		<td>
			<ul>
				<li>Arêtes fictives</li>
				<li>Ligne de cote</li>
				<li>Ligne d'attache</li>
				<li>Ligne de repère</li>
				<li>Hachure</li>
				<li>Contours de sections rabattues</li>
				<li>Axes courts</li>
				<li>Contructions géométriques vues</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_main_levee.png" alt="Trait fait à main levée" /></td>
		<td class="center">Continu fin à main levée</td>
		<td rowspan="2">
			<ul>
				<li>Limites et interruption de vues ou coupe</li>
				<li>Arrachement de vue</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_zigzag.png" alt="Trait continu fin droit zigzag" /></td>
		<td class="center">Continu fin droit zigzag</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_interrompu.png" alt="Trait interrompu" /></td>
		<td class="center">Interrompu</td>
		<td>
			<ul>
				<li>Contours cachés</li>
				<li>Arêtes cachées</li>
				<li>Arêtes cachées</li>
				<li>Constructions géométriques cachées</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_mixte_fin.png" alt="Trait mixte fin" /></td>
		<td class="center">Mixte fin</td>
		<td>
			<ul>
				<li>Axes de révolution</li>
				<li>Traces de plans symétriques</li>
				<li>Trajectoires</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_mixte_fin_fort.png" alt="Trait mixte fin" /></td>
		<td class="center">Mixte fin avec éléments forts aux extrémités et aux changements de plan de coupe</td>
		<td>
			<ul>
				<li>Traces de plans  de coupe</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td><img src="/assets/img/qlio/ecoconception/trait_mixte_fort.png" alt="Trait mixte fin" /></td>
		<td class="center">Mixte fort</td>
		<td>
			<ul>
				<li>Indication de lignes ou de surfaces faisant l'objet de spécifications particulières</li>
			</ul>
		</td>
	</tr>
	</table>

	<p class="notice remarque"><u>Remarque</u> : Les traits forts ne se croisent jamais !</p>
		
	<p class="h4-like">Exemple</p>
	<img src="/assets/img/qlio/ecoconception/decodage_plan.png" alt="Décodage de plan" />

    <h3>Mise en page</h3>

	<p>Les différentes vues d'un dessin sont centrées sur la feuille. Il faut donc respecter des intervalles réguliers entre les vues.</p>
	<p>Pour cela, il faut connaître les dimensions des formats, les valeurs des cadres, les dimensions du cartouche et les dimensions d'encombrement des vues à l'échelle choisie.</p>
	
	<p>Formules :</p>
	
    <h4>Espace de dessin</h4>
        
	<p class="formule">LongTotal = Longueur du format - ( 2 x largeur de marge)</p> 

	<p class="formule">LargTotal = Largeur du format - ( 2 x largeur de marge)</p> 
	
    <h4>Espace entre vues</h4>
    <div class="formule">
    EspaceH = 
        <div class="fraction">
            <span class="numerateur">LongTotal - Σ dimensions d'encombrement des vues</span>
            <span class="bar">/</span>
            <span class="denominateur">Nbre de vues + 1</span>
        </div>
    </div>

    <div class="formule">
    EspaceV = 
        <div class="fraction">
            <span class="numerateur">LargTotal - Σ dimensions d'encombrement des vues</span>
            <span class="bar">/</span>
            <span class="denominateur">Nbre de vues + 1</span>
        </div>
    </div>

    <div class="notice remarque">
	<p><u>NB</u> : <strong>Dimension d'encombrement</strong> : Longueur, Largeur et épaisseur totale de la pièce ou de l'ensemble à dessiner.</p>
	<p>Suivant la dimension des vues, le cartouche sera intégré dans le calcul de l'espace du dessin.</p>
    </div>

	<h2>Spécifications fonctionnelles des produits</h2>

        <h3>Problématique</h3>
	<p>Supposons que l'on veuille assembler une centaine de roues de planche à roulettes. On imagine que les demi-jantes sont usinées en une seule série de 800 pièces et qu'on dispose d'un millier de roulemets à billes.<p> 
	<p>On aimerait pouvoir utiliser toutes les pièces, lors de l'assemblage, indifféremment du lot choisi, sans ratés, et en toute simplicité, afin de produire le maximum de "Street Carver" conformes.</p>
	<p>C'est ce que l'on appelle "l'<span class="tag--primary">interchangeabilité</span>"</p>

	<p>Or, les procédés de fabrication actuels ne permettent pas d'obtenir des pièces aux surfaces et aux dimensions parfaites car lors d'une production en série, des phénomènes viennent perturber la qualité des pièces (dilatation des pièces, réglages des machines, usure des outils …)</p>

	<p>La norme <span class="tag--primary">ISO 8015</span> définit des critères permettant de contrôler les dimensions et les formes d'une pièce, et prévoit pour chaque cote, une marge qui permet de spécifier si une pièce est acceptable pour notre mécanisme (d'un point de vue fonctionnel) ou si elle doit être envoyée au rebut.</p>

	<p>Cette marge est appelée <span class="tag--primary">intervalle de tolérance</span> : <strong>IT</strong> et désigne la <strong>qualité</strong> de fabrication d'un produit.</p>

	<p>Il existe différentes situations de cotation :</p>
	<ul>
	<li>Les surfaces à coter ne sont en contact avec aucune autre pièce.</li>
	<li>Les surfaces à coter sont issues d'un assemblage de 2 pièces.</li>
	<li>Les surfaces à coter sont issues d'un assemblage de plusieurs pièces.</li>
	</ul>

    <h3>Les cotes</h3>
	<dl>
	<dt>Cote nominale</dt>
    <dd>Dimension de référence (cote inscrite sur le dessin).</dd>
	<dt>Cote effective (fabriquée)</dt>
    <dd>Dimension réelle mesurée sur la pièce.</dd>
	<dt>Cotes limites</dt>
    <dd>Cote maxi et mini entre lesquelles doit se trouver la cote effective.</dd>
	</dl>
	
	<p>Une cote tolérancée est inscrite à partir de la cote nominale et des deux écarts. L'intervalle de tolérance n'est pas forcément symétrique par rapport à la cote nominale.</p>
	<ul>
		<li>Les écarts sont inscrits dans la même unité que la cote nominale (mm).</li>
		<li>Placer toujours l'écart supérieur au-dessus de l'écart inférieur.</li>
		<li>Ne pas mettre de signe lorsque l'écart est nul.</li>
		<li>Lorsque la tolérance est répartie symétriquement par rapport à la cote nominale, ne donner qu'un seul écart précédé du signe &plusmn;.</li>
	</ul>
	
	<p><u>exemple</u> :</p>
	<img src="/assets/img/qlio/ecoconception/cotes.png" alt="Cotation tolérancée numérique" />


	<div class="notice remarque">Plus la précision exigée est grande :
	<ul>
		<li>plus la qualité est élevée,</li>
		<li>plus l'intervalle de tolérance doit être petit,</li>
		<li>plus le coût de fabrication est élevé.</li>
	</ul>
    </div>

        <h3>Désignation des tolérances</h3>
	<dl>
		<dt>Écart supérieur</dt>
		<dd>Égal à la différence entre la cote maxi et la cote nominale ES = Cmax - Cnom.</dd>
		<dt>Écart inférieur</dt>
		<dd>Égal à la différence entre la cote mini et la cote nominale EI = Cmini - Cnom.</dd>
		<dt>Notion d'arbre</dt>
		<dd>Désigne une pièce contenue (minuscule).</dd>
		<dt>Notion d'alésage</dt>
		<dd>Désigne une pièce contenante (majuscule).</dd>	
	</dl>
	
	
	<img src="/assets/img/qlio/ecoconception/tolerance_arbre_alesage.png" alt="Schéma des tolérances arbre-alésage" />
	
	<table class="table w400p">
	<caption>Écarts de tolérance</caption>
	<tr>
		<th class="w100p">Alésage</th>
		<td>Écart supérieur ES = Cmaxi - Cnom<br />
			Écart inférieur EI = Cmini - Cnom</td>
	</tr>
	<tr>
		<th>Arbre</th>
		<td>Écart supérieur es = c maxi – c nom<br />
			Écart inférieur ei = c mini – c nom</td>
	</tr>
	</table>

	<h4>Cote numérique</h4>
	<img src="/assets/img/qlio/ecoconception/cote.png" alt="Cotation tolérancée numérique" />

	<h4>Cote symbolique</h4>
	<img src="/assets/img/qlio/ecoconception/designation_normalise.png" alt="Désignation normalisée" />
	

	<table class="table w800p">
	<caption>Principales qualités ou tolérances (IT) ISO
	<br /> (IT en micromètre : 1&micro;m = 0.001 mm)</caption>
	<tr><th colspan="14">Dimensions nominales en mm</th></tr>
	<tr>
		<th>de ->
		<br />à &nbsp;&nbsp;-></th>
		<th>1<br />3</th>
		<th>3<br />6</th>
		<th>6<br />10</th>
		<th>10<br />18</th>
		<th>18<br />30</th>
		<th>30<br />50</th>
		<th>50<br />80</th>
		<th>80<br />120</th>
		<th>120<br />180</th>
		<th>180<br />250</th>
		<th>250<br />315</th>
		<th>315<br />400</th>
		<th>400<br />500</th>
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
	</table>

    <img src="/assets/img/qlio/ecoconception/ecart.png" alt="Écarts de tolérance" />


        <h3>Ajustement</h3>
	<p>Les ajustements sont des catégories de dimensions normalisées utilisées pour les assemblages de deux pièces prismatiques ou cylindriques. On trouve :</p>
	<ul>
		<li>Les ajustements avec jeu.</li>
		<li>Les ajustements avec serrage.</li>
		<li>Les ajustements incertains (jeu ou serrage).</li>
	</ul>
	<img src="/assets/img/qlio/ecoconception/ajustement.png" alt="Ajustement normalisé" />
	
	<h4>Système à alésage normal "H"</h4>
	<p>À choisir de préférence. Plus facile à mettre en oeuvre. Dans ce système l'Alésage est toujours pris comme base et tolérancé H.</p>
	<p>Seule la dimension de l'arbre varie.</p>
	<img src="/assets/img/qlio/ecoconception/alesageH.png" alt="Système à alésage normal H" />

	<h4>Système à arbre normal "h"</h4>
	<p>L'arbre est toujours pris comme base et tolérancé h.</p>
	<p>Seule la dimension de l'alésage varie.</p>
	<img src="/assets/img/qlio/ecoconception/arbreh.png" alt="Système à arbre normal h" />
	

	<h4>Calcul du jeu mini et maxi</h4>

	<h5>Ajustement avec jeu</h5>
	<p>La cote effective de l'alésage est toujours supérieure à la cote effective de l'arbre. Les IT ne se chevauchent pas.</p>
	<p>Jeu max = Amaxi - amini</p>
	<p>Jeu mini = Amini - amaxi</p>
	<p>IT jeu = ITA + ITa</p>
	<h5>Ajustement avec serrage</h5>
	<p>La cote effective de l'arbre est toujours supérieure à la cote effective de l'alésage. Les IT ne se chevauchent pas.</p>
	<p>Serrage max = Amini - amaxi</p>
	<p>Serrage mini = Amaxi - amini</p>
	<p>IT serrage = ITA + ITa</p>
	<h5>Ajustement incertain</h5>
	<p>L'ajustement obtenu sera soit avec jeu, soit avec serrage. Les IT se chevauchent.</p>
	<p>Serrage max = Amini - amaxi</p>
	<p>Jeu max = Amaxi - amini</p>
	<h5>Choix de l'ajustement</h5>
	<p>Le choix dépend de la liaison à réaliser et de la précision exigée pour le guidage. Les spécifications doivent être suffisantes mais non surabondantes. Une trop grande précision est inutile et chère.</p>
	<p>Y a t il jeu ou serrage ? Les pièces sont-elles mobiles ou immobiles ? S'agit-il d'un positionnement ou d'un centrage ? La liaison doit-elle transmettre des efforts ? …</p>
	

	<p>La norme <span class="tag--primary">NF R 91-011</span> définit les principaux ajustements, qui ont été calculé à l'avance avec le tableau précédent :</p>
	<ul>
		<li><strong>H8 f7</strong> : jeu</li>
		<li><strong>H7 g6</strong> : guidage précis (peu de jeu)</li>
		<li><strong>H7 h6</strong> : positionnement avec juste assez de jeu</li>
		<li><strong>H7 p6</strong> : serrage à la presse</li>
		<li><strong>H7 s6</strong> : serrage très élevé</li>
	</ul>

	<img src="/assets/img/qlio/ecoconception/principaux_ajustement.png" alt="Principaux ajustements" />
	
	<h5>Principaux écarts</h5>

        <table class="table w900p tolerance">
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

        <table class="table w900p tolerance">
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



        <h3>Cotation GPS (Spécification Géométriques des Produits)</h3>

    <p><a href="../metro">Aller au chapitre 1 de la métrologie</a></p>

