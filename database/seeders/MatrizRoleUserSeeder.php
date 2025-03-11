<?php

namespace Database\Seeders;

use App\Enums\Matrices;
use App\Enums\Roles;
use App\Models\MatrizRoleUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatrizRoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('matriz_role_users')->exists()) {
            DB::table('matriz_role_users')->truncate();
        }

        MatrizRoleUser::create([
            'id' => 1,
            'matriz_id' => Matrices::AtencionPsicosocialTelefonico,
            'user_role_id' => Roles::AgenteProfesional
        ]);

        MatrizRoleUser::create([
            'id' => 2,
            'matriz_id' => Matrices::AtencionPsicosocialWhatsapp,
            'user_role_id' => Roles::AgenteProfesional
        ]);

        MatrizRoleUser::create([
            'id' => 3,
            'matriz_id' => Matrices::ContactoInicialTelefonico,
            'user_role_id' => Roles::AgenteContactoInicial
        ]);

        MatrizRoleUser::create([
            'id' => 4,
            'matriz_id' => Matrices::ContactoInicialWhatsapp,
            'user_role_id' => Roles::AgenteContactoInicial
        ]);
    }
}
