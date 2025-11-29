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
<h1>Gestion informationnelle des stocks (30mn)</h1>


<p>Les frais de personnel peuvent représenter 40% des coûts d'un entrepôt.</p>
<p>La tendance actuelle est donc d'automatiser autant que possible.</p>
<p>Les investissements peuvent devenir très importants.</p>
<p>La maintenance des installations devient un point crucial.</p>


<h2>Le logiciel de gestion de stock</h2>

<p>Les fonctionnalités de gestion physique des stocks peuvent être supportées soit par :</p>
<ul>
<li>l'ERP</li>
<li>un logiciel de gestion d'entrepôt</li>
</ul>

<h3>L'E.R.P</h3>

<dl>
<dt>E.R.P.</dt>
<dd>Enterprise Ressource Planning = PGI = Progiciel de Gestion Intégré
<br />(SAP, JDE…)</dd>
</dl>

<p>Représentation de différents modules de l'ERP qui s'interfacent (finance, commercial, planification de production, appros, gestion des stocks…)</p>
<p>Les fonctionnalités de la gestion d'entrepôt peuvent être définies dans l'E.R.P. ou un développement à partir de l'E.R.P. peut être mis en œuvre.</p>

<h3>Le logiciel de gestion de l'entrepôt</h3>

<p>Un logiciel de gestion d'entrepôt est une application informatique chargée d'automatiser un grand nombre de tâches habituelles sur un site logistique. Il s'agit de saisies, de mémorisations, de calculs divers, d'optimisations, de contrôles, l'établissement de statistiques…</p>
<p>On l'appelle WMS = Warehouse Management System.</p>
<p>Il est dans certains cas interfacé avec l'ERP.</p>

<h4>Les apports d'un WMS :</h4>
<ul>
	<li>La connaissance précise du stock.</li>
	<li>La gestion optimisée des adresses de stockage.</li>
	<li>La gestion optimisée des adresses de sortie.</li>
	<li>L'optimisation des sorties.</li>
	<li>La vérification de toutes les tâches.</li>
	<li>L'affectation des moyens la plus efficace.</li>
	<li>Les fonctions de pré-colisage et post-colisage.</li>
	<li>L'édition de toutes les étiquettes utiles.</li>
	<li>La génération automatique des tableaux de bord…</li>
</ul>

<img src="/assets/img/qlio/gpstock/wms_structure.png" alt="structure wms" />

<p class="h4-like">Exemple de wms</p>
<img src="/assets/img/qlio/gpstock/ex_wms.png" alt="wms" />

<h2> Le Code-barres</h2>

<p>Le code à barre est aujourd'hui la solution technique la plus utilisée pour acquérir automatiquement une information.</p>
<p>Cela est dû à l‘informatisation massive des entreprises que nous avons connues ces dernières années associé aux nombreuses qualités du code à barres réalisant la liaison entre le papier et l'informatique.</p>

<h3> Les qualités du code-barres</h3>

<ul>
	<li>La fiabilité et la rapidité de lecture, avec la possibilité d'une erreur de lecture sur 20 000  à 2 000 000 de codes lus, selon la codification.</li>
	<li>La redondance de l'information sur toute la hauteur du code permet de garantir l'information et ce même si une partie du code est illisible suite à des défauts d'impression, des déchirements légers ou encore des frottements.</li>
	<li>La facilité et le faible coût d'impression du code à barres sont exemplaires, de nombreuses technologie, supports et consommables d'impression sont disponibles. Le code à barres peut aisément accompagner d'autres informations nécessaires à un étiquetage et voit de fait son coût de revient diminuer.</li>
	<li>La souplesse du code à barres permet d'accepter des dimensions variables, des lectures par différents types de lecteurs, une information utile quelle que soit l'orientation du code…</li>
    <li>Gains de productivité.</li>
    <li>Limitation des erreurs de saisie.</li>
    </ul>
<h3>Les lecteurs de code-barres</h3>

<h4>Le crayon lecteur</h4>
<img src="/assets/img/qlio/gpstock/crayon_lecteur.png" alt="crayon lecteur" />


<div class="ok">Avantages
<ul>
	<li>La largeur de lecture n‘est pas en pratique limitée.</li>
	<li>La lecture ne peut être déclenchée involontairement par simple survol d‘un symbole, elle cible précisément le symbole à lire.</li>
	<li>Cette technologie est la mieux adaptée au test élémentaire de symboles avant reproduction :
tout refus de lecture étant immédiatement perçu, des essais successifs permettent d‘estimer la lisibilité réelle d‘un symbole ;
un symbole facilement lu au contact aura toutes les chances d‘être lu par les autres technologies, beaucoup plus tolérantes aux défauts. Seul le défaut d‘approche entre caractères est mal repéré par la lecture au contact.</li>
	<li>Le balayage, manuel, gagne à être réalisé rapidement.</li>
</ul>
</div>
<div class="notice alert">Inconvénients
<ul>
	<li>La lecture nécessite un « coup de main » dont l‘apprentissage est toutefois rapide.</li>
	<li>La lecture est impossible au travers d‘une protection épaisse – coffret de CD par exemple.</li>
	<li>La lecture est difficile ou impossible sur support mou – vêtement par exemple – ou de surface irrégulière – ondulation, granulation.</li>
	<li>La lecture sur un support non plan – bouteille, boîte cylindrique – est possible mais nécessite un « coup de main » particulier.</li>
	<li>Le frottement au contact peut détériorer peu à peu les symboles – surtout si l‘encre en est mal fixée et s‘ils ne sont pas protégés par une plastification. La tête de lecture peut s‘en retrouver salie.</li>
</ul>
</div>

<h4>Le lecteur CCD (douchette)</h4>
<img src="/assets/img/qlio/gpstock/douchette.png" alt="Lecteur CCD ou douchette" />

<h4>Le lecteur laser</h4>
<img src="/assets/img/qlio/gpstock/lecteur_laser_code_barre.png" alt="Lecteur laser" />

<h3>Exemples de codification</h3>

<p><u>Ex.</u> : Code INSEE, départements français, pays…</p>

<p class="h4-like">Le code EAN13</p>

<p>Le code EAN 13 : « European Article Number 13 » : codification des articles vendus en grande distribution. 13 est le nombre de caractères utilisés. Organisation gérée en France par le GENCOD, devenu GS1 France.
C'est le code utilisé pour la grande majorité des produits de consommation et que l'on retrouve sur les code-barres (pour l'identification des produits).</p>

<table class="table">
  <tr><th>3</th><th>24864</th><th>327632</th><th>2</th></tr>
  <tr>
  	<td>Pays (France = 3)</td>
	<td>CNUF = Code National Unité Fournisseur attribué à l'entreprise</td>
	<td>CIP = Code Interface Produit = numéro de produit</td>
	<td>Clé = contrôle du code</td>
  </tr>
</table>

<p>Méthode pour déceler des permutations sur deux positions voisines : cas de la clé du code EAN13 :</p>


<table class="table">
  <tr>
  	<td>3</td><td>2</td><td>4</td><td>8</td><td>6</td><td>4</td><td>3</td><td>2</td><td>7</td><td>6</td><td>3</td><td>2</td><td></td><td></td>
  </tr>
  <tr>
  	<td></td><td>2</td><td></td><td>+8</td><td></td><td>+4</td><td></td><td>+2</td><td></td><td>+6</td><td></td><td>+2</td><td></td><td>24*3=72</td>
  </tr>
  <tr>
  	<td>3</td><td></td><td>+4</td><td></td><td>+6</td><td></td><td>+3</td><td></td><td>+7</td><td></td><td>+3</td><td></td><td>=26</td><td>+26</td>
  </tr>
  <tr>
  	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>=98</td>
  </tr>
  <tr><td colspan="14">La clé est le complément de la somme pour obtenir un multiple de 10. Ici, la clé est 100-98=2</td></tr>
</table>


<p class="h4-like">Le code EAN128</p>

<p>EAN 128 : « European Article Number 128 »  : codification normalisée d'informations logistiques.</p>
<p>Pour l'identification des unités de d'expédition (la palette, éventuellement le carton)</p>

<p class="h4-like">Le code 39</p>

<p>Construit autour du code 39, ce standard identifie les unités d‘expédition et de conditionnement échangées entre les équipementiers et les constructeurs automobiles.</p>


<p class="h4-like">Cas d'aucun standard appliqué à l'activité</p>

<p>Lorsqu‘aucun standard n'est appliqué à votre activité, différentes questions permettent de limiter votre choix :</p>
<ul>
		<li>L'information à coder est numérique ou alphanumérique ? (codification)</li>
		<li>Quelle est la taille de l'emplacement disponible à la codification ? (dimension)</li>
		<li>Quel est le niveau de sécurité à atteindre ? (assurance de véracité de l'information lue)</li>
		<li>…</li>
</ul>

<h3>Différents types de codes-barres</h3>

<p class="h4-like">Codes linéaires</p>

<table class="table">
  <tr>
  	<td>2/5 Entrelacé</td>
	<td><a src="/assets/img/qlio/gpstock/cb_2-5_entrelace.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_2-5_entrelace.jpg" alt="Code barre 2/5 entrelacé" /></a></td>
	<td>- Numérique<br />
		- Longueur variable<br />
		- Caractère de contrôle<br />
		- Bidirectionnel
	</td>
  </tr>
  <tr>
  	<td>Codabar / Monarch</td>
	<td><a src="/assets/img/qlio/gpstock/cb_codabar.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_codabar.jpg" alt="Code barre Codabar / Monarch" /></a></td>
	<td>- Numérique et $ : / - . +  <br />
		- Longueur variable<br />
		- Caractère de contrôle<br />
		- Bidirectionnel discret
	</td>
  </tr>
  <tr>
  	<td>Code 39</td>
	<td><a src="/assets/img/qlio/gpstock/cb_code39.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_code39.jpg" alt="Code barre Code 39" /></a></td>
	<td>- Alphanumérique et /*-.+$%<br />
		- Longueur variable<br />
		- Auto-contrôlé<br />
		- Bidirectionnel discret
	</td>
  </tr>
  <tr>
  	<td>Code 128</td>
	<td><a src="/assets/img/qlio/gpstock/cb_code128.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_code128.jpg" alt="Code barre Code 128" /></a></td>
	<td>- Table Ascii<br />
		- Longueur variable<br />
		- Auto-contrôlé continu<br />
		- Bidirectionnel
	</td>
  </tr>
  <tr>
  	<td>EAN / UPC</td>
	<td><a src="/assets/img/qlio/gpstock/cb_EAN_UPC.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_EAN_UPC.jpg" alt="Code barre EAN/UPC" /></a></td>
	<td>- Numérique<br />
		- Longueur fixe (5/8/13/...)<br />
	</td>
  </tr>
  <tr>
  	<td>Code 11</td>
	<td><a src="/assets/img/qlio/gpstock/cb_code11.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_code11.jpg" alt="Code barre Code 11" /></a></td>
	<td>- Longueur variable<br />
		- Discret
	</td>
  </tr>
</table>

<p class="h4-like">BCodes bidimensionnels (2D)</p>
<table class="table">
  <tr>
  	<td>QR Code</td>
	<td><a src="/assets/img/qlio/gpstock/cb_QR_code.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_QR_code.jpg" alt="Code barre QR code" /></a><br />(Encodé : 01234ABCDEF)</td>
	<td>- Alphanumérique et — Espace : $ % * + - . : / ;<br />
		- 4 niveaux de sécurité 
	</td>
  </tr>
  <tr>
  	<td>DATAMATRIX</td>
	<td><a src="/assets/img/qlio/gpstock/cb_datamatrix.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_datamatrix.jpg" alt="Code barre Datamatrix" /></a></td>
	<td>- Table Ascii/Iso<br />
		- Longueur 2000 Ascii / 1000 Iso<br />
		- 4 Niveaux de sécurité 
	</td>
  </tr>
  <tr>
  	<td>PDF 417 Bidimensionnel / Empilé</td>
	<td><a src="/assets/img/qlio/gpstock/pdf417.png" class="image-link"><img src="/assets/img/qlio/gpstock/pdf417.png" alt="Code barre PDF 417" /></a></td>
	<td>- Table Ascii/Iso<br />
		- Longueur 2000 Ascii / 1000 Iso<br />
		- 8 Niveaux de sécurité
	</td>
  </tr>
</table>

<p class="h4-like"> Codes empilés</p>
<table class="table">
  <tr>
  	<td>Code 16 K</td>
	<td><a src="/assets/img/qlio/gpstock/cb_code16K.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_code16K.jpg" alt="Code barre Code 16 K" /></a></td>
	<td>- Alphanumérique<br />
		- 5 à 10 caractères par ligne 
	</td>
  </tr>
  <tr>
  	<td>Codablock</td>
	<td><a src="/assets/img/qlio/gpstock/cb_codablock.jpg" class="image-link"><img src="/assets/img/qlio/gpstock/cb_codablock.jpg" alt="Code barre Codablock" /></a></td>
	<td>- Alphanumérique<br />
		- Longueur 1 à 22 voir 44 lignes pour le Codablock F
	</td>
  </tr>
</table>


<h2>Les terminaux portables</h2>


<p>Les terminaux portables sont de véritables ordinateurs conçus pour la capture/collecte de données. Certains sont d‘ailleurs équipés d‘un lecteur de code barre. Ils sont suffisamment robustes pour être utilisés dans les milieux industriels et assez légers pour les applications linéaires en magasin comme les inventaires et la gestion de stocks.</p>

<img src="/assets/img/qlio/gpstock/terminal_portable1.png" alt="Terminal portable" width="150" />
<img src="/assets/img/qlio/gpstock/terminal_portable_psion.png" alt="Terminal portable psion" height="150" />
<img src="/assets/img/qlio/gpstock/terminal_portable_ordi.png" alt="Terminal portable VH10" height="150" />

<p>Les nouveaux terminaux peuvent être utiliser comme de véritables systèmes d‘encaissement en WIFI</p>
<p>Dresser l‘inventaire physique au moyen d‘un terminal d‘inventaire de la taille d‘un téléphone portable permet de gagner un temps considérable par rapport à la méthode dite « manuelle » : inutile de fermer le magasin pour compter les stocks ; et réaliser l‘inventaire in situ pendant les heures d‘ouverture de la semaine, c‘est avoir tout le personnel de vente non plus dans l‘arrière-boutique mais bien dans le magasin, là où se trouvent les clients.</p>
<img src="/assets/img/qlio/gpstock/terminal_portable3.png" alt="Terminal portable 3" height="150" />
<div class="notice info">Attention, cet outil pratique s‘utilise exclusivement avec un progiciel de gestion commerciale.<p>
<p>Avec un tel équipement (progiciel + terminal de lecture autonome), l‘inventaire est en principe permanent car les produits sont inventoriés après chaque entrée et/ou sortie. </p>
</div>

<h3>Une application des terminaux portables : le picking vocal</h3>

<p>Chez certains éditeurs de terminaux mobiles ou d'informatique de gestion d'entrepôt, sont développées les premières générations de modules de préparation de commandes vocales. 
Basé sur la reconnaissance vocale, ce système permet via un ensemble casque / micro au préparateur de "communiquer" avec le système de gestion d‘entrepôt.
Chaque utilisateur doit au préalable opérer un "paramétrage vocal".</p>
<p>Une fois ce paramétrage effectué, il suffit de se connecter pour que le système affecte des ordres de déplacements et de prises aux préparateurs.
Chaque opération peut être contrôlée oralement par confirmation de l‘adresse des emplacements et décompte des unités prélevées / restant à l‘adresse picking.
La communication entre le serveur et l‘opérateur est donc réciproque, le système étant en mesure d‘interpréter les messages de l‘opérateur.</p>

<div class="ok">Avantages
<p>En libérant les mains du préparateur, le picking vocal permet à la fois d‘améliorer la productivité et de réduire les erreurs de préparation.</p>
</div>

<h2>Le pick to light et le put to light</h2>
<h3>Le pick to light</h3>

<dl>
<dt>Pick to light</dt>
<dd>système de préparation de commandes assisté par ordinateur qui indique au préparateur, à l'aide d'un voyant situé sur les emplacements de stockage, l'endroit où il doit effectuer le prélèvement.
</dl>


<p>La lecture optique des codes-à-barres des unités prélevées permet au système de contrôler la préparation au fur et à mesure de sa réalisation et de déclencher le prélèvement suivant.</p>

<h3>Le put to light</h3>

<dl>
<dt>Put to light</dt>
<dd>mode de préparation des commandes assisté par ordinateur qui indique au préparateur, à l'aide d'un signal lumineux, dans quel contenant il doit déposer les articles des différentes commandes clients dont il a préalablement et simultanément prélevé tous les articles.</dd>
</dl>

<p>À chaque vague de commandes, chaque contenant est affecté à une commande client ; la lecture optique du codes-à-barres des unités prélevées déclenche le signal lumineux du contenant dans lequel il doit être déposé.</p>

<h3>Avantages des deux applications</h3>

<div class="ok">Avantages
<ul>
	<li>Gains en fiabilité de prélèvement et de constitution des commandes (d'où augmentation de la qualité)</li>
	<li>Augmentation de la productivité (puisque diminution du temps de recherche)</li>
</ul>
</div>

<h2>La RFID</h2>
<h3>Définition et principe de la RFID</h3>

<dl>
<dt>La RFID</dt>
<dd>Radio Frequency Identification = Identification par Radio Fréquence</dd>
</dl>

<a src="/assets/img/qlio/gpstock/RFID.png" class="image-link"><img src="/assets/img/qlio/gpstock/RFID.png" alt="Bac avec etiquette RFID" height="150" /></a>

<p>C‘est une technologie de marquage et de lecture sans contact des marchandises. Les objets sont équipés de pastilles légères (tag) qui sont lues à courte distance à l'aide de petits terminaux portables.</p>

<p class="h4-like">Principe</p>
<p>Il existe plusieurs types d‘étiquettes, leur point commun étant la possibilité qu‘elles offrent d‘être lues à distance à l‘aide d‘un signal radio. </p>

<p>On distingue deux catégories :</p>
<ul>
	<li>Passives : (les plus nombreuses) elles sont excitées par induction électromagnétique (par l‘onde radio émise par le lecteur) et elles renvoient à courte distance un signal convenu.
La rétention des données est estimée à 10 ans et 100 000 cycles d'écriture. </li>

	<li>Actives : (plus coûteuses) équipés d‘une source d‘énergie (pile ou capteur solaire) et d‘une puce, elles peuvent se signaler seules et/ou établir des dialogues plus construits avec le lecteur.
Leur autonomie va de quelques mois à plusieurs années.</li>
</ul>

<p>Dans tous les cas, ce qui caractérise les tags RFID, c‘est :</p>
<ul>
	<li>Leur petite taille (jusqu‘à un mm).</li>
	<li>Leur prix souvent modeste (quelques centimes d‘euros pour les moins coûteux).</li>
	<li>La présence d‘une antenne relativement grande.</li>
	<li>La possibilité éventuelle d‘être mise à jour en cours de processus.</li>
</ul>

<h3>Avantages de la RFID</h3>

<ul>
	<li>Pastille relativement peu coûteuse pouvant être posée sur des marchandises de grande consommation.</li>
	<li>Lecture sans contact et sans visée (les infos peuvent être lues sur des objets en vrac, dans n‘importe quelle position, dans des conditions de visibilité réduite voire nulle). Une étiquette passive équipée d‘une antenne d‘assez grande taille peut être lue jusqu‘à 15 m.</li>
	<li>Lecture simultanée de plusieurs articles possible (jusqu‘à 200 par secondes).</li>
	<li>Fiabilité (les informations peuvent être doublées, munies de codes de correction d‘erreur, d‘identifiants de sécurité...).</li>
	<li>Robustesse (il s‘agit d‘une étiquette assez souple, pouvant être salie).</li>
	<li>Possibilité de modifier les données stockées sur certaines pastilles au cours du traitement (par exemple, pour la traçabilité des températures de conservation des surgelés).</li>
</ul>

<h3>Le marché de la RFID</h3>

<p>Les étiquettes RFID intéressent tous les marchés, puisqu‘elles permettent de suivre les matières semi-ouvrées ou manufacturées :<p>
<ul>
	<li>tout au long de la chaîne de production, </li>
	<li>dans les différentes phases de stockage, </li>
	<li>lors des transports, </li>
	<li>pour faciliter l‘entretien et la maintenance (avec toutefois des limites de pérennité), </li>
	<li>pour limiter les risques de fraude. </li>
</ul>

<p>On peut donc prévoir facilement leur essor rapide au détriment du code-barres, moins cher certes, mais beaucoup moins performant.</p>

<p class="h4-like">Utilisation du RFID</p>
<p>On peut classer le RFID en quatre grands marchés :</p>
<ol>
	<li><strong>Contrôle d‘accès</strong> : cartes d‘accès aux bâtiments, aux parkings... Le marché est évalué à 300 millions d‘étiquettes par an, en croissance de 10 à 15%. </li>
	<li><strong>Traçabilité des biens</strong> : Wal-Mart ou le département de la défense américaine imposent partiellement cet usage pour leurs approvisionnements. Le marché comme la technologie sont en plein développement. </li>
	<li><strong>Billetterie</strong> : la carte de transport sans contact Navigo de la RATP. Le marché est évalué entre 300 et 400 millions d‘étiquettes par an, en croissance de 10 à 15%. </li>
	<li><strong>Paiements automatiques</strong> : les badges de télépéage d‘autoroute Liber-t. Le marché est évalué entre 200 et 300 millions d‘étiquettes par an, en croissance de 10 à 15%. </li>
</ol>


<!-- 
<h4><a title="Exercice 7 - Identification des colis" href="./cours/gpstock/Ex7_Identification_de_colis.odt">Exercice 7 - Identification des colis (0h20)</a></h4>
-->

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

