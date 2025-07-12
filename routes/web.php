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

Route::get('membresias',[
    MembresiaController:: class,
    'index'
])->name('membresias.index');

//Route::view('dashboard', 'dashboard')
//>>>>>>> main
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Devuelve la vista de de dashboard
Route::view('dashboard', 'dashboard/index');

//Devuelve la vista de de dashboard admin
Route::get('dashboard/admin/profesores', [
    UserController::class, 'adminProfesores'
])->name('dashboard.admin.profesores');

//Devuelve la vista de de dashboard admin
Route::get('dashboard/admin/clientes', [
    UserController::class, 'adminUsuarios'
])->name('dashboard.admin.clientes');

Route::get('dashboard/admin/clases', [
    ClaseController::class, 'adminClases'
])->name('dashboard.admin.clases');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
