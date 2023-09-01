<div>

    <article class="card" x-data="{open: false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1  x-on:click="open = !open" class="cursor-pointer">Descripción de la Lección</h1>

            </header>
            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                <form  wire:submit.prevent="update">
        
                    <textarea wire:model="description.name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"></textarea>

                        @error('description.name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                            
                        @enderror

                        <div class="flex justify-end">
                            <button wire:clck="destroy" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button">Eliminar</button>
                            <button class="focus:outline-none text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-red-900 ml-2" type="submit">Actualizar</button>
                        </div>
                </form>
                    @else
                    <div>
        
                        <textarea wire:model="name" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-200 dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Agregar una Descripción de la lección"></textarea>
    
                            @error('name')
                            <span class="text-sm text-red-500">{{$message}}</span>
                                
                            @enderror
    
                            <div class="flex justify-end">
                                <button class="btn btn-primary text-sm ml-2" wire:click="store" >Agregar</button>
                            </div>
                    </div>
                    
                    @endif
            </div>
        </div>
    </article>
</div>
