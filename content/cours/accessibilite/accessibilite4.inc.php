<h1>Accessibilité : Le cadre normatif et réglementaire : du WCAG au RGAA.</h1>
<h2>W3C, Web Accessibility Initiative et norme WCAG.</h2>
<p>L'acronyme WCAG signifie Web Content Accessibility Guidelines, c'est-à-dire l'ensemble des directives pour l'accessibilité des contenus Web. Ce standard fut développé à la fin du siècle dernier par la WAI (Web Accessibility Initiative), un groupe de travail du W3C (World Wide Web Consortium). Le W3C est un consortium international d'acteurs influents dans le domaine des nouvelles technologies de l'information et des communications qui édictent bon nombre des standards liés au Web.</p>
<p>La version 2.0 du standard WCAG présente 61 critères de succès distincts classés en 14 directives, permettant de rendre les contenus davantage accessibles aux personnes handicapées. L'application de ces mêmes critères de succès présente également un impact positif et direct sur l'utilisation des contenus Web par les populations vieillissantes.</p>
<p>Les règles et les critères de succès des WCAG 2.0 sont souvent de portée plus générale que ce que l'on pouvait lire dans la version 1.0. Cela tient au fait que la version 2.0 s'adresse à l'ensemble des technologies utilisées sur le Web alors que les WCAG 1.0 étaient beaucoup plus centrées sur les technologies HTML et CSS.</p>

<h2>Les méthodes d'applications de WCAG.</h2>
<p>Les présentes directives expliquent comment rendre les contenus Web accessible aux personnes handicapées.<br />
	Ces directives ont été écrites à l'attention de tous les créateurs de contenu pour le Web (auteurs de pages et concepteurs de sites) 
	et des développeurs d'outils de création de contenu. 
	<br />
	L'objectif principal de ces directives est de promouvoir l'accessibilité [aux personnes handicapées]. 
	Cependant, en les suivant, le contenu Web s'en trouvera plus accessible à tous les utilisateurs, 
	indépendamment du programme utilisateur (par exemple, logiciel de consultation bureautique [browser], 
	logiciel vocal, téléphone mobile, ordinateur personnel embarqué dans une automobile, etc.) 
	et quelques soient les contingences imposées par l'environnement d'utilisation 
	(par exemple, lieu bruyant, sur- ou sous-éclairé, en gardant les mains libres etc).<br />
	En suivant ces directives, on permettra également aux utilisateurs de trouver de l'information sur le Web plus rapidement.<br />
	Ces directives ne cherchent pas à décourager l'utilisation par les créateurs de contenu d'images, de vidéo, etc, mais expliquent plutôt comment rendre les contenus multimédias plus accessibles à une large audience.</p>
<ul>
	<li><a href="#dir1" name="tdmdir1" id="tdmdir1">Directive 1.</a> Fournir des alternatives équivalentes au contenu visuel et auditif.</li>
	<li><a href="#dir2" name="tdmdir2" id="tdmdir2">Directive 2.</a> Ne pas s'en remettre exclusivement aux couleurs.</li>
	<li><a href="#dir3" name="tdmdir3" id="tdmdir3">Directive 3.</a> Utiliser le balisage HTML et les feuilles de style CSS de façon appropriée.</li>
	<li><a href="#dir4" name="tdmdir4" id="tdmdir4">Directive 4.</a> Clarifier l'utilisation du langage naturel</li>
	<li><a href="#dir5" name="tdmdir5" id="tdmdir5">Directive 5.</a> Créer des tableaux qui se transforment de façon élégante.</li>
	<li><a href="#dir6" name="tdmdir6" id="tdmdir6">Directive 6.</a> S'assurer que les pages qui contiennent de nouvelles technologies (objets programmables, styles CSS) se transforment de façon élégante.</li>
	<li><a href="#dir7" name="tdmdir7" id="tdmdir7">Directive 7.</a> Assurer à l'utilisateur le contrôle des changements du contenu lorsque ce dernier varie dans le temps (clignotements, mouvements, rafraîchissement du contenu, redirections).</li>
	<li><a href="#dir8" name="tdmdir8" id="tdmdir8">Directive 8.</a> Assurer un accès direct aux interfaces utilisateur intégrées (objets Flash, applets JAVA).</li>
	<li><a href="#dir9" name="tdmdir9" id="tdmdir9">Directive 9.</a> Concevoir en respectant l'indépendance par rapport au périphérique (souris, clavier, etc).</li>
	<li><a href="#dir10" name="tdmdir10" id="tdmdir10">Directive 10.</a> Utiliser des solutions intermédiaires en attendant que les agents utilisateurs aient un meilleur support de l'accessibilité.</li>
	<li><a href="#dir11" name="tdmdir11" id="tdmdir11">Directive 11.</a> Utiliser les technologies et directives du W3C.</li>
	<li><a href="#dir12" name="tdmdir12" id="tdmdir12">Directive 12.</a> Fournir des informations de contexte et d'orientation.</li>
	<li><a href="#dir13" name="tdmdir13" id="tdmdir13">Directive 13.</a> Fournir des mécanismes de navigation clairs.</li>
	<li><a href="#dir14" name="tdmdir14" id="tdmdir14">Directive 14.</a> S'assurer que les pages sont claires et simples.</li>
</ul>
<p>Chaque directive détermine un ou plusieurs points de contrôles.</p>
<p>Chaque point de contrôle a un niveau de priorité assigné par le groupe de travail basé sur son impact sur l'accessibilité.

<h3>[Priorité 1]</h3>
	<p>Un développeur de contenu web doit respecter ce point de contrôle. Sinon, un ou plusieurs groupes se trouveront dans l'impossibilité d'accéder à l'information contenue dans le document. Respecter ce point de contrôle est une condition de base pour permettre à certains groupes d'utiliser des documents Web. </p>
<h3>[Priorité 2]</h3>
	<p>Un développeur de contenu web devrait respecter ce point de contrôle. Sinon, un ou plusieurs groupes vont éprouver des difficultées pour accéder à l'information contenue dans le document. Respecter ce point de contrôle supprimera des barrières importantes à l'accessibilité des documents web.</p>
<h3>[Priorité 3]</h3>
	<p>Un développeur de contenu web peut répondre à ce point de contrôle. Sinon, un ou plusieurs groupes vont éprouver dans une certaine mesure des difficultées pour accéder à l'information contenue dans le document. Respecter ce point de contrôle améliorera l'accessibilité des documents web.</p>

<p>Certains points de contrôle spécifient un niveau de priorité qui peut changer dans certaines conditions (indiquées). </p>

<h2><a href="#tdmdir1" name="dir1" id="dir1">Directive 1.</a> Fournir des alternatives équivalentes au contenu visuel et auditif.</h2>
<ul>
	<li>1.1 Fournir un équivalent textuel à chaque élément non-textuel (par exemple via " alt ", " longdesc ", ou dans le contenu des éléments)</li>
	<li>1.2 Fournir des liens textes redondants pour chaque région active d'une carte cliquable côté serveur.. [Priorité 1] </li>
	<li>1.3 Fournir une description auditive des informations importantes de la piste visuelle d'une présentation multimédia Jusqu'à ce que les agents utilisateurs soient en mesure de lire automatiquement à haute voix l'équivalent textuel d'une piste visuelle. [Priorité 1]</li>
	<li>1.4 Pour toute présentation multimédia temporisée (par exemple un film ou une animation), synchroniser les alternatives équivalentes (par exemples les sous-titres ou la description auditive des pistes visuelles) avec la présentation. [Priorité 1]</li>
	<li>1.5 Jusqu'à ce que les agents utilisateurs soient en mesure de restituer les équivalents textuels des liens des cartes cliquables côté client, fournir des liens textuels redondants pour chaque région active d'une carte cliquable côté client. [Priorité 3]</li>
</ul>
<h2><a href="#tdmdir2" name="dir2" id="dir2">Directive 2.</a> Ne pas s'en remettre exclusivement aux couleurs.</h2>
<ul>
	<li>2.1 S'assurer que toute information convoyée par des couleurs est également accessible sans couleur, par exemple à partir du contexte ou de balises. [Priorité 1] </li>
	<li>2.2 S'assurer que la combinaison de couleurs entre le premier plan et l'arrière-plan utilise suffisamment de contraste lorsqu'elle est utilisée par des personnes souffrant d'un déficit de perception des couleurs ou sur un écran noir et blanc. [Priorité 2 pour les images, Priorité 3 pour le texte].</li>
</ul>
<h2><a href="#tdmdir3" name="dir3" id="dir3">Directive 3.</a> Utiliser le balisage HTML et les feuilles de style CSS de façon appropriée.</h2>
<ul>
	<li>3.1 Quand un langage de balisage approprié existe, utiliser des balises plutôt que des images pour convoyer l'information. [Priori 2] </li>
	<li>3.2 Créer des documents qui sont validés par des grammaires formelles publiées. [Priorité 2] </li>
	<li>3.3 Utiliser des feuilles de style pour contrôler la mise en page et la présentation. [Priorité 2] </li>
	<li>3.4 Utiliser des unités relatives plutôt qu'absolues dans les valeurs d'attributs du langage et les valeurs de propriétés des feuilles de style. [Priorité 2] </li>
	<li>3.5 Utiliser les éléments d'en-tête pour convoyer la structure du document, et les utiliser en conformité avec les spécifications. [Priorité 2]</li>
	<li>3.6 Marquer les listes et les éléments de listes correctement [Priorité 2] </li>
	<li>3.7 Baliser les citations. Ne pas utiliser le balisage correspondant aux citations pour obtenir des effets de présentation comme l'indentation. [Priorité 2]</li>
</ul>
<h2><a href="#tdmdir4" name="dir4" id="dir4">Directive 4.</a> Clarifier l'utilisation du langage naturel.</h2>
<ul>
	<li>4.1 Identifier clairement les changements survenus dans le langage naturel du texte d'un document et équivalents (par exemple les légendes). [Priorité 1] </li>
	<li>4.2 Spécifier la forme complète de toutes les abbréviations ou acronymes employés dans le document lors de la première utilisation. [Priorité 3] </li>
	<li>4.3 Identifier le langage naturel principal du document. [Priorité 3] </li>
</ul>
<h2><a href="#tdmdir5" name="dir5" id="dir5">Directive 5.</a> Créer des tableaux qui se transforment de façon élégante.</h2>
<ul>
	<li>5.1 Pour les tableaux de données, identifier les en-têtes de lignes et de colonnes. [Priorité 1] </li>
	<li>5.2 Pour les tableaux de données qui ont deux niveaux logiques d'en-tête de colonne ou de ligne ou plus , utiliser des balises pour associer les cellules de données et les cellules d'en-tête. [Priorité 1] </li>
	<li>5.3 Ne pas utiliser les tables pour la mise en page, à moins qu'elles n'aient un sens lorsqu'elles sont déchiffrées en mode linéaire. Autrement, si la table n'a pas de signification, prévoir une version alternative (qui pourra être une version linéaire). [Priorité 2] </li>
	<li>5.4 Dans le cas ou une table est employée pour la mise en page, il ne faut pas utiliser de balises structurelles dans un but de formatage visuel. [Priorité 2] </li>
	<li>5.5 Créer des sommaires pour les tableaux. [Priorité 3] </li>
	<li>5.6 Prévoir des abbréviations pour les étiquettes d'en-têtes. [Priorité 3] </li>
</ul>
<h2><a href="#tdmdir6" name="dir6" id="dir6">Directive 6.</a> S'assurer que les pages qui contiennent de nouvelles technologies se transforment de façon élégante.</h2>
<ul>
	<li>6.1 Organiser les documents de manière à ce qu'ils puissent être lus sans feuilles de style. Par exemple, lorsque un document HTML est restitué sans la feuille de style lui étant associée, il doit rester lisible.[Priorité 1] </li>
	<li>6.2 S'assurer que les équivalences pour le contenu dynamique soient mises à jour lorsque ledit contenu dynamique change. [Priorité 1] </li>
	<li>6.3 S'assurer que les pages soient visibles lorsque les scripts, les applets ou autres artefacts programmables sont désactivés ou non supportés. Lorsque ce n'est pas possible, fournissez une information équivalente sur une page alternative. [Priorité 1] </li>
	<li>6.4 Pour les scripts et les applets, faites en sorte que les gestionnaires d'événements soient indépendants du dispositif d'entrée. [Priorité 2] </li>
	<li>6.5 S'assurer que le contenu dynamique reste accessible, ou fournir une présentation alternative de la page. [Priorité 2] </li>
</ul>
<h2><a href="#tdmdir7" name="dir7" id="dir7">Directive 7.</a> Assurer à l'utilisateur le contrôle des changements du contenu lorsque ce dernier varie dans le temps.</h2>
<p>Certaines personnes souffrant d'incapacités mentales ou visuelles ne peuvent pas lire un texte lorsqu'il bouge. Les mouvements peuvent causer une telle distraction que le reste d'une page peut devenir illisible pour des gens souffrant de handicap cognitif. Les dispositifs vocaux de lecture d'écran ne peuvent lire un texte en mouvement. Certaines personnes souffrant de handicap physique pourraient ne pas être en mesure de bouger suffisemment vite ou précisément pour interagir avec des objets en mouvement.</p>
<ul>
	<li>7.1 Jusqu'à ce que les agents-utilisateurs permettent à l'utilisateur de contrôler les changements brusques de luminosité, il convient d'éviter de causer de tels changements sur l'écran [Priorité 1] </li>
	<li>7.2 Jusqu'à ce que les agents-utilisateurs permettent de désactiver le clignotement, éviter de faire clignoter le contenu (par ex. Changer une présentation à intervalles régulier, comme une activation ou une désactivation). [Priorité 2] </li>
	<li>7.3 Jusqu'à ce les agents-utilisateurs permettent de geler le contenu mobile, éviter les mouvements sur les pages. [Priorité 2] </li>
	<li>7.4 Jusqu'à ce que les agents-utilisateurs permettent de stoper les mises à jour, éviter de créer des pages se mettant à jour automatiquement. [Priorité 2] </li>
	<li>7.5 Jusqu'à ce que les agents-utilisateurs permettent de désactiver la fonction de redirection automatique, ne pas utiliser de commandes pour rediriger automatiquement les pages. Configurez plutôt le serveur pour accomplir cette fonction. [Priorité 2] </li>
</ul>
<h2><a href="#tdmdir8" name="dir8" id="dir8">Directive 8.</a> Assurer un accès direct aux interfaces utilisateur intégrées.</h2>
<ul>
	<li>8.1 Concevoir les éléments programmables tels que scripts et appliquettes de manière à ce qu'ils puissent être directement accessibles ou compatibles avec les différentes technologies d'assistance aux utilisateurs. [Priorité 1 si la fonctionnalité est importante et non présente ailleurs, sinon Priorité 2.] </li>
</ul>
<h2><a href="#tdmdir9" name="dir9" id="dir9">Directive 9.</a> Concevoir en respectant l'indépendance par rapport au périphérique.</h2>
<ul>
	<li>9.1 Prévoir des cartes cliquables côté client au lieu de cartes côté serveur, sauf lorsque les régions ne peuvent être définies par des formes géométriques disponibles. [Priorité 1] </li>
	<li>9.2 S'assurer que tout élément qui possède sa propre interface peut être activé d'une manière indépendante du dispositif. [Priorité 2] </li>
	<li>9.3 En ce qui concerne les scripts, il importe de spécifier les gestionnaires d'événements logiques plutôt que des gestionnaires d'événements dépendants de l'interface. [Priorité 2] </li>
	<li>9.4 Développer un ordre logique de tabulation, pour les liens, éléments de formulaires et objets. [Priorité 3] </li>
	<li>9.5 Prévoir des raccourcis clavier pour les liens importants (y compris ceux derrière les cartes cliquables côté client), les champs de formulaires, groupés ou individuels. [Priorité 3] </li>
</ul>
<h2><a href="#tdmdir10" name="dir10" id="dir10">Directive 10.</a> Utiliser des solutions intermédiaires en attendant que les agents utilisateurs aient un meilleur support de l'accessibilité.</h2>
<ul>
	<li>10.1 Jusqu'à ce que le agents-utilisateurs permettent aux utilisateurs de fermer les fenêtres générées, ne pas produire de fenêtre successives ou à ouverture automatique, et ne pas modifier la fenêtre active sans prévenir l'utilisateur. [Priorité 2] </li>
	<li>10.2 Jusqu'à ce que le agents-utilisateurs supportent les associations explicites entre étiquettes et contrôles de formulaires, s'assurer que les étiquettes sont correctement positionnées pour tous les contrôles de formulaire avec étiquettes implicitement associées. [Priorité 2] </li>
	<li>10.3 Jusqu'à ce que les agents utilisateurs (comprenant les technologies d'assistance) puissent restituer des textes adjacents correctement, prévoir une alternative en mode texte linéaire (sur la page concernée ou sur une autre) pour toutes les tables qui formattent le texte en colonnes parallèles et qui ajustent le texte sur la largeur de la colonne. [Priorité 3] </li>
	<li>10.4 Jusqu'à ce que les agents-utilisateurs puissent gérer correctement les contrôles vides, placer du texte pour occuper l'espace dans les champs vides des formulaires [boîtes de textes et lignes d'entrée de texte]. [Priorité 3] </li>
	<li>10.5 Jusqu'à ce que les agents utilisateurs (comprenant les technologies d'assistance) puissent gérer correctement les liens hypertextes adjacents, insérer entre ces liens des caractères imprimables non-hypertextes.[Priorité 3] </li>
</ul>
<h2><a href="#tdmdir11" name="dir11" id="dir11">Directive 11.</a> Utiliser les technologies et directives du W3C.</h2>
<p>Les directives actuelles recommandent l'utilisation des technologies du W3C (Par ex. HTML, CSS, etc.) pour plusieurs raisons :
<ul>
<li>Les technologies du W3C comprennent des options d'accessibilité "embarquées".</li>
<li>Les spécifications du W3C subissent des révisions précoces, de manière à intégrer les solutions d'accès dès la phase de conception.</li>
<li>Les spécifications du W3C sont élaborées de manière ouverte et découlent d'un consensus de l'industrie.</li>
</ul>
<p>Plusieurs standards non-W3C (par ex. PDF, Shockwave, etc.) reposent sur l'utilisation de plug-ins ou de logiciels séparés pour la visualisation. Souvent, on ne peut consulter ou regrader le contenu à ces formats avec les agents-utilisateurs courants (y compris les technologies d'assistance). En évitant d'utiliser des technologies non-W3C ou non-standard (éléments, attributs, propriétés et extension propriétaires) on pourra produire des pages plus accessibles, et accessibles à plus de gens utilisant une plus grande variété de matériel et de logiciels. Lorsque l'on doit utiliser des technologies non-accessibles (propriétaires ou non), on devra prévoir des pages accessibles équivalentes.</p>

<p>Même lorsqu'on utilise des technologies du W3C, on doit respecter les directives d'accessibilité. Lorsque on utilise des technologies récentes, on s'assurera qu'elles se transforment de façon élégante. (Voir également la directive 6.)</p>

<p>Note. Convertir des documents (à partir de PDF, PostScript, RTF, etc.) en un langage de balisage du W3C (HTML, XML) ne permet pas toujours de créer un document accessible. Ainsi, validez chaque page pour vérifier l'accessibilité et l'utilisabilité après la conversion (voir la section sur la validation). Si une page n'est pas valide directement, modifiez la page jusqu'à ce que la représentation originale soit convertie correctement ou fournissez une version HTML ou texte seul.</p>
<ul>
	<li>11.1 Utiliser les technologies du W3C lorsque elles sont disponibles et adaptée à une tache. Utilisez les dernières versions supportées. [Priorité 2] </li>
	<li>11.2 Eviter d'utiliser les options des technologies du W3C qui ne sont plus supportées. [Priorité 2] </li>
	<li>11.3 Fournir des informations de manière à ce que les utilisateurs puissent recevoir les documents selont les préférences qu'ils ont spécifiées. (par ex. la langue, le type de contenu, etc.) [Priorité 3] </li>
	<li>11.4 Si, malgré vos efforts vous ne parvenez pas à produire une page accessible, créez un lien vers une autre page accessible, qui utilise les technologies du W3C, et qui présente une information (ou fonctionnalité) équivalente, et est mise à jour aussi régulièrement que la page (originale) innacessible. [Priorité 1] </li>
</ul>
<h2><a href="#tdmdir12" name="dir12" id="dir12">Directive 12.</a> Fournir des informations de contexte et d'orientation.</h2>
<ul>
	<li>12.1 Donner un titre à chaque cadre pour faciliter l'identification et la navigation entre cadres. [Priorité 1] </li>
	<li>12.2 Décrire l'objectif des cadres et la manière dont les cadres interagissent les uns avec les autres, si ce n'est pas évident à la la seule lecture des titres. [Priorité 2] </li>
	<li>12.3 Lorsque c'est approprié, diviser les grands blocs d'information en groupes plus petits et plus facilement manipulables. [Priorité 2] </li>
	<li>12.4 Associer les étiquettes avec leurs éléments de contrôle de manière explicite. [Priorité 2] </li>
</ul>
<h2><a href="#tdmdir13" name="dir13" id="dir13">Directive 13.</a> Fournir des mécanismes de navigation clairs.</h2>
<p>Des mécanismes de navigation clairs et cohérents sont primordiaux pour les personnes souffrant de difficultés de compréhension ou de vision</p>
<p>Un mécanisme de navigation est n'importe quel moyen par lequel un utilisateur peut naviguer à l'intérieur d'une page ou d'un site. Quelques mécanismes caractéristiques :
<dl>
<dt>Barres de navigation</dt>
<dd>Une barre de navigation rassemble les liens vers les parties les plus importantes d'un document ou d'un site. </dd>
<dt>Cartes de site</dt>
<dd>Une carte d'un site fournit une vue générale de l'organisation d'une page ou d'un site. </dd>
<dt>Table des matières</dt>
<dd>Une table des matières liste généralement les parties les plus importantes d'un document ou d'un site et fournit des liens y conduisant </dd>
</dl>
</p>
<ul>
	<li>13.1 Identifier clairement la cible de chaque lien. [Priorité 2] </li>
	<li>13.2 Prévoyez des meta-données pour ajouter des informations d'ordre sémantique aux pages et aux sites [Priorité 2] </li>
	<li>13.3 Fournir des informations concernant la mise en page générale d'un site. (par ex. la carte d'un site, ou une table présentant le contenu). [Priorité 2] </li>
	<li>13.4 Utiliser les mécanismes de navigation de manière cohérente. [Priorité 2] </li>
	<li>13.5 Prévoir des barres de navigation pour mettre en avant et donner accès aux mécanismes de navigation. [Priorité 3] </li>
	<li>13.6 Regrouper les liens de même nature, identifier le groupe (pour les agents-utilisateurs), et jusqu'à ce que les agents utilisateurs le permettent, donner un moyen de s'affranchir du groupe. [Priorité 3] </li>
	<li>13.7 Si l'on prévoit des fonctions de recherche, il convient de rendre possibles plusieurs types de recherches, correspondant à différents niveaux de compétances et à différents choix. [Priorité 3] </li>
	<li>13.8 Placer des informations distinctives au début des en-têtes, des paragraphes, des listes etc. [Priorité 3] </li>
	<li>13.9 Fournir des informations sur les regroupements de documents (par ex. les documents qui comprennent plusieurs pages, etc.). [Priorité 3] </li>
	<li>13.10 Prévoir des moyens pour s'affranchir de l'art ASCII prenant plusieurs lignes. [Priorité 3] </li>
</ul>
<h2><a href="#tdmdir14" name="dir14" id="dir14">Directive 14.</a> S'assurer que les pages sont claires et simples.</h2>
<p>Une mise en page cohérente, des graphismes identifiables et un langage facile à comprendre pourront bénéficier à tous les utilisateurs. En particulier, ils aideront les personnes souffrant de difficulté de compréhension, ou qui ont des problèmes de lecture. (Cependant assurez vous que les images ont des équivalents textuels pour les non-voyants, les mal voyants, ou pour les utilisateurs qui ne peuvent pas ou ont choisi de ne pas voir les images. Voir également la directive 1.)</p>

<p>Une communication efficace passe par l'utilisation d'un langage clair et simple. L'accès à l'information écrite peut être difficile pour les personnes souffrant de problèmes de compréhension ou d'apprentissage. Les personnes dont la langue maternelle diffère de la votre, ou ceux qui utilisent le langage des signes tireront avantage d'une langue claire et simple. </p>
<ul>
	<li>14.1 Utiliser le langage le plus clair et le plus simple possible adapté au contenu de votre site. [Priorité 1] </li>
	<li>14.2 Associer du contenu visuel ou audio au texte, lorsque cela peut faciliter la compréhension d'une page. [Priorité 3] </li>
	<li>14.3 Créer un style de présentation cohérent pour toutes les pages. [Priorité 3] </li>
</ul>


<h2>Le cadre réglementaire en France : le RGAA.</h2>
<p>Le 7 octobre 1999, la circulaire du Premier ministre relative aux sites Internet des services et des établissements publics de l'État, déclare que :</p> 
<blockquote>Les responsables des sites [publics] veilleront tout particulièrement à favoriser l'accessibilité de l'information à tous les internautes, notamment les personnes handicapées, non voyantes, malvoyantes ou malentendantes.</blockquote>

<p>En décembre 2003, Julien PERBEN du Secrétariat d'État aux personnes handicapées, écrit un rapport d'étude sur l'accessibilité de l'Internet-Intranet aux personnes handicapées. 
Cette étude est menée dans le cadre du plan national de diffusion des nouvelles technologies auprès des personnes handicapées. <br />
Il recommande notamment la création d'un d'un « centre ressources pour le conseil et la formation », d'un « cadre général clair pour une meilleure prise en compte des critères d'accessibilité des sites », 
et enfin d'un « organisme officiel de certification, totalement habilité à effectuer ce type de travail par son indépendance ».</p>

<p>En 2004 s'ouvre une première phase d'incitation à l'accessibilité des sites des services de l'État, des collectivités territoriales et des établissements publics : 
l'agence pour le Développement de l'administration électronique (ADAE) adopte un « Référentiel accessibilité des services Internet de l'administration ». 
Celui-ci est issu des travaux du centre de ressources et de recherche <a rel="nofollow" class="external" target="_blank" href="http://www.accessiweb.org/index.php/accessiweb_2.2_liste_generale.html"><strong>Accessiweb</strong></a> créé par l'association <strong>BrailleNet</strong> (<a rel="nofollow" class="external" target="_blank" href="http://www.braillenet.org">www.braillenet.org</a>) sur la base de la norme internationale WCAG1.0, complétés par des préconisations ergonomiques. 
Il n'a pas de caractère obligatoire.</p>

<p>En 2005, l'obligation d'accessibilité du Web public est légalement créée par <a rel="nofollow" class="external" target="_blank" href="http://www.legifrance.gouv.fr/affichTexteArticle.do?idArticle=JORFARTI000001290363&cidTexte=JORFTEXT000000809647">l'article 47 de la loi n° 2005-102 du 11 février</a> pour « l'égalité des droits et des chances, la participation et la citoyenneté des personnes handicapées », 
qui énonce :</p>
<blockquote>Les services de communication publique en ligne des services de l'État, des collectivités territoriales et des établissements publics qui en dépendent doivent être accessibles aux personnes handicapées.</blockquote>

<p>La direction générale de la modernisation de l'État (DGME) devient le moteur du projet pour la création du référentiel général d'accessibilité pour les administrations (RGAA), publié dans sa version finale en octobre 2009. 
Complément du référentiel général d'interopérabilité, le RGAA est une traduction en français de la norme WCAG2.0, complétée par un guide d'accompagnement. 
Celui-ci présente une méthode de déploiement par critère de succès WCAG et un référentiel de tests d'évaluation de l'accessibilité des contenus web. 
Le RGAA ne prend en revanche pas en compte l'impact des outils de production automatisée du Web, tel que le prévoit ATAG 2.0.</p>
<p>La loi n°2005-102 du 11 février 2005, son <a title="Légifrance - Décret d'application n°2009-546 du 14 mai 2009 de la loi du 11 février 2005." rel="nofollow" class="external" href="http://www.legifrance.gouv.fr/affichTexteArticle.do;jsessionid=AE6EEED18B5585AA6ACF00E1D6EB66F5.tpdjo06v_1?idArticle=LEGIARTI000020626629&amp;cidTexte=LEGITEXT000020626623&amp;dateTexte=20091028" target="_blank"> décret d'application n°2009-546 du 14 mai 2009</a> et l'arrêté au journal officiel publié le 29 octobre 2009, obligent les administrations françaises à se référer au Référentiel Général d'Accessibilité des Administrations ( RGAA, version V2.2 en date du 23/10/09) pour attester de la conformité de leurs services en ligne aux WCAG 2.0, selon les niveaux A et AA.</p>


<h2>Priorité<s class=""></s></h2>

<p>Chaque <a rel="nofollow" class="external" target="_blank" rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/full-checklist.html"><strong>point de contrôle</strong></a> a un niveau de priorité assigné par le groupe de travail basé sur son impact sur l'accessibilité. 

</p><dl>
<dt><a name="wc-priority-1">[Priorité&nbsp;1] </a></dt>

<dd>Un développeur de contenu web <strong>doit</strong> respecter ce point de contrôle.
Sinon, un ou plusieurs groupes se trouveront dans l'impossibilité d'accéder à l'information contenue dans le document.
Respecter ce point de contrôle est une condition de base pour permettre à certains groupes d'utiliser des documents Web.


</dd><dt><a name="wc-priority-2">[Priorité&nbsp;2]</a></dt>

<dd>Un développeur de contenu web <strong>devrait</strong> respecter ce point de contrôle.
Sinon, un ou plusieurs groupes vont éprouver des difficultées pour accéder à l'information contenue dans le document.
Respecter ce point de contrôle supprimera des barrières importantes à l'accessibilité des documents web.</dd>

<dt><a name="wc-priority-3">[Priorité&nbsp;3]</a></dt>

<dd>Un développeur de contenu web <strong>peut</strong> 
répondre à ce point de contrôle.
Sinon, un ou plusieurs groupes vont éprouver dans une certaine mesure des difficultées pour accéder à l'information contenue dans le document.
Respecter ce point de contrôle améliorera l'accessibilité des documents web.</dd>

</dl>

<p>Certains points de contrôle spécifient un niveau de priorité qui peut changer dans certaines conditions (indiquées).

</p><h2>Points de contrôle de priorité 1.</h2>

<table summary="Tableau des points de contrôle de priorité 1, organisé par catégories et trié par points de contrôle." border="1">
<tbody>
	<tr class="checkhead">
	<th>En général (Priorité 1)</th>
	<th class="w50p">Oui</th>
	<th class="w50p">Non</th>
	<th class="w50p">N/A</th>
	</tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-text-equivalent">1.1</a>&nbsp;Fournissez un texte équivalent pour chaque élément non textuel (i.e., via "alt", "longdesc", ou dans le contenu de l'élément). <em>Ceci inclut</em>&nbsp;: des images, des représentations graphiques de textes (incluant des symboles), des régions d'hyperimages, des animations (i.e., des GIFs animés), des applets et des objets, de l'art <abbr title="American Standard Code for Information Interchange">ascii</abbr>, des frames, des scripts, des images utilisées comme des puces, des séparateurs, des boutons graphiques, des sons (joués avec ou sans l'interaction de l'utilisateur), des fichiers audios autonomes, des pistes audios de vidéos, et des vidéos.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-color-convey">2.1</a>&nbsp;Assurez-vous que toute l'information transportée par la couleur est également disponible sans, par exemple par le contexte ou des balises.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-identify-changes">4.1</a>&nbsp;Identifiez clairement les changements de langue du texte d'un document et de tous les équivalents textuels (i.e., les légendes).
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-order-style-sheets">6.1</a>&nbsp;Organizez les documents de façon à ce qu'il puissent être lus sans feuille de style. Par example, quand un document HTML est affiché sans feuille de style associée, il doit être encore possible de le lire. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-dynamic-source">6.2</a>&nbsp;Assurez-vous que les équivalents pour le contenu dynamique sont mis à jour quand ce contenu change. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-flicker">7.1</a>&nbsp;Tant que les agents utilisateurs (navigateurs) n'autorisent pas les utilisateurs à contrôler le scintillement, évitez de faire scintiller l'écran (clignotements, animations). 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-simple-and-straightforward">14.1</a>&nbsp;Employez le langage le plus clair et le plus simple, de la manière la plus appropriée au contenu d'un site.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des images et des hyperimages (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-redundant-server-links">1.2</a>&nbsp;Fournissez du texte redondant pour chaque région active côté serveur d'une hyperimage .
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-client-side-maps">9.1</a>&nbsp;Fournissez des images avec régions actives côté client plutôt que côté serveur sauf si ces zones ne peuvent pas être définies avec une forme géométrique disponible.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des tableaux (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-table-headers">5.1</a>&nbsp;Pour des tableaux de données, identifiez les entêtes des lignes et des colonnes.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-table-structure">5.2</a>&nbsp;Pour des tableaux de données qui ont deux ou plusieurs niveaux logiques d'entêtes de lignes et de colonnes, utilisez des balises pour associer les cellules de données avec les cellules d'entêtes. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des frames (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-frame-titles">12.1</a>&nbsp;Donnez un titre à chaque frame pour faciliter leur identification ainsi que la navigation. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des applets et des scripts (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-scripts">6.3</a>&nbsp;Assurez-vous que les pages sont utilisables quand les scripts, applets, ou tout autre objets programmés sont désactivés ou non supportés. Si ce n'est pas possible, fournissez une information équivalente sur une page alternative et accessible.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des documents multimédia (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-auditory-descriptions">1.3</a>&nbsp;Tant que les agents utilisateurs ne peuvent pas lire à voix haute le texte équivalent d'une piste visuelle, fournissez une desciption auditive des informations importantes de la piste visuelle d'une présentation multimédia.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-synchronize-equivalents">1.4</a>&nbsp;Pour n'importe quelle présentation multimédia basée sur le temps (i.e., un film ou une animation), synchronisez les alternatives équivalentes (i.e., sous-titres ou descriptions auditives d'une piste visuelle) avec la présentation.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si tout ça échoue (Priorité 1)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-alt-pages">11.4</a>&nbsp;Si, après vos plus grands efforts, vous ne pouvez pas créer une page accessible, fournissez un lien vers une page alternative qui utilise les technologies du W3C, qui est accessible, a une information équivalente (ou une fonctionnalité), et qui est mise à jour aussi souvent que la page inaccessible (originale). 

		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
</tbody>
</table>

<h2>Points de contrôle de priorité 2.</h2>

<table summary="Tableau des points de contrôle de priorité 2, organizée par catégories et triée par points de contrôle." border="1">
<tbody>
	<tr class="checkhead">
	<th>En général (Priorité 2)</th>
	<th class="w50p">Oui</th>
	<th class="w50p">Non</th>
	<th class="w50p">N/A</th>
	</tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-color-contrast">2.2</a>&nbsp;Assurez-vous que la combinaison des couleurs d'arrière plan et d'avant plan fournit un contraste suffisant lorsqu'elle est vue par quelqu'un ayant une déficience au niveau des couleurs ou lorsqu'elle est vue sur un écran noir et blanc. [Priorité&nbsp;2 pour les images, Priorité&nbsp;3 pour le texte].
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-use-markup">3.1</a>&nbsp;Quand une balise du langage existe, utilisez la balise plutôt que des images pour transmettre de l'information.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-identify-grammar">3.2</a>&nbsp;Créez des documents qui soient validés par la grammaire formelle publiée.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-style-sheets">3.3</a>&nbsp;Utilisez des feuilles de styles pour contrôlez la mise en page et la présentation.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-relative-units">3.4</a>&nbsp;Utilisez des unités relatives plutôt qu'absolues dans les valeurs des attributs du langage de balises et dans les valeurs des propriétés des feuilles de styles.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-logical-headings">3.5</a>&nbsp;Utilisez des entêtes d'éléments pour indiquer la structure d'un document et utilisez-les selon les spécifications. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-list-structure">3.6</a>&nbsp;Balisez correctement les listes et leurs éléments.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-quotes">3.7</a>&nbsp;Balisez les citations. N'utilisez pas les balises de citations pour réaliser des effets de formattage tels que l'indentation.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-fallback-page">6.5</a>&nbsp;Assurez-vous que le contenu dynamic est accessible ou qu'une page ou une présentation alternative soit fournie.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-blinking">7.2</a>&nbsp;Tant que les agents utilisateurs ne permettent pas à l'utilisateur de contrôler le clignotement, éviter de faire clignoter le contenu (i.e., changer la présentation régulièrement, en l'allumant et en l'éteignant).
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-no-periodic-refresh">7.4</a>&nbsp;Tant que les agents utilisateurs ne fournissent pas la possibilité d'arrêter le raffraîchissement, ne créez pas de pages se raffraîchissant toutes seules périodiquement.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-no-auto-forward">7.5</a>&nbsp;Tant que les agents utilisateurs ne fournissent pas la possibilité d'arrêter les auto-redirections, n'utilisez-pas de balises pour rediriger les pages automatiquement. À la place, configurez le serveur pour effectuer les redirections.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-pop-ups">10.1</a>&nbsp;Tant que les agents utilisateurs ne fournissent pas la possibilité d'empêcher l'ouverture de fenêtres, ne provoquez pas l'apparition de pop-ups ou d'autres fenêtres et ne changez pas la fenêtre courante sans en informer l'utilisateur.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-latest-w3c-specs">11.1</a>&nbsp;Utilisez les technologies du W3C quand elles sont disponibles et appropriées pour une tâche, et utilisez les dernières versions dès quelles sont supportées.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-deprecated">11.2</a>&nbsp;Evitez les fonctionnalités dépréciées des technologies du W3C.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-group-information">12.3</a>&nbsp;Divisez les grands blocs d'information en groupes plus maniables quand c'est naturel et approprié.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-meaningful-links">13.1</a>&nbsp;Identifiez clairement la cible de chaque lien.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-use-metadata">13.2</a>&nbsp;Fournissez des métadonnées pour ajouter des informations sémantiques aux pages et aux sites.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-site-description">13.3</a>&nbsp;Fournissez des informations à propos de la structure générale d'un site (e.g., un plan du site ou une table des matières).
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-clear-nav-mechanism">13.4</a>&nbsp;Utilisez les mécanismes de navigation de manière cohérente.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des tableaux (Priorité 2)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
<!-- ypr end of translation -->
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-table-for-layout">5.3</a>&nbsp;N'utilisez pas de tableaux pour la mise en page à moins que le tableau garde un sens une fois linéarisé. Sinon, si le tableau n'est pas compréhensible, fournissez un équivalent alternatif (qui peut être une version linéarisée).
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-table-layout">5.4</a>&nbsp;Si un tableau est utilisé pour la mise en page, n'utilisez aucune balise structurelle pour faire du formatage visuel.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des frames (Priorité 2)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-frame-longdesc">12.2</a>&nbsp;Décrivez l'objectif des frames et comment elles sont reliées les unes aux autres si ce n'est pas clair avec leurs titres seuls.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des formulaires (Priorité 2)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-unassociated-labels">10.2</a>&nbsp;Tant que les agents utilisateurs ne supportent pas explicitement l'association entre les libellés et les contrôles de formulaires, pour tous les contrôles de formulaire avec un libellé implicitement associé, assurez-vous que le libellé est correctement positionné.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-associate-labels">12.4</a>&nbsp;Associés explicitement les libellés avec leurs contrôles.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des applets et des scripts (Priorité 2)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-keyboard-operable-scripts">6.4</a>&nbsp;Pour les scripts et les applets, assurez-vous que les gestionnaires d'évènements sont indépendants du périphérique d'entrée.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-avoid-movement">7.3</a>&nbsp;Tant que les agents utilisateurs ne permettent pas aux utilisateurs de geler un contenu mobile, évitez les mouvements dans les pages.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-directly-accessible">8.1</a>&nbsp;Réalisez des éléments programmés tels les scripts et les applets directement accessibles ou compatibles avec les technologies d'assistance [Priorité&nbsp;1 si la fonctionnalité est importante et non présente ailleurs, sinon Priorité&nbsp;2.]
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-keyboard-operable">9.2</a>&nbsp;Assurez-vous que tout élément qui a sa propre interface peut-être opéré d'une façon indépendante des périphériques. 
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-device-independent-events">9.3</a>&nbsp;Pour les scripts, spécifiez des gestionnaires d'évènements logiques plutôt que des gestionnaires d'évènements indépendants des périphériques.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
</tbody>
</table>

<h2>Points de contrôle de priorité 3.</h2>

<table summary="Tableau des points de contrôle de priorité 3, organizée par catégories et triée par points de contrôle." border="1">
<tbody>
	<tr class="checkhead">
	<th>En général (Priorité 3)</th>
	<th class="w50p">Oui</th>
	<th class="w50p">Non</th>
	<th class="w50p">N/A</th>
	</tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-expand-abbr">4.2</a>&nbsp;Indiquez la forme développée de chaque abréviation ou acronyme dans un document lors de sa première occurence.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-identify-lang">4.3</a>&nbsp;Indiquez la langue naturelle principale d'un document.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-tab-order">9.4</a>&nbsp;Créez un ordre de tabulation logique pour circuler entre les liens, contrôles de formulaires, et objets.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-keyboard-shortcuts">9.5</a>&nbsp;Fournissez des raccourcis clavier pour les éléments  importants, liens (en incluant ceux qui se trouvent dans les hyperimages côté client), contrôles de formulaires, et groupes de contrôles de formulaires.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-divide-links">10.5</a>&nbsp;Tant que les agents utilisateurs (incluant les technologies d'assistance) n'afficheront pas les liens adjacents distinctement, incluez des non-liens, des caractères imprimables (entourrés par des espaces) entre deux liens adjacents.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-content-preferences">11.3</a>&nbsp;Fournissez de l'information de manière à ce que les utilisateurs reçoivent les documents d'après leurs préférences (e.g., langue, type de contenu, etc.)
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-nav-bar">13.5</a>&nbsp;Fournissez des barres de navigation pour mettre en évidence et donner accès au mécanisme de navigation.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-group-links">13.6</a>&nbsp;Groupez les liens apparentés, identifiez le groupe (pour les agents utilisateurs), et, tant que les agents utilisateurs ne le font pas, fournissez un moyen de contourner le groupe.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-searches">13.7</a>&nbsp;Si des fonctions de recherche sont fournies, activez différent types de recherches pour différents niveaux et différentes préférences d'utilisateurs.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-front-loading">13.8</a>&nbsp;Placez les informations caractéristiques au début des entêtes, paragraphes, listes, etc.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-bundled-version">13.9</a>&nbsp;Fournissez de l'information à propos des collections de documents (i.e., des documents comprenants de multiples pages).
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-skip-over-ascii">13.10</a>&nbsp;Fournissez un moyen de sauter de l'art ASCII sur plusieurs lignes.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-icons">14.2</a>&nbsp;Complétez le texte avec des graphiques ou des présentations auditives quand cela facilitera la compréhension de la page.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-consistent-style">14.3</a>&nbsp;Créez un style de présentation qui est cohérent à travers les pages.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des images et des hyperimages (Priorité 3)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-redundant-client-links">1.5</a>&nbsp;Tant que les agents utilisateurs n'affichent pas de textes équivalents pour les liens d'hyperimages côté client, fournissez des liens textuels redondants pour chaque région active d'une hyperimage côté client.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des tableaux (Priorité 3)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-table-summaries">5.5</a>&nbsp;Fournissez des résumés pour les tableaux.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-abbreviate-labels">5.6</a>&nbsp;Fournissez des abréviations pour les libellés des entêtes.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-linear-tables">10.3</a>&nbsp;Tant que les agents utilisateurs (incluant les technologies d'assistance) n'afficheront pas correctement les textes côte à côte, fournissez une alternative texte linéaire (sur la page courante ou sur d'autres) pour <em>tous</em> les tableaux qui mettent en page du texte en parallèle, des colonnes qui renvoient du texte à la ligne.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
<tr class="checkhead"><th>Et si vous utilisez des formulaires (Priorité 3)
						</th><th>Oui</th><th>Non</th><th>N/A</th></tr>
	<tr class="checkinfo">
		<td><a rel="nofollow" class="external" target="_blank" href="http://la-grange.net/w3c/wcag1/wai-pageauth.html#tech-place-holders">10.4</a>&nbsp;Tant que les agents utilisateurs ne traitent pas correctement des contrôles vides, incluez des valeurs par défaut, caractères <span lang="en">place-holding</span> dans les boîtes d'édition et les zones de texte.
		</td><td>&nbsp;
		</td><td>&nbsp;
		</td><td>&nbsp;
	</td></tr>
</tbody></table>

