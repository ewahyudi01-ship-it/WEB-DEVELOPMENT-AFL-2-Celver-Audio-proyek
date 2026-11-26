<?php

namespace App\Http\Controllers;

use App\Models\InteriorBanner;
use App\Models\SceneryBanner;
use App\Models\Venue;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // jgn lupa ini utk delete image

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


    public function index(Request $request) {
        $search = $request->query('search', ''); //'' diggunakan saat user tidak memasukan search apapun, maka '' ini sebagai nilai default yang bertujuan untuk menampilkan semua data, instead mengembalikan null
        $portfolios = Venue::where('titlePlace', 'like',  //ditambahin operator'like' ini karena sebelumnya gaada operator ini maka laravel nya bakal nyari sama persis yang di input di form nya, terus meskipun kamu ketik judul nya sama persis 'qwe' gitu tetap tidak muncul karena di db yang dicari bukan 'qwe' tapi '%'qwe%' dan ngasi function 'like' itu biar bisa munculin judul yang mirip dengan yang kamu search
        '%' . $search . '%')->orderBy('id')->paginate(10)->withQueryString();
        return view('index-search.venueIndex', compact('portfolios'));
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
        'image'  => 'nullable|image|max:2048',
        ]);

        $data['image'] = $request->file('image')
            ->store('venue', 'public');
        Venue::create($data);

        return redirect('/dashboard/view/list-portfolio/');
    }

    public function destroy(Venue $portfolio)
    {
        if ($portfolio->image) { 
        Storage::disk('public')->delete($portfolio->image); 
        }

        $portfolio->delete();    

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
        'image'  => 'nullable|image|max:2048',
        ]);

            if ($request->hasFile('image')) {
                $old = $portfolio->image;
                $portfolio->image = $request->file('image')
                ->store('venue', 'public');
                $portfolio->save();

            if ($old) Storage::disk('public')->delete($old);
            }

            $portfolio->update($data);

    return redirect('/dashboard/view/list-portfolio/');
    }
}
