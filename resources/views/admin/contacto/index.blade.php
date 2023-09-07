@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
    <h1>Contacto</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    <div class="card">
 

        <div class="card-body">
            <a href="{{route('admin.contacto.create')}}" class="btn btn-primary btn-sm">Ingresar contacto</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacto as $contactos)
                        <tr>
                            <td>
                                {{$contactos->id}}
                            </td>
                            <td>
                                {{$contactos->name}}
                            </td>
                            <td>
                                {{$contactos->contacto}}
                            </td>
                            <td width="5px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.contacto.edit',$contactos)}}">Editar</a>
                            </td>
                            <td width="5px">
                              <form action="{{route('admin.contacto.destroy',$contactos)}}" method="POST">
                                @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop