<?php
/*
	+---------------------------------------------------------------+
	| Jackadit version 1.0 											                    |
	+---------------------------------------------------------------+
	| Copyright (c) 2007 Jackadit 									                |
	+---------------------------------------------------------------+
	| xpcours8.php   v 1.0   26/05/07	21:45:00	                    |
	+---------------------------------------------------------------+
	| Auteur: Jackadit <jackadit@jackadit.com>						          |
	+---------------------------------------------------------------+
	| But : page du cours 8											                    |
	+---------------------------------------------------------------+
*/
$sNavigation=navigation('xp', '8');
?>
<aside>
<p class="h2-like">Table des matières</p>
  <ol id="xp" class="unstyled">
		<li><a href="#chap1" name="tdmchap1" id="tdmchap1">Installer une nouvelle carte réseau</a></li>
		<li><a href="#chap2" name="tdmchap2" id="tdmchap2">Configurer le protocole TCP/IP</a></li>
		<li><a href="#chap3" name="tdmchap3" id="tdmchap3">Adressage IP</a></li>
  </ol>
</aside>



<h1>Gestion du réseau</h1>
<h3>Durée :</h3>
<p>45 minutes</p>
<h3>Objectifs</h3>
<ul>
  <li>Installer et configurer une carte réseau</li>
    <li>Installer les services appropriés</li>
  <li>Dépanner le réseau</li>
</ul>
<h3>Prérequis</h3>
  <p>Aucun</p>
<h3>Matériel à prévoir</h3>
<p>Deux ordinateurs avec carte réseau, configurés avec Windows XP et connecté entre eux par l'intermédiaire d'un câble croisé ou d'un Hub/switch. Le CD-Rom d'installation de Windows XP Pro. </p>

<h2><a href="#tdmchap1" name="chap1" id="chap1">1-Installer une nouvelle carte réseau</a></h2>
<p>Pour les besoins de l'exercice nous allons désinstaller la carte réseau de notre ordinateur. Pour cela :</p>
<ul>
  <li>Ouvrez le <strong>Gestionnaire de périphérique</strong>.</li>
  <li>Sur la carte réseau, activez le menu contextuel et choisissez <strong>désinstaller</strong>.</li>
</ul>
<img src="/assets/img/xp/xp8/DesinstallerCarteReseau.png" alt="Désisntaller une carte réseau" />
<ul>
  <li>Redémarrez ensuite votre ordinateur.</li>
  <li>Au redémarrage, si aucun message de détection automatique de matériel n'apparaît, ouvrez le <strong>Panneau de configuration &gt; Imprimantes et autres périphériques</strong>  et cliquez sur <strong>Ajout de matériel</strong>.</li>
</ul>
<p>L'<strong>Assistant Ajout de matériel</strong> démarre et essaye de détecter automatiquement les nouveaux périphériques. Fournissez éventuellement les <strong>pilotes</strong> des cartes réseaux. Sinon installez-la manuellement.</p>
<p>Vérifiez que vous utilisez bien cette carte réseau en suivant la procédure suivante :</p>
<ul>
  <li>Ouvrez le <strong>Panneau de configuration &gt; Connexions réseau et Internet &gt; Connexion réseau</strong>.</li>
  <li>Affichez les <strong>Propriétés</strong> de la <strong>Connexion au réseau local</strong>.</li>
</ul>
<img src="/assets/img/xp/xp8/ConnexionReseau2.png" alt="Propriétés de la Connexion au réseau local" />
<p class="notice remarque">En double-cliquant sur la <strong>Connexion au réseau local</strong>, vous obtenez l'indication de l'état de la connexion. </p>
 
<p>Vous pouvez également obtenir l'<strong>adresse MAC</strong> de votre carte réseau. Pour cela :</p>
<ul>
  <li>Ouvrez une ligne de commande et saisissez <strong>ipconfig /all</strong>.</li>
</ul>
<img src="/assets/img/xp/xp8/ipconfig.png" alt="Ipconfig /all" />
<p>L'adresse MAC dans notre exemple est : <strong>00-03-FF-B6-33-38</strong> </p>

<h2><a href="#tdmchap2" name="chap2" id="chap2">2-Configurer le protocole TCP/IP</a></h2>
<p>Pour accédez aux propriétés du protocole IP, procédez de la manière suivante :</p>
<ul>
  <li>Ouvrez les <strong>Connexions réseaux</strong> dans le <strong>Panneau de configuration</strong>.</li>
  <li>Cliquez avec le bouton droit sur <strong>Connexion au réseau local</strong> et sélectionnez <strong>Propriétés</strong>. </li>
  <li>Sélectionnez <strong>Protocole Internet (TCP/IP)</strong> et cliquez sur le bouton <strong>Propriétés</strong>. </li>
  <li>Sélectionnez <strong>Utiliser l'adresse IP suivante</strong> et saisissez <strong>192.168.0.1</strong>. </li>
  <li>Cliquez dans <strong>Masque de sous-réseau</strong>. Le masque <strong>255.255.255.0</strong> devrait apparaître automatiquement. </li>
</ul>
<img src="/assets/img/xp/xp8/ProtocoleIP.png" alt="Configuration du protocole IP" />
<ul>
  <li>Faite de même pour le deuxième ordinateur en indiquant l'adresse IP : <strong>192.168.0.2</strong>. </li>
</ul>
	<p>Pour vérifiez si les paramétrages ont été effectués correctement, utilisez la commande <strong>ipconfig</strong>.</p>
<img src="/assets/img/xp/xp8/ipconfig1.png" alt="Ipconfig" />
<p>Pour vérifiez si la carte réseau fonctionne, vous pouvez utiliser la commande <strong>ping</strong>. </p>
<ul>
  <li>Ouvrez une ligne de commande et saisissez ping 192.168.0.1 </li>
</ul>
<img src="/assets/img/xp/xp8/ping1.png" alt="commande ping" />

<p class="notice remarque">Vous pouvez également saisir <strong>ping 127.0.0.1</strong>.</p>

<p>Pour vérifiez si la connexion réseau entre les deux ordinateurs fonctionne, vous pouvez également utiliser la commande <strong>ping</strong>. </p>
<ul>
  <li>Ouvrez une ligne de commande et saisissez <strong>ping 192.168.0.2</strong> </li>
</ul>
<img src="/assets/img/xp/xp8/ping2.png" alt="commande ping" />

<p class="notice remarque">Vous  obtenez le même résultat en utilisant le nom de l'ordinateur : <strong>ping Ordi2</strong>.</p>


<h2><a href="#tdmchap3" name="chap3" id="chap3">3-Adressage IP</a></h2>
<p>Pour communiquer entre eux, les ordinateurs sur un réseau utilisent un langage de communication appelé <strong>protocole</strong>. Le protocole standard, routable, est le <strong>TCP/IP</strong> (Transfert Control Protocol / Internet Protocol).</p>
<p>Ce protocole identifie les ordinateurs sources et de destination en fonction de leur <strong>adresse IP</strong>. </p>
<p>Une adresse IP est une suite de quatre nombres séparés par des points qui définit de manière unique un ordinateur sur un réseau (ex : 192.168.0.1).</p>
<p>On distingue des classes d'adresses IP qui permettent de créer des sous-réseaux. Chaque classe d'adresse à un masque de réseau spécifique qui permet de ne voir que les machines faisant parties du sous-réseau. </p>
<p>Toutes les adresses IP dont le premier octet est compris entre <strong>1</strong> et <strong>127</strong> appartiennent à la <strong>Classe A</strong> et ont pour masque de sous-réseau <strong>255.0.0.0</strong>.</p>
<p>Toutes les adresses IP dont le premier octet est compris entre <strong>128</strong> et <strong>191</strong> appartiennent à la <strong>Classe B </strong> et ont pour masque de sous-réseau <strong>255.255.0.0</strong>.</p>
<p>Toutes les adresses IP dont le premier octet est compris entre <strong>192</strong> et <strong>223</strong> appartiennent à la <strong>Classe C </strong> et ont pour masque de sous-réseau <strong>255.255.255.0</strong>.</p>
<p>&nbsp;</p>

