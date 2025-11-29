<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	20:34::00
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
$sNavigation = navigation('r', '207', '208', '206');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('207'); ?></h1>
<?php
$comp = competence('2');
echo $comp;

$sae = sae('2osc12');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource vise essentiellement à la compréhension et participation à un audit dans une situation simple, nécessaire au pilotage de l’entreprise par la qualité.</p>

<p>Cette ressource permet de :</p>
<ul>
    <li>Prendre connaissance des informations documentées (processus, procédures, instructions, modes opératoires, fiches d’enregistrement, traçabilité, etc.).</li>
    <li>Identifier les exigences d’un référentiel.</li>
    <li>Exploiter un tableau de bord et ses indicateurs.</li>
    <li>Comprendre la définition, les objectifs, les types et les différentes phases d’un audit.</li>
    <li>Découvrir les compétences et la déontologie de l’auditeur.</li>
    <li>Mesurer, interpréter les écarts et exploiter un plan d’actions simple.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R2.11 doit intervenir en début de semestre et avant la ressource R2.12.</p>

<?php
$ac = ac('1osc13456');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Informations documentées et traçabilité : manuel qualité – procédures – instructions – modes opératoires – Exigences d’un
référentiel – Indicateurs et tableaux de bord – Techniques et types d’audit (internes – externes – etc.) – Différentes phases de
l’audit – Plan d’actions.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


