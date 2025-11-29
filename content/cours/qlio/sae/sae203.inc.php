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
$sNavigation=navigation('sae', '203', '204', '202');
$tdm=tdm('sae200');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('203'); ?></h1>

<?php
$comp = competence('3');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>

<p>À partir d’une situation de terrain, l’étudiant devra répondre aux problématiques : comment s’assurer d’exécuter un planning
conformément au prévisionnel ? Quels éléments sont susceptibles de perturber la réalisation d’un planning ? Quelle exécution
de planning permet d’aboutir à une meilleure performance ?<p>

<h2>Descriptif générique :</h2>

<p>Les situations professionnelles lui permettront d’exécuter un planning de production et d’évaluer sa performance.</p>
<p>Pour cela, l’étudiant devra lire et comprendre un planning et, si besoin, le reformuler en fonction de ses besoins.</p>
<p>Il devra trouver les moyens de s’assurer de l’approvisionnement du/des poste(s) de production en vue de la réalisation de la production.</p>
<p>Il s’assurera de la disponibilité du/des poste(s) de charge pour la réalisation du planning (taux de charge, etc.). Il proposera des ajustements si nécessaire en fonction des écarts analysés (par exemple, mise à jour de la capacité réelle). Il exécutera le planning par exemple, de manière itérative après chaque ajustement.</p>
<p>Il collectera les informations et les mettra en forme pour mesurer la performance (délai, qualité, coût réel, temps réels, rebuts, taux de service, sécurité, taux d’utilisation et efficience, etc.).</p>
<p>La mise en situation intégrera divers aléas cohérents avec des situations professionnelles.</p>
<?php
$ac = ac('sae203');
echo $ac;

$res = ressource('sae203');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 

