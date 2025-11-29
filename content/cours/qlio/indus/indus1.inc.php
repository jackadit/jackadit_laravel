<?php
/**
 * BUT : Introduction à l'éco-conception
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
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
$sNavigation=navigation('indus', '1');
?>





<h1>AMDEC</h1>

	<h2>Généralités</h2>
	<p>Dans une démarche de conception, la première étape est l'analyse fonctionnelle externe (AFE) qui, par l'intermédiaire de la méthode APTE, aboutit à la rédaction du cahier des charges fonctionnel permettant d'identifier et de définir précisément les attentes et exigences des utilisateurs du système.</p>
	<p>Ensuite vient l'analyse fonctionnelle interne (AFI ou analyse fonctionnelle technique AFT) qui permet de décomposer et d'analyser la manière dont une solution répond à ces besoins et exigences, et donc, d'optimiser une solution existante.</p>
	<p>En dernier lieu, il faut fiabiliser le produit, fiabiliser les moyens de production, réaliser les plans de contrôle et fiches de postes.</p>
	<p>Pour ce faire, on réalise une AMDEC (Analyse des Modes de Défaillance, de leurs Effets et de leurs Criticité).</p>

	<p class="center"><img class="aligncenter" src="/assets/img/qlio/indus/demarche_amdec.png" alt="Démarche AMDEC" /></p>
	

	<h3>Historique</h3>
	<p>L'AMDEC a été créée aux États-Unis par la société Mc Donnell Douglas en 1966. Elle consistait à dresser la liste des composant d'un produit et à cumuler des informations sur les modes de défaillance, leur fréquence et leurs conséquences.</p>
	<p>La méthode a été mise au point par la NASA et le secteur de l'armement sous le nom de FMEA (Failure Mode ans Effect Analysis) pour évaluer l'efficacité d'un système.</p>
	<p>À la fin des années soixante-dix, la méthode fut largement adoptée par Toyota, Nissan, Ford, BMW, Peugeot, Volvo, Chrysler et d'autres grands constructeurs d'automobiles.</p>
	

	<h3>Pourquoi  une AMDEC ?</h3>
	<p>Une AMDEC permet de structurer la démarche préventive de recherche des défaillances.</p>
	<p>Elle permet également d'instaurer une dynamique performante pour des équipes de travail.</p>
	
	<p>Il existe deux types de défaillances :</p>
	<ul>
		<li>Celles qui se sont déjà produites</li>
		<li>Celles que l'on ignore encore</li>
	</ul>
	<p>La première justifie la maintenance, la seconde doit être une préoccupation permanente.</p>
	
	<div class="notice remarque">Maintenir c'est aussi prévenir</div>

	<p>L'AMDEC est un outil d'amélioration continue et de prévention. Elle n'a de sens que si l'étude est prolongée par des actions effectives d'amélioration et de contrôle.</p>
	<p>Le PDCA (Plan, Do, Check, Act) est la base de la logique d'amélioration continue.</p>

	<h2>Différents types d'AMDEC</h2>
	<h3>AMDEC Produit</h3> 
		<p>Analyse de la conception d'un produit pour améliorer sa qualité et sa fiabilité.
		<br /><i>(Réalisé lors de la conception du produit)</i></p>

	<h3>AMDEC Processus</h3>

	<p>Analyse des opérations de production pour améliorer la qualité de fabrication du produit).
		<br /><i>(Réalisé lors du développement)</i></p>

    <div class="notice alert">
	Attention : 
	<p><strong>Process</strong> est un anglicisme qui englobe un sens commun qui est celui de « méthode ».</p>
        <p>&nbsp;</p>
    <p><strong>Un procédé</strong> : c’est une méthode employée pour obtenir le résultat recherché.</p>
    <p>Ex. : Notre entreprise a mis au point d’intéressants procédés d’extrusion.</p>
    <p>&nbsp;</p>
	<p><strong>Un processus</strong> Suite continue d'opérations, d'actions constituant la manière de faire, de fabriquer quelque chose.</p>
    <p>Ex. : La formation des nouveaux arrivants leur a permis de se familiariser avec différents processus de fabrication de l'entreprise.</p>
        <p>&nbsp;</p>
    <p><strong>Une procédure</strong> : Marche à suivre, ensemble de formalités, de démarches à accomplir pour obtenir un résultat donné.</p>
    <p>Ex. : Le service maintenance affirme avoir respecté la procédure d'arrêt des machines.</p>
        <p>&nbsp;</p>
         <p>Ex. : On a employé des procédés efficaces pour accélérer le processus d’enquête de la procédure judiciaire.</p>
    </div>

	<h3>AMDEC Moyen</h3>
	<p>Analyse de la conception et/ou de l'exploitation d'un moyen ou équipement de production pour améliorer sa disponibilité et sa sécurité.
		<br /><i>(Réalisé lors de l'industrialisation)</i></p>


<h2>Présentation</h2>
	<p>L'AMDEC est une méthode utilisée pour détecter les défaillances pouvant apparaitre sur un produit qui permet de prendre ensuite des mesures pour y remédier.</p>
	<p>Et ceci dès la phase de conception.</p>
	<p>C'est un moyen préventif de s'assurer du niveau de fiabilité et de sécurité d'un produit ou processus en s'intéressant :</p>
	
	<ul>
	<li>à la manière dont un constituant peut être le siège d'une dérive : <strong>mode de défaillance</strong></li>
	<li>de la conséquence de celle-ci : <strong>les effets</strong>
	<li>de son importance qualitativement chiffrée : <strong>la criticité</strong></li>
	</ul>

	<h3>Principe de l'AMDEC :</h3>
	<ul>
		<li>la fonction globale d'un système est la résultante de toutes les fonctions composantes</li>
		<li>la modification d'une fonction composante altère automatiquement la fonction globale</li>
		<li>donc déceler une modification de la fonction globale permettra de remonter jusqu'au composant responsable</li>
	</ul>

	
	<h2>Domaines d'application</h2>
	<p>La méthode s'est imposée dans les domaines industriels suivants : spatial, armement, mécanique, électronique, électrotechnique, automobile, nucléaire, aéronautique, chimie et plus récemment on commence à s'y intéresser dans les services.</p>

	<p>En informatique on à transcrit la méthode en une Analyse des Effets des Erreurs Logiciel (AEEL).</p>
	<p>Aujourd'hui cette méthode est considérée comme un outil de la qualité totale.</p>

	<p>Elle peut être élaborée pour déceler les défaillances</p> 
	<ul>
		<li>d'une organisation, </li>
		<li>d'un service… (erreur, oubli, désordre, perte, …)</li>
	</ul>

	<p>Une AMDEC permet de mettre en place :</p>
	<ul>
		<li>les moyens d'évitement (modification, transformation, …)</li>
		<li>des interventions rapides (personnel, matériel, procédures, …)</li>
	</ul>

	<p>Une AMDEC permet de quantifier les défaillance par un indice de criticité.</p>
	<p>Cet indice crée une logique et une hiérarchie dans le traitement des priorités.</p>
	

	<h2>Méthodologie</h2>
	
    <h3>Initialisation</h3>
	<p>Une AMDEC est demandée soit dans le cahier des charges, soit par un contrat spécifique.
	Elle doit être prévue dans le planning et les ressources du projet. Elle doit être engagée dès les
	premières phases de la conception du moyen et se poursuivre en phase d'étude lorsque les composants
	sont définis, et avant que les plans de détails ne soient figés.</p>

	<h4>But :</h4>
	<p>Poser le problème, définir les objectifs, le contenu et les limites matérielles de l'étude à mener et réunir les documents et les acteurs concernés qui doivent être consignés dans un dossier de synthèse AMDEC.</p>
	
	<h4>Regrouper la documentation technique</h4>
	<ul>
		<li>cahier des charges</li>
		<li>plans d'ensembles</li>
		<li>plans détaillés</li>
		<li>descriptif du processus de fabrication</li>
		<li>notices techniques de fonctionnement</li>
		<li>nomenclature des composants</li>
		<li>procédures d'utilisation, de maintenance et de contrôle</li>
	</ul>

	<h4>Définir des objectifs à atteindre</h4>
	<ul>Fixer :
		<li>les objectifs (économiques, fiabilité, disponibilité, maintenabilité, sécurité,...)</li>
		<li>les limites techniques de remise en question du système</li>
		<li>le champ possible des interventions à proposer</li>
		<li>Définir le planning (délai de proposition d'une solution) et la durée des réunions (<2 heures et hebdomadaires)</li>
		<li>Préparer les grilles et la méthode de cotation de la criticité, le tableau de saisie AMDEC procédé, les feuilles de synthèse</li>
		<li>La grille de saisie est à remplir par le rédacteur au fil de la discussion sur une feuille accrochée au mur ou sur un tableau</li>
	</ul>

    <h3>Constitution du Groupe de Travail</h3>
	<p>Former un groupe de travail pluridisciplinaire, motivé et compétent (5 à 8 personnes). On choisit généralement des personnes pouvant apporter des informations nécessaires à l'analyse, grâce à leurs connaissances techniques ou à leurs expériences sur des moyens similaires déjà en exploitation.</p>
	<ul>
		<li>responsable de l'étude ayant le pouvoir de décision pour engager les actions proposées</li>
		<li>un animateur (neutre) respectueux du déroulement des étapes</li>
		<li>des participants de diverses compétences (B.E, méthodes, fabrication, qualité, maintenance, S.A.V., marketing, achats, fournisseur, client)</li>
		<li>éventuellement des experts techniques externes à la structure</li>
	</ul>

    <h3>AMDE : Analyse des Modes de Défaillance et de leurs Effets</h3>
	<p>L'analyse consiste à identifier les dysfonctionnements potentiels ou déjà constatés, à mettre en évidence les points critiques et à proposer des actions correctives.</p>
	<p>C'est à ce moment que l'on fait le lien entre l'analyse fonctionnelle et l'AMDEC.</p>
	<p>Cette étape est menée élément par élément, au niveau de détail choisi.</p>
	
	<h3>Découpage du système</h3>
	<p>C'est ici que le fait de travailler en groupe prend toute son importance.</p>
	<ul>
		<li>Découper le système en blocs fonctionnels sous une forme arborescente, selon autant de niveaux que nécessaire</li>
		<li>Définir le niveau de l'étude et les éléments à traiter correspondants</li>
		<li>Ce découpage permet de situer les éléments étudiés dans la structure générale du système traité</li>
		<li>Quel que soit le niveau choisi pour l'analyse, la démarche et le raisonnement sont identiques</li>
	</ul>


	<p>On cherche à identifier les modes de défaillance de l'élément en relation avec les fonctions à assurer, dans la phase de fonctionnement retenue.</p>
	
	<h3>Recherche des causes (ISHIKAWA)</h3>
	<ul>
		<li>Rechercher les causes possibles de défaillance pour chaque mode de défaillance identifié</li>
		<li>On se limite aux causes primaires</li>
		<li>On peut utiliser des graphiques ou diagrammes pour collecter et organiser en famille les causes possibles de défaillance</li>
	</ul>

	<h3>Recherche des effets</h3>
	<ul>
		<li>Rechercher les effets sur le système et sur l'utilisateur, pour chaque combinaison cause-mode de défaillance</li>
		<li>Se limiter aux effets majeurs</li>
	</ul>
	
	<h3>Recensement des détections</h3>
	<ul>
		<li>Rechercher les détections possibles pour chaque combinaison cause-mode de défaillance</li>
		<li>Noter uniquement les détections les plus probables</li>
	</ul>

    <h3>Criticité</h3>
	<p>Lorsque l'AMDE (globale ou d'un composant) est terminée, une analyse d'évaluation des risques est effectuée pour toutes les défaillances précédemment identifiées.
	<p>L'évaluation des risques potentiels se traduit par le calcul de la Criticité, à partir de l'estimation des indices de Gravité (Sévérité), de Fréquence (Occurence) et de non-Détection.</p>
	<p>La criticité permet :</p>
	<ul>
		<li>de noter l'importance du risque engendré par chaque cause de défaillance</li>
		<li>puis de hiérarchiser les défaillances. Cette hiérarchisation sert à prioriser les actions et mener, ainsi, des actions sur celles qui sont égales ou supérieures au seuil retenu</li>
	</ul>
	<p>L'indice de Criticité est calculé pour chaque cause de défaillance, en effectuant le produit de trois indices.</p>

    <h3>Actions Correctives</h3>
	<p>Après la mise en évidence des risques de défaillance critiques, des Actions Correctives sont décidées et appliquées. Elles ont pour objectif de diminuer la criticité des défaillances.</p>
	<p>Une diminution de C peut être obtenue :</p>
	<ul>
		<li>en agissant sur le moyen, de la conception jusqu'à la mise en exploitation, par une action du Fournisseur dans les domaines :
		<ul>
		<li>du respect de la conformité des caractéristiques du produit réalisé par le moyen,</li>
		<li>du respect des conditions de travail et de la sécurité des personnes,</li>
		<li>de la fiabilité,</li>
		<li>de la maintenabilité intrinsèque,</li>
		</ul></li>
		<li>en agissant sur la logistique, par une action du Client dans les domaines :</li>
		<ul>
		<li>de la politique de maintenance,</li>
		<li>de la formation du personnel exploitant,</li>
		<li>de l'organisation (pièce de rechange, ...), ...</li>
		</ul></li>
	</ul>
	<p>Dans tous les cas, une action corrective de conception doit être préférée à une action corrective de logistique.</p>
	<p>De même, une action corrective de conception améliorant la fiabilité doit être envisagée avant une action corrective améliorant la maintenabilité.</p>

    <h3>Suivi</h3>
	<p>Le suivi est un aspect primordial pour le succès de cet outil analytique. On dresse la liste des points
	critiques à suivre et les actions correctives à prévoir. Pour toutes les mesures décidées, des
	responsables sont désignés et un plan d'actions est établi pour réaliser les modifications envisagées.
	Chaque action corrective notée est, à son tour, analysée et évaluée comme précédemment (modes de
	défaillance potentiels, causes, effets, criticité).</p>
	
	<p>Des actions correctives doivent être engagées jusqu'à ce que tous les indices de criticité, C, soient
	inférieurs au seuil établi et que tous les indices de gravité égaux à 5 soient associés à des indices de
	fréquence et de détection égaux à 1. Les contraintes de coûts et de délais peuvent laisser subsister
	quelques rares points de criticité égaux au seuil fixé (cas limites).</p>

	<p>Pour avoir une image globale du degré de confiance que l'on peut donner au système étudié, on peut
	tracer une fonction en mettant les différentes valeurs de criticité en abscisse et le nombre de causes
	correspondantes en ordonnée (histogramme des criticités). De plus, cette représentation facilite le suivi
	des améliorations ultérieures.</p>

    <h3>Vérification</h3>
	<p>Un contrôle systématique des actions correctives est effectué par le pilote en cours d'étude et à la
	livraison de l'installation, pour s'assurer de leur mise en place et de leur efficacité.</p>
	<p>L'AMDEC doit être jointe au dossier du moyen de production ou du bien d'équipement remis à la Maintenance et aux Méthodes.</p>

    <h3>En résumé</h3>
	<p><strong>La logique de travail se base sur la criticité</strong></p>

	<ul>
		<li>Choisir les éléments à criticité la plus élevée</li>
		<li>Choisir des actions pour diminuer les facteurs les plus importants</li>
		<li>Recalculer C avec les nouvelles valeurs de D,O et S en respectant l'organigramme suivant :</li>
	</ul>

	<p class="center"><img class="aligncenter" src="/assets/img/qlio/indus/organigramme_methodologie_amdec.png" alt="Organigramme de la méthodologie AMDEC" /></p>
	

	<h2>Présentation</h2>
	<h3>AMDEC :</h3>
	<ul>
		<li>réflexion menant au constat d'avarie</li>
		<li>chacune des dérives est évaluée d'après des critères</li>
		<li>le produit de ces critères donne l'indice de criticité</li>
	</ul>

	<p>Cette réflexion procède par étapes :</p>
	<ul>
		<li>fonctions</li>
		<li>modes</li>
		<li>causes</li>
		<li>effets</li>
		<li>détection</li>
	</ul>

<p>L'ensemble de l'analyse est menée dans une matrice à colonnes.</p>


<h3>La matrice</h3>

<p>L'en-tête doit contenir toutes les informations relatives à l'analyse.</p>
<p>Les colonnes, de gauche à droite, constituent les étapes de progression des réflexions.</p>

<table class="table">
<caption>AMDEC - Analyse des modes de défaillances, de leurs effets et de leur criticité
<br /><u>exemple</u> : Défaillances possibles d'un joint d'étanchéité
</caption>
<tr>
    <th colspan="2">Système</th>
    <th colspan="2">Sous-système</th>
    <th colspan="2">Date</th>
    <th></th>
    <th class="w80p border-right" colspan="4">Critères</th>
</tr>
<tr>
    <th rowspan="3">Composant</th>
    <th rowspan="3">Fonction</th>
    <th colspan="5">Défaillances</th>
    <th colspan="3">Valeurs max.</th>
    <th class="w20p border-right"></th>
</tr>
<tr>
    <th rowspan="2">Mode</th>
    <th rowspan="2">Cause</th>
    <th colspan="2">Effet</th>
    <th rowspan="2">Détection</th>
    <th class="w20p center" rowspan="2">D</th>
    <th class="w20p center" rowspan="2">O</th>
    <th class="w20p center" rowspan="2">S</th>
    <th class="w20p center border-right" rowspan="2">C</th>
</tr>
<tr>
    <th>/ système</th>
    <th>/ autres compos.</th>
</tr>
<tr>
    <td rowspan="2">Joint</td>
    <td rowspan="2">Assurer l'étanchéité</td>
    <td rowspan="2">Détérioration</td>
    <td>Usure</td>
    <td>écoulement</td>
    <td>salissure</td>
    <td>salissure</td>
    <td>2</td>
    <td>1</td>
    <td>2</td>
    <td>4</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
</table>

<div class="notice remarque">
<p><u>Nb</u> : cette matrice est incomplète :</p>
<ul>
    <li>elle représente la partie « étude des défaillances »</li>
    <li>il manque la partie « mesures correctives »</li>
</ul>
</div>

<h3>Les composants</h3>
	<p>Dans la première colonne figurent tous les composants du système.</p>
	<p>Dans le cas d'un système complexe, un ensemble d'éléments (sous-système) peut être considéré comme un composant.</p>


<h3>Les fonctions</h3>
	<p>Les fonctions d'un composant sont les actions (discrètes) qui permettent la fonction globale.</p>
	<p>Un composant peut avoir plusieurs fonctions.</p>
	<p>La fonction est définie par un verbe à l'infinitif, donc par son action.</p>
	<p>La liste des fonctions doit être exhaustive</p>


<h3>Les défaillances</h3>
<p>L'AMDEC a pour but de déceler les défaillances ou les points faibles.</p>
<p>Une défaillance se caractérise par :</p>
	<ul>
		<li>son mode d'apparition</li>
		<li>sa cause</li>
		<li>ses effets</li>
	</ul>
	<p>La quantification de la défaillance sera précisée d'après trois critères :</p>
	<ul>
		<li>Détection</li>
		<li>Occurrence</li>
		<li>Sévérité</li>
	</ul>
	<p>La Criticité de la défaillance est le produit de ces trois critères.</p>
	
	<h4>Les modes de défaillances</h4>
	<p>Manières dont un composant peut subir une anomalie au point 
	de ne plus pouvoir assurer sa part de la fonction globale
	voir norme NF X60-150</p>
	
	<p>C'est la manière dont un système vient à ne pas fonctionner.</p>	
	<p>Le mode de défaillance est relatif à la fonction de chaque élément.</p>
	<p>Une fonction a 4 façons de ne pas être correctement effectuée :</p>
	<ol>
	<li>Plus de fonction : la fonction cesse de se réaliser,</li>
	<li>Pas de fonction : la fonction ne se réalise pas lorsqu'on la sollicite,</li>
	<li>Fonction dégradée : la fonction ne se réalise pas parfaitement, altération de performances</li>
	<li>Fonction intempestive : la fonction se réalise lorsqu'elle n'est pas sollicitée.</li>
	</ol>

	<table class="table">
	<caption>Tableau des modes génériques de défaillance</caption>
	<tr>
	    <th>Modes de défaillances</th>
	    <th>Composants électriques et électromécaniques</th>
	    <th>Composants hydrauliques</th>
	    <th>Composants mécaniques</th>
	</tr>
	<tr>
	    <th>Plus de fonction</th>
	    <td>composant défectueux</td>
	    <td>composant défectueux<br />
		circuit coupé ou bouché</td>
	    <td>rupture<br />
	    blocage, grippage
	    </td>
	</tr>
	<tr>
	    <th>Pas de fonction</th>
	    <td>composant ne répondant pas à la sollicitation dont il est l'objet<br />
	    connexions débranchées<br />
	    fils desserrés
	</td>
	    <td>connexions / raccords débranchés</td>
	    <td></td>
	</tr>
	<tr>
	    <th>Fonction dégradée</th>
	    <td>dérive des caractéristiques</td>
	    <td>mauvaise étanchéité<br />
	        usure
	</td>
	    <td>désolidarisation<br />
	    jeu
	</td>
	</tr>
	<tr>
	    <th>Fonction intempestive</th>
	    <td>perturbations (parasites)</td>
	    <td>perturbations (coups de bélier)</td>
	    <td></td>
	</tr>
	</table>


	<h4>Les causes de défaillances</h4>
	<p>Évènements générateurs d'une dérive.</p>
	<p>La recherche des causes peut être facilité par l'utilisation de la <strong>méthode des 5M</strong> (<i>dite aussi <strong>diagramme Ishikawa</strong> en arête de poisson</i>) :</p>

	<ul>
		<li>Méthode</li>
		<li>Moyens</li>
		<li>Matériels</li>
		<li>Milieu</li>
		<li>Main-d'oeuvre</li>
	</ul>

	<img class="aligncenter" src="/assets/img/qlio/indus/diagramme_ishikawa.png" alt="Méthode des 5 M ou diagramme ishikawa" />
	
	<p>Il existe 4 types de causes amenant le mode de défaillance :</p>
	<ol>
	<li>Causes internes au matériel,</li>
	<li>Causes externes au matériel : matériel en amont,</li>
	<li>Causes externes dues à l'environnement, au milieu, à l'exploitation,</li>
	<li>Causes externes dues à la main d'œuvre.</li>
	</ol>
	
	<table class="table">
	<caption>Tableau des causes génériques de défaillance</caption>
	<tr>
	    <th>Cause de défaillances</th>
	    <th>Composants électriques et électromécaniques</th>
	    <th>Composants hydrauliques</th>
	    <th>Composants mécaniques</th>
	</tr>
	<tr>
	    <th>Causes internes matériel</th>
	    <td>vieillissement<br />
	       composant HS (mort subite)
	    </td>
	    <td>vieillissement<br />
	    composant HS (mort subite)<br />
	    colmatage<br />
	    fuites
	    </td>
	    <td>contraintes mécaniques<br />
	    fatigue mécanique<br />
	    états de surface
	    </td>
	</tr>
	<tr>
	    <th>Causes externes milieu exploitation</th>
	    <td>pollution (poussière, huile, eau)<br />
	    chocs<br />
	    vibrations<br />
	    échauffement local<br />
	    parasites<br />
	    perturbations électromagnétiques, etc.
	</td>
	<td>température ambiante<br />
	    pollution (poussières, huile, eau)<br />
	    vibrations<br />
	    échauffement local<br />
	    chocs, coups de bélier
	</td>
	    <td>température ambiante<br />
	    pollution (poussières, huile, eau)<br />
	    vibrations<br />
	    échauffement local<br />
	    chocs
	</td>
	</tr>
	<tr>
	    <th>Causes externes Main d'œuvre</th>
	    <td>montage<br />
	    réglages<br />
	    contrôle<br />
	    mise en oeuvre<br />
	    utilisation<br />
	    manque d'énergie
	</td>
	<td>montage<br />
	    réglages<br />
	    contrôle<br />
	    mise en oeuvre<br />
	    utilisation<br />
	    manque d'énergie
	</td>
	    <td>conception<br />
	    fabrication (pour les composants fabriqués)<br />
	    montage<br />
	    réglages<br />
	    contrôle<br />
	    mise en oeuvre<br />
	    utilisation
	</td>
	</tr>
	</table>
	
	
	
	<h4>Les effets</h4>
	<p>Il y a deux catégories d'effets :</p>
	<ul>
		<li>les effets sur le système : conséquences directes du dysfonctionnement sur l'ensemble du système</li>
		<li>les effets sur d'autres composants : ils subissent des défaillances secondaires</li>
	</ul>

	<h4>La détection</h4>
	<p>Moyen par lequel un dysfonctionnement est constaté.</p>
	<p>Dans cette colonne ne figurent que les faits constatables :</p>
	<ul> 
		<li>blocage</li>
		<li>rupture</li>
		<li>fumée</li>
		<li>bruit</li>
		<li>…</li>
	</ul>


<h3>Les critères</h3>
<p>Ce sont eux qui permettent une évaluation de la <strong>criticité</strong>.</p>
<p>Les résultats de ces évaluations sont indispensables pour une estimation ultérieure de l'efficacité des mesures correctives appliquées aux points faibles.</p>
<p>Chaque critère reçoit en générale un <strong>indice de 1 à 4</strong></p>
	
<p class="h4-like">Le critère D : aptitude à la détection</p>
<p>Il permet de quantifier la capacité d'une défaillance à être repérée.</p>

	<table class="table w300p">
		<caption>capacité d'une défaillance à être repérée</caption>
		<tr>
			<th class="w100p">Niveau</th>
			<th>Définitions</th>
		</tr>		
		<tr>
			<td>1</td>
			<td>Élémentaire</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Aisée</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Moyenne</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Délicate</td>
		</tr>
	</table>

<p class="h4-like">Le critère O : occurence</p>
	<p>Il indique le niveau de probabilité d'apparition d'une défaillance.</p>

	<table class="table w300p">
		<caption>Probabilité d'apparition de défaillance</caption>
		<tr>
			<th class="w100p">Niveau</th>
			<th>Définitions</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Faible</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Possible</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Certaine</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Forte</td>
		</tr>
	</table>

	<p class="h4-like">Le critère S : sévérité / gravité</p>
	<p>Il évalue le risque pour l'utilisateur ainsi que pour le système.</p>

	<table class="table w300p">
		<caption>Risque utilisateur ou système</caption>
		<tr>
			<th class="w100p">Niveau</th>
			<th>Définitions</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Mineure</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Moyenne</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Importante</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Grave</td>
		</tr>
	</table>

	<p class="h4-like">Le critère C : Criticité</p>
	<p><strong>C = D x O x S</strong></p>
	<p><i>(Criticité = Détection x Occurrence x Sévérité)</i></p>

	<table class="table w300p">
		<caption>Criticité</caption>
		<tr>
			<th class="w100p">Niveau</th>
			<th>Définitions</th>
		</tr>
		<tr>
			<td>C<9</td>
			<td>Faible</td>
		</tr>
		<tr>
			<td>9< C <25</td>
			<td>Acceptable</td>
		</tr>
		<tr>
			<td>C>25</td>
			<td>Forte</td>
		</tr>
		<tr>
			<td>S=4</td>
			<td>Dangeureuse</td>
		</tr>
	</table>


	<h2>Synthèse et exploitation d'une AMDEC</h2>
	
	<p>La finalité de l'analyse AMDEC, après la mise en évidence des défaillances critiques, est de
	définir des actions de nature à traiter le problème identifié.</p>
	<p>Les actions sont de 3 types :</p>
	<ol>
	<li><strong>Actions préventives</strong> : on agit pour prévenir la défaillance avant qu'elle ne se produise, pour
	l'empêcher de se produire. Ces actions sont planifiées. La période d'application d'une action résulte de l'évaluation de la fréquence.</li>
	<li><strong>Actions correctives</strong> : lorsque le problème n'est pas considéré comme critique, on agit au moment
	où il se présente. L'action doit alors être la plus courte possible pour une remise aux normes rapide.</li>
	<li><strong>Actions amélioratives</strong> : il s'agit en général de modifications de procédé ou de modifications
	technologiques du moyen de production destinées à faire disparaître totalement le problème. Le coût de ce type d'action n'est pas négligeable
	et on le traite comme un investissement.</li>
	</ol>
	<p>Les actions, pour être efficaces, doivent faire l'objet d'un suivi :</p>
	<ul>
	<li>plan d'action</li>
	<li>désignation d'un responsable de l'action</li>
	<li>détermination d'un délai</li>
	<li>détermination d'un budget</li>
	<li>révision de l'évaluation après mise en place de l'action et retours des résultats</li>
	</ul>
	
	
	<p>Il est indispensable de connaître parfaitement le système à étudier.</p>
	<p>Seule un analyse fonctionnelle approfondie et détaillée permet la maîtrise des détails de l'AMDEC.</p>
	<p>La matrice d'analyse doit toujours être exploitée horizontalement.</p>
	<p>La synthèse et l'exploitation d'une AMDEC se font toujours sur un document distinct des matrices d'analyse appelé <strong>fiche bilan</strong>.</p>
	<p>Ce bilan permet la mise en évidence des caractéristiques concernant les critères.</p>


	<table class="table w900p">
	<caption>AMDEC - Fiche bilan</caption>
	<tr>
		<th class="w100p" colspan="2">Date</th>
		<th colspan="2"></th>
		<th colspan="2">Seuils de critère</th>
		<th>Dépassement</th>
	</tr>
	<tr>
		<td class="w100p" colspan="2" rowspan="2">03/10/2014/</td>
		<td colspan="2" rowspan="2">&nbsp;</td>
		<td>Critère : S</td>
		<td>Seuil : 3</td>
		<td class="center">27%</td>
	</tr>
	<tr>
		<td>Critère</td>
		<td>Seuil</td>
		<td class="center">%</td>
	</tr>
	<tr>
		<td colspan="7">Observation :
			<p><i>Situation globalement convenable<br />
			mais deux points méritent reprise dans<br />
			les meilleurs délais</i></p>
		</td>
	</tr>
	<tr>
		<th colspan="4">Mesures proposées</td>
		<th colspan="2">Responsable</th>
		<th>Date</th>
	</tr>
	<tr>
		<td class="w20p">1</td>
		<td colspan="3">Modifier fixations frein du câble tracteur</td>
		<td colspan="2">M. Jack ADIT</td>
		<td>22/02/2015</td>
	</tr>
	<tr>
		<td>2</td>
		<td colspan="3">Poulie à dispositif anti-déraillant / câble principal</td>
		<td colspan="2">M. Alain TERIEUR</td>
		<td>01/04/2015</td>
	</tr>
	<tr>
		<td>3</td>
		<td colspan="3"></td>
		<td colspan="2"></td>
		<td></td>
	</tr>
	<tr>
		<td>4</td>
		<td colspan="3"></td>
		<td colspan="2"></td>
		<td></td>
	</tr>
	<tr>
		<td>5</td>
		<td colspan="3">&nbsp;</td>
		<td colspan="2"></td>
		<td></td>
	</tr>
	</table>


	<h3>Conclusion</h3>
	<p>L'AMDEC est un outil très efficace pour :</p>
	<ul>
		<li>la recherche de l'amélioration de la fiabilité</li>
		<li>la sureté de fonctionnement des systèmes</li>
	</ul>
	
	<p>Une analyse fonctionnelle, précise et bien renseignée doit précéder l'AMDEC pour pouvoir mettre en évidence les points faibles du système.</p>
	
	<p>Afin d'obtenir une efficacité maximale dans l'amélioration des systèmes il est souhaitable de compléter cette analyse par une autre : </p>
	<p><strong><a href="/cours/qlio/indus/2">l'Arbre de Défaillance</a></strong></p>

	<p>&nbsp;</p>
	<p>&nbsp;</p>


