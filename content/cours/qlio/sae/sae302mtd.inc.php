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
$sNavigation = navigation('sae', '302mtd', '303mtd', '301');
$tdm = tdm('sae300');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('302mtd'); ?></h1>
<?php
$comp = competence('t1_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>Être capable d’analyser un environnement industriel dans le but de conduire une démarche de digitalisation en impliquant les personnels.</p>


<h2>Descriptif générique :</h2>
<p>À partir d’une problématique de terrain, si possible industrielle, l’étudiant devra analyser un environnement partiellement digitalisé dans le but de conduire une démarche de transformation. Pour cela, l’étudiant devra évaluer la maturité numérique d’un ou
    plusieurs process industriels, définir et structurer les KPI du ou des process à digitaliser, établir un plan d’actions. La nécessité d’intégrer l’humain dans la boucle du changement sera introduite.</p>


<?php
$ac = ac('sae302mtd');
echo $ac;

$res = ressource('sae302mtd');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>



