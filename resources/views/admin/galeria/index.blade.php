@extends('adminlte::page')
@section('title', 'Galeria')
@section('content_header')
    <h1>Galeria</h1>
@stop
@section('content')
@if (session('info'))
<div class="alert alert-primary" role="alert">
    <strong>¡Éxito!</strong> {{session('info')}}
</div>   
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.galeria.create')}}">Subir Imagenes</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th colspan="2">Acciones</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galerias as $galeria)
                        <tr>
                            <td>
                                {{$galeria->id}}
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                @isset($galeria->url)
                                <img class="rounded-circle mr-3"  height=100 width=100 src="data:image/png;base64,{{$galeria->url}}"alt="">
                                @else 
                                <img class="rounded-circle mr-3" height=100 width=100 src="https://images.pexels.com/photos/5940721/pexels-photo-5940721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                                @endisset
                    		</div>
                        </div>
                    </td>

                            <td width="5px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.levels.edit',$galeria)}}">Editar</a>
                            </td>

                            <td width="5px">
                              <form action="{{route('admin.levels.destroy',$galeria)}}" method="POST">
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