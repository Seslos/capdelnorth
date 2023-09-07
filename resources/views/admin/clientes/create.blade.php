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
  @csrf
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
         
            <div class="card">
              <div class="card-body">
              <form id="formulario" action="{{route('admin.clientes.store')}}"  method="POST" enctype="multipart/form-data" >
                @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">Nombre</label> 
                          <input type="text" id="fname" class="form-control" name="name" placeholder="Enter your first name" > 
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                          <label class="form-control-label px-3">url</label> 
                          <input type="text" id="lname" class="form-control" name="url" placeholder="Enter your last name" >
                         </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      <input type="file" name="img" id="image" multiple class="form-control">
                    </div>
                    <div class="row justify-content-end my-2">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Ingresar</button> </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@stop


