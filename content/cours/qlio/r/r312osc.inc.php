<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		01/11/22 	20:35::00
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
$sNavigation = navigation('r', '312osc', '313osc', '311osc');
$tdm = tdm('r300osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.12 : Conduite d’un projet d’amélioration.</h1>
<?php
$comp = competence('4');
echo $comp;
$sae = sae('3osc3');
echo $sae;
?>

<h2>Descriptif</h2>
<p>Conduire un projet d’amélioration en suivant une démarche structurée :</p>
<ul>
    <li>Définir le périmètre du projet : analyse du besoin, analyse de l’existant, diagnostic.</li>
    <li>Définir et planifier les solutions à mettre en oeuvre.</li>
    <li>Piloter la mise en oeuvre des solutions.</li>
    <li>Mesurer les résultats et pérenniser les solutions.</li>
    <li>Établir un retour d’expérience.</li>
</ul>

<p>Conduire un projet d’amélioration en se référant à la théorie :</p>
<ul>
    <li>Mettre en oeuvre les principes de l’amélioration continue.</li>
    <li>Participer à une démarche Kaizen.</li>
    <li>Prendre en compte les fondements du Lean (maison du Toyota Production System TPS).</li>
</ul>

<p>Conduire un projet d’amélioration en prenant en compte la dimension économique :</p>
<ul>
    <li>Choisir les investissements.</li>
    <li>Calculer le seuil de rentabilité.</li>
    <li>Calculer le retour sur investissement.</li>
    <li>Justifier un choix d’investissement.</li>
</ul>

<h2>Prérequis :</h2>

<ul>
    <li><?php echo ressource('304'); ?></li>
    <li><?php echo ressource('308'); ?></li>
</ul>
<?php
$ac = ac('3osc335');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Projet d’amélioration continue – Kaizen – Démarche Lean – Cartographie Value Stream Mapping (VSM) – Investissements –
Retour sur investissement.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 22 heures dont 10 heures de TP</p>


