<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classe::insert([
            [
                'name' => 'Salle 1'
            ],
            [
                'name' => 'Salle 2'
            ],
            [
                'name' => 'Salle 3'
            ],
            [
                'name' => 'Salle 4'
            ],
            [
                'name' => 'Salle 5'
            ],
            [
                'name' => 'Salle 6'
            ],
        ]);
    }
}
