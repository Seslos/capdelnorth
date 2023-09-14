@extends('adminlte::page')

@section('title', 'Editar ')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::model($user,['route'=>['admin.AsignarCurso.update',$user],'method'=>'put']) !!}
       @include('admin.AsignarCurso.partials.form')
                {!! Form::submit('Agregar Curso', ['class'=>'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop