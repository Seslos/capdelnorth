<section>
    <h1 class="text-2xl font-bold"> CRITERIOS DE EVALUACIÓN DEL CURSO</h1>
    <hr class="mt-2 mb-6">
    @foreach ($course->requirements as $item)
        <article class="card mb-4">
                <div class="card-body bg-gray-100">
                    @if ($requirement->id == $item->id)
                        <form wire:submit.prevent="update">
                            <input wire:model="requirement.name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 block  ">
                        @error('requirement.name')
                        <span class="text-xs text-red-500"></span>
                        @enderror
                        </form>
                    @else 
                    <header class="flex justify-between">
                        <h1>{{$item->name}}</h1>
                        <div>
                        <i wire:click="edit({{$item}})" class="fas fa-edit text-blue-500 cursor-pointer"></i>
                        <i wire:click="destroy({{$item}})" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                    </div>
                    </header>
                    @endif
                </div>
        </article>
    @endforeach
        <article class="card">
            <div class="card-body bg-gray-100" >
                <form wire:submit.prevent="store">
                    <input wire:model="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 block " placeholder="Agregar Criterios">
                   @error('name')
                   <span class="text-xs text-red-500">{{$message}}</span>
                   @enderror
                    <div class="flex justify-end mt-2">
                        <button type="submit" class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg 
                        focus:outline-none focus:shadow-outline cursor-pointer">Agregar </button>
                    </div>
                </form>
            </div>
        </article>
</section>
    