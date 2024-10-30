## 🟣 Plateforme de Préparation aux Entretiens PHP + Laravel 🟣

**[Описание на русском языке](README_ru.md)**

Ce projet est une plateforme de préparation aux entretiens pour les développeurs PHP. Elle propose des ressources théoriques, des quiz et des exercices pratiques pour aider les utilisateurs à se préparer efficacement aux entretiens. Ce projet est également conçu comme un outil d'apprentissage pour maîtriser Laravel, PHP, la programmation orientée objet (POO), et l'architecture MVC.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Fonctionnalités

- Authentification des utilisateurs (inscription, connexion, déconnexion)
- Matériaux théoriques sur PHP et les entretiens
- Quiz et tests pour évaluer les connaissances
- Exercices pratiques pour renforcer les compétences
- Interface multilingue (français et russe)

---

## Création et Installation du Projet

### Pré-requis

- PHP version 8.1 ou supérieure
- Composer (gestionnaire de dépendances PHP)
- MySQL ou une autre base de données compatible

### Étapes pour créer et configurer le projet

1. **Installez Laravel globalement via Composer**
```bash
   composer global require laravel/installer 
```
2.	Créez un nouveau projet Laravel dans le répertoire souhaité

Accédez au répertoire où vous souhaitez créer le projet, puis exécutez:
```bash
   laravel php-laravel-proprep
```
Si laravel ne fonctionne pas, vous pouvez aussi utiliser:
```bash
    composer create-project laravel/laravel php-laravel-proprep
```
## Configuration de la connexion à la base de données

Ouvrez le fichier .env et spécifiez les paramètres de connexion à la base de données. Si vous utilisez MySQL, la configuration peut ressembler à ceci :
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=php_laravel_proprep
DB_USERNAME=root
DB_PASSWORD=root
```

3. Lancer les migrations de la base de données

Maintenant que la base de données est configurée, créez les tables nécessaires en exécutant les migrations :
```bash
php artisan migrate
```

4. Démarrer le serveur local pour les tests

Pour vérifier que Laravel fonctionne, lancez le serveur intégré :
```bash
php artisan serve
```

5. Vérifiez le projet

Ouvrez votre navigateur et accédez à http://localhost:8000. Si vous voyez la page de bienvenue de Laravel, tout est correctement configuré !

---

# Structure du Projet Laravel

Ce projet suit la structure standard de Laravel. Voici un aperçu rapide des dossiers principaux et de leur contenu.

## Dossiers principaux

- **app/** : Contient la logique principale de l'application, y compris les contrôleurs, les modèles et les services.
- **bootstrap/** : Dossier qui initialise l'application Laravel, notamment le fichier `app.php` qui prépare le lancement de l'application.
- **config/** : Dossier de configuration de l'application, contenant des fichiers pour configurer la base de données, la messagerie, les services tiers, etc.
- **database/** : Contient les migrations, les seeds, et parfois les factories pour configurer les tables de la base de données.
- **public/** : Ce dossier expose les fichiers publics (comme `index.php`), et héberge les ressources accessibles directement, telles que les images et les assets CSS/JavaScript.
- **resources/** : Contient les vues Blade (HTML), les assets non compilés (CSS, JavaScript), et les fichiers de traduction.
- **routes/** : Ici se trouvent tous les fichiers de routes. Par défaut, `web.php` et `api.php` définissent les routes pour le web et l'API.
- **storage/** : Utilisé pour stocker les logs, les fichiers de cache, les téléchargements utilisateur, et autres données temporaires.
- **tests/** : Contient les tests unitaires et fonctionnels de l'application. Par défaut, il y a les sous-dossiers `Feature` et `Unit`.
- **vendor/** : Crée par Composer, ce dossier contient toutes les dépendances du projet (comme Laravel lui-même).

## Fichiers principaux

- **artisan** : Interface en ligne de commande de Laravel pour gérer diverses tâches (migrations, tests, etc.).
- **composer.json** : Fichier de configuration de Composer, où sont définies les dépendances PHP du projet.
- **.env** : Fichier de configuration des variables d'environnement (base de données, mail, etc.).
- **server.php** : Fichier permettant de lancer le serveur PHP intégré pour les tests locaux.
- **README.md** : Documentation du projet, avec instructions pour l'installation et la configuration.

## Maintenant que la base de données et le serveur sont configurés, passons aux étapes suivantes :

	1.	Configurer l’authentification :
Vous pouvez rapidement ajouter un système d’enregistrement et de connexion avec le package Laravel Breeze.
Le stack par défaut de Breeze est Blade, qui utilise des templates Blade simples pour l’affichage du frontend de votre application. Vous pouvez installer le stack Blade en exécutant la commande breeze:install sans arguments supplémentaires et en sélectionnant le stack frontend Blade. Après l’installation de la structure Breeze, vous devrez également compiler les ressources frontend de votre application :
```bash
composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate
npm install && npm run dev
```
Après cela, Laravel ajoutera les pages de base pour l’inscription, la connexion et la réinitialisation de mot de passe.


## Configurer le site avec le français comme langue par défaut

Pour que tout l’interface Laravel, y compris les messages d’erreur et d’authentification, soit en français, voici les étapes à suivre :

1. Définir le français comme langue par défaut

Dans le fichier .env, configurez la langue par défaut (APP_LOCALE) sur le code fr :
`APP_LOCALE=fr`

2. Créer les fichiers de langue en français

Laravel fournit par défaut les fichiers de traduction en anglais dans resources/lang/en. Pour afficher l’interface en français, créez un dossier resources/lang/fr et copiez-y tous les fichiers de resources/lang/en. Ensuite, traduisez les chaînes clés dans ces fichiers.

Si le dossier lang n’existe pas dans resources, vous pouvez le créer manuellement :
```bash
mkdir -p resources/lang/fr
```

Exemple de traduction pour le fichier auth.php :
```bash
// resources/lang/fr/auth.php
return [
    'failed' => 'Les informations d\'identification ne sont pas correctes.',
    'password' => 'Le mot de passe est incorrect.',
    'throttle' => 'Trop de tentatives. Veuillez réessayer dans :seconds secondes.',
];
```
3. Vider le cache de configuration

Après avoir modifié .env et ajouté les fichiers de traduction, videz le cache de configuration pour que les modifications soient prises en compte :
```bash
php artisan config:cache
```
L’interface Laravel utilisera désormais le français par défaut pour les messages et éléments de l’interface. Si vous devez ajouter une nouvelle langue ou revenir à l’anglais, il vous suffit de modifier APP_LOCALE dans .env et d’ajouter les fichiers de traduction correspondants.

---

## Auteur

Alex NESVIT — Développeur du projet.

## Licence

Ce projet est sous licence MIT.
