<x-app-layout>
<section class="bg-cover" style="background-image: url({{asset('img/home/people-2557399_1920.jpg')}})">
    
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
    <div class="w-full md:w-3/4 lg:w-1/2">
    <h1 class="text-white font-fold text-4xl">CAP</h1>
    <p class="text-white text-lg mt-2 mb-4 ">CAPACITACIONES DEL NORTE SPA</p>
    <!-- component -->
        <!-- This is an example component -->
@livewire('search')
        </div>
    </div>
</section>
<section class="text-gray-700 mt-24">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-6">
    <h1 class="text-2xl font-semibold text-center mb-8">CONTENIDO</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 sm:gap-6">

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/artificial-intelligence-3382507_640.jpg")}}"alt="">
        </figure>
        <header class="mt-2">
            <h1 class="text-center text-xl text-gray-700">Cursos SENCE</h1>
        </header>


    </article>
    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/artificial-intelligence-4389372_640.jpg")}}"alt="">
        </figure>

            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Certicaciones
                </h1>
            </header>

    </article>

    <article>
        <figure>
            <img class="rounded-xl h-36 w-full object-cover" src="{{asset("img/home/social-media-1989152_640.jpg")}}"alt="">
        </figure>
            <header class="mt-2">
                <h1 class="text-center text-xl text-gray-700">Control de Proyecto</h1>
            </header>
        <!-- <p class="text-sm text-gray-500">Necesitas ayuda para aprender algún tema. Escríbenos</p>
        -->
    </article>   


</div>
</div>
</section>
<section class="mt-24"></section>
<section class="mt-24 bg-gray-700 py-12">
    <h1 class="text-center text-whiter text-3xl">¿No sabes qué curso llevar?</h1>
    <p class="text-center text-white">Descubre los mejores cursos de programación
    </p>
    <div class="flex justify-center mt-4">
        <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Catálago de cursos
        </a>
    </div>
</section>
<section class="my-24">
    <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
    <P class="text-center text-gray-500 text-sm mb-6"> Trabajo para seguir subiendo cursos</P>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 ">
@foreach ($courses as $course)
<x-course-card :course="$course"/>
@endforeach
</div>

</section>



</x-app-layout>
