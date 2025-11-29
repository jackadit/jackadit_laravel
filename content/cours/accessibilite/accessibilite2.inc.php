<h1>Intégration de l'accessibilité dans un projet WEB.</h1>

<h2>Répartition par fonctions du Web.</h2>

<p>L'itinéraire d'un projet Web, passe par différentes étapes. Elles sont traditionnellement reconnues être composées de :</p>
<ol>
	<li>Gestion de projet.</li>
	<li>Analyse.</li>
	<li>Architecture.</li>
	<li>Conception d'interaction.</li>
	<li>Graphisme.</li>
	<li>Prototypage.</li>
	<li>Rédaction.</li>
	<li>Développement.</li>
	<li>Contrôle qualité.</li>
</ol>
<p>Les critères de succès d'accessibilité des WCAG sont regroupés sous des directives et sont répartis sur les neuf étapes.</p>
<p>L'accessibilité ne constitue pas un simple maillon supplémentaire que l'on peut ajouter à la chaîne de production Web. Elle doit plutôt s'intégrer à chacun des maillons de cette chaîne. La seule façon de relever avec succès le défi de l'accessibilité est de répartir la responsabilité et de partager les tâches pour produire un contenu accessible.</p>
	
<h2>Changer les habitudes.</h2>

<p>Intégrer les standards d'accessibilité dans les développements web entraine inexorablement une modification des habitudes. Les méthodes qu'on l'on jugeait suffisantes ou adéquates jusque-là, viennent à être remises en question. La rentabilité d'un site peut même en être affectée.</p>

<p>Si les principes d'accessibilité ne sont pas difficiles à mettre en œuvre, il n'en reste pas moins que les risques de tomber dans certains pièges sont réels.</p>
<p>Ces pièges peuvent entraîner une cascade de conséquences déplorables pour le potentiel d'accessibilité des projets Web.</p>
<p>Pour chaque piège identifié, nous tenterons d'analyser la nature et la cause du problème. Nous présenterons ensuite divers conseils pour rapidement intégrer des mécanismes de prévention qui favoriseront leur évitement.</p>

<h2>Répartition des responsabilités d'accessibilité (WCAG 2.1).</h2>

<p>Les <cite lang="en">Web Content Accessibility Guidelines</cite> (<a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/TR/WCAG21/">WCAG 2.1</a>) ont été mises à jour le 5 juin 2018 et comportent désormais 13 règles (12 pour le WCAG 2.0). 
La version 2.1 ajoute 17 nouveaux critères (pour un total de 78) mais ne modifie aucun critère de la version précédente.
Ce qui signifie qu'un site conforme WCAG 2.1 restera conforme WCAG 2.0.</p>

<p>Les <a rel="nofollow" class="external" target="_blank" href="https://www.w3.org/TR/WCAG21/">WCAG 2.1</a> se composent de 78 critères de succès en relation avec autant de bonnes pratiques qui visent à favoriser l'accessibilité des contenus.</p>
<p>Ces critères de succès ont des impacts sur toutes les étapes d'un projet de site Web.</p>
<p>Les responsabilités d'accessibilité qui en découlent doivent donc être réparties à travers les différents intervenants concernés afin d'assurer le succès de la démarche de mise en accessibilité des contenus.</p>

<p>Pour en savoir plus : <a rel="nofollow" class="external" target="_blank" href="https://www.anysurfer.be/fr/blog/detail/wcag-2-1-resume">Résumé des 17 nouveaux critères</a></p>

<h2>Quelques pièges fréquents.</h2>

<ul>
<li>Considérer l'accessibilité comme une étape de fin de parcours et ignorer le caractère transversal de la pratique d'accessibilité.</li>	
	<p>Le premier piège dans lequel tombent plusieurs gestionnaires et chargés de projet lors de la planification des différentes étapes d'un projet Web consiste à percevoir l'accessibilité comme une étape supplémentaire qui s'ajoute en fin de parcours à la chaîne de production Web.</p>
	<p>Dans cette perspective erronée, l'accessibilité apparaît comme une grille de validation supplémentaire à prévoir au moment de la phase de contrôle de la qualité du projet, tout juste avant la mise en ligne du résultat. La notion de grille de contrôle qui accompagne les standards d'accessibilité n'est certes pas étrangère à cette perception.</p>
	<p>Dans le cas d'une mise en accessibilité en fin de parcours, les experts en accessibilité observent trop souvent que certaines décisions ont miné le potentiel d'accessibilité du projet. À titre d'exemple, mentionnons les situations suivantes&nbsp;:</p>
	<ul>
		<li>des systèmes de navigation sur un site Web qui sont entièrement dépendants de la souris, et donc inutilisables pour quiconque navigue avec le clavier&nbsp;;</li>
		<li>des choix de technologies naturellement incompatibles avec les technologies d'adaptation informatiques ou exploitées de manière incompatibles avec celles-ci&nbsp;;</li>
		<li>des contenus mis en ligne dans des formats téléchargeables plutôt qu'en format HTML et qui s'avèrent impossibles à interpréter par les lecteurs d'écran&nbsp;;</li>
		<li>des textes de remplacement aux contenus non textuels qui n'ont pas été prévus par les développeurs alors que le rédacteur, ou même l'organisation, était disposé à les prévoir et y consacrer les efforts nécessaires&nbsp;;</li>
		<li>des maquettes graphiques aux contrastes de couleurs insuffisants, alors que cette signature visuelle est déjà placardée partout dans la ville et sur le Web.</li>
	</ul>
	<p>En conséquence, on constate souvent qu'il est trop tard pour rectifier les choses, soit parce que les budgets ou les échéanciers ne permettent plus de faire marche arrière, soit parce que les choix technologiques limitent la capacité d'une équipe à produire des contenus accessibles. Or, le simple fait de se poser les bonnes questions au bon moment permet d'éviter les échecs dans la très grande majorité des cas.</p>
	<p>Contrairement aux dimensions « traditionnelles » du Web, tels que le design, l'analyse, l'ergonomie, l'utilisabilité, la rédaction, l'intégration et même la programmation, l'accessibilité ne s'inscrit pas comme une étape distincte et supplémentaire. Elle se répartit dans chacune des étapes d'une chaîne de production Web de manière à prévoir chaque intervention au moment opportun. Il s'agit d'une <strong>intégration transversale</strong>.</p>
	<p>Certains choix faits en début et en milieu de parcours facilitent la mise en place de l'accessibilité ou, au contraire, génèrent des barrières. L'intégration transversale de l'accessibilité permet d'éviter des oublis importants, en particulier lors de choix techniques ou stratégiques ; ces oublis peuvent occasionner des délais et de coûteux efforts supplémentaires pour corriger la situation, lorsque des correctifs sont possibles. Comme on le sait, il est toujours plus avantageux de prévenir que de guérir.</p>
	<p>Tout gestionnaire ou chargé de projet doit reconnaître cette particularité de la transversalité de l'accessibilité. Il comprendra alors la nécessité de déterminer à quelles étapes de la chaîne de production Web doivent être assignées les différentes responsabilités et tâches associées aux exigences décrites dans les standards.</p>

<li>Attribuer la responsabilité de l'accessibilité aux seuls intégrateurs Web.</li>
	<p>La responsabilité d'appliquer les exigences d'accessibilité revient encore trop souvent au seul intégrateur Web. Il est illusoire de croire qu'elle peut reposer sur les seules épaules d'un champion de l'accessibilité.</p>
	<p>S'il est vrai que la très grande majorité des exigences d'accessibilité nécessitent une intervention des intégrateurs Web, plusieurs décisions et orientations doivent être prises dans les premières étapes du projet afin d'assurer un travail efficace. Pour qu'une démarche d'accessibilité s'avère une réussite, il importe que chaque intervenant d'une équipe comprenne les éléments d'accessibilité qui relèvent de sa responsabilité. On évitera ainsi de retourner&nbsp;:</p>
	<ul>
		<li>aux rédacteurs pour demander les équivalents textuels des images&nbsp;;</li>
		<li>aux designers pour qu'ils revoient leur charte graphique afin d'adopter des couleurs aux contrastes suffisants&nbsp;;</li>
		<li>aux programmeurs pour assurer une association explicite entre les libellés et leurs champs correspondants dans un formulaire&nbsp;; ou encore</li>
		<li>au chargé de projet pour remettre en question des choix technologiques qui limitent ou empêchent le respect de certaines exigences.</li>
	</ul>
	<p>Que l'on songe aux analystes, aux ergonomes, aux designers, aux rédacteurs ou aux architectes d'information, chacun est appelé à prendre des décisions ou à faire des actions qui peuvent influer sur le potentiel d'accessibilité du projet. Pour éviter que ces interventions aient des conséquences négatives quant au résultat final, il importe que l'accessibilité devienne une <strong>responsabilité partagée</strong>.</p>

<li>Limiter la validation de l'accessibilité aux seules exigences décrites dans les standards.</li>
	<p>La mise en accessibilité d'un site Web est très souvent perçue comme une vérification à effectuer à partir d'une petite liste d'exigences, comme s'il suffisait de vérifier le respect de chaque exigence pour produire un site Web accessible. Dans les faits, ce n'est pas si simple.</p>
	<p>L'application de toutes les exigences décrites dans les standards permet d'atteindre une conformité à un standard. Toutefois, l'application systématique de ces seules exigences n'est pas un gage suffisant d'accessibilité : il faut aussi prévoir des tests fonctionnels avec des technologies d'adaptation informatiques qui permettent de valider que l'expérience utilisateur est positive. En effet, il est tout à fait possible de produire un site Web satisfaisant à toutes les exigences d'accessibilité, mais qui est tout de même non accessible sur certains aspects. Quelques petites subtilités manquées suffisent à engendrer un degré de confusion important pour l'utilisateur n'étant pas en mesure de percevoir visuellement l'interface.</p>
	<p>Par tests fonctionnels, on entend le recours à des technologies d'adaptation informatiques, telles que synthèses vocales, lecteurs d'écran et progiciels de grossissement, pour vérifier que le résultat interprété par ces outils correspond bien au résultat observé lors d'une validation visuelle des pages Web. À titre d'exemple, une absence de ponctuation dans les textes de remplacement des images ou encore une ponctuation visuelle basée seulement sur la disposition ou l'ordre de lecture de contenus présentés en tableau HTML peuvent produire un résultat très différent de ce que l'on avait imaginé. De même, c'est souvent en relisant une page Web avec un lecteur d'écran que l'on constate que certains renseignements transmis visuellement seront manquants en synthèse vocale ou en braille. La lecture en synthèse vocale peut aussi révéler des confusions dues à la prononciation ou à l'enchaînement de certains contenus (exemple&nbsp;: «&nbsp;standards et normes&nbsp;» et «&nbsp;standards énormes&nbsp;»).</p>
	<p>En ajoutant les tests fonctionnels aux tests techniques, les producteurs de contenus Web s'assurent de ne rien laisser échapper lors des contrôles de qualité liés à l'accessibilité.</p>
	<a rel="nofollow" class="external" target="_blank" href="http://www.la-grange.net/w3c/WAI-WEBCONTENT-TECHS/#abstract">Techniques pour les règles d'accessibilité du contenu Web 1.0</a>

<li>Confondre les notions de conformité au standard d'accessibilité et de mise en accessibilité.</li>
	<p>Pour la plupart des chargés de projet et des développeurs Web, les notions de conformité au standard d'accessibilité et de mise en accessibilité des contenus Web sont interchangeables. Or, ces deux notions ont des significations très différentes, et l'une ne saurait constituer un gage d'assurance pour l'autre.</p>
	<p>La notion de conformité au standard d'accessibilité repose sur le respect efficace, satisfaisant et systématique de toutes les exigences énumérées dans un standard. Dans le domaine de la normalisation, la conformité à un standard signifie que l'application satisfait à toutes les exigences de ce standard. Le résultat est dichotomique : l'application est conforme ou elle ne l'est pas. En normalisation, un énoncé tel que&nbsp;: «&nbsp;Ce site Web est conforme à 60&nbsp;% au standard&nbsp;» n'a pas de sens. Cette notion est donc objective parce qu'elle se limite à l'application des exigences prescrites et mesurables.</p>
	<p>La notion de mise en accessibilité repose quant à elle sur un effort visant à faire tomber un maximum de barrières à l'utilisation des contenus Web pour les personnes ayant des limitations fonctionnelles. Notion subjective, elle suppose la mise en place de plusieurs mesures d'adaptation des contenus pour répondre aux besoins particuliers des utilisateurs. Contrairement à la notion de conformité au standard d'accessibilité, elle suppose des tests fonctionnels pour assurer qu'au-delà du respect des exigences des standards, les efforts déployés ont de réels effets bénéfiques sur l'expérience utilisateur des personnes handicapées qui consultent ces contenus.</p>
	<p>Les résultats de la mise en accessibilité ne se mesurent cependant pas objectivement, car il est impossible de juger à partir de quel moment un site Web est «&nbsp;suffisamment accessible&nbsp;». Ainsi, il revient au développeur Web, en fonction des intentions de l'organisation ou des budgets disponibles, de déterminer le seuil à partir duquel le résultat sera considéré comme satisfaisant.</p>
	<p>Il est donc possible de produire un site Web conforme au standard qui ne réponde pourtant pas tout à fait aux besoins des utilisateurs parce que certains détails auraient échappé aux développeurs. Dans le même esprit, un site Web jugé « suffisamment accessible » aux yeux des mêmes développeurs pourrait ne pas répondre en totalité aux besoins d'une clientèle particulière qui aurait été laissée de côté lors de la démarche. D'où l'importance de combiner les deux notions pour atteindre le résultat le plus large possible.</p>

<li>Présumer que les outils de validation feront tout le travail.</li>
	<p>L'accessibilité ne peut se mesurer seulement par la présence ou l'absence de certains éléments clés qu'un outil d'évaluation pourrait automatiquement déceler. Tout comme l'ergonomie, l'accessibilité fait appel au bon jugement des développeurs et donc aussi à une évaluation humaine compétente.</p>
	<p>Certains gestionnaires et chargés de projet ont tendance à croire que ces outils peuvent faire tout le travail à leur place, mais dans les faits il n'en est rien. Quiconque remet la responsabilité de l'objectif d'accessibilité entre les mains des outils ou des plateformes qu'il utilise est voué à connaître de grandes déceptions le jour où il entreprendra des tests d'évaluation pour mesurer le niveau d'accessibilité réel du projet.</p>
	<p>De l'ensemble des exigences d'accessibilité contenues dans les standards, la vérification d'une minorité seulement peut être automatisable au point où l'intervention humaine deviendrait inutile. On estime généralement autour de 30 % le nombre d'exigences pour lesquelles la vérification peut être complètement automatisée. À titre d'exemple, s'il est aisé de vérifier par programmation la présence d'un attribut alt pour le texte de remplacement d'une image, il est impossible de vérifier automatiquement si la valeur de l'équivalent textuel saisi reprend tout le texte apparaissant dans l'image.</p>

<li>Sous-estimer l'impact des plateformes technologiques.</li>
	<p>En plus des interventions requises pour chaque exigence à répartir dans la chaîne de production Web, il est crucial que certains stratèges dans l'équipe de production Web, en général les responsables des décisions techniques tels les gestionnaires, les chargés de projets ou les analystes, s'interrogent sur le potentiel des outils et des choix technologiques envisagés. En effet, la meilleure des équipes Web, avec les processus les plus rigoureux pour l'accessibilité, ne pourra pas atteindre ses objectifs de conformité si les outils retenus lui rendent la tâche impossible.</p>
	<p>En outre, plusieurs gestionnaires et chargés de projet présument à tort que puisqu'ils font appel à des plateformes technologiques de haut niveau acquises à fort prix, les enjeux d'accessibilité seront forcément pris en charge de manière automatique et satisfaisante.</p>
	<p>Dans la pratique d'accessibilité, nombre d'organisations sont aux prises avec des plateformes technologiques de tout ordre où les exigences les plus élémentaires d'accessibilité se heurtent aux limites techniques des outils en place. Par exemple, des changements en apparence très simples qui requièrent une correction facile au code HTML ou XHTML s'avèrent impossibles à effectuer en pratique parce que les développeurs Web n'ont pas accès au code source de leurs outils. Dans un tel contexte, il n'est pas possible d'espérer atteindre des objectifs de conformité aux standards.</p>
	<p>S'il est vrai que les plateformes technologiques en logiciels libres présentent généralement un meilleur potentiel d'accessibilité en raison de la possibilité de modifier le code généré à même les outils, il ne faudrait pas conclure pour autant que les outils propriétaires ne peuvent assurer le respect des exigences d'accessibilité. Certains outils sont donc plus souples que d'autres. L'important est d'être conscient de cette réalité et de se poser les « bonnes questions » lorsque vient le temps de choisir une plateforme plutôt qu'une autre.</p>
	<p>Voici quelques exemples de questions à se poser&nbsp;:</p>
	<ul>
		<li>Afin de répondre aux préoccupations d'accessibilité de l'organisation, l'outil envisagé permettra-t-il de modifier le code HTML généré&nbsp;?</li>
		<li>L'outil envisagé sera-t-il suffisamment souple pour s'adapter aux pratiques de développement interne de l'organisation&nbsp;?</li>
		<li>L'outil envisagé permet-il déjà de répondre à certaines exigences élémentaires d'accessibilité du Web&nbsp;?</li>
		<li>Le fournisseur de cet outil a-t-il clairement ciblé l'accessibilité comme un élément majeur du développement de sa solution logicielle&nbsp;?</li>
		<li>L'organisation évaluera-t-elle de façon détaillée le potentiel de l'outil quant à l'accessibilité avant de s'engager avec le fournisseur qui le propose&nbsp;?</li>
	</ul>

</ul>