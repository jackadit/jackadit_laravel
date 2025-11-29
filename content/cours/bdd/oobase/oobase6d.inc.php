<?php
/**
 * BUT : Cours sur les formulaires
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:29:00
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
$sNavigation=navigation('oobase', '6d', '9', '6c');
?>




<h1>OpenOffice Base : LES FORMULAIRES (d)</h1>

<p><a href="./cours/exercices/openOfficeBase.odt">Énoncé de l'exercice</a></p>
<p><a href="./cours/exercices/base_exemple.odb">Base de données exemple</a></p>

<h2>Changer les propriétés d'un champ ou d'un objet</h2>
<p>Chaque objet ou contrôle possède ses propres propriétés. Pour les modifier, il suffit de double-cliquer sur celui-ci.</p>
<p>Ci-dessous, la liste des propriétés ou options que vous pouvez modifier pour certains &quot;contrôles&quot; du formulaire.</p>
<p>Les propriétés peuvent être regroupées en 3 catégories : <strong>Général</strong>, <strong>Données</strong> et <strong>Événements</strong>.</p>
<p>L'option la plus importante est dans le second onglet : <strong>Données</strong>. OpenOffice Base peut relier le contenu à un champ d'une table.</p>
 
 <img src="/assets/img/oobase/fen_proprietes_champ_etiquette0.png" alt="propriétés zone de liste" />
 <img src="/assets/img/oobase/fen_proprietes_zone_combinee0.png" alt="propriétés zone de liste" />
 <img src="/assets/img/oobase/fen_proprietes_zone_texte0.png" alt="propriétés zone de liste" />
 <img src="/assets/img/oobase/fen_proprietes_zone_liste0.png" alt="propriétés zone de liste" />
 <img src="/assets/img/oobase/fen_proprietes_case_cocher0.png" alt="propriétés zone de liste" />
 <img src="/assets/img/oobase/fen_proprietes_bouton_radio0.png" alt="propriétés zone de liste" />

<h2>Verrouiller un champ</h2>
<p>Verrouiller un champ consiste à ne laisser à l'utilisateur du formulaire qu'un droit de lecture sur le champ.</p>
<p> C'est l'option <strong>En lecture seule</strong> qui est concernée lorsqu'elle est disponible. Sinon l'option <strong>Activé</strong> autorise ou non l'accès au champ pour le curseur.</p>

<h2>Séquence d'activation</h2>
<p>La séquence d'activation détermine l'ordre dans lequel le curseur va passer d'un champ à l'autre sur le formulaire lorsque vous utiliser la touche <img src="/assets/img/oobase/touche_tab.png" alt="Touche tabulation"  />.</p>

<p>Lorsque les champs ont le même numéro, c'est l'ordre de création qui prime.</p>

<h2>Imprimer un formulaire</h2>
<p>Attention !</p>
<p>Seul l'enregistrement actif peut s'imprimer sous forme de formulaire.</p>

<ol class="instruction">
 <li>Du menu <strong>Fichier</strong>, sélectionnez la commande <strong>Imprimer</strong>.</li>
</ol>
 OU<br />
<ol class="instruction">
 <li>Appuyez sur le bouton <img src="/assets/img/oobase/bt_imprimer.png" alt="bouton imprimer" />.</li>
</ol>


