<section>
<h1 class="text-2xl font-bold"> METAS DEL CURSO</h1>
<hr class="mt-2 mb-6">
@foreach ($course->goals as $item)
    <article class="card mb-4">
            <div class="card-body bg-gray-100">
                @if ($goal->id == $item->id)
                    <form wire:submit.prevent="update">
                        <input wire:model="goal.name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 ">
                    @error('goal.name')
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
                <input wire:model="name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Agregar Nombre de la Meta">
               @error('name')
               <span class="text-xs text-red-500">{{$message}}</span> 
               @enderror
                <div class="flex justify-end mt-2">
                    <button type="submit" class="btn btn-primary">Agregar Meta</button>
                </div>
            </form>
        </div>
    </article>
</section>
