<x-app-layout>
<section class="bg-gray-700 py-12 mb-12 ">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
        <figure>
            <img class="h-60 w-full object-cover" src="data:image/png;base64,{{ $course->image->url }}"alt="" >
        </figure>
        <div class="text-white">
            <h1 class="text-4x1" >{{$course->title}}</h1>
            <h2 class="text-xl mb-3" >{{$course->subtitle}}</h2>
            <p class="mb-2"><i class="fa fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
            <p class="mb-2"><i class=""></i> Categoria: {{$course->category->name}}</p>
            <p class="mb-2"><i class=""></i> Duración: {{$course->duration}} Horas</p>
            <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{$course->students_count}}</p>
            <p><i class="far fa-star"></i> Califificación: {{$course->rating}}</p>
        </div>
    </div>
</section>

<div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="order-2 lg:col-span-2 lg:order-1">
        <h1 class="font-bold text-2xl my-3">CONTENIDOS</h1>
         <section class=" bg-white shadow mb-12">
            
                <div class="card-body">
                
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                            @foreach ($course->goals as $goal)
                                <li class="text-gray-700 text-base">
                                    <i class="fas fa-check text-gray-600 mr-1"></i>{{$goal->name}}
                                </li>
                            @endforeach
                        </ul>
                </div>
         </section>
         <section class="mb-12">
            <h2 class="text-xl font-semibold sm:text-2xl mb-4">Temario</h2>         
                @forelse ($course->sections as $section)
                <article class="mb-4 shadow"
                @if ($loop->first)
                    x-data="{open:true}"
                    @else
                    x-data="{open:false}"
                @endif>
                <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open=!open">
                    <h1 class="font-bold text-lg text-gray-600">{{$section->name}}</h1>
                </header>
                <div class="bg-white py-2 px-4" x-show="open">
                    <ul class="grid grid-cols-1 gap-2">
                        @foreach ($section->lessons as $lesson)
                        <li class="text-gray-700 text-base ">
                            <i class="fas fa-play-circle mr-2 text-gray-600">{{$lesson->name}}</i>
                        </li>
                        @endforeach
                    </ul>
                </div>       
            </article>
            @empty
            <article class="card">
                <div class="card-body">
                    Este curso no tiene ninguna sección asignada
                </div>
            </article>
            @endforelse        
        </section>
        <h1 class="text-xl font-semibold sm:text-2xl mb-4 text-gray-800">CRITERIOS DE EVALUACIÓN</h1>
        <section class=" bg-white shadow mb-8">
       
            <div class="card-body">
            <ul class="list-disc list-inside">
                @foreach ($course->requirements as $requirement)
                    <li class="text-gray-700 text-base">{{$requirement->name}}</li>
                @endforeach
            </ul></div>
        </section>
        <h1 class="text-xl font-semibold sm:text-2xl mb-4">METODOLOGIA/RECURSOS
            EQUIPAMIENTO</h1>
        <section class=" bg-white shadow mb-8">
       
            <div class="card-body">
            <ul class="list-disc list-inside">
                @forelse ($course->audiences as $audience)
                    <li class="text-gray-700 text-base">{{$audience->name}}</li>
                    @empty
                    <li class="text-gray-700 text-base">
                            Este curso no tiene ninguna Requisitos asignada
                        </li>
                @endforelse
            </ul></div>
        </section>
        <h1 class="text-xl font-semibold sm:text-2xl mb-4 text-gray-800">Descripción</h1>

        <section class="bg-white shadow">
            <div class="card-body">
            <div class="text-gray-700 text-base">
                {!!$course->description!!}
            </div>
            </div>
        </section>
     @livewire('courses-reviews', ['course' => $course])
    </div>
    <div class="order-1 lg:order-2">
            <section class="bg-white shadow mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}"alt="{{$course->teacher->name}}">
                   <div class="ml-4">
                     <h1 class="font-fold text-gray-500 text-lg">Prof. {{$course->teacher->name}}</h1>
                        <a class="text-blue-400 text-sm font-bold" href="">{{'@' . Str::slug($course->teacher->name,'')}}</a>
                    </div>
                </div>
                    @can('enrolled', $course)
            
                            <a class="btn btn-danger btn-block mt-4"href="{{route('courses.status',$course)}}" >
                                Continuar Curso
                            </a>
                    @else 
                    @if ($course->price->value == 0)
                    <p class="text-2xl font-bold text-gray-500 mt-3 mb-2"> Gratis</p>
                    <a class="btn btn-danger btn-block "href="{{route('cap.conacto')}}" >
                       Consultar Curso
                    </a>
                <!--
                     <form action="" method="post" >
                        @csrf
                            <button class="btn btn-danger btn-block" >
                              Consultar Curso
                            </button>
                        </form>
                    -->
                        @else
                        <p class="text-2xl font-bold text-gray-500 mt-3 mb-2">US$ {{$course->price->value}}</p>
                        <a href="{{route('cap.conacto')}}" class="btn btn-danger btn-block mt-4" >
                            Consultar Curso
                        </a>
                    @endif
                    @endcan
                </div>
            </section>
            <aside >
                @foreach ($similares  as $similar)
                    <article class="flex mb-6 ">
                            <img class="h-32 w-40 object-cover" src="data:image/png;base64,{{ $similar->image->url }}" alt="">
                             <div class="ml-3">
                                <h1>
                                    <a class="font-bold text-gray-500 mb-3" href="{{route('courses.show',$similar)}}">{{Str::limit($similar->title,40)}}</a>
                                </h1>
                                    <div class="flex items-center">
                                        <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{$similar->teacher->profile_photo_url}}" alt="">
                                        <p class="text-gray-700 text-sm ml-2">{{$similar->teacher->name}}</p>
                                    </div>
                                    <p class="texy-sm"><i class="fas fa-star mr-2 text-yellow-300"></i>{{$similar->rating}}</p>
                             </div>
                    </article>
                @endforeach
            </aside>
    </div>
</div>
</x-app-layout>