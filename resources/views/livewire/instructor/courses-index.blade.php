<div class="container py-8">
	<!-- component -->
	<x-table-responsible>
		<div class="px-6 py-4 flex">
			<input wire:keydown="limpiar_page"  wire:model='search' class="form-input w-full flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso">
			<a class="btn btn-danger ml-2" href="{{route('instructor.courses.create')}}">Crear nuevo curso</a>
		</div>
					
		@if ($courses->count())
			<table class="min-w-full divide-y divide-gray-200">
								<thead class="bg-gray-50">
									<tr>
										<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
											Imagen
										</th>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
										Nombre
									</th>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
										Categoria
									</th>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
										Matriculados
									</th>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
										Calificación
									</th>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
										Status
									</th>
								
								</tr>
							</thead>
							<tbody class="bg-white divide-y divide-gray-200">
							
					@foreach ($courses as $course)
					<tr>
						<td class="px-6 py-4 whitespace-nowrap">
							<div class="flex items-center">
								<div class="flex-shrink-0 h-10 w-10">
									@isset($course->image)
									<img class="h-10 w-10  rounded-full object-cover" src="data:image/png;base64,{{$course->image->url }}"alt="">
									@else 
									<img class="h-10 w-10 rounded-full object-cover" src="https://images.pexels.com/photos/5940721/pexels-photo-5940721.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
									@endisset
								</div>
							  
	
	
							</div>
						</td>
						<td class="px-6 py-4 whitespace-nowrap">
							<div class="ml-4">
								<div class="text-sm font-medium text-gray-900">
									{{$course->title}}
								</div>
							</div>
						</td>
						<td class="px-6 py-4 whitespace-nowrap">
						
							<div class="ml-4">
								<div class="text-sm font-medium text-gray-900">
									{{$course->category->name}}
								</div>
							</div>
						</td>
	
						<td class="px-6 py-4 whitespace-nowrap">
							<div class="text-sm text-gray-900">{{$course->students->count()}}</div>
							<div class="text-sm text-gray-900">Alumnos Matriculados</div>
	
						</td>
						<td class="px-6 py-4 whitespace-nowrap">
							<div class="text-sm text-gray-900 flex items-center"> {{$course->rating}}
					 
								<ul class="flex text-sm ml-2">
									<li class="mr-1">
										<i class="fas fa-star text-{{$course->rating >= 1 ?'yellow':'gray'}}-400"></i> 
									</li>
									<li class="mr-1">
										<i class="fas fa-star text-{{$course->rating >= 2 ?'yellow':'gray'}}-400"></i> 
									</li>
									<li class="mr-1">
										<i class="fas fa-star text-{{$course->rating >= 3 ?'yellow':'gray'}}-400"></i>
									 </li>
									<li class="mr-1">
										<i class="fas fa-star text-{{$course->rating >= 4 ?'yellow':'gray'}}-400"></i>
									 </li>
									<li class="mr-1">
										<i class="fas fa-star text-{{$course->rating = 5 ?'yellow':'gray'}}-400"></i>
									 </li>
								</ul>
							</div>
							<div class="text-sm text-gray-900">Valoración del curso</div>
						</td>
	
						<td class="px-6 py-4 whitespace-nowrap">
	
							@switch($course->status)
								@case(1)
								<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
							Borrador
								</span>
	
									@break
								@case(2)
								<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
									Revisión
								</span>
	
									@break
									@case(3)
									<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  bg-green-100 text-green-800">
										Publicado
									</span>
								
										@break
								@default	
							@endswitch
						</td>
	
						<td class="px-6 py-6 whitespace-nowrap text-right text-sm font-medium">
							<a href="{{route('instructor.courses.edit',$course)}}" class="text-indigo-600 hover:text.indigo-900">Edit</a>
						</td>
	
					</tr>
					@endforeach
					
					
			</tbody>
		</table>
			<div class="px-6 py-4">
				{{$courses->links()}}
	
			</div>
			@else
			<div class="px-4 py-4">
				No hay ningún registro coincidente
			</div>
				@endif
	</x-table-responsible>
	
	</div>
	