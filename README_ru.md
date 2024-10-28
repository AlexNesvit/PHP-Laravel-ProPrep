## 🟣 Платформа для Подготовки к Собеседованиям PHP + Laravel 🟣

**[Description en français](README.md)**

Этот проект — платформа для подготовки к собеседованиям разработчиков PHP. Она предлагает теоретические материалы, тесты и практические задания, чтобы помочь пользователям эффективно готовиться к собеседованиям. Проект также служит учебным инструментом для освоения Laravel, PHP, объектно-ориентированного программирования (ООП) и архитектуры MVC.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Функционал

- Аутентификация пользователей (регистрация, вход, выход)
- Теоретические материалы по PHP и подготовке к собеседованиям
- Тесты и квизы для оценки знаний
- Практические задания для укрепления навыков
- Мультиязычный интерфейс (французский и русский)

---

## Создание и Установка Проекта

### Предварительные требования

- PHP версии 8.1 или выше
- Composer (менеджер зависимостей PHP)
- MySQL или другая совместимая база данных

### Шаги для создания и настройки проекта

1. **Установите Laravel глобально через Composer**
   ```bash
   composer global require laravel/installer 
   ```

2.	Создайте новый проект Laravel в нужной директории
Перейдите в папку, где вы хотите создать проект, и выполните команду:
```bash
laravel new php-laravel-proprep
```

Если laravel new не работает, можно использовать:
```bash
composer create-project laravel/laravel php-laravel-proprep
```

Настрой подключение к базе данных:
Открой файл .env и укажи параметры для базы данных. Если используешь MySQL, настройки будут примерно такими:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=php_laravel_proprep
DB_USERNAME=root
DB_PASSWORD=root
```

3. Запусти миграции базы данных:
Теперь, когда база данных настроена, создадим основные таблицы, используя миграции:
```bash
php artisan migrate
```

4. Запусти локальный сервер для проверки:
Чтобы убедиться, что Laravel работает, запусти встроенный сервер:
```bash
php artisan serve
```

5. Проверь проект:
Открой браузер и перейди по адресу http://localhost:8000. Если видишь приветственную страницу Laravel, значит, всё настроено правильно!


---

# Структура проекта Laravel (на русском)

## Основные папки

- **app/** : Основная логика приложения — контроллеры, модели, сервисы.
- **bootstrap/** : Папка, отвечающая за начальную загрузку приложения Laravel, в частности файл `app.php`.
- **config/** : Конфигурация приложения, где можно настроить базу данных, почту, внешние сервисы и другое.
- **database/** : Здесь находятся миграции, сиды и иногда фабрики для настройки структуры базы данных.
- **public/** : Папка, доступная публично, содержит `index.php` и ресурсы, которые можно вызывать напрямую (например, CSS, JavaScript).
- **resources/** : Содержит шаблоны Blade, некомпилированные ресурсы (CSS, JS), а также файлы переводов.
- **routes/** : Все файлы маршрутов. По умолчанию `web.php` и `api.php` содержат маршруты для веб и API.
- **storage/** : Папка для хранения логов, кэша, загрузок пользователей и других временных данных.
- **tests/** : Тесты для приложения, по умолчанию содержит папки `Feature` и `Unit`.
- **vendor/** : Создана Composer, содержит все зависимости проекта (включая сам Laravel).

## Основные файлы

- **artisan** : Консоль Laravel для выполнения различных команд (например, миграций, тестов и пр.).
- **composer.json** : Конфигурационный файл Composer с зависимостями проекта.
- **.env** : Конфигурация переменных окружения (например, базы данных и почты).
- **server.php** : Файл для запуска локального сервера PHP.
- **README.md** : Документация проекта с инструкциями по установке и настройке.

## Теперь, когда база данных и сервер настроены, можем приступать к следующим шагам:

	1.	Настроить аутентификацию:
Можно быстро добавить систему входа/регистрации с помощью пакета Laravel Breeze. 
Стандартный стек Breeze – это Blade стек, который использует простые шаблоны Blade для отображения фронтенда вашего приложения. Вы можете установить Blade стек, вызвав команду breeze:install без дополнительных аргументов и выбрав Blade фронтенд стек. После установки структуры Breeze вам также следует скомпилировать фронтенд-ресурсы вашего приложения:
```bash
composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate
npm install && npm run dev
```
После этого Laravel добавит базовые страницы регистрации, входа и сброса пароля.


---

## Автор

Алекс Несвит — разработчик проекта.

## Лицензия

Этот проект распространяется по лицензии MIT.