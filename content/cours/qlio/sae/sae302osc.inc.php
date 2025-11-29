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
$sNavigation = navigation('sae', '302osc', '303osc', '301');
$tdm = tdm('sae300');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('302osc'); ?></h1>

<?php
$comp = competence('t1_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Choisir et dimensionner les solutions technologiques de stockage physique.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’une situation industrielle qui décrit le besoin du client, l’étudiant devra choisir le matériel le plus adapté. La situation
    s’attachera à inclure une diversité dans les matériels nécessaires.</p>
<p>L’étudiant devra également définir les stratégies de stockage.</p>
    <?php
    $ac = ac('sae302osc');
    echo $ac;
    $res = ressource('sae302osc');
    echo $res;
    ?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


