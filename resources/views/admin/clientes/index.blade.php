@extends('adminlte::page')
@section('title', 'Clientes')
@section('content_header')
    <h1>Clientes</h1>
@stop
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2">Acciones</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>
                                {{$cliente->id}}
                            </td>

                            <td>
                                {{$cliente->name}}
                            </td>


                            <td width="5px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.levels.edit',$cliente)}}">Editar</a>
                            </td>

                            <td width="5px">
                              <form action="{{route('admin.levels.destroy',$cliente)}}" method="POST">
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