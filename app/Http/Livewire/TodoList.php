<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public string $list_input = '';

    public function show_list(){
        $this->list_input;
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
