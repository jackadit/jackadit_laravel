<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	00:41::00
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
$sNavigation = navigation('r', '509osc', '510osc', '508osc');
$tdm = tdm('r500osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.09 : Choix et paramétrage d’un progiciel logistique.</h1>

<?php
$comp = competence('3');
echo $comp;

$sae = sae('5osc3');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet de choisir et de paramétrer un système d’information métier en fonction du contexte pour assurer la
gestion des flux de l’entreprise.</p>
<ul>
    <li>Panorama des progiciels métiers existants (ERP, MES, WMS, CRM, etc.)</li>
    <li>Méthodologie de choix d’un progiciel (cahier des charges, présélection, adéquation au contexte, jeu d’essai, etc.).</li>
    <li>Paramétrage d’un progiciel dans différents contextes (flux poussé, flux tiré, flux tendu, Kanban, MRP2, gestion à l’affaire,
CONstant Work In Process CONWIP, etc.).</li>
</ul>

<p>L’étudiant devra utiliser un progiciel professionnel.</p>

<h2>Préconisations pédagogiques</h2>
<p>L’étudiant pourra être actif dans la recherche d’information sur les différents progiciels existants, leurs caractéristiques, leurs
fonctionnalités et leur adaptabilité aux différents contextes d’entreprise.</p>

<?php
$ac = ac('5osc24');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Progiciels métiers – Interopérabilité – Paramétrage – Cahier des charges.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


