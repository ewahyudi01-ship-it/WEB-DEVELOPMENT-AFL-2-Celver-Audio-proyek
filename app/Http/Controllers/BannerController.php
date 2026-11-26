<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function view()
    {
      return view('/dashboard-editView.Banner.editPageBannerDashboard');
    }

    public function destroy(\Illuminate\Http\Request $request)
    {
    }


    public function store(Request $request)
    {

    }
}
