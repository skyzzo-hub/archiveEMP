<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('about.page_title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* --- REPRISE DE TON THEME --- */
        :root {
            --bg-primary: #000000;
            --bg-card: rgba(0, 0, 0, 0.2);;
            --text-primary: #D4AF37;
            --text-secondary: #94a3b8;
            --border-color: rgba(212, 175, 55, 0.2);
        }

        [data-theme="light"] {
            --bg-primary: #ffffff;
            --bg-card: rgba(255, 255, 255, 0.8);
            --text-primary: #D4AF37;
            --text-secondary: #475569;
            --border-color: rgba(212, 175, 55, 0.3);
        }

        body {
            font-family: 'Inter', sans-serif;
    background: transparent !important;
    color: var(--text-primary);
    margin: 0;
    padding: 0;
    transition: background 0.4s ease, color 0.4s ease;
    line-height: 1.6;
        }

        .top-bar { padding: 20px 40px; display: flex; align-items: center; }

        .back-link {
            text-decoration: none;
            color: var(--text-primary);
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: opacity 0.3s;
        }
        .back-link:hover { opacity: 0.7; }

        .container { max-width: 1000px; margin: 0 auto; padding: 40px 20px; }

        /* logo */

        .school-logo-container {
                margin-bottom: 25px; /* Espace entre le logo et le titre */
                display: flex;
                justify-content: center;
                align-items: center;
            }

        .school-logo {
                width: 120px; /* Ajustez la taille selon vos besoins */
                height: auto;
                filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.3)); /* Petit éclat doré autour du logo */
                transition: transform 0.5s ease;
            }

        .school-logo:hover {
                transform: scale(1.05) rotate(2deg); /* Animation légère au survol */
            }

/* Responsive : Logo plus petit sur mobile */
        @media (max-width: 600px) {
                .school-logo {
                    width: 90px;
                }
            }

        h1 { font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 800; margin-bottom: 1rem; text-align: center; }

        .subtitle { text-align: center; color: var(--text-secondary); font-size: 1.2rem; max-width: 600px; margin: 0 auto 60px; }

        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 60px; }

        .card {
            background: var(--bg-card);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 20px;
    border: 1px solid var(--border-color);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.2); }

        .card h3 { font-size: 1.5rem; margin-top: 0; margin-bottom: 15px; display: flex; align-items: center; gap: 10px; }
        .card p { color: var(--text-secondary); font-size: 0.95rem; margin: 0; }

        .cta-section { text-align: center; padding: 60px 0; border-top: 1px solid var(--border-color); }

        .btn-gold {
            background: var(--text-primary);
            color: var(--bg-primary);
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: opacity 0.3s;
        }
        .btn-gold:hover { opacity: 0.9; }

        .stats-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    /* REMPLACER LE BLANC PAR LE NOIR TRANSPARENT */
    background: var(--bg-card);
    backdrop-filter: blur(10px); /* Ajoute l'effet de flou premium */
    padding: 40px 0;
    border-radius: 20px;
    margin-bottom: 60px;
    border: 1px solid var(--border-color);
    flex-wrap: wrap;
    gap: 20px
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: 800;
    color: var(--text-primary); /* Gold */
    line-height: 1;
    margin-bottom: 5px;
}

.stat-label {
    color: var(--text-secondary);
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}


.names-grid {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
    max-width: 900px;
    margin: 0 auto 60px auto;
}

.name-item {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-primary);
    padding: 10px 20px;
    /* REMPLACER rgba(255, 255, 255, 0.05) PAR : */
    background: var(--bg-card);
    backdrop-filter: blur(5px);
    border-radius: 8px;
    border: 1px solid var(--border-color);
    transition: all 0.3s ease;
}

.name-item:hover {
    background: var(--text-primary);
    color: #0f172a; /* Couleur sombre au survol pour le contraste */
    transform: scale(1.05);
}

/* Sur mobile, les noms s'empileront proprement */
@media (max-width: 600px) {
    .names-grid {
        flex-direction: column;
        gap: 10px;
    }
}


.simple-footer {
    width: 100%;
    padding: 30px 0;
    margin-top: 60px;
    border-top: 1px solid var(--border-color); /* La fine ligne dorée/sombre */
}

.footer-container {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between; /* Copyright à gauche, Email à droite */
    align-items: center;
    padding: 0 20px;
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.footer-right a {
    color: var(--text-primary); /* Email en doré */
    text-decoration: none;
    font-weight: 500;
    transition: opacity 0.3s;
}

.footer-right a:hover {
    opacity: 0.7;
    text-decoration: underline;
}

.email-icon {
    margin-right: 8px;
    color: var(--text-primary);
}

/* Version Mobile : on centre tout l'un sur l'autre */
@media (max-width: 600px) {
    .footer-container {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

.main-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    /* On utilise le voile noir (rgba 0,0,0) au lieu du bleu */
    background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
                    url("{{ asset('background/background.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: -1;
}

[data-theme="light"] .main-background {
    background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)),
                    url("{{ asset('background/background.jpg') }}");
}


    </style>
</head>
<body>
    <div class="main-background"></div>

    <div class="top-bar">
        <a href="{{ route('home') }}" class="back-link">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            {{ __('about.back_home') }}
        </a>
    </div>

    <div class="about-hero">
    <div class="school-logo-container">
        <img src="{{ asset('logo/logo.png') }}" alt="Logo EMP" class="school-logo">
    </div>
</div>

    <div class="container">
        <h1>{{ __('about.title') }}</h1>
        <p class="subtitle">{{ __('about.subtitle') }}</p>

        <div class="grid">

            <div class="card">
                <h3>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    {{ __('about.mission_title') }}
                </h3>
                <p>
                    {{ __('about.mission_desc') }}
                </p>
            </div>

            <div class="card">
                <h3>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    {{ __('about.students_title') }}
                </h3>
                <p>
                    {{ __('about.students_desc') }}
                </p>
            </div>

            <div class="card">
                <h3>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    {{ __('about.collab_title') }}
                </h3>
                <p>
                    {{ __('about.collab_desc') }}
                </p>
            </div>

        </div>

        <div class="stats-container">
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">{{ __('about.stats_modules') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">120+</span>
                    <span class="stat-label">{{ __('about.stats_exams') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">300+</span>
                    <span class="stat-label">Étudiants Aidés</span>
                </div>
        </div>

        <!-- asmawat ta3na -->

        <div class="team-section">
            <h2 style="text-align: center; margin-bottom: 40px; font-size: 2rem;">{{ __('about.team_title') }}</h2>

            <div class="names-grid">
                <div class="name-item">Aymen KEBBAS</div>
                <div class="name-item">Abdellah ACHIKA</div>
                <div class="name-item">Ahmed Wassim AOUTTI</div>
                <div class="name-item">Karim HIDOUS</div>
            </div>
        </div>

        <div class="cta-section">
            <h2 style="font-size: 2rem; margin-bottom: 10px;">{{ __('about.cta_title') }}</h2>
            <p style="color: var(--text-secondary);">{{ __('about.cta_sub') }}</p>

            <a href="#" class="btn-gold">{{ __('about.cta_btn') }}</a>
        </div>
    </div>

<footer class="simple-footer">
    <div class="footer-container">
        <div class="footer-left">
            &copy; 2024 EMP Archive. {{ __('about.footer_rights') }}
        </div>

        <div class="footer-right">
            <span class="email-icon">✉</span>
            <a href="mailto:votre-email@emp.dz">ecole@emp.dz</a>
        </div>
    </div>
</footer>

    <script>
        const currentTheme = localStorage.getItem('theme') || 'dark';
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
        }
    </script>

</body>
</html>
