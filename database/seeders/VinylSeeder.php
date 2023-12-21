<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vinyl;
use Illuminate\Support\Str;

class VinylSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = config("dbSeeder.stores");

        foreach ($stores as $store) {

            $vinyls = $store['vinyls'];

            foreach ($vinyls as $vinyl) {
                $newVinyl = new Vinyl();
                $newVinyl->title = $vinyl["title"];
                $newVinyl->price = $vinyl["price"];
                $newVinyl->image = $vinyl["image"];
                $newVinyl->year = $vinyl["year"];
                $newVinyl->slug = Str::slug($vinyl['title'], '-');
                $newVinyl->save();
            }
        }
    }
}
