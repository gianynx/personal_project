<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labels = config("dbSeeder.labels");

        foreach ($labels as $label => $data) {
            // $data conterrà l'array associativo corrispondente ai dati dell'etichetta
            DB::table('labels')->insert([
                'name' => $data['name'],
                'image' => $data['image'],
                'description' => $data['description'],
                'location' => $data['location'],
                'follower' => $data['follower'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
