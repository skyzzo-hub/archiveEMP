<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadManager;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/archive', function () {
    return view('archive');
})->middleware(['auth', 'verified'])->name('archive');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/archive',function(){
    return view('archive');
});

Route::post('/upload',[App\Http\Controllers\UploadManager::class,'upload'])
        ->name('files.upload');

Route::get('/download/{file}',[App\Http\Controllers\UploadManager::class,'download'])
        ->name('files.download');

 Route::get('/archive/{moduleId}', [UploadManager::class, 'index'])->name('archive.index');
require __DIR__.'/auth.php';
