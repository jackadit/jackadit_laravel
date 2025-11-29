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
$sNavigation=navigation('sae', '202', '203', '201');
$tdm=tdm('sae200');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('202'); ?></h1>

<?php
$comp = competence('2');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Auditer un poste de travail.</p>

<h2>Descriptif générique :</h2>
<p>À partir d’un poste de travail défini (production, administration, etc.), l’étudiant devra :<p>
<ul>
    <li>Préparer un audit (objectifs, interlocuteurs concernés, documents préparatoires).</li>
    <li>Planifier l’audit.</li>
    <li>Élaborer une grille d’audit.</li>
    <li>Réaliser l’audit.</li>
    <li>Restituer les conclusions et les communiquer.</li>
    <li>Proposer un plan simple d’actions.</li>
</ul>
<?php
$ac = ac('sae202');
echo $ac;

$res = ressource('sae202');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


