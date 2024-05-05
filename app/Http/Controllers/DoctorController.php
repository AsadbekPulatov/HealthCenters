<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Services\UploadFile;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UploadFile $uploadFile)
    {

        $doctors = $request->all();
        if ($request->hasFile('image')) {
            $filename = $uploadFile->uploadFile($request->image, 'doctors');
            $doctors['image'] = $filename;
        }
        $doctor = new Doctor();
        $doctor->name = $doctors['name'];
        $doctor->position = $doctors['position'];
        $doctor->image = $doctors['image'];
        $doctor->save();


        return redirect()->route('admin.doctors.index');
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
        $doctors = Doctor::find($id);
        return view('admin.doctors.edit', compact('doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctors = Doctor::find($id);
        if ($doctors->image) {
            UploadFile::deleteFile($doctors->image);
        }

        $uploadedFile = $request->file('image');
        $filename = UploadFile::uploadFile($uploadedFile, 'doctors');
        $doctors->update([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $filename ?? $doctors->image
        ]);
        return redirect()->route('admin.doctors.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doctors = Doctor::find($id);
        if ($doctors->image) {
            UploadFile::deleteFile($doctors->image);
        }
        $doctors->delete();
        return redirect()->route('admin.doctors.index');
    }
}
