<?php
namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Conversation extends Component
{
    public $conversation;
    public $message="";
    protected $listeners = ['sent'=> '$refresh'];
    public function sendMessage(){
        Message::create([
            'user_id'=>Auth::user()->id,
            'content'=>$this->message,
            'conversation_id'=> $this->conversation->id,
        ]);
        $this->message= '';
        $this->emit('sent');

    }

    public function mount($conversation)
    {
        $this->conversation = $conversation;
    }

    public function render()
    {
        return view('livewire.conversation', [
            'conversation' => $this->conversation
        ]);
    }
}
