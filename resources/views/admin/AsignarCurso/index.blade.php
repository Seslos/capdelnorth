@extends('adminlte::page')
@section('title', 'Asignar Curso')
@section('content_header')
    <h1>Clientes</h1>
@stop
@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
@livewire('admin.asignar-curso')

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop