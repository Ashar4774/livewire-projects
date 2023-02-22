<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinents;
    public $selectedCountries;

    public function mount(){
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function selectedContinent(){
        if($this->continents != -1){
            $this->countries = Country::where('continent_id', $this->continents)->get();
        }
    }
}
