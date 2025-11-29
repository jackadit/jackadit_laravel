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
$sNavigation = navigation('r', '403osc', '404osc', '402osc');
$tdm = tdm('r400osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.03 : Mathématiques et statistiques avancées.</h1>

<?php
$comp = competence('t2_osc');
echo $comp;

$sae = sae('osc4');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des notions de mathématiques vectorielles et matricielles ainsi que des méthodes statistiques
avancées :</p>
<ul>
    <li>Vecteurs, coordonnées polaires, calcul vectoriel.</li>
    <li>Matrices (calculs matriciels élémentaires, résolutions de systèmes).</li>
    <li>Analyse de variance.</li>
    <li>Tests non paramétriques et d’indépendance.</li>
</ul>

<?php
$ac = ac('osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Calcul vectoriel – Matrices – Méthode de Gauss-Jordan – Tests statistiques.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 7 heures de TP</p>


