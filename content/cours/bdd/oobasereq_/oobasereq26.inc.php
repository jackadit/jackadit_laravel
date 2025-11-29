<?php
/**
 * BUT : solution requête 26
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
$sNavigation=navigation('oobase', '26', 'req');
include_once 'tdmsolreq.php';
?>



<h1>OpenOffice Base : Réponses  requête 26</h1>
<h2>Supprimer tous les employés dont le nom de famille est ASSIN.</h2>
<pre>Requête suppression</pre>

<p>Il s'agit ici d'une requête d'action de type suppression. Celle-ci supprime tous les enregistrements de la table qui répondent aux critères que vous sélectionnez.</p>
<ol class="instruction">
	<li>Créez une nouvelle requête en <strong>Mode SQL</strong>.</li>
	<li>Saisissez : DELETE "Nom" FROM "Employés" WHERE "Nom" = 'ASSIN'.</li>
</ol>
 
<p>Exécutez la requête en appuyant sur le bouton <img src="/assets/img/oobase/bt_executer_requete.png" alt="bouton executer" />.</p>

<p>OpenOffice Base vous demande de confirmer la suppression des enregistrements qui répondent aux critères sélectionnés.</p>
<ol class="instruction">
	<li>Pour les besoins des exercices, conservez les enregistrements en sélectionnant l'option <strong>Non</strong>.</li>
</ol>
<pre>Pour éviter des pertes de données, sélectionnez d'abord les données concernées 
avec une requête SELECT.</pre>

