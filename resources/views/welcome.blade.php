@extends('layouts.app')

@section('title', 'Nordic Films - Estúdio Cinematográfico')
@section('description', 'Estúdio cinematográfico especializado em produções nórdicas modernas com estética minimalista e storytelling envolvente.')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-nordic-950 via-nordic-900 to-nordic-800"></div>
    <div class="absolute inset-0 bg-[url('https://images.pexels.com/photos/1117132/pexels-photo-1117132.jpeg')] bg-cover bg-center opacity-10"></div>
    
    <!-- Floating elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-accent-500/20 rounded-full animate-float"></div>
    <div class="absolute bottom-32 right-16 w-16 h-16 bg-accent-400/30 rounded-full animate-float" style="animation-delay: 2s;"></div>
    <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-accent-600/25 rounded-full animate-float" style="animation-delay: 4s;"></div>
    
    <div class="relative z-10 container-custom text-center">
        <div class="animate-on-scroll">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold mb-6">
                <span class="gradient-text">Nordic</span>
                <br>
                <span class="text-white">Films</span>
            </h1>
            <p class="text-xl md:text-2xl text-nordic-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                Criamos experiências cinematográficas únicas com estética nórdica moderna, 
                combinando minimalismo e storytelling envolvente.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#portfolio" class="btn-primary">Ver Portfólio</a>
                <a href="/contact" class="btn-secondary">Fale Conosco</a>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-nordic-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section-padding bg-nordic-900/50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
                    Sobre <span class="gradient-text">Nós</span>
                </h2>
                <p class="text-lg text-nordic-300 mb-6 leading-relaxed">
                    Somos um estúdio cinematográfico especializado em criar narrativas visuais 
                    que capturam a essência do design nórdico: simplicidade, funcionalidade e beleza natural.
                </p>
                <p class="text-lg text-nordic-300 mb-8 leading-relaxed">
                    Nossa abordagem combina técnicas cinematográficas modernas com uma estética 
                    minimalista, resultando em produções que são tanto visualmente impactantes 
                    quanto emocionalmente envolventes.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text mb-2">50+</div>
                        <div class="text-nordic-400">Projetos</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold gradient-text mb-2">15+</div>
                        <div class="text-nordic-400">Prêmios</div>
                    </div>
                </div>
            </div>
            <div class="animate-on-scroll">
                <div class="relative">
                    <img src="https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg" 
                         alt="Equipe Nordic Films" 
                         class="rounded-2xl shadow-2xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-nordic-900/50 to-transparent rounded-2xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding">
    <div class="container-custom">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
                Nossos <span class="gradient-text">Serviços</span>
            </h2>
            <p class="text-lg text-nordic-300 max-w-3xl mx-auto">
                Oferecemos uma gama completa de serviços cinematográficos, 
                desde a concepção até a entrega final do projeto.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Produção</h3>
                <p class="text-nordic-300">
                    Gerenciamento completo de produção, desde o planejamento inicial 
                    até a execução final do projeto.
                </p>
            </div>
            
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Direção</h3>
                <p class="text-nordic-300">
                    Direção criativa especializada em capturar a essência 
                    nórdica em cada frame.
                </p>
            </div>
            
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Edição</h3>
                <p class="text-nordic-300">
                    Edição profissional que transforma material bruto 
                    em narrativas envolventes.
                </p>
            </div>
            
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Pós-produção</h3>
                <p class="text-nordic-300">
                    Finalização completa com correção de cor, efeitos visuais 
                    e mixagem de áudio.
                </p>
            </div>
            
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Consultoria</h3>
                <p class="text-nordic-300">
                    Consultoria especializada em desenvolvimento de conceitos 
                    e estratégias visuais.
                </p>
            </div>
            
            <div class="card-nordic animate-on-scroll">
                <div class="w-12 h-12 bg-accent-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-4">Motion Graphics</h3>
                <p class="text-nordic-300">
                    Criação de animações e motion graphics com 
                    identidade visual nórdica.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="section-padding bg-nordic-900/50">
    <div class="container-custom">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
                Nosso <span class="gradient-text">Portfólio</span>
            </h2>
            <p class="text-lg text-nordic-300 max-w-3xl mx-auto">
                Conheça alguns dos nossos trabalhos mais recentes e premiados.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group animate-on-scroll">
                <div class="relative overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/1117132/pexels-photo-1117132.jpeg" 
                         alt="Projeto 1" 
                         class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-nordic-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-white font-semibold mb-2">Aurora Boreal</h3>
                        <p class="text-nordic-300 text-sm">Documentário sobre a natureza nórdica</p>
                    </div>
                </div>
            </div>
            
            <div class="group animate-on-scroll">
                <div class="relative overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg" 
                         alt="Projeto 2" 
                         class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-nordic-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-white font-semibold mb-2">Minimalismo</h3>
                        <p class="text-nordic-300 text-sm">Curta-metragem sobre design</p>
                    </div>
                </div>
            </div>
            
            <div class="group animate-on-scroll">
                <div class="relative overflow-hidden rounded-xl">
                    <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg" 
                         alt="Projeto 3" 
                         class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-nordic-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <div class="absolute bottom-4 left-4 right-4 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-white font-semibold mb-2">Hygge</h3>
                        <p class="text-nordic-300 text-sm">Série sobre bem-estar</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12 animate-on-scroll">
            <a href="#" class="btn-primary">Ver Todos os Projetos</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding">
    <div class="container-custom">
        <div class="card-nordic text-center animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-display font-bold mb-6">
                Pronto para criar algo <span class="gradient-text">extraordinário</span>?
            </h2>
            <p class="text-lg text-nordic-300 mb-8 max-w-2xl mx-auto">
                Entre em contato conosco e vamos transformar sua visão em uma 
                experiência cinematográfica única e memorável.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="btn-primary">Iniciar Projeto</a>
                <a href="#portfolio" class="btn-secondary">Ver Trabalhos</a>
            </div>
        </div>
    </div>
</section>
@endsection