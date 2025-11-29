<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	22:31::00
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
$sNavigation = navigation('r', '604mtd', '605mtd', '603mtd');
$tdm = tdm('r600mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R6.04 : Connaissances juridiques de l’entreprise.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('6mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des connaissances générales sur le droit des contrats et le droit du travail.</p>
<ul>
    <li>Droit des contrats.</li>
    <li>Droit du travail.</li>
</ul>

<?php
$ac = ac('6mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Type de contrats – Relations contractuelles – Responsabilités – Clauses – Contrat de travail – Représentation des salariés –
Formation.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 7 heures dont 3 heures de TP</p>


