<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $brands = [
            ['name' => 'Samsung', 'created_at' => now()],
            ['name' => 'LG', 'created_at' => now()],
            ['name' => 'Electrolux', 'created_at' => now()],
            ['name' => 'Brastemp', 'created_at' => now()],
            ['name' => 'Philips', 'created_at' => now()],
        ];

        Brand::insert($brands);
    }
}
