<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
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
            $images = $store['images'];

            foreach ($images as $image) {
                $newImage = new Image();
                $newImage->image = 'img/store_img' . $image;
                $newImage->save();
            }
        }
    }
}
