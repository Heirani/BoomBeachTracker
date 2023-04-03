<?php

namespace App\Http\Livewire\Defenses;

use Livewire\Component;

class Form extends Component
{
    public $defense;
    public $title = 'DEFENSES';

    public $sidebarShow = true;
    public string $name;

    public string $type;
    public string $taille;

    protected $rules = [
        'name' => 'required|string|max:255|min:4',
        'type' => 'string|max:100|nullable',
        'taille' => 'string|max:50|nullable',
    ];

    protected $listeners = ['refresh'=>'$refresh','toggle_sidebarShow','save','add_level'];

    public function mount($defense){
        $this->defense = $defense;
        $this->name = $defense->name ?? '';
        //$this->description = $defense->description;
        $this->type = $defense->type ?? '';
        $this->taille = $defense->taille ?? '';
    }

    public function render()
    {
        return view('livewire.defenses.form');
    }

    public function toggle_sidebarShow(){
        $this->sidebarShow = !$this->sidebarShow;
    }

    public function save(){
        $this->validate();
        $this->defense->name = $this->name;
        //$this->defense->description = $this->description;
        $this->defense->type = $this->type;
        $this->defense->taille = $this->taille;
        $this->defense->save();
        $this->emit('refresh');
    }

    public function add_level(){
        to_route('admin.defenses.levels.create', ['defense'=>$this->defense->id]);
    }
}
