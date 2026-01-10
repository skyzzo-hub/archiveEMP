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
        .nav-divider { width: 1px; height: 24px; background: linear-gradient(to bottom, transparent, #64748b, transparent); margin: 0 16px; border-radius: 1px; }
        .font-thin-custom { font-weight: 300 !important; }
        .font-light-custom { font-weight: 400 !important; }
        .logout-modal { backdrop-filter: blur(20px); background: rgba(15,23,42,0.95); }
        .logout-modal::backdrop { backdrop-filter: blur(8px); }
    </style>
</head>
<body>
    <div class="bg-library"></div>
    <div class="content-wrapper">
        <nav class="fixed top-0 w-full z-50 bg-slate-900 bg-opacity-95 border-b border-slate-700 shadow-lg">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="h-20 py-4 px-8 flex items-center gap-8 lg:gap-16 xl:gap-24">
                    <div class="flex items-center space-x-4 flex-shrink-0">
                        <button class="text-white p-3 hover:bg-slate-800 rounded-xl transition-all duration-200">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('logo/logo.png') }}" alt="Logo EMP" class="h-12 w-12 object-contain">
                            <div class="text-white font-thin-custom">
                                <div class="text-lg font-bold tracking-normal">ARCHIVE</div>
                                <div class="text-base tracking-normal">EMP</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-1 max-w-2xl mx-auto hidden md:flex">
                        <div class="relative w-full">
                            <input type="text" placeholder="🔍 Rechercher un module..."
                                   class="w-full bg-white/90 backdrop-blur-sm rounded-2xl pl-12 pr-12 py-3 text-gray-800 font-light-custom tracking-tight focus:outline-none focus:ring-4 focus:ring-yellow-400/50 shadow-xl border border-white/20">
                            <svg class="w-5 h-5 text-gray-500 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3 flex-shrink-0">
                        <button class="text-white hover:text-yellow-400 p-3 hover:bg-slate-800/50 rounded-xl transition-all duration-200 backdrop-blur-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </button>
                        <button class="text-white hover:text-yellow-400 p-3 hover:bg-slate-800/50 rounded-xl transition-all duration-200 backdrop-blur-sm relative">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">3</span>
                        </button>
                        <div class="nav-divider"></div>
                        <form method="POST" action="{{ route('logout') }}" class="inline" onclick="showLogoutModal(event)">
                            @csrf
                            <button type="submit" class="logout-btn text-white font-light-custom px-6 py-3 rounded-xl shadow-2xl transition-all duration-500 flex items-center space-x-2 hover:shadow-2xl hover:scale-105 backdrop-blur-sm border-white/20 text-sm tracking-tight">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                <span class="hidden sm:inline font-light-custom">Déconnexion</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

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
                    <form method="POST" action="{{ route('logout') }}" class="flex-1 inline">
                        @csrf
                        <button type="submit" class="w-full logout-btn text-white font-light-custom px-6 py-3 rounded-xl shadow-2xl transition-all duration-300 hover:shadow-2xl hover:scale-105 backdrop-blur-sm text-sm tracking-tight">
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        </dialog>

        <div class="min-h-screen pt-32 pb-12">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="text-center mb-16">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-light-custom tracking-tight mb-6 gradient-text drop-shadow-2xl">📚 Archives Académiques</h1>
                    <p class="text-lg md:text-xl lg:text-2xl text-gray-200 font-light-custom tracking-tight">École Militaire Polytechnique</p>
                    <div class="h-1 w-40 mx-auto mt-6 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 shadow-lg"></div>
                </div>

                <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <div class="card-s1 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                        <div class="header-s1 p-8">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h2 class="text-3xl lg:text-4xl font-light-custom tracking-tight text-white mb-2 drop-shadow-lg">Semestre 1</h2>
                                    <p class="text-yellow-100 text-base font-light-custom tracking-tight opacity-90">11 Modules disponibles</p>
                                </div>
                                <div class="rounded-full p-5 bg-white bg-opacity-20 backdrop-blur-sm shadow-xl">
                                    <svg class="w-10 h-10 lg:w-12 lg:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 space-y-4 max-h-96 overflow-y-auto">
                            <?php
                            $modulesS1 = ['Théorie Des Graphes', 'Théorie De Langage', 'Théorie De Signal ','Théorie De L`Information', 'Développement Web', 'Concepts De Base De Réseau','Analyse Des Données', 'Base De Données Avancée', '>','Langue Anglaise I', 'Langue Française I'];
                            foreach($modulesS1 as $index => $module) {
                                echo '<a href="/archive" class="module-item module-item-s1 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">';
                                echo '<div class="flex items-center space-x-4"><span class="badge-s1 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">' . ($index + 1) . '</span>';
                                echo '<div><span class="text-white font-light-custom text-base leading-tight block tracking-tight">' . $module . '</span><span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span></div></div>';
                                echo '<svg class="w-6 h-6 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>';
                            }
                            ?>
                        </div>
                    </div>

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
                            <?php
                            $modulesS2 = ['Analyse Mathématique II', 'Algèbre et Géométrie', 'Physique II - Électromagnétisme','Thermodynamique', 'Informatique II', 'Mécanique du Point','Langue Française II', 'Langue Anglaise II', 'Structure de la Matière','Probabilités et Statistiques', 'Droits de l\'Homme', 'Éducation Physique II'];
                            foreach($modulesS2 as $index => $module) {
                                echo '<a href="/archive" class="module-item module-item-s2 flex items-center justify-between p-6 rounded-2xl hover:shadow-xl transition-all duration-300">';
                                echo '<div class="flex items-center space-x-4"><span class="badge-s2 w-12 h-12 rounded-xl flex items-center justify-center text-white font-light-custom text-base shadow-lg">' . ($index + 1) . '</span>';
                                echo '<div><span class="text-white font-light-custom text-base leading-tight block tracking-tight">' . $module . '</span><span class="text-gray-300 text-xs font-light-custom tracking-tight">Cliquez pour accéder aux ressources</span></div></div>';
                                echo '<svg class="w-6 h-6 text-blue-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>

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
        document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLogoutModal(); });
    </script>
</body>
</html>
