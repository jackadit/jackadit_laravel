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
$sNavigation=navigation('sysprod', '2');
?>




<h1>GRAFCET</h1>

	<h2>Histoire</h2>

	<p>Le <strong>Grafcet</strong> (GRAphe Fonctionnel de Commande des Etapes et Transitions) est un outil de description graphique des différents comportements d'un automatisme séquentiel, c'est-à-dire dont la décomposition en étapes est possible.</p>
	<p>Il était le résultat du travail bénévole d'une commission réunissant l'<strong>AFCET</strong> (Association Française pour la Cybernétique Economique et Technique), l'<strong>ADEPA</strong> (agence pour le développement de la Productique Appliquée à l'industrie), des industriles et des universitaires. Cette commission, créée le 26 juin 1975, a défini les bases du grafcet dans son raport final achevé en avril 1977.</p>
	<p>Le Grafcet est décrit en 1982 par la norme NF (UTE) C03-190 et remplacé par la norme NF EN 60848 en 2002.</p>
	<p>Le Grafcet permet de représenter l'évolution d'un cycle automatisé comprenant des étapes et des transitions.</p>

	<h2> Les différents GRAFCET</h2>
	
	<p>Il y a deux types de représentation :</p>
	<li>La représentation fonctionnelle (ou de niveau 1) donne une interprétation de la solution retenue pour un problème posé, en précisant la coordination des tâches opératives. Elle permet une compréhension globale du système.</li>
	<li>La représentation technologique (ou de niveau 2) donne une interprétation en tenant compte des choix technologique relatifs à la partie de commande de l'automatisme ; le type et la désignation des appareillages (par exemple : S1, KM, Ka …).</li>
	</p>
	
	<h2>La représentation</h2>

	<p>Sa représentation est faite à partir d'éléments graphique de base qui comprennent :</p>

	<h3>Les étapes</h3>

		<dl>
		<dt><u>Étape initiale</u> <img src="/assets/img/qlio/sysprod/etape_initiale.png" alt="Étape initiale" /></dt>
		<dd>L'étape initiale caractérise l'état du système au début du fonctionnement.</dd>
		<dt><u>Étape</u> <img src="/assets/img/qlio/sysprod/etape.png" alt="Étape" /></dt>
		<dd>Une étape correspond à un comportement stable du système. Les étapes sont numérotées dans l'ordre croissant. A chaque étapes on peut associé une ou plusieurs actions.</dd>
		</dl>

		<h3>Les transitions et les réceptivités</h3>
		<dl>
		<dt><u>Transition</u> <img src="/assets/img/qlio/sysprod/transition.png" alt="Transition" /></dt>
		<dd>Les transitions indiquent les possibilités d'évolutions du cycle, à chaque transition est associée à une réceptivité.</dd>
		<dt><u>Réceptivité</u> <img src="/assets/img/qlio/sysprod/receptivite.png" alt="Réceptivité" /></dt>
		<dd>La réceptivité est la condition logique pour l'évolution du grafcet. Si la réceptivité est vrai (=1) le cycle peut évoluer. Les réceptivités proviennent du pupitre de commande, des fins de courses ou d'information provenant de la partie opérative.</dd>
		</dl>
		
		<h3>Les liaisons orientées</h3>
		<dl>
		<dt><u>Liaisons orientés</u> <img src="/assets/img/qlio/sysprod/liaison_oriente.png" alt="Liaisons orientés" /></dt>
		<dd>Le Grafcet se lit de haut en bas, autrement il est nécessaire d'indiquer son évolution avec des liaisons orientées constituées de flèche indiquant le sens.</dd>
		</dl>

	<h3>Quelques définitions</h3>
	<dl>
		<dt><u>Action</u> <img src="/assets/img/qlio/sysprod/action.png" alt="Action" /></dt>
		<dd>L'action est associée à une étape, elle est active lorsque le cycle est arrivé sur l'étape. Il est possible de définir les actions conditionnelles, temporisé, ... (électrovanne, enclenchement d'un contacteur...).</dd>
		<dt><u>Étape active</u> <img src="/assets/img/qlio/sysprod/etape_active.png" alt="Étape active" /></dt>
		<dd>Le point indique que l'étape est active.</dd>
	</dl>


	<div class="notice exemple">
	<p><u>Exemple</u> : Fonctionnement d'une fraiseuse</p>
	<p>On appuie sur le bouton marche de la fraiseuse.</li>
		<li>La fraise descend.</li>
		<li>Une fois la position basse atteinte le fraisage s'effectue.</li>
		<li>On appuie sur le bouton arrêt.</li>
		<li>Le fraisage s'arrête et la fraise remonte.</li>
		<li>Une fois le fin de course haut atteint la fraiseuse est en position initiale.</p>

	<p>Quelle sera la représentation simple pour illustrer et comprendre le fonctionnement ?</p>

	<img src="/assets/img/qlio/sysprod/grafcet.png" alt="Grafcet" />
	</div>

	<h2>Règles du GRAFCET</h2>

	<h3>Situation initiale</h3>
	<p>Un grafcet commence par une situation initiale, représentée par un double carré, qui caractérise le comportement initial de la partie commande (PC) vis à vis de la partie opérative (PO) et correspondant à l'ensemble des étapes actives autorisant le début du fonctionnement.</p>

	<div class="notice info">Conséquences : 
		<ul>
			<li>La situation initiale correspond souvent à la position de référence de la PO.</li>
			<li>On n'associe pas en général d'action aux étapes iitiales.</li>
		</ul>
	</div>
	
	<h3>Franchissement d'une transition</h3>
	<p>Une transition est soit validée ou non validée ; elle est validée lorsque toutes l'étape immédiatement précédente est activée. Lorsque la transition est valide et que la réceptivité associée est vraie elle est alors obligatoirement franchie.</p>

	<div class="notice info">Illustration : 
	<img src="/assets/img/qlio/sysprod/transition_valide_franchi.png" alt="transition validée - franchie" />
	</div>
	
	<h3>Évolution des étapes actives</h3>
	<p>Le franchissement d'une transition entraîne l'activation des étapes immédiatement suivante et la désactivation des étapes immédiatement précédentes.</p>
	
	<h3>Transitions simultanées</h3>
	<p>Plusieurs transitions simultanément franchissables sont simultanément franchies.</p>

	<h3>Activation et désactivation simultanées</h3>
	<p>Si au cours du fonctionnement, une même étape doit être activée et désactivée simultanément, elle reste active.</p>

	<div class="notice info">
		<p>La durée de franchissement d'une transition ne peut jamais être rigoureusement nulle, même si elle peut être rendue aussi petite que l'on veut. Il en est de même pour la durée d'activation d'une étape.</p>
	</div>

	<h2>Structure de base</h2>

	<p>Nous pouvons avoir dans un cycle machine complet avec des séquences simultanées, ou des choix de séquence.</p>

	<h3>Divergence et convergence en ET</h3>
	<img src="/assets/img/qlio/sysprod/divergence_convergence_ET.png" alt="divergence et convergence en ET" />


	<p class="h4-like">Divergence en ET : </p>
	<p>Représentation par 2 trait identique et parallèle ; lorsque la transition A est franchie les étapes 21 et 23 sont actives.</p>
	
	<p class="h4-like">Convergence en ET : </p>
	<p>La transition D sera active lorsque les étapes 22 et 24 seront actives, si la réceptivité associé à la transition D est vraie alors elle est franchie et l'étape 25 devient active et désactive les étapes 22 et 24.</p>
	
	<p>Le nombre de branche peut être supérieur à 2, après une divergence en ET on trouve une convergence en ET.</p>


	<h3>Divergence et convergence en OU (aiguillage)</h3>
	<img src="/assets/img/qlio/sysprod/divergence_convergence_OU.png" alt="divergence et convergence en OU (aiguillage)" />

	<p class="h4-like">Divergence en OU :</p>
	<p>L'évolution du système se dirige vers une des branches en fonction des réceptivités A1, B1 et de leurs transitions associées.</p>

	<p class="h4-like">Convergence en OU :</p>
	<p>Après une divergence en OU on trouve une convergence en OU vers une étape commune dans l'exemple l'étape 35.</p>

	<p>Le nombre de branche peut être supérieur à 2, A1 et B1 ne peuveut pas être vrais simultanément.</p>

	<h3>Saut d'étape :</h3>
	<img src="/assets/img/qlio/sysprod/saut_etape.png" alt="Saut d'étape" />

	<p>Le saut d'étape permet de sauter une ou plusieurs étapes en fonction de la progression d'un cycle.</p>


	<p>Sur le grafcet ci-dessus après l'étape initiale 0 un choix entre 2 transitions A et B s'effectue.</p>
	<p>La transition A associé à sa réceptivité nous permet de continuer le cycle sur l'étape 1.</p>
	<p>La transition B associé à sa réceptivité nous permet de passer à l'étape 3, les étapes 1 et 2 sont ignorées lors du cycle.</p>

	<h3>Reprise d'étape :</h3>
	<img src="/assets/img/qlio/sysprod/reprise_etape.png" alt="Reprise d'étape" />
	
	<p>La reprise d'étape permet de ne pas continuer le cycle mais de reprendre une séquence précédente lorsque les actions à réaliser sont répétitives.</p>


	<p>Sur le grafcet ci-dessus après l'étape 2 un choix entre 2 transitions A et B s'effectue.</p>

	<p>La transition A associé à sa réceptivité nous permet de reprendre le cycle sur l'étape 1.</p>
	<p>La transition B associé à sa réceptivité nous permet de passer à l'étape 3.</p>
	
	<!--
	<h3>Réponse</h3>
	<img src="/assets/img/qlio/sysprod/reponse_ex1_gemma.png" alt="gemma de l'exercice 1" />
	-->




