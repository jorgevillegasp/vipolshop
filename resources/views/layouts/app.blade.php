@extends('adminlte::page')



@section('content_header')

@stop

@section('content')
<div class="content">
    {{ $slot }}
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @livewireStyles
@stop

@section('js')
    <script src="js/miDataTable.js"></script>
    @livewireScripts
@stop
