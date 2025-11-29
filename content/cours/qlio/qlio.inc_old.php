<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Classes
 * @category métier
 * @access protected
 * @uses 
 */
?>

<div class="box">
    <h1>Qualité, logistique industrielle et organisation</h1>

    <p>Pour accéder au programme du BUT, suivez ce lien : <a href="/cours/qlio/r"><span class="bg-orange">&nbsp;BUT&nbsp;</span></a></p>

    <p>Pour accéder aux cours, suivez ce lien : <a href="/cours/qlio/qlio/1"><span class="bg-bleu">&nbsp;Cours&nbsp;</span></a></p>

    <p>Les cours sont organisées suivant les unités d'enseignement suivants :</p>

    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Semestre 1</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft">
                <li>R1.01 - Anglais général. <?php echo heure('101'); ?></li>
                <li>R1.02 - Expression communication.<?php echo heure('102'); ?></li>
                <li>R1.03 - Bases des mathématiques et des statistiques. <?php echo heure('103'); ?></li>
                <li>R1.04 - Connaissance technologique et socio-économique des entreprises.  <?php echo heure('104'); ?></li>
                <li><?php echo ressource('105'); ?> <?php echo heure('105'); ?></li>
                <li>R1.06 - Projet personnel et professionnel.<?php echo heure('106'); ?></li>
                <li><a href="/cours/qlio/sae/100"><?php echo sae('100'); ?></a> <?php echo heure('sae100'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE11</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>R1.07 - Outils, méthodes et communication pour la qualité. <?php echo heure('107'); ?></li>
                <li>R1.08 - Introduction aux systèmes de management de la qualité. <?php echo heure('108'); ?></li>
                <li>SAÉ 101 - Résolution de problèmes.(<?php echo heure('sae101tp'); ?> TP)</li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE12</p>
                <p class="h3-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li>R1.09 - Identification des flux physiques et d’information.  <?php echo heure('109'); ?></li>
                <li><a href="/cours/qlio/gstock"><?php echo ressource('110'); ?></a> <?php echo heure('110'); ?></li>
                <li><?php echo sae('103'); ?> (<?php echo heure('sae103tp'); ?> TP)</li>
                <li>SAÉ 104 - Immersion-Logistique. (<?php echo heure('sae104td'); ?> TD)</li>
            </ul>
        </div>
        <div class="module">
        <div class="bg-organisation">
            <p class="h2-like">UE13</p>
            <p class="h3-like">Organisation</p>
        </div>
            <ul class="txtleft">
                <li>R1.11 - Organisation du système de production. <?php echo heure('111'); ?></li>
                <li>R1.12 - Organisation d’un projet.  <?php echo heure('112'); ?></li>
                <li>SAÉ 105 - Organisation d’une situation de production. (<?php echo heure('sae105tp'); ?> TP)</li>
                <li>SAÉ 106 - Immersion-Organisation. (<?php echo heure('sae106td'); ?> TD)</li>
            </ul>
        </div>
    </div>
    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Semestre 2</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft">
                <li>R2.01 - Anglais de l’entreprise. <?php echo heure('201'); ?></li>
                <li>R2.02 - Expression communication. <?php echo heure('202'); ?></li>
                <li>R2.03 - Statistiques. <?php echo heure('203'); ?></li>
                <li>R2.04 - Connaissance technologique de l’entreprise. <?php echo heure('204'); ?></li>
                <li>R2.05 - Algorithmique, programmation et systèmes d’informations. <?php echo heure('205'); ?></li>
                <li>R2.06 - Projet personnel et professionnel. <?php echo heure('206'); ?></li>
                <li>SAÉ 200 - Portfolio. <?php echo heure('sae200'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE21</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>R2.07 - Documentation et notions d’audit.  <?php echo heure('207'); ?></li>
                <li><a href="/cours/qlio/metro"><?php echo ressource('208'); ?></a> <?php echo heure('208'); ?></li>
                <li>SAÉ 202 - Audit d’un poste de travail.  (<?php echo heure('sae202tp'); ?> TP)</li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE22</p>
                <p class="h2-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li>R2.09 - Digitalisation des données techniques. <?php echo heure('209'); ?></li>
                <li>R2.10 - Exécution d’un planning de production. <?php echo heure('210'); ?></li>
                <li><?php echo sae('203'); ?> (<?php echo heure('sae203tp'); ?> TP)</li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-organisation">
                <p class="h2-like">UE23</p>
                <p class="h3-like">Organisation</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/ergo"><?php echo ressource('211'); ?></a> <?php echo heure('211'); ?></li>
                <li>R2.12 - Organisation des données techniques et économiques. <?php echo heure('212'); ?></li>
                <li><?php echo sae('204'); ?> (<?php echo heure('sae204tp'); ?> TP)</li>
            </ul>
        </div>
    </div>
    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Semestre 3</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft">
                <li>R3.01 - Anglais des affaires. <?php echo heure('301'); ?></li>
                <li>R3.02 - Expression communication. <?php echo heure('302'); ?></li>
                <li>R3.03 - Mathématiques. <?php echo heure('303'); ?></li>
                <li>R3.04 - Gestion de l’entreprise. <?php echo heure('304'); ?></li>
                <li>R3.05 - Algorithmique et programmation avancées. <?php echo heure('305'); ?></li>
                <li>R3.06 - Projet Personnel et Professionnel.  <?php echo heure('306'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE31</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>R3.07 - Outils statistiques de pilotage d’un processus. <?php echo heure('307'); ?></li>
                <li><a href="/cours/qlio/metro"><?php echo ressource('308'); ?></a> <?php echo heure('308'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE32</p>
                <p class="h3-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li>R3.09 - Coordination approvisionnements - production.<?php echo heure('309'); ?></li>
                <li>R3.10 - Ordonnancement, lancement et pilotages. <?php echo heure('310'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-organisation">
                <p class="h2-like">UE33</p>
                <p class="h3-like">Organisation</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/implantation"><?php echo ressource('311'); ?></a> <?php echo heure('311'); ?></li>
                <li>R3.12 - Conduite d’un projet d’amélioration. <?php echo heure('312'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-mtd">
                <p class="h2-like">MTD</p>
                <p class="h4-like">Management de la transition digitale</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/r313mtd"><?php echo ressource('313mtd'); ?></a> <?php echo heure('313mtd'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-osc">
                <p class="h2-like">OSC</p>
                <p class="h4-like">Pilotage de la chaine logistique globale</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/gpstock"><?php echo ressource('313osc'); ?></a> <?php echo heure('313osc'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Projets et SAE</p>
                <p class="h4-like">Classique uniquement</p>
            </div>
            <ul class="txtleft">
                <li>SAÉ 300 - SAÉ - Portfolio. <br /> (<?php echo heure('sae300td'); ?> TD)</li>
                <li>SAÉ 301 - Déploiement des outils QLIO en tant que technicien. <br /> (<?php echo heure('sae301td'); ?> TD)</li>
                <li>SAÉ 3.MTD.02 - Vers l’entreprise digitale. <br /> (<?php echo heure('sae302mtdtd'); ?> TD)</li>
                <li>SAÉ 3.MTD.03 - Projet transformation digitale en tant que technicien. <br /> (<?php echo heure('sae303mtdtd'); ?> TD)</li>
                <li>SAÉ 3.OSC.02 - Dimensionnement d’un site logistique. <br /> (<?php echo heure('sae302osctd'); ?> TD)</li>
                <li>SAÉ 3.OSC.03 - Projet Supply Chain en tant que technicien. <br /> (<?php echo heure('sae303osctd'); ?> TD)</li>
            </ul>
        </div>
    </div>
    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Semestre 4</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft ">
                <li>R4.01 - Anglais professionnel et technique.  <?php echo heure('401'); ?></li>
                <li>R4.02 - Expression communication. <?php echo heure('402'); ?></li>
                <li>R4.03 - Mathématiques et statistiques avancées.  <?php echo heure('403'); ?></li>
                <li>R4.04 - Bases du contrôle de gestion industriel. <?php echo heure('404'); ?></li>
                <li><a href="/cours/qlio/access"><?php echo ressource('405'); ?></a> <?php echo heure('405'); ?></li>
                <li>R4.06 - Projet Personnel et Professionnel.  <?php echo heure('406'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE41</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>R4.07 - Amélioration de la performance. <?php echo heure('407'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE42</p>
                <p class="h3-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li>R4.08 - Planification de la production et prévision de la demande à moyen et long terme. <?php echo heure('408'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-organisation">
                <p class="h2-like">UE43</p>
                <p class="h3-like">Organisation</p>
            </div>
            <ul class="txtleft">
                <li>R4.09 - Modélisation pour amélioration du système de production. <?php echo heure('409'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-mtd">
                <p class="h2-like">MTD</p>
                <p class="h4-like">Management de la transformation digitale</p>
            </div>
            <ul class="txtleft">
                <li>R4MTD10 - Démarche d’accompagnement à la digitalisation des processus. <?php echo heure('410mtd'); ?></li>
                <li><a href="/cours/qlio/r411mtd"><?php echo ressource('411mtd'); ?></a> <?php echo heure('411mtd'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-osc">
                <p class="h2-like">OSC</p>
                <p class="h4-like">Organisation et Supply Chain</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/r410osc"><?php echo ressource('410osc'); ?></a> <?php echo heure('410osc'); ?></li>
                <li><a href="/cours/qlio/r411osc"><?php echo ressource('411osc'); ?></a> <?php echo heure('411osc'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Projets et SAE</p>
                <p class="h4-like">Classique uniquement</p>
            </div>
            <ul class="txtleft">
                <li>SAÉ 400 - SAÉ - Portfolio. (<?php echo heure('sae400td'); ?> TD)</li></li>
                <li>SAÉ 401 - Déploiement des outils QLIO en tant que technicien. <?php echo heure('sae401'); ?></li>
                <li>SAÉ 4.MTD.02 - Démarche d’accompagnement à la digitalisation des processus. (<?php echo heure('sae402mtdtd'); ?> TD)</li>
                <li>SAÉ 4.MTD.03 - Projet transformation digitale en tant que technicien.  (<?php echo heure('sae403mtdtd'); ?> TD)</li>
                <li>SAÉ 4.OSC.02 - Pilotage d’un réseau de distribution. (<?php echo heure('sae402osctd'); ?> TD)</li>
                <li>SAÉ 4.OSC.03 - Projet Supply Chain en tant que technicien.  (<?php echo heure('sae403osctd'); ?> TD)</li>
            </ul>
        </div>
    </div>
    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-bleu-light fontdark">
                <p class="h2-like">Semestre 5</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft bg-blanc fontdark">
                <li>R5.01 - Anglais de spécialité.  <?php echo heure('501'); ?></li>
                <li>R5.02 - Expression Communication. <?php echo heure('502'); ?></li>
                <li>R5.03 - Fondamentaux de la recherche opérationnelle.  <?php echo heure('503'); ?></li>
                <li>R5.04 - Analyse stratégique et financière de l’entreprise.  <?php echo heure('504'); ?></li>
                <li><a href="/cours/qlio/r/505"><?php echo ressource('505'); ?></a> <?php echo heure('505'); ?></li>
                <li>R5.06 - Projet personnel et professionnel.  <?php echo heure('506'); ?></li>
        </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE51</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>5.07 - Mise en place d’une certification système. </a> <?php echo heure('507'); ?></li>
                <li>R5.08 - Pérennisation d’une certification système. <?php echo heure('508'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE52</p>
                <p class="h3-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/r/509"><?php echo ressource('509'); ?></a> <?php echo heure('509'); ?></li>
                <li>R5.10 - Aide à la décision face aux aléas. <?php echo heure('510'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-organisation">
                <p class="h2-like">UE53</p>
                <p class="h3-like">Organisation</p>
            </div>
            <ul class="txtleft fontdark">
                <li>R5.11 - Outils de pilotage d’une unité de production.  <?php echo heure('511'); ?></li>
                <li>R5.12 - Démarche Lean Management. <?php echo heure('512'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-mtd">
                <p class="h2-like">MTD</p>
                <p class="h4-like">Management de la transformation digitale</p>
            </div>
            <ul class="txtleft">
                <li>R5.MTD13 - Modélisation et simulation d’un système production - Intérêt du jumeau  <?php echo heure('513mtd'); ?></li>
                <li><a href="/cours/qlio/interop"><?php echo ressource('514mtd'); ?></a> <?php echo heure('514mtd'); ?></li>
                <li><a href="/cours/qlio/sae502mtd"><?php echo sae('502mtd'); ?></a> <?php echo heure('sae502mtd'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-osc">
                <p class="h2-like">OSC</p>
                <p class="h4-like">Organisation et Supply Chain</p>
            </div>
            <ul class="txtleft">
                <li>R5.OSC13 - Achats dans la Supply Chain. <?php echo heure('513osc'); ?></li>
                <li>R5.OSC14 - Distribution, transport et Supply Chain. <?php echo heure('514osc'); ?></li>
                <li><a href="/cours/qlio/sae502osc"><?php echo sae('502osc'); ?></a> (<?php echo heure('sae502osctd'); ?> TD)</li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Projets et SAE</p>
                <p class="h4-like">Classique uniquement</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/sae/500"><?php echo sae('500'); ?></a> (<?php echo heure('sae500td'); ?> TD)</li>
                <li>SAÉ 501 - Sélection des outils QLIO en tant que cadre intermédiaire.  (<?php echo heure('sae501td'); ?> TD)</li>
                <li><a href="/cours/qlio/sae503mtd"><?php echo sae('503mtd'); ?></a> (<?php echo heure('sae502mtdtd'); ?> TD)</li>
                <li><a href="/cours/qlio/sae503osc"><?php echo sae('503osc'); ?></a> (<?php echo heure('sae502osctd'); ?> TD)</li>
            </ul>
        </div>
    </div>
    <div class="grid-1-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Semestre 6</p>
                <p class="h3-like">Ressources transverses</p>
            </div>
            <ul class="txtleft">
                <li>R6.01 - Anglais de spécialité.  <?php echo heure('601'); ?></li>
                <li>R6.02 - Expression communication. <?php echo heure('602'); ?></li>
                <li>R6.03 - Recherche opérationnelle pour les systèmes de production.  <?php echo heure('603'); ?></li>
                <li>R6.04 - Connaissance juridique de l’entreprise.  <?php echo heure('604'); ?></li>
                <li><a href="/cours/qlio/r/605"><?php echo ressource('605'); ?></a> <?php echo heure('605'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-qualite">
                <p class="h2-like">UE61</p>
                <p class="h3-like">Qualité</p>
            </div>
            <ul class="txtleft">
                <li>R6.06 - Mise en oeuvre et exploitation d’un audit système.  <?php echo heure('606'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-logistique">
                <p class="h2-like">UE62</p>
                <p class="h3-like">Logistique</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/r/607"><?php echo ressource('607'); ?></a> <?php echo heure('607'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-organisation">
                <p class="h2-like">UE63</p>
                <p class="h3-like">Organisation</p>
            </div>
            <ul class="txtleft fontdark">
                <li><a href="/cours/qlio/r/608"><?php echo ressource('608'); ?></a> <?php echo heure('608'); ?></li>
            </ul>
        </div>
    </div>
    <div class="grid-3-small-2-tiny-1 has-gutter">
        <div class="module">
            <div class="bg-mtd">
                <p class="h2-like">MTD</p>
                <p class="h4-like">Management de la transformation digitale</p>
            </div>
            <ul class="txtleft">
                <li><a href="/cours/qlio/r609mtd"><?php echo ressource('609mtd'); ?></a> <?php echo heure('609mtd'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-osc">
                <p class="h2-like">OSC</p>
                <p class="h4-like">Organisation et Supply Chain</p>
            </div>
            <ul class="txtleft">
                <li>R6.OSC09 - Reverse Supply Chain.  <?php echo heure('609osc'); ?></li>
            </ul>
        </div>
        <div class="module">
            <div class="bg-transverse">
                <p class="h2-like">Projets et SAE</p>
                <p class="h4-like">Classique uniquement</p>
            </div>
            <ul class="txtleft fontdark">
                <li><a href="/cours/qlio/sae/600"><?php echo sae('600'); ?></a> (<?php echo heure('sae600mtdtd'); ?> TD)</li>
                <li>SAÉ 601 - Sélection des outils QLIO en tant que cadre intermédiaire.  (<?php echo heure('sae601td'); ?> TD)</li>
                <li><a href="/cours/qlio/sae602mtd"><?php echo sae('602mtd'); ?></a> (<?php echo heure('sae602mtdtd'); ?> TD)</li>
                <li>SAÉ 6.OSC.02 - Organisation d’une logistique de retours de produits.  (<?php echo heure('sae602osctd'); ?> TD)</li>
            </ul>
        </div>
    </div>
</div>



