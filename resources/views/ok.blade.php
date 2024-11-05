<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.ok_page') }}</title>
    
    <!-- Polices et CSS -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased" style="background-color: #000000; color: #FFFFFF;">
    <!-- Bouton de soutien du projet -->
    <div class="bg-yellow-500 text-white text-center py-4">
        <a href="https://www.buymeacoffee.com/alexnesvit" target="_blank" class="text-white font-semibold">
            {{ __('messages.support_project') }}
        </a>
    </div>
    
    <div class="container mx-auto px-4 py-8 text-center">
        <!-- Titre de la plateforme -->
        <header class="header">
            <h1 class="text-2xl font-bold mb-6">
                {{ __('messages.welcome_ok_page') }}
            </h1>
        </header>

        <!-- Sections principales de l'interface -->
        <div class="content flex flex-col items-center lg:flex-row lg:justify-center lg:gap-8">
            <!-- Colonne de gauche -->
            <div class="flex flex-col gap-6">
                <div class="card">
                    <h2>{{ __('messages.theory') }}</h2>
                    <p>{{ __('messages.theory_desc') }}</p>
                    <a href="{{ route('theory') }}" class="nav-link">{{ __('messages.learn_more') }}</a>
                </div>

                <div class="card">
                    <h2>{{ __('messages.practice_tasks') }}</h2>
                    <p>{{ __('messages.practice_desc') }}</p>
                    <a href="{{ route('practice') }}" class="nav-link">{{ __('messages.try_now') }}</a>
                </div>
            </div>

            <!-- Colonne de droite -->
            <div class="flex flex-col gap-6">
                <div class="card">
                    <h2>{{ __('messages.quizzes') }}</h2>
                    <p>{{ __('messages.quizzes_desc') }}</p>
                    <a href="{{ route('quizzes') }}" class="nav-link">{{ __('messages.start_quiz') }}</a>
                </div>

                <div class="card">
                    <h2>{{ __('messages.tests') }}</h2>
                    <p>{{ __('messages.tests_desc') }}</p>
                    <a href="{{ route('tests') }}" class="nav-link">{{ __('messages.take_test') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pied de page avec lien vers BuyMeACoffee -->
    <footer class="footer py-6 text-center text-sm text-gray-500">
        {{ __('messages.thank_you') }} | <a href="https://www.buymeacoffee.com/alexnesvit" target="_blank" class="underline">{{ __('messages.support_project') }}</a>
    </footer>
</body>
</html>