<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public function toggle_chance()
    {

Index::$showChance=!Index::$showChance;
Index::$showHome=false;

    }
    public function render()
    {
        return view('livewire.header');
    }
}
