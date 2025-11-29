<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		23/03/23 	22:54::00
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
$sNavigation = navigation('r', '609osc', 'fin', '609mtd');
$tdm = tdm('r600');
echo $tdm;
?>



<p>&nbsp;</p>

    <h1>Ressource R6.09 : Reverse Supply Chain.</h1>

<?php
$comp = competence('4');
echo $comp;

$sae = sae('6osc2');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour objectif de présenter les particularités de la gestion des retours (Service Après Vente (SAV), invendus,
articles en fin de vie, emballage et contenants) et des déchets :</p>
<ul>
    <li>Aspects réglementaires sur les articles en fin de vie et sur les déchets (ex : Déchet d’Equipement Electrique et Electronique
- DEEE).</li>
    <li>Processus logistique et documentaire dans le traitement des retours et des déchets.</li>
    <li>Économie circulaire.</li>
    <li>Planification, exécution, suivi et contrôle.</li>
    <li>Indicateurs de performance spécifiques aux flux de retours et de déchets (ex : bilan carbone).</li>
</ul>

<?php
$ac = ac('6osc5');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Contrat de garantie et SAV – Green Supply Chain – Stratégie de collecte/tri/déconstruction et de recyclage.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 13 heures dont 6 heures de TP</p>


