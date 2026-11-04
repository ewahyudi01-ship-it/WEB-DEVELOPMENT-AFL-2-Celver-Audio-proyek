<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Contact;
use App\Models\Abouts;
use App\Models\Tagline;
use Illuminate\Http\Request;
use App\Models\Layanan;

class HomepageController extends Controller
{
    public function view(){
        $layanans = Layanan::all();
        $abouts = Abouts::first();
        $contacts = Contact::first();
        $achivements = Achivement::first();

        return view('HomePage',[
        'layanans' => $layanans,
        'contacts' => $contacts,
        'achivements' => $achivements,
        'abouts' => $abouts
        ]);
    }

}
