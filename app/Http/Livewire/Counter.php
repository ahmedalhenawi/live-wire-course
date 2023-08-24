<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $num = 10;
    public string $name = 'ahmed';

    public function render()
    {
        return view('livewire.counter');
    }

    function plus()
    {
        $this->num++;
    }

    function minus()
    {
        $this->num--;
    }
}
