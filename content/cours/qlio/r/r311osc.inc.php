<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		01/11/22 	20:35::00
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
$sNavigation = navigation('r', '311osc', '312osc', '310osc');
$tdm = tdm('r300osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.11 : Amélioration d’un poste et d’un atelier.</h1>
<?php
$comp = competence('4');
echo $comp;

$sae = sae('3osc13');
echo $sae;
?>

<h2>Descriptif</h2>
<p>Améliorer un atelier dans son implantation et son fonctionnement, ainsi que le poste de travail, dans son ergonomie et son efficience.</p>

<h3>Implantation :</h3>
<ul>
    <li>Mettre en îlots un atelier de production, par la mise en famille des produits</li>
    <li>Équilibrer une ligne de production</li>
    <li>Optimiser une implantation</li>
</ul>

<h3>Poste de travail :</h3>
<ul>
    <li>Analyser et améliorer les conditions ergonomiques de travail d’un point de vue global, bruit, éclairement, monotonie, sécurité</li>
    <li>Analyser les temps de travail, prendre en compte les conditions d’ambiance</li>
    <li>Analyser et améliorer les changements de série</li>
</ul>

<h3>Gestion physique des stocks :</h3>
<ul>
    <li>Connaitre et organiser les techniques de picking et de préparation de commande</li>
    <li>Organiser l’approvisionnement de poste et de bord de ligne</li>
    <li>Dimensionner et choisir l’emplacement d’un stock avancé</li>
    <li>Mettre en place des règles de gestion dans un magasin</li>
</ul>

<?php
$ac = ac('3osc312');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Mise en îlots – Équilibrage de ligne – Single Minute Exchange of Dies (SMED) – Évaluation des temps – Ergonomie – Picking
– Approvisionnement de bord de ligne – First In First Out (FIFO) – Stock avancé.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


