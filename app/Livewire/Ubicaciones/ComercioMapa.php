<?php

namespace App\Livewire\Ubicaciones;

use App\Livewire\Admin\AdminComponent;
use App\Models\Ubicacion;
use Livewire\Component;

class ComercioMapa extends AdminComponent
{
    public function render()
    {

        $ubicaciones = Ubicacion::all();


        return view('livewire.ubicaciones.comercio-mapa',compact('ubicaciones'))->layout('layout.app'); // Definir el layout a usar
    }
}
