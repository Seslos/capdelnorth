<x-app-layout>





    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-500 text-3xl font-bold ">Detalle del Pedido</h1>

        <div class="card text-gray-600">
            <div class="card-body">
                <article class="flex items-center">

                    <img class="h-12 w-12 object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                    <h1 class=" text-lg ml-2">{{$course->title}}</h1>
                    <p class="text-xl font-bold ml-auto" >US$ {{$course->price->value}}</p>
                
                </article>
                    <div class="flex justify-end mt-2">
                            <a href="" class="btn btn-primary">Comprar este Curso</a>

                    </div>
                    <hr class="my-2">
                    <p  class="my-2">cdcddcddddda
                        <a href="" class="text-red-500 font-bold}">Terminos y Condiciones </a>
                    </p>
            </div>
        </div>
    </div>
</x-app-layout>