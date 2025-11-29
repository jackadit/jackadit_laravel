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
$sNavigation = navigation('r', '514mtd', '514osc', '513osc');
$tdm = tdm('r500');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Ressource R5.MTD.14 : Interopérabilité et hygiène numérique.</h1>

<?php
$comp = competence('t1_mtd');
echo $comp;

$sae = sae('5mtd23');
echo $sae;
?>

<h2>Descriptif</h2>

<p>La première partie de cette ressource porte sur l’interopérabilité des systèmes, la seconde sur < l’hygiène numérique >.</p>

<p><b>1ère partie</b> : interopérabilité des systèmes.</p>
<p>Définir la notion d’interopérabilité et les types d’interopérabilité : interopérabilité entre différents SI d’une même entreprise ou
interopérabilité entre des systèmes de différentes entreprises. Présenter les enjeux de l’interopérabilité des systèmes d’information,
en particulier avec les SI spécialisés : assurer la cohérence des données, faciliter la communication entre différents SI,
etc. Présenter le contexte de l’interopérabilité au travers de 4 aspects :</p>
<ul>
    <li>Les différents niveaux d’interopérabilité où l’accent sera mis sur les aspects métier et processus :
        <ul>
            <li>Métier : faciliter les échanges entre les différents services et fonctions.</li>
            <li>Processus : faciliter l’intégration entre les différents niveaux et les différentes temporalités des processus métiers
(exemple : faciliter l’intégration entre l’ERP, le MES et la supervision).</li>
            <li>Services : architectures (point à point, SOA, bus, etc.).</li>
            <li>Données (conversion et échange de données).</li>
        </ul>
    </li>
    <li>Notions de protocoles d’échanges des données avec un ou plusieurs standards (EDI, par exemple Galia).</li>
    <li>Langages et formats d’échanges (ouverts ou fermés) : XML, Excel, connecteurs, API, Webservices, etc.</li>
    <li>Démarche projet SI : comment gérer un projet interopérabilité ? Définir la conduite du changement pour intégrer les
échanges entre plusieurs SI (l’accent sera mis sur les indicateurs).</li>
</ul>

<p><b>2ème partie</b> : Hygiène numérique</p>
<p>Initier l’étudiant aux bonnes pratiques en matière de sécurité des systèmes et de leurs failles : mots de passe, phishing, pièces
jointes, dangers des clés USB, droits d’accès des données, stockage des données (on-premise versus cloud). Les aspects
juridiques (protection des données, RGPD) pourront également être abordés.</p>

<h2>Préconisations pédagogiques</h2>
<p>La majorité de la ressource pourra être réalisée sous la forme d’étude de cas (TD, TP), si possible issus d’expériences industrielles.
Exemple de sensibilisation à l’hygiène numérique : recherche de l’empreinte numérique laissée par chaque étudiant.</p>

<h2>Prérequis :</h2>
<?php
$res = ressource('509');
echo $res;

$ac = ac('5mtd234');
echo $ac;
?>

<h2>Mots clés :</h2>
    <p>Échange de données – Droits d’accès – Sécurité – Protocoles – Formats d’échanges – Démarche projet.</p>

<h2>Volume horaire</h2>
<p>Volume horaire défini nationalement : 23 heures dont 10 heures de TP</p>


