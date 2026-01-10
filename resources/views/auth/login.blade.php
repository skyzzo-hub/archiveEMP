<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - {{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'navy-dark': '#0a1628',
                        'navy': '#1a2744',
                        'navy-light': '#2d3f5f',
                        'gold': '#d4af37',
                        'gold-light': '#f4d03f',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .bounce-slow {
            animation: bounce 3s ease-in-out infinite;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeInDown 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-[#0f172a] min-h-screen flex items-center justify-center p-4 overflow-hidden">

    <div class="w-full max-w-5xl bg-gradient-to-br from-navy to-navy-light border-2 border-gold/40 rounded-3xl shadow-2xl overflow-hidden">
        <div class="grid lg:grid-cols-2 min-h-[600px]">

            <!-- Login Form -->
            <div class="p-6 lg:p-12 flex flex-col justify-center bg-white/5">

                <!-- Centered header with improved spacing -->
                <div class="mb-8 text-center animate-fade-in">
                    <div class="flex justify-center mb-4">
                        <div class="w-14 h-14 bg-gradient-to-br from-gold to-gold-light rounded-2xl flex items-center justify-center shadow-2xl shadow-gold/40 transform hover:scale-110 transition-transform duration-300">
                            <svg class="w-7 h-7 text-navy-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-3xl lg:text-4xl font-bold text-white mb-2 tracking-tight">Bienvenue</h1>
                    <p class="text-gray-300 text-sm">Connectez-vous à votre compte</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 bg-red-500/10 border border-red-500/30 rounded-lg p-4">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-400 mt-0.5 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"/>
                            </svg>
                            <div class="text-red-300 text-sm">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-5">
                        <label for="email" class="block text-sm font-medium text-gray-200 mb-2">Adresse email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-3 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30 transition-all" placeholder="votre@email.com">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-200 mb-2">Mot de passe</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required class="w-full px-4 py-3 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30 transition-all" placeholder="••••••••">
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gold transition-colors">
                                <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between mb-6 gap-3">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-navy-light bg-navy-dark/60 text-gold focus:ring-2 focus:ring-gold/30">
                            <span class="ml-2 text-sm text-gray-300">Se souvenir de moi</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-gold hover:text-gold-light transition-colors font-medium">Mot de passe oublié ?</a>
                        @endif
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-gold to-gold-light text-navy-dark font-bold py-3.5 rounded-xl hover:shadow-lg hover:shadow-gold/40 transform hover:-translate-y-0.5 transition-all duration-200 mb-6">
                        Se connecter
                    </button>

                    <div class="text-center">
                        <p class="text-gray-300 text-sm">Pas encore de compte ? <a href="{{ route('register') }}" class="text-gold hover:text-gold-light font-semibold transition-colors">Créer un compte</a></p>
                    </div>
                </form>
            </div>

            <!-- Illustration -->
            <div class="hidden lg:flex items-center justify-center bg-gradient-to-br from-white/5 to-transparent p-8">
                <img src="{{ asset('images/login-photo.jpg') }}" alt="Illustration" class="w-full h-auto max-h-[520px] object-cover rounded-3xl shadow-2xl bounce-slow">
            </div>

        </div>
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('eye-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />';
            } else {
                input.type = 'password';
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
            }
        }
    </script>
</body>
</html>
