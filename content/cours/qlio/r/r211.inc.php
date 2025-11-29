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
$sNavigation = navigation('r', '211', '212', '210');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('211'); ?></h1>
<?php
$comp = competence('4');
echo $comp;

$sae = sae('2osc14');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource porte sur l’étude des postes de travail et sur l’implantation d’un atelier, d’une zone de travail ou d’un magasin.</p>

<p>Étude d’un poste de travail :</p>
<ul>
	<li>Étudier un poste de travail, son implantation et les moyens de stockage et manutention associés au poste.</li>
	<li>Mettre en place les éléments de la conduite autonome du poste (modes opératoires, maintenance de premier niveau, identification relative au rangement du poste...).</li>
	<li>Organiser un poste en termes de sécurité et de bien-être au poste (ergonomie, organisation physique, surfaces...).</li>
	<li>Identifier les éléments clés qui contribuent à l’efficacité du poste de travail (productivité, qualité, coûts, délais, maintenance...).</li>
	<li>Participer à l’approche Kaizen et à la réduction des différentes familles de Mudas.</li>
	<li>Identifier les causes de dysfonctionnement au poste.</li>
	<li>Définir, mesurer et estimer les différents types de temps au poste de travail.</li>
</ul>

<p>Implantation d’un atelier, d’une zone de travail ou d’un magasin dans l’objectif de réduire les temps de transfert :</p>
<ul>
	<li>Définir les besoins en termes de surface en fonction des contraintes.</li>
	<li>Implanter un système de production pour diminuer les distances, les gaspillages et les risques en appliquant des méthodes.</li>
	<li>Évaluer plusieurs propositions d’implantation au regard de critères (productivité, qualité, sécurité, coûts, délais, maintenance...).</li>
	<li>Définir l’implantation physique et mettre en plan (localisation des zones de stockage, allées de circulation, moyens de production, moyens de transfert, calcul des surfaces ...).</li>
	<li>Aménager des espaces de travail.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>Les méthodes d’implantation que l’on mettra en oeuvre seront celles qui permettent d’optimiser les flux, sans modifier la répartition
du travail entre les postes (gamme enveloppe, rangs moyens, chaînons). Il est recommandé d’utiliser un outil informatique
d’implantation pour une mise en oeuvre allant jusqu’à la mise en plan. Il peut être intéressant de positionner le poste de travail et
l’atelier dans une vision plus globale de chaîne logistique et la démarche d’organisation du poste dans une vision d’excellence
opérationnelle.</p>

<?php
$ac = ac('1osc12');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Mode opératoire – Ergonomie – Mesure de temps – Kaizen au poste – Muda – Maintenance de niveau 1 – Magasin – Allées – Dimension terrain.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


