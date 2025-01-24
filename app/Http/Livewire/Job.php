<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Job extends Component
{
    public $job;

    public function mount($job)
    {
        $this->job = $job;
    }

    private function isAuth()
    {
        return Auth::check();
    }

    public function like()
    {
        
            Auth::user()->likes()->toggle($this->job->id);

    }

    public function render()
    {
        return view('livewire.job');
    }
}
