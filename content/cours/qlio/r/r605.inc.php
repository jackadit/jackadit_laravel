<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	22:32::00
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
$sNavigation = navigation('r', '605', '606', '604');
$tdm = tdm('r600');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R6.05 : Amélioration des systèmes d’information.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('6mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour objectif d’utiliser les outils méthodologiques de conception et représentation des systèmes, des processus
et des flux à des fins d’optimisation de flux.</p>
<ul>
    <li>Comprendre en quoi la modélisation est utile tout au long du cycle de vie du système :
        <ul>
            <li>Intérêt de suivre la vie du système.</li>
            <li>Intérêt opérationnel (à visée d’optimisation).</li>
            <li>Identification des goulots.</li>
        </ul>
    </li>
    <li>Optimiser un flux d’information :
        <ul>
            <li>À partir de la production de la ressource R5.05, une situation d’optimisation d’un système sera proposée.</li>
        </ul>
    </li>
    <li>Appliquer sur une étude de cas la modélisation:
        <ul>
            <li>Utiliser une méthode d’optimisation (par exemple DMAIC ou PDCA).</li>
        </ul>
    </li>
</ul>

<?php
$ac = ac('6mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Modélisation – Représentation des systèmes – Optimisation.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 7 heures dont 3 heures de TP</p>


