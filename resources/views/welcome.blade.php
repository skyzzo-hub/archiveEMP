<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-8">Welcome</h1>

            @auth
                <!-- Si l'utilisateur est connecté, afficher dashboard et logout -->
                <div class="space-y-4">
                    <p class="text-lg text-gray-600 mb-6">Vous êtes déjà connecté!</p>
                    <div class="flex gap-4 justify-center">
                        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline text-lg font-medium">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-red-600 hover:underline text-lg font-medium">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Si l'utilisateur n'est pas connecté, afficher login et register -->
                <div class="flex gap-4 justify-center">
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline text-lg font-medium">
                        Register
                    </a>
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline text-lg font-medium">
                        Login
                    </a>
                </div>
            @endauth
        </div>
    </div>
</body>
</html>
