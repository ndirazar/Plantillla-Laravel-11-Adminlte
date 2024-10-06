@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Habilitaciones')
@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item active">Ubicaciones</li>

    </ol>
@stop
@section('content_header_subtitle', 'Welcome')
{{-- Content body: main page content --}}

@section('content_body')
    <div>

        <div class="card">
            <div class="card-header bg-gradient-info">
                <h5 class="text-white font-weight-bolder ">Habilitaciones Comerciales</h5>
            </div>

            <x-search-input wire:model.blur="searchTerm" />

            <input type="text" wire:model.live="hola">

            <input type="text" wire:model.blur="hola">

            <p>hhhhhhhhh {{ $hola }}</p>

            <div class="card-body">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th class="text-sm">Razón Social</th>
                            <th class="text-sm">Dirección</th>
                            <th class="text-sm">Rubro</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ubicaciones as $ubicacion)
                            <tr>
                                <td class="text-sm">{{ $ubicacion->razon_social }}</td>
                                <td class="text-sm">{{ $ubicacion->direccion }}</td>
                                <td class="text-sm">{{ $ubicacion->rubro }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($ubicaciones->isEmpty())
                    <p>No se encontraron resultados.</p>
                @endif
            </div>
        </div>
    </div>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        const ubicaciones = @json($ubicaciones);

        ubicaciones.forEach(ubicacion => {
            console.log(ubicacion);
        });
    </script>
@endpush
