<div>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}})">
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full ml:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">Clientes</h1>
            <p class="text-white text-lg mt-2 mb-4 ">ffffffffffff
                ffffffffffffffffffffffffffffffffffffffffffffffffffffff
                ffffffffffffffffffffffffffffffffffffffffffffff</p>
                </div>
            </div>
        </section>
        <section class="text-gray-700 mt-24 my-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-6">
            <h1 class="text-2xl font-semibold text-center mb-8">Nuestros Clientes</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-6">
            @foreach ($Cliente as $Clientes)
            <article>
                <figure>
                    <a href="{{ $Clientes->url }}">
                    <img class="rounded-xl h-36 w-full object-cover" src="data:image/png;base64,{{ $Clientes->img }}"alt=""></a>
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">{{ $Clientes->name }}</h1>
                </header>
            </article>
            @endforeach
  
        </div>
        </div>
        </section>
</div>
