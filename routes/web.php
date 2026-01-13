<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckLanguage; 
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadManager;

Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('language.switch');

Route::middleware(CheckLanguage::class)->group(function () {

    // Page d'Accueil
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');

    // Page À propos
    Route::view('/about', 'about')->name('about');

    // Page Contact
    Route::view('/contact', 'contact')->name('contact');

});

Route::get('/', function () {
    return view('welcome');
});



// Routes d'authentification (pour visiteurs non connectés)
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // Register
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Password Reset
    Route::get('/password/reset', function () {
        return view('auth.forgot-password');
    })->name('password.request');
});

// Routes protégées (nécessitent authentification)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/archive/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Archive - Page des modules
    
    Route::get('/archive/{moduleId}', [UploadManager::class, 'index'])->name('archive.index');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/upload',[UploadManager::class,'upload'])
        ->name('files.upload');

    Route::get('/download/{file}',[UploadManager::class,'download'])
            ->name('files.download');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/archive',function(){
    return view('archive.index');
});
require __DIR__.'/auth.php';
