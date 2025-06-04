<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;

class BuildingDocumentationSeeder extends Seeder
{
    public function run()
    {
        $basePath = public_path('assets/img-documentation');
        $map = [
            'Aquabest' => '01_AquaBEST_Bldg',
            'Pangasiwaan' => '02_Pangasiwaan-Supply Office',
            'Supply office' => '02_Pangasiwaan-Supply Office',
            'HR/Accounting' => '03_Human Resource Office-Accounting Office',
            'Coop' => '04_Cooperative Office',
            'OSAS/CSG/ROTC' => '05_OSAS_CSG_ROTC Office',
            'PPSS' => '06_PPSS_Office',
            'Aklatan' => '09_Aklatan',
            'Infirmary' => '08_Infirmary',
            'Gym' => '07_Gym_Canteen',
            'Canteen' => '07_Gym_Canteen',
            'STAR Building' => '10_STAR_Center Bldg',
            'Management Building 1' => '11_Management Department Bldg No. 1',
            'Management Building 2' => '12_Management Department Bldg No. 2',
            'Management Building 3' => '13_Management Department Bldg No. 3',
            'Management Building 4' => '14_Management Department Bldg No. 4',
            'Management Building 5' => '15_Management Department Bldg No. 5',
        ];
        $buildings = Building::all();
        $missingMapping = [];
        $missingFolder = [];
        foreach ($buildings as $building) {
            $folderName = $map[$building->name] ?? null;
            if (!$folderName) {
                echo "No folder mapping for: {$building->name}\n";
                $missingMapping[] = $building->name;
                $building->documentation_imgs = null;
                $building->save();
                continue;
            }
            $folderPath = $basePath . DIRECTORY_SEPARATOR . $folderName;
            if (!is_dir($folderPath)) {
                echo "Folder does not exist: $folderPath for building {$building->name}\n";
                $missingFolder[] = $building->name;
            }
            $imgPaths = [];
            if (is_dir($folderPath)) {
                $files = array_diff(scandir($folderPath), ['.', '..']);
                foreach ($files as $file) {
                    if (is_file($folderPath . DIRECTORY_SEPARATOR . $file)) {
                        $imgPaths[] = $folderName . '/' . $file;
                    }
                }
            }
            $building->documentation_imgs = $imgPaths ? implode(',', $imgPaths) : null;
            $building->save();
        }
        echo "\nBuildings missing folder mapping: ".implode(', ', $missingMapping)."\n";
        echo "Buildings missing folders: ".implode(', ', $missingFolder)."\n";
    }
} 