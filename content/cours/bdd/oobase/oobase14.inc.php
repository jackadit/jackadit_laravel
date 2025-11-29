<?php
/**
 * oobase14.php
 * BUT : Quizz - Réponses
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:35:00
 *
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package Jackadit.com
 * @subpackage
 * @category
 * @access protected
 * @uses db
 */
$sNavigation = navigation('oobase', '14', 'fin', '13'); ?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol class="unstyled">
		<li><a href="#r1" id="tdmr1">Réponse 1</a></li>
		<li><a href="#r2" id="tdmr2">Réponse 2</a></li>
		<li><a href="#r3" id="tdmr3">Réponse 3</a></li>
		<li><a href="#r4" id="tdmr4">Réponse 4</a></li>
		<li><a href="#r5" id="tdmr5">Réponse 5</a></li>
		<li><a href="#r6" id="tdmr6">Réponse 6</a></li>
		<li><a href="#r7" id="tdmr7">Réponse 7</a></li>
		<li><a href="#r8" id="tdmr8">Réponse 8</a></li>
		<li><a href="#r9" id="tdmr9">Réponse 9</a></li>
		<li><a href="#r10" id="tdmr10">Réponse 10</a></li>
		<li><a href="#r11" id="tdmr11">Réponse 11</a></li>
		<li><a href="#r12" id="tdmr12">Réponse 12</a></li>
		</ol></li>
    </ol>
</aside>



<h1>OpenOffice Base : RÉPONSES QUIZZ</h1>

<p>Voici les réponses des questions posées auparavant avec quelques explications supplémentaires.</p>
    <h2><a href="#tdmr1" id="r1">R1 : B : 1 à plusieurs</a></h2>
<p>Vérifiez avec les deux questions que vous avez vues sur la page des relations. 1 agent peut faire plusieurs ventes. Mais une vente peut seulement être fait par un agent. Donc, il s'agit d'une relation de 1 à plusieurs.</p>

    <h2><a href="#tdmr2" id="r2">R2 : C : Plusieurs à plusieurs ou D: Aucune de ces réponse</a></h2>
<p>Cela dépend comment on voit les choses. Il n'y a pas de relation directe entre Agent et Maison. Mais il y a une relation indirecte entre les deux en passant par la table Ventes. Si on pose encore une fois les deux questions, on s'aperçoit qu'un agent peut vendre plusieurs maisons et, durant la vie de la maison, qu'une maison peut être vendu par plusieurs agents. Donc, il y a une relation de plusieurs à plusieurs.</p>
<p>Mais on sait qu'il est impossible de créer une relation directe de plusieurs à plusieurs avec OpenOffice Base. Il faut une table intermédiaire qui contient au moins les clés primaires des deux autres tables. C'est le cas pour cet exemple puisque ne numéro de référence de l'agent et de la maison sont aussi dans la table Ventes.</p>

    <h2><a href="#tdmr3" id="r3">R3 : D : Texte</a></h2>
<p>Il serait possible de mettre un numéro de téléphone dans un autre type de champ tel que mémo ou numérique. Mais le numéro de téléphone va mieux dans un champ de type Texte. Est-ce que vous voulez vraiment faire un commentaire avec ce numéro de téléphone ? Avez-vous l'intention d'accomplir des opérations mathématiques tel qu'une somme ou une multiplication avec ce numéro ? Pas vraiment. Voilà pourquoi il est plus approprié d'entrer l'information dans un champ de type Texte.</p>

    <h2><a href="#tdmr4" id="r4">R4 : D : </a></h2>
<p>C'est le bouton <img src="/assets/img/oobase/bt_valeurs_distinctes.png" alt="bouton valeur distinctes" width="25" height="25" /> qu'il faut appuyer pour afficher ou masquer la ligne des opérations.</p>
<p>Le bouton <img src="/assets/img/oobase/bt_ajouter_tables.png" alt="bouton ajouter table" width="23" height="22" />&nbsp;permet d'ajouter des tables ou des requêtes dans une requête ou dans la zone des relations. Le bouton <img src="../img/oobase/bt_executer.png" alt="bouton exécuter" width="23" height="22" />&nbsp;exécute une requête.</p>
<p>Le bouton <img src="/assets/img/oobase/bt_requete_ajouter.png" alt="bouton requête ajouter" width="19" height="19" />&nbsp;permet de choisir une requête de type Ajout. Elle filtre le contenu d'une requête pour ajouter le résultat dans une autre table.</p>

    <h2><a href="#tdmr5" id="r5">R5 : C : Ville</a></h2>
<p>La ligne de champs peut seulement contenir des champs provenant de tables ou de requête ou de champs calculés que vous aurez préparé.</p>

    <h2><a href="#tdmr6" id="r6">R6 : B : Regroupement</a></h2>
<p>Avec les opérations d'actif, OpenOffice Base va regrouper toutes les valeurs identiques ensemble. Dans ce cas, il va regrouper tous les &quot;Lemay&quot; ensemble. Les données seront ensuite &quot;distribuées&quot; selon les prénoms. La requête pourrait afficher les valeurs pour Jean et Patrick Lemay.</p>

    <h2><a href="#tdmr7" id="r7">R7 : C : Somme</a></h2>
<p>On vous demande d'afficher le total des valeurs des maisons. Il faut donc additionner les valeurs de toutes les maisons qui répondent au critère demandé. C'est l'opération somme qui s'occupe de cela.</p>

    <h2><a href="#tdmr8" id="r8">R8 : D : Aucune de ces réponses</a></h2>
<p>Pour cet exemple, aucun critère n'est requis. Plusieurs personnes auraient tendance à mettre l'opération Somme à cet endroit. Mais le seul endroit ou vous devriez mettre des opérations et des fonctions sont dans des champs calculés ou sur la ligne opération.</p>

    <h2><a href="#tdmr9" id="r9">R9 : C : Une méthode pour regrouper les champs communs dans des tables</a></h2>
<p>Cette analyse permet de regrouper et de s'assurer que les champs qui composent une table sont placés au bon endroit.</p>

    <h2><a href="#tdmr10" id="r10">R10 : B : un outil pour s'assurer que la saisie de données répond à un format prédéterminé</a></h2>
<p>Prenez simplement l'exemple d'un numéro de téléphone ou d'un code postal. Les données doivent être saisies d'une certaine façon. </p>

    <h2><a href="#tdmr11" id="r11">R11 : D : Exécuter une requête</a></h2>
<p>Pour tous les types de requête que vous pouvez choisir, ce bouton va toujours exécuter la requête.</p>

    <h2><a href="#tdmr12" id="r12">R12 : C : plusieurs à plusieurs</a></h2>
<p>On retourne aux relations entre les tables ou les entités. Les deux questions sont toujours aussi pratiques. Un client peut se rendre à plusieurs hôtels et un hôtel peut recevoir plusieurs clients. C'est une relation de plusieurs à plusieurs. Un client peut même revenir au même hôtel s'il le désire. </p>


