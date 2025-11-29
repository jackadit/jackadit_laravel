<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	00:41::00
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
$sNavigation = navigation('r', '504mtd', '505mtd', '503mtd');
$tdm = tdm('r500mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.04 : Analyse stratégique et financière de l’entreprise.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('5mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but la mise en oeuvre d’une démarche de diagnostic et de gestion de l’entreprise.</p>
<ul>
    <li>Développement de l’entreprise et orientations stratégiques.</li>
    <li>Démarche de diagnostic stratégique.</li>
    <li>Gestion prévisionnelle et budgets.</li>
    <li>Coût cible.</li>
</ul>

<?php
$ac = ac('5mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Stratégies d’entreprise – SWOT – Budgets – Coût cible.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


