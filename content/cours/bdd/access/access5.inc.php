<?php
/**
 * page de cours 5 sur ACCESS 2003 : exercices sur les requêtes
 *
 * @copyright Copyright © Stéphane WAHL 2012
 * @version 1.0   21/02/07  16:18:00
 *
 * @author Stéphane WAHL
 * @since jackadit 1.0
 *
 * @package jackadit
 * @subpackage access
 * @category cours
 * @access public
 * @uses
 */
$class = "solu";
$class .= " collapse";
?>
<h1>ACCESS : Exercices sur les requêtes</h1>
<p class="h2-like">Avant de commencer</p>
<p>Ce cours est composé d'exercices aidant à comprendre le potentiel des requêtes. La difficulté de chaque exercice va crescendo. On présume que vous avez déjà lu et compris le fonctionnement des requêtes. Sinon, vous pouvez toujours revenir au cours précédent qui explique le fonctionnement des requêtes.</p>
<p>Pour réaliser les premières requêtes, il vous faut la table <strong>Employe</strong>, de la base de données <strong><a href="./cours/exercices/commerce3.accdb" name="commerce3" id="commerce3">commerce3.accdb</a></strong>.</p>
<p>Les dernières requêtes sont composées de plusieurs tables reliées. Pour celles-ci, il faut utiliser les bases de données <strong><a href="./cours/exercices/commerce4.accdb" name="commerce4" id="commerce4">commerce4.accdb</a></strong>.</p>
<p class="h2-like">Les exercices</p>
<p>La grande difficulté de la création d'une requête, c'est d'être capable d'interpréter la question posée pour que les options d'une requête soient capables d'y répondre. Pour ce faire, il faut de la pratique. La partie qui suit est une série d'exercices qui démontrent quelques-unes des possibilités des requêtes.</p>
<p>Ces exercices progressent en difficulté. Chacune démontre de nouvelles possibilité. Elles se basent sur les connaissances que vous avez acquises lors des cours précédents ainsi que sur les exercices précédents.</p>
<p>Pour chacune des questions, pensez à la manière dont vous répondriez avant de voir la réponse. Utilisez les étapes décrites dans le cours précédent pour choisir les tables, les champs et les autres options pour créer une requête qui répond à la question demandée. Ensuite exécuter la requête pour voir si votre réponse est la même que celle décrite plus bas.</p>
<h2>Affichez le prénom et le nom des personnes ayant pour poste &quot; Gérant &quot;.</h2>
<p>Recherche simple. <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/1" id="req1">solution</a></p>
<h2>Affichez le prénom, nom de toutes les personnes dont le nom de famille commence par la lettre &quot;Z&quot;.</h2>
<p>Comme <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/2" id="req2">solution</a></p>
<h2>Affichez le prénom, nom et salaire des personnes ayant un salaire supérieur à 45 000 &euro;.</h2>
<p>&lt;, &gt;, &lt;=, &gt;= et type numérique <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/3" id="req3">solution</a></p>
<h2>Affichez le prénom et le nom des personnes embauchées en 2003.</h2>
<p>Entre et type Date <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/4" id="req4">solution</a></p>
<h2>Affichez le prénom et le nom des employés ayant la permanence selon l'ordre alphabétique de nom de famille et de prénom.</h2>
<p>type logique et tri des enregistrements <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/5" id="req5">solution</a></p>
<h2>Affichez le prénom et le nom des employés n'ayant pas la permanence.</h2>
<p>type logique et l'opérateur Pas <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/6" id="req6">solution</a></p>
<h2>En utilisant seulement le champ commentaire, affichez le prénom et nom des gérants de l'entreprise.</h2>
<p>Critère &quot;Est Null&quot; <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/7" id="req7">solution</a></p>
<h2>Affichez la commission du vendeur ASSIN de Haguenau</h2>
<p>Utilisation de la fonction Et <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/8" id="req8">solution</a></p>
<h2>Affichez le prénom, nom et occupation des vendeurs de Haguenau et de Strasbourg.</h2>
<p>Utilisation de la fonction Ou <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/9" id="req9">solution</a></p>
<h2>Affichez le prénom, le nom et le revenu des employés ayant un revenu supérieur ou égal à 45000 &euro;</h2>
<p>type monétaire et champ calculé <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/10" id="req10">solution</a></p>
<h2>Affichez la commission de chacun des vendeurs si on leur donne une augmentation de 20%.</h2>
<p>Champ calculé avec une constante (20%) <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/11" id="req11">solution</a></p>
<h2>Affichez le prénom et le nom des personnes embauchées en 2003 sans utiliser le critère ENTRE ou <=.</h2>
<p>Fonction année([Nom du champ de type Date/Heure]). Montrer le générateur d'expression <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/12" id="req12">solution</a></p>
<h2>Affichez combien d'années de service a chaque employé de l'entreprise.</h2>
<p>Fonction année() et date() <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/13" id="req13">solution</a></p>
<h2>Affichez à côté du prénom et du nom des employés de l'entreprise le texte &quot;champion&quot; pour ceux qui ont une commission de 45 000 &euro; ou plus. Placez le texte &quot;Désolé&quot; à côte de ceux qui ne répondent pas au critère précédent.</h2>
<p>Fonction Vraifaux(condition;si vrai;si faux) dont le résultat est du texte <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/14" id="req14">solution</a></p>
<h2>Affichez la commission des vendeurs si on donnait une prime de 5 000 &euro; aux vendeurs ayant une commission de 45 000 &euro; ou plus.</h2>
<p>Fonction VraiFaux(condition; si vrai; si faux) dont le résultat est un chiffre <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/15" id="req15">solution</a></p>
<h2>Affichez la somme de la masse salariale de l'entreprise.</h2>
<p>Utilisation de l'opération somme <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/16" id="req16">solution</a></p>
<h2>Affichez la somme de la masse salariale de l'entreprise par occupation.</h2>
<p>Utilisation de l'opération somme sur plusieurs critères <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/17" id="req17">solution</a></p>
<h2>Affichez la somme de la masse salariale de l'entreprise par lieu de travail et par poste.</h2>
<p>Utilisation de l'opération somme sur plusieurs critères <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/18" id="req18">solution</a></p>
<h2>Affichez la masse salariale des employés embauchés en 2003 repartis par lieu de travail.</h2>
<p>Utilisation de l'opération Où <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/19" id="req19">solution</a></p>
<h2>Affichez le nombre de personnes de l'entreprise par lieu de travail et par occupation.</h2>
<p>Utilisation de l'opération Compte <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/20" id="req20">solution</a></p>
<h2>Le piège de l'opération Compte.</h2>
<p>Utilisation de l'opération Compte <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/21" id="req21">solution</a></p>
<h2>Déterminez le nombre de vendeurs &quot;champions&quot; ayant récolté une commission de 40 000 &euro; ou plus.</h2>
<p>Utilisation des opérations Compte et Où <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/22" id="req22">solution</a></p>
<h2>Utilisez une requête d'analyse croisée pour déterminer la masse salariale de l'entreprise par occupation en colonne et par lieu de travail en ligne.</h2>
<p>Requête d'analyse croisée et l'opération Somme <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/23" id="req23">solution</a></p>
<h2>Utilisez une requête d'analyse croisée pour déterminer le nombre d'employés par statut social et lieu de travail ayant la permanence.</h2>
<p>Requête d'analyse croisée et l'opération Compte avec un critère <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/24" id="req24">solution</a></p>
<h2>Changer le lieu de travail des employés de Strasbourg à Mulhouse.</h2>
<p>Requête Mise à jour <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/25" id="req25">solution</a></p>
<h2>Supprimer tous les employés dont le nom de famille est ASSIN.</h2>
<p>Requête suppression <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/26" id="req26">solution</a></p>
<h2>Créez une requête qui affiche le prénom, le nom et la date d'embauche des employés dont le choix de l'année est laissé à l'utilisateur de la requête.</h2>
<p>Requête avec entrée de valeur (requête paramétrée) <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/27" id="req27">solution</a></p>
<p>Les prochaines requêtes requiert des champs qui se retrouvent dans plusieurs tables. Vous devrez utiliser la base de données <strong>commerce2.accdb</strong>.</p>
<h2>Affichez le numéro de facture, nom et adresse du client ainsi que le prénom et nom du vendeur.</h2>
<p>Requête basée sur plusieurs table <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/28" id="req28">solution</a></p>
<h2>Affichez le nom de l'employé ainsi que le nombre des différents produits, avec description du produit, qu'il (ou elle) a vendu.</h2>
<p>Requête basée sur plusieurs tables reliées avec l'opération compte <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/29" id="req29">solution</a></p>
<h2>Affichez le total des ventes par clients.</h2>
<h2>Utilisez une requête pour entrer les données de factures.</h2>
<p>Requête basée sur plusieurs tables pour entrer des enregistrements <a class="<?php echo $class; ?>" href="/cours/qlio/accessreq/31" id="req31">solution</a></p>

