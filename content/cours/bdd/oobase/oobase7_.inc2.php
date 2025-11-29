<?php
/**
 * BUT : Cours sur les formulaires graphiques
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:30:00
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
$sNavigation=navigation('oobase', '7', '8', '6d');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol start="5" class="unstyled">
		<li><a href="#chap1" id="tdmchap1">Avant de commencer</a></li>
		<li><a href="#chap2" id="tdmchap2">Introduction</a></li>
		<li><a href="#chap3" id="tdmchap3">Création d'un formulaire graphique avec l'assistant</a></li>
		<li><a href="#chap4" id="tdmchap4">Modification du formulaire</a></li>
    </ol>
</aside>
<main role="main"><a id="main"></a>
<article>

<h1>OpenOffice Base : LES FORMULAIRES GRAPHIQUES</h1>
<h1><a href="#tdmchap1" id="chap1">1-Avant de commencer</a></h1>
<p>OpenOffice Base vous propose plusieurs types de formulaires. Ce cours vous montre comment créer et utiliser un formulaire graphique. Pour plus d'informations sur les formulaires en général, veillez vous référer au cours sur les formulaires.</p>
<p>Pour réaliser ce cours, il est préférable d'utiliser les données de la base de données <strong>commerce2.odb</strong>.</p>

<h1><a href="#tdmchap2" id="chap2">2-Introduction</a></h1>
<p>OpenOffice Base vous permet de générer des graphiques à partir de la masse de données qui est accumulée.</p>
<p>L'exercice de ce cours va afficher la somme des commissions de l'entreprise par lieu de travail. Ces données se retrouvent dans les champs <strong>emp_commission</strong> et <strong>emp_bureau</strong> de la table <strong>Employe</strong>.</p>
<p>Pourquoi un graphique ?</p>
<ul>
	<li>Pour simplifier l'analyse d'une masse de données.</li>
	<li>Pour ressortir rapidement les tendances des séries de données.</li>
	<li>Pour pouvoir comparer les données.</li>
	<li>Pour ressortir des proportions.</li>
</ul>

<h1><a href="#tdmchap3" id="chap3">3-Création d'un formulaire graphique avec l'assistant</a></h1>
 <img src="/assets/img/oobase/assistant_nouveau_formulaire_graphique.png" alt="assistant nouveau formulaire graphique" width="310" height="200"  />
<p>&Agrave; partir du menu principal, sélectionnez l'onglet Formulaires <img src="/assets/img/oobase/bouton_formulaire.png" alt="bouton formulaire" width="126" height="25" />.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_nouveau_formulaire.png" alt="bouton nouveau formulaire" width="69" height="22" />.</li>
	<li>De la liste des options disponibles, sélectionnez l'option <strong>Assistant graphique</strong>.</li>
</ol>
<div class="notice alert"><p>La &laquo;&nbsp;source&nbsp;&raquo; d'un formulaire ou d'un état peut être une table ou une requête. La requête à l'avantage d'utiliser des enregistrements qui répondent aux critères demandés ou provenant de plusieurs tables reliées. C'est un point à considérer lors de la création d'un graphique.</p>
 <img src="/assets/img/oobase/assistant_graphique1.png" alt="assistant graphique1" width="308" height="200"  />
<ol class="instruction">
	<li>Sélectionnez la table <strong>Employe</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_OK_simple.png" alt="bouton OK" width="92" height="26" />.</li>
	<li>De la liste des champs disponibles sélectionnez les champs <strong>emp_bureau</strong> et <strong>emp_commission</strong>.</li>
	<li>Choisissez le champ dans la colonne de gauche et Cliquez sur le bouton <img src="/assets/img/oobase/bouton_ajouter_un.png" alt="bouton ajouter un item" width="30" height="19" />.</li>
</ol>
 OU<br />
<ol class="instruction">
	<li>Faire un double-clique sur le champ désiré.</li>
	<li>Une fois que les champs voulus ont été sélectionnés, Cliquez sur le bouton <img src="/assets/img/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
<p>OpenOffice Base vous offre une liste de types de graphique pour représenter vos données.</p>
<img src="/assets/img/oobase/assistant_graphique2.png" alt="assistant graphique2" width="308" height="200"  />
<ol class="instruction">
	<li>Sélectionnez le type de graphique <strong>Secteur</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
	<li>Faites un double-clique sur le bouton <strong>SommeDecommission</strong>.</li>
</ol>
<img src="/assets/img/oobase/assistant_graphique4.png" alt="assistant graphique4" width="318" height="162" />
<p>Le formulaire graphique vous permet de générer une synthèse sur plusieurs éléments des données. Voici une courte description de chacune des options possibles.</p>
 <img src="/assets/img/oobase/assistant_graphique3.png" alt="assistant graphique3" width="308" height="200"  />
<table border="1" cellspacing="0" cellpadding="0" summary="options du formulaire graphique">
 <tr>
 <th>Aucun</th>
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
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_OK_simple.png" alt="bouton OK" width="92" height="26" />.</li>
</ol>
<p class="notice remarque">Il vous est toujours possible de changer de champ ou de synthèse en revenant au <strong>Mode création</strong>.</p>
<ol class="instruction">
	<li>Pour les besoins de l'exercice, Cliquez sur le bouton <img src="/assets/img/oobase/bouton_suivant_active.png" alt="bouton suivant" width="76" height="24" />.</li>
</ol>
 <img src="/assets/img/oobase/assistant_graphique5.png" alt="assistant graphique5" width="308" height="200"  />
<p>Il reste encore à donner un nom au graphique ainsi qu'à voir quelques autres possibilités.</p>
<ol class="instruction">
	<li>Pour le nom du graphique, entrez le nom: <strong>Total des commissions de l'entreprise</strong>.</li>
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_terminer.png" alt="bouton terminer" width="76" height="24" />.</li>
</ol>
<p>OpenOffice Base va prendre quelques instants pour générer le graphique selon les options que vous avez choisies.</p>
 <img src="/assets/img/oobase/assistant_graphique6.png" alt="assistant graphique6" width="337" height="248" />
 <p>Voici le graphique généré à partir des données de la table <strong>Employe</strong>.</p>

<h1><a href="#tdmchap4" id="chap4">4-Modification du formulaire</a></h1>
<p>Pour pouvoir modifier le formulaire graphique, il faut entrer en <strong>Mode création</strong>.</p>
<ol class="instruction">
	<li>Cliquez sur le bouton <img src="/assets/img/oobase/bouton_affichage_creation.png" alt="bouton affichage création" width="32" height="22" />.</li>
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
<p>OpenOffice Base utilise le générateur de graphique de Windows pour représenter les données.</p>
<p class="notice remarque">Vous ne pouvez pas modifier les données à partir de la table de données du module graphique.</p>


</article>