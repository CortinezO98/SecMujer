<?php

namespace Database\Seeders;

use App\Models\Abreviatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbreviaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('abreviaturas')->exists()) {
            DB::table('abreviaturas')->truncate();
        }

        Abreviatura::create([
            'id' => 1,
            'abreviatura' => 'ENC'
        ]);

        Abreviatura::create([
            'id' => 2,
            'abreviatura' => 'ECN-ECUF'
        ]);

        Abreviatura::create([
            'id' => 3,
            'abreviatura' => 'EC'
        ]);
    }
}
