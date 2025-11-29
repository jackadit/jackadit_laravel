<h1>Accessibilité : Les tableaux simples.</h1>
<h2>La problèmatique.</h2>

<p>Les tableaux de données constituent un environnement complexe pour les utilisateurs <strong>aveugles ou malvoyants</strong>, parce qu'ils ne peuvent en avoir une vision globale qui leur permettrait d'en comprendre facilement l'organisation.</p>
<p>Pour qu'un lecteur d'écran soit en mesure de percevoir les relations entre les données et les en-têtes qui leur donnent un sens, les cellules d'en-tête doivent être distinguées des cellules de données, et les relations entre les cellules doivent être explicitées lorsqu'il s'agit de tableaux complexes.</p>

<h2>La solution.</h2>

  <h3>Tableaux simples.</h3>
  <p>Pour un tableau simple, il s'agit de distinguer les cellules d'en-tête <code>&lt;th&gt;</code> des cellules de données <code>&lt;td&gt;</code>. Les lecteurs d'écran pourront ainsi indiquer à l'utilisateur le titre de la colonne ou de la ligne où il se trouve.</p>
  <p>Il faut faire ici une distinction entre tableau <strong>simple</strong> et tableau <strong>régulier</strong>. Un tableau simple peut très bien être irrégulier, c'est-à-dire qu'il peut comporter un nombre variable de rangées et de colonnes à cause de la présence de cellules fusionnées horizontalement ou verticalement.</p>
  <p>Toutefois, un tableau <strong>régulier</strong> qui comporte un nombre constant de rangées et de colonnes est toujours moins déroutant et donc plus facile à comprendre qu'un tableau irrégulier.</p>


  <h3>Titre.</h3>
  <p>Si un titre de tableau est utilisé, il ne doit pas être inclus dans le tableau (par exemple dans une cellule fusionnée occupant toute la première rangée), mais présenté avec l'élément <code>&lt;caption&gt;</code>.</p>
  <p>À moins que la structure du document ne l'indique, un titre de tableau devrait être codé avec l'élément <code>&lt;caption&gt;</code> plutôt qu'avec un en-tête de section.</p>
  <p>Pour un tableau simple, il suffit d'identifier les cellules d'en-têtes de lignes et de colonnes (voir la technique <a href="https://www.w3.org/TR/2010/NOTE-WCAG20-TECHS-20101014/H43">H43</a>).</p>


<h4>Exemple de code pour les cellules d'en-tête et les cellules de données.</h4>
<pre class="notice code">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;Modules&lt;/th&gt;
      &lt;th&gt;Heures&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tfoot&gt;
    &lt;tr&gt;
      &lt;th&gt;Total&lt;/th&gt;
      &lt;th&gt;26 h&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;Module 1&lt;/td&gt;
      &lt;td&gt;16 h&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;td&gt;Module 2&lt;/td&gt;
      &lt;td&gt;10 h&lt;/td&gt;
    &lt;/tr&gt;
  &lt;tbody&gt;
&lt;/table&gt;
</pre>

<div class="notice info">Attention, les trois balises doivent &ecirc;tre codées dans l'ordre suivant : 
<ol>
    <li><strong>&lt;thead&gt;</strong> ;</li>
    <li><strong>&lt;tfoot&gt;</strong> ;</li>
    <li><strong>&lt;tbody&gt;</strong>.</li>
</ol>
</div>

    <table class="table">
      <thead>
        <tr>
            <th>Modules</th>
          <th>Heures</th>
        </tr>
      </thead>
      <tfoot><!--début du pied du tableau -->
        <tr>
          <th>Total</th>
          <th>26 h</th>
        </tr>
        </tfoot>
      <tbody>
        <tr>
            <td>Module 1</td>
          <td>16 h</td>
        </tr>
        <tr>
            <td>Module 2</td>
          <td>10 h</td>
        </tr>
      </tbody>
    </table>

  <h3>Tableaux complexes.</h3>
  <p>Un tableau <strong>complexe</strong> de données se distingue par le fait qu'il comporte <strong>plus d'une rangée d'en-têtes ou plus d'une colonne d'en-têtes</strong> ou par le fait qu'au moins une cellule de donnée <strong>réfère à plus de deux cellules d'en-têtes</strong>.</p>
  <p>Un tableau <strong>complexe</strong> de données peut être <strong>régulier</strong> ou non, c'est-à-dire qu'il peut comporter ou non un nombre constant de rangées et de colonnes.</p>
  <p><strong>Le fait qu'un tableau soit irrégulier ne suffit pas à le classer parmi les tableaux complexes</strong>, mais cette irrégularité ajoute certainement un niveau de difficulté supplémentaire pour l'utilisateur et devrait être évitée lorsque c'est possible. 
  Notons d'ailleurs que les lecteurs d'écran ont de la difficulté avec les cellules fusionnées dans les tableaux complexes, JAWS est le meilleur dans ce domaine mais a de la difficulté à gérer les cellules fusionnées verticalement.</p>
  <p>Il est donc important, chaque fois que possible, de concevoir des tableaux qui soient à la fois <strong>simples</strong> et <strong>réguliers</strong>.</p>
  <p>Notons aussi qu'il est possible d'offrir une version de rechange où l'on résume l'ensemble des titres en une seule rangée et en une seule colonne et où l'on éclatera toutes les cellules fusionnées en répétant leur contenu autant de fois que nécessaire. 
  Si l'on choisit cette approche, il faut offrir un lien vers cette version simplifiée immédiatement avant l'entrée dans le tableau de données complexe. 
  Ce lien devrait conduire à une autre page qui devrait comporter un lien pour revenir à la page orginale, mais à la fin du tableau.</p>
  

  <p>Version complexe&nbsp;:</p>
  <table class="table">
    <tbody><tr>
      <th id="t1r1c1">&nbsp;</th>
      <th id="t1r1c2">&nbsp;</th>
      <th id="t1r1c3" colspan="3">Produits importés</th>
      <th id="t1r1c6" colspan="3">Produits locaux</th>
    </tr>
    <tr>
      <th id="t1r2c1">&nbsp;</th>
      <th id="t1r2c2">&nbsp;</th>
      <th id="t1r2c3">Fraises</th>
      <th id="t1r2c4" colspan="2">Cerises</th>
      <th id="t1r2c6">Fraises</th>
      <th id="t1r2c7" colspan="2">Cerises</th>
    </tr>
    <tr>
      <th id="t1r3c1">&nbsp;</th>
      <th id="t1r3c2">&nbsp;</th>
      <th id="t1r3c3">&nbsp;</th>
      <th id="t1r3c4">Catégorie A</th>
      <th id="t1r3c5">Catégorie B</th>
      <th id="t1r3c6">&nbsp;</th>
      <th id="t1r3c7">Catégorie A</th>
      <th id="t1r3c8">Catégorie B</th>
    </tr>
    <tr>
      <th id="t1r4c1" rowspan="2">Cannes</th>
      <th id="t1r4c2">En gros</th>
      <td headers="t1r1c3 t1r2c3 t1r3c3 t1r4c1 t1r4c2">1,00 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c4 t1r4c1 t1r4c2">3,00 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c5 t1r4c1 t1r4c2">2,00 €</td>
      <td headers="t1r1c6 t1r2c6 t1r3c6 t1r4c1 t1r4c2">1,20 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c7 t1r4c1 t1r4c2">3,00 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c8 t1r4c1 t1r4c2">2,00 €</td>
    </tr>
    <tr>
      <th id="t1r5c2">Au détail</th>
      <td headers="t1r1c3 t1r2c3 t1r3c3 t1r4c1 t1r5c2">2,00 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c4 t1r4c1 t1r5c2">4,00 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c5 t1r4c1 t1r5c2">3,00 €</td>
      <td headers="t1r1c6 t1r2c6 t1r3c6 t1r4c1 t1r5c2">2,40 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c7 t1r4c1 t1r5c2">4,00 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c8 t1r4c1 t1r5c2">3,00 €</td>
    </tr>
    <tr>
      <th id="t1r6c1" rowspan="2">Nice</th>
      <th id="t1r6c2">En gros</th>
      <td headers="t1r1c3 t1r2c3 t1r3c3 t1r6c1 t1r6c2">1,50 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c4 t1r6c1 t1r6c2">S/O</td>
      <td headers="t1r1c3 t1r2c4 t1r3c5 t1r6c1 t1r6c2">3,00 €</td>
      <td headers="t1r1c6 t1r2c6 t1r3c6 t1r6c1 t1r6c2">2,00 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c7 t1r6c1 t1r6c2">4,00 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c8 t1r6c1 t1r6c2">3,00 €</td>
    </tr>
    <tr>
      <th id="t1r7c2">Au détail</th>
      <td headers="t1r1c3 t1r2c3 t1r3c3 t1r6c1 t1r7c2">2,50 €</td>
      <td headers="t1r1c3 t1r2c4 t1r3c4 t1r6c1 t1r7c2">S/O</td>
      <td headers="t1r1c3 t1r2c4 t1r3c5 t1r6c1 t1r7c2">4,00 €</td>
      <td headers="t1r1c6 t1r2c6 t1r3c6 t1r6c1 t1r7c2">2,60 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c7 t1r6c1 t1r7c2">5,00 €</td>
      <td headers="t1r1c6 t1r2c7 t1r3c8 t1r6c1 t1r7c2">4,00 €</td>
    </tr>
  </tbody></table>
  <p>Version simplifiée&nbsp;:</p>
  <table class="table">
    <tbody><tr>
      <th>&nbsp;</th>
      <th>Produits importés, Fraises</th>
      <th>Produits importés, Cerises, Catégorie A</th>
      <th>Produits importés, Cerises, Catégorie B</th>
      <th>Produits locaux, Fraises</th>
      <th>Produits locaux, Cerises, Catégorie A</th>
      <th>Produits locaux, Cerises, Catégorie B</th>
    </tr>
    <tr>
      <th>Cannes, En gros</th>
      <td>1,00 €</td>
      <td>3,00 €</td>
      <td>2,00 €</td>
      <td>1,20 €</td>
      <td>3,00 €</td>
      <td>2,00 €</td>
    </tr>
    <tr>
      <th>Cannes, Au détail</th>
      <td>2,00 €</td>
      <td>4,00 €</td>
      <td>3,00 €</td>
      <td>2,40 €</td>
      <td>4,00 €</td>
      <td>3,00 €</td>
    </tr>
    <tr>
      <th>Nice, En gros</th>
      <td>1,50 €</td>
      <td>S/O</td>
      <td>3,00 €</td>
      <td>2,00 €</td>
      <td>4,00 €</td>
      <td>3,00 €</td>
    </tr>
    <tr>
      <th>Nice, Au détail</th>
      <td>2,50 €</td>
      <td>S/O</td>
      <td>4,00 €</td>
      <td>2,60 €</td>
      <td>5,00 €</td>
      <td>4,00 €</td>
    </tr>
  </tbody></table>
  <p>Pour les tableaux <strong>complexes</strong> de données, vous devez associer explicitement toutes les cellules (sauf celles de la première ligne et de la première colonne) avec toutes les cellules d'en-têtes correspondantes.</p>
  <p>Il faut donc d'abord assigner un attribut <em>id</em> unique (pour l'ensemble de la page) à chaque cellule d'en-tête.</p>
  <p>Par la suite, il faut incorporer un attribut <em>headers</em> à chaque cellule de données. Cet attribut placera entre guillemets, séparés par un espace, tous les <em>id</em> des cellules de titre qui s'appliquent à la cellule courante.</p>
  <p>Ce travail doit habituellement être réalisé à la main directement dans le code, car la plupart des logiciels auteurs n'ont pas prévu d'interface pour le faire. Il existe toutefois un outil développé par Vision Australia (en anglais seulement) qui permet, non seulement d'évaluer un tableau complexe, mais aussi de le coder manuellement ou automatiquement avec les attributs <em>id</em> et <em>headers</em>.</p>
  <p>Vous le trouverez à cette adresse&nbsp;: <a rel="nofollow" class="external" target="_blank" href="http://www.visionaustralia.org/business-and-professionals/digital-access/resources/tools-to-download/complex-data-table-markup-toolbar" lang="en">Complex Data Table Markup Toolbar</a>.</p>
  <p>Pour plus de détails et des exemples, consultez la technique&nbsp;: <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/WCAG-TECHS/H43.html" hreflang="en" lang="en">H43: Using id and headers attributes to associate data cells with header cells in data tables</a>.</p>
  

<h3>Exemple de code pour l'utilisation de id et headers.</h3>
<pre class="notice code">
&lt;tr&gt;
    &lt;th id="l1c1"&gt;Destination&lt;/th&gt;
    &lt;th id="l1c2"&gt;Dates du déplacement&lt;/th&gt;
    &lt;th id="l1c3"&gt;Repas&lt;/th&gt;
    &lt;th id="l1c4"&gt;Hôtel&lt;/th&gt;
    &lt;th id="l1c5"&gt;Transport&lt;/th&gt;
    &lt;th id="l1c6"&gt;Total&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;th id="l2c1" headers="l1c1" rowspan="3"&gt;Nice&lt;/th&gt;
    &lt;th id="l2c2" headers="l1c2 l2c1"&gt;25 août&lt;/th&gt;
    &lt;td headers="l1c3 l2c1 l2c2"&gt;37&lt;/td&gt;
    &lt;td headers="l1c4 l2c1 l2c2"&gt;112&lt;/td&gt;
    &lt;td headers="l1c5 l2c1 l2c2"&gt;45&lt;/td&gt;
    &lt;td headers="l1c6 l2c1 l2c2"&gt;194&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;th id="l3c2" headers="l1c2 l2c1"&gt;26 août&lt;/th&gt;
    &lt;td headers="l1c3 l2c1 l3c2"&gt;27&lt;/td&gt;
    &lt;td headers="l1c4 l2c1 l3c2"&gt;112&lt;/td&gt;
    &lt;td headers="l1c5 l2c1 l3c2"&gt;45&lt;/td&gt;
    &lt;td headers="l1c6 l2c1 l3c2"&gt;184&lt;/td&gt;
&lt;/tr&gt;
</pre>

    <table class="table">
      <tbody>
        <tr>
          <th id="l1c1">Destination</th>
          <th id="l1c2">Dates du déplacement</th>
          <th id="l1c3">Repas</th>
          <th id="l1c4">Hôtel</th>
          <th id="l1c5">Transport</th>
          <th id="l1c6">Total</th>
        </tr>
        <tr>
          <th id="l2c1" headers="l1c1" rowspan="2">Nice</th>
          <th id="l2c2" headers="l1c2 l2c1">25 août</th>
          <td headers="l1c3 l2c1 l2c2">37</td>
          <td headers="l1c4 l2c1 l2c2">112</td>
          <td headers="l1c5 l2c1 l2c2">45</td>
          <td headers="l1c6 l2c1 l2c2"><br></td>
        </tr>
        <tr>
          <th id="l3c2" headers="l1c2 l2c1">26 août</th>
          <td headers="l1c3 l2c1 l3c2">27</td>
          <td headers="l1c4 l2c1 l3c2">112</td>
          <td headers="l1c5 l2c1 l3c2">45</td>
          <td headers="l1c6 l2c1 l3c2"><br></td>
        </tr>
      </tbody>
    </table>

  <h3>Sommaire et légende.</h3>
  <p>Les tableaux de données complexes d'un site Web public ont besoin d'un sommaire, et peuvent également bénéficier d'une légende.</p>
  <p>Le sommaire peut compenser le manque de vision globale de l'utilisateur non-voyant en donnant une brève description de l'organisation du tableau. Il est inscrit dans l'attribut summary et peut être aussi long que nécessaire.</p>
  <p>Un bon sommaire doit décrire les grandes catégories d'informations présentées par colonne et par ligne, et signaler les irrégularités éventuelles correspondant aux cellules fusionnées. </p>
  <p>L'effet recherché ici est une vue d'ensemble, c'est pourquoi il n'est pas utile de reprendre dans le sommaire tous les titres de colonne et de ligne, mais plutôt d'en décrire les grandes catégories.<br>
    <br>
    La légende, quant à elle, est une information complémentaire qui vient chapeauter un tableau à la façon d'un titre. Elle s'inscrit dans l'élément &lt;caption&gt;, qui doit être placé immédiatement sous l'élément &lt;table&gt;.<br>
    <br>
    <strong>ATTENTION&nbsp;:</strong></p>
  <ul>
    <li>Vous ne devez pas inscrire un sommaire vide (summary="") pour les tableaux de présentation, parce que c'est un des critères utilisés par les lecteurs d'écran pour distinguer entre les tableaux de présentation et les tableaux de données. De même, les tableaux de mise en page doivent être exempts de titre &lt;caption&gt; et de cellules d'en-tête &lt;th&gt;.</li>
    <li>Des données tabulaires ne doivent pas être formatées avec des espaces pour simuler un balisage correct, car l'utilisateur ne pourrait naviguer de cellule en cellule dans un tel tableau avec un lecteur d'écran. </li>
  </ul>
  <h3>Exemple de code pour l'utilisation d'un sommaire et d'une légende</h3>
  <pre class="notice code">&lt;table summary="Ce tableau présente les frais de voyage. 
    Par lignes, vous trouverez les destinations et les dates ainsi qu'un grand total. 
    Par colonnes, sont présentées les catégories de dépenses ainsi qu'un total. 
    Notez que la première colonne comporte des cellules fusionnées.&gt;
    &lt;caption&gt;Rapport des frais de voyage&lt;/caption&gt;
  &lt;/table&gt; [...]</pre>

  <h3>Abréviations.</h3>
  <p>Quand les titres des colonnes ou des lignes sont longs, et qu'il serait fastidieux pour l'utilisateur d'entendre répéter cette information à plusieurs reprises, il est préférable d'utiliser des abréviations. Par exemple, « Estimation des dépenses pour les soins de santé par les agences du Gouvernement durant la prochaine décennie » pourrait être abrégé par&nbsp;: « Estimation des dépenses ».</p>
  <p>De même, si un tableau comporte déjà des abréviations dans les cellules d'en-tête, on peut utiliser cette même technique pour en donner une interprétation plus compréhensible. Par exemple, un calendrier dont les jours de la semaine sont identifiés par deux lettres seulement (lu, ma, me, etc.) et qui serait donc peu compréhensible en synthèse vocale.</p>
  <p>ATTENTION&nbsp;: Les abréviations utilisées dans les cellules d'en-têtes ne sont reconnues par JAWS que dans les tableaux codés avec les attributs <em>id</em> et <em>headers</em>.</p>
  <p>Dans un tableau de données simple, il vaut donc mieux utiliser la balise &lt;abbr&gt; plutôt que l'attribut du même nom.</p>
  <h3>Exemples de code pour l'utilisation d'abréviations</h3>
  
  <div class="notice code">&lt;th abbr="Estimation des dépenses de santé"&gt; Estimation des dépenses pour les soins de santé par le gouvernement durant la prochaine décennie&lt;/th&gt; ou &lt;th abbr="lundi"&gt;lu&lt;/th&gt;</div>


	
	

<h3>Les attributs d'un tableau.</h3>

<p>Voici un tableau simple qui montre certaines des caractéristiques d'un modèle de tableau <abbr title="HyperText Markup Language" lang="en">HTML</abbr>.
Soit le tableau suivant&nbsp;:</p>
<pre class="notice code">&lt;table border="1"
  	summary="Statistiques concernant l'expédition des colis d'une entreprise : hauteur et poids moyens, et le pourcentage de ceux expédiés en urgence (vers la France ou l'étranger)."&gt;
&lt;caption&gt;Une table test avec des cellules fusionnées&lt;/caption&gt;
&lt;tr&gt;
	  &lt;th rowspan="2"&gt;&lt;/th&gt;
	  &lt;th colspan="2"&gt;Moyenne&lt;/th&gt;
	  &lt;th rowspan="2"&gt;Urgence&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
	  &lt;th&gt;hauteur&lt;/th&gt;
	  &lt;th&gt;poids&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
	  &lt;th&gt;France&lt;/th&gt;
	  &lt;td&gt;15 cm&lt;/td&gt;
	  &lt;td&gt;0.512&lt;/td&gt;
	  &lt;td&gt;46%&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	  &lt;th&gt;Étranger&lt;/th&gt;
	  &lt;td&gt;23 cm&lt;/td&gt;
	  &lt;td&gt;1.206&lt;/td&gt;
	  &lt;td&gt;27%&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
</pre>
<p>Celui-ci pourrait être restitué par un téléimprimeur <span class="vo">[ndt. tty device]</span> comme ceci&nbsp;:
</p>
<pre>Un tableau test avec des cellules fusionnées
    /-----------------------------------------\
    |          |      Moyenne      |          |
    |          |-------------------|  Urgence |
    |          | hauteur |  poids  |          |
    |-----------------------------------------|
    | France   | 15 cm   | 0.512   |   46%    |
    |-----------------------------------------|
    | Étranger | 23 cm   | 1.206   |   27%    |
    \-----------------------------------------/
</pre>
<p>ou comme cela par un agent utilisateur graphique&nbsp;:</p>

<table class="table" 
  	summary="Statistiques concernant l'expédition des colis d'une entreprise : hauteur et poids moyens, et le pourcentage de ceux expédiés en urgence (vers la France ou l'étranger).">
<caption>Un tableau test avec des cellules fusionnées</caption>
<tbody>
<tr>
	<th rowspan="2"></th>
	<th colspan="2">Moyenne</th>
    <th rowspan="2">Urgence</th>
</tr>
<tr>
	<th>hauteur</th>
	<th>poids</th>
</tr>
<tr>
	<th>France</th>
	<td>15 cm</td>
	<td>0.512</td>
	<td>46%</td>
</tr>
<tr>
	<th>Étranger</th>
	<td class="border-defaut">23 cm</td>
	<td class="border-defaut">1.206</td>
	<td class="border-defaut">27%</td>
</tr>
</tbody>
</table>


<h3> L'association des indications de rubrique aux cellules de données.</h3>
<p>Les agents utilisateurs non-visuels, tels que les synthétiseurs de parole et les lecteurs Braille, peuvent faire appel 
    aux attributs suivants des éléments <code>TD</code> et <code>th</code> pour restituer les cellules de la table plus intuitivement :</p>

<li>Pour une cellule de données particulière, l'attribut <code>headers</code> liste les cellules qui fournissent des indications de rubrique pertinentes.
    <p>Dans ce but, chaque cellule de rubrique doit être nommée en utilisant l'attribut <code>id</code>.</p>
    <p>Remarquez qu'il n'est pas toujours possible de distinguer clairement les cellules de rubrique de celles de données.</p>
    <p>On devrait utiliser l'élément <code>td</code> pour de telles cellules en même temps que les attributs <code>id</code>
        ou <code>scope</code>, selon celui qui convient ;</p>
<p>Les auteurs peuvent choisir d'employer cet attribut plutôt que l'attribut <code>headers</code>, selon celui qui convient le mieux ;
    aux données qui les concernent ;</p></li>
<li>L'attribut <code>abbr</code> spécifie un nom de table abrégé pour les cellules de rubrique, de sorte que les agents utilisateurs puissent restituer les indications de rubrique plus rapidement.</li>


<p class="example">Dans l'exemple suivant, nous assignons des indications de rubrique aux cellules, en définissant l'attribut <code>headers</code>.</p>


<pre class="notice code">
&lt;table border="1" summary="Cette table représente le nombre de tasses de café
                consommées par chaque sénateur, le type de café (décafféiné ou normal),
&lt;caption&gt;Les tasses de café consommées par chaque sénateur&lt;/caption&gt;
&lt;tr&gt;
   &lt;th id="t1"&gt;Nom&lt;/th&gt;
   &lt;th id="t2"&gt;Tasses&lt;/th&gt;
   &lt;th id="t3" abbr="Type"&gt;Type de café&lt;/th&gt;
   &lt;th id="t4"&gt;Sucre ?&lt;/th&gt;
&lt;tr&gt;
&lt;/tr&gt;
   &lt;td headers="t1"&gt;T. Sexton&lt;/td&gt;
   &lt;td headers="t2"&gt;10&lt;/td&gt;
   &lt;td headers="t3"&gt;Espresso&lt;/td&gt;
   &lt;td headers="t4"&gt;Non&lt;/td&gt;
&lt;tr&gt;
&lt;/tr&gt;
   &lt;td headers="t1"&gt;J. Dinnen&lt;/td&gt;
   &lt;td headers="t2"&gt;5&lt;/td&gt;
   &lt;td headers="t3"&gt;Déca.&lt;/td&gt;
   &lt;td headers="t4"&gt;Oui&lt;/td&gt;
&lt;/table&gt;
&lt;/tr&gt;
</pre>

<p>Un synthétiseur de parole pourrait restituer cette table comme suit:</p>

<p>Résumé : Cette table représente le nombre de tasses de café consommées par chaque sénateur, le type de café (déca. ou normal),</p>
<p>Nom : T. Sexton,   Tasses : 10,   Type : Espresso,   Sucre : Non</p>
<p>Nom : J. Dinnen,   Tasses : 5,    Type : Déca.,      Sucre : Oui</p>

<p>Remarquer la manière dont la rubrique « Type de café » s'abrège en « Type », en utilisant l'attribut <code>abbr</code>.</p>

<p>Le même exemple, en substituant l'attribut <code>scope</code> à l'attribut <code>headers</code>.</p>

<p>Remarquez la valeur "col" de l'attribut <code>scope</code>, qui signifie « toutes les cellules dans la colonne courante » :</p>


<pre class="notice code">
&lt;table border="1" summary="Cette table représente le nombre de tasses de café consommées par chaque sénateur, le type de café (décafféiné ou normal),
et s'il est sucré ou non."&gt;
&lt;tr&gt;
    &lt;th scope="col"&gt;Nom&lt;/th&gt;
    &lt;th scope="col"&gt;Tasses&lt;/th&gt;
    &lt;th scope="col" abbr="Type"&gt;Type de café&lt;/th&gt;
    &lt;th scope="col"&gt;Sucre ?&lt;/th&gt;
&lt;tr&gt;
&lt;/tr&gt;
    &lt;td&gt;T. Sexton&lt;/td&gt;
    &lt;td&gt;10&lt;/td&gt;
    &lt;td&gt;Espresso&lt;/td&gt;
    &lt;td&gt;Non&lt;/td&gt;
&lt;tr&gt;
&lt;/tr&gt;
    &lt;td&gt;J. Dinnen&lt;/td&gt;
    &lt;td&gt;5&lt;/td&gt;
    &lt;td&gt;Déca.&lt;/td&gt;
    &lt;td&gt;Oui&lt;/td&gt;
&lt;/table&gt;
&lt;/tr&gt;
</pre>

<p>Voici un exemple un peu plus complexe illustrant l'utilisation des autres valeurs de l'attribut <code>scope</code>&nbsp;:</p>
<pre class="notice code">&lt;table border="1" cellpadding="5" cellspacing="2"
  summary="Les cours proposés dans le département QLIO, arrangés selon le nom du cours, le parcours,
           le code apogee, le coef et la mecc."&gt;
  &lt;tr&gt;
    &lt;th colspan="5" scope="colgroup"&gt;Cours du département QLIO&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;th scope="col" abbr="Nom"&gt;Nom du cours&lt;/th&gt;
    &lt;th scope="col" abbr="Prof."&gt;Parcours&lt;/th&gt;
    &lt;th scope="col"&gt;Code apogee&lt;/th&gt;
    &lt;th scope="col"&gt;Coef&lt;/th&gt;
    &lt;th scope="col"&gt;MECC&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td scope="row"&gt;R5.08 - Pérennisation d’une certification système.&lt;/td&gt;
    &lt;td&gt;Transverse&lt;/td&gt;
    &lt;td&gt;HA39ER18&lt;/td&gt;
    &lt;td&gt;1.5&lt;/td&gt;
    &lt;td&gt;Contrôle + Moyenne travaux&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td scope="row"&gt;R5.MTD14 - Interopérabilité et hygiène numérique.&lt;/td&gt;
    &lt;td&gt;MTD&lt;/td&gt;
    &lt;td&gt;HA3FER1E&lt;/td&gt;
    &lt;td&gt;1.5&lt;/td&gt;
    &lt;td&gt;Moyenne travaux + Rapport&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td scope="row"&gt;R5.OSC14 - Distribution, transport et Supply Chain.&lt;/td&gt;
    &lt;td&gt;OSC&lt;/td&gt;
    &lt;td&gt;HA3HER1E&lt;/td&gt;
    &lt;td&gt;1.5&lt;/td&gt;
    &lt;td&gt;Contrôle + Moyenne travaux&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>


<table class="table"
  summary="Les cours proposés dans le département QLIO, arrangés selon le nom du cours, le parcours,
           le code apogee, le coef et la mecc.">
  <tr>
    <th colspan="5" scope="colgroup">Cours du département QLIO</th>
  </tr>
  <tr>
    <th scope="col" abbr="Nom">Nom du cours</th>
    <th scope="col" abbr="Prof.">Parcours</th>
    <th scope="col">Code apogee</th>
    <th scope="col">Coef</th>
    <th scope="col">MECC</th>
  </tr>
  <tr>
    <td scope="row">R5.08 - Pérennisation d’une certification système.</td>
    <td>Transverse</td>
    <td>HA39ER18</td>
    <td>1.5</td>
    <td>Contrôle + Moyenne travaux</td>
  </tr>
  <tr>
    <td scope="row">R5.MTD14 - Interopérabilité et hygiène numérique.</td>
    <td>MTD</td>
    <td>HA3FER1E</td>
    <td>1.5</td>
    <td>Moyenne travaux + Rapport</td>
  </tr>
  <tr>
    <td scope="row">R5.OSC14 - Distribution, transport et Supply Chain.</td>
    <td>OSC</td>
    <td>HA3HER1E</td>
    <td>1.5</td>
    <td>Contrôle + Moyenne travaux</td>
  </tr>
</table>

