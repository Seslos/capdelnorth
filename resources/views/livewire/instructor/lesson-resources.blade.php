<div class="card" x-data="{open: false}">
    <div class="card-body bg-gray-100">
        <header>
          <h1 x-on:click="open =!open" class="cursor-pointer">Recurso de la lección</h1>  
        </header>

        <div x-show="open">  
            <hr class="my-2">

            @if ($lesson->resource)

            <div class="flex justify-between items-center">
                <p><i wire:click="download" class="fas fa-download text-gray-500 mr-2 cursor-pointer"></i>{{$lesson->resource->url}}</p>
                <i  wire:click="destroy" class="fas fa-trash text-red-500 cursor-pointer"></i>
            </div>
                
        @else
            <form wire:submit.prevent="save">
                <div class="flex items-center">
                    <input wire:model="file" type="file" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
                    
                    <button type="submit" class="focus:outline-none text-white bg-blue-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-red-900 ml-2">Guardar</button>
                </div>

                <div class="text-blue-500 font-bold mt-1" wire:loading wire:target="file">
                    Cargando ...
                </div>
    
                @error('file')
                <span class="text-xs text-red-500">{{$message}}</span>
                    
                @enderror


            </form>
            @endif
        </div>
    </div>
</div>
