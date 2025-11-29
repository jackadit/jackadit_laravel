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
$sNavigation = navigation('sae', '104', '105', '103');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('104'); ?></h1>
<?php
$comp = competence('3');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>L’étudiant découvrira l’entreprise, son environnement socio-économique. Il devra communiquer de façon professionnelle avec
tous ses interlocuteurs (en entreprise et à l’université). L’étudiant sera mis en situation de travail ou participera à un projet
simple d’amélioration, il devra trouver les leviers pour réaliser le travail demandé.</p>

<h2>Descriptif générique :</h2>
<p>L’étudiant décrira et expliquera les flux sur un périmètre raisonnable. Il identifiera des points critiques et/ou des anomalies dans
la gestion des flux. Pour cela, il devra s’intégrer et s’approprier le fonctionnement logistique de l’entreprise et participer à la
gestion des flux physiques et/ou d’information.</p>

<?php
$ac = ac('sae104');
echo $ac;

$res = ressource('sae104');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>


