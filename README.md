# BOOKNET

Bienvenue sur le dépôt du projet **BOOKNET**. Ce guide détaille toutes les étapes nécessaires pour installer et faire tourner le projet sainement sur votre machine locale après l'avoir cloné, en respectant les standards de l'écosystème Laravel.

## 🛠 Prérequis

Assurez-vous d'avoir installé les éléments suivants sur votre machine :
- **PHP** (version 8.3 ou supérieure)
- **Composer** (Gestionnaire de dépendances PHP)
- **Node.js & npm** (Gestionnaire de paquets JavaScript)
- **Git**
- Une base de données (SQLite par défaut, mais compatible MySQL, PostgreSQL, etc.)

---

## Installation & Lancement depuis Git

Suivez méticuleusement ces étapes dans l'ordre pour configurer le projet fraîchement cloné.

### 1. Cloner le dépôt et y accéder
```bash
git clone <URL_DU_DEPOT>
cd booknet
```

### 2. Installer les dépendances PHP
Cette commande parcourt le fichier `composer.json` et installe tous les paquets PHP nécessaires pour que Laravel fonctionne (le dossier `vendor` sera créé).
```bash
composer install
```

### 3. Configurer les variables d'environnement
Le projet requiert un fichier de configuration local. Copiez le fichier d'exemple fourni pour créer le vôtre :
```bash
cp .env.example .env
```
*(Remarque : Sous l'invite de commande Windows classique, utilisez `copy .env.example .env`)*

### 4. Générer la clé d'application
C'est une étape cruciale en sécurité cryptographique pour Laravel (chiffrage des sessions, des cookies, etc.). Elle va remplir la valeur `APP_KEY` dans votre `.env`.
```bash
php artisan key:generate
```

### 5. Configurer la base de données
Ouvrez le fichier `.env` que vous venez de créer et assurez-vous que les informations de base de données (lignes commençant par `DB_`) sont correctes. 
Par défaut, ce projet est configuré pour utiliser **SQLite**. A remplacer par **mysql**

*Si vous préférez MySQL ou PostgreSQL, modifiez les valeurs `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, et `DB_PASSWORD` dans votre `.env`.*

### 6. Exécuter les migrations
Cette étape va créer toutes les tables nécessaires dans votre base de données.
```bash
php artisan migrate
```
*Si vous souhaitez également injecter des fausses données ou les données par défaut (seeders), ajoutez le flag : `php artisan migrate --seed`*

### 7. Installer les dépendances Frontend (Node)
Le projet utilise NPM et Vite.js pour la gestion CSS (Tailwind) et JavaScript. Il faut donc installer les paquets côté JS (création du dossier `node_modules`).
```bash
npm install
```

### 8. Lier le répertoire de stockage (Optionnel mais recommandé)
Si le projet permet aux utilisateurs d'uploader des fichiers ou des images qui devront être rendus publics :
```bash
php artisan storage:link
```

---

## Démarrer les serveurs de développement

Pour travailler sur le projet, vous avez généralement besoin de faire tourner **deux serveurs simultanément** dans deux terminaux séparés.

**Terminal 1 : Compilation des assets (Vite.js)**
Ce serveur compile vos fichiers CSS/JS à la volée dès que vous les modifiez.
```bash
npm run dev
```

**Terminal 2 : Serveur PHP Laravel**
Ce serveur lance le moteur backend de votre application.
```bash
php artisan serve
```

**Félicitations !**
L'application devrait maintenant être accessible depuis votre navigateur à l'adresse : **[http://localhost:8000](http://localhost:8000)**

---

## Raccourcis disponibles sur ce projet

Des scripts utilitaires ont été définis dans le `composer.json` de ce projet pour vous faciliter la vie :
- Vous pouvez lancer simultanément les deux serveurs (PHP et Vite) avec une seule commande :
  ```bash
  composer run dev
  ```
- Pour lancer les tests fonctionnels et unitaires du projet (PHPUnit) :
  ```bash
  composer run test
  ```