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
$sNavigation = navigation('r', '101', '102', '1');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('101'); ?></h1>

<?php
$comp = competence('234');
echo $comp;

$sae = sae('1osc');
echo $sae;
?>

<h2>Descriptif</h2>

<h3>Objectifs généraux (dans les cinq activités langagières : compréhension orale, compréhension écrite, expression orale en
interaction (conversation), expression orale en continu et expression écrite) :</h3>
<ul>
<li>Savoir parler de soi et se présenter aux autres au quotidien et/ou en entreprise./li>
<li>Parler de projets personnels/professionnels.</li>
</ul>
<h3>Objectifs professionnels :</h3>
<ul>
    <li>Présenter les informations essentielles d’une entreprise.</li>
    <li>Décrire les principaux services/départements dans une structure.</li>
    <li>Faire un bilan de son expérience personnelle/professionnelle.</li>
</ul>

<h3>Objectifs linguistiques :</h3>
<ul>
    <li>Comprendre un énoncé simple à l’écrit.</li>
    <li>Comprendre un énoncé oral simple dans un environnement favorable.</li>
    <li>Rédiger des documents à l’aide de modèles.</li>
    <li>S’exprimer de façon autonome en phrases courtes, avec une prononciation correcte.</li>
    <li>Adopter une approche communicative de la langue.</li>
</ul>

<h3>Objectifs méthodologiques :</h3>
<ul>
    <li>Développer des stratégies personnelles d’apprentissage de la langue en utilisant les ressources à disposition.</li>
    <li>Être capable de prendre des notes.</li>
</ul>

<h3>Exemples de contenu :</h3>
<ul>
    <li>Quelques bases : alphabet, adresse mél, chiffres, numéro de téléphone, référence de produits...</li>
    <li>Rédiger un courriel simple.</li>
    <li>Situations quotidiennes : réserver une chambre d’hôtel / décrire un itinéraire.</li>
    <li>Savoir se présenter et parler de ses projets.</li>
    <li>Établir des premiers contacts en entreprise en France et/ou à l’international (ex. accueillir des visiteurs).</li>
    <li>Établir des objectifs du semestre ; définir sa stratégie de progrès ; s’évaluer (support visuels ex. diagramme d’araignée, courte présentation au groupe de TP, etc.).</li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Présentations – Courriels – Projets futurs – Description d’entreprise – Situations quotidiennes – Ressources linguistiques et méthodologiques.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 11 heures de TP</p>


