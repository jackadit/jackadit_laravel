<?php
/**
 * BUT : Introduction à la modélisation cinématique
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 * 
 * @author Stéphan WAHL 
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage Production
 * @category Industrialisation
 * @access public
 * @uses 
 */
?>


<h1>Modélisation des systèmes mécaniques</h1>


<h2>Modélisation des solides et des liaisons</h2>

    <h3>Définitions préliminaires

    <h4>Définitions</h4>
    <div class="notice remarque">
        <p><strong>Modélisation</strong></p>
        <p>La modélisation est l’opération qui consiste à représenter un système dans un formalisme différent afin de
            réaliser des analyses et des résolutions de problèmes. En cinématique, statique, cinétique et dynamique, on
            utilise le schéma cinématique pour représenter les systèmes réels.</p>
            <p>Attention, le modèle est une <strong>représentation</strong> du réel. Il y a donc des <strong>écarts</strong> entre le réel et le modèle qu’il s’agit de savoir <strong>quantifier</strong> ou <strong>justifier</strong></p>
    </div>

    <div class="notice remarque">
        <p><strong>Première hypothèse : Solide indéformable</strong></p>
        <ul>Un solide indéformable (ou parfait) est une entité matérielle
            <li>de masse constante ;</li>
            <li>dont la distance entre deux points est invariable au cours du temps.</li>
        </ul>
    </div>

    <p>En réalité les solides indéformables n'existent pas. Les plus rigides d'entre eux subissent de petites déformations provoquées par :</p>
    <ul>
        <li>la variation de température (dilatation)</li>
        <li>les actions mécaniques (efforts)</li>
    </ul>

        <h3>Liaisons entre solides</h3>

    <h4>1- Degré de liberté</h4>
    <p>Considérons un solide parfait <strong>1</strong> complètement libre par rapport à un solide <strong>0</strong>
        (exemple : avion <strong>1</strong> par rapport au sol <strong>0</strong>).<p>
    <p>Son déplacement global peut se décomposer en deux déplacements.</p>
    <ul>
        <li>Rotation : l'orientation du solide rapport à <strong>0</strong></li>
        <li>Translation : le solide <strong>1</strong> garde la même orientation par rapport à <strong>0</strong> mais sa position évolue</li>
    </ul>

    <img src="/assets/img/qlio/cin/avion.png" alt="avion" />

    <p>Le solide <strong>1</strong> évoluant dans l'espace à trois dimensions, chaque déplacement peut à son tour être décomposé en trois
    déplacements élémentaires (un sur chaque dimension).</p>
    <p>On suppose qu'un repère orthonormé direct  est lié au solide <strong>0</strong>.</p>
    <ul>La <strong>rotation</strong> se décompose donc en :
        <li>une rotation autour de i : Rx</li>
        <li>une rotation autour de j : Ry</li>
        <li>une rotation autour de k : Rz</li>
    </ul>

    <ul>La <strong>translation</strong> se décompose donc en :
        <li>une rotation suivant i : Tx</li>
        <li>une rotation suivant j : Ty</li>
        <li>une rotation suivant k : Tz</li>
    </ul>



    <h2>Liaisons normalisées parfaites</h2>

        <h3>Sphère plan</h3>
        <h3>Cylindre – plan</h3>
        <h3>Sphère cylindre</h3>
        <h3>Sphérique</h3>
        <h3>Appui plan</h3>
        <h3>Sphérique à doigt</h3>
        <h3>Pivot glissant</h3>
        <h3>Hélicoïdale</h3>
        <h3>Pivot</h3>
        <h3>Glissière</h3>



<h2>Notions de cinématique des mouvements plan</h2>

    <p>La cinématique étant l’étude des mouvements, elle permettra entre autres de déterminer la vitesse de tous les points d’un solide dans une position donnée</p>

    <img src="/assets/img/qlio/cin/voiture.png" alt="voiture" />
    <img src="/assets/img/qlio/cin/nacelle.png" alt="nacelle" />
    <img src="/assets/img/qlio/cin/eolienne.png" alt="éolienne" />

    <h3>Méthodologie à retenir</h3>

    <p>Dans un problème de cinématique il s’agit souvent de :</p>
    <ul>
        <li>définir le mouvement de chaque solide,</li>
        <li>définir la trajectoire des points du solide,</li>
        <li>déterminer la direction (ou le support) du vecteur "vitesse" de chaque point (elle sera toujours tangente à la trajectoire)</li>
        <li>choisir la méthode de détermination des vecteurs "vitesse" en fonction du mouvement.</li>
    </ul>

    <h3> Centre instantané de rotation (CIR)</h3>

    <dl>Définition :
        <dt>Pour tout solide en mouvement plan, il existe un point (le centre instantané de rotation ou le CIR) ayant une vitesse nulle.</dt>
        <dt>Si le mouvement est uniquement un mouvement de translation, le CIR est reporté à l'infini.</dt>
    </dl>


    <h4>Propriétés du CIR</h4>

    <ul>
        <li>Le CIR est à l'intersection des perpendiculaires aux vitesses</li>
        <li>Le CIR change de place à chaque instant</li>
        <li>Interprétation graphique</li>
        <img src="/assets/img/qlio/cin/cir_graphique.png" alt="CIR graphique" />
        <li>interprétation analytique</li>
        <img src="/assets/img/qlio/cin/cir_analytique.png" alt="CIR analytique" />
    </ul>

    <p>Dans la suite, on travaille dans un certain référentiel ℜ qu’il n’est pas nécessaire pour l’instant de préciser.</p>
    <p>Mais pour fixer les idées, nous pouvons travailler dans le référentiel dit du laboratoire constitué du bâtiment de physique du lycée auquel nous attachons trois axes fixes (par exemple
        orthonormés) et muni d’une horloge.</p>
    <p>Dans cette partie, nous allons définir le vecteur position, le vecteur vitesse et le vecteur accélération.<p>
    <p>Un vecteur est un objet mathématique dont l’existence est indépendante du système de coordonnées utilisées.</p>
    <p>Mais pour débuter, après avoir défini de façon intrinsèque ces vecteurs (c’est-à-dire de façon indépendante du système de coordonnées utilisé), nous les exprimerons
        d’abord en coordonnées cartésiennes.</p>
    <p>Ensuite seulement, nous exprimerons ces vecteurs en coordonnées polaires puis en coordonnées cylindriques.</p>


	<p>&nbsp;</p>
	<p>&nbsp;</p>


