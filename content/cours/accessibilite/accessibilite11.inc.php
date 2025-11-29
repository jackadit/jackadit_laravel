<h1>Applications pratiques</h1>
<h2> Sémantique</h2> 
<p>Sur chaque page, un DOCTYPE valide doit être utilisé et le code HTML doit être conforme aux règles de grammaire de ce dernier (le choix du DOCTYPE est libre).</p> 

<pre class="notice code">&#60;!doctype html&#62;</pre>
<h3>Concernant la sémantique, il est important de veiller à :</h3>
<ul>
<li>imbriquer correctement les balises.</li>
<li>ouvrir et fermer correctement les balises.</li>
<li>ne pas dupliquer un attribut sur une même balise.</li>
<li>utiliser un attribut id unique au sein d'une même page.</li>
</ul>

<h3>Utiliser des balises structurelles pour donner un sens au contenu de la page</h3> 
<ul> 
<li>Utiliser les balises de titre (h1, h2 etc), et ne pas omettre de niveau.</li> 
<li>Baliser les listes en utilisant la structure "ul" ou "ol".</li> 
<li>Spécifier la langue pour chaque page et indiquer chaque changement de langue à l'intérieure d'une page.</li> 
<li>Utiliser la balise "th" pour les cellules de lignes et de colonnes d'en-tête dans les tableaux de données.</li> 
</ul> 

<h3>Permettre aux utilisateurs de redimensionner le texte et la largeur de page</h3> 
<ul> 
<li>Spécifier la taille du texte et des contrôles de formulaire en  "em","rem","%" ou autre mesures relatives (pas "pt" ni "px").</li> 
<li>Pour les tableaux et "divs" contenant du texte, utiliser  "em", "rem" ou "%" (pas "pt" ni "px"). </li> 
</ul> 

<h3>Utiliser les balises des formulaires correctement</h3> 
<ul> 
<li>Placer les "label" adjacent au champ des formulaires, du côté conventionnel (à gauche pour les champs textes, à droite pour les boutons radio et les checkboxs).</li> 
<li>Associer les "label" avec their element via  the "for" and "id" attributes </li> 
<li>Add a "submit" button to all forms  including "quick-links" drop-downs. </li> 
</ul> 


<h2>Les "Landmark Roles"</h2>

<div class="landmark" id="banner_" rel="nofollow" class="external" target="_blank" role="banner">
    <a href="https://www.w3.org/TR/wai-aria/#banner" rel="help external" id="role-banner">    
    &#60;header&#62; ou &#60;div role=&#34;banner&#34;&#62;    
    </a>
    <p class="h3-like">Titre de la page</p>
</div>
<div class="landmark" id="navigation_" rel="nofollow" class="external" target="_blank" role="navigation">
    <a href="https://www.w3.org/TR/wai-aria/#navigation" rel="help external" id="role-navigation">
    &#60;nav&#62; ou <br />
    &#60;div role=&#34;navigation&#34;&#62;    
    </a>
    <ol>
        <li>
        <a href="#">menu 1</a>
        </li>
        <li>
        <a href="#">menu 2</a>
        </li>
        <li>
        <a href="#">menu 3</a>
        </li>
        <li>
        <a href="#">menu 4</a>
        </li>
    </ol>
</div>
<div class="landmark" id="main_" role="main">
    <a href="https://www.w3.org/TR/wai-aria/#main" rel="help external" id="role-main_">    
    &#60;main&#62; ou <br />    
    &#60;div role=&#34;main&#34;&#62;    
    </a>
    <p class="h3-like">Titre principal</p>
    <div class="landmark" id="application_" role="application">
        <a href="https://www.w3.org/TR/wai-aria/#article" rel="help external" id="role-article_">          
        &#60;article_&#62; ou <br />   
        &#60;div role=&#34;article_&#34;&#62;    
        </a>
        <p class="h3-like">Contenu</p> 
    </div>
</div>
<div class="landmark" id="complementary_" role="complementary">
    <a href="https://www.w3.org/TR/wai-aria/#complementary" rel="help external" id="role-complementary_">   
    &#60;aside&#62; ou <br />
    &#60;div role=&#34;complementary&#34;&#62;    
    </a>
    <div class="landmark" role="form" id="form_">
    <a href="https://www.w3.org/TR/wai-aria/#search" rel="help external" id="role-search_">    
        &#60;form role=&#34;search&#34;&#62;   
    </a>        
    <div class="landmark" id="search_" role="search">recherche...</div>
        <input type="submit" value="recherche">
    </div>
    <p class="h3-like">Contenu complémentaire</p>
</div>
<div class="landmark" id="contentinfo_" role="contentinfo">
<a href="https://www.w3.org/TR/wai-aria/#contentinfo" rel="help external" id="role-contentinfo_">    
        &#60;footer&#62; ou <br />  
        &#60;div role=&#34;contentinfo&#34;&#62;   
    </a>
    <p class="h3-like">Informations à propos de la page</p>
</div>

<p>Et le code qui va avec ...</p>

<pre class="notice code">
&#60;!doctype html&#62;
&#60;html&#62;
&#60;head&#62;
&#60;title&#62;Titre de la page&#60;/title&#62;
&#60;meta charset=&#34;utf-8&#34;&#62;
&#60;meta name=&#34;description&#34; content=&#34;description de la page&#34;&#62;
&#60;/head&#62;


&#60;body&#62;

&#60;header&#62;
&#60;h1&#62;Titre de la page&#60;/h1&#62;
&#60;/header&#62;

&#60;nav&#62;
&#60;ol&#62;
    &#60;li&#62;
    &#60;a href=&#34;#&#34;&#62;menu 1&#60;/a&#62;
    &#60;/li&#62;
    &#60;li&#62;
    &#60;a href=&#34;#&#34;&#62;menu 2&#60;/a&#62;
    &#60;/li&#62;
    &#60;li&#62;
    &#60;a href=&#34;#&#34;&#62;menu 3&#60;/a&#62;
    &#60;/li&#62;
    &#60;li&#62;
    &#60;a href=&#34;#&#34;&#62;menu 4&#60;/a&#62;
    &#60;/li&#62;
&#60;/ol&#62;
&#60;/nav&#62;

&#60;main&#62;
&#60;h2&#62;Titre principal&#60;/h2&#62;
&#60;article_&#62;
&#60;p&#62;Contenu&#60;/p&#62;
&#60;/article_&#62;
&#60;/main&#62;

&#60;aside&#62;
&#60;form role=&#34;search&#34;&#62;
    &#60;input type=&#34;search&#34; placeholder=&#34;recherche...&#34;&#62;
    &#60;input type=&#34;submit&#34; value=&#34;recherche&#34;&#62;
&#60;/form&#62;
&#60;h3&#62;Contenu complémentaire&#60;/h3&#62;
&#60;/aside&#62;

&#60;footer&#62;
&#60;p&#62;Informations à propos de la page&#60;/p&#62;
&#60;/footer&#62;

&#60;/body&#62;
&#60;/html&#62;
</pre>

<h2>Lien d'évitement</h2>

<p>Les liens d'évitement (aussi appelés liens de navigation interne) sont des éléments de navigation permettant de contourner des regroupements de liens et ainsi d'accéder plus rapidement à des zones précises de la page.</p>

<pre class="notice code">
&lt;a class="evitement" href="#contenu"&gt;Aller au contenu&lt;/a&gt;
...
&lt;main role="main" id="contenu" tabindex="-1"&gt;...&lt;/main&gt;
</pre>

<div class="ok">
L'intégration de tabindex="-1" dans la balise de destination permet de rendre ce lien-ancre fonctionnel sous Internet Explorer et Chrome.
</div>

<p>Bien qu'il soit recommandé d'afficher ce lien, celui-ci peut être masqué par défaut. En revanche, il doit dans tous les cas être rendu visible à la prise de focus au clavier.</p>

<p>Par conséquent, le lien d'évitement ne doit jamais être masqué à l'aide des propriétés CSS <code>display: none;</code> et/ou <code>visibility: hidden;</code> sous peine de le rendre totalement inatteignable au clavier.</p>

<p>Privilégier une autre solution, par exemple l'utilisation des codes suivants :</p>

<pre class="notice code">
a.evitement {
    position: absolute;
    left: -99999px;
}
a.evitement:focus {
    position: static;
}
</pre>


<p>Une bonne pratique consiste mettre en surbrillance l'endroit où vous serez amené avec le lien de contournement lorsque le focus est placé sur ce lien.</p>

<p>L'intérêt pour un utilisateur clavier est de découvrir à l'avance où ils sera placés lorsqu'il activera ce lien.</p>

<h3>Mise en oeuvre</h3>

<p>Pour obtenir ce comportement, on peut par exemple :</p>
<ol>
<li>Ajouter, en JavaScript, une classe <abbr>CSS</abbr> (<code>.destination</code>) à l'élément de destination (<code>&lt;main role="main"&gt;</code>) lorsque le focus est placé sur l'ancre correspondante (&laquo;&nbsp;Aller au contenu&nbsp;&raquo;).</li>
<li>Supprimer, toujours en JavaScript, cette classe lorsque le focus quitte l'ancre correspondante.</li>
<li>Prévoir, dans la CSS, un aspect pour l'élément de destination en état de mise en évidence tel que par exemple : <code>main[role=main].destination {border:.2em dashed red}</code>.</li>
</ol>

<p>Si vous avez besoin de plusieurs.</p>
<p>Dans ce cas-là, mettre en place une liste de plusieurs liens d'évitement. Comme par exemple :</p>
<pre class="notice code">
&lt;ul id="evitement"&gt;
    &lt;li&gt;
        &lt;a href="#contenu"&gt;Aller au contenu&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href="#menu"&gt;Aller au menu&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;a href="#recherche"&gt;Aller à la recherche&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre>

<h2>Fil d'Ariane et accessibilité</h2>
<div>

<p>Le fil d'Ariane est un système de navigation permettant à l'utilisateur de se situer sur un site Internet.</p>
<p>Il indique la <strong>position courante</strong> de l'internaute dans l'<strong>arborescence</strong> du site par rapport à la page d'accueil.</p>

<div  class="ok">La présence du fil d'Ariane répond à un critère d'accessibilité de <strong>niveau AAA</strong> (le plus élevé).</div>



<h3>Les exigences en terme d'accessibilité</h3>
<h4>Composition</h4>

<p>Le fil d'Ariane doit refléter l'architecture du site et doit permettre à l'internaute de <strong>se repérer dans l'arborescence</strong> de ce dernier.</p>
<p>Dans l'ordre, il doit être composé :</p>
<ol>
<li>D'un lien menant à la racine du site (page d'accueil).</li>
<li>De la totalité des liens vers les pages séparant la racine du site de la page courante.</li>
<li>Du titre de la page courante.</li>
</ol>

<div class="notice alert">À noter que ce dernier élément ne doit pas être cliquable.</div>

<h4>Élément séparateur</h4>
<p>Non obligatoire, il est cependant conseillé de séparer les éléments composant le fil d'Ariane avec un <strong>caractère visible</strong> (directement intégré dans le code HTML) tel que &laquo;&nbsp;&gt;&nbsp;&raquo; par exemple.</p>
<p>L'intérêt pour l'accessibilité y est exposé plus bas, dans la partie &laquo;&nbsp;Structure HTML &gt; Paragraphe&nbsp;&raquo;.</p>

<h4>Vous êtes ici</h4>
<p>Le fil d'Ariane est régulièrement précédé d'une mention du type &laquo;&nbsp;Vous êtes dans :&nbsp;&raquo; ou &laquo;&nbsp;Vous êtes ici :&nbsp;&raquo;.</p>
<p>Bien que cette mention ne soit pas exigée en terme d'accessibilité, elle permet à l'utilisateur d'identifier rapidement ce moyen de navigation et de comprendre sa fonction. Nous recommandons par conséquent l'intégration de cette mention.</p>

<h4>Emplacement visuel et dans le code</h4>
<div class="exergue exergue-02">
<p>Le fil d'Ariane doit être intégré, visuellement et dans le code source, au <strong>même emplacement</strong> sur l'ensemble des pages du site ; hormis sur la page d'accueil où sa présence n'est pas obligatoire.</p>
</div>
<p>À noter qu'en matière d'accessibilité, aucune exigence n'est formulée quant à son emplacement visuel au sein de la page. Il peut par conséquent être placé n'importe où (tout en haut, tout en bas ou en colonne de droite par exemple).</p>
<p>Toutefois, logiquement, en terme d'ergonomie cette fois, il est recommandé de le placer <strong>juste au dessus du contenu</strong> principal de la page.</p>

<h3>Structure HTML</h3>
<p>Les référentiels d'accessibilité ne demandent <strong>aucun balisage particulier</strong> pour structurer un fil d'Ariane. Malgré tout, selon nous, seules 2 solutions sont à retenir :</p>

<h4>Liste non-ordonnée (balises <code>&lt;ul&gt;</code> et <code>&lt;li&gt;</code>)</h4>
<p>Il est possible de le structurer en utilisant une liste non-ordonnée comme par exemple :</p>
<pre class="notice code">
&lt;div id="fil-ariane"&gt;
&lt;p&gt;Vous êtes dans :&lt;/p&gt;
&lt;ul&gt;
    &lt;li&gt;&lt;a href="#"&gt;Accueil&lt;/a&gt; &gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Accessibilité&lt;/a&gt; &gt;&lt;/li&gt;
    &lt;li&gt;&lt;strong&gt;Fil d'Ariane&lt;/strong&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>Nous voyons plusieurs avantages à l'utilisation d'une liste dans ce cas.</p>
<p>Par exemple, le nombre d'éléments le composant peut être restitué aux utilisateurs de <strong>lecteurs d'écran</strong>, ce qui leur permet de savoir à quel niveau de profondeur ils se situent dans l'arborescence.</p>

<div class="notice alert">En revanche, nous ne sommes pas favorables à l'imbrication de listes pour baliser un fil d'Ariane. Car dans ce cas, la restitution par un lecteur d'écran peut devenir rapidement &laquo;&nbsp;<strong>verbeuse</strong>&nbsp;&raquo; et par conséquent désagréable à l'écoute.</div>


<h4>Paragraphe (balise <code>&lt;p&gt;</code>)</h4>
<p>Un fil d'Ariane peut très bien tout simplement se coder avec la balise <code>&lt;p&gt;</code> tel que :</p>

<pre class="notice code">
&lt;p id="fil-ariane"&gt;
Vous êtes dans :
&lt;a href="#"&gt;Accueil&lt;/a&gt; &gt;
&lt;a href="#"&gt;Accessibilité&lt;/a&gt; &gt;
&lt;strong&gt;Fil d'Ariane&lt;/strong&gt;
&lt;/p&gt;
</pre>

<p>Cette structure, bien que &laquo;&nbsp;sémantiquement pauvre&nbsp;&raquo;, convient tout à fait en terme d'accessibilité : les &laquo;&nbsp;&gt;&nbsp;&raquo; séparateurs induisant la notion de progression dans l'arborescence.</p>


<h4>HTML5</h4>
<p>Si vous concevez vos sites en HTML5, il peut être intéressant d'englober le fil d'Ariane avec une balise <code>&lt;nav&gt;</code> comme par exemple :</p>

<pre class="notice code">
&lt;nav id="fil-ariane"&gt;
Vous êtes dans :
&lt;a href="#"&gt;Accueil&lt;/a&gt; &gt;
&lt;a href="#"&gt;Accessibilité&lt;/a&gt; &gt;
&lt;strong&gt;Fil d'Ariane&lt;/strong&gt;
&lt;/nav&gt;
</pre>

<p>Bien que l'intérêt en terme d'accessibilité est à ce jour inexistant, demain, lorsque cette balise sera supportée par les différents navigateurs et lecteurs d'écran du marché, cela pourra potentiellement être intéressant.</p>

<div class="notice remarque">À noter que le lecteur d'écran <abbr>NVDA</abbr> (version 2012.3) reconnaît la balise <code>&lt;nav&gt;</code>. Lorsqu'il la rencontre, il annonce &laquo;&nbsp;repère &#8211; navigation&nbsp;&raquo; à l'utilisateur.</div>

<h3>Ressources</h3>
<ul>
<li><a rel="nofollow" class="external" target="_blank" lang="en" href="http://www.w3.org/TR/WCAG20-TECHS/G65" hreflang="en">Providing a breadcrumb trail <img lang="fr" src="http://blog.atalan.fr/wp-content/uploads/2012/09/lien-externe-01.gif" alt="(externe)" /> <span>(Technique <abbr>WCAG</abbr> 2.0)</span></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.rgaa.net/Presence-d-un-fil-d-ariane.html">Présence d'un fil d'Ariane <img src="http://blog.atalan.fr/wp-content/uploads/2012/09/lien-externe-01.gif" alt="(externe)" /> <span>(critère <abbr>RGAA</abbr> 2.2)</span></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.accessiweb.org/index.php/accessiweb_2.2_liste_generale.html#crit-12-8">Dans chaque page web, un fil d'Ariane est-il présent ? <img lang="fr" src="http://blog.atalan.fr/wp-content/uploads/2012/09/lien-externe-01.gif" alt="(externe)" /> <span>(critère AccessiWeb 2.2)</span></a></li>
<li><a rel="nofollow" class="external" target="_blank" href="http://www.accessiweb.org/index.php/accessiweb_2.2_liste_generale.html#crit-12-9">Dans chaque page web, le fil d'Ariane est-il pertinent ? <img lang="fr" src="http://blog.atalan.fr/wp-content/uploads/2012/09/lien-externe-01.gif" alt="(externe)" /> <span>(critère AccessiWeb 2.2)</span></a></li>
</ul>



<h2>Donner à toutes les images un équivalent texte</h2>
<ul> 
<li>Présentez les images décoratives via CSS, ou via des images avec alt vide (alt="").</li> 
<li>Évitez des images texte et utiliser du texte HTML de préférence. Si vous devez utiliser une image texte (par ex. un logo) alors faites correspondre le texte alternatif au texte de l'image.</li> 
<li>Donnez aux images utilisées comme lien un texte alternatif qui indique la destination du lien.</li> 
<li>Décrivez les images qui contiennent des informations complexes dans le texte de la page et décrivez brièvement l'image dans le texte alternatif.</li> 
</ul> 

<h2>Créer une présentation et une navigation cohérente</h2>
<ul> 
<li>Assurer que le contenu soit logique lorsqu'il est lu dans l'ordre du code source. L'ordre de lecture dans les tableaux de disposition (si ceux-ci sont utilisés) est de gauche à droite, de haut en bas, ligne par ligne. </li> 
<li>Faire du premier titre dans le contenu principal un titre de niveau 1 et que ce soit le premier titre sur la page (dans l'ordre du code source). </li> 
<li>Fournir des titres de page qui reflètent l'en-tête de la page principale. </li> 
<li>Placer les éléments de navigation dans des emplacements similaires sur toutes les pages. </li> 
<li>Inclure un lien visible "aller au contenu" en haut de la page. </li> 
<li>Méfiez-vous du bug IE- voir <a rel="nofollow" class="external" target="_blank" href="http://jimthatcher.com/skipnav.htm">bug IE</a> </li> 
</ul> 
<h2>Faire des liens qui identifient clairement leurs destinations</h2>
<ul> 
<li>Donner des liens texte significatif et descriptif de la destination, même lorsque hors contexte, c'est-à-dire ne pas utiliser "cliquez ici", "plus", "rapport complet", etc </li> 
<li>Inclure le type de fichier et la taille des fichiers téléchargeables, (par ex : PDF, 10MB) </li> 
<li>Éviter d'ouvrir de nouvelles fenêtres, mais si on doit le faire, fournir un avertissement dans le lien. </li> 
<li>Souligner les liens et faire ressortir le contraste des couleurs du texte environnant (à moins que les liens ne figurent dans le menu de navigation ou la liste des liens). </li> 
</ul> 
<h2>Utiliser des couleurs avec un contraste suffisant</h2>
<ul> 
<li>Créer un contraste suffisant entre le texte et les couleurs de fond en spécifiant toujours <code class="prettyprint">color</code> et <code class="prettyprint">backgroung-color</code> dans la feuille de style. </li> 
<li><a rel="nofollow" class="external" target="_blank" href="https://chrome.google.com/webstore/detail/color-contrast-analyzer/dagdlcijhfbmgkjokkjicnnfimlebcll">Vérifier le contraste par rapport à l'algorithme de luminosité W3C</a></li> 
<li>Ne pas utiliser la couleur seule pour transmettre le sens.</li> 
</ul> 
<h2>Construire des pages pour travailler avec un clavier aussi bien qu'avec une souris</h2>
<ul> 
<li>Inclure <code class="prettyprint">a: focus</code> et <code class="prettyprint">a: active</code> dans le CSS ainsi que <code class="prettyprint">a: hover</code> pour faire fonctionner les effets de mise au point de mise au point en tablant sur les liens ainsi que lors de la souris sur eux.</li> 
<li>Faire passer l'ordre de tabulation par une page suivre l'ordre naturel de lecture. </li> 
<li>Autoriser toutes les interfaces Web, y compris les diaporamas, les lecteurs vidéo, les éléments Flash et les fonctionnalités de script à travailler aussi bien avec le clavier et la souris.</li> 
</ul> 

<h2>Utiliser des scripts avec attention</h2>
<ul> 
<li>Assurer que les changements dynamiques sont captés par les lecteurs d'écran en ayant des changements déclenchés par <code class="prettyprint">onclick</code> et en les exécutant rapidement.</li> 
<li>Indiquer clairement aux utilisateurs de lecteurs d'écran les liens utilisés pour les modifications de contenu dynamique plutôt que de charger de nouvelles pages.</li>
<p class="notice exemple">Par exemple, en incluant du texte d'aide ou des conseils dans le contenu du lien</p> 
</ul>

<h2>Rendre les objets multimedia accessibles</h2>
<ul> 
<li>Fournir des transcriptions et des légendes pour tous les fichiers vidéo et audio</li> 
<li>Inclure un bouton de pause pour les diaporamas.</li>
</ul>
<p></p>

<h2>Menu accessible</h2>

<p>Un grand menu accessible <abbr title="Grand Menu Accessible">(GMA)</abbr></p>

<h2>Accessibilité au clavier</h2>

<p>Le GMA supporte la navigation au clavier selon le comportement décrit dans <a href="http://www.w3.org/TR/wai-aria-practices/#menu"> WAI-ARIA Menu or Menu bar (widget)</a>, mais il s'agit aussi de respecter les attentes générales des utilisateurs pour le comportement des liens dans une navigation globale. À cette fin, le grand menu accessible permet un focus detabulation sur chaque items de premier niveau. Lorsque l'un des items du menu à le focus, appuyer sur la touche <span class="btn">Entrée</span>, <span class="btn">Espace</span> ou <span class="btn">Flèche bas</span>, ouvrira le sous-menu, et appuyer les boutons <span class="btn">Flèche gauche</span> ou <span class="btn">Flèche droite</span> déplacera le focus sur l'item du menu adjacent. Les liens à l'intérieur du sous-menu suivent l'ordre des tabulations lorsque celui-ci est ouvert. On peut ainsi naviguer avec les flèches de direction. Appuyer sur le bouton <span class="btn">Échap</span> fermera le sous-menu et rendra le focus à l'item du menu parent.</p>

<h2>Accessibilité du lecteur d'écran</h2>

<p>Le GMA utilise les <strong>WAI-ARIA Rôles</strong>, <strong>États</strong> et <strong>Propriétés</strong>, tels que décrits dans <a href="http://www.w3.org/TR/wai-aria-practices/#menu">WAI-ARIA Menu or Menu bar (widget)</a> avec des exceptions notables cependant, de sorte qu'il se conforme mieux aux attentes des utilisateurs de lecteurs d'écran pour la navigation globale. On n'utilise pas <code class="prettyprint">role="menu"</code> pour le conteneur du menu et non plus <code class="prettyprint">role="menuitem"</code> pour chaque lien à l'intérieur, car sinon la technologie d'assitance ne considèrera plus les liens comme des liens mais plutôt comme des items de menu et les liens de la navigation globale n'apparaitront plus lorsque l'utilisateur du lecteur d'écran exécutera une commande de racccourci pour faire apparaître une liste de liens sur la page.</p>
<p>GMA maintient également la sémantique de la structure du sous-menu; Les liens sont organisés en listes et séparés par des balises de titre. Omettre <code class="prettyprint">role="menu"</code> et <code class="prettyprint">role="menuitem"</code> pour la navigation globale semble être le plus approprié.</p>

<h2>Usage</h2>

<h3>HTML</h3>

<p>La structure HTML de GMA est un élément <code>nav</code>, (ou n'importe quel autre élément conteneur), contenant une liste. Chaque item de la liste contient un lien qui est suivi par une <code>div</code> (ou n'importe quel autre conteneur qui servira de panneau de sous-menu). Le panneau peut contenir n'importe quel code html; Dans l'exemple ci-dessous chaque panneau contient trois listes de liens. Vous pouvez,dans ce panneau, définir explicitement des groupes entre lesquels un utilisateur peut naviguer rapidement à l'aide des touches <span class="btn">fléches gauche</span> et <span class="btn">droite</span>; La classe CSS <code class="prettyprint">.sub-nav-group</code> identifie un groupe navigable.</p>

<pre class="notice code">
&lt;nav&gt;
    &lt;ul class=&quot;nav-menu&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;?movie&quot;&gt;Films&lt;/a&gt;
            &lt;div class=&quot;sub-nav&quot;&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=0&quot;&gt;Action &amp; Aventure&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=2&quot;&gt;Enfants et Famille&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=7&quot;&gt;Drames&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=9&quot;&gt;Étranger&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=14&quot;&gt;Comédies musicales&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=15&quot;&gt;Romance&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;?tv&quot;&gt;Télévision&lt;/a&gt;
            &lt;div class=&quot;sub-nav&quot;&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=20&quot;&gt;TV Classique&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=21&quot;&gt;TV Crime&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=27&quot;&gt;TV réalité&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=30&quot;&gt;TV Action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=33&quot;&gt;TV Drames&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=34&quot;&gt;TV Horreur&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;</pre>

<p>Par défaut, GMA utilise les classes CSS suivantes pour définir les items de navigation de premier niveau, les panneaux, les groupes à l'intérieur du panneau et les propriétés <code>hover</code>, <code>focus</code> et <code>open</code>. On définit également un préfixe pour les chaînes d'identification uniques, qui sont nécessaires pour indiquer la relation d'un élément de navigation de premier niveau sur le panneau qu'elle contrôle.</p>

<pre class="notice code">
défaut = {
    /* des ID uniques sont requis pour indiquer aria-owns, aria-controls et aria-labelledby *&#47; 
    uuidPrefix: "menu_accessible",

    /* Classe CSS pour définir le style du GMA *&#47; 
    menuClass: "menu_accessible",

    /* Classe CSS pour un item de navigation de premier niveau *&#47; 
    topNavItemClass: "menu_accessible-top-nav-item",

    /* Classe CSS pour un panneau de sous-menu *&#47; 
    panelClass: "menu_accessible-panel",

    /* Classe CSS pour un groupe d'items dans un sous-menu *&#47; 
    panelGroupClass: "menu_accessible-panel-group",

    /* Classe CSS pour la propriété hover *&#47; 
    hoverClass: "hover",

    /* Classe CSS pour la propriété focus *&#47; 
    focusClass: "focus",

    /* Classe CSS pour la propriété open *&#47; 
    openClass: "open" 
}</pre>

<p>Vous pouvez redéfinir les valeurs par défaut et utiliser vos propres classes CSS.</p>

<h3>JavaScript</h3>

<p>Assurez-vous d'avoir inclus jQuery et le plugin jquery-accessibleMegaMenu.js.</p>

<pre class="notice code">
&lt;script src=&quot;js/vendor/jquery-1.10.1.min.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/jquery-accessibleMegaMenu.js&quot;&gt;&lt;/script&gt;</pre>

<p>Ce qui suit initialise le premier élément <code>nav</code> comme un GMA, avec des classes CSS optionnelles de surcharge.</p>

<pre class="notice code">
$(&quot;nav:first&quot;).accessibleMegaMenu({
    /* des ID uniques sont requis pour indiquer aria-owns, aria-controls et aria-labelledby *&#47;
    uuidPrefix: &quot;menu_accessible&quot;,

    /* Classe CSS pour définir le style du GMA *&#47;
    menuClass: &quot;nav-menu&quot;,

    /* Classe CSS pour un item de navigation de premier niveau *&#47;
    topNavItemClass: &quot;nav-item&quot;,

    /* Classe CSS pour un panneau de sous-menu *&#47;
    panelClass: &quot;sub-nav&quot;,

    /* Classe CSS pour un groupe d'items dans un sous-menu *&#47;
    panelGroupClass: &quot;sub-nav-group&quot;,

    /* Classe CSS pour la propriété hover *&#47;
    hoverClass: &quot;hover&quot;,

    /* Classe CSS pour la propriété focus *&#47;
    focusClass: &quot;focus&quot;,

    /* Classe CSS pour la propriété open *&#47;
    openClass: &quot;open&quot;
});</pre>

<h3>CSS</h3>

<p>GMA gère l'affichage et le masquage de panneaux en ajoutant ou supprimant une classe CSS. Aucun style interne n'est ajouté pour masquer des éléments ou créer une animation entre les états.</p>

<p>Ci-dessous le CSS rudimentaire pour notre exemple qui permet l'affichage/masquage  et le rendu des sous-menu de listes dans GMA.</p>

<pre class="notice code">
/* CSS rudimentaire pour cet exemple de GMA *&#47;    

/* liste du menu principal *&#47;
.nav-menu {
    display: block;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
    z-index: 15;
}

/* item de navigation de premier niveau du GMA *&#47;
.nav-item {
    list-style: none;
    display: inline-block;
    padding: 0;
    margin: 0;
}

/* premier lien descendant dans un li du menu principal *&#47;
.nav-item &gt; a {
    position: relative;
    display: inline-block;
    padding: 0.5em 1em;
    margin: 0 0 -1px 0;
    border: 1px solid transparent;
}

/* états focus/open premier lien descendant dans un li du menu principal *&#47;
.nav-item &gt; a:focus,
.nav-item &gt; a.open {
    border: 1px solid #dedede;
}

/* états open du premier lien descendant dans un li du menu principal *&#47;
.nav-item &gt; a.open {
    background-color: #fff;
    border-bottom: none;
    z-index: 1;
}

/* panneau de sous-menu *&#47;
.sub-nav {
    position: absolute;
    display: none;
    top: 2.2em;
    margin-top: -1px;
    padding: 0.5em 1em;
    border: 1px solid #dedede;
    background-color: #fff;
}

/* état open du panneau de sous-menu *&#47;
.sub-nav.open {
    display: block;
}

/* liste d'items dans le panneau de sous-menu *&#47;
.sub-nav ul {
    display: inline-block;
    vertical-align: top;
    margin: 0 1em 0 0;
    padding: 0;
}

/* item li dans le panneau de sous-menu *&#47;
.sub-nav li {
    display: block;
    list-style-type: none;
    margin: 0;
    padding: 0;
}</pre>

<h3>Exemple complet</h3>

<p>En compilant tout, voilà le code final :</p>

<style>
    /* CSS rudimentaire pour cet exemple de GMA */    

    /* liste du menu principal */
    .nav-menu {
        display: block;
        position: relative;
        list-style: none;
        margin: 0;
        padding: 0;
        z-index: 15;
    }
    
    /* item de navigation de premier niveau du GMA */
    .nav-item {
        list-style: none;
        display: inline-block;
        padding: 0;
        margin: 0;
    }
    
    /* premier lien descendant dans un li du menu principal */
    .nav-item > a {
        position: relative;
        display: inline-block;
        padding: 0.5em 1em;
        margin: 0 0 -1px 0;
        border: 1px solid transparent;
    }
    
    /* états focus/open premier lien descendant dans un li du menu principal */
    .nav-item > a:focus,
    .nav-item > a.nav-menu-open {
        border: 1px solid #dedede;
    }
    
    /* états open du premier lien descendant dans un li du menu principal  */
    .nav-item > a.nav-menu-open {
        background-color: #fff;
        border-bottom: none;
        z-index: 1;
    }
    
    /* panneau de sous-menu */
    .sub-nav {
        position: absolute;
        display: none;
        top: 2.6em;
        margin-top: -1px;
        padding: 0.5em 1em;
        border: 1px solid #dedede;
        background-color: #fff;
    }
    
    /* état open du panneau de sous-menu */
    .sub-nav.nav-menu-open {
        display: block;
    }
    
    /* liste d'items dans le panneau de sous-menu */
    .sub-nav ul {
        display: inline-block;
        vertical-align: top;
        margin: 0 1em 0 0;
        padding: 0;
    }
    
    /* item li dans le panneau de sous-menu */
    .sub-nav li {
        display: block;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }     
</style>

<nav id="test-nav-menu">
    <ul class="nav-menu">
        <li class="nav-item">
            <a href="?movie">Films</a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                    <li><a href="?movie&genre=0">Action &amp; Aventure</a></li>
                    <li><a href="?movie&genre=2">Enfants &amp; Famille</a></li>
                    <li>&#8230;</li>
                </ul>
                <ul class="sub-nav-group">
                    <li><a href="?movie&genre=7">Drames</a></li>
                    <li><a href="?movie&genre=9">Étranger</a></li>
                    <li>&#8230;</li>
                </ul>
                <ul class="sub-nav-group">
                    <li><a href="?movie&genre=14">Comédies musicales</a></li>
                    <li><a href="?movie&genre=15">Romance</a></li>
                    <li>&#8230;</li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="?tv">Télévision</a>
            <div class="sub-nav">
                <ul class="sub-nav-group">
                    <li><a href="?tv&genre=20">TV Classique</a></li>
                    <li><a href="?tv&genre=21">TV Crime</a></li>
                    <li>&#8230;</li>
                </ul>
                <ul class="sub-nav-group">
                    <li><a href="?tv&genre=27">TV réalité</a></li>
                    <li><a href="?tv&genre=30">TV Action</a></li>
                    <li>&#8230;</li>
                </ul>
                <ul class="sub-nav-group">
                    <li><a href="?tv&genre=33">TV Drames</a></li>
                    <li><a href="?tv&genre=34">TV Horreur</a></li>
                    <li>&#8230;</li>
                </ul>
            </div>
        </li>
    </ul>
</nav>

<!-- initialise un sélecteur comme un menu GMA -->
<script>
    $("nav#test-nav-menu").accessibleMegaMenu({
        /* préfixe pour les attributs d'un ID unique, qui sont requis
            pour indiquer l'appartenance à aria-owns, aria-controls et aria-labelledby */
        uuidPrefix: "menu_accessible",

        /* Classe CSS pour définir le style du GMA */
        menuClass: "nav-menu",

        /* Classe CSS pour un item de navigation de premier niveau */
        topNavItemClass: "nav-item",

        /* Classe CSS pour un panneau de sous-menu */
        panelClass: "sub-nav",

        /* Classe CSS pour un groupe d'items dans un sous-menu */
        panelGroupClass: "sub-nav-group",

        /* Classe CSS pour la propriété hover */
        hoverClass: "nav-menu-hover",

        /* Classe CSS pour la propriété focus */
        focusClass: "nav-menu-focus",

        /* Classe CSS pour la propriété open */
        openClass: "nav-menu-open"
    });
</script>

<pre class="notice code">
&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
&lt;meta charset=&quot;UTF-8&quot;&gt;
&lt;title&gt;Exemple de grand menu accessible&lt;/title&gt;
&lt;style&gt;
    /* CSS rudimentaire pour cet exemple de GMA *&#47;    

    /* liste du menu principal *&#47;
    .nav-menu {
        display: block;
        position: relative;
        list-style: none;
        margin: 0;
        padding: 0;
        z-index: 15;
    }
    
    /* item de navigation de premier niveau du GMA *&#47;
    .nav-item {
        list-style: none;
        display: inline-block;
        padding: 0;
        margin: 0;
    }
    
    /* premier lien descendant dans un li du menu principal *&#47;
    .nav-item &gt; a {
        position: relative;
        display: inline-block;
        padding: 0.5em 1em;
        margin: 0 0 -1px 0;
        border: 1px solid transparent;
    }
    
    /* états focus/open premier lien descendant dans un li du menu principal *&#47;
    .nav-item &gt; a:focus,
    .nav-item &gt; a.open {
        border: 1px solid #dedede;
    }
    
    /* états open du premier lien descendant dans un li du menu principal  *&#47;
    .nav-item &gt; a.open {
        background-color: #fff;
        border-bottom: none;
        z-index: 1;
    }
    
    /* panneau de sous-menu *&#47;
    .sub-nav {
        position: absolute;
        display: none;
        top: 2.6em;
        margin-top: -1px;
        padding: 0.5em 1em;
        border: 1px solid #dedede;
        background-color: #fff;
    }
    
    /* état open du panneau de sous-menu *&#47;
    .sub-nav.open {
        display: block;
    }
    
    /* liste d'items dans le panneau de sous-menu *&#47;
    .sub-nav ul {
        display: inline-block;
        vertical-align: top;
        margin: 0 1em 0 0;
        padding: 0;
    }
    
    /* item li dans le panneau de sous-menu *&#47;
    .sub-nav li {
        display: block;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }     
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;nav&gt;
    &lt;ul class=&quot;nav-menu&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;?movie&quot;&gt;Films&lt;/a&gt;
            &lt;div class=&quot;sub-nav&quot;&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=0&quot;&gt;Action &amp;amp; Aventure&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=2&quot;&gt;Enfants &amp;amp; Famille&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=7&quot;&gt;Drames&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=9&quot;&gt;Étranger&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=14&quot;&gt;Comédies musicales&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?movie&amp;genre=15&quot;&gt;Romance&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a href=&quot;?tv&quot;&gt;Télévision&lt;/a&gt;
            &lt;div class=&quot;sub-nav&quot;&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=20&quot;&gt;TV Classique&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=21&quot;&gt;TV Crime&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=27&quot;&gt;TV réalité&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=30&quot;&gt;TV Action&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
                &lt;ul class=&quot;sub-nav-group&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=33&quot;&gt;TV Drames&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;?tv&amp;genre=34&quot;&gt;TV Horreur&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&amp;#8230;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/nav&gt;

&lt;!-- inclusion de jquery --&gt;
&lt;script src=&quot;//code.jquery.com/jquery-1.10.1.min.js&quot;&gt;&lt;/script&gt;

&lt;!-- inclusion du script plugin jquery-accessibleMegaMenu --&gt;
&lt;script src=&quot;js/jquery-accessibleMegaMenu.js&quot;&gt;&lt;/script&gt;

&lt;!-- initialise un sélecteur comme un menu GMA --&gt;
&lt;script&gt;
    $(&quot;nav:first&quot;).accessibleMegaMenu({
        /* préfixe pour les attributs d'un ID unique, qui sont requis
            pour indiquer l'appartenance à aria-owns, aria-controls et aria-labelledby *&#47;
        uuidPrefix: &quot;menu_accessible&quot;,

        /* Classe CSS pour définir le style du GMA *&#47;
        menuClass: &quot;nav-menu&quot;,

        /* Classe CSS pour un item de navigation de premier niveau *&#47;
        topNavItemClass: &quot;nav-item&quot;,

        /* Classe CSS pour un panneau de sous-menu *&#47;
        panelClass: &quot;sub-nav&quot;,

        /* Classe CSS pour un groupe d'items dans un sous-menu *&#47;
        panelGroupClass: &quot;sub-nav-group&quot;,

        /* Classe CSS pour la propriété hover *&#47;
        hoverClass: &quot;hover&quot;,

        /* Classe CSS pour la propriété focus *&#47;
        focusClass: &quot;focus&quot;,

        /* Classe CSS pour la propriété open *&#47;
        openClass: &quot;open&quot;
    });
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

<h2>Pour aller plus loin...</h2>

<p>Conseils sur la création de sites Web conformes aux WCAG : <a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/WAI/tutorials/">Web Accessibility Tutorials</a></p>

