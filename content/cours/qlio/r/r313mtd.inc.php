<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		01/11/22 	20:35::00
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
$sNavigation = navigation('r', '313mtd', '313osc', '312');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.MTD13 : Introduction à l’entreprise digitale.</h1>
<?php
$comp = competence('t1_mtd');
echo $comp;

$sae = sae('3mtd23');
echo $sae;
?>

<h2>Descriptif</h2>
<p>Les mutations technologiques et organisationnelles de l’entreprise induites par la révolution numérique sont abordées dans
cette ressource. Pour cela, on pourra, notamment, s’appuyer sur l’architecture de référence RAMI 4.0. En introduction, positionner
la transformation digitale dans le contexte de la nouvelle économie caractérisée par l’optimisation de la chaine logistique,
l’impératif de développement durable et le rôle central de l’humain.</p>
<h3>1ère partie : Présenter les concepts de l’entreprise numérique :</h3>
<ul>
    <li>Objets connectés (IOT, Systèmes cyber-physiques).</li>
    <li>Robots collaboratifs.</li>
    <li>Chaine numérique : depuis le PLM jusqu’au MES en passant par les ERP et le CRM en insistant sur la notion d’interopérabilité et l’acquisition des données (capteurs, KPI, etc.).</li>
    <li>Traitement des données par l’intelligence opérationnelle (informatique décisionnelle, IA).</li>
</ul>

<h3>2ème partie : Présenter une démarche d’accompagnement à la transformation digitale (notions de Diagnostic 4.0).</h3>
<ul>
    <li>Analyser et évaluer des processus industriels.</li>
    <li>Évaluer la maturité numérique d’un système industriel.</li>
    <li>Définir et structurer les KPI : notion de tableau de bord dans le cadre d’une démarche d’excellence opérationnelle.</li>
    <li>Définir un plan d’actions structurel et technologique.</li>
</ul>
<p>Introduire l’intégration de l’humain dans la boucle du changement (acceptabilité, compétences clés, prévention des risques,
confiance dans l’outil numérique, etc.).</p>

<h3>3ème partie : L’étudiant expérimente les concepts présentés en utilisant un SI spécifique (MES, WMS, etc.).</h3>
<p>On s’attachera à traiter un ou plusieurs processus industriels digitalisés (gestion de stocks, ordonnancement, lancement, suivi de production, qualité, maintenance, etc.).</p>

<h2>Préconisations pédagogiques</h2>
<p>Cette ressource est une introduction générale au parcours Accompagnement à la Transformation Numérique (ATN) présentant
les notions qui seront approfondies dans le parcours. La 1ère partie est une présentation générale et pourra être réalisée sous
la forme de CM. La 2ème partie pourra être déclinée sous la forme d’études de cas (TD). La 3ème partie sera réalisée sous la
forme de TP.</p>

<?php
$ac = ac('3mtd1246');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Objets connectés (IOT – Systèmes cyber-physiques de production) – Cobot – Chaine numérique – Interopérabilité – MES – PLM – KPI – IA – Diagnostic 4.0 – Prise en compte de l’Humain.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


