@extends('adminlte::page')
@section('title', 'Editar ')
@section('content_header')
    <h1>Asignar Curso</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="h5">Nombre</h1>
            <p class="form-control">{{$user->name}}</p>
                <h1 class="h5">Lista de Cursos</h1>
                {!! Form::model($user, ['route'=>['admin.users.store',$user],'method'=>'put']) !!}
                    @foreach ($courses as $course)
                    <div> 
                        <label>
                            {!! Form::checkbox('courses[]', $course->id,null, ['class'=>'mr-1']) !!}
                            {{$course->title}}
                        </label>
                    </div>
                    @endforeach
                            {!! Form::submit('Asignar Curso', ['class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
    </div>
  </div>
  @stop