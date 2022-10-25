<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'material_id' => 'MAT-001-RES',
            'name' => 'Residu',
        ]);

        Material::create([
            'material_id' => 'MAT-002-PLA',
            'name' => 'Plastik',
        ]);

        Material::create([
            'material_id' => 'MAT-003-UBC',
            'name' => 'UBC',
        ]);

        Material::create([
            'material_id' => 'MAT-004-LOG',
            'name' => 'Logam',
        ]);

        Material::create([
            'material_id' => 'MAT-005-KER',
            'name' => 'Kertas',
        ]);
    }
}
