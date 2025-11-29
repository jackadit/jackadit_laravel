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
$sNavigation = navigation('sae', '303osc', '300osc', '302osc');
$tdm = tdm('sae300');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('303osc'); ?></h1>

<?php
$comp = competence('t2_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Créer un planning de production exécutable à partir d’un Programme Directeur de Production.</li>
    <li>Améliorer l’implantation, en tenant compte d’évolutions dans les contraintes.</li>
    <li>Mettre en place des axes d’amélioration qualité.</li>
    <li>Mettre en place les processus de réception, d’expédition et de stockage.</li>
</ul>
<p>Le projet sera structuré en suivant une démarche d’amélioration.</p>

<h2>Descriptif générique :</h2>
<p>L’étudiant devra améliorer un processus de réalisation déjà formalisé et réaliste, en suivant une démarche structurée. Cette
SAÉ s’appuie sur une production stabilisée.</p>
<p>À partir d’un Plan Directeur de Production :</p>
<ul>
    <li>Proposer des Ordres d’Achats et des Ordres de Fabrication à positionner sur un planning après affermissement à l’aide d’un ordonnancement classique.</li>
    <li>Vérifier la disponibilité des composants nécessaires à la production.</li>
    <li>Rendre le planning exécutable.</li>
    <li>Préparer les documents de lancements en production.</li>
</ul>
<p>À partir d’une implantation existante, l’améliorer en fonction de nouvelles contraintes :</p>
<ul>
    <li>Analyser et diagnostiquer l’implantation.</li>
    <li>Proposer des solutions.</li>
    <li>Évaluer les solutions et justifier un choix.</li>
</ul>
<p>À partir du processus :</p>
<ul>
    <li>Diagnostiquer des pistes d’amélioration.</li>
    <li>Proposer des pistes d’amélioration.</li>
    <li>Mettre en place des axes d’amélioration.</li>
    <li>Prévoir la validation de leur efficacité et de leur pérennité en proposant un plan d’audit.</li>
</ul>
<p>À partir de contraintes administratives, réglementaires et techniques :</p>
<ul>
    <li>Construire les processus des activités du site de stockage (la réception, l’expédition, mouvements de stocks, inventaire,
gestion de la quarantaine/dédouanement/litiges).</li>
</ul>
<p>Enrichir la proposition initiale en intégrant des éléments relatifs à la compétence spécifique du parcours de l’étudiant.</p>

<?php
$ac = ac('sae303osc');
echo $ac;

$res = ressource('sae303osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


