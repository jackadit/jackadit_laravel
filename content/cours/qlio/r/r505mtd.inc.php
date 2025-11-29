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
$sNavigation = navigation('r', '505mtd', '506mtd', '504mtd');
$tdm = tdm('r500mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.05 : Modélisation des systèmes d’information.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('5mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but de donner des outils méthodologiques de conception et représentation des systèmes, des
processus et des flux.</p>
<ul>
    <li>Comprendre ce qu’implique de modéliser un flux d’information :
        <ul>
            <li>Intérêt pour l’entreprise.</li>
            <li>Intérêt opérationnel (à visée d’optimisation).</li>
            <li>Détermination des éléments à modéliser.</li>
            <li>Détermination de la granularité.</li>
        </ul>
    </li>
    <li>Modéliser un flux d’information :
        <ul>
            <li>Présentation d’une notation graphique (par exemple Business Process Model and Notation BPMN).</li>
        </ul>
    </li>
    <li>Appliquer sur une étude de cas la modélisation :
        <ul>
            <li>Utilisation d’une méthode d’analyse (par exemple Supplier Input Process Output Customer SIPOC) déjà apprise dans
d’autres ressources.</li>
        </ul>
    </li>
</ul>

<?php
$ac = ac('5mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Modélisation – Représentation des systèmes – Processus – Flux de données.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


