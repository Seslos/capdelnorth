<div>
    @foreach ($section->lessons as $item)
        <article class="card mt-4" x-data="{open: false}">
                <div class="card-body">
                 @if ($lesson->id == $item->id)
                    <form wire:submit.prevent="update">
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input wire:model="lesson.name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                            <div class="flex items-center mt-4">
                                <label class="w-32">Plataforma:</label>
                                <select wire:model="lesson.platform_id"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">>
                                    @foreach ($platforms as $platform)
                                        <option value="{{$platform->id}}">{{$platform->name}}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                        <div class="flex items-center mt-4">
                            <label class="w-32">URL:</label>
                            <input wire:model="lesson.url" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                        </div>
                        @error('lesson.url')
                            <span class="text-xs text-red-500">{{$message}}</span>
                        @enderror
                                <div class="mt-4 flex justify-end">
                                    <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 ml-2" wire:click="cancel">Cancelar</button>  
                                    <button class="focus:outline-none text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-red-900 ml-2" wire:click="update" >Actualizar</button>
                           
                                </div>
                    </form>
                 @else
                    <header>
                        <h1 x-on:click="open = !open"  class="cursor-pointer"><i class="far fa-play-circle text-blue-500"></i>
                            Lección: {{$item->name}}</h1>
                    </header>
                <div x-show="open">
                    <hr class="my-2">
                    <p class="text-sm">Plataforma: {{$item->platform->name}}</p>
                    <p class="text-sm">Enlace: <a class="text-blue-600" href="{{$item->url}}" target="_blank">{{$item->url}}</a></p>
                        <div class="my-2">
                            <button class="btn btn-primary text-sm" wire:click="edit({{$item}})"> Editar </button>
                            <button class="btn btn-danger text-sm" wire:click="destroy({{$item}})"> Eliminar </button>
    
                        </div>
                      
                        <div class="mb-4">
                            @livewire('instructor.lesson-description', ['lesson' => $item], key('lesson-description'.$item->id))

                        </div>
                        
                        <div>
                            @livewire('instructor.lesson-resources', ['lesson' => $item], key('lesson-resources'.$item->id))

                        </div>

                    </div>
                @endif
            </div>
        </article>

    @endforeach
    
    <div x-data="{open: false}" class="mt-4">
        <a x-show="!open" x-on:click="open = true" class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva Lección
        </a>

        <article class="card" x-show="open">
                <div class="card-body bg-gray-100">
                    <h1 class="text-xl font-bold mb-4 text-black">Agregar nueva Lección</h1>
                        <div class="mb-4">
                            <div class="flex items-center">
                                <label class="w-32">Nombre:</label>
                                <input wire:model="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                            @error('name')
                                <span class="text-xs text-red-500">{{$message}}</span>
                            @enderror
    
                                <div class="flex items-center mt-4">
                                    <label class="w-32">Plataforma:</label>
                                    <select  wire:model="platform_id"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">>
                                        @foreach ($platforms as $platform)
                                            <option value="{{$platform->id}}">{{$platform->name}}</option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                            <div class="flex items-center mt-4">
                                <label class="w-32">URL:</label>
                               <!-- <input wire:model="url" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"> -->
                               <input wire:model="url" type="file" name="url" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >

                            </div>
                            @error('url')
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
