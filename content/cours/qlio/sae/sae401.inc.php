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
$sNavigation = navigation('sae', '401', '402mtd', '400');
$tdm = tdm('sae400');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('401'); ?></h1>

<?php
$comp = competence('234');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Dérouler une démarche d’amélioration par percée.</li>
    <li>Mettre en oeuvre une planification à moyen et long terme.</li>
    <li>Améliorer l’organisation d’un système de production par modélisation et simulation.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>Dans le cadre d’un d’un processus de réalisation (production ou de service), cette SAÉ doit permettre de :<p>
<ul>
    <li>De dérouler une démarche d’amélioration par percée.</li>
    <li>D’animer une équipe projet.</li>
    <li>De montrer les bénéfices obtenus (valider l’efficacité de l’amélioration et la performance).</li>
    <li>De suivre et de clôturer un projet.</li>
</ul>

<p>À partir de prévisions de vente (demande sur une famille de produits), l’étudiant devra appliquer le processus d’établissement du PIC/PDP en recherchant un équilibrage charge/capacité y compris d’un point de vue du partenaire externe.</p>

<p>L’étudiant devra :</p>
<ul>
    <li>Analyser et diagnostiquer une unité de production :
        <ul>
            <li>Les résultats de production.</li>
            <li>Les aléas.</li>
            <li>Les en-cours.</li>
            <li>Les contraintes.</li>
            <li>Les données de production.</li>
            <li>Des contraintes réglementaires ou qualité.</li>
            <li>Une pénurie de main d’oeuvre.</li>
        </ul>
    </li>
    <li>Redimensionner l’unité de production en faisant appel à une modélisation, pour tester différentes configurations.</li>
    <li>Valider ce dimensionnement par des résultats de simulation argumentés.</li>
</ul>

<?php
$ac = ac('sae401');
echo $ac;

$res = ressource('sae401');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


