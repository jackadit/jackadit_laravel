<?php
/**
 * Fichier : qlio.inc.php
 * Description : Page d'accueil des cours QLIO
 * Auteur : Jackadit
 * Date : 03/11/2025
 */

// Charger la configuration
$configPath = __DIR__ . '/config.json';
$config = file_exists($configPath) ? json_decode(file_get_contents($configPath), true) : [];

// Définir les thèmes depuis la configuration ou utiliser des valeurs par défaut
$themes = $config['themes'] ?? [
    'qualite' => [
        'titre' => 'Qualité',
        'description' => 'Cours sur la qualité en entreprise',
        'icone' => 'fa-check-circle',
        'couleur' => '#3498db'
    ],
    'logistique' => [
        'titre' => 'Logistique',
        'description' => 'Cours sur la logistique industrielle',
        'icone' => 'fa-truck',
        'couleur' => '#2ecc71'
    ],
    'organisation' => [
        'titre' => 'Organisation',
        'description' => 'Cours sur l\'organisation industrielle',
        'icone' => 'fa-sitemap',
        'couleur' => '#9b59b6'
    ]
];

// Titre de la page
$titre = $config['titre'] ?? 'Qualité, Logistique Industrielle et Organisation';
$description = $config['description'] ?? 'Découvrez nos formations en Qualité, Logistique Industrielle et Organisation';
?>

<section class="box box-light">
    <h1><?= htmlspecialchars($titre) ?></h1>
    <p class="lead"><?= htmlspecialchars($description) ?></p>

    <div class="grid-3-small-2-tiny-1 has-gutter" style="margin-top: 2rem;">
        <?php foreach ($themes as $slug => $theme): ?>
        <div class="card-item" style="--card-bg: <?= htmlspecialchars($theme['couleur'] ?? '#3498db') ?>">
            <a href="/cours/qlio/<?= htmlspecialchars($slug) ?>">
                <div class="card-banner">
                    <i class="fas <?= htmlspecialchars($theme['icone'] ?? 'fa-book') ?> fa-3x"></i>
                </div>
                <div class="card-content">
                    <h2 class="card-title"><?= htmlspecialchars($theme['titre']) ?></h2>
                    <p><?= htmlspecialchars($theme['description']) ?></p>
                </div>
                <div class="card-btn">
                    <span class="button-base">
                        Accéder au cours
                    </span>
                </div>
            </a>
        </div>
        <?php endforeach; ?>
        </p>
        
        <p class="text-lg text-gray-700 mb-6">
            Les cours sont organisés suivant les thèmes suivants :
        </p>
        
        <?php if (!empty($themes)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($themes as $theme => $details): ?>
                    <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">
                            <?= htmlspecialchars($details['titre'] ?? 'Sans titre') ?>
                        </h2>
                        <p class="text-gray-600 mb-4">
                            <?= htmlspecialchars($details['description'] ?? 'Description non disponible') ?>
                        </p>
                        <a href="/cours/qlio/<?= htmlspecialchars($theme) ?>" 
                           class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded">
                            Voir les cours
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-gray-600">Aucun thème disponible pour le moment.</p>
        <?php endif; ?>
    </div>
</div>