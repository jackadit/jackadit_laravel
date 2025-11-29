<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
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
$sNavigation = navigation('sae', '100', '101', '1');
$tdm = tdm('sae100');
echo $tdm;
?>

    
        
        <p></p>
        <h1><?php echo sae('100'); ?></h1>
        <?php
        $comp = competence('234');
        echo $comp;
        ?>

        <h2>Objectifs et problématique professionnelle :</h2>
        <p>Au semestre 1, la démarche portfolio consistera en un point étape intermédiaire qui permettra à l’étudiant de se positionner,
            sans être évalué, dans le processus d’acquisition du niveau 1 des compétences de la première année du B.U.T.</p>

        <h2>Descriptif générique :</h2>
        <p>L’équipe pédagogique devra accompagner l’étudiant dans la compréhension et l’appropriation effectives du référentiel de compétences
            et de ses éléments constitutifs tels que les composantes essentielles en tant qu’elles constituent des critères qualité.</p>
        <p>Seront également exposées les différentes possibilités de démonstration et d’évaluation de l’acquisition du niveau des compétences
            ciblé en première année par la mobilisation notamment d’éléments de preuve issus de toutes les SAÉ. L’enjeu est de
            permettre à l’étudiant d’engager une démarche d’auto-positionnement et d’auto-évaluation.</p>

        <?php
        $res = ressource('sae100');
        echo $res;
        ?>

        <h2>Volume horaire</h2>
        <p>Volume horaire à définir localement par chaque IUT</p>

        
    