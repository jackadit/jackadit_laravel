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
$sNavigation = navigation('r', '111', '112', '110');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('111'); ?></h1>
<?php
$comp = competence('4');
echo $comp;

$sae = sae('1osc56');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet d’identifier, de caractériser et d’analyser un système de production et son organisation.</p>

<ul>
	<li>Identifier les contraintes induites par les produits, les procédés, la taille de l’entreprise sur les activités de production, la typologie de produits et de production.</li>
	<li>Identifier les éléments physiques d’un système de production (poste de charge et poste de travail), de stockage et de manutention.</li>
	<li>Définir et savoir manipuler les différentes grandeurs associées à l’organisation du système de production (charge, capacité, données de temps, données de transfert ...).</li>
	<li>Définir les notions d’articles, de nomenclatures et de gammes.</li>
	<li>Représenter les boucles de pilotage sur un schéma fonctionnel.</li>
	<li>Identifier les temps opératoires, les temps de cycle et réaliser des simogrammes.</li>
	<li>Analyser une implantation au regard de critères d’évaluation.</li>
	<li>Expérimenter une situation de production.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>Ce module sera intéressant à placer en début de Semestre 1.</p>

<?php
$ac = ac('1osc234');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Diagnostic d’une implantation – Gammes – Nomenclatures – Temps de cycle – Typologie de production (série – unitaire –
standard – différenciée...) – Poste de travail – Poste de charge – Matériel de stockage et de manutention – Boucles de pilotage.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


