<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
            'roleId' => '1'
        ]);
    }
}
