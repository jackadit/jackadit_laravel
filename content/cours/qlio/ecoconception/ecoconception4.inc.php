<?php
/**
 * BUT : cours sur le dessin technique
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Organisation
 * @category Eco_conception
 * @access public
 * @uses 
 */
$sNavigation=navigation('ecoconception', '4', 'fin');
?>




<h1>Dessin technique</h1>

<p class="h2-like">Introduction</p>

<p>Le dessin technique est le moyen d'expression indispensable et universel de tous les techniciens.</p>

<p>Il permet de transmettre, à tous les services de production, la pensée technique et les impératifs de fabrication qui lui sont liés.</p>

<p>Ce langage conventionnel est soumis à des règles ne permettant aucune erreur d'interprétation.</p>

<p>Ces règles sont définies par la norme.</p>


<p class="h2-like">Un peu d'histoire</p>


<p>Le dessin technique moderne a été élaboré à partir des travaux de Gaspard Monge qui est reconnu comme l'inventeur de la géométrie descriptive.</p>
<p>La géométrie descriptive fut gardée secrète jusqu'en 1795. Par la suite, l'enseignement de ce domaine est transmis en France, en Allemagne et aux États-Unis.</p>
<p><span class="tag--primary">Claude Crozet</span> publia le premier ouvrage de langue anglaise sur ce domaine en 1821.</p>
<p>La géométrie descriptive originale utilise le principe du « premier dièdre ». Cela signifie que la vue de dessus est située sous la vue de face et la vue de droite est placée du côté gauche de celle-ci.</p>
<p>Depuis le début du XXe siècle, aux États-Unis et au Canada, on emploie la projection sur le « troisième dièdre » (la vue de dessus en haut de la vue de face et la vue de droite à droite de celle-ci). Cette différence entre l'Europe et l'Amérique perdure.</p>
<img src="/assets/img/qlio/ecoconception/conenorme.png" alt="Méthodes de projection du permier et troisième trièdre" />


<p>Le dessin technique a continué son évolution durant le XXe siècle particulièrement au niveau de l'interchangeabilité des pièces.</p>
<p>Diverses normes (ANSI, CSA, ISO) et livres ont été créés pour uniformiser la communication par le dessin technique et le tolérancement (qui permet de s'assurer de l'interchangeabilité des pièces).</p>
<p>Depuis la fin du XXe siècle, le papier et le crayon sont progressivement remplacés par l'informatique. Les premiers logiciels servaient à reproduire informatiquement ce que l'on faisait sur une table à dessin.</p>
<p>Petit à petit, des logiciels spécialisés ont fait leurs apparitions. Ces logiciels permettent de modéliser virtuellement un objet. Le logiciel peut alors créer presque automatiquement le dessin technique. Dans certains cas, on peut même, en utilisant seulement le modèle 3d virtuel, se passer du dessin technique pour réaliser la fabrication d'un objet.</p>
<p>Ceux qui s'intéressent à l'histoire du dessin technique pourront consulter le document <a href="http://www.edgj.org/index.php/EDGJ/article/viewFile/7/6" target="_blank"><em>Engineering Design Graphics: Into the 21st Century</em></a> par La Verne Abe Harris et Frederick Meyers.</p>


<h2>Les modes de représentation : schéma, dessins, 3D</h2>

<img src="/assets/img/qlio/ecoconception/types_dessin.png" alt="Types de dessin technique" />

<h2>La représentation en trois dimensions</h2>

<h3>Perspective</h3>
<p>La représentation en trois dimensions (3D) sert de point de départ de toute la chaîne numérique.</p>
<p>Les vues 3D en perspective permettent de mieux saisir et plus vite, l'aspect général et les formes d'une pièce.</p>
<img src="/assets/img/qlio/ecoconception/planche_roulette.png" alt="vue 3D de la planche à roulette" />
<img src="/assets/img/qlio/ecoconception/roue.png" alt="vue 3D de la roue" />
<img src="/assets/img/qlio/ecoconception/roue_perspective.png" alt="vue en perspective 3D de la roue" />

<h3>Dessin en vue éclatée</h3>
<p>Il représente les pièces les unes par rapport aux autres. Il permet de mieux comprendre le fonctionnement ou le montage de l'objet. Il est souvent utilisé pour les notices commerciales.</p>
<img src="/assets/img/qlio/ecoconception/roue_eclatee.png" alt="vue éclatée 3D de la roue" />

<h3>Schéma</h3>
<p>Le schéma modélise un fonctionnement.</p>
<img src="/assets/img/qlio/ecoconception/roue_schema.png" alt="vue en schéma 3D de la roue" />

<h3>Croquis</h3>
<p>Le croquis est un dessin établi à la main.</p>
<img src="/assets/img/qlio/ecoconception/croquis.png" alt="croquis" />


<h2>La représentation en deux dimensions</h2>

<h3>Dessin d'ensemble</h3>
<p>Le dessin d 'ensemble permet de comprendre le fonctionnement du mécanisme à partir de la description des formes, des dimensions et de l'organisation des pièces qui le constituent. Il est composé :</p>
<ol>
    <li>D'une représentation en plusieurs vues de l'ensemble des pièces assemblées.</li>
    <p>Le dessin d'ensemble représente tous les détails nécessaires pour définir une solution choisie.</p>
    <img src="/assets/img/qlio/ecoconception/roue_dessin_ensemble.png" alt="dessin d'ensemble d'une roue" />
    <li>d'une nomenclature des éléments composants le mécanisme.</li>
    <table class="table w650p" summary="Exemple de nomenclature d'une roue">
    <caption>Exemple de nomenclature d'une roue</caption>
    <tr>
        <td class="w30p">7</td>
        <td class="w30p">4</td>
        <td>Biellette</td>
        <td class="w120p">EN AW 2017</td>
        <td class="w100p">Anodisé</td>
    </tr>
    <tr>
        <td>6</td>
        <td>2</td>
        <td>Pivot</td>
        <td>C35</td>
        <td>Phosphaté</td>
    </tr>
    <tr>
        <td>5</td>
        <td>2</td>
        <td>Axe de bras</td>
        <td>C35</td>
        <td>Phosphaté</td>
    </tr>
    <tr>
        <td>4</td>
        <td>8</td>
        <td>Coussinet à collerette d=12</td>
        <td>CW453K</td>
        <td>Bronze</td>
    </tr>
    <tr>
        <td>3</td>
        <td>4</td>
        <td>Bras</td>
        <td>EN AW 2017</td>
        <td>Anodisé</td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>Support</td>
        <td>EN AW 2017</td>
        <td>Anodisé</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>Planche</td>
        <td>Composite</td>
        <td>Bois + fibre</td>
    </tr>
    <tr>
        <th>Rp</th>
        <th>Nb</th>
        <th>Désignation</th>
        <th>Matière</th>
        <th>Observation</th>
    </tr>
    </table>
</ol>


<p><strong>Rp</strong> : Repère de la pièce sur le plan d'ensemble.</p>
<p><strong>Nb</strong> : Nombre de pièces identiques dans l'ensemble.</p>
<p><strong>Matière</strong> : Désigne le matériau utilisé.</p>
<p><strong>Observation</strong> : Fournisseur, traitement, Norme…</p>

<h3>Dessin de définition</h3>
<p>Le dessin de définition représente une pièce de manière compléte et détaillée. On y trouve notamment les formes, les dimensions et les spécifications géométriques nécessaires à la fabrication de la pièce.</p>
<p>Il fait foi lors du contrôle de réception de celle-ci.</p>
<p>Pour un dessin d'ensemble, il y aura un dessin de définition par pièce à fabriquer.</p>
<p>Le dessin technique se réalise sur papier ou calque, ses règles d'exécution sont normalisées.</p>
<img src="/assets/img/qlio/ecoconception/roue_dessin_definition.png" alt="Dessin de définition de la roue" />

<h3>Schéma</h3>
<p>Le schéma modélise un fonctionnement.</p>
<img src="/assets/img/qlio/ecoconception/roue_schema_2D.png" alt="vue en schéma 3D de la roue" />

<h3>Croquis</h3>
<p>Le croquis est un dessin établi à la main.</p>
<img src="/assets/img/qlio/ecoconception/croquis_cote.png" alt="croquis coté" />


<h2>Vocabulaire technique</h2>
<h3>Formes</h3>
<img src="/assets/img/qlio/ecoconception/bossage.png" alt="dessin précisant le vocabulaire technique" />
<dl>
<dt>Arrondi</dt>
    <dd>Forme convexe réalisé pour casser une arête.</dd>
<dt>Congé</dt>
    <dd>Forme concave réalisé pour casser une arête.</dd>
<dt>Bossage</dt>
    <dd>Partie cylindrique en saillie.</dd>
<dt>Alésage</dt>
    <dd>Partie cylindrique creuse.</dd>
<dt>Chambrage</dt>
    <dd>Alésage plus grand facilitant le montage.</dd>
</dl>

<img src="/assets/img/qlio/ecoconception/arbre.png" alt="dessin précisant le vocabulaire technique" />
<dl>
<dt>Arbre</dt>
    <dd>Partie cylindrique pleine.</dd>
<dt>Arête</dt>
    <dd>Intersection entre deux surfaces.</dd>
<dt>Chanfrein</dt>
    <dd>Forme réalisé pour casser une arête.</dd>
</dl>

<img src="/assets/img/qlio/ecoconception/depouille.png" alt="dessin précisant le vocabulaire technique" />
<dl>
<dt>Dépouille</dt>
    <dd>Pente sur pièce moulée pour faciliter le démoulage.</dd>
</dl>

<img src="/assets/img/qlio/ecoconception/entaille_encoche.png" alt="dessin précisant le vocabulaire technique" />
<dl>
<dt>Entaille</dt>
    <dd>Coupure dans une pièce dont on enlève une partie. Il y a différentes formes d'entaille.</dd>
<dt>Encoche</dt>
    <dd>Dégagement sur forme prismatique.</dd>
</dl>

<img src="/assets/img/qlio/ecoconception/epaulement_embase.png" alt="dessin précisant le vocabulaire technique" />
<dl>
<dt>Épaulement</dt>
    <dd>Changement brusque de dimension.</dd>
<dt>Ergot</dt>
    <dd>Pièce permettant un arrêt en rotation.</dd>
<dt>Embase</dt>
    <dd>Partie cylindrique de diamètre important par rapport à la hauteur.</dd>
<dt>Évidement</dt>
    <dd>Alésage de grand diamètre par rapport à la hauteur.</dd>
</dl>

<dl>
<img src="/assets/img/qlio/ecoconception/lumiere.png" alt="dessin précisant le vocabulaire technique" />
<dt>Lumière</dt>
<dd>Ouverture.</dd>
<img src="/assets/img/qlio/ecoconception/gorge.png" alt="dessin précisant le vocabulaire technique" />
<dt>Gorge</dt>
<dd>Rainure sur une partie cylindrique.</dd>
<img src="/assets/img/qlio/ecoconception/meplat.png" alt="dessin précisant le vocabulaire technique" />
<dt>Méplat</dt>
<dd>Surface plane réalisée sur une forme cylindrique.</dd>
<img src="/assets/img/qlio/ecoconception/nervure.png" alt="dessin précisant le vocabulaire technique" />
<dt>Nervure</dt>
<dd>Partie permettant de renforcer une pièce.</dd>
<img src="/assets/img/qlio/ecoconception/profile.png" alt="dessin précisant le vocabulaire technique" />
<dt>Profilé</dt>
<dd>Barre de section constante.</dd>
<img src="/assets/img/qlio/ecoconception/rainure.png" alt="dessin précisant le vocabulaire technique" />
<dt>Rainure</dt>
<dd>Entaille pratiquée dans une pièce.</dd>
<dt>Semelle</dt>
<dd>Grande surface d'appui.</dd>
<img src="/assets/img/qlio/ecoconception/saignee.png" alt="dessin précisant le vocabulaire technique" />
<dt>Saignée</dt>
<dd>Rainure profonde.</dd>
<img src="/assets/img/qlio/ecoconception/trou_oblong.png" alt="dessin précisant le vocabulaire technique" />
<dt>trou_oblong</dt>
<dd>Trou non cylindrique.</dd>
</dl>



<h3>Les modes d'obtention</h3>

<h4>Fraisage en bout</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/fraisage_en_bout.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/fraisage_en_bout.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Fraisage en roulant</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/fraisage_en_roulant.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/fraisage_en_roulant.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Lamage</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/lamage.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/lamage.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Perçage</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/percage.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/percage.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Tournage chariotage</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/tournage_chariotage.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/tournage_chariotage.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Tournage dressage</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/tournage_dressage.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/tournage_dressage.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>

<h4>Tournage perçage</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/tournage_percage.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/tournage_percage.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>


<h4>Filetage-taraudage</h4>
<dl>
<img src="/assets/img/qlio/ecoconception/filetage.png" alt="dessin précisant le vocabulaire technique" />
<img src="/assets/img/qlio/ecoconception/filetage_2D.png" alt="dessin précisant le vocabulaire technique" />
<dt>Filetage</dt>
<dd>Rainures hélicoïdales sur un cylindre ou sur un cône</dd>
<img src="/assets/img/qlio/ecoconception/taraudage_2D.png" alt="dessin précisant le vocabulaire technique" />
<dt>Taraudage</dt>
<dd>Filetage réalisé sur l'intérieur d'une surface de révolution</dd>
</dl>

<h4>Usinage d'une vis</h4>
<video width="100%" height="240" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" frameborder="0" controls="controls">
<source src="/assets/img/qlio/ecoconception/usinage_vis.mp4" type="video/mp4" />
<object>
    <embed src="/assets/img/qlio/ecoconception/usinage_vis.mp4" type= "application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" />
</object>
Vous n'avez pas de navigateur moderne, donc pas de balise video HTML5 !
</video>
