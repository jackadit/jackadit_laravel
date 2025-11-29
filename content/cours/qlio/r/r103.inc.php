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
$sNavigation = navigation('r', '103', '104', '102');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('103'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('1osc');
echo $sae;
?>

<h2>Descriptif</h2>

<h3>Cette ressource a pour but, d’une part, d’apporter / de consolider des bases de mathématiques :</h3>
<ul>
    <li>Priorité des opérateurs.</li>
    <li>Conversion unités de base et ordre de grandeur.</li>
    <li>Pourcentage.</li>
    <li>Développement, factorisation.</li>
    <li>Équations du premier et second degré.</li>
    <li>Équation de droite.</li>
</ul>

<h3>et, d’autre part, d’introduire des statistiques descriptives de base permettant de travailler avec tout type de données :</h3>
<ul>
    <li>Discrètes / continues.</li>
    <li>Statistiques à 1 variable (moyenne, médiane, quantile), indicateurs de dispersion (écart-type, étendue, IQR), fréquence..</li>
    <li>Représentation graphique des données (histogramme, boîte à moustaches, ...).</li>
    <li>Statistiques à 2 variables (tableau de contingence, corrélation, régression linéaire).</li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Bases de mathématiques – Équations – Données – Statistiques descriptives.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 11 heures de TP</p>
 


