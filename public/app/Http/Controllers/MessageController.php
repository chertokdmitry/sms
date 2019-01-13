<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $navStatus = ['', 'active'];
        $view = view('messages', ['messages' => $messages, 'navStatus' => $navStatus])->render();

        return (new Response($view));
    }
}
