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
$sNavigation = navigation('r', '110', '111', '109');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('110'); ?></h1>
<?php
$comp = competence('3');
echo $comp;

$sae = sae('1osc3');
echo $sae;
?>

<h2>Descriptif</h2>

<p>À partir d’un plan de production ou de réapprovisionnement ou d’une liste à servir, l’étudiant réalisera et observera les différents
mouvements de stocks. La ressource guide l’étudiant à trouver les limites des techniques et leurs avantages. Il expérimentera
les techniques traditionnelles de réapprovisionnement des stocks (quantités fixes, dates fixes etc.).</p>

<p>L’expérimentation doit conduire à :</p>
<ul>
	<li>Exécuter un planning de production simple, physique.</li>
	<li>Proposer d’éventuels ajustements pour le lancement et la réalisation des ordres de fabrication et d’achats.</li>
</ul>

<p>L’analyse des mouvements et positionnements des stocks dans le flux permet de comprendre les différents types de stocks.</p>

<h2>Préconisations pédagogiques</h2>
<p>L’application se fait sans Gestion de Production Assistée par Ordinateur (GPAO) ou avec simple lecture d’une GPAO pour
mettre en évidence l’intérêt d’un tel outil. Cela met en évidence la nécessité d’un inventaire pour corriger les écarts de stock.
La mise en pratique permet d’aboutir à la découverte et à l’identification des besoins en méthodes de réapprovisionnements.
L’auto-questionnement de l’étudiant sera recherché dans la mise en oeuvre pédagogique.</p>

<?php
$ac = ac('1osc24');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Mise en oeuvre des entrées/sorties – Gestion traditionnelle des réapprovisionnements – Inventaire – Types de stocks – Lancement
de production – Ordres de fabrication – Ordres d’achats.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


