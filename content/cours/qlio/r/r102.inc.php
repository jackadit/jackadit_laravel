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
$sNavigation = navigation('r', '102', '103', '101');
$tdm = tdm('r100');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource <?php echo ressource('102'); ?></h1>
<?php
$comp = competence('234');
echo $comp;

$sae = sae('1osc');
echo $sae;
?>

<h2>Descriptif</h2>

<p>Analyser la communication dans le cadre professionnel (niveau 1).</p>

<h3>Identifier des postures et des savoir-faire relationnels :</h3>
<ul>
    <li>Comprendre une situation de communication.</li>
    <li>Comprendre les enjeux de la communication verbale, non-verbale et para-verbale en situation.</li>
</ul>

<p>Savoir interagir dans le cadre professionnel en adoptant une posture adaptée (niveau 1).</p>
<h3>Présenter un exposé oral avec un outil de présentation :</h3>
<ul>
    <li>Produire et diffuser un message clair.</li>
    <li>Connaître les normes sociales, culturelles et s’adapter.</li>
    <li>Élaborer un diaporama.</li>
</ul>

<p>S’informer et informer de manière critique et efficace (niveau 1).</p>
<h3>Acquérir des savoir-faire méthodologiques de recherche documentaire :</h3>
<ul>
    <li>Identifier, sélectionner et restituer des informations.</li>
    <li>Construire une bibliographie.</li>
</ul>

<h3>Objectifs culturels :</h3>
<ul>
    <li>Adapter son choix de langage en respectant la culture des interlocuteurs.</li>
</ul>

<p>Synthétiser des informations (niveau 1).</p>
<ul>
    <li>Identifier, sélectionner et restituer des informations.</li>
    <li>Utiliser des techniques pour capter et restituer les informations (par exemple carte heuristique).</li>
    <li>Prendre des notes, réaliser un résumé simple ou une contraction de texte..</li>
</ul>

<p>Analyser et rédiger des documents d’entreprise simples (niveau 1).</p>

<h3>Analyser et rédiger des documents d’entreprise simples (genres, fonctions, circulations, normes de présentation et de typographie,
orthographe, syntaxe) :</h3>
<ul>
    <li>Courrier.</li>
    <li>Courriel.</li>
    <li>Dossier simple.</li>
</ul>

<h2>Préconisations pédagogiques</h2>
<p>Jeux pédagogiques.</p>
<p>Mise en oeuvre dans les SAÉ : présentation orale ciblant un apprentissage critique.</p>

<?php
$ac = ac('1osc');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Communication écrite et orale – Communication non verbale – Recherche documentaire.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 24 heures dont 11 heures de TP</p>
 


