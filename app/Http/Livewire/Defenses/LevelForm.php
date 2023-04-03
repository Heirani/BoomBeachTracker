<?php

namespace App\Http\Livewire\Defenses;

use Livewire\Component;
use App\Models\Defense;

class LevelForm extends Component
{
    public $defense;
    public $sidebarShow = true;

    protected $listeners = ['refresh'=>'$refresh','toggle_sidebarShow','save'];

    public function render()
    {
        //dd($this->defense);
        return view('livewire.defenses.level-form');
    }

    public function toggle_sidebarShow(){
        $this->sidebarShow = !$this->sidebarShow;
    }
}
