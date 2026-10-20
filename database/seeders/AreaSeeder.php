<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('areas')->insert([
            [
                'name' => 'Español',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Matemáticas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Contabilidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SST',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deportes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}