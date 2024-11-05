<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.ok_page') }}</title>
    
    <!-- Fonts и CSS -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">

    <!-- Barre de soutien du projet -->
    <div class="support-button">
        <a href="https://www.buymeacoffee.com/alexnesvit" target="_blank" class="text-white font-semibold">
            {{ __('messages.support_project') }}
        </a>
    </div>
    
    <div class="container mx-auto px-4 py-8">
        <header class="header">
            <h1>
                {{ __('messages.welcome_ok_page') }}
            </h1>

            <!-- Authentification et navigation -->
            @if (Route::has('login'))
                <nav class="nav-link mt-4">
                    @auth
                        <a href="{{ url('/dashboard') }}">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Sections principales de l'interface -->
        <div class="grid gap-6 lg:grid-cols-2">
            <!-- Matériaux théoriques -->
            <div class="card">
                <h2>{{ __('messages.theory') }}</h2>
                <p>{{ __('messages.theory_desc') }}</p>
                <a href="{{ route('theory') }}" class="nav-link">{{ __('messages.learn_more') }}</a>
            </div>
            
            <!-- Quiz -->
            <div class="card">
                <h2>{{ __('messages.quizzes') }}</h2>
                <p>{{ __('messages.quizzes_desc') }}</p>
                <a href="{{ route('quizzes') }}" class="nav-link">{{ __('messages.start_quiz') }}</a>
            </div>
            
            <!-- Tests -->
            <div class="card">
                <h2>{{ __('messages.tests') }}</h2>
                <p>{{ __('messages.tests_desc') }}</p>
                <a href="{{ route('tests') }}" class="nav-link">{{ __('messages.take_test') }}</a>
            </div>
            
            <!-- Tâches pratiques -->
            <div class="card">
                <h2>{{ __('messages.practice_tasks') }}</h2>
                <p>{{ __('messages.practice_desc') }}</p>
                <a href="{{ route('practice') }}" class="nav-link">{{ __('messages.try_now') }}</a>
            </div>
        </div>
    </div>

    <!-- Pied de page avec un lien vers BuyMeACoffee -->
    <footer class="footer">
        {{ __('messages.thank_you') }} | <a href="https://www.buymeacoffee.com/alexnesvit" target="_blank" class="nav-link">{{ __('messages.support_project') }}</a>
    </footer>
</body>
</html>