<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:38::00
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
$sNavigation = navigation('r', '409', '410mtd', '408');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.09 : Modélisation pour amélioration du système de production.</h1>

<?php
$comp = competence('4');
echo $comp;

$sae = sae('4mtd13');
echo $sae;
?>


<h2>Descriptif</h2>

<p>Améliorer un système de production par modélisation et simulation :</p>
<ul>
    <li>Modéliser un système de production.</li>
    <li>Collecter les données qui permettent de renseigner le modèle.</li>
    <li>Utiliser ce modèle pour tester différentes configurations afin de résoudre un problème de flux, de dimensionnement ou d’optimisation.</li>
    <li>Tirer des conclusions et proposer des solutions.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>Il peut être intéressant d’utiliser des outils variés tels que tableur et logiciel de simulation de flux.</p>

<?php
$ac = ac('4mtd4');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Modélisation – Collecte de données – Simulation – Amélioration de flux – Dimensionnement.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 9 heures de TP</p>


