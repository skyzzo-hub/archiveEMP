<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckLanguage; // <-- Important : On importe le fichier créé

/*
|--------------------------------------------------------------------------
| 1. ROUTE DU GLOBE (Changer de langue)
|--------------------------------------------------------------------------
| C'est cette route qui manquait et qui causait l'erreur 404 !
*/
Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('language.switch');


/*
|--------------------------------------------------------------------------
| 2. VOS PAGES (Protégées par le Middleware)
|--------------------------------------------------------------------------
*/
Route::middleware(CheckLanguage::class)->group(function () {

    // Page d'Accueil
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    // Si tu n'as pas encore de route login, ajoute celle-ci :
Route::get('/login', function () {
    return view('/login'); // Remplace par le chemin de ta page login
})->name('login');

    // Page À propos
    Route::view('/about', 'about')->name('about');

    // Page Contact
    Route::view('/contact', 'contact')->name('contact');

});

