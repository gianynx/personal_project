<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StoreSeeder extends Seeder
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
            $newStore = new Store();
            $newStore->name = $store["name"];
            $newStore->address = $store["address"];
            $newStore->logo = $store["logo"];
            $newStore->description = $store["description"];
            // $newStore->slug = Str::slug($store['name'], '-');
            $newStore->save();
        }
    }
}
