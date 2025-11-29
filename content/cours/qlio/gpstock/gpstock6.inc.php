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
 * @subpackage gpstock
 * @category gpstock
 * @access protected
 * @uses db
 */
?>
<h1>Les manutentions dans un système de stockage (1h)</h1>

<h2> Les définitions de la manutention</h2>

<p>De façon générale, la manutention de marchandises concerne aussi bien l‘approvisionnement des ateliers que le chargement ou le déchargement des camions, des wagons de trains ou des navires.</p>
<p>Selon le code du travail français, on entend par manutention manuelle toute opération de transport ou de soutien d‘une charge, dont le levage, la pose, la poussée, la traction, le port ou le déplacement, qui exige l‘effort physique d‘un ou plusieurs travailleurs.</p>
<p>Par extension le mot manutention désigne maintenant la manipulation de charges à l‘aide d‘engins mécaniques, tel que les chariots élévateurs ou autres engins dédiés au chargement et déchargement des véhicules de transport.</p>

<p>Lorsqu'on parle de « manutention » dans un système de stockage, certains thèmes sont inévitables :</p>
<ul>
	<li>les palettes</li>
	<li>les chariots élévateurs…</li>
</ul>

<h2> Les palettes</h2>

<p>La palette est, avec les chariots élévateurs ou transpalettes qui servent à la manipuler, la base même de la logistique moderne.</p>

<dl>
<dt>La palette</dt>
<dd>plateau rectangulaire aux dimensions standardisées, assez souvent en bois, sur lequel est posé une certaine quantité de marchandises.</dd>
</dl>

<p>La palette de manutention est un accessoire destiné à rationaliser la manutention, le stockage et le transport des marchandises</p>
<p>Elle constitue une unité de charge manipulable et déplaçable avec un chariot élévateur à fourche ou un transpalette.</p>

<p>La palette type est en Europe la palette normalisée Euro.</p>
<p>(Elle doit être munie d'une étiquette de transport car elle représente un conditionnement de transport.)</p>

<p>En France, on en fabrique 60 millions par an, mais on en charge 600 millions soit 10 palettes par an et par Français. Sa consommation est un indicateur de l‘activité économique des pays développés.</p>

<h3>Les modèles de palettes</h3>

<p>Il existe de nombreux modèles mais les deux principaux sont la palette Euro (80 x 120 cm) et la palette ISO (100 x 120 cm).</p>

<h4>La palette Euro (ou EUR EPAL)</h4>

<p>La palette Euro pèse environ 23 kg et a une charge utile de 1000 à 1200 kg.</p>
<p>La plus petite face (80 cm) de la palette Euro permet une saisie avec un transpalette. La face la plus large (120 cm) permet de la saisie avec un chariot élévateur.</p>
<p>Un semi-remorque standard peut charger 3 palettes en largeur (à condition que le conditionnement ne dépasse pas) et 11 en longueur, soit 33 en tout. On peut éventuellement les superposer et donc charger jusqu'à 99 palettes par remorque.</p>
<p>Elle est aussi déclinée en demi-palette (800 mm par 600 mm).</p>

<h4>La palette ISO</h4>

<p>Elle est adoptée par l'industrie lourde comme la mécanique ou l'automobile.</p>

<p>Un autre format de palette est la palette américaine de 1219 mm par 1016 mm (48" x 40") très utilisée au Canada. Elle correspond à peu de choses près à la palette ISO.</p>


<h3>Les types de palettes</h3>

<p>Il existe différentes qualités de palettes selon l'usage renouvelable ou non que l'on veut en faire :</p>
<ul>
	<li>La palette en bois qualité EPAL se prête à de nombreuses rotations (jusqu'à une trentaine) et dure plusieurs années.</li>
	<li>La palette <strong>perdue</strong> (ou <strong>unirotation</strong>) en bois de qualité très inférieure peut assurer deux ou trois rotations ou même une seule : elle est moins résistante et peut présenter des risques pour les marchandises : on la proscrit le plus souvent pour des stockages automatiques ou en hauteur.</li>
	<li>La palette en carton particulièrement légère.</li>
	<li>En matière plastique.</li>
	<li>En métal…</li>
</ul>

<h3>Les modes de gestion des palettes</h3>

<p>La gestion des palettes peut être effectuée de différentes façons :</p>
<ul>
	<li><strong>en gestion interne par leur propriétaire</strong> : ce sont généralement des palettes haut-de-gamme qui ne quittent pas l'entreprise qui en est propriétaire (la palette est alors dite « prisonnière »).</li>
	<li><strong>en palette perdue</strong> : les palettes perdues sont facturées au destinataire qui en devient propriétaire avec la marchandise</li>
	<li><strong>par échange standard</strong> : il faut que ces palettes soient de qualités équivalentes et permettent d'effectuer suffisamment de rotations</li>
	<li><strong>par consignation</strong> : la palette reste la propriété de l'expéditeur qui la consigne au destinataire : l'expéditeur rembourse la consignation lorsqu'il récupère la palette en retour</li>
	<li><strong>par location</strong> : l'industriel loue à un propriétaire de parc de palettes, les palettes qui lui sont nécessaires. Chaque fois qu'il expédie ses marchandises avec ces palettes, il informe le loueur de leur destination. Il appartient à ce dernier de récupérer ses palettes et de les faire réparer éventuellement avant de les remettre en circulation.</li>
	<li><strong>par gestion de parc</strong> : le gestionnaire ne possède pas les palettes mais gère le parc de palettes de ses clients comme un loueur gère son propre parc.</li>
</ul>

<h3>Comment fixer les marchandises sur les palettes</h3>

<p>Les marchandises ne doivent pas glisser de la palette. Il existe différents systèmes de fixation :</p>

<ul>
	<li>en cerclant les marchandises avec une corde ou une sangle</li>
	<li>en collant les cartons les uns aux autres à l'aide d'une colle auto-cassante qui permet de défaire ensuite le chargement</li>
	<li>en enveloppant la charge avec un film qui a l'avantage de protéger contre la pluie et la poussière</li>
	<li>…</li>
</ul>


<!-- <h5>Exercice 8 : Palettisation et stockage (0h15)</h5> -->

<h2>Les bacs de rangement</h2>

<p>Il existe une multitude de types de bacs de rangement  :</p>
<ul>
	<li>Différentes dimensions donc différents volumes.</li>
	<li>Différents poids.</li>
	<li>Différents matériaux (plastique, métal…).</li>
</ul>

<p>L'essentiel est de sélectionner le ou les bons types de bacs pour optimiser la surface de stockage et la manutention.</p>

<h2>Les différents équipements de manutention</h2>

<p><strong>Les chariots automoteurs</strong> : les chariots transportant l'énergie motrice nécessaire à leur déplacement, que leur conducteur soit porté par le chariot ou à pied.</p>

<p><strong>Les chariots à élévation motorisée</strong> mais à déplacement par poussée manuelle sont considérés comme des chariots à bras.</p>

<p>Il existe une grande variété d'équipements de manutention : dans ce cours, nous en verrons quelques exemples – ce ne sera pas exhaustif.</p>

<h3>Les chariots à conducteur à pied</h3>

<p>Distribution du document Powerpoint Slide « 441A / 441B »</p>

<h4>Transpalettes électriques</h4>

<p><img src="/assets/img/qlio/gpstock/transpalette_manuel.png" alt="Transpalette manuel" width="250px" />transpalette manuel
<img src="/assets/img/qlio/gpstock/transpalette_electrique.png" alt="Transpalette électrique" width="250px" />transpalette électrique</p>

<p>Performances :</p>

<table class="table">
<tr><td>Hauteur d'élévation des fourches</td><td>300 mm</td></tr>
<tr><td>Vitesse de translation</td><td>6 km/h maximum</td></tr>
<tr><td colspan="2">Capacité de 2000 kg pour la plupart, parfois de 3000 kg</td></tr>
</table>

<div class="ok">Avantages
<ul>
	<li>Matériels simples, qui ne nécessitent pas d'autorisation de conduite</li>
	<li>Matériels compacts qui conviennent aux lieux exigus</li>
	<li>Coût d'acquisition peu élevé</li>
	<li>Leur faible poids permet de les utiliser sur des planchers de faible résistance</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Utilisation limitée à de courtes distances puisque l'opérateur est à pied</li>
	<li>Expose l'opérateur à des risques de heurts avec des chariots à conducteur porté puisqu'il est amené à circuler dans les mêmes allées et des risques de coincement ou d'écrasement du corps contre un obstacle</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Utilisation peu intensive</li>
	<li>Pour charger / décharger des camions</li>
	<li>Pour transporter des charges palettisées sur de courtes distances (30 m)</li>
</ul>
</div>

<h4>Gerbeurs</h4>


<p>Appareils dérivés des transpalettes, équipés d'un ensemble élévateur pour lever la charge.</p>

<dl>
<dt>Gerbeur</dt>
<dl>Engin de manutention muni d'une fourche permettant d'empiler des unités logistiques (notamment des palettes) les unes sur les autres. Un gerbeur peut être à déplacement manuel, à conducteur porté assis ou debout ou avec conducteur accompagnant c'est-à-dire se déplaçant en marchant en même temps que l'engin.</dl>
</dl>
 
<p><img src="/assets/img/qlio/gpstock/gerbeur_electrique.png" alt="Gerbeur électrique" width="250px" />Gerbeur électrique</p>

<p>Performances :</p>

<table class="table">
<tr><td>Hauteur de levée</td><td>5 m</td></tr>
<tr><td>Vitesse de translation</td><td>6 km/h maximum</td></tr>
<tr><td colspan="2">Capacité de 1000  à 1600 kg pour la plupart, parfois de 3000 kg</td></tr>
</table>

<div class="ok">Avantages
<ul>
	<li>Matériels simples, qui ne nécessitent pas d'autorisation de conduite.</li>
	<li>Matériels compacts qui conviennent aux lieux exigus.</li>
	<li>Coût d'acquisition peu élevé.</li>
	<li>Leur faible poids permet de les utiliser sur des planchers de faible résistance.</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Utilisation limitée à de courtes distances puisque l'opérateur est à pied.</li>
	<li>Expose l'opérateur à des risques de heurts avec des chariots à conducteur porté puisqu'il est amené à circuler dans les mêmes allées et des risques de coincement ou d'écrasement du corps contre un obstacle.</li>
	<li>À partir d'une hauteur de levée d'env. 3 m, ce type de chariot est sensible au basculement latéral.</li>
	<li>Nécessite un sol en bon état.</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Utilisation peu intensive.</li>
	<li>Pour des hauteurs de levée inférieures ou égales à 3 m.</li>
	<li>Pour gerber des charges palettisées qui sont à transporter sur de courtes distances (30 m).</li>
</ul>
</div>

<h3>Les chariots à conducteur porté</h3>

<p>L'utilisation de tout chariot à conducteur porté nécessite que le conducteur soit titulaire d'une autorisation de conduite délivrée par le chef de l'entreprise.</p>

<p class="h4-like">Transpalettes électriques</p>

<p>Appareils dérivés des transpalettes à conducteur à pied, mais où le cariste est porté (assis ou debout).</p>

<p><img src="/assets/img/qlio/gpstock/transpalette_electrique_assis.png" alt="Transpalette électrique" width="250px" />Transpalette électrique à conducteur porté assis</p>


<p>Performances :</p>

<table class="table">
<tr><td>Hauteur d'élévation des fourches</td><td>300 mm</td></tr>
<tr><td>Vitesse de translation</td><td>8 à 12 km/h</td></tr>
<tr><td colspan="2">Capacité de 2000 kg pour la plupart, parfois de 3000 kg</td></tr>
</table>

<div class="ok">Avantages
<ul>
	<li>Matériels compacts qui conviennent aux lieux exigus</li>
	<li>Coût d'acquisition peu élevé</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Ergonomie parfois insuffisante si le poste de conduite est en travers</li>
	<li>Risque d'accident important</li>
	<li>Nécessitent un sol en bon état</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Utilisation intensive</li>
	<li>Pour charger / décharger des camions</li>
	<li>Pour transporter des charges palettisées sur des distances dépassant 50 m.</li>
</ul>
</div>

<p class="h4-like">Gerbeurs</p>

<a src="/assets/img/qlio/gpstock/gerbeur_electrique_assis.png" class="image-link"><img src="/assets/img/qlio/gpstock/gerbeur_electrique_assis.png" alt="Gerbeur électrique" width="250px" />Gerbeur électrique à conducteur porté assis</a>

<p>Performances :</p>

<table class="table">
<tr><td>Hauteur d'élévation des fourches</td><td>5 m</td></tr>
<tr><td>Vitesse de translation</td><td>8 à 12 km/h</td></tr>
<tr><td colspan="2">Capacité de 1000 à 2000 kg</td></tr>
</table>


<div class="ok">Avantages
<p>Matériels compacts qui conviennent aux lieux exigus</p>
</div>
<div class="notice alert">Inconvénients
	<ul>
		<li>Ergonomie souvent insuffisante</li>
		<li>Nécessite un sol en bon état</li>
	</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Utilisation peu intensive</li>
	<li>Pour gerber des charges palettisées dans des lieux exigus</li>
</ul>
</div>

<p class="h4-like">Chariots élévateurs en porte à faux : à prise frontale</p>

<p>L'ensemble élévateur et la charge sont en porte à faux par rapport à l'essieu avant, le contrepoids à l'arrière du chariot assure la stabilité. Le cariste est assis dans le sens de la marche.</p>
<p>On distingue :</p>
<ul>
	<li>Les chariots électriques : leur énergie est fournie par une batterie.</li>
	<li>Les chariots thermiques : leur énergie est fournie par un carburant (gazole, essence ou GPL).</li>
</ul>

<p><img src="/assets/img/qlio/gpstock/chariot_elevateur_thermique.png" alt="Chariot élévateur thermique" width="250px" />Chariot élévateur thermique
<img src="/assets/img/qlio/gpstock/chariot_elevateur_electrique.png" alt="Chariot élévateur thermique" height="200px" />Chariot élévateur électrique</p>

<p>Performances :</p>
<table class="table">
<tr><td class="w200p">Hauteur de levée</td><td>3 à 6 m le plus couramment mais peut atteindre 10 à 12 m</td></tr>
<tr><td>Vitesse de translation</td><td>15 à 20 km/h pour les chariots électriques<br />
		20 à 25 km/h pour les chariots thermiques</td></tr>
<tr><td colspan="2">Capacité de 1000 à 50 000 kg</td></tr>
</table>

<div class="ok">Avantages
<ul>
	<li>Matériels robustes destinés généralement à une utilisation intensive et polyvalente</li>
	<li>Facilitent les manutentions dans l'entreprise</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Risque d'accident élevé (dans certains cas, la charge peut masquer la visibilité vers l'avant)</li>
	<li>Rejet de gaz polluants par les chariots thermiques non munis d'un dispositif d'épuration</li>
	<li>Niveau sonore des chariots thermiques est plus élevé que celui des chariots électriques</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Pour déplacer, transporter et élever des charges et ce dans tous les secteurs d'activité, sauf si le sol nécessite un engin tous terrains</li>
</ul>
</div>


<p class="h4-like">Chariots élévateurs en porte à faux : à prise latérale</p>

<p>Performances :</p>

<p>Capacité de 1 000 à 3 000 kg pour jusqu'à 8 mètres de charges longues</p>

<div class="ok">Avantages
<ul>
	<li>Circulation dans des allées étroites des ateliers et entrepôts</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Ne peuvent gerber que d'un seul côté</li>
	<li>Nécessitent un sol en bon état</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Pour manutentionner des charges longues (profilés, tubes…)</li>
</ul>
</div>

<p class="h4-like">Chariots bi et tri directionnels</p>

<p><strong>Les chariots à prise de charge bidirectionnelle</strong> sont conçus pour pouvoir prendre la charge et la déposer latéralement d'un côté ou de l'autre.</p>
<p>Ceux à <strong>prise de charge tri directionnelle</strong> prennent la charge frontalement ou latéralement d'un côté ou de l'autre.</p>
<p>Les chariots sont souvent guidés dans le rayonnage soit par un <strong>dispositif rail-roulettes</strong>, soit par un système de filoguidage.</p>
<p>Sur certains chariots, le poste de conduite s'élève avec les fourches.</p>

<p><img src="/assets/img/qlio/gpstock/chariot_tri_directionnel.png" alt="Chariot élévateur tri directionnel" height="200px" />Chariot élévateur tri directionnel</p>

<p>Performances :</p>
<table class="table">
<tr><td>Hauteur de levée</td><td>10 m et plus</td></tr>
<tr><td>Vitesse de translation</td><td>10 km/h</td></tr>
</table>

<div class="ok">Avantages
<ul>
<li>Productivité importante</li>
<li>Stockage à très grande hauteur</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>Le sol doit respecter des spécifications précises : résistance, horizontalité…</li>
	<li>Il faut prévoir des actions de formation du personnel pour éviter des risques d'accidents spécifiques à ce type de matériel : collision à la sortie des allées, heurt de piétons dans les allées…</li>
</ul>
</div>
<div class="notice remarque">Utilisations courantes
<ul>
	<li>Utilisés dans des installations de stockage à rayonnage métalliques de grande hauteur</li>
</ul>
</div>
<p class="h4-like">Autres chariots</p>

<p><img src="/assets/img/qlio/gpstock/chariot_preparateur_commande.png" alt="Préparateur de commandes à poste de conduite élevable" height="200px" />Préparateur de commandes à poste de conduite élevable</p>

<h2>Règles et obligations des entreprises pour la sécurité</h2>

<h3>Aménagement des locaux de travail</h3>

<h4>Locaux</h4>

<ul>
	<li><strong>Les sols</strong> : ils doivent être résistant pour supporter de fortes charges, suffisamment plans pour que le chariot puisse rouler sans danger, exempt de trous ou autres obstacles.</li>
	<li><strong>L'aération des locaux</strong> : les chariots thermiques ne doivent pas être utilisés à l'intérieur de locaux dont la ventilation n'est pas suffisante pour éliminer les risques que présentent les gaz d'échappement.</li>
	<li><strong>Risque incendie</strong> : si le chariot évolue dans des locaux qui ne sont pas équipés de dispositifs de lutte contre l'incendie, le chariot doit être muni d'un extincteur.</li>
	<li>A l'intérieur de l'entreprise, la vitesse ne doit pas excéder 25 km/h. Toutefois, les chariots à conducteur à pied doivent être limités par le constructeur à 6 km/h et les chariots à conducteur porté debout à 16 km/h.</li>
</ul>

<div class="notice remarque">
	<p>Rappel de la législation</p>
	<p>L'arrêté du 20 novembre 1969 considère comme engins spéciaux visés par l'article R.168 les engins automoteurs et dont la vitesse ne peut excéder 25 Km/h.</p>
	<table class="table">
		<tr><td class="w150p">Catégorie A</td>
		<td>Chariots porteurs à plate forme fixe ou à benne dont la vitesse est comprise en 10 et 25 km/h</td></tr>
		<tr><td rowspan="2">Catégorie B</td><td>Chariots élévateurs et tracteurs dont la vitesse ne peut excéder par construction 25 km/h</td></tr>
		<tr><td>Chariots porteurs à plate-forme fixe ou à benne dont la vitesse ne peut excéder par construction 10 km/h</td></tr>
		<tr><td>Catégorie C</td><td>Remorques</td></tr>
	</table>
</div>

<h4>Zone d'évolution</h4>
<p>Il est nécessaire d'établir un plan de circulation.</p>
<ul>
	<li><strong>Les allées de circulation</strong> doivent être disposées de façon à <strong>éviter les angles et courbes brusques</strong>, les plans inclinés…</li>
	<li><strong>La largeur des allées</strong> : largeur du véhicule ou de chargement augmentée d'1 mètre – en circulation dans les deux sens : deux fois la largeur du véhicule ou des chargements augmentée de 1,40 mètre.</li>
	<li>Les allées réservées aux opérations de stockage et de gerbage ne sont pas considérées comme des allées de circulation permanente.</li>
	<li>Les allées réservées aux nacelles élevables sont interdites à l'accès aux piétons.</li>
	<li>Les allées de circulation sont à délimiter à l'aide de glissières ou de peinture.</li>
	<li>Il faut aménager des passages piétons d'une largeur d'au moins 0,80 m distincts des allées de circulation.</li>
	<li>Les zones à hauteur limitée devront être aménagées pour éviter tous risques d'accident.</li>
	<li>Matérialiser les aires de stockage et ne pas stocker à l'extérieur de celle-ci.</li>
	<li>Les endroits pouvant présenter un risque tel que croisement, doivent être signalés à l'attention du conducteur.</li>
</ul>

<figure>
<a src="/assets/img/qlio/gpstock/allee_pas_degage.png" class="image-link">A) <img src="/assets/img/qlio/gpstock/allee_pas_degage.png" alt="Angles de vision lorsque le bout d'allée n'est pas dégagé" height="200px" /></a>
<a src="/assets/img/qlio/gpstock/allee_degage.png" class="image-link">B) <img src="/assets/img/qlio/gpstock/allee_degage.png" alt="Angles de vision lorsque le bout d'allée est dégagé" height="200px" /></a>
<figcaption>Comparaison des angles de vision lorsque le bout d‘une allée est dégagée (B) ou non (A)</figcaption>
</figure>

<h4>Aménagement des lieux de distribution d'énergie</h4>

<p>Ces locaux doivent présenter toute garantie de sécurité.</p>

<p><strong>Local de charge batterie</strong> : il doit être couvert, à l'abri des sources d'ignition. Il faut veiller à :</p>
<ul>
	<li>Afficher et faire respecter l'interdiction de fumer,</li>
	<li>Ne pas utiliser de flamme.</li>
	<li>Disposer des extincteurs pour feux électriques et bacs de sable en des endroits accessibles.</li>
	<li>Ce local doit être ventilé avec entrée d'air en partie basse et extraction en partie haute.</li>
</ul>
<p>(Se référer à l'arrêté-type n°3 du ministère de l'environnement et aux recommandations de la CNAM R 215 )</p>

<p><strong>Poste de remplissage de gaz</strong> :</p>
<p>L'installation du poste de remplissage est de la responsabilité du fournisseur de gaz. En plus des prescriptions propres aux dépôts de gaz liquéfiés,
l'installation sera implantée, réalisée et exploitée conformément aux prescriptions de l'arrêté n°211 bis qui fait référence dans la profession.</p>
<ul>
	<li>L'installation sera exploitée de manière à éviter les dangers visés à l'article 1er de la loi du 19 juillet 1976 relative aux installations classées pour la protection de l'environnement.</li>
	<li>Le poste de remplissage doit être situé en plein air ou sous simple abri. Il doit être solidement ancré et protégé pour éviter tout heurt des chariots</li>
	<li>L'appareillage électrique utilisé doit être du type utilisable en ATEX<br />
		<span class="italic">(La réglementation ATEX (ATmosphères EXplosives) est issue de deux directives européennes - 94/9/CE ou ATEX 137 pour les équipements destinés à être utilisés en zones ATEX, et 1999/92/CE ou ATEX 100A pour la sécurité des travailleurs -)</span></li>
	<li>Le poste de remplissage doit être protégé aux moyens de 2 extincteurs à poudre polyvalente situés à moins de 20 mètres</li>
</ul>

<p><strong>Dépôt des bouteilles d'hydrocarbures liquéfiés</strong> :</p>
<ul>
	<li>L'emplacement du stockage doit être dégagé, facilement accessible. Son sol doit être incombustible.</li>
	<li>Le stockage doit être bien aéré. Il doit être installé en plein air ou sous simple abris, soit dans un local avec une ouverture haute et une ouverture basse.</li>
	<li>La hauteur de stockage des bouteilles ne doit pas dépasser 2,2 mètres. Elles ne doivent pas être stockées à plus de 50°C.</li>
	<li>Lorsque la quantité est >520 kg, on doit disposer d'un extincteur à poudre.</li>
</ul>

<h4>Éclairement des espaces et des locaux</h4>
<p>Il faut appliquer les valeurs recommandées par la norme NF X 35-103</p>

<table class="table">
<tr><th>Espace et locaux<br />concernés</th>
<th>Valeur d‘éclairement<br /> artificiel recommandées<br /> (en lux)</th>
</tr>
<tr><td>Circulations extérieures (entrées, cours, allées)</td><td>30</td></tr>
<tr><td>Aires de travail (par ex. quais)</td><td>75</td></tr>
<tr><td>Entrepôts</td><td>150</td></tr>
</table>

<h3>Chariot</h3>

<p>Un carnet de maintenance doit être établi et tenu à jour pour chaque chariot</p>
<p>Des vérifications périodiques doivent être réalisées : au moins tous les 6 mois pour tous les chariots élévateurs par exemple.</p>

<h3>Cariste</a></h3>

<h3>Équipement de protection individuel des caristes</h3>
<p>Le chef d'entreprise doit mettre à disposition de ses salariés des équipements de protection individuelle appropriés conformément à l'article R4321-1 à R4321-5 du code du travail:</p>

<ul>
	<li>Chaussures de sécurité avec semelles antidérapantes.</li>
	<li>Casque de protection à porter dans les zones où le casque est obligatoire et lorsqu'il y a risque de chute de petits objets.</li>
	<li>Gants souples qui ne gênent pas la conduite.</li>
	<li>Lunettes.</li>
	<li>Casque antibruit.</li>
</ul>

<h3>Formation des caristes en trois étapes :</h3>
<ul>
	<li>Formation adéquate : CACES (Certificat d‘aptitude à la conduite en sécurité) : il est valable 5 ans, il y a différentes catégories de CACES selon le type de chariot conduit (6 catégories différentes en tout)</li>
	<li>Autorisation de conduite délivrée par le chef d'entreprise : elle peut être retirée à tout moment</li>
	<li>Connaissance des lieux et instructions à respecter</li>
</ul>

<h3>Consigne de sécurité à inclure dans le règlement intérieur</h3>
<p>Élaborer et faire respecter un plan de circulation qui définit les règles à l'intérieur de l'entreprise. Il y aura lieu, concernant les chariots, de souligner notamment l'interdiction :</p>
<ul>
	<li>De conduire un chariot sans y être autorisé.</li>
	<li>De dépasser les vitesses prescrites.</li>
	<li>D'aborder les virages à vitesse excessive.</li>
	<li>De circuler fourche haute.</li>
	<li>De freiner brusquement.</li>
	<li>De lever une charge supérieure à l'appareil.</li>
	<li>De transporter une personne si le chariot n'est pas doté d'un siège prévu à cet effet.</li>
	<li>D'élever des personnes avec le chariot.</li>
</ul>


<h3>Élévation de personnes</h3>
<p>Interdit conformément à l'article R.4323-46 du code du travail.</p>
<p>En revanche, on peut assurer le levage de personnes avec certains chariots automoteurs tel que les chariots à poste de conduite élevable qui ont satisfait à l'examen CE.</p>

<p>La circulaire DRT 99/7 du 15 juin 1999 donne les principes de base sur le levage de personnes.</p>
<p>L'article R.4323-46 du code du travail liste les situations de travail très spécifiques où il n'est pas possible d'utiliser des appareils spécialement conçus pour le levage des personnes.</p>



<p class="h4-like"><a title="Exercice 7 : Calcul d'un coût d'utilisation d'un équipement" href="./cours/gpstock/Ex7_Calcul_coût_utilisation_équipement.odt">Exercice 7 : Calcul d'un coût d'utilisation d'un équipement (0h05)</a></p>
<p>Inspiré du livre : Michel ROUX, Tong LIU, Optimisez votre plate-forme logistique, Editions d'Organisation, 2008</p>
<p>Pour comparer diverses solutions technologiques, pour établir des budgets d'exploitation, il est nécessaire de savoir calculer le coût d'utilisation d'un équipement.</p>

<p>Vous disposez des informations suivantes :</p>
<ul>
	<li>Prix d'achat du chariot hors batterie : 23 000€</li>
	<li>Prix d'achat du chargeur de batterie : 1 000€</li>
	<li>Maintenance annuelle : 2 000€</li>
	<li>Énergie : 1 800€ / an</li>
	<li>Contrôle annuel : 800€</li>
	<li>Durée d'amortissement : 7 ans</li>
	<li>Ouverture du site : 250 jours / an</li>
	<li>Amplitude : 7 heures / jour</li>
	<li>Utilisation de 9 chariots</li>
	<li>Un chariot supplémentaire est prévu pour pallier l'indisponibilité de l'un d'entre eux pour cause de panne (le mulet)</li>
</ul>

<p>Calculez le coût annuel d'utilisation d'un chariot à fourche frontale classique, charge maximale admissible 1 tonne, hauteur du dernier plan de pose 5 mètres.</p>

<!--
<p><strong>Corrigé</strong> :</p>
<table>
<tr><td>Amortissement annuel chariot</td><td style="text-align: center">23 000 / 7 = 3 286€</td></tr>
<tr><td>Amortissement annuel batterie</td><td style="text-align: center">1 000 / 7 = 143€</td></tr>
<tr><td>Maintenance annuelle</td><td style="text-align: center">2 000€</td></tr>
<tr><td>Énergie / an</td><td style="text-align: center">1 800€</td></tr>
<tr><td>Contrôle annuel</td><td style="text-align: center">800€</td></tr>
<tr><td>Incidence du mulet (1/10è)</td><td style="text-align: center">329€</td></tr>
<tr><td><strong>TOTAL ANNUEL<strong></td><td style="text-align: center">8 358€</td></tr>
</table>


<p>Trouvez le coût à l'heure d'utilisation : 8358 / (250 * 7) = <strong>4,77€</strong></p>
-->

