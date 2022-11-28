<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public  $showHome=true;
    public   $showChance=false;

    protected $listeners=['toggle_chance'];

    public function toggle_chance()
    {

        $this->showChance=true;
        $this->showHome=false;
//        dd("showCh",$this->showChance,"showHo",$this->showHome);
    }
    public function render()
    {
        return view('livewire.index')->extends('layouts.app')->section('index');
    }
}
