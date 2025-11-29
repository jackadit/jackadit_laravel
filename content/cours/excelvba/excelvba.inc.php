<?php
/**
 * BUT : introduction à VBA
 *
 * @copyright Copyright © jackadit.com 2007
 * @version 1.0       15/04/07        14:08:00
 *
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package jackadit.com
 * @subpackage cours
 * @category excelvba
 * @access public
 * @uses
 */
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="excelvba" class="unstyled">
		<li><a href="/cours/qlio/excelvba" title="intro" id="tdmintro">Introduction à VBA</a></li>
		<li><a href="/cours/qlio/excelvba/1" title="cours1" id="cours1">l‘environnement VBA</a></li>
		<li><a href="/cours/qlio/excelvba/2" title="access">Le code VBA</a></li>
		<li><a href="/cours/qlio/excelvba/3" title="cours3">Les objets <img alt="icone objet VBA" src="/assets/img/excelvba/icone_objet_vba.png"></a></li>
		<li><a href="/cours/qlio/excelvba/4" title="cours4">Les propriétés <img alt="icone propriété VBA" src="/assets/img/excelvba/icone_propriete_vba.png"></a></li>
		<li><a href="/cours/qlio/excelvba/5" title="cours5">Les méthodes <img alt="icone méthode VBA" src="/assets/img/excelvba/icone_methode_vba.png"></a></li>
		<li><a href="/cours/qlio/excelvba/6" title="cours6">Les événements <img alt="icone événement VBA" src="/assets/img/excelvba/icone_evenement_vba.png"></a></li>
		<!--li><a href="/cours/qlio/excelvba/7" title="cours7">Déplacements dans Excel avec VBA</a></li>
		<li><a href="/cours/qlio/excelvba/8" title="cours8">Les instructions</a></li>
		<li><a href="/cours/qlio/excelvba/9" title="cours9">Les fonctions</a></li>
		<li><a href="/cours/qlio/excelvba/10" title="cours10">Les variables</a></li>
		<li><a href="/cours/qlio/excelvba/11" title="cours11">Les formulaires et contrôles</a></li>
		<li><a href="/cours/qlio/excelvba/12" title="cours12">Optimiser la vitesse d‘exécution</a></li-->
    </ol>
</aside>


<h1>Introduction à VBA</h1>
<p class="notice info">NOTE: Si vous tentez d‘apprendre VBA pour Excel et que vous ne connaissez pas les formules SOMMEPROD et les formules INDEX/EQUIV d‘Excel, vous risquez de dépenser beaucoup d‘énergie pour réinventer la roue.</p>
<p><a name="_Introduction"></a><strong>VBA</strong> (<strong>Visual Basic for Applications</strong>) est une implémentation de <i>Microsoft Visual Basic</i> inégrée à toutes les applications de <i>Microsoft Office</i>.</p>
<p><i>Microsoft Visual Basic</i> est un langage de programmation orienté objet, qui permet d‘écrire des applications autonomes, c‘est-à-dire qu‘on peut exécuter en &laquo;double cliquant&raquo; sur un fichier.</p>
<p>C‘est un langage comme C++ ou Java, composé d‘objets, de propriétés, de méthodes, d‘événements, d‘instructions et de fonctions (On expliquera tous ces termes un peu plus loin dans ce cours).</p>

<p>VBA, bien que dérivé de Visual Basic, reste cependant moins puissant que VB (on ne peut pas créer d‘application autonome par exemple), mais il hérite des fonctionnalités de l‘application dans laquelle on l‘utilise (Excel, Access, Word, Powerpoint, ...).</p>
<p>En d‘autres termes, VB est un langage pour concepteurs de programmes alors que VBA est un langage pour concepteurs d‘applications dans les programmes (Excel, Access, etc.).</p>
<p>Les fonctions et instructions sont les mêmes mais les objets, propriétés et méthodes diffèrent sensiblement.</p>
<br />
<p>Pour utiliser VBA, il faut donc ouvrir à partir de l‘application associée (ici on va se focaliser sur Excel), une interface dédiée avec ses propres menus et ses barres d‘outils.</p>
<br />
<p>VBA pour Excel, à ses débuts, servait principalement à automatiser des tâches répétitives. Ces tâches, qu‘on appelle aussi <strong>commandes</strong>, se nomment macro-commandes d‘où le nom MACROS.</p>
<p>VBA étant un langage de programmation à part entière, il permet de développer des applications dans les applications en créant des PROCÉDURES . </p>
<br />
<p>Pour bien programmer en VBA il est essentiel de bien écouter les besoins de l‘utilisateur pour qui vous développez. </p>
<p>Programmer en VBA pour Excel ne constitue que 25% du travail en général, les autres 75% sont occupées à comprendre le client et à concevoir le classeur dans lequel le programme fonctionnera. </p>
