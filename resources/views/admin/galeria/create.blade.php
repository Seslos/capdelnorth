@extends('adminlte::page')
@section('title', 'Administrador Cap')
@section('content_header')
    <h1>Administrador Cap </h1>
@stop
@section('content')
@if (session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
<form id="formulario" action="{{route('admin.galeria.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="inputPassword">Imagenes</label>
      <input type="file" name="image" id="image" multiple class="form-control">
    </div>
 
    <button class="btn btn-info w-100" type="submit" id="btnEnviar">
      Subir Imagenes
    </button>
    <button class="btn btn-dark w-100 d-none" disabled id="btnCargando">
      <span class="spinner-grow spinner-grow-sm"
        role="status"aria-hidden="true"></span>
      Cargando...
    </button>
  </form>
@stop


