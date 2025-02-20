<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserRole;

class UserRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('user_roles')->exists()) {
            DB::table('user_roles')->truncate();
        }

        UserRole::create([
            'id' => 1,
            'descripcion' => 'Administrador'
        ]);

        UserRole::create([
            'id' => 2,
            'descripcion' => '  Supervisor'
        ]);

        UserRole::create([
            'id' => 3,
            'descripcion' => '  Agente'
        ]);

        UserRole::create([
            'id' => 4,
            'descripcion' => '  Líder'
        ]);

        UserRole::create([
            'id' => 5,
            'descripcion' => '  Coordinador'
        ]);
    }
}
