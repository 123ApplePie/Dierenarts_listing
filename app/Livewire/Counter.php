<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // public $count = 0;
    public $title;
 
    // public function increment()
    // {
    //     $this->count++;
    // }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
