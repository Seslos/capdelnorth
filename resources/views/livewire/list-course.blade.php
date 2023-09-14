<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-6 mt-12">
        <h1 class="text-2xl font-semibold mb-4">Mis cursos matriculados</h1>
    
        @if ($course->count())        

                <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    		@foreach ($course as $Users)
                                        
                        <li class="overflow-hidden">
                            <a class="block" href="https://codersfree.com/courses-status/aprende-laravel-livewire-desde-cero">
                                
                                <figure class="aspect-w-16 aspect-h-9">
                                    <img src="data:image/png;base64,"alt="Cursos" class="rounded-lg object-cover object-center">
                                </figure>
                                
                                {{$Users->name}}
    
                            </a>
                        </li>
    
                        @endforeach
                </ul>
    </div>

    @else
    <div class="px-4 py-4">

        No hay ningún registro coincidente
    </div>
        @endif
</div>
