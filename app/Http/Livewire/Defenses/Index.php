<?php

namespace App\Http\Livewire\Defenses;

use App\Models\Defense;
use Livewire\Component;

class Index extends Component
{
    protected $defenses;
    public $title = 'DEFENSES';
    public string $search = '';
    public $sidebarShow = true;

    protected $listeners = ['refresh'=>'$refresh','toggle_sidebarShow'];

    public function render()
    {
        $defenses = Defense::paginate(50);
        return view('livewire.defenses.index', compact('defenses'));
    }

    public function toggle_sidebarShow(){
        //alert('hello');
        $this->sidebarShow = !$this->sidebarShow;
    }
}
