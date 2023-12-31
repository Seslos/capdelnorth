@extends('adminlte::page')
@section('title', 'Editar Nivel')
@section('content_header')
    <h1>Editar Niveles</h1>
@stop
@section('content')
@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::model($level, ['route'=>['admin.levels.update',$level] ,'method'=>'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre de la Niveles']) !!}
           
            @error('name')
            <span class="text-danger">{{$message}}</span>  
            @enderror
        </div>
            {!! Form::submit('Actualizar Niveles', ['class'=>'btn btn-primary']) !!}
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