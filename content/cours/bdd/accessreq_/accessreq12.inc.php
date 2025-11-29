<?php
/**
 * solution requête 12
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   01/03/07  22:31:00  
 * 
 * @author Stéphane WAHL 
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category requête
 * @access public
 * @uses
 */
$sNavigation=navigation('access', '12', 'req');
include_once 'tdmsolreq.php';
?>



<h1>ACCESS : Réponses requête 12</h1>
<h2>Affichez le prénom et le nom des personnes embauché en 2003 sans utiliser le critère ENTRE ou &lt;=.</h2>
<p class="notice remarque">Fonction année([Nom du champ de type Date/Heure]).
 Montrer le générateur d'expression</pre>

<p>Il serait facile de trouver la réponse en utilisant le critère &quot;<strong>Entre</strong>&quot;.</p>
<p>Cette requête vous montre ce qui est possible d'accomplir avec les fonctions d'Access et le générateur d'expression.</p>
<p>Pour l'exercice, il faut utiliser la fonction <strong>année()</strong> qui se retrouve dans la catégorie <strong>Date/Heure</strong>. 
Cette fonction renvoie sous forme de nombre l'année du champ du type <strong>Date/Heure</strong> qui s'y trouve.</p>
<p>Un champ de type <strong>Date/Heure</strong> contient beaucoup  d'informations. En l'occurence l'année, le mois, le jour, l'heure, les minutes, les secondes et même les fractions de secondes y sont conservées.</p>
<p>Access nous offre des fonctions pour ne renvoyer que la partie des données qui nous intéresse.</p>
<p class="notice exemple">Ex : si le champ <strong>Date de naissance</strong> de type <strong>Date/Heure</strong> est 22-02-1970, 
la fonction <strong>année([Date de naissance])</strong> renverra le chiffre <strong>1970</strong>.</p>
<p>Le même concept s'applique à d'autres fonctions.</p>
<table class="table">
  <tr>
    <th>mois([champ de type Date/Heure])</th>
    <td>Chiffre de 1 à 12 ( Janvier à décembre )</td>
  </tr>
  <tr>
    <th>jour([champ de type    Date/Heure])</th>
    <td>Chiffre de 1 à 31 ( 1er au 31e jour du mois )</td>
  </tr>
  <tr>
    <th>joursem([champ de type Date/Heure])</th>
    <td>Chiffre de 1 à 7 ( Dimanche à samedi )</td>
  </tr>
</table>
<p>Access offre plusieurs autres fonctions que nous pouvons rechercher dans le générateur d'expression (qui sera utilisé pour cet exercice).</p>
<ol class="instruction">
	<li>Ajoutez les champs <strong>emp_prenom</strong> et <strong>emp_nom</strong> à la liste des champs de la requête.</li>
	<li>Placez  le pointeur dans la troisième case de la ligne des champs: à la droite du champ <strong>emp_nom</strong>.</li>
</ol>

<ol class="instruction">
	<li>De la barre d'outils des requêtes, Cliquez sur le bouton <img src="/assets/img/access/bt_generateur_expression.png" alt="Bouton générateur d'expression" /></li>
</ol>
  OU<br />
<ol class="instruction">
	<li>Appuyez  sur le bouton droit de la souris.</li>
	<li>Du  menu contextuel, sélectionnez l'option <strong>Créer</strong>.</li>
</ol>
<p>La fenêtre du générateur d'expression va apparaître.</p>
<img src="/assets/img/access/generateur_expression.png" alt="Fenêtre du générateur d'expression" />
<p>C'est à partir de cette fenêtre que vous avez accès à plusieurs des ressources d'Access. Il vous est possible de chercher tous les objets de tous les champs, les requêtes, les formulaires, les états de votre base de données.</p>
<p>De plus, vous avez également accès aux fonctions intégrées d'Access. Ceux-ci vous donnent beaucoup de flexibilité au moment de la création de vos requêtes. Si vous êtes intéressé, vous pouvez aussi créer vos propres fonctions.</p>
<p>C'est dans la case du haut que sera inscrit la formule pour le champ calculé de cet exercice.</p>
<p>Vous pouvez dans certains cas combiner des fonctions d'Access pour atteindre le résultat que vous voulez.</p>
<p class="notice exemple"e>Ex : Abs ( CMonnaie ([champ de type texte]) ).</p>
<p>Juste en dessous, il y des boutons pour les opérations mathématiques et différents critères de sélection. Dans les trois colonnes en  dessous, il est possible d'accéder à tous les objets d'Access.</p>
<p>Pour l'exercice, il faut chercher la fonction intégré <strong>Année()</strong>.</p>
<p>Pour voir le contenu des dossiers qui ont un &quot;<strong>+</strong>&quot; sur le dessus, il faut faire un &quot;double-clique&quot; sur le dossier en question.</p>
<ol class="instruction">
	<li>Faites un double-clique sur le dossier <strong>Fonctions</strong>.</li>
	<li>Cliquez  sur le dossier <strong>Fonctions intégrées</strong>.</li>
</ol>
<p>Le contenu de la deuxième et la troisième colonne vont se remplir. La deuxième colonne contient la liste des catégories de fonctions. La troisième colonne contient la liste des fonctions disponibles. La fonction <strong>Année()</strong> fait partie de la catégorie <strong>Date/Heure</strong>.<br />
<p>Dans  la deuxième colonne, cliquez sur la catégorie <strong>Date/Heure</strong>.<br />
<p>Le contenu de la troisième colonne change pour montrer  seulement les fonctions de la catégorie choisie, soit celle de <strong>Date/Heure</strong>.  La fonction recherchée est à la seconde place dans la liste.</p>
<p>Pour l'insérer dans la section de la formule :</p>
<ol class="instruction">
	<li>Faite un double-clique sur la fonction <strong>Année()</strong>.</li>
</ol>

<p>Le contenu de la case de formulation sera: <strong>Année(&quot;Date&quot;)</strong>.</p>
<p>Il suffit maintenant de remplacer &quot;<strong>Date</strong>&quot;  par le champ de type <strong>Date/Heure</strong> nécessaire pour la requête, soit le champ <strong>emp_embauche</strong>.</p>
<ol class="instruction">
	<li>Supprimez le texte <strong>&quot;Date&quot;</strong>, incluant les guillemets mais pas les  parenthèses.</li>
	<li>Laissez  le curseur entre les deux parenthèses.<br />
	<li>Faites  un double-clique sur le dossier <strong>Tables</strong> de la première colonne.</li>
	<li>Encore  dans la première colonne, cliquez sur la table <strong>Employe</strong>.</li>
</ol>
<p>Le contenu de la deuxième et la troisième colonne vont changer pour montrer les possibilités à partir de cette table.</p>
<ol class="instruction">
	<li>Dans  la deuxième colonne, faites un &quot;double-clique&quot; sur le champ <strong>emp_embauche</strong>.</li>
</ol>

<p>Le texte<strong> [Employe]![emp_embauche]</strong>devrait apparaître entre les deux parenthèses. Ceci indique que le champ <strong>emp_embauche</strong> de la table <strong>Employe</strong> a été sélectionné.</p>

<p>La création de la fonction est terminée. Le résultat devrait être <strong>année([Employe]![emp_embauche])</strong></p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_mode_creation.png" alt="bouton mode création" /></li>
</ol>
<p>Access vous retourne au mode <strong>création de requêtes</strong>.</p>
<ol class="instruction">
	<li>Appuyez  sur la touche pour  terminer la saisie de la formule dans la case des champs.</li>
</ol>
<p>Access va ajouter &quot;<strong>Expr1</strong>:&quot; devant la formule. Access considère cette fonction comme un champ calculé des exercices précédents. Un champ calculé est toujours composé d'un nom, suivi d'un deux points et le calcul.</p>
<p>Pour compléter l'exercice, vous pouvez changer le texte &quot;<strong>Expr1</strong>&quot; par quelque chose de plus approprié.</p>
<p>Critère :</p>
<table class="table">
  <tr>
    <th>Champ</th>
    <td>emp_prenom</td>
    <td>emp_nom</td>
    <td>Expr1:année([employés]![embauche])</td>
  </tr>
  <tr>
    <th>Tri</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Afficher</th>
    <td>X</td>
    <td>X</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th>Critère</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>2003</td>
  </tr>
  <tr>
    <th>Ou</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Résultat :</p>
<table class="table">
  <tr>
    <th>emp_prenom</th>
    <th>emp_nom</th>
  </tr>
  <tr>
    <td>Paul</td>
    <td>TERGEIST</td>
  </tr>
  <tr>
    <td>Pierre</td>
    <td>HAFEUX</td>
  </tr>
  <tr>
    <td>Élie</td>
    <td>COPTAIRE</td>
  </tr>
  <tr>
    <td>Vincent</td>
    <td>TIME</td>
  </tr>
</table>
<p>Bien que cette manière fonctionne, elle ne démontre pas  les possibilités des fonctions. Cet exercice a démontré qu'il est possible  d'utiliser une fonction pour un champ calculé. Mais, vous pouvez aussi utiliser  les fonctions pour les critères de votre requête.</p>

