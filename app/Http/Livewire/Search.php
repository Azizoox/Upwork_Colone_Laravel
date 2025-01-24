<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    public $query='';
    public $jobs=[];
    public int $selectedIndex= 0;
    public function increment(){
        if($this->selectedIndex===count($this->jobs)-1){
            $this->selectedIndex=0;
        }
        $this->selectedIndex++;
    }
    public function decrement(){
        if($this->selectedIndex===0){
            $this->selectedIndex=count($this->jobs)-1;
        }
        $this->selectedIndex--;
    }
   public function resetIndex(){
    $this->selectedIndex= 0;

   }
   public function showJob(){
    if($this->jobs){
        return redirect()->route('jobs.show', [$this->jobs[$this->selectedIndex]['id']]);
    }
   }
    public function updatedQuery(){
        if(strlen($this->query)>2){
            $this->jobs=Job::where('title','LIKE','%'. $this->query .'%')
            ->orWhere('description','LIKE','%'. $this->query .'%')->get();
            // dd($this->jobs);

        }

    }
    public function render()
    {
        return view('livewire.search');
    }
}
