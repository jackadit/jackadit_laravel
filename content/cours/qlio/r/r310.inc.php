<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		01/11/22 	20:35::00
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
$sNavigation = navigation('r', '310', '311', '309');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

    <h1>Ressource R3.10 : Ordonnancement, lancement et pilotage.</h1>

<?php
$comp = competence('3');
echo $comp;

$sae = sae('3mtd13');
echo $sae;
?>

<h2>Descriptif</h2>

    <p>À partir d’une liste d’ordres de fabrication (OF) fermes dans un environnement continu ou discontinu et en tenant compte des
typologies d’atelier et des contraintes (charge déjà engagée, capacité effective, indice de fluidité, etc.) :</p>
    <ul>
        <li>Définir un ordonnancement exécutable pour l’ensemble des postes de charge.</li>
        <li>Mesurer les indicateurs de performance (taux de charge, indice de fluidité, etc.).</li>
        <li>Tester et adapter plusieurs techniques de pilotage.</li>
    </ul>
    <p>Dans le cas d’une production stabilisée, il s’agira également de :</p>
    <ul>
        <li>Dimensionner les boucles d’un Kanban.</li>
        <li>Paramétrer les règles de priorité.</li>
        <li>Choisir le support associé aux étiquettes et au planning Kanban (management visuel).</li>
</ul>

<?php
$ac = ac('3osc35');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Job-Shop – Flow-Shop – Johnson – Jackson – Ordonnancement centralisé – Ordonnancement décentralisé – Critères de priorité
– Gestion de files d’attente – Indicateurs d’évaluation de plannings (performance) – Techniques de pilotage (chevauchement
– fractionnement) – Just-In-Time JIT – Modèle d’utilisation des boucles kanban – Calcul des boucles (fabrication et transport).</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 22 heures dont 10 heures de TP</p>


