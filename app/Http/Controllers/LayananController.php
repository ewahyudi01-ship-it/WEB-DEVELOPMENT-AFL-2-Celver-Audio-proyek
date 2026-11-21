<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function view()
    {
        $layanans = Layanan::all();

        return view('dashboard-editView.Layanan.listLayanan',[
            'layanans' => $layanans
        ] );
    }

    public function destroy(\Illuminate\Http\Request $request)
    {
    }


    public function store(Request $request)
    {

    }
}
