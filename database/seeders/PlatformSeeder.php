<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Platform::create([
            'name'=>'Youtube'
        ]);
        Platform::create([
            'name'=>'Vimeo'
        ]);
 
    }
}
