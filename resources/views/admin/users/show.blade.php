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
                {!! Form::model($course, ['route'=>['admin.users.store'],'method'=>'post']) !!}
                @csrf

              
                    @foreach ($course as $courses)
                    {!! Form::hidden('course_id',$courses->id) !!}
                    <div> 
                        <label>
                            {!! Form::checkbox('course[]', $courses->id,null, ['class'=>'mr-1']) !!}
                            {{$courses->title}}
                            
                        </label>
                    </div>
                    @endforeach
                            {!! Form::submit('Asignar Curso', ['class'=>'btn btn-primary mt-2']) !!}
                {!! Form::close() !!}
    </div>
  </div>
  @stop