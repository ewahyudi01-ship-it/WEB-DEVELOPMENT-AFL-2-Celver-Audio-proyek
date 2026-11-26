<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Facades\Storage; 

class LayananController extends Controller
{
    public function view()
    {
        $layanans = Layanan::all();

        return view('dashboard-editView.Layanan.listLayanan',[
            'layanans' => $layanans
        ] );
    }

    public function create()
    {
        return view('dashboard-editView.Layanan.createLayanan');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data['image'] = $request->file('image')
            ->store('service', 'public');
        Layanan::create($data);

        return redirect('/dashboard/view/list-layanan/');
    }




    public function edit(Layanan $layanan)
    {
        return view('dashboard-editView.Layanan.updateLayanan', compact('layanan'));
    }


    public function update(Request $request, Layanan $layanan)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $old = $layanan->image;
            $layanan->image = $request->file('image')
                ->store('venue', 'public');
            $layanan->save();

            if ($old) Storage::disk('public')->delete($old);
            }

            $layanan->update($data);

    return redirect('/dashboard/view/list-layanan/');
    }



    public function destroy(Layanan $layanan)
    {
        if ($layanan->image) { 
        Storage::disk('public')->delete($layanan->image); 
        }

        $layanan->delete();    

        return redirect('/dashboard/view/list-layanan/');
    }
}
