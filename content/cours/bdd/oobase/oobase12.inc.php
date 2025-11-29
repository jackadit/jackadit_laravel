<?php
/**
 * oobase12.php
 * BUT : Exercices
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
$sNavigation=navigation('oobase', '12', '13', '9');
?>




<h1>OpenOffice Base : EXERCICES</h1>

<h2>Introduction</h2>
<p>Cette partie est un exercice qui montre les points importants de la création d'une base de données simple. Elle consiste à créer une petite base de données ayant une seul table.</p>
<p>Toute création de base de données commence toujours par la même étape importante: l'analyse des besoins. Pour cet exercice, cela consiste à analyser les données sur les clients de l'entreprise pour savoir lesquelles on désire conserver.</p>
<p>Par exemple, le nom de l'entreprise, son adresse, numéro de téléphone, de télécopier et ainsi de suite. La liste ne sera pas exhaustive.</p>

<h3>Détermination des champs</h3>
<p>Nom de l'entreprise, adresse de facturation, code postal, adresse de livraison, code postal livraison, numéro de téléphone, numéro de télécopieur, personne responsable, limite de crédit, conditions de paiement, conditions préférentielles, date d'inscription.</p>
<p>Il faut ensuite déterminer les propriétés des champs. Certains sont plus évident que d'autres.</p>

<h3>Création d'une base de données</h3>
<ol class="instruction">
	<li>Ouvrir OpenOffice Base.</li>
	<li>Du menu Fichier, sélectionner l'option <strong>Nouveau</strong>.</li>
	<li>Sélectionner l'option base de données vide.</li>
</ol>

<h4>Création d'une table</h4>
<ol class="instruction">
	<li>Sélectionnez l'onglet <strong>Table</strong>.</li>
	<li>Appuyez sur le bouton <strong>Nouveau</strong>.</li>
	<li>Sélectionnez l'option <strong>Mode création</strong>.</li>
</ol>
<p>Quatre sections : Nom du champ, description et propriétés du champ, aide.</p>
<ol class="instruction">
	<li>Saisissez le nom du premier champ&nbsp;: <strong>Nom de l'entreprise,</strong> dans la case du coin supérieur gauche.</li>
</ol>
<p class="notice remarque">La case juste à sa droite détermine le type de champ. Pour ce cas, il s'agit d'un champ de type <strong>Texte</strong>.</p>
<ol class="instruction">
	<li>Saisissez la description à la case de champ. Vous verrez au bas de l'écran les propriétés du champ.</li>
</ol>
<p class="notice remarque">La taille du champ est important. Il faut que la taille soit assez grand pour entrer les données, mais pas trop pour avoir de l'espace inutile. La taille des disques durs a beaucoup évoluée depuis les dernières années. Mais un bon concepteur de base de données n'aime pas perdre de la place inutilement. Il préfère que l'espace soit utilisé pour des données qui sont utiles pour l'entreprise.</p>
<ol class="instruction">
	<li>Saisissez des champs&nbsp;: Tableau avec la liste des champs.</li>
	<li>Ajoutez la clé primaire pour le champ.</li>
	<li>Saisissez quelques données&nbsp;: Désirée DERATA et fils.</li>
</ol>

<h4>Création d'un formulaire</h4>
<p>Il est plus facile pour un utilisateur de saisir les données sous forme de formulaire que dans un tableau. Le nom de certain des champs ne pourrait pas lui donner assez d'informations. Il est possible qu'un utilisateur n'ai pas besoin de voir tous les champs.</p>
<p class="notice exemple">Ex : est-ce qu'un employé a besoin de voir le salaire de tous les employés ? Il peut n&rsquo;avoir besoin que d'ajouter des personnes ou changer leur adresse ou privilège.</p>
<p>Un formulaire est plus convivial pour saisir de l'information qu&rsquo;un tableau,&nbsp; d&rsquo;autant plus que les champs requis et les données peuvent provenir de plusieurs tables ou requêtes.</p>

<h4>Création d'un formulaire automatique - Apporter des changements</h4>
<ol class="instruction">
	<li>Limite de crédit : max 50000 &euro;.</li>
	<li>Ajout et modification des données.</li>
	<li>Création de quelques requêtes.</li>
	<li>Création d'un rapport.</li>
</ol>

<h2>Exercice 2 : Création d'un formulaire de facturation</h2>
<ol class="instruction">
	<li>Création de requêtes basées sur plusieurs tables ou requêtes.</li>
	<li>Création d'un formulaire de base.</li>
	<li>Ajout d'un sous-formulaire avec un champ calculé.</li>
	<li>Ajout de la fonction <strong>Somme</strong>.</li>
	<li>Ajout d'un champ calculé dans le premier formulaire pour afficher la somme du sous-formulaire (voir générateur d'expression).</li>
</ol>


