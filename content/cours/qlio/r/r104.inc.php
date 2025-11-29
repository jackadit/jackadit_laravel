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
$sNavigation = navigation('r', '104', '105', '103');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('104'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('1osc');
echo $sae;
?>
<h2>Descriptif</h2>

<p>Cette ressource a pour but d’apporter des connaissances générales sur l’entreprise à la fois sur les aspects technologiques et
socio-économiques.</p>
<ul>
    <li>Technologique (environ 60%) :
        <ul>
            <li>Compréhension des mécanismes par la lecture de dessins techniques.</li>
            <li>Connaissance des principaux procédés de production (visites d’entreprises, découvertes de procédés via exposés, etc.).</li>
    </ul>
    </li>
    <li>Socio-économique (environ 40%) :
    <ul>
        <li>Méthodologie de présentation d’une entreprise.</li>
        <li>Approche économique de l’entreprise.</li>
        <li>Organisation de l’entreprise.</li>
    </ul>
    </li>
</ul>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Connaissance et description des produits et procédés manufacturiers – Rôles de l’entreprise – Valeur ajoutée – RSE – Organigramme
– Métiers – Statuts juridiques.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 11 heures de TP</p>
 


