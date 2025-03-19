<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [HomeController::class, 'index'])->name('category');
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/news', [HomeController::class, 'index'])->name('news');
Route::get('/blog', [HomeController::class, 'index'])->name('blog');
Route::get('/contact', [HomeController::class, 'index'])->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');



      // 🛠️ Hero Section CRUD Routes (Only for Authenticated Users)
      Route::resource('hero', HeroController::class);
});

require __DIR__.'/auth.php';
