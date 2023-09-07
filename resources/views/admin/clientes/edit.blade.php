@extends('adminlte::page')
@section('title', 'Administrador Cap')
@section('content_header')
    <h1>Administrador Cap </h1>
@stop
@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-12 col-11 text-center">
         
            <div class="card">
                <div class="card-body">
                    {!! Form::model($cliente, ['route'=>['admin.clientes.update',$cliente],'method'=>'put','files' =>true]) !!}
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
             
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del Cliente']) !!}
                       
                        @error('name')
                        <span class="text-danger">{{$message}}</span>  
                        @enderror
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            
                            {!! Form::label('url', 'Url') !!}
                            {!! Form::text('url',null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del Cliente']) !!}
                       
                        @error('url')
                        <span class="text-danger">{{$message}}</span>  
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            
                    <h1 class="font-bold  mt-8 mb-2">Imagen del curso</h1>
                <figure>
                    @isset($cliente)
                    <img id="picture" class="img-thumbnail rounded float-start" style="width: 100%;
                    height: 400px;" src="data:image/png;base64,{{ $cliente->img }}" alt="">

                        @else
                        <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/5940721/pexels-photo-5940721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                    @endisset
                </figure>
            </div>
              
           
                    <div class="form-group col-sm-6 flex-column d-flex "> 
                        {!! Form::label('url', 'Selecionar Imagen') !!}
                    {!! Form::file('file', ['class'=>'form-control ','id'=>'file','accept'=>'image/*']) !!}
                    @error('file')
                    <strong class="text-xs text-red-600">{{$message}}</strong>
                    @enderror
                 </div>
            </div>
            {!! Form::submit('Actualizar Cliente', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>      
                
        
        </div>
    </div>
</div>

@stop


