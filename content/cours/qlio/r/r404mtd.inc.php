<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		26/06/22 	22:29::00
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
$sNavigation = navigation('r', '404mtd', '405mtd', '403mtd');
$tdm = tdm('r400mtd');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R4.04 : Bases du contrôle de gestion industriels.</h1>

<?php
$comp = competence('t2_mtd');
echo $comp;

$sae = sae('4mtd');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des connaissances sur des outils de contrôle de gestion industriel et d’audit financier.</p>
<ul>
    <li>Bases de la comptabilité générale.</li>
    <li>Compte de résultat, bilan.</li>
    <li>Analyse fonctionnelle du bilan.</li>
    <li>Calcul des Soldes Intermédiaires de Gestion (SIG).</li>
    <li>Analyse des écarts.</li>
    <li>Financement des investissements.</li>
</ul>

<?php
$ac = ac('mtd');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Résultat – Patrimoine – FRNG – BFR – Trésorerie nette – SIG – Écarts – Audit financier – Actualisation.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 15 heures dont 7 heures de TP</p>


