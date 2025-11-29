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
$sNavigation = navigation('sae', '102', '103', '101');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('102'); ?></h1>
<?php
$comp = competence('2');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>L’étudiant découvrira l’entreprise, son environnement socio-économique. Il devra communiquer de façon professionnelle avec
tous ses interlocuteurs. L’étudiant sera mis en situation de travail ou participera à un projet simple d’amélioration, il devra trouver
les leviers pour réaliser le travail demandé.</p>

<h2>Descriptif générique :</h2>
<p>L’objectif est ainsi de permettre à l’étudiant au cours d’une immersion professionnelle, en fonction de la nature de son entreprise
d’accueil, d’appréhender son futur environnement professionnel. Pour cela, il identifiera et développera, a minima, les points
suivants :</p>
<ul>
    <li>Les activités de la qualité.</li>
    <li>Les acteurs de la qualité.</li>
    <li>Les clients et leurs besoins.</li>
    <li>Les processus principaux et leur interaction.</li>
    <li>Les documents qualité utilisés.</li>
    <li>Les référentiels et/ou réglementations principalement utilisés par l’entreprise.</li>
    <li>La nature et les moyens de la communication utilisée (interne/externe, français/langues étrangères...) .</li>
</ul>

<?php
$ac = ac('sae102');
echo $ac;

$res = ressource('sae102');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


