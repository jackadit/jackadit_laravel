<?php
/**
 * BUT : cours excel VBA 5
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
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Principales méthodes des objets</a></li>		
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Exemples</a><ol class="alpha">
          <li><a href="#chap2a" name="tdmchap2a" id="tdmchap2a">Activate</a></li>
          <li><a href="#chap2b" name="tdmchap2b" id="tdmchap2b">ClearContents</a></li>
          <li><a href="#chap2c" name="tdmchap2c" id="tdmchap2c">Close</a></li>
          <li><a href="#chap2d" name="tdmchap2d" id="tdmchap2d">Copy</a></li>
          <li><a href="#chap2e" name="tdmchap2e" id="tdmchap2e">Hide</a></li>
          <li><a href="#chap2f" name="tdmchap2f" id="tdmchap2f">Open</a></li>
          <li><a href="#chap2g" name="tdmchap2g" id="tdmchap2g">Paste</a></li>
          <li><a href="#chap2h" name="tdmchap2h" id="tdmchap2h">PasteSpecial</a></li>
          <li><a href="#chap2i" name="tdmchap2i" id="tdmchap2i">PrintOut</a></li>
          <li><a href="#chap2j" name="tdmchap2j" id="tdmchap2j">Save</a></li>
          <li><a href="#chap2k" name="tdmchap2k" id="tdmchap2k">Select</a></li>
          <li><a href="#chap2l" name="tdmchap2l" id="tdmchap2l">Show</a></li>
          <li><a href="#chap2m" name="tdmchap2m" id="tdmchap2m"></a>Delete</li>
          <li><a href="#chap2n" name="tdmchap2n" id="tdmchap2n"></a>Find</li>
          <li><a href="#chap2o" name="tdmchap2o" id="tdmchap2o"></a>Replace</li>
      </ol>
      </li>
	</ol>
</aside>


<p>légende :</p>
<span class="pastille pastille-green">&nbsp;</span> Indispensable<br />
<span class="pastille pastille-orange">&nbsp;</span> Intéressant<br />
<span class="pastille pastille-blue">&nbsp;</span> Très utile<br />
<h1>Méthodes <img alt="icone méthode VBA" src="/assets/img/excelvba/icone_methode_vba.png"></h1>

<h2><a href="#tdmchap1" name="chap1" id="chap1">1- Principales méthodes des objets</a></h2>

<p>Les méthodes sont les procédures et fonctions attachées aux objets.</p>
<p>On les appelles par : NomObjet.NomMéthode argument1,argument2,…</p>
<p>Les méthodes apparaissent avec le logo <img alt="icone méthode VBA" src="/assets/img/excelvba/icone_methode_vba.png"> pendant la saisie du code dans la feuille de module.</p>

<p>Range("B2").Select sélectionne la cellule B2</p>
<p>Range("A1:C12").Select sélectionne la plage</p>
<p>Selection.Clear ‘efface le contenu des cellules sélectionnées</p>
<p>ActiveWorkbook.SaveAs "C:\factures\facture-2.xls" Enregistre le classeur actif dans un fichier</p>
<p>ActiveCell.Name = "Total" nomme la cellule active</p>
<p>Range(«B2:B45»).Name = "Total" nomme la plage</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2- Exemples</a></h2>

<p>Les méthodes les plus usitées dans les procédures sont :</p>

<h3><a href="#tdmchap2a" name="chap2a" id="chap2a">2.a. <span class="pastille pastille-green">&nbsp;</span>Activate</a></h3>
<h3><a href="#tdmchap2b" name="chap2b" id="chap2b">2.b. <span class="pastille pastille-green">&nbsp;</span>ClearContents</a></h3>

<p>Préférer la méthode <strong>ClearContents</strong> plutôt que <strong>Delete</strong> pour effacer le contenu d'une cellule. 
Ceci permet que les formules faisant référence à ces cellules ne soient pas obsolètes (#REF!).</p>
<pre>
Range("A1:A10").ClearContents
</pre>

<p><strong>ClearContents</strong> comme son nom lindique ne supprime que le contenu de la cellule. 
Si vous voulez également supprimer le formatage, utilisez simplement la méthode <strong>ClearContents</strong>.</p>
<h3><a href="#tdmchap2c" name="chap2c" id="chap2c">2.c. <span class="pastille pastille-green">&nbsp;</span>Close</a></h3>
<h3><a href="#tdmchap2d" name="chap2d" id="chap2d">2.d. <span class="pastille pastille-green">&nbsp;</span>Copy</a></h3>
<h3><a href="#tdmchap2e" name="chap2e" id="chap2e">2.e. <span class="pastille pastille-green">&nbsp;</span>Hide</a></h3>
<h3><a href="#tdmchap2f" name="chap2f" id="chap2f">2.f. <span class="pastille pastille-green">&nbsp;</span>Open</a></h3>
<h3><a href="#tdmchap2g" name="chap2g" id="chap2g">2.g. <span class="pastille pastille-green">&nbsp;</span>Paste</a></h3>
<h3><a href="#tdmchap2h" name="chap2h" id="chap2h">2.h. <span class="pastille pastille-green">&nbsp;</span>PasteSpecial</a></h3>
<h3><a href="#tdmchap2i" name="chap2i" id="chap2i">2.i. <span class="pastille pastille-green">&nbsp;</span>PrintOut</a></h3>
<h3><a href="#tdmchap2j" name="chap2j" id="chap2j">2.j. <span class="pastille pastille-green">&nbsp;</span>Save</a></h3>
<h3><a href="#tdmchap2k" name="chap2k" id="chap2k">2.k. <span class="pastille pastille-green">&nbsp;</span>Select</a></h3>
<h3><a href="#tdmchap2l" name="chap2l" id="chap2l">2.l. <span class="pastille pastille-green">&nbsp;</span>Show</a></h3>
<h3><a href="#tdmchap2m" name="chap2m" id="chap2m">2.m. <span class="pastille pastille-orange">&nbsp;</span></a>Delete</h3>

<p>Supprime réellement la ou les cellules sélectionnées. Attention cela créera des décalages. 
Si ce n'est pas possible un message d'erreur apparaitra dans l'éxecution du code.</p>
<h3><a href="#tdmchap2n" name="chap2n" id="chap2n">2.n. <span class="pastille pastille-orange">&nbsp;</span></a>Find</h3>
<h3><a href="#tdmchap2o" name="chap2o" id="chap2o">2.o. <span class="pastille pastille-orange">&nbsp;</span></a>Replace</h3>
<h3><a href="#tdmchap2p" name="chap2p" id="chap2p">2.p. <span class="pastille pastille-blue">&nbsp;</span></a>Autofill</h3>
<p>Utilisé pour copier une formule dans un grand nombre de cellules d'une même colonne. </p>
<pre>
Range("A1").Select
Selection.formula="=A1+C1"
Selection.Autofill
</pre>

