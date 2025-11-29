<?php
/*
  +---------------------------------------------------------------+
  | Jackadit version 1.0                                          |
  +---------------------------------------------------------------+
  | Copyright (c) 2007 Jackadit                                   |
  +---------------------------------------------------------------+
  | xpcours6a.php v 1.0   16/08/07  16:47:00                      |
  +---------------------------------------------------------------+
  | Auteur: Jackadit <jackadit@jackadit.com>                      |
  +---------------------------------------------------------------+
  | But : page du cours 6a                                        |
  +---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '6a', '6b', '5d');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Signatures des pilotes</a>
		<ol class="alpha">
				<li><a href="#chap11" name="tdmchap11" id="tdmchap11">Utilitaire de vérification</a></li>
				<li><a href="#chap12" name="tdmchap12" id="tdmchap12">Configurer le niveau de sécurité</a></li>
		</ol></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Installer/modifier/supprimer un périphérique</a>
		  <ol class="alpha">
				<li><a href="#chap21" name="tdmchap21" id="tdmchap21">Installer un périphérique</a></li>
				<li><a href="#chap22" name="tdmchap22" id="tdmchap22">Mettre un pilote à jour</a></li>
				<li><a href="#chap23" name="tdmchap23" id="tdmchap23">Revenir à une version de pilote antérieure</a></li>
				<li><a href="#chap24" name="tdmchap24" id="tdmchap24">Supprimer un périphérique</a></li>
	  	</ol></li>
    </ol>
</aside>



<h1>Gestion des périphériques (a)</h1>
<h3>Durée :</h3>
	<p>45 minutes</p>
<h3>Objectifs</h3>
	<ul>
	  <li>Savoir installer/désinstaller un périphérique</li>
      <li>Configurer les périphériques</li>
	  <li>Optimiser la configuration des ordinateurs portables</li>
    </ul>
<h3>Prérequis</h3>
<p>Aucun</p>
<h3>Matériel à prévoir</h3>
<p>Deux ordinateurs configuré avec Windows XP installés dans le premier cours.</p>
	
<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Signatures des pilotes</a></h2>
<h3><a href="#tdmchap11" name="chap11" id="chap11">1.a-Utilitaire de vérification</a></h3>
<p>Pour vérifier la signature des pilotes de votre ordinateur, il existe un utilitaire que vous pouvez lancer en ligne de commande.</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Exécuter</strong>, puis saisissez <strong>cmd</strong> et validez.</li>
  <li>Saisissez <strong>sigverif.exe</strong>.</li>
</ul>
<p>La fenêtre suivante apparait :</p>
<img src="/assets/img/xp/xp6/Sigverif1.png" alt="Vérification des signatures de pilotes 1" />
<ul>
  <li>Cliquez sur le bouton <strong>Avancé</strong>, puis sur l'onglet <strong>Journaux</strong>.</li>
  <li>Activez la case à cocher <strong>Enregistrer les résultats de la vérification des signatures des fichiers dans un fichier journal</strong>.</li>
</ul>
<img src="/assets/img/xp/xp6/Sigverif2.png" alt="Vérification des signatures de pilotes 2" />
<ul>
  <li>Fermez la fenêtre et cliquez sur <strong>Démarrer</strong>. </li>
</ul>
<p class="notice remarque">Pour voir le contenu de ce fichier ouvrez-le avec un éditeur de texte (Notepad par exemple) ou  relancez  l'utilitaire <strong>sigverif</strong> et cliquez sur <strong>Afficher le journal</strong> dans l'onglet <strong>Journaux</strong>.</p>

<h3><a href="#tdmchap12" name="chap12" id="chap12">1.b-Configurer le niveau de sécurité</a></h3>
<ul>
  <li>Ouvrez les Propriétés du poste de travail.</li>
  <li>Cliquez sur l'onglet <strong>Matériel</strong> puis sur le bouton <strong>Signature du pilote</strong>.  </li>
  <li>Choisissez <strong>Bloquer - Ne jamais installer de pilotes logiciels non signés</strong>.</li>
  <li>Cochez la case <strong>Définir cette action en tant qu'action par défaut</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/Sigverif3.png" alt="Vérification des signatures de pilotes 3" />

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Installer/modifier/supprimer un périphérique</a></h2>
<h3><a href="#tdmchap21" name="chap21" id="chap21">2.a-Installer un périphérique</a></h3>
<p>Pour installer un nouveau périphérique, vous pouvez utiliser l'assistant ajout de matériel.</p>
<ul>
  <li>Cliquez sur <strong>Démarrer &gt; Panneau de configuration &gt; Imprimantes et autres périphériques</strong>.</li>
  <li>Cliquez sur <strong>Ajout de matériel</strong>.</li>
</ul>
<p>L'assistant <strong>Ajout de matériel</strong> s'ouvre.</p>
<img src="/assets/img/xp/xp6/AjoutMateriel1.png" alt="Assistant Ajout de matériel 1" />
<ul>
  <li>Cliquez sur <strong>Suivant</strong> et Choisissez <strong>Oui, j'ai déjà connecté le matériel</strong>.</li>
</ul>
<img src="/assets/img/xp/xp6/AjoutMateriel2.png" alt="Assistant Ajout de matériel 2" />
<ul>
  <li>Sélectionnez <strong>Ajouter un nouveau périphérique matériel</strong> à la fin de la liste déroulante. </li>
</ul>
<img src="/assets/img/xp/xp6/AjoutMateriel3.png" alt="Assistant Ajout de matériel 3" />
<ul>
  <li>Optez pour <strong>Installer le matériel que je sélectionne manuellement dans la liste</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AjoutMateriel4.png" alt="Assistant Ajout de matériel 4" />
<ul>
  <li>Choisissez <strong>Modems</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AjoutMateriel5.png" alt="Assistant Ajout de matériel 5" />
<ul>
  <li>L'assistant <strong>Installer un nouveau modem</strong> se lance.</li>
  <li>Choisissez  <strong>Ne pas détecter mon modem.</strong></li>
 </ul>
<img src="/assets/img/xp/xp6/AjoutMateriel6.png" alt="Assistant Ajout de matériel 6" />
 <ul>
  <li>Sélectionnez <strong>Câble de communication entre deux ordinateurs </strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AjoutMateriel7.png" alt="Assistant Ajout de matériel 7" />
<ul>
  <li>Choisissez le port série <strong>Com1</strong> puis terminez l'installation . </li>
</ul>
<p><img src="/assets/img/xp/xp6/AjoutMateriel8.png" alt="Assistant Ajout de matériel 8" /></p>
<p>Pour vérifier que votre modem est bien installé suivez la procédure :</p>
<ul>
  <li>Ouvrez le <strong>Gestionnaire de périphérique</strong> (onglet <strong>Matériel</strong> du <strong>Gestionnaire système</strong>).</li>
</ul>

<h3><a href="#tdmchap22" name="chap22" id="chap22">2.b-Mettre un pilote à jour </a></h3>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique et sélectionnez <strong>Mettre à jour le pilote...</strong></li>
</ul>
<p>L'<strong>Assistant installation</strong> se lance.</p>
<img src="/assets/img/xp/xp6/AssistantInstallation1.png" alt="Assistant installation 1" />
<ul>
  <li>Choisissez <strong>Installer à partir d'une liste ou d'un emplacement spécifié</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AssistantInstallation2.png" alt="Assistant installation 2" />
<ul>
  <li>Choisissez <strong>Ne pas rechercher. Je vais choisir le pilote à installer</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AssistantInstallation3.png" alt="Assistant installation 3" />
<ul>
  <li>Décochez l'option  <strong>Afficher les matériels compatibles</strong>.</li>
  <li>Choisissez le modèle <strong>Câble parallèle entre deux ordinateurs</strong>.  </li>
</ul>
<img src="/assets/img/xp/xp6/AssistantInstallation4.png" alt="Assistant installation 4" />
<p>Le message suivant doit apparaître :</p>
<img src="/assets/img/xp/xp6/AssistantInstallation5.png" alt="Assistant installation 5" />
<ul>
  <li>Validez en cliquant sur <strong>Oui</strong> et terminez l'installation.</li>
</ul>
<p>Après le changement de pilotes, vous devriez obtenir :</p>
<img src="/assets/img/xp/xp6/AssistantInstallation6.png" alt="Assistant installation 6" />

<h3><a href="#tdmchap23" name="chap23" id="chap23">2.c-Revenir à une version de pilote antérieure</a></h3>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique, puis sélectionnez <strong>Propriétés</strong>. </li>
  <li>Sélectionnez l'onglet <strong>Pilote</strong>.</li>
  <li>Cliquez sur le bouton <strong>Revenir à la version précédente</strong>. </li>
</ul>
<img src="/assets/img/xp/xp6/AssistantInstallation7.png" alt="Assistant installation7" />
<ul>
  <li>Vérifiez dans le Gestionnaire de périphérique si vous avez bien la version précédente. </li>
</ul>

<h3><a href="#tdmchap24" name="chap24" id="chap24">2.d-Supprimer un périphérique</a></h3>
<ul>
  <li>Cliquez avec le bouton droit sur le périphérique, puis sélectionnez <strong>Désinstaller</strong>.</li>
  <li>Validez ; Le pilote du périphérique est maintenant supprimé du système. </li>
</ul>
 <p>&nbsp; </p>

