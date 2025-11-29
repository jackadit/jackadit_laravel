<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:26::00
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
$sNavigation = navigation('r', '402osc', '403osc', '401osc');
$tdm = tdm('r400osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.02 :  Expression Communication.</h1>

<?php
$comp = competence('t2_osc');
echo $comp;

$sae = sae('osc4');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Analyser la communication dans le cadre professionnel (niveau 2).</p>
<p>Analyser la communication en milieu de travail, adopter une posture réflexive et adapter son comportement, en tenant compte notamment des situations conflictuelles.</p>
<p>Synthétiser des informations (niveau 3).</p>
<p>Rédiger une note de synthèse opérationnelle.</p>
<p>Analyser et rédiger des communications écrites professionnelles (niveau 3).</p>
<p>Rédiger une note d’information :</p>
<ul>
    <li>Définir une stratégie de communication.</li>
    <li>Adapter la rédaction au média utilisé et au destinataire.</li>
</ul>

<?php
$ac = ac('osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Synthèse de documents – Réflexivité.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 7 heures de TP</p>


