<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    public function show($slug)
    {
        // Helper to normalize building name to slug
        $normalize = function ($name) {
            $slug = strtolower($name);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug); // replace non-alphanumeric with dash
            $slug = trim($slug, '-');
            return $slug;
        };
        $building = Building::all()->first(function ($b) use ($slug, $normalize) {
            return $normalize($b->name) === strtolower($slug);
        });
        if (!$building) {
            abort(404);
        }
        return view('pages.building-details', [
            'building' => $building
        ]);
    }

    public function audit($slug)
    {
        $normalize = function ($name) {
            $slug = strtolower($name);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $slug = trim($slug, '-');
            return $slug;
        };
        $building = Building::all()->first(function ($b) use ($slug, $normalize) {
            return $normalize($b->name) === strtolower($slug);
        });
        if (!$building) {
            abort(404);
        }
        return view('pages.building-audit', [
            'building' => $building
        ]);
    }
}
