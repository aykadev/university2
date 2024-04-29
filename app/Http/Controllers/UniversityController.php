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
    //     $request->validate([
    //         'location' => 'nullable|integer|min:1',
    //         'program' => 'nullable|integer|min:1',
    //         'programRequirement' => 'nullable|integer|min:1',
    //     ]);

    //     $f_location = $request->has('location') ? $request->location : null;
    //     $f_program = $request->has('program') ? $request->brand : null;
    //     $f_programRequest = $request->has('programRequirement') ? $request->programRequirement : null;

    //     $objs =University::when(isset($f_location), function ($query) use ($f_location) {
    //         return $query->where('location_id', $f_location);
    //     })
    //     ->when(isset($f_program), function ($query) use ($f_program) {
    //         return $query->where('program_id', $f_program);
    //     })
    //     ->when(isset($programRequirement), function ($query) use ($f_programRequirement) {
    //         return $query->where('program_requirement_id', $f_programRequirement);
    //     })
    //     ->with('location', 'program', 'programRequirement');

    //     $locations = Location::withCount('universities')
    //         ->orderBy('name')
    //         ->get();
    //     $programs = Program::with('programRequirements')
    //         ->withCount('universities')
    //         ->orderBy('name')
    //         ->get();

    //         return view('university.index')
    //         ->with([
    //             'objs' => $objs,
    //             'locations' => $locations,
    //             'programs' => $programs,
    //             'f_location' => $f_location,
    //             'f_program' => $f_program,
    //             'f_programRequirement' => $f_programRequirement,
    //         ]);
    // }

    // public function show($id)
    // {
    //     $obj = University::findOrFail($id);

    //     return view('unversity.show')
    //         ->with([
    //             'obj' => $obj,
    //         ]);
    }
}
