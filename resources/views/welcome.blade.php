<x-app-layout>
    <!-- En-tête -->
    <x-slot name="header">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.welcome_ok_page') }}
        </h1>
    </x-slot>

    <!-- Contenu principal -->
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('messages.welcome_ok_page') }}
                    </h1>
                </div>

                <!-- Навигация -->
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <!-- Имя авторизованного пользователя -->
                            <span class="rounded-md px-3 py-2 text-black dark:text-white">
                                {{ Auth::user()->name }}
                            </span>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        @else
                            <!-- Ссылки для гостей -->
                            <a href="{{ route('login') }}" 
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                {{ __('Connexion') }}
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    {{ __('Inscription') }}
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <!-- Sections principales de l'interface -->
            <!-- Здесь оставляем основной контент -->
        </div>
    </div>
</x-app-layout>