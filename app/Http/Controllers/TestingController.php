<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretestingRequest;
use App\Http\Requests\UpdatetestingRequest;
use App\Models\testing;
use Illuminate\Http\Client\Request;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testings = testing::all();
        return view ('formList',compact('testings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
        'brands' => 'required|string|max:150|min:1',
        'model' => 'required|string|max:150|min:1',
        'processor' => 'required|string|max:150|min:1',
        'ram' => 'required|numeric|min:0',
        ]);

        testing::create($data);

        return redirect('/testing');
    }

    /**
     * Display the specified resource.
     */
    public function show(testing $testing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testing $testing)
    {
        return view('formUpdate', compact('testing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, testing $testing)
    {
        $data = $request->validate([
        'brands' => 'required|string|max:150|min:1',
        'model' => 'required|string|max:150|min:1',
        'processor' => 'required|string|max:150|min:1',
        'ram' => 'required|numeric|min:0',
        ]);

        $testing->update($data);

    return redirect('/testing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\Illuminate\Http\Request $request)
    {
        testing::destroy($request->id);
        return redirect('/testing');
    }
}