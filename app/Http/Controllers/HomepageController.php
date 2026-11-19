<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;
use App\Models\Layanan;

class HomepageController extends Controller
{
    public function view(){
        $layanans = Layanan::all();
        $achivements = Achivement::all();

        return view('HomePage',[
        'layanans' => $layanans,
        'achivements' => $achivements
        ]);
    }

}
