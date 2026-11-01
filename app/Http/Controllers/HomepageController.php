<?php

namespace App\Http\Controllers;

use App\Models\Tagline;
use Illuminate\Http\Request;
use App\Models\Layanan;

class HomepageController extends Controller
{
    public function view(){
        $layanans = Layanan::all();
        $taglines = Tagline::all();

        return view('HomePage',[
        'tagLine' => "Precision Installation",
        'tagLine2' => "Performance",
        'tagLine3' => "For every moments",
        'layanans' => $layanans,
        'taglines' => $taglines
        ]);
    }

}
