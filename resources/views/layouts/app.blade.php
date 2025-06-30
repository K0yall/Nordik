<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Nordic Films - Estúdio Cinematográfico')</title>
    <meta name="description" content="@yield('description', 'Estúdio cinematográfico especializado em produções nórdicas modernas com estética minimalista e storytelling envolvente.')">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>
<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent">
        <div class="container-custom">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-accent-500 to-accent-700 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-white">Nordic Films</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link">Início</a>
                    <a href="#about" class="nav-link">Sobre</a>
                    <a href="#services" class="nav-link">Serviços</a>
                    <a href="#portfolio" class="nav-link">Portfólio</a>
                    <a href="/contact" class="nav-link">Contato</a>
                    <a href="/login" class="btn-primary">Login</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button" class="text-nordic-300 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden lg:hidden bg-nordic-900/95 backdrop-blur-md border-t border-nordic-800">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="/" class="block px-3 py-2 nav-link">Início</a>
                    <a href="#about" class="block px-3 py-2 nav-link">Sobre</a>
                    <a href="#services" class="block px-3 py-2 nav-link">Serviços</a>
                    <a href="#portfolio" class="block px-3 py-2 nav-link">Portfólio</a>
                    <a href="/contact" class="block px-3 py-2 nav-link">Contato</a>
                    <a href="/login" class="block px-3 py-2 nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-nordic-900 border-t border-nordic-800">
        <div class="container-custom section-padding">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-accent-500 to-accent-700 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z"/>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-white">Nordic Films</span>
                    </div>
                    <p class="text-nordic-400 mb-4 max-w-md">
                        Criamos experiências cinematográficas únicas com estética nórdica moderna, 
                        combinando minimalismo e storytelling envolvente.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-4">Serviços</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">Produção</a></li>
                        <li><a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">Direção</a></li>
                        <li><a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">Edição</a></li>
                        <li><a href="#" class="text-nordic-400 hover:text-accent-400 transition-colors">Pós-produção</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-semibold mb-4">Contato</h3>
                    <ul class="space-y-2">
                        <li class="text-nordic-400">contato@nordicfilms.com</li>
                        <li class="text-nordic-400">+55 (11) 9999-9999</li>
                        <li class="text-nordic-400">São Paulo, SP</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-nordic-800 mt-12 pt-8 text-center">
                <p class="text-nordic-400">
                    © {{ date('Y') }} Nordic Films. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
    
    @stack('scripts')
</body>
</html>