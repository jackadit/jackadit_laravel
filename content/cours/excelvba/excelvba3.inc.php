<?php
/**
 * BUT : cours excel VBA 3
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
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Collections d‘objets</a></li>		
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Workbooks</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Sheets</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Worksheets</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Range</a></li>
		<li><a href="#chap6" name="tdmchap6" id="tdmchap6">UserForm</a></li>
		<li><a href="#chap7" name="tdmchap7" id="tdmchap7">Autres objets</a></li>
    </ol>
</aside>


<h1>Objets <img alt="icone objet VBA" src="/assets/img/excelvba/icone_objet_vba.png"></h1>

<h2><a href="#tdmchap1" name="chap1" id="chap1">1- Collections d‘objets</a></h2>

<p>Chaque application de MICROSOFT OFFICE possède ses propres objets.</p>
<p>Les relations entre ces objets sont organisés selon ce qu'on appelle le <strong>modèle objet</strong> de l'application.</p>
<p>Par exemple, dans WORD, les objets manipulés sont des documents, des paragraphes, des mots...</p>
<p>Dans EXCEL, les objets manipulés sont des classeurs, des feuilles de calcul, des plages, des cellules...</p>
<p>Ici on va se focaliser sur le modèle objet d'EXCEL.</p>
<pre>Pour retrouver tous les objets : <a href="https://msdn.microsoft.com/fr-fr/vba/excel-vba/articles/object-model-excel-vba-reference">Centre de développement Microsoft</a></pre>
<br />
<p>Les objets sont classés d‘une manière hiérarchique.</p>
<img alt="Extrait de la liste hiérarchique d‘objets VBA Excel" src="/assets/img/excelvba/objets_vba_excel.png">
<p>Tout en haut de la hiérarchie on a l‘objet <strong>Application</strong> qui correspond à Excel.</p>
<p>Excel permet d‘ouvrir des classeurs. Ce qui correspond à la collection d‘objet <strong>Workbooks</strong>.</p>
<p>Quand on parle d‘un classeur en particulier ce sera un objet <strong>Workbook</strong>.</p>
<p>Dans un classeur on peut trouver des feuilles de classeurs (collection d‘objets <strong>Worksheets</strong>, des feuilles de graphiques (collection d‘objets <strong>Charts</strong>, etc. Ce à quoi correspond la collection d‘objets <strong>Sheets</strong>.</p>
<p>Si on veut travailler spécifiquement sur une feuille de calcul on utilisera l‘objet <strong>Worksheet</strong>.</p>
<p>Si on veut travailler à l‘intérieur d‘une feuille de calcul, à savoir sur une plage de cellules ou une cellule on utilisera l‘objet <strong>Range</strong>.</p>
<p>Vous l‘aurez compris, elles sont utilisables selon une hiérarchie descendante :</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2- Workbooks</a></h2>

<p>La collection <strong>Workbooks</strong> contient les objets de la classe <strong>Workbook</strong> représentant des classeurs Excel.</p>
<p>L‘objet <strong>Workbook</strong> est renvoyé par les propriétés suivantes de l'objet <strong>Application</strong> :</p>
<ul>
<li>Workbooks(« nom ») ou Workbooks(index)</li>
<li>ActiveWorkbook</li>
<li>ThisWorkbook</li>
</ul>
<p>Exemple :</p>
<p>Workbooks("Factures").Sheets("Février").Range("B2") désigne la cellule B2 de la feuille Février du classeur Factures ;</p>
<p>MsgBox(ActiveWorkbook.Name) ouvre une boîte de dialogue avec le nom du classeur actif.</p>

<h2><a href="#tdmchap3" name="chap3" id="chap3">3- Sheets</a></h2>

<p>La collection <strong>Sheets</strong> fait référence aux feuilles d'un classeur.</p>
<p>Sheets("Février").Range("B2") du classeur actif (ouvert et affiché) ;</p>

<h2><a href="#tdmchap4" name="chap4" id="chap4">4- Worksheets</a></h2>

<p>La collection <strong>Worksheets</strong> fait référence aux feuilles de calcul d'un classeur (c'est-à-dire dans les feuilles de graphiques).</p>

<h2><a href="#tdmchap5" name="chap5" id="chap5">5- Range</a></h2> 

<p>L'objet <strong>Range</strong> fait référence soit à une cellule soit à une plage de cellules.</p>

<p>Les références aux cellules peuvent être :</p>
<ul>
<li>absolues : Range("B2") ou Cells(2,2) désignent la cellule B2 de la feuille active ;</li>
<li>relatives à la cellule d‘origine : ActiveCell.Offset (2,-1) désigne la cellule située 2 lignes plus bas (- pour plus haut) et une colonne à gauche (+ pour à droite) de la cellule active.</li>
</ul>

<h2><a href="#tdmchap6" name="chap6" id="chap6">6- UserForm</a></h2>

<p>Un <strong>UserForm</strong> est un objet visuel qui permet de faire une interface avec l'utilisateur.</p>
<p>On peut y placer des objets de la collection <strong>Controls</strong> (TextBox, ListBox, CheckBox, RadioButton, ControlButton, etc).</p>
<p>Pour chaque <strong>UserForm</strong> il existe une feuille de module qui contiendra le code associé aux actions à exécuter lorsque survient un événement.</p>

<h2><a href="#tdmchap7" name="chap7" id="chap7">7- Autres objets</a></h2>

<ol>
<li><strong>Me</strong></li>

<p>C‘est un objet Excel ou VBA contenant le code en cours d‘exécution.</p>

<p>Si le code appartient à une feuille, c‘est un objet Worksheet contenant cette feuille.</p>

<p><strong>Me</strong> est le plus souvent utilisé pour désigner le formulaire VBA (Forms) contenant le code en cours d‘exécution.</p>

<p>On évite ainsi de nommer le formulaire dans le code VBA , ce qui donne des programmes plus faciles à utiliser dans d‘autres formulaires.</p>

<p><strong>Me.Name</strong> contient le nom du formulaire en cours d‘exécution.</p>

<p>Utilisation la plus fréquente : <strong>Me.Close</strong> : ferme le formulaire qui contient cette ligne.</p>

<li><strong>Err</strong></li>

<p>C‘est un objet VBA contenant la dernière erreur rencontrée. Ses propriétés permettent d‘en connaître la nature.</p>

<li><strong>Err.Description</strong></li>
<p>Cet objet contient la description de la dernière erreur rencontrée par VBA.</p>

<p></p>

<li><strong>Err.Raise 18</strong></li> 
<p>VBA peut déclencher une erreur avec Err.Raise 18 en simulant une interruption par l‘utilisateur (Ctrl-Break).</p>

<li><strong>FileSystemObject</strong></li>
</ol>

<p>C‘est l‘objet contenant des instructions permettant à VBA d‘accéder à l‘arborescence de dossiers et de fichiers de l‘ordinateur.</p>

<blockquote><strong>ATTENTION :</strong> ce n‘est pas un objet VBA ni un objet Excel, mais un objet de la librairie Microsoft Scripting Runtime.</blockquote>

<p>Vous devez référencer cette librairie dans l‘éditeur de code VBA avant de l‘utiliser.</p>

<p>Objets intéressants :</p>
<ul>
<li>Drives	Collection d‘objets Drive</li>
<li>Drive	Objet contenant un lecteur</li>
<li>Folders	Collection d‘objets Folder</li>
<li>Folder	Objet contenant un dossier</li>
<li>Files	Collection d‘objets File</li>
<li>File	Objet contenant un fichier</li>
<li>Un objet FileSystemObject contient une collection Drives.</li>
<li>Chaque objet Drive de la collection Drives contient une collection Folders et une collection Files.</li>
<li>Chaque objet Folder d‘une collection Folders contient une collection Folders et une collection Files.</li>
<li>Chaque objet File d‘une collection Files contient un fichier (document Windows).</li>
</ul>

<p>Cette structure permet de parcourir l‘arborescence de documents en VBA comme avec l‘explorateur Windows.</p>

