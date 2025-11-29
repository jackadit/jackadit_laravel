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
$sNavigation = navigation('r', '109', '110', '108');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('109'); ?></h1>
<?php
$comp = competence('3');
echo $comp;

$sae = sae('1osc4');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Il s’agit de donner à l’étudiant les moyens de décrire les différents flux. Cette ressource introduit :</p>
<ul>
	<li>Les types de flux (physiques et d’information).</li>
	<li>La formalisation des flux de production (graphe de flux, analyse de déroulement ...).</li>
	<li>Leurs représentations (diagramme d’enchaînement et cartographie).</li>
	<li>Les acteurs concernés externes (fournisseurs, clients, sous-traitants) ou internes (postes amont-aval) au sein d’une entreprise/organisation de production de biens ou de services.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>L’usage de jeux pédagogiques et de mises en situation est préconisé pour que l’étudiant soit acteur dans la mise en oeuvre des
flux.</p>
<p>Une mise dans le contexte présentant les types d’organisations d’entreprise, de production de biens et de services, quel que
soit leur secteur, permettra d’illustrer les flux interservices.</p>

<?php
$ac = ac('1osc156');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Notions de chaîne logistique – Flux dans une entreprise – Types de flux – Représentations et mise en oeuvre de flux – Flux tirés/
poussés – Relations “amont/aval” (client/fournisseur internes ou externes) – Durée d’écoulement – Cadence – Modélisation
des processus métiers.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


