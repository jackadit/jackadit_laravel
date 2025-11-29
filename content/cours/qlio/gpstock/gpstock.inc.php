<?php
/**
 * BUT : Introduction à la gestion physique des stocks
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package gpstock
 * @subpackage Classes
 * @category métier
 * @access protected
 * @uses 
 */
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="gpstock" class="unstyled">
		<li><a href="/cours/qlio/gpstock/1" title="1" id="1">Rôle des stocks et problématiques des stocks physiques</a></li>
		<li><a href="/cours/qlio/gpstock/2" title="2" id="2">Gestion physique des stocks</a></li>
		<li><a href="/cours/qlio/gpstock/3" title="3" id="3">Mouvements de stock</a></li>
		<li><a href="/cours/qlio/gpstock/4" title="4" id="4">Inventaires</a></li>
		<li><a href="/cours/qlio/gpstock/5" title="5" id="5">Organisation et agencement des stocks physiques</a></li>
		<li><a href="/cours/qlio/gpstock/6" title="6" id="6">Manutentions dans un système de stockage</a></li>
		<li><a href="/cours/qlio/gpstock/7" title="7" id="7">Gestion informationnelle des stocks</a></li>
		<li><a href="/cours/qlio/gpstock/8" title="8" id="8">Indicateurs de performance d'un magasin</a></li>
		<li><a href="/cours/qlio/gpstock/9" title="9" id="9">Choix stratégiques et positionnements</a></li>
		<li><a href="/cours/qlio/gpstock/10" title="10" id="10">Dimensionnement d'un palettier</a></li>
		<li><a href="/cours/qlio/gpstock/11" title="11" id="11">Glossaire</a></li>
    </ol>
</aside>
<main role="main"><a id="main"></a>
<article>
<p>&nbsp;</p>
<p class="h2-like">Objectifs</p>

<p>Être capable d'identifier un stock par son fonctionnement, les moyens qu'il met en œuvre et ses indicateurs.</p>
<p>Être capable d'organiser et de gérer un lieu de stockage (magasin, stockage déporté, zone de picking, entrepôt…).</p>



<h1>Introduction à la gestion physique de stock</h1>

<p><strong>Une des missions d‘un logisticien est de savoir gérer son stock avec efficacité.</strong></p>
<div class="notice remarque">
Le but étant de satisfaire au mieux le client tout en maintenant les coûts de stockage au plus bas.
</div>

<p>Une des questions qu‘un logisticien est en droit de se poser est :</p>

<div class="notice remarque">Faut-il travailler avec un niveau plus élevé de stockage pour assurer une meilleure disponibilité ?</div>

<p>Le but de ce cours n‘est pas d‘y répondre, des méthodes de gestion existent pour cela, mais de voir concrètement ce qui est lié à la gestion physique des stocks pour appliquer les méthodes de gestion de stock.


<h2>Qu‘est-ce qu'un stock ?</h2>
<p>Un stock représente les biens achetés, transformés ou à vendre, qui interviennent dans le cycle d‘exploitation de l‘entreprise.</p>
<p>Il a pour vocation principale de réguler les consommations tout en maitrisant les flux.</p>
<p>Il offre une disponibilité immédiate d‘un bien pour servir un besoin. </p>
<p>Il est utilisé pour gérer <strong>les matières, les marchandises, les produits intermédiaires, les produits finis, mais aussi les fournitures</strong> utilisées directement ou indirectement dans les différents processus de fabrication ou de vente.</p>

<h2>Les risques</h2>
<h3>Le surstockage</h3>
<p>Maintenir un niveau de stock trop élevé entraine des coûts importants (logistique, immobilisation, etc.). De plus certains produits stockés risquent de devenir obsolètes ou bien de mal vieillir.&nbsp;</p>

<h3>Le sous-stockage</h3>
<p>Dans ce cas c‘est la fonction idoine du stock qui n‘est pas remplie avec les conséquences associées : arrêt de production, articles pas disponibles à la commande donc clients insatisfaits, etc. On parle alors de <strong>rupture de stock</strong>.</p>

<p>Des outils mathématiques existent pour éviter la rupture de stock.</p>
<ul>
<li><span class="tag--info">stock d‘alerte</span> : ce seuil de réapprovisionnement correspond au niveau du stock qui déclenche la commande. Il est égal au stock de sécurité plus le stock consommé pendant le délai de livraison</li>
<li><span class="tag--info">stock de sécurité</span> : ce seuil est assumé pour diminuer le risque de rupture.</li>
<li>taux de <span class="tag--info">rotation de stock</span> : nombre de renouvellements/période</li>
<li><span class="tag--info">couverture de stock</span> : durée que le stock permet de couvrir en considérant la demande moyenne</li>
<li><span class="tag--info">taux de rupture</span> : demandes non satisfaites/demandes totales</li>
<li><span class="tag--info">taux de service</span> : demandes satisfaites/demandes totales = 1-taux de rupture</li>
</ul>

<p>Des outils techniques permettent de répondre à la problématique de rupture de stock :</p>
<ul>
<li>le <span class="tag--info">juste-à-temps</span> ou flux tendu ;</li>
<li>le <span class="tag--info">Kanban</span> ;</li>
<li>la technologie de <span class="tag--info">radio-identification</span>, le plus souvent désignée par le sigle <span class="tag--info">RFID</span> (de l'anglais radio frequency identification).</li>
</ul>

</article>