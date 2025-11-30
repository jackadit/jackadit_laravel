# 📘 E-Learn Platform

Application web complète d’e-learning développée avec **Laravel**, permettant la gestion de cours en ligne, le suivi des apprenants, des quiz et un espace d’administration avancé.

---

## 🚀 Table des matières
1. [À propos du projet](#-à-propos-du-projet)
2. [Fonctionnalités principales](#-fonctionnalités-principales)
3. [Technologies utilisées](#-technologies-utilisées)
4. [Installation](#-installation)
5. [Configuration de l’environnement](#-configuration-de-lenvironnement)
6. [Structure du projet](#-structure-du-projet)
7. [Migrations et seeders](#-migrations-et-seeders)
8. [Commandes utiles](#-commandes-utiles)
9. [Roadmap](#-roadmap)
10. [Contribuer](#-contribuer)
11. [Licence](#-licence)

---

# 📘 À propos du projet

Cette application est une plateforme d’e-learning moderne permettant :

- aux **formateurs** de créer et organiser leurs cours ;
- aux **étudiants** de suivre des leçons sous forme de texte, fichiers ou vidéos ;
- aux **administrateurs** de superviser l’activité globale.

Le projet est conçu avec une architecture claire, extensible et orientée scalabilité.

---

# ✨ Fonctionnalités principales

## 👩‍🏫 Gestion des cours
- Création / modification / suppression de cours
- Organisation en modules / leçons
- Contenu : texte, fichiers, vidéos (upload ou liens externes)

## 🧑‍🎓 Espace étudiant
- Inscription aux cours
- Leçons progressives
- Suivi d’avancement
- Tableau de bord personnel

## 📝 Quiz
- QCM
- Correction automatisée
- Score par module et par cours

## 🔐 Authentification & rôles
- Étudiant
- Formateur
- Administrateur
- Gestion RBAC (via Spatie Permissions – optionnel)

## 💳 Paiements (optionnel)
- Stripe
- PayPal (à implémenter)

## 🖥️ Dashboard administrateur
- Statistiques
- Gestion des utilisateurs
- Gestion des cours et inscriptions

---

# 🛠 Technologies utilisées

### Backend
- **Laravel 12+**
- PHP 8.4+
- MySQL / MariaDB
- Laravel Sanctum
- Spatie Permissions (optionnel)

### Frontend
- Blade
- TailwindCSS
- Alpine.js

### Environnement / Outils
- Windows 11
- PHPStorm
- Git
- Composer
- NPM / PNPM

---

# ⚙️ Installation

### 1. Cloner le dépôt
```bash
git clone https://github.com/username/elearn-platform.git
cd elearn-platform
```
### 2. Installer les dépendances PHP
```bash
composer install
```
### 3. Installer les dépendances front
```bash
npm install
npm run build
# ou
npm run dev
```
### 4. Copier le fichier d'environnement
```bash
cp .env.example .env
```
### 5. Générer la clé d'application
```bash
php artisan key:generate
```

### 6. Configurer la base de données dans .env

### 7. Lancer les migrations + seeds
```bash
php artisan migrate --seed
```
### 8. Lancer le serveur
```bash
php artisan serve
```
# 🔧 Configuration de l’environnement

## Base de données
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jackadit_laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Fichiers
```
FILESYSTEM_DISK=public
```
## Mail
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=xxxx
MAIL_PASSWORD=xxxx
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="admin@jackadit.com"
```

## Paiements (optionnel)
STRIPE_KEY=
STRIPE_SECRET=

# 🏗 Structure du projet
```
app/
├── Http/
│ ├── Controllers/
│ ├── Middleware/
│ ├── Requests/
│ └── Resources/
├── Models/
└── Services/

database/
├── migrations/
├── seeders/
└── factories/

resources/
├── views/
├── css/
└── js/

routes/
├── web.php
└── api.php
```

# 🗃 Migrations et seeders

### Lancer les migrations :
```bash
php artisan migrate
```
### Lancer les seeders :
```bash
php artisan db:seed
```
### Réinitialiser complètement la base :
```bash
php artisan migrate:fresh --seed
```
# 🧰 Commandes utiles

| Commande                           | Description                                |
| ---------------------------------- | ------------------------------------------ |
| `php artisan serve`                | Lance le serveur Laravel                   |
| `php artisan migrate:fresh --seed` | Réinitialise entièrement la BDD            |
| `npm run dev`                      | Build front en mode développement          |
| `npm run build`                    | Build front optimisé                       |
| `php artisan make:model Nom -mcr`  | Modèle + migration + contrôleur + resource |

# 🗺 Roadmap

## ✔️ MVP
- Authentification
- Gestion des cours et leçons
- Quiz simple
- Dashboard étudiant

## 🔜 V2
- Paiements
- Certificats PDF
- Commentaires & avis
- Notifications en temps réel

## 🚀 V3
- API mobile complète
- Vidéo streaming
- Gamification (badges, niveaux)

# 🤝 Contribuer
1. Forkez le projet
2. Créez une branche (feature/ma-feature)
3. Committez vos modifications
4. Ouvrez une Pull Request

Toutes les contributions sont les bienvenues !
# 📄 Licence

Projet sous licence **MIT**.
