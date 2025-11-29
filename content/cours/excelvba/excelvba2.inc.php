<?php
/**
 * BUT : cours excel VBA 2
 *
 * @copyright Copyright © jackadit.com 2007
 * @version 1.0       15/04/07        16:18:00
 *
 * @author Jackadit <jackadit@jackadit.com>
 * @since    jackadit.com 1.0
 *
 * @package jackadit.com
 * @subpackage cours
 * @category excelvba
 * @access public
 * @uses
 */
?>
<aside>
<p class="h2-like">Table des matières</p>
    <ol id="excelvba" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Comment écrire du VBA &nbsp;?</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Enregistrer une macro</a></li>
    </ol>
</aside>


<h1>Le code VBA</h1>
<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Comment écrire du VBA &nbsp;?</a></h2>

<p>Pour se familiariser avec le vocabulaire spécifique de la programmation, nous allons tout d‘abord donner quelques définitions.</p>

<dl>
<dt>Procédure</dt>
<dd>Écrire du code VBA c‘est écrire des séquences d‘actions dans un langage informatique (ici en VBA), que l‘on appelle "<strong>procédures</strong>".</dd>
<dt>Objet</dt>
<dd>Pour ce faire, on va manipuler des "<strong>objets</strong>", qui ne sont rien d‘autre que des entités informatique.</dd>
<p>Par exemple une cellule, une feuille de classeur ou un classeur lui-même.</p>
<dt>Classe</dt>
<dd>Chaque entité informatique (objet) est défini par une sorte de catégorie d‘objet que l‘on appelle "<strong>classe</strong>".</dd>
<dt>Propriétés</dt>
<dd>
<p>Chaque objet possède des caractéristiques qui permettent de le décrire, que l‘on appelle "<strong>Propriétés</strong>".</p>
<p>La liste des propriétés varie d‘une classe à l‘autre, mais tous les objets d‘une même classe ont les mêmes propriétés.</p>
<p>Ce sont les valeurs des propriétés qui permettent de les distinguer.</p>
</dd>
<p>Par exemple, toutes les feuilles Excel ont la propriété <strong>Name</strong>, mais la valeur de la propriété <strong>Name</strong> est différente pour chaque feuille</p>
<dt>Méthode</dt>
<dd>
<p>Un objet peut réaliser une action, que l‘on appelle "<strong>méthode</strong>".</p>
<p>La liste des méthodes varie d‘une classe à l‘autre, mais tous les objets d‘une même classe ont les mêmes méthodes.</p>
</dd>
<p>Par exemple, la méthode <strong>Copy</strong> d‘une cellule permet de copier le contenu de cette cellule dans le presse-papier (ou dans une autre cellule).</p>
<p>Évidemment, il arrive qu‘une méthode change les propriétés d‘un objet.</p>
<p>Par exemple, la méthode <strong>PasteSpecial</strong> d‘une cellule change une ou plusieurs propriétés de cette cellule.</p>

<dt>Événement</dt>
<dd>Un événement permet d‘associer une procédure VBA à un objet.</dd>
<p> Par exemple, l‘événement <strong>Change</strong> d‘une feuille se produit lorsqu‘une cellule de cette feuille est modifiée et permet d‘associer une procédure nommée <strong>Worksheet_Change</strong> à cette feuille Excel.</p>
<dt>Collection</dt>
<dd>Ensemble d‘objets d‘une même classe qui peuvent être adressés avec le nom de la collection et un numéro d‘item.</dd>
<p>Par exemple, un classeur Excel est une collection <strong>Sheets</strong> d‘objets <strong>WorkSheet</strong> et/ou <strong>Chart</strong></p>
</dl>

<p>Grâce à VBA on peut manipuler le contenu d‘un classeur Excel et plus précisément par l‘intermédiaire des objets qu‘il contient.</p>
<p>La difficulté pour un débutant c‘est de trouver le nom de l‘objet (ou de la classe) qu‘il faut utiliser.</p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Enregistrer une macro</a></h2>

<p>L‘enregistreur de macros sous Microsoft Excel (Onglet Développeur / Enregistrer une Macro) va vous permettre de générer facilement du code VBA dans une procédure.</p>
<img alt="boite de dialogue Enregistrer une macro" src="/assets/img/excelvba/enregistrer_macro.png" />

<p>Toutes les actions effectuées entre le début et la fin de l‘enregistrement est enregistrée dans une procédure VBA.</p>
<p>Il est plus facile de modifier ce code que de programmer directement dans la VBE (Onglet Développeur / Visual Basic).</p>

<p>C‘est la meilleure méthode pour apprendre à coder en VBA pour les débutants.</p>

<p>Tout d‘abord, on enregistre une séquence en appuyant sur le bouton d‘enregistrement, et ensuite on peut l‘exécuter pas à pas (touche <strong>F8</strong>) dans l‘outil VBA afin de savoir les actions effectuées par chaque ligne de code.</p>

