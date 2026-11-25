<?php

namespace App\Http\Controllers;

use App\Models\InteriorBanner;
use App\Models\SceneryBanner;
use App\Models\Venue;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function viewVenue()
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

    public function view()
    {
        $portfolios = Venue::all();
        return view('dashboard-editView.Venue.listVenue',[
            'portfolios' => $portfolios
        ] );
    }

    public function create()
    {
        return view('dashboard-editView.Venue.createVenue');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'titlePlace' => 'required|string|max:50|min:1',
        'descriptionPlace' => 'nullable|string|max:1200',
        'image'  => 'nullable|string|max:2048|min:1',
        ]);

        Venue::create($data);

        return redirect('/dashboard/view/list-portfolio/');
    }

    public function destroy(Request $request)
    {
        Venue::destroy($request->id);
        return redirect('/dashboard/view/list-portfolio/');
    }



    public function edit(Venue $portfolio)
    {
        return view('dashboard-editView.Venue.updateVenue', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $portfolio)
    {
        $data = $request->validate([
        'titlePlace' => 'required|string|max:50|min:1',
        'descriptionPlace' => 'nullable|string|max:1200',
        'image'  => 'nullable|string|max:2048|min:1',
        ]);

        $portfolio->update($data);

    return redirect('/dashboard/view/list-portfolio/');
    }
}
