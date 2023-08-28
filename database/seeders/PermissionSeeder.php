<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name'=> 'Crear cursos',

        ]);
        Permission::create([
            'name'=> 'Leer cursos',

        ]);
        Permission::create([
            'name'=> 'Actualizar cursos',

        ]);
        Permission::create([
            'name'=> 'Eliminar cursos',

        ]);
        Permission::create([
            'name'=> 'Ver dashboard',

        ]);
        Permission::create([
            'name'=> 'Crear Role'

        ]);
        Permission::create([
            'name'=> 'Lista role'

        ]);
        Permission::create([
            'name'=> 'Editar Role'

        ]);
        Permission::create([
            'name'=> 'Eliminar Role'

        ]);
        Permission::create([
            'name'=> 'Leer usuarios'

        ]);
        Permission::create([
            'name'=> 'Editar usuarios'

        ]);
    }
}
