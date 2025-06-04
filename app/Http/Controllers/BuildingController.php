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
        $building = Building::findOrFail($id);
        $request->validate([
            'main_img' => 'required|image|max:4096',
        ]);
        $file = $request->file('main_img');
        $filename = uniqid('building_') . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/img-buildings'), $filename);
        $building->main_img = $filename;
        $building->save();
        return redirect()->back()->with('success', 'Main image updated!');
    }
}
