<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Canal;

class CanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('canals')->exists()) {
            DB::table('canals')->truncate();
        }
        
        Canal::create([
            'id' => 1,
            'descripcion' => 'Telefónico'
        ]);

        Canal::create([
            'id' => 2,
            'descripcion' => '  Whatsapp + Bot'
        ]);
    }
}
