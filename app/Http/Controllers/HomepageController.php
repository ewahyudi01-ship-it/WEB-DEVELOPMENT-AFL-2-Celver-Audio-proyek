<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomepageController extends Controller
{
    public function view(){
        return view('HomePage',[
        'tagLine' => "Precision Installation",
        'tagLine2' => "Performance",
        'tagLine3' => "For every moments"
        ]);
    }

}
