<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:38::00
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
$sNavigation = navigation('r', '411mtd', '411osc', '410osc');
$tdm = tdm('r400');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.MTD11 : Data management.</h1>

<?php
$comp = competence('t1_mtd');
echo $comp;

$sae = sae('4mtd23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet à l’étudiant de construire un tableau de bord dynamique à partir de données issues des SI associés à l’entreprise numérique (ERP, MES, WMS, CRM, etc.).</p>

<p>Les objectifs du data management sont définis : cohérence, qualité et sécurité des données afin de pouvoir les exploiter.</p>
<p>L’accent sera mis sur l’exploitation des données dans une finalité d’aide à la décision. La notion d’informatique décisionnelle (business intelligence) pourra être introduite.</p>

<p>La démarche d’exploitation des données sera décrite au travers des étapes suivantes :</p>
<ul>
    <li>Choix des KPI.</li>
    <li>Collecte des données (choix des données pertinentes).</li>
    <li>Construction d’un tableau de bord : l’accent sera mis sur la visualisation des informations pertinentes.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R4.72 doit intervenir après la ressource R4.71.</p>
<p>Si possible, présenter des logiciels adaptés à ce type de traitement. Les exemples utilisant les SI spécifiques (WMS, MES, CRM, etc.) seront privilégiés.</p>

<h2>Prérequis</h2>
<p>– R4.MTD.10 | Démarche d’accompagnement à la digitalisation des processus.</p>

<?php
$ac = ac('4mtd34');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Tableau de bord – Aide à la décision – Cohérence des données – Qualité des données – Sécurité des données – Informatique décisionnelle – Agrégation des données – Visualisation – Cycle de vie des données.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 22 heures dont 9 heures de TP</p>


