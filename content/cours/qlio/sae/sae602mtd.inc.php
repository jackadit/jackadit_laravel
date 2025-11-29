<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		19/03/23 	23:13::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage SAÉ
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('sae', '602mtd', '6mtdstage', '601');
$tdm = tdm('sae600');
echo $tdm;
?>



<p></p>

<h1><?php echo sae('602mtd'); ?></h1>

<?php
$comp = competence('t1_mtd');
echo $comp;
?>

<h2>Objectifs et problématique professionnelle :</h2>
<ul>
    <li>Être capable de proposer des reconfigurations d’un système existant afin de répondre à des changements internes ou
    externes.</li>
    <li>Être capable d’évaluer la robustesse et la fiabilité d’une solution et de l’expliquer aux opérateurs.</li>
</ul>

<h2>Descriptif générique :</h2>

<p>L’étudiant devra utiliser un modèle de simulation d’un système physique en exploitation pour prédire l’évolution future d’une
configuration donnée. Il devra simuler et évaluer de nouvelles configurations, qui pourront être fournies, afin de proposer celles
qui répondent au mieux à des perturbations ou à des variations du système ou de la demande, en justifiant ses choix. La
robustesse et la fiabilité de la solution en termes de données pourront être évaluées et améliorées au besoin. La solution en
termes d’interopérabilité avec des systèmes d’information spécialisés (ERP, MES, etc.) pourra être interrogée. Une présentation
de la solution à destination d’opérateurs pourra être réalisée.</p>

    <?php
    $ac = ac('sae602mtd');
    echo $ac;
    $res = ressource('sae602mtd');
    echo $res;
    ?>

<h2>Volume horaire</h2>
<p>Volume horaire à définir localement par chaque IUT</p>
 


