<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	01:37::00
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
$sNavigation = navigation('r', '513osc', '514mtd', '513mtd');
$tdm = tdm('r500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.OSC.13 : Achats dans la Supply Chain.</h1>

<?php
$comp = competence('t1_osc');
echo $comp;

$sae = sae('5osc23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but de gérer le processus d’achat et le transport des biens :</p>

<ul>
    <li>Stratégie des achats et notion de sourcing.</li>
    <li>Suivi de la performance et de la qualité fournisseurs.</li>
    <li>Organisation du processus d’achat.</li>
    <li>Globalisation des achats.</li>
    <li>Processus d’établissement d’un contrat fournisseur : notion de contrat cadre, appel d’offre et demande de cotation, etc.</li>
    <li>Solutions technologiques : Electronic Data Interchange EDI, e-procurement, etc.</li>
    <li>Collaboration client/fournisseur : partenariat, effet Bullwhip, etc.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R5.51 doit intervenir en début de semestre et avant la ressource R5.52.</p>

<?php
$ac = ac('5osc502');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Processus achats – EDI – SCE (Supply chain execution) – Enjeux de la collaboration.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


