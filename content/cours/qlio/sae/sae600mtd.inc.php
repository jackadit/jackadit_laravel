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
$sNavigation = navigation('sae', '600mtd', '602osc', '6mtdstage');
$tdm = tdm('sae600');
echo $tdm;
?>

    
        
        <p></p>

        <h1><?php echo sae('600mtd'); ?></h1>

        <?php
        $comp = competence('t2_mtd');
        echo $comp;
        ?>

        <h2>Objectifs et problématique professionnelle :</h2>

        <p>Au semestre 6, la démarche portfolio permettra d’évaluer l’étudiant dans son processus d’acquisition des niveaux de compétences
            de la troisième année du B.U.T., et dans sa capacité à en faire la démonstration par la mobilisation d’éléments de preuve
            argumentés et sélectionnés. L’étudiant devra donc engager une posture réflexive et de distanciation critique en cohérence avec
            le parcours suivi et le degré de complexité des niveaux de compétences ciblés, tout en s’appuyant sur l’ensemble des mises
            en situation proposées dans le cadre des SAÉ de troisième année.</p>

        <h2>Descriptif générique :</h2>
        <p>Prenant n’importe quelle forme, littérale, analogique ou numérique, la démarche portfolio pourra être menée dans le cadre
            d’ateliers au cours desquels l’étudiant retracera la trajectoire individuelle qui a été la sienne durant la troisième année du B.U.T.
            au prisme du référentiel de compétences et du parcours suivi, tout en adoptant une posture propice à une analyse distanciée
            et intégrative de l’ensemble des SAÉ.</p>


        <?php
        $res = ressource('sae600mtd');
        echo $res;
        ?>

        <h2>Volume horaire</h2>
        <p>Volume horaire à définir localement par chaque IUT</p>


        
    