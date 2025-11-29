<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	20:34::00
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
$sNavigation = navigation('r', '303', '304', '302');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.03 :  Mathématiques.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('mtd3');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but de renforcer les bases de mathématiques :</p>
<ul>
    <li>Dérivation.</li>
    <li>Fonctions usuelles (polynômes, exponentielle, logarithme).</li>
    <li>Primitives et intégration.</li>
</ul>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Étude de fonctions – Dérivée – Intégrale.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


