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
$sNavigation = navigation('sae', '300osc', 'fin', '303osc');
$tdm = tdm('sae300');
echo $tdm;
?>

    
        
        <p></p>
        <h1><?php echo sae('300'); ?></h1>

        <?php
        $comp = competence('t2_osc');
        echo $comp;
        ?>

        <h2>Objectifs et problématique professionnelle :</h2>

        <p>Au semestre 3, la démarche portfolio consistera en un point étape intermédiaire qui permettra à l’étudiant de se positionner,
            sans être évalué, dans le processus d’acquisition des niveaux de compétences de la seconde année du B.U.T. et relativement
            au parcours suivi.</p>

        <h2>Descriptif générique :</h2>
        <p>L’équipe pédagogique devra accompagner l’étudiant dans la compréhension et l’appropriation effectives du référentiel de compétences
            et de ses éléments constitutifs tels que les composantes essentielles en tant qu’elles constituent des critères qualité.
            Seront également exposées les différentes possibilités de démonstration et d’évaluation de l’acquisition des niveaux de compétences
            ciblés en deuxième année par la mobilisation notamment d’éléments de preuve issus de toutes les SAÉ. L’enjeu est
            de permettre à l’étudiant d’engager une démarche d’auto-positionnement et d’auto-évaluation tout en intégrant la spécificité du
            parcours suivi.</p>

        <?php
        $res = ressource('sae300osc');
        echo $res;
        ?>

        <h2>Volume horaire</h2>
        <p>Volume horaire à définir localement par chaque IUT</p>


        
    