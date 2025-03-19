<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminMessageController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', [MessageController::class, 'index'])->name('home');
Route::get('/crear', [MessageController::class, 'create'])->name('messages.create');
Route::post('/mensajes', [MessageController::class, 'store'])->name('messages.store');

// Ruta del panel de control
Route::get('/cpanel', function () {
    // Si el usuario no está autenticado, redirigir al login
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    // Si está autenticado, redirigir al panel de mensajes
    return redirect()->route('admin.messages.index');
})->name('admin.dashboard');

// Rutas protegidas por autenticación
Route::middleware(['auth', 'verified'])->prefix('cpanel')->name('admin.')->group(function () {
    // Mensajes
    Route::get('/mensajes', [AdminMessageController::class, 'index'])->name('messages.index');
    Route::get('/mensajes/{message}', [AdminMessageController::class, 'show'])->name('messages.show');
    Route::delete('/mensajes/{message}', [AdminMessageController::class, 'destroy'])->name('messages.destroy');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

