<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Ubicaciones\Ubicaciones;
use App\Livewire\Ubicaciones\Ubicaciones;

Route::get('ubicaciones', Ubicaciones::class)->name('ubicaciones');

Route::get('/', function () {
    return view('inicio');
});
