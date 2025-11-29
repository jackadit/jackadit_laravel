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
$sNavigation = navigation('sae', '106', 'fin', '105');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('106'); ?></h1>
<?php
$comp = competence('4');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>L’étudiant découvrira l’entreprise et son environnement socio-économique. Il devra communiquer de façon professionnelle avec
tous ses interlocuteurs (en entreprise et à l’université). L’étudiant sera mis en situation de travail ou participera à un projet
simple d’amélioration, il devra trouver les leviers pour réaliser le travail demandé.</p>

<h2>Descriptif générique :</h2>
<p>L’étudiant analysera et caractérisera les activités de l’entreprise, son organisation interne, son mode de pilotage et ses moyens
matériels et humains. Il devra gérer son travail dans le temps.</p>

<?php
$ac = ac('sae106');
echo $ac;

$res = ressource('sae106');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>


