<?php
/**
 * BUT : Système de production
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/15 	22:08::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Industrialisation
 * @access public
 * @uses 
 */
$sNavigation=navigation('sysprod', '3', 'fin');
?>




<h1>G.E.M.M.A.</h1>

<h2>Introduction</h2>

<p>Le <strong>G.E.M.M.A. (guide d'étude des modes de marches et d'arrêts)</strong>, a été mis au point en 1981 par des spécialistes
réunis à l'ADEPA (Agence nationale pour le Développement de la Production Automatisé) dans le but de caractériser, sous forme graphique, l'état de fonctionnement d'un système automatisé.</p>

<p>C'est un "outil méthode" qui est rempli progressivement lors de la conception d'un système automatisé.</p>

<p>Un système automatisé est conçu dans le but de produire de la valeur ajoutée. Il est alors dans une situation dite de « PRODUCTION NORMALE ».</p>
<p>Pendant son cycle de vie, un système ne produit pas en continu ; il tombe en panne, il doit subir des opérations de maintenance ou de réglage, etc.</p>
<p>On définit alors 3 grandes familles de modes de marche et d'arrêt.</p>
<ul>
    <li>Famille A : Procédures d'arrêt et de remise en route.</li>
    <li>Famille F : Procédures de fonctionnement.</li>
    <li>Famille D : Procédures en défaillance de la PO.</li>
</ul>

<p>Ces modes de marche et d'arrêt concernent : </p>
<ul>
    <li>Les défauts de production de l'équipement automatisé.</li>
    <li>Les différentes phases d'exploitation de la machine.</li>
    <li>Les états et procédures de mise en sécurité sur défaut, sur défaillance ou sur consigne de sécurité.</li>
</ul>

<p>Des normes françaises et européennes réglementent et définissent les modes de marche et d'arrêt relatifs à la sécurité des machines. </p>

<h3>Guide graphique</h3>

<p>Le guide graphique GEMMA est divisé en "rectangle-état". Chaque rectangle-état a une position précise sur le guide graphique.</p>
<p>Chaque rectangle-état est relié à un ou plusieurs autres rectangles-états par des flèches orientées.</p>
<p>Le passage d'un rectangle-état à un autre s'effectue un peu à la manière du franchissement d'une transition de grafcet.</p>

<img src="/assets/img/qlio/sysprod/famille_procedure_gemma.png" alt="Familles de procédures GEMMA" />

<p>Le guide graphique GEMMA n'est pas un outil figé, il est modulable à volonté suivant les spécifications à obtenir.</p>



<p>Il sert à définir un cahier des charges avec le client quant aux modes de marche et d'arrêt de son système.</p>

<p>Il décrit très précisément le comportement du système lors de la mise sous/hors énergie de la partie commande et de la partie puissance.</p>

<p>L'étude faite avec un Gemma va permettre de structurer le fonctionnement du système automatisé.</p>
<p>Il sera traduit en <strong>GMMA</strong> (grafcet des modes de marche et d'arrêt) ou en <strong>GCH</strong> (grafcet de conduite hiérarchisée).</p>

<p>Mais pour garder une priorité absolue à la SÉCURITÉ, en redondance avec une chaîne de sécurité câblée, il est fortement conseillé de construire un <strong>G.S.</strong> (grafcet de sécurité).</p>

<h2> Concepts de base</h2>

<img src="/assets/img/qlio/sysprod/gemma.gif" alt="schéma du gemma" />

<p>Le Gemma est une méthode d'approche des modes de marches et d'arrêts qui se construit en deux temps :</p>
<ul>
    <li>On recense les différents modes envisagés et on met en évidence les enchaînements qui les relient.</li>
    <li>On détermine les conditions de passage d'un mode à l'autre.</li>
</ul>

    <h3>Concept 1 : Système en ordre de marche</h3>
<p>Les modes de marche et d'arrêt ne peuvent être perçus et traités qu'en présence d'une partie commande en ordre de marche.</p>

<p>Tout système peut être décomposé fonctionnellement en 2 parties qui coopèrent : la <strong>partie opérative (PO)</strong> et la <strong>partie commande (PC).</strong>

<p class="notice remarque">La PO concerne tout ce qui n'est pas l'automatisme en cours d'étude (que l'on appellera PC), typiquement tout ce qui relève de l'environnement du système (oéprateurs humains ou autres parties commande).</p>

<p>Les <strong>modes de marches ou d'arrêts</strong> concernent le système, c'est-à-dire la PO + la PC, mais tels qu'ils sont vus par la PC.

<p>Par conséquent, ceci suppose que la PC est en ordre de marche, avec tous ses organes convenablement alimentés, même si la PO est hors énergie, ou en défaut, ou à l'arrêt.</p>

<p>Le GEMMA est donc schématisé avec deux zones :</p>
<ul>
    <li>une zone correspondant à l'état hors énergie de la PC (ne figure que pour la forme !).</li>

    <p class="notice remarque">Dans cette partie il n'y a pas de modes traités par la partie commande. Seules des actions dites actions réflexes peuvent se réaliser. Le choix des composants du système sera prépondérant dans ce mode pour des raisons de sécurité.</p>

    <li>une zone correspondant à la PC fonctionnant normalement (couvre la quasi-totalité du guide).</li>
</ul>

    <h3>Concept 2 : Le critère "Production"</h3>

<p>On distingue la zone de production de la zone hors production par un double encadrement de la zone de production en pointillés. La zone de production se trouve à cheval sur les trois types de procédures.</p>

<img src="/assets/img/qlio/sysprod/gemma_production.png" alt="gemma critère en production" />

<p>Le système sera en production si la valeur ajoutée pour laquelle il a été conçu est obtenue.</p>
<p>Le système sera hors production dans le cas contraire.</p> 
<p>La zone de production se situe dans la zone PC sous énergie.</p>
<p class="notice remarque">Les rectangles-états situés à l'intérieur des pointillés « PRODUCTION » correspondent à des modes de marche pour lesquels la machine produit de la valeur ajoutée.</p>


<h3> Les trois familles de procédures</h3>

<p>On peut classer en 3 grandes familles les modes de marche et d'arrêt d'un système automatisé. Ces 3 familles correspondent à chacune des zones du GEMMA</p>

<h4>La famille F : Les procédures de fonctionnement</h4>
<p>On groupe dans cette famille tous les modes ou états qui sont indispensables à l'obtention de la valeur ajoutée. </p>

<p class="notice remarque">Ce sont tous les états sans lesquels on ne peut pas techniquement ou fonctionnellement obtenir la valeur ajoutée pour laquelle la machine est prévue.</p>
<p>Ces modes sont regroupés dans une zone F, « <strong>procédures de fonctionnement</strong> » du GEMMA.</p>

<p class="notice remarque">Les modes préparatoires à la production, de réglage, de tests font partie de cette famille : préchauffer un outillage de moulage (marche de préparation), régler et contrôler lors d'opérations d'usinage.</p>

<h4>La famille A : Les procédures d'arrêts</h4>
<p>Une marche automatique fonctionne rarement 24 heures sur 24. Il est nécessaire de l'arrêter de temps à autre pour des raisons extérieures 
au système (journée finie par exemple) ou bien par manque d'approvisionnement.</p>
<p>On classera dans cette famille tous les modes conduisant à (ou traduisant) un état d'arrêt du système pour des raisons 
extérieures. Ils sont regroupés dans une zone A, « procédures d'arrêt » du GEMMA.</p>

<h4>La famille D : Les procédures en défaillances</h4>

<p>Il est rare qu'un système fonctionne sans incident pendant toute sa vie : il est donc indispensable de prévoir les défaillances.</p>

<p>On classera dans cette famille tous les modes conduisant à (ou traduisant) un état d'arrêt du système pour des raisons intérieures au système ; c'est à dire à cause de défaillances de la PO.</p>
<p>Ils sont regroupés dans une zone D, « procédures en Défaillance » du GEMMA.</p>

<h2>Les rectangles états :</h2>

<p>Sur le GEMMA, chaque mode de marche ou d'arrêt désiré peut être décrit dans des rectangles-états prévus à cet effet.</p>

<p>La position d'un rectangle-état sur le GEMMA définit : </p>
<ul>
<li>Son appartenance à l'une des 3 familles : arrêt, fonctionnement, défaillance.</li>
<li>Le fait qu'il soit en ou hors production.</li>
</ul>

<p>Chaque famille est constituée de plusieurs rectangles-états qui sont définis et utilisés comme suit :</p>
<img src="/assets/img/qlio/sysprod/rectangle-etat.png" alt="Rectangle-état" />

<p class="notice remarque">En pratique, pour une machine donnée, on ne choisira parmi les états proposés par le guide que ceux qui sont nécessaires. On précisera le nom de chacun des états retenus à l'intérieur du rectangle état correspondant.</p>

<p class="notice exemple">Exemple : F2 est un repère de rectangle-état. F signifie que l'état proposé fait partie des procédures de fonctionnement.</p>

<p>Un rectangle état s'utilise en complétant de façon manuscrite l'opération exécutée et les conditions d'évolution.</p>


<h2>Définitions des états</h2>

<dl>
<h3>Famille F (procédure de fonctionnement)</h3>
<img src="/assets/img/qlio/sysprod/rectangle-etat_F.png" alt="Rectangle-état F" />
<dt>F1 Production normale</dt>
    <dd>La machine produit normalement, c'est l'état pour lequel elle a été conçue. C'est à ce titre que le rectangle état a un cadre renforcé. On peut souvent faire correspondre à cet état un grafcet de production normale.</dd>
    <p>Remarques : Le rectangle état qui correspond à F1 a un cadre très épais.</p>
    <p>On fait souvent correspondre à cet état un GRAFCET que l'on appelle GRAFCET de base. À cet état ne correspond pas nécessairement une marche automatique.</p>
<dt>F2 Marche de préparation</dt>
    <dd>Cet état est utilisé pour les machines nécessitant une préparation préalable à la production normale: préchauffage de l'outillage, remplissage de la machine, mises en routes diverses.</dd>
<dt>F3 Marche de clôture</dt>
    <dd>Cet état est nécessaire pour certaines machines devant être vidées ou nettoyées en fin de journée ou en fin de série.</dd>
<dt>F4 Marche de vérification dans le désordre</dt>
    <dd>Cet état permet de vérifier certaines fonctions ou certains mouvements sur la machine, sans respecter l'ordre du cycle.</dd>
<dt>F5 Marche de vérification dans l'ordre</dt>
    <dd>Dans cet état, le cycle de fonctionnement peut être exploré au rythme voulue par la personne effectuant la vérification, la machine pouvant produire ou ne pas produire.</dd>
<dt>F6 Marche de test</dt>
    <dd>Cet état permet de régler ou d'étalonner certaines machines de contrôle, de tri, comportant des capteurs qui doivent être réglés ou étalonnés périodiquement.</dd>

<h3>Famille A (procédure d'arrêt)</h3>
<img src="/assets/img/qlio/sysprod/rectangle-etat_A.png" alt="Rectangle-état A" />
<dt>A1 Arrêt dans état initial</dt>
    <dd>C'est l'état repos de la machine. Il correspond en général à la situation initiale du Grafcet : c'est pourquoi, comme une étape initiale, ce rectangle état est entouré d'un double cadre. Pour une étude plus facile de l'automatisme, il recommandé de représenté la machine dans cet état initial.</dd>
<dt>A2 Arrêt demandé en fin de cycle</dt>
    <dd>Lorsque l'arrêt est demandé, la machine continue de produire jusqu'à la fin du cycle : A2 est un état transitoire vers A1.</dd>
<dt>A3 Arrêt demandé dans état déterminé</dt>
    <dd>La machine continue de produire jusqu'à un arrêt en une position autre que la fin du cycle : c'est un état transitoire vers A4.</dd>
<dt>A4 Arrêt obtenu</dt>
    <dd>La machine est arrêtée dans une autre position que la fin de cycle.</dd>
<dt>A5 Préparation pour remise en route après défaillance</dt>
    <dd>C'est dans cet état que l'on procède à toutes les opérations (dégagement, nettoyages) nécessaires à une remise en route après défaillance.</dd>
<dt>A6 Mise P.O. dans un état initial</dt>
    <dd>La machine étant en A6, on remet manuellement ou automatiquement la PO en position pour un redémarrage dans un état initial.</dd>
<dt>A7 Mise P.O. dans état déterminé</dt>
    <dd>La machine étant en A7, on remet la PO en position pour un redémarrage dans une position autre que l'état initial.</dd>

<h3>Famille D (procédure de défaillance)</h3>
<img src="/assets/img/qlio/sysprod/rectangle-etat_D.png" alt="Rectangle-état D" />
<dt>D1 Arrêt d'urgence</dt>
    <dd>C'est l'état pris lors dun arrêt d'urgence : on y prévoit non seulement les arrêts, mais aussi les cycles de dégagements, les procédures et précautions nécessaires pour éviter ou limiter les conséquences dues à la défaillance.</dd>
<dt>D2 Diagnostic et/ou traitement de défaillance</dt>
    <dd>C'est dans cet état que la machine peut être examinée après défaillance en vue d'un traitement permettant le redémarrage.</dd>
<dt>D3 Production tout de même</dt>
    <dd>Il est parfois nécessaire de continuer la production même après défaillance de la machine : on aura alors une production dégradée, ou une production forcée, ou une production aidée par des opérateurs non prévues en "Production normale".</dd>

</dl>


<h3>Sélection des modes de marche et d'arrêt.</h3>

<p>Il est nécessaire d'envisager l'ensemble des "rectangles-états" offerts par le GEMMA. - Si le mode de fonctionnement est retenu, il doit être explicité conformément à la fonctionnalité de la machine. - S'il n'est pas retenu dans le cadre de l'étude, une croix est portée dans le rectangle état.</p>

<p>Il est nécessaire de rechercher les évolutions d'un état à un autre sachant que dans tout système, on retrouve deux états fondamentaux : - L'état A1, état initial ou repos. - L'état F1, mode de production normale pour lequel le système a été conçu.</p>

<p>C'est à partir de ces deux états que sont recherchés les différentes évolutions.</p>

<p class="notice exemple">Exemple : - Le démarrage d'une machine, c'est à dire la transition de A1 vers F1 peut nécessiter une marche de préparation F2. - L'arrêt peut se produire : Soit en fin de cycle F1--->A2---->A1 soit dans une autre position F1--->A3---->A4 - Les cas de défaillances peuvent imposer : arrêt d'urgence D1 ou la production tout de même D3.</p>

<h3>Conditions d'évolution entre modes de marches et d'arrêts.</h3>

<p>Les modes de marches et d'arrêt ayant été sélectionnés et explicités, il convient de préciser le passage d'un état à l'autre. L'élaboration de ces conditions de passage rend possible la conception du pupitre de commande et entraîne éventuellement l'adjonction de capteurs supplémentaires.</p>
<p>Le passage d'un état à un autre s'effectue de 2 façons :</p>
<ul>
    <li>Soit avec une condition d'évolution.</li>
    <li>Soit sans condition d'évolution.</li>
</ul>

<p>Avec les conditions d'évolution en provenance de l'opérateur apparaissent les besoins en boutons de commande. A celles provenant de la machine doit correspondre la mise en place de nouveaux capteurs.</p>

<img src="/assets/img/qlio/sysprod/condition_evolution.png" alt="Condition d'évolution entre modes de marches et d'arrêts" />

<p>Avec tous ces éléments descriptifs, on peut alors tracer :</p>
<ul>
    <li>Soit le grafcet complété qui enrichit le grafcet de base.</li>
    <li>Soit un grafcet supplémentaire, coordonné avec le grafcet de base, appelé GRAFCET des modes de marche ou grafcet de conduite.</li>
</ul>

<h3>Exemple : Tri de caisse</h3>

<img src="/assets/img/qlio/sysprod/tri_caisse.png" alt="Schéma d'un tri de caisse" />

<p>Un dispositif automatique destiné à trier des caisses de deux tailles différentes se compose d'un tapis amenant les caisses, de trois poussoirs et de deux tapis d'évacuation.</p>

<p>Le poussoir P1 pousse les petites caisses devant le poussoir P2 qui à son tour les transfère sur le tapis 2, alors que les grandes caisses sont poussées devant le poussoir P3, ce dernier les évacuant sur le tapis 3.</p>

<p>Pour effectuer la sélection des caisses, un dispositif de détection placé devant le poussoir P1 permet de reconnaître sans ambiguïté le type de caisse qui se présente.</p>

<p>Les modes de marche à considérer sont les suivants:</p>
<ul>
    <li>Marche automatique.</li>
    <li>Initialisation automatique de la partie opérative.</li>
    <li>Marche manuelle: des boutons de commande manuelle doivent permettre de démarrer le cycle aller/retour de chaque poussoir P<sub>i</sub>.</li>
    <li>Arrêt d'urgence.</li>
</ul>

<p>On peut décrire tout d'abord les modes de marche souhaité par un GEMMA.</p>

<!--img src="/assets/img/qlio/sysprod/tri_caisse_gemma.png" alt="Gemma d'un tri de caisse" /-->

<p>On peut, à partir de ce GEMMA faire un GRAFCET pilotant les différents modes de marche.</p>

<!--img src="/assets/img/qlio/sysprod/tri_caisse_grafcet.png" alt="Grafcet d'un tri de caisse" /-->

<h2> Utilisation du GEMMA</h2>

<p>Le GEMMA est un outil méthodologique pour établir le cahier des charges des automatismes séquentiels.</p>
<p>Il est également un moyen pratique pour représenter et exploiter les Modes de Marches et d'Arrêts.</p>
<p>En mettant en oeuvre un GEMMA dans une étude, les Modes de Marches et d'Arrêts sont prévus dès la conception et intégrés dans la réalisation.</p>
<p>L'étude du GEMMA complétée par les procédures de sécurités doit être ébauchée le plus tôt possible
afin que le choix des composants de la PO ne soit pas remis en cause au moment de la réalisation.</p>
<p>On peut envisager une organisation du type ci-dessous.</p>

<ul>
    <li>Étude du processus.</li>
    <li>Partition des tâches fonctionnelles.</li>
    <li>Grafcet système.</li>
        <ul>
        <li>Grafcet des tâches opératives.</li>
        <li>Grafcet de coordination des tâches.</li>
        </ul>
    </li>
    <li>Étude du GEMMA et des procédures de sécurités.</li>
    <li>Définition de la technologie des préactionneurs et actionneurs.</li>
    <li>Grafcet GLOBAL
        <ul>
        <li>Grafcet de sécurité.</li>
        <li>Grafcet de conduite machine.</li>
        <li>Grafcet de production normale.</li>
        </ul>
    </li>
    <li>Logiciel d'application.</li>
</ul>

    <h3>Grille du GEMMA</h3>

<p>L'observation de la grille nous amène à remarquer particulièrement 2 rectangles états différents des autres :</p>

<h4>Production normale [F1].</h4>
<p>C'est le mode automatique, c'est à dire le mode de fonctionnement principal du système.</p>
<p>Le détail de ce mode est défini par un grafcet ne prenant en compte dans la description ni la façon de
démarrer ni celle de s'arrêter, c'est la version appelée “GRAFCET de base”.</p>
<p>Le mode F1 est celui dans lequel nous chercherons le plus à rester.</p>

<h4>Arrêt dans état initial [A1].</h4>
<p>C'est le deuxième mode stratégique d'une application. Arrêt, prêt à redémarrer pour produire
Les principaux déplacements consisteront à passer de A1 vers F1 et de F1 vers A1.</P>
<p>Pour aller d'un mode à l'autre plusieurs chemins sont possibles. Tous forment des boucles.</p>

    <h3>Boucles Marche / Arrêt</h3>

<p>L'organigramme guide pour la conception de la boucle marche/arrêt.</p>
<p>Il existe beaucoup de variante possible, d'autant plus qu'il est possible de créer à ce niveau d'autres modes ou liaisons à condition de
respecter les concept de base du GEMMA.</p>
<p>Lors de la construction de la boucle marche/arrêt le système est supposé initialisé, c'est le rôle du mode A6 “mise PO dans état initial”.</p>
<p>A la mise sous tension de la PC on atteindra souvent ce mode.</p>
<p>Une coupure d'énergie ou une défaillance de la PC amène à quitter la partie production, quelque soit
le mode en cours, pour se retrouver dans la zone hors énergie de gauche.</p>
<p>Au retour de l'énergie, on quittera cette zone pour un mode d'arrêt ou de défaillance pour :</p>
<ul>
    <li>D2 si c'est une panne de la PC qui est la cause de l'arrêt.</li>
    <li>A5 si une préparation est nécessaire.</li>
    <li>A7 si on redémarre dans un état déterminé.</li>
    <li>A6 si le redémarrage se fait en position initiale.</li>
</ul>

<p class="center"><img src="/assets/img/qlio/sysprod/boucle_marche_arret.png" alt="Boucle de marche et d'arrêt" /></p>

    <h3>Boucles de défaillance</h3>

<p>La norme EN60204 distingue trois catégories d'arrêts :</p>
<ol>
    <li><strong>Catégorie 0</strong> :</li>
    <p><i>L'arrêt est obtenu par suppression immédiate de l'énergie de puissance sur les actionneurs (arrêt non contrôlé).</i></p>
    <li><strong>Catégorie 1</strong> :</li>
    <p><i>L'arrêt est contrôlé en maintenant l'énergie de puissance sur les actionneurs pour obtenir l'arrêt des actionneurs, 
    ensuite les actionneurs sont mis hors énergie de puissance lorsque l'arrêt est effectué.</i></p>
    <li><strong>Catégorie 2</strong> :</li>
    <p><i>L'arrêt est effectué en maintenant l'énergie de puissance sur les actionneurs.</i></p>
</ol>

<p>&nbsp;</p>
<p>L'article §9.2.5.4 de la norme <strong>EN 60204</strong> apporte les précisions suivantes :</p>

<p>Le choix de la catégorie doit être déterminé en fonction de l'évaluation du risque entraîné par le S.A.P.</p>

<p>Si un arrêt est du à l'action sur un bouton d'arrêt d'urgence, il doit être réalisé avec des
composants électromécaniques câblés ou dépendre d'une logique électronique (matériel, logiciel,
transmission par un réseau) spécifique sécurité.</p>

<p>En effet certains API sont actuellement considérés par les normes comme capables d'assurer la
sécurité liée à une demande d'arrêt d'urgence (CPU xxxF de Siemens).</p>

<p>L'arrêt de la production peut aussi être du à une défaillance, trois niveaux de défaillance, liés aux types
d'arrêts provoqués, peuvent être distingués.</p>

<p><strong>NIVEAU 0 :</strong></p>
<p>Met en cause la sécurité de l'homme et de la machine, doit être traité suivant le mode « catégorie 0 »
ou « catégorie 1 ». La reprise après un arrêt de ce type passe par l'opérateur en mode manuel.</p>

<p><strong>NIVEAU 1 :</strong></p>
<p>La défaillance qui arrête la production F1 -> D2. Sans urgence, qui après traitement permet le redémarrage.</p>

<p><strong>NIVEAU 2 :</strong></p>
<p>La défaillance qui n'arrête pas la production, qui la ralenti seulement ou en diminue la qualité (marche
dégradée) F1 > D3. L'arrêt de la production n'est pas du à la défaillance directement mais à son traitement.</p>


<p><u>REMARQUES:</u></p>

<p>Plus la boucle s'éloigne de la case F1, plus l'arrêt est « sérieux », donc plus la remise en route est
longue. Il est possible de créer de nouvelles cases si beaucoup de défaillances sont identifiées et ne
peuvent se regrouper.</p>

<p>Le GEMMA prévoit l'action d'une défaillance mais incite aussi à travailler le retour à la production
d'ou l'intérêt de raisonner par boucle.</p>

<img src="/assets/img/qlio/sysprod/boucle_defaillance.png" alt="Boucle de défaillance" />

    <h3>Les autres boucles</h3>

<p>En plus des boucles principales de marche/arrêt et de défaillances, il existe les modes auxiliaires qui ne permettent généralement pas la production.</p>

<p>Les mode de vérification imposent donc un arrêt de production et interdisent un retour en F1 sans un passage à l'état initial.</p>

<p class="h4-like">F4 : Marches de vérification dans le désordre :</p>
<p>C'est ce que l'on appelle couramment le <strong>mode MANUEL</strong>. La boucle de base est du type ci-dessous :</p>
<img src="/assets/img/qlio/sysprod/boucle_manuel.png" alt="Boucle manuelle" />

<img src="/assets/img/qlio/sysprod/boucle_manuel_bp.png" alt="Boucle manuelle avec bouton poussoir" />

<p class="h4-like">F5 : Marche de vérification dans l'ordre :</p>
<p>C'est le mode pas à pas classique.</p>

<p class="h4-like">F6 : Marche de test :</p>
<p>C'est une variante de la marche de production normale qui à pour but de tester un composant de la production.</p>
<p>Dans un premier temps, il est possible d'envisager tous les modes, mais il est bien évident qu'en
accord avec l'utilisateur, on ne retiendra que ceux qui représentent un réel intérêt, le rapport
possibilités/prix de revient doit être pris en compte.</p>
<p>L'unicité de mode du GEMMA impose qu'une partie commande ne peut être que dans un seul mode à la fois.</p>
<p>Dans le cas d'une installation à plusieurs sous ensemble, on peut définir un GEMMA par sous
ensemble, le fonctionnement global de l'installation étant représenté par un autre GEMMA de niveau hiérarchique supérieur.</p>

<h2>Exercice</h2>

<p>Les changements de format de palette peuvent être demandés plusieurs fois par jour. Cette opération exige une coordination rigoureuse de tâches manuelles et de tâches contrôlées par la P.C. du palettiseur.</p>
<p>Proposez une organisation des modes de production.</p>
<table class="table">
<tr>
    <th class="w40p">N°</th>
    <th>Tâches</th>
    <th>Contrôlées <br /> par ...</th>
</tr>
<tr>
    <td>1</td>
    <td>Préparer, en amont du palettiseur, le stock de palettes et d'intercalaires au nouveau format, sans interrompre le cycle en cours.</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>2</td>
    <td>Donner l'ordre, d'un changement de format, à l'aide du pupitre.</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>3</td>
    <td>Bloquer l'amenage des fardeaux.</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>4</td>
    <td>Terminer chargement et mise à niveau de la couche en cours.</td>
    <td>Partie commande</td>
</tr>
<tr>
    <td>5</td>
    <td>Évacuer palette incomplète</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>6</td>
    <td>Effectuer à vide (= sans fardeau), les tâches : préparer une couche, mettre à niveau et charger pour mettre la P.O. en référence.</td>
    <td>Partie commande</td>
</tr>
<tr>
    <td>7</td>
    <td>Sélectionner le mode "Manuel".</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>8</td>
    <td>Effectuer, en commande manuelle, les adaptations de la P.O. en fonction du format (butées, glissières, ...).</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>9</td>
    <td>Effectuer au pupitre un "Reset" général.</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>10</td>
    <td>Demander au pupitre un changement de programme (A vers B ou B vers A).</td>
    <td>Opérateur</td>
</tr>
<tr>
    <td>11</td>
    <td>Demander le départ du cycle.</td>
    <td>Opérateur</td>
</tr>

</table>

<p class="h3-like">Réponse</p>
<p class="center"><img src="/assets/img/qlio/sysprod/reponse_ex1_gemma.png" alt="gemma de l'exercice 1" /></p>





