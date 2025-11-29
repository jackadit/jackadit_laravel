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
$sNavigation = navigation('r', '108', '109', '107');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('108'); ?></h1>
<?php
$comp = competence('2');
echo $comp;

$sae = sae('1osc12');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet de :</p>
<ul>
	<li>Connaître les concepts, le vocabulaire et les principes du management de la qualité.</li>
	<li>Structurer la démarche qualité (cycle PDCA, etc.).</li>
	<li>Connaître les différents types de référentiels (produit/service/système) (en citer plusieurs et leurs secteurs d’application).</li>
	<li>Comprendre la structure et la décomposition en différents chapitres des référentiels.</li>
	<li>Décrire les différentes étapes d’une certification.</li>
	<li>Comprendre une cartographie des processus des activités de l’organisme.</li>
	<li>Décrire un processus (entrées, sorties, acteurs, indicateurs...).</li>
</ul>

<p>Cette ressource vise essentiellement à la compréhension des enjeux d’un système de management de la qualité.</p>

<h2>Préconisations pédagogiques</h2>
<p>D’autres systèmes de management pourront être évoqués. Cette ressource peut aussi prendre en compte des notions de
sécurité, d’hygiène et d’environnement afin de préparer l’immersion en entreprise.</p>

<h2>Prérequis :</h2>
<?php
$res = ressource('107');
echo $res;

$ac = ac('1osc23');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Les principes du management de la qualité – Référentiels (ISO 9001 – IFS – etc.) – Acteurs de la normalisation/certification et
Système de Management de la Qualité (SMQ) – Cartographie des processus – Fiche (description) processus.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


