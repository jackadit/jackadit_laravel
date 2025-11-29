<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	23:32::00
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
$sNavigation = navigation('r', '603mtd', '604mtd', '602mtd');
$tdm = tdm('r600mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R6.03 : Recherche Opérationnelle pour les systèmes de production.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('6mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but de montrer l’application de diverses méthodes de recherche opérationnelle à la résolution de
problèmes rencontrés dans les systèmes de production tels que :</p>
<ul>
    <li>Problèmes de fiabilité.</li>
    <li>Problèmes de transport.</li>
    <li>Problèmes d’ordonnancement, etc.</li>
</ul>

<p>Elle permettra en outre d’introduire au choix des outils complémentaires méthodologiques ou logiciels tels que les chaînes de
Markov, les algorithmes génétiques, les méthodes heuristiques, etc.</p>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R6.03 doit intervenir en début de semestre et avant la ressource R6.21.</p>

<?php
$ac = ac('6mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Recherche opérationnelle appliquée à la production – Ordonnancement – Fiabilité – Méthodes probabilistes – Méthodes
exactes – Méthodes heuristiques.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 7 heures dont 3 heures de TP</p>


