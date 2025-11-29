<?php
/**
 * BUT : Introduction à la cinématique
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
?>


<h1>Cinématique du point matériel</h1>

	<p class="h2-like">Introduction</p>
	<p>La plupart des objets étudiés par les physiciens sont en mouvement : depuis les particules
élémentaires telles que les électrons, les protons et les neutrons qui constituent les atomes,
jusqu’aux galaxies, en passant par les objets usuels et les corps célestes.</p>

	<p>La branche de la physique qui étudie les mouvements s’appelle la <strong>mécanique</strong>.</p>

	<p>La <strong>cinématique</strong> est la partie de la mécanique qui permet d’étudier et de décrire les
mouvements des corps, d’un point de vue purement mathématique, indépendamment des causes qui les produisent.</p>
	
	<p>La <strong>dynamique</strong>, en revanche, s’intéresse à ces causes : les forces. Elle relie les forces au mouvement.</p>

    <p>Pour résumer, on peut noter :</p>
    <pre>Mécanique = Cinématique + Dynamique</pre>

<p>L’analyse des grandeurs cinématiques (position, vitesse et accélération) permet de déterminer la géométrie et les dimensions des composants d’un mécanisme.</p>

<p>La cinématique, combinée à l’étude des actions mécaniques, permet l’application du principe fondamental de la dynamique (non étudié ici).</p>

<p><u>Exemples</u> :</p>
    <ul>
    <li>Usinage : trajectoire d’un outil, vitesse d’avance …</li>
    <li>Dimensionnement d’une pompe : cylindrée, débit …</li>
    </ul>

<h2>Limites de ce cours</h2>
<h3>Le point matériel ou particule.</h3>
    <p>Un point matériel est un modèle commode pour représenter un corps physique réel. Ce modèle est valable si les dimensions du corps physique sont
faibles par rapport à la distance d’observation (de celui qui observe le mouvement).</p>

    <p>Par exemple, la navette spatiale peut-être assimilée à un point matériel pour un observateur terrestre mais pas pour
son commandant de bord. En effet pour ce dernier, la navette a des dimensions spatiales, elle peut tourner sur elle-même etc…</p>


<h3>Le solide indéformable.</h3>
    <p>Nous allons supposer dans ce cours que les solides, corps physiques massiques constitués d’atomes et de molécules, sont indéformables.</p>
    <p>Dans ce cas, tous les points du solides garderont des distances respectives inchangées au cours du temps.</p>
    <p>Il s’agit d’un modèle idéalisé, qui est très pertinent dans de nombreux cas.</p>
    <p>Cependant, les ingénieurs et les scientifiques savent que les matériaux, même solide, se déforment et il faut en tenir compte, notamment dans la
construction des infrastructures.</p>

<h2>Historique</h2>

<h3>XVIIème Siècle</h3>
<ul>
<li>Galilée, introduction de la notion de vitesse et du mouvement uniformément accéléré en termes précis. Utilisation du langage mathématiques pour décrire la nature.</li>
<li>1687 : Newton publie « Les principes mathématiques de la philosophie naturelle », fondement de la mécanique classique, notions de force, d’accélération, de gravitation etc…</li>
<li>Newton formalisa plus rigoureusement l’idée d’un temps absolu , dans lequel il fonde sa mécanique et où le temps devient une variable mathématique notée t.</li>
<li>Le postulat que fait Newton est de réduire le temps à une variable scalaire (à une dimension donc) qui croît continûment, ceci indépendamment de tout observateur et de tout phénomène.</li>
<li>Cette variable permet alors d’ordonner les événements observés pour produire une chronologie.</li>
<li>La chronologie, dans ce contexte, devient alors absolue puisque le temps s'écoule de la même manière pour tout observateur.</li>
<li>Pour les mêmes raisons, la notion de simultanéité est absolue.</li>
<li>La course du temps est en général représentée par un axe orienté qui indique le futur.</li>
<li>Cet axe est linéaire et non circulaire pour respecter un principe fondamental de physique qui, jusqu’ici, n’a jamais été infirmé : le Principe de Causalité.</li>
</ul>
<div class="notice remarque"><u>Principe de Causalité</u>
    <p>La cause est, pour tout observateur, antérieure à l’effet qu’elle produit.</p>
    <p>De manière plus générale, la chronologie de deux événements reliés causalement est toujours la même, quel que soit l’observateur.</p>
</div>
</ul>
<h3>Début du XXème siècle</h3>
<ul>
<li>1905 : Einstein publie la théorie de la relativité restreinte (sans oublier les travaux précurseurs de
Poincaré et Lorentz). C’est la remise en cause de la mécanique de Newton (la vitesse de la lumière
est constante, le temps n’est plus absolu, concept d’espace-temps…).</li>
<li>1916 : Einstein publie la théorie de la relativité générale. Les objets massifs déforment l’espace-temps,
explication géométrique de la gravité.</li>
</ul>
<h3>De 1900 à 1930</h3>
<ul><li>Élaboration de la mécanique quantique (Shrödinger, Heisenberg, Bohr, De Broglie), remise en cause
de la notion de vitesse et de position, description des particules en termes de probabilité de
présence.</li></ul>
<h3>De 1930 à 1950</h3>
<ul><li>Élaboration d’une mécanique quantique et relativiste (Dirac, Pauli, Feynman, Schwinger, Tomonaga).</li></ul>



<h2>Définitions</h2>
<h3>Repère d’espace</h3>
<p>On appelle repère d’espace un ensemble de points dont les distances sont invariables au cours du temps.</p>
<p>Un tel ensemble est aussi appelé un solide de référence. Par exemple une table, un bateau, la terre peuvent servir de repère d’espace.</p>

<h3>Système de coordonnées</h3>
<p>On exprime la position d’un objet par rapport à un système de coordonnées qui est constitué d’un
ensemble de trois axes dont chacun correspond à une direction de l’espace et qui est considéré
comme fixe par rapport à un repère d’espace.</p>
 <p>On dit que le système de coordonnées est lié au repère.</p>
 <p>Dans la suite, nous allons utiliser les systèmes de coordonnées suivants :<p>
<ul>
<li>Cartésien</li>
<li>Polaire (cylindrique à 2D)</li>
<li>Cylindrique</li>
<li>Sphérique</li>
</ul>

<h3>Référentiel</h3>
<p>Un ensemble formé d’un repère d’espace et d’un repère de temps (un ensemble d’horloges
synchronisées) constitue un référentiel, c’est–à-dire une référence spatiale et une référence
temporelle, toutes deux indispensables dans l’étude de tout mouvement.</p>

<p class="notice remarque">Référentiel = Repère d’espace + Repère de temps</p>

<p>Observons un Individu (A) immobile sur un escalator.</p>
<img src="/assets/img/qlio/cin/repere.png" alt="repère" />

<p>Le repère ℜ<sub>0</sub> est lié au sol.</p>
<p>L’individu A est mobile dans le repère ℜ<sub>0</sub>, mais immobile par rapport à l’escalator.</p>
    
<p>L’étude de tout mouvement implique deux solides en présence :</p>
<ul>
<li>Le solide (S) dont on étudie le mouvement.</li>
<li>Le solide (S0) par rapport auquel on définit le mouvement.</li>
</ul>
<div class="notice info">
    <p>Le solide (S<sub>0</sub>) est appelé <strong>solide de référence</strong>, auquel on associe le <strong>repère de référence</strong> ℜ<sub>0</sub>.</p>
    <p>Le mouvement du solide (S) par rapport au solide (S<sub>0</sub>) est noté <strong>Mvt S/S<sub>0</sub></strong>.</p>
</div>
<p class="notice remarque">Quelle que soit l’étude cinématique à réaliser, on a toujours besoin de la situer dans le temps.</p>
<p>On appelle instant t ou date t le temps écoulé depuis une origine des temps t<sub>0</sub>=0, choisie arbitrairement.</p>
<p>L’unité de mesure du temps (système ISO) est la seconde, notée s.</p>
<p>La grandeur Δt = t<sub>2</sub>-t<sub>1</sub> est appelée durée entre les deux instants t<sub>1</sub> et t<sub>2</sub>.</p>


<h3>Trajectoire</h3>
<p>On appelle trajectoire du point (M) d’un solide (S) l’ensemble des positions occupées successivement par ce point, au cours du temps, et au cours de son déplacement par rapport à
un référentiel donné.</p>
<p>Une trajectoire est donc représentée par une courbe (C).</p>
<p>Cette trajectoire sera notée : TM∈S/R<sub>0</sub> : trajectoire du point M appartenant à S, par rapport au repère ℜ<sub>0</sub>.</p>

<p><u>Remarque</u> : Il est, parfois, plus judicieux de remplacer le terme « appartenant à » par
« accroché à » pour avoir une meilleure visualisation de la trajectoire…</p>

<p>&nbsp;</p>
<p>&nbsp;</p>


