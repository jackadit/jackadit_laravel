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
$sNavigation = navigation('r', '202', '203', '201');
$tdm = tdm('r200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('202'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('2osc');
echo $sae;
?>

<h2>Descriptif</h2>

<h3>Savoir interagir dans le cadre professionnel en adoptant une posture adaptée (niveau 1).</h3>

<ul>
    <li>Participer à un événement (forum, salon, journée portes ouvertes par exemple) :
    <ul>
        <li>Interagir en groupe de travail : se positionner à l’intérieur d’un groupe et savoir s’affirmer.</li>
        <li>Savoir se présenter.</li>
        <li>S’appuyer sur les outils pertinents, ou les construire (en s’appuyant sur les outils de sémiotique de l’image) : flyer, affiche, poster, kakémono, spot vidéo..</li>
    </ul>
    </li>
    <li>Soutenir un rapport.</li>

<h3>S’informer et informer de manière critique et efficace (niveau 2).</h3>

<ul>
    <li>Développer son esprit critique :
    <ul>
        <li>Utiliser à bon escient les outils numériques.</li>
        <li>Confronter ses sources.</li>
    </ul>
    </li>
    <li>Soutenir un point de vue argumenté :
    <ul>
        <li>Organiser et structurer ses idées</li>
        <li>Connaître et savoir utiliser les techniques d’argumentation et de persuasion</li>
        <li>Renforcer ses compétences linguistiques.</li>
    </ul>
    </li>
</ul>

<h3>Analyser et rédiger des communications écrites professionnelles (niveau 1).</h3>
<ul>
    <li>Se documenter, collecter et analyser des informations pour répondre à une problématique :
    <ul>
        <li>Construire des indicateurs.</li>
        <li>Etablir des tableaux de bord en utilisant des outils d’infographie, à destination du management visuel.</li>
    </ul>
    </li>
    <li>Communiquer sur l’image et par l’image :
    <ul>
        <li>Découverte des éléments pour une analyse de l’image : aspects esthétique, langagier et communicationnel de l’image.</li>
        <li>Production de documents visuels ou audio-visuels.</li>
    </ul>
    </li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Communication écrite et orale – Communication non verbale – Communication par l’image – Confiance en soi – Recherche
documentaire.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 9 heures de TP</p>
 


