<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Archive EMP')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC:wght@400..700&display=swap" rel="stylesheet">  
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("{{ asset('/bg2.jpg') }}");
            background-size: cover;
            background-attachment:fixed;
            height: 100vh;
            background-repeat: no-repeat;
             overflow-y: auto;
        }
        /* dark overlay */
        body::before {
        content: "";
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.6); /* control darkness */
        z-index: -1;
       
        }

        .navbar {
            background: #1f2937;
        }

        .subject-btn {
            background: #ffd400;
            border-radius: 30px;
            font-weight: 600;
        }

        .archive-card {
            background: #fff;
            border-radius: 12px;
            border: 2px solid #999;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .archive-card h5 {
            text-align: center;
            font-weight: 700;
            margin-top: 12px;
        }

        .archive-card .icon {
            font-size: 32px;
            text-align: center;
            margin-top: 6px;
        }

        .file-list {
            padding: 16px;
            flex-grow: 1;
        }

        .file-item {
            background: #e0e0e0;
            border-radius: 8px;
            padding: 12px 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }
        .archive{
            font-family: 'Baskervville SC', serif;
            font-style: normal;
            font-optical-sizing: auto;
          
        }

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
<body x-data="{ sidebarOpen: true }">

{{-- Navbar --}}
<nav class=" flex top-0 w-full z-50 bg-slate-900/95 border-b border-slate-700 shadow-lg">
    <div class=" d-flex gap-3">
      <button
            @click="sidebarOpen = !sidebarOpen"
            class="px-4 py-2 text-slate-100 rounded-lg hover:bg-white/10 transition-all duration-300 flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <div class="contents d-flex">
                <img src="{{ asset('logo/logo.png') }}" alt="logo emp" style="height:70px;">
                <a class="archive navbar-brand text-white text-center mt-2 ml-2" href="dashboard/">
                    Archive<br>EMP
                </a>
          
        </div>  
    </div>
    

    <div class="mt-3 mx-auto" style="max-width:420px;width:100%;">
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-text"><i class="bi bi-mic"></i></span>
        </div>
    </div>

    <div class="flex items-center space-x-3 mr-3 flex-shrink-0">
                        <!-- LOGOUT -->
       <button onclick="showLogoutModal(event)" class="px-4 py-2 hover:bg-slate-800/50 rounded-lg transition-all shadow-lg border border-red-500/30 bg-red-500/10 hover:bg-red-500/20 focus:outline-none focus:ring-2 focus:ring-red-400 text-red-400 font-light-custom" title="Déconnexion">
         Déconnexion
       </button>
    </div>

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


</nav>

{{-- Page Content --}}


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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

@yield('content')