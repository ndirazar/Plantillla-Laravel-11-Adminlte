<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Ubicaciones\Ubicaciones;
use App\Livewire\Ubicaciones\Ubicaciones;
use App\Livewire\Ubicaciones\ComercioMapa;

Route::get('ubicaciones', Ubicaciones::class)->name('ubicaciones');
Route::get('mapas', ComercioMapa::class)->name('mapas');

Route::get('/', function () {
    return view('inicio');
});
