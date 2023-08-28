@extends('adminlte::page')
@section('title', 'Curso Colegios')
@section('content_header')
    <h1>Agregar nuevo precio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route'=>'admin.prices.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese nombre del Precio']) !!}
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
           
            </div>
            <div class="form-group">
                {!! Form::label('value', 'Valor') !!}
                {!! Form::text('value',null, ['class'=>'form-control','placeholder'=>'Ingrese el valor del Precio']) !!}
                @error('value')
                <span class="text-danger">{{$message}}</span>
                @enderror
           
            </div>
            {!! Form::submit('Agregar Precio', ['class'=>'btn btn-primary']) !!}
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