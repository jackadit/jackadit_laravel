<h1>Accessibilité : WAI-ARIA.</h1>
<h2>Introduction à ARIA.</h2>

<p><strong>WAI-ARIA, (Web Accessibility Initiative - Accessible Rich Internet Applications), est une spécification technique du W3C qui a pour but d'améliorer l'accessibilité des contenus dynamiques développés avec Ajax , HTML, JavaScript, et les technologies connexes</strong>.</p>
<p>Le HTML ne propose pas de fonctionnalité permettant de créer du contenu dynamique ni des interfaces de contrôle mais permet l'insertion d'applets (Flash, Java) et de scripts traités côté client (généralement Javascript). 
Les développeurs d'applications web contournent ces limitations en créant leurs propres widgets (contrôles graphiques) associés à Javascript pour leur ajouter le comportement désiré. 
Ceux-ci ne sont malheureusement souvent pas accessibles aux utilisateurs souffrant de handicaps, notamment à ceux utilisant des lecteurs d'écran ou à ceux ne pouvant pas utiliser de souris ni d'équipement équivalent.</p>
<p>WAI-ARIA (qui sera abrégé ARIA à partir de maintenant) décrit comment ajouter de la sémantique par l'ajout de <strong>rôles</strong>, de <strong>propriétés</strong> ou d'<strong>états</strong> d'information aux contenus HTML afin de transmettre correctement les comportements de l'interface utilisateur et des informations structurelles aux technologies d'assistance.</p>

  <h3>Qu'est - ce que WAI-ARIA ?</h3>

<p>Dans la pratique, WAI-ARIA nous donne plus d'attributs a affecter aux éléments HTML. Ces nouveaux attributs permettent d'accroître la sémantique de nos documents, de faciliter le développement des applications Internet riches et d'améliorer l'accessibilité.</p>
<p>Il existe deux types d'attributs :</p>
<ol>
<li>les attributs <abbr title="role">role</abbr></li>
<p>Les attributs <abbr title="role">role</abbr> et les valeurs qu'ils peuvent avoir nous donne des informations sur l'objectif d'un élément HTML (par exemple : est-il un élément de navigation ? contient-ils des données principales ? etc.).</p>
<p>Les technologies d'assistance peuvent utiliser ces informations pour accéder directement au contenu principal, détecter immédiatement la navigation principale du document, etc.</p>
<li>les attributs <abbr title="aria">aria-.*</abbr>  ( ".*" Ce qui signifie que ce qui suit "aria-" est variable).</li>
<p>Les aria-.* attributs et les valeurs qu'ils peuvent avoir nous donne des informations sur l'état d'un élément, et sont plus orientés vers le développement d'applications Rich.</p>
</ol>

<p>Ce document met l'accent sur les <abbr title="role Landmark">rôles WAI-ARIA Landmark</abbr> les plus courants. Aussi, juste parce que vous les voyez ici ne signifie pas qu'ils doivent tous être utilisés, tout dépend de la teneur réelle de votre page. Certains rôles sont appropriés pour plus de ce qui est montré ici, par exemple , complementaryest adapté pour sidebars et aussi d'autres types de contenu, pour en savoir plus sur un rôle donné, cliquez simplement sur eux.</p>

<h2>Applications web.</h2>
<p>Les applications web essaient d'imiter les applications bureau classiques avec l'inconvénient d'être elle-même exécutée à l'intérieur d'une application bureau : le navigateur.</p>
<p>Pour simuler les applications bureau classiques, les applications web utilisent Javascript pour la partie comportement. Par exemple, pour  récupérer des enregistrements dans une base de données pour mettre à jour des informations sur la page, des techniques comme Ajax seront utilisées.</p>
<p>Puisque HTML propose très peu de widgets (ce mot désigne les contrôles d'interface), il est parfois nécessaire de créer des composants plus complexes pour une application web, comme une case à cocher proposant trois états, ou un bouton glissant (slider). Ces composants sont habituellement créés en utilisant des éléments graphiques couplés à Javascript pour qu'ils ressemblent et se comportent comme des composants natifs.</p>

<h3>Problèmes d'accessibilité avec la reproduction de composants natifs.</h3>
<p>Ces Widgets améliorent certe l'expérience utilisateur, mais les techniques utilisées posent de graves problèmes d'accessibilité pour les utilisateurs de technologies d'assistance, comme les lecteurs d'écran.</p>
<ul>
<li>Les composants créés de cette manière sont rarement accessibles au clavier.</li>
<li>Le rôle d'un composant, «&nbsp;ce qu'il fait&nbsp;», n'est pas accessible aux technologies d'assistance.</li>
<li>Les états et propriétés d'un composant ne sont pas accessibles aux technologies d'assistance.</li>
<li>Les mises à jour ne sont pas signalées aux technologies d'assistance.</li>
</ul>
<p>Tous les problèmes listés ci-dessus sont résolus par la spécification <strong>ARIA</strong></p>

<h3>Navigation au clavier.</h3>
<p>Pouvoir interagir avec les contrôles d'interface à l'aide du clavier est primordial pour rendre un système plus accessible. Les widgets devraient être conçus de manière à ce qu'un élément puisse recevoir le focus, comme le fait par défaut un élément <code>input</code> de type <code>image</code> (<code>&lt;input type="image" ...&gt;</code>). et non comme un élément <code>img</code>, ou comme plusieurs éléments placés dans un conteneur <code>div</code> qui ne reçoit pas le focus.</p>
<p>L'attribut <code>tabindex</code> apparu avec HTML4, est utilisable sur les éléments suivants&nbsp;: <code>a</code>, <code>area</code>, <code>button</code>, <code>input</code>, <code>object</code>, <code>select</code>, et <code>textarea</code>. Cet attribut accepte un nombre positif compris entre <code>0</code> et <code>32767</code>.</p>
<p>La navigation par tabulation commence avec les éléments ayant la plus petite valeur <code>tabindex</code>, et se poursuit jusqu'à l'élément ayant la valeur la plus élevée. Les éléments ayant pour valeur <code>0</code> sont visités dans leur ordre naturel d'apparition dans le code. Si le document a une structure logique, l'attribut <code>tabindex</code> n'est pas requis car les éléments d'interface sont naturellement définis dans l'ordre de tabulation.</p>
<p>ARIA <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#tabindex">étend l'attribut tabindex</a>, lui permettant d'être utilisé sur tous les éléments visibles.<br />ARIA autorise également l'utilisation d'une valeur <strong>négative</strong> pour les éléments <strong>ne devant pas être proposés à la navigation au clavier</strong>, mais pouvant recevoir le focus par programmation. Bien que la valeur d'un attribut tabindex négatif n'aie pas d'importance (l'élément ne pourra jamais recevoir le focus au clavier), la valeur <code>-1</code> est couramment utilisée lorsqu'un élément ne doit pas recevoir le focus au clavier, mais uniquement par programmation.<br>
Par exemple, vous pourriez réaliser un menu dont l'élément conteneur est accessible à l'aide de la tabulation clavier, mais pas les éléments qu'il contient. Ces éléments peuvent alors être programmés pour être parcourus à l'aide des touches fléchées du clavier. Ainsi, les utilisateur n'ont pas à utiliser la touche tabulation sur chacun des éléments du menu, ce qui leur permet de mieux accéder au document. C'est vrai pour tous les widgets ayant une série de composants nécessitant un accès au clavier, comme la représentation d'une arborescence.</p>

<h4>Ajouter un élément à l'ordre naturel des tabulations.</h4>
<p>L'exemple suivant affecte la valeur <code>0</code> à l'attribut <code>tabindex</code> pour placer l'élément <code>div</code> dans l'ordre des tabulations, ce qui permettra  d'y accéder à l'aide de la navigation clavier.</p>

<pre class="notice code">
  &lt;div tabindex="0"&gt;
  ...
  &lt;/div&gt;
</pre>

<h4>Tabindex négatif.</h4>
<p>L'exemple suivant utilise un <code>tabindex</code> d'une valeur négative, cet élément pourra alors recevoir le focus par programmation.</p>

<pre class="notice code">
  &lt;div id="progaccess" tabindex="-1"&gt;
  ...
  &lt;/div&gt;
</pre>

<p>Dans cet exemple, l'élément <code>div</code> n'est pas placé dans l'ordre des tabulations, mais possède un attribut <code>tabindex</code> d'une valeur de <code>-1</code>. Le script qui suit sélectionne l'élément précédemment défini et utilise la méthode <code>focus()</code> pour activer le focus sur cet élément.</p>

<pre class="notice code">
  var objDiv = document.getElementById('progaccess');

  // Focus on the element
  objDiv.focus();
</pre>


<h2>Utilisation de WAI-ARIA.</h2>

<p>Des applications web complexes deviennent inaccessibles lorsque les technologies d'assistance ne peuvent pas déterminer la sémantique qui se cache derrière une partie d'un document ou lorsque l'utilisateur n'est pas en mesure de naviguer efficacement vers toutes les parties de l'application (voir <cite><a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/2010/WD-wai-aria-primer-20100916/"><abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> Primer</a></cite> [<cite><a rel="nofollow" class="external" target="_blank" href="#bib-ARIA-PRIMER">ARIA-PRIMER</a></cite>]).</p>
<p>ARIA divise la sémantique en <code>rôles</code> (le type définissant un élément de l'interface utilisateur), en <code>états</code> et en <code>propriétés</code> prises en charge par les rôles.</p>

<h3> Rôles ARIA.</h3>

<p>Un rôle ARIA se défini sur un élément en utilisant un attribut tel que décrit dans <cite><a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/2011/WD-role-attribute-20110113/">Role Attribute</a></cite> [<cite><a href="#bib-ROLE">ROLE</a></cite>].</p>

<pre class="notice code">
&lt;li role="menuitem"&gt;Ouvrir fichier ...&lt;/li&gt;
</pre>

<p>Les rôles sont classés dans les catégories suivantes :</p>
<ol>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#abstract_roles">Abstract Roles</a> pour les concepts généraux</li>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#widget_roles">Widget Roles</a> pour les composant d'interface graphique</li>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#document_structure_roles">Document Structure Roles</a> pour les rôles liés à la structure du document</li>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#landmark_roles">Landmark Roles</a> pour ceux liés à la navigation</li>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#live_region_roles">Live Region Roles</a> pour ceux liés aux régions se mettant à jour en fonction d'une interaction avec l'utilisateur.</li>
<li><a rel="nofollow" class="external" target="_blank" href=".//cours/qlio/accessibilite/10#windows_roles">Window Roles</a> pour ceux qui fonctionne comme une fenêtre à l'intérieur du navigateur.</li>
</ol>

<div class="img" id="rdf_model">
<img alt="Diagramme de classe des relations décrites dans le modèle de données de rôles" src="../img/accessibilite/rdf_model_sm.png" longdesc="rdf_model.html" height="256" width="600" />
</div>

<div class="section" id="abstract_roles" role="region" aria-labelledby="abstract_roles_header">

<h4>Abstract Roles.</h4>

<p>Les <a href="#def_role" class="termref">rôles</a> suivants sont utilisés pour soutenir la <a href="#def_taxonomy" class="termref">taxonomie</a> des rôles WAI-ARIA dans le but de définir les concepts généraux des rôles.</p>
<p>Les "Abstract roles" sont utilisés pour l'ontologie. Ils <strong>NE DOIVENT PAS</strong> être utilisés dans la sémantique.</p>
<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#command"><code>command</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#composite"><code>composite</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#input"><code>input</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#landmark"><code>landmark</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#range"><code>range</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#roletype"><code>roletype</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#section"><code>section</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#sectionhead"><code>sectionhead</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#select"><code>select</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#structure"><code>structure</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#widget"><code>widget</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#window"><code>window</code></a></li>
</ul>
</div>
<div class="section" id="widget_roles" role="region" aria-labelledby="widget_roles_header">

<h4>Widget Roles.</h4>

<p>Les rôles suivants agissent comme des widgets d'interface utlisateur autonomes ou comme partie de widgets plus importants.</p>
<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#button"><code>button</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#checkbox"><code>checkbox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#gridcell"><code>gridcell</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#link"><code>link</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#menuitem"><code>menuitem</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#menuitemcheckbox"><code>menuitemcheckbox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#menuitemradio"><code>menuitemradio</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#option"><code>option</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#progressbar"><code>progressbar</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#radio"><code>radio</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#scrollbar"><code>scrollbar</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#searchbox"><code>searchbox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#separator"><code>separator</code> (quand il peut prendre le focus)</a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#slider"><code>slider</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#spinbutton"><code>spinbutton</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#switch"><code>switch</code></a></li>	
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#tab"><code>tab</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#tabpanel"><code>tabpanel</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#textbox"><code>textbox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#treeitem"><code>treeitem</code></a></li>
</ul>
<p>Les <a href="#def_role" class="termref">rôles</a> suivants agissent comme des composants d'interface utlisateur. Ces rôles agissent généralement comme conteneurs, contenant des widgets.</p>
<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#combobox"><code>combobox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#grid"><code>grid</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#listbox"><code>listbox</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#menu"><code>menu</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#menubar"><code>menubar</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#radiogroup"><code>radiogroup</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#tablist"><code>tablist</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#tree"><code>tree</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#treegrid"><code>treegrid</code></a></li>
</ul>
</div>
<div class="section" id="document_structure_roles" role="region" aria-labelledby="document_structure_roles_header">

<h4>Document Structure.</h4>

<p>Les <a href="#def_role" class="termref">rôles</a> suivants décrivent les structures qui organisent le contenu d'une page. Les structures de documents ne sont généralement pas interactive.</p>
<ul>		
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#application"><code>application</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#article"><code>article</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#cell"><code>cell</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#columnheader"><code>columnheader</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#definition"><code>definition</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#directory"><code>directory</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#document"><code>document</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#feed"><code>feed</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#figure"><code>figure</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#group"><code>group</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#heading"><code>heading</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#img"><code>img</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#list"><code>list</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#listitem"><code>listitem</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#math"><code>math</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#none"><code>none</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#note"><code>note</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#presentation"><code>presentation</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#row"><code>row</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#rowgroup"><code>rowgroup</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#rowheader"><code>rowheader</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#separator"><code>separator</code></a> (quand il ne prend pas le focus)</li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#table"><code>table</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#term"><code>term</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#toolbar"><code>toolbar</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#tooltip"><code>tooltip</code></a></li>
</ul>
</div>
<div class="section" id="landmark_roles" role="region" aria-labelledby="landmark_roles_header">

<h4>Landmark Roles.</h4>

<p>Les <a href="#def_role" class="termref">roles</a> suivant sont des régions de la page destiné à la navigation <a href="#def_landmark" class="termref">landmarks</a>. Tous ces rôles héritent du type <code>landmark</code>, à l'exception de <code>application</code>, tous sont importés du <cite><a href="http://www.w3.org/TR/2011/WD-role-attribute-20110113/#s_role_module_attributes">Role Attribute</a></cite> [<cite><a href="#bib-ROLE">ROLE</a></cite>]. Les rôles sont inclus ici afin de clairement les faire partie du Role <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> <a href="#def_taxonomy" class="termref">taxonomy</a>.</p>
<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#banner"><code>banner</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#complementary"><code>complementary</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#contentinfo"><code>contentinfo</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#form"><code>form</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#main"><code>main</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#navigation"><code>navigation</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#region"><code>region</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/roles#search"><code>search</code></a></li>
</ul>
</div>

<h4>Live Region Roles.</h4>

<p>Les rôles suivants sont des régions actives et peuvent être modifiés par des attributs de région active.</p>

<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#alert"><code>alert</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#log"><code>log</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#marquee"><code>marquee</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#status"><code>status</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#timer"><code>timer</code></a></li>
</ul>

<h4>Windows Roles.</h4>
<p>Les rôles suivants agissent comme des fenêtres dans le navigateur ou l'application</p>
<ul>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#alertdialog"><code>alertdialog</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" class="role-reference" href="http://www.w3.org/TR/wai-aria/#dialog"><code>dialog</code></a></li>
</ul>


<p>ARIA propose l'<a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#Using_intro">attribut <code>role</code></a> pour définir les widgets, comme un bouton glissant (slider), ou définir la structure de la page, comme un menu. Un problème majeur des applications web est que n'importe quel élément peut être utilisé pour créer un widget. Les éléments HTML possèdent déjà des rôles prédéfinis. Le rôle d'un élément est «&nbsp;ce qu'il fait&nbsp;» – le rôle qu'il a dans la structure.</p>
<p>Par exemple, le rôle des titres est bien compris par les technologies d'assistances. Lorsque des widgets sont réalisés à partir d'éléments existants, le rôle d'un élément est ce que la technologie d'assistance définit plutôt que ce qu'il représente visuellement en tant que widget.</p>
<p>Par exemple, si le visuel d'un slider est créé en utilisant un élément <code>img</code> avec un texte alternatif approprié, un lecteur d'écran pourrait annoncer le contrôle comme ceci&nbsp;: «&nbsp;Image d'un slider&nbsp;», plutôt que quelque chose de plus intéressant, comme «&nbsp;Bouton glissant, 16 pour cents&nbsp;».</p>


<p>Le rôle donné par l'attribut <code>role</code> prend le pas sur le rôle natif de l'élément. Dans l'exemple suivant, un élément <code>input</code> possède un attribut <code>role</code> dont la valeur est <code>slider</code> (nous verrons d'autres propriétés ARIA plus loin dans cet article) — le rôle indiqué à la technologie d'assistance est <code>slider</code> (bouton glissant), plutôt que <code>input</code> (entrée utilisateur).</p>

<pre class="notice code">
&lt;input type="image" src="thumb.gif"
  alt="Effectiveness"
  role="slider"
  aria-valuemin="0"
  aria-valuemax="100"
  aria-valuenow="42"
  aria-valuetext="42 percent"
  aria-labelledby="leffective"&gt;
</pre>
<p>Lorsque le focus est placé sur cet élément, un utilisateur de lecteur d'écran comprend ce que fait ce widget. La spécification ARIA propose une <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#roles">liste de rôles</a>.</p>

<h3>Rôle des sections du document (document landmark roles).</h3>
<p>Les rôles que nous venons de voir permettent de décrire des widgets, mais il existe également des rôles permettant de décrire la structure du document. Les <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#roleattribute_inherits">document landmarks</a> (ou description des zones) sont un sous-ensemble des rôles classiques permettant aux utilisateurs de lecteurs d'écran de comprendre le rôle d'une zone pour mieux s'orienter dans le document.</p>


<p>ARIA définit les rôles de document landmarks (zones du document) suivants&nbsp;:</p>
<dl>
<dt><code>article</code></dt>
<dd>Contenu ayant du sens par lui-même, comme un article ou un commentaire de blog, un message sur un forum, etc.</dd>
<dt><code>banner</code></dt>
<dd>Contenu à propos du site, comme le titre de la page ou le logo.</dd>
<dt><code>complementary</code></dt>
<dd>Permet éventuellement de définir une partie du contenu principal, mais est plus approprié pour du contenu séparé&nbsp;: la météo sur un portail web par exemple.</dd>
<dt><code>contentinfo</code></dt>
<dd>Contenu dépendant d'un autre, comme des notes de bas de page, un copyright, un lien vers la déclaration de confidentialité, un lien vers les paramètres de l'application, etc.</dd>
<dt><code>main</code></dt>
<dd>Contenu directement lié ou englobant le contenu central du document.</dd>
<dt><code>navigation</code></dt>
<dd>Contient des liens pour naviguer dans ou en dehors du document.</dd>
<dt><code>search</code></dt>
<dd>Cette section contient un formulaire de recherche permettant de chercher sur le site.</dd>
</dl>
<p>Les exemples suivants utilisent les rôles banner, navigation et main pour définir la structure de la page visible sur la figure 4.</p>

<pre class="notice code">
&lt;header role="banner"&gt;
...
&lt;/header&gt;
&lt;nav role="navigation"&gt;
...
&lt;/nav&gt;
&lt;div role="main"&gt;
...
&lt;/div&gt;</code>

&lt;article role="article"&gt;
...
&lt;/article&gt;</code>
&lt;aside role="complementary"&gt;
...
&lt;/aside&gt;</code>
&lt;footer role="contentinfo"&gt;
...
&lt;/footer&gt;
</pre>

<h3>États et propriétés d'ARIA.</h3>

<p>Les <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#introstates">états (states) et propriétés (properties)</a> d'ARIA permettent de décrire des informations supplémentaires sur les widgets et de les mettre à la disposition des technologies d'assistance, afin d'aider l'utilisateur à comprendre comment intéragir avec le widget. L'état définit une configuration ou une information unique sur un objet. Par exemple, la propriété <code>aria-checked</code> possède trois valeurs pour définir ses états&nbsp;: <code>true</code>, <code>false</code> et <code>mixed</code>.</p>
<p>Dans l'exemple du bouton glissant vu un peu plus haut, nous avons inclus différentes propriétés que nous allons voir ci-dessous, aidant à décrire un widget à une technologie d'assistance.</p>
<dl>
<dt><code>aria-valuemin</code></dt>
<dd>Stocke la valeur minimale qu'un bouton glissant peut avoir.</dd>
<dt><code>aria-valuemax</code></dt>
<dd>Stocke la valeur maximale qu'il peut avoir.</dd>
<dt><code>aria-valuenow</code></dt>
<dd>Stocke la valeur actuelle.</dd>
<dt><code>aria-valuetext</code></dt>
<dd>Stocke du texte lisible permettant à l'utilisateur de comprendre le contexte. <code>"30 dollars"</code>, par exemple.</dd>
<dt><code>aria-labelledby</code></dt>
<dd>Stocke l'identifiant (attribut id) d'un élément contenant une description appropriée du widget.</dd>
</dl>

<p>Certaines propriétés peuvent être modifiées par programmation. Dans l'exemple suivant, les propriétés <code>arial-valuenow</code> et <code>arial-valuetext</code> de notre widget de bouton glissant sont mises à jour lorsque le bouton change de position&nbsp;:</p>

<pre class="notice code">
// Définit les valeurs des propriétés ARIA
// lorsque le bouton change de position
objThumb.setAttribute('aria-valuenow', iValue);
objThumb.setAttribute('aria-valuetext', iValue >+ ' %');
</pre>

<p>Ajouter des rôles et attributs ARIA ne sera pas valide HTML 4.01 ou XHTML1.0, mais rassurez-vous, ARIA ne fait qu'ajouter des informations importantes à des spécifications écrites depuis un bon moment maintenant.</p>
<p>Des travaux sont en cours pour <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/WAI/PF/adaptable/StatesAndProperties-20051106.html">définir une DTD pouvant être utilisée avec du XML modulaire</a>, comme XHTML1.1.</p>
<p>La spécification ARIA fournit une <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#supported">liste complète des états et propriétés</a> permettant de définir des widgets accessibles.</p>

<h2>«&nbsp;Live Regions&nbsp;» (zones mises à jour).</h2>
<p>Les Live Regions permettent à certains éléments du document d'annoncer qu'ils ont été mis à jour, sans que l'utilisateur ne soit dérangé dans son activité. Cela signifie que les utilisateurs vont pouvoir être informés des mises à jour sans modifier leur position dans le contenu.</p>
<p>Par exemple, une application de chat pourrait signaler une réponse de la personne avec qui l'utilisateur est en train de discuter, sans être déplacé en-dehors du champ permettant d'envoyer un nouveau message à la personne.</p>
<h3>aria-live.</h3>
<p>Pour un utilisateur de lecteur d'écran, il est très difficile de comprendre ce qui a été mis à jour sur une page. ARIA propose la propriété <code>aria-live</code>, dont la valeur indique l'importance des mises à jour de la région.</p>
<p>Voici les différents niveaux d'alerte pouvant être utilisés avec la propriété <code>aria-live</code>&nbsp;:</p>
<dl>
<dt><code>off</code></dt>
<dd>
<p>Il s'agit de la valeur par défaut, indiquant que la zone ne sera pas mise à jour.</p>

<pre class="notice code">
  &lt;ul aria-live="off"&gt;
</pre>

</dd>
<dt><code>polite</code></dt>
<dd>
<p>C'est une notification normale, le comportement généralement attendu d'une Live Region. La valeur polite indique qu'il n'est pas nécessaire d'y répondre tant que l'utilisateur n'a pas terminé ce qu'il est actuellement en train de faire.</p>

<pre class="notice code">
  &lt;ul aria-live="polite"&gt;
</pre>

</dd>
<dt><code>assertive</code></dt>
<dd>
<p>Ce niveau d'alerte est plus élevé que la normale, mais n'interrompt pas nécessairement l'utilisateur.</p>
<pre class="notice code">
&lt;ul aria-live="assertive"&gt;
</pre>
</dd>
<dt><code>rude</code></dt>
<dd>
<p>Cette valeur est la plus élevée, et interrompt l'utilisateur pour lui notifier la mise à jour. Il peut s'en trouver désorienté, et peut empêcher l'utilisateur de reprendre la tâche qu'il effectuait. Elle ne devrait être utilisée qu'en cas d'absolue nécessité.</p>

<pre class="notice code">
  &lt;ul aria-live="rude"&gt;
</pre>

</dd>
</dl>
<p>Quelques autres propriétés peuvent être utilisées lorsqu'une Live Region est créée, en voici la liste.</p>

<h3>La propriété <code>aria-atomic</code>.</h3>
<p><code>aria-atomic</code> est une propriété optionnelle des Live Regions pouvant prendre comme valeur <code>true</code> ou <code>false</code> (par défaut si la propriété n'est pas définie).</p>
<p>Lorsque la zone est mis à jour, la propriété <code>aria-atomic</code> permet à la technologie d'assistance de savoir si elle doit décrire à l'utilisateur la zone entière ou seulement la partie ayant été mise à jour. Si cette propriété est définie à <code>true</code>, la technologie d'assistance devrait décrire complètement la zone. Si sa valeur est <code>false</code>, seule la partie mise à jour devrait être annoncée.</p>
<p>Dans l'exemple suivant, tous les éléments de la liste non-ordonnée seront annoncés à l'utilisateur, à moins qu'un de ces éléments ne surcharge la propriété <code>aria-atomic</code>.</p>

<pre class="notice code">
&lt;ul aria-atomic="true" aria-live="polite"&gt;
</pre>

<h3>La propriété <code>aria-busy</code>.</h3>
<p><code>aria-busy</code> est une propriété optionnelle des Live Regions pouvant prendre comme valeur <code>true</code> ou <code>false</code> (par défaut si la propriété n'est pas définie). Si plusieurs parties d'une Live Region ont besoin d'être chargées avant que la mise à jour ne soit annoncée à l'utilisateur, la propriété <code>aria-busy</code> peut être définie à <code>true</code> jusqu'à ce que la dernière partie soit chargée, puis à <code>false</code> lorsque la mise à jour est complètement terminée.</p>
<p>Cette propriété empêche les technologies d'assistance d'annoncer un changement avant qu'une mise à jour ne soit complétée.</p>

<pre class="notice code">
&lt;ul aria-atomic="true" aria-busy="true" aria-live="polite"&gt;
</pre>

<h3>La propriété <code>aria-channel</code>.</h3>
<p><code>aria-channel</code> est une propriété optionnelle des Live Regions pouvant prendre comme valeur <code>main</code> (par défaut si la propriété n'est pas définie) ou <code>notify</code>. Les canaux (channels) ont trait au matériel disponible sur le système de l'utilisateur, comme un synthétiseur vocal ou une <a href="http://fr.wikipedia.org/wiki/Plage_braille">plage Braille</a> (ndt: lien ajouté). Si un seul canal est disponible, <code>main</code> et <code>notify</code> utiliseront tous deux le même canal. Le canal <code>notify</code> a une priorité plus élevée que le canal <code>main</code>.</p>
<pre class="notice code">
  &lt;ul aria-atomic="true" aria-channel="notify" aria-live="polite"&gt;
</pre>
<h3>La propriété <code>aria-relevant</code></h3>
<p><code>aria-revelant</code> est une propriété optionnelle des Live Regions indiquant quels types de changements sont considérés comme significatifs à l'intérieur d'une zone (ajout d'un élément, suppression d'un élément et modification de texte). Cette propriété accepte une ou plusieurs des valeurs suivantes, séparées par des espaces&nbsp;:</p>
<dl>
<dt><code>additions</code></dt>
<dd>Des noeuds sont ajoutés au DOM à l'intérieur de la zone.</dd>
<dt><code>removals</code></dt>
<dd>Des noeuds sont supprimés du DOM à l'intérieur de la zone.</dd>
<dt><code>text</code></dt>
<dd>Du texte est ajouté ou supprimé du DOM (modification de texte).</dd>
<dt><code>all</code></dt>
<dd>Toutes les valeurs définies précédemment (additions, removals, text) s'appliquent à la zone.</dd>
</dl>
<p>En l'absence de la propriété <code>aria-revelant</code>, le comportement par défaut considère que les modifications significatives sont les modifications de texte et les ajouts de noeuds (<code>aria-revelant="text additions"</code>). L'exemple suivant n'annoncera des changements que si des noeuds sont ajoutés à la région. Si des modifications de texte surviennent ou que des noeuds sont supprimés, l'utilisateur n'en sera pas averti.</p>

<pre class="notice code">
&lt;</span>ul</span> aria-relevant="additions"</span>
aria-atomic="true"</span>
aria-live="polite"</span>&gt;
</pre>

<h3>Quand pourrons-nous utiliser ARIA ?</h3>
<p>L'utilisation d'ARIA ne présente aucun inconvénient, vous pouvez l'utiliser dès à présent. Les quatre principaux navigateurs du marché ont commencé ou prévoient de supporter ARIA. Opera 9.5 et Firefox 1.5+ disposent déjà d'un support ARIA. Internet Explorer 8 beta supporte ARIA, et l'équipe de développement de Webkit, le moteur libre utilisé par Safari (ndt: et Google Chrome), a annoncé que l'intégration d'ARIA avait commencé.</p>
<p>ARIA est également en train d'être largement adopté par les technologies d'assistance. JAWS 7.1+, Window-Eyes 5.5+, NVDA, Zoomtext 9+, et d'autres offrent déjà un support basique d'ARIA, et ce n'est qu'un début.</p>

<h2>Soyez parmi les premiers à l'utiliser</h2>
<p>Puisque nous venons de voir que l'utilisation d'ARIA ne provoque aucun effet de bord et que le support est déjà présent, il n'y a rien à perdre à l'utiliser dès maintenant, et beaucoup à gagner. Même si votre site web est le plus simple du monde, vous pouvez y inclure des document landmarks (rôles des sections) pour aider l'utilisateur à mieux naviguer et à s'orienter à l'intérieur du contenu.</p>

<h3>Utilisez les rôles de section (document landmark roles)</h3>
<p>Les rôles de zones <code>main</code>, <code>navigation</code>, <code>search</code>, et <code>secondary</code> peuvent être utilisés de la manière suivante :</p>

<pre class="notice code">
&lt;div id="ads">&gt;
...
&lt;/div&gt;
&lt;div id="nav"&gt;
&lt;form id="searchform" ...&gt;
...
&lt;/form&gt;
...
&lt;/div&gt;
&lt;div id="content"&gt;
...
&lt;/div&gt;
</pre>

<p>Nous pourrions écrire l'attribut <code>role</code> pour nos document landmarks directement dans le code HTML&nbsp;:</p>

<pre class="notice code">
&lt;div id="ads" role="banner"&gt;
...
&lt;/div&gt;
&lt;div id="nav" role="navigation"&gt;
&lt;form id="searchform" role="search" ...&gt;
...
&lt;/form&gt;
...
&lt;/div&gt;
&lt;div id="content" role="main"&gt;
...
&lt;/div&gt;
</pre>

<p>Alternativement, puisque les pages sont structurées de manière à pouvoir être stylées avec CSS, la page a des chances d'être structurée à l'aide d'attributs id pouvant être passés à une fonction Javascript. L'exemple suivant est une fonction Javascript simple acceptant l'attribut <code>id</code> d'un élément et une valeur de <code>role</code>, lui permettant de définir l'attribut <code>role</code> de l'élément correspondant.</p>

<pre class="notice code">
  function addARIARole(strID, strRole)
  {
  // Find the element to add a role property to
  var objElement >= document.getElementById(strID);

  if (objElement)
  {
  // Add the role property to the element
  objElement.setAttribute('role', strRole);
  }
  }
</pre>

<p>La fonction peut alors être appelée en passant en paramètre l'attribut <code>id</code> de la section et son rôle dans le document. Considérez la structure de document ci-dessous&nbsp;: nous pourrions utiliser cette fonction Javascript pour insérer un attribut <code>role</code>, plutôt que de l'écrire dans le code HTML.</p>

<pre class="notice code">
function setupARIA()
{
// Add ARIA roles to the document
addARIARole('content', 'main');
addARIARole('nav', 'navigation');
addARIARole('searchform', 'search');
addARIARole('ads', 'banner');
}
window.onload = setupARIA;
</pre>

<h3>Indiquer les champs requis.</h3>
<p>Si certains de vos formulaires contiennent des champs requis, vous pouvez utiliser la propriété <code>aria-required</code>. Cette propriété indique qu'une entrée utilisateur est requise pour envoyer le formulaire. L'exemple suivant ajoute la propriété <code>aria-required</code> à un élément <code>input</code> classique.</p>

<pre class="notice code">
&lt;label for="contactname"&gt;Name&lt;/label&gt;
&lt;input type="text"
id="contactname"
name="contactname"
size="30"
aria-required="true"&gt;
</pre>

<p>Le système de blog WordPress a déjà commencé à utiliser l'attribut <code>aria-required</code> pour les champs requis du formulaire d'envoi de commentaire.</p>

<h3>Ajouter d'autres propriétés pertinentes.</h3>
<p>Beaucoup de propriétés ARIA peuvent être utilisées sur des sites web très simples, comme <code>aria-labelledby</code> et <code>aria-describedby</code>. La propriété <code>aria-labelledby</code> pointe sur un ou plusieurs éléments considérés comme le libellé de l'élément, tandis que l'attribut <code>aria-describedby</code> pointe sur un ou plusieurs éléments considérés comme la description de l'élément.</p>

<pre class="notice code">
&lt;h2 id="limg"&gt;Paragliding&lt;/h2&gt;
&lt;p id="dimg"&gt;A long description of our paragliding trip ...&lt;/p&gt;

&lt;div&gt;
&lt;img src="takeoff.png"
alt="Getting ready to take off"
aria-labelledby="limg"
aria-describedby="dimg"&gt;
&lt;/div&gt;
</pre>

<h3>Priorité des attributs HTML.</h3>
<p>Les attributs ARIA ont la priorité sur le code HTML de base.</p>
<p>C'est à dire que si <code>aria-labelledby</code> est utilisé parallèlement à <code>&lt;label for=""&gt;</code>, seul l'attribut <code>aria-labelledby</code> sera pris en compte. L'élément <code>label</code> est toujours encouragé pour les anciens navigateurs ne supportant pas ARIA. Une technique simple pour éviter les conflits est d'utiliser l'attribut <code>aria-labelledby</code> pour faire référence à l'élément<br>
<code>label</code>, ce qui permet d'être sûr que le libellé est lisible, quel que soit le support d'ARIA.</p>

<pre class="notice code">
&lt;label id="lblef" for="effectiveness"&gt;Effectiveness&lt;/label&gt;

&lt;input type="image"
role="slider"
id="effectiveness"
aria-labelledby="lblef"
...&gt;
</pre>

<p>Parcourez la <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria/#supported">liste complète des états et propriétés</a> pour en apprendre plus sur la manière dont ARIA peut vous aider à rendre votre contenu plus accessible.</p>

<h3>Ensemble, maintenant</h3>
<p>HTML n'a pas été conçu dans le but de créer des applications web, mais les développeurs les ont créées en dessinant leurs propres widgets, et en leur ajoutant des comportements avec Javascript. Le problème est que le rôle, l'état et les propriétés des widgets et du contenu mis à jour sur ces pages n'est pas correctement transmis aux technologies d'assistance. La spécification ARIA résoud ce problème en permettant aux développeurs de décrire précisément leurs éléments d'interface, leur structure de document, et les zones de la page qui seront modifiées.<br>
Que vous développiez une application web complète avec de nombreux wigets et mises à jour dynamiques, ou le plus simple des sites web, vous pouvez commencer à utiliser ARIA dès maintenant pour vos utilisateurs handicapés.</p>


<h2>Terminologie.</h2>

<p>Cette section est <a class="termref" href="#def_informative">informative</a>.</p>
<p>Les définitions suivantes sont utilisées tout au long de ce document.</p>
<dl class="termlist">
  <dt id="def_accessibility_api">Accessibility <abbr title="Application Programming Interface">API</abbr></dt>
  <dd>
    <p>Operating systems and other platforms provide a set of interfaces that expose information about <a href="#def_object" class="termref">objects</a> and <a href="#def_event" class="termref">events</a> to <a href="#def_at" class="termref">assistive technologies</a>. Assistive technologies use these interfaces to get information about and interact with those <a href="#def_widget" class="termref">widgets</a>.
      Examples of accessibility APIs are the <a rel="nofollow" class="external" target="_blank" href="http://msdn.microsoft.com/en-us/library/ms697270(VS.85).aspx">Microsoft Active Accessibility</a> [<a href="#bib-MSAA">MSAA</a>], the <a rel="nofollow" class="external" target="_blank" href="http://msdn.microsoft.com/en-us/library/ee684013%28VS.85%29.aspx">Microsoft User Interface Automation</a> [<a rel="nofollow" class="external" target="_blank" href="#bib-UIA-ARIA">UIA-ARIA</a>], the	<a rel="nofollow" class="external" target="_blank" href="https://developer.apple.com/library/mac/documentation/Cocoa/Conceptual/Accessibility/cocoaAXIntro/cocoaAXintro.html">Mac <abbr title="OS Ten">OS X</abbr> Accessibility Protocol</a> [<a rel="nofollow" class="external" target="_blank" href="#bib-AXAPI">AXAPI</a>], the <cite><a rel="nofollow" class="external" target="_blank" href="https://developer.gnome.org/atk/unstable/">Linux/Unix Accessibility Toolkit</a></cite> [<cite><a rel="nofollow" class="external" target="_blank" href="#bib-ATK">ATK</a></cite>] and <cite><a rel="nofollow" class="external" target="_blank" href="https://developer.gnome.org/libatspi/stable/">Assistive Technology Service Provider Interface</a></cite> [<cite><a href="#bib-AT-SPI">AT-SPI</a></cite>], and <a rel="nofollow" class="external" target="_blank" href="http://www.linuxfoundation.org/collaborate/workgroups/accessibility/iaccessible2">IAccessible2</a> [<a href="#bib-IA2">IA2</a>].</p>
  </dd>
  <dt id="def_accessible_name">Accessible Name</dt>
  <dd>
    <p>The accessible name is the name of a user interface element. Each platform <a rel="nofollow" class="external" target="_blank" href="#def_accessibility_api" class="termref">accessibility <abbr title="application programming interface">API</abbr></a> provides
      the accessible name property. The value of the accessible name may be
      derived from a visible (e.g., the visible text on a button) or invisible
      (e.g., the text alternative that describes an icon) property of the user
      interface element.</p>
    <p>A simple use for the accessible name property may be illustrated by
      an "OK" button. The text "OK" is the accessible name.
      When the button receives focus, assistive technologies may concatenate
      the platform's role description with the accessible name. For example,
      a screen reader may speak "push-button OK" or "OK button".
      The order of concatenation and specifics of the role description (e.g. "button", "push-button", "clickable
      button") are determined by platform accessibility APIs or assistive
      technologies.</p>
  </dd>
  <dt id="def_at">Assistive Technologies</dt>
  <dd><p>Hardware and/or software that:</p>
    <ul><li>relies on services provided by a <a href="#def_useragent" class="termref">user agent</a> to retrieve and render Web content </li><li>works with a user agent or web content itself through the use of APIs, and</li><li>provides services beyond those offered by the user agent to facilitate user interaction with web content by people with disabilities</li></ul>
    <p>This definition may differ from that used in other documents.</p>
  <p>Examples of assistive technologies that are important in the context
    of this document include the following:</p>
  <ul><li>screen magnifiers, which are used to enlarge and improve the visual
      readability of rendered text and images;</li><li>screen readers, which are most-often used to convey information through
      synthesized speech or a refreshable Braille display;</li><li>text-to-speech software, which is used to convert text into synthetic
      speech;</li><li>speech recognition software, which is used to allow spoken control
      and dictation;</li><li>alternate input technologies (including head pointers, on-screen
      keyboards, single switches, and sip/puff devices), which are used to
      simulate the keyboard;</li><li>alternate pointing devices, which are used to simulate mouse pointing
      and clicking.</li></ul>
  </dd>
  <dt id="def_attribute">Attribute</dt><dd>
    <p>In this specification, attribute is used as it is in markup languages.
      Attributes are structural features added to <a class="termref" href="#def_element">elements</a> to
      provide information about the <a class="termref" href="#def_state">states</a> and <a class="termref" href="#def_property">properties</a> of
      the <a class="termref" href="#def_object">object</a> represented by the
      element.</p>
  </dd>
  <dt id="def_class">Class</dt><dd>
    <p>A set of instance <a class="termref" href="#def_object">objects</a> that
      share similar characteristics.</p>
  </dd>
  <dt id="def_element">Element</dt><dd>
    <p>In this specification, element is used as it is in markup languages.
      Elements are the structural elements in markup language that contains
      the data profile for <a class="termref" href="#def_object">objects</a>.</p>
  </dd>
  <dt id="def_event">Event</dt><dd>
    <p>A programmatic message used to communicate discrete changes in the <a href="#def_state" class="termref">state</a> of
      an <a href="#def_object" class="termref">object</a> to other objects
      in a computational system. User input to a web page is commonly mediated
      through abstract events that describe the interaction and can provide
      notice of changes to the state of a document object. In some programming
      languages, events are more commonly known as notifications.</p>
  </dd>
  <dt id="def_hidden">Hidden</dt><dd>
    <p>Indicates that the <a href="#def_element" class="termref">element</a> is
      not visible or <a href="#def_perceivable" class="termref">perceivable</a> to <em>any</em> user.
      An element is only considered <em>hidden</em> in the DOM if it or one
      of its ancestor elements has the <a class="state-reference" href="#aria-hidden"><code>aria-hidden</code></a> attribute
      set to <code>true</code>.</p>
    
    <p class="note" role="note">Note: Authors are reminded that <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/CSS21/visufx.html#visibility">visibility:hidden</a> and <a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-display">display:none</a> apply to <em>all</em> <a href="http://www.w3.org/TR/CSS21/media.html#media-types"><abbr title="Cascading Style Sheets">CSS</abbr> media types</a>; therefore, use of either will hide the content from assistive technologies that access the DOM through a rendering engine. However, in order to support assistive technologies that access the DOM directly, or other authoring techniques to visibly <em>hide</em> content (for example, opacity or <a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-position">off-screen positioning</a>), authors need to ensure the <code>aria-hidden</code> attribute is always updated accordingly when an element is shown or hidden, unless the intent of using off-screen positioning is to make the content visible only to screen reader users and not others.</p>
  </dd>
  <dt id="def_informative">Informative</dt>
  <dd>
    <p>Content provided for information purposes and not required for conformance.
      Content required for conformance is referred to as <a href="#def_normative" class="termref">normative</a>.</p>
  </dd>
  <dt id="def_keyboard_accessible">KeyboardAccessible</dt>
    <dd>
    <p>Accessible to the user using a keyboard or <a href="#def_at" class="termref">assistive
      technologies</a> that mimic keyboard input, such as a sip and puff
      tube. References in this document relate to <cite><a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/WCAG20/#keyboard-operation"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2
        Guideline 2.1; "Make all functionality available from a keyboard"</a></cite> [<cite><a href="#ref_WCAG20">WCAG20</a></cite>].</p>
  </dd><dt id="def_landmark">Landmark</dt>
  <dd>
    <p>A type of region on a page to which the user may want quick access. Content in such a region is different from that of other regions on the page and relevant to a specific user purpose, such as navigating, searching, perusing the primary content, etc.</p>
  </dd><dt id="def_liveregion">Live Region</dt>
  <dd>
    <p>Live regions are perceivable regions of a web page that are typically updated as a result of an external event when user focus may be elsewhere. These regions are not always updated as a result of a user interaction. This practice has become commonplace with the growing use of Ajax. Examples of live regions include a chat log, stock ticker, or a sport scoring section that updates periodically to reflect game statistics. Since these asynchronous areas are expected to update outside the user's area of focus, assistive technologies such as screen readers have either been unaware of their existence or unable to process them for the user. <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> has provided a collection of properties that allow the author to identify these live regions and process them: aria-live, aria-relevant, aria-atomic, and aria-busy.</p>
  </dd><dt id="def_managedstate">Managed State</dt>
  <dd>
    <p><a href="#def_accessibility_api" class="termref">Accessibility API</a> <a href="#def_state" class="termref">state</a> that is controlled by the user agent, such as focus and selection. These are contrasted with "unmanaged states" that are typically controlled by the author. Nevertheless, authors can override some managed states, such as aria-posinset and aria-setsize. Many managed states have corresponding CSS pseudo-classes, such as :focus, and pseudo-elements, such as ::selection, that are also updated by the user agent.</p></dd>
    <dt id="def_normative">Normative</dt><dd>
    <p>Required for conformance. By contrast, content identified as <a href="#def_informative" class="termref">informative</a> or "non-normative" is
      not required for conformance.</p>
  </dd><dt id="def_object">Object</dt><dd>
    <p>In the context of user interfaces,  an item in the   perceptual user experience, represented in markup languages by one or   more  <a href="#def_element" class="termref">elements</a>,
      and rendered by <a href="#def_useragent" class="termref">user agents</a>.        </p>
  In the context of programming, the instantiation of one or   more <a href="#def_class" class="termref">classes</a> and interfaces which define the general characteristics of   similar objects. An object in an <a href="#def_accessibility_api" class="termref">accessibility <abbr title="Application Programming Interfaces">API</abbr></a> may represent one or   more DOM objects. Accessibility APIs have defined interfaces that are   distinct from DOM interfaces.</dd><dt id="def_ontology">Ontology</dt><dd>
    <p>A description of the characteristics of <a href="#def_class" class="termref">classes</a> and
      how they relate to each other.</p>
  </dd><dt id="def_operable">Operable</dt><dd>
    <p>Usable by users in ways they can control. References in this document
      relate to <cite><a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/TR/WCAG20/#operable"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2
        Principle 2; content must be operable</a></cite> [<cite><a href="#bib-WCAG20">WCAG20</a></cite>].
      See <a href="#def_keyboard_accessible" class="termref">Keyboard Accessible</a>.</p>
  </dd><dt id="def_owned_element">Owned Element</dt><dd>
    <p>An 'owned element' is any <abbr title="Document Object Model">DOM</abbr> descendant
      of the <a href="#def_element" class="termref">element</a>, any element
      specified as a child via <a class="property-reference" href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#aria-owns"><code>aria-owns</code></a>,
      or any <abbr title="Document Object Model">DOM</abbr> descendant of the
      owned child.</p>
  </dd><dt id="def_perceivable">Perceivable</dt><dd>
    <p>Presentable to users in ways they can sense. References in this document
      relate to <cite><a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/TR/WCAG20/#perceivable"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2
      Principle 1; content must be perceivable</a></cite> [<cite><a href="#bib-WCAG20">WCAG20</a></cite>].</p>
  </dd><dt id="def_property">Property</dt><dd>
    <p><a href="#def_attribute" class="termref">Attributes</a> that are essential
      to the nature of a given <a href="#def_object" class="termref">object</a>,
      or that represent a data value associated with the object. A change of
      a property may significantly impact the meaning or presentation of an
      object. Certain properties (for example, <a class="property-reference" href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#aria-multiline"><code>aria-multiline</code></a>)
      are less likely to change than <a class="termref" href="#def_state">states</a>,
      but note that the frequency of change difference is not a rule. A few
      properties, such as <a class="property-reference" href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#aria-activedescendant"><code>aria-activedescendant</code></a>, <a class="property-reference" href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#aria-valuenow"><code>aria-valuenow</code></a>,
      and <a class="property-reference" href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#aria-valuetext"><code>aria-valuetext</code></a> are expected
      to change often. See <a href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#statevsprop">clarification of states versus
      properties</a>.</p>
  </dd><dt id="def_relationship">Relationship</dt><dd>
    <p>A connection between two distinct things. Relationships
      may be of various types to indicate which <a href="#def_object" class="termref">object</a> labels
      another, controls another, etc.</p>
  </dd><dt id="def_role">Role</dt><dd>
    <p>Main indicator of type.
      
      This <a href="#def_semantics" class="termref">semantic</a> association
      allows tools to present and support interaction with the object in a
      manner that is consistent with user expectations about other objects
      of that type.</p>
  </dd><dt id="def_semantics">Semantics</dt><dd>
    <p>The meaning of something as understood by a human, defined in a way
      that computers can process a representation of an <a href="#def_object" class="termref">object</a>,
      such as <a href="#def_element" class="termref">elements</a> and <a href="#def_attribute" class="termref">attributes</a>,
      and reliably represent the object in a way that various humans will achieve
      a mutually consistent understanding of the object.</p>
  </dd><dt id="def_state">State</dt><dd>
    <p>A state is a dynamic <a class="termref" href="#def_property">property</a> expressing
      characteristics of an <a href="#def_object" class="termref">object</a> that
      may change in response to user action or automated processes. States
      do not affect the essential nature of the object, but represent data
      associated with the object or user interaction possibilities. See <a href="https://www.w3.org/WAI/PF/aria-1.1/states_and_properties#statevsprop">clarification
      of states versus properties</a>.</p>
  </dd><dt id="def_taxonomy">Taxonomy</dt><dd>
    <p>A hierarchical definition of how the characteristics of various <a href="#def_class" class="termref">classes</a> relate
      to each other, in which classes inherit the properties of superclasses
      in the hierarchy. A taxonomy can comprise part of the formal definition
      of an <a href="#def_ontology" class="termref">ontology</a>.</p>
  </dd><dt id="def_understandable">Understandable</dt><dd>
    <p>Presentable to users in ways they can construct an appropriate meaning.
      References in this document relate to <cite><a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/WCAG20/#understandable"><abbr title="Web Content Accessibility Guidelines">WCAG</abbr> 2
        Principle 3; Information and the operation of user interface must be
      understandable</a></cite> [<cite><a href="#bib-WCAG20">WCAG20</a></cite>].</p>
  </dd><dt id="def_useragent">User Agent</dt><dd>
    <p>Any software that retrieves, renders and facilitates end user interaction with Web content. This definition may differ from that used in other documents.</p>
  </dd><dt id="def_value">Value</dt><dd>
    <p>A literal that solidifies the information expressed by a <a class="termref" href="#def_state">state</a>, <a class="termref" href="#def_property">property</a>, <a class="termref" href="#def_role">role</a>,
      or text content.</p>
  </dd><dt id="def_widget">Widget</dt><dd>
    <p>Discrete user interface <a class="termref" href="#def_object">object</a> with which the user can interact. Widgets
      range from simple objects that have one value or operation (e.g., check
      boxes and menu items), to complex objects that contain many managed sub-objects
      (e.g., trees and grids).</p>
</dd></dl>

<h2>Plus loin...</h2>

<h3>Pour en savoir plus</h3>
<ul>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/TR/wai-aria-practices/">Bonnes pratiques WAI-ARIA</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="https://developer.mozilla.org/fr/docs/Accessibilit%C3%A9/ARIA/formulaires/Indications_elementaires_pour_les_formulaires">Formulaires</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="https://developer.mozilla.org/fr/docs/Accessibilit%C3%A9/ARIA/formulaires/Alertes">Alertes</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="https://www.accede-web.com/notices/interface-riche/menu-deroulant/">Menu déroulant</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.marcozehe.de/2008/02/29/easy-aria-tip-1-using-aria-required/">Utiliser <code>aria-required</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.marcozehe.de/2008/03/23/easy-aria-tip-2-aria-labelledby-and-aria-describedby/">Utiliser <code>aria-labelledby</code> et <code>aria-describedby</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.marcozehe.de/2008/07/16/easy-aria-tip-3-aria-invalid-and-role-alert/">Utiliser <code>aria-invalid</code> et <code>role</code> <code>alert</code></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.paciellogroup.com/blog/?p=53">Exemple de case à cocher à trois états</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.paciellogroup.com/blog/?p=68">Un exemple de bouton glissant (slider) avec ARIA</a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.accede-web.com/notices/">Bonnes pratiques en accessibilité</a></li>
</ul>
  
