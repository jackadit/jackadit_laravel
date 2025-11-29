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
$sNavigation = navigation('sae', '503osc', '500osc', '502osc');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('503osc'); ?></h1>

<?php
$comp = competence('t2_osc');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Paramétrer un progiciel de gestion intégré en fonction de la production envisagée.</li>
    <li>Analyser et diagnostiquer la situation d’une équipe de production, proposer une évolution dans le pilotage de cette
équipe.</li>
    <li>Mettre en place un Système de Management de la Qualité.</li>
    <li>Définir et structurer un réseau d’approvisionnement et de distribution à partir d’une stratégie industrielle.</li>
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
    <li>Proposer une architecture logistique, à partir d’une stratégie d’approvisionnement et de distribution, incluant le choix des
partenaires et les relations qui les lient (contrat, partenariat, transport etc.).</li>
</ul>

<?php
$ac = ac('sae503osc');
echo $ac;

$res = ressource('sae503osc');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


