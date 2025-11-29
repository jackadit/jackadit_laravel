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
$sNavigation = navigation('r', '304mtd', '305mtd', '303mtd');
$tdm = tdm('r300mtd');
echo $tdm;
?>



<p>&nbsp;</p>

    <h1>Ressource R3.04 : Gestion de l’entreprise.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('mtd3');
echo $sae;
?>

<h2>Descriptif</h2>

    <p>Cette ressource a pour but d’apporter des connaissances générales sur la gestion de l’entreprise d’un point de vue comptable
        et sur les méthodes de calcul de coûts.</p>
<ul>
    <li>Méthode des coûts complets avec les centres d’analyse.</li>
    <li>Méthode des coûts partiels et seuil de rentabilité.</li>
    <li>Méthode Activity Based Costing (ABC).</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>– La ressource R3.04 doit intervenir en début de semestre et avant la ressource R3.32.</p>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>FIFO – LIFO – CMUP – Coût fixe – Coût variable – Unité d’œuvre – Inducteur.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


