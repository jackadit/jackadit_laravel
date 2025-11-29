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
$sNavigation=navigation('sae', '204', 'fin', '203');
$tdm=tdm('sae200');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('204'); ?></h1>

<?php
$comp = competence('4');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>Organiser et implanter des postes de travail dans le cadre d’une évolution du besoin, dans un atelier défini.<p>

<h2>Descriptif générique :</h2>

<p>Les activités qui pourraient être mises en oeuvre autour d’une production :</p>

<ul>
    <li>Dimensionner les surfaces fonctionnelles pour un poste de travail.</li>
    <li>Identifier à travers différents fournisseurs réels le matériel adéquat.</li>
    <li>Organiser physiquement des postes de travail.</li>
    <li>Prendre en compte l’ergonomie.</li>
    <li>Analyser les mouvements et les temps.</li>
    <li>Identifier les mudas.</li>
    <li>Tester des modifications à partir de solutions de prototypage (papier / carton, jumeau numérique) .</li>
</ul>
<?php
$ac = ac('sae204');
echo $ac;

$res = ressource('sae204');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 

