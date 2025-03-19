<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class AdminMessageController extends Controller
{
    // Elimina este constructor
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('admin.messages.index')
            ->with('success', 'Mensaje eliminado correctamente');
    }
}
