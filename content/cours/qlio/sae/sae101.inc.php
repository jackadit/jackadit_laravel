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
$sNavigation = navigation('sae', '101', '102', '100');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('101'); ?></h1>
<?php
$comp = competence('2');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>L’objectif est de permettre à l’étudiant d’utiliser des outils, méthodes et référentiels afin d’analyser une situation et de proposer
des améliorations simples.</p>

<h2>Descriptif générique :</h2>
<p>Activités professionnelles associées :<p>
<p>L’étudiant devra synthétiser des données (fournies ou collectées), les analyser grâce aux outils et méthodes qualité en prenant
en compte des exigences (référentiels et/ou clients) et restituer les résultats et conclusions dans un livrable.</p>

<?php
$ac = ac('sae101');
echo $ac;

$res = ressource('sae101');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 

