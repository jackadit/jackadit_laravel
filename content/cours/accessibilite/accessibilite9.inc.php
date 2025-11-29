<h1>Accessibilité : Les formulaires.</h1>
	
	<p>Les formulaires apportent de l'interactivité aux sites Web. Pour une personne voyante, la vue globale permet de rapidement comprendre quels sont les types d'informations souhaitées (Nom, Adresse, Numéro de téléphone, etc). La navigation à la souris permet également de passer aisément d'un champ à un autre. Mais qu'en est-il en terme d'accessibilité ? C'est ce que nous allons voir dans ce chapitre.</p>
	<p class="h2-like">Postulats pour un formulaire accessible.</p>
	<ul>
		<li>Chaque champ du formulaire doit être défini précisément.</li>
		<li>Le formulaire doit être complètement accessible via le clavier.</li>
	</ul>
	
	<h2>Éléments d'un formulaire.</h2>

    <h3>La balise &lt;label&gt;.</h3>

	<p>Le texte affecté à un élément de formulaire placé entre les balises &lt;label&gt; et &lt;/label&gt; est des nos jours bien interprété par les lecteur d'écran.</p>
	<p>Grâce à l'attribut for="" de cette balise, on relie directement l'étiquette à l'élément du formulaire. Les lecteurs d'écran la reprennent lors de la lecture du champ du formulaire associé par l'intermédiaire d'un identifiant de type id portant le même nom.</p>

    <h3>Le champ de saisie.</h3>
	
	<pre class="notice code">&lt;label for="identifiant"&gt;Login&lt;/label&gt; : &lt;input id="identifiant" type="text" name="username"&gt;</pre>

	<p>Résultat :</p>

	<div class="notice info">
	<label for="identifiant">Login</label> : <input id="identifiant" type="text" name="texte">
	</div>

	<p>Le focus est donné à la ligne de texte en cliquant sur "Login" ou en sélectionnant la ligne de texte.</p>

    <h3>La zone de texte.</h3>

	<pre class="notice code">&lt;label for="comment"&gt;Commentaire&lt;/label&gt;  : &lt;textarea id="comment" type="text" name="texte"&gt;&nbsp;&lt;/textarea&gt;</pre>

	<div class="notice info">
	<label for="comment">commentaire</label> :<br />
	 <textarea rows="2" cols="20" id="comment" type="text" name="texte"> </textarea>
	</div>

 <p>Là aussi le focus est donné à la zone de texte en cliquant sur "Commentaire" ou en sélectionnat la zone de texte.

    <h3>Les boutons radio.</h3>

	<pre class="notice code">Sexe :
	&lt;input id="masculin" type="radio" name="genre"&gt;
	&lt;label for="masculin"&gt;Masculin&lt;/label&gt;
	&lt;input id="feminin" type="radio" name="genre"&gt;
	&lt;label for="feminin"&gt;Féminin&lt;/label&gt;
	</pre>
	
	<div class="notice info">
		Sexe :
		<input id="masculin" type="radio" name="genre"><label for="masculin"> Masculin</label>
		<input id="feminin" type="radio" name="genre"><label for="feminin"> Féminin</label>
	</div>


	<h4>Les attributs "title" et "placeholder".</h4>

	<p>La restitution visuelle de cet attribut dépend du navigateur. En général cela se présente sous la forme d'une info-bulle.</p>
		
	<pre class="notice code">&lt;label for="identifiant"&gt;Login&lt;/label&gt; : &lt;input id="identifiant" type="text" name="username" title="Saisir votre identifiant ici"&gt;
		</pre>
	
	<div class="notice info">
		<label for="identifiant">Login</label> : <input id="identifiant" type="text" name="texte" title="Saisir votre identifiant ici">
	</div>
	<p>Cette façon de faire est remplacée avantageusement par l'attribut "placeholder" plus adapté.</p>
	
	<pre class="notice code">&lt;label for="identifiant"&gt;Login&lt;/label&gt; : &lt;input id="identifiant" type="text" name="username" placeholder="Saisir votre identifiant ici"&gt;</pre>
	
	<div class="notice info">
	<label for="identifiant">Login</label> : <input id="identifiant" type="text" name="texte" placeholder="Saisir votre identifiant ici">
	</div>
	
	
    <h3>Les cases à cocher.</h3>

    <h3>Les balises &lt; fieldset &gt; et &lt; legend &gt;.</h3>
	
	<p>Lorsque les formulaires sont plus complexes, il est pratique de faire appel aux balises &lt;fieldset&gt; et &lt;legend&gt; pour regrouper certains éléments afin d'améliorer la lisibilité.</p>

	<pre class="notice code">&lt;fieldset&gt;
	&lt;legend&gt;Préférence de paiement&lt;/legend&gt;
	&lt;label for=paiement1"&gt; Carte bleue&lt;/label&gt;
	&lt;input type="radio" name="typePaiement" id="paiement1"/&gt;
	&lt;label for=paiement2&gt; Chèque&lt;/label&gt;
	&lt;input type="radio" name="typePaiement" id="paiement2"/&gt;
	&lt;label for=paiement3&gt; Virement&lt;/label&gt;
	&lt;input type="radio" name="typePaiement" id="paiement3"/&gt;
	&lt;/fieldset&gt;
	</pre>
	
	<div class="notice info">
	<fieldset class="w350p"><legend>Préférence de paiement</legend>
	<input type="radio" name="typePaiement" id="paiement1"/><label for="paiement1"> Carte bleue</label>
	<input type="radio" name="typePaiement" id="paiement2"/><label for="paiement2"> Chèque</label>
	<input type="radio" name="typePaiement" id="paiement3"/><label for="paiement3"> Virement</label>
	</fieldset>
	</div>


	<h2>Tabindex.</h2>
	
	<p>Pour améliorer l'accessibilité de la navigation au clavier sur des formulaire complexes, on fait appel à l'attribut "tabindex". Celui-ci permet de redéfinir l'ordre de passage des champs du formulaire lorsque l'on appuie sur la touche tabulation.</p>


	<h2>Plus loin...</h2>
	<p>Coder le formulaire ci-dessous :</p>
	
	<p class="center"><img src="/assets/img/accessibilite/formulaire.png" alt="Formulaire à coder pour le rendre accessible." /></p>

	<!-- Cacher le résultat
	<form method="post" action="">
	<fieldset>
	<legend>Données personnelles</legend>
	<label for="nom">Nom</label> <input id="nom" type="text" name="nom">
	<label for="prenom">Prénom</label> <input id="prenom" type="text" name="prenom">
	<label for="mel">Email</label> <input id="mel" type="text" name="mel">
	</fieldset>
	<fieldset>
	<legend>Format de la lettre d'information</legend>
	<label for="html">Html</label> <input id="html" type="radio" name="format" value="html">
	<label for="txt">Texte</label> <input id="txt" type="radio" name="format" value="txt">
	</fieldset>
	<fieldset>
	<legend>Centres d'intérêt</legend>
	<input id="html" type="checkbox" name="checkbox1" value="1"><label for="html">Html</label>
	<input id="css" type="checkbox" name="checkbox2" value="2"><label for="css">Css</label>
	<input id="javascript" type="checkbox" name="checkbox3" value="3"><label for="javascript">Javascript</label>
	<input id="accessibilite" type="checkbox" name="checkbox4" value="4"><label for="accessibilite">Accessibilité</label>
	</fieldset>
	<p><input id="abonnement" type="checkbox" name="checkbox5" value="1"><label for="abonnement">Je désire m'abonner à la lettre d'information</label></p>
	<input type="submit" value="Envoyer" /><input type="reset" value="Annuler" />
	</form> -->



