<?php
/**
 * BUT : La gestion des stocks
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage gpstock
 * @category gpstock
 * @access protected
 * @uses 
 */
$sNavigation=navigation('gpstock', '1');
?>





<h1>Le rôle des stocks et les problématiques des stocks physiques (0h10)</h1>
<h2> Pourquoi stocker ?</h2>

<p>C'est la première question à se poser car si on n'a pas de stock, ce n'est pas la peine de mettre en place un système de gestion.</p>

<p>Le <span class=tag--info>Zéro stock</span> n'est dans la plupart des cas pas souhaitable car le stock a des fonctions à assurer :</p>
<ul>
<li>La désynchronisation de la production et de la vente
  <div class="notice remarque"> ex. : la production de jouets s'étale sur l'année alors que 70% des ventes ont lieu à l'approche de Noël.</div>
</li>
<li>La désynchronisation du transport et de la vente
  <div class="notice remarque">la livraison par trop petites quantités rendrait trop élevé le coût du transport.</div>
</li>
<li>La garantie contre les imprévus
  <div class="notice remarque">pannes, grèves… Les clients doivent continuer à être livrés</div>
</li>
<li>Les fluctuations de la demande
  <div class="notice remarque">la prévision des ventes n'est pas une science exacte (la durée de réapprovisionnement du stock est parfois inférieure à la durée de livraison souhaitée par le client)</div>
</li>
<li>Les achats d'opportunité
<div class="notice remarque">soit parce l'on pense que la valeur du stock va augmenter pendant son stockage (vins), soit parce que l'on peut acquérir des produits à un meilleur prix en achetant de plus grandes quantités (acier mais peut concerner beaucoup de produits).</div>
</li>
</ul>

<h2> La gestion des stocks</h2>

<p>Les fonctions de la gestion de stock sont :</p>
<ul>
<li>Définir les références des articles à tenir en stock</li>
<li>En définir les quantités en tenant compte de différents paramètres comme la prévision des ventes…</li>
<li>Valoriser le stock</li>
<li>Mettre la liste des articles disponibles à la disposition du service commercial et achats et éventuellement le service fabrication s'il s'agit d'une unité de production</li>
<li>Tenir l'inventaire comptable</li>
<li>Prévoir le réapprovisionnement : dates, quantités…</li>
<li>Les mémoriser</li>
<li>Gérer les réservations (statut d'un article encore présent dans le magasin mais déjà affecté à un ordre de fabrication ou à une commande)</li>
<li>Générer les tableaux de bord correspondants : rotation de stock des articles (le nombre de fois que le stock est renouvelé par an (ou sur une autre période) ou taux de couverture…)</li>
</ul>



<h2> Différences entre « gestion des stocks » et « gestion physique des stocks »</h2>

<p>Il ne faut pas confondre ces deux gestions.</p>

<p>Dans l'entreprise, la plus grande partie des opérations de gestion des stocks (paragraphe précédent) est en général assurée par des <span class="tag--info">gestionnaires/planificateurs</span> 
(approvisionnement selon différentes méthodes – date fixe ou variable, quantité fixe ou variable, mise en œuvre de la quantité optimale à réapprovisionner…), sauf la partie « <strong>inventaire comptable</strong> », prise en compte par le service <span class="tag--info">finance – comptabilité</span>.</p>
<p>Ces <strong>gestionnaires/planificateurs</strong> n'assurent pas la gestion physique du stock. Celle-ci est soit assurée manuellement, soit par des logiciels (qui seront évoqués dans un prochain chapitre).</p>
<p>La gestion physique des stocks ou la gestion de l'entrepôt est au « service » de la gestion des stocks.</p>

<section class="grid-2-small-1 has-gutter-l">
<div class="col-2 ">Gestion des stocks &ne; Gestion de l'entrepôt (Gestion physique)</div>
    <div class="tabstock">Gestion des stocks</div>
    <div class="tabstock">Gestion de l'entrepôt <br />(Gestion physique)</div>
    <div class="tabline">Définir les références à gérer en stock + les quantités</div>
    <div class="tabline">Réceptionner les articles</div>
    <div class="row-2 tabline">Réapprovisionner le stock</div>
    <div class="tabline">Préparer les commandes</div>
    <div class="tabline">Inventorier le stock</div>
    <div class="tabline">Indicateurs principaux :
      <ul>
        <li>Taux de rotation des stocks</li>
        <li>Nombre ou taux de rupture de stock</li>
      </ul>
    </div>
    <div class="tabline">Indicateurs principaux :
      <ul>
        <li>Justesse des stocks</li>
        <li>Productivité, ...</li>
      </ul>
    </div>
</section>
<p class="clear"></p>

<h2> Les problématiques des stocks physiques</h2>


<p>Dans un contexte actuel de concurrence et de mondialisation, les entreprises sont soumises à un certain nombre de problématiques concernant la gestion des stocks physiques. En voici quelques-unes :</p>

<ul>
<li>Comment livrer le client à temps ? </li>
<li>Comment éviter les ruptures de stock ?</li>
<li>Comment avoir un état de stock juste et fiable ?</li>
<li>Comment minimiser les surfaces nécessaires ?</li>
<li>Comment respecter les dates de péremption ou les numéros de lot (pour certaines entreprises) ?</li>
<li>Comment améliorer la productivité des magasiniers : comment minimiser les déplacements, manutentions… et donc le coût de la main-d'œuvre?</li>
<li>Comment mesurer sa performance ?</li>
<li>Comment garantir la sécurité des biens et des personnes ?</li>
<li>Comment assurer la communication avec les clients (info de quand leur commande a été préparée, expédiée…)</li>
<li>...</li>
</ul>

<p>Pour répondre à ces problématiques, il existe des moyens et des outils dont nous parlerons tout au long de ce cours :</p>
<ul>
<li>Le FIFO, LIFO…</li>
<li>Les différentes méthodes de préparation des commandes</li>
<li>L'organisation d'un inventaire</li>
<li>Les différentes zones de stockage : picking…</li>
<li>Les différents types de stockage (stockage fixe, mobile…)</li>
<li>Les moyens de manutention (palettes, chariots élévateurs…)</li>
<li>Les outils d'automatisation informatique : les WMS (Wharehouse management service), les terminaux mobiles, les codes-barres…</li>
<li>Les tableaux de bord et indicateurs de performance</li>
<li>...</li>
</ul>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


