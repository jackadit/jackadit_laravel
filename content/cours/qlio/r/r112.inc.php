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
$sNavigation = navigation('r', '112', 'fin', '111');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('112'); ?></h1>
<?php
$comp = competence('4');
echo $comp;

$sae = sae('1osc56');
echo $sae;
?>
<h2>Descriptif</h2>

<p>Gestion de projet :</p>

<ul>
	<li>Identifier les éléments constitutifs d’une gestion de projet (expression du besoin, cahier des charges...).</li>
	<li>Identifier les tâches et découper un projet.</li>
	<li>Etablir la chronologie entre des tâches et estimer leur durée.</li>
	<li>Identifier les ressources.</li>
	<li>Planifier le projet (PERT, GANTT).</li>
	<li>Identifier les chemins critiques, marges libres, marges totales, incertitudes de planification.</li>
	<li>Suivre un planning.</li>
	<li>Analyser des ressources, la charge de travail, les coûts du projet.</li>
</ul>

<?php
$ac = ac('1osc5');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Planification de projet – Chemin critique – Expression du besoin – Prise en compte des contraintes – Coût de projet.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


