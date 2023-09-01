<div>
    <h1 class="text-2xl font-bold">LECCIONES DEL CURSO</h1>
    <hr class="mt-2 mb-6">
    @foreach ($course->sections as $item)
    <article class="card mb-6" x-data="{open: false}"> 
                <div class="card-body bg-gray-100">
                    @if ($section->id==$item->id)
                        <form wire:submit.prevent="update">
                            <input wire:model="section.name"class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ingrese el Nombre del sección">
                        @error('section.name')
                        <span class="text-xs text-red-500">{{$message}}</span>
                            
                        @enderror
                        </form>
                    @else
                    <header class="flex justify-between items-center">
                        <h1 x-on:click="open = !open" class="cursor-pointer"><strong>Sección:</strong> {{$item->name}}</h1>
                            <div>
                                <i class="fas fa-edit cursor-pointer text-blue-500"wire:click="edit({{$item}})"></i>
                                <i class="fas fa-eraser cursor-pointer text-red-500" wire:click="destroy({{$item}})"></i>
                            </div>
                    </header>
                    <div x-show="open">
                        @livewire('instructor.courses-lesson', ['section' => $item], key($item->id))
                    </div>
            
                    @endif
                </div>
        </article>
    @endforeach
    <div x-data="{open: false}">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva sección
        </a>

        <article class="card" x-show="open">
                <div class="card-body bg-gray-100">
                    <h1 class="text-xl font-bold mb-4 text-black">Agregar nueva sección</h1>
                        <div class="mb-4">
                            <input wire:model="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Escribir el nombre de la sección">
                            @error('name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="flex justify-end">
                            <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ml-2"x-on:click="open = false">Cancelar</button>   
                            <button class="focus:outline-none text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-red-900 ml-2" wire:click="store"> Agregar</button> 
                        </div>
                </div>
        </article>
    </div>
</div>
