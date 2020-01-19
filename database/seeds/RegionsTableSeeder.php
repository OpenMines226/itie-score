<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            [
              'name' => 'Boucle du Mouhoun',
              'long' => '12.4757004',
              'lat' => '4.6723736'
            ],
            [
              'name' => 'Cascades',
              'long' => '10.328085',
              'lat' => '-5.1588177'
            ],
            [
              'name' => 'Centre',
              'long' => '12.3394269',
              'lat' => '-1.7302417'
            ],
            [
              'name' => 'Centre-Est',
              'long' => '11.7324007',
              'lat' => '-0.7263926'
            ],
            [
              'name' => 'Centre-Nord',
              'long' => '13.1900034',
              'lat' => '-1.6206107'
            ],
            [
              'name' => 'Centre-Ouest',
              'long' => '11.9016596',
              'lat' => '-3.2335461'
            ],

            [
              'name' => 'Centre-Sud',
              'long' => '11.5720117',
              'lat' => '-1.8346242'
            ],
            [
              'name' => 'Est',
              'long' => '12.2453345',
              'lat' => '-0.1143336'
            ],
            [
              'name' => 'Hauts-Bassins',
              'long' => '11.3810721',
              'lat' => '-4.7247299'
            ],
            [
              'name' => 'Nord',
              'long' => '13.4517272',
              'lat' => '-2.7993974'
            ],
            [
              'name' => 'Plateau Central',
              'long' => '12.3657405',
              'lat' => '-1.79587'
            ],
            [
              'name' => 'Sahel',
              'long' => '14.0247288',
              'lat' => '-1.5255333'
            ],
        ];

        foreach ($names as $name) {
            Region::create([
              'name' => $name['name'],
              'long' => $name['long'],
              'lat' => $name['lat']
            ]);
        }

    }
}
