<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Si el usuario no está autenticado, redirigir al login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Si está autenticado, redirigir al panel de mensajes
        return redirect()->route('admin.messages.index');
    }
}
