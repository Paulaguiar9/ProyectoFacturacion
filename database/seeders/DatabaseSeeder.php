<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexan Cosmetics',
            'email' => 'cosmetics@tienda.com',
            'password' => Hash::make('123456789'),
            'perfil'=>'Administrador',
            'estado'=>'Activo'
            
        ]);
    }
}
