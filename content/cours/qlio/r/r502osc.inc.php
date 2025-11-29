<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	00:41::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Classes
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('r', '502osc', '503osc', '501osc');
$tdm = tdm('r500osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.02 :  Expression Communication.</h1>

<?php
$comp = competence('t2_osc');
echo $comp;

$sae = sae('5osc');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Analyser et rédiger des documents d’entreprise complexes (niveau 3).</p>
<p>Élaborer un diagnostic :</p>
<ul>
    <li>Analyse du besoin.</li>
    <li>Caractérisation de l’état des lieux.</li>
    <li>Identification et rédaction d’objectifs.</li>
</ul>

<p>Analyser la communication dans le cadre professionnel (niveau 3).</p>

<p>Développer une forme d’éthique de la communication interpersonnelle :</p>
<ul>
    <li>Écoute active.</li>
    <li>Empathie.</li>
    <li>Intelligence relationnelle.</li>
    <li>Analyse et compréhension des malentendus.</li>
    <li>Communication interculturelle.</li>
</ul>

<p>Savoir interagir dans le cadre professionnel en adoptant une posture adaptée (niveau 2).</p>
<ul>
    <li>Animer une réunion, communiquer en public :
        <ul>
            <li>Ordre du jour.</li>
            <li>Dynamique de groupe.</li>
            <li>Conduite de la réunion.</li>
            <li>Compte-rendu.</li>
        </ul>
    </li>
    <li>Travailler en équipe, participer et conduire un projet.</li>
</ul>

<?php
$ac = ac('5osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Éthique professionnelle – Conduite de réunion – Diagnostic – Travail en équipe.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


