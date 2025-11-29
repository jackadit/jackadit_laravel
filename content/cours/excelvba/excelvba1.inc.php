<?php
/**
 * BUT : cours excel VBA 1
 *
 * @copyright Copyright © jackadit.com 2007
 * @version 1.0       15/04/07        16:18:00
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
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Comment accéder à l‘environnement VBA d‘Excel&nbsp;?</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Retour à l‘environnement Excel</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">L‘éditeur Visual Basic</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Feuille, Userform, Module ou module de classe... où placer le code VBA ?</a></li>
    </ol>
</aside>


<h1>L‘environnement VBA</h1>
<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Comment accéder à l‘environnement VBA d‘Excel&nbsp;?</a></h2>
<p>Pour accéder à l‘environnement Visual Basic d‘Excel, vous pouvez utiliser une des méthodes suivantes&nbsp;:</p>
<ul>
    <li>Par le raccourci clavier&nbsp;: <strong>ALT + F11 </strong></li>
    <li>Par le menu <strong>Développeur</strong>, en cliquant sur le bouton : <img alt="Bouton visual basic editor" src="/assets/img/excelvba/bt_vba.png" /></p>
     <p>Le menu <strong>Développeur</strong> s‘active par les options de Excel (Menu <strong>Fichier</strong> > <strong>Options</strong>).</p>
     <img alt="Menu visual basic editor" src="/assets/img/excelvba/active_developpeur.png" />
     </li>
</ul>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Retour à l‘environnement Excel</a></h2>
<p>Il suffit de cliquer sur l‘icône <img alt="Bouton Excel" src="/assets/img/excelvba/bt_excel.png" />, présente dans la barre d‘outils standard de VBA ou de choisir la commande <strong>Fermer et retourner à Microsoft Excel</strong> du menu <strong>Fichier</strong> de VBA. Le raccourci associé à cette commande est <strong>Alt </strong><strong> + Q </strong>. </p>
<p>&nbsp; </p>

<h2><a href="#tdmchap3" name="chap3" id="chap3">3-L‘éditeur Visual Basic (VBE).</a></h2>
<p>La feuille de calcul vierge créé dans Excel peut être manipulée de deux manières, soit dans Excel directement, soit dans l‘éditeur Visual Basic.</p>
<p>C‘est pourquoi vous allez trouver deux affichages dans VBE</p>
<p>VBA la considère comme un projet (<strong>VBAProject</strong>), tandis que Excel le considère comme un classeur (<strong>Classeur1</strong> étant le nom par défaut). </p>

<p><img alt="Explorateur de projet VBA" src="/assets/img/excelvba/editeur_vba.png" /></p>

<p>fig. 1 - la fenêtre de code associée à la première feuille du classeur dans l‘éditeur Visual Basic. </p>

<br />
<p>On remarque que le projet ne contient qu‘une catégorie d‘objets (<strong>Microsoft Excel Objets</strong>).</p>
<p>Dans cette <i>catégorie d‘objet</i>, on trouve, du point de vue VBA, deux autres objets :</p>
<ul>
    <li><strong>Feuil1 (Feuil1)</strong>, qui est un objet <strong>Worksheet</strong></li>
    <li><strong>ThisWorkbook</strong>, représentant le classeur lui-même, qui est un objet <strong>Workbook</strong>.</li>
</ul>

<br />
<p>On ouvre l‘un des objets, au sens VBA, par un simple double-clic. On voit alors dans la fenêtre un curseur qui clignote, comme dans un traitement de texte.</p>
<p>C‘est à cet endroit que l‘on écrira le code et il est nommé : <strong>module</strong>.</p>

<br />
<p>La partie supérieure de la fenêtre de code comporte deux listes déroulantes&nbsp;: </p>
<p><img alt="Liste déroulante Générale" src="/assets/img/excelvba/lst_generale.png" /> et <img alt="Liste déroulante Déclaration" src="/assets/img/excelvba/lst_declaration.png" />. </p>
<p>Si l‘on clique sur général, il apparaît un second élément, <strong>Worksheet </strong><img alt="Liste déroulante Générale déployée" src="/assets/img/excelvba/lst_generale_deploye.png" /></p>
<blockquote>
<p>Le mot "<strong>Worksheet</strong>" est la traduction en anglais de "<strong>feuille de calcul</strong>".</p>
<p>C‘est également un des mots de VBA, qui correspond à l‘un des principaux objets d‘Excel.</p>
</blockquote>
<p>À l‘objet Worksheet sont associés des <strong>Événements</strong>.</p>
<p>La seconde liste déroulante, <img alt="Liste déroulante Déclaration" src="/assets/img/excelvba/lst_declaration.png" />ne contient pour le moment pas d‘autre élément. Cela signifie que le module ne contient que la zone de déclaration des variables de niveau module.</p>

<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Feuille, Userform, Module ou module de classe... où placer le code VBA ?</a></h2>
<p>Il existe quatre types de modules permettant d‘écrire du code&nbsp;: </p>
<img alt="Menu création des 4 types de modules VBA" src="/assets/img/excelvba/types_modules.png" />
<img alt="visualisation des 4 types de modules VBA dans le projet" src="/assets/img/excelvba/types_modules_vbe.png" />

<ul>
    <li>Module associé à un objet Excel : feuille de calcul (objet <strong>Worksheet</strong>), graphique (objet <strong>Chart</strong>) ou classeur (objet <strong>Workbook</strong>)</li>
    <li>Module associé à un <strong>UserForm</strong></li>
    <li>Module : utilisé si on veut accéder à un évènement d‘un objet Excel</li>
    <li>Module de classe : utilisé pour permettre d‘accéder à des évènements qui se passent au niveau de l‘application, c‘est-à-dire pouvant concerner un autre classeur que celui dans lequel on place le code</li>
</ul>

