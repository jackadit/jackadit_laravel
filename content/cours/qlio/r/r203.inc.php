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
$sNavigation = navigation('r', '203', '204', '202');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('203'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('2osc');
echo $sae;
?>

<h2>Descriptif</h2>

<h3>Le but de cette ressource est d’apporter tous les outils statistiques nécessaires aux ressources métiers portant sur le contrôle
de réception, la maîtrise statistique des procédés, les plans d’expérience, la métrologie, et la prévision des ventes :</h3>
<ul>
    <li>Les 5 lois de probabilité de base (normale, exponentielle, Poisson, binomiale, hypergéométrique).</li>
    <li>Intervalles de confiance.</li>
    <li>Tests d’hypothèse (de conformité, de comparaison).</li>
    <li>Tests d’adéquation à une loi de probabilité (en particulier à la loi normale).</li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>
<h2>Mots clés :</h2>
<p>Lois de probabilité – Intervalles de confiance – Tests.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


