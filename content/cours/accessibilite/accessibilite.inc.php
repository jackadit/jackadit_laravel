<aside>
	<p class="h2-like">Contenu du cours</p>
	<ol id="accessibilite" class="unstyled">
		<li><a href="/cours/accessibilite/1" title="cours1">Pourquoi l'accessibilité Web ?</a></li>
		<li><a href="/cours/accessibilite/2" title="cours2">Intégration de l'accessibilité dans un projet WEB</a></li>
		<li><a href="/cours/accessibilite/3" title="cours3">Règles pour l'accessibilité des contenus Web (WCAG 2.0)</a></li>
		<li><a href="/cours/accessibilite/4" title="cours4">Le cadre normatif et réglementaire : de WCAG au RGAA</a></li>
		<li><a href="/cours/accessibilite/5" title="cours5">Thématiques et critères RGAA</a></li>
		<li><a href="/cours/accessibilite/6" title="cours6">Exercices pratiques</a></li>
		<li><a href="/cours/accessibilite/7" title="cours7">Les tableaux simples</a></li>
		<li><a href="/cours/accessibilite/8" title="cours8">Les tableaux complexes</a></li>
		<li><a href="/cours/accessibilite/9" title="cours9">Les formulaires</a></li>
		<li><a href="/cours/accessibilite/10" title="cours10">WAI-ARIA</a></li>
		<li><a href="/cours/accessibilite/11" title="cours11">Applications pratiques</a></li>
		<li><a href="/cours/accessibilite/12" title="cours12">Glosssaire</a></li>
	</ol>
</aside>

<h1>Introduction à l'accessibilité numérique.</h1>

<h2>La Web accessibilité</h2>
<p>Ce cours va se limiter à traiter de l'accessibilité du web.</p>

<p>L'accessibilité du web traite de la problématique de l'accès aux services et contenus en ligne non seulement pour les handicapés, 
	mais aussi, de manière plus générale, pour tous les utilisateurs ne disposant pas d'un environnement de travail standard, 
	comme par exemple un téléphone mobile, une tablette, etc.</p>
<p>Définie par des normes techniques établies par la <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/WAI/">Web Accessibility Initiative (WAI)</a> du <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/">World Wide Web Consortium (W3C)</a>, elle nécessite un traitement tout au long du cycle de vie d'un site web, par l'ensemble de ses acteurs, via des méthodes d'applications, des référentiels métiers et une démarche de suivi.</p>

<p>L'accessibilité numérique doit être prise en compte à plusieurs niveaux :</p>
<ul>
	<li>Matériels</li>
	<li>Logiciels : systèmes d'exploitation, applications, etc.</li>
	<li>Contenus : sites, documents en téléchargement, etc.</li>
</ul>
	<p>Nous allons nous concentrer sur les principaux cas de figure dans des situations types.</p>
	<p>Ce cours ne se veut pas exhaustif, mais il parcourt néanmoins les notions fondamentales nécessaires pour rendre un site web accessible.</p>



<h2>Le contexte international</h2>

<h3>Le <abbr title="World Wide Web Consortium">W3C</abbr> initiateur de l'accessibilité.</h3>

<p>En 1994, Tim Berners Lee crée le <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/">World Wide Web Consortium (W3C)</a> qui fait autorité pour l'établissement de standard du Web.</p>
<p>Sa philosophie, dès le départ, est basé sur le concept suivant :</p>
<blockquote>Mettre le Web et ses services à la disposition de tous les individus, quels que soient leur matériel ou logiciel, 
leur infrastructure réseau, leur langue maternelle, leur culture, leur localisation géographique, ou leurs aptitudes physiques ou mentales.

<p class="txtright">Tim Berners Lee - W3C&nbsp;</p>
</blockquote>

<h3>La Web Accessibility Initiative (WAI).</h3>

<p>Le W3C a créé en 1996 la <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/WAI/">Web Accessibility Initiative (WAI)</a>.</p>

<p>Cet organisme de référence en matière d'accessibilité a pour rôles de :</p>
<ul>
	<li>Vérifier l'accessibilité des technologies W3C.</li>
	<li>Produire des recommandations.</li>
	<li>Contribuer aux développements d'outils.</li>
	<li>Coordonner la recherche et le développement sur l'accessibilité.</li>
</ul>

<h4>Documentation produite par la WAI</h4>
<dl>
    <dt>WCAG (Web Content Accessibility Guidelines)</dt>
    <dd>Recommandations techniques pour l'accessibilité des contenus Web.</dd>
    <dd>Norme internationale ISO/IEC 40500:2012 depuis le 15 octobre 2012.</dd>

    <dt>ATAG (Authoring Tools Accessibility Guidelines)</dt>
    <dd>Recommandations destinées aux outils d'édition de contenus Web (CMS, éditeurs WYSIWYG, blogs, wikis...).</dd>

    <dt>UAAG (User Agent Accessibility Guidelines)</dt>
    <dd>Recommandations destinées aux agents utilisateurs (navigateurs Web, lecteurs multimédia, plug-ins, lecteurs d'écran).</dd>

    <dt>WAI-ARIA (Web Accessibility Initiative - Accessible Rich Internet Applications)</dt>
    <dd>Spécification pour rendre les applications Internet riches compatibles avec les technologies d'assistance.</dd>
</dl>

<h2>Le cadre européen</h2>
<p>L'Europe reconnaît l'accessibilité numérique comme une obligation citoyenne.</p>

<h3>La directive 2000/78/CE</h3>
<p>À travers l'article 1er de la directive 2000/78/CE du Conseil de l'Europe du 27 novembre 2000, les politiques et la législation reconnaissent l'importance de l'emploi et du travail pour garantir l'égalité des chances.</p>

<blockquote>
<p>(…) d'établir un cadre général pour lutter contre la discrimination fondée sur la religion ou les convictions, le handicap, l'âge ou l'orientation sexuelle, en ce qui concerne l'emploi et le travail, en vue de mettre en œuvre, dans les États membres, le principe de l'égalité de traitement.</p>
</blockquote>

<p>La directive indique en particulier que :</p>
<blockquote>
	<p>Il convient de prévoir des mesures appropriées, c'est-à-dire, des mesures efficaces et pratiques destinées à aménager le poste de travail en fonction du handicap, par exemple en procédant à un aménagement des locaux ou à une adaptation des équipements,(…).</p>
</blockquote>

<p>La Commission européenne a entrepris des initiatives dans le cadre des deux plans d'action eEurope de manière à instaurer une société de l'information plus accessible.</p>

<h3>Les plans d'action eEurope</h3>

<h4>Plan d'action de 2002</h4>
<p>Recommandations :</p>

<ul>
	<li>Adoption des instructions de la WAI <a rel="nofollow" class="external" target="_blank" href="http://www.w3.org/WAI/">(Web Accessibility Initiative)</a>.</li>
	<li>Mise au point d'un programme d'études européen de conception pour tous (Design for All, DFA).</li>
	<li>Renforcement des technologies d'assistance et normalisation de la DFA.</li>
</ul>

<h4>Plan d'action eEurope 2005</h4>

<p>Ce plan visait à tenir compte de <a rel="nofollow" class="external" target="_blank" href="http://fr.wikipedia.org/wiki/E-inclusion">l'e-inclusion</a> dans toutes les lignes d'action.</p>
<p>Ce plan, désormais désuet (vous pouvez le retrouver à l'adresse <a rel="nofollow" class="external" target="_blank" href="https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=LEGISSUM:l24226&from=FR">eEurope 2005</a>), proposait en outre d'introduire des exigences en matière d'accessibilité des technologies de l'information et de la communication (TIC) dans les marchés publics.</p>

<p>Dans sa réflexion sur l'e-inclusion, elle constate que de nombreux services en ligne ne rendent pas les services attendus par les personnes handicapées et plus largement, les personnes en discapacité partielle temporaire (personne ayant oublié ses lunettes, ayant un bras cassé) ou permanente (accidentés de la vie). Par exemple, les services suivants présentent des problèmes&nbsp;:</p>
<ul>
	<li>Le manque de solutions harmonisées, notamment l'impossibilité d'accéder au numéro d'urgence 112 à partir de téléphones à texte dans de nombreux États membres.</li>
	<li>Le manque de solutions interopérables pour des technologies de l'information et de la communication accessibles.</li>
	<li>L'incompatibilité des logiciels avec les dispositifs d'assistance&nbsp;: les narrateurs de lecture d'écran destinés aux aveugles sont souvent inutilisables après la mise en service de nouveaux systèmes d'exploitation.</li>
	<li>L'interférence entre les produits usuels et les dispositifs d'assistance, par exemple entre les GSM et les appareils auditifs.</li>
	<li>L'absence de normes à l'échelle européenne : il existe par exemple sept systèmes de téléphone à texte, incompatibles entre eux, destinés aux sourds et aux malentendants.</li>
	<li>Le manque de services adéquats : de nombreux sites web, par exemple, sont d'une trop grande complexité pour les utilisateurs inexpérimentés ou ayant des difficultés cognitives ou sont impossibles à lire et à parcourir pour les malvoyants.</li>
	<li>L'absence de produits et services pour certains groupes, par exemple les communications téléphoniques pour les utilisateurs des langues des signes.</li>
	<li>La conception physique des appareils, qui constitue une source de difficultés, par exemple pour l'utilisation des claviers et écrans de nombreux appareils.</li>
	<li>Le manque de contenus accessibles.</li>
	<li>Le choix restreint des services de communication électronique, leur qualité et leur prix.</li>
</ul>

<h2>Le cadre français</h2>

<h3>Les textes fondateurs</h3>
<p>Dès 1999, la France a engagé des actions visant à favoriser l'accessibilité de l'information à tous les internautes sur la base des recommandations d'accessibilité de l'initiative <a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/WAI/">WAI</a> du <a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/">W3C</a>.</p>

<dl>
    <dt>7 octobre 1999</dt>
    <dd><a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000000213936">Circulaire du Premier ministre</a> relative aux sites Internet des services et des établissements publics de l'État</dd>
    <blockquote>"Les responsables des sites veilleront tout particulièrement à favoriser l'accessibilité de l'information à tous les internautes, notamment les personnes handicapées, non voyantes, malvoyantes ou malentendantes."</blockquote>

    <dt>11 février 2005</dt>
    <dd><a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000809647/">loi n° 2005-102</a> pour l'égalité des droits et des chances, la participation et la citoyenneté des personnes handicapées.</dd>
    <blockquote>(<a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000809647/#JORFARTI000001290363">l'article 47</a> instaure l'obligation pour les services de communication publique en ligne des services de l'Etat, des collectivités territoriales et des établissements publics qui en dépendent d'être accessibles aux personnes handicapées.)</blockquote>

    <dt>16 mai 2009</dt>
    <dd><a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/loda/id/JORFTEXT000020616980/">Décret d'application de l'article 47</a> </dd>
    <blockquote>Ce décret précise à travers sept articles les modalités générales d'application pour les trois canaux : web, télévision et téléphonie.</blockquote>

    <dt>21 octobre 2009</dt>
    <dd>Publication du <a rel="nofollow" class="external" target="_blank" href="https://www.numerique.gouv.fr/publications/rgaa-accessibilite/">référentiel général d'accessibilité pour les administrations (RGAA)</a></dd>
</dl>

<h3>Évolutions récentes</h3>
<dl>
    <dt>29 avril 2015</dt>
    <dd>Version 3 du RGAA est approuvée par décret.</dd>

    <dt>7 octobre 2016</dt>
    <dd><a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000033202746/">Loi n°2016-1321</a> pour une République numérique (<a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/article_jo/JORFARTI000033203504/">article 106</a> modifiant l'article 47 de la loi de 2005)</dd>

    <dt>5 juin 2018</dt>
    <dd>Mise à jour des <a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/TR/WCAG21/">WCAG en version 2.1</a>.</dd>

    <dt>Août 2018</dt>
    <dd>Mise à jour de la norme européenne <a rel="nofollow" class="external" target="_blank" href="https://accessuse.eu/fr/ETSI-norme.html">EN 301/549</a>.</dd>

    <dt>Septembre 2018</dt>
    <dd><a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000037367660/">Loi n°2018-771 du 5 septembre 2018</a> pour la liberté de choisir son avenir professionnel (L'<a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/article_jo/JORFARTI000037367812/">article 80</a> transpose la <a rel="nofollow" class="external" target="_blank" href="https://eur-lex.europa.eu/legal-content/FR/LSU/?uri=CELEX:32016L2102">directive (UE) 2016/2102 du Parlement européen du 26 octobre 2016</a> relative à l'accessibilité des sites internet et des applications mobiles des organismes du secteur public.)</dd>

    <dt>7 juin 2019</dt>
    <dd>Parution au journal Officiel Européen de l'Acte Européen de l'Accessibilité.</dd>

    <dt>25 juillet 2019</dt>
    <dd>Textes réglementaires finalisant la transposition de la directive UE 2016/2102 et les mécanismes introduits par <a rel="nofollow" class="external" target="_blank" href="https://www.legifrance.gouv.fr/jorf/article_jo/JORFARTI000033203504">l'article 106</a> de la loi dite République Numérique</dd>

    <dt>16 septembre 2019</dt>
    <dd>Version 4.0 du RGAA</dd>

    <dt>18 février 2021</dt>
    <dd>Version <a rel="nofollow" class="external" target="_blank" href="https://www.numerique.gouv.fr/publications/rgaa-accessibilite/">4.1 du RGAA</a></dd>
</dl>
