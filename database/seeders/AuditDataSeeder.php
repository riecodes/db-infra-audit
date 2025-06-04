<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Building;

class AuditDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $auditData = [
            [
                'name' => 'Aquabest',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Aquaculture, Biology, Science and Technology Building'
            ],
            [
                'name' => 'Supply office',
                'rvs_score' => 0.4,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Supply Office Building'
            ],
            [
                'name' => 'Pangasiwaan',
                'rvs_score' => 0.4,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Pangasiwaan Building'
            ],
            [
                'name' => 'HR/Accounting',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'No adverse defects',
                'description' => 'Human Resource Office and Accounting Office'
            ],
            [
                'name' => 'OSAS/CSG/ROTC',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of localized defect found',
                'description' => 'Office of the Student Affairs and Services, Central Student Government Office, Reserve Officers Training Corps Office'
            ],
            [
                'name' => 'PPSS',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Physical Plant and Security Services Office'
            ],
            [
                'name' => 'Aklatan',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'No adverse defects',
                'description' => 'Aklatan (Library)'
            ],
            [
                'name' => 'Infirmary',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Campus Infirmary'
            ],
            [
                'name' => 'Gym',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Campus Gymnasium'
            ],
            [
                'name' => 'Coop',
                'rvs_score' => 1.9,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of localized defect found',
                'description' => 'Cooperative Office'
            ],
            [
                'name' => 'Canteen',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Campus Canteen'
            ],
            [
                'name' => 'Management Building 1',
                'rvs_score' => 0.8,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Management Department Building No. 1'
            ],
            [
                'name' => 'Management Building 2',
                'rvs_score' => 0.8,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of localized defect found',
                'description' => 'Management Department Building No. 2'
            ],
            [
                'name' => 'Management Building 3',
                'rvs_score' => 0.8,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Management Department Building No. 3'
            ],
            [
                'name' => 'Management Building 4',
                'rvs_score' => 0.8,
                'rvs_assessment' => 'Structure may be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of some severe defect found',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Management Department Building No. 4'
            ],
            [
                'name' => 'Management Building 5',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'Presence of minor structural defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Management Department Building No. 5'
            ],
            [
                'name' => 'STAR Building',
                'rvs_score' => 2.3,
                'rvs_assessment' => 'Structure may not be vulnerable to Seismic Hazard',
                'vulnerable_earthquake' => true,
                'vulnerable_landslide' => false,
                'vulnerable_liquefaction' => true,
                'vulnerable_tsunami' => true,
                'vulnerable_storm_surge' => false,
                'structural_condition' => 'No adverse defects',
                'nonstructural_condition' => 'Presence of minor non-structural defects',
                'description' => 'Science, Technology and Applied Research (STAR) Center Building'
            ]
        ];

        foreach ($auditData as $data) {
            $building = Building::where('name', $data['name'])->first();
            if ($building) {
                $building->update($data);
                echo "Updated {$building->name} with audit data\n";
            }
        }
    }
}
