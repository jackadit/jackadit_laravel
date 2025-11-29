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
$sNavigation = navigation('r', '208', '209', '207');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('208'); ?></h1>
<?php
$comp = competence('2');
echo $comp;

$sae = sae('2osc12');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource vise essentiellement à mettre en place les moyens de mesure et de contrôle pour évaluer la conformité d’un produit/service/process.</p>
<p>Cette ressource permet de :</p>
<ul>
	<li>Connaitre les différentes modalités de contrôle.</li>
	<li>Comprendre une spécification en fonction d’exigences clients (produits, services, process, etc.).</li>
	<li>Identifier et utiliser les instruments déjà qualifiés pour une spécification donnée.</li>
	<li>Évaluer la conformité du produit/service/process.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R2.12 doit intervenir après la ressource R2.11. Cette ressource peut faire appel à une introduction à la métrologie.</p>

<h2>Prérequis :</h2>

<?php
$res = ressource('207');
echo $res;

$ac = ac('1osc26');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Spécifications (produits – services – process – etc.) – Instruments de mesure – Qualité de la mesure – Contrôle qualité qualitatif
et quantitatif (poka yoke – etc.).</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


