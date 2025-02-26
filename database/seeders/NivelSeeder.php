<?php

namespace Database\Seeders;

use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('nivels')->exists()) {
            DB::table('nivels')->truncate();
        }
        
        Nivel::create([
            'id' => 1,
            'descripcion' => '',
            'sub_item_id' => 1
        ]);
    }
}
