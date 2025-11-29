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
$sNavigation = navigation('r', '313osc', 'fin', '313mtd');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.OSC13 : Activités d’un site logistique.</h1>
<?php
$comp = competence('t1_osc');
echo $comp;

$sae = sae('3osc23');
echo $sae;
?>

<h2>Descriptif</h2>
<p>Cette ressource a pour objectif de définir les activités d’un site logistique en déterminant les besoins liés aux réceptions,
entreposage, préparation de commandes et expéditions en tenant compte des contraintes qualités et réglementaires et de la
nature des produits et des secteurs d’activités :</p>

<ul>
    <li>Gestion matérielle des flux physiques : solutions technologiques de stockage et de manutention (palettiers, transstockeurs,
systèmes automatisés et stockage grande hauteur, stockage XXL transitique Automated Guided Vehicle AGV,
Autonomous Mobile Robot AMR, etc.), préparations de commandes (automatisation, pick to light, picking vocal, cobots et
exo-squelettes), organisation et dimensionnement d’un entrepôt (gestion des emplacements), système de cross docking
(fractionnement, allotissement, groupage, etc.).</li>
    <li>Gestion des flux d’informations : identification, codification, traçabilité (RFID, Codes-barres uni et bi-dimensionnels, etc.),
informatique embarquée, progiciel de gestion d’entrepôt ( Warehouse Management System WMS, etc.), inventaire par
tracking, inventaire automatisé, etc.</li>
    <li>Gestion administrative et réglementaire : gestion des transits, des dédouanements, des quarantaines, sécurisation du
stockage.</li>
</ul>
<?php
$ac = ac('3osc512');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Préparation de commandes – Gestion des entrées/sorties – Solutions de stockage – Systèmes d’information du site logistique.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


