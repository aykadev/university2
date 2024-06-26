<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\University;
use App\Models\Location;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::withCount('universities')
            ->orderBy('name')
            ->get();

        return view('home.index');
    }
}
