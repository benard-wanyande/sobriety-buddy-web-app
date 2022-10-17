<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 3;
    //Any variable defined publicly in the class
    //is available in to the livewire view automatically
    //No need to pass it as a parameter

    public function render()
    {
        return view('livewire.counter', ['count' => $this->count]);
    }

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        $this->count--;
    }
}
