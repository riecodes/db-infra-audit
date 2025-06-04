<?php

namespace App\Http\Controllers;

use App\Models\Building;

class ExploreController extends Controller
{
    public function index()
    {
        $buildings = Building::all();
        return view('pages.explore', compact('buildings'));
    }
} 