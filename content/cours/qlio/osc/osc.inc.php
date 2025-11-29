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
 * @package qlio
 * @subpackage osc Pilotage de la chaine logistique globale
 * @category osc
 * @access protected
 * @uses 
 */
$sNavigation=navigation('osc', '0');
?>
<aside>
<p class="h2-like">Table des matières</p>
	<ol id="r311" class="unstyled">
		<li><a href="/cours/qlio/osc/1" title="cours 1" id="osc1">osc1</a></li>
		<li><a href="/cours/qlio/osc/2" title="cours 2" id="osc2">osc2</a></li>
		<li><a href="/cours/qlio/osc/3" title="cours 3" id="osc3">osc3</a></li>
		<li><a href="/cours/qlio/osc/4" title="cours 4" id="osc4">osc4</a></li>
		<li><a href="/cours/qlio/osc/5" title="cours 5" id="osc5">osc5</a></li>
		<li><a href="/cours/qlio/osc/6" title="cours 6" id="osc6">osc6</a></li>
    </ol>
</aside>



<p>&nbsp;</p>
<h3>Objectifs</h3>

<p>Acquérir les bases théoriques nécessaires pour comprendre la gestion des stocks, identifier les fonctions et
 le processus de la gestion des approvisionnements</p>
 <p>Comprendre les méthodes de gestion classiques : point de commande, calcul du besoin net (<strong>CBN</strong> ou en anglais <strong>MRP</strong> : Manufacturing Ressource Planning)</p>
 <p>Déterminer les paramètres de gestion à utiliser dans les différents cas de stock</p>



<h1>Gestion de stock</h1>

<p><strong>Une des missions d'un logisticien est de savoir gérer son stock avec efficacité.</strong></p>
<div class="notice remarque">
Challenge des entreprises :  Assurer la disponibilité des produits, à la date souhaitée par le client, tout en maintenant les niveaux de stocks dans les limites fixées 
</div>

<p>Le maintien des niveaux de stock dans les limites permises par la trésorerie est impératif.</p>
<p>Tout en n'oubliant pas que :</p>
<div class="notice remarque">Respecter le taux de service client  = avantage concurrentiel;</div>

<p>Cette formation permettra de répondre aux nombreuses questions que se posent les gestionnaires d'approvisionnement :</p>
<ul>
<li>Comment combiner à la fois taux de service client élevé et stock minimal ?</li>
<li>Comment évaluer les niveaux de stock ?</li>
<li>Comment fixer les sécurités ?</li>
<li>Pourquoi utilise-t-on différentes méthodes dans une même entreprise et comment choisir ?</li>
<li>Comment déterminer les paramètres de gestion renseignés dans l'ERP ?</li>
<li>Comment fixer des objectifs de stock ? Qu'est-ce qu'une politique de stock ?</li>
<li>Comment tenir à jour les paramètres de gestion pour la multitude de référence ?</li>
</ul>


<h2>Qu'est-ce qu'un stock ?</h2>
<div class="notice remarque">Un stock est une provision de produits en instance de consommation.</div>
<p>Il a pour vocation principale de réguler les consommations tout en maitrisant les flux.</p>
<p>Il offre une disponibilité immédiate d'un bien pour servir un besoin. </p>
<p>Il est utilisé pour gérer <strong>les matières, les marchandises, les produits intermédiaires, les produits finis, mais aussi les fournitures</strong> utilisées directement ou indirectement dans les différents processus de fabrication ou de vente.</p>

<h2>Les méthodes de gestion</h2>
<p>Il existe des méthodes permettant d'évaluer les quantités optimales à stocker en fonction de deux paramètres fondamentaux que sont la date et la quantité commandée.</p>
<p><strong>C'est la gestion économique des stocks</strong>.</p>

<p>On peut ainsi commander à date fixe ou variable en fonction notamment du délai d'approvisionnement, et à quantité fixe ou variable.</p>
<ul>
<li><i>Méthode de réapprovisionnement ou méthode calendaire</i>. On commande à date fixe une quantité fixe voisine de la quantité économique de commande (QEC ou <a rel="nofollow" class="external" target="_blank" hreflang="fr" href="https://fr.wikipedia.org/wiki/Formule_de_Wilson" title="Formule de Wilson">Formule de Wilson</a>).</li>
<li><i>Méthode de gestion à Point de commande</i>. C'est un modèle de commande à date variable et à quantité fixe. Lorsque l'on atteint un certain niveau de stock, le "point de commande", on déclenche la commande de réapprovisionnement.</li>
<li><i>Méthode de recomplètement</i>. A date fixe, la quantité variable permettant de reconstituer le niveau de stock défini est commandée.</li>
<li><i>Méthode de réapprovisionnement à la commande</i>. A date variable, une quantité variable est commandée.</li>
</ul>


<p>Leur but étant de supprimer les goulots d'étranglement dans le flux de gestion des biens. La méthode de juste à temps (JAT) par exemple partage cet objectif.</p>

<h2>Les risques</h2>
<h3>Le surstockage</h3>
<p>Maintenir un niveau de stock trop élevé entraine des coûts importants (logistique, immobilisation, etc.). De plus certains produits stockés risquent de devenir obsolètes ou bien de mal vieillir.&nbsp;</p>

<h3>Le sous-stockage</h3>
<p>Dans ce cas c'est la fonction idoine du stock qui n'est pas remplie avec les conséquences associées : arrêt de production, articles pas disponibles à la commande donc clients insatisfaits, etc. On parle alors de <strong>rupture de stock</strong>.</p>

<p>Des outils mathématiques existent pour éviter la rupture de stock.</p>
<ul>
<li><span class="tag--info">stock d'alerte</span> : ce seuil de réapprovisionnement correspond au niveau du stock qui déclenche la commande. Il est égal au stock de sécurité plus le stock consommé pendant le délai de livraison</li>
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


<p>Bonne lecture et bonne formation.</p>
<p>&nbsp;</p>
<p>Jackadit</p>
<p>&nbsp;</p>


