<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	21:36::00
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
$sNavigation = navigation('r', '602osc', '603osc', '601osc');
$tdm = tdm('r600osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R6.02 :  Expression Communication.</h1>

<?php
$comp = competence('t2_osc');
echo $comp;

$sae = sae('6osc');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Savoir interagir dans le cadre professionnel en adoptant une posture adaptée (niveau 3).</p>
<p>Développer ses habiletés relationnelles en contexte de communication au travail :</p>
<ul>
    <li>Recherche de solutions collectives.</li>
    <li>Gestion de conflits.</li>
    <li>Contribution au pilotage d’unité.</li>
</ul>

<?php
$ac = ac('6osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Design thinking – Collaboration – Communication en milieu de travail.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 7 heures dont 3 heures de TP</p>


