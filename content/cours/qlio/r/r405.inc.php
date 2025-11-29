<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:29::00
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
$sNavigation = navigation('r', '405', '406', '404');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.05 : Bases de données.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('4mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but de perfectionner la maîtrise des bases de données et des systèmes d’information.</p>
<ul>
    <li>Implémentation d’une base de données
        <ul>
            <li>En partant d’un cahier des charges, suivre le cycle de vie d’une base de données (conception, création, gestion des
accès, etc).</li>
        </ul>
    </li>
    <li>Interrogation d’une base de données
        <ul>
            <li>Requêtes.</li>
            <li>Exportation de données.</li>
        </ul>
    </li>
</ul>
<p>Étude de cas, fil organisation sur un cas concret.</p>
<?php
$ac = ac('4mtdosc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Système d’information – Gestion de base de données – Modélisation – SQL.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 7 heures de TP</p>


