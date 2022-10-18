<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Splashscreen extends Component
{
    public $clicked = 'False';

    public function render()
    {
        return view('livewire.splashscreen');
    }

    public function toLoginPage()
    {
        $this->clicked = 'True';
    }

}
