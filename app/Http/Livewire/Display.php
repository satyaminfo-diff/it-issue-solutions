<?php

namespace App\Http\Livewire;

use App\Models\answer;
use App\Models\question;
use Livewire\Component;

class Display extends Component
{
    public $data=[];
    public function render()
    {   
      
        $this->data=question::with('answer','users','answer.user')->get(); 
        return view('livewire.display');
    }
}
