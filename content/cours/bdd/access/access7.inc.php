<?php
/**
 * page de cours 7 sur ACCESS 2003 : Cours sur les formulaires graphiques
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   11/03/07  02:35:00
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
<h1>ACCESS : LES FORMULAIRES GRAPHIQUES</h1>
<p class="h2-like">Avant de commencer</p>
<p>Access vous propose plusieurs types de formulaires. Ce cours vous montre comment créer et utiliser un formulaire graphique. Pour plus d'informations sur les formulaires en général, veillez vous référer au cours sur les formulaires.</p>


<h2>Introduction</h2>
<p>Access vous permet de générer des graphiques à partir de la masse de données qui est accumulée.</p>
<p>L'exercice de ce cours va afficher la somme des commissions de l'entreprise par lieu de travail. Ces données se retrouvent dans les champs <strong>emp_commission</strong> et <strong>emp_bureau</strong> de la table <strong>Employe</strong>.</p>
<p>Pourquoi un graphique ?</p>
<ul>
	<li>Pour simplifier l'analyse d'une masse de données.</li>
	<li>Pour ressortir rapidement les tendances des séries de données.</li>
	<li>Pour pouvoir comparer les données.</li>
	<li>Pour ressortir des proportions.</li>
</ul>

<h2>Création d'un formulaire graphique avec l'assistant</h2>
    <p>À partir du menu <strong>Créer</strong>, sélectionnez le bouton <strong>Création de formulaires</strong> <img src="/assets/img/access/bt_formulaire.png" alt="bouton formulaire" />.</p>

<ol class="instruction">
    <li>De la liste des contrôles disponibles, cliquez sur le bouton <img src="/assets/img/access/bt_controle_graphique.png" alt="bouton contrôle graphique" />.</li>
</ol>

<p class="notice remarque">La &laquo;&nbsp;source&nbsp;&raquo; d'un formulaire ou d'un état peut être une table ou une requête. La requête à l'avantage d'utiliser des enregistrements qui répondent aux critères demandés ou provenant de plusieurs tables reliées. C'est un point à considérer lors de la création d'un graphique.</p>

    <img src="/assets/img/access/f_assistant_graphique1.png" alt="assistant formulaire graphique 1" />
<ol class="instruction">
	<li>Sélectionnez la table <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant activé" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_graphique2.png" alt="assistant formulaire graphique 2" />
    <ol class="instruction">
       <li>De la liste des champs disponibles sélectionnez les champs <strong>emp_bureau_id</strong> et <strong>emp_commission</strong>.</li>
        <li>Choisissez le champ dans la colonne de gauche et cliquez sur le bouton <img src="/assets/img/access/bt_ajouter_un.png" alt="bouton ajouter un item" />.</li>
    </ol>
 OU<br />
<ol class="instruction">
    <li>Faites un double-clique sur le champ désiré.</li>
	<li>Une fois que les champs voulus ont été sélectionnés, cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant active" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_graphique3.png" alt="assistant formulaire graphique 3" />
<p>Access vous offre une liste de types de graphique pour représenter vos données.</p>
<ol class="instruction">
	<li>Sélectionnez le type de graphique <strong>Secteur</strong>.</li>
    <li>Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant active" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_graphique4.png" alt="assistant formulaire graphique 4" />
<ol class="instruction">
    <li>Faites un double-clique sur le bouton <strong>SommeDeemp_commission</strong>.</li>
</ol>
    <img src="/assets/img/access/f_synthetiser.png" alt="assistant formulaire synthétiser" />
<p>Le formulaire graphique vous permet de générer une synthèse sur plusieurs éléments des données. Voici une courte description de chacune des options possibles.</p>
<table class="table">
    <caption>Options du formulaire graphique</caption>
 <tr>
 <th class="w100p">Aucun</th>
 <td>Affiche les valeurs du champ sélectionné</td>
 </tr>
 <tr>
 <th>Somme</th>
 <td>Affiche la somme d'un champ sélectionné</td>
 </tr>
 <tr>
 <th>Moyenne</th>
 <td>Affiche la moyenne d'un champ sélectionné</td>
 </tr>
 <tr>
 <th>Min</th>
 <td>Affiche la plus petite valeur d'un champ sélectionné</td>
 </tr>
 <tr>
 <th>Max</th>
 <td>Affiche la plus grande valeur d'un champ sélectionné</td>
 </tr>
 <tr>
 <th>Compte</th>
 <td>Affiche le nombre d'enregistrements d'un champ sélectionné</td>
 </tr>
</table>
<p>Assurez-vous que la synthèse est sur l'option <strong>Somme</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_OK.png" alt="bouton OK" width="92" height="26" />.</li>
</ol>
<p class="notice remarque">Il vous est toujours possible de changer de champ ou de synthèse en revenant au <strong>Mode création</strong>.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, Cliquez sur le bouton <img src="/assets/img/access/bt_suivant_active.png" alt="bouton suivant active" />.</li>
</ol>
    <img src="/assets/img/access/f_assistant_graphique5.png" alt="assistant formulaire graphique 5" />
<p>Il reste encore à donner un nom au graphique ainsi qu'à voir quelques autres possibilités.</p>
<ol class="instruction">
	<li>Pour le nom du graphique, entrez le nom: <strong>Total des commissions de l'entreprise</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_terminer.png" alt="bouton terminer" />.</li>
</ol>
<p>Access va prendre quelques instants pour générer le graphique selon les options que vous avez choisies.</p>
<p>Voici le graphique généré à partir des données de la table <strong>Employe</strong>.</p>
    <img src="/assets/img/access/f_assistant_graphique6.png" alt="assistant formulaire graphique 6" />
    
<h2>Modification du formulaire</h2>
<p>Pour pouvoir modifier le formulaire graphique, il faut entrer en <strong>Mode création</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/access/bt_formulaire.png" alt="bouton affichage création" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Du menu <strong>Affichage</strong>, sélectionnez l'option <strong>Mode création</strong>.</li>
</ol>
<p>Vous pouvez changer la dimension du formulaire pour répondre à vos besoins.</p>
<p>Pour modifier la présentation.</p>
<ol class="instruction">
	<li>Placez le pointeur par-dessus le graphique.</li>
	<li>Faites un double-clique sur le graphique.</li>
</ol>
<p>Access utilise le générateur de graphique de Windows pour représenter les données.</p>
<p class="notice remarque">Vous ne pouvez pas modifier les données à partir de la table de données du module graphique.</p>

