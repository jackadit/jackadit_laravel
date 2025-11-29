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
$sNavigation = navigation('r', '212', 'fin', '211');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('212'); ?></h1>
<?php
$comp = competence('4');
echo $comp;

$sae = sae('2osc1');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Mettre en place un système de données techniques cohérent pour l’organisation d’une production :</p>

<ul>
	<li>Identifier les catégories d’articles.</li>
	<li>Définir un système de codification des articles.</li>
	<li>Identifier les différents types de nomenclatures (de bureau d’études, de gestion de production).</li>
	<li>Organiser les gammes et les nomenclatures en cohérence avec un processus de production, dans un objectif de satisfaction client.</li>
	<li>Exploiter les gammes et leurs données pour analyser la performance.</li>
	<li>Mesurer l’impact du choix des règles de lotissement sur l’organisation de production.</li>
</ul>

<p>Chiffrer et analyser les coûts de production pour l’organisation :</p>
<ul>
	<li>Chiffrer les coûts standards et les devis.</li>
	<li>Analyser la structure des coûts.</li>
	<li>Mesurer la rentabilité et la profitabilité des produits et des services.</li>
</ul>

<h2>Préconisations pédagogiques</h2>

<p>Les données techniques sont au coeur de beaucoup de méthodes QLIO, il serait intéressant d’illustrer leur usage au travers
d’exemples simples qui permettent de comprendre l’intérêt d’une base cohérente et actualisée. Il serait intéressant d’identifier
les exploitations possibles de la nomenclature de gestion de production dans un cadre organisationnel : choix de décomposition
du processus en différents niveaux de nomenclature, conséquences d’un nouveau produit, identification des impacts de toute
modification organisationnelle sur le système de données techniques, mise à jour des données techniques.</p>

<?php
$ac = ac('1osc36');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Codification – Types de nomenclatures – Cohérence process-données techniques – Standards de prix – Devis – Rentabilité et profitabilité de produits et services.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


