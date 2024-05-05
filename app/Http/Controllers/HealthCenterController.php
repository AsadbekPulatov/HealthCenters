<?php

namespace App\Http\Controllers;

use App\Models\Health_Center;
use App\Services\UploadFile;
use Illuminate\Http\Request;

class HealthCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $healh_centers = Health_Center::all();
        return view('admin.health_centers.index', compact('healh_centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.health_centers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UploadFile $uploadFile)
    {
        $centers = $request->all();

        if ($request->hasFile('image')) {

            $filename = $uploadFile->uploadFile($request->image, 'healthcenters');

            $centers['image'] = $filename;
        }
        $health_centers = Health_Center::create([
            'name' => $centers['name'],
            'description' => $centers['description'],
            'address' => $centers['address'],
            'phone' => $centers['phone'],
            'working_time' => $centers['working_time'],
            'image' => $centers['image'],
        ]);
        return redirect()->route('admin.health_centers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Health_Center $health_Center)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $health_centers = Health_Center::find($id);
        return view('admin.health_centers.edit', compact('health_centers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $health_Center = Health_Center::find($id);
        if ($health_Center->image) {
            UploadFile::deleteFile($health_Center->image);
        }

        $uploadedFile = $request->file('image');
        $filename = UploadFile::uploadFile($uploadedFile, 'healthcenters');

        $health_Center->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,
            'working_time' => $request->working_time,
            'image' => $filename ?? $health_Center->image
        ]);
//        dd($health_Center);
        return redirect()->route('admin.health_centers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $health_Center = Health_Center::find($id);
        if ($health_Center->image) {
            UploadFile::deleteFile($health_Center->image);
        }
        $health_Center->delete();
        return redirect()->route('admin.health_centers.index');
    }
}
