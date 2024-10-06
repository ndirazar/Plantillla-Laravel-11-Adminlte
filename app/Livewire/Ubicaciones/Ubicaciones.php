<?php

namespace App\Livewire\Ubicaciones;

use App\Livewire\Admin\AdminComponent;
use Livewire\Component;
use App\Models\Ubicacion;

class Ubicaciones extends AdminComponent
{
    public $ubicaciones;
    public $searchRazonSocial = '';
    public $searchDireccion = '';

    public function render()
    {
        // Consultar ubicaciones con búsqueda por razon_social y direccion
        $this->ubicaciones = Ubicacion::query()
            ->when($this->searchRazonSocial, function($query) {
                $query->where('razon_social', 'like', '%' . $this->searchRazonSocial . '%');
            })
            ->orderBy('razon_social', 'asc')
            ->get();

        return view('livewire.ubicaciones.ubicaciones');

    }
}
