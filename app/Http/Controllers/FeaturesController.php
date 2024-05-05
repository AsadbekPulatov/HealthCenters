<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $features = Features::all();
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $features = new Features();
        $features->name = $request['name'];
        $features->description = $request['description'];
        $features->save();


        return redirect()->route('admin.features.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $servic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $features = Features::find($id);

//        dd($health_centers);
        return view('admin.features.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $features = Features::find($id);
        $features->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.features.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $features = Features::find($id);
        $features->delete();
        return redirect()->route('admin.features.index');
    }
}
