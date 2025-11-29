<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	17:22::00
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
$sNavigation = navigation('sae', '601', '602mtd', '6');
$tdm = tdm('sae600');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('601'); ?></h1>

<?php
$comp = competence('234');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Mener professionnellement un audit système.</li>
    <li>Proposer et valider une configuration des flux dans un système de produc.</li>
    <li>Préparer le déploiement d’un projet d’implantation en mettant en oeuvre des outils de pilotage de projet.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>Cette SAÉ doit permettre aux étudiants de mener en autonomie un audit système exhaustif, in situ :<p>
<ul>
    <li>En prévoyant le déclenchement de l’audit.</li>
    <li>En préparant l’audit.</li>
    <li>En conduisant l’audit.</li>
    <li>En rédigeant le rapport.</li>
    <li>En validant le plan d’amélioration proposé par l’audité.</li>
</ul>

<p>L’étudiant devra adopter une posture professionnelle adaptée aux interlocuteurs.</p>

<p>À partir d’un besoin client et de contraintes industrielles, l’étudiant devra étudier plusieurs configurations possibles. En les
modélisant, il envisagera et justifiera la solution la plus adaptée. La modélisation peut permettre de créer le lien avec les outils
de simulation, la recherche opérationnelle et le VSM.</p>
<p>À partir d’un plan d’implantation déjà établi, il devra préparer un projet d’implantation pour en assurer le déroulement dans le
temps puis s’assurer, par des revues régulières auprès des usagers et donneurs d’ordre du projet, de la maîtrise du budget, de
la prise en compte des contraintes et de la réalisation des résultats attendus.</p>

<ul>
    <li>Préparer les étapes intermédiaires, pour permettre la continuation de la production pendant la mise en oeuvre du projet.</li>
    <li>Définir et planifier les phases.</li>
    <li>Décrire le travail à faire à chaque phase.</li>
    <li>Constituer les équipes.</li>
    <li>Préparer les documents de présentation et d’accompagnement du projet.</li>
    <li>Standardiser pour pérenniser.</li>
</ul>

<p>Les attendus portent sur des éléments d’organisation et de conduite du changement. Il sera pertinent de prendre en compte
les dimensions techniques, économiques, réglementaires, sociales et humaines. L’évaluation portera sur la conduite du projet.</p>

<?php
$ac = ac('sae601');
echo $ac;

$res = ressource('sae601');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


