<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('welcome.page_title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            /* Fond Sombre (Bleu nuit très foncé ou Noir) */
            --bg-primary: #000000;
            --text-primary: #D4AF37;

            --text-secondary: #D4AF37;
            --accent: #D4AF37;
        }

        /* 2. CONFIGURATION DU MODE CLAIR */
        [data-theme="light"] {
            --bg-primary: #ffffff;
            --text-primary: #D4AF37;

            --text-secondary: #D4AF37;
            --accent: #D4AF37;
        }

        [data-theme="light"] {
            --bg-primary: #f5f5f5;
    --text-primary: #B8860B;   /* Un doré plus sombre pour être lisible sur blanc */
    --text-secondary: #475569; /* Un gris foncé pour le sous-titre du logo */
    --accent: #B8860B;
        }

        body {
            font-family: 'Inter', sans-serif;

            background: var(--bg-primary);
            color: var(--text-primary);
            transition: background 0.4s ease, color 0.4s ease;
            overflow-x: hidden;
        }

        /* Header */
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background: transparent;
            border: none;
            box-shadow: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px;
        }

        [data-theme="light"] .header {
            background: transparent ;
        }

        .center-controls {
                position: absolute;
                left: 50%;
                transform: translate(-50% , -10px);
                display: flex;
                gap: 0.5rem;
                z-index: 1001; /* Important pour cliquer dessus */
        }



        .logo-container {
            display: flex;
            align-items: center;
            gap: 1rem;
            z-index: 1001; /* Pour rester cliquable */
        }

        .logo-img {
            width: 50px;
            height: 50px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .logo-text span:first-child {
            font-size: 0.9rem;
            font-weight: 600;
        }

        .logo-text span:last-child {
            font-size: 0.98rem;
            color: var(--text-secondary);
        }

        .header-controls {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .btn-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: none;
            background: transparent;
            color: var(--text-primary);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .btn-icon:hover {
            background: var(--bg-secondary);
            transform: scale(1.05);
        }

        .menu-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.2rem;
            background: transparent;
            border: 1px solid var(--text-primary);
            border-radius: 8px;
            color: var(--text-primary);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .menu-btn:hover {
            background: var(--text-primary);
            color: var(--bg-primary);
        }

        .hamburger {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .hamburger span {
            width: 18px;
            height: 2px;
            background: currentColor;
            transition: all 0.3s ease;
        }

        /* Hero Section */
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 2rem;
            padding-top: 150px;
            position: relative;
            text-align: center;
        }



        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 1300px;
        }

        .hero-logo {
            width: 150px;
            height: 150px;
            margin: 0 auto 2rem;

        }

        .hero-logo-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        h1 {
            font-size: clamp(2.5rem, 4vw, 3rem);
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .subtitle {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 2rem;
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        .description {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-primary {
            padding: 1.2rem 3rem;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            background: var(--text-primary);
            color: var(--bg-primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 50px rgba(212, 175, 55, 0.3);
        }

        [data-theme="light"] .btn-primary {
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        }

        [data-theme="light"] .btn-primary:hover {
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.25);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 1rem 1.5rem;
            }

            .logo-text span:first-child {
                font-size: 0.8rem;
            }

            .logo-text span:last-child {
                font-size: 0.65rem;
            }

            .hero {
                padding: 1rem;
            }

            .hero-logo {
                width: 100px;
                height: 100px;
            }
        }

        .main-background {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
                    url("{{ asset('background/background.jpg') }}");
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: -1;
        }


        body, .hero {
               background: transparent !important;
        }


        [data-theme="light"] .main-background {
              background-image: linear-gradient(rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.85)),
                    url("{{ asset('background/background.jpg') }}");
        }

        .description {
              font-size: clamp(1rem, 2vw, 1.2rem);
              color: #94a3b8;
              line-height: 1.8;
              margin-bottom: 3rem;
              max-width: 800px;
              margin-left: auto;
              margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="main-background"></div>

    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('logo/logo.png') }}" alt="Logo CSE" class="logo-img" style="object-fit: contain;">
            <div class="logo-text">
                <span>EMP</span>
                <span>Ecole Militaire</span>
                <span>Poytechnique</span>
            </div>
        </div>

        <div class="center-controls">
            <button class="btn-icon" id="themeToggle" title="{{ __('welcome.toggle_theme') }}"
                    style="background: rgba(255,255,255,0.1); border-radius: 50%; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; padding: 0; border: none;">

                <svg id="sunIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="6" fill="currentColor"/>
                    <circle cx="12" cy="2" r="1.5" fill="currentColor"/>
                    <circle cx="12" cy="22" r="1.5" fill="currentColor"/>
                    <circle cx="2" cy="12" r="1.5" fill="currentColor"/>
                    <circle cx="22" cy="12" r="1.5" fill="currentColor"/>
                    <circle cx="4.93" cy="4.93" r="1.5" fill="currentColor"/>
                    <circle cx="19.07" cy="19.07" r="1.5" fill="currentColor"/>
                    <circle cx="4.93" cy="19.07" r="1.5" fill="currentColor"/>
                    <circle cx="19.07" cy="4.93" r="1.5" fill="currentColor"/>
                </svg>

                <svg id="moonIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </button>

            <a href="{{ route('language.switch', app()->getLocale() == 'fr' ? 'en' : 'fr') }}"
                    class="btn-icon"
                    title="{{ __('welcome.change_language') }}"
                    style="
                            background: rgba(255,255,255,0.1);
                            border-radius: 50%;
                            width: 32px;
                            height: 32px;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            color: var(--text-primary);
                            text-decoration: none; /* Enlève le soulignement du lien */
                            cursor: pointer;
    ">

    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="2" y1="12" x2="22" y2="12"></line>
        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
    </svg>
</a>
        </div>

        <div class="right-controls" style="display: flex; align-items: center;">

            <a href="{{ route('about') }}"
                style="
                    display: flex;
                    align-items: center;
                    gap: 8px;
                    text-decoration: none;
                    font-size: 1.1rem;
                    font-weight: 600;
                    color: var(--text-primary);
                    font-family: 'Inter', sans-serif;
                    transition: opacity 0.3s;
                "
                onmouseover="this.style.opacity='0.7'"
                onmouseout="this.style.opacity='1'">

                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="16" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                </svg>
            </a>

        </div>
    </div>
    </header>

    <!-- Hero Section -->
    <main class="hero">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo École" class="hero-logo-img">
            </div>

            <h1 id="welcomeText">{{ __('welcome.welcome') }}</h1>
            <h2 class="subtitle" id="subtitleText">{{ __('welcome.subtitle') }}</h2>
            <p class="description" id="descriptionText">
                {{ __('welcome.description') }}
            </p>
            <button class="btn-primary" onclick="window.location.href='{{ route('login') }}'">
                    <span id="btnText">{{ __('welcome.join_cse') }}</span>
            </button>
        </div>
    </main>

    <script>

        // Fonction pour afficher la bonne icône
        function updateIcons(isLight) {
            if (isLight) {
                // Mode Clair : on cache le soleil, on montre la lune
                if(sunIcon) sunIcon.style.display = 'none';
                if(moonIcon) moonIcon.style.display = 'block';
            } else {
                // Mode Sombre : on montre le soleil, on cache la lune
                if(sunIcon) sunIcon.style.display = 'block';
                if(moonIcon) moonIcon.style.display = 'none';
            }
        }

        // Vérification au démarrage
        const currentTheme = localStorage.getItem('theme');
        if (currentTheme === 'light') {
            document.documentElement.setAttribute('data-theme', 'light');
            updateIcons(true);
        } else {
            document.documentElement.removeAttribute('data-theme');
            updateIcons(false);
        }

        // Au clic sur le bouton thème
        themeToggle.addEventListener('click', () => {
            const isLight = document.documentElement.hasAttribute('data-theme');
            if (isLight) {
                // On passe en sombre
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'dark');
                updateIcons(false);
            } else {
                // On passe en clair
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
                updateIcons(true);
            }
        });


    </script>
</body>
</html>
