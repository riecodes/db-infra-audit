<?php

require 'vendor/autoload.php';
require 'bootstrap/app.php';

use App\Models\Building;

$buildings = Building::select('id', 'name', 'slug')->get();
$slugGroups = $buildings->groupBy('slug');

echo "Buildings with duplicate slugs:\n\n";

foreach ($slugGroups as $slug => $group) {
    if ($group->count() > 1) {
        echo "Slug: '$slug' (Used by " . $group->count() . " buildings)\n";
        foreach ($group as $building) {
            echo "  ID: $building->id - Name: '$building->name'\n";
        }
        echo "\n";
    }
}

echo "Total buildings: " . $buildings->count() . "\n";
echo "Unique slugs: " . $slugGroups->count() . "\n";
