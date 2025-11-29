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
$sNavigation = navigation('r', '514osc', 'fin', '514mtd');
$tdm = tdm('r500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.OSC.14 : Distribution, transport et Supply Chain.</h1>

<?php
$comp = competence('t1_osc');
echo $comp;

$sae = sae('5osc23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour objectif de gérer la distribution et les transports au niveau national et international :</p>

<ul>
    <li>Fonction et rôle de la distribution.</li>
    <li>Critères de choix d’un réseau de distribution, choix d’une stratégie de distribution, choix d’une prestation logistique :
        <ul>
            <li>Détermination du nombre d’entrepôts et leur localisation (barycentre).</li>
            <li>Chiffrage et optimisation des couts de distribution, principe des marges arrières.</li>
            <li>Facteurs de risques et aléas de la Supply Chain.</li>
        </ul>
    </li>
    <li>Cadre réglementaire de la distribution et du transport national et international (gestion des contrats logistiques avec les
clients, documents de transport, Incoterms).</li>
    <li>Types de transports (Transports routiers, maritimes, aériens, multi-modal, etc.).</li>
    <li>Grandes infrastructures de transport et plateformes intermodales, portuaires, aéroportuaires.</li>
    <li>Organisation des acheminements du fret et des tournées de transport.</li>
</ul>

<p>Cette ressource a aussi pour objectif d’approfondir des éléments de la Supply Chain :</p>
<ul>
    <li>Outils de la collaboration (notion Efficient Consumer Response, mutualisation, etc.).</li>
    <li>Positionnement MRP2 au sein de la logistique globale (DDMRP, DDAE comme une alternative au MRP2, lien entre le
MRP, DDMRP & Lean).</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R5.52 doit intervenir après la ressource R5.51.</p>

<h2>Prérequis :</h2>
<?php
$res = ressource('513osc');
echo $res;

$ac = ac('5osc34');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Prestations logistiques – Schéma directeur logistique – Outils de collaboration – Transport – MRP2 – Supply chain.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


