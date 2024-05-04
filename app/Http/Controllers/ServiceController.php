<?php

namespace App\Http\Controllers;

use App\Models\Health_Center;
use App\Models\Services;
use App\Services\UploadFile;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Services::all();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $health_centers=Health_Center::all();
        return view('admin.services.create',compact('health_centers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,UploadFile $uploadFile)
    {

        $services=$request->all();
//dd($services);
        if ($request->hasFile('image')) {

            $filename = $uploadFile->uploadFile($request->image, 'services');

            $services['image'] = $filename;
        }

        $service=new Services();
        $service->health_centers_id=$services['health_centers_id'];
        $service->name=$services['name'];
        $service->description=$services['description'];
        $service->price=$services['price'];
        $service->image=$services['image'];
        $service->save();



        return redirect()->route('admin.services.index');
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
        $services=Services::find($id);
        $health_centers=Health_Center::all();
//        dd($health_centers);
        return view('admin.services.edit',compact('services','health_centers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services=Services::find($id);
        if ($services->image) {
            UploadFile::deleteFile($services->image);
        }

        $uploadedFile = $request->file('image');
        $filename = UploadFile::uploadFile($uploadedFile, 'services');

        $services->update([
            'health_centers_id' => $request->health_centers_id,
            'name' => $request->name,
            'description'=>$request->description,
            'price' => $request->price,
            'image' => $filename ?? $services->image
        ]);
//        dd($health_Center);
        return redirect()->route('admin.services.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $services=Services::find($id);
        if ($services->image) {
            UploadFile::deleteFile($services->image);
        }
        $services->delete();
        return redirect()->route('admin.services.index');
    }
}
