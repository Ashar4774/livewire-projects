<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $number1 = 0;
    public $number2 = 0;
    public string $operators = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function calculate(){
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;
        if($this->operators === '+'){
            $this->result = $num1 + $num2;
        } elseif($this->operators === '-'){
            $this->result = $num1 - $num2;
        } elseif($this->operators === '*'){
            $this->result = $num1 * $num2;
        } elseif($this->operators === '/'){
            $this->result = $num1 / $num2;
        } elseif($this->operators === '%'){
            $this->result = $num1 / 100 * $num2;
        }
    }

    public function update($property){
        if( $this->number1 == '' || $this->number2 == '' ){
            $this->disabled == true;
        } else {
            $this->disabled == false;
        }
    }

    public function render()
    {
        return view('livewire.calculator');
    }
}
