<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Profile extends Component
{
    //Estas son las propiedades que se utilizarán en la vista, creo las ultimas dos para saber-
    //si el usuario esta editando su perfil o no, y cual es la pestaña activa.

    public string $name = '';

    public string $lastname = '';

    public string $email = '';

    public string $celular = '';

    public string $peso = '';

    public string $altura = '';

    public string $createdAt = '';

    public bool $editingProfile = false;

    public string $activeTab = 'misClases';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->lastname = Auth::user()->lastname;
        $this->email = Auth::user()->email;
        $this->celular = Auth::user()->celular;
        $this->peso = Auth::user()->peso ?? ""; // Inicializa en string vacio si es null
        $this->altura = Auth::user()->altura ?? ""; // Inicializa en string vacio si es null
        $this->createdAt = Auth::user()->created_at->format('d/m/Y'); // Formato de fecha personalizado
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id),
            ],

            'lastname' => ['required', 'string', 'max:255'],

            'celular' => ['required', 'string', 'regex:/^[0-9+\-\s()]+$/', 'min:10', 'max:15'],

            'peso' => ['nullable', 'numeric', 'min:1', 'max:300'], // Peso del usuario, opcional

            'altura' => ['nullable', 'numeric', 'min:100', 'max:250'], // Altura del usuario, opcional
        ]);

        // Convertir string vacios a null en campos opcionales para que lo acepte la bbdd
        $validated['peso'] = empty($validated['peso']) ? null : $validated['peso'];
        $validated['altura'] = empty($validated['altura']) ? null : $validated['altura'];

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        // Muestro mensaje de éxito
        Session::flash('status', 'profile-updated');
        Session::flash('message', 'Tu perfil ha sido actualizado exitosamente.');

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function resendVerificationNotification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }

    protected function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio.',
            'lastname.required' => 'El apellido es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ser un correo electrónico válido.',
            'email.unique' => 'Este correo electrónico ya está en uso.',
            'celular.required' => 'El número de celular es obligatorio.',
            'celular.regex' => 'El número de celular debe contener solo números y caracteres válidos.',
            'celular.min' => 'El número de celular debe tener al menos 10 dígitos.',
            'celular.max' => 'El número de celular no puede exceder los 15 dígitos.',
            'peso.min' => 'Si ingresas el peso, debe ser mayor a 0 kg.',
            'peso.max' => 'Si ingresas el peso, no puede ser mayor a 300 kg.',
            'altura.min' => 'Si ingresas la altura, debe ser mayor a 100 cm.',
            'altura.max' => 'Si ingresas la altura, no puede ser mayor a 250 cm.',
        ];
    }

    /**
     * Metodo para mostrar el contendido de edicion de usuario.
     */
    public function showEditProfile(): void
    {
        $this->editingProfile = true;
    }

    /**
     * Metodo para mostrar el contenido de vista de perfil.
     */
    public function showProfileView(): void
    {
        $this->editingProfile = false;
    }

    /**
     * Change the active tab.
     */
    public function showTab(string $tabName): void
    {
        $this->activeTab = $tabName;
    }
}
