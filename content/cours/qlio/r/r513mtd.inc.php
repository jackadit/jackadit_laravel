<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	01:37::00
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
$sNavigation = navigation('r', '513mtd', '513osc', '512');
$tdm = tdm('r500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.MTD.13 : Modélisation et simulation d’un système de production – Intérêt du jumeau numérique.</h1>

<?php
$comp = competence('t1_mtd');
echo $comp;

$sae = sae('5mtd23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource est décomposée en deux parties.</p>

<p>La 1ère partie traite de la modélisation et de la simulation de flux. L’objectif de cette partie est de réaliser le modèle d’un
système industriel sur un logiciel de simulation de flux ou un logiciel équivalent : définir le périmètre et les objectifs de l’étude,
collecter les données et définir les Key Performance Indicator (KPI), construire le modèle, le simuler et le qualifier. Etablir
un plan d’expériences conforme aux objectifs, analyser les résultats et proposer des solutions d’améliorations. La notion de
configuration et de reconfiguration (c’est-à-dire, une modification du système physique ou de son pilotage) sera introduite.</p>

<p>La 2ème partie traite du jumeau numérique :</p>
<ul>
    <li>Définir et caractériser le jumeau numérique en mettant l’accès sur la notion de liens digitaux (Digital Thread), de multimodèles
et d’évolution parallèle tout au long du cycle d’exploitation de son jumeau physique correspondant.</li>
    <li>Présenter des exemples d’application, si possible en lien avec des processus industriels.</li>
    <li>Montrer l’intérêt d’un jumeau numérique (pilotage, optimisation, surveillance, diagnostic et pronostic, ...).</li>
    <li>Si possible, utiliser un jumeau numérique pour optimiser un processus ou un poste de travail, éventuellement au travers
d’outils connectés.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>Cette ressource devra être réalisée majoritairement sous la forme de TP. Le lien pourra être fait avec la ressource R5.22 < Aide
à la décision face aux aléas >dans laquelle la simulation est utilisée.</p>

<h2>Prérequis</h2>

<?php
$res = ressource('510');
echo $res;

$ac = ac('5mtd125');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Simulation de flux – KPI – Modélisation – Optimisation – Jumeau numérique – Outils connectés – Cycle de vie jumeau physique
– Digital Thread.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


