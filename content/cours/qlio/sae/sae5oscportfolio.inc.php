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
$sNavigation = navigation('sae', '5oscportfolio', 'fin', '5mtdportfolio');
$tdm = tdm('sae500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>PORTFOLIO : Démarche portfolio.</h1>

<?php
$comp = competence('osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>Au semestre 5, la démarche portfolio consistera en un point étape intermédiaire qui permettra à l’étudiant de se positionner,
sans être évalué, dans le processus d’acquisition des niveaux de compétences de la troisième année du B.U.T. et relativement
au parcours suivi.</p>

<h2>Descriptif générique :</h2>
<p>L’équipe pédagogique devra accompagner l’étudiant dans la compréhension et l’appropriation effectives du référentiel de compétences
et de ses éléments constitutifs tels que les composantes essentielles en tant qu’elles constituent des critères qualité.
Seront également exposées les différentes possibilités de démonstration et d’évaluation de l’acquisition des niveaux de compétences
ciblés en troisième année par la mobilisation notamment d’éléments de preuve issus de toutes les SAÉ. L’enjeu est
de permettre à l’étudiant d’engager une démarche d’auto-positionnement et d’auto-évaluation tout en intégrant la spécificité du
parcours suivi.</p>

<?php
$res = ressource('5osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


