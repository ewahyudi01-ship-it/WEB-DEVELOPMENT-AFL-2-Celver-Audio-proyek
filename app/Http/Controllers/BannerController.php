<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SceneryBanner;
use App\Models\InteriorBanner;
use Illuminate\Support\Facades\Storage; 

class BannerController extends Controller
{
    public function view()
    {
      $sceneryBanner = SceneryBanner::first();
      $interiorBanner = InteriorBanner::first();

      return view('/dashboard-editView.Banner.editPageBannerDashboard',[
            'sceneryBanner' => $sceneryBanner,
            'interiorBanner' => $interiorBanner
        ]);
    }

    public function updateScenery(Request $request, SceneryBanner $sceneryBanner)
    {
        $request->validate([
        'image' => 'nullable|image|max:2048',
      ]);

      if ($request->hasFile('image')) {
          $old = $sceneryBanner->image;
          $sceneryBanner->image = $request->file('image')
              ->store('scenery', 'public');
          $sceneryBanner->save();
          if ($old) Storage::disk('public')->delete($old);
    }

    return redirect('/dashboard');
    }
    
    public function updateInterior(Request $request, InteriorBanner $interiorBanner)
    {
      $request->validate([
        'image' => 'nullable|image|max:15240',
      ]);

      if ($request->hasFile('image')) {
          $old = $interiorBanner->image;
          $interiorBanner->image = $request->file('image')
              ->store('interior', 'public');
          $interiorBanner->save();
          if ($old) Storage::disk('public')->delete($old);
    }

    return redirect('/dashboard');
    }

    public function destroy(\Illuminate\Http\Request $request)
    {
    }


    public function store(Request $request)
    {

    }
}
