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
$sNavigation = navigation('r', '204', '205', '203');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('204'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('2osc');
echo $sae;
?>
<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des connaissances générales sur les composants technologiques des systèmes de
production industriels classiques et de l’industrie du futur.</p>
<ul>
    <li>Environnement industriel d’un atelier et fonctions associées (production, contrôle, transport, stockage, ...).</li>
    <li>Découverte de la structure des systèmes automatisés (partie commande / partie opérative), des composants technologiques associés (capteurs, actionneurs, automates, ...) et des nouvelles technologies du numérique.</li>
    <li>Machines de production courantes au sein des ateliers.</li>
    <li>Eléments d’identification et contrôle des pièces les plus utilisés au sein des ateliers (RFID, gravure, code barre, QR code, système de vision, palpeur, ...).</li>
    <li>Eléments de transport au sein des ateliers (convoyeurs, robots, AGV, ...).</li>
    <li>Outils de pilotage de la production.</li>
    <li>Enjeux de l’industrie du futur et incidence sur l’organisation des systèmes de production.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>On pensera à illustrer ces notions avec des moyens classiques et ceux mis en oeuvre dans l’usine du futur. En TP, on pourrait par exemple :</p>
<ul>
    <li>Mesurer et analyser les performances (temps de cycle, ...).</li>
    <li>Identifier les composants du système.</li>
    <li>Identifier les mécanismes comportementaux du système tel que séquence, parallélisme, synchronisation, choix, partage de ressources.</li>
    <li>Identifier les ressources critiques.</li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Environnement technologique des ateliers de production – Systèmes automatisés – Enjeux – Principes et technologies de
l’industrie du futur.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


