<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:38::00
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
$sNavigation = navigation('r', '410mtd', '410osc', '409');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.MTD10 : Démarche d’accompagnement à la digitalisation des processus.</h1>

<?php
$comp = competence('t1_mtd');
echo $comp;

$sae = sae('4mtd23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Dans cette ressource sont traitées les raisons et les moyens de la digitalisation des processus, en particulier des processus
industriels. On insistera sur les objectifs de la digitalisation : supprimer le papier, renforcer les procédures opérationnelles,
améliorer la collaboration entre les services. La ressource est décomposée en deux parties qui sont liées.</p>

<p>1ère partie : processus de diagnostic et de mise en oeuvre de la digitalisation : Qu’est-ce que la maturité numérique d’un système (procédures papier, tableur, ERP, interopérabilité des systèmes d’information, etc.)? Comment l’évaluer ?</p>

<p>Pour répondre à ces questions, on pourra s’appuyer, notamment, sur un ou plusieurs modèles de maturité numérique. La ressource décrit ensuite les différentes étapes de la digitalisation d’un (ou plusieurs) processus :</p>

<ul>
    <li>Modélisation des processus métiers, si possible sous forme de Workflow.</li>
    <li>Analyse des besoins qui pourra conduire jusqu’au cahier des charges.</li>
    <li>Choix des indicateurs de la solution : coût, ergonomie, couverture fonctionnelle, etc.</li>
    <li>À partir de ces indicateurs, démarche de choix des outils numériques.</li>
</ul>

<p>Deux aspects seront également abordés : penser la mobilité (tablette/smartphone) et intégrer l’humain dans la boucle de changement, au travers par exemple, d’interfaces humain/machine adaptées.</p>

<p>2ème partie : Coopération humain-machine : présenter et utiliser les outils connectés / technologies avancées (Réalité Virtuelle RV, Réalité Augmentée RA, etc.).</p>

<p>Cette seconde partie pourra être réalisée sous la forme de travaux pratiques, en lien par exemple avec une halle technologique.</p>

<h2>Préconisations pédagogiques</h2>

<p>La ressource R4.71 doit intervenir en début de semestre et avant la ressource R4.72.</p>

<?php
$ac = ac('4mtd256');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Maturité numérique – Diagnostic 4.0 – KPI – Coopération humain-machine – Réalité virtuelle (RV) – Réalité augmentée (RA) – Cahier des charges.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 9 heures de TP</p>


