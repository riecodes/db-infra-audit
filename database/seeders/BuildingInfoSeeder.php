<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;

class BuildingInfoSeeder extends Seeder
{
    public function run()
    {
        $csv = fopen(public_path('assets/checklist/cvsu_naic_bldg_info_sorted.csv'), 'r');
        $header = fgetcsv($csv);

        while ($row = fgetcsv($csv)) {
            $data = array_combine($header, $row);

            $dbName = $this->mapCsvNameToDb($data['BUILDING NAME']);

            Building::where('name', $dbName)->update([
                'no_of_storey' => $data['NO. OF STOREY'],
                'type_of_building' => $data['TYPE OF BUILDING'],
                'type_of_structure' => $data['TYPE OF STRUCTURE'],
                'design_occupancy' => $data['DESIGN OCCUPANCY'],
                'year_edition_of_nscp' => $data['YEAR EDITION OF NSCP'],
            ]);
        }
        fclose($csv);
    }

    private function mapCsvNameToDb($csvName)
    {
        $map = [
            'Aklatan' => 'Aklatan',
            'Aquaculture, Biology, Science and Technology (AquaBEST) Bldg' => 'Aquabest',
            'Cooperative Office' => 'Coop',
            "Gym\nCanteen" => 'Gym', // or 'Canteen' as needed
            "Human Resource Office\nAccounting Office" => 'HR/Accounting',
            'Infirmary' => 'Infirmary',
            'Management Department Bldg No. 1' => 'Management Building 1',
            'Management Department Bldg No. 2' => 'Management Building 2',
            'Management Department Bldg No. 3' => 'Management Building 3',
            'Management Department Bldg No. 4' => 'Management Building 4',
            'Management Department Bldg No. 5' => 'Management Building 5',
            "Office of the Student Affairs and Services\nCentral Student Government Office\nReserve Officers' Training Corps Office" => 'OSAS/CSG/ROTC',
            "Pangasiwaan\nSupply Office" => 'Pangasiwaan', // or 'Supply office'
            'Physical Plant and Security Services Office' => 'PPSS',
            'Science, Technology and Applied Research (STAR) Center Bldg' => 'STAR Building',
        ];
        return $map[$csvName] ?? $csvName;
    }
} 