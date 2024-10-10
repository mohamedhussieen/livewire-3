<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{
    public $name =' june';
    public function changeName($n){
        $this->name = $n;
    }
    public function render()
    {
        return view('livewire.greeter');
    }
}
