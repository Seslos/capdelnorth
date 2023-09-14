<div class="form-group">
    {!! Form::label('name','Nombre:') !!}
    {!! Form::text('name',null,['class'=>'form-control' . ($errors->has('name') ? 'is-invalid' : ''),'placeholder'=>'Escriba un nombre']) !!}
@error('name')
<span class="invalid-feedbak">
<strong>{{$message}}</strong>
</span>
@enderror
</div>
    <strong>Permisos</strong>
    <br>
    @error('permissions')
    <small class="text-danger">
        <strong>{{$message}}</strong>
    </small>
    <br>
@enderror
    @foreach ($course as $Courses)
    <div>
        <label>
            {!! Form::checkbox('course_id[]', $Courses->id,null, ['class'=>'mr-1']) !!}
            {{$Courses->title}}

        </label>

    </div>
    @endforeach