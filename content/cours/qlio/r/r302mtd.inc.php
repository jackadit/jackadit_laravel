<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	20:34::00
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
$sNavigation = navigation('r', '302mtd', '303mtd', '301mtd');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.02 :  Expression Communication.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('mtd3');
echo $sae;
?>

<h2>Descriptif</h2>

<p>S’informer et informer de manière critique et efficace (niveau 3).</p>
<p>Assurer une veille informationnelle :</p>
<ul>
    <li>Prendre conscience des diversités culturelles (entreprises, métiers, cultures nationales).</li>
    <li>Développer sa culture générale.</li>
</ul>
<p>Synthétiser des informations (niveau 2).
<p>Rédiger un compte-rendu :</p>
<ul>
    <li>Rapport d’étonnement.</li>
    <li>Rapport d’activité.</li>
    <li>Soutenance.</li>
</ul>
<p>Analyser et rédiger des communications écrites professionnelles (niveau 2).</p>
<ul>
    <li>Rédiger une notice, procédure ou instruction :</li>
    <ul>
        <li>Structuration.</li>
        <li>Schématisation.</li>
    </ul>
    <li>Produire un document à partir d’outils de la qualité (Ishikawa par exemple).</li>
    <li>Publier pour le web : article de blog, post professionnel :</li>
    <ul>
        <li>Ergonomie des publications numériques</li>
        <li>Stratégie de diffusion.</li>
    </ul>
</ul>
<p>Analyser et rédiger des documents d’entreprise complexes (niveau 2).</p>
<p>Maîtriser la production de documents complexes qui répondent aux différentes situations de communication, y compris académiques : méthodologie avancée du rapport.</p>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Compte rendu – Rapport – Soutenance – Écrits techniques – Veille informationnelle.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 6 heures de TP</p>


