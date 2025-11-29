<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		19/03/23 	23:13::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage SAÉ
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('sae', '6oscstage', '6mtdportfolio', '6mtdstage');
$tdm = tdm('sae600');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>STAGE : stage.</h1>

<?php
$comp = competence('osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>Piloter un projet en entreprise.</p>

<?php
$ac = ac('6oscstage');
echo $ac;

$res = ressource('6oscstage');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>


