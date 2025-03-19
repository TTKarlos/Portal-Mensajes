<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);
        return view('messages.index', compact('messages'));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'relationship' => 'nullable|string|max:255',
            'content' => 'required|string|max:500',
        ]);

        // Filtrar contenido inapropiado
        $prohibitedWords = [
            'odio', 'matar', 'muerte', 'asesino', 'violencia', 'racista', 'racismo',
            'nazi', 'terrorista', 'puta', 'puto', 'mierda', 'joder', 'coño', 'gilipollas',
            'cabrón', 'idiota', 'imbécil', 'estúpido', 'maricón', 'marica',
            'negro', 'judío', 'musulmán', 'inmigrante', 'extranjero', 'retrasado',
            'discapacitado', 'gordo', 'feo', 'perra', 'zorra', 'prostituta'
        ];

        $content = strtolower($validated['content']);
        foreach ($prohibitedWords as $word) {
            if (str_contains($content, $word)) {
                return back()
                    ->withInput()
                    ->withErrors(['content' => 'Tu mensaje contiene lenguaje inapropiado. Por favor, revísalo.']);
            }
        }

        // Patrones de discurso de odio
        $hatePatterns = [
            '/odio a los/i', '/muerte a/i', '/eliminar a/i', '/exterminar/i',
            '/no debería(n)? existir/i', '/son una plaga/i', '/fuera de aquí/i',
            '/vete(te)? a tu país/i', '/no pertenece(n)? aquí/i'
        ];

        foreach ($hatePatterns as $pattern) {
            if (preg_match($pattern, $content)) {
                return back()
                    ->withInput()
                    ->withErrors(['content' => 'Tu mensaje contiene discurso de odio. Por favor, revísalo.']);
            }
        }

        Message::create($validated);

        return redirect()->route('home')
            ->with('success', '¡Gracias por tu mensaje! Ha sido enviado correctamente.');
    }
}
