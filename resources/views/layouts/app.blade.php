<!DOCTYPE html>
<html lang="id" 
      x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
      x-bind:class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGTU - Indonesia Graduate Theological Union</title>
    <meta name="description" content="Program kolaborasi doktor teologi yang dibentuk oleh PERSETIA, FTEAP, dan APTU.">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/igtu-logo.jpeg') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 text-gray-800 dark:bg-slate-900 dark:text-gray-200 font-sans antialiased transition-colors duration-300">

    <div class="bg-slate-900 dark:bg-black text-gray-300 text-xs py-2">
        <div class="container mx-auto px-4 flex flex-col sm:flex-row justify-between items-center">
            <div class="mb-2 sm:mb-0 flex items-center gap-4">
                <span>Language: 
                    <a href="{{ route('switch.lang', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'font-bold text-white' : 'text-gray-400 hover:text-white transition' }}">EN</a> 
                    <span class="mx-1">|</span> 
                    <a href="{{ route('switch.lang', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'font-bold text-white' : 'text-gray-400 hover:text-white transition' }}">ID</a>
                </span>

                <button @click="darkMode = !darkMode" class="flex items-center gap-1 hover:text-yellow-400 transition focus:outline-none">
                    <svg x-show="darkMode" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <svg x-show="!darkMode" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
                </button>
            </div>
            
            <div class="flex space-x-4 items-center">
                <a href="/admissions" class="hover:text-white transition">{{ __('Apply Now') }}</a>
                <a href="#" class="hover:text-white transition">{{ __('Student Portal') }}</a>
                <a href="{{ url('/superAdmin') }}" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-1 rounded text-sm font-bold transition">{{ __('Staff Login') }}</a>
            </div>
        </div>
    </div>

    <nav class="bg-white dark:bg-slate-900 shadow-sm transition-colors duration-300 relative z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/igtu-logo.jpeg') }}" class="h-10 w-10 object-cover rounded-full" alt="IGTU Logo">
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-blue-900 dark:text-blue-400 leading-none">IGTU</span>
                        <span class="text-[10px] text-gray-500 font-medium tracking-wide">INDONESIA GRADUATE THEOLOGICAL UNION</span>
                    </div>
                </div>

                <div class="hidden lg:flex items-center space-x-6 font-semibold text-sm text-gray-600 dark:text-gray-300">
                    <a href="/" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Home') }}</a>
                    <a href="/about" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('About') }}</a>
                    <a href="/programs" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Programs') }}</a>
                    <a href="/admissions" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Admissions') }}</a>
                    <a href="/research" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Research') }}</a>
                    <a href="/news" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('News & Events') }}</a>
                    <a href="/community" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Community') }}</a>
                    <a href="/partnerships" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Partnerships') }}</a>
                    <a href="/contact" class="hover:text-blue-700 dark:hover:text-blue-400 transition">{{ __('Contact') }}</a>
                </div>

                <div class="lg:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none transition">
                        <svg id="icon-menu" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-gray-50 dark:bg-slate-800 border-t border-gray-200 dark:border-slate-700 absolute w-full left-0 shadow-lg z-40">
            <div class="flex flex-col px-4 py-4 space-y-4 font-semibold text-sm text-gray-700 dark:text-gray-300">
                <a href="/" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Home') }}</a>
                <a href="/about" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('About') }}</a>
                <a href="/programs" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Programs') }}</a>
                <a href="/admissions" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Admissions') }}</a>
                <a href="/research" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Research') }}</a>
                <a href="/news" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('News & Events') }}</a>
                <a href="/community" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Community') }}</a>
                <a href="/partnerships" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Partnerships') }}</a>
                <a href="/contact" class="hover:text-blue-600 dark:hover:text-blue-400">{{ __('Contact') }}</a>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-slate-900 dark:bg-black text-gray-300 py-12 border-t border-slate-800 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('images/igtu-logo.jpeg') }}" 
                             class="h-10 w-auto object-contain bg-white p-1 rounded shadow-sm" 
                             alt="Logo IGTU">
                        <span class="text-xl font-bold text-white tracking-tight">IGTU</span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400">
                        {{ __('Academic Collaboration') }} - PERSETIA, STFT Jakarta, UKDW, UKSW.
                    </p>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">{{ __('Quick Links') }}</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="/about" class="hover:text-blue-400 transition">{{ __('About') }}</a></li>
                        <li><a href="/programs" class="hover:text-blue-400 transition">{{ __('Programs') }}</a></li>
                        <li><a href="/research" class="hover:text-blue-400 transition">{{ __('Research') }}</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">{{ __('Institutions') }}</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="/partnerships" class="hover:text-blue-400 transition">{{ __('Partnerships') }}</a></li>
                        <li><a href="www.persetia.or.id" target="_blank" class="hover:text-blue-400 transition">PERSETIA</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6 uppercase tracking-wider text-xs">{{ __('Support') }}</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="/contact" class="hover:text-blue-400 transition">{{ __('Contact') }}</a></li>
                        <li><a href="/privacy-policy" class="hover:text-blue-400 transition">{{ __('Privacy Policy') }}</a></li>
                    </ul>
                </div>

            </div>

            <div class="pt-8 border-t border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                <p>&copy; 2026 Indonesia Graduate Theological Union. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition">Facebook</a>
                    <a href="#" class="hover:text-white transition">Instagram</a>
                    <a href="#" class="hover:text-white transition">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const iconMenu = document.getElementById('icon-menu');
            const iconClose = document.getElementById('icon-close');

            if (btn) {
                btn.addEventListener('click', function() {
                    menu.classList.toggle('hidden');
                    iconMenu.classList.toggle('hidden');
                    iconClose.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>