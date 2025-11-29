<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		02/11/22 	00:31::00
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
$sNavigation = navigation('sae', '402osc', '403osc', '400mtd');
$tdm = tdm('sae400');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('402osc'); ?></h1>
<?php
$comp = competence('t1_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Mettre en place et évaluer un système de prévision et de planification d’un réseau de distribution.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>Dans le cadre d’un réseau de distribution défini, l’ étudiant mettra en place les méthodes de prévisions les plus adaptées, les
mécanismes de planification adéquats ainsi que les indicateurs permettant l’évaluation du réseau.</p>
<p>Le réseau de distribution peut être mono-canal ou multi-canal et provenir d’une situation industrielle.</p>

<?php
$ac = ac('sae402osc');
echo $ac;

$res = ressource('sae402osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>



