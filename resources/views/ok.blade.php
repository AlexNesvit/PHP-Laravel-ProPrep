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
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        
        <!-- Кнопка "Поддержите проект" -->
        <div class="bg-yellow-500 text-white text-center py-4">
            <a href="https://www.buymeacoffee.com/yourusername" target="_blank" class="text-white font-semibold">
                {{ __('messages.support_project') }}
            </a>
        </div>
        
        <div class="container mx-auto px-4 py-8">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <h1 class="text-2xl font-bold text-center lg:col-span-3">
                    {{ __('messages.welcome_ok_page') }}
                </h1>
                
                <!-- Аутентификация и навигация -->
                @if (Route::has('login'))
                    <nav class="flex justify-center gap-4 mt-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-black hover:underline dark:text-white">{{ __('Dashboard') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="text-black hover:underline dark:text-white">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-black hover:underline dark:text-white">{{ __('Register') }}</a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <!-- Основные секции интерфейса -->
            <div class="grid gap-6 lg:grid-cols-2">
                <!-- Теоретические материалы -->
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <h2 class="text-xl font-semibold">{{ __('messages.theory') }}</h2>
                    <p>{{ __('messages.theory_desc') }}</p>
                    <a href="{{ route('theory') }}" class="text-blue-500 underline">{{ __('messages.learn_more') }}</a>
                </div>
                
                <!-- Квизы -->
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <h2 class="text-xl font-semibold">{{ __('messages.quizzes') }}</h2>
                    <p>{{ __('messages.quizzes_desc') }}</p>
                    <a href="{{ route('quizzes') }}" class="text-blue-500 underline">{{ __('messages.start_quiz') }}</a>
                </div>
                
                <!-- Тесты -->
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <h2 class="text-xl font-semibold">{{ __('messages.tests') }}</h2>
                    <p>{{ __('messages.tests_desc') }}</p>
                    <a href="{{ route('tests') }}" class="text-blue-500 underline">{{ __('messages.take_test') }}</a>
                </div>
                
                <!-- Практические задачи -->
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800">
                    <h2 class="text-xl font-semibold">{{ __('messages.practice_tasks') }}</h2>
                    <p>{{ __('messages.practice_desc') }}</p>
                    <a href="{{ route('practice') }}" class="text-blue-500 underline">{{ __('messages.try_now') }}</a>
                </div>
            </div>
        </div>

        <!-- Футер с ненавязчивой ссылкой на BuyMeACoffee -->
        <footer class="py-6 text-center text-sm text-gray-500 dark:text-gray-400">
            {{ __('messages.thank_you') }} | <a href="https://www.buymeacoffee.com/yourusername" target="_blank" class="underline">{{ __('messages.support_project') }}</a>
        </footer>
    </body>
</html>