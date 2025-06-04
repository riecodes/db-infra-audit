-- Building Audit Data Import for CVSU Naic
-- Generated from DATABASE 116 - CVSU NAIC - for website (1).csv
-- Date: June 4, 2025

-- Update audit data for existing buildings
UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'No adverse defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'aquabest',
    `description` = 'Aquaculture, Biology, Science and Technology Building'
WHERE `name` = 'Aquabest';

UPDATE `buildings` SET 
    `rvs_score` = 0.4,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'No adverse defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'pangasiwaan-supply-office',
    `description` = 'Pangasiwaan and Supply Office Building'
WHERE `name` IN ('Pangasiwaan', 'Supply office');

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'No adverse defects',
    `slug` = 'hr-accounting',
    `description` = 'Human Resource Office and Accounting Office'
WHERE `name` = 'HR/Accounting';

UPDATE `buildings` SET 
    `rvs_score` = 1.9,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of localized defect found',
    `slug` = 'coop',
    `description` = 'Cooperative Office'
WHERE `name` = 'Coop';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of localized defect found',
    `slug` = 'osas-csg-rotc',
    `description` = 'Office of the Student Affairs and Services, Central Student Government Office, Reserve Officers Training Corps Office'
WHERE `name` = 'OSAS/CSG/ROTC';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'No adverse defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'ppss',
    `description` = 'Physical Plant and Security Services Office'
WHERE `name` = 'PPSS';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'gym-canteen',
    `description` = 'Gymnasium and Canteen'
WHERE `name` IN ('Gym', 'Canteen');

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'infirmary',
    `description` = 'Campus Infirmary'
WHERE `name` = 'Infirmary';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'No adverse defects',
    `nonstructural_condition` = 'No adverse defects',
    `slug` = 'aklatan',
    `description` = 'Aklatan (Library)'
WHERE `name` = 'Aklatan';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'No adverse defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'star-building',
    `description` = 'Science, Technology and Applied Research (STAR) Center Building'
WHERE `name` = 'STAR Building';

-- Management Department Buildings
UPDATE `buildings` SET 
    `rvs_score` = 0.8,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'management-building-1',
    `description` = 'Management Department Building No. 1'
WHERE `name` = 'Management Building 1';

UPDATE `buildings` SET 
    `rvs_score` = 0.8,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of localized defect found',
    `slug` = 'management-building-2',
    `description` = 'Management Department Building No. 2'
WHERE `name` = 'Management Building 2';

UPDATE `buildings` SET 
    `rvs_score` = 0.8,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'management-building-3',
    `description` = 'Management Department Building No. 3'
WHERE `name` = 'Management Building 3';

UPDATE `buildings` SET 
    `rvs_score` = 0.8,
    `rvs_assessment` = 'Structure may be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of some severe defect found',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'management-building-4',
    `description` = 'Management Department Building No. 4'
WHERE `name` = 'Management Building 4';

UPDATE `buildings` SET 
    `rvs_score` = 2.3,
    `rvs_assessment` = 'Structure may not be vulnerable to Seismic Hazard',
    `vulnerable_earthquake` = 1,
    `vulnerable_landslide` = 0,
    `vulnerable_liquefaction` = 1,
    `vulnerable_tsunami` = 1,
    `vulnerable_storm_surge` = 0,
    `structural_condition` = 'Presence of minor structural defects',
    `nonstructural_condition` = 'Presence of minor non-structural defects',
    `slug` = 'management-building-5',
    `description` = 'Management Department Building No. 5'
WHERE `name` = 'Management Building 5';
