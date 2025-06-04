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

    public function updateImage(Request $request, $id)
    {
        try {
            $building = Building::findOrFail($id);
            $request->validate([
                'main_img' => 'required|image|max:51200',
            ]);
            $file = $request->file('main_img');
            $originalName = $file->getClientOriginalName();
            $imgDir = public_path('assets/img-buildings');
            $existingFiles = array_map('strtolower', scandir($imgDir));

            // Check for an exact filename match (case-insensitive)
            if (in_array(strtolower($originalName), $existingFiles)) {
                $building->main_img = $originalName;
            } else {
                $filename = uniqid('building_') . '.' . $file->getClientOriginalExtension();
                $file->move($imgDir, $filename);
                $building->main_img = $filename;
            }
            $building->save();
            return redirect()->back()->with('success', 'Main image updated!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update image: ' . $e->getMessage());
        }
    }

    public function updateAudit(Request $request, $id)
    {
        try {
            $building = Building::findOrFail($id);
            $validated = $request->validate([
                'rvs_score' => 'nullable|string|max:255',
                'rvs_assessment' => 'nullable|string|max:255',
                'vulnerable_earthquake' => 'required|in:0,1',
                'vulnerable_landslide' => 'required|in:0,1',
                'vulnerable_liquefaction' => 'required|in:0,1',
                'vulnerable_tsunami' => 'required|in:0,1',
                'vulnerable_storm_surge' => 'required|in:0,1',
                'structural_condition' => 'nullable|string|max:255',
                'nonstructural_condition' => 'nullable|string|max:255',
            ]);
            $building->rvs_score = $validated['rvs_score'];
            $building->rvs_assessment = $validated['rvs_assessment'];
            $building->vulnerable_earthquake = $validated['vulnerable_earthquake'];
            $building->vulnerable_landslide = $validated['vulnerable_landslide'];
            $building->vulnerable_liquefaction = $validated['vulnerable_liquefaction'];
            $building->vulnerable_tsunami = $validated['vulnerable_tsunami'];
            $building->vulnerable_storm_surge = $validated['vulnerable_storm_surge'];
            $building->structural_condition = $validated['structural_condition'];
            $building->nonstructural_condition = $validated['nonstructural_condition'];
            $building->save();
            return redirect()->back()->with('success', 'Audit information updated!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update audit info: ' . $e->getMessage());
        }
    }
}
