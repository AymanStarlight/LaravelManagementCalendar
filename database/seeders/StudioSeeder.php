<?php

namespace Database\Seeders;

use App\Models\Studio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Studio::insert([
            [
                'name' => 'Studio 1'
            ],
            [
                'name' => 'Studio 2'
            ],
            [
                'name' => 'Espace Cafe'
            ],
            [
                'name' => 'Espace Agora'
            ],
            [
                'name' => 'Co-working'
            ],
            [
                'name' => 'Externe'
            ],
        ]);
    }
}
