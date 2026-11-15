<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Contact;
use App\Models\Abouts;
use Illuminate\Http\Request;
use App\Models\Layanan;

class HomepageController extends Controller
{
    public function view(){
        $layanans = Layanan::all();
        $contacts = Contact::first();
        $achivements = Achivement::all();

        return view('HomePage',[
        'layanans' => $layanans,
        'contacts' => $contacts,
        'achivements' => $achivements
        ]);
    }

}
