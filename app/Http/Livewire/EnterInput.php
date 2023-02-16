<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EnterInput extends Component
{
    public string $input_field = '';
    public string $display = '';
    public function get_form_data(){
        $input = $this->input_field;
        $this->display = $input;
    }
    public function render()
    {
        return view('livewire.enter-input');
    }
}
