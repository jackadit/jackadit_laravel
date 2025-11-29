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
$sNavigation = navigation('r', '510mtd', '511mtd', '509mtd');
$tdm = tdm('r500mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.10 : Aide à la décision face aux aléas.</h1>

<?php
$comp = competence('3');
echo $comp;

$sae = sae('5mtd1');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Être capable d’identifier et de caractériser un aléa (causes, conséquences, chiffrage, etc.).</p>
<p>Générer des solutions envisageables et les évaluer (simulation, matrice de choix, configuration, indicateurs).</p>
<p>Mettre en valeur le gain constaté pour chaque configuration.</p>
<p>Définir des axes d’amélioration modélisables en fonction des aléas rencontrés (pannes, relocalisation de production, soustraitance,
etc.).</p>
<p>Modifier un modèle fourni pour :</p>
<ul>
    <li>Comparer plusieurs alternatives.</li>
    <li>Analyser les statistiques issues d’un logiciel professionnel.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>L’étudiant pourra utiliser un outil professionnel de simulation et/ou de Gestion de Maintenance Assistée par Ordinateur GMAO.</p>

<?php
$ac = ac('5mtd3');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Modèle de Simulation – Réordonnancement – Replanification – Gammes alternatives – Traitement/Prévention des aléas.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


