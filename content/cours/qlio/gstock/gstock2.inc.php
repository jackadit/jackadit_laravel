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
 * @subpackage Représentation des systèmes qualité et logistique
 * @category gstock
 * @access protected
 * @uses db
 */
?>
<h1>Coûts et indicateurs de stocks</h1>

<h2> Stocks et finances : le triangle financier</h2>

<img class="aligncenter" src="/assets/img/qlio/gstock/triangle_financier.png" alt="Image montrant un triangle avec les trois éléments financiers" />

<p>Le triangle fianncier est composé :</p>
<ul>
  <li>du bilan</li>
  <li>du compte de résultats</li>
  <li>du tableau des flux de trésorerie</li>
</ul>

<img class="aligncenter" src="/assets/img/qlio/gstock/bilanN-N+1.png" alt="Image illustrant le bilan de l'année N et N+1" />


<h3> Le bilan : une photo à l'instant « t »</h3>

<section class="grid-2-small-1 has-gutter-l">
  <div class="bordersolid bg-bleu-extra-light">
    <p class="h2-like txtcenter">Actif</p>
    <ul>
      <li>équipements</li>
      <li>disponibilités</li>
      <li>dettes dues par le clients</li>
      <li><span class="cercle">stocks</span></li>
      <li>...</li>
    </ul>
    <p class="h3-like txtcenter">Tout ce que l'entreprise possède</p>
    <p>(Manière d'utilisation des fonds)</p>
  </div>
  <div class="bordersolid bg-rouge-light">
    <p class="h2-like txtcenter">Passif</p>
    <ul>
      <li>capital social</li>
      <li>réserves</li>
      <li>emprunt</li>
      <li>crédit fournisseur</li>
      <li>...</li>
    </ul>
    <p class="h3-like txtcenter">Tout ce que l'entreprise doit</p>
    <p>(origine des fonds)</p>
  </div>  
  <div class="col-2 rouge txtcenter"><strong>L'actif est toujours égal au passif</strong></div>
</section>

<p class="clear"></p>

<h3>Le compte de résultat : le film</h3>

<section class="grid-2-small-1 has-gutter-l">
  <div class="bordersolid bg-bleu-extra-light">
    <p class="h2-like txtcenter">Charges</p>
    <p>Charges d'exploitation</p>
    <ul>
      <li>Coûts d'achats des marchandises vendues</li>
      <li>Charges de personnel</li>
      <li>Consommations</li>
      <li>...</li>
    </ul>
    <p class="h3-like txtcenter">Tout ce que l'entreprise possède</p>
    <p>(Manière d'utilisation des fonds)</p>
  </div>
  <div class="bordersolid bg-rouge-light">
    <p class="h2-like txtcenter">Produits</p>
    <p>Produits d'exploitation</p>
    <ul>
      <li>CA</li>
      <li><span class="cercle">Production stockée</span></li>
      <p>&nbsp;<br />&nbsp;</p>
    </ul>
    <p class="h3-like txtcenter">Tout ce que l'entreprise doit</p>
    <p>(origine des fonds)</p>
  </div>  
  <div class="bordersolid">Charges financières</div>
  <div class="bordersolid">Produits financiers</div>
  <div class="bordersolid">Charges exceptionnelles</div>
  <div class="bordersolid">Produits exceptionnelles</div>
  <div class="col-2 rouge txtcenter"><strong>Total charges = total produits</strong></div>
  <div class="bordersolid bg-vert-light"><p class="h2-like txtcenter" class="vert">Bénéfices</p><br />(si produits > charges)</div>
  <div class="bordersolid bg-rouge-light"><p class="h2-like txtcenter" class="rouge">Pertes</p><br />(si produits < charges)</div>
</section>

<p class="clear"></p>


<h3>Le besoin de fond de roulement</h3>

<p>Cas d'une entreprise dont l'activité génère des besoins d'exploitation.</p>

<section class="grid-8-small-1 has-gutter-l">

  <div class="col-4"><p class="h4-like">Besoins de financement des emplois circulants</p></div>
  <div class="col-4"><p class="h4-like rouge">Ressources circulantes</p></div>
  <div class="bordersolid col-4  bg-bleu-extra-light">
    <p class="h4-like">Stocks</p>
  </div>
  <div class="row-2 bg-rouge-light"></div>
  <div class="col-3 row-2">
    <p class="h4-like" class="orange">Déficit de ressources <br />(besoin en fonds de roulement)</p>
  </div>
  <div class="bordersolid col-4 row-4 bg-bleu-extra-light"><p class="h4-like">Créances (clients)</p></div>
  <div class="bordersolid col-4 row-3 bg-rouge-light">
    <p class="h4-like txtcenter rouge">Dettes d'exploitation (crédit fournisseurs)</p>
  </div>
</section>

<p class="clear"></p>
<h3>Effet des stocks sur le besoin en fonds de roulement ?</h3>
<p>Le stock représente un besoin en fond de roulement qui doit être financé soit :</p>
<ul>
  <li>En puisant dans la trésorerie de l'entreprise</li>
  <li>Recours au crédit bancaire</li>
</ul>
<p class="clear">&nbsp;</p>
<p>Cette immobilisation financière a donc un coût qu'on peut estimer par :</p>
<ul>
  <li>Taux du découvert bancaire</li>
  <li>Coût moyen du capital de l'entreprise</li>
  <li>Taux de rentabilité souhaité des capitaux investis</li>
  <li>Coût d'opportunité</li>
</ul>
<p class="clear">&nbsp;</p>
<p>Quelques définitions :</p>
<dl>
  <dt class="label"><a name="" id=""></a>CRÉANCE</dt>
    <dd>Une même somme d'argent peut à la fois être qualifiée de dette et de créance selon que l'on se place du coté du débiteur (celui qui doit la dette) ou du créancier (celui à qui la dette est due). 
    <p>Ainsi : Une dette est une prestation de somme d'argent due par un débiteur à un créancier.</p>
    <p>Inversement, une créance désigne le droit pour le créancier d'exiger du débiteur la remise de cette somme d'argent.</p>
    </dd>
    <p class="notice exemple">Exemple : lorsqu'une personne signe une reconnaissance de dette suite au prêt d'une somme d'argent, l'emprunteur devient débiteur et le prêteur devient créancier.</p>
  <dt class="label"><a name="" id=""></a>DETTE</dt>
    <dd>Les marchandises qu'on a en stock ont été facturées par le fournisseurs (ou des frais de fabrication ont été engagés).</dd>
</dl>

<h2> Les coûts d'une politique de stock</h2>

<p>Une politique de gestion de stock efficace permet d'assurer un service client au moindre coût.</p>
<p>Il faut pour cela identifier les coûts potentiels qui sont de 4 sortes :</p>
<ul>
  <li>Coût d'acquisition</li>
  <li>Coût de possession</li>
  <li>Coût de passation de commande ou de lancement</li>
  <li>Coût de rupture</li>
</ul>


<h3> Coût d'acquisition</h3>

<p>Le coût à prendre en considération est celui des marchandises rendues sur le lieu d'utilisation et de mise à disposition.</p>
<p>Il comprend les coûts suivants :</p>
<ul>
  <li>Prix achat</li>
  <li>Emballage</li>
  <li>Transport</li>
  <li>Assurance</li>
  <li>Contrôle</li>
  <li>Etc </li>
</ul>

<p>Si l'achat se fait à l'international, il faut compter des droits de douane en plus.<p>

<p>Selon les conditions de livraison négociées avec le fournisseur, ces coûts additionnels peuvent être supportés par le fournisseur (vente franco) ou facturé à l'acheteur.</p>


<p>En principe le <span class="tag--info">coût d'acquisition</span> est <strong>indépendant</strong> du système de gestion choisi …</p>
<p>MAIS si le fournisseur pratique un barème de remises sur quantité ALORS ces coûts sont à prendre en considération.</p>


<h3> Coût de possession des stocks</h3>

<p>Les coûts de possession des stocks correspondent au financement des stocks.</p>
<p>En d'autres termes, le coût de possession est le coût qui ne serait pas encouru s'il était possible de s'approvisionner instantanément


<p>Voici une liste (à peu près) exhaustive des éléments du coût de possession :</p>

<ul>
<li>Loyer de l'argent immobilisé dans les stocks</li>
<li>Salaire et charge des sections (de gestion des stocks et de magasinage)</li>
<li>Loyer ou amortissement des locaux utilisés</li>
<li>Frais d'éclairage et de chauffage des locaux</li>
<li>Prix de l'énergie dépensée pour maintenir la qualité des produits en stock</li>
<li>Coût de l'entretien des stocks et du matériel</li>
<li>Loyer ou amortissement des moyens de manutention</li>
<li>Frais d'assurance</li>
<li>Pertes éventuelles par coulage ou détérioration, etc.</li>
</ul>

<p class="notice remarque">Pour les articles high-tech il faut ajouter le coût d'obsolescence.</p>

<p>Bien que certains de ces frais soient des frais fixes, le montant des frais variables est de beaucoup le plus important.</p>

<p>Le coût de possession d'un stock peut varier de 15 à 40 % de la valeur de ce stock.</p>
<p class="notice remarque">En moyenne on considère que le coût de possession est de <strong>25% de la valeur de ce stock</strong>.</p>

    <div class="formule">
        Cs = Csu * 
        <div class="fraction">
            <span class="numerateur">(S max + S min)</span>
            <span class="bar">/</span>
            <span class="denominateur">2</span>
        </div>
    </div>

    <p>Avec :</p>
    <ul>
        <li>Csu : coût de stockage moyen par unité d’article</li>
        <li>S max : stock maximum atteint durant la période</li>
        <li>S min : stock minimum (ou stock de sécurité) établi pour la période</li>
    </ul>

    <p class="notice remarque">En condition de certitude, le stock minimum est égal à zéro.</p>

<h3> Coût de passation de commande</h3>

<p>Avant de passer une commande il faut :</p>
<ul>
  <li>Surveiller le niveau du stock</li>
  <li>Déterminer la taille de la commande</li>
  <li>Choisir le fournisseur et fixer avec lui un délai , le prix et les conditions de transport et de livraison</li>
</ul>

<p>On doit ensuite émettre la commande et en assurer la réception et le contrôle puis payer la facture du fournisseur.</p>

<p>Ces coûts sont <strong>indépendants de la taille de la commande</strong> et se répète à chaque commande.</p>

<p>Le coût de passation de commande est donc un <strong>coût fixe</strong>, quel que soit la quantité commandée.</p>



<p>De même pour les lancements de fabrication. Vous aurez à tenir compte des opérations suivantes :</p>
<ul>
  <li>instructions aux ateliers, </li>
  <li>bons de sortie des matières, </li>
  <li>ordonnancement de la production, </li>
  <li>recherche de gamme, </li>
  <li>émission ordre de fabrication.</li>
</ul> 
<p>Il y aura également un coût additionnel en cas de changement de fabrication :</p>

<ul>
  <li>nouveaux outils,</li>
  <li>accoutumance du personnel,</li>
  <li>nouveaux réglages,</li>
  <li>dégradation de la qualité en début de série,</li>
  <li>…</li>
</ul>


<p>Les éléments du coût de passation </p>
<ul>
  <li>Les salaires et charge des sections (d'achat, de réception, de comptabilité fournisseurs).</li>
  <li>Frais de déplacement des acheteurs.</li>
  <li>Les frais de timbres et de téléphone ou télex.</li>
  <li>Le montant des différentes fournitures et imprimés utilisés par les sections précitées.</li>
  <li>L'amortissement du matériel et des mobiliers utilisés.</li>
  <li>Le loyer ou l'amortissement des locaux occupés par ces sections.</li>
  <li>Le prix de l'énergie dépensée à éclairer, chauffer les locaux et à faire fonctionner les différentes machines.</li>
  <li>Le coût de l'utilisation des services informatiques etc...</li>
</ul>


    <div class="formule">
        Cc = Ccu *
        <div class="fraction">
            <span class="numerateur">D</span>
            <span class="bar">/</span>
            <span class="denominateur">Q</span>
        </div>
    </div>

    <p>Avec :</p>
    <ul>
        <li>Ccu : coût pour passer une commande</li>
        <li>D : consommation annuelle (ou par saison)</li>
        <li>Q : quantité de commande</li>
    </ul>

<h3> Coût de rupture</h3>

<p>La rupture de stock a pour conséquence la dégradation de l'image de marque et au final la perte de clients.</p>

<p>Les clients ont deux manières de réagir :</p>
<ul>
  <li>Vente annulée : perte de marge</li>
  <li>Vente différée : pénalité de retard + frais fabrication ou expédition d'urgence</li>
</ul>

<div class="notice remarque">

    <p>En résumé, le coût d'un stock c'est la somme de coûts directs et de coûts indirects.</p>

    <p class="h4-like">Coûts directs</p>
    <ul>
        <li>Coût de stockage</li>
        <li>Coût de transport</li>
        <li>Coût de manutention</li>
        <li>Risque d'obsolescence</li>
        <li>Risque de dégradation</li>
        <li>Assurance et taxes</li>
    </ul>

    <p class="h4-like">Coûts indirects</p>
    <ul>
        <li>Manque réactivité</li>
        <li>Manque transparence</li>
        <li>Manque flexibilité</li>
    </ul>

</div>

<p>Le coût total de l’acquisition et de la gestion des stock (Ct), est la somme de tous les coûts mentionnés ci-dessus, soit :</p>

<div class="formule">Ct = Ca + Cs + Cc + Cr</div>

<div class="exercice">
    <p>Exercice : Coût de possession / Coût de passation</p>

    <p>Afin de déterminer, dans une entreprise, les coûts de l'approvisionnement, on a réalisé l'inventaire des différentes charges imputables à cette fonction. Il est à noter que les montants remis pour la rémunération des membres du personnel sont mensuels et comprennent les charges sur salaires.</p>

    <p>C'est ce calcul que vous devez effectuer.</p>

<p>Le personnel du service approvisionnement est le suivant :</p>
<ul>
  <li>1 responsable du  service consacrant environ la moitié de son temps aux achats et l'autre à la gestion des stocks (coût 9 000 euros).</li>
  <li>2 acheteurs (7 500 € chacun).</li>
  <li>2 aides-acheteurs (5 500 €  chacun).</li>
  <li>1 gestionnaire des stocks (6 500 €).</li>
  <li>1 responsable du  magasin (8 500 €).</li>
  <li>5 magasiniers (5 500 € chacun).</li>
  <li>2 secrétaires (5 500 € chacune). </li>
</ul>

<p>Le taux objectif de rendement des capitaux investis est de 7 %.</p>

<p>Les amortissements du matériel et des bureaux du service achats sont de 50 000 €, ceux du magasin de 205 000 € par an.</p>

<p>Les frais de timbre sont en moyenne de 2 € par commande et le téléphone, fax et internet coûtent 15 000 € par an.</p>

<p>Un budget de déplacement, pour prospection et négociation chez les fournisseurs est prévu à hauteur de 50 000 €.</p>

<p>L'éclairage et le chauffage se montent par an à :</p>
<ul>
  <li>Pour le magasin 15 000 €</li>
  <li>Pour les bureaux achats 10 000 €.</li>
</ul>

<p>Le stock moyen de l'entreprise est de 7 500 000 € et l'on a constaté des pertes pour une valeur de 25 000 € dans l'année.</p>

<p>Les services de réception sont affectés aux approvisionnements à raison de :</p>
<ul>
  <li>3 réceptionnaires quantitatifs (5 500 €  chacun)</li>
  <li>3 réceptionnaires qualitatifs (7 500 €  chacun). </li>
</ul>

<p>On a recensé dans l'année 10 000 commandes, correspondant à 1 400 réceptions par mois, l'entreprise fermant un mois complet, chaque année.</p>

<p>Le coût des services informatiques (commandes, livraisons, réceptions, factures) représente 90 000 € pour le service achats et 65 000 € pour la gestion des stocks (par an).</p>

<p>Enfin le prix des consommables (liasses de commande, liasses de « bon de réception et de contrôle ») sont de 8 000 € pour la gestion des stocks et de 17 000 euros pour les achats.</p>

<!--p>Solution :</p> 


<table class="table w800p">
  <tr>
    <th rowspan="2" class="w100p">Charges</th><th colspan="2" class="w100p">imputables à</th>
  </tr>		
	<tr><th class="w50p">achats</th><th class="w50p">gestion des stocks</th></tr>
<tr><td>1 responsable du service : 9000 €/mois</td><td class="txtright">54 000 €</td><td class="txtright">54 000 €</td></tr>
<tr><td>2 acheteurs : 7500 €/mois chacun</td><td class="txtright">180 000 €</td><td></td></tr>
<tr><td>2 aides-acheteurs : 5500 €/mois chacun</td><td class="txtright">132 000 €</td><td></td></tr>
<tr><td>1 gestionnaire de stocks : 6500 €/mois</td><td></td><td class="txtright">78 000 €</td></tr>
<tr><td>1 resposable magasin : 8500 €/mois</td><td></td><td class="txtright">102 000 €</td></tr>
<tr><td>5 magasiniers : 5500 €/mois chacun</td><td></td><td class="txtright">330 000 €</td></tr>
<tr><td>2 secrétaires : 5500 €/mois chacune</td><td class="txtright">132 000 €</td><td></td></tr>
<tr><td>rendement des capitaux investis : 7%</td><td></td><td class="txtright">525 000 €</td></tr>
<tr><td>amortissement du matériel</td><td class="txtright">50 000 €</td><td class="txtright">205 000 €</td></tr>
<tr><td>timbres</td><td class="txtright">20 000 €</td><td></td></tr>
<tr><td>téléphones / fax / Internet</td><td class="txtright">15 000 €</td><td></td></tr>
<tr><td>frais de déplacement</td><td class="txtright">50 000 €</td><td></td></tr>
<tr><td>éclairage-chauffage</td><td class="txtright">10 000 €</td><td class="txtright"> 15 000 €</td></tr>
<tr><td>perte sur stock</td><td></td><td class="txtright">25 000 €</td></tr>
<tr><td>3 receptionnaires quantitatifs : 5500 €/mois chacun</td><td></td><td class="txtright">198 000 €</td></tr>
<tr><td>3 receptionnaires qualitatifs : 7500 €/mois chacun</td><td></td><td class="txtright">270 000 €</td></tr>
<tr><td>informatique</td><td class="txtright">90 000 €</td><td class="txtright">65 000 €</td></tr>
<tr><td>imprimés</td><td class="txtright">17 000 €</td><td class="txtright"> 8 000 €</td></tr>
<tr><td class="txtright">Totaux</td><td class="txtright"><strong>750 000 €</strong></td><td class="txtright"><strong>1 875 000 €</strong></td></tr>
</table>

<div class="formule">
	Coût de passation de commande = 
  <div class="fraction">
			<span class="numerateur">Total des frais sur achats</span>
			<span class="bar">/</span>
			<span class="denominateur">nombre de commandes</span>
    </div>
    =
    <div class="fraction">
			<span class="numerateur">750 000</span>
			<span class="bar">/</span>
			<span class="denominateur">10 000</span>
    </div>
    = 75 €
	</div>

<div class="formule">
	Taux de possession de stock = 
  <div class="fraction">
			<span class="numerateur">Total des frais de gestion de stock x 100</span>
			<span class="bar">/</span>
			<span class="denominateur">valeur du stock moyen</span>
    </div>
    =
    <div class="fraction">
			<span class="numerateur">1 875 000 x 100</span>
			<span class="bar">/</span>
			<span class="denominateur">7 500 000</span>
    </div>
    = 25 %
  </div>

-->
</div>

<h2> Taux de rotation des stocks</h2>

<div class="formule">
	TRS = 
  <div class="fraction">
			<span class="numerateur">Q x u</span>
			<span class="bar">/</span>
			<span class="denominateur">Stm x u</span>
    </div>
	</div>
<p>Avec :</p>
<ul>
  <li>Q = Quantité consommée dans l'année</li>
  <li>Stm = Stock moyen en quantité</li>
  <li>u = coût unitaire hors taxe</li>
</ul>

<p>Exemple :</p>
<div class="formule">
	12,5 par an = 
  <div class="fraction">
			<span class="numerateur">100 000 € par an</span>
			<span class="bar">/</span>
			<span class="denominateur">8 000 € au 1<sup>er</sup> janvier</span>
    </div>
	</div>

  <p class="notice remarque">Si le stock diminue pour un niveau de ventes constant alors le TAUX de ROTATION des stocks augmente.</p>

<p>Une augmentation du taux de rotation des stocks signifie une accélération des flux dans l'entreprise dégageant ainsi de la trésorerie.</p>


<div class="exercice">

<p>Soit les données suivantes :</p>
<ul>
  <li>Coût des articles vendus : 24 millions €</li>
  <li>Stock moyen : 6 millions €</li>
</ul>
<p>Quel est le taux de rotation du stock ?</p>

<!--p>Réponse :</p>

<div class="formule">
	TRS = 
  <div class="fraction">
			<span class="numerateur">Coût annuel des articles vendus</span>
			<span class="bar">/</span>
			<span class="denominateur">Stock moyen</span>
    </div>
    =
    <div class="fraction">
			<span class="numerateur">24 000 000 €</span>
			<span class="bar">/</span>
			<span class="denominateur">6 000 000 €</span>
    </div>
    = <strong>4</strong>
</div>

<p>Si le taux de rotation du stock était de 12, de combien le stock serait-il diminué ?</p>

<div>Stock moyen =   
  <div class="fraction">
			<span class="numerateur">Coût annuel des articles vendus</span>
			<span class="bar">/</span>
			<span class="denominateur">12</span>
    </div>
    =
    <div class="fraction">
			<span class="numerateur">24 000 000</span>
			<span class="bar">/</span>
			<span class="denominateur">12</span>
    </div>
    = 2 000 000
</div>
<p>Or le stock moyen était de 6 000 000 €, donc la réduction serait de 6 000 000 € - 2 000 000 € = 4 000 000 €</p>

<p>Si le taux de possession du stock est de 25 %, quelle est l'économie réalisée ?</p>
<p>Économie : 4 000 000 € x 0.25 = 1 000 000 €</p-->
  
</div>


<h2> Couverture d'un stock</h2>

<p>Ce taux donne une idée du degré d'autonomie moyen de l'entreprise par rapport aux fournisseurs.</p>
<p>La couverture ne peut être exprimée en termes d'articles car l'entreprise ne connaît pas le programme directeur de production moyen sur un horizon important.</p>

<p>L'objectif est de mesurer pendant combien de jours le stock et les en-cours devraient permettre de produire.</p>
<div class="formule">
<div>Couverture en jours =   
  <div class="fraction">
			<span class="numerateur">Valeur du stock et en-cours en €</span>
			<span class="bar">/</span>
			<span class="denominateur">Valeur en € des pièces consommées par jour de fabrication</span>
    </div>
</div>
</div>


<div class="exercice">  
<p><u>Exercice 1</u>:</p>
    <p>Coût consommation pièce /jour = 30 000 €</p>
    <p>Valeur stock (en-cours non calculé) = 150 000 €</p>

  <div>Couverture en jours = 
      <!--span><div class="fraction">
			<span class="numerateur">150 000</span>
			<span class="bar">/</span>
			<span class="denominateur">30 000</span>
    </div>
    = 5 jours <span-->
</div>

</div>

<div class="exercice">
  <p><u>Exercice 2</u>:</p>
  <p>Stock disponible : 9 000 pièces</p>
  <p>Consommation annuelle : 48 000 pièces</p>
  <p>240 jours ouvrés/an</p>
  <p>Quel est la couverture des stocks ?</p>

  <div>Consommation journalière =  
      <!--span><div class="fraction">
			<span class="numerateur">48 000</span>
			<span class="bar">/</span>
			<span class="denominateur">240</span>
    </div>
= 200 pièces <!--span-->
</div>

<div>Couverture =   
    <!--span><div class="fraction">
			<span class="numerateur">Stock disponible</span>
			<span class="bar">/</span>
			<span class="denominateur">Consommation journalière</span>
    </div>
    =
    <div class="fraction">
			<span class="numerateur">9 000</span>
			<span class="bar">/</span>
			<span class="denominateur">200</span>
    </div>
= 45 jours <!--span-->
</div>

</div>

<div class="exercice">  
<p><u>Exercice 3</u>:</p>

<p>Deux commerçants vendent, entre autres, des flacons de parfum identiques, qu'ils achètent 40 € et qu'ils revendent 60 €; ils en vendent tous deux 100 par mois, ce qui donne un chiffre d'affaires mensuel de 6 000 € et un bénéfice brut  de 2 000 € par mois, soit 24 000 € par an.</p>

<p>Le premier a, tout au long de l'année, un stock moyen de 100 flacons, alors que le stock moyen du second est de 200 flacons.</p>

<p>Lequel utilise le mieux son stock ? Y a-t-il un impact sur les bénéfices ?</p>
<p>Le coût de possession de stock a été évalué à 25 %.</p>

    <!--div>
<p><u>Réponse :</u></p>

<p>Pour le premier commerçant :</p>
<p>On commence par calculer la valeur du stock moyen : 100 x 40 € = 4000 €</p>

<p>Puis on calcule les frais de possession qui sont de 25% x 4000 € = 1 000 €</p>

<p>Il reste donc sur le bénéfice brut : 24 000 € - 1 000 € = 23 000 €</p>


<p>Pour le second commerçant :</p>
<p>La valeur du stock moyen : 200 x 40 € = 8000 €</p>

<p>Les frais de possession sont de 25% x 8000 € = 2 000 €</p>

<p>Il reste donc sur le bénéfice brut : 24 000 € - 2 000 € = 22 000 €</p>

<p>On voit que, toutes choses égales par ailleurs, le premier commerçant utilise mieux son stock que le second; 
  <br/>On peut même dire qu'il l'utilise deux fois mieux puisqu'il a deux fois moins de frais.</p>

<p>Le premier a utilisé, dans l'année, 1 200 / 100 = 12 fois son stock.</p>
<p>Le second ne l'a utilisé que 1 200 / 200 = 6 fois.</p>
</div-->


</div>


<h2> Valorisation du stock</h2>

<p>Voici un exemple illustrant la problématique de la valorisation d'un stock.</p>

<ol>
  <li>J'ai 30 articles à 48 €</li>
  <li>Arrivée de 250 articles à 52 €</li>
  <li>Sortie de 120 articles</li>
</ol>

<p>Quelle est la valeur des 120 articles ?</p>

<h3> FIFO (First In, First Out)</h3>

<p>Cette méthode considère que les articles sortent du magasin d'après leur ordre d'arrivée (principe du tuyau).</p>
<p>La valeur du stock est déterminée d'après la valeur des articles les plus récents.</p>

<ul>
  <li>Méthode "d'épuisement des lots".</li>
  <li>Les articles sont supposés sortis du magasin d'après leur ordre d'arrivée.</li>
  <li>Les valeurs des sorties sont calculées d'après la valeur des articles les plus anciens.</li>
  <li>La valeur du stock restant est calculée d'après la valeur des articles les plus récents</li>
</ul>

<table class="table">
  <tr>
    <th></th>
    <th colspan="3">Entrées de stock</th>
    <th colspan="3">Sorties de stock</th>
    <th colspan="3">Valeur du stock</th>
  </tr>
  <tr>
  <th>Dates</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
  </tr>
  <tr>
    <td>01/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>200</td>
    <td>30</td>
    <td>6 000</td>
  </tr>
  <tr>
    <td>15/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td>30</td>
    <td class="rouge">4 500</td>
    <td>50</td>
    <td>30</td>
    <td>1 500</td>
  </tr>
  <tr>
    <td>01/10</td>
    <td>200</td>
    <td>35</td>
    <td>7 000</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--50<br />200--></td>
    <td><!--30<br />35--></td>
    <td><!--8 500--></td>
  </tr>
  <tr>
    <td>15/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>50</td>
    <td><!--30--></td>
    <td class="rouge"><!--1 500--></td>
    <td><!--200--></td>
    <td><!--35--></td>
    <td><!--7 000--></td>
  </tr>
  <tr>
    <td>02/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td><!--35--></td>
    <td class="rouge"><!--5 250--></td>
    <td><!--50--></td>
    <td><!--35--></td>
    <td><!--1 750--></td>
  </tr>
  <tr>
    <td>15/11</td>
    <td>100</td>
    <td>37</td>
    <td>3 700</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--50<br />100--></td>
    <td><!--35<br />37--></td>
    <td><!--5 450--></td>
  </tr>
</table>

    <h3> LIFO (Last In, First Out)</h3>

<p>Cette méthode considère que les articles les plus récents sortent du magasin en premier (principe de la pile).</p>
<p>La valeur du stock est déterminée d'après la valeur des articles les plus anciens.</p>

<ul>
  <li>Les articles les plus récents sont supposés sortir du magasin en premier.</li>
  <li>Les valeurs des sorties sont calculées d'après la valeur des articles les plus récents.</li>
  <li>La valeur du stock restant est calculée d'après la valeur des articles les plus anciens</li>
</ul>

<table class="table">
  <tr>
    <th></th>
    <th colspan="3">Entrées de stock</th>
    <th colspan="3">Sorties de stock</th>
    <th colspan="3">Valeur du stock</th>
  </tr>
  <tr>
  <th>Dates</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
  </tr>
  <tr>
    <td>01/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>200</td>
    <td>30</td>
    <td>6 000</td>
  </tr>
  <tr>
    <td>15/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td>30</td>
    <td class="rouge">4 500</td>
    <td>50</td>
    <td>30</td>
    <td>1 500</td>
  </tr>
  <tr>
    <td>01/10</td>
    <td>200</td>
    <td>35</td>
    <td>7 000</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--50<br />200--></td>
    <td><!--30<br />35--></td>
    <td><!--8 500--></td>
  </tr>
  <tr>
    <td>15/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>50</td>
    <td><!--35--></td>
    <td class="rouge"><!--1 750--></td>
    <td><!--50<br />150--></td>
    <td><!--30<br />35--></td>
    <td><!--6 750--></td>
  </tr>
  <tr>
    <td>02/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td><!--35--></td>
    <td class="rouge"><!--5 250--></td>
    <td><!--50--></td>
    <td><!--30--></td>
    <td><!--1 500--></td>
  </tr>
  <tr>
    <td>15/11</td>
    <td>100</td>
    <td>37</td>
    <td>3 700</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--50<br />100--></td>
    <td><!--30<br />37--></td>
    <td><!--5 200--></td>
  </tr>
</table>

<h3>PMP (Prix Moyen Pondéré)</h3>
<p>À chaque entrée d'articles en stock on détermine un prix moyen pondéré de la quantité entrée, applicable à tous les articles quelles que soient leurs dates d'arrivée.</p>

<p>On calcule la valeur des articles en stock sur la base d'un prix unitaire moyen pondéré.</p>
<p>Le calcul du PMP s'effectue après chaque nouvelle entrée en stock.</p>

<div class="formule">
<div>PMP (n) =   
  <div class="fraction">
			<span class="numerateur">PMP (n-1) x S (n-1) + Q x u</span>
			<span class="bar">/</span>
			<span class="denominateur">S (n)</span>
    </div>
</div>
</div>

<p>Avec :</p>
<ul>
  <li>PMP (n) :	PMP après nouvelle entrée (n)</li>
  <li>PMP (n-1) : PMP après entrée précédente</li>
  <li>Q : quantité de la nouvelle entrée (n)</li>
  <li>u : prix unitaire de la quantité Q</li>
  <li>S (n-1) : quantité en stock avant l'entrée (n)</li>
  <li>S (n) : quantité en stock après l'entrée (n)</li>
</ul>
<p></p>
<p>Ce qui donnerait pour le 1<sup>er</sup> octobre ?</p>

<!--div>PMP (n) =
  <div class="fraction">
			<span class="numerateur">50 x 30 + 200 x 35</span>
			<span class="bar">/</span>
			<span class="denominateur">250</span>
    </div>
    = 34
</div-->
<p></p>
<table class="table">
  <tr>
    <th></th>
    <th colspan="3">Entrées de stock</th>
    <th colspan="3">Sorties de stock</th>
    <th colspan="3">Valeur du stock</th>
  </tr>
  <tr>
  <th>Dates</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
    <th>nb article (u)</th>
    <th>Coût unitaire (€)</th>
    <th>Coût total</th>
  </tr>
  <tr>
    <td>01/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>200</td>
    <td>30</td>
    <td>6 000</td>
  </tr>
  <tr>
    <td>15/09</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td>30</td>
    <td class="rouge">4 500</td>
    <td>50</td>
    <td>30</td>
    <td>1 500</td>
  </tr>
  <tr>
    <td>01/10</td>
    <td>200</td>
    <td>35</td>
    <td>7 000</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--250--></td>
    <td><!--34--></td>
    <td><!--8 500--></td>
  </tr>
  <tr>
    <td>15/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>50</td>
    <td><!--34--></td>
    <td class="rouge"><!--1 700--></td>
    <td><!--200--></td>
    <td><!--34--></td>
    <td><!--6 800--></td>
  </tr>
  <tr>
    <td>02/10</td>
    <td></td>
    <td></td>
    <td></td>
    <td>150</td>
    <td><!--34--></td>
    <td class="rouge"><!--5 100--></td>
    <td><!--50--></td>
    <td><!--34--></td>
    <td><!--1 700--></td>
  </tr>
  <tr>
    <td>15/11</td>
    <td>100</td>
    <td>37</td>
    <td>3 700</td>
    <td></td>
    <td></td>
    <td></td>
    <td><!--150--></td>
    <td><!--36--></td>
    <td><!--5 200--></td>
  </tr>
</table>

<p class="rouge">Coût total des ventes ? <!--11 300 €--></p>

<p class="h2-like">Définition :</p>
<dl>
  <dt class="label"><a name="" id=""></a>Inflation</dt>
    <dd>Inflation désigne un phénomène économique qui se traduit par une hausse des prix généralisée, dû à un déséquilibre entre l'offre et la demande globale des biens et des services disponibles sur le marché.</dd>
</dl>

<div class="notice remarque">

<p>Quels effets engendrent les différentes méthodes de valorisation sur les résultats de l'entreprise ?</p>

<table class="table w400p">
  <tr>
    <th class="w250p"></th>
    <th>FIFO</th>
    <th>LIFO</th>
  </tr>
  <tr>
    <td>Coûts des produits vendus</td>
    <td class="h3-like">&searr;</td>
    <td class="h3-like">&nearr;</td>
  </tr>
  <tr>
    <td>Résultats avant impôts</td>
    <td class="h3-like">&nearr;</td>
    <td class="h3-like">&searr;</td>
  </tr>
  <tr>
    <td>Impôts</td>
    <td class="h3-like">&nearr;</td>
    <td class="h3-like">&searr;</td>
  </tr>
</table>

<p>En cas d'inflation, FIFO augmente les résultats avant impôts. Les coûts des produits vendus seront supérieurs (calcul des prix de revient).</p>
<p>Les effets de LIFO seront contraires.</p>

<p>En cas de désinflation : les effets sont contraires.</p>

<p>P.M.P. lisse l'effet de l'inflation.</p>

<p>L.I.F.O. est interdit en France.</p>

<p>Pour des articles chers et à faible volume de consommation, on peut affecter à chaque article sa "vraie" valeur.</p>

<p>Coût standard : le stock est valorisé à une valeur fixe raisonnable.</p>


</div>



<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

