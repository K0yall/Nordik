@extends('layouts.app')

@section('title', 'Login - Nordic Films')
@section('description', 'Acesse sua conta Nordic Films.')

@section('content')
<!-- Login Section -->
<section class="min-h-screen flex items-center justify-center section-padding">
    <div class="w-full max-w-md">
        <div class="card-nordic animate-on-scroll">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="flex items-center justify-center space-x-3 mb-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-accent-500 to-accent-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7v10c0 5.55 3.84 9.739 9 11 5.16-1.261 9-5.45 9-11V7l-10-5z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-white">Nordic Films</span>
                </div>
                <h1 class="text-2xl font-bold text-white mb-2">Bem-vindo de volta</h1>
                <p class="text-nordic-300">Entre em sua conta para continuar</p>
            </div>
            
            <!-- Login Form -->
            <form id="login-form" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-nordic-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 bg-nordic-800 border border-nordic-700 rounded-lg text-white placeholder-nordic-400 focus:border-accent-500 focus:ring-1 focus:ring-accent-500 transition-colors"
                           placeholder="seu@email.com">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-medium text-nordic-300 mb-2">Senha</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-4 py-3 bg-nordic-800 border border-nordic-700 rounded-lg text-white placeholder-nordic-400 focus:border-accent-500 focus:ring-1 focus:ring-accent-500 transition-colors"
                           placeholder="••••••••">
                </div>
                
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                               class="w-4 h-4 text-accent-600 bg-nordic-800 border-nordic-700 rounded focus:ring-accent-500 focus:ring-2">
                        <label for="remember" class="ml-2 text-sm text-nordic-300">Lembrar de mim</label>
                    </div>
                    <a href="#" class="text-sm text-accent-400 hover:text-accent-300 transition-colors">
                        Esqueceu a senha?
                    </a>
                </div>
                
                <button type="submit" class="w-full btn-primary">
                    Entrar
                </button>
            </form>
            
            <!-- Divider -->
            <div class="mt-8 pt-6 border-t border-nordic-700">
                <p class="text-center text-nordic-300">
                    Não tem uma conta?
                    <a href="#" class="text-accent-400 hover:text-accent-300 transition-colors font-medium">
                        Cadastre-se
                    </a>
                </p>
            </div>
            
            <!-- Social Login -->
            <div class="mt-6">
                <div class="text-center text-sm text-nordic-400 mb-4">Ou entre com</div>
                <div class="grid grid-cols-2 gap-4">
                    <button class="flex items-center justify-center px-4 py-2 bg-nordic-800 hover:bg-nordic-700 border border-nordic-700 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-nordic-300 mr-2" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Google
                    </button>
                    <button class="flex items-center justify-center px-4 py-2 bg-nordic-800 hover:bg-nordic-700 border border-nordic-700 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-nordic-300 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection