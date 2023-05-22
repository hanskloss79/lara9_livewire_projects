<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];

    public $selectedContinent;
    public $selectedCountry;
    
    // this is the default livewire function executed only once when component 
    // is mounted to blade file
    public function mount()
    {
        $this->continents = Continent::all();
    }


    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        sleep(1);
        if ($this->selectedContinent !== '-1'){
            $this->countries = Country::where('continent_id',$this->selectedContinent)->get();
        }
    }
}
