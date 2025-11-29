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
$sNavigation = navigation('r', '205', '206', '204');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('205'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('2osc');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des bases en programmation et d’aborder les systèmes d’information.</p>
<ul>
    <li>Bases de l’algorithmique / programmation :
    <ul>
        <li>Structure de données.</li>
        <li>Déclaration et utilisation de variables.</li>
        <li>Entrées / Sorties.</li>
        <li>Structures conditionnelles.</li>
        <li>Structures itératives.</li>
        <li>Découverte d’un langage de programmation.</li>
    </ul>
    </li>
    <li>Présentation des systèmes d’information :
    <ul>
        <li>Modélisation des données.</li>
        <li>Modélisation des flux de données (exemple : diagramme de séquence ou réseau de pétri).</li>
        <li>Compréhension d’une base de données.</li>
    </ul>
    </li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Algorithmique – Programmation – Système d’information – Modélisation.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


