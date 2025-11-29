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
$sNavigation = navigation('sae', '602osc', '6oscstage', '600mtd');
$tdm = tdm('sae600');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('602osc'); ?></h1>

<?php
$comp = competence('t1_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Organiser une logistique de retours de produits.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’une production industrielle, l’étudiant devra identifier des solutions d’organisation des retours de produits en termes de flux en terme de valorisation tout au long du cycle de vie (réparation, mise à niveau, déconstruction, recyclage et/ou destruction).</p>

<?php
$ac = ac('sae602osc');
echo $ac;
$res = ressource('sae602osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


