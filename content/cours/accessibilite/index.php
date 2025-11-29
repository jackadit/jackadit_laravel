<?php
// Activer l'affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// En-tête HTML
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessibilité Numérique</title>
</head>
<body>
<?php
// Inclure le contenu du fichier accessibilite.inc.php
$content = file_get_contents(__DIR__ . '/accessibilite.inc.php');
if ($content === false) {
    echo '<h1>Erreur lors du chargement du contenu</h1>';
    echo '<p>Impossible de charger le fichier accessibilite.inc.php</p>';
    echo '<p>Erreur : ' . error_get_last()['message'] . '</p>';
} else {
    echo $content;
}
?>
</body>
</html>
