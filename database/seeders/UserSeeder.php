<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Enums\Roles;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('users')->exists()) {
            DB::table('users')->truncate();
        }

        User::create([
            'id' => 1,
            'name' => 'Administrador 1',
            'email' => 'admin@iq-online.com',
            'password' => Hash::make('123456789@iq'),
            'cedula' => '123456789',
            'roleId' => Roles::Administrador->value
        ]);

        User::create([
            'id' => 2,
            'name' => 'Supervisor 1',
            'email' => 'Supervisor@iq-online.com',
            'password' => Hash::make('123456789@iq'),
            'cedula' => '1234567890',
            'roleId' => Roles::Supervisor->value
        ]);

        User::create([
            'id' => 3,
            'name' => 'Agente contacto inicial',
            'email' => 'Agenteci@iq-online.com',
            'password' => Hash::make('123456789@iq'),
            'cedula' => '1234567891',
            'roleId' => Roles::AgenteContactoInicial->value
        ]);

        User::create([
            'id' => 4,
            'name' => 'Agente profesional',
            'email' => 'Agentep@iq-online.com',
            'password' => Hash::make('123456789@iq'),
            'cedula' => '1234567893',
            'roleId' => Roles::AgenteProfesional->value
        ]);
    }
}
