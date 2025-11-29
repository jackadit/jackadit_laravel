<?php
/**
 * BUT : Exercices sur les requêtes
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:28:00
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
 ?>




<?php
$class = "solu";
$class .= " collapse";
?>
<h1>OpenOffice Base : Exercices sur les requêtes</h1>
<p class="h2-like">Avant de commencer</p>
<p>Ce cours est composé d'exercices aidant à comprendre le potentiel des requêtes. La difficulté de chaque exercice va crescendo. On présume que vous avez déjà lu et compris le fonctionnement des requêtes. Sinon, vous pouvez toujours revenir au cours précédent qui explique le fonctionnement des requêtes.</p>
<p>Pour réaliser les premières requêtes, il vous faut la table <strong>Employe</strong>, de la base de données <strong><a href="./cours/exercices/commerce4.odb" name="commerce4" id="commerce4">commerce4.odb</a></strong>.</p>
<p>Les dernières requêtes sont composées de plusieurs tables reliées. <!--Pour celles-ci, il faut utiliser les bases de données <strong><a href="./cours/exercices/commerce5.odb" name="commerce5" id="commerce5">commerce5.odb</a></strong-->.</p>
<p class="h2-like">Les exercices</p>
<p>La grande difficulté de la création d'une requête, c'est d'être capable d'interpréter la question posée pour que les options d'une requête soient capables d'y répondre. Pour ce faire, il faut de la pratique. La partie qui suit est une série d'exercices illustrant quelques-unes des possibilités des requêtes.</p>
<p>Ces exercices progressent en difficulté. Chacune démontre de nouvelles possibilités. Elles se basent sur les connaissances que vous avez acquises lors des cours précédents ainsi que sur les exercices précédents.</p>
<p>Pour chacune des questions, pensez à la manière dont vous répondriez avant de voir la réponse. Utilisez les étapes décrites dans le cours précédent pour choisir les tables, les champs et les autres options pour créer une requête qui répond à la question demandée. Ensuite exécuter la requête pour vérifier si votre réponse correspond à celle décrite plus bas.</p>
    <h2>Affichez le prénom et le nom des personnes ayant pour poste &quot; Gérant &quot;.</h2>
    <pre>Recherche simple.<a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/1" id="req1">solution</a></pre>
    <h2>Affichez le prénom, nom de toutes les personnes dont le nom de famille commence par la lettre &quot;Z&quot;.</h2>
    <pre>Comme ou LIKE <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/2" id="req2">solution</a></pre>
    <h2>Affichez le prénom, nom et salaire des personnes ayant un salaire supérieur à 45 000 &euro;.</h2>
    <pre>&lt;, &gt;, &lt;=, &gt;= et type numérique <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/3" id="req3">solution</a></pre>
    <h2>Affichez le prénom et le nom des personnes embauchées en 2003.</h2>
    <pre>Entre et type Date <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/4" id="req4">solution</a></pre>
    <h2>Affichez le prénom et le nom des employés ayant la permanence selon l'ordre alphabétique de nom de famille et de prénom.</h2>
    <pre>type logique et tri des enregistrements <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/5" id="req5">solution</a></pre>
    <h2>Affichez le prénom et le nom des employés n'ayant pas la permanence.</h2>
    <pre>type logique et l'opérateur IS EMPTY <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/6" id="req6">solution</a></pre>
    <h2>En utilisant seulement le champ commentaire, affichez le prénom et nom des gérants de l'entreprise.</h2>
    <pre>Critère &quot;IS NULL&quot; <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/7" id="req7">solution</a></pre>
    <h2>Affichez le nom ainsi que la commission des vendeurs de Haguenau.</h2>
    <pre>Multi-critères <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/8" id="req8">solution</a></pre>
    <h2>Affichez le prénom, nom et activité des vendeurs de Haguenau et de Strasbourg.</h2>
    <pre>Utilisation de la fonction Ou <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/9" id="req9">solution</a></pre>
    <h2>Affichez le prénom, le nom et le revenu des employés ayant un revenu supérieur ou égale à 45000 &euro;</h2>
    <pre>type monétaire et champ calculé <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/10" id="req10">solution</a></pre>
    <h2>Affichez la commission de chacun des vendeurs si on leur donne une augmentation de 20%.</h2>
    <pre>Champ calculé avec une constante (20%) <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/11" id="req11">solution</a></pre>
    <h2>Affichez le prénom et le nom des personnes embauché en 2003 sans utiliser le critère ENTRE ou &gt;=</h2>
    <pre>Fonction année([Nom du champ de type Date/Heure]). Montrer le générateur d'expression <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/12" id="req12">solution</a></pre>
    <h2>Affichez combien d'années de service a chaque employé de l'entreprise.</h2>
    <pre>Fonction année() et date() <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/13" id="req13">solution</a></pre>
    <h2>Affichez à côté du prénom et du nom des employés de l'entreprise le texte &quot;champion&quot; pour ceux qui ont une commission de 45 000 &euro; ou plus. Placez le texte &quot;Désolé&quot; à côte de ceux qui ne répondent pas au critère précédent.</h2>
    <pre>Fonction CASEWHEN(condition;si vrai;si faux) dont le résultat est du texte <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/14" id="req14">solution</a></pre>
    <h2>Affichez la commission des vendeurs si on donnait une prime de 5 000 &euro; aux vendeurs ayant une commission de 45 000 &euro; ou plus.</h2>
    <pre>Fonction CASEWHEN(condition; si vrai; si faux) dont le résultat est un chiffre <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/15" id="req15">solution</a></pre>
    <h2>Affichez la somme de la masse salariale de la compagnie.</h2>
    <pre>Utilisation de l'opération somme (SUM) <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/16" id="req16">solution</a></pre>
    <h2>Affichez la somme de la masse salariale de la compagnie par activité.</h2>
    <pre>Utilisation de l'opération somme sur plusieurs critères <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/17" id="req17">solution</a></pre>
    <h2>Affichez la somme de la masse salariale de la compagnie par lieu de travail et par poste.</h2>
    <pre>Utilisation de l'opération somme sur plusieurs critères <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/18" id="req18">solution</a></pre>
    <h2>Affichez la masse salariale des employés embauchés en 2003 repartis par lieu de travail.</h2>
    <pre>Utilisation de la fonction Groupe <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/19" id="req19">solution</a></pre>
    <h2>Affichez le nombre de personnes pour l'entreprise par lieu de travail et par activité.</h2>
    <pre>Utilisation de la fonction Nombre <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/20" id="req20">solution</a></pre>
    <h2>Le piège de la fonction Nombre.</h2>
    <pre>Utilisation de l'opération Nombre <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/21" id="req21">solution</a></pre>
    <h2>Déterminez le nombre de vendeurs &quot;champions&quot; ayant récolté une commission de 40 000 &euro; ou plus.</h2>
    <pre>Utilisation des fonctions Nombre et Groupe <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/22" id="req22">solution</a></pre>
    <h2>Déterminer la masse salariale de l'entreprise par activité en colonne et par lieu de travail en ligne.</h2>
    <pre>Fonction Somme <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/23" id="req23">solution</a></pre>
    <h2>Déterminer le nombre d'employés par statut social et lieu de travail ayant la permanence.</h2>
    <pre>Fonction Nombre et Groupe avec un critère <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/24" id="req24">solution</a></pre>
    <h2>Changer le lieu de travail des employés de Strasbourg à Mulhouse.</h2>
    <pre>Requête Mise à jour <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/25" id="req25">solution</a></pre>
    <h2>Supprimer tous les employés dont le nom de famille est ASSIN.</h2>
    <pre>Requête suppression <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/26" id="req26">solution</a></pre>
    <h2>Créez une requête qui affiche le prénom, le nom et la date d'embauche des employés dont le choix de l'année est laissé à l'utilisateur de la requête.</h2>
    <pre>Requête avec entrée de valeur (requête paramétrée) <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/27" id="req27">solution</a></pre>
<p>Les prochaines requêtes requièrent des champs qui se retrouvent dans plusieurs tables. Vous devrez utiliser la base de données <strong>commerce2.odb</strong>.</p>
    <h2>Affichez le numéro de facture, nom et adresse du client ainsi que le prénom et nom du vendeur.</h2>
    <pre>Requête basée sur plusieurs table <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/28" id="req28">solution</a></pre>
    <h2>Affichez le nom de l'employé ainsi que le nombre des différents produits, avec description du produit, qu'il (ou elle) a vendu.</h2>
    <pre>Requête basée sur plusieurs tables reliées avec l'opération compte <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/29" id="req29">solution</a></pre>
    <h2>Affichez le total des ventes par clients.</h2>
    <pre>Requête basée sur plusieurs tables reliées avec l'opération somme et un champ calculé <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/30" id="req30">solution</a></pre>
    <h2>Utilisez une requête pour entrer les données de factures.</h2>
    <pre>Requête basée sur plusieurs tables pour entrer des enregistrements <a class="<?php echo $class; ?>" href="/cours/qlio/oobasereq/31" id="req31">solution</a></pre>
</div>

