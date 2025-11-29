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
$sNavigation = navigation('sae', '501', '502mtd', '5');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('501'); ?></h1>

<?php
$comp = competence('234');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Préparer la certification d’un organisme.</li>
    <li>Prendre des décisions face à des aléas de production sur la base d’une modélisation quantitative.</li>
    <li>Améliorer les performances d’une entreprise au travers d’une démarche projet Lean Management.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>Cette SAÉ doit permettre de vérifier que l’organisme est certifiable et dans ce cadre, les étudiants pourront :<p>
<ul>
    <li>Vérifier l’efficacité des actions face aux risques et aux opportunités.</li>
    <li>Planifier et réaliser des audits internes.</li>
    <li>Mener une revue de direction (Satisfaction client, etc.).</li>
</ul>

<p>L’étudiant devra :</p>
<ul>
    <li>Investiguer une situation industrielle pour développer un modèle fourni, envisager des solutions pour la prise en compte
    d’aléas et prendre la ou les bonnes décisions en tenant compte des contraintes.</li>
    <li>Améliorer les performances d’une entreprise au travers d’une démarche projet Lean Management. Analyser les données
globales d’une entreprise des points de vue :
        <ul>
            <li>Organisation.</li>
            <li>Process.</li>
            <li>Performance.</li>
            <li>Attentes des parties prenantes.</li>
        </ul>
    </li>    
    <li>Diagnostiquer les dysfonctionnements de l’entreprise qui impactent le plus son fonctionnement et ses performances.</li>
    <li>Analyser une cartographie cible à moyen terme établie par l’entreprise et justifier les choix des objectifs, au regard de la
situation initiale.</li>
    <li>Proposer des plans d’action et estimer la progression attendue sur les différents indicateurs.</li>
</ul>

<?php
$ac = ac('sae501');
echo $ac;

$res = ressource('sae501');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


