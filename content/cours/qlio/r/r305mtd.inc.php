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
$sNavigation = navigation('r', '305mtd', '306mtd', '304mtd');
$tdm = tdm('r300mtd');
echo $tdm;
?>



<p>&nbsp;</p>

    <h1>Ressource R3.05 : Algorithmique et programmation avancées.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('mtd3');
echo $sae;
?>

<h2>Descriptif</h2>

    <p>Cette ressource a pour but de compléter l’apprentissage de méthodes algorithmiques et de programmation.</p>
    <ul>
        <li>Algorithmique avancée.
            <ul>
                <li>Algorithmes d’optimisation.</li>
                <li>Algorithmes d’ordonnancement.</li>
            </ul>
        </li>
        <li>Programmation avancée.
        <ul>
            <li>Utilisation de bibliothèques.</li>
            <li>Sous programmes et modularité.</li>
        </ul>
        </li>
</ul>

<p>Présentation d’algorithmes d’optimisation et d’ordonnancement, puis mise en situation et utilisation de bibliothèques.</p>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Algorithmique – Programmation – Résolution de problèmes.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


