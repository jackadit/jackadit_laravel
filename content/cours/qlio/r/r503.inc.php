<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	00:41::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Classes
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('r', '503', '504', '502');
$tdm = tdm('r500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.03 : Fondamentaux de la Recherche Opérationnelle.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('5mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter les bases de la recherche opérationnelle :</p>
<ul>
    <li>Introduction à la théorie des graphes (représentation d’un graphe, graphe non orienté, graphe hamiltonien/eulérien,
graphe orienté, chemin, circuit, ...).</li>
    <li>Recherche du chemin de longueur minimale/maximale (résolution en utilisant par exemple les algorithmes de Ford,
Bellman et Dijsktra).</li>
    <li>Optimisation linéaire (modélisation d’un problème d’optimisation par un programme linéaire, méthode de résolution graphique,
méthode de résolution par le simplexe).</li>
</ul>

<?php
$ac = ac('5mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Graphe non orienté – Graphe orienté – Chemin de longueur optimale – Problème d’optimisation – Programme linéaire –
Méthode graphique – Méthode du simplexe.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


