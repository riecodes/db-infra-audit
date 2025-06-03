<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Building::insert([
            ['name' => 'Aquabest', 'lat' => 14.322419965590676, 'lng' => 120.75373130111916],
            ['name' => 'STAR Building', 'lat' => 14.32263864698599, 'lng' => 120.75349043187569],
            ['name' => 'Supply office', 'lat' => 14.322831600981377, 'lng' => 120.75368009269731],
            ['name' => 'Pangasiwaan', 'lat' => 14.323052119630082, 'lng' => 120.75376733667528],
            ['name' => 'HR/Accounting', 'lat' => 14.323202348096572, 'lng' => 120.75402975818552],
            ['name' => 'OSAS/CSG/ROTC', 'lat' => 14.322605109988167, 'lng' => 120.7541075191224],
            ['name' => 'PPSS', 'lat' => 14.322486751807322, 'lng' => 120.75415154925092],
            ['name' => 'Aklatan', 'lat' => 14.32290415466641, 'lng' => 120.7542755995501],
            ['name' => 'Infirmary', 'lat' => 14.323026534415085, 'lng' => 120.75440641622926],
            ['name' => 'Gym', 'lat' => 14.323159840851101, 'lng' => 120.75435905156957],
            ['name' => 'Coop', 'lat' => 14.323175138305908, 'lng' => 120.75423274581038],
            ['name' => 'Canteen', 'lat' => 14.32316639690329, 'lng' => 120.75448310186876],
            ['name' => 'Management Building 1', 'lat' => 14.323281039699578, 'lng' => 120.75438227597373],
            ['name' => 'Management Building 2', 'lat' => 14.323388891254371, 'lng' => 120.75445603672291],
            ['name' => 'Management Building 3', 'lat' => 14.32354098112236, 'lng' => 120.75454643769015],
            ['name' => 'Management Building 4', 'lat' => 14.323638437235923, 'lng' => 120.75469261808402],
            ['name' => 'Management Building 5', 'lat' => 14.323456519123038, 'lng' => 120.7546725015161],
        ]);
    }
}
