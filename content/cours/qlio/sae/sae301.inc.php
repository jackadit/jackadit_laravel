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
$sNavigation = navigation('sae', '301', '302mtd', '3');
$tdm = tdm('sae300');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('301'); ?></h1>

<?php
$comp = competence('234');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Piloter et améliorer d’un process grâce aux outils statistiques.</li>
    <li>Dimensionner et mettre en oeuvre une production à flux tirés.</li>
    <li>Analyser et diagnostiquer une situation de production sur des postes de travail.</li>
</ul>

<h2>Descriptif générique :</h2>
<p>Dans le cadre d’un d’un processus de réalisation (production ou de service), cette SAÉ doit permettre de piloter ou d’améliorer le
process en utilisant, en fonction de la situation, les outils/méthodes ci-dessous :<p>
<ul>
    <li>Fiabilisation des moyens de mesure.</li>
    <li>Plan de contrôle réception.</li>
    <li>Maîtrise Statistique des Procédés (MSP) grâce aux cartes de contrôle.</li>
    <li>Plans d’expériences.</li>
</ul>

<p>Dans le cadre d’une production stabilisée, les étudiants devront :</p>
<ul>
    <li>Dimensionner une ou plusieurs boucles Kanban en veillant à la disponibilité des composants en stocks.</li>
    <li>Analyser et diagnostiquer une situation de production sur des postes de travail en tenant compte :
        <ul>
            <li>De l’ergonomie dans son environnement global (bruit, éclairement, monotonie, sécurité...)</li>
            <li>De l’efficience (ruptures d’approvisionnements, temps d’arrêts, rebuts...)</li>
            <li>Des règles d’approvisionnements</li>
            <li>Des contraintes de gestion physique des stocks.</li>
        </ul>
    </li>
    <li>Proposer des améliorations, en justifiant les choix.</li>
</ul>

<?php
$ac = ac('sae301');
echo $ac;

$res = ressource('sae301');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


