<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        return $this->count++;
    }

    public function decrement(){
        return $this->count--;
    }
}
