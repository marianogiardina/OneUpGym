<?php

use App\Http\Controllers\MembresiaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClaseController;

//Devuelve la vista de inicio
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('membresias', [
    MembresiaController::class,
    'index'
])->name('membresias.index');

//Route::view('dashboard', 'dashboard')
//>>>>>>> main
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Ruta para el dashboard
// (Eliminado: Definiciones duplicadas, ahora solo dentro del grupo middleware)

//ABM
Route::get('clases/create', [
    ClaseController::class,
    'create'
])->name('clases.create');

Route::post('clases/store', [
    ClaseController::class,
    'store'
])->name('clases.store');

Route::get('clases/{clase}/editar', [
    ClaseController::class,
    'edit'
])->name('clases.edit');

Route::put('clases/{clase}', [
    ClaseController::class,
    'update'
])->name('clases.update');

Route::delete('clases/{clase}', [
    ClaseController::class,
    'destroy'
])->name('clases.destroy');

Route::get('usuarios/create', [
    UserController::class,
    'create'
])->name('usuarios.create');

Route::post('usuarios/store', [
    UserController::class,
    'store'
])->name('usuarios.store');

Route::get('usuarios/{user}/editar', [
    UserController::class,
    'edit'
])->name('usuarios.edit');

Route::put('usuarios/{user}', [
    UserController::class,
    'update'
])->name('usuarios.update');

Route::delete('usuarios/{user}', [
    UserController::class,
    'destroy'
])->name('usuarios.destroy');

Route::get('profesores/create', [
    UserController::class,
    'create'
])->name('profesores.create');

Route::post('profesores/store', [
    UserController::class,
    'store'
])->name('profesores.store');

Route::get('profesores/{user}/editar', [
    UserController::class,
    'edit'
])->name('profesores.edit');

Route::put('profesores/{user}', [
    UserController::class,
    'update'
])->name('profesores.update');

Route::delete('profesores/{user}', [
    UserController::class,
    'destroy'
])->name('profesores.destroy');




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

});


// Middleware para proteger rutas de administrador
Route::middleware(['admin'])->group(function () {

    Route::get('dashboard', fn() => view('dashboard.index'))->name('dashboard.index');
    Route::get('dashboard/admin/profesores', [UserController::class, 'adminProfesores'])->name('dashboard.admin.profesores');
    Route::get('dashboard/admin/clientes', [UserController::class, 'adminUsuarios'])->name('dashboard.admin.clientes');
    Route::get('dashboard/admin/clases', [ClaseController::class, 'adminClases'])->name('dashboard.admin.clases');
});

require __DIR__ . '/auth.php';
