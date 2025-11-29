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
$sNavigation = navigation('r', '105', '106', '104');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('105'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('1osc');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des bases en informatique.</p>
<ul>
    <li>Bureautique :
    <ul>
        <li>Fonctions de base d’un traitement de texte nécessaires pour la rédaction d’un rapport.</li>
        <li>Fonctions avancées d’un tableur nécessaires pour l’immersion en entreprise.</li>
        <li>Outils collaboratifs.</li>
    </ul>
    </li>
    <li>Connaissances générales sur l’architecture des systèmes informatiques :
    <ul>
        <li>Connaissances générales de son environnement informatique.</li>
        <li>Internet et sécurité.</li>
        <li>Représentation et manipulation de données.</li>
    </ul>
    </li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Traitement de texte – Tableur – Environnement informatique – Internet – Données.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 11 heures de TP</p>
 


