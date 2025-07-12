<?php

use App\Http\Controllers\MembresiaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Devuelve la vista de inicio
Route::get('/', function () {
    return view('index');
})->name('home');


//Devuelve la vista de de dashboard
Route::view('dashboard', 'dashboard/index');

Route::get('membresias',[
    MembresiaController:: class,
    'index'
])->name('membresias.index');

//Route::view('dashboard', 'dashboard')
//>>>>>>> main
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Devuelve la vista de de dashboard admin
Route::get('dashboard/admin/clientes', [
    UserController::class, 'index'
]);

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
