<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Carbon\Carbon;


#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';

    public string $lastname = '';

    public string $email = '';

    public string $fecha_nacimiento = '';

    public string $celular = '';

    public string $peso = '';

    public string $altura = '';

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'fecha_nacimiento' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->format('Y-m-d')], // Minimum 16 years old
            'celular' => ['required', 'string', 'regex:/^[0-9+\-\s()]+$/', 'min:10', 'max:15'], // Phone validation
            'peso' => ['required', 'numeric', 'min:1', 'max:300'], // Weight validation
            'altura' => ['required', 'numeric', 'min:100', 'max:250'], // Height validation
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        event(new Registered($user));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
