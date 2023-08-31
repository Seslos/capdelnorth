<x-instructor-layout :course="$course">
    <h1 class="text-2x1 font-bold">INFORMACIÓN DEL CURSO</h1>
    <hr class="mt-2 mb-2">
    {!! Form::model($course, ['route'=>['instructor.courses.update',$course],'method'=>'put','files' =>true]) !!}
    @include('instructor.courses.partials.form')
                        <div class="flex justify-end">
                    {!! Form::submit('Actualizar Información', ['class'=>'bg-indigo-600 shadow-xl hover:bg-indigo-500 text-white font-bold rounded-full p-4 w-48']) !!}
                        </div>
    {!! Form::close() !!}
<x-slot name="js">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script src="{{asset('js/instructor/courses/form.js')}}"> </script>
</x-slot>
</x-instructor-layout>
