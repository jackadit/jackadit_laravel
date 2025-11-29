<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		19/03/23 	23:13::00
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
$sNavigation = navigation('sae', '502mtd', '503mtd', '501');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('502mtd'); ?></h1>

<?php
$comp = competence('t1_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>À partir d’une d’une proposition d’amélioration de processus métiers, rédiger un cahier des charges fonctionnel d’interopérabilité entre
différents SI.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’une problématique de terrain, si possible industrielle, l’étudiant devra proposer une solution d’amélioration de processus
métiers via la communication entre différents SI et décliner sa proposition sous la forme d’un cahier des charges fonctionnel
d’interopérabilité entre différents SI.</p>

<p>On pourra utiliser un outil de simulation pour illustrer la dynamique du système d’information et proposer des solutions d’amélioration
du processus industriel.</p>

<?php
$ac = ac('sae5mtd34');
echo $ac;
$res = ressource('sae502mtd');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


