<?php

namespace App\Livewire\Ubicaciones;

use App\Livewire\Admin\AdminComponent;
use Livewire\Component;
use App\Models\Ubicacion;

class Ubicaciones extends AdminComponent
{
    public $searchTerm = '';

    public $hola = null;

    public $ubicaciones = [];

    public function mount()
    {
        // dd('mount');
        $this->ubicaciones = Ubicacion::orderBy('razon_social', 'asc')->get();
    }

    public function updatedsearchTerm()
    {
        dd('aca');
        $this->ubicaciones = Ubicacion::where('razon_social', 'like', '%' . $this->searchTerm . '%')
                                      ->orderBy('razon_social', 'asc')
                                      ->get();
    }
    public function render()
    {

        return view('livewire.ubicaciones.ubicaciones',[
            'ubicaciones' => $this->ubicaciones])->layout('layout.app'); // Definir el layout a usar

    }
}
