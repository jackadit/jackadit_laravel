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
$sNavigation = navigation('r', '508osc', '509osc', '507osc');
$tdm = tdm('r500osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.08 : Pérennisation d’une certification système.</h1>

<?php
$comp = competence('2');
echo $comp;

$sae = sae('5osc13');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet de :</p>
<ul>
    <li>Définir et d’exploiter l’analyse stratégique de l’organisme (entreprise).</li>
    <li>Déterminer les risques systèmes.</li>
    <li>Surveiller et de mesurer un système de management de la qualité.</li>
    <li>Préparer et de piloter une revue de direction.</li>
    <li>Prendre en compte les éléments de sortie de la revue de direction, afin d’améliorer la performance de l’organisme.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<ul>
    <li>La ressource R5.12 doit intervenir après la ressource R5.11.</li>
    <li>Cette ressource pourra être étendue aux domaines de la sécurité et de l’environnement, du RSE, du management de
l’innovation, etc.</li>
</ul>

<h2>Prérequis :</h2>
<?php
$res = ressource('507');
echo $res;

$ac = ac('5osc1');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>SWOT ou équivalents – PESTEL – Politique qualité – Pérennisation – Amélioration continue – performance – Indicateurs –
Différents types d’audit.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


