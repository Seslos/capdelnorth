<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user= User::create([
            'name'=>'franco belmar',
            'email'=>'francobelmar0@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $user->assignRole('Admin');
        User::factory(99)->create();
    }
}
