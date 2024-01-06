<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Track;

class TrackSeeder extends Seeder
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

                $tracks = $vinyl['tracks'];

                foreach ($tracks as $track) {

                    $newTrack = new Track();
                    $newTrack->title = $track["title"];
                    $newTrack->duration = $track["duration"];
                    $newTrack->save();

                }

            }

        }
    }
}
