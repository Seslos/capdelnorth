<div>
<div class="card">
    <div class="card-header">
        <input wire:keydown='limpiar_page' wire:model="search" class="form-control w-100" placeholder="Escriba un Nombre ..">
    </div>
    @if ($users->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imail</th>
                    <th>Editar</th>
                    <th>Asignar Curso</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width='10px'>
                            <a class="btn btn-primary mb-2" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        </td>
               <td>
                <a class="btn btn-primary" href="{{route('admin.users.show',$user)}}">Agregar Cursos</a>

               </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{$users->links()}}
    </div>
    @else 
    <div class="card-body">
        <strong>No hay Registros...</strong>
    </div>
    @endif

</div>
</div>
