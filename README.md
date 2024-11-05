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

## home.blade.php

Dans le projet, un nouveau fichier home.blade.php a été créé pour servir de page d’accueil de l’application. Ce fichier est une version modifiée de la page d’accueil par défaut de Laravel et est adapté pour l’interface utilisateur, y compris les modifications du titre de la page et la traduction des éléments clés de l’interface en français.

	•	Ajout du fichier home.blade.php : La page est utilisée comme page d’accueil principale avec une personnalisation de style.
	•	Mise à jour du titre de la page : Le titre a été modifié pour afficher le nom personnalisé de l’application.

Dans le code actuel, le titre de la page est défini comme `<title>Laravel</title>`.

	•	Solution : Remplacez-le par le nom de votre application en utilisant les traductions.
`<title>{{ __('messages.app_name') }}</title>`

## Videz le cache et redémarrez le serveur
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear 
```

## Puis redémarrez le serveur :
```bash
php artisan serve
```

## JIRA

Si tu gères également ton développement sur Jira, où les tâches sont organisées en sprints Scrum, voici quelques étapes pour intégrer cette information avec Git et garder de l’ordre dans le dépôt.

	1.	Création de branches pour les tâches

Chaque tâche dans Jira a souvent un ID unique, par exemple PROJECT-123. Pour chaque tâche, il est conseillé de créer une branche distincte avec un nom qui inclut cet ID. Cela aide à suivre quelle branche correspond à quelle tâche.
```bash
git checkout -b PROJECT-123-feature
```
	•	Ici, PROJECT-123 est l’ID de la tâche Jira, et feature est une brève description de ce que tu fais.
	•	Cela simplifie la navigation si les tâches suivent une convention de nommage cohérente.

	2.	Utilisation de commits liés aux tâches Jira

Quand tu fais un commit, ajoute l’ID de la tâche dans le message de commit, par exemple :
```bash
git commit -m "PROJECT-123 : ajout de la prise en charge d’une nouvelle fonction"
```
	•	Un tel message permet de comprendre rapidement à quelle tâche se réfère le commit.
	•	De nombreuses plateformes (Bitbucket, GitHub) permettent d’intégrer Jira pour que les liens mènent directement à la tâche.

	3.	Création de Pull Request (PR) avec mention de Jira

Quand une tâche est terminée, crée un PR en incluant l’ID de la tâche dans la description :

	•	Titre du PR : PROJECT-123 : Implémentation de la fonctionnalité X
	•	Description du PR : Indique brièvement ce qui a été fait en mentionnant la tâche Jira, pour que les reviewers comprennent le contexte.

Créer une branche directement depuis une tâche Jira est une bonne pratique, surtout si ton équipe utilise l’intégration Jira et Git (par exemple Bitbucket, GitHub ou GitLab). Cette approche présente plusieurs avantages :

	1.	Association automatique de la tâche :
En créant une branche à partir de Jira, elle aura automatiquement un nom incluant l’ID de la tâche, par exemple, PROJECT-123-feature. Cela aide à maintenir la structure des branches et à les associer immédiatement aux tâches correspondantes.
	2.	Suivi simplifié de l’avancement :
Jira associe automatiquement les commits, PR et branches à la tâche, donc toutes les informations s’affichent au même endroit, simplifiant le suivi.
	3.	Réduction du risque d’erreurs de nommage :
Nommer manuellement les branches avec les ID des tâches peut prêter à erreur. Jira génère automatiquement un nom avec le bon ID, ce qui évite les erreurs.
	4.	Uniformité des noms de branches :
Tous les membres de l’équipe, en créant des branches via Jira, suivent un format cohérent, rendant le dépôt plus structuré et lisible.

Quand utiliser cette fonctionnalité

	•	Si l’équipe travaille activement avec Jira et que tous les membres ont accès à Jira pour gérer les tâches.
	•	Si toutes les tâches sont distribuées par sprint et que chaque membre connaît ses tâches assignées.
	•	Si une intégration entre Jira et le dépôt est en place, cela facilite la gestion des branches et le suivi des tâches.

Comment cela fonctionne

	1.	Sélectionnez une tâche dans Jira et cliquez sur le bouton « Créer une branche ».
	2.	Jira vous propose de choisir le dépôt et génère automatiquement un nom de branche basé sur l’ID de la tâche.
	3.	Une fois la branche créée, elle apparaîtra dans votre dépôt Git et sera associée à la tâche Jira.

Exemple de scénario

	1.	Tâche dans Jira : Supposons que vous ayez la tâche PROJECT-123 : Implémentation de l'authentification.
	2.	Création de la branche via Jira : Vous cliquez sur « Créer une branche » pour la tâche PROJECT-123.
	3.	La branche générée sera PROJECT-123-authentication.
	4.	Les commits et PR dans cette branche seront automatiquement liés à la tâche PROJECT-123.

Conclusion

Créer une branche directement depuis une tâche Jira permet de maintenir l’ordre, réduit le risque d’erreurs et rend les processus plus transparents. C’est un moyen efficace d’organiser le travail, surtout dans des équipes qui utilisent Jira pour la gestion des tâches.
```bash
git push --set-upstream origin SCRUM-7-menu-accuelle
```
Cette commande va pousser la branche actuelle vers le dépôt distant et l’établir en tant que branche upstream, permettant l’utilisation simple de git push pour les prochains commits.

Pour lier automatiquement les nouvelles branches au dépôt distant lors du premier push, tu peux activer l’option :
```bash
git config --global push.autoSetupRemote true
```
Ainsi, lors du premier push d’une nouvelle branche, la commande git push configurera automatiquement l’upstream sans étapes supplémentaires.


---

## Auteur

Alex NESVIT — Développeur du projet.

## Licence

Ce projet est sous licence MIT.
