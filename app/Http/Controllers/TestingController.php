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
        return view ('VenuePage',compact('testings'));
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
        testing::create([
            "brands" => "$request->brands",
            "model" => "$request->model",
            "processor" => "$request->processor",
            "ram" => "$request->ram"
        
        ]);

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
        $testing->update([
        'brands'    => $request->brands,
        'model'     => $request->model,
        'processor' => $request->processor,
        'ram'       => $request->ram,
    ]);

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