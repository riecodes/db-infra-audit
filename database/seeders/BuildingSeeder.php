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
            ['name' => 'Aquabest', 'lat' => 14.322419965590676, 'lng' => 120.75373130111916, 'main_img' => 'Aquabest.jpg'],
            ['name' => 'STAR Building', 'lat' => 14.32263864698599, 'lng' => 120.75349043187569, 'main_img' => 'STAR_Building.jpg'],
            ['name' => 'Supply office', 'lat' => 14.322831600981377, 'lng' => 120.75368009269731, 'main_img' => 'Supply_office.jpg'],
            ['name' => 'Pangasiwaan', 'lat' => 14.323052119630082, 'lng' => 120.75376733667528, 'main_img' => 'Pangasiwaan.jpg'],
            ['name' => 'HR/Accounting', 'lat' => 14.323202348096572, 'lng' => 120.75402975818552, 'main_img' => 'HR_Accounting.jpg'],
            ['name' => 'OSAS/CSG/ROTC', 'lat' => 14.322605109988167, 'lng' => 120.7541075191224, 'main_img' => 'OSAS_CSG_ROTC.jpg'],
            ['name' => 'PPSS', 'lat' => 14.322486751807322, 'lng' => 120.75415154925092, 'main_img' => 'PPSS.jpg'],
            ['name' => 'Aklatan', 'lat' => 14.32290415466641, 'lng' => 120.7542755995501, 'main_img' => 'Aklatan.jpg'],
            ['name' => 'Infirmary', 'lat' => 14.323026534415085, 'lng' => 120.75440641622926, 'main_img' => 'Infirmary.jpg'],
            ['name' => 'Gym', 'lat' => 14.323159840851101, 'lng' => 120.75435905156957, 'main_img' => 'Gym.jpg'],
            ['name' => 'Coop', 'lat' => 14.323175138305908, 'lng' => 120.75423274581038, 'main_img' => 'Coop.jpg'],
            ['name' => 'Canteen', 'lat' => 14.32316639690329, 'lng' => 120.75448310186876, 'main_img' => 'Gym.jpg'],
            ['name' => 'Management Building 1', 'lat' => 14.323281039699578, 'lng' => 120.75438227597373, 'main_img' => 'Management_Building_1.jpg'],
            ['name' => 'Management Building 2', 'lat' => 14.323388891254371, 'lng' => 120.75445603672291, 'main_img' => 'Management_Building_2.jpg'],
            ['name' => 'Management Building 3', 'lat' => 14.32354098112236, 'lng' => 120.75454643769015, 'main_img' => 'Management_Building_3.jpg'],
            ['name' => 'Management Building 4', 'lat' => 14.323638437235923, 'lng' => 120.75469261808402, 'main_img' => 'Management_Building_4.jpg'],
            ['name' => 'Management Building 5', 'lat' => 14.323456519123038, 'lng' => 120.7546725015161, 'main_img' => 'Management_Building_5.jpg'],
        ]);
    }
}
