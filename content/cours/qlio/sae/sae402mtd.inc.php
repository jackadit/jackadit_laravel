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
$sNavigation = navigation('sae', '402mtd', '403mtd', '4oscportfolio');
$tdm = tdm('sae400');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('402mtd'); ?></h1>
<?php
$comp = competence('t1_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Être capable de co-construire un tableau de bord dynamique à partir de données issues de SI associés.</li>
    <li>Être capable de former les personnels à l’utilisation du tableau de bord.</li>
    <li>Être capable de conduire une démarche d’accompagnement à la digitalisation d’un processus.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>À partir d’une problématique de terrain, l’étudiant devra conduire une démarche d’accompagnement à la digitalisation d’un processus :</p>
<ul>
    <li>Construire un tableau de bord dynamique à partir de données issues des SI.</li>
    <li>Modéliser le processus (éventuellement sous forme de Workflow).</li>
    <li>Analyser les besoins d’automatisation.</li>
    <li>Choisir les KPI.</li>
    <li>Collecter les données pertinentes, traiter les données et les organiser.</li>
    <li>Proposer une solution numérique, si possible avec des outils connectés, en s’assurant de son acceptabilité.</li>
</ul>

<?php
$ac = ac('sae402mtd');
echo $ac;

$res = ressource('sae402mtd');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>



