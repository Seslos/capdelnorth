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
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $AsignarCurso)
                        <tr>
                            <td>{{$AsignarCurso->id}}</td>
                            <td>{{$AsignarCurso->name}}</td>
                            <td>{{$AsignarCurso->email}}</td>
                            <td >
                                <a class="btn btn-primary" href="{{route('admin.AsignarCurso.edit', $AsignarCurso)}}">Agregar Cursos</a>
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