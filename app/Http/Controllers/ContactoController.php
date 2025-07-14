<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    
    public function index()
    {
        return view('contacto.contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'celular' => 'nullable|string|regex:/^[0-9+\-\s()]+$/|min:10|max:20',
            'asunto' => 'required|string|max:255',
            'mail' => 'required|email|max:255',
            'mensaje' => 'required|string|max:1000',

            //al no ser un componente de liverwire, debo pasarle como segundo parametro la funcion mensajes de error para mostrar los errores personalizaos
            //que en livewire se llama automaticamente
        ], $this->messages());

        return redirect()->route('contacto')->with('success', 'Mensaje enviado correctamente.');
    }

    /**
     * Mensajes de validación personalizados.
     */
    protected function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede exceder los 255 caracteres.',
            'apellido.required' => 'El apellido es obligatorio.',
            'apellido.max' => 'El apellido no puede exceder los 255 caracteres.',
            'celular.regex' => 'El celular debe contener solo números y caracteres válidos.',
            'celular.min' => 'El celular debe tener al menos 10 dígitos.',
            'celular.max' => 'El celular no puede exceder los 20 caracteres.',
            'asunto.required' => 'El asunto es obligatorio.',
            'asunto.max' => 'El asunto no puede exceder los 255 caracteres.',
            'mail.required' => 'El correo electrónico es obligatorio.',
            'mail.email' => 'Debe ser un correo electrónico válido.',
            'mail.max' => 'El correo electrónico no puede exceder los 255 caracteres.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.max' => 'El mensaje no puede exceder los 1000 caracteres.',
        ];
    }
}
