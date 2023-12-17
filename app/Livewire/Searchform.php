<?php

namespace App\Livewire;

use Livewire\Component;

class Searchform extends Component
{
    public $naam;
    public $telefoon;
    public $provincie;
    public $stad;

    public function render()
    {
        if (!empty($this->provincie)) {
            dd($this->provincie);
        }

        return view('livewire.searchform');
    }

    public function updatedSearch()
    {
        // Add your search logic here, e.g., fetch data based on $this->search
    }
}
