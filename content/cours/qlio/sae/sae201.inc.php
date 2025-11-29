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
$sNavigation=navigation('sae', '201', '202','200');
$tdm=tdm('sae200');
echo $tdm;
?>



<p></p>
<h1><?php echo sae('201'); ?></h1>

<?php
$comp = competence('234');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<p>À partir d’une réalité de terrain (si possible industrielle, sur un support de production ou de service) et partant d’un produit défini
et de technologies identifiées :</p>

<ul>
    <li>Organiser le processus de production, un système de données techniques cohérent et l’implantation d’atelier</li>
    <li>Informatiser les données techniques</li>
    <li>Intégrer une démarche qualité</li>
</ul>
<p>Mettre en oeuvre une démarche de gestion de projet de groupe.</p>


<h2>Descriptif générique :</h2>
<p>Dans le cadre d’un projet interne ou externe au site de formation, sur un support de production ou de service et à partir d’un
cahier des charges du projet fourni, l’étudiant devra :<p>
<ul>
    <li>Identifier les besoins et les objectifs client, les référentiels applicables, les spécifications par rapport au produit/service.</li>
    <li>Identifier le problème à traiter.</li>
    <li>Écrire les nomenclatures et les gammes (les procédés et le temps étant définis).</li>
    <li>Implanter l’atelier de production.</li>
    <li>Calculer les coûts.</li>
    <li>Structurer les données techniques dans un système d’information :
        <ul>
            <li>Transformer les informations en données compatibles et utilisables par l’ERP (systèmes de codification).</li>
            <li>Saisir les données techniques (articles, nomenclatures, gammes, postes de charge, etc.) et les règles de gestion (allotissement, etc.) sur l’ERP.</li>
            <li>Modéliser sous la forme d’un graphe de déroulement les relations entre informations.</li>
            <li>Vérifier la validité des données par exemple, par la génération d’un plan de production et des ordres d’achats et en vérifiant les temps de cycles et les quantités proposées..</li>
        </ul>
    </li>
    <li>Identifier les moyens de mesure et de contrôle associés.</li>
    <li>Proposer un (des) contrôle(s) de conformité.</li>
    <li>Élaborer des documents qualité (processus simple, procédures, instructions, modes opératoires, etc.).</li>
    <li>Prévoir des indicateurs, les objectifs et la communication associée..</li>
</ul>
<?php
$ac = ac('sae201');
echo $ac;

$res = ressource('sae201');
echo $res;
?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


