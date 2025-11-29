<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		19/03/23 	23:14::00
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
$sNavigation = navigation('sae', '6mtdstage', '600mtd', '602mtd');
$tdm = tdm('sae600');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('stage'); ?></h1>

<?php
$comp = competence('t2_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>Piloter un projet en entreprise.</p>

<?php
$ac = ac('6mtdstage');
echo $ac;
$res = ressource('6mtdstage');
echo $res;
?>

<h2>Volume horaire</h2>


