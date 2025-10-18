<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Web Site') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        .hero-gradient {
            background: linear-gradient(45deg, var(--bs-primary), color-mix(in oklab, var(--bs-primary) 60%, var(--bs-info)));
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-body-tertiary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="#grid" class="nav-link">Grid</a></li>
                        <li class="nav-item"><a href="#interactive" class="nav-link">Interaktív</a></li>
                        <li class="nav-item"><a href="#sanctum" class="nav-link">Sanctum</a></li>
                        <li class="nav-item"><a href="#offcanvas" class="nav-link">Offcanvas</a></li>
                        <li class="nav-item"><a href="#toast" class="nav-link">Toast</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <button id="themeToggle"
                    class="btn btn-light border position-fixed top-0 end-0 m-3 rounded-circle shadow-sm"
                    style="width:48px;height:48px;z-index:1100;"
                    title="Váltás világos/sötét mód között">
                <i id="themeIcon" class="bi bi-moon-fill text-primary fs-5"></i>
            </button>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
    @yield('scripts')
    <script>
        document.getElementById('showToastBtn').addEventListener('click', () => {
            const el = document.getElementById('myToast')
            const toast = bootstrap.Toast.getOrCreateInstance(el)
            toast.show()
        })
    </script>
    <script>
        (() => {
            const root = document.documentElement;
            const toggleBtn = document.getElementById('themeToggle');
            const icon = document.getElementById('themeIcon');

            // Betöltéskor visszaállítjuk az utolsó beállítást
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                root.setAttribute('data-bs-theme', savedTheme);
                icon.className = savedTheme === 'dark' ? 'bi bi-sun-fill text-warning fs-5' : 'bi bi-moon-fill text-primary fs-5';
            }

            toggleBtn.addEventListener('click', () => {
                const current = root.getAttribute('data-bs-theme') === 'dark' ? 'dark' : 'light';
                const next = current === 'dark' ? 'light' : 'dark';
                root.setAttribute('data-bs-theme', next);
                localStorage.setItem('theme', next);
                icon.className = next === 'dark' ? 'bi bi-sun-fill text-warning fs-5' : 'bi bi-moon-fill text-primary fs-5';
            });
        })();
    </script>
    <script>
        (() => {
            const root = document.documentElement;

            // initial load (mode)
            const savedMode = localStorage.getItem('theme-mode');
            const autoPref = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            const initialMode = savedMode === 'auto' || !savedMode ? autoPref : savedMode;
            root.setAttribute('data-bs-theme', initialMode);

            // initial load (primary color)
            const savedColor = localStorage.getItem('theme-primary');
            if (savedColor) {
                root.style.setProperty('--bs-primary', savedColor);
                // derived shades (egyszerűsített – Bootstrap automatikusan kever sok mindent)
                root.style.setProperty('--bs-link-color', savedColor);
                root.style.setProperty('--bs-btn-bg', savedColor);
                root.style.setProperty('--bs-btn-border-color', savedColor);
            }

            // mode buttons
            document.querySelectorAll('[data-theme-mode]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const mode = btn.getAttribute('data-theme-mode');
                    localStorage.setItem('theme-mode', mode);
                    const next = mode === 'auto'
                        ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
                        : mode;
                    root.setAttribute('data-bs-theme', next);
                });
            });

            // color swatches
            const colorGrid = document.getElementById('colorSwatches');
            colorGrid?.querySelectorAll('[data-color]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const hex = btn.getAttribute('data-color');
                    localStorage.setItem('theme-primary', hex);
                    root.style.setProperty('--bs-primary', hex);
                    root.style.setProperty('--bs-link-color', hex);
                    root.style.setProperty('--bs-btn-bg', hex);
                    root.style.setProperty('--bs-btn-border-color', hex);
                });
            });

            // gradient toggle (hero-ra)
            const gradToggle = document.getElementById('useGradient');
            const HERO_SELECTOR = 'header.bg-primary, header[data-hero]';
            const savedGrad = localStorage.getItem('theme-hero-gradient') === '1';
            if (gradToggle) {
                gradToggle.checked = savedGrad;
                const hero = document.querySelector(HERO_SELECTOR);
                if (savedGrad && hero) {
                    hero.classList.add('hero-gradient');
                }
                gradToggle.addEventListener('change', () => {
                    localStorage.setItem('theme-hero-gradient', gradToggle.checked ? '1' : '0');
                    const hero = document.querySelector(HERO_SELECTOR);
                    if (hero) hero.classList.toggle('hero-gradient', gradToggle.checked);
                });
            }
        })();
    </script>
</body>
</html>
