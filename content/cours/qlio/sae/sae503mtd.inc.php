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
$sNavigation = navigation('sae', '503mtd', '500mtd', '502mtd');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('503mtd'); ?></h1>

<?php
$comp = competence('t2_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Paramétrer un progiciel de gestion intégré en fonction de la production envisagée.</li>
    <li>Analyser et diagnostiquer la situation d’une équipe de production, proposer une évolution dans le pilotage de cette
équipe.</li>
    <li>Mettre en place un Système de Management de la Qualité.</li>
    <li>Modéliser et simuler un système industriel pour en améliorer les performances - Utiliser un jumeau numérique pour
améliorer les performances d’un poste de travail ou d’un système industriel.</li>
</ul>
<p>Le projet sera structuré en suivant une démarche d’amélioration.</p>

<h2>Descriptif générique :</h2>
<p>Mettre en place et analyser l’ensemble des processus du système. Se positionner en tant que cadre intermédiaire pour projeter
à moyen terme une évolution de ces processus, et pour cela l’étudiant devra.</p>
<ul>
    <li>Choisir un progiciel en adéquation avec le besoin et le paramétrer.</li>
    <li>Analyser et diagnostiquer la situation d’une équipe de production, des points de vue de l’organisation et des résultats
de production. Proposer un plan d’évolution de l’organisation de l’équipe (formation, polyvalence, responsabilités), les
indicateurs de suivi de la performance et les outils de remontée de terrain.</li>
    <li>Proposer une politique Qualité et une analyse stratégique et en décrivant l’organisme sous forme de processus. Identifier
des indicateurs (satisfaction client, etc.), rédiger les informations documentées nécessaires (enregistrements, etc.) et
répondre aux exigences d’un système de management (ISO 9001, etc.).</li>
    <li>Réaliser le modèle d’un système industriel sur un logiciel de simulation de flux, ou équivalent, et simuler ce modèle dans
le but de proposer des solutions d’améliorations conformes aux objectifs fixés initialement. L’étudiant devra conduire
son étude selon une démarche adaptée. Si possible, utiliser un jumeau numérique, éventuellement couplé à des outils
connectés, pour améliorer les performances d’un poste de travail ou d’un système industriel.</li>
</ul>

<?php
$ac = ac('sae503mtd');
echo $ac;

$res = ressource('sae503mtd');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


