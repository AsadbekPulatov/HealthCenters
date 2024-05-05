<?php

namespace App\Http\Controllers;

use App\Models\Health_Center;
use App\Models\Services;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $services = Services::orderby('id', 'DESC')->get();
        return view('front.index', compact('services'));
    }

    public function about(){
        return view('front.about');
    }

    public function service(Request $request){
        $data = $request->all();
        if (count($data) > 0){
            $services = Services::query();
            if (isset($data['name'])){
                $name = $data['name'];
                $services = $services->where('name', 'LIKE', $name);
            }
            if (isset($data['from']) && isset($data['to'])){
                $from = intval($data['from']);
                $to = intval($data['to']);
                $services = $services->whereBetween('price', array($from, $to));
            }
            $services = $services->get();
        }else{
            $services = Services::orderby('id', 'DESC')->get();
        }
        return view('front.service', compact('services'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function center(Request $request){
        $data = $request->all();
        $services = Services::all();
        if (count($data) > 0){
            $centers = Health_Center::query();
            if (isset($data['name'])){
                $name = $data['name'];
                $centers = $centers->where('name', 'LIKE', $name);
            }
            if (isset($data['address'])){
                $address = $data['address'];
                $centers = $centers->where('address', 'LIKE', $address);
            }
            if (isset($data['service'])){
                $service = $data['service'];
                if ($service != '0')
                $centers = $centers->with('services')->whereHas('services', function ($q) use ($service) {
                    $q->where('name', $service);
                });
            }
            $centers = $centers->get();
        }else{
            $centers = Health_Center::orderby('id', 'DESC')->get();
        }
        return view('front.centers', compact('centers', 'data', 'services'));
    }

    public function center_single($id){
        $center = Health_Center::findorfail($id);
        return view('front.center_single', compact('center'));
    }

    public function service_single($id){
        $service = Services::findorfail($id);
        return view('front.service_single', compact('service'));
    }
}
