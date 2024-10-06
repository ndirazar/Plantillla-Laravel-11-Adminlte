@extends('layout.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    </ol>
@stop
@section('content_header_subtitle', 'Welcome')
{{-- Content body: main page content --}}

@section('content_body')
    <p>Página Inicial</p>
@stop

{{-- Push extra CSS --}}

@push('css')
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Inicio"); </script>
@endpush
