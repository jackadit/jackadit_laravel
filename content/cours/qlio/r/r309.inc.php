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
$sNavigation = navigation('r', '309', '310', '308');
$tdm = tdm('r300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R3.09 : Coordination approvisionnements - production.</h1>

<?php
$comp = competence('3');
echo $comp;

$sae = sae('3mtd13');
echo $sae;
?>

<h2>Descriptif</h2>

    <p>Cette ressource permet :</p>
    <ul>
        <li>Déterminer, identifier les limites des méthodes de gestion traditionnelles des stocks.</li>
        <li>Calculer des stocks de sécurité associés.</li>
        <li>À partir d’un Programme Directeur de Production, calculer les besoins bruts et nets et effectuer un calcul de charges
détaillé.</li>
        <li>Évaluer les besoins d’ajustement charge-capacité et les approvisionnements.</li>
        <li>Rebouclage PDP – CBN.</li>
        <li>Exécuter les calculs à l’aide d’un ERP et comparer les résultats par rapport à un calcul manuel et essayer de construire
des clés de comparaison.</li>
</ul>

<?php
$ac = ac('3osc12');
echo $ac;
?>

<h2>Mots clés :</h2>
<p>Charge – Capacité – Besoin brut – Besoin Net – Ordre de Fabrication – Ordre d’Achat – Règles de lotissement – Zone ferme
– Horizon – Périodes ou Mailles – Stocks de sécurité – Programme Directeur de Production.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


