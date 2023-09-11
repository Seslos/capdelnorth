<div>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}})">
    
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full ml:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl">Galería</h1>
            <p class="text-white text-lg mt-2 mb-4 "></p>
            <!-- component -->
                <!-- This is an example component -->
       
                </div>
            </div>
        </section>
  <div  class="container my-3">
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
         @foreach ($Galery as $Galerys)

    <div class="grid gap-4">
        <div>   
            <img class="h-auto max-w-full rounded-lg" src="data:image/png;base64,{{ $Galerys->url }}" alt="">
        </div>
  
    </div>
    @endforeach
</div>
</div>
</div>
