<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	22:36::00
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
$sNavigation = navigation('r', '607mtd', '608mtd', '606mtd');
$tdm = tdm('r600mtd');
echo $tdm;
?>



<p>&nbsp;</p>

    <h1>Ressource R6.07 : Pilotage de la production par les contraintes.</h1>

<?php
$comp = competence('3');
echo $comp;

$sae = sae('6mtd1');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour objectif de piloter une production en présence de ressources contraintes :</p>
<ul>
    <li>Identification des contraintes.</li>
    <li>Méthodes Optimized Production Technology (OPT) et Theory Of Constraints (TOC).</li>
    <li>Nivellement des charges.</li>
    <li>Positionnement des stocks tampons.</li>
    <li>Solveur Excel.</li>
    <li>Liens avec la recherche opérationnelle.</li>
</ul>

<h2>Préconisations pédagogiques</h2>

<p>La ressource R6.21 doit intervenir après la ressource R6.03.</p>

<h2>Prérequis</h2>

<?php
$res = ressource('603');
echo $res;

$ac = ac('6mtd1');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Piloter par les contraintes – Modélisation mathématique des contraintes.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 13 heures dont 6 heures de TP</p>


