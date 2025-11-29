<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/03/23 	01:37::00
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
$sNavigation = navigation('r', '512osc', '513osc', '511osc');
$tdm = tdm('r500osc');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.12 : Démarche Lean Management.</h1>

<?php
$comp = competence('4');
echo $comp;

$sae = sae('5osc1');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Poser les fondements du Lean management :</p>

<ul>
    <li>Mettre le client au coeur de la démarche : concept de la supply chain et des relations clients/fournisseurs internes.</li>
    <li>Prendre en compte toutes les parties prenantes.</li>
    <li>Comprendre les enjeux de la notion de valeur ajoutée/gaspillages et les éléments clés de la maison du TPS.</li>
</ul>

<p>Déterminer et contextualiser les outils au service d’une démarche Lean, pour :</p>
<ul>
    <li>Analyser les problèmes et gaspillages.</li>
    <li>Améliorer l’organisation.</li>
    <li>Organiser un flux tiré, tendu, équilibré, lissé, régulé, séquencé, takté./li>
    <li>Résoudre les problèmes à leur base, au fur et à mesure de leur apparition.</li>
</ul>

<p>Adopter les principes de la philosophie du Lean :</p>
<ul>
    <li>Principes opérationnels (TPS, World Class Manufacturing WCM, etc.).</li>
    <li>Excellence opérationnelle (Kaizen, agilité, smart factory, etc.).</li>
</ul>

<p>Participer à la transformation Lean d’une organisation :</p>
<ul>
    <li>Intégrer les fondements d’une entreprise Lean.</li>
    <li>Diagnostiquer la situation de départ (enjeux internes et externes).</li>
    <li>Déployer la politique Lean de l’entreprise sur le terrain.</li>
    <li>Identifier les pièges et erreurs à éviter, à travers les causes principales d’échec de déploiement d’une démarche Lean.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>La ressource R5.32 doit intervenir après la ressource R5.31.</p>
<p>Un jeu pédagogique pourrait être un support pertinent pour la mise en pratique du déploiement d’une démarche Lean.</p>

<h2>Prérequis :</h2>
<?php
$res = ressource('511');
echo $res;

$ac = ac('5osc304');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Standardisation – Gemba Walk – VSM – Kamishibaï – Heïjunka – Milk run – Jidoka – TPM – A3 projet – Takt time – Lead time.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


