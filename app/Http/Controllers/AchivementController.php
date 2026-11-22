<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achivement;

class AchivementController extends Controller
{
    public function view()
    {
        $achivements = Achivement::all();
        return view('dashboard-editView.Achivement.listAchivement',[
            'achivements' => $achivements
        ] );
    }

    public function create()
    {
        return view('dashboard-editView.Achivement.createAchivement');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
        'titleDesc' => 'required|string|max:50|min:1',
        'subTitleDesc' => 'nullable|string|max:150',
        'desc'  => 'required|string|max:750|min:1',
        ]);

        Achivement::create($data);

        return redirect('/dashboard/view/list-achivement/');
    }
    public function destroy(Request $request)
    {
        Achivement::destroy($request->id);
        return redirect('/dashboard/view/list-achivement/');
    }

    public function edit(Achivement $achivement)
    {
        return view('dashboard-editView.Achivement.updateAchivement', compact('achivement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achivement $achivement)
    {
        $data = $request->validate([
        'titleDesc' => 'required|string|max:50|min:1',
        'subTitleDesc' => 'nullable|string|max:150',
        'desc' => 'required|string|max:750|min:1',
        ]);

        $achivement->update($data);

    return redirect('/dashboard/view/list-achivement/');
    }

}
