<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Location;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::withCount('universities')
            ->orderBy('name')
            ->get();

        $programs = Program::with('programRequirements')
            ->withCount('universities')
            ->orderBy('name')
            ->get();

        return view('home.index')
            ->with([
                'locations' => $locations,
                'programs' => $programs,
            ]);
    }
}
