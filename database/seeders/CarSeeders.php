<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'name' => 'FERRARI Portofino T V8 DCT 22',
                'maxSpeed' => '320 km/h',
                'tank' => '80 l',
                'photo' => 'https://www.luxuryandexpensive.de/pic/Ferrari-Portofino-3-9-T-V8-DCT.29578t.jpg',
            ]
        ]);
    }
}
