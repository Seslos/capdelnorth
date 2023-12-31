@props(['course'])
<article class="cardd flex flex-col">
     <img class="h-36 w-full object-cover" src="data:image/png;base64,{{ $course->image->url }}" alt="">
        <div class="card-body flex-1 flex flex-col">
            <h1 class="card-title">{{Str::limit($course->title,40)}}</h1>
                <div class="flex">
                    <ul class="flex text-sm ">
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating >= 1 ? 'yellow':'gray'}}-300"></i> 
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating >= 2 ? 'yellow':'gray'}}-300"></i> 
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating >= 3 ? 'yellow':'gray'}}-300"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating >= 4 ? 'yellow':'gray'}}-300"></i>
                        </li>
                        <li class="mr-1">
                            <i class="fas fa-star text-{{$course->rating == 5 ? 'yellow':'gray'}}-300"></i>
                        </li>
                    </ul>
                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                {{$course->students_count}}
                            </p>
                </div>
                    @if ($course->price->value == 0)
                    <p class="my-2 text-gray-500 font-bold">Gratis</p>
                    @else
                    <p class="my-2 text-gray-500 font-bold">US$ {{$course->price->value}}</p>
                    @endif
                        <a href="{{route('courses.show',$course)}}" class=" btn btn-primary btn-block">
                        Mas Información
                        </a>
        </div>
</article>