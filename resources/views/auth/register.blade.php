<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - {{ config('app.name') }}</title>

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

        /* Hover du logo */
        .logo-hover {
            transition: all 0.3s ease;
        }

        .logo-hover:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.45);
        }
    </style>
</head>

<body class="bg-[#0f172a] min-h-screen flex items-center justify-center p-4 overflow-hidden">

<div class="w-full max-w-6xl bg-gradient-to-br from-navy to-navy-light border-2 border-gold/40 rounded-3xl shadow-2xl overflow-hidden">
    <div class="grid lg:grid-cols-2 h-[650px]">

        <!-- Illustration -->
        <div class="hidden lg:flex items-center justify-center bg-gradient-to-br from-gold/5 to-transparent p-8">
            <img src="{{ asset('images/register-illustration.png') }}"
                 alt="Illustration"
                 class="w-full h-auto max-h-[550px] object-cover rounded-3xl shadow-2xl bounce-slow">
        </div>

        <!-- Register Form -->
        <div class="p-6 lg:p-8 flex flex-col justify-center bg-white/5 -mt-4">

            <!-- HEADER CENTRÉ -->
            <div class="mb-6 flex flex-col items-center text-center">

                <div class="logo-hover w-16 h-16 bg-gradient-to-br from-gold to-gold-light rounded-2xl
                            flex items-center justify-center mb-4
                            shadow-lg shadow-gold/30 cursor-pointer">
                    <svg class="w-9 h-9 text-navy-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </div>

                <h1 class="text-3xl font-bold text-white mb-1">
                    Créer un compte
                </h1>

                <p class="text-gray-300 text-sm">
                    Rejoignez-nous dès aujourd'hui
                </p>
            </div>

            <!-- ERREURS -->
            @if ($errors->any())
                <div class="mb-4 bg-red-500/10 border border-red-500/30 rounded-lg p-3">
                    <div class="text-red-300 text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- FORM -->
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-200 mb-1.5">Nom complet</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                           autocomplete="off"
                           placeholder="ex: John Doe"
                           class="w-full px-4 py-2.5 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white
                                  focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-200 mb-1.5">Adresse email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           autocomplete="username"
                           placeholder="ex: john@example.com"
                           class="w-full px-4 py-2.5 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white
                                  focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30">
                </div>

                <div class="mb-3">
                    <label class="block text-sm font-medium text-gray-200 mb-1.5">Mot de passe</label>
                    <input type="password" name="password" required
                           autocomplete="new-password"
                           placeholder=""
                           class="w-full px-4 py-2.5 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white
                                  focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-200 mb-1.5">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation" required
                           autocomplete="new-password"
                           placeholder=""
                           class="w-full px-4 py-2.5 bg-navy-dark/60 border border-navy-light/50 rounded-xl text-white
                                  focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/30">
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-gold to-gold-light text-navy-dark font-bold py-3 rounded-xl
                               hover:shadow-lg hover:shadow-gold/40 transform hover:-translate-y-0.5 transition-all mb-4">
                    Créer mon compte
                </button>

                <p class="text-center text-gray-300 text-sm">
                    Vous avez déjà un compte ?
                    <a href="{{ route('login') }}" class="text-gold font-semibold hover:text-gold-light">
                        Se connecter
                    </a>
                </p>
            </form>

        </div>
    </div>
</div>

</body>
</html>
