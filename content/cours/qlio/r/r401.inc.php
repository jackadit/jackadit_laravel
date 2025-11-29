<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	21:59::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Classes
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('r', '401', '402', '4');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.01 : Anglais professionnel et technique.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('4mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<h3>Objectifs généraux</h3>
<ul>
    <li>Formaliser les procédures en adaptant son discours en fonction du public visé.</li>
    <li>Proposer des solutions d’amélioration.</li>
    <li>Valoriser ses acquis lors d’un entretien.</li>
</ul>
<h3>Objectifs professionnels :</h3>
<ul>
    <li>Décrire un processus / une procédure / un procédé simple.</li>
    <li>Se préparer à un entretien d’embauche.</li>
    <li>Comprendre une notice technique.</li>
    <li>Écrire un mode opératoire, par exemple comment utiliser une machine (“standard work instructions”).</li>
    <li>Présenter et analyser un projet.</li>
</ul>

<h3>Objectifs linguistiques :</h3>
<ul>
    <li>Sélectionner le modal approprié selon le contexte d’interaction.</li>
    <li>Maîtriser les mots de liaison et de présentation d’une chronologie.</li>
    <li>Approfondir le lexique propre à la spécialité QLIO.</li>
    <li>Utiliser les temps principaux (présent, passé, futur) à bon escient.</li>
</ul>

<h3>Exemples de contenu :</h3>
<ul>
<li>Présentation d’un produit à exporter avec son processus.</li>
<li>Présentation de projet : implantation d’atelier/entrepôt, identification des pistes d’optimisation.</li>
<li>Mode opératoire d’une machine en atelier, étude sur l’ergonomie du poste.</li>
<li>Établir des objectifs du semestre ; définir sa stratégie de progrès ; s’évaluer (support visuels ex. diagramme d’araignée, courte présentation au groupe de TP, etc.).</li>

</ul>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Processus – Entretien – Flux – Instructions.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 7 heures de TP</p>
  


