<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		02/11/22 	00:31::00
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
$sNavigation = navigation('sae', '4oscstage', '400osc', '403osc');
$tdm = tdm('sae400');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('stage'); ?></h1>

<?php
$comp = competence('t2_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>Mettre en oeuvre une démarche d’amélioration en entreprise.</p>

<?php
$res = ac('osc');
echo $res;

$res = ressource('4osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


