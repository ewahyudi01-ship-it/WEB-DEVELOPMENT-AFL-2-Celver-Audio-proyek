<?php

namespace App\Http\Controllers;

use App\Models\InteriorBanner;
use App\Models\SceneryBanner;
use App\Models\Venue;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function view()
    {
        $interior = InteriorBanner::first();
        $scenery = SceneryBanner::first();
        $venue = Venue::all();


        return view('VenuePage',[
        'interior' => $interior,
        'scenery' => $scenery,
        'venues'=> $venue
        ]);
    }
}
