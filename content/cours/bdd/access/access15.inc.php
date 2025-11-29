<?php
/**
 * page de cours 11 sur ACCESS 2003 : Quizz réponses
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   11/03/07  23:37:00
 *
 * @author Stéphane WAHL
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category cours
 * @access public
 * @uses
 */
?>
<h1>ACCESS : RÉPONSES QUIZZ</h1>

<p>Voici les réponses des questions posées auparavant avec quelques explications supplémentaires.</p>
<h2>B: 1 à plusieurs</h2>
<p>Vérifiez avec les deux questions que vous avez vues sur la page des relations. Un agent peut faire plusieurs ventes. Mais une vente peut seulement être fait par un agent. Donc, il s'agit d'une relation de 1 à plusieurs.</p>

<h2>C: Plusieurs à plusieurs ou D: Aucune de ces réponse</h2>
<p>Cela dépend comment on voit les choses. Il n'y a pas de relation directe entre Agent et Maison. Mais il y a une relation indirecte entre les deux en passant par la table Ventes. Si on pose encore une fois les deux questions, on s'aperçoit qu'un agent peut vendre plusieurs maisons et, durant la vie de la maison, qu'une maison peut être vendu par plusieurs agents. Donc, il y a une relation de plusieurs à plusieurs.</p>
<p>Mais on sait qu'il est impossible de créer une relation directe de plusieurs à plusieurs avec Access. Il faut une table intermédiaire qui contient au moins les clés primaires des deux autres tables. C'est le cas pour cet exemple puisque le numéro de référence de l'agent et de la maison sont aussi dans la table Ventes.</p>

<h2>D: Texte</h2>
<p>Il serait possible de mettre un numéro de téléphone dans un autre type de champ tel que texte court ou numérique. Mais le numéro de téléphone va mieux dans un champ de type Texte. Est-ce que vous voulez vraiment faire un commentaire avec ce numéro de téléphone ? Avez-vous l'intention d'accomplir des opérations mathématiques tel qu'une somme ou une multiplication avec ce numéro ? Pas vraiment. Voilà pourquoi il est plus approprié d'entrer l'information dans un champ de type Texte.</p>

<h2>D: <img src="/assets/img/access/bt_totaux2.png" alt="bouton somme" /></h2>
<p>C'est le bouton sur lequel il faut appuyer pour afficher ou masquer la ligne des opérations.</p>
    <p>Le bouton <img src="/assets/img/access/bt_creation_requete2.png" alt="bouton créer requête" />&nbsp;permet de créer des requêtes.</p>
    <p>Le bouton <img src="/assets/img/access/bt_assistant_requete2.png" alt="bouton assistant requête" />&nbsp;permet d'ajouter une requête avec l'assistant.</p>
    <p>Le bouton <img src="/assets/img/access/bt_ajout_requete2.png" alt="bouton requête ajouter" />&nbsp;permet de choisir une requête de type Ajout. Elle filtre le contenu d'une requête pour ajouter le résultat dans une autre table.</p>

<h2>C: Ville</h2>
<p>La ligne de champs peut seulement contenir des champs provenant de tables ou de requête ou de champs calculés que vous aurez préparé.</p>

<h2>B: Regroupement</h2>
<p>Avec les opérations d'actif, Access va regrouper toutes les valeurs identiques ensemble. Dans ce cas, il va regrouper tous les &quot;Lemay&quot; ensemble. Les données seront ensuite &quot;distribuées&quot; selon les prénoms. La requête pourrait afficher les valeurs pour Jean et Patrick Lemay.</p>

<h2>C: Somme</h2>
<p>On vous demande d'afficher le total des valeurs des maisons. Il faut donc additionner les valeurs de toutes les maisons qui répondent au critère demandé. C'est l'opération somme qui s'occupe de cela.</p>

<h2>D: Aucune de ces réponses</h2>
<p>Pour cet exemple, aucun critère n'est requis. Plusieurs personnes auraient tendance à mettre l'opération Somme à cet endroit. Mais le seul endroit ou vous devriez mettre des opérations et des fonctions sont dans des champs calculés ou sur la ligne opération.</p>

<h2>C: Une méthode pour regrouper les champs communs dans des tables</h2>
<p>La normalisation permet de regrouper et de s'assurer que les champs qui composent une table sont placés au bon endroit.</p>

<h2>B: un outil pour s'assurer que la saisie de données répond à un format prédéterminé</h2>
<p>Prenez simplement l'exemple d'un numéro de téléphone ou d'un code postal. Les données doivent être saisies d'une certaine façon. </p>

<h2>D: Exécuter une requête</h2>
<p>Pour tous les types de requête que vous pouvez choisir, ce bouton va toujours exécuter la requête.</p>

<h2>C: plusieurs à plusieurs</h2>
<p>On retourne aux relations entre les tables ou les entités. Les deux questions sont toujours aussi pratiques. Un client peut se rendre à plusieurs hôtels et un hôtel peut recevoir plusieurs clients. C'est une relation de plusieurs à plusieurs. Un client peut même revenir au même hôtel s'il le désire. </p>

<h2>Un champ marqué "Null interdit = Oui" ...</h2>
<p>C : Devra toujours être renseigné par l'utilisateur.</p>

<h2>Le réglage "Chaîne vide autorisée = Non"...</h2>
<p>C : Est indépendant de "Null interdit".</p>

<h2>La clef primaire doit toujours être placée en début de table.</h2>
<p>B : Faux.</p>

<h2>Si on crée une nouvelle ligne dans cette table, le prochain numéro...</h2>
<p>A : N'est pas nécessairement prévisible.</p>

<h2>Comment insérer une ligne de données entre les employés 4 et 5 ?</h2>
<p>B : On ne peut pas insérer de ligne.</p>

<h2>Pour stocker des valeurs entières inférieures ou égales à 100 000, vous utiliseriez :</h2>
<p>C : Un champ Numérique / Entier long.</p>

<h2>Un champ Texte peut avoir une taille maximale de :</h2>
<p>B : 255 caractères.</p>

<h2>Un champ NuméroAuto prend toujours :</h2>
<p>B : Des valeurs différentes.</p>
<p>D : Des valeurs numériques entières.</p>



