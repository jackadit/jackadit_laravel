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
$sNavigation = navigation('r', '209', '210', '208');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('209'); ?></h1>
<?php
$comp = competence('3');
echo $comp;

$sae = sae('2osc1');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Cette ressource prépare l’étudiant à modéliser et saisir des données techniques dans le système d’information. L’étudiant
découvre et s’adapte à la structure du système d’information mis à sa disposition. Les principes des Entreprise Ressource
Planning (ERP)/GPAO lui permettent d’en comprendre l’architecture fonctionnelle.</p>

<p>Pour s’assurer de la validité des données saisies, l’étudiant devra :</p>
<ul>
    <li>Générer les documents visant à assurer une gestion de production à partir de critères fournis.</li>
    <li>S’assurer également que les niveaux de stocks sont cohérents.</li>
</ul>

<p>L’étudiant s’initie au Calcul des Besoins Nets (CBN).</p>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R2.21 doit intervenir en début de semestre et avant la ressource R2.2</p>

<?php
$ac = ac('1osc3');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Principe ERP/GPAO – Articles – Nomenclatures – Postes de charges – Gammes – Unités d’achat/unités de gestion – Pertes –
Rebuts – Co-produits – Paramètres de gestion.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 10 heures de TP</p>
 


