<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage SAÉ
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('sae', '105', '106', '104');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('105'); ?></h1>
<?php
$comp = competence('4');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Organiser le système de production d’un produit déjà existant.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’une production existante :</p>
<ul>
    <li>Décrire et caractériser le système de production.</li>
    <li>Définir les données techniques et les coûts associés.</li>
    <li>Appréhender les contraintes techniques et économiques liées à l’organisation de la production en intégrant la réalité du terrain.</li>
    <li>Identifier les dysfonctionnements.</li>
</ul>

<?php
$ac = ac('sae105');
echo $ac;

$res = ressource('sae105');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>


