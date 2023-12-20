<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Store;
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
            $newStore = Store::create([
                'name' => $store['name'],
                'address' => $store['address'],
                'logo' => $store['logo'],
                'description' => $store['description']
            ]);

            $images = $store['images'];

            foreach ($images as $image) {
                $newImage = new Image();
                $newImage->image = 'img/store_img' . $image;
                $newStore->images()->save($newImage);
            }

            /*
            In questo modo, ogni immagine sarà associata al negozio corrispondente e verrà automaticamente popolato il campo store_id.
            Utilizzando il metodo save() sulla relazione images, Laravel gestirà automaticamente l'inserimento del store_id.
            */

        }
    }
}
