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

    public function create()
    {
        return view('dashboard-editView.Layanan.createLayanan');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $imageName = basename(
                $request->file('image')->getClientOriginalName()
            );

            if (file_exists(public_path('images/' . $imageName))) {
                return back()->withErrors([
                    'image' => 'The image file name already exists, change the file name!'
                ]);
            }

            $request->file('image')->move(public_path('images'), $imageName);

            $data['image'] = $imageName;
        }

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
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

        $imageName = basename(
            $request->file('image')->getClientOriginalName()
        );

        if ($imageName !== $layanan->image && file_exists(public_path('images/' . $imageName))) {
            return back()->withErrors([
                'image' => 'The image file name already exists, change the file name!'
            ]);
        }

        $request->file('image')->move( public_path('images'), $imageName );

        $data['image'] = $imageName;

        } else {
            unset($data['image']);
        }

        $layanan->update($data);

        return redirect('/dashboard/view/list-layanan/');
    }



    public function destroy(Request $request)
    {
        Layanan::destroy($request->id);

        return redirect('/dashboard/view/list-layanan/');
    }
}
