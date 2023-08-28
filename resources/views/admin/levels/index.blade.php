@extends('adminlte::page')

@section('title', 'Curso Colegios')

@section('content_header')

<a href="{{route('admin.levels.create')}}" class="btn btn-secondary btn-sm float-right">Crear Nivel</a>
    <h1>Lista de Niveles</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}

</div>
    
@endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($levels as $level)
                        <tr>
                            <td>
                                {{$level->id}}
                            </td>
                            <td>
                                {{$level->name}}
                            </td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.levels.edit',$level)}}">Editar</a>
                            </td>
                            <td width="10px">
                              <form action="{{route('admin.levels.destroy',$level)}}" method="POST">
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
    </div>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop