<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 jackadit                                   |
	+---------------------------------------------------------------+
	| xpcours9.php   v 1.0   09/05/07	23:20:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 9											                    |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '9');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Configurer une connexion Internet</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Configurer une connexion distante
	    vers le réseau de votre entreprise</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Activer le Firewall et filtrer les ports</a></li>
		<li><a href="#chap4" name="tdmchap4" id="tdmchap4">Prendre le contrôle à distance</a></li>
		<li><a href="#chap5" name="tdmchap5" id="tdmchap5">Autre méthode de prise de contrôle à distance</a></li>
  </ol>
</aside>



<h1>Fonctionnalités avancées du réseau</h1>
<h3>Durée :</h3>
	<p>1 heure</p>
    <h3>Objectifs</h3>
	<ul>
	  <li>Configurer une connexion Internet</li>
    <li>Activer le firewall</li>
	  <li>Configurer le partage de connexion Internet</li>
	  <li>Prendre le contrôle à distance</li>
	  <li>Créer et dépanner un VPN (Virtual Private Network)</li>
    </ul>
<h3>Prérequis</h3>
  <p>Aucun</p>
<h3>Matériel à prévoir</h3>
	<p>Deux ordinateurs avec carte réseau, configurés avec Windows XP et connecté entre eux par l'intermédiaire d'un câble croisé ou d'un Hub/switch. Le CD-Rom d'installation de Windows XP Pro. </p>

    <h2><a href="#tdmchap1" name="chap1" id="chap1">1-Configurer une connexion Internet</a></h2>
<ul>
  <li>Cliquez sur<strong> Démarrer &gt; Panneau de configuration &gt; Connexions réseau et Internet &gt; Configurer ou modifier votre connexion Internet</strong></li>
</ul>
<p>L'assistant connexion réseau se lance.</p>
<ul>
  <li>Cliquez sur<strong> Suivant</strong>.</li>
  <li>Activez l'option <strong>Établir une connexion à Internet</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/AssistantConnexionReseau1.png" alt="Assistant connexion réseau 1" />
<ul>
  <li>Sélectionnez ensuite <strong>Configurer ma connexion manuellement</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/AssistantConnexionReseau2.png" alt="Assistant connexion réseau 2" />
<ul>
  <li>Dans la plupart des cas (freebox, livebox, etc.) vous devrez sélectionner <strong>Se connecter en utilisant une connexion large bande toujours activé</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/AssistantConnexionReseau3.png" alt="Assistant connexion réseau 3" />
<p>Vous pouvez maintenant accéder à la configuration de <strong>TCP/IP</strong>.</p>
<ul>
  <li>Cliquez avec le bouton droit sur les <strong>Favoris réseau</strong> et sélectionnez <strong>Propriétés</strong>.</li>
  <li>Cliquez avec le bouton droit sur la <strong>Connexion réseau au réseau local</strong> et affichez les <strong>Propriétés</strong>.</li>
</ul>
<p class="notice remarque">Vous pouvez également passer par le <strong>Panneau de configuration &gt; Connexion réseau et Internet &gt; Connexion réseau</strong>.</p>

<img src="/assets/img/xp/xp9/TCP-IP.png" alt="Configuration TCP/IP" />
<ul>
  <li>Cliquez sur le bouton <strong>Propriétés</strong> (ou double cliquez sur <strong>Protocole Internet (TCP/IP)</strong>.</li>
  <li>Saisissez l'adresse IP suivante : <strong>192.168.0.1</strong></li>
  <li>Saisissez le masque de sous-réseau suivant : <strong>255.255.255.0</strong>  </li>
</ul>
<img src="/assets/img/xp/xp9/ProprietesTCPIP.png" alt="Propriétés TCP/IP" />
<ul>
  <li>Faites de même pour le second ordinateur en appliquant l'adresse IP suivante : <strong>192.168.0.2</strong></li>
  <li>Saisissez le masque de sous-réseau suivant : <strong>255.255.255.0</strong>  </li>
</ul>

<p class="notice remarque">Si vous voulez partager la connexion internet à partir de l'ordinateur 1, cliquez sur l'onglet <strong>Avancé</strong> et cochez l'option  <strong>Autoriser d'autres utilisateurs du réseau à se connecter via la connexion Internet de cet ordinateur </strong>.</p>

<p>Pour vérifiez l'ensemble des configurations des différents postes connectés, faites l'opération suivante :</p>
<ul>
  <li>Ouvrez une invite de commande et saisissez : <strong>ipconfig /all</strong></li>
</ul>


<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Configurer une connexion distante
	    vers le réseau de votre entreprise</a></h2>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration &gt; Connexions réseau et Internet</strong>.</li>
  <li>Cliquez sur <strong>Créer une  connexion au réseau sur votre lieu de travail</strong>.</li>
  <li>Activez l'option <strong>Connexion d'accès à distance</strong>. </li>
</ul>
<img src="/assets/img/xp/xp9/ConnexionReseauEntreprise1.png" alt="Connexion à distance au réseau d'une entreprise 1" />
<ul>
  <li>Saisissez <strong>XP1</strong> dans l'écran <strong>Nom de la connexion</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/ConnexionReseauEntreprise2.png" alt="Connexion à distance au réseau d'une entreprise 2" />
<ul>
  <li>Saisissez ensuite le numéro de téléphone <strong>0800800800</strong>, puis cliquez sur <strong>Suivant</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/ConnexionReseauEntreprise3.png" alt="Connexion à distance au réseau d'une entreprise 3" />

<p class="notice remarque">Si vous utilisez une ligne téléphonique avec un préfixe tel que le 0, n'oubliez pas de l'indiquer</p>

<p>Si vous deviez utiliser une carte à puce pour votre authentification, il faudrait également configurer les étapes suivantes :</p>
<ul>
  <li>Ouvrez les <strong>Propriétés</strong> de la connexion d'accès à distance créée précédemment, puis sélectionnez l'onglet <strong>Sécurité</strong>.</li>
  <li>Dans la zone <strong>Options de sécurité</strong>, activez   l'option <strong>Avancées (paramètres personnalisés)</strong>.</li>
  <li>Cliquez sur le bouton <strong>Paramètres</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/ProprietesSecurite1.png" alt="Propriétés de sécurité 1" />
<ul>
  <li>Activez   l'option <strong>Utiliser le protocole EAP  (Extensible Authentication Protocol)</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/ProprietesSecurite2.png" alt="Propriétés de sécurité 2" />

<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Activer le Firewall et filtrer les ports</a></h2>
<p>Dans cet exercice nous allons activer le firewall sur l'ordinateur 1, et paramètrer le filtrage des ports pour n'accepter que les protocoles FTP et HTTP.</p>
<p>Pour ce faire, procédez de la manière suivante :</p>
<ul>
  <li>Activez les <strong>Propriétés</strong> de la connexion Internet dans le <strong>Panneau de configuration &gt; Connexion réseau et Internet  &gt; Connexion réseau</strong>.</li>
  <li>Dans l'onglet <strong>Avancé</strong>, cliquez sur le bouton <strong>Paramètres</strong>. </li>
</ul>
<img src="/assets/img/xp/xp9/Firewall1.png" alt="Activation du firewall 1" />
<ul>
  <li>Cochez l'option <strong>Activé (recommandé)</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/Firewall2.png" alt="Activation du firewall 2" />
<ul>
  <li>Dans l'onglet <strong>Avancé</strong>, choisissez la connexion <strong>XP1</strong> créée précédemment.</li>
  <li>Cliquez sur le bouton <strong>Paramètres</strong>. </li>
</ul>
<img src="/assets/img/xp/xp9/Firewall3.png" alt="Activation du firewall 3" />
<ul>
  <li>Cochez les options suivantes : <strong>Serveur FTP</strong> et <strong>Serveur Web (HTTP)</strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/Firewall4.png" alt="Activation du firewall 4" />

<h2><a href="#tdmchap4" name="chap4" id="chap4">4-Prendre le contrôle à distance</a></h2>
<p>Dans cet exercice, nous allons utiliser l'outil de prise de contrôle du Bureau à distance. </p>
<p>Il faut tout d'abord autoriser l'accès au Bureau à distance sur les deux ordinateurs.</p>
<ul>
  <li>Ouvrez les <strong>Propriétés</strong> du  <strong> Poste de Travail </strong>, puis sélectionnez l'onglet <strong>Utilisation à distance</strong>. </li>
  <li>Cochez les cases <strong>Autoriser l'envoi d'invitations d'assistance à distance à partir de cet ordinateur</strong> et <strong>Autoriser les utilisateurs à se connecter à distance à cet ordinateur</strong>.</li>
  </ul>
<img src="/assets/img/xp/xp9/UtilisationDistante1.png" alt="Utilisation à distance 1" />
<ul>
  <li>Cliquez sur le bouton <strong>Avancé...</strong> </li>
  <li>Cochez la case <strong>Autoriser le contrôle à distance de cet ordinateur</strong>. </li>
</ul>
<img src="/assets/img/xp/xp9/UtilisationDistante2.png" alt="Utilisation à distance 2" />
<ul>
  <li>Cliquez sur le bouton <strong>OK</strong> pour revenir sur la fenêtre précédente. </li>
  <li>Cliquez ensuite sur le bouton <strong>Choisir des utilisateurs distants...</strong> </li>
</ul>
<img src="/assets/img/xp/xp9/UtilisationDistante3.png" alt="Utilisation à distance 3" />
<ul>
  <li>Cliquez sur le bouton <strong>Ajouter...</strong></li>
  </ul>
<img src="/assets/img/xp/xp9/UtilisationDistante4.png" alt="Utilisation à distance 4" />
<p>Pour ajouter un utilisateur vous pouvez le saisir directement, puis cliquez sur <strong>Vérifier les noms</strong>. </p>
<p>Vous pouvez également cliquez sur le bouton <strong>Avancé</strong> pour le rechercher.</p>
<img src="/assets/img/xp/xp9/UtilisationDistante5.png" alt="Utilisation à distance 5" />
<p>Pour prendre le contrôle du Bureau à distance de l'ordinateur 2, procédez de la manière suivante :</p>
<ul>
  <li>Sur l'ordinateur 1, cliquez sur  <strong>Démarrer &gt; Accessoires &gt; Communications &gt; Connexion bureau à distance</strong>.</li>
  <li>Cliquez sur le bouton <strong>Options &gt;&gt;</strong> </li>
  <li>Saisissez les éléments suivants : Ordinateur : <strong>Ordi2</strong> ; Nom d'utilisateur : <strong>Util2</strong> ; Mot de passe : <strong>mdp2</strong> </li>
</ul>
<p>Cet utilisateur a déjà été créé lors de l'installation de Windows XP Professionnel. Si ce n'est pas le cas créez-le maintenant. </p>
<img src="/assets/img/xp/xp9/ConnexionBureauDistant1.png" alt="Connexion breau à distance 1" />
<p>Dans l'onglet <strong>Avancé</strong>, vous allez pouvoir modifier différents paramètres pour améliorer la connexion à distance. </p>
<img src="/assets/img/xp/xp9/ConnexionBureauDistant2.png" alt="Connexion breau à distance 2" />
<ul>
  <li>Testez cette connexion</li>
</ul>

<h2><a href="#tdmchap5" name="chap5" id="chap5">5-Autre méthode de prise de contrôle à distance</a></h2>
<p>Cette méthode consiste à utiliser le centre d'aide et de support de Windows. </p>
<ul>
  <li>Cliquez sur <strong>Invitez un ami à se connecter à votre ordinateur avec l'assistance à distance</strong>. </li>
</ul>
<img src="/assets/img/xp/xp9/AideSupport1.png" alt="Aide et Support 1" />
<ul>
  <li>Cliquez sur <strong>Inviter quelqu'un pour vous aider </strong>.</li>
</ul>
<img src="/assets/img/xp/xp9/AideSupport2.png" alt="Aide et Support 2" />
<ul>
  <li>Saisissez une adresse email valide.</li>
</ul>
<img src="/assets/img/xp/xp9/AideSupport3.png" alt="Aide et Support 3" />
<ul>
  <li>Saisissez votre nom tel que vous voulez le voir apparaître sur l'invitation.</li>
  <li>Laissez le délai d'expiration de la demande à 1 heure. </li>
</ul>
<img src="/assets/img/xp/xp9/AideSupport4.png" alt="Aide et Support 4" />
<ul>
  <li>Saisissez un mot de passe pour la connexion dans un souci de sécurité.</li>
</ul>
<img src="/assets/img/xp/xp9/AideSupport5.png" alt="Aide et Support 5" />
<p>Si vous ne voulez pas envoyer tout de suite l'invitation vous pouvez l'enregistrer. Elle portera le nom : <strong>RAinvitation.msrcincident</strong></p>
<img src="/assets/img/xp/xp9/AideSupport6.png" alt="Aide et Support 6" />


