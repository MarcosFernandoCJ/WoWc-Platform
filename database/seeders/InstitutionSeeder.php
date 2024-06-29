<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create([
            'name' => 'Test',
            'email' => 'tesst@example',
            'phone_number' => 98441136,
            'password' => bcrypt('test123456'),
        ]);

        Institution::create([
            'name' => 'Test2',
            'email' => 'tesst2@example',
            'phone_number' => 98441135,
            'password' => bcrypt('test2123456'),
        ]);
    }
}
