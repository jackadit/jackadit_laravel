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
$sNavigation = navigation('r', '107', '108', '106');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('107'); ?></h1>
<?php
$comp = competence('2');
echo $comp;

$sae = sae('1osc12');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource permet de :</p>
<ul>
    <li>Comprendre les enjeux de la qualité dans une entreprise de biens ou de services. Pour qui ? Pourquoi ?.</li>
    <li>Appréhender des notions de sécurité, d’hygiène et d’environnement afin de préparer l’immersion en entreprise.</li>
    <li>Connaître les rôles et missions du qualiticien.</li>
    <li>Comprendre et déployer les 3 types d’outils (collecte, analyse et prise de décision) et la communication associée.</li>
    <li>Résoudre une problématique simple en mettant en oeuvre une démarche structurée.</li>
    <li>Identifier les moyens/médias de la communication interne et externe utilisés en qualité.</li>
</ul>

<p>Cette ressource vise essentiellement à présenter la culture qualité (vocabulaire, notions, outils ...) nécessaire au pilotage de
l’entreprise par la qualité, quel que soit le secteur d’activités.</p>

<h2>Préconisations pédagogiques</h2>
<p>Ce module sera intéressant à placer en début de Semestre 1.</p>

<?php
$ac = ac('1osc15');
echo $ac;
?>
<h2>Mots clés :</h2>
<p>Enjeux et satisfaction clients – Outils qualité (Brainstorming – 5M – Pareto – 5 Pourquoi – . . . ) – Méthodes (PDCA – A3 – 8D) –
Communication (missions/métiers de la qualité – Livret d’accueil et de sécurité – Support point qualité – Réunion flash qualité
– Tout support qualité).</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


