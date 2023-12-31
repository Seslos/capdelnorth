<div>
<h1 class="text-2xl font-bold mb-4">ESTUDIANTES DEL CURSO</h1>
<x-table-responsible>
	<div class="px-6 py-4 ">
		<input   wire:model='search'
         class="h-10 border mt-1 rounded px-4 w-full bg-gray-50 shadow-sm " placeholder="Ingrese el nombre de un curso">
	</div>		
	@if ($students->count())
		<table class="min-w-full divide-y divide-gray-200">
							<thead class="bg-gray-50">
								<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nombre
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Email
								</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-200">
				@foreach ($students as $student)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
								<img class="h-10 w-10 rounded-full object-cover"src="{{$student->profile_photo_url}}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
									{{$student->name}}
                                </div>
                            </div>
                        </div>
                    </td>
					<td class="px-6 py-4 whitespace-nowrap">
						<div class="text-sm text-gray-900">{{$student->email}}</div>
					</td>
					<td class="px-6 py-6 whitespace-nowrap text-right text-sm font-medium">
						<a href="" class="text-indigo-600 hover:text.indigo-900">Ver</a>
					</td>
                </tr>
                @endforeach
		</tbody>
	</table>
		<div class="px-6 py-4">
            {{$students->links()}}
        </div>
		@else
		<div class="px-4 py-4">
			No hay ningún registro coincidente
		</div>
			@endif
</x-table-responsible>
</div>
