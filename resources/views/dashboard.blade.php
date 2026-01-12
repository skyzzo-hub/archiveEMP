<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard EMP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { margin: 0; padding: 0; overflow-x: hidden; }
        .bg-library {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-image: url('{{ asset("images/library-background.jpg") }}');
            background-size: cover; background-position: center; background-repeat: no-repeat;
            filter: blur(4px) brightness(0.3); z-index: 0;
        }
        .content-wrapper { position: relative; z-index: 1; }
        .gradient-text {
            background: linear-gradient(to right, #fbbf24, #f59e0b, #fbbf24);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
        }
        .card-s1 { background: rgba(30,41,59,0.85); border: 2px solid rgba(251,191,36,0.3); backdrop-filter: blur(10px); }
        .card-s2 { background: rgba(30,41,59,0.85); border: 2px solid rgba(59,130,246,0.3); backdrop-filter: blur(10px); }
        .header-s1 { background: linear-gradient(135deg, #d97706 0%, #b45309 100%); }
        .header-s2 { background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%); }
        .module-item {
            background: rgba(51,65,85,0.6); backdrop-filter: blur(10px);
            border: 1px solid rgba(71,85,105,0.5); transition: all 0.3s ease;
        }
        .module-item:hover { transform: translateX(8px); }
        .module-item-s1:hover { background: rgba(217,119,6,0.3); border-color: rgba(251,191,36,0.6); }
        .module-item-s2:hover { background: rgba(37,99,235,0.3); border-color: rgba(59,130,246,0.6); }
        .badge-s1 { background: linear-gradient(135deg, #f59e0b, #d97706); }
        .badge-s2 { background: linear-gradient(135deg, #3b82f6, #2563eb); }
        .footer-card { background: rgba(30,41,59,0.7); border: 1px solid rgba(251,191,36,0.3); backdrop-filter: blur(10px); }
        .logout-btn {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            border: 1px solid rgba(239,68,68,0.3);
        }
        .logout-btn:hover { background: linear-gradient(135deg, #dc2626, #b91c1c); transform: scale(1.05); }
        .font-light-custom { font-weight: 400 !important; }
        .logout-modal { backdrop-filter: blur(20px); background: rgba(15,23,42,0.95); }
        .logout-modal::backdrop { backdrop-filter: blur(8px); }
    </style>
</head>
<body>
    <div class="bg-library"></div>
    <div class="content-wrapper">

        <!-- NAVBAR CORRIGÉE -->
        <nav class="fixed top-0 w-full z-50 bg-slate-900/95 border-b border-slate-700 shadow-lg">
            <div class="w-full px-4 py-4">
                <div class="flex items-center justify-between gap-4">

                    <!-- GAUCHE : MENU + LOGO (fixé à l'extrémité gauche) -->
                    <div class="flex items-center space-x-3 flex-shrink-0">
                        <button data-collapse-toggle="navbar-emp" type="button" class="p-2 w-10 h-10 justify-center text-white rounded-lg hover:bg-slate-800/50 transition-all" title="Menu">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>

                        <a href="#" class="flex items-center space-x-2">
                            <img src="{{ asset('logo/logo.png') }}" class="h-8 w-8 object-contain" alt="EMP Logo">
                            <div class="text-white font-semibold text-xl hidden sm:block">
                                <div>ARCHIVE</div>
                                <div class="text-sm font-normal opacity-90">EMP</div>
                            </div>
                        </a>
                    </div>

                    <!-- CENTRE : RECHERCHE (centré avec width plus grand) -->
                    <div class="hidden md:flex flex-1 justify-center max-w-2xl mx-auto">
                        <div class="relative w-full">
                            <input type="text" placeholder="Rechercher un module..."
                                class="w-full bg-white/90 backdrop-blur-sm rounded-xl pl-12 pr-4 py-3 text-gray-800 font-light-custom tracking-tight focus:outline-none focus:ring-4 focus:ring-yellow-400/50 shadow-xl border border-white/20">
                            <svg class="w-5 h-5 text-gray-500 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- DROITE : LOGOUT (fixé à l'extrémité droite) -->
                    <div class="flex items-center space-x-3 flex-shrink-0">
                        <!-- LOGOUT -->
                        <button onclick="showLogoutModal(event)" class="px-4 py-2 hover:bg-slate-800/50 rounded-lg transition-all shadow-lg border border-red-500/30 bg-red-500/10 hover:bg-red-500/20 focus:outline-none focus:ring-2 focus:ring-red-400 text-red-400 font-light-custom" title="Déconnexion">
                            Déconnexion
                        </button>
                    </div>
                </div>

                <!-- Menu Mobile Collapse -->
                <div class="items-center justify-between w-full md:hidden hidden mt-4" id="navbar-emp">
                    <ul class="flex flex-col p-4 font-medium border border-slate-700 rounded-lg bg-slate-800/50 space-y-2">
                        <li><a href="#" class="block py-2 px-3 text-white rounded hover:bg-slate-700">Modules S1</a></li>
                        <li><a href="#" class="block py-2 px-3 text-white rounded hover:bg-slate-700">Modules S2</a></li>
                        <li><a href="#" class="block py-2 px-3 text-white rounded hover:bg-slate-700">Archives</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal Logout -->
        <dialog id="logoutModal" class="logout-modal rounded-3xl p-8 w-full max-w-md mx-auto backdrop-blur-xl shadow-2xl border border-white/20">
            <div class="text-center space-y-6">
                <div class="w-20 h-20 mx-auto bg-gradient-to-br from-red-500/20 to-red-600/20 rounded-2xl flex items-center justify-center backdrop-blur-sm border-2 border-red-500/30">
                    <svg class="w-12 h-12 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7"></path>
                    </svg>
                </div>
                <div class="space-y-2">
                    <h3 class="text-2xl font-light-custom tracking-tight text-white">Confirmer déconnexion</h3>
                    <p class="text-gray-300 text-base font-light-custom tracking-tight max-w-sm mx-auto leading-relaxed">
                        Voulez-vous vraiment quitter votre session Archive EMP ?
                    </p>
                </div>
                <div class="flex gap-4 pt-4">
                    <button onclick="closeLogoutModal()" class="flex-1 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-light-custom px-6 py-3 rounded-xl border border-white/20 transition-all duration-300 hover:scale-[1.02] hover:shadow-xl">
                        Annuler
                    </button>
                    <button onclick="handleLogout()" class="flex-1 logout-btn text-white font-light-custom px-6 py-3 rounded-xl shadow-2xl transition-all duration-300 hover:shadow-2xl hover:scale-105 backdrop-blur-sm text-sm tracking-tight">
                        Déconnexion
                    </button>
                </div>
            </div>
        </dialog>

        <!-- Contenu principal -->
        <div class="min-h-screen pt-24 pb-12">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-light-custom tracking-tight mb-6 gradient-text drop-shadow-2xl">📚 Archives Académiques</h1>
                    <p class="text-lg md:text-xl lg:text-2xl text-gray-200 font-light-custom tracking-tight">École Militaire Polytechnique</p>
                    <div class="h-1 w-40 mx-auto mt-6 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 shadow-lg"></div>
                </div>

                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Card Semestre 1 -->
                    <div class="card-s1 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                        <div class="header-s1 p-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-light-custom tracking-tight text-white mb-2 drop-shadow-lg">Semestre 1</h2>
                                    <p class="text-yellow-100 text-base font-light-custom tracking-tight opacity-90">10 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-white bg-opacity-20 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">1</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie Des Graphes</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">2</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Théorie De Langage</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">3</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Développement Web</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Card Semestre 2 -->
                    <div class="card-s2 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                        <div class="header-s2 p-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-light-custom tracking-tight text-white mb-2 drop-shadow-lg">Semestre 2</h2>
                                    <p class="text-blue-100 text-base font-light-custom tracking-tight opacity-90">12 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-white bg-opacity-20 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                            <a href="#" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center space-x-4">
                                    <span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">1</span>
                                    <div>
                                        <span class="text-white font-light-custom text-base leading-tight block tracking-tight">Analyse Mathématique II</span>
                                        <span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span>
                                    </div>
                                </div>
                                <svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="text-center mt-20">
                    <div class="footer-card inline-block rounded-2xl px-12 py-6 shadow-2xl hover:shadow-xl transition-all duration-300">
                        <p class="text-gray-200 flex items-center justify-center space-x-3 text-base font-light-custom tracking-tight">
                            <svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>💡 Cliquez sur un module pour accéder aux archives et ressources complètes</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showLogoutModal(event) {
            event.preventDefault();
            document.getElementById('logoutModal').showModal();
        }
        function closeLogoutModal() {
            document.getElementById('logoutModal').close();
        }
        function handleLogout() {
            alert('Déconnexion simulée - Intégrez votre logique de déconnexion ici');
            closeLogoutModal();
        }
        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') closeLogoutModal();
        });

        // Menu mobile toggle
        document.querySelector('[data-collapse-toggle="navbar-emp"]').addEventListener('click', function() {
            const navbar = document.getElementById('navbar-emp');
            navbar.classList.toggle('hidden');
        });
    </script>
</body>
</html>
