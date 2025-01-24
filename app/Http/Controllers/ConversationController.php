<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    //
    public function index()
    {
        $conversations = Conversation::where('to',Auth::user()->id)->orWhere('from',Auth::user()->id)->get();

        return view('conversations.index', [
            'conversations' => $conversations
        ]);
        // dd($conversations);
    }
    public function show(Conversation $conversation)
    {
        return view('conversations.show',[
            'conversation'=>$conversation,
        ]);

    }
}
