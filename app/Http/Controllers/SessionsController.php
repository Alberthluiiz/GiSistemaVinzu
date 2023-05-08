<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    /* Validacion de email y password para pasar a la vista principal del Sistema */
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return \back()->withErrors([
                'message' => 'the email'
            ]);
        }
        /* Si esta el usuario y correo es correcto nos envia a la siguiente pantalla */
        return redirect()->to('/');
    }

    /* funcion para Cerrar sesion */
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/');
    }
}
