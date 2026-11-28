<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use Illuminate\Http\Request;
use App\Models\Layanan;

class HomepageController extends Controller
{
    public function view(){                                 //FRAGMENT membuat ketika mau memunculkan data berikut nya misal dari 10 ke 20, maka halaman nya langsung ke section 'serviceSection' di HomePage.blade.php pada baris 39, tanpa FRAGMENT maka malah ke bagian paling atas pov nya walaupun datanya ikut berubah.
        $layanans = Layanan::orderBy('id')->paginate(10)->fragment('serviceSection');
        $achivements = Achivement::orderBy('id')->paginate(6)->fragment('achivementSection');

        return view('HomePage',[
        'layanans' => $layanans,
        'achivements' => $achivements
        ]);
    }

}
