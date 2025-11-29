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
$sNavigation = navigation('sae', '103', '104', '102');
$tdm = tdm('sae100');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('103'); ?></h1>
<?php
$comp = competence('3');
echo $comp;
?>
<h2>Compétence ciblée</h2>
<p>Gérer les flux physiques et les flux d’information</p>

<h2>Objectifs et problématique professionnelle :</h2>
<p>L’étudiant devra répondre à la problématique : quelle gestion des flux (entrées-sorties) appliquer ?</p>

<h2>Descriptif générique :</h2>
<p>L’étudiant aura pour objectif de garantir la disponibilité des articles (quels que soient le demandeur et la situation). Les situations
professionnelles pourront comporter des non-conformités, des désalignements entre le besoin et les réapprovisionnements, des
écarts de stocks, des inventaires, des erreurs de localisation des références, etc.</p>
<p>En tant que gestionnaire de stock, l’étudiant doit servir les demandes (OF, listes à servir), réceptionner les livraisons, déclencher
les ordres d’approvisionnement et rendre compte de l’activité (écarts, Indicateurs de Performance, inventaire).</p>
<p>Pour cela, il devra restituer les enregistrements sur les activités de stockage (sous format numérique ou papier). Il apportera
un descriptif de la gestion des stocks opérée (compte-rendu illustré) qu’il pourra proposer sous la forme de schémas ou
logigrammes montrant un mode opératoire. Il pourra élaborer un récit des difficultés ou des interrogations personnelles (ruptures
ou inflations de stock) et construire ou s‘appuyer sur des indicateurs clés (taux de service...).</p>

<?php
$ac = ac('sae103');
echo $ac;

$res = ressource('sae103');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>


