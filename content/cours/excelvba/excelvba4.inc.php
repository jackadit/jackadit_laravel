<?php
/**
 * BUT : cours excel VBA 4
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
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Principales propriétés des objets</a></li>		
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Exemples</a>		
		<ol class="alpha">
          <li><a href="#chap2a" name="tdmchap2a" id="tdmchap2a">CurrentRegion</a></li>
          <li><a href="#chap2b" name="tdmchap2b" id="tdmchap2b">End</a></li>
          <li><a href="#chap2c" name="tdmchap2c" id="tdmchap2c">FormulaLocal</a></li>
          <li><a href="#chap2d" name="tdmchap2d" id="tdmchap2d">Name</a></li>
          <li><a href="#chap2e" name="tdmchap2e" id="tdmchap2e">Offset</a></li>
          <li><a href="#chap2f" name="tdmchap2f" id="tdmchap2f">Path</a></li>
          <li><a href="#chap2g" name="tdmchap2g" id="tdmchap2g">Value</a></li>
          <li><a href="#chap2h" name="tdmchap2h" id="tdmchap2h">Hidden</a></li>
          <li><a href="#chap2i" name="tdmchap2i" id="tdmchap2i">Locked</a></li>
          <li><a href="#chap2j" name="tdmchap2j" id="tdmchap2j">NumberFormat</a></li>
          <li><a href="#chap2k" name="tdmchap2k" id="tdmchap2k">Visible</a></li>
          <li><a href="#chap2l" name="tdmchap2l" id="tdmchap2l">Save</a></li>
          <li><a href="#chap2m" name="tdmchap2m" id="tdmchap2m"></a>Count</li>
      </ol>
      </li>
	</ol>
    </aside>




<p>légende :</p>
<span class="pastille pastille-green">&nbsp;</span> Indispensable<br />
<span class="pastille pastille-orange">&nbsp;</span> Intéressant<br />
<span class="pastille pastille-blue">&nbsp;</span> Très utile<br />

<h1>Propriétés <img alt="icone propriété VBA" src="/assets/img/excelvba/icone_propriete_vba.png"></h1>
<h2><a href="#tdmchap1" name="chap1" id="chap1">1- Principales propriétés des objets</a></h2>

<p>Les objets Excel sont définis par un ensemble de <strong>propriétés</strong> (qu'on appelle aussi <strong>attributs</strong>).</p>

<p>On y fait référence par : <strong>Objet.Propriété</strong></p>

<p>On trouve les propriétés dans la fenêtre des propriétés de l'éditeur VB :</p>	
<img alt="fenêtre des propriétés VBA" src="/assets/img/excelvba/fenetre_proprietes.png">

<p>Ou dans le code directement lors de la saisie.</p>	 
<img alt="saisie des propriétés à la volée" src="/assets/img/excelvba/propriete_saisie.png">

<p>Les propriétés peuvent être consultées ou modifiées (affection Objet.Propriété=valeur) ;</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2- Exemples</a></h2>

<p>Les propriétés les plus usitées dans les procédures sont :</p>

<h3><a href="#tdmchap2a" name="chap2a" id="chap2a">2.a. <span class="pastille pastille-green">&nbsp;</span>CurrentRegion</a></h3>
<h3><a href="#tdmchap2b" name="chap2b" id="chap2b">2.b. <span class="pastille pastille-green">&nbsp;</span>End</a></h3>
<h3><a href="#tdmchap2c" name="chap2c" id="chap2c">2.c. <span class="pastille pastille-green">&nbsp;</span>FormulaLocal</a></h3>

<p>VBA utilise les noms des fonctions en anglais avcec la propriété Formula. La propriété FormulaLocal permet d'utiliser le nom français</p>
<pre>
Range("A1").Formula = "=SUM(A2:A8)"
Range("A1").FormulaLocal = "=SOMME(A2:A8)"
</pre>
<h3><a href="#tdmchap2d" name="chap2d" id="chap2d">2.d. <span class="pastille pastille-green">&nbsp;</span>Name</a></h3>

<p>Pour activer une feuille de calcul vous pouvez procéder de deux manières :</p>
<ul>
<li>Soit vous l'activer avec le nom de son onglet</li>
<pre>
Sheets("Nom de l'onglet").Activate
</pre>
<li>Soit vous utiliser la propriété <strong>Name</strong> dans la fenêtre des proriétés (le Name entre parenthèse)</li>
<pre>
NomDePropriete.Activate
</pre>
</ul>

<h3><a href="#tdmchap2e" name="chap2e" id="chap2e">2.e. <span class="pastille pastille-green">&nbsp;</span>Offset</a></h3>
<h3><a href="#tdmchap2f" name="chap2f" id="chap2f">2.f. <span class="pastille pastille-green">&nbsp;</span>Path</a></h3>

<p>Quand l'utilisateur ouvre un classeur depuis l'Explorateur de Windows, la commande d'ouverture de classeurs de Excel pointe vers le répertoire par défaut.</p>
<p>Si le classeur en cours nécessite l'ouverture d'un second classeur situé dans le même répertoire, Excel ne le trouvera pas.</p>
<p>La solution consiste à créer systématiquement une variable pour identifier le répertoire du classeur ouvert.</p>
<pre>
varChemin = Workbooks("Exercice1.xlsm").Path
</pre>

<p>Ensuite on utilise cette variable dans la procédure douverture du second classeur.</p>
<pre>
Workbooks.Open varChemin & "\Exercice2.xlsx"
</pre>

<h3><a href="#tdmchap2g" name="chap2g" id="chap2g">2.g. <span class="pastille pastille-green">&nbsp;</span>Value (valeur d‘une cellule)</a></h3>

<p>Pour insérer un texte dans une cellule, il faut mettre ce texte entre guillemets</p>
<pre>
Range("A1").Value = "Mon texte"
</pre>
<h3><a href="#tdmchap2h" name="chap2h" id="chap2h">2.h. <span class="pastille pastille-orange">&nbsp;</span>Hidden</a></h3>
<h3><a href="#tdmchap2i" name="chap2i" id="chap2i">2.i. <span class="pastille pastille-orange">&nbsp;</span>Locked</a></h3>
<h3><a href="#tdmchap2j" name="chap2j" id="chap2j">2.j. <span class="pastille pastille-orange">&nbsp;</span>NumberFormat</a></h3>
<h3><a href="#tdmchap2k" name="chap2k" id="chap2k">2.k. <span class="pastille pastille-orange">&nbsp;</span>Visible (à utiliser avec True et False pour afficher ou masquer)</a></h3>
<h3><a href="#tdmchap2l" name="chap2l" id="chap2l">2.l. <span class="pastille pastille-orange">&nbsp;</span>Save</a></h3>
<h3><a href="#tdmchap2m" name="chap2m" id="chap2m">2.m. <span class="pastille pastille-blue">&nbsp;</span>Count (nombre de cellules d‘une page, de feuilles de classeur…)</a></h3>

