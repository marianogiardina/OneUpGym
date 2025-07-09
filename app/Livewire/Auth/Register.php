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


#[Layout('components.layouts.auth', ['title' => 'Registro - OneUp Gym'])]
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
            'fecha_nacimiento' => ['required', 'date', 'before_or_equal:' . now()->subYears(16)->format('Y-m-d')], // Minimo 16 años
            'celular' => ['required', 'string', 'regex:/^[0-9+\-\s()]+$/', 'min:10', 'max:15'], 
            'peso' => ['nullable', 'numeric', 'min:1', 'max:300'], 
            'altura' => ['nullable', 'numeric', 'min:100', 'max:250'], 
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        // Convertir string vacios a null en campos opcionales para que lo acepte la bbdd
        $validated['peso'] = empty($validated['peso']) ? null : $validated['peso'];
        $validated['altura'] = empty($validated['altura']) ? null : $validated['altura'];

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        event(new Registered($user));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }

    // Creo el metodo messages para utilizar en la vista en caso de error en las validaciones
    // Este metodo retorna un array con los mensajes de error custom para cada regla de validación

    protected function messages()
    {
        return [
            'fecha_nacimiento.before_or_equal' => 'Debes tener al menos 16 años para registrarte.',
            'email.unique' => 'Este correo electrónico ya está registrado.',
            'celular.regex' => 'El número de teléfono debe contener solo números, espacios, guiones y el símbolo +.',
            'celular.min' => 'El número de teléfono debe tener al menos 10 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'peso.min' => 'Si ingresas el peso, debe ser mayor a 0 kg.',
            'peso.max' => 'Si ingresas el peso, no puede ser mayor a 300 kg.',
            'peso.numeric' => 'El peso debe ser un número válido.',
            'altura.min' => 'Si ingresas la altura, debe ser mayor a 100 cm.',
            'altura.max' => 'Si ingresas la altura, no puede ser mayor a 250 cm.',
            'altura.numeric' => 'La altura debe ser un número válido.',
        ];
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
