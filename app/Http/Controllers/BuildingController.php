<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    public function show($slug)
    {
        $building = Building::where('slug', $slug)->first();
        
        if (!$building) {
            abort(404);
        }
        
        return view('pages.building-details', [
            'building' => $building
        ]);
    }

    public function audit($slug)
    {
        $building = Building::where('slug', $slug)->first();
        
        if (!$building) {
            abort(404);
        }
        
        return view('pages.building-audit', [
            'building' => $building
        ]);
    }
}
