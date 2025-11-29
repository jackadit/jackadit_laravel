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
$sNavigation = navigation('sae', '502osc', '503osc', '500mtd');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('502osc'); ?></h1>

<?php
$comp = competence('t1_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Définir et structurer un réseau d’approvisionnement et de distribution à partir d’une stratégie industrielle.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’une stratégie d’approvisionnement et de distribution, les étudiants devront proposer une architecture logistique en
incluant le choix des partenaires et les relations qui les lient (contrat, partenariat, transport, etc.).</p>

    <?php
    $ac = ac('sae502osc');
    echo $ac;
    $res = ressource('sae502osc');
    echo $res;
    ?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


