<?php
/**
 * BUT : solution requête 25
 *
 * @copyright Copyright &copy; jackadit.com 2009
 * @version 1.0       23/02/09        18:54:00
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
$sNavigation=navigation('oobase', '25', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 25</h1>
<h2>Changer le lieu de travail des employés de Strasbourg à Mulhouse.</h2>
<pre>Requête SQL de mise à jour</pre>
<p>Il arrive parfois qu'il y ait des corrections de données à apporter massivement à une base de données. Cette correction n'est pas envisageable manuellement, surtout si cela concerne des centaines voire des milliers de données. Pour réaliser cette tâche, vous pouvez vous servir de la requête en mode <strong>SQL</strong>.</p>

<p>Base ne supporte pas actuellement la construction d'instructions d'effacement, d'insertion ou de mise à jour dans le concepteur de requêtes.</p>

<p>Vous pouvez cependant exécuter ces instructions dans l'interface graphique à l'aide de Outils|SQL ...</p>

<p>Dans notre exemple, nous allons modifier le contenu du champ <strong>Bureau</strong> pour tous les enregistrements dont le contenu est actuellement <strong>Strasbourg</strong> en le remplaçant par <strong>Mulhouse</strong>.</p>
<ol class="instruction">
	<li>Sélectionner la commande <strong>SQL...</strong> du menu <strong>Outils</strong>.</li>
	<li>Saisissez : UPDATE "Employés" SET "Bureau" = 'Mulhouse' WHERE "Bureau" = 'Strasbourg'.</li>

<li>Exécutez la requête en appuyant sur le bouton <strong>Exécuter</strong>.</li>

<p>Il vous est aussi possible de vérifier si les enregistrements à modifier répondent tous aux critères que vous avez sélectionnés avant la mise à jour.</p>
<blockquote class="w750p">Utilisez le type de requête <strong>Sélection</strong> pour afficher les enregistrements avec les critères de votre choix. Une fois que vous êtes satisfait des enregistrements devant être modifiés, basculez dans le menu <strong>Outils > SQL...</strong>.</blockquote>

