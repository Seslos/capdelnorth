
<div class="mb-4">
    {!! Form::label('title','Título del curso:') !!}
    {!! Form::text('title', null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1' . ($errors->has('title')?'border-red-600' : '')]) !!}
    @error('title')
    <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('slug','slug del curso:') !!}
    {!! Form::text('slug', null, ['readonly'=>'reandonly','class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1']) !!}
    @error('slug')
    <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('subtitle','Subtítulo del curso:') !!}
    {!! Form::text('subtitle', null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1']) !!}
    @error('subtitle')
    <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>
<div class="mb-4">
    {!! Form::label('description','Description del curso:') !!}
    {!! Form::textarea('description', null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1']) !!}
</div>
@error('description')
<strong class="text-xs text-red-600">{{$message}}</strong>
@enderror
    <div class="grid grid-cols-3 gap-4">
            <div>
                {!! Form::label('category_id', 'Categoría') !!}
                {!! Form::select('category_id', $categories,null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50block w-full mt-1']) !!}
            </div>
            <div>
                {!! Form::label('level_id', 'Niveles') !!}
                {!! Form::select('level_id', $levels,null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1']) !!}
            </div>
            <div>
                {!! Form::label('price_id', 'Precio:') !!}
                {!! Form::select('price_id', $prices,null, ['class'=>'h-10 border mt-1 rounded px-4 w-full bg-gray-50 block w-full mt-1']) !!}
            </div>
        
    </div>
        <h1 class="text-2xl font-bold  mt-8 mb-2">Imagen del curso</h1>
            <div class="grid grid-cols-2 gap-4">
                <figure>
                    @isset($course->image)
                    <img id="picture" class="w-full h-64 object-cover object-center" src="data:image/png;base64,{{ $course->image->url }}" alt="">

                        @else
                        <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/5940721/pexels-photo-5940721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">

                    @endisset
                </figure>
                <div>
                    <p class="mb-2"> funca</p>
                    
                    {!! Form::file('file', ['class'=>'relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary w-full','id'=>'file','accept'=>'image/*']) !!}
                    @error('file')
                    <strong class="text-xs text-red-600">{{$message}}</strong>
                    @enderror
                 </div>
            </div>