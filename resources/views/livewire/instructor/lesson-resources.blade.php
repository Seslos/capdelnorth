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
                    <input wire:model="file" type="file" class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary flex-1">
                    <button type="submit" class="btn btn-primary text-sm ml-2">Guardar</button>
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
