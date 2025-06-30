<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nordik Studios - Produção Audiovisual</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-inter antialiased">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-orange-500 rounded-lg flex items-center justify-center">
                        <span class="text-slate-900 font-bold text-sm">N</span>
                    </div>
                    <span class="text-xl font-playfair font-semibold">Nordik Studios</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-slate-300 hover:text-amber-400 transition-colors duration-300">Início</a>
                    <a href="#services" class="text-slate-300 hover:text-amber-400 transition-colors duration-300">Serviços</a>
                    <a href="#portfolio" class="text-slate-300 hover:text-amber-400 transition-colors duration-300">Portfólio</a>
                    <a href="#about" class="text-slate-300 hover:text-amber-400 transition-colors duration-300">Sobre</a>
                    <a href="#contact" class="bg-gradient-to-r from-amber-400 to-orange-500 text-slate-900 px-6 py-2 rounded-full font-medium hover:shadow-lg hover:shadow-amber-400/25 transition-all duration-300">Contato</a>
                </div>

                <button class="md:hidden text-slate-300 hover:text-amber-400 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950"></div>
        <div class="absolute inset-0 bg-[url('https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg')] bg-cover bg-center opacity-10"></div>
        
        <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
            <h1 class="text-5xl md:text-7xl font-playfair font-bold mb-6 bg-gradient-to-r from-amber-400 via-orange-500 to-amber-400 bg-clip-text text-transparent">
                Criamos Histórias
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-8 leading-relaxed">
                Produção audiovisual de alta qualidade com estética nórdica moderna
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-gradient-to-r from-amber-400 to-orange-500 text-slate-900 px-8 py-4 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-400/25 transition-all duration-300 transform hover:-translate-y-1">
                    Ver Nosso Trabalho
                </button>
                <button class="border border-slate-600 text-slate-300 px-8 py-4 rounded-full font-semibold hover:border-amber-400 hover:text-amber-400 transition-all duration-300">
                    Falar Conosco
                </button>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">Nossos Serviços</h2>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                    Oferecemos soluções completas em produção audiovisual com qualidade cinematográfica
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Produção de Vídeo</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Criação de conteúdo audiovisual para empresas, eventos e projetos pessoais com qualidade profissional.
                    </p>
                </div>

                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Direção Criativa</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Desenvolvimento de conceitos visuais únicos e direção artística para projetos audiovisuais.
                    </p>
                </div>

                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-1a2 2 0 114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Pós-Produção</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Edição, correção de cor, motion graphics e finalização com tecnologia de ponta.
                    </p>
                </div>

                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Trilha Sonora</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Composição musical original e design de som para complementar perfeitamente suas produções.
                    </p>
                </div>

                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Fotografia</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Sessões fotográficas profissionais para produtos, eventos e retratos com estética única.
                    </p>
                </div>

                <div class="group bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50 hover:border-amber-400/50 transition-all duration-500 hover:transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-playfair font-semibold mb-4">Transmissão ao Vivo</h3>
                    <p class="text-slate-400 leading-relaxed">
                        Cobertura e transmissão de eventos em tempo real com múltiplas câmeras e qualidade broadcast.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">Nosso Portfólio</h2>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                    Alguns dos nossos trabalhos mais recentes que demonstram nossa paixão pela excelência
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg" alt="Projeto 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Documentário Corporativo</h3>
                            <p class="text-slate-300 text-sm">Produção completa para empresa de tecnologia</p>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/3062541/pexels-photo-3062541.jpeg" alt="Projeto 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Videoclipe Musical</h3>
                            <p class="text-slate-300 text-sm">Direção criativa e produção audiovisual</p>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/1117132/pexels-photo-1117132.jpeg" alt="Projeto 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Campanha Publicitária</h3>
                            <p class="text-slate-300 text-sm">Conceito visual e execução criativa</p>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg" alt="Projeto 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Evento Corporativo</h3>
                            <p class="text-slate-300 text-sm">Cobertura completa e transmissão ao vivo</p>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/1591447/pexels-photo-1591447.jpeg" alt="Projeto 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Curta-metragem</h3>
                            <p class="text-slate-300 text-sm">Narrativa autoral e direção de fotografia</p>
                        </div>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-2xl aspect-video bg-slate-800">
                    <img src="https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg" alt="Projeto 6" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-xl font-playfair font-semibold mb-2">Sessão de Produto</h3>
                            <p class="text-slate-300 text-sm">Fotografia comercial e styling</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-gradient-to-r from-amber-400 to-orange-500 text-slate-900 px-8 py-4 rounded-full font-semibold hover:shadow-xl hover:shadow-amber-400/25 transition-all duration-300 transform hover:-translate-y-1">
                    Ver Todos os Projetos
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-slate-900/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-8">Nossa História</h2>
                    <p class="text-xl text-slate-300 mb-6 leading-relaxed">
                        Fundada com a paixão pela narrativa visual, a Nordik Studios combina técnica apurada com criatividade nórdica para criar experiências audiovisuais únicas.
                    </p>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed">
                        Nossa equipe multidisciplinar trabalha com dedicação para transformar ideias em realidade, sempre buscando a excelência em cada projeto e mantendo o foco na qualidade cinematográfica.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="text-3xl font-bold text-amber-400 mb-2">150+</div>
                            <div class="text-slate-400">Projetos Realizados</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-400 mb-2">8</div>
                            <div class="text-slate-400">Anos de Experiência</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-400 mb-2">50+</div>
                            <div class="text-slate-400">Clientes Satisfeitos</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-400 mb-2">15</div>
                            <div class="text-slate-400">Prêmios Recebidos</div>
                        </div>
                    </div>

                    <button class="border border-amber-400 text-amber-400 px-8 py-4 rounded-full font-semibold hover:bg-amber-400 hover:text-slate-900 transition-all duration-300">
                        Conheça Nossa Equipe
                    </button>
                </div>

                <div class="relative">
                    <div class="aspect-square rounded-2xl overflow-hidden bg-slate-800">
                        <img src="https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg" alt="Nossa equipe" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl opacity-20"></div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-gradient-to-br from-amber-400 to-orange-500 rounded-2xl opacity-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-6">Vamos Conversar</h2>
                <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                    Pronto para dar vida ao seu próximo projeto? Entre em contato conosco e vamos criar algo extraordinário juntos.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-16">
                <div>
                    <h3 class="text-2xl font-playfair font-semibold mb-8">Informações de Contato</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-200 mb-1">Endereço</h4>
                                <p class="text-slate-400">Rua das Artes, 123<br>São Paulo, SP - 01234-567</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-200 mb-1">Telefone</h4>
                                <p class="text-slate-400">(11) 99999-9999</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-200 mb-1">E-mail</h4>
                                <p class="text-slate-400">contato@nordikstudios.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h4 class="font-semibold text-slate-200 mb-4">Siga-nos</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-amber-400 hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-amber-400 hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-amber-400 hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center hover:bg-amber-400 hover:text-slate-900 transition-all duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800/50 backdrop-blur-sm rounded-2xl p-8 border border-slate-700/50">
                    <h3 class="text-2xl font-playfair font-semibold mb-8">Envie uma Mensagem</h3>
                    
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-2">Nome</label>
                                <input type="text" class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-xl text-slate-100 placeholder-slate-400 focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-colors" placeholder="Seu nome">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-2">E-mail</label>
                                <input type="email" class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-xl text-slate-100 placeholder-slate-400 focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-colors" placeholder="seu@email.com">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Assunto</label>
                            <input type="text" class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-xl text-slate-100 placeholder-slate-400 focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-colors" placeholder="Assunto da mensagem">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-slate-300 mb-2">Mensagem</label>
                            <textarea rows="6" class="w-full px-4 py-3 bg-slate-700/50 border border-slate-600 rounded-xl text-slate-100 placeholder-slate-400 focus:border-amber-400 focus:ring-1 focus:ring-amber-400 transition-colors resize-none" placeholder="Conte-nos sobre seu projeto..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-amber-400 to-orange-500 text-slate-900 py-4 rounded-xl font-semibold hover:shadow-xl hover:shadow-amber-400/25 transition-all duration-300 transform hover:-translate-y-1">
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-orange-500 rounded-lg flex items-center justify-center">
                            <span class="text-slate-900 font-bold text-sm">N</span>
                        </div>
                        <span class="text-xl font-playfair font-semibold">Nordik Studios</span>
                    </div>
                    <p class="text-slate-400 mb-6 max-w-md">
                        Criamos experiências audiovisuais únicas com qualidade cinematográfica e estética nórdica moderna.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-amber-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold text-slate-200 mb-6">Serviços</h4>
                    <ul class="space-y-3 text-slate-400">
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Produção de Vídeo</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Direção Criativa</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Pós-Produção</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Fotografia</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Transmissão ao Vivo</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-slate-200 mb-6">Empresa</h4>
                    <ul class="space-y-3 text-slate-400">
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Sobre Nós</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Nossa Equipe</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Carreiras</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition-colors">Contato</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-slate-400 text-sm">
                    © 2025 Nordik Studios. Todos os direitos reservados.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-slate-400 hover:text-amber-400 text-sm transition-colors">Política de Privacidade</a>
                    <a href="#" class="text-slate-400 hover:text-amber-400 text-sm transition-colors">Termos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-slate-950/95');
            } else {
                nav.classList.remove('bg-slate-950/95');
            }
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        // Observe all sections
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>