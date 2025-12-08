🛠 Installation de Laravel sur Windows + PHPStorm
1️⃣ Pré-requis

Avant tout, assure-toi d’avoir installé :

PHP 8.1+ (Laravel 11 recommande PHP 8.2)

Composer (gestionnaire de dépendances PHP)

Node.js + NPM (pour front-end et build Tailwind/Alpine)

MySQL / MariaDB

Git

PHPStorm (idéalement la version Pro pour le débogage et la complétion)

2️⃣ Installer Composer et vérifier PHP

Ouvre PowerShell ou cmd et tape :

php -v
composer -V


Si la version PHP ou Composer n’est pas détectée, ajoute-les au PATH Windows.

3️⃣ Créer un projet Laravel

Dans le dossier où tu veux ton projet :

composer create-project laravel/laravel jackadit-laravel
cd jackadit-laravel

4️⃣ Ouvrir le projet dans PHPStorm

Lance PHPStorm

File > Open > sélectionne le dossier jackadit-laravel

PHPStorm détectera automatiquement le projet Laravel

Configure le PHP Interpreter :

Settings > Languages & Frameworks > PHP

Sélectionne le chemin vers ton PHP installé

5️⃣ Configurer la base de données

Crée une base MySQL, par exemple jackadit_laravel

Copie .env.example en .env :

copy .env.example .env


Modifie .env :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jackadit_laravel
DB_USERNAME=root
DB_PASSWORD=

6️⃣ Générer la clé de l’application
php artisan key:generate

7️⃣ Installer les dépendances front-end
npm install
npm run dev
# ou pour build production
npm run build

8️⃣ Lancer les migrations et seeders
php artisan migrate --seed

9️⃣ Lancer le serveur local
php artisan serve


L’application sera disponible sur http://127.0.0.1:8000

🔧 Astuces pour PHPStorm

Autocompletion : active Laravel Plugin pour PHPStorm

Debugging : configure Xdebug et le profil PHP

Terminal intégré : tu peux lancer toutes les commandes Artisan et NPM depuis PHPStorm

Git intégré : commits et branches directement depuis l’IDE

10️⃣ Scripts batch (optionnel)

Si tu veux automatiser l’installation sous Windows, crée un fichier install-laravel.bat à la racine :

@echo off
REM Installer composer dependencies
composer install

REM Copier fichier .env
copy .env.example .env

REM Générer la clé Laravel
php artisan key:generate

REM Installer NodeJS dependencies
npm install

REM Compiler front en dev
npm run dev

REM Lancer migrations
php artisan migrate --seed

REM Lancer serveur Laravel
php artisan serve

pause

Double-clique sur le fichier pour lancer tout le setup automatiquement.

⚠️ Prérequis : MySQL doit être installé et accessible via mysql.exe. PHP et Composer doivent être installés ou disponibles dans le PATH. PHPStorm doit être installé à l’emplacement standard ou tu peux adapter le chemin.
# Script PowerShell : setup-laravel.ps1
```
# ===============================================
# Script d'installation Laravel complet sous Windows
# ===============================================

# --- CONFIGURATION ---
$projectName = "jackadit-laravel"
$projectPath = "$PWD\$projectName"
$databaseName = "jackadit_laravel"
$dbUser = "root"
$dbPassword = ""

# --- FONCTION : Vérifier PHP ---
Write-Host "Vérification de PHP..."
php -v
if ($LASTEXITCODE -ne 0) { Write-Error "PHP non trouvé. Installe PHP et ajoute-le au PATH."; exit }

# --- FONCTION : Vérifier Composer ---
Write-Host "Vérification de Composer..."
composer -V
if ($LASTEXITCODE -ne 0) { Write-Error "Composer non trouvé. Installe Composer et ajoute-le au PATH."; exit }

# --- CRÉER LE PROJET LARAVEL ---
Write-Host "Création du projet Laravel..."
composer create-project laravel/laravel $projectName
if ($LASTEXITCODE -ne 0) { Write-Error "Erreur lors de la création du projet."; exit }

Set-Location $projectPath

# --- COPIER .env et CONFIG BASE DE DONNÉES ---
Write-Host "Configuration de l'environnement..."
Copy-Item .env.example .env -Force

(Get-Content .env) -replace 'DB_DATABASE=.*', "DB_DATABASE=$databaseName" |
Set-Content .env
(Get-Content .env) -replace 'DB_USERNAME=.*', "DB_USERNAME=$dbUser" |
Set-Content .env
(Get-Content .env) -replace 'DB_PASSWORD=.*', "DB_PASSWORD=$dbPassword" |
Set-Content .env

# --- CRÉER LA BASE DE DONNÉES MYSQL ---
Write-Host "Création de la base MySQL..."
$createDB = "CREATE DATABASE IF NOT EXISTS $databaseName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
& mysql -u$dbUser -p$dbPassword -e $createDB

# ex : mysql -uuser -ppass -e "SQL"

# --- GÉNÉRER LA CLÉ DE L'APPLICATION ---
Write-Host "Génération de la clé Laravel..."
php artisan key:generate

# --- INSTALLER DEPENDANCES FRONT-END ---
Write-Host "Installation des dépendances NPM..."
npm install
npm run dev

# --- LANCER MIGRATIONS ET SEEDERS ---
Write-Host "Lancer les migrations et seeders..."
php artisan migrate --seed

# --- OUVRIR PHPSTORM ---
Write-Host "Ouverture du projet dans PHPStorm..."
$phpStormPath = "C:\Program Files\JetBrains\PhpStorm\bin\phpstorm64.exe"
Start-Process $phpStormPath $projectPath

# --- LANCER LE SERVEUR LOCAL ---
Write-Host "Démarrage du serveur Laravel..."
Start-Process "php" -ArgumentList "artisan serve"

Write-Host "✅ Installation complète terminée !"
```

# Script PowerShell : setup-laravel-full.ps2
⚠️ Cette version est assez lourde et nécessite des droits administrateurs.
PowerShell ultra-complète pour Windows qui prépare un projet Laravel e-learning prêt à l’emploi, avec :
- PHP, Composer, Node.js/NPM, MySQL
- Laravel + .env configuré
- Base de données créée
- Dépendances front (Tailwind CSS, Alpine.js)
- Spatie Laravel Permissions pour gestion des rôles
- Migrations et seeders
- Ouverture PHPStorm
- Lancement serveur Laravel

```
# =============================================================
# Script interactif Laravel e-learning + PHPStorm + Tailwind
# =============================================================

# --- DEMANDER LES CONFIGS À L'UTILISATEUR ---
$projectName = Read-Host "Nom du projet Laravel"
$projectPath = "$PWD\$projectName"

$databaseName = Read-Host "Nom de la base de données MySQL"
$dbUser = Read-Host "Utilisateur MySQL (ex: root)"
$dbPassword = Read-Host "Mot de passe MySQL (laisser vide si aucun)"

$phpStormPath = Read-Host "Chemin complet vers phpstorm64.exe (ex: C:\Program Files\JetBrains\PhpStorm\bin\phpstorm64.exe)"

# --- FONCTION : Vérifier et installer PHP ---
if (-not (Get-Command php -ErrorAction SilentlyContinue)) {
    Write-Host "PHP non trouvé, installation via Chocolatey..."
    choco install php -y
    refreshenv
}
php -v

# --- Vérifier Composer ---
if (-not (Get-Command composer -ErrorAction SilentlyContinue)) {
    Write-Host "Composer non trouvé, installation via script officiel..."
    Set-Location $env:TEMP
    Invoke-WebRequest -Uri https://getcomposer.org/installer -OutFile composer-setup.php
    php composer-setup.php
    Move-Item composer.phar "C:\ProgramData\Composer\composer.phar" -Force
    setx PATH "$env:PATH;C:\ProgramData\Composer"
    refreshenv
}
composer -V

# --- Vérifier Node.js + NPM ---
if (-not (Get-Command npm -ErrorAction SilentlyContinue)) {
    Write-Host "Node.js non trouvé, installation via Chocolatey..."
    choco install nodejs-lts -y
    refreshenv
}
node -v
npm -v

# --- Vérifier MySQL ---
if (-not (Get-Command mysql -ErrorAction SilentlyContinue)) {
    Write-Host "MySQL non trouvé, installation via Chocolatey..."
    choco install mysql -y
    refreshenv
}
mysql -V

# --- CRÉER LE PROJET LARAVEL ---
Write-Host "Création du projet Laravel..."
composer create-project laravel/laravel $projectName
Set-Location $projectPath

# --- CONFIGURER .env ---
Write-Host "Configuration de l'environnement..."
Copy-Item .env.example .env -Force

(Get-Content .env) -replace 'DB_DATABASE=.*', "DB_DATABASE=$databaseName" |
    Set-Content .env
(Get-Content .env) -replace 'DB_USERNAME=.*', "DB_USERNAME=$dbUser" |
    Set-Content .env
(Get-Content .env) -replace 'DB_PASSWORD=.*', "DB_PASSWORD=$d_*_

```
# Script PowerShell : setup-laravel-elearn-full.ps3
```
# =============================================================
# Script Laravel e-learning complet MVP + Dashboard + Seeders
# =============================================================

# --- CONFIGURATION INTERACTIVE ---
$projectName = Read-Host "Nom du projet Laravel"
$projectPath = "$PWD\$projectName"

$databaseName = Read-Host "Nom de la base de données MySQL"
$dbUser = Read-Host "Utilisateur MySQL (ex: root)"
$dbPassword = Read-Host "Mot de passe MySQL (laisser vide si aucun)"

$phpStormPath = Read-Host "Chemin complet vers phpstorm64.exe (ex: C:\Program Files\JetBrains\PhpStorm\bin\phpstorm64.exe)"

# --- CREER LE PROJET LARAVEL ---
composer create-project laravel/laravel $projectName
Set-Location $projectPath

# --- CONFIGURATION .env ---
Copy-Item .env.example .env -Force
(Get-Content .env) -replace 'DB_DATABASE=.*', "DB_DATABASE=$databaseName" | Set-Content .env
(Get-Content .env) -replace 'DB_USERNAME=.*', "DB_USERNAME=$dbUser" | Set-Content .env
(Get-Content .env) -replace 'DB_PASSWORD=.*', "DB_PASSWORD=$dbPassword" | Set-Content .env

# --- CREER BASE DE DONNEES ---
$createDB = "CREATE DATABASE IF NOT EXISTS $databaseName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
& mysql -u$dbUser -p$dbPassword -e $createDB

# --- GENERER CLE LARAVEL ---
php artisan key:generate

# --- INSTALLATION FRONT-END ---
npm install
npm install tailwindcss@latest postcss@latest autoprefixer@latest --save-dev
npm install alpinejs --save
npx tailwindcss init -p

# --- INSTALLER SPATIE PERMISSIONS ---
composer require spatie/laravel-permission
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

# --- CREER MODELES ET MIGRATIONS ---
php artisan make:model Course -m
php artisan make:model Lesson -m
php artisan make:model Quiz -m
php artisan make:model User -m

# --- CREER CONTROLLERS ---
php artisan make:controller CourseController --resource
php artisan make:controller LessonController --resource
php artisan make:controller QuizController --resource
php artisan make:controller AdminController

# --- AJOUTER ROUTES DE BASE DANS web.php ---
$routesPath = "$projectPath\routes\web.php"
Add-Content $routesPath "`nRoute::resource('courses', CourseController::class);"
Add-Content $routesPath "`nRoute::resource('lessons', LessonController::class);"
Add-Content $routesPath "`nRoute::resource('quizzes', QuizController::class);"
Add-Content $routesPath "`nRoute::get('admin', [AdminController::class, 'index'])->name('admin.index');"

# --- MIGRATIONS ---
php artisan migrate

# --- CREER VUES FRONT-END ---
$viewsPath = "$projectPath\resources\views"
# Layout
$layoutPath = "$viewsPath/layouts"
New-Item -ItemType Directory -Force -Path $layoutPath
@"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>@yield('title', 'E-Learning')</title>
    <script src='https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js' defer></script>
    <link href='{{ asset("css/app.css") }}' rel='stylesheet'>
</head>
<body class='bg-gray-100'>
    <nav class='bg-blue-600 text-white p-4'>
        <a href='{{ route("courses.index") }}' class='mr-4'>Cours</a>
        <a href='{{ route("lessons.index") }}' class='mr-4'>Leçons</a>
        <a href='{{ route("quizzes.index") }}' class='mr-4'>Quiz</a>
        <a href='{{ route("admin.index") }}'>Admin</a>
    </nav>
    <div class='container mx-auto mt-6'>
        @yield('content')
    </div>
</body>
</html>
"@ | Out-File "$layoutPath/app.blade.php" -Encoding utf8

# Courses views
$courseViews = "$viewsPath/courses"
New-Item -ItemType Directory -Force -Path $courseViews
@"
@extends('layouts.app')
@section('title', 'Cours')
@section('content')
<h1 class='text-2xl font-bold mb-4'>Liste des cours</h1>
<p>Contenu des cours...</p>
@endsection
"@ | Out-File "$courseViews/index.blade.php" -Encoding utf8

# Lessons views
$lessonViews = "$viewsPath/lessons"
New-Item -ItemType Directory -Force -Path $lessonViews
@"
@extends('layouts.app')
@section('title', 'Leçons')
@section('content')
<h1 class='text-2xl font-bold mb-4'>Liste des leçons</h1>
<p>Contenu des leçons...</p>
@endsection
"@ | Out-File "$lessonViews/index.blade.php" -Encoding utf8

# Quizzes views
$quizViews = "$viewsPath/quizzes"
New-Item -ItemType Directory -Force -Path $quizViews
@"
@extends('layouts.app')
@section('title', 'Quiz')
@section('content')
<h1 class='text-2xl font-bold mb-4'>Liste des quiz</h1>
<p>Contenu des quiz...</p>
@endsection
"@ | Out-File "$quizViews/index.blade.php" -Encoding utf8

# Admin view
$adminViews = "$viewsPath/admin"
New-Item -ItemType Directory -Force -Path $adminViews
@"
@extends('layouts.app')
@section('title', 'Dashboard Admin')
@section('content')
<h1 class='text-2xl font-bold mb-4'>Dashboard Admin</h1>
<p>Gestion des utilisateurs et rôles ici...</p>
@endsection
"@ | Out-File "$adminViews/index.blade.php" -Encoding utf8

# --- SEEDERS DE BASE ---
php artisan make:seeder DatabaseSeeder
@"
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'instructor']);
        Role::create(['name' => 'student']);

        // Users
        \$admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);
        \$admin->assignRole('admin');

        // Courses
        Course::factory(3)->create();
    }
}
"@ | Out-File "$projectPath/database/seeders/DatabaseSeeder.php" -Encoding utf8

php artisan db:seed

# --- OUVRIR PHPSTORM ---
if (Test-Path $phpStormPath) {
    Start-Process $phpStormPath $projectPath
} else {
    Write-Warning "PHPStorm non trouvé. Vérifiez le chemin : $phpStormPath"
}

# --- LANCER LE SERVEUR LOCAL ---
Start-Process "php" -ArgumentList "artisan serve"

Write-Host "✅ MVP e-learning Laravel complet prêt à coder !"

```

