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
$sNavigation = navigation('r', '410osc', '411mtd', '410mtd');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.OSC10 : Prévision et planification de la distribution.</h1>

<?php
$comp = competence('t1_osc');
echo $comp;

$sae = sae('4osc23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour objectif d’aborder les outils et méthodes de la gestion de la demande et de la gestion de la distribution
avec notamment :</p>
<ul>
    <li>L’utilisation de méthodes avancées de prévisions de la demande.</li>
    <li>Critères de choix d’une méthode de prévisions.</li>
    <li>Mesure des erreurs et incertitude.</li>
    <li>Lien entre Prévisions -MRP-Planification-Distribution.</li>
    <li>Méthode Distribution Requirement Planning (DRP).</li>
</ul>

<h2>Apprentissage critique ciblé :</h2>
<?php
$ac = ac('2503');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>DRP – Prévisions de ventes qualitatives et quantitatives.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 9 heures de TP</p>


