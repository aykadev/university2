<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\University;
use App\Models\Location;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'location' => 'nullable|integer|min:1',
        ]);

        $f_location = $request->has('location') ? $request->location : null;
        

        $universities = University::when(isset($f_location), function ($query) use ($f_location) {
            return $query->where('location_id', $f_location);
        })->with('Location')->get();


        return view('universities.index', compact('universities',));
    }

    public function show(University $university)
    {
        return view('universities.show', compact('university'));
    }
}
