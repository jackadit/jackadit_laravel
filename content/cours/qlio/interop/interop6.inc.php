<?php
/**
 * BUT : Interopérabalité
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		18/04/23 	23:35::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage cours
 * @category Interoperabilite
 * @access public
 * @uses
 */
$sNavigation = navigation('interop', '6'); ?>




<h1>Protocole d'échanges de données</h1>


<h2><a href="#tdmchap1" id="chap1">Qu’est-ce qu’un EDI ?</a></h2>

<p><strong>EDI</strong> est l'acronyme de "Electronic Data Interchange", qui signifie en français "Echange de Données Informatisées".</p>
<p>L'EDI est un protocole d'échange de données électroniques standardisé qui permet la transmission d'informations commerciales entre entreprises, de manière automatisée et sécurisée.</p>
<p>L'EDI permet de remplacer les processus manuels et papier par des échanges informatisés, ce qui permet de réduire les coûts et les délais de traitement, ainsi que de limiter les erreurs.</p>

    <h3>Caractéristiques principales de l'EDI</h3>

    <p> <span class="h4-like">Standardisation</span> : Utilise des formats normalisés (comme EDIFACT, TRADACOMS, Galia ou ANSI X12) pour garantir que les systèmes différents puissent comprendre et traiter les mêmes informations.</p>
    <p> <span class="h4-like">Automatisation</span> : Permet une transmission automatique des données, ce qui améliore l'efficacité opérationnelle.</p>
    <p> <span class="h4-like">Rapidité</span> : Accélère le traitement des commandes et des factures, réduisant les délais de livraison.</p>
    <p> <span class="h4-like">Réduction des coûts</span> : Diminue les dépenses liées au papier, à l'envoi postal et au traitement manuel des documents.</p>


    <h3>EDIFACT :</h3>

    <p>EDIFACT (Electronic Data Interchange for Administration, Commerce and Transport) est un standard élaboré par les Nations Unies regroupe diverses règles syntaxiques, un protocole d’échange interactif ainsi qu’une gamme de messages standards pour les échanges de documents commerciaux électroniques entre plusieurs pays et plusieurs industries.</p>

    <p>Quelques exemples de message de la norme EDIFACT :</p>
    <ul>
        <li>DELFOR – Delivery schedule– Programme de Livraison</li>
        <li>DELJIT – Delivery Just In Time– Appel de Livraison</li>
        <li>DESADV – Despatch Advice – Avis d’expédition</li>
        <li>INVOIC – Invoice – Facture</li>
        <li>INVRPT – Inventory Report – Etat des stocks</li>
        <li>ORDERS – Order – Commande</li>
        <li>ORDCHG – Order Change – Modification de commande</li>
        <li>ORDRSP – Order response – Réponse à la commande</li>
    </ul>

    <p>Et bien d’autres APERAK, HANMOV, IFCSUM, IFTSTA, PROCAT, PRODAT, QALITY, RECADV, REMADV, ….. environ 200 types de message existent.</p>

    <h3 class="wp-block-heading">Liste non-exhaustive des différents types de documents de la norme EDIFACT</h3>

    <ul><li>270-A1 – Eligibility, Coverage or BenefitInquiry</li><li>271-A1 – Eligibility, Coverage or Benefit Information</li><li>276-A1- Health Care Claim StatusRequest</li><li>277-A1 – Health Care Claim Status Notification</li><li>820-A1 – PaymentOrder/RemittanceAdvice</li><li>834-A1 – BenefitEnrollment and Maintenance</li><li>APERAK – Application error and acknowledgement message</li><li>AUTHOR – Authorization message</li><li>AVLREQ – Availabilityrequest – interactive message</li><li>AVLRSP – Availabilityresponse – interactive message</li><li>BALANC – Balance message</li><li>BANSTA – Bankingstatus message</li><li>BAPLIE – Bayplan/stowage plan occupied and empty locations message</li><li>BAPLTE – Bayplan/stowage plan total numbers message</li><li>BERMAN – Berth management message</li><li>CALINF – Vessel call information message</li><li>CASINT – Request for legal administration action in civil proceedings message</li><li>CASRES – Legal administration response in civil proceedings message</li><li>CHACCO – Chart of accounts message</li><li>CLASET – Classification information set message</li><li>CNTCND – Contractual conditions message</li><li>DOCARE – Response to an amendment of a documentarycredit message</li><li>DOCINF – Documentarycreditissuance information message</li><li>ENTREC – Accounting entries message</li><li>FINCAN – Financial cancellation message</li><li>FINPAY – Multiple interbankfundstransfer message</li><li>FINSTA – Financial statement of an account message</li><li>GENRAL – General purpose message</li><li>GESMES – Genericstatistical message</li><li>HANMOV – Cargo/goods handling and movement message</li><li>ICASRP – Insurance claim assessment and reporting message</li><li>ICSOLI – Insurance claim solicitor’s instruction message</li><li>JUPREQ – Justifiedpaymentrequest message</li><li>LEDGER –  Ledger message</li><li>LREACT – Life reinsuranceactivity message</li><li>LRECLM – Life reinsurance claims message</li><li>MEDPID – Person identification message</li><li>MEDPRE – Medical prescription message</li><li>OSTENQ – Orderstatusenquiry message</li><li>OSTRPT – Orderstatus report message</li><li>PARTIN – Party information message</li><li>PASREQ – Traveltourism and leisureproduct application statusrequest – i</li><li>PASRSP – Traveltourism and leisureproduct application statusresponse -i</li><li>PAXLST – Passengerlist message</li>
    </ul>

<p>Voici un exemple d'un message EDIFACT de commande client (ORDERS):</p>
<code>
UNB+UNOA:2+SENDERID+RECEIVERID+170717:0915+1++ORDERS'
UNH+1+ORDERS:D:96A:UN:EAN008'
BGM+220::9+ORDER_NUMBER+9'
DTM+4:20170717:102'
RFF+ON:REFERENCE_NUMBER'
NAD+BY+BUYER_NAME+BUYER_ADDRESS+BUYER_CITY+BUYER_POSTCODE+BUYER_COUNTRY'
NAD+SU+SUPPLIER_NAME+SUPPLIER_ADDRESS+SUPPLIER_CITY+SUPPLIER_POSTCODE+SUPPLIER_COUNTRY'
LIN+1++PRODUCT_CODE:EN'
QTY+21:ORDERED_QUANTITY'
MOA+203:ORDERED_AMOUNT'
PRI+AAA:PRICE'
LIN+2++PRODUCT_CODE:EN'
QTY+14:ORDERED_QUANTITY'
MOA+123:ORDERED_AMOUNT'
PRI+AAA:PRICE'
UNS+S'
CNT+1:2'
UNT+18+1'
</code>

<p>Ce message contient des informations sur une commande client, telles que :</p>
    <ul>
        <li>les informations d'identification des partenaires commerciaux (SENDERID et RECEIVERID),</li>
        <li>les détails de la commande (produit, quantité, prix, etc.),</li>
        <li>et les dates associées à la commande (date de commande, date de livraison, etc.).</li>
    </ul>

    <p>Dans un système EDI, parmi les messages types les plus utilisés, on retrouve l’avis d’expédition ou DESADV permettant de transmettre le détail des marchandises expédiées.</p>
    <p>Pour que le client puisse réaliser une commande de produits via un système EDI, le message ORDERS est utilisé.</p>
    <p>Pour confirmer la réception d’une commande, le client utilise le message ORDRSP.</p>
    <p>Pour faire parvenir les données de facturation à un client, le message INVOIC est utilisé.</p>


<h3>TRADACOMS</h3>

<p>TRADACOMS est un ancien standard EDI britannique largement utilisé avant l'adoption d'EDIFACT. Bien qu'il soit obsolète aujourd'hui, il reste pertinent dans certains secteurs, tels que la distribution alimentaire au Royaume-Uni.</p>
<p>Voici un exemple d'un message TRADACOMS de commande client (ORDERS):</p>
<code>
HDR ORDERS 1.0
HDRSTO FROM 000001
HDRWHO TO 000002
HDRPON PO12345
HDRORD ORD98765
HDRINV INVC5678
HDRDATE 20220416
HDRTIME 1415
HDRREF 1234
HDRGRP A
HDRGRP B
HDRORDT STANDARD
ORD 0001 001.23 EA 1 DEL NO
LIN 0002 012.34 EA 2 DEL YES
LIN 0003 000.56 EA 3 DEL NO
HDRRES YES
TRL ORDERS 00003
</code>


    <p>Ce message contient des informations sur une commande client, telles que :</p>
    <ul>
        <li>les informations d'identification des partenaires commerciaux (FROM et TO),</li>
        <li>les détails de la commande (produit, quantité, prix, etc.),</li>
        <li>et les dates associées à la commande (date de commande, date de livraison, etc.).</li>
    </ul>

<h3>GALIA</h3>

    <p>Le standard GALIA (Groupement pour l’Amélioration des Liaisons dans l’Industrie Automobile) est utilisé dans l'industrie automobile en Europe, notamment en France, pour faciliter les échanges de données entre les différents acteurs de la chaîne d'approvisionnement.</p>
    <p>Voici un exemple de message GALIA qui contient des informations de commande :</p>
<code>
UNH+1+ORDERS:D:93A:UN:EAN008'
BGM+220::9+GALIA0123456789012+9'
DTM+137:201905011200:203'
DTM+11:201905021200:203'
NAD+BY+GALIA+001::92'
NAD+SU+ACME+001::92'
LIN+1++123456:VN:AU'
QTY+21:500'
FTX+AAI+++MICROPHONE'
LIN+2++123457:VN:AU'
QTY+21:1000'
FTX+AAI+++HEADPHONES'
UNT+8+1'
</code>

    <p>Ce message GALIA contient des informations sur une commande passée par l'acheteur (GALIA) auprès du fournisseur (ACME) pour les produits 123456 et 123457.</p>
    <p>Les segments comprennent des informations sur :</p>
    <ul>
        <li>la commande (BGM),</li>
        <li>les dates de livraison (DTM),</li>
        <li>les identifiants de partenaires commerciaux (NAD),</li>
        <li>les détails de la commande (LIN, QTY, FTX),</li>
        <li>et le total (UNT).</li>
    </ul>
    <p>Ce message peut être échangé entre les systèmes informatiques de GALIA et ACME pour automatiser le processus de commande et de traitement des commandes.</p>

<h3>ANSI X12</h3>

<p>ANSI X12 est un standard EDI largement utilisé aux États-Unis dans divers secteurs, notamment le commerce de détail, la logistique, les soins de santé et les services financiers.</p>
<p>Voici un exemple de message EDI ANSI X12 850 (Order) qui contient des informations de commande entre un fournisseur et un client :</p>
<code>
ST*850*0001
BEG*00*SA*1039324**20220416
REF*DP*1212
DTM*002*20220420
N1*ST*ABC Corporation*92*5454-SSS
N3*PO Box 1234
N4*Atlanta*GA*30000
N1*SF*John Smith*TE*800-555-1212
PO1*1*100*EA*50**UP*56445498787
PID*F****Blue Widget
PO1*2*200*EA*75**UP*62554876532
PID*F****Green Widget
CTT*2
SE*10*0001
</code>

    <p>Ce message comprend plusieurs segments qui contiennent des informations sur la commande, telles que :</p>
    <ul>
        <li>le numéro de commande (BEG),</li>
        <li>les dates associées à la commande (DTM),</li>
        <li>les informations d'identification des partenaires commerciaux (N1),</li>
        <li>les détails de la commande (produit, quantité, prix, etc.),</li> et les totaux (CTT).
    </ul>




