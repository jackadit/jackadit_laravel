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
$sNavigation = navigation('r', '210', '211', '209');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('210'); ?></h1>
<?php
$comp = competence('3');
echo $comp;

$sae = sae('2osc3');
echo $sae;
?>

<h2>Descriptif</h2>

<p>L’étudiant est mis en situation de proposer des ajustements de planning visant à rétablir l’adéquation charge/capacité. L’usage
d’un système d’information numérique permet de mettre en évidence les écarts en quantités, coûts et temps.</p>

<p>À partir d’un Programme Directeur de Production (PDP) et/ou d’un carnet de commandes donné et de règles de priorités affectées :</p>
<ul>
    <li>Effectuer les lancements d’ordres de fabrications et d’ordres d’achats.</li>
    <li>Assurer le suivi jusqu’à leur clôture.</li>
    <li>Exécuter le plan de production pour comparer le réalisé par rapport au prévisionnel.</li>
    <li>Proposer des ajustements pour corriger les écarts (pilotage d’atelier).</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R2.22 doit intervenir après la ressource R2.21.</p>
<p>L’application se fait avec une GPAO pour approfondir l’usage d’un tel outil. Il convient de s’appuyer sur des situations proches de
cas réels notamment dans l’exploitation de halls technologiques (incluant potentiellement l’usage d’outils de saisie automatisée d’information).</p>

<h2>Prérequis :</h2>
<?php
$res = ressource('209');
echo $res;

$ac = ac('1osc4');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Gestion opérationnelle-temps réel – Paramétrage des temps – Notion de charge/capacité – Jalonnement – Suivi des plannings
dans un Système d’Information – Boucle fermée jusqu’à la clôture des Ordres de Fabrication.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


